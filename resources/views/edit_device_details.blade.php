@extends('layouts.main')
@section('main-section')
    <main id="main" class="main" style="background-color: #adacad1f; border-top-left-radius: 25px; ">

        <!-- Start Page Title -->
        <div class="pagetitle">
            <h1>Devices</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Devices</a></li>
                    <li class="breadcrumb-item active">Edit Device Details</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="d-flex justify-content-between pb-4">
                <h4 class="">Edit Device Details</h4>
            </div>
            <form>
                <div class="form-outline mb-3">
                    <select class="form-select" aria-label="Floating label select example">
                        <option selected>Device Model</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="device_name">Device Name</label>
                    <input type="text" id="device_name" class="form-control" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="pins">No. of Pins</label>
                    <input type="text" id="pins" class="form-control" />
                </div>

                <div class="form-outline mb-3">
                    <select class="form-select" aria-label="Floating label select example">
                        <option selected>Status</option>
                        <option value="1">Active</option>
                        <option value="2">In Active</option>
                    </select>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary text-center">Submit</button>
            </form>
        </section>
    </main>
@endsection
