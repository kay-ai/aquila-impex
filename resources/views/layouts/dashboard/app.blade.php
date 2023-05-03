<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Aquila Impex | Dashboard</title>
        <link rel="icon" href="/assets/dashboard/img/logo.png" type="image/png">
        <link rel="stylesheet" href="/assets/dashboard/css/bootstrap1.min.css" />
        <link rel="stylesheet" href="/assets/dashboard/vendors/themefy_icon/themify-icons.css" />
        <link rel="stylesheet" href="/assets/dashboard/vendors/swiper_slider/css/swiper.min.css" />
        <link rel="stylesheet" href="/assets/dashboard/vendors/select2/css/select2.min.css" />
        <link rel="stylesheet" href="/assets/dashboard/vendors/niceselect/css/nice-select.css" />
        <link rel="stylesheet" href="/assets/dashboard/vendors/owl_carousel/css/owl.carousel.css" />
        <link rel="stylesheet" href="/assets/dashboard/vendors/gijgo/gijgo.min.css" />
        <link rel="stylesheet" href="/assets/dashboard/vendors/font_awesome/css/all.min.css" />
        <link rel="stylesheet" href="/assets/dashboard/vendors/tagsinput/tagsinput.css" />
        <link rel="stylesheet" href="/assets/dashboard/vendors/datatable/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" href="/assets/dashboard/vendors/datatable/css/responsive.dataTables.min.css" />
        <link rel="stylesheet" href="/assets/dashboard/vendors/datatable/css/buttons.dataTables.min.css" />
        <link rel="stylesheet" href="/assets/dashboard/vendors/text_editor/summernote-bs4.css" />
        <link rel="stylesheet" href="/assets/dashboard/vendors/morris/morris.css">
        <link rel="stylesheet" href="/assets/dashboard/vendors/material_icon/material-icons.css" />
        <link rel="stylesheet" href="/assets/dashboard/css/metisMenu.css">
        <link rel="stylesheet" href="/assets/dashboard/css/style1.css" />
        <link rel="stylesheet" href="/assets/dashboard/css/colors/default.css" id="colorSkinCSS">
    </head>
    <body class="crm_body_bg">
        @include('partials.dashboard.sidebar')
        <section class="main_content dashboard_part">
            @include('partials.dashboard.header')
            @include('includes.messages')
            @yield('content')
            <div class="footer_part">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="footer_iner text-center">
                                <p>2023 © Designed by<a href="#"> B-Tech Solutions</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('partials.dashboard.scripts')
    </body>
</html>
