<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package miffka
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11"> <?php /* this is SEO FOAF */ ?>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php /*
						$logo_img = '';
						if( $custom_logo_id = get_theme_mod('custom_logo') ){
							$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
								'class'    => 'header__logo-img',
								'itemprop' => 'logo',
								'alt'		  => "Ol",
							) );
						}
			if ( is_front_page() || is_home() ) :
			echo $logo_img;
			else :
				?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $logo_img; ?></a>
    <?php
			endif;
			*/ ?>

    <header class="header" test5>
      <div class="navbar">
        <div class="container">
          <div class="navbar-wrap">
            <div class="logo navbar__logo">
              <div class="svg-wrap">
                <?php the_custom_logo(); ?>
              </div>
            </div>
            <!-- /.logo -->
            <div class="navbar__menu">

              <button class=" hamburger hover-target"
                onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened')); body.classList.toggle('open-menu');">
                <span class="span-1"></span>
                <span class="span-2"></span>
              </button>
              <ul class="main-menu">
                <li class="menu-item">
                  <a href="/">Головна</a>
                </li>
                <li class="menu-item">
                  <a href="<?php if(!is_front_page()){ echo get_home_url(); } ?>#portfolio">Портфоліо</a>
                </li>
                <li class="menu-item">
                  <a href="#contact-us">Контакти</a>
                </li>
              </ul>
              <nav class="header-menu">

                <ul class="header-navbar-menu">
                  <li class="menu-item">
                    <a href="/">Головна</a>
                  </li>
                  <li class="menu-item">
                    <a href="<?php if(!is_front_page()){ echo get_home_url(); } ?>#portfolio">Портфоліо</a>
                  </li>
                  <li class="menu-item">
                    <a href="#contact-us">Контакти</a>
                  </li>
                </ul>

                <div class="bottom-block">
                  <div class="contact-footer">
                    <a href="tel:+<?= preg_replace('/[^0-9]/', '', get_field('phone_set', 'option')); ?>"
                      class="phone-footer">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M19.2962 23.4395C19.2881 23.4395 19.2799 23.4395 19.2718 23.4395C15.3637 23.3116 10.7852 19.5233 7.63072 16.3667C4.47212 13.2102 0.683842 8.6297 0.561967 4.73985C0.517279 3.37485 3.86681 0.947511 3.90134 0.923136C4.77072 0.317823 5.73556 0.533135 6.13165 1.08157C6.39978 1.45329 8.93884 5.30048 9.21509 5.7372C9.5015 6.19017 9.45884 6.86454 9.10134 7.54095C8.90431 7.91673 8.25025 9.06642 7.94353 9.60267C8.27462 10.0739 9.15009 11.2297 10.9579 13.0375C12.7677 14.8453 13.9215 15.7228 14.3948 16.0539C14.931 15.7472 16.0807 15.0931 16.4565 14.8961C17.1227 14.5427 17.7931 14.498 18.2501 14.7783C18.7173 15.0647 22.5543 17.6159 22.9077 17.8617C23.2043 18.0709 23.3952 18.4284 23.4338 18.8449C23.4704 19.2653 23.3404 19.7102 23.0702 20.0981C23.0479 20.1306 20.649 23.4395 19.2962 23.4395Z"
                          fill="white" />
                      </svg>
                      <span>
                        <?php if ( get_field('phone_set', 'option') ) : ?>
                        <?= get_field('phone_set', 'option'); ?>
                        <?php endif; ?>
                      </span>
                    </a>
                    <a href="mailto:<?= get_field('email_set', 'option'); ?>" class="mail-footer">
                      <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M0 3.08008V18.9201H22V3.08008H0ZM20.24 7.16039L11 12.3991L1.76 7.16039V6.12227L11 11.361L20.24 6.12227V7.16039Z"
                          fill="white" />
                      </svg>
                      <span><?php if ( get_field('email_set', 'option') ) : ?>
                        <?= get_field('email_set', 'option'); ?>
                        <?php endif; ?>
                      </span>
                    </a>
                  </div>
                  <div class="social-foot">

                    <a href="<?= get_field('instagram', 'option'); ?>">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle opacity="0.3" cx="18" cy="18" r="17.5" stroke="white" />
                        <path
                          d="M14.5628 9.2915C11.6599 9.2915 9.29199 11.6594 9.29199 14.5623V21.4373C9.29199 24.3399 11.6598 26.7082 14.5628 26.7082H21.4378C24.3404 26.7082 26.7087 24.3399 26.7087 21.4373V14.5623C26.7087 11.6593 24.3403 9.2915 21.4378 9.2915H14.5628ZM14.5628 10.6665H21.4378C23.5971 10.6665 25.3337 12.4026 25.3337 14.5623V21.4373C25.3337 23.5966 23.5971 25.3332 21.4378 25.3332H14.5628C12.4031 25.3332 10.667 23.5967 10.667 21.4373V14.5623C10.667 12.4025 12.403 10.6665 14.5628 10.6665ZM22.5837 12.4998C22.0772 12.4998 21.667 12.91 21.667 13.4165C21.667 13.923 22.0772 14.3332 22.5837 14.3332C23.0901 14.3332 23.5003 13.923 23.5003 13.4165C23.5003 12.91 23.0901 12.4998 22.5837 12.4998ZM18.0003 13.4165C15.4773 13.4165 13.417 15.4768 13.417 17.9998C13.417 20.5229 15.4773 22.5832 18.0003 22.5832C20.5234 22.5832 22.5837 20.5229 22.5837 17.9998C22.5837 15.4768 20.5234 13.4165 18.0003 13.4165ZM18.0003 14.7915C19.7801 14.7915 21.2087 16.22 21.2087 17.9998C21.2087 19.7796 19.7801 21.2082 18.0003 21.2082C16.2205 21.2082 14.792 19.7796 14.792 17.9998C14.792 16.22 16.2205 14.7915 18.0003 14.7915Z"
                          fill="white" />
                      </svg>
                    </a>

                    <a href="<?= get_field('youtube', 'option'); ?>">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle opacity="0.3" cx="18" cy="18" r="17.5" stroke="white" />
                        <path
                          d="M17.935 10.896C15.0233 10.896 12.3181 11.1034 10.7744 11.4259C10.7711 11.4268 10.7678 11.4277 10.7646 11.4286C9.60159 11.6892 8.5065 12.5223 8.27596 13.8268C8.27565 13.8286 8.27536 13.8304 8.27507 13.8322C8.09796 14.8836 7.91699 16.2542 7.91699 18.2293C7.91699 20.2007 8.09858 21.535 8.32251 22.6417C8.55869 23.9078 9.62851 24.766 10.8093 25.03C10.815 25.0316 10.8206 25.0331 10.8263 25.0345C12.4374 25.352 15.0663 25.5627 17.9779 25.5627C20.8896 25.5627 23.5199 25.352 25.1313 25.0345C25.137 25.0331 25.1427 25.0316 25.1484 25.03C26.3113 24.7694 27.4064 23.9364 27.637 22.6318C27.6376 22.6286 27.6382 22.6253 27.6388 22.622C27.8131 21.5491 28.0391 20.1798 28.0837 18.2016C28.0837 18.1965 28.0837 18.1914 28.0837 18.1864C28.0837 16.207 27.8571 14.8279 27.6361 13.7355C27.4017 12.4667 26.3307 11.6062 25.1484 11.3418C25.1303 11.3378 25.1121 11.3345 25.0938 11.3319C23.5216 11.1109 20.8471 10.896 17.935 10.896ZM16.2386 14.7927C16.4084 14.7892 16.5839 14.8294 16.7489 14.9225L20.6921 17.1506C21.3572 17.5265 21.3572 18.4748 20.6921 18.8506L16.7489 21.0787C16.0893 21.4509 15.2673 20.9795 15.2673 20.2283V15.7721C15.2673 15.2086 15.7293 14.8033 16.2386 14.7927Z"
                          fill="white" />
                      </svg>
                    </a>
                    <?php if(get_field('facebook', 'option')) { ?>
                    <a href="<?= get_field('facebook', 'option'); ?>">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle opacity="0.3" cx="18" cy="18" r="17.5" stroke="white" />
                        <path
                          d="M23.0649 15.2502H19.8337V13.4169C19.8337 12.4709 19.9107 11.8751 21.2664 11.8751H22.9787V8.96005C22.1455 8.87389 21.3077 8.83172 20.4689 8.83355C17.982 8.83355 16.167 10.3525 16.167 13.141V15.2502H13.417V18.9169L16.167 18.916V27.1669H19.8337V18.9141L22.6442 18.9132L23.0649 15.2502Z"
                          fill="white" />
                      </svg>
                    </a>
                    <?php } ?>
                  </div>
                  <div class="row copyright_menu">
                    <div class="copyright">© ArtiLab, 2022</div>
                  </div>
                </div>

              </nav>
              <a href="tel:+<?= preg_replace('/[^0-9]/', '', get_field('phone_set', 'option')); ?>" class="tel-head">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M19.2962 23.4395C19.2881 23.4395 19.2799 23.4395 19.2718 23.4395C15.3637 23.3116 10.7852 19.5233 7.63072 16.3667C4.47212 13.2102 0.683842 8.6297 0.561967 4.73985C0.517279 3.37485 3.86681 0.947511 3.90134 0.923136C4.77072 0.317823 5.73556 0.533135 6.13165 1.08157C6.39978 1.45329 8.93884 5.30048 9.21509 5.7372C9.5015 6.19017 9.45884 6.86454 9.10134 7.54095C8.90431 7.91673 8.25025 9.06642 7.94353 9.60267C8.27462 10.0739 9.15009 11.2297 10.9579 13.0375C12.7677 14.8453 13.9215 15.7228 14.3948 16.0539C14.931 15.7472 16.0807 15.0931 16.4565 14.8961C17.1227 14.5427 17.7931 14.498 18.2501 14.7783C18.7173 15.0647 22.5543 17.6159 22.9077 17.8617C23.2043 18.0709 23.3952 18.4284 23.4338 18.8449C23.4704 19.2653 23.3404 19.7102 23.0702 20.0981C23.0479 20.1306 20.649 23.4395 19.2962 23.4395Z"
                    fill="white" />
                </svg>
                <span><?= get_field('phone_set', 'option'); ?></span>
              </a>
            </div>
            <!-- /.navmenu -->
          </div>
          <!-- /.navbar-wrap -->
        </div>
        <!-- /.container -->

      </div>
      <!-- /.nav -->
    </header>
    <!-- /.header -->