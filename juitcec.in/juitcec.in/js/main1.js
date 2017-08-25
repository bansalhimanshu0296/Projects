jQuery(document).ready(function($){
	//toggle 3d navigation
	$('.cd-3d-nav-trigger').on('click', function(){
		toggle3dBlock(!$('.cd-header').hasClass('nav-is-visible'),0);
	});
	var x=1;
	var y=1;
	var z;
	//select a new item from the 3d navigation
	$('.cd-3d-nav a').on('click', function(){
		var selected = $(this);
		y=selected.parent('li').val();
		selected.parent('li').addClass('cd-selected').siblings('li').removeClass('cd-selected');
		updateSelectedNav('close',Math.abs(x-y));
		x=y;
	});

	$(window).on('resize', function(){
		window.requestAnimationFrame(updateSelectedNav);
	});

	function toggle3dBlock(addOrRemove,z) {
		if(typeof(addOrRemove)==='undefined'){ addOrRemove = true;}
		console.log(z);
		setTimeout(function(){$('.cd-header').toggleClass('nav-is-visible', addOrRemove)},z*500);
		setTimeout(function(){$('.blk').toggleClass('nav-is-visible', addOrRemove);},z*500);
		setTimeout(function(){$('.cd-3d-nav-container').toggleClass('nav-is-visible', addOrRemove)},z*500);
	}

	//this function update the .cd-marker position
	function updateSelectedNav(type,z) {
		var selectedItem = $('.cd-selected'),
			selectedItemPosition = selectedItem.index() + 1, 
			leftPosition = selectedItem.offset().left,
			backgroundColor = selectedItem.data('color');

		$('.cd-marker').removeClassPrefix('color').addClass('color-'+ selectedItemPosition).css({
			'left': leftPosition,
		});
		if( type == 'close') {
			$('.cd-marker').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				toggle3dBlock(false,z);
			});
		}
	}

	$.fn.removeClassPrefix = function(prefix) {
	    this.each(function(i, el) {
	        var classes = el.className.split(" ").filter(function(c) {
	            return c.lastIndexOf(prefix, 0) !== 0;
	        });
	        el.className = $.trim(classes.join(" "));
	    });
	    return this;
	};
});