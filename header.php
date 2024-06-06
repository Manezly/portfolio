<?php
$email_link = get_field('email_link', 'options');
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

	<header class="header container" id="nav">
        <nav>
            <div class="hero_desktop">
                <h2>Leslie Leung</h2>
                <h2>Web Development</h2>
                <span>(Liverpool, UK)</span>
            </div>

            <button class="theme_toggle_mobile theme_toggle" id="theme_toggle">
                <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="13.5" cy="14" r="9" fill="#0D0D0C"/>
                    <path d="M13.5 2.5L13.5 0.5M13.5 27.5L13.5 25.5" stroke="#0D0D0C"/>
                    <path d="M25 14H27M0 14H2" stroke="#0D0D0C"/>
                    <path d="M21.6318 5.86826L23.046 4.45405M3.9541 23.5459L5.36832 22.1317" stroke="#0D0D0C"/>
                    <path d="M5.36823 5.86826L3.95402 4.45405M23.0459 23.5459L21.6317 22.1317" stroke="#0D0D0C"/>
                </svg>
                <svg width="15" height="22" viewBox="0 0 15 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="path-1-inside-1_44_1089" fill="white">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15 1.46484C11.3688 3.10429 8.84168 6.75703 8.84168 11C8.84168 15.243 11.3688 18.8957 15 20.5352C13.6889 21.1271 12.2338 21.4566 10.7017 21.4566C4.9267 21.4566 0.245117 16.775 0.245117 11C0.245117 5.22498 4.9267 0.543396 10.7017 0.543396C12.2338 0.543396 13.6889 0.872875 15 1.46484Z"/>
                    </mask>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15 1.46484C11.3688 3.10429 8.84168 6.75703 8.84168 11C8.84168 15.243 11.3688 18.8957 15 20.5352C13.6889 21.1271 12.2338 21.4566 10.7017 21.4566C4.9267 21.4566 0.245117 16.775 0.245117 11C0.245117 5.22498 4.9267 0.543396 10.7017 0.543396C12.2338 0.543396 13.6889 0.872875 15 1.46484Z" fill="#FBF6F0"/>
                    <path d="M15 1.46484L15.4115 2.37626L17.4302 1.46484L15.4115 0.553429L15 1.46484ZM15 20.5352L15.4115 21.4466L17.4302 20.5352L15.4115 19.6238L15 20.5352ZM9.84168 11C9.84168 7.16434 12.1254 3.8599 15.4115 2.37626L14.5885 0.553429C10.6122 2.34867 7.84168 6.34972 7.84168 11H9.84168ZM15.4115 19.6238C12.1254 18.1401 9.84168 14.8357 9.84168 11H7.84168C7.84168 15.6503 10.6122 19.6514 14.5885 21.4466L15.4115 19.6238ZM14.5885 19.6238C13.4041 20.1585 12.0891 20.4566 10.7017 20.4566V22.4566C12.3785 22.4566 13.9736 22.0958 15.4115 21.4466L14.5885 19.6238ZM10.7017 20.4566C5.47899 20.4566 1.24512 16.2228 1.24512 11H-0.754883C-0.754883 17.3273 4.37442 22.4566 10.7017 22.4566V20.4566ZM1.24512 11C1.24512 5.77727 5.47899 1.5434 10.7017 1.5434V-0.456604C4.37442 -0.456604 -0.754883 4.6727 -0.754883 11H1.24512ZM10.7017 1.5434C12.0891 1.5434 13.4041 1.84152 14.5885 2.37626L15.4115 0.553429C13.9736 -0.0957726 12.3785 -0.456604 10.7017 -0.456604V1.5434Z" fill="#FBF6F0" mask="url(#path-1-inside-1_44_1089)"/>
                    </svg>
                    
            </button>

            <ul class="header_menu">
                <li>
                    <button class="theme_toggle_desktop theme_toggle" id="theme_toggle">
                        <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="13.5" cy="14" r="9" fill="#0D0D0C"/>
                            <path d="M13.5 2.5L13.5 0.5M13.5 27.5L13.5 25.5" stroke="#0D0D0C"/>
                            <path d="M25 14H27M0 14H2" stroke="#0D0D0C"/>
                            <path d="M21.6318 5.86826L23.046 4.45405M3.9541 23.5459L5.36832 22.1317" stroke="#0D0D0C"/>
                            <path d="M5.36823 5.86826L3.95402 4.45405M23.0459 23.5459L21.6317 22.1317" stroke="#0D0D0C"/>
                            </svg>
                            
                            <svg width="15" height="22" viewBox="0 0 15 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="path-1-inside-1_44_1089" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15 1.46484C11.3688 3.10429 8.84168 6.75703 8.84168 11C8.84168 15.243 11.3688 18.8957 15 20.5352C13.6889 21.1271 12.2338 21.4566 10.7017 21.4566C4.9267 21.4566 0.245117 16.775 0.245117 11C0.245117 5.22498 4.9267 0.543396 10.7017 0.543396C12.2338 0.543396 13.6889 0.872875 15 1.46484Z"/>
                                </mask>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15 1.46484C11.3688 3.10429 8.84168 6.75703 8.84168 11C8.84168 15.243 11.3688 18.8957 15 20.5352C13.6889 21.1271 12.2338 21.4566 10.7017 21.4566C4.9267 21.4566 0.245117 16.775 0.245117 11C0.245117 5.22498 4.9267 0.543396 10.7017 0.543396C12.2338 0.543396 13.6889 0.872875 15 1.46484Z" fill="#FBF6F0"/>
                                <path d="M15 1.46484L15.4115 2.37626L17.4302 1.46484L15.4115 0.553429L15 1.46484ZM15 20.5352L15.4115 21.4466L17.4302 20.5352L15.4115 19.6238L15 20.5352ZM9.84168 11C9.84168 7.16434 12.1254 3.8599 15.4115 2.37626L14.5885 0.553429C10.6122 2.34867 7.84168 6.34972 7.84168 11H9.84168ZM15.4115 19.6238C12.1254 18.1401 9.84168 14.8357 9.84168 11H7.84168C7.84168 15.6503 10.6122 19.6514 14.5885 21.4466L15.4115 19.6238ZM14.5885 19.6238C13.4041 20.1585 12.0891 20.4566 10.7017 20.4566V22.4566C12.3785 22.4566 13.9736 22.0958 15.4115 21.4466L14.5885 19.6238ZM10.7017 20.4566C5.47899 20.4566 1.24512 16.2228 1.24512 11H-0.754883C-0.754883 17.3273 4.37442 22.4566 10.7017 22.4566V20.4566ZM1.24512 11C1.24512 5.77727 5.47899 1.5434 10.7017 1.5434V-0.456604C4.37442 -0.456604 -0.754883 4.6727 -0.754883 11H1.24512ZM10.7017 1.5434C12.0891 1.5434 13.4041 1.84152 14.5885 2.37626L15.4115 0.553429C13.9736 -0.0957726 12.3785 -0.456604 10.7017 -0.456604V1.5434Z" fill="#FBF6F0" mask="url(#path-1-inside-1_44_1089)"/>
                            </svg>
                                
                    </button>
                </li>
                <li>
                    <a class="projects_button" href="#projects">Projects</a>
                </li>
                <li>
                    <a href="<?= $email_link; ?>" class="connected_button">
                        <button class="connected_button_text">Contact</button>
                        <button class="connected_button_arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M11.293 4.707L17.586 11H4v2h13.586l-6.293 6.293 1.414 1.414L21.414 12l-8.707-8.707-1.414 1.414z"/>
                        </svg></button>
                    </a>
                </li>
            </ul>
        </nav>

        <section>
            <div class="hero_mobile">
                <h2>Leslie Leung</h2>
                <h2>Web Development</h2>
                <span>(Liverpool, UK)</span>
            </div>
        </section>
    </header>
