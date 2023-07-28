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
        <li class="breadcrumb-item active">Create Product</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div>

    <div class="card">
      <div class="card-body pt-4">

        <!-- General Form Elements -->
        <form>
          <div class="d-flex">
            <div class="scrollbar">
              <!-- First Row Starts -->
              <div class="d-flex py-2">
                <div class="col-3 me-3 ms-2">
                  <input type="text" class="form-control" placeholder="Product Name">
                </div>
                <div class="col-3 me-3">
                  <input type="text" class="form-control" placeholder="Product Code">
                </div>
                <div class="col-3 me-3">
                  <input type="text" class="form-control" placeholder="Purchase Rate">
                </div>
                <div class="col-3 me-3">
                  <input type="text" class="form-control" placeholder="Selling Rate*">
                </div>
                <div class="col-3 me-3">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Product Category*</option>
                    <option value="1">Food</option>
                    <option value="2">Beverages</option>
                    <option value="3">Wholesale Items</option>
                    <option value="3">Grocery</option>
                  </select>
                </div>
                <div class="col-3 me-3">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Product Unit*</option>
                    <option value="1">Pcs</option>
                    <option value="2">Grams</option>
                    <option value="3">Pack</option>
                    <option value="3">Kg</option>
                  </select>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                  <div class="form-check col-1" style="padding-right: 4rem!important;">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                      Veg
                    </label>
                  </div>
                  <div class="form-check col-3" style="padding-right: 96px;">
                    <input class="form-check-input" type="checkbox" id="gridCheck2">
                    <label class="form-check-label" for="gridCheck2">
                      Featured
                    </label>
                  </div>
                  <div class="form-check col-3">
                    <input class="form-check-input" type="checkbox" id="gridCheck3">
                    <label class="form-check-label" for="gridCheck3">
                      Active
                    </label>
                  </div>
                </div>
              </div>
              <!-- First Row Ends -->

              <!-- 2nd Row Starts -->

              <div class="d-flex py-2">
                <div class="col-3 me-3 ms-2">
                  <input type="text" class="form-control" placeholder="Product Name">
                </div>
                <div class="col-3 me-3">
                  <input type="text" class="form-control" placeholder="Product Code">
                </div>
                <div class="col-3 me-3">
                  <input type="text" class="form-control" placeholder="Purchase Rate">
                </div>
                <div class="col-3 me-3">
                  <input type="text" class="form-control" placeholder="Selling Rate*">
                </div>
                <div class="col-3 me-3">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Product Category*</option>
                    <option value="1">Food</option>
                    <option value="2">Beverages</option>
                    <option value="3">Wholesale Items</option>
                    <option value="3">Grocery</option>
                  </select>
                </div>
                <div class="col-3 me-3">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Product Unit*</option>
                    <option value="1">Pcs</option>
                    <option value="2">Grams</option>
                    <option value="3">Pack</option>
                    <option value="3">Kg</option>
                  </select>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                  <div class="form-check col-1" style="padding-right: 4rem!important;">
                    <input class="form-check-input" type="checkbox" id="gridCheck4">
                    <label class="form-check-label" for="gridCheck4">
                      Veg
                    </label>
                  </div>
                  <div class="form-check col-3" style="padding-right: 96px;">
                    <input class="form-check-input" type="checkbox" id="gridCheck5">
                    <label class="form-check-label" for="gridCheck5">
                      Featured
                    </label>
                  </div>
                  <div class="form-check col-3">
                    <input class="form-check-input" type="checkbox" id="gridCheck6">
                    <label class="form-check-label" for="gridCheck6">
                      Active
                    </label>
                  </div>
                </div>
              </div>
              <!-- 2nd Row Ends -->

              <!-- 3rd Row Starts -->
              <div class="d-flex py-2">
                <div class="col-3 me-3 ms-2">
                  <input type="text" class="form-control" placeholder="Product Name">
                </div>
                <div class="col-3 me-3">
                  <input type="text" class="form-control" placeholder="Product Code">
                </div>
                <div class="col-3 me-3">
                  <input type="text" class="form-control" placeholder="Purchase Rate">
                </div>
                <div class="col-3 me-3">
                  <input type="text" class="form-control" placeholder="Selling Rate*">
                </div>
                <div class="col-3 me-3">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Product Category*</option>
                    <option value="1">Food</option>
                    <option value="2">Beverages</option>
                    <option value="3">Wholesale Items</option>
                    <option value="3">Grocery</option>
                  </select>
                </div>
                <div class="col-3 me-3">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Product Unit*</option>
                    <option value="1">Pcs</option>
                    <option value="2">Grams</option>
                    <option value="3">Pack</option>
                    <option value="3">Kg</option>
                  </select>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                  <div class="form-check col-1" style="padding-right: 4rem!important;">
                    <input class="form-check-input" type="checkbox" id="gridCheck7">
                    <label class="form-check-label" for="gridCheck7">
                      Veg
                    </label>
                  </div>
                  <div class="form-check col-3" style="padding-right: 96px;">
                    <input class="form-check-input" type="checkbox" id="gridCheck8">
                    <label class="form-check-label" for="gridCheck8">
                      Featured
                    </label>
                  </div>
                  <div class="form-check col-3">
                    <input class="form-check-input" type="checkbox" id="gridCheck9">
                    <label class="form-check-label" for="gridCheck9">
                      Active
                    </label>
                  </div>
                </div>
              </div>
              <!-- 3rd Row Ends -->

              <!-- 4th Row Starts -->
              <div class="d-flex py-2">
                <div class="col-3 ms-2 me-3">
                  <input type="text" class="form-control" placeholder="Product Name">
                </div>
                <div class="col-3 me-3">
                  <input type="text" class="form-control" placeholder="Product Code">
                </div>
                <div class="col-3 me-3">
                  <input type="text" class="form-control" placeholder="Purchase Rate">
                </div>
                <div class="col-3 me-3">
                  <input type="text" class="form-control" placeholder="Selling Rate*">
                </div>
                <div class="col-3 me-3">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Product Category*</option>
                    <option value="1">Food</option>
                    <option value="2">Beverages</option>
                    <option value="3">Wholesale Items</option>
                    <option value="3">Grocery</option>
                  </select>
                </div>
                <div class="col-3 me-3">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Product Unit*</option>
                    <option value="1">Pcs</option>
                    <option value="2">Grams</option>
                    <option value="3">Pack</option>
                    <option value="3">Kg</option>
                  </select>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                  <div class="form-check col-1" style="padding-right: 4rem!important;">
                    <input class="form-check-input" type="checkbox" id="gridCheck10">
                    <label class="form-check-label" for="gridCheck10">
                      Veg
                    </label>
                  </div>
                  <div class="form-check col-3" style="padding-right: 96px;">
                    <input class="form-check-input" type="checkbox" id="gridCheck11">
                    <label class="form-check-label" for="gridCheck11">
                      Featured
                    </label>
                  </div>
                  <div class="form-check col-3">
                    <input class="form-check-input" type="checkbox" id="gridCheck12">
                    <label class="form-check-label" for="gridCheck12">
                      Active
                    </label>
                  </div>
                </div>
              </div>
              <!-- 4th Row Ends -->

              <!-- 5th Row Starts -->

              <div class="d-flex py-2">
                <div class="col-3 me-3 ms-2">
                  <input type="text" class="form-control" placeholder="Product Name">
                </div>
                <div class="col-3 me-3">
                  <input type="text" class="form-control" placeholder="Product Code">
                </div>
                <div class="col-3 me-3">
                  <input type="text" class="form-control" placeholder="Purchase Rate">
                </div>
                <div class="col-3 me-3">
                  <input type="text" class="form-control" placeholder="Selling Rate*">
                </div>
                <div class="col-3 me-3">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Product Category*</option>
                    <option value="1">Food</option>
                    <option value="2">Beverages</option>
                    <option value="3">Wholesale Items</option>
                    <option value="3">Grocery</option>
                  </select>
                </div>
                <div class="col-3 me-3">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Product Unit*</option>
                    <option value="1">Pcs</option>
                    <option value="2">Grams</option>
                    <option value="3">Pack</option>
                    <option value="3">Kg</option>
                  </select>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                  <div class="form-check col-1" style="padding-right: 4rem!important;">
                    <input class="form-check-input" type="checkbox" id="gridCheck13">
                    <label class="form-check-label" for="gridCheck13">
                      Veg
                    </label>
                  </div>
                  <div class="form-check col-3" style="padding-right: 96px;">
                    <input class="form-check-input" type="checkbox" id="gridCheck14">
                    <label class="form-check-label" for="gridCheck14">
                      Featured
                    </label>
                  </div>
                  <div class="form-check col-3">
                    <input class="form-check-input" type="checkbox" id="gridCheck15">
                    <label class="form-check-label" for="gridCheck15">
                      Active
                    </label>
                  </div>
                </div>
              </div>
              <!-- 5th Row Ends -->
            </div>

            <!-- Add & Delete Buttons Starts  -->
            <div>
              <div class="d-flex mt-2" style="width: 10% !important;">
                <div class="pe-3 ps-2">
                  <a href="">
                    <button class="btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i></button>
                  </a>
                </div>
                <div class="">
                  <a href="">
                    <button class="btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
                  </a>
                </div>
              </div>
              <div class="d-flex" style="width: 10% !important; margin-top: 22px;">
                <div class="pe-3 ps-2">
                  <a href="">
                    <button class="btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                  </a>
                </div>
                <div class="">
                  <a href="">
                    <button class="btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
                  </a>
                </div>
              </div>
              <div class="d-flex" style="width: 10% !important; margin-top: 22px;">
                <div class="pe-3 ps-2">
                  <a href="">
                    <button class="btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                  </a>
                </div>
                <div class="">
                  <a href="">
                    <button class="btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
                  </a>
                </div>
              </div>
              <div class="d-flex" style="width: 10% !important; margin-top: 22px;">
                <div class="pe-3 ps-2">
                  <a href="">
                    <button class="btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                  </a>
                </div>
                <div class="">
                  <a href="">
                    <button class="btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
                  </a>
                </div>
              </div>
              <div class="d-flex" style="width: 10% !important; margin-top: 22px;">
                <div class="pe-3 ps-2">
                  <a href="">
                    <button class="btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                  </a>
                </div>
                <div class="">
                  <a href="">
                    <button class="btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
                  </a>
                </div>
              </div>
            </div>
            <!-- Add & Delete Buttons Ends  -->
          </div>

          <div class="row my-3">
            <div class="col-sm-12 text-center">
              <button type="submit" class="btn-primary"><i class="fa-solid fa-square-plus me-2"></i>Create</button>
            </div>
          </div>
        </form><!-- End General Form Elements -->
      </div>
    </div>
  </div>
</main>
@endsection
