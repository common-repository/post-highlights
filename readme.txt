=== post highlights ===
Contributors: leogermani, pedger
Donate link: http://post-highlights.hacklab.com.br
Plugin URI: http://post-highlights.hacklab.com.br
Tags: post, highlight, home
Requires at least: 3.0
Tested up to: 4.0
Stable tag: 2.6.2

Add a nice looking animated highlights box to you theme, and lets you highlight your posts

== Description ==

Add a nice looking animated highlights box to you theme, and lets you highlight your posts

Features:

* Beautiful Jquery Box with fade between each picture
* Localization ready
* Easy to build your own theme
* Permission manager lets you choose who can highlight posts in your site

Refer to the <a href="http://post-highlights.hacklab.com.br">plugin website</a> for a live demo and documentation on how to build your theme

Localizations:

English <BR>
Brazilian Portuguese <BR>
Belorussian - by <a href="http://www.fatcow.com">FatCow</a> <BR>
Dutch - by <a href="http://www.bodrumturkeytravel.com">Rene</a> <BR>
Romanian - by <a href="http://webhostinggeeks.com/">Web Geek Science</a> <BR>
Ukranian - Michael Yunat (<a href="http://getvoip.com/blog">http://getvoip.com</a>)

== Installation ==

. Download the package
. Extract it to the "plugins" folder of your wordpress
. In the Admin Panes go to "Plugins" and activate it

IMPORTANT: If you are upgrading from a previous version, deactivate and reactivate the plugin

== Usage ==

There are two ways to inser Post Highlights to your theme:

1. Using a Widget

Simply drag and drop the post highlights widget to a sidebar (note that only one post highlights widget instance per sidebar is allowed).

If you are using the widget, go to Post Highlights settings and check the option saying you want post highlights to automatically generate thumbnails for you

2. Adding to your theme code

Place the following code where you want the highlights to appear on your theme:

<?php if(function_exists("insert_post_highlights")) insert_post_highlights(); ?>

To highlight a post go to Manage > Posts and check the checkbox under the Highlight column

Go to Post Highlights > Settings to change some options, such as delay time, button color and size.

== Changelog ==

2.6.2 - Nov 18 2015
* Add hooks to allow the addition of custom fields to each post highlight

2.6.1 - Nov 3 2014
* Security fix in ajax requests (https://research.g0blin.co.uk/cve-2014-8087/)

2.6 - Oct 8 2014
* Make Post Highlights compatible with WordPress Multisite

2.5.2 - Jul 9 2014
* Avoid conflict with other post filters using meta_key and meta_value in the posts list page

2.5.1 - May 29 2014
* Added Ukraninan translation, thanks to Michael Yunat (<a href="http://getvoip.com/blog">http://getvoip.com</a>)

2.5 - Dec 16 2013
* Minify JS files using gruntjs and uglifyjs

2.4.1 - Dec 12 2013
* Update pt-br translation

2.4 - Dec 12 2013
* Use pre_get_posts action instead of a call to query_posts() for the filter in the posts list
* Add post_highlights_query_args filter
* Remove undefined variable notices

2.3.4 - Abr 16 2012
* Add Romanian translations - Thanks to Alexander Ovsov (Web Geek Science)

2.3.3 - Feb 24 2012
* Fixes problem with left arrow
* Fixes problem with sticky posts that would allways appear

2.3.2 - Nov 17 2011
* Fixes problem with Internet Explorer

2.3.1 - Sep 20 2011
* Fixes problem with new jQuery version, Google Chrome and setTimeout() when the window was ou of focus causing the repeated animations

2.3 - Sep 06 2011
* Fixes possible vulnerability
* Small fix on numbered navigation
* Adds widget

2.2 - Jul 08 2010
* Add option to choose in which order the posts should be loaded

2.1.1 - May 18 2010
* Fix theme Default 2 CSS bug for chrome in Windows (Thanks to Lucas Daniel)

2.1 - Feb 11 2010
* Possibility to highlight pages - Thanks to Pablo Faria
* Post Highlights can create and use its own thumbnail

2.0.1
* Layout fix for default theme on i.E
* Fix on JS prevents from JS error when no posts are highlighted

2.0 New version
