# U3A Theme

**Contributors:** Maikal Shrestha, Manish Shrestha, Subash Sunuwar  
**Tested up to:** WordPress 4.9.8  
**Stable tag:** 1.0  
**Version:** 1.0  
**License:** GPLv2 or later  
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html  
**Tags:** one-column, right-sidebar, flexible-header, accessibility-ready, custom-colors, custom-header, custom-menu, custom-logo, editor-style, featured-images, footer-widgets, post-formats, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready

This theme is specially designed for the client U3A (mainly focusing the older peoples). 

## Description

Even though this theme is specially designed for the client U3A (mainly focusing the older peoples), it can be used for other 
purposes as well. This theme is freely available for anyone to use and also source code is available at
https://github.com/mikesth007/cp5637-team-08 if you want to further improve on it. 

## Installation

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.


##How to

### Change Theme Details
To change the theme details, you have to go to package.json in the gulp directory or style.css in the root theme
folder and change the details such as Theme Name, Theme URI, Description, version etc.

### Build SCSS
* First you need to install, Node.JS with npm package.
* Go to, gulp directory in themes folder
* Then, Install gulp and other related plugins using npm (just run npm install command)
* After that, just run the command gulp

Your browsersync and scss conversion runtime all starts with the gulp file.

### Change Font
To change the font, you need to go to file functions.php and to the method u3atheme_fonts_url(). Currently, 
we are supporting two fonts from google but you can change the name and weights you want to use in your
theme and save it.

### Change styles
All the style files are located in the sass directory inside the u3atheme folder.
You can change any scss file and gulp will automatically create the styles.css.map file
and you can directly see the changes in the browser if you have gulp running with browsersync.

###

## Frequently Asked Questions

* Does this theme support any plugins? =

    u3atheme includes support for Infinite Scroll in Jetpack.

### Credits
* Based on Underscores http://underscores.me/, (C) 2012-2016 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)

## Copyright

U3A WordPress Theme, Copyright 2016 WordPress.org
U3A is distributed under the terms of the GNU GPL

U3A bundles the following third-party resources:

normalize.css, Copyright 2012-2016 Nicolas Gallagher and Jonathan Neal
**License:** MIT
Source: https://necolas.github.io/normalize.css/

## Changelog

### 1.0
* Released: September 21, 2018  
Initial Release
