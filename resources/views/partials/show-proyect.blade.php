@extends('app')


@section('content')


<div class="row g-0">
  <div class="col-md-4 g-0">
    <div class="leftside">
      <div class="container h-100">
        <div class="row w-100 h-100 justify-content-center align-items-center">
          <div class="col-12 justify-content-center">
            {{-- Carousel Start --}}

          <div id="carouselExampleControls" class="carousel slide carousel--container" data-bs-ride="carousel">
            <div class="carousel-inner rounded" {{-- style="box-shadow: 10px 0 5px -2px #888;" --}}>
              @foreach(json_decode($resource->imagen) as $key => $value)
              @if($key === 0)
              <div class="carousel-item carousel--background active">
                <img src="{{ $value }}" class="d-block w-100 img-fluid f--img" alt="Project Image">
              </div>   
              @else
              <div class="carousel-item carousel--background">
                <img src="{{ $value }}" class="d-block w-100 img-fluid f--img" alt="Project Image">
              </div>   
              @endif
              
              @endforeach         
            </div>
            @if(count(json_decode($resource->imagen)) > 1)
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            @endif
          </div>
        
          {{-- Carousel End --}}
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-8 g-0">
    <div class="rightside">

      <div class="container h-100">
        <div class="row w-100 h-100 justify-content-center align-items-center">
          <div class="col-12 text-center">
            <figure>
              <blockquote class="blockquote">
                @if($resource->title_img != null || $resource->title_img != "")
                  <img src="{{ json_decode($resource->title_img) }}" class="img-fluid title--img" alt="Title Image">
                @else
                  <h3>{{ $resource->nombre }}</h3>  
                @endif
                <p class="description--project">{{ $resource->descripcion }}</p>
              </blockquote>
            </figure>
          </div>
        </div>  
      </div>
    </div>
  </div>
</div>
  
  


@endsection