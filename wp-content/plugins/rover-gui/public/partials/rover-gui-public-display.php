<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       www.cheesecakeproductions.com
 * @since      1.0.0
 *
 * @package    Rover_Gui
 * @subpackage Rover_Gui/public/partials
 */

$plugin_short_code_id = $atts["id"];



/*
if checking page id to data in database to inport saves from database for the specific page

global $wpdb;
global $post;

$getpageid = get_the_ID();
$table_name = $wpdb->prefix . 'rover_gui_data';

$results = $wpdb->get_results("SELECT * FROM $table_name WHERE pagename='".$getpageid."' AND rowhidden='1' ");

$settings = $wpdb->get_results("SELECT * FROM $table_name WHERE id='1'");


if (count($results)> 0){
    if ( is_page($getpageid) ){
?>
	<!-- if page is already defined then content goes here -->
<?php
}else{ 
	//no content 
}
*/
?>

<script type="text/javascript"> 
jQuery(function ($) {});

  
</script>


<table id="full-body">
<tr>
<td id="rover-menu">
	<div class="rover-btn active" onclick="rover_btns(1)"><h3>Home</h3></div>
  <hr class="rover-menu-hr" />
	<div class="rover-btn" onclick="rover_btns(2)"><h3>Offenses</h3></div>
  <hr class="rover-menu-hr" />
	<div class="rover-btn" onclick="rover_btns(3)"><h3>Log Activity</h3></div>
  <hr class="rover-menu-hr" />
	<div class="rover-btn" onclick="rover_btns(4)"><h3>Network Activity</h3></div>
  <hr class="rover-menu-hr" />
	<div class="rover-btn" onclick="rover_btns(5)"><h3>Assets</h3></div>
  <hr class="rover-menu-hr" />
	<div class="rover-btn" onclick="rover_btns(6)"><h3>Reports</h3></div>
  <hr class="rover-menu-hr" />
	<div class="rover-btn" onclick="rover_btns(7)"><h3>Admin</h3></div>
  <hr class="rover-menu-hr" />
	<div class="rover-btn" onclick="rover_btns(8)"><h3>Help</h3></div>
</td>
<td id="rover-pages" class="rover-pages">
	<div id="rover-page-1" class="rover-page active"><h1>Dashboard</h1><div id="dumpdiv" class="dumpdiv"></div></div>
	<div id="rover-page-2" class="rover-page inactive"><!--Offenses-->
    <h1>Offenses</h1>
    <table id="offence_tbl">
      <tr>
        <th><h3>ID</h3></th>
        <th><h3>Description</h3></th>
        <th><h3>Offense Type</h3></th>
        <th><h3>Offence Source</h3></th>
        <th><h3>Magnitude</h3></th>
        <th><h3>Timestamp</h3></th>
      </tr>
      <tr class="table_data_dsn">
        <td><p>Feb 7 15:07:01</p></td>
        <td><p>2018&#8208;02&#8208;07t15&#58;07&#58;01&#46;357575&#43;00&#58;00</p></td>
        <td><p>Rover</p></td>
        <td><p>127&#46;0&#46;0&#46;1</p></td>
        <td><p>this some is test data</p></td>
        <td><p>5</p></td>
      </tr>
    </table></div>
  <div id="rover-page-3" class="rover-page inactive"><!--log Activity -->
    <h1>Log Activity</h1>
    <table id="log_activity_tbl">
      <tr>
        <th><h3>Time Generated</h3></th>
        <th><h3>Time Reported</h3></th>
        <th><h3>Hostname</h3></th>
        <th><h3>Source IP</h3></th>
        <th><h3>Message</h3></th>
        <th><h3>Severity &#40;Num&#41;</h3></th>
        <th><h3>Alert</h3></th>
      </tr>
      <tr class="table_data_dsn">
        <td><p>Feb 7 15:07:01</p></td>
        <td><p>2018&#8208;02&#8208;07t15&#58;07&#58;01&#46;357575&#43;00&#58;00</p></td>
        <td><p>Rover</p></td>
        <td><p>127&#46;0&#46;0&#46;1</p></td>
        <td><p>this some is test data</p></td>
        <td><p>5</p></td>
        <td><p>Notice</p></td>
      </tr>
      <tr class="table_data_dsn">
        <td><p>Feb 7 15:07:01</p></td>
        <td><p>2018&#8208;02&#8208;07t15&#58;07&#58;01&#46;357575&#43;00&#58;00</p></td>
        <td><p>Rover</p></td>
        <td><p>127&#46;0&#46;0&#46;1</p></td>
        <td><p>this some is test data</p></td>
        <td><p>5</p></td>
        <td><p>Notice</p></td>
      </tr>
    </table>
  </div>
	<div id="rover-page-4" class="rover-page inactive"><!--Network Activity-->
  	<h1>Network Activity</h1>
    <table id="network_activity_tbl">
      <tr>
        <th><h3>Time Generated</h3></th>
        <th><h3>Time Reported</h3></th>
        <th><h3>Hostname</h3></th>
        <th><h3>Source IP</h3></th>
        <th><h3>Message</h3></th>
        <th><h3>Severity &#40;Num&#41;</h3></th>
        <th><h3>Alert</h3></th>
      </tr>
      <tr class="table_data_dsn">
        <td><p>Feb 7 15:07:01</p></td>
        <td><p>2018&#8208;02&#8208;07t15&#58;07&#58;01&#46;357575&#43;00&#58;00</p></td>
        <td><p>Rover</p></td>
        <td><p>127&#46;0&#46;0&#46;1</p></td>
        <td><p>this some is test data</p></td>
        <td><p>5</p></td>
        <td><p>Notice</p></td>
      </tr>
      <tr class="table_data_dsn">
        <td><p>Feb 7 15:07:01</p></td>
        <td><p>2018&#8208;02&#8208;07t15&#58;07&#58;01&#46;357575&#43;00&#58;00</p></td>
        <td><p>Rover</p></td>
        <td><p>127&#46;0&#46;0&#46;1</p></td>
        <td><p>this some is test data</p></td>
        <td><p>5</p></td>
        <td><p>Notice</p></td>
  </div>
	<div id="rover-page-5" class="rover-page inactive">
    <h1>Assets</h1>
  </div>
	<div id="rover-page-6" class="rover-page inactive">
    <h1>Reports</h1>
  </div>
	<div id="rover-page-7" class="rover-page inactive">
    <h1>Admin</h1>
  </div>
	<div id="rover-page-8" class="rover-page inactive">
    <h1>Help</h1>
  </div>

</td>
</tr>
</table>


