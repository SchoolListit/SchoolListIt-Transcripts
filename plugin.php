<?php
/**
 * Plugin Name: SchoolListIt Transcripts
 * Plugin URI: http://SchooListIt.com/
 * Description: Student transcript backed up by blockchain with endpoints for teachers and schools to push grades, certificates, diplomas, awards, and degrees. It also contains a way for parents to leave encouraging notes for thier children. 
 * Author: megphillips91
 * Author URI: https://megphillips91.wordpress.com/
 * Version: 1.1.3
 * License: GPL2+
 * http://www.gnu.org/licenses/gpl-3.0.html
 *
 */

 /*
SchoolListIt Transcripts is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 2 of the License, or
 any later version.

SchoolListIt Transcripts is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with SchoolListIt Channel Changer. If not, see http://www.gnu.org/licenses/gpl-3.0.html.
 */
namespace SchoolListIt_Transcipts;

 // Exit if accessed directly.
 if ( ! defined( 'ABSPATH' ) ) {
 	exit;
 }
   /**
  * Include plugin files
  */
 require_once plugin_dir_path( __FILE__ ) . 'activate.php';
 require_once plugin_dir_path( __FILE__ ) . 'admin-settings.php';
 require_once plugin_dir_path( __FILE__ ) . 'endpoints.php';