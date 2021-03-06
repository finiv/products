@extends('adminlte::page')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('products.update',$product->id) }}" method="POST">
    	@csrf
        @method('PUT')


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $product->name }}">
		        </div>
                <div class="form-group">
		            <strong>Short description:</strong>
		            <input type="text" name="short_description" class="form-control" placeholder="Short description" value="{{ $product->short_description }}">
		        </div>
                <div class="form-group">
		            <strong>Full description:</strong>
		            <input type="text" name="full_description" class="form-control" placeholder="Full description" value="{{ $product->full_description }}">
		        </div>
                <div class="form-group">
		            <strong>Price:</strong>
		            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}">
		        </div>
                <div class="form-group">
		            <strong>Balance:</strong>
		            <input type="text" name="balance" class="form-control" placeholder="Balance" value="{{ $product->balance }}">
		        </div>
                @foreach($categories as $category)
		            <select name="category_id[]" id="" multiple class="form-control">
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    </select>
                @endforeach
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>


@endsection