<?php 
/*
Template Name: Admin Add Office
*/
get_header('admin');

if (isset($_POST["add_office"])) {
	$jll_outcome = jll_add_office(
		$_POST["office_name"],
		$_POST["office_location"]
	);
}



$cur_user_id = get_current_user_id();
$cur_user_level = get_user_meta($cur_user_id, 'wp_user_level', true);
$current_user = wp_get_current_user();
$cur_username = $current_user->user_login;
?>

<script type="text/javascript">
// track page load in events
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Admin | Add Office", , false]);
</script>

<?php 
if ($cur_user_level >= 7) {
?>


<div class="container">
	<div class="row">
    	<div class="col-md-12">
        	<?php echo $jll_outcome; ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
        
        
            <h3>Add office</h3>
            
            <form class="form-horizontal" role="form" action="" method="post">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Office</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="office_name" placeholder="Office Name">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">Market</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="office_location" placeholder="Office Location">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" name="add_office" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
            
            
        </div>
    </div>
</div>




    <?php
} else {
	?>
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-3 admin-login">
            
            
                <h3><strong>Administration Login</strong></h3>
                
                
                <?php wp_login_form(); ?>
                
                
            </div>
        </div>
    </div>
    
    
    <?php
}
?>




<?php get_footer(); ?>