<?php 
/*
Template Name: Admin Recruits
*/
get_header('admin');

if ( isset($_POST['submit_recruit']) || isset($_POST['submit_edit_recruit']) )
{
	//echo "<pre>"; print_r($_POST); echo "</pre>";
	
	if ($_POST[optionsRadios] == "opt1")
	{
		// convert UTC time
		switch ( $_POST["recruit_start_zone"] )
		{
			case "EST":
				$_POST["recruit_start_date"] = date("m/d/Y h:i A", strtotime( '-5 hours' ));
				break;
			case "CST":
				$_POST["recruit_start_date"] = date("m/d/Y h:i A", strtotime( '-6 hours' ));
				break;
			case "MST":
				$_POST["recruit_start_date"] = date("m/d/Y h:i A", strtotime( '-7 hours' ));
				break;
			case "PST":
				$_POST["recruit_start_date"] = date("m/d/Y h:i A", strtotime( '-8 hours' ));
				break;
		}	
	}
	
	if ( $_POST["recruit_admin_id"] == "" )
	{
		$_POST["recruit_admin_id"] = 0;
	}
	
	if ( isset($_POST['submit_edit_recruit']) )
	{
		//jll_update_recruit( $recruit_id, $office, $start_date, $timezone, $recruit_admin_id )
		$jll_outcome = jll_update_recruit(
			$_POST["recruit_id"],
			$_POST["recruit_first_name"],
			$_POST["recruit_email"],
			$_POST["recruit_office"],
			$_POST["recruit_start_date"],
			$_POST["recruit_start_zone"],
			$_POST["recruit_admin_id"]
		);
	} else {
		$jll_outcome = jll_register_recruit(
			$_POST["recruit_username"],
			$_POST["recruit_first_name"],
			$_POST["recruit_last_name"],
			$_POST["recruit_email"],
			$_POST["recruit_office"],
			$_POST["recruit_start_date"],
			$_POST["recruit_start_zone"],
			$_POST["recruit_admin_id"]
		);
	} 
	
}
if (isset($_POST['submit_admin']))
{
	//echo "<pre>"; print_r($_POST); echo "</pre>";

	$jll_outcome = jll_register_admin(
		$_POST["admin_first_name"],
		$_POST["admin_last_name"],
		$_POST["admin_email"],
		$_POST["admin_office"]
	);
}

if (isset($_POST['delete_admin']))
{
	$jll_outcome = jll_delete_admin( $_POST["delete_admin_id"], $_POST["delete_admin_email"] );
	// try to go back to the add admin page
	$_GET['add_admin'] = 1;
}

$cur_user_id = get_current_user_id();
$cur_user_level = get_user_meta($cur_user_id, 'wp_user_level', true);
$current_user = wp_get_current_user();
$cur_username = $current_user->user_login;
?>

<script type="text/javascript">
// track page load in events
<?php
if ( $_GET['add_admin'] )
{
?>
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Admin | Add an Admin", , false]);
<?php
} else {
?>
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Admin | Add a Recruit", , false]);
<?php
}
?>
</script>

<script>
$(document).ready(function() { 
    $("#allAdmins").tablesorter( {sortList: [[0,0]]} );
});
</script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-migrate-1.0.0.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-datetimepicker.min.css">
<script>
jQuery(document).ready(function($) {
	
	$('.form_datetime').datetimepicker({
        weekStart: 1,
        todayBtn:  0,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 1,
		forceParse: 0,
        showMeridian: 1
    });
    
    $('.startDate-choice').change(function () {
        $('.option:visible').stop().slideUp('slow');
        var id = this.value;
        $('.' + id).stop().slideDown('slow');
        
    });
});
</script>

<?php 
if ($cur_user_level >= 7)
{
?>
<div class="container">
	<div class="row">
    	<div class="col-md-12">
        	<?php echo $jll_outcome; ?>
        </div>
    </div>
	<?php
	if ($cur_user_level == 10 && $_GET['add_admin'] )
	{
	?>
    <div class="row">
        <div class="col-md-6">

            <h3><strong>Add Admin</strong></h3>
            <br />

            <form class="form-horizontal" id="addAdmin" role="form" action="" method="post">
                <div class="form-group">
                    <label class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="admin_first_name" placeholder="Admin First Name" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="admin_last_name" placeholder="Admin Last Name" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="admin_email" placeholder="Admin Email" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Office / Market</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="admin_office">
                        	<?php jll_office_select_list(); ?>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" name="submit_admin" class="btn btn-default">Add Admin</button>
                        <script>
						
							<?php $_GET['oid']; ?>
                        
                        </script>
                    </div>
                </div>
            </form>
            <script>
            $("#addAdmin").validate();
            </script>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
        	<h3><strong>JLL Admins</strong></h3>
            <table class="table table-striped tablesorter" cellpadding="0" cellspacing="0" id="allAdmins">
            	<thead>
                <tr>
                    <th class="header">Office</th>
                    <th class="header">Email</th>
                    <th class="header">First Name</th>
                    <th class="header">Last Name</th>
                    <th> </th>
                    <th class="text-right">Action</th>
                </tr>
                </thead>
                <tbody>
				<?php jll_admins_list(); ?>
				</tbody>
            </table>
        </div>
    </div>
    
	<?php
	}

	if ($cur_user_level == 10 && $_GET['admin_id'] && !$_GET['add_admin'] )
	{
	?>
    <div class="row">
        <div class="col-md-6">

            <h3><strong>Delete Admin</strong></h3>
            <br />

            <form class="form-horizontal" id="deleteAdmin" role="form" action="" method="post">
            	<?php
				$admin = jll_get_admin( $_GET['admin_id'] );
				//echo "<pre>"; print_r($admin); echo "</pre>";
            	?>
            	
            	<input type="hidden" name="delete_admin_id" value="<?php echo $admin->id->value; ?>" />
            	<input type="hidden" name="delete_admin_email" value="<?php echo $admin->email1->value; ?>" />

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                    	<p>Admin: <?php echo $admin->name->value; ?></p>
                    	<p>Email: <?php echo $admin->email1->value; ?></p>
                    	<p>Office: <?php echo $admin->account_name->value; ?></p>
                    </div>
                </div>
            	
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" name="delete_admin" class="btn btn-default">Confirm (cannot be undone)</button>
                    </div>
                </div>

            </form>

            <h3><strong>Recruits</strong></h3>
           	<?php
           	// get recruits by admin array
			$recruits = jll_get_recruits_by_admin( $_GET['admin_id'] );
			//echo "<pre>"; print_r($recruits); echo "</pre>";
			?>
            <p>The following (<?php echo count($recruits); ?>) recruits will be moved to the master admin account.</p>
            <br />
            <table class="table table-striped">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            	<?php
				foreach ($recruits as $recruit)
				{
					//echo "<pre>"; print_r($recruit->name_value_list); echo "</pre>";
				?>
				<tr>
					<td><?php echo $recruit->name_value_list->name->value;?></td>
					<td><?php echo $recruit->name_value_list->email1->value; ?></td>
				</tr>
				<?php
				}
            	?>
            </table>
        </div>
    </div>
	<?php
	}

	if ( $_GET['edit_recruit'] )
	{
	// CRM variables
	$recruit = jll_get_recruit( $_GET['edit_recruit'] );
	//echo "<pre>"; print_r($recruit); echo "</pre>";
	//echo "<pre>"; echo get_user_meta( $cur_user_id, 'admin_id', true); echo "</pre>";
	?>
    <div class="row">
        <div class="col-md-6">
        	
            <h3><strong>Edit Recruit</strong></h3>
            <br />
            <form class="form-horizontal" id="editRecruit" role="form" action="" method="post">
            	<input type="hidden" name="recruit_admin_id" value="<?php echo get_user_meta( $cur_user_id, 'admin_id', true); ?>" />
            	<input type="hidden" name="recruit_id" value="<?php echo $recruit->id->value; ?>" />
            	<input type="hidden" name="recruit_first_name" value="<?php echo $recruit->first_name->value; ?>" />
            	<input type="hidden" name="recruit_email" value="<?php echo $recruit->email1->value; ?>" />
                <div class="form-group">
                    <label class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" disabled="true" class="form-control" name="recruit_full_name" value="<?php echo $recruit->name->value; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" disabled="true" class="form-control" name="recruit_username" value="<?php echo $recruit->email1->value; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Office / Market</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="recruit_office">
                        	<option value="<?php echo $recruit->account_id->value; ?>" selected><?php echo $recruit->account_name->value; ?></option>
                        	<?php jll_office_select_list(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">New Start Date/Time</label>
                    <div class="col-sm-9">
                    	<label class="radio-inline">
                    		<input type="radio" class="startDate-choice" name="optionsRadios" id="opt1" value="opt1" data-toggle="radio" checked> Start Now
                    	</label>
                    	<label class="radio-inline">
                    		<input type="radio" class="startDate-choice" name="optionsRadios" id="opt2" value="opt2" data-toggle="radio"> Select a Future Date
                    	</label>
                    	<div class="span9">
                    		<div class="option opt1">
                    			<!-- Blank -->
                    		</div>
                    		<div class="option opt2" style="display: none;">
                    			<div class="input-group date form_datetime col-md-9" data-date="<?php echo date("Y-m-d\Th:i:s\Z"); ?>" data-date-format="m/d/yyyy H:00 P" data-link-field="dtp_input1">
                    				<input name="recruit_start_date" class="form-control" type="text" value="" placeholder="Choose Start Date">
                    				<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Timezone</label>
                    <div class="col-sm-9">
        				<select class="form-control" name="recruit_start_zone">
        				<option value='EST'>EST</option>
        				<option value='CST'>CST</option>
        				<option value='MST'>MST</option>
        				<option value='PST'>PST</option>
        				</select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" name="submit_edit_recruit" class="btn btn-default">Update Recruit</button>
                        <button type="button" name="cancel" class="btn btn-default" onclick="window.location='/admin-recruits/'">Cancel</button>
                    </div>
                </div>
            </form>
            <script>
            $("#editRecruit").validate();
            </script>
        </div>
    </div>
	<?php
	}

	if ( !$_GET['admin_id'] && !$_GET['add_admin'] && !$_GET['edit_recruit'] )
	{
	?>
    <div class="row">
        <div class="col-md-6">
        	
            <h3><strong>Add Potential Recruit</strong></h3>
            <br />
            <?php
            //echo "<pre>"; echo get_user_meta( $cur_user_id, 'admin_id', true); echo "</pre>";
            ?>
            <form class="form-horizontal" id="addRecruit" role="form" action="" method="post">
            	<input type="hidden" name="recruit_admin_id" value="<?php echo get_user_meta( $cur_user_id, 'admin_id', true); ?>">
                <div class="form-group">
                    <label class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="recruit_first_name" placeholder="Potential Recruit First Name" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="recruit_last_name" placeholder="Potential Recruit Last Name" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="recruit_email" placeholder="Potential Recruit Email" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Office / Market</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="recruit_office">
                        	<?php jll_office_select_list(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Start Date/Time</label>
                    <div class="col-sm-9">
                    	<label class="radio-inline">
                    		<input type="radio" class="startDate-choice" name="optionsRadios" id="opt1" value="opt1" data-toggle="radio" checked> Start Now
                    	</label>
                    	<label class="radio-inline">
                    		<input type="radio" class="startDate-choice" name="optionsRadios" id="opt2" value="opt2" data-toggle="radio"> Select a Future Date
                    	</label>
                    	<div class="span9">
                    		<div class="option opt1">
                    			<!-- Blank -->
                    		</div>
                    		<div class="option opt2" style="display: none;">
                    			<div class="input-group date form_datetime col-md-9" data-date="<?php echo date("Y-m-d\Th:i:s\Z"); ?>" data-date-format="m/d/yyyy H:00 P" data-link-field="dtp_input1">
                    				<input name="recruit_start_date" class="form-control" type="text" value="" placeholder="Choose Start Date">
                    				<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Timezone</label>
                    <div class="col-sm-9">
        				<select class="form-control" name="recruit_start_zone">
        				<option value='EST'>EST</option>
        				<option value='CST'>CST</option>
        				<option value='MST'>MST</option>
        				<option value='PST'>PST</option>
        				</select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" name="submit_recruit" class="btn btn-default">Add Recruit</button>
                        <script>
						
							<?php $_GET['oid']; ?>
                        
                        </script>
                    </div>
                </div>
            </form>
            <script>
            $("#addRecruit").validate();
            </script>
        </div>
    </div>
	<?php
	}
	?>
</div>

<?php
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