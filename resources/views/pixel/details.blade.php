@extends('layouts.app')

@section('content')

    <section class="pt-lg-5 pb-lg-2 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><h2 class="display-3 fw-bolder mt-5">{{ $post->title }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-5">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">{{ $post->title }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail</li>
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
                
                    <div id="body-img" class="col-md-8">
                        <h3 class="fw-bolder">{{ $post->title }}</h3>
                        <p style="font-size:10pt;" class="text-uppercase mb-5">{{ $post->created_at->format("d F, Y") }}</p>
                        <p>{!! $post->body !!}</p>
                        <div class="row mt-5 mb-5">
                            <div class="col-md-6">
                                <p class="text-muted fw-bold text-uppercase" style="font-size:10pt;">- Published by Pixel Agency</p>
                            </div>
                            <div class="col-md-6">
                                <div class="fb-share-button float-end" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            

        </div>
    </section>
    <!-- blog full width -->

@endsection

@section('js')
<script>

$(document).ready(function(){
$("#body-img img").addClass("img-fluid mt-2 mb-2")
})

</script>
@endsection
