@extends('layouts.lape')

@section('content')

<div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4"> Lapė Snapė</h1>
          <div class="list-group">
            <a href="{{route('product.index')}}" class="list-group-item list-group-item-action list-group-item-warning">Rankinukai </a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Maikės </a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Grafika </a>
          </div>

        </div>

 <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">

                <!-- IMAGE -->
                <img class="d-block img-fluid" src="{{asset('storage/lapes_foto/41500292_291617328327352_5212547201493893120_n.jpg')}}" width="900px" height="350px" alt="Rankinukas">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="{{asset('storage/lapes_foto/test1.png')}}" width="900px" height="350px" alt="Rankinukas">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
              
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="{{route('product.index')}}">Lape</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

           
            

            </div>
          <!-- /.row -->
          
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection







<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
 -->