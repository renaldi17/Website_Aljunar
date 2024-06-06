<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Summernote CSS di antara Head--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
</head>
<body>

<!-- Navbar -->
    @include('navbar')
    
<!-- Content -->
    @yield('content')


<!-- Footer -->
    <section id="footer" class="bg-green">
            <div class="container py-5">
                <footer>
                <div class="row">
                    <!-- nav -->
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb3">Navigasi</h5>
                        <div class="d-flex ">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Profil</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Kurikulum</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Esktrakulikuler</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Fasilitas</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Karya</a>
                                </li>
                            </ul>
                            <ul class="nav flex-column me-5">
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">Mading</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">Aduan</a>
                            </li>
                        </ul>
                        </div>
                    </div>

                    <!-- sosmed -->
                    <div class="col-12 col-md-3 mb-3">
                    <h5 class="fw-bold mb-3">Follow Kami</h5>
                    <div class="d-flex mb-3">
                        <a href="" target="_blank" class="text-decoration-none text-dark">
                        <img src="" height="30" width="30" class="me-4" alt="">
                        </a>
                        <a href="" target="_blank" class="text-decoration-none text-dark">
                        <img src="" height="30" width="30" class="me-4" alt="">
                        </a>
                        <a href="" target="_blank" class="text-decoration-none text-dark">
                        <img src="" height="30" width="30" class="me-4" alt="">
                        </a>
                    </div>
                    </div>

                    <!-- kontak -->
                    <div class="col-12 col-md-3 mb-3">
                    <h5 class="font-inter fw-bold mb-3">Kontak Kami</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="" class="nav-link p-0 text-muted">sdaljunar@gmail.com</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="" class="nav-link p-0 text-muted">021-XXX-XXX</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="" class="nav-link p-0 text-muted">021-XXX-XXX</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="" class="nav-link p-0 text-muted">+62 8XX XXXX XXXX</a>
                        </li>
                    </ul>
                    </div>

                    <!-- alamat -->
                    <div class="col-12 col-md-3 mb-3">
                    <h5 class="font-inter fw-bold mb-3">Alamat Sekolah</h5>
                    <p>Jl. Ujung Berung, No. 115, Bandung, Jawa Barat.</p>
                    </div>

                </div>
                </footer>
            </div>
        </section>
<!-- Fotter 2 -->
        <section class="bg-light border-top">
            <div class="container py-4">
                <div class="d-flex justify-content-between">
                <div>
                    SD Al-Junar
                </div>
                <div class="d-flex">
                    <p class="me-4">Syarat & Ketentuan</p>
                    <p>
                    <a href="" class="text-decoration-none text-dark">Kebijakan Privacy</a>
                    </p>
                </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script>
        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () =>{
            if (window.scrollY > 100) {
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
                // navbar.classList.remove("navbar-dark");
            } else {
                navbar.classList.remove("scroll-nav-active");
                // navbar.classList.add("navbar-dark");
            }
        };
        </script>

        {{-- JQUERY --}}
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
        {{-- Summernote JS --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>


        <script>
        $(document).ready(function() {
                $('#summernote').summernote({
                    height: 200,
                });
        });
        </script>
    </body>
</html>