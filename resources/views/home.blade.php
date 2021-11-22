@extends('base')
@section('content')
<main>
    <div class="main-home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-11">
                    <div class="main-home_container">
                         <x-big-search></x-big-search>

                        <div class="specialty">
                            <h2 class="mh-title">Поиск заказов по специальности</h2>
                            <div class="specialty-row">
                                <div class="row gy-4">
                                    @foreach($spec as $item)
                                      <div class="col-lg-2 col-sm-4 col-6 d-flex">
                                        <a href="#" class="element text-center">
                                            <div class="img-wrapper">
                                                <img src="{{ asset('/images/cat.png') }}" alt="">
                                            </div>
                                            <div class="title">{{ $item['title'] }}</div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="section-categories">
                            <h2 class="mh-title">Поиск работы по категориям</h2>
                            <div class="section-categories_row">
                                <div class="row gy-5" data-masonry='{"percentPosition": true }'>
                                    @foreach($jobTypes as $item)

                                        <div class="col-md-4">
                                            <div class="element">
                                                <h3>{{ $item['title'] }}</h3>
                                                <ul>
                                                    @foreach($item['jobs'] as $job)
                                                        <li><a href="/">{{ $job['jobTitle'] }}</a></li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>

@endsection
