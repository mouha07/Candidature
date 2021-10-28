<?php
$all_data = cspt_get_all_option_array();
extract($all_data);
$gradient_first = '#ffff00';
$gradient_last  = '#ffff00';
if( function_exists('cspt_get_base_option') ){
	$gradient_colors = cspt_get_base_option('gradient-color');
	$gradient_first  = ( !empty($gradient_colors['first']) ) ? $gradient_colors['first'] : '#ffff00' ;
	$gradient_last   = ( !empty($gradient_colors['last'])  ) ? $gradient_colors['last']  : '#ffff00' ;
}
?>
<?php echo cspt_all_options_values('background'); ?>
<?php echo cspt_all_options_values('typography'); ?>
/* --------------------------------------
 * Custom background color and text color
 * ---------------------------------------*/
/* Custom preheader background color */
.cspt-pre-header-wrapper.cspt-bg-color-custom{
	background-color: <?php echo esc_attr($preheader_bgcolor_custom); ?>;
}
/* Custom footer big area background color */
.cspt-footer-big-area-wrapper.cspt-bg-color-custom{
	background-color: <?php echo esc_attr($footer_big_text_area_bgcolor_custom); ?>;
}
/* Custom Header background color */
.cspt-header-wrapper.cspt-bg-color-custom{
	background-color: <?php echo esc_attr($header_background_color); ?>;
}
/* Custom Menu area background color */
.cspt-header-menu-area.cspt-bg-color-custom{
	background-color: <?php echo esc_attr($menu_background_color); ?>;
}
/* sticky-header-background-color */
.cspt-sticky-on.cspt-sticky-bg-color-custom{
	background-color: <?php echo esc_attr($sticky_header_background_color); ?>;
}
/* Custom Menu text color */
.cspt-sticky-on .cspt-navbar div > ul > li > a{
	color: <?php echo esc_attr($main_menu_sticky_color); ?>;
}
<?php if($service_single_image_hide==true){ ?>
/* Hide single image in service */
.single.single-cspt-service .cspt-featured-wrapper {
	display: none;
}
<?php } ?>
/* --------------------------------------
 * A tag
 * ---------------------------------------*/
a{
	color: <?php echo esc_attr($link_color['normal']); ?>
}
a:hover{
	color: <?php echo esc_attr($link_color['hover']); ?>
}
/* --------------------------------------
 * Titlebar
 * ---------------------------------------*/
.cspt-title-bar-content,
.cspt-title-bar-wrapper{
    min-height: <?php echo esc_attr($titlebar_height); ?>px;
}
.cspt-color-globalcolor,
.vc_icon_element-color-globalcolor,
.cspt-globalcolor,
.globalcolor{
	color: <?php echo esc_attr($global_color); ?> ;
}
.cspt-bg-color-globalcolor.cspt-title-bar-wrapper:before,
.creativesplanet-ele-team .creativesplanet-overlay{
	background-color: <?php echo cspt_hex2rgb($global_color, '0.5') ?>;
}
/* Row BG */
.error404 .cspt-bg-color-globalcolor,
.cspt-stretched-div.cspt-bg-color-globalcolor:before,
.vc_btn3-color-globalcolor.vc_general.vc_btn3:not(.vc_btn3-style-outline):not(.vc_btn3-style-simple),
.cspt-bg-color-globalcolor.vc_column_container .vc_column-inner:before,
.cspt-column.cspt-bg-color-globalcolor:before,
.cspt-row.cspt-bg-color-globalcolor:before{
   background-color: <?php echo esc_attr($global_color); ?>;
}
.cspt-bgimage-yes .cspt-stretched-div.cspt-bg-color-globalcolor:before,
.cspt-bgimage-yes.cspt-bg-color-globalcolor.vc_column_container .vc_column-inner:before,
.cspt-bgimage-yes.cspt-bg-color-globalcolor:before{
	background-color: <?php echo cspt_hex2rgb($global_color, '0.90') ?>;
}
/* Footer Background color set*/
.cspt-bg-color-globalcolor.cspt-bg-image-yes:before{
    background-color: <?php echo cspt_hex2rgb($global_color, '0.9') ?>;
}
.cspt-bg-color-secondarycolor.cspt-bg-image-yes:before{
    background-color: <?php echo cspt_hex2rgb($secondary_color, '0.8') ?>;
}
/* --------------------------------------
 * Cusmom color
 * ---------------------------------------*/
.cspt-globalcolor,
.cspt-skincolor,
.vc_general.vc_btn3.vc_btn3-style-simple.vc_btn3-color-black:hover,
.vc_general.vc_btn3-style-outline.vc_btn3-color-globalcolor,
.cspt-blog-classic .cspt-read-more-btn a:hover,
.cspt-blog-meta .cspt-meta-classic-right .cspt-meta a:hover,
.emphires_recent_posts_widget .cspt-rpw-content .cspt-rpw-title a:hover,
.cspt-blog-classic .cspt-post-title a:hover,
.cspt-search-results-right .cspt-post-title a:hover,
.cspt-metabox .widgettitle,
.error-404:after,
.cspt-contact-box .cspt-ihbox.cspt-ihbox-style-hsbox .cspt-ihbox-heading *,
.cspt-addressbox,
.emphires_recent_posts_widget .cspt-rpw-content .cspt-rpw-date a,
.cspt-portfolio-line-li:before,
.post-navigation .nav-links a:hover,
.cspt-footer-menu li a:hover,
.cspt-comment-date a,
.creativesplanet-sidebar .widget ul a:hover,
.site-footer .widget_recent_entries ul li span,
.cspt-blog-meta.cspt-blog-meta-top i,
.cspt-blog-classic blockquote .authorOrTitle,
.cspt-blog-meta a:hover,
.cspt-blog-classic .entry-title a:hover,
.cspt-blog-meta .cspt-meta-author:before,
.cspt-blog-meta .cspt-meta-date:before,
.cspt-blog-meta .cspt-meta-cat:before,
.cspt-blog-meta .cspt-meta-comments:before,
.cspt-blog-meta .cspt-meta-tags:before,
.cspt-header-style-2 .cspt-header-info-inner > div .cspt-header-box-icon,
.cspt-address-con strong,
.wpb-js-composer .vc_tta.vc_tta-accordion.vc_tta-color-globalcolor .vc_tta-panel-title>a i{
   	color: <?php echo esc_attr($global_color); ?>;
}
.cspt-globalcolor{
	color: <?php echo esc_attr($global_color); ?> !important;
}
/* --------------------------------------
 * Background color
 * ---------------------------------------*/
.cspt-element-static_box-style-1 a.cspt-more-bt,
.single-cspt-service .creativesplanet-sidebar a.btn-link,
.single-cspt-service .creativesplanet-sidebar .widget ul > li.cspt-post-active:before,
.single-cspt-service .creativesplanet-sidebar .widget ul > li.cspt-post-active:after,
.single-cspt-service .creativesplanet-sidebar .widget ul > li:hover:before,
.single-cspt-service .creativesplanet-sidebar .widget ul > li:hover:after,
.cspt-img-bg-effect-single .vc_single_image-wrapper:after,
.cspt-img-bg-effect .vc_single_image-wrapper:after,
.cspt-img-bg-effect .vc_single_image-wrapper:before,
.cspt-ihbox.cspt-ihbox-style-hsbox .cspt-ihbox-subheading h4:after,
body .scroll-to-top,
body .site-footer.cspt-bg-color-blackish .scroll-to-top,

.cspt-ourhistory .cspt-ourhistory-right:before,
.nav-links .page-numbers.current,
.nav-links .page-numbers:hover,
.cspt-sep-heading:after,
.cspt-bg-color-secondarycolor .cspt-main-form input[type=submit],
.vc_btn3.vc_btn3-color-grey.vc_btn3-style-outline:focus,
.vc_btn3.vc_btn3-color-grey.vc_btn3-style-outline:hover,
.post-navigation .nav-links a:hover .cspt-portfolio-nav-icon,
.post-navigation .nav-links .cspt-prev-title:hover,
.post-navigation .nav-links .cspt-next-title:hover,
.footer-wrap .footer-social li a:hover,
.footer-wrap .widget_tag_cloud a:hover,
.creativesplanet-testimonial-tooltip-show-hide .creativesplanet-testimonial-tooltip,
.wpb-js-composer .vc_tta-color-globalcolor.vc_tta-style-classic .vc_tta-panel.vc_active .vc_tta-panel-heading,
.vc_progress_bar.vc_progress-bar-color-globalcolor .vc_single_bar .vc_bar,
.creativesplanet-element-viewtype-carousel .owl-carousel button.owl-dot.active,
.cspt-bg-color-globalcolor{
	background-color: <?php echo esc_attr($global_color); ?>;
}
.cspt-bgimage-over-bgcolor.cspt-bgimage-yes.cspt-bg-color-globalcolor{
	background-color: <?php echo esc_attr($global_color); ?> !important;
}
.cspt-ihbox-style-6 .cspt-ihbox-icon-wrapper,
input:focus, select:focus, textarea:focus,
blockquote{
	border-color: <?php echo esc_attr($global_color); ?>;
}
/* --------------------------------------
 * Border color
 * ---------------------------------------*/
/*==== Theme Special ====*/
.post.sticky,
.vc_general.vc_btn3-style-outline.vc_btn3-color-globalcolor,
.vc_progress_bar.vc_progress-bar-color-globalcolor .vc_single_bar .vc_bar:after,
.vc_icon_element.vc_icon_element-outer.cspt-lightbox-video .vc_icon_element-inner{
	border-color: <?php echo esc_attr($global_color); ?>;
}
.cspt-portfolio-style-2:hover .cspt-portfolio-icon-wrapper{
	border-top-color: <?php echo esc_attr($global_color); ?>;
}
body.wpb-js-composer .vc_tta.vc_general.vc_tta-style-flat .vc_tta-tab.vc_active > a,
.cspt-icon-absulate:after{
	border-bottom-color: <?php echo esc_attr($global_color); ?> !important;
}
body.wpb-js-composer .vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a{
	border-color: <?php echo esc_attr($global_color); ?> !important;
}
/* --------------------------------------
 * Gradient color
 * ---------------------------------------*/
/*==== Theme Special ====*/
.cspt-footer-big-area-wrapper.cspt-bg-color-gradientcolor .cspt-footer-big-area,
.vc_icon_element-color-gradientcolor,
.vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-gradientcolor .vc_icon_element-icon:before,
.vc_btn3-container .vc_btn3-color-gradientcolor:not(.vc_btn3-style-outline),
.vc_btn3-container .vc_general.vc_btn3.vc_btn3-color-gradientcolor.vc_btn3-style-outline:before,
.rev-btn.cspt-gradient-right{
	background-image: -ms-linear-gradient(right, <?php echo esc_attr($gradient_first); ?> 0%, <?php echo esc_attr($gradient_last); ?> 100%);
	background-image: linear-gradient(to right, <?php echo esc_attr($gradient_first); ?> , <?php echo esc_attr($gradient_last); ?> );
}
.cspt-bgimage-over-bgcolor.cspt-bgimage-yes.cspt-bg-color-gradientcolor,
.cspt-stretched-div.cspt-bg-color-gradientcolor:before,
.creativesplanet-ul-list.cspt-ul-type-disc li:after,
.cspt-bg-color-gradientcolor:before,
.vc_row.cspt-bg-color-gradientcolor:before{
	background-image: linear-gradient(to bottom, <?php echo esc_attr($gradient_first); ?> , <?php echo esc_attr($gradient_last); ?> ) !important;
}
.vc_row.cspt-bg-color-gradientcolor.cspt-bg-left-right:before{
	background-image: linear-gradient(to right, <?php echo esc_attr($gradient_first); ?> , <?php echo esc_attr($gradient_last); ?> ) !important;
}
.cspt-bgimage-yes .cspt-stretched-div.cspt-bg-color-gradientcolor:before,
.cspt-row.cspt-bg-color-gradientcolor.cspt-bgimage-yes:before{
	opacity: 0.5;
}
.cspt-gradient-right.rev-btn:hover:after,
.vc_btn3-container .vc_general.vc_btn3.vc_btn3-color-gradientcolor:not(.vc_btn3-style-outline):hover:after{
	background-color: <?php echo esc_attr($gradient_last); ?>;
}
/* --------------------------------------
 * Secondary color
 * ---------------------------------------*/
.cspt-bg-color-globalcolor .cspt-ihbox-style-12.cspt-ihbox h2,
.cspt-service-style-5 .cspt-service-cat a,
.cspt-service-style-6 .cspt-service-cat a,
.cspt-comment-content .cspt-comment-author a:hover{
	color: <?php echo esc_attr($secondary_color); ?>;
}
.cspt-stretched-div.cspt-bg-color-secondarycolor:before, 
.cspt-bg-color-secondarycolor.vc_column_container .vc_column-inner:before, 
.cspt-column.cspt-bg-color-secondarycolor:before, 
.cspt-row.cspt-bg-color-secondarycolor:before,
.cspt-bgimage-over-bgcolor.cspt-bgimage-yes.cspt-bg-color-secondarycolor,
.cspt-stretched-div.cspt-bg-color-secondarycolor:before,
.cspt-bg-color-secondarycolor,
.cspt-bg-color-secondarycolor:before,
.cspt-secondary-color,
.vc_icon_element-background-color-secondarycolor:not(.vc_icon_element-style-){
	background-color: <?php echo esc_attr($secondary_color); ?>;
}
/*=== Secondory BG - with image ===*/
.cspt-bgimage-yes.cspt-bg-color-secondarycolor.vc_column_container .vc_column-inner:before,
.cspt-bgimage-yes.cspt-bg-color-secondarycolor:not(.vc_column_container):before,
.cspt-bgimage-yes.cspt-extended-bg-col.cspt-bg-color-secondarycolor:before,
.cspt-bgimage-yes .cspt-stretched-div.cspt-bg-color-secondarycolor:before{
    background-color: <?php echo cspt_hex2rgb($secondary_color, '0.95') ?>;
}
/* --------------------------------------
 * Contact Form 7
 * ---------------------------------------*/
.main-form [type="text"]::placeholder,
.main-form input[type="email"]::placeholder,
.main-form input[type="password"]::placeholder,
.main-form input[type="tel"]::placeholder,
.main-form input[type="url"]::placeholder,
.main-form select::placeholder,
.main-form textarea::placeholder{
    color: <?php echo esc_attr($global_color); ?>;
    opacity: 1; /* Firefox */
}
.main-form [type="text"]:-ms-input-placeholder{
   color: <?php echo esc_attr($global_color); ?>;
}
.main-form [type="text"]::-ms-input-placeholde{
   color: <?php echo esc_attr($global_color); ?>;
}
.site-title {
    height: <?php echo esc_attr($header_height); ?>px;
}
.site-title img.cspt-main-logo{
	max-height: <?php echo esc_attr($logo_height); ?>px;
}
.site-title img.cspt-responsive-logo{
	max-height: <?php echo esc_attr($responsive_logo_height); ?>px;
}
/*=== Header background color ===*/
.vc_general.vc_btn3-style-outline.vc_btn3-color-globalcolor:hover,
.site-header .cspt-bg-color-globalcolor,
.site-header .cspt-sticky-on.cspt-sticky-bg-color-globalcolor{
    background-color: <?php echo esc_attr($global_color); ?>;
}
/*==== ================================================================================== ====*/

/*==== Theme Special ( Global Backgroud color ) ====*/
.cspt-service-style-5:hover .cspt-service-icon-wrapper,
.cspt-main-form.cspt-form-style-4 .wpcf7-submit,
.cspt-ihbox-style-14, 
.cspt-ihbox-style-18,
.cspt-service-style-3 .cspt-service-btn a,
.creativesplanet-ele-service:not(.cspt-service-style-3) .cspt-service-btn span:before,
.creativesplanet-ele-blog .cspt-read-more-link span:before,
.vc_general.vc_btn3.vc_btn3-style-simple:not(.vc_btn3-icon-left):not(.vc_btn3-icon-right) span:before,
.cspt-blogbox-style-1.creativesplanet-ele-blog .cspt-read-more-link span:before,

.cspt-all-post-list-w,
.cspt-ihbox-style-16-white-bg .cspt-ihbox-icon-wrapper,
.cspt-ihbox-style-16-theme-bg .cspt-ihbox-contents,
.cspt-portfolio-style-2 .cspt-content-wrapper .cspt-link-icon a,
.cspt-portfolio-lines-wrapper,

.creativesplanet-ele-blog .cspt-read-more-link a:hover span:after,

.wpb_text_column .cspt-social-links li a,
body .scroll-to-top:hover,

a.cspt-text-underline:after,
.cspt-footer-widget .mc4wp-form .cspt-footer-newslatter button[type=submit],
.cspt-pricing-table-style-2 .cspt-ptablebox-featured-w,
.cspt-pricing-table-style-2 .cspt-ptablebox-main-icon i,
.cspt-service-style-3 .cspt-service-icon-wrapper,
.cspt-service-style-4 .cspt-service-icon-wrapper,
.cspt-team-style-4 .creativesplanet-box-social-links li a:hover,
.cspt-blogbox-style-3 .cspt-meta-category a,

.wp-block-button__link:hover,

.cspt-blog-classic blockquote,
.reply a:hover,

.vc_btn3.vc_btn3-style-classic.vc_btn3-color-black:hover,
.cspt-home-service-form input[type="submit"]:hover,
.cspt-home-service-form-2 input[type="submit"]:hover,

.cspt-blog-classic-inner .cspt-read-more-link a:hover,

.single-cspt-service .creativesplanet-sidebar .widget ul > li.cspt-post-active a,
.single-cspt-service .creativesplanet-sidebar .widget ul > li:hover a,
.cspt-main-form.cspt-form-style-2 .wpcf7-submit,
.cspt-text-color-white .cspt-service-style-2 .cspt-service-btn .round-btn,

.cspt-pricing-table-style-1 .cspt-ptablebox-main-icon i,
.cspt-blogbox-style-2 .cspt-meta-date,
.cspt-blogbox-style-1 .cspt-featured-container .cspt-meta-date,
.cspt-team-style-2 .creativesplanet-box-social-links li a:hover,
.cspt-team-style-2 .creativesplanet-box-team-position,
.cspt-team-style-3 .creativesplanet-box-team-position,
.cspt-service-style-2 .cspt-services-circle,
.cspt-service-style-1 .cspt-service-icon-wrapper,
.cspt-ihbox-style-4 .cspt-ihbox-icon-wrapper,
.cspt-ihbox-style-2 .cspt-ihbox-icon-wrapper,
.post.sticky .cspt-blog-classic:after,
.cspt-bmi-cal-wrapper .cspt-button,
.vc_btn3.vc_btn3-style-classic.vc_btn3-color-secondarycolor:hover, 
.cspt-consultation-form input[type=submit],
.cspt-footer-widget .cspt-consultation-form button[type=submit],
.cspt-effect2-square .vc_single_image-wrapper:after,
.cspt-divider .cspt-ihbox.cspt-ihbox-style-hsbox .cspt-ihbox-heading:after,
.cspt-ihbox.cspt-ihbox-style-hsbox.cspt-divider .cspt-ihbox-heading:after,
.cspt-bottom-heading,
.cspt-bottom-heading:before,

.cspt-pricing-table-style-2 .cspt-pricing-table-featured-col .cspt-ptablebox-main-icon i,
.cspt-footer-text-area .cspt-social-links a,
.cspt-footer-big-area-wrapper.cspt-bg-color-globalcolor .cspt-footer-big-area,
.cspt-parent-header-style-5 .cspt-footer-big-area .mc4wp-form .btn,
.cspt-element-testimonial-style-5.creativesplanet-element-viewtype-carousel .owl-carousel .owl-nav button.owl-next:hover:before, 
.cspt-element-testimonial-style-5.creativesplanet-element-viewtype-carousel .owl-carousel .owl-nav button.owl-prev:hover:before,
.cspt-slider .vc_images_carousel .vc_carousel-control .icon-next:hover, 
.cspt-slider .vc_images_carousel .vc_carousel-control .icon-prev:hover,
.cspt-blog-classic .cspt-meta-date-top,
.creativesplanet-sidebar .widget .widget-title:after,
.cspt-footer-text-area .cspt-social-links a:hover,
body .cspt-service-style-1 .vc_btn3-color-globalcolor.vc_general.vc_btn3:after,
.cspt-full-btn .vc_btn3 .vc_btn3-icon,
.page-links a:hover,
.page-links > span,
.cspt-page-links a:hover,
.cspt-page-links > span,
input[type=submit]:hover,
.wpcf7-form button:hover,
a.cspt-link:after,
.cspt-blog-classic-inner .cspt-read-more-link a:hover:after,
.cspt-search-results-right .cspt-read-more-link a:after,
.cspt-ihbox.cspt-ihbox-style-3:before,

.wp-block-tag-cloud a:hover,
.wp-block-search .wp-block-search__button,
.search-form button, 
.cspt-team-single .cspt-team-social-links a:hover,
.site-footer .widget-title:after,
.creativesplanet-sidebar .widget_tag_cloud ul li a:hover,
.cspt-text-color-white .cspt-ihbox.cspt-ihbox-style-hsbox .cspt-ihbox-subheading h4:after,
.cspt-row-expand-left .cspt-ihbox.cspt-ihbox-style-hsbox .cspt-ihbox-heading,
.cspt-row-expand-left .cspt-ihbox.cspt-ihbox-style-hsbox .cspt-ihbox-heading:after{
	background-color: <?php echo esc_attr($global_color); ?>;
}
.cspt-element-testimonial-style-4 .cspt-ihbox.cspt-ihbox-style-hsbox .cspt-ihbox-heading .vc_custom_heading:before,
body .cspt-service-style-2:hover .cspt-service-btn .round-btn,
.wpb-js-composer .vc_tta.vc_general.cspt-faq .vc_tta-panel.vc_active .vc_tta-panel-heading{
	background-color: <?php echo esc_attr($global_color); ?> !important;
}

/*=== secondary_color ===*/
.cspt-ihbox-style-10.cspt-ihbox h2,
.cspt-text-color-white .cspt-ihbox-heading .vc_custom_heading em,
.cspt-bg-color-globalcolor .cspt-ihbox-heading .vc_custom_heading em,
.cspt-testimonial-style-3 blockquote,
.cspt-testimonial-style-4 blockquote,
.cspt-testimonial-style-3 .creativesplanet-box-star-ratings i.cspt-active,
.creativesplanet-ele-fid-style-5 .cspt-circle-number,
.cspt-ihbox-style-11 .cspt-ihbox-icon-wrapper,
.cspt-bg-color-globalcolor .creativesplanet-ele-fid-style-1 .cspt-sbox-icon-wrapper,
.cspt-blogbox-style-4 .post-item .cspt-read-more-link a:hover{
	color: <?php echo esc_attr($secondary_color); ?>;
}
.cspt-main-form.cspt-form-style-4 .wpcf7-submit:hover,
.cspt-ihbox-style-16-dark-bg .cspt-ihbox-contents,
.cspt-element-testimonial-style-1.creativesplanet-element-viewtype-carousel .owl-carousel button.owl-dot.active,
.cspt-testimonial-style-1:after,
.cspt-service-style-2 .cspt-service-btn .round-btn,
.cspt-static-box-style-1 .cspt-contentbox,
.cspt-service-style-3:hover .cspt-service-btn a,
.cspt-steps-counter .cspt-ihbox-style-5 .cspt-ihbox-icon-wrapper:before,
.cspt-blogbox-style-3 .cspt-meta-category a:hover,
.cspt-service-style-3:hover .cspt-service-icon-wrapper,
.cspt-service-style-4:hover .cspt-service-icon-wrapper,
.cspt-consultation-form button[type=submit],
.cspt-footer-big-area-wrapper.cspt-bg-color-secondarycolor .cspt-footer-big-area,
.cspt-bg-color-globalcolor .vc_btn3.vc_btn3-color-white.vc_btn3-style-flat:hover,
.cspt-portfolio-style-3 .cspt-portfolio-icon-wrapper,
.cspt-footer-big-area-wrapper.cspt-bg-color-white .cspt-footer-big-area .mc4wp-form .btn,
.cspt-element-testimonial-style-4.creativesplanet-element-viewtype-carousel .owl-carousel button.owl-dot.active,
.vc_general.vc_btn3.vc_btn3-color-secondarycolor,
.cspt-sticky-on.cspt-sticky-bg-color-secondarycolor,
.vc_btn3-color-secondary_color.vc_btn3,
.cspt-promo-image-box-1 .vc_icon_element-inner,
.cspt-steps-counter.cspt-bg-color-globalcolor .cspt-ihbox-style-5  .cspt-ihbox-icon-wrapper:before,
.cspt-main-form.cspt-form-style-1 input[type=submit]:hover,
.cspt-testimonial-style-3 .creativesplanet-box-img:after{
	background-color: <?php echo esc_attr($secondary_color); ?>;
}
body .cspt-ihbox.cspt-ihbox-style-12 .vc_general.vc_btn3{
	background-color: <?php echo esc_attr($secondary_color); ?> !important;
}
.cspt-team-style-4.creativesplanet-ele-team:hover,
.post.sticky .cspt-blog-classic-inner{
	border-color: <?php echo esc_attr($secondary_color); ?>;
}
.cspt-text-color-white .cspt-service-style-2:hover .cspt-service-btn,
.cspt-service-style-1:hover .cspt-service-icon,
.cspt-service-style-2 .cspt-service-btn{
	border-color: <?php echo cspt_hex2rgb($secondary_color, '0.1') ?>;
}

.cspt-portfolio-style-1 .creativesplanet-box-content:after{
	background-color: <?php echo cspt_hex2rgb($secondary_color, '0.8') ?>;
}

/*==== Theme Special ====*/
/* Emphires Special */
.cspt-sortable-list a.cspt-selected,
.cspt-ihbox-style-17 .cspt-ihbox-icon-wrapper i,
.cspt-testimonial-style-6 .creativesplanet-box-star-ratings i.cspt-active,
.cspt-testimonial-style-6 .creativesplanet-box-title,
.cspt-testimonial-style-5 .creativesplanet-box-title,
.cspt-ihbox-style-16 .cspt-ihbox-icon-wrapper i,
.cspt-ihbox-style-15 .cspt-ihbox-icon-wrapper i,
.cspt-service-style-6 .cspt-service-cat a,
.cspt-service-style-5 .cspt-service-cat a,
body.wpb-js-composer .vc_tta.vc_general.vc_tta-style-modern .vc_tta-tab.vc_active > a,
.cspt-testimonial-style-1 .creativesplanet-box-author,
.cspt-header-style-4 .cspt-header-search-btn a:hover,
.cspt-blogbox-style-2 .creativesplanet-box-content .cspt-post-title a:hover,
.cspt-header-style-3 .cspt-right-box .cspt-cart-link:hover,
.cspt-header-style-3 .cspt-header-info-inner .cspt-header-box-icon i,
.cspt-header-style-7 .cspt-header-info-inner .cspt-header-box-icon i,
.cspt-ihbox-style-5 .cspt-ihbox-icon-wrapper,
.cspt-bg-color-blackish .cspt-ihbox-style-10.cspt-ihbox h2,
.cspt-text-color-white .cspt-ihbox-heading-theme .cspt-ihbox-heading .vc_custom_heading em,
.cspt-service-style-2 .cspt-service-cat a,
.cspt-service-style-3 .cspt-service-cat a,
.cspt-ihbox-style-8 .cspt-ihbox-icon i,
.cspt-blogbox-style-2 .cspt-meta-container .cspt-meta-line i,

.cspt-blogbox-style-1 .post-item .cspt-read-more-link a:hover:after,
.cspt-blogbox-style-1 .post-item .cspt-read-more-link a:hover,
.cspt-blogbox-style-2 .post-item .cspt-read-more-link a:hover:after,
.cspt-blogbox-style-2 .post-item .cspt-read-more-link a:hover,

.vc_general.vc_btn3.vc_btn3-style-simple:hover,
.creativesplanet-ele-service .cspt-service-btn a:hover,
.cspt-text-color-white.cspt-bg-color-blackish .cspt-ihbox-heading .vc_custom_heading em,
.widget.widget_recent_entries ul li:hover:before,
.cspt-ihbox-style-9 .cspt-ihbox-icon-wrapper,
.creativesplanet-ele-fid-style-4 .cspt-sbox-icon-wrapper,
.cspt-testimonial-style-3 .creativesplanet-box-title,
.cspt-testimonial-style-4 .creativesplanet-box-title,
.cspt-testimonial-style-4:after,
.cspt-blogbox-style-3 .cspt-meta-container .cspt-meta-line i,

.site-footer.cspt-color-white a:hover,
.cspt-team-style-3 .creativesplanet-box-content .cspt-team-title:hover,

.cspt-portfolio-style-2 .cspt-port-cat a,
.cspt-blogbox-style-1 .creativesplanet-box-content .cspt-post-title a:hover,
.cspt-blogbox-style-1 .cspt-meta-container .cspt-meta-line a:hover,

.cspt-blogbox-style-1 .cspt-meta-container .cspt-meta-line i,
.cspt-footer-widget .cspt-social-links li a:hover,
.cspt-pre-header-wrapper .cspt-social-links a:hover,
.cspt-bg-color-blackish .cspt-ihbox-style-4 .cspt-ihbox-icon-wrapper,
.cspt-home-service-form  .input-box i,
.cspt-contact-widget-lines .cspt-contact-widget-line:before,
.cspt-contact-info li i,

.cspt-team-style-1 .creativesplanet-box-team-position,
.widget .download .item-download i,

.cspt-ihbox-style-7 .cspt-ihbox-icon-wrapper,
body .cspt-video-link-2 .vc_general.vc_btn3 i,
body .cspt-video-link .vc_general.vc_btn3 i,
.cspt-ihbox-heading .vc_custom_heading em,
.creativesplanet-ele-fid-style-1 .cspt-sbox-icon-wrapper i,

.cspt-testimonial-style-2 .creativesplanet-post-item:after,
.cspt-testimonial-style-2 .creativesplanet-box-title,
.cspt-service-style-2 .cspt-service-icon-wrapper,
.cspt-ihbox-style-3.cspt-ihbox h2,
.cspt-service-style-5 .cspt-service-icon-wrapper i,
.cspt-ihbox-style-1 .cspt-ihbox-icon-wrapper
/* End Emphires Special */{
	color: <?php echo esc_attr($global_color); ?>;
}
.cspt-ihbox-style-19 .cspt-ihbox-icon-wrapper img,
.cspt-effect-img-3 .vc_single_image-wrapper:after,
.cspt-team-style-4.creativesplanet-ele-team,
.cspt-footer-widget .cspt-social-links li a:hover,
.cspt-service-style-2 .cspt-service-icon-wrapper,
.cspt-footer-widget .cspt-consultation-form input[type="email"],
.page-links a:hover,
.page-links > span,
.cspt-page-links a:hover,
.cspt-page-links > span{
	border-color: <?php echo esc_attr($global_color); ?>;
}

.cspt-text-color-white .cspt-service-style-2 .cspt-service-btn,
.cspt-service-style-2:hover .cspt-service-btn,
.creativesplanet-ele-fid-style-2,
.cspt-pricing-table-style-1 .cspt-ptablebox-main-icon,
.cspt-testimonial-style-1:before,
.cspt-service-style-1 .cspt-service-icon,
.cspt-ihbox-style-4 .cspt-ihbox-icon{
	border-color: <?php echo cspt_hex2rgb($global_color, '0.1') ?>;
}
.cspt-brdr-btm-effect > .vc_column-inner:before{
	border-bottom-color: <?php echo esc_attr($global_color); ?>;
}
/*==== ================================================================================== ====*/
/*====================================   Dynamic color  ====================================*/
/* White text color */
.cspt-white{
	color: <?php echo esc_attr($white_color); ?>;
}

/* Light blackish color */
/* Emphires Special */
.site-footer.cspt-color-blackish .widget-title,
.cspt-header-style-3 .cspt-right-box .cspt-header-search-form-wrapper .search-form input[type="search"],
.cspt-header-style-3 .cspt-right-box .cspt-header-search-form-wrapper .search-form:after,
.cspt-bg-color-globalcolor .cspt-form-style-1 button:hover,
.cspt-footer-big-right .vc_general.vc_btn3:hover,
.cspt-author-content .cspt-author-name,
.cspt-author-content,

.cspt-footer-big-area-wrapper .cspt-footer-big-title:after,
.cspt-contact-widget-lines .cspt-contact-widget-line,
.site-footer.cspt-bg-color-white h2.widget-title,

.cspt-color-white .widget_categories ul li span,
.cspt-blogbox-style-1 .creativesplanet-box-content .cspt-post-title a,

.cspt-service-style-1 .vc_btn3.vc_btn3-color-default.vc_btn3-style-outline,

.cspt-home-service-form .cspt-select select,
.cspt-home-service-form-2 .cspt-select select,

.cspt-home-service-form input[type="text"],
.cspt-home-service-form input[type="email"],

.cspt-home-service-form-2 input[type="text"],
.cspt-home-service-form-2 input[type="email"],

.cspt-footer-widget .cspt-social-links li a,
.cspt-service-style-2 .vc_btn3-color-globalcolor.vc_general.vc_btn3:hover,

.cspt-home-service-form .cspt-select select,
.error404 .cspt-text-color-blackish h2.page-title,
.error404 .cspt-text-color-blackish a.ts-home-back,
.error-404 .cspt-text-color-blackish .footer-message,
/* End Emphires Special */

.wpb-js-composer .vc_tta.vc_tta-accordion .vc_tta-controls-icon-position-right.vc_tta-panel-title>a,
.cspt-testimonial-style-5 blockquote,
.cspt-pricing-table-style-1 .cspt-pricing-table-featured-col .creativesplanet-ptable-heading,
.cspt-pricing-table-style-1 .creativesplanet-ptable-heading,
.cspt-pricing-table-style-1 .creativesplanet-ptable-price-w,
.cspt-pricing-table-style-1 .creativesplanet-ptable-price,
.cspt-team-style-3 .creativesplanet-box-content .cspt-team-title, 
.cspt-team-style-3 .creativesplanet-box-content .cspt-team-title a,
.vc_general.vc_btn3.vc_btn3-style-simple,
.vc_btn3.vc_btn3-color-white, 
.vc_btn3.vc_btn3-color-white.vc_btn3-style-flat,
.vc_progress_bar.vc_progress-bar-color-globalcolor .cspt-pbar-title, 
.vc_progress_bar.vc_progress-bar-color-globalcolor .vc_label_units,
.cspt-blogbox-style-1 .creativesplanet-box-content .cspt-post-title a,
.cspt-blogbox-style-2 .creativesplanet-box-content .cspt-post-title a,
.cspt-testimonial-style-1 .creativesplanet-box-title,

.cspt-comment-content .cspt-comment-author,
.vc_general.vc_btn3.vc_btn3-style-simple.vc_btn3-color-black,

.vc_btn3.vc_btn3-color-white.vc_btn3-style-outline:focus, 
.vc_btn3.vc_btn3-color-white.vc_btn3-style-outline:hover,

.wp-block-calendar tfoot a,
.cspt-color-blackish,

.cspt-text-color-blackish .cspt-ihbox.cspt-ihbox-style-hsbox .cspt-ihbox-heading .vc_custom_heading, 
.cspt-text-color-blackish h1, 
.cspt-text-color-blackish h2, 
.cspt-text-color-blackish h3, 
.cspt-text-color-blackish h4, 
.cspt-text-color-blackish h5, 
.cspt-text-color-blackish h6,

.cspt-blackish{
	color: <?php echo esc_attr($blackish_color); ?>;
}
.site-content #CCB-calc #calc-header.CCB-calc-header-cc_bmi_shortcode h3,
.site-content #CCB-calc #calc-header.CCB-calc-header-cc_bmi_shortcode h3 a{
	color: <?php echo esc_attr($blackish_color); ?> !important;
}

.cspt-sortable-list a:hover{
	border-color: <?php echo esc_attr($blackish_color); ?>;
}
.cspt-effect-img-4 .vc_single_image-wrapper:after{
	background-color: <?php echo esc_attr($blackish_color); ?>;
}
/* Light background color */
.cspt-sidebar-exists.cspt-sidebar-left .site-content:before, .cspt-sidebar-right .site-content:before,
.cspt-bgimage-over-bgcolor.cspt-bgimage-yes.cspt-bg-color-light, 
.cspt-bg-color-light.vc_column_container.vc_column_container .vc_column-inner:before, 
.cspt-bg-color-light:not(.vc_column_container):before, 
.cspt-extended-bg-col.cspt-bg-color-light:before, 
.cspt-stretched-div.cspt-bg-color-light:before{
	background-color: <?php echo esc_attr($light_bg_color); ?>;
}

/*=== Blackish background color ===*/
/* Emphires Special */
.cspt-portfolio-style-2 .cspt-content-wrapper .cspt-link-icon a:hover,
.wpb_text_column .cspt-social-links li a:hover,
body .scroll-to-top,

.vc_general.vc_btn3.vc_btn3-style-classic.vc_btn3-color-white:hover,
button, 
html input[type=button], 
input[type=reset], 
input[type=submit],

.creativesplanet-ele-blog .cspt-read-more-link a:hover span:after,

a.cspt-text-underline:before,
.cspt-pricing-table-style-2 .cspt-pricing-table-box,
.vc_btn3-color-globalcolor.vc_general.vc_btn3:not(.vc_btn3-style-outline):hover,
.cspt-pricing-table-style-2 .cspt-pricing-table-featured-col .vc_btn3-color-globalcolor.vc_general.vc_btn3:not(.vc_btn3-style-outline):hover,
.cspt-pricing-table-style-2 .vc_btn3-color-globalcolor.vc_general.vc_btn3:not(.vc_btn3-style-outline),

.search-form button:hover,
.cspt-bg-color-light .cspt-service-style-2:hover .cspt-service-btn .round-btn,

.cspt-team-single .cspt-team-social-links a,
.cspt-blog-classic-inner .cspt-read-more-link a,
.widget_categories ul li span,

.cspt-service-style-1:hover .cspt-service-icon-wrapper,

.cspt-main-form.cspt-form-style-2 .wpcf7-submit:hover,

.vc_general.vc_btn3.vc_btn3-style-simple:after,
.cspt-team-style-2 .cspt-icons .cspt-team-info-icons-plus,
.cspt-team-style-2 .creativesplanet-box-social-links li a,

.vc_btn3.vc_btn3-style-classic.vc_btn3-color-black,
.cspt-home-service-form-2 input[type="submit"],
.cspt-home-service-form input[type="submit"],
.cspt-footer-big-area .mc4wp-form button[type=submit],
.cspt-header-style-2 .cspt-cart-details:hover .cspt-cart-count,
.cspt-blogbox-style-1 .post-item .vc_general.vc_btn3.vc_btn3-color-secondarycolor:hover,
.vc_btn3-color-globalcolor.vc_general.vc_btn3.vc_btn3-style-flat:hover,
/* End Emphires Special */

.reply a,
.site-header .cspt-bg-color-blackish, 
.site-header .cspt-sticky-on.cspt-sticky-bg-color-blackish,
.cspt-bgimage-over-bgcolor.cspt-bgimage-yes.cspt-bg-color-blackish, 
.cspt-stretched-div.cspt-bg-color-blackish:before, 
.cspt-bg-color-blackish, 
.cspt-bg-color-blackish:before, 
.cspt-blackish-color,
.cspt-bgimage-over-bgcolor.cspt-bgimage-yes.cspt-bg-color-blackish, 
.cspt-bg-color-blackish.vc_column_container .vc_column-inner:before, 
.cspt-bg-color-blackish:not(.vc_column_container):before, 
.cspt-extended-bg-col.cspt-bg-color-blackish:before, 
.cspt-stretched-div.cspt-bg-color-blackish:before,
.cspt-footer-big-area .mc4wp-form .btn,
.cspt-blackish-bg{
	background-color: <?php echo esc_attr($blackish_bg_color); ?>;
}
.cspt-bgimage-yes.cspt-bg-color-blackish.vc_column_container .vc_column-inner:before, 
.cspt-bgimage-yes.cspt-bg-color-blackish:not(.vc_column_container):before, 
.cspt-bgimage-yes.cspt-extended-bg-col.cspt-bg-color-blackish:before, 
.cspt-bgimage-yes .cspt-stretched-div.cspt-bg-color-blackish:before{
	background-color: <?php echo cspt_hex2rgb($blackish_bg_color, '0.95') ?>;
}
.cspt-blogbox-style-1 .cspt-featured-wrapper:before{
	background-color: <?php echo cspt_hex2rgb($blackish_bg_color, '0.75') ?>;
}

.cspt-pricing-table-style-1 .vc_btn3.vc_btn3-size-md:hover,
.cspt-footer-widget .cspt-social-links li a,
.cspt-service-style-1 .vc_btn3.vc_btn3-color-default.vc_btn3-style-outline:hover{
	border-color: <?php echo esc_attr($blackish_bg_color); ?>;
}
.error404 .cspt-text-color-white h2.page-title,
.error404 .cspt-text-color-white a.ts-home-back,
.error-404 .cspt-text-color-white .footer-message{
    color: #fff;
}

/* Emphires Special */
.cspt-home-service-form-2 input[type="email"]::placeholder,
.cspt-home-service-form-2 input[type="text"]::placeholder,

.cspt-home-service-form input[type="email"]::placeholder,
.cspt-home-service-form input[type="text"]::placeholder{
    color: <?php echo esc_attr($blackish_color); ?>;
    opacity: 1; 
}
.cspt-home-service-form-2 input[type="email"]::-webkit-input-placeholder,
.cspt-home-service-form-2 input[type="text"]::-webkit-input-placeholder, 

.cspt-home-service-form input[type="email"]::-webkit-input-placeholder,
.cspt-home-service-form input[type="text"]::-webkit-input-placeholder {
    color: <?php echo esc_attr($blackish_color); ?>;
}
.cspt-home-service-form-2 input[type="email"]:-ms-input-placeholder,
.cspt-home-service-form-2 input[type="text"]:-ms-input-placeholder,

.cspt-home-service-form input[type="email"]:-ms-input-placeholder,
.cspt-home-service-form input[type="text"]:-ms-input-placeholder{
    color: <?php echo esc_attr($blackish_color); ?>;
}
/* End Emphires Special */

/*====================================  End Dynamic color  ====================================*/
/*====================================  woocommerce  ====================================*/
.woocommerce-info, .woocommerce-message{
	border-top-color: <?php echo esc_attr($global_color); ?>;
}
.woocommerce-info::before,
.woocommerce ul.cart_list li ins,
.woocommerce ul.product_list_widget li ins{
	color: <?php echo esc_attr($global_color); ?>;
}
.single-product .entry-summary .product_meta .posted_in, 
.single-product .entry-summary .product_meta .sku_wrapper{
	color: <?php echo esc_attr($blackish_bg_color); ?>;
}
.woocommerce-product-search [type=submit],

.woocommerce-form-coupon button[type=submit]:hover, 
.woocommerce #payment #place_order, 
.woocommerce-page #payment #place_order,
.woocommerce #review_form #respond .form-submit input,
.woocommerce .woocommerce-error .button:hover, 
.woocommerce .woocommerce-info .button:hover, 
.woocommerce .woocommerce-message .button:hover, 
.woocommerce-page .woocommerce-error .button:hover, 
.woocommerce-page .woocommerce-info .button:hover, 
.woocommerce-page .woocommerce-message .button:hover,
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
.woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range,
.woocommerce .widget_shopping_cart .buttons a:not(.wcppec-cart-widget-button), 
.woocommerce.widget_shopping_cart .buttons a:not(.wcppec-cart-widget-button),
.woocommerce .widget_price_filter .price_slider_amount .button,
.woocommerce .cart .button, 
.woocommerce .cart input.button,
#add_payment_method .wc-proceed-to-checkout a.checkout-button, 
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button, 
.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
.woocommerce div.product form.cart .button,
.woocommerce div.product .woocommerce-tabs ul.tabs li a,
.woocommerce ul.products li.product .button{
	background-color: <?php echo esc_attr($global_color); ?>;
}

.widget_product_categories ul li .count,
.woocommerce-form-coupon button[type=submit],
.woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content,
.woocommerce .widget_price_filter .price_slider_amount .button:hover,
.woocommerce #review_form #respond .form-submit input:hover,
.woocommerce .woocommerce-error .button, 
.woocommerce .woocommerce-info .button, 
.woocommerce .woocommerce-message .button, 
.woocommerce-page .woocommerce-error .button, 
.woocommerce-page .woocommerce-info .button, 
.woocommerce-page .woocommerce-message .button,
.woocommerce .woocommerce-error .button:hover, 
.woocommerce .woocommerce-info .button:hover, 
.woocommerce .woocommerce-message .button:hover, 
.woocommerce-page .woocommerce-error .button:hover, 
.woocommerce-page .woocommerce-info .button:hover, 
.woocommerce-page .woocommerce-message .button:hover,
.woocommerce .cart .button:hover, 
.woocommerce .cart input.button:hover, 
#add_payment_method .wc-proceed-to-checkout a.checkout-button:hover, 
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, 
.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover, 
.woocommerce div.product form.cart .button:hover,  
.woocommerce ul.products li.product .button:hover{
	background-color: <?php echo esc_attr($blackish_bg_color); ?>;
}

.woocommerce-info,
.woocommerce-message {
    border-top-color: <?php echo esc_attr($global_color); ?>;
}

/* Booking calendar 2 */
body table.booked-calendar td.today:hover .date span,
#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a, 
ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a:hover, 
body #booked-profile-page input[type=submit].button-primary, 
body table.booked-calendar input[type=submit].button-primary, 
body .booked-list-view button.button, 
body .booked-list-view input[type=submit].button-primary, body .booked-list-view button.button, 
body .booked-list-view input[type=submit].button-primary, 
body .booked-modal input[type=submit].button-primary, 
body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button, 
body #booked-profile-page .booked-profile-appt-list .appt-block.approved .status-block, 
body #booked-profile-page .appt-block .google-cal-button > a, 
body .booked-modal p.booked-title-bar, 
body table.booked-calendar td:hover .date span, 
body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active, 
body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover, 
.booked-ms-modal .booked-book-appt,
body table.booked-calendar thead tr:first-child th{
	background-color: <?php echo esc_attr($global_color); ?> !important;
}

body table.booked-calendar td.today .date span,
body table.booked-calendar thead tr:first-child th {    
    border-color: <?php echo esc_attr($global_color); ?> !important;
}

/*====================================  End woocommerce  ====================================*/
/* * * * *  MENU AND BREAKPOINT CSS  * * * * * */
/*====================================  Max Width for dynamic breakpoint  ====================================*/
@media (max-width: <?php echo esc_attr($responsive_breakpoint); ?>px){
	.cspt-header-top-area > .container{
		position: relative;
	}
	.cspt-header-style-2 .cspt-right-side,
	.cspt-header-info-inner,
	.something{
		display: none;
	}
	.navbar-expand-lg .navbar-nav{
		-ms-flex-direction: unset !important;
		flex-direction: unset !important;
	}
	.cspt-header-menu-area-inner,
	.cspt-navbar{
	    display: block !important;
	}
	.nav-menu-toggle{
	    display: block;
	    position: absolute;
	    right: 0px;
	    top: 50%;
	    -webkit-transform: translateY(-50%);
	    -ms-transform: translateY(-50%);
	    transform: translateY(-50%);
	    background-color: transparent;
	    padding: 0;
	    font-size: 35px;
	    line-height: 35px;
	    color: #2c2c2c;
	    width: 40px;
	}
	.cspt-navbar > div{
		background-color: #fff;
	}
	.sub-menu{
		display: none;
	}
	.cspt-header-menu-area-wrapper{
		min-height: auto !important;
	}
	.closepanel{
		position: absolute;
		z-index: 99;
		right: 35px;
		top: 25px;
		display: block;
		width: 30px;
		height: 30px;
		line-height: 30px;		
		border-radius: 50%;
		text-align: center;
		cursor: pointer;
		font-size: 35px;
		color: #fff;
	}
	.admin-bar .closepanel{
		top: 45px;
	}
	/* Responsive menu */
	.cspt-navbar > div {
	    background-color: #fff;
	    position: fixed;
		top: 0;
		right: 0;
	    z-index: 1000;
	    width: 300px;
	    height: 100%;
	    padding: 0;
	    display: block;
	    background-color: #222;
	    -webkit-transition: transform 0.4s ease;
	    transition: transform 0.4s ease;
	    -webkit-transform: translateX(400px);
	    -ms-transform: translateX(400px);
	    transform: translateX(400px);
	    -webkit-backface-visibility: hidden;
	    backface-visibility: hidden;
	    visibility: hidden;
	    opacity: 0
	}
	.cspt-navbar > div.active {
	    -webkit-transform: translateX(0);
	    -ms-transform: translateX(0);
	    transform: translateX(0);
	    visibility: visible;
	    opacity: 1;
		overflow-y: scroll;
	}
	.cspt-navbar > div > ul{
		padding: 90px 0;
	}
	.cspt-navbar > div > ul li a {
	    color: #fff !important;
	    padding: 15px 25px;
	    height: auto;
	    display: inline-block;
	}
	.cspt-navbar > div > ul ul {
	    padding-left: 1em;
	    overflow: hidden;
	    display: none;
	}
	ul .sub-menu.show,
	ul .children.show {
	    display: block;
	}
	.cspt-navbar li{
		position: relative;
	}
	.cspt-navbar ul.menu > li{
		border-bottom: 1px solid rgba(204, 204, 204, 0.10);
	}
	.sub-menu-toggle{
	    display: block;
	    position: absolute;
	    right: 25px;
	    top: 15px;
	    cursor: pointer;
	    color: rgba(255, 255, 255, 0.80);
	}
	.cspt-navbar ul ul{
		background-color: transparent !important;
	}
	.cspt-header-style-2 .cspt-header-top-area > .container,
	.cspt-header-style-2 .cspt-sticky-logo-no{
		position: relative;
	}
	/* Reset Sticky */
	.cspt-header-style-1 .cspt-header-wrapper.cspt-sticky-on,
	.cspt-header-style-2 .cspt-header-menu-area{
		position: static !important;
		width: auto !important;
	}
	.cspt-header-style-1 .cspt-header-wrapper > .container > .d-flex{
		position: relative;
	}
	.cspt-header-style-1 .cspt-header-search-btn {	
	    position: absolute;
	    right: 60px;
	}

	.cspt-header-style-1  .cspt-right-box{
		display: none;
	}
	/*==== cspt-header-style-2 ====*/
	.cspt-header-style-2 .cspt-header-info-inner{
		display: none !important;
	}
	.cspt-header-style-2 .cspt-header-overlay{
		background-color: <?php echo esc_attr($global_color); ?>;
	}
	.cspt-header-style-2 .site-title{
		text-align: left;
	}
	.cspt-header-style-2 .cspt-header-top-area > .container > .d-flex{
		display: block !important
	}
	.cspt-header-style-2 .cspt-header-top-area > .container{
		padding: 0;
	}
	.cspt-header-style-2 .site-branding {
	    margin-left: 0px;
	}

	/*=== cspt-header-style-3 ===*/
	.cspt-header-style-3 .cspt-header-search-btn:before,
	.cspt-header-style-3 .cspt-right-box{
		display: none;
	}
	.cspt-header-style-3 .cspt-header-top-area > .container{
	    margin: 0 50px;
	    padding: 0;
	    max-width: none;
	    width: auto;
	    position: relative;
	}
	.cspt-header-style-3 .cspt-pre-header-wrapper > .container{
		max-width: none;
	    width: auto;
	    margin: 0 50px;
	    padding: 0;
	}

	/*=== cspt-header-style-4 ===*/

	.cspt-header-style-4 .cspt-right-box{
		display: none;
	}
	.cspt-header-style-4 .nav-menu-toggle{
	    color: #fff;
	}
	.cspt-header-style-4 .cspt-header-content,
	.cspt-header-style-5 .cspt-header-content,
	.cspt-header-style-6 .cspt-header-content{
		margin: 0 30px;
		position: relative;
	}



	.cspt-header-style-4 .cspt-title-bar-content{
		padding: 0px;
		padding-top: <?php echo esc_attr($header_height); ?>px;
	}

	/*=== cspt-header-style-5 ===*/
	.cspt-header-style-5 .cspt-header-wrapper > .container {
	    max-width: none;
	}
	.cspt-header-style-5 .cspt-header-wrapper > .container .col-lg-9,
	.cspt-header-style-5 .cspt-header-wrapper > .container .col-lg-3{
		flex: none;
		max-width: none;
		width: auto;
		padding-right: 0px;
   		padding-left: 0px;
	}
	.cspt-header-style-5 .cspt-header-wrapper > .container .col-lg-9{
		margin-left: auto!important;
	}	

	.cspt-header-style-5 .cspt-contact-info-wrapper,
	.cspt-header-style-5 .cspt-right-box,
	.cspt-header-style-5 .cspt-header-button-wrapper{
		display: none;
	}
	.cspt-header-style-5 .cspt-toparea{
		display: none !important;
	}
	.cspt-header-search-form-wrapper .search-form {
	    margin: 0 70px;
	}
	.cspt-mobile-search{
		display: block;
	}
	.cspt-mobile-search .cspt-header-search-btn{
		display: block;
		position: absolute;
		right: 60px;
		top: 50%;
		-webkit-transform: translateY(-50%);
		-ms-transform: translateY(-50%);
		transform: translateY(-50%);
	}
	/*=== cspt-header-style-6 ===*/
	.cspt-header-style-6 .cspt-right-box,
	.cspt-header-style-6 .cspt-header-button-wrapper{
		display: none;
	}
	.cspt-header-style-6 .nav-menu-toggle{
		color: #fff;
	}


	/*=== Responsive Logo ===*/
	.cspt-responsive-logo-yes .cspt-sticky-logo,
	.cspt-responsive-logo-yes .cspt-main-logo{
		display: none;
	}
	.cspt-responsive-logo-yes .cspt-responsive-logo{
		display: inline-block;
	}
	/*=== Responsive header background color ===*/
	.cspt-responsive-header-bgcolor-globalcolor .cspt-header-wrapper{
		background-color: <?php echo esc_attr($global_color); ?> !important;
	}
	.cspt-responsive-header-bgcolor-white .cspt-header-wrapper{
		background-color: #fff !important;
	}
	.cspt-responsive-header-bgcolor-blackish .cspt-header-wrapper{
		background-color: #222 !important;
	}
	.cspt-cart-wrapper{
		display: none !important
	}
}
/*====================================  End Max Break Point  ====================================*/
/*====================================  Min Width for dynamic breakpoint  ====================================*/
@media (min-width: <?php echo esc_attr($responsive_breakpoint); ?>px) {
	.cspt-responsive-logo{
		display: none;
	}
	.nav-menu-toggle,
	.something{
		display: none;
	}
	.cspt-sticky-on .site-title img.cspt-main-logo,
	.site-title img.cspt-sticky-logo{
		max-height: <?php echo esc_attr($sticky_logo_height); ?>px;
	}
	.cspt-sticky-on.cspt-header-wrapper{
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	}
	.cspt-navbar > div > ul > li,
	.cspt-navbar > div > ul > li > a{
	    line-height: <?php echo esc_attr($header_height); ?>px !important;
	    height: <?php echo esc_attr($header_height); ?>px;
	}
	.cspt-sticky-on .cspt-navbar > div > ul > li,
	.cspt-sticky-on .cspt-navbar > div > ul > li > a,
	.cspt-sticky-on .site-title {
	    line-height: <?php echo esc_attr($sticky_header_height); ?>px !important;
	    height: <?php echo esc_attr($sticky_header_height); ?>px;
	}
	.cspt-navbar ul > li > ul > li.current-menu-item > a,
	.cspt-navbar ul > li > ul li.current_page_item > a,
	.cspt-navbar ul > li > ul li.current_page_ancestor > a,
	.cspt-navbar > div > ul > li:hover > a,
	.cspt-navbar > div > ul > li.current_page_item > a,
	.cspt-navbar > div > ul > li.current-menu-parent > a {
	   color: <?php echo esc_attr($global_color); ?>;
	}
	.cspt-navbar ul > li > ul li.current_page_item > a:before,
	.cspt-navbar ul > li > ul li.current_page_ancestor > a:before,
	.cspt-navbar ul > li > ul li.current_page_parent > a:before{
		 background-color: <?php echo esc_attr($global_color); ?>;
	}
	.cspt-navbar ul > li > ul li:hover > a {
	   color: #ffffff !important;
	}
	.cspt-navbar > div > ul {
	   position: relative;
	   z-index: 597;
	}
	.cspt-navbar > div > ul > li {
	   float: left;
	   min-height: 1px;
	   vertical-align: middle;
	   position: relative;
	}
	.cspt-navbar > div > ul ul {
	   visibility: hidden;
	   position: absolute;
	   top: 100%;
	   left: 0;
	   z-index: 598;
	}
	.cspt-navbar ul > li:hover > ul{
		z-index: 600;
	}
	.cspt-navbar > div > ul li ul.cspt-nav-left{
	    left: inherit;
	    right: 0;		
	}
	.cspt-navbar > div > ul li ul ul.cspt-nav-left{
	    left: -100%;
	    right: 0;
	}	
	.cspt-navbar > div > ul ul li {
	   float: none;
	}
	.cspt-navbar > div > ul ul ul {
	   top: 0;
	   left: 100%;
	   width: 190px;
	}
	.cspt-navbar > div > ul ul {
	  margin-top: 0;
	}
	.cspt-navbar > div > ul ul li {
	    font-weight: normal;
	}
	.cspt-navbar a {
	    display: block;
	    line-height: 1em;
	    text-decoration: none;
	}
	.cspt-navbar > div > ul ul li:hover > a{
		background-color: <?php echo esc_attr($global_color); ?>;
	}
	/* Custom CSS Styles */
	.cspt-navbar > ul {
	  *display: inline-block;
	}
	.cspt-navbar:after,
	.cspt-navbar ul:after {
	   content: '';
	   display: block;
	   clear: both;
	}
	.cspt-navbar ul {
	   text-transform: uppercase;
	}
	.cspt-navbar ul ul {
		min-width: 270px;
		opacity: 0;
		visibility: hidden;
		-webkit-transition: all 0.3s linear 0s;
		transition: all 0.3s linear 0s;
		box-shadow: 0px 10px 40px rgba(0,0,0,0.20);
		border-top: 3px solid <?php echo esc_attr($global_color); ?>;
	}
	.cspt-navbar ul > li:hover > ul {
	    visibility: visible;
	    opacity: 1;
	}
	.cspt-navbar ul > li > ul > li > a{
	   padding: 15px 30px;
	}
	.cspt-navbar ul > li > ul > li:hover > a{
		padding-left: 40px;
	}
	.cspt-navbar ul > li > ul > li > a:before {
	    position: absolute;
	    content: '';
	    left: 18px;
	    top: 24px;
	    width: 0px;
	    height: 2px;
	    background-color: transparent;
	    -webkit-transition: all .500s ease-in-out;
	    transition: all .500s ease-in-out;
	}
	.cspt-navbar ul > li > ul > li:hover >a:before{
		background-color: rgba(255, 255, 255, 0.50);
		width: 10px;
	}
	.cspt-navbar ul ul a {
	   border-bottom: 1px solid rgba(0, 0, 0, 0.10);
	   border-top: 0 none;
	   line-height: 150%;
	   padding: 16px 20px;
	}
	.cspt-navbar ul ul ul {
	   border-top: 0 none;
	}
	.cspt-navbar ul ul li {
	   position: relative;
	}
	.cspt-navbar ul li.last ul {
	    left: auto;
	    right: 0;
	}
	.cspt-navbar ul li.last ul ul {
	   left: auto;
	   right: 99.5%;
	}
	.cspt-navbar div > ul > li > a{
	    margin: 0 20px;
	}
	/* Dropdown Menu ( Globalcolor )*/
	.cspt-navbar.cspt-dropdown-active-color-globalcolor ul > li > ul > li.current-menu-item > a, 
	.cspt-navbar.cspt-dropdown-active-color-globalcolor ul > li > ul li.current_page_item > a, 
	.cspt-navbar.cspt-dropdown-active-color-globalcolor ul > li > ul li.current_page_ancestor > a,
	/* Main Menu ( Globalcolor )*/
	.cspt-navbar.cspt-main-active-color-globalcolor > div > ul > li:hover > a, 
	.cspt-navbar.cspt-main-active-color-globalcolor > div > ul > li.current_page_item > a, 
	.cspt-navbar.cspt-main-active-color-globalcolor > div > ul >li.current-menu-parent > a{
	    color: <?php echo esc_attr($global_color); ?>;
	}
	/* Dropdown Menu ( Secondarycolor )*/
	.cspt-navbar.cspt-dropdown-active-color-secondarycolor ul > li > ul > li.current-menu-item > a, 
	.cspt-navbar.cspt-dropdown-active-color-secondarycolor ul > li > ul li.current_page_item > a, 
	.cspt-navbar.cspt-dropdown-active-color-secondarycolor ul > li > ul li.current_page_ancestor > a,
	/* Main Menu ( Secondarycolor )*/
	.cspt-navbar.cspt-main-active-color-secondarycolor > div > ul > li:hover > a, 
	.cspt-navbar.cspt-main-active-color-secondarycolor > div > ul > li.current_page_item > a, 
	.cspt-navbar.cspt-main-active-color-secondarycolor > div > ul >li.current-menu-parent > a{
	    color: <?php echo esc_attr($secondary_color); ?>;
	}
	.cspt-header-menu-area .cspt-navbar div > ul > li,
	.cspt-header-menu-area .cspt-navbar div > ul > li > a,
	.cspt-header-menu-area{
		height: 68px;
		line-height: 68px !important;
	}
	.cspt-header-menu-area.cspt-sticky-on .cspt-navbar div > ul > li,
	.cspt-header-menu-area.cspt-sticky-on .cspt-navbar div > ul > li > a,
	.cspt-header-menu-area.cspt-sticky-on{
		height: 68px;
		line-height: 68px !important;
	}
	.cspt-header-menu-area{
	    position: relative;
	    z-index: 9;
	}
	/*=== cspt-header-style-1 ===*/
	.cspt-header-style-1 .cspt-navbar div > ul > li > a{
		margin: 0 15px;
	}
	.cspt-header-style-1 .navigation-top{
	  margin-left: auto!important;
	}
	.cspt-header-style-1 .cspt-right-box {
	    margin-left: 10px;
	    display: flex;
	}
	.cspt-header-style-1 .cspt-logo-menuarea {
	    display: -ms-flexbox!important;
	    display: flex!important;
	    -webkit-flex: 1;
	    -ms-flex: 1;
	    flex: 1;
	    -webkit-box-pack: justify!important;
	    -ms-flex-pack: justify!important;
	    justify-content: space-between!important;
	}
	.cspt-header-style-1 .cspt-header-button a{
		color: #fff;
		height: 100%;
		display: inline-block;
	    padding: 0 30px;
	    vertical-align: middle;
	    line-height: 55px;
	    height: 55px;
		background-color: <?php echo esc_attr($blackish_bg_color); ?>;
	    text-transform: uppercase;
		font-weight: 800;
		font-size: 13px;
		position: relative;
		border-radius: 5px;
		letter-spacing: 1px;
	}
	.cspt-header-style-1 .cspt-header-button a:hover{
		background-color: <?php echo esc_attr($global_color); ?>;
	}
	/*==== cspt-header-style-2 ====*/
	.cspt-header-style-2 .cspt-header-menu-area-wrapper{		
	    position: relative;
	    border-top: 1px solid #e8e7ec;
	}
	.cspt-header-style-2 .cspt-logo-area{
		padding-left: 30px;
		padding-right: 30px;
	}
	.cspt-header-style-2 .cspt-header-info{	
		padding: 0;
		position: relative;		
	}
	.cspt-header-style-2 .cspt-navbar > div > ul{
		text-align: center;
	}
	.cspt-header-style-2 .cspt-navbar > div > ul ul{
		text-align: left;
	}
	.cspt-header-style-2 .cspt-navbar > div > ul > li {
		float: none;
	    display: inline-block;
	    vertical-align: top;
	}
	.cspt-header-style-2 .cspt-navbar div > ul > li > a{
		margin: 0 20px;
	}
	.cspt-header-style-2 .cspt-header-info-inner{
		height: <?php echo esc_attr($header_height) ?>px;		
	}	
	.cspt-header-style-2 .cspt-header-menu-area.cspt-sticky-on {	   
	    width: 100% !important;
	    left: 0;
	    padding-left: 0;
	}
	.cspt-header-style-2 .cspt-header-menu-area.cspt-sticky-on .cspt-header-menu-area-inner{
		max-width: 1170px;
		margin: 0 auto
	}
	.cspt-header-style-2 .cspt-header-top-area > .container .col-lg-9,
	.cspt-header-style-2 .cspt-header-top-area > .container .col-lg-3{
		padding: 0;
	}
	.cspt-header-style-2 .cspt-header-button{
		background-color: <?php echo esc_attr($global_color); ?>;
		margin-left: 15px;
	}

	/*==== cspt-header-style-3 ====*/

	.cspt-header-style-3 .cspt-header-menu-area:after{
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		background-color: #000;
		height: 1px;
		width: 100%;
	}
	.cspt-header-style-3 .cspt-header-menu-area.cspt-bg-color-white:after{
		background-color: rgba(0, 0, 0, 0.10);
	}

	.cspt-header-style-3 .cspt-header-menu-area.cspt-sticky-on:after{
		top: auto;
		bottom: 0;
	}

	.cspt-header-style-3 .cspt-right-box .cspt-cart-wrapper,
	.cspt-header-style-3 .cspt-right-box .cspt-header-search-form-wrapper{
		border-right: 1px solid  rgba(0, 0, 0, 0.10);
	}
	.cspt-header-style-3 .cspt-right-box .cspt-header-search-form-wrapper{
		border-left: 1px solid  rgba(0, 0, 0, 0.10);
	}

	.cspt-header-style-3 .cspt-header-button a{
		color: #fff;		
		height: 100%;
		display: inline-block;
	    padding: 0 30px;
	    vertical-align: middle;
	    padding-right: 8px;
	    line-height: 60px;
	    height: 60px;
		background-color: <?php echo esc_attr($global_color); ?>;
	    text-transform: uppercase;
		font-weight: 800;
		font-size: 13px;
		position: relative;		
		letter-spacing: 1px;
	}
	.cspt-header-style-3 .cspt-header-button a:after {
	    content: "\e81c";
	    font-family: "creativesplanet-base-icons";
	    margin-left: 20px;
	    font-size: 20px;
	    top: 0;
	    position: relative;
	    font-weight: bold;
	    background-color: #fff;
	    color: <?php echo esc_attr($blackish_color); ?>;
	    padding: 14px 18px;	  
	}
	.cspt-header-style-3 .cspt-header-button a:hover{
		background-color:  <?php echo esc_attr($blackish_color); ?>
	}

	<?php if( !empty($main_menu_typography['color']) ){
		?>
		.cspt-header-style-3 .cspt-right-box .cspt-cart-link,
		.cspt-header-style-3  .cspt-header-search-btn a {
			color: <?php echo esc_attr($main_menu_typography['color']); ?>;
		}
		<?php
	}
	?>

	/*=== .cspt-header-style-4 ===*/
	.cspt-header-style-4 .cspt-pre-header-wrapper .container{
		max-width: none;
		padding: 0 50px
	}
	.cspt-header-style-4 .site-branding.cspt-logo-area {
	    margin-right: 80px;
	}

	.cspt-header-style-4 .cspt-logo-menuarea{
		display: -ms-flexbox!important;
		display: flex!important;
		-webkit-box-pack: justify!important;
		-ms-flex-pack: justify!important;
		justify-content: space-between!important;
	}
	.cspt-header-style-4 .cspt-right-box{
	    margin-left: 10px;
	    display: flex;
	    align-items: center;
	}
	.cspt-header-style-4 .cspt-right-box{
		line-height: <?php echo esc_attr($header_height); ?>px !important;
		height: <?php echo esc_attr($header_height); ?>px;
	}
	.cspt-header-style-4 .cspt-sticky-on .cspt-right-box{
		line-height: <?php echo esc_attr($sticky_header_height); ?>px !important;
		height: <?php echo esc_attr($sticky_header_height); ?>px;
	}
	.cspt-header-style-4 .cspt-header-button a{
		color: #fff;		
		height: 100%;
		display: inline-block;
	    padding: 0 60px;
	    vertical-align: middle;
	    padding-right: 8px;	   
		font-weight: normal;
		font-size: 16px;
		position: relative;
		border-radius: 6px;
		letter-spacing: 1px;
	}
	.cspt-header-style-4 .cspt-header-button a:after {
	    content: "\e83f";
	    font-family: "creativesplanet-base-icons";	   
	    font-size: 45px;
	    line-height: 45px;
	    top: 3px;
	    position: absolute;
	    left: 0;	   
	    color: <?php echo esc_attr($global_color); ?>;
	    font-weight: normal;
	}
	.cspt-header-style-4 .cspt-header-button a span{
		display: block;
	}
	.cspt-header-style-4 .cspt-header-button .cspt-header-button-text-1{
		font-weight: 700;		
		margin-bottom: 5px;
	}
	.cspt-header-style-4 .cspt-header-button{
		line-height: normal;
	}
	.cspt-header-style-4 .cspt-sticky-on .cspt-header-button a{
		color: <?php echo esc_attr($blackish_color); ?>;		
	}

	.cspt-header-style-4 .navigation-top{
	  margin-left: auto!important;
	}
	.cspt-header-style-4  .cspt-navbar div > ul > li > a {
	    margin: 0 17px;
	}

	.cspt-header-style-4 .cspt-right-box .cspt-cart-wrapper, 
	.cspt-header-style-4 .cspt-right-box .cspt-header-search-btn {
	    display: flex;
	    align-items: center;
	    margin-right: 30px;
	}
	.cspt-header-style-4 .cspt-right-box .cspt-cart-wrapper{
		margin-right: 20px;
	}

	.cspt-header-style-4 .cspt-title-bar-content{
		padding-top: 180px;
	}
	<?php if( !empty($main_menu_typography['color']) ){
		?>
		.cspt-header-style-4 .cspt-right-box .cspt-cart-link,
		.cspt-header-style-4  .cspt-header-search-btn a {
			color: <?php echo esc_attr($main_menu_typography['color']); ?>;
		}
		<?php
	}
	?>

	.cspt-header-style-4 .cspt-right-box .cspt-cart-link,
	.cspt-header-style-4  .cspt-header-search-btn a{
		font-size: 16px;
	}

	/*** Custom Menu text color ***/
	.cspt-header-style-4 .cspt-sticky-on .cspt-right-box .cspt-cart-link,
	.cspt-header-style-4 .cspt-sticky-on .cspt-header-search-btn a,
	.cspt-header-style-4 .cspt-sticky-on .cspt-navbar div > ul > li > a{
		color: <?php echo esc_attr($main_menu_sticky_color); ?>;
	}
	.cspt-header-style-4 .cspt-sticky-on .cspt-pre-header-wrapper{
		height: 0;
		line-height: 0;
		display: none;
	}
	.cspt-header-style-4 .cspt-navbar.cspt-main-active-color-globalcolor > div > ul > li.current_page_item > a, 
	.cspt-header-style-4 .cspt-navbar.cspt-main-active-color-globalcolor > div > ul > li.current-menu-parent > a{
		color: <?php echo esc_attr($global_color); ?>;
	}
	.cspt-header-style-4 .cspt-navbar.cspt-main-active-color-blackish > div > ul > li.current_page_item > a, 
	.cspt-header-style-4 .cspt-navbar.cspt-main-active-color-blackish  > div > ul > li.current-menu-parent > a{
		color: #232323;
	}
	.cspt-header-style-4 .cspt-navbar.cspt-main-active-color-white > div > ul > li.current_page_item > a, 
	.cspt-header-style-4 .cspt-navbar.cspt-main-active-color-white  > div > ul > li.current-menu-parent > a{
		color: #fff;
	}
	.cspt-header-style-4 .cspt-navbar.cspt-main-active-color-secondarycolor > div > ul > li.current_page_item > a, 
	.cspt-header-style-4 .cspt-navbar.cspt-main-active-color-secondarycolor  > div > ul > li.current-menu-parent > a{
		color: #eee;
	}
	.cspt-header-style-4 .cspt-sticky-on .cspt-navbar > div > ul > li.current_page_item > a, 
	.cspt-header-style-4 .cspt-sticky-on .cspt-navbar  > div > ul > li.current-menu-parent > a{
		color: <?php echo esc_attr($global_color); ?>;
	}

	/*=== .cspt-header-style-5 ===*/
	.cspt-header-style-5 .cspt-header-content {
	    margin: 0 50px;
	    position: relative;
	}
	.cspt-header-style-5 .cspt-pre-header-wrapper .container{
		max-width: none;
		padding: 0 50px
	}
	.cspt-header-style-5 .site-branding.cspt-logo-area {
	    margin-right: 80px;
	}
	.cspt-header-style-5 .cspt-contact-info li{
		 margin: 0 10px;
	}
	.cspt-header-style-5 .cspt-contact-info li:after,
	.cspt-header-style-5 .cspt-pre-header-wrapper ul:after,
	.cspt-header-style-5 .cspt-header-search-btn:before{
		display: none;
	}
	.cspt-header-style-5 .cspt-pre-header-wrapper{
		border:1px solid rgba(0, 0, 0, 0.1);
		height: 60px;
	    line-height: 60px;
	}
	.cspt-header-style-5 .cspt-logo-menuarea{
		display: -ms-flexbox!important;
		display: flex!important;
		-webkit-box-pack: justify!important;
		-ms-flex-pack: justify!important;
		justify-content: space-between!important;
	}
	.cspt-header-style-5 .cspt-right-box{
	    margin-left: 10px;
	    display: flex;
	    align-items: center;
	}
	.cspt-header-style-5 .cspt-right-box{
		line-height: <?php echo esc_attr($header_height); ?>px !important;
		height: <?php echo esc_attr($header_height); ?>px;
	}
	.cspt-header-style-5 .cspt-sticky-on .cspt-right-box{
		line-height: <?php echo esc_attr($sticky_header_height); ?>px !important;
		height: <?php echo esc_attr($sticky_header_height); ?>px;
	}
	.cspt-header-style-5 .cspt-header-button a {
	    color: #fff;
	    height: 100%;
	    display: inline-block;
	    padding: 0 30px;
	    vertical-align: middle;
	    padding-right: 8px;
	    line-height: 60px;
	    height: 60px;
	    background-color: <?php echo esc_attr($global_color); ?>;
	    text-transform: uppercase;
	    font-weight: 800;
	    font-size: 13px;
	    position: relative;
	    border-radius: 6px;
	    letter-spacing: 1px;
	}
	.cspt-header-style-5 .cspt-header-button a:after {
	    content: "\e81c";
	    font-family: "creativesplanet-base-icons";
	    margin-left: 20px;
	    font-size: 20px;
	    top: 0;
	    position: relative;
	    font-weight: bold;
	    background-color: #fff;
	    color: #0c121d;
	    padding: 14px 18px;
	    border-radius: 5px;
	} 
	.cspt-header-style-5 .cspt-header-button .cspt-header-button-text-1{
		font-weight: 700;		
		margin-bottom: 5px;
	}
	.cspt-header-style-5 .cspt-header-button{
		line-height: normal;
	} 

	.cspt-header-style-5 .navigation-top{
	  margin-left: auto!important;
	}
	.cspt-header-style-5  .cspt-navbar div > ul > li > a {
	    margin: 0 17px;
	}

	.cspt-header-style-5 .cspt-right-box .cspt-cart-wrapper, 
	.cspt-header-style-5 .cspt-right-box .cspt-header-search-btn {
	    display: flex;
	    align-items: center;
	    margin-right: 30px;
	}
	.cspt-header-style-5 .cspt-right-box .cspt-cart-wrapper{
		margin-right: 20px;
	}


	<?php if( !empty($main_menu_typography['color']) ){
		?>
		.cspt-header-style-5 .cspt-right-box .cspt-cart-link,
		.cspt-header-style-5  .cspt-header-search-btn a {
			color: <?php echo esc_attr($main_menu_typography['color']); ?>;
		}
		<?php
	}
	?>

	.cspt-header-style-5 .cspt-right-box .cspt-cart-link,
	.cspt-header-style-5  .cspt-header-search-btn a{
		font-size: 16px;
	}
	.cspt-header-style-5 .cspt-pre-header-wrapper .cspt-social-links{
		margin-right: 0;
	}
	 
	/*=== .cspt-header-style-6 ===*/
	.cspt-header-style-6 .cspt-pre-header-wrapper .container{
		max-width: none;
		padding: 0 50px
	}
	.cspt-header-style-6 .site-branding.cspt-logo-area {
	    margin-right: 80px;
	}

	.cspt-header-style-6 .cspt-logo-menuarea{
		display: -ms-flexbox!important;
		display: flex!important;
		-webkit-box-pack: justify!important;
		-ms-flex-pack: justify!important;
		justify-content: space-between!important;
	}
	.cspt-header-style-6 .cspt-right-box{
	    margin-left: 10px;
	    display: flex;
	    align-items: center;
	}
	.cspt-header-style-6 .cspt-right-box{
		line-height: <?php echo esc_attr($header_height); ?>px !important;
		height: <?php echo esc_attr($header_height); ?>px;
	}
	.cspt-header-style-6 .cspt-sticky-on .cspt-right-box{
		line-height: <?php echo esc_attr($sticky_header_height); ?>px !important;
		height: <?php echo esc_attr($sticky_header_height); ?>px;
	}
	
	.cspt-header-style-6 .navigation-top{
	  margin-left: auto!important;
	}
	.cspt-header-style-6  .cspt-navbar div > ul > li > a {
	    margin: 0 17px;
	}
	.cspt-header-style-6 .cspt-title-bar-content{
		padding-top: 180px;
	}
	.cspt-header-style-6 .cspt-header-button a {
	    color: #0c121d;
	    height: 100%;
	    display: inline-block;
	    padding: 0 30px;
	    vertical-align: middle;
	    padding-right: 8px;
	    line-height: 60px;
	    height: 60px;
	    background-color: #fff;
	    text-transform: uppercase;
	    font-weight: 800;
	    font-size: 13px;
	    position: relative;
	    border-radius: 6px;
	    letter-spacing: 1px;
	}
	.cspt-header-style-6 .cspt-header-button a:after {
	    content: "\e81c";
	    font-family: "creativesplanet-base-icons";
	    margin-left: 20px;
	    font-size: 20px;
	    top: 0;
	    position: relative;
	    font-weight: normal;
	    background-color: <?php echo esc_attr($global_color); ?>;
	    color: #fff;
	    padding: 14px 18px;
	    border-radius: 5px;
	} 
	.cspt-header-style-6 .cspt-header-button .cspt-header-button-text-1{
		font-weight: 700;		
		margin-bottom: 5px;
	}
	.cspt-header-style-6 .cspt-header-button{
		line-height: normal;
	}  
	.cspt-header-style-6 .cspt-right-box .cspt-social-links{
		list-style-type: none;
		margin: 0;
		padding: 0;
		margin-right: 32px;
	}
	.cspt-header-style-6 .cspt-right-box .cspt-social-links li{
		margin-right: 10px;
		display: inline-block;
	} 
	<?php if( !empty($main_menu_typography['color']) ){
		?>
		.cspt-header-style-6 .cspt-right-box .cspt-social-links li a {
			color: <?php echo esc_attr($main_menu_typography['color']); ?>;
		}
		<?php
	}
	?>

	.cspt-header-style-6 .cspt-navbar.cspt-main-active-color-globalcolor > div > ul > li:hover > a, 
	.cspt-header-style-6 .cspt-navbar.cspt-main-active-color-globalcolor > div > ul > li.current_page_item > a, 
	.cspt-header-style-6 .cspt-navbar.cspt-main-active-color-globalcolor > div > ul >li.current-menu-parent > a{
	    color: <?php echo esc_attr($secondary_color); ?>;
	}
	.cspt-header-style-6 .cspt-sticky-on .cspt-right-box .cspt-social-links li a{
		color: <?php echo esc_attr($main_menu_sticky_color); ?>;
	}
	.cspt-header-style-6 .cspt-sticky-on .cspt-header-button a{
		background-color: <?php echo esc_attr($global_color); ?>;
	    color: #fff;
	}
	.cspt-header-style-6 .cspt-sticky-on .cspt-header-button a:after {
		background-color: #fff;
		color: #0c121d;
	}

	/*==== cspt-header-style-7 ====*/
	.cspt-header-style-7 .cspt-header-menu-area.cspt-bg-color-white:after{
		background-color: rgba(0, 0, 0, 0.10);
	}
	.cspt-header-style-7 .cspt-header-menu-area.cspt-sticky-on:after{
		top: auto;
		bottom: 0;
	}
	.cspt-header-style-7 .cspt-right-box .cspt-cart-wrapper,
	.cspt-header-style-7 .cspt-right-box .cspt-header-search-form-wrapper{
		border-right: 1px solid  rgba(0, 0, 0, 0.10);
	}
	.cspt-header-style-7 .cspt-right-box .cspt-header-search-form-wrapper{
		border-left: 1px solid  rgba(0, 0, 0, 0.10);
	}

	.cspt-header-style-7 .cspt-header-button a{
		color: #fff;		
		height: 100%;
		display: inline-block;
	    padding: 0 30px;
	    vertical-align: middle;
	    padding-right: 8px;
	    line-height: 60px;
	    height: 60px;
		background-color: <?php echo esc_attr($global_color); ?>;
	    text-transform: uppercase;
		font-weight: 800;
		font-size: 13px;
		position: relative;	
		border-radius: 6px;	
		letter-spacing: 1px;
	}
	.cspt-header-style-7 .cspt-header-button a:after {
	    content: "\e81c";
	    font-family: "creativesplanet-base-icons";
	    margin-left: 20px;
	    font-size: 20px;
	    top: 0;
	    position: relative;
	    font-weight: bold;
	    background-color: #fff;
	    color: <?php echo esc_attr($blackish_color); ?>;
		padding: 14px 18px;	
		border-radius: 6px; 
	}
	.cspt-header-style-7 .cspt-header-button a:hover{
		background-color:  <?php echo esc_attr($blackish_color); ?>
	}

}
/*====================================  End Min Break Point  ====================================*/
.cspt-header-style-2 .cspt-cart-count,
.cspt-header-style-2 .cspt-cart-icon:hover,
.cspt-header-style-2 .cspt-header-search-btn a:hover{
	background-color: <?php echo esc_attr($global_color); ?>;
}

<?php if( !empty($preheader_responsive) ){ ?>
@media screen and (max-width: <?php echo esc_html($preheader_responsive); ?>px) {
	.cspt-pre-header-wrapper{
		display: none;
	}
}
<?php } ?>
<?php
$footer_column	= cspt_get_base_option('footer-column');
if( $footer_column=='custom' ) :
	$footer_column_1	= cspt_get_base_option('footer-1-col-width');
	$footer_column_2	= cspt_get_base_option('footer-2-col-width');
	$footer_column_3	= cspt_get_base_option('footer-3-col-width');
	$footer_column_4	= cspt_get_base_option('footer-4-col-width');
	?>
	@media screen and (min-width: 992px) {
		<?php if( !empty($footer_column_1) && $footer_column_1!='hide' ) : ?>
		.site-footer .cspt-footer-widget.cspt-footer-widget-col-1{
			-ms-flex: 0 0 <?php echo esc_attr($footer_column_1) ?>%;
			flex: 0 0 <?php echo esc_attr($footer_column_1) ?>%;
			max-width: <?php echo esc_attr($footer_column_1) ?>%;
		}
		<?php endif; ?>
		<?php if( !empty($footer_column_2) && $footer_column_2!='hide' ) : ?>
		.site-footer .cspt-footer-widget.cspt-footer-widget-col-2{
			-ms-flex: 0 0 <?php echo esc_attr($footer_column_2) ?>%;
			flex: 0 0 <?php echo esc_attr($footer_column_2) ?>%;
			max-width: <?php echo esc_attr($footer_column_2) ?>%;
		}
		<?php endif; ?>
		<?php if( !empty($footer_column_3) && $footer_column_3!='hide' ) : ?>
		.site-footer .cspt-footer-widget.cspt-footer-widget-col-3{
			-ms-flex: 0 0 <?php echo esc_attr($footer_column_3) ?>%;
			flex: 0 0 <?php echo esc_attr($footer_column_3) ?>%;
			max-width: <?php echo esc_attr($footer_column_3) ?>%;
		}
		<?php endif; ?>
		<?php if( !empty($footer_column_4) && $footer_column_4!='hide' ) : ?>
		.site-footer .cspt-footer-widget.cspt-footer-widget-col-4{
			-ms-flex: 0 0 <?php echo esc_attr($footer_column_4) ?>%;
			flex: 0 0 <?php echo esc_attr($footer_column_4) ?>%;
			max-width: <?php echo esc_attr($footer_column_4) ?>%;
		}
		<?php endif; ?>
	}
<?php endif; ?>