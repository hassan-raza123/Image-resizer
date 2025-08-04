<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;chars'6et=UTF-8"/>
<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Azea – Laravel Admin & Dashboard Template" name="descr;6iption">
    <meta content="Spruko Private Limited" name="author">
    <meta name="keywords"
          content="laravel ui admin template, laravel admin template, laravel dashboard template,laravel ui template, laravel ui, livewire, laravel, laravel admin panel, laravel admin panel template, laravel blade, laravel bootstrap5, bootstrap admin template, admin, dashboard, admin template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>Image Resizer</title>

    <!--Favicon -->
    <link rel="icon" href="{{asset ('assets/images/brand/favicon.ico ')}}" type="image/x-icon"/>

    <!--Bootstrap css -->
    <link href="{{asset ('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{asset ('assets/css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset ('assets/css/style2.css')}}" rel="stylesheet" />
    <link href="{{asset ('assets/css/dark.css')}}" rel="stylesheet"/>
    <link href="{{asset ('assets/css/skin-modes.css')}}" rel="stylesheet"/>

    <!-- Animate css -->
    <link href="{{asset ('assets/css/animated.css')}}" rel="stylesheet"/>

    <!--Sidemenu css -->
    <link href="{{asset ('assets/css/sidemenu.css')}}" rel="stylesheet">
    <!--mycustom css -->
    <link href="{{asset ('assets/css/mycustom.css')}}" rel="stylesheet">
    <!-- P-scroll bar css-->
    <link href="{{asset ('assets/plugins/p-scrollbar/p-scrollbar.css')}}" rel="stylesheet"/>

    <!---Icons css-->
    <link href="{{asset ('assets/plugins/icons/icons.css')}}" rel="stylesheet"/>


    <!-- INTERNAL C3 Charts css-->
    <link href="{{asset('assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />
    <!-- Simplebar css -->
    <link rel="stylesheet" href="{{asset ('assets/plugins/simplebar/css/simplebar.css')}}">

    <!-- INTERNAL Morris Charts css -->
    <link href="{{asset ('assets/plugins/morris/morris.css')}}" rel="stylesheet"/>

    <!-- INTERNAL File Uploads css -->
    <link href="{{asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet"/>

    <!-- INTERNAL Select2 css -->
    <link href="{{asset ('assets/plugins/select2/select2.min.css')}}" rel="stylesheet"/>

    <!-- INTERNAL File Uploads css -->
    <link href="{{asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet"/>
    <!-- INTERNAL File Uploads css-->
    <link href="{{asset('assets/plugins/fileupload/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
    <!-- INTERNAL treeview -->
    <link href="{{asset ('assets/plugins/treeview/treeview.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Data table css -->
    <link href="{{asset ('assets/plugins/datatables/DataTables/css/dataTables.bootstrap5.css')}}" rel="stylesheet"/>
    <link href="{{asset ('assets/plugins/datatables/Buttons/css/buttons.bootstrap5.min.css')}}" rel="stylesheet">
    <link href="{{asset ('assets/plugins/datatables/Responsive/css/responsive.bootstrap5.min.css')}}" rel="stylesheet"/>

    <!-- Color Skin css -->
    <link id="theme" href="{{asset ('assets/colors/color1.css')}}" rel="stylesheet" type="text/css"/>

    <!-- INTERNAL Switcher css -->
    <link href="{{asset ('assets/switcher/css/switcher.css')}}" rel="stylesheet"/>
    <link href="{{asset ('assets/switcher/demo.css')}}" rel="stylesheet"/>

    <!-- INTERNAl WYSIWYG Editor css -->
    <link href="{{asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet"/>

    <!-- INTERNAl Quill css -->
    <link href="{{asset('assets/plugins/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/quill/quill.bubble.css')}}" rel="stylesheet">

    {{--daterange--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body class="app sidebar-mini ltr">
<audio id="alert_sound" controlsList="nodownload">
    <source src="{{asset('assets/alert.wav')}}" type="audio/wav">
</audio>
<!---Global-loader-->
{{--        <div id="global-loader" >
            <img src="{{asset ('assets/images/svgs/loader.svg')}}" alt="loader">
        </div>--}}
<!--- End Global-loader-->

<!-- PAGE -->

        @yield('content')
<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fe fe-chevron-up"></i></a>

<!-- INTERNAL Apexchart js -->
<script src="{{asset ('assets/js/apexcharts.js ')}}"></script>
<!-- INTERNAL Chart js -->
<script src="{{asset ('assets/plugins/chart/chart.bundle.js ')}}"></script>
<script src="{{asset ('assets/plugins/chart/utils.js ')}}"></script>
<!-- Jquery js-->
<script src="{{asset ('assets/plugins/jquery/jquery.min.js ')}}"></script>
{{--ajax--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>
<!-- Bootstrap5 js-->
<script src="{{asset ('assets/plugins/bootstrap/popper.min.js ')}}"></script>
<script src="{{asset ('assets/plugins/bootstrap/js/bootstrap.min.js ')}}"></script>

<!--Othercharts js-->
<script src="{{asset ('assets/plugins/othercharts/jquery.sparkline.min.js ')}}"></script>

<!-- Jquery-rating js-->
<script src="{{asset ('assets/plugins/rating/jquery.rating-stars.js ')}}"></script>

<!--Sidemenu js-->
<script src="{{asset ('assets/plugins/sidemenu/sidemenu.js ')}}"></script>

<!-- P-scroll js-->
<script src="{{asset ('assets/plugins/p-scrollbar/p-scrollbar.js ')}}"></script>
<script src="{{asset ('assets/plugins/p-scrollbar/p-scroll1.js ')}}"></script>
<script src="{{asset ('assets/plugins/p-scrollbar/p-scroll.js ')}}"></script>


<!--INTERNAL Flot Charts js-->
<script src="{{asset ('assets/plugins/flot/jquery.flot.js ')}}"></script>
<script src="{{asset ('assets/plugins/flot/jquery.flot.fillbetween.js ')}}"></script>
<script src="{{asset ('assets/plugins/flot/jquery.flot.pie.js ')}}"></script>
<script src="{{asset ('assets/js/dashboard.sampledata.js ')}}"></script>
<script src="{{asset ('assets/js/chart.flot.sampledata.js ')}}"></script>

<!-- INTERNAL Chart js -->
<script src="{{asset ('assets/plugins/chart/chart.bundle.js ')}}"></script>
<script src="{{asset ('assets/plugins/chart/utils.js ')}}"></script>

<!-- INTERNAL Apexchart js -->
<script src="{{asset ('assets/js/apexcharts.js ')}}"></script>

<!--INTERNAL Moment js-->
<script src="{{asset ('assets/plugins/moment/moment.js ')}}"></script>

<!--INTERNAL Index js-->
<script src="{{asset ('assets/js/index1.js ')}}"></script>

{{--daterange--}}

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<!-- INTERNAL Data tables -->
<script src="{{asset('assets/plugins/datatables/DataTables/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/DataTables/js/dataTables.bootstrap5.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/Buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/Buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/JSZip/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/Buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/Buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/Buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/Responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/Responsive/js/responsive.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/js/datatables.js')}}"></script>

<!-- INTERNAL Select2 js -->
<script src="{{asset ('assets/plugins/select2/select2.full.min.js ')}}"></script>
<script src="{{asset ('assets/js/select2.js ')}}"></script>

<!-- Simplebar JS -->
<script src="{{asset ('assets/plugins/simplebar/js/simplebar.min.js ')}}"></script>

<!-- Rounded bar chart js-->
<script src="{{asset ('assets/js/rounded-barchart.js ')}}"></script>

<!-- INTERNAL c3.js Charts js-->
<script src="{{asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
<script src="{{asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>
<script src="{{asset('assets/js/charts.js')}}"></script>


<!-- Custom js-->
<script src="{{asset ('assets/js/print.js ')}}"></script>
<script src="{{asset ('assets/js/custom.js ')}}"></script>

<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<!-- Switcher js -->
<script src="{{asset ('assets/switcher/js/switcher.js ')}}"></script>

<!-- INTERNAL File-Uploads Js-->
<script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
<!-- INTERNAL Treeview js -->
<script src="{{asset('assets/plugins/treeview/treeview.js')}}"></script>
<!-- INTERNAL File uploads js -->
<script src="{{asset('assets/plugins/fileupload/js/dropify.js')}}"></script>
<script src="{{asset('assets/js/filupload.js')}}"></script>

<!--INTERNAL Form Advanced Element -->
<script src="{{asset('assets/js/formelementadvnced.js')}}"></script>
<script src="{{asset('assets/js/form-elements.js')}}"></script>
<script src="{{asset('assets/js/file-upload.js')}}"></script>

<!-- INTERNAL WYSIWYG Editor js -->
<script src="{{asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
<script src="{{asset('assets/js/form-editor.js')}}"></script>

<!-- INTERNAL quill js -->
<script src="{{asset('assets/plugins/quill/quill.min.js')}}"></script>
<script src="{{asset('assets/js/form-editor2.js')}}"></script>
<script src="{{asset('assets/js/mycustom.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>

<!-- INTERNAL File uploads js -->
<script src="{{asset('assets/plugins/fileupload/js/dropify.js')}}"></script>
<script src="{{asset('assets/js/filupload.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@yield('query')
</body>

</html>
