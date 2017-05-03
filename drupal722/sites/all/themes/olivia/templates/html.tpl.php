<?php /**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 * 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language -> language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language -> dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  
  <!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="/<?php print path_to_theme() ?>/css/style-ie.css" />
	<![endif]-->
  
</head>
<body class="<?php print $classes; ?>" <?php print $attributes; ?>>
  

		<div id="page-wrap">

			<div id="top-bar">

				<div id="social">
					<a href="http://www.facebook.com/pages/Olivia-Schultz-Photography/125291537486454?ref=sgm" alt="Visit me on facebook" title="Visit me on facebook" target="_blank"> 
						<img src="/<?php print path_to_theme() ?>/css/images/facebook_30x31.png" width="30" height="30" alt="visit me on facebook" title="Visit me on facebook" /> 
					</a>
					<h1 id="vision"></h1>
				</div>

			</div>

			<h1 id="logo"><a href="/"></a></h1>

			<div class="clear"></div>

			<!-- menu -->
			<div id="menu-bar">
				<ul class="dropdown">
					<li>
						<a href="/">Home</a>
					</li>
					<li>
						<a href="/nature.html">Nature</a>
					</li>
					<li>
						<a href="/portrait.html">Portraits</a>
					</li>
					<li>
						<a href="/travel.html">Edibles</a>
					</li>
					<li>
						<a href="/contact.html">Contact / About</a>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
			<!-- close menu -->
			
		  <?php print $page_top; ?>
		  <?php print $page; ?>
		  <?php print $page_bottom; ?>

			<div id="footer">
				Copyright © <?php print format_date(REQUEST_TIME, 'custom', 'Y') ?> Olivia Schultz. All rights reserved.
				<div class="clear"></div>
			</div>

		</div>

</body>
</html>