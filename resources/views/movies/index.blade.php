<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Movies</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to RT Movies</h1>
                    <p class="lead mb-0">Proudly developed by Rachael Maphopha</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{ $movies[13]['posterurl']}}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $movies[13]['releaseDate'] }}</div>
                            <h2 class="card-title">{{ $movies[13]['title'] }}</h2>
                            <p class="card-text">{{ $movies[13]['storyline']}}</p>
                            <a class="btn btn-primary" href="/show/{{ $movies[13]['id'] }}">Read more →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{ $movies[1]['posterurl']}}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $movies[1]['releaseDate'] }}</div>
                                    <h2 class="card-title h4">{{ $movies[1]['title'] }}</h2>
                                    <p class="card-text">{{ $movies[1]['storyline']}}</p>
                                    <a class="btn btn-primary" href="/show/{{ $movies[1]['id'] }}">Read more →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{ $movies[2]['posterurl']}}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $movies[2]['releaseDate'] }}</div>
                                    <h2 class="card-title h4">{{ $movies[2]['title'] }}</h2>
                                    <p class="card-text">{{ $movies[2]['storyline']}}</p>
                                    <a class="btn btn-primary" href="/show/{{ $movies[2]['id'] }}">Read more →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{ $movies[3]['posterurl']}}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $movies[3]['releaseDate'] }}</div>
                                    <h2 class="card-title h4">{{ $movies[3]['title'] }}</h2>
                                    <p class="card-text">{{ $movies[3]['storyline']}}</p>
                                    <a class="btn btn-primary" href="/show/{{ $movies[3]['id'] }}">Read more →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{ $movies[4]['posterurl']}}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $movies[4]['releaseDate'] }}</div>
                                    <h2 class="card-title h4">{{ $movies[4]['title'] }}</h2>
                                    <p class="card-text">{{ $movies[4]['storyline']}}</p>
                                    <a class="btn btn-primary" href="/show/{{ $movies[4]['id'] }}">Read more →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <form class="form-inline" action="/search" method="POST">
                    @csrf
                    {{ csrf_field() }}
                    <div class="card mb-4">
                        <div class="card-header">Search for Movie</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" name="search" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="submit">>Go!</button>
                            </div>
                        </div>
                    </div>
                    </form>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories Available</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li>Action</li>
                                        <li>Comedy</li>
                                        <li>Crime</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li>Adventure</li>
                                        <li>Drama</li>
                                        <li>Fantasy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Rachael Maphopha 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
