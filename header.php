<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="#4285f4">
  	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<meta name="msapplication-TileColor" content="#4285f4">
    <meta name="msapplication-TileImage" content="./images/icons/ms-icon-144x144.png">
    <meta name="msapplication-navbutton-color" content="#4285f4">
    <meta name="theme-color" content="#4285f4">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header>
	<div class="navbar-fixed" id="wrapper-navbar">
		<!-- <a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a> -->
		<nav role="navigation">
			<div class="nav-wrapper">
			<a id="logo-container" class="center " href="/">
              <!-- <img id="front-page-logo" src="./topbanque-logo.svg"></img> -->
              TopBanque
            </a>
            <form class="devsite-search-form right hide-on-med-and-down">
              <div id="searchbox" class="devsite-searchbox"> 
                <input placeholder="Rechercher" type="text" class="browser-default devsite-search-field devsite-search-query" name="q" value=""
                  autocomplete="off">
                <div class="devsite-search-image material-icons"></div>
              </div>
            </form>

            <a href="#" data-activates="nav-mobile" id="button-collapse" class="button-collapse hide-on-med-and-up">
              <i class="material-icons white-text">menu</i>
            </a>
            <a href="#"class="button-collapse show-on-med-and-up" style="cursor: default">
              <i class="material-icons white-text">menu</i>
            </a>
			
			</div><!-- .nav-wrapper -->
			
		</nav><!-- .site-navigation -->
		<ul id="nav-mobile" class="side-nav fixed">
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li class="bold topbanque">
                <a class="collapsible-header waves-effect waves-orange active">
                  <i class="material-icons blue-text">view_comfy</i>Trouvez le produit qui vous convient</a>
                <div class="collapsible-body" style="display: none;">
                  <ul>
                    <li>
                      <router-link to="/card-comparator">
                        <i class="material-icons black-text">account_balance</i>Comparer l'offre des banques
                      </router-link>
                    </li>
                    <li>
                      <router-link to="/card-comparator">
                        <i class="material-icons black-text">credit_card</i>Comparer les cartes de crédit
                      </router-link>
                    </li>
                    <li>
                      <router-link to="/mortgage">
                        <i class="material-icons black-text">home</i>Simuler votre cr&eacute;dit immobilier
                      </router-link>
                    </li>
                    <li>
                      <a href="layout-fullscreen.html">
                        <i class="material-icons pink-text">favorites</i>Votre assurance vie </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li class="bold topbanque">
                <a class="collapsible-header waves-effect waves-orange">
                  <i class="material-icons">
                    <img src="./img/banques/32/bforbank.png">
                  </i>BforBank</a>
                <div class="collapsible-body" style="display: none;">
                  <ul>
                    <li>
                      <a href="layout-fullscreen.html">
                        <i class="material-icons amber-text">star_rate</i>L’avis de la rédaction</a>
                    </li>
                    <li>
                      <ul class="collapsible collapsible-accordion">
                        <li class="bold topbanque">
                          <a class="collapsible-header waves-effect waves-orange">
                            <i class="material-icons black-text">account_balance_wallet</i>Compte courant</a>
                          <div class="collapsible-body" style="display: none;">
                            <ul>
                              <li>
                                <a href="layout-fullscreen.html">
                                  <i class="material-icons">credit_card</i>Le compte courant BforBank</a>
                              </li>
                              <li>
                                <a href="layout-fullscreen.html">
                                  <i class="material-icons">card_giftcard</i>Carte bancaire gratuite à vie</a>
                              </li>
                              <li>
                                <a href="layout-fullscreen.html">
                                  <i class="material-icons">supervisor_account</i>Compte joint</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="layout-fullscreen.html">
                        <i class="material-icons black-text">lock</i>Epargne</a>
                    </li>
                    <li>
                      <a href="layout-fullscreen.html">
                        <i class="material-icons black-text">shopping_basket</i>Crédit à la consommation</a>
                    </li>
                    <li>
                      <a href="layout-fullscreen.html">
                        <i class="material-icons black-text">favorites</i>Assurance vie</a>
                    </li>
                    <li>
                      <a href="layout-fullscreen.html">
                        <i class="material-icons black-text">timeline</i>Bourse – OPCVM</a>
                    </li>
                    <li>
                      <ul class="collapsible collapsible-accordion">
                        <li class="bold topbanque">
                          <a class="collapsible-header waves-effect waves-orange">
                            <i class="material-icons black-text">info</i>Services et actualité</a>
                          <div class="collapsible-body" style="display: none;">
                            <ul>
                              <li>
                                <a href="layout-fullscreen.html">
                                  <i class="material-icons">dashboard</i>Les services BforBank</a>
                              </li>
                              <li>
                                <a href="layout-fullscreen.html">
                                  <i class="material-icons">lock_outline</i>Economies sur vos frais bancaires</a>
                              </li>
                              <li>
                                <a href="layout-fullscreen.html">
                                  <i class="material-icons">smartphone</i>Applications mobile</a>
                              </li>
                              <li>
                                <a href="layout-fullscreen.html">
                                  <i class="material-icons">account_circle</i>Service client</a>
                              </li>
                              <li>
                                <a href="layout-fullscreen.html">
                                  <i class="material-icons">verified_user</i>Protection de vos données</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <ul class="collapsible collapsible-accordion">
                        <li class="bold topbanque">
                          <a class="collapsible-header waves-effect waves-orange">
                            <i class="material-icons black-text">local_offer</i>Offres et promotions</a>
                          <div class="collapsible-body" style="display: none;">
                            <ul>
                              <li>
                                <a href="layout-fullscreen.html">
                                  <i class="material-icons">list</i>Toutes les offres disponibles</a>
                              </li>
                              <li>
                                <a href="layout-fullscreen.html">
                                  <i class="material-icons green-text text-lighten-2">face</i>Parrainage</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li class="bold topbanque">
                <a class="collapsible-header waves-effect waves-orange">
                  <i class="material-icons">
                    <img src="./img/banques/32/fortuneo.png">
                  </i>Fortuneo Banque</a>
                <div class="collapsible-body" style="display: none;">
                  <ul>
                    <li>
                      <a href="layout-fullscreen.html">Full Screen</a>
                    </li>
                    <li>
                      <a href="layout-horizontal-menu.html">Horizontal Menu</a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li class="bold topbanque">
                <a class="collapsible-header waves-effect waves-orange">
                  <i class="material-icons">
                    <img src="./img/banques/32/hellobank.png">
                  </i>HelloBank</a>
                <div class="collapsible-body" style="display: none;">
                  <ul>
                    <li>
                      <a href="layout-fullscreen.html">Full Screen</a>
                    </li>
                    <li>
                      <a href="layout-horizontal-menu.html">Horizontal Menu</a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li class="bold topbanque">
                <a class="collapsible-header waves-effect waves-orange">
                  <i class="material-icons">
                    <img src="./img/banques/32/ingdirect.png">
                  </i>ING Direct</a>
                <div class="collapsible-body" style="display: none;">
                  <ul>
                    <li>
                      <a href="layout-fullscreen.html">Full Screen</a>
                    </li>
                    <li>
                      <a href="layout-horizontal-menu.html">Horizontal Menu</a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li class="bold topbanque">
                <a class="collapsible-header waves-effect waves-orange">
                  <i class="material-icons">
                    <img src="./img/banques/32/monabanq.png">
                  </i>Monabanq</a>
                <div class="collapsible-body" style="display: none;">
                  <ul>
                    <li>
                      <a href="layout-fullscreen.html">Full Screen</a>
                    </li>
                    <li>
                      <a href="layout-horizontal-menu.html">Horizontal Menu</a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li class="bold topbanque">
                <a class="collapsible-header waves-effect waves-orange">
                  <i class="material-icons">
                    <img src="./img/banques/32/boursorama.png">
                  </i>Boursorama Banque</a>
                <div class="collapsible-body" style="display: none;">
                  <ul>
                    <li>
                      <a href="layout-fullscreen.html">Full Screen</a>
                    </li>
                    <li>
                      <a href="layout-horizontal-menu.html">Horizontal Menu</a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        </ul>
	</div><!-- .navbar-fixed end -->
</header>
