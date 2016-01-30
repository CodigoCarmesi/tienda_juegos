@extends('store.template')

@section('content')

@include('store.partials.slider')

<div class="container text-center">
	<div id="products">
		@foreach($products as $product)
			<div class="product white-panel">
				<h4>{{ $product->name }}</h4><hr>
				<img src="{{ $product->image }}" width="200">
				<div class="product-info panel">
					<p>{{ $product->extract }}</p>
					<h4><span class="label label-info">Precio: ${{ $product->price }}</span></h4>
					<p>
						<a class="btn btn-danger" href="{{ route('cart-add', $product->slug) }}">
							<i class="fa fa-cart-plus"></i> Al Carro
						</a>
						<a class="btn btn-warning" href="{{ route('product-detail', $product->slug) }}"><i class="fa fa-search"></i> Ver Detalle</a>
					</p>
				</div>
			</div>
		@endforeach
	</div>
</div>
@stop