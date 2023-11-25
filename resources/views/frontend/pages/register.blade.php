@extends('frontend.layouts.master')
@section('content')
 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
    <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Đăng ký</li>
                    </ul>

                </div>
            </div>
        </div>
</div>
<!--breadcrumbs area end-->
  {{-- Error --}}
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
<!-- customer login start -->
<div class="customer_login">
    <div class="row">
            <div class="col-lg-6 col-md-6">
            </div>

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Đăng ký</h2>
                        <form method="POST">
                            @csrf
                            <p>   
                                <label>Họ và tên  <span>*</span></label>
                                <input type="text" name="name">
                             </p>
                            <p>   
                                <label>Số điện thoại  <span>*</span></label>
                                <input type="text" name="phone">
                             </p>
                             <p>   
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password" name="password">
                             </p>
                            <div class="login_submit">
                                <button type="submit">Đăng ký</button>
                            </div>
                        </form>
                    </div>    
                </div>
                <!--register area end-->
            </div>
</div>
<!-- customer login end -->

@endsection