@extends('layouts.skeleton')

@section('app')
<div class="main-wrapper container">
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
        @include('partials.topnav')
    </nav>

    <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
            <ul class="navbar-nav navbar-left">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="far fa-heart"></i><span>Top Navigation</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="far fa-heart"></i><span>Top Navigation</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="far fa-heart"></i><span>Top Navigation</span></a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                    <a href="#" class="btn btn-primary">Create New</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>
    <footer class="main-footer">
        @include('partials.footer')
    </footer>
</div>
@endsection