@extends('layout.master')
@section('content')
<main>
    <div class="container-fuild">
        <div class="row mt-2">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-house-chimney"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Tivi, Âm thanh, Loa</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Tivi</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Smart Tivi</a>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-2 border">
                <div class="row">
                    <div class="locsanpham border">
                        Lọc sản phẩm
                    </div>
                </div>
                <div class="row lienquan">
                    <p class="mt-3">NHÓM LIÊN QUAN</p>
                    <a href="" class="none">Tivi</a>
                    <a href="" class="none">Âm thanh & Phụ kiện Tivi</a>
                </div>
            </div>
            <div class="col-4">
                <div class="fotorama" data-nav="thumbs" data-transition="crossfade" data-allowfullscreen="true"
                    data-fit="cover" data-maxwidth="100%" data-width="100%" data-navwidth="300">
                    <img src="{{ asset('user/assets/img/d1.jpg') }}" class="w-100">
                    <img src="{{ asset('user/assets/img/d2.jpg') }}" class="w-100">
                    <img src="{{ asset('user/assets/img/d3.jpg') }}" class="w-100">
                    <img src="{{ asset('user/assets/img/d4.jpg') }}" class="w-100">
                </div>
            </div>
            <div class="col-6 ps-5">
                <div class="row box-desc">
                    <div class="title_detail">
                        {{$product->name}}
                    </div>
                    <div class="price_detail my-2">
                        {{$product->price}}
                    </div>
                    <div class="disc my-2">
                        <del>{{$product->price_discount}}</del>
                        <span class="per">
                            (-{{100-($product->price_discount/$product->price*100)}}%)
                        </span>
                    </div>
                </div>
                <div class="row">
                    <b>Thương hiệu:</b>
                    <b>Model:</b>
                    <b>Mã SP:</b>
                </div>
                <div class="row">
                    <div class="box">
                        <p>KHUYẾN MÃI</p>
                        <UL>
                            <li>TẶNG PHIẾU MUA HÀNG TRỊ GIÁ 1,000,000Dđ <a href="#">(xem chi tiết)</a></li>
                            <li>Hàng Hè, Giá Tốt - Trả góp 0% - Giảm tới 50% <a href="#">(xem chi tiết)</a></li>
                        </UL>
                    </div>
                </div>
                <div class="row">
                    <b>"có 4 kích thước màn hình. Bạn đang chọn 43"</b>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <div class="box_price">
                            10,490,000đ
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="box_price">
                            10,490,000đ
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="box_price">
                            10,490,000đ
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="box_price">
                            10,490,000đ
                        </div>
                    </div>

                </div>
                <div class="row mt-3">
                    <form id="form-add-to-cart" action=" {{ route('addcart')}} " method="post" class="form-horizontal"
                        id="form-horizontal" role="form">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id}}">
                        <label for="soluong">Số lượng mua</label>
                        <input type="text" placeholder="Nhập số lượng muốn mua" name="soluong" id="soluong"
                            class="form-control w-25">
                        <button class="btn btn-danger mt-2" type="submit">Mua Ngay</button>
                    </form>
                </div>
                {{-- <div class="row mt-3">
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}"
                            class="btn btn-warning btn-block text-center" role="button">Thêm vào giỏ hàng</a> </p>
                </div> --}}

                <div class="row mt-3">
                    <div class="location">
                        <i class="fa-solid fa-location-dot"></i>
                        SIÊU THỊ CÓ HÀNG TRƯNG BÀY
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
    </div>
</main>
<script>
    $(document).on('submit', '#form-add-to-cart', function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

var form = $(this);
var actionUrl = form.attr('action');


$.ajax({
    type: "POST",
    url: actionUrl,
    data: form.serialize(), // serializes the form's elements.
    success: function(response)
    {
    $('.cart-header .sub-total').text(response.subtotal);
    $('.cart-content-header').html(response.cart_content);
    $('.cart-header .menutop').addClass('show');

      setTimeout(() => {
        $('.cart-header .menutop').removeClass('show');
      }, 3000);
    }
});
});
</script>
@endsection