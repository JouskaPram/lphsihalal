<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
</head>
<style>
 .parallax-section {
  position: relative;
  overflow: hidden;
  background: url("https://images.unsplash.com/photo-1535117423468-de0ff056882e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80")  no-repeat fixed;
   background-size: cover;
  background-position: center;
  height: 700px; /* Sesuaikan dengan kebutuhan */
}

.parallax-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: #fff;
}

#title,
#description {
  transition: transform 0.3s ease-out;
}

@media (max-width: 768px) {
  #title,
  #description {
    transform: translateY(0);
    transition: none;
  }
}

.my-blog-section {
  background: url("https://images.unsplash.com/photo-1526697298613-08e9ea0b2327?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTd8fGlzbGFtaWN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60") fixed center;
  background-size: cover;
  padding: 50px 0;
  color: #fff;
}

.section-title {
  font-size: 36px;
  margin-bottom: 30px;
}

.blog-item {
  background-color: rgba(0, 0, 0, 0.7);
  padding: 20px;
  margin-bottom: 30px;
}

.blog-item .blog-image {
  position: relative;
  overflow: hidden;
}

.blog-item .blog-image img {
  transition: transform 0.3s ease;
}

.blog-item .blog-content {
  padding-top: 20px;
}

.blog-item .blog-title {
  font-size: 24px;
  margin-bottom: 10px;
}

.blog-item .blog-description {
  font-size: 14px;
  margin-bottom: 20px;
}

.blog-item .btn {
  padding: 5px 15px;
}

/* Adjust the styles as needed to match your desired Muslim style */

</style>
<body>
    <div class="">

		<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center justify-content-center">
								<!--begin::Logo-->
								<div class="d-flex align-items-center flex-equal">
									<!--begin::Mobile menu toggle-->
									<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<i class="ki-outline ki-abstract-14 fs-2hx"></i>
									</button>
									<!--end::Mobile menu toggle-->
									<!--begin::Logo image-->
									<a href="../../demo25/dist/landing.html">
                                        <div class="d-flex align-items-center justify-content-center gap-3">
                                            <img alt="Logo" src="{{ asset('assets/media/logos/LOGO_LPH_ALUMM_VECTOR.png') }}" class="logo-default h-50px h-lg-60px" />
                                            <h1 class="text-dark fw-bold menu-link logo-default">E-almumtazah</h1>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center gap-3">
                                         <img alt="Logo" src="{{ asset('assets/media/logos/LOGO_LPH_ALUMM_VECTOR.png') }}" class="logo-sticky h-50px h-lg-60px" />
                                            <h1 class="text-dark fw-bold menu-link logo-sticky">E-almumtazah</h1>
                                        </div>
										
									</a>
									<!--end::Logo image-->
								</div>
								<!--end::Logo-->
								<!--begin::Menu wrapper-->
								<div class="d-lg-block" id="kt_header_nav_wrapper">
									<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
										<!--begin::Menu-->
										<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold" id="kt_landing_menu">
											<!--begin::Menu item-->
											
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-3 px-xxl-6" href="#home" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-3 px-xxl-6" href="#my-blog" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Blog</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-3 px-xxl-6" href="#about" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">About Us</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-3 px-xxl-6" href="#portfolio" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Portfolio</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Menu wrapper-->
								<!--begin::Toolbar-->
								<div class="flex-equal text-end ms-1">
									<a href="/api" class="btn btn-primary">Sign In</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
                 <section id="home">
  <div class="container pt-10">
    <div style="height: 100vh">
      <div class="row">
        
        <div class="col-md-6" >
            <svg class="icon1" data-aos="fade-right" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="100%" height="100%" viewBox="0 0 806.63176 698.76576" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M751.14635,316.60642a79.82777,79.82777,0,1,1-79.68611-79.96918A79.62142,79.62142,0,0,1,751.14635,316.60642Z" transform="translate(-196.68412 -100.61712)" fill="#f2f2f2"/><path d="M884.005,363.13977l11.22422-21.432c-10.06526-12.15439-43.08848-26.89558-43.08848-26.89558l-44.695-40.68137a10.6812,10.6812,0,1,0-13.11846,13.02071l48.28567,57.91133Z" transform="translate(-196.68412 -100.61712)" fill="#9e616a"/><path d="M878.56789,361.66108l15.84871,5.04619a54.39316,54.39316,0,0,0,35.29495-.78574h0a19.64143,19.64143,0,0,0,12.68529-16.39871h0a19.59506,19.59506,0,0,0-16.31209-21.20549c-14.86281-2.44252-34.01358-3.64706-40.84584,4.48324l-.06924.08239Z" transform="translate(-196.68412 -100.61712)" fill="#3f3d56"/><circle cx="567.88613" cy="246.82755" r="79.82777" fill="#fff"/><path d="M731.9912,316.22046a75.00358,75.00358,0,0,1-5.35134,17.07973C712.55812,363.08987,752.6602,353.38,766.99134,353.38c15.669,0,30.661,8.23946,28.3712-28.37124-.97807-15.63846-12.70225-28.37123-28.3712-28.37123C753.60745,296.63751,734.78981,302.5864,731.9912,316.22046Z" transform="translate(-196.68412 -100.61712)" fill="#2f2e41"/><circle cx="567.95959" cy="229.701" r="23.05483" fill="#ffb6b6"/><path d="M748.98709,306.81691a26.40856,26.40856,0,0,1,40.1504,23.04771c-11.74766,2.94948-24.08931,5.20662-36.61724.70548l-2.95863-7.24088-1.74426,7.24624c-3.81518,1.55942-7.64029,2.87884-11.46535-.01505A26.96462,26.96462,0,0,1,748.98709,306.81691Z" transform="translate(-196.68412 -100.61712)" fill="#2f2e41"/><path d="M826.64011,400.52519a79.79985,79.79985,0,0,1-111.68425,8.07146l6.847-19.10548a20.54572,20.54572,0,0,1,17.45175-11.984l4.35591-.26741,10.38663-8.95809s27.98617-.99929,27.571-1.4778l16.95216,10.19661-.01409-.07035,6.664.40816a20.53673,20.53673,0,0,1,17.4518,11.984Z" transform="translate(-196.68412 -100.61712)" fill="#50cd89"/><path d="M757.56651,729.4621,755.583,701.87359a89.24424,89.24424,0,0,0-41.89885-9.39587c20.43166,15.79292,18.7951,47.35761,32.9451,68.95962A53.68059,53.68059,0,0,0,786.6569,785.159l17.00408,9.78252a89.95166,89.95166,0,0,0-20.94424-72.34594,86.88807,86.88807,0,0,0-16.36787-14.39539C762.6321,718.87126,757.56651,729.4621,757.56651,729.4621Z" transform="translate(-196.68412 -100.61712)" fill="#f2f2f2"/><path d="M240.56651,240.4621,238.583,212.87359a89.24424,89.24424,0,0,0-41.89885-9.39587c20.43166,15.79292,18.7951,47.35761,32.9451,68.95962A53.68059,53.68059,0,0,0,269.6569,296.159l17.00408,9.78252a89.95166,89.95166,0,0,0-20.94424-72.34594,86.88807,86.88807,0,0,0-16.36787-14.39539C245.6321,229.87126,240.56651,240.4621,240.56651,240.4621Z" transform="translate(-196.68412 -100.61712)" fill="#f2f2f2"/><polygon points="635.268 684.997 622.004 684.996 615.694 633.837 635.27 633.837 635.268 684.997" fill="#9e616a"/><path d="M835.33443,798.47119l-42.76752-.00159v-.54094a16.64721,16.64721,0,0,1,16.64631-16.64605h.00106l7.81205-5.92663,14.57555,5.92754,3.73334.00015Z" transform="translate(-196.68412 -100.61712)" fill="#2f2e41"/><polygon points="752.165 684.997 738.902 684.996 732.592 633.837 752.168 633.837 752.165 684.997" fill="#9e616a"/><path d="M952.2321,798.47119l-42.76752-.00159v-.54094a16.64721,16.64721,0,0,1,16.64631-16.64605h.00106L933.924,775.356l14.57555,5.92754,3.73334.00015Z" transform="translate(-196.68412 -100.61712)" fill="#2f2e41"/><path d="M928.67619,511.80286,939.832,617.78358s14.851,106.11694,12.062,120.759.69722,16.73381.69722,16.73381L927.14314,753.464s.69722-9.06415-3.48624-13.24756-2.09168-16.73381-2.09168-16.73381L872.19968,550.8484,842.2183,641.48981s-4.88069,99.70557-5.57791,101.1-2.789,20.22-2.789,20.22h-25.798s3.48619-11.15583-1.39451-14.64207-9.06415-.69723-4.88069-6.97243,5.57792-13.94484,4.18347-17.431-1.39451-17.431-1.39451-17.431,2.09173-188.2552,13.94485-194.5304S928.67619,511.80286,928.67619,511.80286Z" transform="translate(-196.68412 -100.61712)" fill="#2f2e41"/><circle cx="679.16041" cy="169.16317" r="27.4387" fill="#9e616a"/><path d="M938.15908,523.35388c-53.13861,10.97387-123.5581-7.89282-123.5581-7.89282l18.78517-81.42975-6.67857-85.21753c-.81559-10.42111,5.12-20.18968,14.35392-23.65125l12.75006-4.77561,10.53881-15.088,30.10339.98771,12.03414,15.84007,9.49679,5.03844,20.58857,10.91955.09059.04524v.04525L930.20276,400.847l-3.89652,37.7878s11.8347,42.49992,9.40608,48.13647c-2.42851,5.62736-.317,2.90881.2719,5.91729.589,3.00859,2.39233,3.19886,2.66412,9.12533C938.92931,507.73129,938.15908,523.35388,938.15908,523.35388Z" transform="translate(-196.68412 -100.61712)" fill="#3f3d56"/><path d="M1002.39654,799.38288H591.92528a.91935.91935,0,0,1,0-1.83869h410.47126a.91934.91934,0,0,1,0,1.83869Z" transform="translate(-196.68412 -100.61712)" fill="#ccc"/><path d="M874.50966,295.90068a84.51463,84.51463,0,0,0,14.34606-1.37542c4.68679-1.07973,15.02743-9.07571,17.84571-13.79945h0c2.09379-3.50966,3.3505-8.93831,4.03625-12.8741a37.77914,37.77914,0,0,0-7.37933-29.81139,11.9356,11.9356,0,0,0-4.92552-3.98886c-.17438-.06305-.35356-.11828-.53443-.16481a14.72647,14.72647,0,0,1-7.44024-4.34241,12.14729,12.14729,0,0,0-1.24975-1.22149,18.13955,18.13955,0,0,0-7.66376-3.60358c-4.52852-1.08755-11.00642.27527-19.2533,4.05408-4.14323,1.89855-8.74174,1.3689-12.28619.69532a1.15374,1.15374,0,0,0-1.07624.40006,8.14438,8.14438,0,0,1-5.47647,2.34862c-1.25845.08783-2.53516,1.86636-4.07409,4.18236-.34918.52573-.75664,1.1393-1.05233,1.5137l-.05914-.70314-.69228.804a9.88284,9.88284,0,0,0,4.87595,15.98064,19.27184,19.27184,0,0,0,3.891.51747c.7949.05088,1.6172.10351,2.40688.21962a14.9,14.9,0,0,1,11.31824,9.38009,3.89667,3.89667,0,0,0,5.92828,1.73939,6.4381,6.4381,0,0,1,5.837-1.21931,4.27382,4.27382,0,0,1,1.94377,2.09335,5.56964,5.56964,0,0,0,2.17641,2.41036c3.23526,1.5637,3.64359,8.85047,2.6539,14.95919-.95406,5.88827-3.02958,10.1837-5.04728,10.44548-1.55327.20133-1.72851.31657-1.83418.5949l-.09439.24916.18089.22612A6.36358,6.36358,0,0,0,874.50966,295.90068Z" transform="translate(-196.68412 -100.61712)" fill="#2f2e41"/><path d="M764.57038,428.2724A80.82764,80.82764,0,1,1,845.398,347.44476,80.91948,80.91948,0,0,1,764.57038,428.2724Zm0-159.65528A78.82764,78.82764,0,1,0,843.398,347.44476,78.91719,78.91719,0,0,0,764.57038,268.61712Z" transform="translate(-196.68412 -100.61712)" fill="#3f3d56"/><circle cx="288.88602" cy="80.82764" r="79.82777" fill="#fff"/><circle cx="292.58064" cy="62.94009" r="26.03041" fill="#ffb8b8"/><path id="f183d98d-beca-4def-af6d-fbe16b93cf6a-164" data-name="bf427902-b9bf-4946-b5d7-5c1c7e04535e" d="M512.18365,146.361s6.77741-12.95636-8.13309-14.13422c0,0-12.71134-11.53081-25.6677-2.108,0,0-7.06711,0-10.93165,7.99726,0,0-5.55826-2.108-6.77973,3.53355,0,0-4.06714,11.77854,0,22.37921s5.41808,11.77851,5.41808,11.77851-2.8536-13.15484,13.41378-14.3327,31.19119-11.36869,32.54688,1.58765,2.846,7.10347,2.846,7.10347S527.77244,151.66139,512.18365,146.361Z" transform="translate(-196.68412 -100.61712)" fill="#2f2e41"/><path d="M545.604,234.52519a79.79985,79.79985,0,0,1-111.68425,8.07146l6.847-19.10548a20.54572,20.54572,0,0,1,17.45176-11.984l4.3559-.26741,10.38663-8.95809s27.98617-.99929,27.571-1.4778l16.95216,10.19661-.01409-.07035,6.664.40816a20.53676,20.53676,0,0,1,17.45181,11.984Z" transform="translate(-196.68412 -100.61712)" fill="#50cd89"/><path d="M485.57038,262.2724A80.82764,80.82764,0,1,1,566.398,181.44476,80.91948,80.91948,0,0,1,485.57038,262.2724Zm0-159.65528A78.82764,78.82764,0,1,0,564.398,181.44476,78.91719,78.91719,0,0,0,485.57038,102.61712Z" transform="translate(-196.68412 -100.61712)" fill="#3f3d56"/><circle cx="102.56282" cy="206.82755" r="79.82777" fill="#fff"/><path d="M262.2475,281.47674c3.30085-10.51967,10.80708-20.16794,21.188-23.72416,10.38156-3.55622,25.58278,1.86106,33.38738,9.63927,14.27613,14.22787,17.76,63.10581,7.95175,78.5518-1.9509-.10327-8.68272-.17965-10.65726-.25361l-2.79322-9.30969v9.21794q-4.71858-.14583-9.511-.20135a41.39254,41.39254,0,0,1-40.86673-40.37123C260.69085,294.78034,260.94671,285.6223,262.2475,281.47674Z" transform="translate(-196.68412 -100.61712)" fill="#2f2e41"/><circle cx="101.37887" cy="192.97398" r="22.75036" fill="#9e616a"/><path d="M278.42872,273.61077l26.19484-13.1164h0a32.9243,32.9243,0,0,1,19.28371,27.27826l.65291,7.82079-10.96912-2.79226-1.20175-10.0004-1.86274,9.22034-5.06215-1.288.04812-15.52559L300.44725,290.722l-18.07989-4.15384Z" transform="translate(-196.68412 -100.61712)" fill="#2f2e41"/><path d="M358.48443,360.27142a79.79985,79.79985,0,0,1-111.68425,8.07146l6.847-19.10548a20.54573,20.54573,0,0,1,17.45176-11.984l4.35591-.26741,10.38662-8.95809s27.98618-.99929,27.571-1.4778l16.95216,10.19661-.01408-.07035,6.664.40815a20.53676,20.53676,0,0,1,17.4518,11.984Z" transform="translate(-196.68412 -100.61712)" fill="#50cd89"/><path d="M299.24719,388.27231a80.82764,80.82764,0,1,1,80.82763-80.82764A80.91948,80.91948,0,0,1,299.24719,388.27231Zm0-159.65528a78.82764,78.82764,0,1,0,78.82763,78.82764A78.91719,78.91719,0,0,0,299.24719,228.617Z" transform="translate(-196.68412 -100.61712)" fill="#3f3d56"/><path d="M838.29687,388.85826l-12.08536-20.9585c-15.65516,1.98866-45.79252,21.978-45.79252,21.978l-58.29422,15.95008a10.68119,10.68119,0,1,0,3.96793,18.05238l74.76707-9.75257Z" transform="translate(-196.68412 -100.61712)" fill="#9e616a"/><path d="M834.13577,392.65738l27.0572-22.663,3.93647-18.242a19.6414,19.6414,0,0,0-7.05244-19.49608h0a19.59507,19.59507,0,0,0-26.64439,2.41529c-10.02406,11.24221-21.29967,26.76844-18.094,36.89294l.03249.10259Z" transform="translate(-196.68412 -100.61712)" fill="#3f3d56"/><path d="M419.43042,471.387H317.76536a10.28839,10.28839,0,0,1-10.27672-10.27678V398.49406a10.28839,10.28839,0,0,1,10.27672-10.27678H419.43042a10.28841,10.28841,0,0,1,10.27678,10.27678v62.61612A10.28841,10.28841,0,0,1,419.43042,471.387Z" transform="translate(-196.68412 -100.61712)" fill="#e6e6e6"/><path d="M379.03728,463.32157H324.91179a9.63563,9.63563,0,0,1-9.625-9.62451v-47.79a9.63563,9.63563,0,0,1,9.625-9.62451h87.37256a9.63521,9.63521,0,0,1,9.62451,9.62451v14.54345A42.91981,42.91981,0,0,1,379.03728,463.32157Z" transform="translate(-196.68412 -100.61712)" fill="#fff"/><path d="M403.56815,422.45126H333.62763a2.281,2.281,0,1,1,0-4.562h69.94052a2.281,2.281,0,1,1,0,4.562Z" transform="translate(-196.68412 -100.61712)" fill="#50cd89"/><path d="M344.56815,431.46459H333.62763a2.2811,2.2811,0,0,1,0-4.5622h10.94052a2.2811,2.2811,0,1,1,0,4.5622Z" transform="translate(-196.68412 -100.61712)" fill="#50cd89"/><path d="M363.94516,440.47793H333.62763a2.28111,2.28111,0,0,1,0-4.56221h30.31753a2.28111,2.28111,0,0,1,0,4.56221Z" transform="translate(-196.68412 -100.61712)" fill="#50cd89"/><circle cx="107.25667" cy="286.35307" r="21.50617" fill="#3f3d56"/><path d="M683.43042,187.387H581.76536a10.28839,10.28839,0,0,1-10.27672-10.27678V114.49406a10.28839,10.28839,0,0,1,10.27672-10.27678H683.43042a10.28841,10.28841,0,0,1,10.27678,10.27678v62.61612A10.28841,10.28841,0,0,1,683.43042,187.387Z" transform="translate(-196.68412 -100.61712)" fill="#e6e6e6"/><path d="M643.03728,179.32157H588.91179a9.63563,9.63563,0,0,1-9.625-9.62451v-47.79a9.63563,9.63563,0,0,1,9.625-9.62451h87.37256a9.63521,9.63521,0,0,1,9.62451,9.62451v14.54345A42.91981,42.91981,0,0,1,643.03728,179.32157Z" transform="translate(-196.68412 -100.61712)" fill="#fff"/><path d="M667.56815,138.45126H597.62763a2.281,2.281,0,1,1,0-4.562h69.94052a2.281,2.281,0,1,1,0,4.562Z" transform="translate(-196.68412 -100.61712)" fill="#50cd89"/><path d="M608.56815,147.46459H597.62763a2.2811,2.2811,0,1,1,0-4.5622h10.94052a2.2811,2.2811,0,1,1,0,4.5622Z" transform="translate(-196.68412 -100.61712)" fill="#50cd89"/><path d="M627.94516,156.47793H597.62763a2.28111,2.28111,0,0,1,0-4.56221h30.31753a2.2811,2.2811,0,0,1,0,4.56221Z" transform="translate(-196.68412 -100.61712)" fill="#50cd89"/><circle cx="371.25667" cy="77.35307" r="21.50617" fill="#3f3d56"/></svg>
          
        </div>
        <div class="col-md-6 align-items-center">
          <div class="parallax pt-20 ">
            <div class="d-flex align-items-center justify-content-center gap-3">
      <img alt="Logo" src="{{ asset('assets/media/logos/LOGO_LPH_ALUMM_VECTOR.png') }}" class="logo-default h-100px h-lg-110px" />
    </div>
    <h1 class="text-dark fw-bold menu-link logo-default text-center">E-almumtazah</h1>
              <h1 class="text-center fw-semibold pt-10 " id="title" >Selamat Datang di system <span class="text-primary fw-bold">lph</span></h1>
              <p class="text-center text-dark fw-semibold" id="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis beatae qui aliquam, fugit ad ratione.</p>
              
                    
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- myblog section --}}
                   <section id="my-blog" class="my-blog-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="section-title text-center text-light fw-bold">My Blog</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="blog-item aos-init aos-animate" data-aos="fade-up">
          <div class="blog-image">
            <img src="https://images.unsplash.com/photo-1574545640323-59dc7a2b4a6d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8bXVzbGltfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="Blog Image 1">
          </div>
          <div class="blog-content">
            <h3 class="blog-title text-light">Blog Post Title 1</h3>
            <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="blog-item aos-init aos-animate" data-aos="fade-up">
          <div class="blog-image">
            <img src="https://plus.unsplash.com/premium_photo-1678553840209-d5cf6cebe448?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8bXVzbGltfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="Blog Image 2">
          </div>
          <div class="blog-content">
            <h3 class="blog-title text-light">Blog Post Title 2</h3>
            <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="blog-item aos-init aos-animate" data-aos="fade-up">
          <div class="blog-image ">
            <img src="https://images.unsplash.com/photo-1522219406764-db207f1f7640?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8bXVzbGltfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="Blog Image 3">
          </div>
          <div class="blog-content">
            <h3 class="blog-title text-light">Blog Post Title 3</h3>
            <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
   
    </div>
  </div>
</section>

                   
                    <section style="height: 100vh" id="portfolio">
                        <div data-aos="zoom-in-up"><h1 class="text-center">hello 4</h1></div></section>
                    <section style="height: 100vh" id="home"><h1>hello 5</h1></section>
    </div>

<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
<script>
 let image = document.getElementsByClassName('icon1');
new simpleParallax(image, {
	overflow: true
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
 <script>
      function parallaxScroll() {
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  var parallaxSection = document.getElementById('about-us');
  parallaxSection.style.backgroundPositionY = -scrollTop * 0.5 + 'px';
}


window.addEventListener('scroll', parallaxScroll);

window.addEventListener('scroll', parallaxEffect);

function parallaxEffect() {
  if (window.innerWidth > 768) {
    var title = document.getElementById('title');
    var description = document.getElementById('description');

    var scrollPosition = window.pageYOffset;
    var titleOffset = scrollPosition * 0.3;
    var descriptionOffset = scrollPosition * 0.3;

    title.style.transform = 'translateY(' + titleOffset + 'px)';
    description.style.transform = 'translateY(' + descriptionOffset + 'px)';
  }
}

    </script>
 <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <script>
      
    </script>
          
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>   
</body>
</html>