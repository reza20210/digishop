<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <title>پنل مدیریت</title>
</head>
<body>

<div class="container-fluid">
    <div class="page_sidebar">
        <span class="fa fa-bars" id="sidebarToggle"></span>
        <ul id="sidebar_menu">
            <li>
                <a>
                    <span class="fa fa-shopping-cart"></span>
                    <span class="sidebar_menu_text">محصولات</span>
                    <span class="fa fa-angle-left"></span>
                </a>
                <div class="child_menu">
                    <a>مدیریت محصولات</a>
                    <a>افزودن محصول</a>
                    <a>مدیریت دسته ها</a>
                </div>
            </li>
            <li>
                <a>
                    <span class="fa fa-sliders"></span>
                    <span class="sidebar_menu_text">اسلایدر</span>
                    <span class="fa fa-angle-left"></span>
                </a>
                <div class="child_menu">
                    <a>مدیریت اسلایدرها</a>
                    <a>افزودن اسلایدر</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="page_content">
        welcome
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/admin.js') }}" defer></script>
</body>
</html>
