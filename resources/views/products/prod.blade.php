
@extends('layouts.lape')

@section('content')
  <body>

    <!-- Navigation -->
    

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">Tašė lapė</h1>
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Rankinukai</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Maikės</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Grafika</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
            <div class="card-body">
              <h3 class="card-title">Tašė Lapė</h3> <!-- admin dalis -->
              <h4>50 eur</h4> <!-- Šita dalis admino , kainos dinamiškai keisis kaičiant duomenis lentelėje su  function edit , update -->
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
               <a href="#" class="btn btn-success">Užsakyti</a><br>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
            </div>
          </div>
          <!-- /.card -->

         
             
          
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    
  </body>
  @endsection

</html>
