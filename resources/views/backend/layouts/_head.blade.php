<title>{{ $app_info->title }}</title>
<meta charset="utf-8" />
<meta name="description" content="{{ $app_info->title }}" />
<meta name="keywords" content="{!! $app_info->description !!}" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{!! $app_info->description !!}" />
<meta property="og:url" content="{{ $app_info->url }}" />
<meta property="og:site_name" content="{{ $app_info->title }}" />
<link rel="canonical" href="{{ $app_info->url }}" />
<link rel="shortcut icon" href="{{ asset('images/info/'.$app_info->favicon) }}" />
<!--begin::Fonts(mandatory for all pages)-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
<!--end::Fonts-->
<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->
<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
<link href="{{ asset('backend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Global Stylesheets Bundle-->

<!--Begin::loader -->
<link rel="stylesheet" href="{{ asset('backend/assets/css/loader.css') }}">
<!--Begin::loader -->

<!--Begin::custom css -->
<link rel="stylesheet" href="{{ asset('backend/assets/css/custom.css') }}">
<!--Begin::custom css -->

<!-- per page css -->
@yield('per_page_css')
<!-- per page css -->

<!--Begin::Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= '../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
<!--End::Google Tag Manager -->
