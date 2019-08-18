$(".card").hover(function () {
	TweenMax.to($(this), 1, { autoAlpha: 0.7 });
	TweenMax.to($(this) , 0, {color: 'black' } ) ;
	TweenLite.fromTo($(this), 1, {scale: 1}, {scale: 1.008});
},
	function(){
		TweenMax.to($(this), 1, { autoAlpha: 1 });
		TweenMax.to($(this) , 0, {color: 'white' } ) ;

	}
);
        