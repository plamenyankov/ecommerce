@extends('layouts.main')
@section('search-keyword')
<hr/>
<section id="search-keyword">
    <h1>Search Results for <span>{{$keyword}}</span></h1>
</section><!-- end search-keyword -->
@stop
@section('content')
<div class="search-results">
    @if($products->count()>0)
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
                {{HTML::image("img/white-cart.gif","Add to Cart")}}

                ADD TO CART
            </a>
        </p>

        <p class="wish">
            <a href="">
                {{HTML::image("img/wish.gif","Add to Wishlist")}}

                Add to Wishlist
            </a>
        </p>
    </div>
    @endforeach
    @else

    <div>No results!</div>
    @endif
</div>
@stop
