<?php

# Fresh Store Builder Template
# Configuration File
# http://www.freshstorebuilder.com/

# General template information
$template['meta']['uid'] = 'html5-reset';
$template['meta']['name'] = 'HTML5 Reset';
$template['meta']['author'] = 'Austin Gulati';
$template['meta']['url'] = 'http://austingulati.com/';
$template['meta']['parent'] = '';

/* Options */

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

# Product Listing Row Count
$t = array();
$t['name'] = 'Product Listing Row Count';
$t['description'] = 'The number of products that go across in a row on a product listing page.';
$t['datatype'] = 'int';
$t['options'] = '';
$t['editable'] = '1';
$t['default_value'] = '4';
$template['options']['PRODUCTLISTING_ROW_COUNT'] = $t;

# Category Listing Row Count
$t = array();
$t['name'] = 'Category Listing Row Count';
$t['description'] = 'The number of categories that go across in a row on a category listing page.';
$t['datatype'] = 'int';
$t['options'] = '';
$t['editable'] = '1';
$t['default_value'] = '2';
$template['options']['CATEGORYLISTING_ROW_COUNT'] = $t;

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

# If you're adding images, you probably want them to appear above these admin stripe images.

/* Admin Stripe Images */
# Quick Edit
$i = array();
$i['name'] = 'Admin Stripe Quick Edit';
$i['description'] = 'The icon that appears in the admin stripe for quick edit.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/admin_quickeditshow.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_QUICK_EDIT'] = $i;

# Edit
$i = array();
$i['name'] = 'Admin Stripe Edit';
$i['description'] = 'The icon that appears in the admin stripe for edit.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/admin_edit.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_EDIT'] = $i;

# List Products
$i = array();
$i['name'] = 'Admin Stripe List Products';
$i['description'] = 'The icon that appears in the admin stripe for list products.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/admin_productlist.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_LIST_PRODUCTS'] = $i;

# Autopopulate
$i = array();
$i['name'] = 'Admin Stripe Autopopulate';
$i['description'] = 'The icon that appears in the admin stripe for autopopulate.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/admin_autopopulateedit.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_AUTOPOPULATE'] = $i;

# Run Autopopulate
$i = array();
$i['name'] = 'Admin Stripe Run Autopopulate';
$i['description'] = 'The icon that appears in the admin stripe for run autopopulate.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/admin_autopopulatego.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_RUN_AUTOPOPULATE'] = $i;

# List Products
$i = array();
$i['name'] = 'Admin Stripe List Products';
$i['description'] = 'The icon that appears in the admin stripe for list products.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/admin_productlist.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_LIST_PRODUCTS'] = $i;

# List Categories
$i = array();
$i['name'] = 'Admin Stripe List Categories';
$i['description'] = 'The icon that appears in the admin stripe for list categories.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/admin_categorylist.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_LIST_CATEGORIES'] = $i;

# List Manufacturers
$i = array();
$i['name'] = 'Admin Stripe List Manufacturers';
$i['description'] = 'The icon that appears in the admin stripe for list manufacturers.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/admin_manufacturerlist.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_LIST_MANUFACTURERS'] = $i;

# List Pages
$i = array();
$i['name'] = 'Admin Stripe List Pages';
$i['description'] = 'The icon that appears in the admin stripe for list pages.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/admin_productlist.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_LIST_PAGES'] = $i;

# Generate Content
$i = array();
$i['name'] = 'Admin Stripe Generate Content';
$i['description'] = 'The icon that appears in the admin stripe for generate content.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/admin_generatecontent.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_GENERATE_CONTENT'] = $i;

# Edit Manufacturer
$i = array();
$i['name'] = 'Admin Stripe Edit Manufacturer';
$i['description'] = 'The icon that appears in the admin stripe for edit manufacturer.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/admin_manufactureredit.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_EDIT_MANUFACTURER'] = $i;

# Amazon
$i = array();
$i['name'] = 'Admin Stripe Amazon';
$i['description'] = 'The icon that appears in the admin stripe for Amazon.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/amazon_'.strtolower(AMAZON_LOCALE).'.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_AMAZON'] = $i;

# Product Status (Disable)
$i = array();
$i['name'] = 'Admin Stripe Product Status (Disable)';
$i['description'] = 'The icon that appears in the admin stripe for disabling product status.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/admin_disable.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_PRODUCT_STATUS_DISABLE'] = $i;

# Product Status (Enable)
$i = array();
$i['name'] = 'Admin Stripe Product Status (Enable)';
$i['description'] = 'The icon that appears in the admin stripe for enabling product status.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/admin_enable.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_PRODUCT_STATUS_ENABLE'] = $i;

# Hide
$i = array();
$i['name'] = 'Admin Stripe Hide';
$i['description'] = 'The icon that appears in the admin stripe for hide.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/admin_hide.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_HIDE'] = $i;

# Delete
$i = array();
$i['name'] = 'Admin Stripe Delete';
$i['description'] = 'The icon that appears in the admin stripe for delete.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/admin_delete.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_DELETE'] = $i;

# Edit Images
$i = array();
$i['name'] = 'Admin Stripe Edit Images';
$i['description'] = 'The icon that appears in the admin stripe for edit images.';
$i['type'] = 'html';
$i['cssselector'] = '';
$i['default_cssdecleration'] = '';
$i['width'] = '16';
$i['height'] = '16';
$i['forcedimensions'] = '0';
$i['default_src'] = '%TEMPLATEFOLDER%/icons/admin_image.png';
$i['default_alt'] = '';
$i['default_title'] = '';
$i['default_link'] = '';
$i['default_linktarget'] = '';
$i['default_linknofollow'] = '0';
$i['disable_link_settings'] = '0';
$i['default_disabled'] = '0';
$template['images']['ADMINSTRIPE_EDIT_IMAGES'] = $i;
