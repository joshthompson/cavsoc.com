(function() {

	// This function resizes the background block so that it always stretched to match the bottom of the screen
	var resize = function() {
		$("#background").css({
			height: $(window).height() - $("footer").height(),
			marginBottom: -$(window).height()
		});
		$("#nav-left, #nav-right").css({
			top: $(window).height() / 2 - $("#nav-left").height() / 2
		});
	};
	resize();
	$(window).resize(resize);

	// Change page
	window.gotoPage = function(page) {
		if (page !== window.currentPage) {
			window.currentPage = page;
			$("[data-page].active").removeClass("active").addClass("page-exit");
			$("[data-page='" + page + "']").addClass("active page-enter").scrollTop(0);
			setTimeout(function() { $("[data-page]").removeClass("page-exit page-enter"); }, 1000);
		}
	};

	// Scroll to section
	window.scrollToSection = function(section) {
		$("[data-page].active").animate({scrollTop: $("#" + section).offset().top});
	};

	// Preload images
	(function preloadImages(img) {
		if (typeof backgrounds[img] == "object") {
			$("<img src='" + backgrounds[img]["src"] + "' />").width(0).height(0).load(function() {
				preloadImages(img + 1);
			});
		}
	})(1);

	// Change background
	var background_timer = 5; // Number of seconds
	var background_update_set_timeout = null;
	function backgroundUpdate(direction) {
		var img = $("#background").is("[data-img]") ? (parseInt($("#background").attr("data-img")) + direction) % backgrounds.length : 0;
		img = img < 0 ? backgrounds.length + img : img;
		$("#background").attr("data-img", img);
		$("#background").css({backgroundImage: "url('" + backgrounds[img]["src"] + "')"});
		clearTimeout(background_update_set_timeout);
		background_update_set_timeout = setTimeout(backgroundUpdate, background_timer * 1000, 1);
	}
	backgroundUpdate(1);
	$("#nav-left").click(function() {
		backgroundUpdate(-1);
	});
	$("#nav-right").click(function() {
		backgroundUpdate(1);
	});

	// Navigate to page
	$("#background").click(function(event) {
		if ($(event.target).is("[href], .link") || $(event.target).closest("[href], .link").length) {
			return false;
		}
		var img = $("#background").is("[data-img]") ? parseInt($("#background").attr("data-img")) : 0;
		window.open(backgrounds[img]["url"], "_blank");
	});

})();

var page