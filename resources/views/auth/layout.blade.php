<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Event count')</title>

    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <link rel="icon" href="{{ asset('frontend/images/logo.png') }}" type="image/x-icon">

    <!-- Fonts and icons -->
    <script src="{{ asset('backend/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {"families": ["Open+Sans:300,400,600,700"]},
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
                urls: ['{{ asset('backend/css/fonts.css') }}']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/azzara.min.css') }}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('backend/css/demo.css') }}">
</head>
<body class="login">
@yield('content')
@include('sweetalert::alert')
<!--   Core JS Files   -->
<!--   Core JS Files   -->
<script src="{{ asset('backend/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('backend/js/core/popper.min.js') }}"></script>
<script src="{{ asset('backend/js/core/bootstrap.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ asset('backend/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('backend/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

<!-- Moment JS -->
<script src="{{ asset('backend/js/plugin/moment/moment.min.js') }}"></script>

<!-- Chart JS -->
<script src="{{ asset('backend/js/plugin/chart.js/chart.min.js') }}"></script>

<!-- jQuery Sparkline -->
<script src="{{ asset('backend/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Chart Circle -->
<script src="{{ asset('backend/js/plugin/chart-circle/circles.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('backend/js/plugin/datatables/datatables.min.js') }}"></script>

<!-- Bootstrap Notify -->
<script src="{{ asset('backend/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

<!-- Bootstrap Toggle -->
<script src="{{ asset('backend/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>

<!-- jQuery Vector Maps -->
<script src="{{ asset('backend/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('backend/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

<!-- Google Maps Plugin -->
<script src="{{ asset('backend/js/plugin/gmaps/gmaps.js') }}"></script>

<!-- Dropzone -->
<script src="{{ asset('backend/js/plugin/dropzone/dropzone.min.js') }}"></script>

<!-- Fullcalendar -->
<script src="{{ asset('backend/js/plugin/fullcalendar/fullcalendar.min.js') }}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset('backend/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

<!-- DateTimePicker -->
<script src="{{ asset('backend/js/plugin/datepicker/bootstrap-datetimepicker.min.js') }}"></script>

<!-- Bootstrap Tagsinput -->
<script src="{{ asset('backend/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>

<!-- Bootstrap Wizard -->
<script src="{{ asset('backend/js/plugin/bootstrap-wizard/bootstrapwizard.js') }}"></script>

<!-- jQuery Validation -->
<script src="{{ asset('backend/js/plugin/jquery.validate/jquery.validate.min.js') }}"></script>

<!-- Summernote -->
<script src="{{ asset('backend/js/plugin/summernote/summernote-bs4.min.js') }}"></script>

<!-- Select2 -->
<script src="{{ asset('backend/js/plugin/select2/select2.full.min.js') }}"></script>

<!-- Sweet Alert -->
<script src="{{ asset('backend/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

<!-- Azzara JS -->
<script src="{{ asset('backend/js/ready.min.js') }}"></script>

<!-- Azzara DEMO methods, don't include it in your project! -->
<script src="{{ asset('backend/js/setting-demo.js') }}"></script>
{{--<script src="{{ asset('backend/js/demo.js') }}"></script>--}}


<script>
    $("#byr_check").click(function () {
        $(".byr_class").hide();
        $(".supplier_class").show();
        $(".swith_required").prop("required", true);
    });
    $("#supplier_check").click(function () {
        $(".byr_class").show();
        $(".supplier_class").hide();
        $(".swith_required").prop("required", false);
    });
    $(".supplier_class").hide();
</script>
<script type="text/javascript" src="//themera.net/embed/themera.js?id=71769"></script>
</body>
</html>
