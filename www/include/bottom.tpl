<? if (!$spf): ?>
	</div>

	<footer>
		<div id="copyright">© <em>CAV</em>SOC <span cv-value="year"></span></div>
		<nav>
			<a class="spf-link" href="/work">//<em>Our</em>Work</a>
			<a class="spf-link" href="/story">//<em>Our</em>Story</a>
			<a class="spf-link" href="/team">//<em>Our</em>Team</a>
			<div class="burger-menu-icon" onclick="burgerMenu()">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</nav>
	</footer>

	<div id="burger-menu">
		<div class="menu">
			<a href="/"><h3><em>CAV</em>SOC</h3></a>
			<div><a class="nav-link spf-link" href="/work">//<em>Our</em>Work</a></div>
			<div><a class="nav-link spf-link" href="/story">//<em>Our</em>Story</a></div>
			<div><a class="nav-link spf-link" href="/team">//<em>Our</em>Team</a></div>
			<div class="menu-social-links">
				<a class="social-link" href="https://vimeo.com/cavsoc" target="_blank"><span class="socicon-vimeo"></span></a>
				<a class="social-link" href="https://www.instagram.com/cavsoc" target="_blank"><span class="socicon-instagram"></span></a>
				<a class="social-link" href="https://www.twitter.com/cavalrysociety" target="_blank"><span class="socicon-twitter"></span></a>
				<a class="social-link" href="https://www.linkedin.com/company/cavsoc" target="_blank"><span class="socicon-linkedin"></span></a>
			</div>
		</div>
	</div>

	<!-- JAVASCRIPT -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/spf/2.4.0/spf.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="/js/data.js"></script>
	<script type="text/javascript" src="/js/main.js?v=0.19"></script>

	<script>
		spf.init();
	</script>
</body>
</html>
<? endif; ?>

<?
	if ($spf) {
		$content = ob_get_contents();
		ob_clean();
		header("Content-type: application/json");
		echo json_encode(array(
			"title" => "CAVSOC" . ($page_title ? " • " . $page_title : ""),
			"body" => array(
				"main" => $content
			)
		));
	}
?>