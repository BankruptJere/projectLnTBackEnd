@extends('books.layout')
  
@section('content')
<h1 class="py-4 bg-dark text-light rounded">       Perpustakaan Musang</h1>

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

<div class="row" style="color:white">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Manage Books</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
        </div>
    </div>
</div>

<br> 
   
<form action="{{ route('books.store') }}" method="POST">
    @csrf
  
     <div class="row" style="color:white">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <i class='fas fa-book'></i> <strong>Title</strong>  
                <input type="text" name="title" class="form-control" placeholder="Enter Title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <i class='fas fa-feather-alt'></i> <strong>Author</strong> 
                <input type="text" name="author" class="form-control" placeholder="Enter Author Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <i class='fas fa-file-alt'></i>  <strong>Page</strong> 
                <input type="text" name="page" class="form-control" placeholder="Enter Page Number">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <i class='fas fa-calendar-day'></i> <strong>Year:</strong>
                <input type="text" name="year" class="form-control" placeholder="Enter Year">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>

        




@endsection