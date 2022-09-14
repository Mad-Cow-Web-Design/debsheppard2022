<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Deb_Sheppard
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '1639257369453041');
fbq('track', 'PageView');
fbq('track', 'ViewContent');
fbq('track', 'Lead', {  } );
</script>
<noscript>
 <img height="1" width="1"
src="https://www.facebook.com/tr?id=1639257369453041&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
<meta name="facebook-domain-verification" content="monb5fl0h7b4gpvl3i261q588uwyoh" />
<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
	<?php wp_head(); ?>
    <meta name="facebook-domain-verification" content="900dn288qswhhchlsp66k1svg53nld" />

    <!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1021325791862908');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1021325791862908&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'debsheppard' ); ?></a>
    <?php if(! is_page ( array(53079,53087,53677,53683) ) ) : ?>
	<header id="masthead" class="site-header">
		<div class="header-content-wrapper">
            <div class="top-header">
					<span class="top-header-txt">Get My Free Dream Messages E-Kit.</span>
                <div>
					<a class="btn" href="/3-days-to-interpreting-dream-messages/">START NOW!</a>
				</div>
            </div>
            <div class="logo-nav" style="background: url('<?php echo get_template_directory_uri().'/assets/images/header_bg.jpg'; ?>') center / cover no-repeat;">
                <a href="/"><img src="<?php echo get_template_directory_uri().'/assets/images/logo.png'; ?>" alt=""></a>
                <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
            wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'mobile-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
            </div>

		</div>
	</header><!-- #masthead -->
    <?php endif;
