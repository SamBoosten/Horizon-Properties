<?php
    get_header();
?>
    <div class="main-wrapper">
	    <header class="page-intro text-center py-5">
            <img class="logo-tagline" src="/wp-content/themes/Horizon-Properties-custom/assets/images/logo-tagline.png" alt="logo">
		</header>
		<article class="content px-3 py-5 p-md-5">
            <div class="usp text-center">
                <h1>Waarom Horizon Properties?</h1>
                <div class="horizon-usp text-left row">
                    <ul class="col">
                        <li>Ervaren professionals met diepgaande kennis van de vastgoedmarkt.</li>
                        <li>Persoonlijke aandacht en maatwerk voor elke klant.</li>
                    </ul>
                    <ul class="col">
                        <li>Uitgebreid netwerk van vastgoedprofessionals voor de beste deals en kansen.</li>
                        <li>Innovatieve technologieën en tools om klanten te helpen bij het nemen van weloverwogen beslissingen.</li>
                    </ul>
                </div>
            </div>
            <div class="projecten">
                <div class="kaarten">

                </div>
                <div class="d-flex">
                    <a href="#" class="btn">Te koop</a>
                </div>
            </div>   
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