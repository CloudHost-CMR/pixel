@extends('layouts.app')

@section('content')

    <section class="pt-lg-5 pb-lg-2 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><h2 class="display-3 fw-bolder mt-5">Blog</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-5">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>
    </div>

    <!-- blog full width -->
    <section class="pt-lg-5 pb-3">
        <div class="container">
            <div class="row justify-content-center">

                <!-- blog post -->

                @foreach ($posts as $post)
                    
                    <div class="col-md-8">

                        <div class="card border-0 mt-3">
                            <div class="card-header border-0">
                                <a href="{{ route('blog-details',$post->slug) }}"><img src="{{ asset(Voyager::image($post->image)) }}" class="card-img-top"></a>
                            </div>
                            <div class="card-body">
                                <p style="font-size:10pt;" class="text-uppercase">{{ $post->created_at->format("d F, Y") }}</p>
                                <h3 class="fw-bolder">{{ $post->title }}</h3>
                                <p class="text-muted"> {{ $post->excerpt }} </p>
                            </div>
                        </div>

                    </div>
                    
                @endforeach


            </div>
        </div>
    </section>
    <!-- blog full width -->

@endsection
