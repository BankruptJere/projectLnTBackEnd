@extends('books.layout')
  
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left" style="color:white">
            <h2>Contact Us!</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
        </div>
    </div>
</div>

<br>

<!-- CONTACT BANNER -->
<div class="container bg-light banner">
    <h1>Feel Free to Contact Us</h1>
    <p class="mb-4">Call us if anything goes wrong, or if you want to submit a book!</p>
    <a href="#" class="btn btn-success">Whatsapp Call</a>
</div>

<!-- BOOK CONTENT -->
<div class="container">
    <div class="col-md-5 py-3">
        <form>
            <div class="row" style="color:white">
                <div class="form-group col-md-6">
                    <label for="">Email</label>
                    <input type="email" class="form-control" placeholder="test email">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="test nama">
                </div>
                <div class="form-group col-md-12">
                    <label for="">Pesan / Keluhan</label>
                    <textarea class="form-control" placeholder="test pesan" rows="5"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-sm">Send Now</button>
        </form>
    </div>
</div>




   



@endsection