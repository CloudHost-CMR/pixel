@extends('layouts.app')

@section('content')

    <section class="pt-lg-5 pb-lg-2 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8"><h2 class="display-3 fw-bolder mt-5">Checkout our work</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-5">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>
    </div>


    <!-- portfolio masonry -->
    <section class="pt-5 pb-5">
        <div class="container-fluid">
            <div class="row">
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-branding-tab" data-bs-toggle="tab" data-bs-target="#nav-branding" type="button" role="tab" aria-controls="nav-branding" aria-selected="true">Branding</button>
                        <button class="nav-link" id="nav-video-tab" data-bs-toggle="tab" data-bs-target="#nav-video" type="button" role="tab" aria-controls="nav-video" aria-selected="false">Video</button>
                        <button class="nav-link" id="nav-content-tab" data-bs-toggle="tab" data-bs-target="#nav-content" type="button" role="tab" aria-controls="nav-content" aria-selected="false">Content</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-branding" role="tabpanel" aria-labelledby="nav-branding-tab">
                        <div class="container-fluid">
                            <div class="row">

                                @foreach($brandings as $brand)
                                    <div class="col-md-4 mt-5">
                                        <figure class="img-overlay d-inline-block">
                                            <img src=" {{ voyager::image($brand->image) }}" class="img-fluid">
                                            <div class="img-hover">
                                                <span class="img-text"><a href="{{ route("port-folio-details",$brand->slug) }}" style="text-decoration:none;"><button class="btn btn-link btn-lg text-white"> {{ $brand->title}} </button></a></span>
                                            </div>
                                        </figure>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">
                        <div class="container-fluid">
                            <div class="row">

                                @foreach($videos as $video)
                                    <div class="col-md-4 mt-5">
                                        <figure class="img-overlay d-inline-block">
                                            <img src="{{ voyager::image($video->image) }}" class="img-fluid">
                                            <div class="img-hover">
                                                <span class="img-text"><a href="{{ route("port-folio-details",$video->slug) }}" style="text-decoration:none;"><button class="btn btn-link btn-lg text-white"> {{ $video->title }}</button></a></span>
                                            </div>
                                        </figure>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-content" role="tabpanel" aria-labelledby="nav-content-tab">
                        <div class="container-fluid">
                            <div class="row">
                                @foreach($designs as $design)
                                    <div class="col-md-4 mt-5">
                                        <figure class="img-overlay d-inline-block">
                                            <img src=" {{ voyager::image($design->image) }}" class="img-fluid">
                                            <div class="img-hover">
                                                <span class="img-text"><a href="{{ route("port-folio-details",$design->slug) }}" style="text-decoration:none;"><button class="btn btn-link btn-lg text-white"> {{ $design->title }} </button></a></span>
                                            </div>
                                        </figure>
                                    </div>
                              @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio masonry -->

@endsection
