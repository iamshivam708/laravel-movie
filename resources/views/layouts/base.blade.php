<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Movie</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik&family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="/owl.carousel.min.css" rel="stylesheet" />
        <link href="/owl.theme.default.min.css" rel="stylesheet" />
    </head>
  <body>

    <!-- Header -->
    <div class="container-fluid bg-dark">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4 text-white" style="font-family: 'Rubik', sans-serif;">MovieTorrent</span>
            </a>

            <ul class="nav nav-pills" style="font-family: 'Rubik', sans-serif;">
                <li class="nav-item"><a href="/" class="nav-link text-white">Home</a></li>
                <li class="nav-item"><a href="/hollywood" class="nav-link text-white">Hollywood Movies</a></li>
                <li class="nav-item"><a href="/bollywood" class="nav-link text-white">Bollywood Movies</a></li>
                <li class="nav-item"><a href="/request" class="nav-link text-white">Request a Movie</a></li>
            </ul>
            </header>
        </div>
    </div>

    @yield('content')

    <!-- footer -->
    <div class="container-fluid bg-dark">
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3">
                <p class="col-md-4 mb-0 text-white" style="font-family: 'Rubik', sans-serif;">&copy; 2022 MovieTorrent, Inc</p>

                <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                </a>

                <ul class="nav col-md-4 justify-content-end" style="font-family: 'Rubik', sans-serif;">
                    <li class="nav-item"><a href="#" class="text-secondary"><i class="fa-brands fa-facebook fa-2x"></i></a></li>&nbsp;&nbsp;
                    <li class="nav-item"><a href="#" class="text-secondary"><i class="fa-brands fa-instagram fa-2x"></i></a></li>&nbsp;&nbsp;
                    <li class="nav-item"><a href="#" class="text-secondary"><i class="fa-brands fa-twitter fa-2x"></i></a></li>
                </ul>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            var one = $('#one');
            var two = $('#two');
            var three = $('#three');
            var screenshots = $('#screenshots');
            one.owlCarousel({
                autoplay:true,
                autoplayHoverPause:true,
                items:4,
                dots:true,
                lazyLoad:true,
                loop:true,
                autoplayTimeout:5000,
                responsive:{
                    0:{
                       items:1,
                       loop:true
                    },
                    485:{
                       items:2,
                       loop:true
                    },
                    728:{
                       items:3,
                       loop:true
                    },
                    960:{
                       items:3,
                       loop:true
                    },
                    1200:{
                       items:4,
                       loop:true
                    }
                }
            });
            two.owlCarousel({
                autoplay:true,
                autoplayHoverPause:true,
                items:4,
                dots:true,
                lazyLoad:true,
                loop:true,
                autoplayTimeout:5000,
                responsive:{
                    0:{
                       items:1,
                       loop:true
                    },
                    485:{
                       items:2,
                       loop:true
                    },
                    728:{
                       items:3,
                       loop:true
                    },
                    960:{
                       items:3,
                       loop:true
                    },
                    1200:{
                       items:4,
                       loop:true
                    }
                }
            });
            three.owlCarousel({
                autoplay:true,
                autoplayHoverPause:true,
                items:4,
                dots:true,
                lazyLoad:true,
                loop:true,
                autoplayTimeout:5000,
                responsive:{
                    0:{
                       items:1,
                       loop:true
                    },
                    485:{
                       items:2,
                       loop:true
                    },
                    728:{
                       items:3,
                       loop:true
                    },
                    960:{
                       items:3,
                       loop:true
                    },
                    1200:{
                       items:4,
                       loop:true
                    }
                }
            });
            screenshots.owlCarousel({
                autoplay:true,
                autoplayHoverPause:true,
                items:2,
                dots:false,
                lazyLoad:true,
                loop:true,
                autoplayTimeout:5000,
                responsive:{
                    0:{
                       items:1,
                       loop:true
                    },
                    485:{
                       items:2,
                       loop:true
                    },
                    728:{
                       items:2,
                       loop:true
                    },
                    960:{
                       items:2,
                       loop:true
                    },
                    1200:{
                       items:2,
                       loop:true
                    }
                }
            });
        })
    </script>
</body>
</html>
