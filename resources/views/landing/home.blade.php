@extends('layouts.landing')
@section('content')
    <section class="banner-section style-two centred"
             style="background-image: url({{asset('landing/images/banner/news2.png')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="text">
                    <h1>Popularity News Prediction <br/>in one Click</h1>
                    <p>Check your popularity by title click</p>
                </div>
                <div class="form-inner">
                    <div class="input-inner clearfix">
                        <div class="form-group">
                            <i class="icon-2"></i>
                            <input type="search" name="title" id="title" placeholder="Input title..." required=""
                                   style="width: 800px; background-color: white">
                        </div>
                        <div class="btn-box">
                            <button id="btn-title"><i class="icon-2"></i>Predict</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- category-section -->
    <section class="category-section alternat-2 centred sec-pad">
        <div class="pattern-layer" style="background-image: url({{asset('landing/images/shape/shape-10.png')}});"></div>
        <div class="auto-container">
            <div class="sec-title result-container">
                <span>Result</span>
                <h2 id="result-title" class="result-text">...</h2>
                <p class="result-description">Result Description</p>
            </div>
            <div class="custom-item-carousel owl-carousel owl-theme dots-style-one owl-nav-none keyword-container">

            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function keywords_appends(text) {
            return '<div class="category-block-one">'+
                '<div class="inner-box">'+
                '<div class="shape">'+
                '<div class="shape-1"'+
                'style="background-image: url({{asset('landing/images/shape/shape-1.png')}});"></div>'+
                '<div class="shape-2"'+
                'style="background-image: url({{asset('landing/images/shape/shape-2.png')}});"></div>'+
                '</div>'+
                '<div class="icon-box"><i class="icon-6"></i></div>'+
                '<h5>'+ text +'</h5>'+
                '</div>'+
                '</div>';
        }

        function draw_result_keywords(result, keyword) {
            let keywords = '';

            if (result === '1') {
                let title_slice = keyword.split(',')

                $.each(title_slice, function (index, val) {
                    keywords += keywords_appends(val);
                });

                $('.keyword-container').html(keywords);

                if ($('.custom-item-carousel').length) {
                    $('.custom-item-carousel').owlCarousel({
                        margin: 30,
                        nav: false,
                    });
                }

                $('.result-text').text('It is Popular')
                $('.result-description').text('Your title is Good Enough! Take a look at some of the available keywords')
            } else {
                $('.result-text').text('Not Popular')
                $('.result-description').text('Your title is not popular, please re-write another title')
            }
        }

        $(function () {
            $('.keyword-container').hide();
            $('.result-container').hide();

            $('#btn-title').on('click', function () {
                $('.keyword-container').hide();
                $('.result-container').hide();
                
                let title = $('#title').val();
                let resultTitle = $('#result-title');

                @if($settings->preferred_methods == 'manual-mlp')
                $.ajax({
                    url: "http://129.150.53.166:5000",
                    type: "post",
                    contentType: 'application/json',
                    data: JSON.stringify({
                        'title': title
                    }),
                    success: function (response) {
                        let serialize = JSON.parse(response);
                        draw_result_keywords(serialize.result, serialize.description.title_clean)
                    }
                });
                @elseif($settings->preferred_methods == 'lib-mlp')
                $.ajax({
                    url: "http://129.150.53.166:5000/mlp-lib",
                    type: "post",
                    contentType: 'application/json',
                    data: JSON.stringify({
                        'title': title
                    }),
                    success: function (response) {
                        let serialize = JSON.parse(response);
                        draw_result_keywords(serialize.result, serialize.description.title_clean)
                    }
                });
                @elseif($settings->preferred_methods == 'random-forest')
                $.ajax({
                    url: "http://129.150.53.166:5000/rf-lib",
                    type: "post",
                    contentType: 'application/json',
                    Accept: 'application/json',
                    dataType: 'json',
                    data: JSON.stringify({
                        'title': title
                    }),
                    success: function (response) {
                        let serialize = JSON.parse(response);
                        draw_result_keywords(serialize.result, serialize.description.title_clean)
                    }
                });
                @endif

                $('.keyword-container').show();
                $('.result-container').show();
            });
        });
    </script>
@endsection
