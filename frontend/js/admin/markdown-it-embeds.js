// Process @[twitter](status link)

'use strict';

function social_embed(md) {
    function social_return(state, silent) {
        var code,
            serviceEnd,
            serviceStart,
            pos,
            res,
            videoID = '',
            tokens,
            token,
            start,
            oldPos = state.pos,
            max = state.posMax;

        // When we add more services, (youtube) might be (youtube|vimeo|vine), for example
        var EMBED_REGEX = /@\[(twitter)\]\([\s]*(.*?)[\s]*[\)]/im;

        if (state.src.charCodeAt(state.pos) !== 0x40/* @ */) {
            return false;
        }
        if (state.src.charCodeAt(state.pos + 1) !== 0x5B/* [ */) {
            return false;
        }

        var match = EMBED_REGEX.exec(state.src);

        if(!match){
            return false;
        }

        if (match.length < 3){
            return false;
        }


        var service = match[1];
        var videoID = match[2];

        // If the videoID field is empty, regex currently make it the close parenthesis.
        if (videoID === ')') {
            videoID = '';
        }

        serviceStart = state.pos + 2;
        serviceEnd = md.helpers.parseLinkLabel(state, state.pos + 1, false);

        //
        // We found the end of the link, and know for a fact it's a valid link;
        // so all that's left to do is to call tokenizer.
        //
        if (!silent) {
            state.pos = serviceStart;
            state.posMax = serviceEnd;
            state.service = state.src.slice(serviceStart, serviceEnd);
            var newState = new state.md.inline.State(
                service,
                state.md,
                state.env,
                tokens = []
            );
            newState.md.inline.tokenize(newState);

            token = state.push('social', '');
            token.videoID = videoID;
            token.service = service;
            token.level = state.level;
        }

        state.pos = state.pos + state.src.indexOf(')');
        state.posMax = state.tokens.length;
        return true;
    }

    return social_return;
}

function tokenize_twitter(videoID) {
    var embedStart = '<div class="js-embed js-tweet"><blockquote class="twitter-tweet" lang="en"><p lang="en" dir="ltr"></p><a href="';
    var embedEnd = '">Text</a></blockquote><script src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>';
    return embedStart + videoID + embedEnd;
}

function tokenize_social(md) {
    function tokenize_return(tokens, idx) {
        var videoID = md.utils.escapeHtml(tokens[idx].videoID);
        var service = md.utils.escapeHtml(tokens[idx].service);
        if (videoID === '') {
            return '';
        }

        if (service.toLowerCase() === 'twitter') {
            return tokenize_twitter(videoID);
        } else{
            return('');
        }

    }

    return tokenize_return;
}

module.exports = function social_plugin(md) {
    md.renderer.rules.social = tokenize_social(md);
    md.inline.ruler.before('emphasis', 'social', social_embed(md));
};
