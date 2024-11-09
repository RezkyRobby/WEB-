@extends('layouts.master')

@section('title', 'Home Page')

@section('content')

      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('images/karo1.png')}}" class="d-block w-100 img-fluid" alt="https://picsum.photos/500/200">
            <div class="carousel-caption d-none d-md-block">
              <h5>CV.Restu Bunda Mariyati</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/karo2.png')}}" class="d-block w-100 img-fluid" alt="https://picsum.photos/500/200">
            <div class="carousel-caption d-none d-md-block">
              <h5>CV.Restu Bunda Mariyati</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/karo3.png')}}" class="d-block w-100 img-fluid" alt="https://picsum.photos/500/200">
            <div class="carousel-caption d-none d-md-block">
              <h5>CV.Restu Bunda Mariyati</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    
@endsection
