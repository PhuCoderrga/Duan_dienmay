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
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
            <div class="container">
                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:50%">Mô Tả</th>
                            <th style="width:10%">Giá</th>
                            <th style="width:8%">Số Lượng</th>
                            <th style="width:22%" class="text-center">Tổng Tiền</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart->content() as $value)
                        <tr data-id="{{$value->rowId}}">
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-2"><img src="{{ asset('user/assets/img/test.jpg')}}" alt="..."
                                            class="w-100" /></div>
                                    <div class="col-sm-10">
                                        <h4 class="nomargin">{{$value->name}}</h4>
                                        <p>
                                            Hàng Hè, Giá Tốt - Trả góp 0% - Giảm tới 50%
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">{{$value->price}}</td>
                            <td data-th="Quantity">
                                <input data-rowId="{{$value->rowId}}" type="number"
                                    class="form-control text-center quantity" value="{{$value->qty}}">
                            </td>
                            <td data-th="Subtotal" class="text-center row-total">{{$value->qty * $value->price}}</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                                <form action="" method="POST">
                                    <button class="btn btn-danger btn-sm delete_cart" id="delete_cart"
                                        data-url="{{route('deletecart')}}" role="button">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="visible-xs">
                            <td class="text-center">
                                <strong class="sub-total">
                                    {{ $cart->subtotal}}đ
                                </strong>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i>Mua Hàng</a></td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td class="hidden-xs text-center">
                                <strong class="total">
                                    {{$cart->total}}đ
                                </strong>
                            </td>
                            <td><a href="{{route('checkout.user')}}" class="btn btn-success btn-block">Thanh Toán <i
                                        class="fa fa-angle-right"></i></a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</main>
<script>
    $(document).on('change', '.quantity', function(e) {
        element = $(this);
        $.ajax({
                url: '{{route("update.cart")}}',
                method: "post",
                data: {
                    id: $(this).parents("tr").data('id'), 
                    quantity: $(this).parents("tr").find(".quantity").val()
                },
                success: function (response) {
                    element.parents("tr").find(".row-total").text(response.row_total);
                    $('.sub-total').text(response.subtotal);
                    $('.total').text(response.total);
                }
            });
    });

</script>

@endsection
@section('scripts')

<script type="text/javascript">
    $(".quantity").change(function (e) {
            e.preventDefault();
    
            var ele = $(this);
    
            $.ajax({
                url: '',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id"), 
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                    ele.parents("tr").find(".subtotal").response.subtotal;
                }
            });
        });
        $(".delete_cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
    
            if(confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: $(this).data('url'),
                    method: "post",
                    data: {
                        id: $(this).parents("tr").data('id'), 
                    },
                    success: function (response) {
                        ele.parents("tr").remove();
                        $('.sub-total').text(response.subtotal);
                    $('.total').text(response.total);
                    }
                });
            }
        });  
</script>
@endsection