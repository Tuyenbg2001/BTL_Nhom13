@extends('layout')
@section('content')
<div class="wrap-slider slick-slider">
    @foreach($slider as $key => $slide)
    <div class="col-xs-12">
        <img src="{{url('public/uploads/slider/'.$slide->slider_image)}}" width="100%" alt="{{$slide->slide_name}}">
    </div>
    @endforeach
</div>
<div class="wrap-categories">
    @foreach($category as $key => $cate)
    <div class="row">
        <div class="text-center mb-3">
            <a class="title-content" href="{{URL('/danh-muc-san-pham/'.$cate->category_id)}}">
                <img src="{{URL('public/client/img/dot-title-left.png')}}" alt=""> {{$cate->category_name}} <img src="{{URL('public/client/img/dot-title-right.png')}}" alt="">
            </a>
            <h5 class="font-linotteBold">{{$cate->category_desc}}</h5>
        </div>
        <div class="wrap-products slick-product">
            @foreach($list_product as $key => $product)
            <div class="col-xs-12 col-sm-6 col-md-3 list-product">
                <div class="box-product">
                    <!-- <form> -->
                        @csrf
                        <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                        <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                        <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                        <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                        <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">
                        <a href="{{URL('chi-tiet-san-pham/'.$product->product_id)}}">
                            <img src="{{URL('public/uploads/product/'.$product->product_image)}}" width="100%" alt="{{$product->product_name}}">
                        </a>
                        <div class="info-product text-center">
                            <h3><a href="{{URL('chi-tiet-san-pham/'.$product->product_id)}}">{{$product->product_name}}</a></h3>
                            <div class="price-product text-center">
                                <p>{{number_format($product->product_price,0,',','.')}} VN??</p>
                            </div>
                            <button type="button" class="buy-product form-control btn add-to-cart" data-id_product="{{$product->product_id}}" name="add-to-cart">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Th??m v??o gi??? h??ng
                            </button>
                        </div>
                    <!-- </form> -->
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>

<div class="wrap-banner">
    
    <div class="container text-center">
        <div class="title-content">
            <img src="{{URL('public/client/img/dot-title-left.png')}}" alt=""> Laptop LT - Th??? gi???i laptop <img src="{{URL('public/client/img/dot-title-right.png')}}" alt=""></div>
        <div class="descript-introduce">
            <ol>
                <li>&emsp;B???n ??ang c???n t??m m???t ?????a ch??? uy t??n b??n laptop ch??nh h??ng v?? gi?? r????</li>
                <li>&emsp;B???n ph??n v??n kh??ng bi???t l???a ch???n th??? n??o l?? ????ng ????? tr??nh ch???n nh???m laptop ?????i v???i c??ng vi???c c???a b???n?</li>
                <li>&emsp;B???n lu??n lo l???ng v??? v???n ????? ngu???n g???c xu???t x??? c???a tr??i c??y?</li>
                <li>&emsp;B???n ???? bi???t g?? v??? c??c lo???i laptop ch??a?</li>
                <li>&emsp;??? ???? N???ng b???n kh??ng bi???t n??i n??o b??n laptop ch??nh h??ng v?? uy t??n v???i gi?? c??? h???p l?? v?? ch???t l?????ng h???t?</li>
            </ol>
            <span class="text-uppercase"><i class="pr-3 fas fa-greater-than"></i>H??y ????? <a href="{{URL('/')}}">Laptop LT</a> gi???i quy???t t???t c??? c??c v???n ????? n??y cho b???n.</span>
        </div>
        <div class="wrap-program">
            <div class="col-md-6"><img src="{{URL('public/client/img/banner-laptop.png')}}" width="100%" alt="Laptop LT" title="Laptop LT - Th??? gi???i c??ng ngh???"></div>
            <div class="col-md-3">
                <div class="rotate-y mt-4 text-center">
                    <a href="#"><img src="{{URL('public/client/img/quality.png')}}" alt="Uy t??n ch???t l?????ng"></a>
                </div>
                <p class="program-title">Uy t??n ch???t l?????ng</p>
                <div>
                    <p>????? chi???m ???????c tr??i tim kh??ch h??ng c???n c?? ch??? t??n. Th????ng hi???u m???nh nh??? ch??? t??n v?? c??ng ch??nh ch??? t??n l??m n??n th????ng hi???u.</p>
                </div>
                <div class="rotate-y mt-4 text-center">
                    <a href="#"><img src="{{URL('public/client/img/best-price.png')}}" alt="Gi?? c??? h???p l??"></a>
                </div>
                <p class="program-title">Gi?? c??? h???p l??</p>
                <div>
                    <p>Gi?? c?? th??? kh??ng t???t nh???t nh??ng Laptop LT cam k???t ch???t l?????ng lu??n t????ng x???ng v???i gi?? c???.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="rotate-y mt-4 text-center">
                    <a href="#"><img src="{{URL('public/client/img/authentic.png')}}" alt="S???n ph???m ch??nh h??ng"></a>
                </div>
                <p class="program-title">S???n ph???m ch??nh h??ng</p>
                <div>
                    <p>T???t c??? s???n ph???m t???i Laptop LT ?????u l?? s???n ph???m ch??nh h??ng </p>
                </div>
                <div class="rotate-y mt-4 text-center">
                    <a href="#"><img src="{{URL('public/client/img/free-ship.png')}}" alt="Nhanh ch??ng ch??nh x??c"></a>
                </div>
                <p class="program-title">Nhanh ch??ng ch??nh x??c</p>
                <div>
                    <p>Laptop LT cam k???t giao h??ng t???n tay c???c nhanh trong v??ng 2h k??? t??? l??c nh???n order cho c??c ????n h??ng n???i th??nh.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrap-message px-2">
    <div class="container">
        <div class="row col-md-6 m-left">
            <div class="frame-message">
                <div class="text-center mb-2">
                    <div class="title-content mb-0">
                        <img src="{{URL('public/client/img/dot-title-left.png')}}" alt=""> ????ng k?? nh???n tin <img src="{{URL('public/client/img/dot-title-right.png')}}" alt=""></div>
                    <span class="subTitle-message mb-2">H??y nh???p th??ng tin v??o form b??n d?????i ????? ch??ng t??i li??n h??? v???i b???n!</span>
                </div>
                <!-- <form action="" method="post">
                    <div class="row">
                        <div class="col-md-4 mb-2"><input type="text" class="form-control" placeholder="H??? v?? t??n" /></div>
                        <div class="col-md-4 mb-2"><input type="text" class="form-control" placeholder="S??? ??i???n tho???i" /></div>
                        <div class="col-md-4 mb-2"><input type="email" class="form-control" placeholder="Email" /></div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mb-2"><textarea class="form-control" cols="60" rows="2" placeholder="N???i dung"></textarea></div>
                        <div class="col-md-4 mb-2"><input type="submit" class="btn btn-danger form-control" value="G???i"></div>
                    </div>
                </form> -->
                <form>
                  <!-- Name input -->
                  <div class="form-outline mb-1">
                    <label class="form-label" for="form4Example1">H??? v?? t??n</label>
                    <input type="text" id="form4Example1" class="form-control" required />
                  </div>

                  <!-- Phone number input -->
                  <div class="form-outline mb-1">
                    <label class="form-label" for="form4Example1">S??? ??i???n tho???i</label>
                    <input type="num" id="form4Example1" class="form-control" required />
                  </div>

                  <!-- Email input -->
                  <div class="form-outline mb-1">
                    <label class="form-label" for="form4Example2">Email address</label>
                    <input type="email" id="form4Example2" class="form-control" required />
                  </div>

                  <!-- Message input -->
                  <div class="form-outline mb-1">
                    <label class="form-label" for="form4Example3">Message</label>
                    <textarea class="form-control" id="form4Example3" rows="4" required ></textarea>
                  </div>

                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-center mb-1">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form4Example4"
                      checked
                    />
                    <label class="form-check-label" for="form4Example4">
                      G???i m???t tin nh???n v???i n???i dung ???? g???i v??? email c???a b???n
                    </label>
                  </div>

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary btn-block col-md-12 mb-2">G???i</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <div class="wrap-news">
    <div class="container text-center">
        <div class="title-content">
            <img src="{{URL('public/client/img/dot-title-left.png')}}" alt=""> Tin t???c - H??nh ???nh <img src="{{URL('public/client/img/dot-title-right.png')}}" alt=""></div>
    </div>
    <div class="row">
        <div class="col-xs 12 col-md-6 list-new mb-4">
            <div class="box-new clearfix">
                <a href="">
                    <img src="https://minhphuongfruit.com/thumb/275x180x1x100/upload/news/untitled-1-8388.png" alt="Mua Cherry ??? ????u Ngon, Uy T??n T???i TpHCM ?">
                </a>
                <div class="info-new">
                    <p>
                        <span><b>31</b>Th??ng 08</span>
                        <a href="">Mua Cherry ??? ????u Ngon, Uy T??n T???i TpHCM ?</a>
                    </p>
                    <div class="text-new">Cherry hay c??n g???i l?? qu??? anh ????o, ???????c m???nh danh l?? tr??i c??y ???v??ng??? ??? Vi???t Nam v???i gi?? kh?? ?????t v?? nh???ng c??ng d???ng cho s???c kho??? c??ng ???v??ng??? kh??ng k??m....</div>
                </div>
            </div>
            <div class="box-new clearfix">
                <a href="">
                    <img src="https://minhphuongfruit.com/thumb/275x180x1x100/upload/news/z2294572450048_05fd28a6b645d1e36594403ba7061eb9-6010.jpg" alt="T????t T??n S????u Sum V????y, Xi??n So?? Cu??ng Ca??c Do??ng Cherry U??c Tasmania Premium">
                </a>
                <div class="info-new">
                    <p><span><b>23</b>Th??ng 01</span>
                        <a href="">T????t T??n S????u Sum V????y, Xi??n So?? Cu??ng Ca??c Do??ng Cherry U??c Tasmania Premium</a>
                    </p>
                    <div class="text-new">Cherry U??c Tasmania Premium gi??n tan, bo??ng b????y, ng???t ng??o &amp; ?????m ????. M????t mo??n qua?? c????c ki?? sang tro??ng va?? y?? nghi??a trong mu??a T????t Nguy??n ??a??n na??y da??nh cho nh????ng...</div>
                </div>
            </div>
            <div class="box-new clearfix">
                <a href="">
                    <img src="https://minhphuongfruit.com/thumb/275x180x1x100/upload/news/z2293640353603_d3cf7db53b0dcf5819ffab8a688662a1-5763.jpg" alt="B?????i ???????ng L?? Cam T??n Tri???u - Ch??nh G???c Bi??n Ho??">
                </a>
                <div class="info-new">
                    <p>
                        <span><b>23</b>Th??ng 01</span>
                        <a href="">B?????i ???????ng L?? Cam T??n Tri???u - Ch??nh G???c Bi??n Ho??</a>
                    </p>
                    <div class="text-new">B?????i ???????ng L?? Cam T??n Tri???u&nbsp;c?? h??nh d??ng b???t m???t v?? ?????c tr??ng ri??ng l?? v??? m???ng, m???ng n?????c, v??? ?????m ????, m??i b?????i d???o kh??c h???n c??c lo???i b?????i kh??c,...</div>
                </div>
            </div>
            <div class="box-new clearfix">
                <a href="">
                    <img src="https://minhphuongfruit.com/thumb/275x180x1x100/upload/news/untitled-1-8388.png" alt="Mua Cherry ??? ????u Ngon, Uy T??n T???i TpHCM ?">
                </a>
                <div class="info-new">
                    <p>
                        <span><b>31</b>Th??ng 08</span>
                        <a href="">Mua Cherry ??? ????u Ngon, Uy T??n T???i TpHCM ?</a>
                    </p>
                    <div class="text-new">Cherry hay c??n g???i l?? qu??? anh ????o, ???????c m???nh danh l?? tr??i c??y ???v??ng??? ??? Vi???t Nam v???i gi?? kh?? ?????t v?? nh???ng c??ng d???ng cho s???c kho??? c??ng ???v??ng??? kh??ng k??m....</div>
                </div>
            </div>
            <div class="box-new clearfix">
                <a href="">
                    <img src="https://minhphuongfruit.com/thumb/275x180x1x100/upload/news/z2294572450048_05fd28a6b645d1e36594403ba7061eb9-6010.jpg" alt="T????t T??n S????u Sum V????y, Xi??n So?? Cu??ng Ca??c Do??ng Cherry U??c Tasmania Premium">
                </a>
                <div class="info-new">
                    <p><span><b>23</b>Th??ng 01</span>
                        <a href="">T????t T??n S????u Sum V????y, Xi??n So?? Cu??ng Ca??c Do??ng Cherry U??c Tasmania Premium</a>
                    </p>
                    <div class="text-new">Cherry U??c Tasmania Premium gi??n tan, bo??ng b????y, ng???t ng??o &amp; ?????m ????. M????t mo??n qua?? c????c ki?? sang tro??ng va?? y?? nghi??a trong mu??a T????t Nguy??n ??a??n na??y da??nh cho nh????ng...</div>
                </div>
            </div>
            <div class="box-new clearfix">
                <a href="">
                    <img src="https://minhphuongfruit.com/thumb/275x180x1x100/upload/news/z2293640353603_d3cf7db53b0dcf5819ffab8a688662a1-5763.jpg" alt="B?????i ???????ng L?? Cam T??n Tri???u - Ch??nh G???c Bi??n Ho??">
                </a>
                <div class="info-new">
                    <p>
                        <span><b>23</b>Th??ng 01</span>
                        <a href="">B?????i ???????ng L?? Cam T??n Tri???u - Ch??nh G???c Bi??n Ho??</a>
                    </p>
                    <div class="text-new">B?????i ???????ng L?? Cam T??n Tri???u&nbsp;c?? h??nh d??ng b???t m???t v?? ?????c tr??ng ri??ng l?? v??? m???ng, m???ng n?????c, v??? ?????m ????, m??i b?????i d???o kh??c h???n c??c lo???i b?????i kh??c,...</div>
                </div>
            </div>
        </div>
        <div class="col-xs 12 col-md-5">
            <div class="row slick-new-img">
                <div class="col-xs-12">
                    <img src="https://minhphuongfruit.com/thumb/275x180x1x100/upload/news/untitled-1-8388.png" width="100%" height="100%" alt="">
                </div>
                <div class="col-xs-12">
                    <img src="https://minhphuongfruit.com/thumb/275x180x1x100/upload/news/z2294572450048_05fd28a6b645d1e36594403ba7061eb9-6010.jpg" width="100%" height="100%" alt="">
                </div>
                <div class="col-xs-12">
                    <img src="https://minhphuongfruit.com/thumb/275x180x1x100/upload/news/z2293640353603_d3cf7db53b0dcf5819ffab8a688662a1-5763.jpg" width="100%" height="100%" alt="">
                </div>
                <div class="col-xs-12">
                    <img src="https://minhphuongfruit.com/thumb/275x180x1x100/upload/news/untitled-1-8388.png" width="100%" height="100%" alt="">
                </div>
                <div class="col-xs-12">
                    <img src="https://minhphuongfruit.com/thumb/275x180x1x100/upload/news/z2294572450048_05fd28a6b645d1e36594403ba7061eb9-6010.jpg" width="100%" height="100%" alt="">
                </div>
            </div>
            <div class="row slick-new-subimg">
                <div class="col-xs-12 px-1">
                    <img src="https://minhphuongfruit.com/thumb/275x180x1x100/upload/news/untitled-1-8388.png" width="100%" alt="">
                </div>
                <div class="col-xs-12 px-1">
                    <img src="https://minhphuongfruit.com/thumb/275x180x1x100/upload/news/z2294572450048_05fd28a6b645d1e36594403ba7061eb9-6010.jpg" width="100%" alt="">
                </div>
                <div class="col-xs-12 px-1">
                    <img src="https://minhphuongfruit.com/thumb/275x180x1x100/upload/news/z2293640353603_d3cf7db53b0dcf5819ffab8a688662a1-5763.jpg" width="100%" alt="">
                </div>
                <div class="col-xs-12 px-1">
                    <img src="https://minhphuongfruit.com/thumb/275x180x1x100/upload/news/untitled-1-8388.png" width="100%" alt="">
                </div>
                <div class="col-xs-12 px-1">
                    <img src="https://minhphuongfruit.com/thumb/275x180x1x100/upload/news/z2294572450048_05fd28a6b645d1e36594403ba7061eb9-6010.jpg" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="wrap-partner">
    <div class="wrap-partner">
    <div class="text-center my-3">
        <div class="title-content">
            <img src="{{URL('public/client/img/dot-title-left.png')}}" alt=""> ?????i t??c - Kh??ch h??ng <img src="{{URL('public/client/img/dot-title-right.png')}}" alt=""></div>
    </div>
    <div class="wrap-partner slick-partner">
        @foreach($partner as $key => $part)
            <div class="col-xs-12 col-sm-6 col-md-2 list-partner">
                <div class="box-partner">
                    <p>
                        <a href="@if($part->partner_link != '') {{$part->partner_link}} @else # @endif">
                            <img src="{{url('public/uploads/partner/'.$part->partner_image)}}" width="100%" alt="{{$part->partner_name}}">
                        </a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>

</div>
@endsection