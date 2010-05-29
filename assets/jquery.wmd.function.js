jQuery().ready(function() {
	jQuery("textarea[class*='markdown']").wmd({
		"preview": false,
		"helpLink": "http://daringfireball.net/projects/markdown/",
		"helpHoverTitle": "Markdown Help"
	});
});