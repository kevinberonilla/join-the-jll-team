<?php
/*
Plugin Name: JLL Recruits
Plugin URI: http://freydesigngroup.com
Description: JLL Recruits Manager
Version: 1.0
Author: Nerijus Baniukevicius
*/


///
/// Global Functions
///

// include login function
include( plugin_dir_path( __FILE__ ) . 'APILogin.php');

function get_session_id( $username='APIuser', $md5password='8d95a37782fa35632462a2a4a2fad9ea', $url='http://jllvps.com/CRM/service/v3/rest.php' )
{
	$login_parameters = array(
						  "user_auth"=>array(
											 "user_name"=>$username,
											 "password"=>$md5password,
											 "version"=>"1"
											 ),
						  'application_name'=>'jllrecruits',
						  'name_value_list'=>array(),
						  );
	
	$login_result = call("login", $login_parameters, $url);
	$session_id = $login_result->id;
	//echo "<pre>"; print_r($login_result); echo "</pre>";
	return $session_id;
}

///
/// General Functions
///

// Add Office
function jll_add_office($office_name, $office_location)
{
	$url = 'http://jllvps.com/CRM/service/v3/rest.php';
	$session_id = get_session_id();
		
	/****************************************************
	 * Check for existing Office
	*****************************************************/
	$get_entry_list_parameters = array (
									'session' => $session_id,
									'module_name' => "Accounts",
									'query' => "accounts.name = '" . $office_name . "'",
									'order_by' => "",
									'offset' => '0',
									'select_fields' => array ( 'name', 'billing_address_city' ),
									'link_name_to_fields_array' => array ( ),
									'max_results' => '1',
									'deleted' => '0',
									'Favorites' => false
	);
	$get_entry_list_result = call( "get_entry_list", $get_entry_list_parameters , $url);

	/****************************************************
	 * Create Office
	*****************************************************/
	if ( $get_entry_list_result->result_count == 0 ) // Office name does not exist
	{
		$set_entry_parameters_Office = array(
					  "session" => $session_id,
					  "module_name" => "Accounts",
					  "name_value_list" => array(
												array( "name" => "name", "value" => $office_name ),
												array( "name" => "billing_address_city", "value" => $office_location ),
												),
					  );
		$set_entry_result_Office = call("set_entry", $set_entry_parameters_Office, $url);
		
		return '<div class="alert alert-success">Office added.</div>';
	} else {
		return '<div class="alert alert-success">Office NOT added. ' . $office_name . ' already exists.</div>';
	}
}

// List All Offices
function jll_office_list()
{
	$url = 'http://jllvps.com/CRM/service/v3/rest.php';
	$session_id = get_session_id();
	
	/****************************************************
	 * List Offices (module="Accounts")
	*****************************************************/
	$get_entry_list_parameters = array (
									'session' => $session_id,
									'module_name' => "Accounts",
									'query' => "",
									'order_by' => "",
									'offset' => '0',
									'select_fields' => array ( 'id', 'name', 'billing_address_city' ),
									'link_name_to_fields_array' => array ( ),
									'max_results' => '999',
									'deleted' => '0',
									'Favorites' => false
	);
	$get_entry_list_result = call( "get_entry_list", $get_entry_list_parameters , $url);
	
	//foreach($office_list as $office_list)
	foreach ($get_entry_list_result->entry_list as $key => $value)
	{
	?>
		<tr>
			<td><?=$value->name_value_list->name->value?><?php //echo $office_list->office_name; ?></td>
			<td><?=$value->name_value_list->billing_address_city->value ?><?php //echo $office_list->office_location; ?></td>
			<td class="text-right">
				<div class="btn-group">
				<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span> </button>
				<ul class="dropdown-menu text-left" role="menu">
				<li><a href="?page_id=38&oid=<?=$value->name_value_list->id->value?><?php //echo $office_list->office_id; ?>">Edit</a></li>
				<li><a class="delete_item" href="?page_id=32&oid=<?=$value->name_value_list->id->value?><?php //echo $office_list->office_id; ?>">Delete</a></li>
				</ul>
				</div>
			</td>
		</tr>
	<?php
	}
}

// Delete Office
function jll_delete_office($office_id)
{
	$url = 'http://jllvps.com/CRM/service/v3/rest.php';
	$session_id = get_session_id();
	
	/****************************************************
	 * Set Office to deleted
	*****************************************************/
	$set_entry_parameters_Office = array(
					  "session" => $session_id,
					  "module_name" => "Accounts",
					  "name_value_list" => array(
												array( "name" => "id", "value" => $office_id ),
												array( "name" => "deleted", "value" => 1 ),
												),
					  );
	$set_entry_result_Office = call("set_entry", $set_entry_parameters_Office, $url);
	
	return '<div class="alert alert-success">Office deleted.</div>';
}

// Get Office Data
function jll_get_office_data($office_id)
{
	/*
	global $wpdb;
	$office_table = "jll_offices";
	
	$office_info = $wpdb->get_row(
		"
		SELECT *
		FROM $office_table
		WHERE office_id = $office_id
		"
	);
	*/

	$url = 'http://jllvps.com/CRM/service/v3/rest.php';
	$session_id = get_session_id();
	
	/****************************************************
	 * Check for existing Office (module="Accounts")
	*****************************************************/
	$get_entry_list_parameters = array (
									'session' => $session_id,
									'module_name' => "Accounts",
									'id' => $office_id,
									'select_fields' => array ( 'id', 'name', 'billing_address_city' )
	);
	$get_entry_list_result = call( "get_entry", $get_entry_list_parameters , $url);

	$office_data = array(
		"office_id" => $get_entry_list_result->entry_list[0]->name_value_list->id->value,
		"office_name" => $get_entry_list_result->entry_list[0]->name_value_list->name->value,
		"office_location" => $get_entry_list_result->entry_list[0]->name_value_list->billing_address_city->value,
	);
	//"office_id" => $office_info->office_id,
	//"office_name" => $office_info->office_name,
	//"office_location" => $office_info->office_location,
	
	return $office_data;
}

// Edit Office
function jll_edit_office($office_id, $office_name, $office_location)
{
	/*
	global $wpdb;
	$table = "jll_offices";
	
	$wpdb->update( 
		$table,
		array(
			'office_name' => $office_name,
			'office_location' => $office_location
		),
		array( 'office_id' => $office_id ), // used for where
		array(
			'%s',
			'%s'
		), 
		array( '%d' ) // used for where
	);
	*/
	
	$url = 'http://jllvps.com/CRM/service/v3/rest.php';
	$session_id = get_session_id();
	
	/****************************************************
	 * Update Office
	*****************************************************/
	$set_entry_parameters_Office = array(
					  "session" => $session_id,
					  "module_name" => "Accounts",
					  "name_value_list" => array(
												array( "name" => "id", "value" => $office_id ),
												array( "name" => "name", "value" => $office_name ),
												array( "name" => "billing_address_city", "value" => $office_location ),
												),
					  );
	$set_entry_result_Office = call("set_entry", $set_entry_parameters_Office, $url);
	
	return '<div class="alert alert-success">Officed data edited.</div>';
}

// List Offices
function jll_office_select_list()
{
	/*
	global $wpdb;
	$table = "jll_offices";
	
	// Get all the offices
	$office_list = $wpdb->get_results( 
		"
		SELECT *
		FROM $table
		ORDER BY office_name
		"
	);
	*/
	
	$url = 'http://jllvps.com/CRM/service/v3/rest.php';
	$session_id = get_session_id();
	
	/****************************************************
	 * List Offices
	*****************************************************/
	$get_entry_list_parameters = array (
									'session' => $session_id,
									'module_name' => "Accounts",
									'query' => "",
									'order_by' => "",
									'offset' => '0',
									'select_fields' => array ( 'id', 'name', 'billing_address_city' ),
									'link_name_to_fields_array' => array ( ),
									'max_results' => '999',
									'deleted' => '0',
									'Favorites' => false
	);
	$get_entry_list_result = call( "get_entry_list", $get_entry_list_parameters , $url);

	//foreach($office_list as $office_list)
	foreach ($get_entry_list_result->entry_list as $key => $value)
	{
		//echo "<option value='$office_list->office_id'>$office_list->office_name / $office_list->office_location</option>";
		echo "<option value='" . $value->name_value_list->id->value . "'>" . $value->name_value_list->name->value . " / " . $value->name_value_list->billing_address_city->value . "</option>";
	}
}

// Register Recruit
function jll_register_recruit($username, $first_name, $last_name, $email, $office, $start_date, $timezone, $recruit_admin_id )
{
	global $wpdb;
	$table = "jll_recruits";
	$meta_table = "wp_usermeta";
	global $current_user;
	get_currentuserinfo();
	
	$username = $email;
	$user_id = username_exists( $username );
	
	if ( !$user_id and email_exists($email) == false )
	{
		// convert times to EST (add 5 hours from UTC + hours from EST)
		switch ( $timezone )
		{
			case "EST":
				$start_date_EST = date('Y-m-d h:ia', strtotime( '+5 hours', strtotime($start_date) ));
				break;
			case "CST":
				$start_date_EST = date('Y-m-d h:ia', strtotime( '+6 hours', strtotime($start_date) ));
				break;
			case "MST":
				$start_date_EST = date('Y-m-d h:ia', strtotime( '+7 hours', strtotime($start_date) ));
				break;
			case "PST":
				$start_date_EST = date('Y-m-d h:ia', strtotime( '+8 hours', strtotime($start_date) ));
				break;
		}

		$mysqlStartDate = date('Y-m-d H:i:s', strtotime( '+3 minutes', strtotime($start_date_EST) ));
		$convert_exp_time = date('Y-m-d H:i:s', strtotime( '+2 days 3 minutes', strtotime($start_date_EST) ));
		//$exp_time = strtotime($convert_exp_time);
		//$wp_time = current_time('timestamp');
		
		// Create WP user and add some meta data
		$random_password = wp_generate_password( $length=12, $include_standard_special_chars=false );
		$user_id = wp_create_user( $username, $random_password, $email );
		
		add_user_meta( $user_id, 'recruit_office', $office);
		add_user_meta( $user_id, 'start_date', $mysqlStartDate);
		add_user_meta( $user_id, 'recruit_expired', 0);
		update_user_meta($user_id, 'first_name', $first_name);
		update_user_meta($user_id, 'last_name', $last_name);
		
		$capabilities = 'a:1:{s:10:"subscriber";b:1;}';
		$wpdb->query(
			"
			UPDATE $meta_table
			SET meta_value = '$capabilities'
			WHERE user_id = $user_id AND meta_key = 'wp_capabilities'
			"
		);

		$url = 'http://jllvps.com/CRM/service/v3/rest.php';
		$session_id = get_session_id();

		/****************************************************
		 * Create Recruit - Link to Office
		*****************************************************/
		// relate Recruit to Admin
		if ( !$recruit_admin_id )
		{
			$recruit_admin_id = "9f697102-233b-8a46-8d4c-5304f8ef6e4e";
		}
		
		$set_entry_parameters_Recruit = array(
					  "session" => $session_id,
					  "module_name" => "Contacts",
					  "name_value_list" => array(
												array( "name" => "first_name", "value" => $first_name ),
												array( "name" => "last_name", "value" => $last_name ),
												array( "name" => "email1", "value" => $email ),
												array( "name" => "title", "value" => $username ),
												array( "name" => "birthdate", "value" => $mysqlStartDate ),
												array( "name" => "password_c", "value" => $random_password ),
												array( "name" => "reports_to_id", "value" => $recruit_admin_id ),
												),
					  );
		$set_entry_result_Recruit = call("set_entry", $set_entry_parameters_Recruit, $url);
		
		// relate Recruit to Office
		$relate_record_parameters_Office = array(
								    'session' => $session_id,
									'module_name' => 'Accounts',
									'module_id' => $office,
									'link_field_name' => 'contacts',
									'related_ids' => array( $set_entry_result_Recruit->id ),
									);
		$relate_record_result_Office = call('set_relationship', $relate_record_parameters_Office, $url);

		/****************************************************
		 * Create session start to end dates
		*****************************************************/		
		// get admin email address
		$get_entry_list_parameters = array (
									'session' => $session_id,
									'module_name' => "Contacts",
									'id' => $recruit_admin_id,
									'select_fields' => array ( 'id', 'first_name', 'email1' )
		);
		$get_entry_list_result_Admin = call( "get_entry", $get_entry_list_parameters , $url);

		// set up invitation email body
		$email_body = "$first_name,<br><br>We're excited that you could be our next JLL teammate!<br><br>Find out why JLL is the right place for you:<br><br><a href='www.jointhejllteam.com'>www.jointhejllteam.com</a><br><br>Username: $username<br>Password: $random_password<br><br>Please note, this username and password will expire " . date('M jS \a\t g:iA', strtotime( '+2 days 3 minutes', strtotime($start_date) )) . " " . $timezone . ".";

		// create the session
		$set_entry_parameters_Session = array(
					  "session" => $session_id,
					  "module_name" => "Meetings",
					  "name_value_list" => array(
												array( "name" => "name", "value" => $first_name . ' – find out why you should Join the JLL Team!' ),
												array( "name" => "date_start", "value" => $mysqlStartDate ),
												array( "name" => "date_end", "value" => $convert_exp_time ),
												array( "name" => "duration_hours", "value" => '48' ),
												array( "name" => "description", "value" => $email_body ),
												array( "name" => "outlook_id", "value" => $get_entry_list_result_Admin->entry_list[0]->name_value_list->email1->value ),
												),
					  );
		$set_entry_result_Session = call("set_entry", $set_entry_parameters_Session, $url);
		
		// relate Session to Recruit
		$relate_record_parameters_Session = array(
								    'session' => $session_id,
									'module_name' => 'Meetings',
									'module_id' => $set_entry_result_Session->id,
									'link_field_name' => 'contacts',
									'related_ids' => array( $set_entry_result_Recruit->id ),
									);
		$relate_record_result_Session = call('set_relationship', $relate_record_parameters_Session, $url);

		// schedule Admin reminder email
		// set up reminder email body
		$reminder_email_body = $get_entry_list_result_Admin->entry_list[0]->name_value_list->first_name->value . ",<br><br>Your recruit, " . $first_name . " " . $last_name . "'s, access to our JLL Recruiting site has expired.<br><br>To view an activity report on which content was most important to " . $first_name . ", click <a href='http://jllvps.com/admin/?page_id=42'>HERE</a>. This report will help you identify where to focus your next conversation with " . $first_name . ".<br><br>For any questions, contact Gina Kacamburas at <a href='mailto:gina.kacamburas@am.jll.com'>gina.kacamburas@am.jll.com</a>.";

		$set_entry_parameters_AdminReminder = array(
					  "session" => $session_id,
					  "module_name" => "Meetings",
					  "name_value_list" => array(
												array( "name" => "name", "value" => $get_entry_list_result_Admin->entry_list[0]->name_value_list->first_name->value . ' - ' . $first_name . ' ' . $last_name . '\'s password to the JLL Recruiting site has expired' ),
												array( "name" => "date_start", "value" => $convert_exp_time ),
												array( "name" => "duration_hours", "value" => '1' ),
												array( "name" => "description", "value" => $reminder_email_body ),
												array( "name" => "outlook_id", "value" => 'gina.kacamburas@am.jll.com' ),
												),
					  );
		$set_entry_result_AdminReminder = call("set_entry", $set_entry_parameters_AdminReminder, $url);
		
		// relate Reminder to Admin
		$relate_record_parameters_AdminReminder = array(
								    'session' => $session_id,
									'module_name' => 'Meetings',
									'module_id' => $set_entry_result_AdminReminder->id,
									'link_field_name' => 'contacts',
									'related_ids' => array( $get_entry_list_result_Admin->entry_list[0]->name_value_list->id->value ),
									);
		$relate_record_result_AdminReminder = call('set_relationship', $relate_record_parameters_AdminReminder, $url);

		return "<div class='alert alert-success'>User $username has been added. Login information will be emailed to $email on " . date( 'M jS \a\t g:iA' , strtotime($start_date) ) . " " . $timezone . ", session will be valid for 48 hours.</div>";
	} else {
		return '<div class="alert alert-danger">That Email already exists.</div>'; 
	}
}

// Register JLL Admin
function jll_register_admin($first_name, $last_name, $email, $office)
{
	global $wpdb;
	$table = "jll_recruits";
	$meta_table = "wp_usermeta";
	global $current_user;
	get_currentuserinfo();
	
	$username = str_replace('+', '', $email);
	$user_id = username_exists( $username );
	
	if ( !$user_id and email_exists($email) == false )
	{
		// Create WP user and add some meta data
		$random_password = wp_generate_password( $length=12, $include_standard_special_chars=false );
		$user_id = wp_create_user( $username, $random_password, $email );
		
		add_user_meta( $user_id, 'recruit_office', $office);
		add_user_meta( $user_id, 'start_date', '2099-1-1 1:11:11');
		update_user_meta($user_id, 'first_name', $first_name);
		update_user_meta($user_id, 'last_name', $last_name);
		update_user_meta($user_id, 'wp_user_level', '8');
		
		$capabilities = 'a:1:{s:13:"administrator";s:1:"1";}';
		$wpdb->query(
			"
			UPDATE $meta_table
			SET meta_value = '$capabilities'
			WHERE user_id = $user_id AND meta_key = 'wp_capabilities'
			"
		);

		$url = 'http://jllvps.com/CRM/service/v3/rest.php';
		$session_id = get_session_id();

		/****************************************************
		 * Create Admin - Link to Office
		*****************************************************/
		$set_entry_parameters_Admin = array(
					  "session" => $session_id,
					  "module_name" => "Contacts",
					  "name_value_list" => array(
												array( "name" => "first_name", "value" => $first_name ),
												array( "name" => "last_name", "value" => $last_name ),
												array( "name" => "email1", "value" => $email ),
												array( "name" => "password_c", "value" => $random_password ),
												array( "name" => "is_admin_c", "value" => '1' ),
												),
					  );
		$set_entry_result_Admin = call("set_entry", $set_entry_parameters_Admin, $url);
		
		add_user_meta( $user_id, 'admin_id', $set_entry_result_Admin->id );
		
		// relate Admin to Office
		$relate_record_parameters_Office = array(
								    'session' => $session_id,
									'module_name' => 'Accounts',
									'module_id' => $office,
									'link_field_name' => 'contacts',
									'related_ids' => array( $set_entry_result_Admin->id ),
									);
		$relate_record_result_Office = call('set_relationship', $relate_record_parameters_Office, $url);

		// Email details to Admin
		$recipients = array(
			//$current_user->user_email,
			$email
		);
		$subject = $first_name . " – you have been granted access to the JLL Recruiting Site!";
		$message = "
		$first_name,
		<br><br>
		You have been granted exclusive access to our JLL Recruiting Site! Your unique username and password is shown below. 
		<br><br>
		<a href='http://www.jointhejllteam.com/'>www.jointhejllteam.com</a>
		<br><br>
		Username: $username
		<br>
		Password: $random_password
		<br><br>
		<em>NOTE – This username/password is unique to you, and should NOT be shared. Please keep a copy of this email for your records.</em>
		<br><br>
		<strong>How to request access for a recruit</strong>
		<br>
		You may request a 48-hour expiring link be sent to a recruit by simply logging in to the site and inputting the recruit's name and email address.
		The automated system will take care of everything else. To see the message that will be sent to the recruit, 
		click <a href='http://www.joneslanglasalle.com/MediaResources/AM/Email/Brokerage/Brokerage/EmailtoRecruit.pdf'>HERE</a>.
		<br><br>
		<strong>Gaining insights</strong>
		<br>
		Upon expiration of the 48-hour link, you will receive an activity report detailing how the recruit viewed the site, 
		giving you valuable insight into their key interests and assisting you in your next conversation. 
		<br><br>
		If you have any questions about this program, please contact Gina Kacamburas at <a href='mailto:gina.kacamburas@am.jll.com'>gina.kacamburas@am.jll.com</a>.
		";
		
		$headers = 'From: Gina Kacamburas <gina.kacamburas@am.jll.com>' . "\r\n";
		add_filter('wp_mail_content_type',create_function('', 'return "text/html"; '));
		wp_mail($recipients, $subject, $message, $headers);
		
		return "<div class='alert alert-success'>Admin user $username has been added. Login information will be emailed to $email.</div>";
	} else {
		return '<div class="alert alert-danger">That Email already exists.</div>'; 
	}
}
