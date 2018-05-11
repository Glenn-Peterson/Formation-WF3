<?php 
get_header();
$mefolio_get_global_var = mefolio_global_var(); 
?>
<div class="block-content">
    <h3 class="block-title">
    <?php echo esc_html__('404', 'mefolio'); ?>
    </h3>
	<h3 class="subheading">
    <?php 
    if ($mefolio_get_global_var['error-title']) {
      echo esc_html($mefolio_get_global_var['error-title']);
    } else {
      echo esc_html__('Ooops! You are lost.', 'mefolio');
    }
    ?>
    <?php echo esc_html__('Go', 'mefolio'); ?> <a class="link" href="<?php echo esc_url(home_url( '/' )); ?>"><?php echo esc_html__('Home', 'mefolio'); ?></a>		
	</h3>
</div>
<?php get_footer(); ?>
