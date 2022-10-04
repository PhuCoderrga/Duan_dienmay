<header>
    <div class="top_header">
        <div class="container-fuild">
            <div class="header-top">
                <div class="dropdown dropdown-top w-10">
                    <button class="buttton-header btn dropdown-toggle" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                        Tài Khoản
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">
                                <i class="fa-solid fa-square-pen"></i>
                                Đăng Kí</a></li>
                        <li><a class="dropdown-item" href="#" class="w-25">
                                <i class="fa-solid fa-user " class="w-25"></i>
                                Đăng Nhập</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="body_header">
        <div class="container-fuild ">
            <div class="hearder-body">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="row w-100">
                            <div class="col-2">
                                <a class="navbar-brand" href="{{ route('user.home')}}">
                                    <img src="{{ asset('user/assets/img/logo.png')}}" alt="">
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                            <div class="col-10 no-mar no-pad">
                                <div class="row w-100 collapse navbar-collapse" id="navbarSupportedContent">
                                    <div class="col-7 bg-white rounded no-mar no-pad">
                                        <form class="d-flex justify-content-start">
                                            <div class="dropdown">
                                                <a class="btn btn-light dropdown-toggle" href="#" role="button"
                                                    id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Toàn bộ nhóm
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li><a class="dropdown-item" href="#">Toàn bộ nhóm</a></li>
                                                    <li><a class="dropdown-item" href="#">Thiết bị văn phòng</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Điện thoại, Máy Tính
                                                            bảng</a></li>
                                                </ul>
                                            </div>


                                            <div class="livesearch w-100">
                                                <input class="form-control me-2" type="search" id="search" name="search"
                                                    placeholder="Tìm..." aria-label="Search">

                                            </div>

                                            <button class=" btn btn-outline-success_CSS w-25" type="submit">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-5 no-mar no-pad">
                                        <ul class="navbar-nav mb-lg-0 nav-left">
                                            <li class="nav-item nav-amount mx-2">
                                                <a class="nav-link nav-icon d-flex" href="#">
                                                    <i class="fa-solid fa-rotate"></i>
                                                </a>
                                                <div class="amount d-flex justify-content-center">
                                                    0
                                                </div>
                                            </li>
                                            <li class="nav-item nav-amount mx-2">
                                                <a class="nav-link nav-icon d-flex" href="#">
                                                    <i class="fa-solid fa-heart"></i>
                                                </a>
                                                <div class="amount d-flex justify-content-center">
                                                    0
                                                </div>
                                            </li>
                                            <li class="nav-item nav-amount mx-2">
                                                <a class="nav-link nav-icon d-flex" href="#">
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                                <div class="amount d-flex justify-content-center">
                                                    0
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown cha cart-header">
                                                <a class="nav-link dropdown-toggle w-color" href="#" id="navbarDropdown"
                                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    GIỎ HÀNG ({{ count( Cart::content() ) }})

                                                </a>
                                                <ul class="dropdown-menu menutop con" aria-labelledby="navbarDropdown">
                                                    <div class="cart-content-header">
                                                        @foreach(Cart::content() as $item)
                                                        <li>
                                                            {{$item->name}}-{{$item->qty}}-{{$item->qty * $item->price}}
                                                        </li>
                                                        @endforeach
                                                    </div>

                                                    <hr class="dropdown-divider">
                                                    <div class="row total-header-section ">

                                                        <div class="col-lg-12 col-sm-12col-12 total-section ps-2">
                                                            <p class="sub-total">Tổng Tiền: <span class="text-info">
                                                                </span></p>
                                                        </div>
                                                    </div>

                                                    <li><a class="dropdown-item" href="{{ route('cart.index')}}">Chi
                                                            tiết</a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="bottom_header">
        <div class="container-fuild ">
            <div class="hearder-body">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="row w-100">
                            <div class="col-3">
                                <div class="navbar-brand nabar-yellow rounded w-100" href="#">
                                    <div class="dropdown d-flex">
                                        <a class="btn dropdown-toggle text-upper border-0 w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-bars"></i>
                                            SẢN PHẨM
                                        </a>
                                        <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item " href="{{ route('category.index')}}">Tivi,
                                                    Loa, Âm
                                                    Thanh</a></li>
                                            <li><a class="dropdown-item" href="#">Tủ Lạnh, Tủ Đông, Tủ Mát</a></li>
                                            <li><a class="dropdown-item" href="#">Máy Giặt, Sấy Quần Áo</a></li>
                                            <li><a class="dropdown-item" href="#">Máy Giặt, Sấy Quần Áo</a></li>
                                            <li><a class="dropdown-item" href="#">Máy Giặt, Sấy Quần Áo</a></li>
                                            <li><a class="dropdown-item" href="#">Máy Giặt, Sấy Quần Áo</a></li>
                                            <li><a class="dropdown-item" href="#">Máy Giặt, Sấy Quần Áo</a></li>
                                            <li><a class="dropdown-item" href="#">Máy Giặt, Sấy Quần Áo</a></li>
                                            <li><a class="dropdown-item" href="#">Máy Giặt, Sấy Quần Áo</a></li>
                                            <li><a class="dropdown-item" href="#">Máy Giặt, Sấy Quần Áo</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                            <div class="col-9">
                                <div class="row w-100 collapse navbar-collapse no-mar no-pad"
                                    id="navbarSupportedContent">
                                    <div class="col-sm-7   d-flex pt-2">
                                        <div class="dropdown">
                                            <a class="btn dropdown-toggle text-upper border-0 cl" href="#" role="button"
                                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                SẢN PHẨM HOT
                                            </a>
                                            <a class="navbar-brand text-upper cl" href="#">GÓC TƯ VẤN</a>
                                            <a class="navbar-brand text-upper cl" href="#">TUYỂN DỤNG</a>
                                            <a class="navbar-brand text-upper cl" href="#">TÌM SIÊU THỊ</a>
                                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="#">Tivi, Loa, Âm Thanh</a></li>
                                                <li><a class="dropdown-item" href="#">Tủ Lạnh, Tủ Đông, Tủ Mát</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Máy Giặt, Sấy Quần Áo</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="col-sm-5 no-mar no-pad nav-left">
                                        <ul class="navbar-nav mb-lg-0 ps-5 font-14 no-mar no-pad">
                                            <li class="nav-item no-mar pe-3 w-color">
                                                <i class="fa-solid fa-lock"></i>
                                                Đăng nhập
                                            </li>
                                            <li class="nav-item no-mar pe-3 w-color">
                                                <i class="fa-solid fa-square-pen"></i>
                                                Đăng kí
                                            </li>
                                            <li class="nav-item no-mar w-color">
                                                <i class="fa-solid fa-square-phone"></i>
                                                Hotline 18001788
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                </nav>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('#search').on('keyup',function()
        {
            $value=$(this).val();
            $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data:{'search':$value},
            success:function(data){
            $('.result').html(data);
            $('.result').css('display', 'block');
            }

            });
        })
    </script>
    <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>

    <script type="text/javascript">
        $('html').on('click',function(){
            $('.result').css('display', 'none');
        })
    </script>


</header>