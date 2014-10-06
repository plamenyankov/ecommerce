@extends('layouts.main')
@section('promo')
<section id="promo">
    <div id="promo-details">
        <h1>Today's Deals</h1>

        <p>Checkout this section of<br/>
            products at a discounted price.</p>
        <a href="#" class="default-btn">Shop Now</a>
    </div>
    <!-- end promo-details -->
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
            {{Form::open(['url'=>'store/addtocart'])}}
            {{Form::hidden('quantity',1)}}
            {{Form::hidden('id',$product->id)}}
            <button class="cart-btn" type="submit">
                <span class="price">{{$product->price}}</span>
                <img src="img/white-cart.gif" alt="Add to Cart">
                ADD TO CART
            </button>
            {{Form::close()}}
        </p>

        <p class="wish">
            {{Form::open(['url'=>'/store/wishlist/'.$product->id])}}
            <img src="img/wish.gif" alt="Add to Wishlist">
            {{Form::submit('Add to Wishlist',['class'=>'wish-btn'])}}
            {{Form::close()}}
        </p>
    </div>
    @endforeach
</div><!-- end products -->
@stop