@extends('layouts.landing')
@section('content')
<section class="banner-section style-two centred" style="background-image: url({{asset('landing/images/banner/banner-2.jpg')}});">
    <div class="auto-container">
        <div class="content-box">
            <div class="text">
                <h1>Popularity News Prediction <br />in one Click</h1>
                <p>Check your popularity by title click</p>
            </div>
            <div class="form-inner" >
                <form action="index.html" method="post" >
                    <div class="input-inner clearfix">
                        <div class="form-group">
                            <i class="icon-2"></i>
                            <input type="search" name="title" placeholder="Input title..." required="" style="width: 800px; background-color: white">
                        </div>
                        <div class="btn-box">
                            <button type="submit"><i class="icon-2"></i>Predict</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->


<!-- category-section -->
<section class="category-section alternat-2 centred sec-pad">
    <div class="pattern-layer" style="background-image: url({{asset('landing/images/shape/shape-10.png')}});"></div>
    <div class="auto-container">
        <div class="sec-title">
            <span>Result</span>
            <h2>It's Popular</h2>
            <p>Your title is Good Enough! Take a look at some of the available keywords</p>
        </div>
        <div class="five-item-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
            <div class="category-block-one">
                <div class="inner-box">
                    <div class="shape">
                        <div class="shape-1" style="background-image: url({{asset('landing/images/shape/shape-1.png')}});"></div>
                        <div class="shape-2" style="background-image: url({{asset('landing/images/shape/shape-2.png')}});"></div>
                    </div>
                    <div class="icon-box"><i class="icon-6"></i></div>
                    <h5>Property</h5>
                    <span>52</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection