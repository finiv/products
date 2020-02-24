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
		            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $category->name }}" readonly>
		        </div>
                @if(isset($category->parent))
                <div class="form-group">
		            <strong>Parent category:</strong>
		            <input type="text" name="short_description" class="form-control" placeholder="Short description" value="{{ $category->parent->name }}" readonly>
		        </div>
                @endif
        </div>
    </div>
@endsection