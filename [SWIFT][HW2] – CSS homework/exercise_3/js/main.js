var fullArticle,
    summaryText,
    summaryMaxChar = 200;

$( document ).ready(function() {
    checkForArticleSummaryLenght();
    addListeners();

});

var addListeners = function() {
    $('#readMore').on('click', function() {
        $('.article-summary')[0].innerText = fullArticle;
        $('#readLess').show()
        $('#readMore').hide()
    });
    $('#readLess').on('click', function() {
        $('.article-summary')[0].innerText = summaryText;
        $('#readLess').hide()
        $('#readMore').show()
    });
}

var checkForArticleSummaryLenght = function() {
    var articlesSummeries = $('.article-summary');

    Array.prototype.forEach.call(articlesSummeries, function(articleSummary){
        fullArticle = articleSummary.innerText;
        if (articleSummary.innerText.length > 200) {
            summaryText = cutDownArticleSummary(articleSummary.innerText);
            updateArticleSummary(articleSummary, summaryText);
        };
    });
}

var cutDownArticleSummary = function(text) {
    var summaryText = text.slice(0, 197);
    return summaryText + '...';
}

var updateArticleSummary = function(summaryNode, summaryText) {
    summaryNode.innerText = summaryText;
}
