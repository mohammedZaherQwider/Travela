@extends('new.layout')
@section('con')
    </div>
    <!-- Navbar & Hero End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Our Gallery</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Gallery</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Gallery Start -->
    <div class="container-fluid gallery py-5 my-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Our Gallery</h5>
            <h1 class="mb-4">Tourism & Traveling Gallery.</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto
                doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum
                cum repellat a laborum quasi.
            </p>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill"
                        href="#GalleryTab-1">
                        <span class="text-dark" style="width: 150px;">All</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                        href="#GalleryTab-2">
                        <span class="text-dark" style="width: 150px;">World tour</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                        href="#GalleryTab-3">
                        <span class="text-dark" style="width: 150px;">Ocean Tour</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                        href="#GalleryTab-4">
                        <span class="text-dark" style="width: 150px;">Summer Tour</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                        href="#GalleryTab-5">
                        <span class="text-dark" style="width: 150px;">Sport Tour</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-1.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-1.jpg') }}" data-lightbox="gallery-1"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-2.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-2.jpg') }}" data-lightbox="gallery-2"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-3.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-3.jpg') }}" data-lightbox="gallery-3"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-4.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-4.jpg') }}" data-lightbox="gallery-4"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-5.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-5.jpg') }}" data-lightbox="gallery-5"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-6.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-6.jpg') }}" data-lightbox="gallery-6"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-7.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-7.jpg') }}" data-lightbox="gallery-7"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-8.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-8.jpg') }}" data-lightbox="gallery-8"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-9.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-9.jpg') }}" data-lightbox="gallery-9"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-10.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-10.jpg') }}" data-lightbox="gallery-10"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GalleryTab-2" class="tab-pane fade show p-0">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-2.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-2.jpg') }}" data-lightbox="gallery-2"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-3.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-3.jpg') }}" data-lightbox="gallery-3"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GalleryTab-3" class="tab-pane fade show p-0">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-2.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-2.jpg') }}" data-lightbox="gallery-2"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-3.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-3.jpg') }}" data-lightbox="gallery-3"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GalleryTab-4" class="tab-pane fade show p-0">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-2.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-2.jpg') }}" data-lightbox="gallery-2"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-3.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-3.jpg') }}" data-lightbox="gallery-3"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GalleryTab-5" class="tab-pane fade show p-0">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-2.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-2.jpg') }}" data-lightbox="gallery-2"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery-3.jpg') }}" class="img-fluid w-100 h-100 rounded"
                                    alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/img/gallery-3.jpg') }}" data-lightbox="gallery-3"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Subscribe Start -->
    <div class="container-fluid subscribe py-5">
        <div class="container text-center py-5">
            <div class="mx-auto text-center" style="max-width: 900px;">
                <h5 class="subscribe-title px-3">Subscribe</h5>
                <h1 class="text-white mb-4">Our Newsletter</h1>
                <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam,
                    architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat
                    corrupti eum cum repellat a laborum quasi.
                </p>
                <div class="position-relative mx-auto">
                    <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->
@endsection
{{--  --}}
