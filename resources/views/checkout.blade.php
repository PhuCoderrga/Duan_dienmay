@extends('layout.master')
@section('content')
<link rel="stylesheet" href="{{ asset('user/assets/css/checkout.css') }}">
<main>

  <h2 class="my-3">Thanh toán</h2>
  <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="{{route('order.index')}}" method="post" enctype="multipart/form">
          @csrf
          <div class="row">
            <div class="col-50">
              <h3>Địa Chỉ Thanh Toán</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" id="fname" name="name" placeholder="Họ Và Tên">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="Vd: john@example.com">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" placeholder="156/9 Trần Bá Giao Gò Vấp">
              <div class="form-group">
                <label for="province">Tỉnh/Thành phố</label>
                <select name="province_id" id="province" placeholder="" required class="form-control">
                  <option value="">Chọn tỉnh thành</option>
                  @foreach($provinces as $province)
                  <option value="{{$province->matinhthanh}}">{{$province->tentinhthanh}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="district">Quận/Huyện</label>
                <select name="district_id" id="district" placeholder="" required class="form-control">
                  <option value="">Chọn Quận huyện</option>
                </select>
              </div>
              <div class="form-group">
                <label for="ward">Phường/xã</label>
                <select name="ward_id" id="ward" placeholder="" required class="form-control">
                  <option value="">Chọn Phường xã</option>
                </select>
              </div>
            </div>
            <div class="col-50">
              <h3>Thanh Toán</h3>
              <label for="fname">Chấp Nhận Thanh Toán</label>
              <div class="icon-container">
                <i class="fa-brands fa-cc-visa" style="color:navy;"></i>
                <i class="fa-brands fa-cc-amex" style="color:blue;"></i>
                <i class="fa-brands fa-cc-mastercard" style="color:red;"></i>
                <i class="fa-brands fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Tên Ngân Hàng</label>
              <input type="text" id="loaithe" name="loaithe" placeholder="Tên Ngân hàng">
              <label for="ccnum">Số Thẻ</label>
              <input type="text" id="mathe" name="mathe" placeholder="1111-2222-3333-4444">
              <label for="cvv">CCCD/CMND</label>
              <input type="text" id="cccd" name="cccd" placeholder="000100455">
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Năm Hết Hạn</label>
                  <input type="date" id="expyear" name="expyear" min="1998" value="2018">
                </div>
              </div>
            </div>
          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </label>
          <input type="submit" value="Thanh Toán Ngay" class="btn1">
        </form>
      </div>
    </div>
    <div class="col-25">
      <div class="container">
        <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i>
            <b>({{$cart->count()}})</b></span></h4>
        @php $total = 0 @endphp
        @foreach($cart->content() as $value)
        <p>
          <a href="#">{{$value->name}}
            <span>
              (slg: {{$value->qty}})
            </span>
          </a>
          <span class="price">
            {{number_format($value->qty * $value->price, 0, '.', '.')}}đ
          </span>
        </p>
        <hr>
        </p>
        @endforeach
        <p>Tổng Tiền
          <span class="price" style="color:black">
            <b>
              {{$cart->total}}đ
            </b>
          </span>
        </p>
      </div>
    </div>
  </div>
</main>
<script>
  $(document).on('change', 'select[name="province_id"]', function(e) {
        element = $(this);
        if(element.val() == "") {
          $('select[name="district_id"]').empty();
        }else{
            $.ajax({
                url: '{{route("checkout.getDistrict")}}',
                method: "get",
                data: {
                   'province_id': $(this).val()
                },
                success: function (response) {
                    console.log(response);
                    $.each(response.data, function( index, value ) {
                      $('select[name="district_id"]').append('<option value="' + value.maquanhuyen + '">' + value.tenquanhuyen + '</option>');
                    });
                }
            });
        } 
    });
</script>
<script>
  $(document).on('change', 'select[name="district_id"]', function(e) {
        element = $(this);
        if(element.val() == "") {
          $('select[name="ward_id"]').empty();
        }else{
          $.ajax({
                url: '{{route("checkout.getWard")}}',
                method: "get",
                data: {
                   'district_id': $(this).val()
                },
                success: function (response) {
                    console.log(response);
                    $.each(response.data, function( index, value ) {
                      $('select[name="ward_id"]').append('<option value="' + value.maphuongxa + '">' + value.tenphuongxa + '</option>');
                    });
                }
            });
        } 
    });
</script>
@endsection