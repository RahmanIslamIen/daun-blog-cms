@extends('layouts.app')

@section('content')
    <div class="tajuk_blog" style="height: 240px; width: 100%; background: teal; margin-top: -25px; padding: 60px">
        <center>
            <h1>Blog Laravel Bagus</h1>
            <p>selamat datang di blog saya dengan konten menyegarkan</p>
        </center>
    </div>

    <div class="promosi-dan-pencharian" style="width: 100%; background: #FF4949; height: 60px;">
        <form class="d-flex" style="float: right; margin: 10px;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>

    @foreach ($posts as $item)
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card" style="margin: 10px;">
                    <div class="card-body">
                        <h3 class="card-title">{{ $item->title }}</h3>
                        <span class="badge rounded-pill bg-success">{{ $item->kategori }}</span>
                        <p>{{ $item->penulis }}</p>
                        <h5>{{ $item->tanggal }}</h5>
                        <p class="card-text">{{ $item->excerpt }}</p>
                        <a href="/post/{{ $item->id }}">Lihat artikel...</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- styling global -->
    <style>
        a {
            text-decoration: none;
        }

        li a {
            color: white;
        }

    </style>

    <!-- Footer -->
    <footer class="page-footer font-small pt-4" style="background-color: #247881; margin-bottom: -24px">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
                    <!-- Content -->
                    <h5 class="text-uppercase">Footer Content</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, consectetur?</p>
                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none pb-3">
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">Bantuan</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">Social Media</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>

        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="background-color: #005555;">© 2020 Copyright:
            <a href="/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
@endsection
