@extends('base')
@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-9">
                <div class="spec-board spec-board-page sticky_sentinel sticky_sentinel--bottom">
                    <h1 class="spec-main-name">{{ $item['name'] }}<i class="fas fa-check text-success"></i></h1>
                    <div class="el-head spec-info">
                        <div class="img-wrapper">
                            <img src="{{ asset($item['profile-photo']) }}" alt="">
                        </div>
                        <div class="location m-0">
                            <i class="fas fa-map-marker-alt me-2"></i>{{ $item['location'] }}
                        </div>
                        <div class="reviews-box">
                            <div class="raiting">
                                <div class="reviews-raiting">
                                    <mark style="width:{{ $item['rating']['rate'] }}%;"></mark>
                                </div>
                                <div class="review-likes">
                                    <div class="score likes"><i class="far fa-thumbs-up"></i>{{ $item['rating']['likes'] }}</div>
                                    <div class="score dislikes"><i class="far fa-thumbs-down"></i>{{ $item['rating']['dislikes'] }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="webstore-group webstore-group--35px variant2-mobile">
                            <a href="/" class="btn btn-primary fw-medium">
                                <svg width="24" height="24" class="svg-icon me-2">
                                    <use xlink:href="{{ asset('icons/icons.svg#googleplay') }}"></use>
                                </svg>
                                Google Play
                            </a>
                            <a href="/" class="btn btn-primary fw-medium">
                                <svg width="24" height="24" class="svg-icon me-2">
                                    <use xlink:href="{{ asset('icons/icons.svg#apple') }} "></use>
                                </svg>
                                AppStore
                            </a>
                            <span class="sup-title">Предложить задание в приложении</span>
                        </div>
                    </div>



                    <div class="spec-full-info">
                        <div class="card-full-desc">
                            <div class="fd-element">
                                <div class="title-default">Обо мне</div>
                                <div class="desc">
                                    <p>{{ $item['profile-desc'] }}</p>
                                </div>
                            </div>
                            <div class="fd-element">
                                <div class="title-default">Цены на задания</div>
                                <div class="table-line">
                                    <div class="t-col">
                                        <div class="name">Замена трубы</div>
                                        <div class="value">от €500</div>
                                    </div>
                                    <div class="t-col">
                                        <div class="name">Замена счётчиков воды</div>
                                        <div class="value">от €500</div>
                                    </div>
                                    <div class="t-col">
                                        <div class="name">Замена смесителя</div>
                                        <div class="value">от €500</div>
                                    </div>
                                </div>
                            </div>
                            <div class="fd-element">
                                <div class="title-default">Примеры работ</div>
                                <div class="card-horizontal-gallery">
                                    @foreach($item['examples'] as $example)
                                        <div class="g-item">
                                            <div class="img-wrapper">
                                                <a href="https://sun9-62.userapi.com/impf/yYbtTqW3uJJtgonfzjBPx8yjWwiYSr_RAaIlfg/28TapmYGSfI.jpg?size=1590x530&quality=95&crop=0,0,1590,530&sign=dddbc3ab45372cd8919feb2ba295ac83&type=cover_group" data-fancybox="group1"><img src="{{ asset($example) }}" alt=""></a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="fd-element">
                                <div class="title-default">Специальности и работы</div>
                                <div class="spec-user-list">
                                    @foreach($item['specialties'] as $spec)
                                        <div class="sul-el">
                                            {{ $spec['title'] }}<br/>
                                            @foreach($spec['jobs'] as $job){{ $job }}, @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="board-reviews">
                        <div class="board-reviews-head">
                            <div class="br-title">
                                Отзывы<span>средняя оценка {{ $item['rating']['average'] }}</span>
                            </div>
                            <div class="reviews-box">
                                <div class="raiting">
                                    <div class="reviews-raiting">
                                        <mark style="width:{{ $item['rating']['rate'] }}%;"></mark>
                                    </div>
                                    <div class="review-likes">
                                        <div class="score likes"><i class="far fa-thumbs-up"></i>{{ $item['rating']['likes'] }}</div>
                                        <div class="score dislikes"><i class="far fa-thumbs-down"></i>{{ $item['rating']['dislikes'] }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="board-reviews-row">
                            @foreach($item['reviews'] as $review)
                                <div class="review-element-item">
                                    <div class="review-head">
                                        <div class="img-wrapper">
                                            <img src="{{ asset($review['user']['photo']) }}" alt="photo">
                                        </div>
                                        <div class="review-author">
                                            <div class="name fw-medium">{{ $review['user']['name'] }}</div>
                                            <div class="author-raiting fw-medium text-secondary d-flex align-items-center">
                                                <div class="sup-title">Отзывы:</div>
                                                <div class="review-likes">
                                                    <div class="score likes"><i class="far fa-thumbs-up"></i>{{ $review['user']['likes'] }}</div>
                                                    <div class="score dislikes"><i class="far fa-thumbs-down"></i>{{  $review['user']['dislikes'] }}</div>
                                                </div>
                                                <div class="author-type ms-2">- заказчик</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-element">
                                        <div class="r-title">Отзыв на задание: "{{ $review['job-title'] }}"</div>
                                        <div class="r-desc">
                                            <p>{{ $review['text'] }}</p>
                                        </div>
                                        <div class="r-raiting">
                                            <div class="reviews-box d-flex align-items-center">
                                                <div class="sup-title me-2">Оценка</div>
                                                <div class="raiting">
                                                    <div class="reviews-raiting small">
                                                        <mark style="width:{{ $review['rate'] }}%;"></mark>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="r-date text-end text-secondary mt-2">
                                        {{ $review['date'] }}
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>



                    <div class="card-webstore sticky-bottom__box">
                        <div class="webstore-group webstore-group--35px variant2-mobile">
                            <!--заменить класс на variant2-->
                            <a href="/" class="btn btn-primary fw-medium">
                                <svg width="24" height="24" class="svg-icon me-2">
                                    <use xlink:href="assets/template/icons/icons.svg#googleplay"></use>
                                </svg>
                                Google Play
                            </a>
                            <a href="/" class="btn btn-primary fw-medium">
                                <svg width="24" height="24" class="svg-icon me-2">
                                    <use xlink:href="assets/template/icons/icons.svg#apple"></use>
                                </svg>
                                AppStore
                            </a>
                            <span class="sup-title">Предложить задание в приложении</span>
                        </div>
                    </div>
                    <div class="sticky-offset"></div>
                </div>
            </div>
            <x-casual-aside></x-casual-aside>
        </div>
    </div>
    @endsection
