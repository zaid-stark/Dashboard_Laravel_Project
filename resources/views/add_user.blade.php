@extends('layouts.main')
@section('main-section')

<main id="main" class="main" style="background-color: #adacad1f; border-top-left-radius: 25px; ">

    <!-- Start Page Title -->
    <div class="pagetitle">
        <h1>Settings</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Settings</a></li>
                <li class="breadcrumb-item active">Add User</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body pt-4">

                    <!-- General Form Elements -->
                    <form>
                        <div class="row mb-3">

                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Login Username*">
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Address Line 1*">
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Address Line 2*">
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Address Line 3*">
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Contact No.*">
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Country*">
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-12">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Discount*</option>
                                    <option value="1">5</option>
                                    <option value="2">10</option>
                                    <option value="3">15</option>
                                    <option value="4">20</option>
                                    <option value="5">25</option>
                                    <option value="6">30</option>
                                    <option value="7">35</option>
                                    <option value="8">40</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-12 text-center pt-4">
                                <button type="submit" class="btn btn-primary "><i class="bi bi-plus-square-fill pe-2"></i>Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection
