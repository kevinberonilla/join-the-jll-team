<?php 
/*
Template Name: JLL Login
*/

if (isset($_POST["reset_pass_request"])) {
	$jll_outcome = jll_reset_pass_request( $_POST["email"] );
}

if (isset($_POST["reset_pass"])) {
	$jll_outcome = jll_reset_pass( $_POST['user_id'], $_POST['old_pass'], $_POST['new_pass'], $_POST['cnf_pass'], $_POST['temp_pass'] );
}

get_header('admin');
$cur_user_id = get_current_user_id();
$current_user = wp_get_current_user();
$cur_username = $current_user->user_login;


if ($cur_user_id < 1)
{
?>
	<script>
    jQuery(document).ready(function($) {
        $('#user_login').addClass('form-control');
        $('#user_pass').addClass('form-control');
        $('.login-remember').addClass('hide');
        $('#wp-submit').addClass('btn');
        $('#wp-submit').addClass('btn-default');
    });
    </script>
    
    <div class="container">

		<div class="row">
    	<div class="col-md-12">
        	<?php echo $jll_outcome; ?>
        </div>
    	</div>
    
        <div class="row">
        <?php
        if ($_GET['resetpassword'])
		{
			//echo "<pre>"; print_r($_POST); echo "</pre>";
		?>
            <div class="col-md-3 admin-login">
                <?php
                if ( $_GET['confirm'] )
                {
                ?>
                <h3><strong>Confirm Admin Account</strong></h3>
                <?php
				} else {
                ?>
                <h3><strong>Reset password</strong></h3>
                <?php
				}
				
                if ( $_GET['token'] )
                {
                ?>
                <p>Enter your new password and confirm below.</p>
                <form name="reset_pass" id="reset_pass" action="http://jointhejllteam.com/jll-login/?resetpassword=<?php echo $_GET['resetpassword']; ?>&token=<?php echo urlencode($_GET['token']); ?>" method="post">
                	<input type="hidden" name="old_pass" value="<?php echo $_GET['token']; ?>">
                	<input type="hidden" name="user_id" value="<?php echo $_GET['resetpassword']; ?>">
	                <?php
	                if ( $_GET['confirm'] )
	                {
	                ?>
                	<p class="login-username">
                		<label for="temp_pass">Temporary Password</label>
                		<input type="password" name="temp_pass" id="temp_pass" class="input form-control" value="" size="20">
                	</p>
	                <?php
					}
	                ?>
                	<p class="login-username">
                		<label for="new_pass">New Password</label>
                		<input type="password" name="new_pass" id="new_pass" class="input form-control" value="" size="20">
                	</p>
                	<p class="login-username">
                		<label for="new_pass">Confirm Password</label>
                		<input type="password" name="cnf_pass" id="cnf_pass" class="input form-control" value="" size="20">
                	</p>
                	<p class="login-submit">
                		<input type="submit" name="reset_pass" id="reset_pass" class="button-primary btn btn-default" value="Reset Password">
                	</p>
                </form>
           
                <?php
                } else {
				?>
                <p>An email will be sent to you with instructions to reset your password. <strong>Recruits</strong>, please contact your recruiter for lost passwords.</p>
                <form name="reset_pass_request" id="reset_pass_request" action="http://jointhejllteam.com/jll-login/?resetpassword=1" method="post">
                	<p class="login-username">
                		<label for="email">Your Email Address</label>
                		<input type="text" name="email" id="email" class="input form-control" value="" size="20">
                	</p>
                	<p class="login-submit">
                		<input type="submit" name="reset_pass_request" id="reset_pass_request" class="button-primary btn btn-default" value="Submit">
                	</p>
                </form>
                <?php
                }
				?>
            </div>
		<?php
		} else {
			//standard login
		?>
            <div class="col-md-4 admin-login admin-border">
                <h3><strong>Welcome, please login</strong></h3>
                <?php wp_login_form(); ?>
                <a href="http://jointhejllteam.com/jll-login/?resetpassword=1">forgot password?</a>
            </div>
            <div class="col-md-4">
            <h3><strong>Request access to the site</strong></h3>
            <br>
            
                <div id="accordion" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        	<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Internal to JLL and need access?</a>
                        </div>

                        
                        <div id="collapseOne" class="panel-collapse collapse">
                        	<div class="padded">
							<?php echo do_shortcode( '[contact-form-7 id="132" title="Internal Access"]' ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        	<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Not a current JLL employee but would like access?</a>
                        </div>

                        
                        <div id="collapseTwo" class="panel-collapse collapse">
                        	<div class="padded">
							<?php echo do_shortcode( '[contact-form-7 id="133" title="External Access"]' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
		}
		?>
        </div>
    </div>
<?php
} else {
?>
	<script type="text/javascript">
	// track page load in events
	_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Login", , false]);
	</script>
    <meta http-equiv="refresh" content="0; url=http://jointhejllteam.com/">
<?php
}

get_footer();

?>