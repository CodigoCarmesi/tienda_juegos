@extends('store.template')

@section('content')
<div class="container text-center">
	<div class="page-header">
	  <h1><i class="fa fa-shopping-cart"></i> Detalle del producto</h1>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="product-block">
				<img src="{{ $product->image }}">
			</div>	
		</div>
		<div class="col-md-6">
			<div class="product-block">
				<h3>{{ $product->name }}</h3><hr>
				<div class="product-info panel">
					<p>{{ $product->description }}</p>
					<h4>
						<span class="label label-info">Precio: ${{ $product->price }}</span>
					</h4>
					<p>
						<a class="btn btn-danger " href="{{ route('cart-add', $product->slug) }}">
							Al Carro <i class="fa fa-cart-plus fa-2x"></i>
						</a>
					</p>
				</div>
			</div>	
		</div>
	</div><hr>

	<p>
		<a class="btn btn-default btn-block" href="{{ route('home') }}">
			<i class="fa fa-home"></i> Regresar
		</a>
	</p>
</div>
@stop