@extends('main')

@section('stylesheets')
    <link ref="stylesheet" type="text/css" href="styles.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to my blog!</h1>
            <p class="lead">Thank you for visiting my blog! This is my test website for Laravel Blog.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a></p>
          </div>
        </div>
    </div>

<!--END OF HEADER ROW-->

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Title</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            <div class="post">
                <h3>Title</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            <div class="post">
                <h3>Title</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>

            <hr>
            
            <div class="post">
                <h3>Title</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>

            <div class="col-md-3 col-md-offset-1">
              <h2>Side Bar</h2>
            </div>
@endsection

@section('scripts')
    <script src="js/scripts.js"></script>
@endsection