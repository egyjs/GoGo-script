<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Monkey Admin Panel">
    <meta property="og:title" content="Dynmic Personal Portfolio">
    <meta property="og:url" content="">
    <meta property="og:description" content="Bynamic Personl Portfolio That Uses Beatufel Desgine And build on a The Most Famous Framwork Larvel">
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="icon" href=" @if(isset($info)) {{ $info->icon }} @endif" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@stack("css")
</head>
<body class="app sidebar-mini rtl">

<!-- Navbar-->
<header class="app-header">
    <a class="app-header__logo" href="{{ route("dash") }}"> Admin Panel </a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="{{ route('dash.settings') }}"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
<li>
    <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault()">
                   <I class="fa fa-sign-out"></I> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
</li>
            </ul>
        </li>
    </ul>
</header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img style="width:10vh; height:10vh;" class="app-sidebar__user-avatar" src="{{ asset("$info->photo") }} " alt="User Image">
        <div>
            <p class="app-sidebar__user-name">{{ $info->name }}</p>
        </div>
    </div>
    <ul class="app-menu">
        <li class=""><a class="app-menu__item @if(Route::currentRouteName() == 'dash') active @endif" href="{{ route("dash") }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class=""><a class="app-menu__item @if(Route::currentRouteName() == 'dash.settings') active @endif" href="{{ route("dash.settings") }}"><i class="app-menu__icon fa fa-cog"></i><span class="app-menu__label">Settings</span></a></li>
        <li class=""><a class="app-menu__item @if(Route::currentRouteName() == 'dash.about') active @endif" href="{{ route("dash.about") }}"><i class="app-menu__icon fa fa-info-circle"></i><span class="app-menu__label">About Section</span></a></li>
        <li class="treeview"><a class="app-menu__item @if(strpos(Route::currentRouteName(),'feat') == true) active @endif" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-star-half-empty"></i><span class="app-menu__label">Features Section</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item @if(Route::currentRouteName() == 'dash.features') active @endif" href="{{ route('dash.features') }}"><i class="icon fa fa-circle-o"></i> All Features</a></li>
                <li><a class="treeview-item @if(Route::currentRouteName() == 'dash.feat.add') active @endif" href="{{ route('dash.feat.add') }}" rel="noopener"><i class="icon fa fa-plus-circle"></i> Add Feature</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item @if(strpos(Route::currentRouteName(),'work') == true) active @endif" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-folder-open-o"></i><span class="app-menu__label">Portfolio Section</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item @if(Route::currentRouteName() == 'dash.work.all') active @endif" href="{{ route('dash.work') }}"><i class="icon fa fa-circle-o"></i> All Projects</a></li>
                <li><a class="treeview-item @if(Route::currentRouteName() == 'dash.work.add') active @endif" href="{{ route('dash.work.add') }}" rel="noopener"><i class="icon fa fa-plus-circle"></i> Add Project</a></li>
            </ul>
        </li>
   </ul>
</aside>
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            @yield("content")
        </div>
    </div>
</main>

<!-- Essential javascripts for application to work-->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{ asset('js/plugins/pace.min.js') }}"></script>
<!-- Page specific javascripts-->
</body>
</html>