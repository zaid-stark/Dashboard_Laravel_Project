@extends('layouts.main')
@section('main-section')

<main id="main" class="main" style="background-color: #adacad1f; border-top-left-radius: 25px; ">

    <!-- Start Page Title -->
    <div class="pagetitle">
        <h1>POS</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">POS</a></li>
                <li class="breadcrumb-item active">POS Returns</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">

        <div class="card">
            <div class="card-body" style="overflow-x: auto;">
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th scope="col">S No.</th>
                            <th scope="col">Invoice No</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>16672591</td>
                            <td>₹ 567.00</td>
                            <td>2016-05-25</td>
                            <td><span style="color:#0D6EFD;"> <i class="bi bi-printer" style="font-size: 20px;"></i></span></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>1667259129080g6kty21sya</td>
                            <td>₹ 567.00</td>
                            <td>2014-12-05</td>
                            <td><span style="color:#0D6EFD;"> <i class="bi bi-printer" style="font-size: 20px;"></i></span></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>1667259129080g6kty21sya</td>
                            <td>₹ 567.00</td>
                            <td>2011-08-12</td>
                            <td><span style="color:#0D6EFD;"> <i class="bi bi-printer" style="font-size: 20px;"></i></span></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>1667259129080g6kty21sya</td>
                            <td>₹ 567.00</td>
                            <td>2012-06-11</td>
                            <td><span style="color:#0D6EFD;"> <i class="bi bi-printer" style="font-size: 20px;"></i></span></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>1667259129080g6kty21sya</td>
                            <td>₹ 567.00</td>
                            <td>2011-04-19</td>
                            <td><span style="color:#0D6EFD;"> <i class="bi bi-printer" style="font-size: 20px;"></i></span></td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>1667259129080g6kty21sya</td>
                            <td>₹ 567.00</td>
                            <td>2011-04-19</td>
                            <td><span style="color:#0D6EFD;"> <i class="bi bi-printer" style="font-size: 20px;"></i></span></td>
                        </tr>
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->
            </div>
        </div>
    </section>
</main>

@endsection
