@extends('books.layout')
 
@section('content')


<!-- BANNER -->


    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color:white">Book List</h2>
            </div>
            
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    

        @foreach ($data as $key => $value)
                            <div class="col-md-3 mb-4">
                                <div class="col-md-12 book-content bg-light">
                                    <h3 class="judul"> {{ $value->title }}  </h3>
                                    <span class="badge bg-info mb-3"> Author : {{ $value->author }} </span>
                                    <span class="d-block"> Length : {{ $value->page }} pages </span>
                                    <span class="d-block"> Year Published  : {{ $value->year }}</span>
                                </div>
                            </div>               



        @endforeach


       
       
       
    {!! $data->links() !!}         
@endsection