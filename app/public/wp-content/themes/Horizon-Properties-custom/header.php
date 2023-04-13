<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="/wp-content/themes/Horizon-properties-custom/assets/images/logo.png"> 
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    
    
    <?php
    wp_head();
    ?>

</head> 

<body>
    
    <header class="header">	    
	    <!-- <a class="site-title pt-lg-4 mb-0" href="index.html">
            <?php
                echo get_bloginfo('name');
            ?>
        </a> -->
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse d-flex justify-content-between" >
				<a href="/"><img class="logo" src="/wp-content/themes/Horizon-Properties-custom/assets/images/logo.png" alt="logo"></a>	
                <!-- mx-auto -->
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="navigatie" class="navbar-nav">%3$s</ul>'
                        )
                    );
                ?>
			</div>
		</nav>
    </header>