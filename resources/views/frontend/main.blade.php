@extends('ws-app')

@section('content')

@if(isset($about) AND count($about) !== 0 AND $categories_data['about']->active == 1)
    <!-- .aboutUs-main -->
    <div class="aboutUs-main">

        <div class="container">

            <span class="verticalText">{{ $categories_data['about']->getTranslate('title') ? $categories_data['about']->getTranslate('title') : '' }}</span>
            <span class="fonText">{{ $categories_data['about']->getTranslate('title') }}</span>

            <div class="container__row">

                <div class="container__col">

                    <div class="presenBox">
                        {!! $about[0]->getTranslate('title') !!}
                        {!! $about[0]->getTranslate('short_description') !!}
                        <a class="button" href="/{{ App::getLocale() }}/about">{{ trans('base.detale') }}</a>
                    </div>

                </div>

                <div class="container__col">

                    <ul class="aboutUs-main__photo">
                        <li><a href="javascript:void(0)"><img src="{{ $about[0]->getAttributeTranslate('Картинка на головній №1') ?  $about[0]->getAttributeTranslate('Картинка на головній №1') : 'pictures/aboutUs-main/img-1.jpg' }}" alt="img 1" /></a></li>
                        <li><a href="javascript:void(0)"><img src="{{ $about[0]->getAttributeTranslate('Картинка на головній №2') ?  $about[0]->getAttributeTranslate('Картинка на головній №2') : 'pictures/aboutUs-main/img-2.jpg' }}" alt="img 2" /></a></li>
                        <li><a href="javascript:void(0)"><img src="{{ $about[0]->getAttributeTranslate('Картинка на головній №3') ?  $about[0]->getAttributeTranslate('Картинка на головній №3') : 'pictures/aboutUs-main/img-3.jpg' }}" alt="img 3" /></a></li>
                    </ul>

                </div>

            </div>

        </div>

    </div>
    <!-- END .aboutUs-main -->
@endif


@if(isset($advantages) AND count($advantages) !== 0 AND $categories_data['advantages']->active == 1)
    <!-- .inform -->
    <div class="inform">

        <div class="container">

            <span class="verticalText">{{ $categories_data['advantages']->getTranslate('title') ? $categories_data['advantages']->getTranslate('title') : '' }}</span>

            <div class="container__row">

                @foreach($advantages as $advantage)

                    <div class="container__col">

                    <div class="inform__box">
                        <div class="inform__icon inform__icon--people"></div>
                        <h3> {{ $advantage->getTranslate('title') }}</h3>
                        {!! $advantage->getTranslate('short_description') !!}
                    </div>

                </div>

                @endforeach


            </div>

        </div>

        <div class="informSlider">
            <div class="informSlider__box">
                <div class="inform__box">
                    <div class="inform__icon inform__icon--people"></div>
                    <h3>ІННОВАЦІЇ</h3>
                    <p>Компанія GLOBAL TOBACO широко визнана в усьому світі як інноваційний лідер своєї галузі.</p>
                </div>
            </div>
            <div class="informSlider__box">
                <div class="inform__box">
                    <div class="inform__icon inform__icon--people"></div>
                    <h3>ІННОВАЦІЇ</h3>
                    <p>Компанія GLOBAL TOBACO широко визнана в усьому світі як інноваційний лідер своєї галузі.</p>
                </div>
            </div>
            <div class="informSlider__box">
                <div class="inform__box">
                    <div class="inform__icon inform__icon--people"></div>
                    <h3>ІННОВАЦІЇ</h3>
                    <p>Компанія GLOBAL TOBACO широко визнана в усьому світі як інноваційний лідер своєї галузі.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- END .inform -->
@endif



<!-- .production-main -->
<div class="production-main">

    <div class="container">

        <span class="verticalText">ПРОДУКЦІЯ</span>
        <span class="fonText">ПРОДУКЦІЯ</span>

        <div class="container__row">

            <div class="container__col">

                <div class="prodBox">
                    <div class="prodBox__substrate"><img src="pictures/substrate/img-1.jpg" alt="img" /></div>
                    <h3>GLOBAL TOBACCO</h3>
                    <h4>INTERNATIONAL</h4>
                    <img src="pictures/production/img-1.png" alt="img" />
                    <p>Український виробник тютюнових виробів. Компанія започаткована у 2007 році на базі Монастириської тютюнової фабрики.</p>
                </div>

            </div>

            <div class="container__col">

                <div class="prodBox">
                    <div class="prodBox__substrate"><img src="pictures/substrate/img-2.jpg" alt="img" /></div>
                    <h3>GLOBAL TOBACCO</h3>
                    <h4>INTERNATIONAL</h4>
                    <img src="pictures/production/img-1.png" alt="img" />
                    <p>Український виробник тютюнових виробів. Компанія започаткована у 2007 році на базі Монастириської тютюнової фабрики.</p>
                </div>

            </div>

        </div>

    </div>

</div>
<!-- END .production-main -->




<!-- .partners-main -->
<div class="partners-main">

    <div class="inclined inclined--top inclined--colorBeige"></div>
    <div class="inclined inclined--bottom inclined--colorWhite"></div>

    <div class="container">

        <span class="verticalText verticalText--white">ПАРТНЕРАМ</span>

        <div class="presenBox presenBox--white">
            <h2>GLOBAL TOBACCO</h2>
            <h3>INTERNATIONAL</h3>
            <p>Український виробник тютюнових виробів. Компанія започаткована у 2007 році на базі Монастириської тютюнової фабрики. </p>
            <a class="button" href="javascript:void(0)">Детальніше</a>
        </div>

    </div>

</div>
<!-- END .partners-main -->




<!-- .disposition -->
<div class="disposition disposition--weAreOpen">

    <div class="container">

        <span class="verticalText">МИ ВІДКРИТІ</span>

        <div class="container__row">

            <div class="container__col">

                <div class="presenBox">
                    <h2>GLOBAL TOBACCO</h2>
                    <h3>INTERNATIONAL</h3>
                    <p>Український виробник тютюнових виробів. Компанія започаткована у 2007 році на базі Монастириської тютюнової фабрики.</p>
                </div>

            </div>

            <div class="container__col">

                <div class="disposition__map"></div>

            </div>

        </div>

    </div>

</div>
<!-- END .disposition -->

@endsection