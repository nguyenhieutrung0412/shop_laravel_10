@extends('frontend.layouts.master')
@section('content')
       <!--breadcrumbs area start-->
       <div class="breadcrumbs_area">
        <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>login</li>
                        </ul>

                    </div>
                </div>
            </div>
    </div>
    <!--breadcrumbs area end-->

   <!-- customer login start -->
    <div class="customer_login ">
        <div class="row">
                    <!--login area start -->
                    <div class="col-lg-6 col-md-6">
                    </div>
                    <!--login area start -->
                   <!--login area end-->
                    <div class="col-lg-6 col-md-6">
                        <div class="account_form">
                            <h2>login</h2>
                            <form  method="post">
                                @csrf
                                <p>   
                                    <label>Username or email <span>*</span></label>
                                    <input type="text" name="email">
                                 </p>
                                 <p>   
                                    <label>Passwords <span>*</span></label>
                                    <input type="password" name="password">
                                 </p>   
                                <div class="login_submit">
                                    <button type="submit">login</button>
                                    <label for="remember">
                                        <input id="remember" type="checkbox">
                                        Remember me
                                    </label>
                                    <a  href="#">register your account!</a>
                       
                                    <a class="mr-2" href="#">Lost your password?</a>
                                </div>

                            </form>
                         </div>    
                    </div>
                    <!--login area end-->

                    {{-- <!--register area start-->
                    <div class="col-lg-6 col-md-6">
                        <div class="account_form register">
                            <h2>Register</h2>
                            <form action="#">
                                <p>   
                                    <label>Email address  <span>*</span></label>
                                    <input type="text">
                                 </p>
                                 <p>   
                                    <label>Passwords <span>*</span></label>
                                    <input type="password">
                                 </p>
                                <div class="login_submit">
                                    <button type="submit">Register</button>
                                </div>
                            </form>
                        </div>    
                    </div>
                    <!--register area end--> --}}
                </div>
    </div>
    <!-- customer login end -->

@endsection