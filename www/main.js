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
	window.gotoPage = function(page, animate) {
		if (page !== window.currentPage && $("[data-page='" + page + "']").length) {
			window.currentPage = page;
			window.location.hash = page;

			if (animate === undefined || animate) {
				$("[data-page].active").addClass("page-exit");
				$("[data-page='" + page + "']").addClass("page-enter");
				setTimeout(function() { $("[data-page]").removeClass("page-exit page-enter"); }, 1000);
			}

			$("[data-page].active").removeClass("active");
			$("[data-page='" + page + "']").addClass("active").scrollTop(0);
		} else {
			window.location.hash = '';
		}
	};

	// Check base hash
	if (window.location.hash) {
		window.gotoPage(window.location.hash.substr(1), false);
	}

	// Scroll to section
	window.scrollToSection = function(section) {
		$("[data-page].active").animate({scrollTop: $("#" + section).offset().top});
	};

	// Burger menu
	window.burgerMenu = function() {
		$("#burger-menu").addClass("open");
	};
	$("#burger-menu").click(function() {
		$("#burger-menu").removeClass("open");
	});

	// Values
	window.SiteValues = {year: new Date().getFullYear()};
	$("[cv-value]").each(function() {
		$(this).html(window.SiteValues[$(this).attr("cv-value")]);
	});

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