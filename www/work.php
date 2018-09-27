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
			'link' => '/projects/wsstudio',
			'image' => './images/projects/kai-jones-2.jpg',
			'title' => 'Kai Jones. Studio'
		),
		array(
			'link' => '/projects/banana-hands',
			'image' => './images/projects/banana-hands.jpg',
			'title' => 'Banana Hands'
		),
		array(
			'link' => '/projects/wsstudio',
			'image' => './images/work/wsstudio/ws-3-consistency.jpg',
			'title' => 'WS. Studio'
		),
		array(
			'link' => '/projects/wsstudio',
			'image' => './images/projects/kai-jones-2.jpg',
			'title' => 'Kai Jones. Studio'
		),
		array(
			'link' => '/projects/wsstudio',
			'image' => './images/projects/banana-hands.jpg',
			'title' => 'Banana Hands'
		),
		array(
			'link' => '/projects/wsstudio',
			'image' => './images/work/wsstudio/ws-3-consistency.jpg',
			'title' => 'WS. Studio'
		),
		array(
			'link' => '/projects/wsstudio',
			'image' => './images/projects/kai-jones-2.jpg',
			'title' => 'Kai Jones. Studio'
		),
		array(
			'link' => '/projects/wsstudio',
			'image' => './images/projects/banana-hands.jpg',
			'title' => 'Banana Hands'
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
