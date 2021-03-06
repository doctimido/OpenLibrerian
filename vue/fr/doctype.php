<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta charset="UTF-8">

	<!-- Bot & SEO -->
		<meta name="Generator" content="OpenLibrerian">
		<meta name="robots" content="<?php echo $robotsInstruction ?>">
		<meta name="author" content="<?php echo PREFIX_ABSOLUTE_LINK; ?>humans.txt">
		<meta name="designer" content="Ajabep">
		<meta name="owner" content="Ajabep">
		<?php if($this->name=='index'){ echo '<meta name="identifier-URL" content="'.PREFIX_ABSOLUTE_LINK.'">';} ?>
		<meta name="coverage" content="Worldwide">
		<meta name="distribution" content="Global">
		<meta name="rating" content="General">
		<title><?php
				if( $this->name == 'index' ) {
					echo 'Liste de objets - ';
				}
				elseif( $this->name == 'tags' ) {
					echo 'Liste de tag - ';
				}
				elseif( $this->name == 'object' ) {
					echo $object->name() . ' - ';
					
					
					switch($this->get['edit']){
						case 'edit':
							echo 'edition';
							break;
						
						case 'delete':
							echo 'suppression';
							break;
						
						default :
							echo 'details';
					}
					
					echo ' - ';
				}
				elseif( $this->name == 'tag' ) {
					echo $tag->name() . ' - ';
					
					
					switch($this->get['edit']) {
						case 'delete':
							echo 'suppression';
							break;
						
						default :
							echo 'details';
					}
					
					echo ' - ';
				}
				elseif( $this->name == 'about' ) {
					echo 'A propos - ';
				}
				elseif( $this->name == 'admin' ) {
					echo 'Espace admin - ';
				}
			?>OpenLibrerian</title>
	<!-- /Bot & SEO -->

	<!-- mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="HandheldFriendly" content="true">
		<meta name="MobileOptimized" content="width">
	<!-- /mobile -->


	<!-- IE Compatibility -->
		<!--[if IE]>
			<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<![endif]-->
		<!--[if IE]>
			<meta http-equiv="X-UA-Compatible" content="IE=10">
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<!-- /IE Compatibility -->

	<!-- IE Apps -->
		<meta name="msapplication-config" content="/IEconfig.xml" />
		<meta name="msapplication-navbutton-color" content="#fff">
		<meta name="msapplication-TileColor" content="#fff">
		<meta name="msapplication-TileImage" content="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/mstile-144x144.1.png">
		<meta name="msapplication-square70x70logo" content="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/mstile-70x70.1.png">
		<meta name="msapplication-square150x150logo" content="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/mstile-150x150.1.png">
		<meta name="msapplication-square310x310logo" content="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/mstile-310x310.1.png">
		<meta name="msapplication-square310x150logo" content="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/mstile-310x150.1.png">
		<!-- taches -->
			<meta name="msapplication-task" content="name=Liste d'objets; action-uri=<?php echo PREFIX_LINK_LANG; ?>; icon-uri=<?php echo PREFIX_ABSOLUTE_LINK; ?>favicon.ico">
			<?php
				if( $this->name == 'object' ) {
					echo '<meta name="msapplication-task" content="name=' . $object->name() . '; action-uri=' . PREFIX_LINK_LANG . '/object/' . $object->ID() . '/' . stringToUrl($object->name()) . '; icon-uri=' . PREFIX_ABSOLUTE_LINK . 'favicon.ico">';
				}
			?>
			<meta name="msapplication-task" content="name=Liste de mots-clés; action-uri=<?php echo PREFIX_LINK_LANG; ?>tags/; icon-uri=<?php echo PREFIX_ABSOLUTE_LINK; ?>favicon.ico">
			<?php
				if( $this->name == 'tag' ) {
					echo '<meta name="msapplication-task" content="name=' . $tag->name() . '; action-uri=' . PREFIX_LINK_LANG . '/tag/' . $tag->ID() . '/' . stringToUrl($tag->name()) . '; icon-uri=' . PREFIX_ABSOLUTE_LINK . 'favicon.ico">';
				}
			?>
			<meta name="msapplication-task" content="name=A propos; action-uri=<?php echo PREFIX_ABSOLUTE_LINK; ?>about/; icon-uri=<?php echo PREFIX_ABSOLUTE_LINK; ?>favicon.ico">
			<meta name="msapplication-task" content="name=Espace admin; action-uri=<?php echo PREFIX_ABSOLUTE_LINK; ?>admin/; icon-uri=<?php echo PREFIX_ABSOLUTE_LINK; ?>favicon.ico">
		<!-- /taches -->
	<!-- / IE Apps -->

	<!-- Apple Apps -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="white-translucent">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-title" content="<?php echo NAME_OF_THE_SYSTEM; ?>">
		<meta name="apple-touch-fullscreen" content="yes">
	<!-- / Apple Apps -->

	<!-- dns-prefetch -->
		<link rel="dns-prefetch" href="http//code.jquery.com">
		<link rel="dns-prefetch" href="http//maxcdn.bootstrapcdn.com">
		<link rel="dns-prefetch" href="<?php echo PREFIX_ABSOLUTE_CDN; ?>">
	<!-- / dns-prefetch -->

	<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="<?php echo PREFIX_LINK; ?>favicon.ico" /><![endif]-->
		<!-- cf. http://ie.microsoft.com/testdrive/Browser/IconEditor/Default.html -->
	<link rel="icon" type="image/x-icon" href="<?php echo PREFIX_LINK; ?>favicon.ico">
	<link rel="icon" type="image/png" href="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/favicon-16x16.1.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/favicon-32x32.1.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/favicon-96x96.1.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/favicon-160x160.1.png" sizes="160x160">
	<link rel="icon" type="image/png" href="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/favicon-196x196.1.png" sizes="196x196">

	<link rel="author" type="text/plain" href="<?php echo PREFIX_ABSOLUTE_LINK; ?>humans.txt">

	<!-- Apple Apps -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/apple-touch-icon-57x57.1.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/apple-touch-icon-114x114.1.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/apple-touch-icon-72x72.1.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/apple-touch-icon-144x144.1.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/apple-touch-icon-60x60.1.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/apple-touch-icon-120x120.1.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/apple-touch-icon-76x76.1.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo PREFIX_ABSOLUTE_CDN; ?>img/apple-touch-icon-152x152.1.png">
	<!-- / Apple Apps -->

	<?php 
		if( $this->name == 'index' ) {
			echo '<link rel="stylesheet" type="text/css" href="' . PREFIX_ABSOLUTE_CDN . 'css/index.2.min.css">';
		}
		elseif( $this->name == 'tags' ) {
			echo '<link rel="stylesheet" type="text/css" href="' . PREFIX_ABSOLUTE_CDN . 'css/tags.2.min.css">';
		}
		elseif( $this->name == 'object' ) {
			echo '<link rel="stylesheet" type="text/css" href="' . PREFIX_ABSOLUTE_CDN . 'css/object.2.min.css">';
		}
		elseif( $this->name == 'tag' ) {
			echo '<link rel="stylesheet" type="text/css" href="' . PREFIX_ABSOLUTE_CDN . 'css/tag.2.min.css">';
		}
		elseif( $this->name == 'about' ) {
			echo '<link rel="stylesheet" type="text/css" href="' . PREFIX_ABSOLUTE_CDN . 'css/about.2.min.css">';
		}
		elseif( $this->name == 'admin' && !$isAdmin && !empty($_GET['resetPassword']) ) {
			echo '<link rel="stylesheet" type="text/css" href="' . PREFIX_ABSOLUTE_CDN . 'css/admin.2.min.css">';
		}
		else {
			echo '<link rel="stylesheet" type="text/css" href="' . PREFIX_ABSOLUTE_CDN . 'css/style.2.min.css">';
		}
		
	?>
</head>
<body role="document" itemscope="itemscope" itemtype="http://schema.org/WebPage">