@extends('layout.master')
@section('content')
<main>
    <div class="container-fuild">
        <div class="row">
            <div class="col-10">
                <div class="row">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-house-chimney"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Tivi, Âm thanh, Loa</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <select class="form-select chieudai me-3" aria-label="Default select example">
                        <option selected>Sản phẩm mới</option>
                        <option value="1">Giá tăng dần</option>
                        <option value="2">Giá giảm dần</option>
                        <option value="3">Sản phẩm khuyến mãi
                        </option>
                    </select>
                    <select class="form-select chieudai" aria-label="Default select example">
                        <option selected>25/Trang</option>
                        <option value="1">50/Trang</option>
                        <option value="2">70/Trang</option>
                        <option value="3">100/Trang</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-12 title-product_border ">
                        <div class="title-category">
                            có 539 tivi, âm thanh
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($products->get() as $item)
                    <div class="col-3">
                        <div class="product_card">
                            <div class="img_product">
                                <a href="{{ route('detail.index', ['slug' => $item->slug]) }}">
                                    <img src="{{ asset('user/assets/img/product.jpg')}}" class="w-100" alt=""></a>
                            </div>
                            <div class="ads_product">
                                <i class="fa-solid fa-gift "></i>
                                <span>Tặng 1</span>
                            </div>
                            <div class="title_product">
                                {{$item->name}}
                            </div>
                            <div class="price_product">
                                {{number_format($item->price, 0, '.', '.')}}đ
                            </div>
                            <div class="disc">
                                <del>{{$item->price_discount}}</del>
                                <span class="per">
                                    (-{{100-($item->price_discount/$item->price*100)}}%)
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
            <div class="col-2 mt-5 border">
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
                <div class="row">
                    <p class="mt-3">HÃNG/THƯƠNG HIỆU</p>
                    <div class="mx">
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Toàn bộ
                            </label>

                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                SAMSUNG (219)
                            </label>

                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                SONY (121)
                            </label>

                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                LG (106)
                            </label>

                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                TCL (49)
                            </label>

                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                SHARP (7)
                            </label>

                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Panasonic (6)
                            </label>

                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Definitive (6)
                            </label>

                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yamaha (6)
                            </label>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection