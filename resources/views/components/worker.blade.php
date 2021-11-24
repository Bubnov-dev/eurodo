<div class="element spec-board  full-active"><!--РАСКРЫТЫЙ-->
    <a href="/" class="showFull">
        <svg width="9" height="12" class="svg-icon">
            <use xlink:href="{{ asset('icons/icons.svg#full') }}"></use>
        </svg>
    </a>
    <div class="el-head spec-info">
        <div class="img-wrapper">

            @if(isset($item['profile-photo']) && $item['profile-photo'])
                <img src="{{ Config::get("app.api-name") }}{{ $item['profile-photo'] }}" alt="">
            @else
                <img src="{{ asset('images/image1.png') }}" alt="">

            @endif
        </div>
        <div class="name">
            <h3><a href="#">{{ $item['name'] }}</a><i class="fas fa-check text-success"></i></h3>
        </div>
        <div class="tags">
            @foreach($item['sub-specialty'] as $tag) {{ $tag }} @endforeach
        </div>
        <div class="location">
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
        <div class="webstore-group webstore-group--35px">
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
    <div class="spec-full-info">
        <div class="card-full-desc">
            <div class="fd-element">
                <div class="title-default">Цены на похожие задания</div>
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
        </div>
        <div class="card-full-desc additional-desc from-ajax">
            <div class="fd-element">
                <div class="title-default">Примеры работ</div>
                <div class="card-horizontal-gallery">
                    @foreach($item['examples'] as $example)
                        <div class="g-item">
                            <div class="img-wrapper">
                                <img src="{{ asset($example) }}" alt="">
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            @isset($item['last-review']['text'] )
            <div class="fd-element">
                <div class="title-default title-default--feedback">Отзывы</div>
                <div class="desc">
                    <p>{{ $item['last-review']['text'] }}</p>
                </div>
                <div class="reviews-box mt-3">
                    <div class="raiting">
                        <span class="sup-title me-2 text-secondary">Оценка</span>
                        <div class="reviews-raiting small">
                            <mark style="width:{{ $item['last-review']['rate'] }}%;"></mark>
                        </div>
                    </div>
                    <div class="review-button">
                        <a href="/">Все отзывы ({{ $item['reviewsCount'] }})</a>
                    </div>
                </div>
            </div>

            @endisset
        </div>
    </div>
    <div class="card-webstore">
        <div class="webstore-group webstore-group--35px variant2"><!--заменить класс на variant2-->
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
</div>
