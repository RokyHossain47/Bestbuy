@extends('layouts.website.main')
@section('title', 'Shop Page')
@section('content')


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('dist/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container card">
            <div class="row">
                <div class="col-lg-12 cart-body">
                    <div class="shoping__cart__table">
                        <table>
                            <thead class="bg-success text-light">
                                <tr>
                                    <th class="text-light p-3">Products</th>
                                    <th class="text-light p-3">Price</th>
                                    <th class="text-light p-3">Quantity</th>
                                    <th class="text-light p-3">Total</th>
                                    <th class="text-light p-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="shoping__cart__item p-sm-3">
                                        <img src="{{asset('dist/img/cart/cart-1.jpg')}}" alt="">
                                        <h5>Vegetable’s Package</h5>
                                    </td>
                                    <td class="shoping__cart__price p-sm-3">
                                        $55.00
                                    </td>
                                    <td class="shoping__cart__quantity p-sm-3">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total p-sm-3">
                                        $110.00
                                    </td>
                                    <td class="shoping__cart__item__close p-sm-3">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="shoping__cart__item p-sm-3">
                                        <img src="{{asset('dist/img/cart/cart-2.jpg')}}" alt="">
                                        <h5>Fresh Garden Vegetable</h5>
                                    </td>
                                    <td class="shoping__cart__price p-sm-3">
                                        $39.00
                                    </td>
                                    <td class="shoping__cart__quantity p-sm-3">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total p-sm-3">
                                        $39.99
                                    </td>
                                    <td class="shoping__cart__item__close p-sm-3">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="shoping__cart__item p-sm-3">
                                        <img src="{{asset('dist/img/cart/cart-3.jpg')}}" alt="">
                                        <h5>Organic Bananas</h5>
                                    </td>
                                    <td class="shoping__cart__price p-sm-3">
                                        $69.00
                                    </td>
                                    <td class="shoping__cart__quantity p-sm-3">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total p-sm-3">
                                        $69.99
                                    </td>
                                    <td class="shoping__cart__item__close p-sm-3">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 p-sm-3">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn rounded">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right rounded"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5 class="rounded">Discount Codes</h5>
                            <form action="#">
                                <input type="text" class="rounded" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn rounded">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout pb-sm-3 mb-sm-3 rounded">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>$454.98</span></li>
                            <li>Total <span>$454.98</span></li>
                        </ul>
                        <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

@endsection