<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head>
		<title><?php echo $title_atas; ?> - Ngodeapp <?php echo $title_atas; ?></title>
		<meta charset="utf-8" />
		<meta name="description" content="Tools untuk mempermudah kita dalam permasalahan yang terjadi di sekitar kita." />
		<meta name="keywords" content="Tools untuk mempermudah kita dalam permasalahan yang terjadi di sekitar kita, Tools Average Stock market, Md5 Password Generator, Image To base64." />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="id" />
		<meta property="og:type" content="tools" />
		<meta property="og:title" content="<?php echo $title_atas; ?> - Tools untuk mempermudah kita dalam permasalahan yang terjadi di sekitar kita. Tools Average Stock market, Md5 Password Generator, Image To base64." />
		<meta property="og:url" content="<?=base_url('tools')?>" />
		<meta property="og:site_name" content="Tools Ngodeid - Tools untuk mempermudah kita dalam permasalahan yang terjadi di sekitar kita." />
		<link rel="canonical" href="<?=base_url()?>" />
		<link rel="shortcut icon" href="<?=base_url('/')?>favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->

		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href='https://unpkg.com/dropzone@5/dist/min/dropzone.min.css' type='text/css' rel='stylesheet'>
    <script src='https://unpkg.com/dropzone@5/dist/min/dropzone.min.js' type='text/javascript'></script>
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?=base_url('/')?>theme/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('/')?>theme/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-GWT1R6QFJH"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-GWT1R6QFJH');
		</script>


		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="page-bg">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page launcher sidebar-enabled d-flex flex-row flex-column-fluid me-lg-5" id="kt_page">
				<!--begin::Content-->
				<div class="d-flex flex-row-fluid">
					<!--begin::Container-->
					<div class="d-flex flex-column flex-row-fluid align-items-center">
						<!--begin::Menu-->
						<div class="mb-5 mb-lg-10">
							<!--begin::Brand-->
							<div class="d-flex flex-center pt-10 pt-lg-0 mb-10 mb-lg-0 h-lg-225px">
								<!--begin::Sidebar toggle-->
								<div class="btn btn-icon btn-active-color-primary w-30px h-30px d-lg-none me-4 ms-n15" id="kt_sidebar_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Sidebar toggle-->
								<!--begin::Logo-->
								<a href="<?=base_url('')?>">
									<img alt="Logo" src="<?=base_url('/')?>theme/assets/media/misc/logongode.png" class="h-75px h-lg-80px" />
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Brand-->
							<!--begin::Row-->
							<!--end::Row-->
						</div>
						<!-- <div class="row"> -->
							<div class="container mb-10" style="margin-top: -50px;">
								<?=$content?>
							</div>
						<!-- </div> -->
						<!--end::Menu-->
						<!--begin::Footer-->
						<div class="d-flex flex-column-auto flex-center">
							<!--begin::Navs-->
							<ul class="menu fw-bold order-1">
								<li class="menu-item">
									<a href="<?=base_url('/')?>" class="menu-link text-white opacity-50 opacity-100-hover px-3">Home</a>
								</li>
								<li class="menu-item">
									<a href="https://ngodeid.com/about/" target="_blank" class="menu-link text-white opacity-50 opacity-100-hover px-3">About</a>
								</li>
								<li class="menu-item">
									<a href="https://ngodeid.com/privacy-policy/" target="_blank" class="menu-link text-white opacity-50 opacity-100-hover px-3">Privacy policy</a>
								</li>
							</ul>
							<!--end::Navs-->
						</div>
						<!--end::Footer-->
						
					</div>
					<!--begin::Content-->
				</div>
				
				
						
				<!--begin::Content-->
				<!--begin::Sidebar-->
        <div class="">
				<div id="kt_sidebar" class="sidebar px-5 py-5 py-lg-8 px-lg-11 " data-kt-drawer="true" data-kt-drawer-name="sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="375px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_sidebar_toggle">
				
					<div class="mb-5 mb-lg-8 " id="kt_sidebar_body">
            <img width="100%" src="https://www.1980media.com/wp-content/uploads/2021/03/google-adsense-icon3-1920-1170x700.jpg">
					</div>
				
				</div>
        </div>
				<!--end::Sidebar-->
				
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--end::Main-->

		<script type="text/javascript">
    var BASE_PATH = '<?php echo base_url(); ?>';
    var SITE_PATH = '<?php echo site_url(); ?>/';
		$(document).ready(function(){
			$('#alertTooltip').tooltip();
		});
		</script>
		<!--begin::Javascript-->
		<script>var hostUrl = "<?=base_url('/')?>theme/assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="<?=base_url('/')?>theme/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?=base_url('/')?>theme/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->

		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>