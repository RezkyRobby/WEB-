@extends('layouts.master')

@section('title', 'Contact Page')

@section('content')
    <div class="container pb-4" style="padding-top: 30px;">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nomor Telpon</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Telpon">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <a href="#" class="btn btn-primary" style="background-color: plum;">Submit</a>
      </div>
      
@endsection
