@extends('layouts.app')

@section('content')

    <section class=" container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach( $carrousels as $key => $carrousel)
                            @if($key == 0)
                                <div class="carousel-item active">
                                    <img src="{{ asset(Voyager::image($carrousel->image)) }}" class="img-fluid w-100">

                                    <div class="container mt-lg-5  pt-3" style="position:relative; bottom:15rem; left:-12%;">
                                        <div class="carousel-caption text-start" >
                                            <h1 class="display-3 text-dark fw-bolder text-white w-75">{{ $carrousel->title }}</h1>
                                            <p class="mt-5"><a class="btn btn-lg btn-danger" href="{{ route('port-folio') }}">See our portfolio</a> <a class="btn btn-lg btn-outline-danger" data-toggle="modal" data-target="#Contact" href="#">Book a free call</a></p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if($key >= 1 && $key <= 2)
                                    <div class="carousel-item ">
                                        <img src="{{ asset(Voyager::image($carrousel->image)) }}" class="img-fluid w-100">

                                        <div class="container mt-lg-5  pt-3" style="position:relative; bottom:15rem; left:-12%;">
                                            <div class="carousel-caption text-start" >
                                                <h1 class="display-3 text-dark fw-bolder text-white w-75">{{ $carrousel->title }}</h1>
                                                <p class="mt-5"><a class="btn btn-lg btn-danger" href="{{ route('port-folio') }}">See our portfolio</a> <a class="btn btn-lg btn-outline-danger" data-toggle="modal" data-target="#Contact" href="#">Book a free call</a></p>
                                            </div>
                                        </div>
                                    </div>
                            @endif
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-3 pb-5">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-8">
                    <h2 class="display-3 text-center fw-bolder">What we can do to promote your business</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <h1 class="text-danger">01</h1>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3 class="fw-bolder text-dark">Branding and Packaging</h3>
                            <p class="text-muted"> We can design visuals like logos and packaging, that will make you stand out from your
                                competition and draw the attention of prospects <span><a href="#">Learn more</a></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <h1 class="text-danger">02</h1>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3 class="fw-bolder text-dark">Video Commercials</h3>
                            <p class="text-muted">Through video commercials we can make your brand or products more apealing by
                                narrating your story in a way that will stick in the minds of your prospects <span><a href="#">Learn more</a></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <h1 class="text-danger">03</h1>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3 class="fw-bolder text-dark">Design & Content Creation</h3>
                            <p class="text-muted">Do you need to setup a marketing campain? we got you covered. We do not only assist in elaborating a marketing strategy, but we also create all the visual assets needed to make it a success <span><a href="#">Learn more</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- portfolio masonry -->
    <section class="pt-5 pb-5">
        <div class="container-fluid">
            <div class="row">
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <button class="nav-link active fw-bolder" id="nav-branding-tab" data-bs-toggle="tab" data-bs-target="#nav-branding" type="button" role="tab" aria-controls="nav-branding fw-bold" aria-selected="true">Branding and Packaging</button>
                        <button class="nav-link fw-bolder" id="nav-video-tab" data-bs-toggle="tab" data-bs-target="#nav-video" type="button" role="tab" aria-controls="nav-video" aria-selected="false">Video Commercials</button>
                        <button class="nav-link fw-bolder" id="nav-content-tab" data-bs-toggle="tab" data-bs-target="#nav-content" type="button" role="tab" aria-controls="nav-content" aria-selected="false">Design & Content Creation</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-branding" role="tabpanel" aria-labelledby="nav-branding-tab">
                        <div class="container-fluid">
                            <div class="row">

                                @foreach($brandings as $branding)
                                    <div class="col-md-4 mt-5">
                                        <figure class="img-overlay d-inline-block">
                                            <img src="{{ voyager::image($branding->image) }}" class="img-fluid">
                                            <div class="img-hover">
                                                <span class="img-text"><a href="{{ route("port-folio-details",$branding->slug) }}" style="text-decoration:none;"><button class="btn btn-link btn-lg text-white">{{ $branding->title }}</button></a></span>
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
                                                <span class="img-text"><a href="{{ route("port-folio-details",$video->slug) }}" style="text-decoration:none;"><button class="btn btn-link btn-lg text-white"> {{ $video->excerp }}</button></a></span>
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
                                                <span class="img-text"><a href=" {{ route("port-folio-details",$design->slug) }} " style="text-decoration:none;"><button class="btn btn-link btn-lg text-white"> {{ $design->title }} </button></a></span>
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

    <!-- partners -->
    <section class="bg-dark text-white pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="fw-bolder display-4 mb-5">
                        We <span class="text-danger">partner</span> with you on your vision
                    </h2>

                    <a class="btn btn-lg btn-danger" data-toggle="modal" data-target="#Contact" href="#">Book a free call</a>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <p><img src="{{ asset('pixel-style/img/clients/franco.png') }}"  style="height:96px; width:auto;"> <img src="{{ asset('pixel-style/img/clients/bmcgroup.png') }}" class="ms-5 pt-2" style="height:70px; width:auto;">  <img src="{{ asset('pixel-style/img/clients/mabodile.png') }}" class="ms-5 pt-2" style="height:96px; width:auto;"> </p>
                </div>
            </div>
        </div>
    </section>
    <!-- partners end -->
    <section class="bg-grey pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="text-center mb-5 fw-bolder display-3">Kind words</h2>
            </div>
            <div class="row">
                <div class="col-md-4 mt-3">
                    <div class="card border-0 p-2">
                        <p class="text-center mt-3"><img src="{{ asset('pixel-style/img/profile.jpg') }}" class="rounded-circle card-img-top" style="height:96px; width: auto;"></p>
                        <p class="text-center">
                            Trust us, we spend thousands of dollars finding the right company till we met pixel, we are delighted to have them as our partner"
                        </p>
                        <p class="text-center text-muted"><span class="fw-bold">DA COSMOS</span> CEO of NWA</p>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="card border-0 p-2">
                        <p class="text-center mt-3"><img src="{{ asset('pixel-style/img/profile.jpg') }}" class="rounded-circle card-img-top" style="height:96px; width: auto;"></p>
                        <p class="text-center">
                            Trust us, we spend thousands of dollars finding the right company till we met pixel, we are delighted to have them as our partner"
                        </p>
                        <p class="text-center text-muted"><span class="fw-bold">DA COSMOS</span> CEO of NWA</p>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="card border-0 p-2">
                        <p class="text-center mt-3"><img src="{{ asset('pixel-style/img/profile.jpg') }}" class="rounded-circle card-img-top" style="height:96px; width: auto;"></p>
                        <p class="text-center">
                            Trust us, we spend thousands of dollars finding the right company till we met pixel, we are delighted to have them as our partner"
                        </p>
                        <p class="text-center text-muted"><span class="fw-bold">DA COSMOS</span> CEO of NWA</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- testimonials -->
    <!-- frequently asked questions -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="text-center fw-bolder display-3">Some questions you might have</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="accordion accordion-flush mt-5" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <h4 class="fw-bolder">How much does a Branding project cost?</h4>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">The cost of a branding project depends on the scope. Meaning, it depends on number of other assets we have to design to accompany the logo. 
                                to understand better please book a free call so that we can talk about it in more detail.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    <h4 class="fw-bolder">How much does a video commercial cost?</h4>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">To get a proper estimate for a video commercial we need to first have a concept and the logistics required to make the video come to life. 
                                Tell us your concept so that we can give you a proper estimate.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    <h4 class="fw-bolder">Is it possible to have a long term partnership with your studio?</h4>
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">It is very possible for us to have a long term partnership. Especially if you hire us as retainer produce content for your marketing regularly.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    <h4 class="fw-bolder">Do you Print?</h4>
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Yes we do print on request</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of faq-->



@endsection
