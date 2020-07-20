<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package K_and_K_Hire_LTD
 */

get_header();
?>

<?php echo importTemplate('./layout/l-header'); ?>
<main class="l-index">
	<div class="landing" style="background-image: url(<?php echo resolve_asset_uri() . 'images/background/landing-background.jpg'; ?>)">
		<div class="l-container">
			<div class="landing-content">
				<h2 class="landing-title">K&K HIRE LTD</h2>
				<p class="landing-description">One of the south’s largest disabled school transport companies. Always maintaining the highest standards in comfort and safety, from the start of each journey to the end.</p>
				<?php echo importTemplate('./components/button', [
					'url'  =>  '/',
					'text' => 'FIND OUT MORE'
				]); ?>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();
