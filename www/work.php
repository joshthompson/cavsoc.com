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
			'title' => 'Kai Jones'
		),
		array(
			'link' => '/projects/stellamann',
			'image' => './images/work/square/stellamann2.jpg',
			'title' => 'Stella Mann College'
		),
		array(
			'link' => '/projects/socalledlove',
			'image' => './images/work/square/ebonie-g.jpg',
			'title' => 'Ebonie G'
		),
		array(
			'link' => '/projects/trumpsucks',
			'image' => './images/work/square/trump-sucks-1.1.jpg',
			'title' => 'Smith & Sinclair'
		),
		array(
			'link' => '/projects/childrensairambulance',
			'image' => './images/work/square/childrens-air-ambulance.jpg',
			'title' => 'Childrens Air Ambulance'
		),
		array(
			'link' => '/projects/litchisback',
			'image' => './images/work/square/mr-litch.jpg',
			'title' => 'Mr Litch'
		),
		array(
			'link' => '/projects/studio',
			'image' => './images/work/studio/studio-5.jpg',
			'title' => 'Kai Jones'
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
