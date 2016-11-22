<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo SITE_CODING?>">
		<meta charset="<?php echo SITE_CODING?>">
		<meta name="description" content="<?php Core_Page::instance()->showDescription()?>">
		<meta name="keywords" content="<?php Core_Page::instance()->showKeywords()?>">
		<meta name="author" content="дизайн html5up.net:@ajlkn, модификация и содержимое olga-prog.info">
		<!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->
		<link rel="shortcut icon" href="/favicon.ico">
    	<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/news/rss/">
		<title><?php Core_Page::instance()->showTitle()?></title>
		<!-- Stylesheets Объединение и минимизация CSS-файлов -->
	    <?php
	    Core_Page::instance()
	        ->prependCss('/upload/hostcms_editorail/css/main.css') ## Часто бывает необходимым добавить CSS-файл первым в списке, чтобы он не переопределял стили макета, такой css можно подключать методом Core_Page::instance()->prependCss()
	        ->css('/upload/hostcms_editorail/css/font-awesome.min.css')
	        ->showCss();
	    ?>
	    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	    <?php Core_Browser::check()?>
	</head>
	<body>
		<!-- Wrapper -->
		<div id="wrapper"> 

			<!-- Main -->
			<div id="main">
			<div class="inner">

				<!-- Header -->
				<header id="header"><a href="index.html" class="logo"><strong>ИТ</strong> КультУрал</a>
				?php
		            // Секция шапки
		            $this->showSection('header');
		        ?</header><!-- end Header -->

				<div id="content"><!-- Content -->
					<div id="colLeft"><?php
			        Core_Page::instance()->execute();
			    	?></div>
				</div> <!-- end Content -->
				
			</div>
			</div> 
			
			<!-- Sidebar -->
			<div id="sidebar">
			<div class="inner">

				<!-- Search -->
				<section id="search" class="alt">
					<form method="post" action="#">
						<input type="text" name="query" id="query" placeholder="Search" />
					</form>
				</section>

				<!-- Menu -->
				<nav id="menu">
					<header class="major">
						<h2>Menu</h2>
					</header>
					<?php
					// Top menu
					$Structure_Controller_Show = new Structure_Controller_Show(
					    Core_Entity::factory('Site', CURRENT_SITE));

					$Structure_Controller_Show->xsl(
					    Core_Entity::factory('Xsl')->getByName('МакетВерхнееМеню')
					)
					    ->menu(1)
					    ->show();
					?>
				</nav>		
							
				<div id="footer">?php
					// Секция подвала
					$this->showSection('footer');
				?</div>
			</div>
			</div>
		</div> <!-- end Wrapper -->

		<!-- Scripts --
			<script src="/upload/hostcms_editorail/js/jquery.min.js"></script>
			<script src="/upload/hostcms_editorail/js/skel.min.js"></script>
			<script src="/upload/hostcms_editorail/js/util.js"></script>
			<!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]--
			<script src="/upload/hostcms_editorail/js/main.js"></script>-->
	</body>
</html>