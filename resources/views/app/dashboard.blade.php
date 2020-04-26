@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="hero bg-primary text-white">
                    <div class="hero-inner">
                        <h2>Welcome Back, Ujang!</h2>
                        <p class="lead">This page is a place to manage posts, categories and more.</p>
                    </div>
                </div>
            </div>
        </div>

        <article>
            <h2 class="section-title">Articles</h2>
            <p class="section-lead">This article component is based on card and flexbox.</p>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="bg-white p-4 d-md-flex align-items-center">
                        <div class="mb-4 mb-md-0 mr-5">
                            <div class="d-flex align-items-center">
                                <h3 class="mr-3 h4">
                                    <a href="#">Warung Ibu Yanti</a>
                                </h3>
                            </div>
                            <div class="d-block d-md-flex">
                                <div class="mr-3">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span> Yogyakarta</span>
                                </div>
                                <div class="mr-3">
                                    <i class="fas fa-briefcase"></i>
                                    <span> Toko Klontong</span>
                                </div>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <span class="badge badge-primary">Ambil Sendiri</span>
                            <span class="badge badge-warning">Diantar</span>
                            <span class="badge badge-info">Online</span>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
@endsection
