<?php
/**
 * Title: Default header
 * Slug: bsoj/header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>
<div class="main-header hover-effect">
	<div class="main-header-inner">
		<div class="cont">
			<a href="<?php echo get_site_url()?>">
				<div class="main-logo">
				</div>
			</a>
		</div>
		<div class="cont menu">
			<span class="main-menu">
				<a href="<?php echo get_site_url()?>/info">Info</a>
				<a href="<?php echo get_site_url()?>/news">News</a>
				<a href="<?php echo get_site_url()?>/contact">Contact</a>
				<a href="<?php echo get_site_url()?>/apply" id="apply">Apply!</a>
			</span>
		</div>
	</div>
</div>
<style>
	.main-logo {
		margin: 22px 25px;
		height: 16px;
		width: 84px;
		mask-image: url(<?php echo esc_url( get_template_directory_uri() . '/assets/images/xsv-logo.png' ); ?>);
		mask-repeat: no-repeat;
		mask-size: contain;
		background: #B3405C;
	}
	body {
		font-family: "Formular", sans-serif;
		color: rgba(255, 255, 255, .9);
		background: #120709;
		width: 100vw;
		overflow-x: hidden;
		transition: .3s;
	}
	.main-menu a {
		text-decoration: none;
		color: rgba(255, 255, 255, .9);
		font-weight: 400;
		margin: 0 16px;
		transition: .3s;
	}
	.main-menu a:hover {
		color: rgb(223, 165, 179);
	}
	.main-menu {
		float: right;
		line-height: 60px;
		margin-right: 20px;
	}
	.main-header {
		color: rgba(255, 255, 255, .9);
		position: fixed;
		top: 1vw;
		left: calc(50vw - 390px);
		width: 800px;
		height: 60px;
		border: solid 2px rgba(179, 64, 92, .6);
		background-color: rgba(179, 64, 92, 0.1);
		-webkit-backdrop-filter: blur(42px) brightness(40%);
		backdrop-filter: blur(42px) brightness(40%);
		z-index: 1000;
		transition: .3s;
	}
	.main-header-inner {
		display: flex;
		vertical-align: middle;
		justify-content: space-between;
	}
	.menu.cont {
		float: right;
	}
	#apply {
		color: rgba(255, 255, 255, .9);
		background: #B3405C;
		background-position: 50%;
		padding: 6px;
		transition: .3s;
	}
	#apply:hover {
		background: #B3405C;
		filter: scale(1.1);
	}
	.inter {
		font-family: 'Inter', sans-serif;
	}
	.hover-effect:hover {
            transform: scale(1.03) !important;
    }
	.page-title .wp-block-post-title {
		background: url(<?php echo esc_url( get_template_directory_uri() . '/assets/background.png' ); ?>);
		background-size: 200% 200%;
		margin: 0;
		width: fit-content;
		padding: 2px 10px;
		text-wrap: nowrap;
		text-transform: uppercase;
		color: rgb(21, 9, 12);
		margin: 0;
		font-size: 32px;
		font-weight: 600;
		-webkit-text-stroke: 1px black;
		position: relative;
		left: -6px;
	}
	.wp-block-post-title.news-title {
		margin-left: max(calc(50vw - 262px), 13px);
	}
	
	/* mobile view */
	@media only screen and (max-width: 900px) {
		.main-header {
			width: 96vw;
			position: fixed;
			left: calc(2vw - 2px);
		}
		.main-logo {
			margin: 22px 10px;
		}
		.main-menu {
			margin-right: 10px;
		}
		.main-menu a {
			margin: 0 4px;
			font-size: 13px;
		}
		.main-cta {
			line-height: 54px;
		}
	}
</style>