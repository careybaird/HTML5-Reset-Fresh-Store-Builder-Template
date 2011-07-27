<?php

# Fresh Store Builder Template
# Configuration File
# http://www.freshstorebuilder.com/

# General template information
$template['meta']['uid'] = 'html5-reset';
$template['meta']['name'] = 'HTML5 Reset';
$template['meta']['author'] = 'Austin Gulati';
$template['meta']['url'] = 'http://austingulati.com/';

/* Options */

# Language
$t = array();
$t['name'] = 'Template Language';
$t['description'] = 'The language to use for images and default text.';
$t['datatype'] = 'options';
$t['options'] = 'en|de|it';
$t['editable'] = '1';
$t['default_value'] = 'en';
$template['options']['TEMPLATE_LANGUAGE'] = $t;

# Homepage Logos
$t = array();
$t['name'] = 'Homepage Brand Logos';
$t['description'] = 'The quantity of brand logos to show on the homepage.';
$t['datatype'] = 'int';
$t['options'] = '';
$t['editable'] = '1';
$t['default_value'] = '5';
$template['options']['HOME_LOGOS_QUANTITY'] = $t;

# Homepage Special Offers  
$t = array();
$t['name'] = 'Homepage Special Offers';
$t['description'] = 'The quantity of special offers to show on the homepage.';
$t['datatype'] = 'int';
$t['options'] = '';
$t['editable'] = '1';
$t['default_value'] = '3';
$template['options']['HOME_SPECIALS_QUANTITY'] = $t;

# Homepage Best Sellers
$t = array();
$t['name'] = 'Homepage Best Sellers';
$t['description'] = 'The quantity of best sellers to show on the homepage.';
$t['datatype'] = 'int';
$t['options'] = '';
$t['editable'] = '1';
$t['default_value'] = '3';
$template['options']['HOME_BESTSELLERS_QUANTITY'] = $t;

# Product Listing Quantity
$t = array();
$t['name'] = 'Product Listing Quantity';
$t['description'] = 'The quantity of products to show initially on the product listing pages.';
$t['datatype'] = 'int';
$t['options'] = '';
$t['editable'] = '0';
$t['default_value'] = '20';
$template['options']['PRODUCT_LISTING_QUANTITY'] = $t;

# Related Products on Product Detail
$t = array();
$t['name'] = 'Product Detail Related Products';
$t['description'] = 'The related products to show on the product detail pages.';
$t['datatype'] = 'int';
$t['options'] = '';
$t['editable'] = '1';
$t['default_value'] = '4';
$template['options']['PRODUCTDETAIL_RELATED_PRODUCTS'] = $t;

/* Images */
# Logo
$i = array();
$i['name'] = 'Main Logo Image';
$i['description'] = 'The logo that appears in the header.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '400';
$i['height'] = '200';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/images/logo.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '[PAGE]homepage';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['HEAD_LOGO'] = $i;
