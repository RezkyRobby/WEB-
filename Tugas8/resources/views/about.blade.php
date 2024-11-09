@extends('layouts.master')

@section('title', 'About Page')

@section('content')

<div class="container-fluid p-5" id="Values" style="background-color: whitesmoke;">
  <div class="row">
    <div class="col-sm-12 col-md-4">
      <span class="glyphicon glyphicon-globe logo slideanim"><img src="{{asset('images/Logo.png')}}" alt="" class="img-fluid"></span>
    </div>
    <div class="col-sm-12 col-md-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<div class="container-fluid" id="Location">
  <div class="row">
      <div class="col-md-6">
          <h1 style="padding-top: 40px;">
              Lokasi Kami Berada di Sulawesi Selatan, Makassar
          </h1>
          <p>Makassar, Sulawesi Selatan, adalah lokasi strategis untuk bisnis jasa baby sitter dan asisten rumah tangga. Sebagai pusat ekonomi di Indonesia Timur, akses terhadap tenaga kerja berkualitas sangat mudah, didukung oleh mobilitas tinggi dari berbagai wilayah. Hal ini memberikan keuntungan besar dalam memenuhi permintaan layanan yang terus meningkat di kota ini dan sekitar nya.</p>
          <a href="https://maps.app.goo.gl/uG7mUaYwgj23b6Fh7"><button type="button" class="btn btn-primary" style="background-color: plum;">Primary</button></a>
          
      </div>
      <div class="col-md-6 p-5">
          <img src="{{asset('images/Lokasi.png')}}" class="d-block w-100 img-fluid" alt="">
      </div>
    </div>
</div> <br>

<div class="container-fluid p-5" id="Folio" style="background-color: whitesmoke;">
  <div class="row">
      <div class="col-md-4 p-5">
          <div class="card">
              <img src="{{asset('images/Gambar1.jpg')}}" class="card-img-top img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Manado</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary" style="background-color: plum;">Go somewhere</a>
              </div>
          </div>
      </div>
      <div class="col-md-4 p-5">
          <div class="card">
              <img src="{{asset('images/Gambar2.jpg')}}" class="card-img-top img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Makassar</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary" style="background-color: plum;">Go somewhere</a>
              </div>
          </div>
      </div>
      <div class="col-md-4 p-5">
          <div class="card">
              <img src="{{asset('images/Gambar3.jpg')}}" class="card-img-top img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Surabaya</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary" style="background-color: plum;">Go somewhere</a>
              </div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-4 p-5">
          <div class="card">
              <img src="{{asset('images/Gambar1.jpg')}}" class="card-img-top img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Manado</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary" style="background-color: plum;">Go somewhere</a>
              </div>
          </div>
      </div>
      <div class="col-md-4 p-5">
          <div class="card">
              <img src="{{asset('images/Gambar2.jpg')}}" class="card-img-top img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Makassar</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary" style="background-color: plum;">Go somewhere</a>
              </div>
          </div>
      </div>
      <div class="col-md-4 p-5">
          <div class="card">
              <img src="{{asset('images/Gambar3.jpg')}}" class="card-img-top img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Surabaya</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary" style="background-color: plum;">Go somewhere</a>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
