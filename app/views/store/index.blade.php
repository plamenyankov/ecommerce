@extends('layouts.main')
@section('promo')
<section id="promo">
    <div id="promo-details">
        <h1>Today's Deals</h1>
        <p>Checkout this section of<br />
            products at a discounted price.</p>
        <a href="#" class="default-btn">Shop Now</a>
    </div><!-- end promo-details -->
    <img src="img/promo.png" alt="Promotional Ad">
</section><!-- promo -->
@stop
@section('content')
<h2>Featured</h2>
<hr>
<div id="products">
    @foreach($products as $product)
    <div class="product">
        <a href="/{{$product->id}}">
            {{HTML::image($product->image,$product->title,['class'=>'feature','width'=>240,'height'=>127])}}
        </a>
        <h3>
            <a href="/{{$product->id}}">{{$product->title}}</a></h3>

       <p>{{Str::words($product->description,15),''}}</p>

        <h5>Availability:
            <span class="{{Availability::displayClass($product->availability)}}">
               {{Availability::display($product->availability)}}
            </span></h5>

        <p>
            <a href="/{{$product->id}}" class="cart-btn">
                <span class="price">{{$product->price}}</span>
                <img src="img/white-cart.gif" alt="Add to Cart">
                ADD TO CART
            </a>
        </p>

        <p class="wish">
            <a href="">
                <img src="img/wish.gif" alt="Add to Wishlist">
                Add to Wishlist
            </a>
        </p>
    </div>
   @endforeach
</div><!-- end products -->
@stop