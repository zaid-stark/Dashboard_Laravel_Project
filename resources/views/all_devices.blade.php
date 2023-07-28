@extends('layouts.main')
@section('main-section')
    <main id="main" class="main" style="background-color: #adacad1f; border-top-left-radius: 25px; ">

        <!-- Start Page Title -->
        <div class="pagetitle">
            <h1>Devices</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Devices</a></li>
                    <li class="breadcrumb-item active">All Device Details</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="d-flex justify-content-between">
                <h4 class="">All Device Details</h4>
                <a href="{{ url('/add_device_details')}}" class="text-decoration-none"> <span style="background: #0d6efd; padding: 10px; border-radius: 6px; color: #fff;">Add Device Details</span></a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Device Model</th>
                        <th scope="col">Device Name</th>
                        <th scope="col">No. of Pins</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p class="text-center m-0">Are You Sure Want to Delete</p>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button type="button"
                                                    data-mdb-dismiss="modal" style="background: red; padding: 5px; border-radius: 6px; color: #fff; border:none;">Cancel</button>
                                                <button type="button" style="background: #0d6efd; padding: 5px 10px; border-radius: 6px; color: #fff; border:none;">Yes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{url('/edit_device_details')}}" class="text-decoration-none"
                                    style="background: gainsboro;
                                    padding: 9px 8px 5px;
                                    border-radius: 5px;
                                    color: green;"><i class="far fa-pen-to-square"
                                        style="font-size: 25px;"></i></a>
                                <a href="#" class="text-decoration-none" style="background: gainsboro; padding: 9px 8px 5px; border-radius: 5px; color: red;"><i
                                        class="fas fa-trash" data-mdb-toggle="modal"
                                        data-mdb-target="#exampleModal" style="font-size: 25px;"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <div>
                                <a href="{{url('/edit_device_details')}}" class="text-decoration-none"
                                    style="background: gainsboro;
                                    padding: 9px 8px 5px;
                                    border-radius: 5px;
                                    color: green;"><i class="far fa-pen-to-square"
                                        style="font-size: 25px;"></i></a>
                                <a href="" class="text-decoration-none" data-mdb-toggle="modal"
                                    data-mdb-target="#exampleModal" style="background: gainsboro;
                                    padding: 9px 8px 5px;
                                    border-radius: 5px;
                                    color: red;"><i
                                        class="fas fa-trash" style="font-size: 25px;"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <div>
                                <a href="{{url('/edit_device_details')}}" class="text-decoration-none"
                                    style="background: gainsboro;
                                    padding: 9px 8px 5px;
                                    border-radius: 5px;
                                    color: green;"><i class="far fa-pen-to-square"
                                        style="font-size: 25px;"></i></a>
                                <a href="" class="text-decoration-none" data-mdb-toggle="modal"
                                    data-mdb-target="#exampleModal" style="background: gainsboro;
                                    padding: 9px 8px 5px;
                                    border-radius: 5px;
                                    color: red;"><i
                                        class="fas fa-trash" style="font-size: 25px;"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>
                            <div>
                                <a href="{{url('/edit_device_details')}}" class="text-decoration-none"
                                    style="background: gainsboro;
                                    padding: 9px 8px 5px;
                                    border-radius: 5px;
                                    color: green;"><i class="far fa-pen-to-square"
                                        style="font-size: 25px;"></i></a>
                                <a href="" class="text-decoration-none" data-mdb-toggle="modal"
                                    data-mdb-target="#exampleModal" style="background: gainsboro;
                                    padding: 9px 8px 5px;
                                    border-radius: 5px;
                                    color: red;"><i
                                        class="fas fa-trash" style="font-size: 25px;"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Thornton</td>
                        <td>@twitter</td>
                        <td>
                            <div>
                                <a href="{{url('/edit_device_details')}}" class="text-decoration-none"
                                    style="background: gainsboro;
                                    padding: 9px 8px 5px;
                                    border-radius: 5px;
                                    color: green;"><i class="far fa-pen-to-square"
                                        style="font-size: 25px;"></i></a>
                                <a href="" class="text-decoration-none" data-mdb-toggle="modal"
                                    data-mdb-target="#exampleModal" style="background: gainsboro;
                                    padding: 9px 8px 5px;
                                    border-radius: 5px;
                                    color: red;"><i
                                        class="fas fa-trash" style="font-size: 25px;"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
@endsection
