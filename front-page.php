<!DOCTYPE html>
<html class="no-js">
    
	<head id="dallas-photography" data-template-set="photography-design-ampnetmedia" profile="http://ampnetmedia.com">

		<meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
        	<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
        </title>
        <meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
		<meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="google-site-verification" content="">
		<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
		
		<meta name="author" content="Your Name Here">
		<meta name="Copyright" content="Copyright Your Name Here 2011. All Rights Reserved.">

		<?php get_stylesheet_directory_uri(); ?>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="lockout">
        	<p>You've reached</p>
        	<h1>DFW Bellies and Babies</h1>
  			<h3>Sorry this site is temporarily unavailable...</h3>
		</div>

		<footer class="lockoutfooter">
			<p><em>this site is unavailable do to lack of payment. Check back soon. <a href="http://ampnetmedia.com/">ampnetmedia.com</a> &copy 2014 all rights reserved.</em></p>
		</footer>
	</body>
</html>