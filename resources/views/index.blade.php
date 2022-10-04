@extends('layout.master')
@section('content')
@if (Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@elseif (Session::has('error'))
<div class="alert alert-danger">
    {{Session::get('error')}}
</div>
@endif
<main>
    <div class="top_content">
        <div class="container-fuild">
            <div class="row mt-3">
                <div class="col-xl-3">
                </div>
                <div class="col-xl-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                aria-label="Slide 6"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                                aria-label="Slide 7"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                                aria-label="Slide 8"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('user/assets/img/1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('user/assets/img/2.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('user/assets/img/3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('user/assets/img/3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('user/assets/img/5.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('user/assets/img/6.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('user/assets/img/3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('user/assets/img/4.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="row border">
                        <div class="col-xl-12 col-md-12 product_header--title">
                            <p class="ps-3 mt-3">SALE SẬP SÀN</p>
                        </div>
                        <div class="col-xl-12 col-md-4 product_header d-flex align-items-center">

                            <div class="img w-25 me-2">
                                <img src="{{ asset('user/assets/img/test.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="about w-75">
                                <div class="name">
                                    <span>Google Tivi 4K 43 Inch KD-43X80K</span>
                                </div>
                                <div class="price">
                                    <span>16,390,000</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-4 product_header d-flex align-items-center">
                            <div class="img w-25 me-2">
                                <img src="{{ asset('user/assets/img/test.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="about w-75">
                                <div class="name">
                                    <span>Google Tivi 4K 43 Inch KD-43X80K</span>
                                </div>
                                <div class="price">
                                    <span>16,390,000</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-4 product_header d-flex align-items-center">
                            <div class="img w-25 me-2">
                                <img src="{{ asset('user/assets/img/test.jpg') }}" class="d-block w-100" alt="...">

                            </div>
                            <div class="about w-75">
                                <div class="name">
                                    <span>Google Tivi 4K 43 Inch KD-43X80K</span>
                                </div>
                                <div class="price">
                                    <span>16,390,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ asset('user/assets/img/11.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('user/assets/img/12.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('user/assets/img/13.jpg') }}" class="d-block w-100" alt="...">

                        </div>
                        <div class="col-3">
                            <img src="{{ asset('user/assets/img/14.jpg') }}" class="d-block w-100" alt="...">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2 bg-dark">
                    Không có nội dung
                    <p class=""></p>
                </div>
                <div class=" col-10">
                    <div class="col-12 title">
                        <div class="row">
                            <div class="col-12 mb-3 d-flex vitri pb-4">
                                <div class="title_1">
                                    Tìm kiếm nhiều nhất
                                </div>
                                <div class="vitri2">
                                    <button type="button" class="prev button_custom"><i
                                            class="fa-solid fa-angle-left"></i></button>
                                    <button type="button" class="next button_custom"><i
                                            class="fa-solid fa-angle-right"></i></button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row responsive">
                                    @foreach($products->wherecategory_id(1)->get() as $item)
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            {{$item->name}}
                                        </div>
                                        <div class="product_price px-2">
                                            {{number_format($item->price, 0, '.', '.')}}đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>
                                                    {{number_format($item->price_discount, 0, '.', '.')}}đ</i></del>
                                            <span>(-{{100-($item->price_discount/$item->price*100)}}%)</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2">
                    <p class=""></p>
                </div>
                <div class=" col-10">
                    <div class="col-12 title">
                        <div class="row">
                            <div class="col-12 mb-3 d-flex vitri pb-4">
                                <div class="title_1">
                                    Khuyến mãi tivi hot
                                </div>
                                <div class="vitri2">
                                    <button type="button" class="prev button_custom"><i
                                            class="fa-solid fa-angle-left"></i></button>
                                    <button type="button" class="next button_custom"><i
                                            class="fa-solid fa-angle-right"></i></button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row responsive">
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2">

                    <p class=""></p>
                </div>
                <div class=" col-10">
                    <div class="col-12 title">
                        <div class="row">
                            <div class="col-12 mb-3 d-flex vitri pb-4">
                                <div class="title_1">
                                    điện lạnh hot
                                </div>
                                <div class="vitri2">
                                    <button type="button" class="prev button_custom"><i
                                            class="fa-solid fa-angle-left"></i></button>
                                    <button type="button" class="next button_custom"><i
                                            class="fa-solid fa-angle-right"></i></button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row responsive">
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2">

                    <p class=""></p>
                </div>
                <div class=" col-10">
                    <div class="col-12 title">
                        <div class="row">
                            <div class="col-12 mb-3 d-flex vitri pb-4">
                                <div class="title_1">
                                    điện thoại - laptop
                                </div>
                                <div class="vitri2">
                                    <button type="button" class="prev button_custom"><i
                                            class="fa-solid fa-angle-left"></i></button>
                                    <button type="button" class="next button_custom"><i
                                            class="fa-solid fa-angle-right"></i></button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row responsive">
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>

                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                    <div class="product_item border my-2 mx-3">
                                        <div class="img_product">
                                            <img src="{{ asset('user/assets/img/a1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <img src="{{ asset('user/assets/img/ads.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="product_name pt-4 px-2">
                                            Smart TV supper start
                                        </div>
                                        <div class="product_price px-2">
                                            8,990,000đ
                                        </div>
                                        <div class="price_disc">
                                            <del><i>9,999,000đ</i></del>
                                            <span>(33%)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2">

                    <p class=""></p>
                </div>
                <div class=" col-10">
                    <div class="col-12 title">
                        <div class="row">
                            <div class="col-12 mb-3 d-flex vitri pb-4">
                                <div class="row w-100 d-flex justify-content-between">
                                    <div class="col-6">
                                        <img src="{{ asset('user/assets/img/samsung.png')}}" class="w-100" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('user/assets/img/hangre.jpg')}}" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 chieucao">
                <div class="col-4 d-flex justify-content-start no-pad">
                    <div class="icon">
                        <i class="fa-brands fa-facebook-square"></i>
                    </div>
                    <div class="icon">
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </div>
                <div class="col-8 row d-flex align-items-center">
                    <div class="col-4 title_11">ĐĂNG KÍ NHẬN KHUYẾN MÃI</div>
                    <div class="col-5"><input type="text" placeholder="Tìm" class="w-100 p-2"></div>
                    <div class="col-2"><button type="button" class="btn btn-success">ĐĂNG KÝ</button></div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection