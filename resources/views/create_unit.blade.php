@extends('layouts.main')
@section('main-section')
<style>
  .scrollbar {
    overflow-x: scroll;
    width: 90%
  }

  .scrollbar::-webkit-scrollbar {
    height: 7px;
  }

  .scrollbar::-webkit-scrollbar-track {
    border-radius: 10px;
    background: #EFF0EF;
    box-shadow: inset 0 0 6px rgb(0, 0, 0, 0.3);
  }

  .scrollbar::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background: -webkit-linear-gradient(top, #e72c83 20%, #a742c6 80%);
    background: linear-gradient(to bottom, #e72c83 30%, #a742c6 80%);
  }
</style>

<main id="main" class="main" style="background-color: #adacad1f; border-top-left-radius: 25px; ">
  <!-- Start Page Title -->

  <div class="pagetitle">
    <h1>Inventory</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Inventory</a></li>
            <li class="breadcrumb-item active">Create Unit</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<!-- Modal Forms Start -->

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content" style="background-color: #1212128f; color:white;">
            <div class="" style="margin: 0 12px;">
                <div class="row p-2"
                    style="background: linear-gradient(90deg, #d53369 0%, #daae51 100%); border-radius:5px 5px 0 0; ">
                    <div class="col-8 d-flex justify-content-start">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Edit Your Choice</h5>
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                        <a href="" data-bs-dismiss="modal" aria-label="Close"
                            style="text-decoration: none; color:#4d0215; font-size: 23px;"><i
                                class="fa fa-window-close" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Username <span
                                style="color:red;">*</span></label>
                        <input type="text" class="form-control" id="recipient-name"
                            style="background-color:#737171a8; color:white;">
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">
                            <label for="card" class="col-form-label">Id Card <span
                                    style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="card"
                                style="background-color:#737171a8; color:white;">
                        </div>
                        <div class="col-8">
                            <label for="email" class="col-form-label">Your Email <span
                                    style="color:red;">*</span></label>
                            <input type="email" class="form-control" id="email"
                                style="background-color:#737171a8; color:white;">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="address" class="col-form-label">Address <span
                                    style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="address"
                                style="background-color:#737171a8; color:white;">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="contact" class="col-form-label">Contact <span
                                    style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="contact"
                                style="background-color:#737171a8; color:white;">
                        </div>
                        <div class="col-6">
                            <label for="alternate-contact" class="col-form-label">Alternate Contact <span
                                    style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="alternate-contact"
                                style="background-color:#737171a8; color:white;">
                        </div>
                    </div>
                </form>
            </div>
            <div class="py-3 d-flex justify-content-center">
                <button class="btn btn-primary " data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                    data-bs-dismiss="modal"><i class="bi bi-pencil-square me-2"></i>Update</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Forms Ends -->

<div>

    <div class="card">
        <div class="card-body pt-4">

            <!-- General Form Elements -->
            <form>
                <div class="mb-3">
                    <div>
                        <input type="text" class="form-control" placeholder="Product Name">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i>
                            Create</button>
                    </div>
                </div>
            </form><!-- End General Form Elements -->

            <section class="section">
                <div>
                    <div class="col-lg-12">
                        <div class="card" style="border-radius: 7px !important;">
                            <div class="card-body row">
                                <div class="col-6">
                                    <h5 class="card-title">Pcs</h5>
                                </div>
                                <div class="col-6 d-flex justify-content-end align-items-center"
                                    style="font-size:30px; color:#0D6EFD; padding-right:40px">
                                    <a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i
                                            class="bi bi-pencil-square" style="color:#0D6EFD;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-lg-12">
                        <div class="card" style="border-radius: 7px !important;">
                            <div class="card-body row">
                                <div class="col-6">
                                    <h5 class="card-title">Grams</h5>
                                </div>
                                <div class="col-6 d-flex justify-content-end align-items-center"
                                    style="font-size:30px; color:#0D6EFD; padding-right:40px">
                                    <a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i
                                            class="bi bi-pencil-square" style="color:#0D6EFD;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-lg-12">
                        <div class="card" style="border-radius: 7px !important;">
                            <div class="card-body row">
                                <div class="col-6">
                                    <h5 class="card-title">Pack</h5>
                                </div>
                                <div class="col-6 d-flex justify-content-end align-items-center"
                                    style="font-size:30px; color:#0D6EFD; padding-right:40px">
                                    <a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i
                                            class="bi bi-pencil-square" style="color:#0D6EFD;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-lg-12">
                        <div class="card" style="border-radius: 7px !important;">
                            <div class="card-body row">
                                <div class="col-6">
                                    <h5 class="card-title">Carton</h5>
                                </div>
                                <div class="col-6 d-flex justify-content-end align-items-center"
                                    style="font-size:30px; color:#0D6EFD; padding-right:40px">
                                    <a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i
                                            class="bi bi-pencil-square" style="color:#0D6EFD;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-lg-12">
                        <div class="card" style="border-radius: 7px !important;">
                            <div class="card-body row">
                                <div class="col-6">
                                    <h5 class="card-title">Kg</h5>
                                </div>
                                <div class="col-6 d-flex justify-content-end align-items-center"
                                    style="font-size:30px; color:#0D6EFD; padding-right:40px">
                                    <a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i
                                            class="bi bi-pencil-square" style="color:#0D6EFD;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

</div>

</main>
@endsection
