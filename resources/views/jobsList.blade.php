@extends('base')

@section('content')

    <main>
        <div class="main-wrapper">
            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Работа и заказы в Мадриде</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Свежие заказы</li>
                    </ol>
                </nav>
                <div class="page-title">
                    <h1>Работа для сантехника в Мадриде</h1>
                </div>
                <x-small-search></x-small-search>

                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="executor-list">
                                @foreach($jobs as $job)
                                    <div class="element">
                                    <a href="/" class="showFull">
                                        <svg width="9" height="12" class="svg-icon">
                                            <use xlink:href=" {{ asset('icons/icons.svg#full') }}"></use>
                                        </svg>
                                    </a>
                                    <div class="el-title">
                                        <h3><a href="jobs/{{ $job['id'] }}">{{ $job['title'] }}</a></h3>
                                        <div class="price">€{{ $job['price'] }}</div>
                                    </div>
                                    <div class="el-desc">
                                        <p>{{ $job['desc'] }}</p>
                                    </div>
                                    <div class="el-location">
                                        <i class="fas fa-map-marker-alt me-2"></i>{{ $job['location'] }}
                                    </div>
                                    <div class="el-date">{{ $job['date-time'] }}</div>
                                    <div class="el-webstores">
                                        <a class="btn btn-primary" href="/">
                                            <svg width="24" height="26" class="svg-icon me-2">
                                                <use xlink:href="{{ asset('icons/icons.svg#googleplay') }}"></use>
                                            </svg>
                                            <span>Откликнуться<span> в App</span><br/> <b>Google Play</b></span>
                                        </a>
                                        <a class="btn btn-primary" href="/">
                                            <svg width="24" height="26" class="svg-icon me-2">
                                                <use xlink:href="{{ asset('icons/icons.svg#apple') }} "></use>
                                            </svg>
                                            <span>Откликнуться<span> в App</span><br/> <b>AppStore</b></span>
                                        </a>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <div class="btn-more">
                                <a href="" class="btn btn-primary btn-large"><i class="fas fa-arrow-down icon-left"></i>Загрузить ещё работ</a>
                            </div>
                            <div class="seo-content">
                                <h2>Заказы для сантехника в Мадриде</h2>
                                <p>Описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <x-aside></x-aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
