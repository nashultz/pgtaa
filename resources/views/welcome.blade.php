
@extends('layouts.main')

@push('styles-page-specific')
    @css('pgtaa/pages/homepage.css')
@endpush

@section('body-content')
    <div class="hero">
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="content col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Welcome to Predator Gaming Tech & Audio</h1>
                    <p class="col-lg-10 fs-4"></p>
                </div>
                @include('layouts.signup')
            </div>
        </div>
    </div>
    <div class="videos">
        <div class="album py-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col text-light">
                        <h2>Featured Youtube Videos</h2><br>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <iframe width="419.33px" height="225px" src="https://www.youtube.com/embed/GbP0R2FK4Rs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="card-body">
                                <p class="card-text">Finding A Lockbox (Offroad Outlaws) in 4k</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">1.35 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <iframe width="419.33px" height="225px" src="https://www.youtube.com/embed/k9yBbltodE8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">The First Explosion Proof (Piston Door) in Minecraft Survival</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">3.21 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <iframe width="419.33px" height="225px" src="https://www.youtube.com/embed/4l4KrU1y8KY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="card-body">
                                <p class="card-text">How to play off road outlaws with controller</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">24.52 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-lg-5 text-center">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <a href="{{route('videos')}}" class="btn btn-outline-warning my-2">More Videos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection    