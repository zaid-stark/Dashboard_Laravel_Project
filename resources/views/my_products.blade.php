@extends('layouts.main')
@section('main-section')

<style>
    .modal-dialog-centered {
        min-width: 800px !important;
    }

    @media only screen and (max-width:567px) {

        .modal-dialog-centered {
            min-width: 10vh !important;
        }
    }
</style>

<main id="main" class="main" style="background-color: #adacad1f; border-top-left-radius: 25px; ">

    <!-- Start Page Title -->
    <div class="pagetitle">
        <h1>Inventory</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Inventory</a></li>
                <li class="breadcrumb-item active">My Products</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
    <!-- Modal Forms Start -->

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">


        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content" style="background-color: #1212128f; color:white;">
                <div class="" style="margin: 0 12px;">
                    <div class="row p-2" style="background: linear-gradient(90deg, #d53369 0%, #daae51 100%); border-radius:5px 5px 0 0; ">
                        <div class="col-8 d-flex justify-content-start">
                            <h5 class="modal-title" id="exampleModalToggleLabel">Edit Your Choice</h5>
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <a href="" data-bs-dismiss="modal" aria-label="Close" style="text-decoration: none; color:#4d0215; font-size: 23px;"><i class="fa fa-window-close" aria-hidden="true"></i></a>
                        </div>
                    </div>

                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Username <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="recipient-name" style="background-color:#737171a8; color:white;">
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <label for="card" class="col-form-label">Id Card <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="card" style="background-color:#737171a8; color:white;">
                            </div>
                            <div class="col-8">
                                <label for="email" class="col-form-label">Your Email <span style="color:red;">*</span></label>
                                <input type="email" class="form-control" id="email" style="background-color:#737171a8; color:white;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="address" class="col-form-label">Address <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="address" style="background-color:#737171a8; color:white;">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="contact" class="col-form-label">Contact <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="contact" style="background-color:#737171a8; color:white;">
                            </div>
                            <div class="col-6">
                                <label for="alternate-contact" class="col-form-label">Alternate Contact <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="alternate-contact" style="background-color:#737171a8; color:white;">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="py-3 d-flex justify-content-center">
                    <button class="btn btn-primary " data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="bi bi-pencil-square me-2"></i>Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Forms Ends -->

    <div>



        <section class="section">
            <div>
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 7px !important;">
                        <div class="card-body row">
                            <div class="col-5 d-flex justify-content-start align-items-center mt-3">
                                <img src="assets/img/profile 1.jpeg" class="img-fluid rounded-start" alt="..." style="width:95px;height: 95px;border-radius: 5px;">
                            </div>
                            <div class="col-7 d-flex justify-content-end align-items-center">
                                <h5 class="card-title p-2">Dhokla</h5>
                                <h5 class="card-title p-2" style="color: green;">₹15.00</h5>
                                <a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="bi bi-pencil-square" style="color:#0D6EFD; font-size:30px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 7px !important;">
                        <div class="card-body row">
                            <div class="col-5 d-flex justify-content-start align-items-center mt-3">
                                <img src="assets/img/profile 1.jpeg" class="img-fluid rounded-start" alt="..." style="width:95px;height: 95px;border-radius: 5px;">
                            </div>
                            <div class="col-7 d-flex justify-content-end align-items-center">
                                <h5 class="card-title p-2">Kadhai Paneer</h5>
                                <h5 class="card-title p-2" style="color: green;">₹150.00</h5>
                                <a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="bi bi-pencil-square" style="color:#0D6EFD; font-size:30px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 7px !important;">
                        <div class="card-body row">
                            <div class="col-5 d-flex justify-content-start align-items-center mt-3">
                                <img src="assets/img/profile 1.jpeg" class="img-fluid rounded-start" alt="..." style="width:95px;height: 95px;border-radius: 5px;">
                            </div>
                            <div class="col-7 d-flex justify-content-end align-items-center">
                                <h5 class="card-title p-2">Shahi Paneer</h5>
                                <h5 class="card-title p-2" style="color: green;">₹170.00</h5>
                                <a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="bi bi-pencil-square" style="color:#0D6EFD; font-size:30px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 7px !important;">
                        <div class="card-body row">
                            <div class="col-5 d-flex justify-content-start align-items-center mt-3">
                                <img src="assets/img/profile 1.jpeg" class="img-fluid rounded-start" alt="..." style="width:95px;height: 95px;border-radius: 5px;">
                            </div>
                            <div class="col-7 d-flex justify-content-end align-items-center">
                                <h5 class="card-title p-2">Handi Paneer</h5>
                                <h5 class="card-title p-2" style="color: green;">₹195.00</h5>
                                <a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="bi bi-pencil-square" style="color:#0D6EFD; font-size:30px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 7px !important;">
                        <div class="card-body row">
                            <div class="col-5 d-flex justify-content-start align-items-center mt-3">
                                <img src="assets/img/profile 1.jpeg" class="img-fluid rounded-start" alt="..." style="width:95px;height: 95px;border-radius: 5px;">
                            </div>
                            <div class="col-7 d-flex justify-content-end align-items-center">
                                <h5 class="card-title p-2">Tandoori Naan</h5>
                                <h5 class="card-title p-2" style="color: green;">₹45.00</h5>
                                <a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="bi bi-pencil-square" style="color:#0D6EFD; font-size:30px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

@endsection
