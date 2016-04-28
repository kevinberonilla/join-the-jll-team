<?php 
/*
Template Name: Admin Reports
*/
get_header('admin'); 

$cur_user_id = get_current_user_id();
get_currentuserinfo();
$cur_user_level = get_user_meta($cur_user_id, 'wp_user_level', true);
$cur_user_adminid = get_user_meta($cur_user_id, 'admin_id', true);
$cur_user_adminname = get_user_meta($cur_user_id, 'name', true);
$current_user = wp_get_current_user();
$cur_username = $current_user->user_login;
?>

<script type="text/javascript">
// track page load in events
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Admin | Reports", , false]);
</script>

<?php
/*
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
$before = date('Y-m-d', strtotime('-1 day'));
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
//echo '<pre>'; print_r($result); echo '</pre>';
*/

// CRM variables
require_once('/home/jllvps/public_html/wp-content/plugins/jllrecruits/APILogin.php');

?>

<script>
$(document).ready(function() { 
    $("#allAdmins").tablesorter( {sortList: [[0,0], [1,0]]} );
    $("#analyticsData").tablesorter({
    	sortList: [[3,1]]
    });
    $("#recruitsByAdmin").tablesorter( {sortList: [[0,0], [1,0]]} );
});
</script>

<?php 
if ($cur_user_level >= 7)
{
?>
    <div class="container">
        <?php
		if ( $cur_user_level == 10 && !isset($_GET['report_id']) )
		{
			/****************************************************
			 * get Admin list
			 * *************************************************/
			 $url = 'http://jointhejllteam.com/CRM/service/v3/rest.php';
			 $session_id = get_session_id();
			 
			 $get_entry_list_parameters = array(
								   'session' => $session_id,
								   'module_name' => 'Contacts',
								   'query' => "contacts_cstm.is_admin_c = 1",
								   'order_by' => "",
								   'offset' => '0',
								   'select_fields' => array(
															'first_name',
															'last_name',
															//'name',
															'title',
															'email1',
															'phone_work',
															),
								   'link_name_to_fields_array' => array(
															array(
																'name' => 'accounts',
																'value' => array('name')
																),
															),
								   'max_results' => '999',
								   'deleted' => '0',
								   'Favorites' => false,
								   );
			$get_entry_list_result = call('get_entry_list', $get_entry_list_parameters, $url);
		?>
		<div class="row">
			<div class="col-md-12 admin-login">
    			<h3>All Admins</h3>
    			<em>* All times are represented in Eastern Time</em>
            </div> 
			<?php
			/*
			echo "<div style='display:none'>"; print_r($result);echo "</div>";
			echo '<pre>'; print_r($get_entry_list_result); echo '</pre>';
			foreach ($get_entry_list_result->entry_list as $key => $value)
			{
				//echo '<pre>' . $key . ":"; print_r($value); echo '</pre>';
				//echo '<pre>'; print_r($get_entry_list_result->relationship_list[$key]); echo '</pre>';
			}
			*/
			?>
			<table class="table table-striped" cellpadding="0" cellspacing="0" id="allAdmins" class="tablesorter">
			<thead>
			<tr>
				<th class="header">Office</th>
				<th class="header">First Name</th>
				<th class="header">Last Name</th>
				<th class="header">Email</th>
				<th class="header">Recruits</th>
				<th class="header">Admin Last Usage*</th>
				<th class="header">Admin Total Clicks</th>
				<th> </th>
			</tr>
			</thead>
			<tbody>
			<?php
			foreach ($get_entry_list_result->entry_list as $key => $value)
			{
				$office_arr = $get_entry_list_result->relationship_list[$key][0]->records[0];

				// count clicks
				/*
				$click_count = 0;
				$click_mostRecent = 0;
				foreach ( $result->rows as $row )
				{
					if ( $row[0] == $value->name_value_list->email1->value )
					{
						$click_count++;
						// get most recent click
						if ( strtotime($row[3]." ".$row[4].":".$row[5]) > $click_mostRecent )
						{
							$click_mostRecent = strtotime($row[3]." ".$row[4].":".$row[5]);
						}
					}
				}
				*/
				
			 	$get_entry_list_parameters_reports = array(
								   'session' => $session_id,
								   'module_name' => 'Contacts',
								   'query' => "contacts_cstm.is_admin_c <> 1 AND reports_to_id = '" . $value->id . "'",
								   'order_by' => "",
								   'offset' => '0',
								   'select_fields' => array(
															'first_name',
															'last_name',
															'name',
															'email1',
															'phone_work',
															),
								   'link_name_to_fields_array' => array( ),
								   'max_results' => '999',
								   'deleted' => '0',
								   'Favorites' => false,
								   );
				$get_entry_list_result_reports = call('get_entry_list', $get_entry_list_parameters_reports, $url);
				//echo '<pre>'; print_r($get_entry_list_result_reports); echo '</pre>';
				
				// Get Usage
				$get_entry_usage_list_parameters = array (
												'session' => $session_id,
												'module_name' => "TRACK_usage_tracking",
												'query' => "usage_user_c='" . $value->name_value_list->email1->value . "'",
												'order_by' => "usage_date_c DESC",
												'offset' => '0',
												'select_fields' => array ( 'usage_user_c', 'usage_date_c', 'usage_hits_c' ),
												'link_name_to_fields_array' => array ( ),
												'max_results' => '999999',
												'deleted' => '0',
												'Favorites' => false
				);
				$get_entry_usage_list_result = call( "get_entry_list", $get_entry_usage_list_parameters , $url);
				//echo "<pre>"; print_r($get_entry_usage_list_result); echo "</pre>";
				
				$click_count = $get_entry_usage_list_result->result_count;
				if ( $click_count > 0 )
				{
					$click_mostRecent = strtotime($get_entry_usage_list_result->entry_list[0]->name_value_list->usage_date_c->value);
				}
			?>
			<tr>
				<td><?php echo $office_arr->name->value; ?></td>
				<td><?php echo $value->name_value_list->first_name->value; ?></td>
				<td><?php echo $value->name_value_list->last_name->value; ?></td>
				<td><?php echo $value->name_value_list->email1->value; ?></td>
				<td><?php echo $get_entry_list_result_reports->result_count; ?></td>
				<td><?php if ( $click_count > 0 ) { echo date('n/d/Y g:i A', $click_mostRecent ); } else { echo "n/a"; } ?></td>
				<td><?php echo $click_count; ?></td>
				<td class="text-right">
					<div class="btn-group">
					<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"> More <span class="caret"></span> </button>
					<ul class="dropdown-menu text-left" role="menu">
					<li><a href="?report_id=recruits&admin_id=<?php echo $value->id ?>&admin_name=<?php echo urlencode($value->name_value_list->first_name->value . " " . $value->name_value_list->last_name->value); ?>">Recruits</a></li>
					<li><a href="?report_id=clickTracker&recruit_username=<?php echo urlencode($value->name_value_list->email1->value);?>">Click Tracker</a></li>
					</ul>
					</div>
				</td>
			</tr>
			<?php
			}
			?>
			</tbody>		
			</table>
		</div>
        <?php
		}
		?>

        <?php
		if ( ($cur_user_level == 8 && !isset($_GET['report_id'])) || ($cur_user_level == 10 && $_GET['report_id'] == 'recruits') )
		{
			/****************************************************
			 * get Admin's Recruit Report list
			 * *************************************************/
			 $url = 'http://jointhejllteam.com/CRM/service/v3/rest.php';
			 $session_id = get_session_id();
			 
			 if ( $_GET['report_id'] == 'recruits' && isset($_GET['admin_id']) )
			 {
			 	$admin_id = $_GET['admin_id'];
				$admin_name = urldecode($_GET['admin_name']);
			 } else {
			 	$admin_id = $cur_user_adminid;
				$admin_name = $current_user->user_firstname;
			 }
			 
			 $get_entry_list_parameters = array(
								   'session' => $session_id,
								   'module_name' => 'Contacts',
								   'query' => "contacts_cstm.is_admin_c <> 1 AND reports_to_id = '" . $admin_id . "'",
								   'order_by' => "",
								   'offset' => '0',
								   'select_fields' => array(
															'id',
															'first_name',
															'last_name',
															'name',
															'title',
															'email1',
															//'birthdate',
															),
								   'link_name_to_fields_array' => array(
															array(
																'name' => 'accounts',
																'value' => array('name')
																),
															array(
																'name' => 'meetings',
																'value' => array('date_start','date_end')
																),
															),
								   'max_results' => '999',
								   'deleted' => '0',
								   'Favorites' => false,
								   );
			$get_entry_list_result = call('get_entry_list', $get_entry_list_parameters, $url);
			//echo '<pre>'; print_r($get_entry_list_result); echo '</pre>';
		?>
		<div class="row">
			<div class="col-md-12 admin-login">
    			<h3><?php echo $admin_name; ?>'s Recruits</h3>
    			<em>* All times are represented in Eastern Time</em>
            </div> 
			<?php
			/*
			echo '<pre>'; print_r($get_entry_list_result); echo '</pre>';
			foreach ($get_entry_list_result->entry_list as $key => $value)
			{
				//echo '<pre>' . $key . ":"; print_r($value); echo '</pre>';
				//echo '<pre>'; print_r($get_entry_list_result->relationship_list[$key]); echo '</pre>';
			}
			*/
			?>
			<table class="table table-striped" cellpadding="0" cellspacing="0" id="recruitsByAdmin" class="tablesorter">
			<thead>
			<tr>
				<th class="header">First Name</th>
				<th class="header">Last Name</th>
				<th class="header">Email</th>
				<th class="header">Office</th>
				<th class="header">Start Date/Time*</th>
				<th class="header">End Date/Time*</th>
				<th class="header">Clicks</th>
				<th class="header">Last Usage*</th>
				<th> </th>
			</tr>
			</thead>
			<tbody>
			<?php
			foreach ($get_entry_list_result->entry_list as $key => $value)
			{
				$office_arr = $get_entry_list_result->relationship_list[$key][0]->records[0];
				//$session_arr = $get_entry_list_result->relationship_list[$key][1]->records[0];
				$all_sessions_arr = $get_entry_list_result->relationship_list[$key][1]->records;
				$session_arr = end($all_sessions_arr);
				
				/*
				// count clicks
				$click_count = 0;
				$click_mostRecent = 0;
				foreach ( $result->rows as $row )
				{
					if ( $row[0] == $value->name_value_list->title->value )
					{
						$click_count++;
						// get most recent click
						if ( strtotime($row[3]." ".$row[4].":".$row[5]) > $click_mostRecent )
						{
							$click_mostRecent = strtotime($row[3]." ".$row[4].":".$row[5]);
						}
					}
				}
				*/
				// Get Usage
				$get_entry_usage_list_parameters = array (
												'session' => $session_id,
												'module_name' => "TRACK_usage_tracking",
												'query' => "usage_user_c='" . $value->name_value_list->email1->value . "'",
												'order_by' => "usage_date_c DESC",
												'offset' => '0',
												'select_fields' => array ( 'usage_user_c', 'usage_date_c', 'usage_hits_c' ),
												'link_name_to_fields_array' => array ( ),
												'max_results' => '999999',
												'deleted' => '0',
												'Favorites' => false
				);
				$get_entry_usage_list_result = call( "get_entry_list", $get_entry_usage_list_parameters , $url);
				//print_r($get_entry_usage_list_parameters);
				//echo "<pre>"; print_r($get_entry_usage_list_result); echo "</pre>";
				
				$click_count = $get_entry_usage_list_result->result_count;
				if ( $click_count > 0 )
				{
					$click_mostRecent = strtotime($get_entry_usage_list_result->entry_list[0]->name_value_list->usage_date_c->value);
				}
			?>
			<tr>
				<td><?php echo $value->name_value_list->first_name->value; ?></td>
				<td><?php echo $value->name_value_list->last_name->value; ?></td>
				<td><?php echo $value->name_value_list->email1->value; ?></td>
				<td><?php echo $office_arr->name->value; ?></td>
				<td><?php echo date('n/d/Y g:i A', strtotime( '-5 hours' , strtotime($session_arr->date_start->value))); ?></td>
				<td><?php echo date('n/d/Y g:i A', strtotime( '-5 hours' , strtotime($session_arr->date_end->value))); ?></td>
				<td><?php echo $click_count; ?></td>
				<td><?php if ( $click_count > 0 ) { echo date('n/d/Y g:i A', $click_mostRecent ); } else { echo "n/a"; } ?></td>
				<td>
					<div class="btn-group">
					<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"> More <span class="caret"></span> </button>
					<ul class="dropdown-menu text-left" role="menu">
					<li><a href="?report_id=clickTracker&recruit_username=<?php echo urlencode($value->name_value_list->title->value);?>&recruit_name=<?php echo urlencode($value->name_value_list->name->value); ?>">Site Usage</a></li>
					<li><a href="/admin-recruits/?edit_recruit=<?php echo $value->name_value_list->id->value;?>">Edit</a></li>
					</ul>
					</div>
				</td>
			</tr>
			<?php
			}
			?>				
			</tbody>
			</table>
		</div>
        <?php
		}

		if ( $_GET['report_id'] == 'clickTracker' )
		{
			if ( $_GET['recruit_username'] )
			{
				$recruit_name = $_GET['recruit_name'];
			} else {
				$recruit_name = "All";
			}
		?>
        <div class="row">
			<div class="col-md-12 admin-login">
    			<h3><?php echo $recruit_name; ?> Usage Report</h3>
    			<em>* All times are represented in Eastern Time</em>
            </div> 
			<table class="table table-striped" cellpadding="0" cellspacing="0" id="analyticsData" class="tablesorter">
			<thead>
			<tr>
				<?php
				if ( !$_GET['recruit_username'] )
				{
				?>
				<th class="header">Username</th>
				<?php
				}
				?>
				<th class="header">Section | Page | Content | Type</th>
				<th class="header">Access Time*</th>
				<th class="header">Hits</th>
				<th class="header">Duration (mm:ss)</th>
			</tr>
			</thead>
			<tbody>
			<?php
			$url = 'http://jointhejllteam.com/CRM/service/v3/rest.php';
			$session_id = get_session_id();
			
			// Get Usage
			$get_entry_usage_list_parameters = array (
											'session' => $session_id,
											'module_name' => "TRACK_usage_tracking",
											'query' => "",
											'order_by' => "usage_date_c DESC",
											'offset' => '0',
											'select_fields' => array ( 'usage_user_c', 'description', 'usage_date_c', 'usage_hits_c', 'usage_duration_c' ),
											'link_name_to_fields_array' => array ( ),
											'max_results' => '999999',
											'deleted' => '0',
											'Favorites' => false
			);
			if ( $_GET['recruit_username'] )
			{
				$get_entry_usage_list_parameters['query'] = "usage_user_c='" . $_GET['recruit_username'] . "'";
			}
			$get_entry_usage_list_result = call( "get_entry_list", $get_entry_usage_list_parameters , $url);
			//echo "<pre>"; print_r($get_entry_usage_list_result); echo "</pre>";
			//echo "<pre>"; print_r($get_entry_usage_list_result->entry_list); echo "</pre>";			

			//foreach ( $result->rows as $row )
			foreach ( $get_entry_usage_list_result->entry_list as $row )
			{
				//$hit_date = date('n/d/Y g:i A', strtotime( $row[3]." ".$row[4].":".$row[5] ));
				$hit_date = date('n/d/Y g:i A', strtotime( $row->name_value_list->usage_date_c->value ));
				//$duration = gmdate("i:s", $row[7]/1000 );

				//if ( $row[0] == $_GET['recruit_username'] )
				if ( $row->name_value_list->usage_user_c->value == $_GET['recruit_username'] )
				{
					//echo "<tr><td>" . $row[2] . "</td><td nowrap>" . $hit_date . "</td><td>" . $row[6] . "</td><td>" . $duration . "</td></tr>";
					echo "<tr><td>" . $row->name_value_list->description->value . "</td><td nowrap>" . $hit_date . "</td><td>" . $row->name_value_list->usage_hits_c->value . "</td><td>" . $row->name_value_list->usage_duration_c->value . "</td></tr>";
				} else {
					if ( !$_GET['recruit_username'] )
					{
						//echo "<tr><td nowrap>" . $row[0] . "</td><td>" . $row[2] . "</td><td nowrap>" . $hit_date . "</td><td>" . $row[6] . "</td><td>" . $duration . "</td></tr>";
						echo "<tr><td nowrap>" . $row->name_value_list->usage_user_c->value . "</td><td>" . $row->name_value_list->description->value . "</td><td nowrap>" . $hit_date . "</td><td>" . $row->name_value_list->usage_hits_c->value . "</td><td>" . $row->name_value_list->usage_duration_c->value . "</td></tr>";
					}
				}
			}
			?>
			</tbody>
			</table>
		</div>
<?php
		}

} else {
?>
    <div class="container">
        <div class="row">
            <div class="col-md-3 admin-login">
                <h3><strong>Login</strong></h3>
                <?php wp_login_form(); ?>
            </div>
        </div>
    </div>
<?php
}
?>


<?php get_footer(); ?>