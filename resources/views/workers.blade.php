@extends('base')
@section('content')
    <main>
        <div class="main-wrapper">
            <div class="container">

                <x-small-search></x-small-search>

                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="specialists-list">
                                @foreach($workers as $item)
                                    <x-worker :item="$item"></x-worker>
                                @endforeach
                            </div>

                            <div class="btn-more">
                                <a href="" class="btn btn-primary btn-large"><i class="fas fa-arrow-down icon-left"></i>Загрузить ещё мастеров</a>
                            </div>
                            <div class="seo-content">
                                <h2>Поиск сантехника в Мадриде</h2>
                                <p>Описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание задания описание</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <x-aside></x-aside>
                        </div>
                </div>

            </div>
        </div>
    </main>
@endsection
