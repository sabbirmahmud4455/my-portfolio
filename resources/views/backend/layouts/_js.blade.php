<script>var hostUrl = "assets/index.html";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="../../../cdn.amcharts.com/lib/5/index.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/xy.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/percent.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/radar.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/map.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="../../../cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="{{ asset('backend/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('backend/assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/utilities/modals/users-search.js') }}"></script>
<!--end::Custom Javascript-->

<script src="{{ asset('backend/assets/js/jquery-3.6.1.min.js') }}"></script>


<!-- Per page js -->
@yield('per_page_js')
<!-- Per page js -->
