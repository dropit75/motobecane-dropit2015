
$(function() {
	var pages = $('.section');
	//sectionを全て非表示
	pages.hide();
	//最初のsectionを表示
	pages.eq(0).fadeIn();

	$('.nav a').click(function(event){
		event.preventDefault();
		var nextPage = this.hash;
		pages.hide();
		$(nextPage).fadeIn();
    });
});
