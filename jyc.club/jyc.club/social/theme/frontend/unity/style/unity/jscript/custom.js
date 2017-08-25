var welcome_banner_image = 'theme/frontend/default/style/default/image/layout/create-a-community-for-photographers.jpg';

$Behavior.default_theme_custom = function() {
	if ($('#welcome_banner').length) {
		$('#welcome_banner').css({
			height: $(window).height()
		});

		var image = new Image(),
			src = welcome_banner_image;
		image.onload = function() {
			$('#welcome_banner').css('background-image', 'url(' + src + ')');
			setTimeout(function(){
				$('#page_core_index_visitor #menu').fadeIn();
			}, 800);
		};
		image.src = src;
	}
};