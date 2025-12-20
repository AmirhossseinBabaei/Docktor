<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
{{--{{ dd($serviceData['data']) }}--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('sora/assets/img') }}/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('sora/assets/img') }}/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>داشبورد سورا</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="{{ asset('sora/assets/css') }}/all.css" rel="stylesheet"/>
    <!-- CSS Files -->
    <link href="{{ asset('sora/assets/css') }}/bootstrap.min.css" rel="stylesheet"/>
    <link href="{{ asset('sora/assets/css') }}/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('sora/assets/css') }}/demo.css" rel="stylesheet"/>
    <link href="{{ asset('sora/assets/css') }}/fonts.css" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-image="{{ asset('sora/assets/img') }}/sidebar-5.jpg">
        <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

    Tip 2: you can also add an image using data-image tag
-->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    سیستم مدیریت مطب سورا
                </a>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard.html">
                        <i class="nc-icon nc-chart-pie-35"></i>
                        <p>داشبورد</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="./user.html">
                        <i class="nc-icon nc-circle-09"></i>
                        <p>پروفایل</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="./table.html">
                        <i class="nc-icon nc-notes"></i>
                        <p>آمار</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="./form.html">
                        <i class="nc-icon nc-credit-card"></i>
                        <p>پزشکان</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="./typography.html">
                        <i class="nc-icon nc-paper-2"></i>
                        <p>بیماران</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="./icons.html">
                        <i class="nc-icon nc-atom"></i>
                        <p>دارو ها</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="./maps.html">
                        <i class="nc-icon nc-pin-3"></i>
                        <p>تنظیمات</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="./notifications.html">
                        <i class="nc-icon nc-bell-55"></i>
                        <p>سرویس ها</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="./notifications.html">
                        <i class="nc-icon nc-album-2"></i>
                        <p>ویزیت ها</p>
                    </a>
                </li>
                <li class="nav-item active active-pro">
                    <a class="nav-link active" href="{{ route('logout') }}">
                        <i class="fa fa-sign-out-alt"></i>
                        <p>خروج از سورا</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class="container-fluid">
                <a class="navbar-brand" href="#pablo"> داشبورد </a>
                <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                <i class="nc-icon nc-palette"></i>
                                <span class="d-lg-none">داشبورد</span>
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <i class="nc-icon nc-planet"></i>
                                <span class="notification">5</span>
                                <span class="d-lg-none">اعلان</span>
                            </a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="#">اعلان 1</a>
                                <a class="dropdown-item" href="#">اعلان 2</a>
                                <a class="dropdown-item" href="#">اعلان 3</a>
                                <a class="dropdown-item" href="#">اعلان 4</a>
                                <a class="dropdown-item" href="#">اعلان دیگر</a>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nc-icon nc-zoom-split"></i>
                                <span class="d-lg-block">&nbsp;جستجو</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <span class="no-icon">حساب</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com"
                               id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <span class="no-icon">لیست کشویی</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">آیتم اول</a>
                                <a class="dropdown-item" href="#">آیتم دوم</a>
                                <a class="dropdown-item" href="#">آیتم سوم</a>
                                <a class="dropdown-item" href="#">آیتم چهارم</a>
                                <div class="divider"></div>
                                <a class="dropdown-item" href="#">آیتم پنجم</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout')  }}">
                                <span class="no-icon">خروج</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">آمار ویزیت ها</h4>
                                <div class="d-flex justify-content-between">
                                    <p class="card-category">آخرین عملکرد کمپین</p>
                                    <p class="card-category">تعداد کل نوبت
                                        ها: {{ $serviceData['data']['pieChartData']['any'] }}</p>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                                <div class="legend">
                                    <i class="fa fa-circle text-info"></i> ویزیت شده
                                    <i class="fa fa-circle text-danger"></i> منتظر
                                    <i class="fa fa-circle text-warning"></i> لغو شده
                                </div>
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-clock-o"></i>وضعیت کمپین هم اکنون
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">آمار ویزیت ها</h4>
                                <p class="card-category">عملکرد 24 ساعته</p>
                            </div>
                            <div class="card-body ">
                                <div id="chartHours" class="ct-chart"></div>
                            </div>
                            <div class="card-footer ">
                                <div class="legend">
                                    <i class="fa fa-circle text-info"></i> ویزیت شده
                                    <i class="fa fa-circle text-danger"></i> منتظر
                                    <i class="fa fa-circle text-warning"></i>لغو شده
                                </div>
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-history"></i> 3 دقیقه پیش آپدیت شد
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">پر بازدید ترین ماه ها</h4>
                                <p class="card-category">کل ماه های سال</p>
                            </div>
                            <div class="card-body ">
                                <div id="chartActivity" class="ct-chart"></div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-check"></i> اطلاعات داده تایید شده است
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card  card-tasks">
                            <div class="card-header ">
                                <h4 class="card-title">نسخه ها</h4>
                                <p class="card-category">آمار ریل تایم</p>
                            </div>
                            <div class="card-body ">
                                <div class="table-full-width">
                                    <table class="table" id="mySocket">
                                        <tbody>
                                        {{--                                            --}}
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"
                                                               value="">
                                                        <span class="form-check-sign"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>حسن رضایی
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-info btn-simple btn-link">
                                                    <button type="button" rel="tooltip"
                                                            class="btn btn-warning">
                                                        وضعیت: منتظر نوبت
                                                    </button>
                                                </button>
                                            </td>
                                        </tr>
                                        {{--                                            --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="now-ui-icons loader_refresh spin"></i> 3 دقیقه پیش آپدیت شد
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav>
                    <ul class="footer-menu">
                        <li>
                            <a href="#">
                                خانه
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                شرکت
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                نمونه کار
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                بلاگ
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-center">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://persian-theme.com/">پرشین تم</a>, ساخته شده با عشق برای یک وب بهتر
                    </p>
                </nav>
            </div>
        </footer>
    </div>
</div>
<!--   -->
</body>
<!--   Core JS Files   -->
<script src="{{ asset('sora/assets/js') }}/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="{{ asset('sora/assets/js') }}/core/popper.min.js" type="text/javascript"></script>
<script src="{{ asset('sora/assets/js') }}/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('sora/assets/js') }}/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{ asset('sora/assets/js') }}/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('sora/assets/js') }}/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ asset('sora/assets/js') }}/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<script>
    $().ready(function () {
        $sidebar = $('.sidebar');
        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
            if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                $('.fixed-plugin .dropdown').addClass('show');
            }

        }

        $('.fixed-plugin a').click(function (event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass('switch-trigger')) {
                if (event.stopPropagation) {
                    event.stopPropagation();
                } else if (window.event) {
                    window.event.cancelBubble = true;
                }
            }
        });

        $('.fixed-plugin .background-color span').click(function () {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
                $sidebar.attr('data-color', new_color);
            }

            if ($full_page.length != 0) {
                $full_page.attr('filter-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data-color', new_color);
            }
        });

        $('.fixed-plugin .img-holder').click(function () {
            $full_page_background = $('.full-page-background');

            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');


            var new_image = $(this).find("img").attr('src');

            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                $sidebar_img_container.fadeOut('fast', function () {
                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $sidebar_img_container.fadeIn('fast');
                });
            }

            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                $full_page_background.fadeOut('fast', function () {
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                    $full_page_background.fadeIn('fast');
                });
            }

            if ($('.switch-sidebar-image input:checked').length == 0) {
                var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            }

            if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
            }
        });

        $('.switch input').on("switchChange.bootstrapSwitch", function () {

            $full_page_background = $('.full-page-background');

            $input = $(this);

            if ($input.is(':checked')) {
                if ($sidebar_img_container.length != 0) {
                    $sidebar_img_container.fadeIn('fast');
                    $sidebar.attr('data-image', '#');
                }

                if ($full_page_background.length != 0) {
                    $full_page_background.fadeIn('fast');
                    $full_page.attr('data-image', '#');
                }

                background_image = true;
            } else {
                if ($sidebar_img_container.length != 0) {
                    $sidebar.removeAttr('data-image');
                    $sidebar_img_container.fadeOut('fast');
                }

                if ($full_page_background.length != 0) {
                    $full_page.removeAttr('data-image', '#');
                    $full_page_background.fadeOut('fast');
                }

                background_image = false;
            }
        });
    });

    type = ['primary', 'info', 'success', 'warning', 'danger'];

    demo = {
        initPickColor: function () {
            $('.pick-class-label').click(function () {
                var new_class = $(this).attr('new-class');
                var old_class = $('#display-buttons').attr('data-class');
                var display_div = $('#display-buttons');
                if (display_div.length) {
                    var display_buttons = display_div.find('.btn');
                    display_buttons.removeClass(old_class);
                    display_buttons.addClass(new_class);
                    display_div.attr('data-class', new_class);
                }
            });
        },

        initDocumentationCharts: function () {
            /* ----------==========     Daily Sales Chart initialization For Documentation    ==========---------- */

            dataDailySalesChart = {
                labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
                series: [
                    [12, 17, 7, 17, 23, 18, 38]
                ]
            };

            optionsDailySalesChart = {
                lineSmooth: Chartist.Interpolation.cardinal({
                    tension: 0
                }),
                low: 0,
                high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
                chartPadding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            }

            var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);


            // lbd.startAnimationForLineChart(dailySalesChart);
        },

        initDashboardPageCharts: function () {

            var dataPreferences = {
                series: [
                    [5, 10, 15, 10]
                ]
            };

            let optionsPreferences = {
                donut: true,
                donutWidth: 1,
                startAngle: 0,
                total: 0,
                showLabel: true,
                axisX: {
                    showGrid: false
                }
            };

            Chartist.Pie('#chartPreferences', dataPreferences, optionsPreferences);
            //chart dayereh ii

            Chartist.Pie('#chartPreferences', {
                labels: [{!! json_encode($serviceData['data']['pieChartData']['completed']) !!}, {!! json_encode($serviceData['data']['pieChartData']['cancelled']) !!}, {!! json_encode($serviceData['data']['pieChartData']['pending']) !!}],
                series: [{!! json_encode($serviceData['data']['pieChartData']['completed']) !!}, {!! json_encode($serviceData['data']['pieChartData']['cancelled']) !!}, {!! json_encode($serviceData['data']['pieChartData']['pending']) !!}]
            });

            var dataSales = {
                labels: ['9:00 صبح', '12:00 صبح', '3:00 عصر', '6:00 عصر', '9:00 عصر', '12:00 عصر', '3:00 صبح', '6:00 صبح'],
                series: [
                    {!! json_encode($serviceData['data']['areaChartData']) !!}
                ]
            };

            // var optionsSales = {
            //   lineSmooth: false,
            //   low: 0,
            //   high: 800,
            //    chartPadding: 0,
            //   showArea: true,
            //   height: "245px",
            //   axisX: {
            //     showGrid: false,
            //   },
            //   axisY: {
            //     showGrid: false,
            //   },
            //   lineSmooth: Chartist.Interpolation.simple({
            //     divisor: 6
            //   }),
            //   showLine: false,
            //   showPoint: true,
            //   fullWidth: true
            // };
            var optionsSales = {
                lineSmooth: false,
                low: 5,
                high: 100,
                showArea: true,
                height: "300px",
                axisX: {
                    showGrid: false,
                },
                lineSmooth: Chartist.Interpolation.simple({
                    divisor: 1
                }),
                showLine: false,
                showPoint: false,
                fullWidth: false
            };

            var responsiveSales = [
                ['screen and (max-width: 640px)', {
                    axisX: {
                        labelInterpolationFnc: function (value) {
                            return value[0];
                        }
                    }
                }]
            ];

            var chartHours = Chartist.Line('#chartHours', dataSales, optionsSales, responsiveSales);

            // lbd.startAnimationForLineChart(chartHours);

            let rawData = {!! json_encode($serviceData['data']['monthCountChartData']) !!};

            let seriesData = [
                rawData.march,
                rawData.april,
                rawData.may,
                rawData.june,
                rawData.july,
                rawData.august,
                rawData.september,
                rawData.october,
                rawData.november,
                rawData.december,
                rawData.january,
                rawData.february
            ];

            let data = {
                labels: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'],
                series: [seriesData]
            };

            var options = {
                seriesBarDistance: 100,
                axisX: {showGrid: false},
                axisY: {
                    onlyInteger: true,
                    offset: 10,
                    low: 0,
                    high: 100,
                    scaleMinSpace: 10
                },
                height: "245px"
            };

            var chartActivity = Chartist.Bar('#chartActivity', data, options);


            // lbd.startAnimationForBarChart(chartActivity);

            // /* ----------==========     Daily Sales Chart initialization    ==========---------- */
            //
            // dataDailySalesChart = {
            //     labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
            //     series: [
            //         [12, 17, 7, 17, 23, 18, 38]
            //     ]
            // };
            //
            // optionsDailySalesChart = {
            //     lineSmooth: Chartist.Interpolation.cardinal({
            //         tension: 0
            //     }),
            //     low: 0,
            //     high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            //     chartPadding: { top: 0, right: 0, bottom: 0, left: 0},
            // }
            //
            // var dailySalesChart = Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);

            // lbd.startAnimationForLineChart(dailySalesChart);

            //
            //
            // /* ----------==========     Completed Tasks Chart initialization    ==========---------- */
            //
            // dataCompletedTasksChart = {
            //     labels: ['12am', '3pm', '6pm', '9pm', '12pm', '3am', '6am', '9am'],
            //     series: [
            //         [230, 750, 450, 300, 280, 240, 200, 190]
            //     ]
            // };
            //
            // optionsCompletedTasksChart = {
            //     lineSmooth: Chartist.Interpolation.cardinal({
            //         tension: 0
            //     }),
            //     low: 0,
            //     high: 1000, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            //     chartPadding: { top: 0, right: 0, bottom: 0, left: 0}
            // }
            //
            // var completedTasksChart = new Chartist.Line('#completedTasksChart', dataCompletedTasksChart, optionsCompletedTasksChart);
            //
            // // start animation for the Completed Tasks Chart - Line Chart
            // lbd.startAnimationForLineChart(completedTasksChart);
            //
            //
            // /* ----------==========     Emails Subscription Chart initialization    ==========---------- */
            //
            // var dataEmailsSubscriptionChart = {
            //   labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            //   series: [
            //     [542, 443, 320, 780, 553, 453, 326, 434, 568, 610, 756, 895]
            //
            //   ]
            // };
            // var optionsEmailsSubscriptionChart = {
            //     axisX: {
            //         showGrid: false
            //     },
            //     low: 0,
            //     high: 1000,
            //     chartPadding: { top: 0, right: 5, bottom: 0, left: 0}
            // };
            // var responsiveOptions = [
            //   ['screen and (max-width: 640px)', {
            //     seriesBarDistance: 5,
            //     axisX: {
            //       labelInterpolationFnc: function (value) {
            //         return value[0];
            //       }
            //     }
            //   }]
            // ];
            // var emailsSubscriptionChart = Chartist.Bar('#emailsSubscriptionChart', dataEmailsSubscriptionChart, optionsEmailsSubscriptionChart, responsiveOptions);
            //
            // //start animation for the Emails Subscription Chart
            // lbd.startAnimationForBarChart(emailsSubscriptionChart);

        },

        initGoogleMaps: function () {
            var myLatlng = new google.maps.LatLng(40.748817, -73.985428);
            var mapOptions = {
                zoom: 13,
                center: myLatlng,
                scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
                styles: [{
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#e9e9e9"
                    }, {
                        "lightness": 17
                    }]
                }, {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }, {
                        "lightness": 20
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 17
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 29
                    }, {
                        "weight": 0.2
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 18
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 16
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }, {
                        "lightness": 21
                    }]
                }, {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#dedede"
                    }, {
                        "lightness": 21
                    }]
                }, {
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "visibility": "on"
                    }, {
                        "color": "#ffffff"
                    }, {
                        "lightness": 16
                    }]
                }, {
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "saturation": 36
                    }, {
                        "color": "#333333"
                    }, {
                        "lightness": 40
                    }]
                }, {
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f2f2f2"
                    }, {
                        "lightness": 19
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#fefefe"
                    }, {
                        "lightness": 20
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#fefefe"
                    }, {
                        "lightness": 17
                    }, {
                        "weight": 1.2
                    }]
                }]
            };

            var map = new google.maps.Map(document.getElementById("map"), mapOptions);

            var marker = new google.maps.Marker({
                position: myLatlng,
                title: "Hello World!"
            });

            // To add the marker to the map, call setMap();
            marker.setMap(map);
        },

        showNotification: function (from, align) {
            color = Math.floor((Math.random() * 4) + 1);

            $.notify({
                icon: "nc-icon nc-app",
                message: "به <b>داشبورد لایت بوت استرپ</b> خوش آمدید - یک بازی رایگان زیبا برای هر توسعه دهنده وب."

            }, {
                type: type[color],
                timer: 5000,
                placement: {
                    from: from,
                    align: align
                }
            });
        }


    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

<script>
    fetch('/get-five-appoiments-last', {
        method: 'GET',
        headers: {
            'Accept': 'application/json'
        }
    })
        .then(res => res.json())
        .then(data => {
            console.log('داده دریافتی:', data);

            const tableBody = document.querySelector('#mySocket');
            tableBody.innerHTML = ''; // پاک کردن داده‌های قبلی

            // اگر data آرایه نیست، باید مسیر درست رو پیدا کنی
            const items = Object.values(data);
            items.forEach(item => {
            for (let i = 0; i < 5; i++) {
                const row = document.createElement('tr');
            console.log(item[i]);
                row.innerHTML += `
              <td>${item[i].patient.first_name} ${item[i].patient.last_name}
                                            </td>

              <td>${item[i].doctor.first_name} ${item[i].doctor.last_name}
                                            </td>
                <td>
              <td>${item[i].date} ${item[i].start_time}
                                            </td></td>
                                            <td class="text-right">

                                                    <button type="button" rel="tooltip"
                                                            class="btn btn-${item[i].status[1]} text-black btn-sm">
                                                        وضعیت: ${item[i].status[0]}
                                                    </button>
                                            </td>
        `;
                tableBody.appendChild(row);
            }
            });
        })
        .catch(err => console.error('خطا در دریافت داده‌ها:', err));
</script>
</html>

