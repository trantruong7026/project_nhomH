<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<?php wp_head(); ?>
</head>
<body>
    <!--Header -->
    <div class="header-main" id="navbar">
        <div class="container">
           <nav class="navbar navbar-expand-lg navbar-light bg-light" >
              <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-landing2 (1).png" alt="" id="logo"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
					<?php 
						 $menuLocations = get_nav_menu_locations(); 
						 $menuID = $menuLocations['main-nav']; 
						 $primaryNav = wp_get_nav_menu_items($menuID); 
					   foreach ( $primaryNav as $navItem ) {
						  echo '<li class="nav-item"> <a class="nav-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a> </li>';
					 }?>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Up</button>
                </form>
              </div>
            </nav>
        </div>
    </div>