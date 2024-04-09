<?php
/**
 * Title: Default footer
 * Slug: bsoj/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group main-footer">
	<div class="main-logo"></div>
	<p>XSValley - Fulfill your full potential!</p>
	<a href="https://albertdomotor.ninja/" target="_blank" style="float: right;">Website by Albert Dömötör <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ad-logo.png" alt="" /></a>
	<p style="float: right; cursor: pointer;" class="gototop">Go to top 
		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
			<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
		</svg>
	</p>
</div>
<style>
	.main-footer {
		display: flex;
		flex-wrap: nowrap;
		padding-top: 20px;
	}
	.main-footer .main-logo {
		margin: 0;
		height: 42px;
		width: 84px;
		mask-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/xsv-logo.png);
		mask-repeat: no-repeat;
		mask-size: contain;
		mask-position: 50% 100%;
		background: #B3405C;
		margin-block-start: initial;
	}
	.main-footer p, .main-footer a{
		color: #B3405C;
		width: fit-content;
	}
	.main-footer a img {
		width: 22px;
		height: auto;
		position: relative;
		bottom: -1px;
	}
	.main-footer svg {
		width: 18px;
		height: 18px;
		position: relative;
		bottom: -4px;
	}
	@media screen and (max-width: 700px) {
		.main-footer {
			flex-direction: column;
			align-items: center;
		}
		.main-footer p, .main-footer a {
			text-align: center;
		}
		.main-footer .main-logo {
			margin: 0 auto;
		}
		.gototop {
			display: none;
		}
	}
</style>
<script>
	document.querySelector('.main-footer .gototop').addEventListener('click', () => {
		window.scrollTo(0, 0);
	});
</script>
<!-- /wp:group -->
