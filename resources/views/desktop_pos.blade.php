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

    .inputBox {
        position: relative;

    }

    .inputBox input {
        width: 100%;
        padding: 8px 15px;
        border: 1px solid rgba(255, 255, 255, 0.25);
        background: #ffffff;
        border-radius: 5px;
        outline: none;
        color: #000;
        font-size: 1em;
    }

    .inputBox span {
        position: absolute;
        left: 2px;
        padding: 10px;
        pointer-events: none;
        font-size: 1em;
        color: rgb(108 117 125);
        transition: 0.5s;
    }

    .inputBox input:valid~span,
    .inputBox input:focus~span {
        color: #212529;
        transform: translateX(10px) translateY(-7px);
        font-size: 0.75em;
        padding: 6px 3px;
    }

    .money:hover {
        color: #008000cc;
        font-size: 40px !important;
        cursor: pointer !important;
    }

    .dish_menu:hover {
        box-shadow: 0px 0px 5px #cecfd8de, 0px 0px 5px #cecfd8de !important;
    }

    .badge_green:hover {
        background: #06c20d !important;
    }
    .badge_red:hover {
        background: #c00547 !important;
    }

    .scrollbar::-webkit-scrollbar {
        width: 7px;
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


<main id="main" class="main" style="background-color: #adacad1f; border-top-left-radius: 25px;">
    <!-- Start Search Bar -->
    <form action="" method="POST">
        <div class="row">
            <div class="form-outline col-8 d-flex">
                <input type="search" id="form1" class="form-control" placeholder="Search Here" aria-label="Search">
            </div>
            <div class="col-4 d-flex" style="justify-content: space-evenly;">
                <button class="btn btn-primary">Add</button>
                <button class="btn btn-primary">Create</button>
                <button class="btn btn-danger">Delete</button>
            </div>
        </div>
    </form>
    <!-- End Search Bar -->
    <!-- Modal Forms Start -->

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">


        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content" style="background-color: #1212128f; color:white;">
                <div class="" style="margin: 0 12px;">
                    <div class="row p-1" style="background: linear-gradient(90deg, #d53369 0%, #daae51 100%); border-radius:5px 5px 0 0; ">
                        <div class="col-8 d-flex justify-content-start" style="color: white;">
                            <h5 class="modal-title" id="exampleModalToggleLabel">Payment Details</h5>
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <a href="" data-bs-dismiss="modal" aria-label="Close" style="text-decoration: none; color:#4d0215; font-size: 23px;"><i class="fa fa-window-close" aria-hidden="true"></i></a>
                        </div>
                    </div>

                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="inputBox">
                                    <input type="text" required="required">
                                    <span>Total Items</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="inputBox">
                                    <input type="text" required="required">
                                    <span>Total Qty</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="inputBox">
                                    <input type="text" required="required">
                                    <span>Total Amt</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Payment Method*</option>
                                    <option value="1">Cash</option>
                                    <option value="2">Credit</option>
                                    <option value="3">UPI</option>
                                    <option value="3">Card</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-8">
                                <div class="inputBox">
                                    <input type="text" required="required">
                                    <span>Discount Coupon*</span>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-end justify-content-center">
                                <button type="button" class="btn btn-success">Apply</button>
                            </div>
                            <div class="col-2 d-flex align-items-end ">
                                <button type="button" class="btn btn-danger">Remove</button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Discount %</option>
                                    <option value="1">0.00</option>
                                    <option value="2">5.00</option>
                                    <option value="3">10.00</option>
                                    <option value="3">15.00</option>
                                    <option value="3">20.00</option>
                                    <option value="3">25.00</option>
                                    <option value="3">30.00</option>
                                    <option value="3">35.00</option>
                                    <option value="3">40.00</option>
                                </select>
                            </div>
                            <div class="col-3 d-flex align-items-start">
                                <label for="email" class="col-form-label"><span style="color:red;"></span></label>
                                <div class="inputBox">
                                    <input type="text" required="required">
                                    <span>Discount Amt</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Tax %</option>
                                    <option value="1">0.00</option>
                                    <option value="2">5.00</option>
                                    <option value="3">10.00</option>
                                    <option value="3">15.00</option>
                                    <option value="3">20.00</option>
                                </select>
                            </div>
                            <div class="col-3 d-flex align-items-start">
                                <div class="inputBox">
                                    <input type="text" required="required">
                                    <span>Tax Amt</span>
                                </div>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="inputBox">
                                    <input type="text" required="required">
                                    <span>Final Amt</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="inputBox">
                                    <input type="text" required="required">
                                    <span>Received</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="inputBox">
                                    <input type="text" required="required">
                                    <span>Return Amt</span>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="inputBox">
                                    <input type="text" required="required">
                                    <span>Customer Name</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="inputBox">
                                    <input type="text" required="required">
                                    <span>Customer Contact</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-12">
                                <div class="inputBox">
                                    <input type="text" required="required">
                                    <span>Remarks</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="pb-2 d-flex justify-content-center">
                    <button class="btn btn-success mx-2" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Pay</button>
                    <button class="btn btn-primary mx-2" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Back</button>
                    <button class="btn btn-danger mx-2" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Forms Ends -->
    <div class="row mt-2">
        <div class="col-2 scrollbar" style="padding-top:5px; height: 450px; overflow-y: scroll;">
            <div class="py-1 text-center card dish_menu" style="border-radius: 10px; margin-bottom: 10px; background-color:#969ded42; box-shadow:none;">
                <button class="p-2" style="border: none; background: none; font-weight:550 !important;">
                    Beverage
                </button>
            </div>
            <div class="py-1 text-center card dish_menu" style="border-radius: 10px; margin-bottom: 10px; background-color:#969ded42; box-shadow:none;">
                <button class="p-2" style="border: none; background: none; font-weight:550 !important;">
                    Food
                </button>
            </div>
            <div class="py-1 text-center card dish_menu" style="border-radius: 10px; margin-bottom: 10px; background-color:#969ded42; box-shadow:none;">
                <button class="p-2" style="border: none; background: none; font-weight:550 !important;">
                    Grocery
                </button>
            </div>
            <div class="py-1 text-center card dish_menu" style="border-radius: 10px; margin-bottom: 10px; background-color:#969ded42; box-shadow:none;">
                <button class="p-2" style="border: none; background: none; font-weight:550 !important;">
                    Mutton
                </button>
            </div>
            <div class="py-1 text-center card dish_menu" style="border-radius: 10px; margin-bottom: 10px; background-color:#969ded42; box-shadow:none;">
                <button class="p-2" style="border: none; background: none; font-weight:550 !important;">
                    Samosa
                </button>
            </div>
            <div class="py-1 text-center card dish_menu" style="border-radius: 10px; margin-bottom: 10px; background-color:#969ded42; box-shadow:none;">
                <button class="p-2" style="border: none; background: none; font-weight:550 !important;">
                    Packed Item New
                </button>
            </div>
            <div class="py-1 text-center card dish_menu" style="border-radius: 10px; margin-bottom: 10px; background-color:#969ded42; box-shadow:none;">
                <button class="p-2" style="border: none; background: none; font-weight:550 !important;">
                    Samosa
                </button>
            </div>
            <div class="py-1 text-center card dish_menu" style="border-radius: 10px; margin-bottom: 10px; background-color:#969ded42; box-shadow:none;">
                <button class="p-2" style="border: none; background: none; font-weight:550 !important;">
                    Samosa
                </button>
            </div>
            <div class="py-1 text-center card dish_menu" style="border-radius: 10px; margin-bottom: 10px; background-color:#969ded42; box-shadow:none;">
                <button class="p-2" style="border: none; background: none; font-weight:550 !important;">
                    Samosa
                </button>
            </div>
            <div class="py-1 text-center card dish_menu" style="border-radius: 10px; margin-bottom: 10px; background-color:#969ded42; box-shadow:none;">
                <button class="p-2" style="border: none; background: none; font-weight:550 !important;">
                    Samosa
                </button>
            </div>
        </div>
        <div class="col-6 scrollbar" style="padding-top:5px; height: 450px; overflow-y: scroll;">
            <div class="row d-flex" style="justify-content: space-evenly;">
                <div class="col-3 card me-3" style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold">
                        Product 1
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42;  box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold ">
                        Product 2
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold">
                        Product 3
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold fw-bold">
                        Product 4
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold">
                        Product 5
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold">
                        Product 6
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold">
                        Product 6
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold">
                        Product 6
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold">
                        Product 6
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold">
                        Product 6
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold">
                        Product 6
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold">
                        Product 6
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold">
                        Product 6
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold">
                        Product 6
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold">
                        Product 6
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold">
                        Product 6
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold">
                        Product 6
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-3 card me-3 " style="border-radius: 5px; padding:0px; background-color:#969ded42; box-shadow:none; margin-bottom: 10px;">
                    <button class="badge badge_green" style="background: #4CAF50; text-align:center; color:white; border:none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <span class="p-1 text-center fw-bold">
                        Product 6
                    </span>
                    <span class="p-1 text-center" style="color: green;">
                        $15.00
                    </span>
                    <button class="badge badge_red" style="background: #e60756; text-align:center; color:white; border:none;"><i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>

            </div>

        </div>
        <div class="col-4">
            <div class="scrollbar" style="padding-top:5px; height: 370px; overflow-y: scroll; overflow-x: hidden; padding-right: 5px;">
                <div class="col-12 card me-3" style="border-radius: 5px; padding: 5px 10px; box-shadow:none; background-color:#969ded42; margin-bottom: 10px;">
                    <div class="row">
                        <div class="inputBox col-3">
                            <input type="text" required="required" style="width: 40px; height: 25px; padding: 5px 4px; font-size: 0.80em; ">
                            <span style="left: 6px; padding: 0px 9px;">Qty</span>
                        </div>
                        <div class="col-7 fw-bold" style="text-align: center; font-size: 14px;">Chicken Biryani</div>
                        <div class="col-2 d-flex justify-content-end fw-bold" style="align-items: center;"> <a href="" class="btn p-0 "><i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i></a> </div>
                    </div>
                    <div class="row pt-2" style="font-weight:550 !important;">
                        <div class="col-4" style="color: green;">$15.00</div>

                        <div class="col-8 d-flex justify-content-end" style=" font-size: 10px;">
                            <div class="form-check d-flex" style="font-size: 12px; margin-bottom: 0;">
                                <label class="form-check-label" for="product-1"><span style="color: red;">18% </span>TAXABLE</label>
                                <input class="form-check-input" type="checkbox" value="" id="product-1" style="margin-left: 14px; border: 1px solid #4557F1;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 card me-3" style="border-radius: 5px; padding: 5px 10px; box-shadow:none; background-color:#969ded42; margin-bottom: 10px;">
                    <div class="row">
                        <div class="inputBox col-3">
                            <input type="text" required="required" style="width: 40px; height: 25px; padding: 5px 4px; font-size: 0.80em;">
                            <span style="left: 6px; padding: 0px 9px;">Qty</span>
                        </div>
                        <div class="col-7 fw-bold" style="text-align: center; font-size: 14px;">Chicken Biryani</div>
                        <div class="col-2 d-flex justify-content-end" style="align-items: center;"><a href="" class="btn p-0 "><i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i></a></div>
                    </div>
                    <div class="row pt-2" style="font-weight:550 !important;">
                        <div class="col-4" style="color: green;">$15.00</div>

                        <div class="col-8 d-flex justify-content-end" style=" font-size: 10px;">
                            <div class="form-check d-flex" style="font-size: 12px; margin-bottom: 0;">
                                <label class="form-check-label" for="product-2"><span style="color: red;">18% </span>TAXABLE</label>
                                <input class="form-check-input" type="checkbox" value="" id="product-2" style="margin-left: 14px; border: 1px solid #4557F1;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 card me-3" style="border-radius: 5px; padding: 5px 10px; box-shadow:none; background-color:#969ded42; margin-bottom: 10px;">
                    <div class="row">
                        <div class="inputBox col-3">
                            <input type="text" required="required" style="width: 40px; height: 25px; padding: 5px 4px; font-size: 0.80em; ">
                            <span style="left: 6px; padding: 0px 9px;">Qty</span>
                        </div>
                        <div class="col-7 fw-bold" style="text-align: center; font-size: 14px;">Chicken Biryani</div>
                        <div class="col-2 d-flex justify-content-end" style="align-items: center;"><a href="" class="btn p-0 "><i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i></a></div>
                    </div>
                    <div class="row pt-2" style="font-weight:550 !important;">
                        <div class="col-4" style="color: green;">$15.00</div>

                        <div class="col-8 d-flex justify-content-end" style=" font-size: 10px;">
                            <div class="form-check d-flex" style="font-size: 12px; margin-bottom: 0;">
                                <label class="form-check-label" for="product-3"><span style="color: red;">18% </span>TAXABLE</label>
                                <input class="form-check-input" type="checkbox" value="" id="product-3" style="margin-left: 14px; border: 1px solid #4557F1;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 card me-3" style="border-radius: 5px; padding: 5px 10px; box-shadow:none; background-color:#969ded42; margin-bottom: 10px;">
                    <div class="row">
                        <div class="inputBox col-3">
                            <input type="text" required="required" style="width: 40px; height: 25px; padding: 5px 4px; font-size: 0.80em; ">
                            <span style="left: 6px; padding: 0px 9px;">Qty</span>
                        </div>
                        <div class="col-7 fw-bold" style="text-align: center; font-size: 14px;">Chicken Biryani</div>
                        <div class="col-2 d-flex justify-content-end" style="align-items: center;"><a href="" class="btn p-0 "><i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i></a></div>
                    </div>
                    <div class="row pt-2" style="font-weight:550 !important;">
                        <div class="col-4" style="color: green;">$15.00</div>

                        <div class="col-8 d-flex justify-content-end" style=" font-size: 10px;">
                            <div class="form-check d-flex" style="font-size: 12px; margin-bottom: 0;">
                                <label class="form-check-label" for="product-4"><span style="color: red;">18% </span>TAXABLE</label>
                                <input class="form-check-input" type="checkbox" value="" id="product-4" style="margin-left: 14px; border: 1px solid #4557F1;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 card me-3" style="border-radius: 5px; padding: 5px 10px; box-shadow:none; background-color:#969ded42; margin-bottom: 10px;">
                    <div class="row">
                        <div class="inputBox col-3">
                            <input type="text" required="required" style="width: 40px; height: 25px; padding: 5px 4px; font-size: 0.80em; ">
                            <span style="left: 6px; padding: 0px 9px;">Qty</span>
                        </div>
                        <div class="col-7 fw-bold" style="text-align: center; font-size: 14px;">Chicken Biryani</div>
                        <div class="col-2 d-flex justify-content-end" style="align-items: center;"><a href="" class="btn p-0 "><i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i></a></div>
                    </div>
                    <div class="row pt-2" style="font-weight:550 !important;">
                        <div class="col-4" style="color: green;">$15.00</div>

                        <div class="col-8 d-flex justify-content-end" style=" font-size: 10px;">
                            <div class="form-check d-flex" style="font-size: 12px; margin-bottom: 0;">
                                <label class="form-check-label" for="product-5"><span style="color: red;">18% </span>TAXABLE</label>
                                <input class="form-check-input" type="checkbox" value="" id="product-5" style="margin-left: 14px; border: 1px solid #4557F1;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 card me-3" style="border-radius: 5px; padding: 5px 10px; box-shadow:none; background-color:#969ded42; margin-bottom: 10px;">
                    <div class="row">
                        <div class="inputBox col-3">
                            <input type="text" required="required" style="width: 40px; height: 25px; padding: 5px 4px; font-size: 0.80em; ">
                            <span style="left: 6px; padding: 0px 9px;">Qty</span>
                        </div>
                        <div class="col-7 fw-bold" style="text-align: center; font-size: 14px;">Chicken Biryani</div>
                        <div class="col-2 d-flex justify-content-end" style="align-items: center;"><a href="" class="btn p-0 "><i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i></a></div>
                    </div>
                    <div class="row pt-2" style="font-weight:550 !important;">
                        <div class="col-4" style="color: green;">$15.00</div>

                        <div class="col-8 d-flex justify-content-end" style=" font-size: 10px;">
                            <div class="form-check d-flex" style="font-size: 12px; margin-bottom: 0;">
                                <label class="form-check-label" for="product-6"><span style="color: red;">18% </span>TAXABLE</label>
                                <input class="form-check-input" type="checkbox" value="" id="product-6" style="margin-left: 14px; border: 1px solid #4557F1;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 card me-3" style="border-radius: 5px; padding: 5px 10px; box-shadow:none; background-color:#969ded42; margin-bottom: 10px;">
                    <div class="row">
                        <div class="inputBox col-3">
                            <input type="text" required="required" style="width: 40px; height: 25px; padding: 5px 4px; font-size: 0.80em; ">
                            <span style="left: 6px; padding: 0px 9px;">Qty</span>
                        </div>
                        <div class="col-7 fw-bold" style="text-align: center; font-size: 14px;">Chicken Biryani</div>
                        <div class="col-2 d-flex justify-content-end" style="align-items: center;"><a href="" class="btn p-0 "><i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i></a></div>
                    </div>
                    <div class="row pt-2" style="font-weight:550 !important;">
                        <div class="col-4" style="color: green;">$15.00</div>

                        <div class="col-8 d-flex justify-content-end" style=" font-size: 10px;">
                            <div class="form-check d-flex" style="font-size: 12px; margin-bottom: 0;">
                                <label class="form-check-label" for="product-7"><span style="color: red;">18% </span>TAXABLE</label>
                                <input class="form-check-input" type="checkbox" value="" id="product-7" style="margin-left: 14px; border: 1px solid #4557F1;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 card me-3 mt-2" style="border-radius: 5px; padding:10px; box-shadow:none; background-color:#0fe60c63;">
                <div class="row pt-2">
                    <div class="col-8 d-flex justify-content-start" style="text-align: center; align-items: center; margin: 0px; padding-top: 10px;">
                        <h5 style="font-weight:550 !important;">Total <span class="fw-bold" style="color: green;">$12.00</span></h5>
                    </div>
                    <div class="col-4" style="text-align: center; font-size: 37px; margin-top: -8px; color: green;">
                        <a data-bs-toggle="modal" href="#exampleModalToggle" role="button" style="text-decoration: none; color: green;"><i class="fa fa-money money" style="padding: 0px 3px;"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</main>


@endsection
