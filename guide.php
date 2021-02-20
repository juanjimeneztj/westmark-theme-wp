<?php

/**
 * Our custom dashboard page
 */

/** WordPress Administration Bootstrap */
require_once(ABSPATH . 'wp-load.php');
require_once(ABSPATH . 'wp-admin/admin.php');
require_once(ABSPATH . 'wp-admin/admin-header.php');
?>
<link rel="stylesheet" href="<?=get_site_url()?>/wp-content/themes/american_founders/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=get_site_url()?>/wp-content/themes/american_founders/css/dashboard.css">
<link rel="stylesheet" href="<?=get_site_url()?>/wp-content/themes/american_founders/css/theme.css">

<section id="gsweb-dashboard" class="p-4">
	<div class="container-fluid">
		<div class="row align-items-center justify-content-center">
			<div class="col-6 col-md-3">
				<figure><img src="<?=get_site_url()?>/wp-content/themes/american_founders/images/logo.png" alt=""></figure>
			</div>
			<div class="col-12">
				<h1 class="text-white text-center">Welcome to American Founders!</h1>
				<p class="text-white text-center">We hope this dashboard is to your liking and very useful for managing the website, here you will have direct access to different areas where you can customize and generate content in a more practical way.</p>
				<p class="text-white text-center">Theme created by <a href="https://juanjimeneztj.com/" style="color: #fff;">Juan Jiménez</a></p>
			</div>
		</div>
	</div>
</section>
<section id="guide" class="p-4">
	<div class="container-fluid">
	<div class="row">
			<div class="col">
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="pills-create-post-tab" data-toggle="pill" href="#pills-create-post" role="tab" aria-controls="pills-create-post" aria-selected="true">How to create a post?</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-add-widgets-tab" data-toggle="pill" href="#pills-add-widgets" role="tab" aria-controls="pills-add-widgets" aria-selected="false">How to add widgets on the site?</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-gsweb-theme-tab" data-toggle="pill" href="#pills-gsweb-theme" role="tab" aria-controls="pills-gsweb-theme" aria-selected="false">Modify theme appearance</a>
					</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-create-post" role="tabpanel" aria-labelledby="pills-create-post-tab">
						<h5>To generate a new post, you can create it directly from the main dashboard as shown in the following image:</h5>

						<figure class="py-3"><img class="img-fluid" src="<?=get_site_url()?>/wp-content/themes/american_founders/images/guide/create_post_0001.png" alt=""></figure>

						<h5>or you can go directly to the posts section by clicking on the left sidebar on the POSTS option, in this section you can do it in two different options which you can find both in the upper part and in the sidebar on the left.</h5>
						
						<figure class="py-3"><img class="img-fluid" src="<?=get_site_url()?>/wp-content/themes/american_founders/images/guide/create_post_0002.png" alt=""></figure>
						
						<div class="row align-items-center justify-content-center">
							<div class="col-12 col-md-6">
								<h1 class="text-center">On the next screen is where you can enter both the title of the post and its content</h1>
							</div>
							<div class="col-12 col-md-6">
								<figure class="py-3"><img class="img-fluid" src="<?=get_site_url()?>/wp-content/themes/american_founders/images/guide/create_post_0003.png" alt=""></figure>
							</div>
						</div>

						<div class="row align-items-center justify-content-center">
							<div class="col-12 col-md-9">
								<figure class="py-3"><img class="img-fluid" src="<?=get_site_url()?>/wp-content/themes/american_founders/images/guide/create_post_0004.png" alt=""></figure>
							</div>
							<div class="col-12 col-md-3">
								<h3>On this same screen you can find a section called categories, where you can choose the section to which the post belongs</h3>
							</div>
						</div>
						<div class="row align-items-center justify-content-center">
							<div class="col-12 col-md-3">
								<h3>There is also a section where you will have to add the main image of the post</h3>
							</div>
							<div class="col-12 col-md-9">
								<figure class="py-3"><img class="img-fluid" src="<?=get_site_url()?>/wp-content/themes/american_founders/images/guide/create_post_0005.png" alt=""></figure>
							</div>
						</div>
						<div class="row align-items-center justify-content-center">
							<div class="col-12">
								<h3>Last but not least, it is the option that allows users to add comments to the post, but these will not be reflected unless the site administrator approves them in advance.</h3>
							</div>
							<div class="col-12 col-md-6">
								<figure class="py-3"><img class="img-fluid" src="<?=get_site_url()?>/wp-content/themes/american_founders/images/guide/create_post_0006.png" alt=""></figure>
							</div>
							<div class="col-12 col-md-6">
								<figure class="py-3"><img class="img-fluid" src="<?=get_site_url()?>/wp-content/themes/american_founders/images/guide/create_post_0007.png" alt=""></figure>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-add-widgets" role="tabpanel" aria-labelledby="pills-add-widgets-tab">
						<div style="background: #D4D9F7;">
							<div class="d-flex justify-content-center" style="padding-bottom: 200px;">
								<h1 style="font-family: 'Indie Flower', cursive;position:absolute;top:80%;left:50%;transform: translate(-50%,-50%)">GSWEB  Dashboard</h1>
								<h4 style="font-family: 'Indie Flower', cursive;position:absolute;top:85%;left:50%;transform: translate(-50%,-50%)">(Work In Progress)</h4>
								<img src="<?=get_site_url()?>/wp-content/themes/american_founders/images/guide/wip.gif" alt="" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-gsweb-theme" role="tabpanel" aria-labelledby="pills-gsweb-theme-tab">
						<div style="background: #D4D9F7;">
							<div class="d-flex justify-content-center" style="padding-bottom: 200px;">
								<h1 style="font-family: 'Indie Flower', cursive;position:absolute;top:80%;left:50%;transform: translate(-50%,-50%)">GSWEB  Dashboard</h1>
								<h4 style="font-family: 'Indie Flower', cursive;position:absolute;top:85%;left:50%;transform: translate(-50%,-50%)">(Work In Progress)</h4>
								<img src="<?=get_site_url()?>/wp-content/themes/american_founders/images/guide/wip.gif" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="<?=get_site_url()?>/wp-content/themes/american_founders/js/bootstrap.bundle.min.js"></script>
<?php include(ABSPATH . 'wp-admin/admin-footer.php');
