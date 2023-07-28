@extends('layouts.main')
@section('main-section')

<main id="main" class="main" style="background-color: #adacad1f; border-top-left-radius: 25px; ">

    <!-- Start Page Title -->
    <div class="pagetitle">
        <h1>Settings</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Settings</a></li>
                <li class="breadcrumb-item active">My Info</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div>
                <div class="card mt-4">
                    <div class="card-body pt-4">

                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Business Name">
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Contact No.1">
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Contact No.2">
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Contact No.3">
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="col-sm-12">
                                    <input type="email" class="form-control" placeholder="Contact Email">
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Address Line 1*">
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Geo Location URL*">
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Payment URL*">
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Dynamic QR">
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Terms & Conditions">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Menu Color</option>
                                        <option value="1" style="color:red">Red</option>
                                        <option value="2" style="color:orange">Orange</option>
                                        <option value="3" style="color:yellow">Yellow</option>
                                        <option value="4" style="color:green">Green</option>
                                        <option value="5" style="color:pink">Pink</option>
                                        <option value="6" style="color:purple">Purple</option>
                                        <option value="7" style="color:blue">Blue</option>
                                        <option value="8" style="color:indigo">Indigo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Allow Negative Sale</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Include Product Tax</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12 text-center pt-4">
                                    <button type="submit" class="btn btn-primary "><i class="bi bi-pencil-square pe-2"></i>Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
