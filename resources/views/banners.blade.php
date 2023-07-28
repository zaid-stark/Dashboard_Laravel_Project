@extends('layouts.main')
@section('main-section')

<style>
    .nav-item .active {
        font-weight: bold;
        background: #000;
        -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2) inset;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2) inset;
        border: 1px solid red;
    }
</style>

<main id="main" class="main" style="background-color: #adacad1f; border-top-left-radius: 25px; ">

    <!-- Start Page Title -->
    <div class="pagetitle">
        <h1>Settings</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Settings</a></li>
                <li class="breadcrumb-item active">Banners</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered mt-2" id="borderedTab" role="tablist" style="border-bottom: 2px solid #a3bceda8;">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="banner_1" data-bs-toggle="tab" data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home" aria-selected="true">Banner 1</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="banner_2" data-bs-toggle="tab" data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Banner 2</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="banner_3" data-bs-toggle="tab" data-bs-target="#bordered-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Banner 3</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="banner_4" data-bs-toggle="tab" data-bs-target="#banner_4_target" type="button" role="tab" aria-controls="banner4" aria-selected="false">Banner 4</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="banner_5" data-bs-toggle="tab" data-bs-target="#banner_5_target" type="button" role="tab" aria-controls="banner5" aria-selected="false">Banner 5</button>
                </li>
            </ul>
            <div class="tab-content pt-2" id="borderedTabContent">
                <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="banner_1">
                    <div class="row">
                        <div class="mt-3 d-flex justify-content-center">
                            <img src="https://smartbilling.org.in/smart_billing/banners_img/99a98b3daccc7cccfc024bb129d8a92f1633424187qrmenu.jpg" alt="" style="width: 350px; height:100%; object-fit:cover; border-radius:10px;">
                        </div>
                    </div>
                    <form action="">
                        <div class="row mb-3">

                            <div class="col-sm-12">
                                <label class="py-2" for="banner 1">Banner 1</label>
                                <input type="file" class="form-control" id="banner 1">
                            </div>
                        </div>

                        <div class="row " style="padding-bottom: 200px;">

                            <div class="col-sm-12 text-center pt-4">
                                <button type="submit" class="btn btn-primary "><i class="bi bi-pencil-square pe-2"></i>Update</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="banner_2">
                    <div class="row">
                        <div class="mt-3 d-flex justify-content-center">
                            <img src="https://smartbilling.org.in/smart_billing/banners_img/e80fe44bbd54cf1f0e5e3b5852085fe91635491775banner4.jpg" alt="" style="width: 350px; height:100%; object-fit:cover; border-radius:10px;">
                        </div>
                    </div>
                    <form action="">
                        <div class="row mb-3">

                            <div class="col-sm-12">
                                <label class="py-2" for="banner 1">Banner 2</label>
                                <input type="file" class="form-control" id="banner 1">
                            </div>
                        </div>

                        <div class="row " style="padding-bottom: 200px;">

                            <div class="col-sm-12 text-center pt-4">
                                <button type="submit" class="btn btn-primary "><i class="bi bi-pencil-square pe-2"></i>Update</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="bordered-contact" role="tabpanel" aria-labelledby="banner_3">
                    <div class="row">
                        <div class="mt-3 d-flex justify-content-center">
                            <img src="https://smartbilling.org.in/smart_billing/banners_img/99a98b3daccc7cccfc024bb129d8a92f1633424187qrmenu.jpg" alt="" style="width: 350px; height:100%; object-fit:cover; border-radius:10px;">
                        </div>
                    </div>
                    <form action="">
                        <div class="row mb-3">

                            <div class="col-sm-12">
                                <label class="py-2" for="banner 1">Banner 3</label>
                                <input type="file" class="form-control" id="banner 1">
                            </div>
                        </div>

                        <div class="row " style="padding-bottom: 200px;">

                            <div class="col-sm-12 text-center pt-4">
                                <button type="submit" class="btn btn-primary "><i class="bi bi-pencil-square pe-2"></i>Update</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="banner_4_target" role="tabpanel" aria-labelledby="banner_4">
                    <div class="row">
                        <div class="mt-3 d-flex justify-content-center">
                            <img src="https://smartbilling.org.in/smart_billing/banners_img/34dfdf4a87b8b24c9bb7ac8570196a30163248894019a.jpg" alt="" style="width: 350px; height:100%; object-fit:cover; border-radius:10px;">
                        </div>
                    </div>
                    <form action="">
                        <div class="row mb-3">

                            <div class="col-sm-12">
                                <label class="py-2" for="banner 1">Banner 4</label>
                                <input type="file" class="form-control" id="banner 1">
                            </div>
                        </div>

                        <div class="row " style="padding-bottom: 200px;">

                            <div class="col-sm-12 text-center pt-4">
                                <button type="submit" class="btn btn-primary "><i class="bi bi-pencil-square pe-2"></i>Update</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="banner_5_target" role="tabpanel" aria-labelledby="banner_5">
                    <div class="row">
                        <div class="mt-3 d-flex justify-content-center">
                            <img src="https://smartbilling.org.in/smart_billing/banners_img/4c9320b525b27d51e31157e1f049a1ca163248909524a.jpg" alt="" style="width: 350px; height:100%; object-fit:cover; border-radius:10px;">
                        </div>
                    </div>
                    <form action="">
                        <div class="row mb-3">

                            <div class="col-sm-12">
                                <label class="py-2" for="banner 1">Banner 5</label>
                                <input type="file" class="form-control" id="banner 1">
                            </div>
                        </div>

                        <div class="row " style="padding-bottom: 200px;">

                            <div class="col-sm-12 text-center pt-4">
                                <button type="submit" class="btn btn-primary "><i class="bi bi-pencil-square pe-2"></i>Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- End Bordered Tabs -->

        </div>
    </div>
</main>


@endsection
