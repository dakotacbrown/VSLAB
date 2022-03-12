<?php 
$errors = '';
$myemail = 'mvs.bgsu@gmail.com';

if(empty($_POST['name'])  || 
   empty($_POST['email']) ||
   empty($_POST['subject']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$subject = $_POST['email']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = $subject;
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	echo('Message has been sent!');
} 
?>
<!doctype html>
<html lang="en-US" class="html_stretched responsive av-preloader-enabled av-default-lightbox  html_header_top html_logo_left html_bottom_nav_header html_menu_left html_large html_header_sticky html_header_shrinking html_mobile_menu_phone html_disabled html_header_searchicon html_content_align_center html_header_unstick_top_disabled html_header_stretch html_minimal_header html_minimal_header_shadow html_entry_id_19  avia_desktop  js_active  avia_transform  avia_transform3d  avia_transform  avia_transform3d  avia-webkit avia-webkit-56 avia-chrome avia-chrome-56 avia-mac" style="overflow-y: scroll;"><head>
<meta charset="UTF-8">

<!-- page title, displayed in your browser bar -->
<title>van Staaden Lab | Sensory biology and behavior</title>

<meta name="robots" content="index, follow">

<!-- mobile setting -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Scripts/CSS and wp_head hook -->
<link rel="dns-prefetch" href="//code.jquery.com">
<link rel="dns-prefetch" href="//s.w.org">

<!-- google webfont font replacement -->
<link rel="stylesheet" id="avia-google-webfont" href="//fonts.googleapis.com/css?family=Open+Sans:400,600" type="text/css" media="all"> 

<link rel="stylesheet" id="sb_instagram_styles-css" href="wp-content/plugins/instagram-feed/css/sb-instagram.min.css" type="text/css" media="all">
<link rel="stylesheet" id="avia-grid-css" href="wp-content/themes/enfold/css/grid.css" type="text/css" media="all">
<link rel="stylesheet" id="avia-base-css" href="wp-content/themes/enfold/css/base.css" type="text/css" media="all">
<link rel="stylesheet" id="avia-layout-css" href="wp-content/themes/enfold/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" id="avia-scs-css" href="wp-content/themes/enfold/css/shortcodes.css" type="text/css" media="all">
<link rel="stylesheet" id="avia-popup-css-css" href="wp-content/themes/enfold/js/aviapopup/magnific-popup.css" type="text/css" media="screen">
<link rel="stylesheet" id="avia-media-css" href="wp-content/themes/enfold/js/mediaelement/skin-1/mediaelementplayer.css" type="text/css" media="screen">
<link rel="stylesheet" id="avia-print-css" href="wp-content/themes/enfold/css/print.css" type="text/css" media="print">
<link rel="stylesheet" id="avia-dynamic-css" href="wp-content/uploads/dynamic_avia/enfold.css" type="text/css" media="all">
<link rel="stylesheet" id="avia-custom-css" href="wp-content/themes/enfold/css/custom.css" type="text/css" media="all">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="wp-content/themes/enfold/js/avia-compat.js"></script>
<link rel="https://api.w.org/" href="wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 4.6.3">
<link rel="canonical" href=" ">
<link rel="shortlink" href=" ">
</head>

<body id="top" class="home page page-id-19 page-template-default stretched open_sans " itemscope="itemscope" itemtype="https://schema.org/WebPage">


	<div class="av-siteloader-wrap av-transition-enabled" style="transition: all 0.4s cubic-bezier(0.55, 0.085, 0.68, 0.53); opacity: 0; transform: translateZ(0px);"><div class="av-siteloader-inner"><div class="av-siteloader-cell"><div class="av-siteloader"><div class="av-siteloader-extra"></div></div></div></div></div>
	<div id="wrap_all"><a id="advanced_menu_hide" href="#" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></a><ul id="mobile-advanced" class=""><li id="menu-item-239" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-19 current_page_item menu-item-top-level menu-item-top-level-1"><a href="index.html" itemprop="url"><span class="avia-bullet"></span><span class="avia-menu-text">Home</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a></li>
    
<li id="menu-item-231" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-19 current_page_item menu-item-top-level menu-item-top-level-1"><a href="ourwork.html" itemprop="url"><span class="avia-bullet"></span><span class="avia-menu-text">Our Work</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a></li>

 <li id="menu-item-500" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-top-level menu-item-top-level-4"><a href="seachange/index.html" itemprop="url"><span class="avia-bullet"></span><span class="avia-menu-text">Research</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a>

<ul class="sub-menu">
<li id="menu-item-501" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="seachange/index.html" itemprop="url"><span class="avia-bullet"></span><span class="avia-menu-text">Project Sea Change</span></a></li>
	<li id="menu-item-502" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="pneumoridae/index.html" itemprop="url"><span class="avia-bullet"></span><span class="avia-menu-text">Pneumoridae</span></a></li></ul>
</li>

<li id="menu-item-679" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-top-level menu-item-top-level-3"><a href="publications.html" itemprop="url"><span class="avia-bullet"></span><span class="avia-menu-text">Publications</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a></li>    
<li id="menu-item-241" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-top-level menu-item-top-level-2"><a href="people.html" itemprop="url"><span class="avia-bullet"></span><span class="avia-menu-text">People</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a></li>
<li id="menu-item-749" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-top-level menu-item-top-level-7"><a href="connect.php" itemprop="url"><span class="avia-bullet"></span><span class="avia-menu-text">Connect</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a></li>
</ul>

	
<header id="header" class="header_color light_bg_color av_header_top av_logo_left av_bottom_nav_header av_menu_left av_large av_header_sticky av_header_shrinking av_header_stretch av_mobile_menu_phone av_header_searchicon av_header_unstick_top_disabled av_seperator_small_border av_minimal_header av_minimal_header_shadow header-scrolled header-scrolled-full" role="banner" itemscope="itemscope" itemtype="https://schema.org/WPHeader">

		<div id="header_main" class="container_wrap container_wrap_logo">

        <div class="container av-logo-container" style="height: 118px; line-height: 118px;"><div class="inner-container"><strong class="logo"><a href="seachange/index.html" style="max-height: 118px;"><img height="100" width="300" src="images/seachange.png" alt="Project Sea Change" style="max-height: 118px;"></a></strong></div></div>


<div id="header_main_alternate" class="container_wrap"><div class="container"><nav class="main_menu" data-selectname="Select a page" role="navigation" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement"><div class="avia-menu av-main-nav-wrap"><ul id="avia-menu" class="menu av-main-nav">

<li id="menu-item-239" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-19 current_page_item menu-item-top-level menu-item-top-level-1"><a href="index.html" itemprop="url"><span class="avia-bullet"></span><span class="avia-menu-text">Home</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a></li>
    
<li id="menu-item-231" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-19 current_page_item menu-item-top-level menu-item-top-level-1"><a href="ourwork.html" itemprop="url"><span class="avia-bullet"></span><span class="avia-menu-text">Our Work</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a></li>

 <li id="menu-item-500" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-top-level menu-item-top-level-4"><a href="seachange/index.html" itemprop="url"><span class="avia-bullet"></span><span class="avia-menu-text">Research</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a>

<ul class="sub-menu">
<li id="menu-item-501" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="seachange/index.html" itemprop="url"><span class="avia-bullet"></span><span class="avia-menu-text">Project Sea Change</span></a></li>
	<li id="menu-item-502" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="pneumoridae/index.html" itemprop="url"><span class="avia-bullet"></span><span class="avia-menu-text">Pneumoridae</span></a></li></ul>
</li>

<li id="menu-item-679" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-top-level menu-item-top-level-3"><a href="publications.html" itemprop="url"><span class="avia-bullet"></span><span class="avia-menu-text">Publications</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a></li>    
<li id="menu-item-241" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-top-level menu-item-top-level-2"><a href="people.html" itemprop="url"><span class="avia-bullet"></span><span class="avia-menu-text">People</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a></li>
<li id="menu-item-749" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-top-level menu-item-top-level-7"><a href="connect.php" itemprop="url"><span class="avia-bullet"></span><span class="avia-menu-text">Connect</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a></li>
</ul>
</div></nav></div> </div> 
		<!-- end container_wrap-->
		</div>
		
		<div class="header_bg"></div>

<!-- end header -->
</header>
		
	<div id="main" data-scroll-offset="116">

<div data-size="featured_large" data-lightbox_size="large" data-animation="fade" data-ids="387,722,298,718,296" data-video_counter="0" data-autoplay="true" data-bg_slider="false" data-slide_height="" data-handle="av_slideshow_full" data-interval="5" data-class=" " data-css_id="" data-scroll_down="" data-control_layout="av-control-minimal" data-custom_markup="" data-perma_caption="" data-autoplay_stopper="" data-src="" data-position="top left" data-repeat="no-repeat" data-attach="scroll" data-stretch="" data-default-height="42" class="avia-slideshow avia-slideshow-1  av-control-minimal avia-slideshow-featured_large av_slideshow_full   avia-fade-slider" itemscope="itemscope" itemtype="https://schema.org/ImageObject"><ul class="avia-slideshow-inner" style="padding: 0px; height: auto;"><li class="slide-1 active-slide" style="visibility: hidden; z-index: 2; opacity: 0; transition: none; transform: translateZ(0px);"><div data-rel="slideshow-1" class="avia-slide-wrap"><img src="images/setgo/SSRkickoffactivity3.jpg" width="1500" height="630" title="People" alt="" itemprop="contentURL"></div></li></ul></div></div>
<div id="av_section_1" class="avia-section main_color avia-section-large avia-shadow av-section-color-overlay-active avia-bg-style-scroll  avia-builder-el-1  el_after_av_slideshow_full  el_before_av_section  container_wrap fullsize" style="background-color: #1e87e8; "><div class="av-section-color-overlay-wrap"><div class="av-section-color-overlay" style="opacity: 0.5; "></div><div class="container"><div class="template-page content  av-content-full alpha units"><div class="post-entry post-entry-type-page post-entry-19"><div class="entry-content-wrapper clearfix">
<div style="padding-bottom:20px;color:#ffffff;font-size:62px;" class="av-special-heading av-special-heading-h1 custom-color-heading blockquote modern-quote modern-centered  avia-builder-el-2  avia-builder-el-no-sibling   av-inherit-size">
  <h1 class="av-special-heading-tag" itemprop="headline">Connect with Dr. van Staaden</h1>
  <div class="special-heading-border"><div class="special-heading-inner-border" style="border-color:#ffffff"></div></div></div>

</div></div></div><!-- close content main div --></div><div class="av-extra-border-element border-extra-arrow-down"><div class="av-extra-border-outer"><div class="av-extra-border-inner" style="background-color:#1e87e8;"></div></div></div></div></div><div id="av_section_2" class="avia-section main_color avia-section-default avia-no-shadow avia-bg-style-scroll  avia-builder-el-3  el_after_av_section  el_before_av_masonry_gallery  container_wrap fullsize"><div class="container"><div class="template-page content  av-content-full alpha units">
  <div class="post-entry post-entry-type-page post-entry-19">
    <div class="entry-content-wrapper clearfix">
      <div class="flex_column av_one_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-6  el_after_av_one_full  el_before_av_three_fifth  column-top-margin" style="border-radius:0px; "></div>
      <div class="entry-content-wrapper clearfix">
        <div class="flex_column av_one_half  flex_column_div av-zero-column-padding first  avia-builder-el-17  el_after_av_section  el_before_av_one_half  avia-builder-el-first  " style="border-radius:0px; ">
          <section class="av_textblock_section" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
            <div class="avia_textblock " itemprop="text">
              <div id="huge_it_google_map536008_container">
                <div class="animated" id="huge_it_google_map536008" style="height: 400px; width: 100%; position: relative; border-radius: 0px !important; float: left !important; margin: 0px !important; overflow: hidden;">
                  <iframe
  width="600"
  height="400"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDVV4sB_VaCUHYAg1b1V9Lv2VbamtBeYJg
    &q=Life+Sciences+Building,+N+College+Dr,+Bowling+Green,+OH" allowfullscreen> </iframe>
                </div>
              </div>
            </div>
          </section>
          <div style="height:25px" class="hr hr-invisible  avia-builder-el-19  el_after_av_textblock  el_before_av_textblock "><span class="hr-inner "><span class="hr-inner-style"></span></span></div>
          <section class="av_textblock_section" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
            <div class="avia_textblock " itemprop="text">
              <p>We are located&nbsp;at Life Sciences Building, Rm 303, Bowling Green State University, Bowling Green, OH 43403.</p>
            </div>
          </section>
        </div>
        <div class="flex_column av_one_half  flex_column_div av-zero-column-padding   avia-builder-el-21  el_after_av_one_half  avia-builder-el-last  " style="border-radius:0px; ">
          <form action="mailto:mvs.bgsu@gmail.com" method="post">
            <fieldset>
              <h3>Send us mail</h3>
              <p class=" first_form  form_element form_fullwidth" id="element_avia_1_1">
                <label for="avia_1_1">Name <abbr class="required" title="required">*</abbr></label>
                <input name="Name" class="text_input is_empty" type="text" id="avia_1_1" value="">
              </p>
              <p class=" first_form  form_element form_fullwidth" id="element_avia_2_1">
                <label for="avia_2_1">E-Mail <abbr class="required" title="required">*</abbr></label>
                <input name="Email" class="text_input is_email" type="text" id="avia_2_1" value="">
              </p>
              <p class=" first_form  form_element form_fullwidth" id="element_avia_3_1">
                <label for="avia_3_1">Subject <abbr class="required" title="required">*</abbr></label>
                <input name="Subject" class="text_input is_empty" type="text" id="avia_3_1" value="">
              </p>
              <p class=" first_form  form_element form_fullwidth av-last-visible-form-element" id="element_avia_4_1">
                <label for="avia_4_1" class="textare_label hidden textare_label_avia_4_1">Message <abbr class="required" title="required">*</abbr></label>
                <textarea name="Message" class="text_area is_empty" cols="40" rows="7" id="avia_4_1"></textarea>
              </p>
              <p class="hidden">
                <input type="text" name="avia_5_1" class="hidden " id="avia_5_1" value="">
              </p>
              <p class="form_element ">
                <input type="hidden" value="1" name="avia_generated_form1">
                <input type="submit" value="Get in touch" class="button" data-sending-label="Sending">
              </p>
            </fieldset>
          </form>
        </div>
        <p></p>
      </div>
      <div class="flex_column av_one_third  flex_column_div av-zero-column-padding first  avia-builder-el-13  el_after_av_hr  el_before_av_one_third  " style="border-radius:0px; ">
        <article class="iconbox iconbox_top main_color   avia-builder-el-14  avia-builder-el-no-sibling " itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
          <div class="iconbox_content">
            <header class="entry-content-header"><a href="seachange/index.html" title="Project Sea Change" class="iconbox_icon heading-color" aria-hidden="true"  style="background-color:#ffffff; border:1px solid #83a846; color:#83a846; background-image:url(images/book.png); background-repeat:no-repeat; background-position:center"></a>
              <h3 class="iconbox_content_title" itemprop="headline"><a href="seachange/index.html" title="SeaChange">Project Sea Change</a></h3>
            </header>
          </div>
          <footer class="entry-footer"></footer>
        </article>
      </div>
      <div class="flex_column av_one_third  flex_column_div av-zero-column-padding   avia-builder-el-15  el_after_av_one_third  el_before_av_one_third  " style="border-radius:0px; ">
        <article class="iconbox iconbox_top main_color   avia-builder-el-16  avia-builder-el-no-sibling " itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
          <div class="iconbox_content">
            <header class="entry-content-header"><a href="people.html" title="People" class="iconbox_icon heading-color" aria-hidden="true" style="background-color:#ffffff; border:1px solid #83a846; color:#83a846; background-image:url(images/people.png); background-repeat:no-repeat; background-position:center""></a>
              <h3 class="iconbox_content_title" itemprop="headline"><a href="people.html" title="People">People</a></h3>
            </header>
          </div>
          <footer class="entry-footer"></footer>
        </article>
      </div>
      <div class="flex_column av_one_third  flex_column_div av-zero-column-padding   avia-builder-el-17  el_after_av_one_third  avia-builder-el-last  " style="border-radius:0px; ">
        <article class="iconbox iconbox_top main_color   avia-builder-el-18  avia-builder-el-no-sibling " itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
          <div class="iconbox_content">
            <header class="entry-content-header"><a href="publications.html" title="Publications" class="iconbox_icon heading-color" style="background-color:#ffffff; border:1px solid #83a846; color:#83a846; background-image:url(images/plane.png); background-repeat:no-repeat; background-position:center"></a>
              <h3 class="iconbox_content_title" itemprop="headline"><a href="publications.html" title="Publications">Publications</a></h3>
            </header>
          </div>
          <footer class="entry-footer"></footer>
        </article>
      </div>
    </div>
  </div>
</div><!-- close content main div --></div></div><!-- close section --><p></p>
<!-- close default .container_wrap element -->						<div class="container_wrap footer_color" id="footer">

					<div class="container">

        <div class="flex_column av_one_third  el_after_av_one_third  el_before_av_one_third "><section id="text-2" class="widget clearfix widget_text"><h3 class="widgettitle">Moira van Staaden, Ph.D.</h3>			
          <div class="textwidget"><p>Professor, Biological Sciences<br>
          Life Sciences Building, Rm 303<br>
          Bowling Green State University<br>
          Bowling Green, OH 43403<br>
          e: <a href="mailto:mvs.bgsu@gmail.com" target="_top">mvs.bgsu@gmail.com</a><br>
          t: 419-372-0341
</p>
        </div>
		<span class="seperator extralight-border"></span></section></div><div class="flex_column av_one_third  el_after_av_one_third  el_before_av_one_third "></div><div class="flex_column av_one_third  el_after_av_one_third  el_before_av_one_third "></div>

					</div>


				<!-- ####### END FOOTER CONTAINER ####### -->
				</div>

	


			

			
				<footer class="container_wrap socket_color" id="socket" role="contentinfo" itemscope="itemscope" itemtype="https://schema.org/WPFooter">
                    <div class="container"><span class="copyright">© Copyright 2017. Moira van Staaden. All rights reserved.</span></div>

	            <!-- ####### END SOCKET CONTAINER ####### -->
				</footer>


					<!-- end main -->
		</div>
		
		<!-- end wrap_all --></div>


 <script type="text/javascript">
 /* <![CDATA[ */  
var avia_framework_globals = avia_framework_globals || {};
    avia_framework_globals.frameworkUrl = 'http://levinelab.com/wp-content/themes/enfold/framework/';
    avia_framework_globals.installedAt = 'http://levinelab.com/wp-content/themes/enfold/';
    avia_framework_globals.ajaxurl = 'http://levinelab.com/wp-admin/admin-ajax.php';
/* ]]> */ 
</script>
 
 <script type="text/javascript">
/* <![CDATA[ */
var sb_instagram_js_options = {"sb_instagram_at":"2758392682.1654d0c.6bf90bb2e36e4607824a3f76a78ce2a3"};
/* ]]> */
</script>
<script type="text/javascript" src="http://levinelab.com/wp-content/plugins/instagram-feed/js/sb-instagram.min.js?ver=1.4.8"></script>
<script type="text/javascript" src="http://levinelab.com/wp-content/themes/enfold/js/avia.js?ver=3"></script>
<script type="text/javascript" src="http://levinelab.com/wp-content/themes/enfold/js/shortcodes.js?ver=3"></script>
<script type="text/javascript" src="http://levinelab.com/wp-content/themes/enfold/js/aviapopup/jquery.magnific-popup.min.js?ver=2"></script>
<script type="text/javascript">
/* <![CDATA[ */
var mejsL10n = {"language":"en-US","strings":{"Close":"Close","Fullscreen":"Fullscreen","Turn off Fullscreen":"Turn off Fullscreen","Go Fullscreen":"Go Fullscreen","Download File":"Download File","Download Video":"Download Video","Play":"Play","Pause":"Pause","Captions\/Subtitles":"Captions\/Subtitles","None":"None","Time Slider":"Time Slider","Skip back %1 seconds":"Skip back %1 seconds","Video Player":"Video Player","Audio Player":"Audio Player","Volume Slider":"Volume Slider","Mute Toggle":"Mute Toggle","Unmute":"Unmute","Mute":"Mute","Use Up\/Down Arrow keys to increase or decrease volume.":"Use Up\/Down Arrow keys to increase or decrease volume.","Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds."}};
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/"};
/* ]]> */
</script>
<script type="text/javascript" src="http://levinelab.com/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=2.22.0"></script>
<script type="text/javascript" src="http://levinelab.com/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=4.6.5"></script>
<script type="text/javascript" src="http://levinelab.com/wp-includes/js/comment-reply.min.js?ver=4.6.5"></script>
<script type="text/javascript" src="http://levinelab.com/wp-includes/js/wp-embed.min.js?ver=4.6.5"></script>
<a href="#top" title="Scroll to top" id="scroll-top-link" aria-hidden="true" data-av_icon="top" data-av_iconfont="entypo-fontello" class=""><span class="avia_hidden_link_text">Scroll to top</span></a>

<div id="fb-root"></div>


</body></html>