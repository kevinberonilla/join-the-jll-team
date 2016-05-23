<?php 
/*
Template Name: Admin Reports Import
*/
//get_header('admin'); 

//$cur_user_id = get_current_user_id();
//get_currentuserinfo();
//$cur_user_level = get_user_meta($cur_user_id, 'wp_user_level', true);
//$cur_user_adminid = get_user_meta($cur_user_id, 'admin_id', true);
//$cur_user_adminname = get_user_meta($cur_user_id, 'name', true);
//$current_user = wp_get_current_user();
//$cur_username = $current_user->user_login;

# Get the class for interacting with the Google Analytics
require_once('/home/jllvps/public_html/wp-content/plugins/google-analyticator/class.analytics.stats.php');

# Create a new Gdata call
$stats = new GoogleAnalyticsStats();

# Check if Google sucessfully logged in
if ( ! $stats->checkLogin() )
{
	return false;
}

$account = $stats->getSingleProfile();
$account = $account[0]['id'];

# Set the account to the one requested
$stats->setAccount($account);

# Get the latest stats
$before = date('Y-m-d', strtotime('-2 days'));
$today = date('Y-m-d');

try
{
	//getMetrics($metric, $startDate, $endDate, $dimensions = false, $sort = false, $filter = false, $limit = false)
    $result = $stats->getMetrics('ga:totalEvents, ga:eventValue', $before, $today, 'ga:eventCategory, ga:eventAction, ga:eventLabel, ga:date, ga:hour, ga:minute',false,false,10000);
}
catch(Exception $e)
{
    print 'GA Widget - there was a service error ' . $e->getCode() . ' : ' . $e->getMessage();
}

/****************************************************
 * Get Usage
*****************************************************/
require_once('/home/jllvps/public_html/wp-content/plugins/jllrecruits/APILogin.php');
$url = 'http://jointhejllteam.com/CRM/service/v3/rest.php';
$session_id = get_session_id();

$get_entry_list_parameters = array (
								'session' => $session_id,
								'module_name' => "TRACK_usage_tracking",
								'query' => "usage_date_c > '" . date('Y-m-d', strtotime('-5 days')) . "'",
								'order_by' => "usage_date_c DESC",
								'offset' => '0',
								'select_fields' => array ( 'name', 'usage_user_c', 'description', 'usage_date_c', 'usage_hits_c', 'usage_duration_c' ),
								'link_name_to_fields_array' => array ( ),
								'max_results' => '999',
								'deleted' => '0',
								'Favorites' => false
);
$get_entry_list_result = call( "get_entry_list", $get_entry_list_parameters , $url);

// build array of existing IDs for comparison
foreach ( $get_entry_list_result->entry_list as $key => $idRow )
{
	$idsRow[] = $idRow->name_value_list->name->value;
}

// add NEW usage records 
$usageArr = array();
foreach ( $result->rows as $key => $row )
{
	if ( !in_array(md5($row[0] . $row[2] . date('m/d/Y h:i a', strtotime( $row[3]." ".$row[4].":".$row[5] ))), $idsRow) )
	{
		// write new records to usage table
		$set_entry_parameters_Usage = array(
				  "session" => $session_id,
				  "module_name" => "TRACK_usage_tracking",
				  "name_value_list" => array(
											array( "name" => "name", "value" => md5($row[0] . $row[2] . date('m/d/Y h:i a', strtotime( $row[3]." ".$row[4].":".$row[5] ))) ),
											array( "name" => "description", "value" => $row[2] ),
											array( "name" => "usage_user_c", "value" => $row[0] ),
											array( "name" => "usage_date_c", "value" => date('Y-m-d H:i:s', strtotime( $row[3]." ".$row[4].":".$row[5] )) ),
											array( "name" => "usage_hits_c", "value" => $row[6] ),
											array( "name" => "usage_duration_c", "value" => gmdate("i:s", $row[7]/1000 ) ),
											),
				  );
		$set_entry_result_Usage = call("set_entry", $set_entry_parameters_Usage, $url);
	}
}


//get_footer();
?>