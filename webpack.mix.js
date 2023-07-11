const mix = require('laravel-mix');

mix.combine([

        <!-- Required Jquery -->
        'public/libraries/bower_components/jquery/js/jquery.min.js',
        'public/libraries/bower_components/jquery-ui/js/jquery-ui.min.js',
        'public/libraries/bower_components/popper.js/js/popper.min.js',
        'public/libraries/bower_components/bootstrap/js/bootstrap.min.js',

        <!-- Layout js -->
        'public/libraries/assets/js/pcoded.min.js',
        'public/libraries/assets/js/vartical-layout.min.js',

        <!-- Notification js -->
        'public/libraries/bower_components/toastr/toastr.min.js',

        <!-- Date -->
        'public/libraries/bower_components/flatpickr/js/flatpickr.min.js',
        'public/libraries/bower_components/flatpickr/js/l10n/ru.js',

        <!-- Sweetalert2 -->
        'public/libraries/bower_components/sweetalert2/js/sweetalert.min.js',

        <!-- Masking js -->
        'public/libraries/bower_components/form-masking/inputmask.js',

        <!-- Data-table js -->
        'public/libraries/bower_components/datatables.net/js/jquery.dataTables.min.js',
        'public/libraries/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js',
        'public/libraries/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
        'public/libraries/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js',
        'public/libraries/bower_components/datatables.net/js/rowReorder.min.js',
        'public/libraries/bower_components/datatables.net/js/dataTables.rowGroup.min.js',

        <!-- Select 2 js -->
        'public/libraries/bower_components/select2/js/select2.full.min.js',

        <!-- Tippy js -->
        'public/libraries/assets/libs/tippy.js/tippy.all.min.js',

        <!-- File Input js -->
        'public/libraries/bower_components/bootstrap-fileinput/js/fileinput.min.js',
        'public/libraries/bower_components/bootstrap-fileinput/js/locales/ru.js',

        <!-- overlayScrollbars -->
        'public/libraries/assets/js/jquery.mCustomScrollbar.concat.min.js'
    ],
    'public/js/vendors.min.js').sourceMaps();

mix.combine([

        <!-- Required Framework -->
        'public/libraries/bower_components/bootstrap/css/bootstrap.min.css',

        <!-- Date -->
        'public/libraries/bower_components/flatpickr/css/flatpickr.min.css',

        <!-- Select 2 css -->
        'public/libraries/bower_components/select2/css/select2.min.css',

        <!-- Data Table Css -->
        'public/libraries/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
        'public/libraries/bower_components/datatables.net/css/buttons.dataTables.min.css',
        'public/libraries/bower_components/datatables.net/css/rowGroup.dataTables.css',
        'public/libraries/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css',

        <!-- Notification css -->
        'public/libraries/bower_components/toastr/toastr.min.css',

        <!-- Fileinput -->
        'public/libraries/bower_components/bootstrap-fileinput/css/fileinput.min.css',

        <!-- Style -->
        'public/libraries/assets/css/style.css',
        'public/libraries/assets/css/jquery.mCustomScrollbar.css',
    ],
    'public/css/vendors.min.css').sourceMaps();


mix.combine(['public/libraries/assets/js/custom.js'],
    'public/js/custom.min.js').sourceMaps();

// JQuery step
mix.combine(['public/libraries/bower_components/jquery.steps/css/jquery.steps.css'],
    'public/css/jquery.steps.min.css').sourceMaps();

mix.combine(['public/libraries/bower_components/jquery.steps/js/jquery.steps.js'],
    'public/js/jquery.steps.min.js').sourceMaps();

mix.combine(['public/libraries/bower_components/slick-carousel/css/slick.css'],
    'public/css/slick.min.css').sourceMaps();

mix.combine(['public/libraries/bower_components/slick-carousel/css/slick-theme.css'],
    'public/css/slick-theme.min.css').sourceMaps();

mix.combine(['public/libraries/bower_components/slick-carousel/js/slick.min.js'],
    'public/js/slick.min.js').sourceMaps();

// Products
mix.combine(['public/libraries/assets/js/pages/products.modify.js'],
    'public/js/pages/products.modify.min.js').sourceMaps();
