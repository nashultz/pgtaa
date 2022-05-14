
@extends('layouts.main')

@push('styles-page-specific')
    @css('pgtaa/pages/homepage.css')
@endpush

@section('body-content')
    <div class="hero">
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="content col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3">News from Predator Gaming Tech & Audio</h1>
                    <p class="col-lg-10 fs-4"></p>
                </div>
                @include('layouts.signup')
            </div>
        </div>
    </div>
    <p></p>
    <main class="container text-muted">
        <div class="row g-5">
            <div class="col-md-8">
                <article class="blog-post">
                    <h2 class="blog-post-title">New feature</h2>
                    <p class="blog-post-meta">May 1, 2022 by <a href="#">Ashton</a></p>

                    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <ul>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                    </ul>
                    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
                </article>

                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled">Newer</a>
                </nav>

            </div>

            <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-dark rounded">
                <h4 class="fst-italic">About</h4>
                <p class="mb-0">Find the latest on what is happening here.</p>
                </div>

                <div class="p-4">
                <h4 class="fst-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">May 2022</a></li>
                </ol>
                </div>

                <div class="p-4">
                <h4 class="fst-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="https://youtube.com/channel/UCBYrEr86xZGGSpA84_S71Mg" target="_blank">Youtube</a></li>
                    <li><a href="https://www.instagram.com/pgtaa" target="_blank">Instagram</a></li>
                    <li><a href="https://www.tiktok.com/@predator_gaming_23" target="_blank">TikTok</a></li>
                </ol>
                </div>
            </div>
            </div>
        </div>

</main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection    