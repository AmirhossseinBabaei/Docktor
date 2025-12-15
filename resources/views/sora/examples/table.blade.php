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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('sora/assets/img') }}/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('sora/assets/img') }}/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>سورا - جداول</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="{{ asset('sora/assets/css') }}/all.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('sora/assets/css') }}/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('sora/assets/css') }}/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('sora/assets/css') }}/demo.css" rel="stylesheet" />
    <link href="{{ asset('sora/assets/css') }}/fonts.css" rel="stylesheet" />
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
                        سورا
                    </a>
                </div>
                <ul class="nav">
                    <li>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="./table.html">
                            <i class="nc-icon nc-notes"></i>
                            <p>جداول</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./form.html">
                            <i class="nc-icon nc-credit-card"></i>
                            <p>فرم</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./typography.html">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>تایپوگرافی</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./icons.html">
                            <i class="nc-icon nc-atom"></i>
                            <p>آیکن ها</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./maps.html">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>نقشه</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./notifications.html">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>اعلانات</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="#">
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
                                <a class="nav-link" href="#pablo">
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
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">جدول راه راه با شناور</h4>
                                    <p class="card-category">اینم زیرنویس این جدول</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>شناسه</th>
                                            <th>نام</th>
                                            <th>حقوق</th>
                                            <th>کشور</th>
                                            <th>شهر</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>برنج داکوتا</td>
                                                <td>50,000 تومان</td>
                                                <td>نیجر</td>
                                                <td>عود-ترنهات</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>مینروا هوپر</td>
                                                <td>45,000 تومان</td>
                                                <td>کوراسائو</td>
                                                <td>سینا-واس</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>سیج رودریگز</td>
                                                <td>46,000 تومان</td>
                                                <td>هلند</td>
                                                <td>بایلوکس</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>فیلیپ چانی</td>
                                                <td>$38,735</td>
                                                <td>کره جنوبی</td>
                                                <td>پارک اورلند</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>دوریس گرین</td>
                                                <td>66,000 تومان</td>
                                                <td>مالاوی</td>
                                                <td>متن تست لورم</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>میسون پورتر</td>
                                                <td>78,000 تومان</td>
                                                <td>شیلی</td>
                                                <td>گلاستر</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card card-plain table-plain-bg">
                                <div class="card-header ">
                                    <h4 class="card-title">جدول در پس زمینه ساده</h4>
                                    <p class="card-category">اینم زیرنویس این جدول</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>شناسه</th>
                                            <th>نام</th>
                                            <th>حقوق</th>
                                            <th>کشور</th>
                                            <th>شهر</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>برنج داکوتا</td>
                                                <td>50,000 تومان</td>
                                                <td>نیجر</td>
                                                <td>عود-ترنهات</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>مینروا هوپر</td>
                                                <td>45,000 تومان</td>
                                                <td>کوراسائو</td>
                                                <td>سینا-واس</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>سیج رودریگز</td>
                                                <td>46,000 تومان</td>
                                                <td>هلند</td>
                                                <td>بایلوکس</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>فیلیپ چانی</td>
                                                <td>$38,735</td>
                                                <td>کره جنوبی</td>
                                                <td>پارک اورلند</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>دوریس گرین</td>
                                                <td>66,000 تومان</td>
                                                <td>مالاوی</td>
                                                <td>متن تست لورم</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>میسون پورتر</td>
                                                <td>78,000 تومان</td>
                                                <td>شیلی</td>
                                                <td>گلاستر</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('sora/assets/js') }}/demo.js"></script>

</html>

