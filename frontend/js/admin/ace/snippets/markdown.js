define("ace/snippets/markdown",["require","exports","module"], function(require, exports, module) {
"use strict";

exports.snippetText = "# Markdown\n\
\n\
snippet [\n\
	[${1:text}](http://${2:address} \"${3:title}\")\n\
snippet [*\n\
	[${1:link}](${2:`@*`} \"${3:title}\")${4}\n\
\n\
snippet [:\n\
	[${1:id}]: http://${2:url} \"${3:title}\"\n\
snippet [:*\n\
	[${1:id}]: ${2:`@*`} \"${3:title}\"\n\
\n\
snippet img\n\
	![${1:alttext}](${2:url} \"${3:title}\")\n\
snippet ![\n\
	![${1:alttext}](${2:image} \"${3:title}\")\n\
snippet ![*\n\
	![${1:alt}](${2:`@*`} \"${3:title}\")${4}\n\
\n\
snippet ![:\n\
	![${1:id}]: ${2:url} \"${3:title}\"\n\
snippet ![:*\n\
	![${1:id}]: ${2:`@*`} \"${3:title}\"\n\
\n\
snippet code\n\
	```\n\
	${1:insert code}\n\
	```\n\
\n\
snippet code-full\n\
	``` ${1:language} ${2:title}\n\
	${3:insert code}\n\
	```\n\
snippet bold\n\
	**${1:text}**\n\
	${2}\n\
\n\
snippet youtube\n\
	@[youtube](${1:url})\n\
\n\
snippet twitter\n\
	@[twitter](${1:url})\n\
\n\
snippet vimeo\n\
	@[vimeo](${1:url})\n\
\n\
";
exports.scope = "markdown";

});
