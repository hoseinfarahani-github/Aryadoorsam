    @section('css')
    <link rel="stylesheet" href="/assets/css/Address.css" />
    @endsection
@section('content')

    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- tracking section start -->
        <div class="page-body">
            <!-- tracking table start -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="title-header title-header-block package-card">
                                    <div>
                                        <h5>سفارش #{{$order->id}}</h5>
                                    </div>
                                    <div class="card-order-section">
                                        <ul>
                                            <li> تاریخ سفارش {{$order->created_at->format('Y/m/d')}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bg-inner cart-section order-details-table">
                                    <div class="row g-4">
                                        <div class="col-xl-8">
                                            <div class="table-responsive table-details">
                                                <table class="table cart-table table-borderless">
                                                    <thead>
                                                    <tr>
                                                        <th colspan="2">محصولات</th>
                                                        <th colspan="2"></th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>
                                                    @foreach($order_details as $od)
                                                        <tr class="table-order">
                                                            <td>
                                                                <a href="javascript:void(0)">
                                                                    <img src="{{str_replace('public','/storage',$od->product->gallery->first()->path)}}"
                                                                         class="img-fluid blur-up lazyload" alt="">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <p>{{$od->product->title}}</p>
                                                            </td>
                                                            <td>
                                                                <p style="text-align: center !important;">{{$od->amount}} عدد </p>
                                                                <h5 style="text-align: center !important;">{{$od->height}}cm * {{$od->width}}cm</h5>
                                                            </td>
                                                            <td>
                                                                <ul class="product-info-list product-info-list-2" style="font-size: 75% !important;">
                                                                    @foreach(json_decode($od->attribute_detail) as $key=>$value)
                                                                        <li>{{__('attribute.'.$key)}} : <a href="javascript:void(0)">
                                                                             <span style="color: #0a7e68; font-weight: bold !important;">
                                                                                 {{__('attribute.'.$value)}}
                                                                             </span>
                                                                            </a></li>
                                                                    @endforeach

                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                    </tbody>


                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="order-success">
                                                <div class="row g-4">
                                                    <h4>جزئیات سفارش</h4>
                                                    <ul class="order-details">
                                                        <li>شماره سفارش: {{$order->id}}</li>
                                                        <li>تاریخ سفارش: {{$order->created_at}}</li>
                                                    </ul>

                                                    <h4>مشخصات مشتری</h4>
                                                    <ul class="order-details">
                                                        <li>نام مشتری: {{$order->client->name()}}</li>
                                                        <?php
                                                            $address= json_decode($order->address);
                                                        ?>


                                                        <li>استان: {{$address->province}}</li>
                                                        <li>شهر: {{$address->county}}</li>
                                                        <li>{{$address->detail}}</li>
                                                        <li>شماره تماس:
                                                        <a href="tel:{{$address->phone}}" style="direction: ltr">{{$address->phone}}</a>
                                                        </li>
                                                        <li>کد پستی: {{$address->postalCode}}</li>
                                                    </ul>

                                                </div>
                                            </div>
                                            @if($order->status == 'sent-order-agent' || $order->status == 'pending-order-CEO')
                                                <div class="order-success m-t-10">
                                                    <div class="row g-4">
                                                        <h4>تایید سفارش</h4>
                                                        <div class="col-xxl-6">
                                                            <a class="btn text-white theme-bg-color" data-bs-toggle="modal" data-bs-target="#approvedOrder"
                                                               href="javascript:void(0)">
                                                                تایید سفارش</a>
                                                        </div>
                                                        <div class="col-xxl-6">
                                                            <a class="btn text-white" data-bs-toggle="modal" data-bs-target="#rejectOrder"
                                                               href="javascript:void(0)" style="background-color: #880000 !important;">
                                                                رد سفارش</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="order-success m-t-10">
                                                    <div class="row g-4">
                                                        <h4>وضعیت سفارش</h4>
                                                        <div class="col-xxl-12">
                                                            <a class="btn text-white @if($order->status!= 'reject-order-CEO' ) theme-bg-color @endif"  @if($order->status== 'reject-order-CEO' ) style="background-color: #880000 !important;" @endif >
                                                               {{__('status.'.$order->status)}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>


                                    </div>
                                </div>
                                <!-- section end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tracking table end -->
            <ol class="progtrckr">
                <li class="@if($order->status == 'create-order-step-1' || $order->status == 'create-order-step-2' || $order->status == 'create-order-step-3')progtrckr-todo @else progtrckr-done  @endif">
                    <h5>نماینده</h5>
                    <h6>@if($order->status == 'create-order-step-1' || $order->status == 'create-order-step-2' || $order->status == 'create-order-step-3') در حال انجام @else انجام شده  @endif</h6>
                </li>

                <li class="@if($order->status == 'reject-order-CEO') progtrckr-cancel @elseif($order->status == 'pending-order-CEO' || $order->status == 'create-order-step-1' || $order->status == 'create-order-step-2' || $order->status == 'create-order-step-3' || $order->status == 'sent-order-agent') progtrckr-todo @else progtrckr-done   @endif">
                    <h5>مدیریت</h5>
                    <h6>
                        @if($order->status == 'reject-order-CEO')رد شده
                        @elseif($order->status == 'create-order-step-1' || $order->status == 'create-order-step-2' || $order->status == 'create-order-step-3') انجام نشده @elseif($order->status == 'sent-order-agent' || $order->status == 'pending-order-CEO') انجام نشده   @else انجام شده   @endif
                    </h6>
                </li>

                <li class="@if($order->status == 'pending-order-factory' || $order->status == 'bending-order-factory' || $order->status == 'welding-order-factory' || $order->status == 'coloring-order-factory' || $order->status == 'packing-order-factory' || $order->status == 'sent-order-factory') progtrckr-done @else progtrckr-todo  @endif">
                    <h5>تایید کارخانه</h5>
                    <h6>@if($order->status == 'pending-order-factory' || $order->status == 'bending-order-factory' || $order->status == 'welding-order-factory' || $order->status == 'coloring-order-factory' || $order->status == 'packing-order-factory' || $order->status == 'sent-order-factory') انجام شده @else انجام نشده  @endif</h6>
                </li>

                <li class="@if($order->status == 'welding-order-factory' || $order->status == 'coloring-order-factory' || $order->status == 'packing-order-factory' || $order->status == 'sent-order-factory') progtrckr-done @else progtrckr-todo  @endif">
                    <h5>خم کاری</h5>
                    <h6>@if($order->status == 'welding-order-factory' || $order->status == 'coloring-order-factory' || $order->status == 'packing-order-factory' || $order->status == 'sent-order-factory') انجام شده @else انجام نشده  @endif</h6>
                </li>

                <li class="@if($order->status == 'coloring-order-factory' || $order->status == 'packing-order-factory' || $order->status == 'sent-order-factory') progtrckr-done @else progtrckr-todo  @endif">
                    <h5>جوش کاری</h5>
                    <h6>@if($order->status == 'coloring-order-factory' || $order->status == 'packing-order-factory' || $order->status == 'sent-order-factory') انجام شده @else انجام نشده  @endif</h6>
                </li>

                <li class="@if($order->status == 'packing-order-factory' || $order->status == 'sent-order-factory') progtrckr-done @else progtrckr-todo  @endif">
                    <h5>رنگ آمیزی</h5>
                    <h6>@if($order->status == 'packing-order-factory' || $order->status == 'sent-order-factory') انجام شده @else انجام نشده  @endif</h6>
                </li>
                <li class="@if($order->status == 'sent-order-factory') progtrckr-done @else progtrckr-todo  @endif">
                    <h5>بسته بندی</h5>
                    <h6>@if($order->status == 'sent-order-factory') انجام شده @else انجام نشده  @endif</h6>
                </li>
                <li class="@if($order->status == 'sent-order-factory') progtrckr-done @else progtrckr-todo  @endif">
                    <h5>ارسال</h5>
                    <h6>@if($order->status == 'sent-order-factory') انجام شده @else انجام نشده  @endif</h6>
                </li>
            </ol>
        </div>
        <!-- tracking section End -->
    </div>

    @if($order->status == 'sent-order-agent' || $order->status == 'pending-order-CEO')
        <!-- Modal Start -->
        <div class="modal fade" id="rejectOrder" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5 class="modal-title" id="staticBackdropLabel">رد سفارش</h5>
                        <p>آیا از رد سفارش مطمئن هستید؟</p>

                        <form method="POST" action="{{ route('manager.order.reject',$order) }}">
                            @csrf
                            <div class="mb-4 row">
                                <div class="col-sm-12">
                                    <label for="note_order">توضیحات خود را برای نماینده این سفارش بنویسید</label>
                                    <textarea class="form-control" id="note_order" name="note_order" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="button-box">

                                <button type="button" class="btn btn--no" data-bs-dismiss="modal">خیر</button>
                                <button type="submit" class="btn  btn--yes btn-primary">بله</button>
                            </div>
                        </form>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->

        <!-- Modal Start -->
        <div class="modal fade" id="approvedOrder" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5 class="modal-title" id="staticBackdropLabel">تایید سفارش</h5>
                        <p>آیا از پذیرش سفارش مطمئن هستید؟</p>

                        <form method="POST" action="{{ route('manager.order.approved',$order) }}">
                            @csrf
                            <div class="mb-4 row">
                                <div class="col-sm-12">
                                    <label for="note_order">توضیحات خود را برای نماینده این سفارش بنویسید</label>
                                    <textarea class="form-control" id="note_order" name="note_order" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="button-box">

                                <button type="button" class="btn btn--no" data-bs-dismiss="modal">خیر</button>
                                <button type="submit" class="btn  btn--yes btn-primary">بله</button>
                            </div>
                        </form>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
    @endif

    <!-- Page Body End-->
@endsection
    @section('js')
        <script src="/assets/js/Address.js"></script>
                <script src="/agent/assets/js/order.js"></script>
    @endsection

@component('Manager.Layout.layout')
    @slot('breadcrump')
        <div class="-intro-x breadcrumb ml-auto hidden sm:flex">
            <a  class="" >صفحه اصلی</a>
        </div>
    @endslot
@endcomponent