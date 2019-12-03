<?php

/*
 * @package   ANDYP - Footer Selector
 * @author    Andy Pearson <andy@londonparkour.com>
 * @copyright 2020 LondonParkour
 * 
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - Footer Selector
 * Plugin URI:        http://londonparkour.com
 * Description:       Allows you to select a particular page contents as your footer content.
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Text Domain:       andyp-footer-selector
 * Domain Path:       /languages
 */

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                  ACF Admin Page for Options & Settings                  │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/admin/acf_admin_page.php';
