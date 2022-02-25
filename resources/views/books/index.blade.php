@extends('books.layout')
 
@section('content')


<!-- BANNER -->

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="container bg-light banner rounded">
    <h1>Welcome to Musang Library</h1>
    <p class="mb-4">An exemplary display of our literary collections, now available on your computer!</p>
    <a href="{{ route('books.list') }}" class="btn btn-primary">Explore Book</a>
</div>

    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color:white">Book</h2>
            </div>
            
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('books.create') }}"> Add New Book</a>
            </div>
        </div>
    </div>
   
    
    <table class="table table-striped table-dark table-hover" style="color:white">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Author Name</th>
            <th scope="col">Book Page</th>
            <th scope="col">Year Published</th>
            <th scope="col" width="280px">Action</th>
        </tr>
     </thead>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->author }}</td>
            <td>{{ $value->page }}</td>
            <td>{{ $value->year }}</td>
            <td>
                <form action="{{ route('books.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-success" href="{{ route('books.show',$value->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('books.edit',$value->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
       </table>  
    {!! $data->links() !!}         
@endsection