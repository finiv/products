@extends('adminlte::page')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Categories</h2>
            </div>
            <div class="pull-right">
                @can('categories-create')
                <a class="btn btn-success" href="{{ route('categories.create', ['categories' => $categories]) }}"> Create New Category</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Parent category</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($categories as $category)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $category->name }}</td>
            @if(isset($category->parent))
	        <td>{{ $category->parent->name }}</td>
            @else
            <td></td>
            @endif
	        <td>
                <form action="{{ 
                    route('categories.destroy', ['category' => $category->id]) }}" method="POST">
                @can('categories-list')
                    <a class="btn btn-info" href="{{ route('categories.show', ['category' => $category]) }}">Show</a>
                @endcan
                @can('categories-edit')   
                    <a class="btn btn-primary" href="{{ route('categories.edit', ['category' => $category]) }}">Edit</a>
                @endcan    
                @csrf
                @method('DELETE')
                @can('categories-delete')
                    <button class="btn btn-danger">Delete</button>
                @endcan    
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $categories->links() !!}


@endsection