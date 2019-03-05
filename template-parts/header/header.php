<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>West Sussex Scouts</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,700,800,900" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
<div id="body_container">
  <div id="header_container">
    <div id="header_content">
        <div id="header_logo">
          <?php if ( function_exists( 'the_custom_logo' ) ) {the_custom_logo();}?>
        </div>
        <div id="header_menu">
          <?php wp_nav_menu(
                array(
                    'theme_location' => 'header-menu',
                    'container_class' => 'header-menu'
                    )
          );?>
        </div>
    </div>
  </div>
<body>
