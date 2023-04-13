<?php
    get_header();
?>
    <div class="main-wrapper">
	    <header class="page-intro text-center py-5">
            <img class="logo-tagline" src="/wp-content/themes/Horizon-Properties-custom/assets/images/logo-tagline.png" alt="logo">
		</header>
		<article class="content px-3 py-5 p-md-5">    
            <?php
                if( have_posts() ) {
                    while( have_posts() ) {
                        the_post();
                        the_content();
                    }
                }
            ?>
	    </article>    
<?php
    get_footer();
?>