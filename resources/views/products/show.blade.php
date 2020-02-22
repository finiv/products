@extends('adminlte::page')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $product->name }}" readonly>
		        </div>
                <div class="form-group">
		            <strong>Short description:</strong>
		            <input type="text" name="short_description" class="form-control" placeholder="Short description" value="{{ $product->short_description }}" readonly>
		        </div>
                <div class="form-group">
		            <strong>Full description:</strong>
		            <input type="text" name="full_description" class="form-control" placeholder="Full description" value="{{ $product->full_description }}" readonly>
		        </div>
                <div class="form-group">
		            <strong>Price:</strong>
		            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" readonly>
		        </div>
                <div class="form-group">
		            <strong>Balance:</strong>
		            <input type="text" name="balance" class="form-control" placeholder="Balance" value="{{ $product->balance }}" readonly>
		        </div>
        </div>
    </div>
@endsection