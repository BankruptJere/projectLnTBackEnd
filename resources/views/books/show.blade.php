@extends('books.layout')
  
@section('content')
    <div class="row" style="color:white">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Book Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <br>
    <div class="container bg-light banner">

    <h2> BOOK DATA </h2>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $book->title }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Author:</strong>
                {{ $book->author}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>Page:</strong>
                {{ $book->page }}
             </div>
         </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>Year:</strong>
                {{ $book->year }}
             </div>
        </div>

      </div>


    </div>
@endsection