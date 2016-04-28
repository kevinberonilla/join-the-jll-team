<?php 
/*
Template Name: Admin Offices
*/
get_header('admin');

$del_office_id = $_GET['oid'];

if ($del_office_id)
{
	$jll_outcome = jll_delete_office($del_office_id);
}


$cur_user_id = get_current_user_id();
$cur_user_level = get_user_meta($cur_user_id, 'wp_user_level', true);
$current_user = wp_get_current_user();
$cur_username = $current_user->user_login;
?>

<script type="text/javascript">
// track page load in events
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Admin | Offices", , false]);
</script>



<script>
$(document).ready(function() {
	$(".delete_item").click(function(){
		 return confirm("Do you want to delete?");
	});
});
</script>




<?php 
if ($cur_user_level >= 7) {
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        	<h3><strong>JLL Offices</strong> <a href="?page_id=36">+</a></h3>
            <table class="table table-striped">
                <tr>
                    <th>Office</th>
                    <th>Market</th>
                    <th class="text-right"></th>
                </tr>
				<?php jll_office_list(); ?>
            </table>
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