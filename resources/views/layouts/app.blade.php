<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('pixel-style/img/logo/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <!-- Fonts -->
    <link rel="preconnects" href="https://fonts.gstatic.com">
    <script
        src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link href="{{ asset('pixel-style/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pixel-style/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('pixel-style/css/custom.css') }}" rel="stylesheet">


    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <title>Pixel Design Agency | {{ $title }}</title>
    <script src="https://unpkg.com/feather-icons"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset("pixel-style/img/logo/pixelLogo.png") }}" height="50px" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bolder">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Branding and Packaging</a></li>
                        <li><a class="dropdown-item" href="#">Video Commercial</a></li>
                        <li><a class="dropdown-item" href="#">Content creation</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('port-folio') ? 'active' : '' }}" href="{{ route('port-folio') }}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-danger" data-toggle="modal" data-target="#Contact" href="#">Book a free call</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

    <!-- Modal contact -->

    <div class="modal fade" id="Contact" tabindex="-1" aria-labelledby="ContactLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ContactLabel">Contack Us</h5>
            </div>
            <div class="modal-body">
              <form action="{{ route("contact") }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Full Name:</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="full-name" name="name" value=" {{ old('name')}} ">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label" value=" {{ old('email')}} ">Email:</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="recipient-name" name="email">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea class="form-control @error('message') is-invalid @enderror" id="message-text" name="message"></textarea>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Send message</button>
            </div>
        </form>
          </div>
        </div>
      </div>
            <!--End Modal contact -->

<footer class="pt-5 pb-2 bg-dark text-muted">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 class="fw-bolder text-danger">PIXEL</h2>
                <p>reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <ul class="list-unstyled">
                    <li class="list-inline-item"><a href="#" class="text-muted"><i data-feather="facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted"><i data-feather="instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted"><i data-feather="linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 class="fw-bold ps-2">Links</h4>
                <ul class="  list-unstyled">
                    <li class=""><a href=" {{ route("about") }} " class="nav-link text-muted">About</a></li>
                    <li class=""><a href=" {{ route("port-folio") }} " class="nav-link text-muted">Portfolio</a></li>
                    <li class=""><a href=" {{ route("blog") }} " class="nav-link text-muted">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 class="fw-bold">Contacts</h4>
                <ul class="  list-unstyled">
                    <li class="">Tel:
                    </li>
                    <li>Mail:</li>

                    <li class="">Obili GlobexCam Building
                        Opposite GP Melen,
                        BP: 163224 Yde
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 class="fw-bold ps-2">Instagram feed</h4>

            </div>

        </div>


    </div>

</footer>
<!-- copyright -->
<section class="pt-2 pb-1 bg-darker row justify-content-center">
    <div class="col-md-6">
        <p class="text-muted text-center" style="font-size:10pt;">© <script type="text/javascript">
                document.write(new Date().getFullYear());
            </script> Pixel Agency; a GlobexCam Group company</p>
    </div>
</section>



<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="{{ asset('pixel-style/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('pixel-style/js/popper.min.js') }}"></script>
<script src="{{ asset('pixel-style/js/aos.js') }}"></script>

<script>
    feather.replace()
</script>
<script>
    AOS.init();
</script>

<script>
    feather.replace();

    @if(session()->has('message'))
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr.success("{{ session('message') }}");
    @endif
</script>

@yield('js')

</body>
</html>

