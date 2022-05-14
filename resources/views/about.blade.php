
@extends('layouts.main')

@push('styles-page-specific')
    @css('pgtaa/pages/homepage.css')
@endpush

@section('body-content')
    <div class="hero">
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="content col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3">About Predator Gaming Tech & Audio</h1>
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
                        <h2>Staff</h2><br>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="425" src="img/Ashton.jpg"></img>
                                <div class="card-body">
                                <p class="card-text">Ashton Carr</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Owner</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="425" src="img/Nate.jpg"></img>
                            <div class="card-body">
                                <p class="card-text">Nathon Scott</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Developer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection    