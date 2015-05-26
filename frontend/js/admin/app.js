var mdSmartArrows = require('markdown-it-smartarrows');
var mdHashtag = require('markdown-it-hashtag');
var mdVideo = require('markdown-it-video');
var mdEmbeds = require('./markdown-it-embeds');
var $     = require('jquery');
var ace = window.ace;

ace.require("ace/ext/language_tools");

window.md = require('markdown-it')({
    linkify: true,
    typographer:  true
}).use(mdSmartArrows)
    .use(mdHashtag)
    .use(mdVideo)
    .use(mdEmbeds);

md.linkify.add('@', {
    validate: function (text, pos, self) {
        var tail = text.slice(pos);

        if (!self.re.twitter) {
            self.re.twitter =  new RegExp(
                '^([a-zA-Z0-9_]){1,15}(?!_)(?=$|' + self.re.src_ZPCc + ')'
            );
        }
        if (self.re.twitter.test(tail)) {
            // Linkifier allows punctuation chars before prefix,
            // but we additionally disable `@` ("@@mention" is invalid)
            if (pos >= 2 && tail[pos - 2] === '@') {
                return false;
            }
            return tail.match(self.re.twitter)[0].length;
        }
        return 0;
    },
    normalize: function (match) {
        match.url = 'https://twitter.com/' + match.url.replace(/^@/, '');
    }
});

// Remember old renderer, if overriden, or proxy to default renderer
var defaultRender = md.renderer.rules.link_open || function(tokens, idx, options, env, self) {
        return self.renderToken(tokens, idx, options);
    };

md.renderer.rules.link_open = function (tokens, idx, options, env, self) {
    // If you are sure other plugins can't add `target` - drop check below
    var aIndex = tokens[idx].attrIndex('target');

    if (aIndex < 0) {
        tokens[idx].attrPush(['target', '_blank']); // add new attribute
    } else {
        tokens[idx].attrs[aIndex][1] = '_blank';    // replace value of existing attr
    }

    // pass token to default renderer.
    return defaultRender(tokens, idx, options, env, self);
};

md.renderer.rules.table_open = function () {
    return '<table class="table table-striped">\n';
};

md.renderer.rules.hashtag_open  = function(tokens, idx) {
    var tagName = tokens[idx].content.toLowerCase();
    return '<a href="/tags/' + tagName + '" class="tag">';
};

$(function(){
    var optionsObject = {
        enableBasicAutocompletion: false,
        enableSnippets: true,
        enableLiveAutocompletion: false
    };
    var editorEl = document.getElementById('editor');
    var previewEl = document.getElementById('preview');
    var myEditor = ace.edit(editorEl);
    myEditor.setTheme("ace/theme/github");
    myEditor.session.setMode("ace/mode/markdown");
    myEditor.setOptions(optionsObject);
    myEditor.$blockScrolling = Infinity;
    myEditor.setShowPrintMargin(false);
    myEditor.renderer.setShowGutter(false);
    myEditor.renderer.setHighlightGutterLine(false);

    myEditor.getSession().on('change', function(e) {
        previewEl.innerHTML = md.render(myEditor.getValue());
        //twttr.widgets.load();
    });

    // On form submit -> clear the editor and the preview, send the data to the backend


});