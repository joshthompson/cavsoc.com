<? $page_title = 'Our Work'; ?>
<? require 'include/top.tpl'; ?>

<?
	$projects = array(
		array(
			'link' => '/projects/wsstudio',
			'image' => './images/work/wsstudio/ws-3-consistency.jpg',
			'title' => 'WS. Studio'
		),
		array(
			'link' => '/projects/thankyouep',
			'image' => './images/projects/kai-jones.jpg',
			'title' => 'Thank You EP'
		),
		array(
			'link' => '/projects/trumpsucks',
			'image' => './images/work/square/trump-sucks-1.1.jpg',
			'title' => 'Trump Sucks'
		),
		array(
			'link' => '/projects/socalledlove',
			'image' => './images/work/square/ebonie-g.jpg',
			'title' => 'So Called Love'
		)
	);
?>

<div class="content-page">
	<div class="page-content">
		<h2 class="cavsoc-heading"><em class="our">Our</em>Work</h2>
	</div>
	<div class="">
		<div class="work grid bottom-margin">
			<? foreach ($projects as $project): ?>
				<a class="work-tile" href="<?=$project['link']?>">
					<div class="work-image" style="background-image: url('<?=$project['image']?>');"></div>
					<h3><?=$project['title']?></h3>
				</a>
			<? endforeach; ?>
		</div>
	</div>
</div>

<? require "include/bottom.tpl"; ?>
