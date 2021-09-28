@extends('layouts.app')

@section('content')

    <section class="pt-lg-5 pb-lg-2 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><h2 class="display-3 fw-bolder mt-5">About us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-5">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About us</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>
    </div>


    <!--- section 1 -->
    <section class="pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="fw-bolder">A team of passionate creatives to serve your brand</h2>
                    <p class="text-muted ">Our agency is made up of young talented personel who have dept in their various areas of expertise
                        . They are our secret weapon in delivering content or design of world class standard</p>
                </div>
                <div class="col-md-4"><img src="{{ asset('pixel-style/img/team/team.jpg') }}" class="img-fluid"> </div>
                <div class="col-md-4"><img src="{{ asset('pixel-style/img/team/team-02.jpg') }}" class="img-fluid"> </div>
            </div>
        </div>
    </section>
    <!--  section 1 -->


    <section class="pt-5 pb-3" style="height:60vh; background-image:url('{{ asset('pixel-style/img/team/team-01.jpg') }}'); background-size:cover; background-repeat:no-repeat; background-attachment:fixed;">
        <div class=" container">
            <div class="row justify-content-center pt-lg-5">
                <div class="col-md-8">
                    <h3 class="text-center text-white">
                        As a creative agency we strive to find innovative ways to put the message of our clients out there. we ask ourselves what can we contribute to make our clients succeed in their advertising campaigns or branding. And it's through team work and pushing the boundaries of our creativity that we can come up with great ideas that will serve our clients' dream.
                    </h3>
                </div>
            </div>

        </div>
    </section>

    <section class="pt-5 pb-3 bg-grey">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-6">
                    <h3 class="text-center display-3 fw-bolder">Meet the team</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="card" style="width:18rem;">
                        <div class="card-header border-0">
                            <img src="{{ asset('pixel-style/img/team/team-dereck.jpeg') }}" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h4 class="text-center fw-bolder">Derek Agendia</h4>
                            <p class="text-center text-muted">Director</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width:18rem;">
                        <div class="card-header border-0">
                            <img src="{{ asset('pixel-style/img/team/team-sandrine.jpeg') }}" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h4 class="text-center fw-bolder">Sandrine Koko</h4>
                            <p class="text-center text-muted">Graphic Designer</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width:18rem;">
                        <div class="card-header border-0">
                            <img src="{{ asset('pixel-style/img/team/team-deshnic.jpeg') }}" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h4 class="text-center fw-bolder">Nkwenti Deshnic</h4>
                            <p class="text-center text-muted">Lead Videographer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width:18rem;">
                        <div class="card-header border-0">
                            <img src="{{ asset('pixel-style/img/team/team-cyprian.jpeg') }}" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h4 class="text-center fw-bolder">Nziim Cyprian</h4>
                            <p class="text-center text-muted">Project manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
