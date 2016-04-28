<?php 
/*
Template Name: Admin Home
*/
get_header('admin'); 

$current_user = wp_get_current_user();
$cur_username = $current_user->user_login;
$cur_user_id = get_current_user_id();
$cur_first_name = get_user_meta($cur_user_id, 'first_name', true);
$cur_last_name = get_user_meta($cur_user_id, 'last_name', true);
$cur_user_level = get_user_meta($cur_user_id, 'wp_user_level', true);
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

<?php
if ($cur_user_level >= 7)
{
?>
<script type="text/javascript">
// track page load in events
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Admin | Login", , false]);
</script>

    <div class="container">
        <div class="row">
            <div class="col-md-12 admin-login">
            
    			<h3><strong>Welcome <?php echo $cur_first_name . ' ' . $cur_last_name; ?></strong></h3>
    
            </div>
        </div>
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