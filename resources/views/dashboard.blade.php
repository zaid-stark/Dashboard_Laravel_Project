@extends('layouts.main')
@section('main-section')
    <style>
        h3.device {
            font-weight: 600;
        }

        .nav-tabs {
            border: none;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #33b978 !important;
            border-color: #33b978 !important;
            background: none;
        }

        .nav-tabs .nav-link {
            font-weight: 600;
            font-size: 18px;
            color: #000000b8;
            --mdb-nav-tabs-link-padding-top: 17px;
            --mdb-nav-tabs-link-padding-bottom: 10px;
            --mdb-nav-tabs-link-padding-x: 23px;
            --mdb-nav-tabs-link-hover-bgc: #f7f7f7;
            --mdb-nav-tabs-link-border-bottom-width: 4px;
            --mdb-nav-tabs-link-active-color: #da16c1;
            --mdb-nav-tabs-link-active-border-color: #3b71ca;
            border-width: 0;
            border-bottom: var(--mdb-nav-tabs-link-border-bottom-width) solid transparent;
            text-transform: capitalize;
            padding: var(--mdb-nav-tabs-link-padding-top) var(--mdb-nav-tabs-link-padding-x) var(--mdb-nav-tabs-link-padding-bottom) var(--mdb-nav-tabs-link-padding-x);
        }

        span.slider {
            font-size: 21px;
            font-weight: 500;
        }

        .PB-range-slider {
            -webkit-appearance: none;
            width: 100%;
            height: 4px;
            border-radius: 5px;
            background: #00000099;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
            cursor: pointer;
        }

        .PB-range-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #000000;
            cursor: pointer;
            transition: 0.3s ease-in-out;
        }

        .PB-range-slider::-webkit-slider-thumb:hover {
            box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.16);
            transition: 0.3s ease-in-out;
        }

        .PB-range-slider::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #000000;
            cursor: pointer;
        }

        .PB-range-slider-div {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .PB-range-slidervalue {
            font-weight: 600;
            font-size: 22px;
            margin: 0;

        }

        /* CSS for Toggle Switch  */
        /* Genel stil */
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 40px;
            height: 24px;
            margin: 10px 0 0;
        }

        /* Giriş stil */
        .toggle-switch .toggle-input {
            display: none;
        }

        /* Anahtarın stilinin etrafındaki etiketin stil */
        .toggle-switch .toggle-label {
            position: absolute;
            top: 0;
            left: 0;
            width: 45px;
            height: 27px;
            background-color: #cccecf;
            border-radius: 34px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        /* Anahtarın yuvarlak kısmının stil */
        .toggle-switch .toggle-label::before {
            content: "";
            position: absolute;
            width: 23px;
            height: 22px;
            border-radius: 50%;
            top: 2px;
            left: 2px;
            background-color: #fff;
            box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s;
        }

        /* Anahtarın etkin hale gelmesindeki stil değişiklikleri */
        .toggle-switch .toggle-input:checked+.toggle-label {
            background-color: #33b978;
        }

        .toggle-switch .toggle-input:checked+.toggle-label::before {
            transform: translateX(18px);
        }

        /* Light tema */
        .toggle-switch.light .toggle-label {
            background-color: #BEBEBE;
        }

        .toggle-switch.light .toggle-input:checked+.toggle-label {
            background-color: #9B9B9B;
        }

        .toggle-switch.light .toggle-input:checked+.toggle-label::before {
            transform: translateX(6px);
        }

        /* Dark tema */
        .toggle-switch.dark .toggle-label {
            background-color: #4B4B4B;
        }

        .toggle-switch.dark .toggle-input:checked+.toggle-label {
            background-color: #717171;
        }

        .toggle-switch.dark .toggle-input:checked+.toggle-label::before {
            transform: translateX(16px);
        }

        .accordion-button {
            font-weight: 700;
        }

        .accordion-button:not(.collapsed) {
            color: #33b978;
            background-color: #68b9782e;
            border-left: 5px solid #33b978;
            border-radius: 0px;
        }
    </style>
    <main id="main" class="main" style="background-color: #adacad1f; border-top-left-radius: 25px;">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Admin</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="">
            <h3 class="device">My First Device</h3>
            <!-- Tabs navs -->
            <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                <div class="d-flex" style="overflow-x: auto; overflow-y: hidden;">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="Report-1" data-mdb-toggle="tab" href="#Report" role="tab"
                            aria-controls="Report" aria-selected="true">Report</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="Current-1" data-mdb-toggle="tab" href="#Current" role="tab"
                            aria-controls="Current" aria-selected="false">Current</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="Readings-1" data-mdb-toggle="tab" href="#Readings" role="tab"
                            aria-controls="Readings" aria-selected="false">Readings</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="Past_Log-1" data-mdb-toggle="tab" href="#Past_Log" role="tab"
                            aria-controls="Past_Log" aria-selected="false">Past Log</a>
                    </li>
                </div>
            </ul>
            <!-- Tabs navs -->

            <!-- Tabs content -->
            <div class="tab-content" id="ex1-content">
                <div class="tab-pane fade  show active" id="Report" role="tabpanel" aria-labelledby="Report-1">
                    <section class="section dashboard">
                        <div class="row">
                            <!-- Left side columns -->
                            <div>
                                <div class="row">
                                    <!-- Sales Card -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card info-card sales-card"
                                            style="box-shadow: 2px 2px 4px 1px rgba(0, 0, 0, 0.5), -2px -2px 4px 1px rgba(255, 255, 255, 0.5);">
                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                        class="bi bi-three-dots" style="color: white;"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <li class="dropdown-header text-start">
                                                        <h6>Filter</h6>
                                                    </li>

                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                </ul>
                                            </div>

                                            <div class="card-body"
                                                style="background: rgb(8,8,148);
                                            background: linear-gradient(266deg, rgba(8,8,148,1) 17%, rgba(0,212,255,1) 100%);">
                                                <h5 class="card-title" style="color:#ffffff;">Total Invoices Made</h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="fa fa-calculator w3-xxlarge" style="color:#ffffff;"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6 style="color:#ffffff;">263</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Sales Card -->


                                    <div class="col-lg-4 col-md-6">
                                        <div class="card info-card sales-card"
                                            style="box-shadow: 2px 2px 4px 1px rgba(0, 0, 0, 0.5), -2px -2px 4px 1px rgba(255, 255, 255, 0.5);">
                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                        class="bi bi-three-dots" style="color: white;"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <li class="dropdown-header text-start">
                                                        <h6>Filter</h6>
                                                    </li>

                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                </ul>
                                            </div>

                                            <div class="card-body"
                                                style="background: rgb(148,8,112);
                                            background: linear-gradient(266deg, rgba(148,8,112,1) 29%, rgba(245,175,227,1) 100%);">
                                                <h5 class="card-title" style="color:#ffffff;">Total Margin Gain</h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="fa fa-line-chart w3-xxlarge" style="color:#ffffff;"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6 style="color:#ffffff;">₹12633.01</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Sales Card -->


                                    <div class="col-lg-4 col-md-6">
                                        <div class="card info-card sales-card"
                                            style="box-shadow: 2px 2px 4px 1px rgba(0, 0, 0, 0.5), -2px -2px 4px 1px rgba(255, 255, 255, 0.5);">
                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                        class="bi bi-three-dots" style="color: white;"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <li class="dropdown-header text-start">
                                                        <h6>Filter</h6>
                                                    </li>

                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                </ul>
                                            </div>

                                            <div class="card-body"
                                                style="background: rgb(61,131,12);
                                            background: linear-gradient(266deg, rgba(61,131,12,1) 30%, rgba(143,237,78,1) 100%);">
                                                <h5 class="card-title" style="color:#ffffff;">Today's Total</h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="fa fa-money w3-xxlarge"
                                                            style="color:#ffffff;font-weight: 400;"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6 style="color:#ffffff;">₹0.00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Sales Card -->

                                    <div class="col-lg-4 col-md-6">
                                        <div class="card info-card sales-card"
                                            style="box-shadow: 2px 2px 4px 1px rgba(0, 0, 0, 0.5), -2px -2px 4px 1px rgba(255, 255, 255, 0.5);">
                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                        class="bi bi-three-dots" style="color: white;"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <li class="dropdown-header text-start">
                                                        <h6>Filter</h6>
                                                    </li>

                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                </ul>
                                            </div>

                                            <div class="card-body"
                                                style="background: rgb(230,114,47);
                                            background: linear-gradient(266deg, rgba(230,114,47,1) 30%, rgba(238,232,37,1) 100%);">
                                                <h5 class="card-title" style="color:#ffffff;">Total Sales Performance</h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="fa fa-money w3-xxlarge"
                                                            style="color:#ffffff;font-weight: 400;"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6 style="color:#ffffff;">₹44263.00</h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- End Sales Card -->


                                    <div class="col-lg-4 col-md-6">
                                        <div class="card info-card sales-card"
                                            style="box-shadow: 2px 2px 4px 1px rgba(0, 0, 0, 0.5), -2px -2px 4px 1px rgba(255, 255, 255, 0.5);">
                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                        class="bi bi-three-dots" style="color: white;"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <li class="dropdown-header text-start">
                                                        <h6>Filter</h6>
                                                    </li>

                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                </ul>
                                            </div>

                                            <div class="card-body"
                                                style="background: rgb(47,230,166);
                                                background: linear-gradient(266deg, rgba(47,230,166,1) 30%, rgba(39,170,224,1) 100%);">
                                                <h5 class="card-title" style="color:#ffffff;">Today's Cash Sales</h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="fa fa-money w3-xxlarge"
                                                            style="color:#ffffff;font-weight: 400;"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6 style="color:#ffffff;">₹0.00</h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- End Sales Card -->


                                    <div class="col-lg-4 col-md-6">
                                        <div class="card info-card sales-card"
                                            style="box-shadow: 2px 2px 4px 1px rgba(0, 0, 0, 0.5), -2px -2px 4px 1px rgba(255, 255, 255, 0.5);">
                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                        class="bi bi-three-dots" style="color: white;"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <li class="dropdown-header text-start">
                                                        <h6>Filter</h6>
                                                    </li>

                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                </ul>
                                            </div>

                                            <div class="card-body"
                                                style="background: rgb(217,40,62);
                                                background: linear-gradient(266deg, rgba(217,40,62,1) 30%, rgba(252,97,115,1) 100%);">
                                                <h5 class="card-title" style="color:#ffffff;">Today's Credit Sales</h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="fa fa-money w3-xxlarge"
                                                            style="color:#ffffff;font-weight: 400;"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6 style="color:#ffffff;">₹0.00</h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- End Sales Card -->
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="Current" role="tabpanel" aria-labelledby="Current-1">
                    <div class="row">
                        <div class="col-lg-3 pt-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card"
                                        style="background-image: linear-gradient( 168.2deg,  rgba(44,207,156,1) 19.3%, rgba(18,235,167,1) 67.5% );">
                                        <div class="card-body" style="padding: 25px 15px;">
                                            <span class="slider text-white">Slider</span>
                                            <div class="PB-range-slider-div">
                                                <a class="" href=""
                                                    style="box-shadow: none; padding: 0px; font-size: 20px; color:#fff;"><i
                                                        class="fa fa-minus" aria-hidden="true"></i></a>
                                                <input type="range" min="0" max="100" value="50"
                                                    class="PB-range-slider" id="myRange">
                                                <a class="" href=""
                                                    style="box-shadow: none; padding: 0px; font-size: 20px; color:#fff;"><i
                                                        class="fa fa-plus" aria-hidden="true"></i></a>
                                                <p class="PB-range-slidervalue text-white">8</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card"
                                        style="background-image: radial-gradient( circle 897px at 9% 80.3%,  rgba(55,60,245,1) 0%, rgba(234,161,15,0.90) 100.2% );">
                                        <div class="card-body" style="padding: 25px 15px;">
                                            <div><span class="slider text-white">Switch</span></div>
                                            <div class="toggle-switch">
                                                <input class="toggle-input" id="toggle-1" type="checkbox">
                                                <label class="toggle-label" for="toggle-1"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card"
                                        style="background-image: radial-gradient( circle 975px at 2.6% 48.3%,  rgba(0,8,120,1) 0%, rgba(95,184,224,1) 99.7% );">
                                        <div class="card-body" style="padding: 25px 15px;">
                                            <div class=""><span class="slider text-white">Label</span></div>
                                            <div class="pt-3"><span class="slider text-white">112</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card"
                                        style="background-image: linear-gradient( 108.7deg,  rgba(221,22,224,1) 11%, rgba(111,22,190,1) 88.2% );">
                                        <div class="card-body" style="padding: 25px 15px;">
                                            <span class="slider text-white">Chart</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 pt-2"
                            style="border-top: 2px dashed #00000047; border-radius: 10px 0px; border-left: 2px dashed #00000047;">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="card"
                                        style="background-image: radial-gradient( circle 897px at 9% 80.3%,  rgba(55,60,245,1) 0%, rgba(234,161,15,0.90) 100.2% );">
                                        <div class="card-body" style="padding: 25px 15px;">
                                            <div><span class="slider text-white">Switch</span></div>
                                            <div class="toggle-switch">
                                                <input class="toggle-input" id="toggle" type="checkbox">
                                                <label class="toggle-label" for="toggle"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card"
                                        style="background-image: radial-gradient( circle 975px at 2.6% 48.3%,  rgba(0,8,120,1) 0%, rgba(95,184,224,1) 99.7% );">
                                        <div class="card-body" style="padding: 21px 15px;">
                                            <div class=""><span class="slider text-white">Label</span></div>
                                            <div class="pt-3"><span class="slider text-white">112</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="card"
                                        style="background-image: linear-gradient( 108.7deg,  rgba(221,22,224,1) 11%, rgba(111,22,190,1) 88.2% );">
                                        <div class="card-body" style="padding: 25px 15px;">
                                            <span class="slider text-white">Chart</span>
                                            <p class="m-0 text-center text-white" style="padding: 30px; font-size: 20px;">
                                                No Data</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Readings" role="tabpanel" aria-labelledby="Readings-1">
                    <div class="row">
                        <div class="col-lg-3 pt-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card"
                                        style="background-image: linear-gradient( 168.2deg,  rgba(44,207,156,1) 19.3%, rgba(18,235,167,1) 67.5% );">
                                        <div class="card-body" style="padding: 25px 15px;">
                                            <span class="slider text-white">Slider</span>
                                            <div class="PB-range-slider-div">
                                                <a class="btn" href=""
                                                    style="box-shadow: none; padding: 0px; font-size: 20px; color:#fff;"><i
                                                        class="fa fa-minus" aria-hidden="true"></i></a>
                                                <input type="range" min="0" max="100" value="50"
                                                    class="PB-range-slider" id="myRange">
                                                <a class="btn" href=""
                                                    style="box-shadow: none; padding: 0px; font-size: 20px; color:#fff;"><i
                                                        class="fa fa-plus" aria-hidden="true"></i></a>
                                                <p class="PB-range-slidervalue text-white">8</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card"
                                        style="background-image: radial-gradient( circle 897px at 9% 80.3%,  rgba(55,60,245,1) 0%, rgba(234,161,15,0.90) 100.2% );">
                                        <div class="card-body" style="padding: 25px 15px;">
                                            <div><span class="slider text-white">Switch</span></div>
                                            <div class="toggle-switch">
                                                <input class="toggle-input" id="toggle-1" type="checkbox">
                                                <label class="toggle-label" for="toggle-1"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card"
                                        style="background-image: radial-gradient( circle 975px at 2.6% 48.3%,  rgba(0,8,120,1) 0%, rgba(95,184,224,1) 99.7% );">
                                        <div class="card-body" style="padding: 25px 15px;">
                                            <div class=""><span class="slider text-white">Label</span></div>
                                            <div class="pt-3"><span class="slider text-white">112</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card"
                                        style="background-image: linear-gradient( 108.7deg,  rgba(221,22,224,1) 11%, rgba(111,22,190,1) 88.2% );">
                                        <div class="card-body" style="padding: 25px 15px;">
                                            <span class="slider text-white">Chart</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 pt-2"
                            style="border-top: 2px dashed #00000047; border-radius: 10px 0px; border-left: 2px dashed #00000047;">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="card"
                                        style="background-image: radial-gradient( circle 897px at 9% 80.3%,  rgba(55,60,245,1) 0%, rgba(234,161,15,0.90) 100.2% );">
                                        <div class="card-body" style="padding: 25px 15px;">
                                            <div><span class="slider text-white">Switch</span></div>
                                            <div class="toggle-switch">
                                                <input class="toggle-input" id="toggle" type="checkbox">
                                                <label class="toggle-label" for="toggle"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card"
                                        style="background-image: radial-gradient( circle 975px at 2.6% 48.3%,  rgba(0,8,120,1) 0%, rgba(95,184,224,1) 99.7% );">
                                        <div class="card-body" style="padding: 21px 15px;">
                                            <div class=""><span class="slider text-white">Label</span></div>
                                            <div class="pt-3"><span class="slider text-white">112</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="card"
                                        style="background-image: linear-gradient( 108.7deg,  rgba(221,22,224,1) 11%, rgba(111,22,190,1) 88.2% );">
                                        <div class="card-body" style="padding: 25px 15px;">
                                            <span class="slider text-white">Chart</span>
                                            <p class="m-0 text-center text-white" style="padding: 30px; font-size: 20px;">
                                                No Data</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Past_Log" role="tabpanel" aria-labelledby="Past_Log-1">
                    <div class="accordion accordion-borderless" id="accordionFlushExampleX">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOneX">
                                <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                                    data-mdb-target="#flush-collapseOneX" aria-expanded="true"
                                    aria-controls="flush-collapseOneX">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="flush-collapseOneX" class="accordion-collapse collapse show"
                                aria-labelledby="flush-headingOneX" data-mdb-parent="#accordionFlushExampleX">
                                <div class="accordion-body">
                                    Placeholder content for this accordion, which is intended to demonstrate the
                                    <code>.accordion-flush</code> class. This is the first item's accordion body.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwoX">
                                <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                    data-mdb-target="#flush-collapseTwoX" aria-expanded="false"
                                    aria-controls="flush-collapseTwoX">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="flush-collapseTwoX" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwoX" data-mdb-parent="#accordionFlushExampleX">
                                <div class="accordion-body">
                                    Placeholder content for this accordion, which is intended to demonstrate the
                                    <code>.accordion-flush</code> class. This is the second item's accordion body.
                                    Let's imagine this being filled with some actual content.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThreeX">
                                <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                    data-mdb-target="#flush-collapseThreeX" aria-expanded="false"
                                    aria-controls="flush-collapseThreeX">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="flush-collapseThreeX" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThreeX" data-mdb-parent="#accordionFlushExampleX">
                                <div class="accordion-body">
                                    Placeholder content for this accordion, which is intended to demonstrate the
                                    <code>.accordion-flush</code> class. This is the third item's accordion body.
                                    Nothing more exciting happening here in terms of content, but just filling up
                                    the space to make it look, at least at first glance, a bit more representative
                                    of how this would look in a real-world application.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tabs content -->
        </div>


        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="pt-4">
                    <div class="row">
                        <!-- chart section -->
                        <div class="col-lg-6">
                            <div class="align-items-center"
                                style="background: -moz-linear-gradient(top, #e72c83 20%, #a742c6 80%); background: -webkit-linear-gradient(top, #e72c83 20%, #a742c6 80%); background: linear-gradient(to bottom, #e72c83 30%, #a742c6 80%); border-radius:20px 20px 0 0;">
                                <h3 class="card-title text-center" style="color:white;">Product Wise Sales</h3>
                            </div>
                            <div class="card info-card customers-card" style="border-radius:0 0 20px 20px;">
                                <div class="card-body">

                                    <div id="trafficChart" style="min-height: 350px; padding-top :50px;" class="echart">
                                    </div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            echarts.init(document.querySelector("#trafficChart")).setOption({
                                                tooltip: {
                                                    trigger: 'item'
                                                },
                                                legend: {
                                                    top: '0%',
                                                    left: 'center'
                                                },
                                                series: [{
                                                    name: 'Access From',
                                                    type: 'pie',
                                                    radius: ['40%', '70%'],
                                                    avoidLabelOverlap: false,
                                                    itemStyle: {
                                                        borderRadius: 8,
                                                        borderColor: '#ffff',
                                                        borderWidth: 3
                                                    },
                                                    label: {
                                                        show: false,
                                                        position: 'center'
                                                    },
                                                    emphasis: {
                                                        label: {
                                                            show: true,
                                                            fontSize: 20,
                                                            fontWeight: 'bold'
                                                        }
                                                    },
                                                    labelLine: {
                                                        show: false
                                                    },
                                                    data: [{
                                                            value: 1048,
                                                            name: 'Search Engine'
                                                        },
                                                        {
                                                            value: 735,
                                                            name: 'Direct'
                                                        },
                                                        {
                                                            value: 580,
                                                            name: 'Email'
                                                        },
                                                        {
                                                            value: 484,
                                                            name: 'Union Ads'
                                                        },
                                                        {
                                                            value: 300,
                                                            name: 'Video Ads'
                                                        }
                                                    ]
                                                }]
                                            });
                                        });
                                    </script>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="align-items-center"
                                style="background: -moz-linear-gradient(top, #e72c83 20%, #a742c6 80%); background: -webkit-linear-gradient(top, #e72c83 20%, #a742c6 80%); background: linear-gradient(to bottom, #e72c83 30%, #a742c6 80%); border-radius:20px 20px 0 0;">
                                <h3 class="card-title text-center" style="color:white;">Category Wise Sales</h3>
                            </div>
                            <div class="card info-card customers-card"
                                style="padding: 40px 0px;border-radius:0 0 20px 20px;">
                                <div class="card-body">

                                    <div id="donutChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(document.querySelector("#donutChart"), {
                                                series: [44, 55, 13, 25, 22, 30],
                                                chart: {
                                                    height: 350,
                                                    type: 'donut',
                                                    toolbar: {
                                                        show: false
                                                    }
                                                },
                                                labels: ['Beverage', 'Food', 'Grocery', 'Mutton', 'Samosa', 'Wholesale Item'],
                                            }).render();
                                        });
                                    </script>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->
                        <div class="col-lg-12">
                            <div class="align-items-center"
                                style="background: -moz-linear-gradient(top, #e72c83 20%, #a742c6 80%); background: -webkit-linear-gradient(top, #e72c83 20%, #a742c6 80%); background: linear-gradient(to bottom, #e72c83 30%, #a742c6 80%); border-radius:20px 20px 0 0;">
                                <h3 class="card-title text-center" style="color:white;">Sales Trend </h3>
                            </div>
                            <div class="card info-card customers-card" style="border-radius: 0 0 20px 20px;">
                                <div class="card-body">

                                    <div id="lineChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(document.querySelector("#lineChart"), {
                                                series: [{
                                                    name: "Sales Amount",
                                                    data: [15, 41, 20, 51, 35, 60, 80, 50, 120]
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'line',
                                                    zoom: {
                                                        enabled: false
                                                    },
                                                    toolbar: {
                                                        show: false
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: true
                                                },
                                                stroke: {
                                                    curve: 'straight'
                                                },
                                                grid: {
                                                    row: {
                                                        colors: ['#f3f3f3',
                                                            'transparent'
                                                        ], // takes an array which will be repeated on columns
                                                        opacity: 0.5
                                                    },
                                                },
                                                xaxis: {
                                                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                                                }
                                            }).render();
                                        });
                                    </script>

                                </div>
                            </div>

                        </div>
                        <!-- End Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="align-items-center"
                                    style="background: -moz-linear-gradient(top, #e72c83 20%, #a742c6 80%); background: -webkit-linear-gradient(top, #e72c83 20%, #a742c6 80%); border-radius:5px 5px 0 0;">
                                    <h3 class="card-title text-center" style="color:white;">Product Current Rate & Stock
                                    </h3>
                                </div>
                                <div class="card-body">


                                    <table class="table table-borderless datatable table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Product Code</th>
                                                <th scope="col">Product Rate</th>
                                                <th scope="col">Current Stock</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1Veg Aloo Tikki Burger + French Fries +1 Cheese Sandwich
                                                    +1 Premium Ice cream</th>
                                                <td>WW1001</td>
                                                <td>₹ 200.00</td>
                                                <td>10</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2Veg Aloo Tikki Burger + French Fries +1 Premium Ice
                                                    cream</th>
                                                <td>WW1020</td>
                                                <td>₹ 180.00</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1Veg Aloo Tikki Burger 1 Cheese Sandwich +1 Premium Ice
                                                    cream</th>
                                                <td>WW1311</td>
                                                <td>₹ 150.00</td>
                                                <td>7</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1Veg Aloo Tikki Burger + French Fries +1 Cheese Sandwich
                                                </th>
                                                <td>WW1049</td>
                                                <td>₹ 120.00</td>
                                                <td>15</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1Veg Aloo Tikki Burger + French Fries +1 Cheese Sandwich
                                                    +1 Premium Ice cream</th>
                                                <td>WW1021</td>
                                                <td>₹ 150.00</td>
                                                <td>12</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
