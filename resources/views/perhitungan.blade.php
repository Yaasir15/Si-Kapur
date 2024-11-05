@extends('layouts.app')

@section('title', 'Perhitungan')
@section('perhitungan', 'active')

@section('sidebar')
@parent
@endsection

@section('content')
<div class="container-fluid">
  <div class="page-header min-height-250 border-radius-lg mt-4 d-flex flex-column justify-content-end">
    <span class="mask bg-primary opacity-9"></span>
    <div class="w-100 position-relative p-3">
      <div class="d-flex justify-content-between align-items-end">
        <div class="d-flex align-items-center">
          <div class="avatar avatar-xl position-relative me-3">
            <img src="../../../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
          </div>
          <div>
            <h5 class="mb-1 text-white font-weight-bolder">
              Alec Thompson
            </h5>
            <p class="mb-0 text-white text-sm">
              CEO / Co-Founder
            </p>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <a href="javascript:;" class="btn btn-outline-white mb-0 me-1 btn-sm">
            Billing
          </a>
          <a href="javascript:;" class="btn btn-outline-white mb-0 btn-sm">
            Payments
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="multisteps-form">
      <div class="row">
        <div class="col-12 col-lg-8 mx-auto mt-4 mb-sm-5 mb-3">
          <div class="multisteps-form__progress">
            <button class="multisteps-form__progress-btn js-active" type="button" title="Product Info">
              <span>1. Product Info</span>
            </button>
            <button class="multisteps-form__progress-btn" type="button" title="Media">2. Media</button>
            <button class="multisteps-form__progress-btn" type="button" title="Socials">3. Socials</button>
            <button class="multisteps-form__progress-btn" type="button" title="Pricing">4. Pricing</button>
          </div>
        </div>
      </div>
      <!--form panels-->
      <div class="row">
        <div class="col-12 col-lg-8 m-auto">
          <form class="multisteps-form__form mb-8">
            <!--single form panel-->
            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
              <h5 class="font-weight-bolder">Product Information</h5>
              <div class="multisteps-form__content">
                <div class="row mt-3">
                  <div class="col-12 col-sm-6">
                    <label>Name</label>
                    <input class="multisteps-form__input form-control" type="text" placeholder="eg. Off-White" />
                  </div>
                  <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                    <label>Weight</label>
                    <input class="multisteps-form__input form-control" type="text" placeholder="eg. 42" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label class="mt-4">Description</label>
                    <p class="form-text text-muted text-xs ms-1 d-inline">
                      (optional)
                    </p>
                    <div id="edit-deschiption" class="h-50">
                      <p>Some initial <strong>bold</strong> text</p>
                    </div>
                  </div>
                  <div class="col-sm-6 mt-sm-0 mt-4">
                    <label class="mt-4">Category</label>
                    <select class="form-control" name="choices-category" id="choices-category">
                      <option value="Choice 1" selected="">Clothing</option>
                      <option value="Choice 2">Real Estate</option>
                      <option value="Choice 3">Electronics</option>
                      <option value="Choice 4">Furniture</option>
                      <option value="Choice 5">Others</option>
                    </select>
                    <label>Sizes</label>
                    <select class="form-control" name="choices-sizes" id="choices-sizes">
                      <option value="Choice 1" selected="">Medium</option>
                      <option value="Choice 2">Small</option>
                      <option value="Choice 3">Large</option>
                      <option value="Choice 4">Extra Large</option>
                      <option value="Choice 5">Extra Small</option>
                    </select>
                  </div>
                </div>
                <div class="button-row d-flex mt-4">
                  <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                </div>
              </div>
            </div>
            <!--single form panel-->
            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
              <h5 class="font-weight-bolder">Media</h5>
              <div class="multisteps-form__content">
                <div class="row mt-3">
                  <div class="col-12">
                    <label>Product images</label>
                    <div action="/file-upload" class="form-control dropzone" id="productImg"></div>
                  </div>
                </div>
                <div class="button-row d-flex mt-4">
                  <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                  <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                </div>
              </div>
            </div>
            <!--single form panel-->
            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
              <h5 class="font-weight-bolder">Socials</h5>
              <div class="multisteps-form__content">
                <div class="row mt-3">
                  <div class="col-12">
                    <label>Shoppify Handle</label>
                    <input class="multisteps-form__input form-control" type="text" placeholder="@soft" />
                  </div>
                  <div class="col-12 mt-3">
                    <label>Facebook Account</label>
                    <input class="multisteps-form__input form-control" type="text" placeholder="https://..." />
                  </div>
                  <div class="col-12 mt-3">
                    <label>Instagram Account</label>
                    <input class="multisteps-form__input form-control" type="text" placeholder="https://..." />
                  </div>
                </div>
                <div class="row">
                  <div class="button-row d-flex mt-4 col-12">
                    <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
            </div>
            <!--single form panel-->
            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white h-100" data-animation="FadeIn">
              <h5 class="font-weight-bolder">Pricing</h5>
              <div class="multisteps-form__content mt-3">
                <div class="row">
                  <div class="col-3">
                    <label>Price</label>
                    <input class="multisteps-form__input form-control" type="text" placeholder="99.00" />
                  </div>
                  <div class="col-4">
                    <label>Currency</label>
                    <select class="form-control" name="choices-sizes" id="choices-currency">
                      <option value="Choice 1" selected="">USD</option>
                      <option value="Choice 2">EUR</option>
                      <option value="Choice 3">GBP</option>
                      <option value="Choice 4">CNY</option>
                      <option value="Choice 5">INR</option>
                      <option value="Choice 6">BTC</option>
                    </select>
                  </div>
                  <div class="col-5">
                    <label>SKU</label>
                    <input class="multisteps-form__input form-control" type="text" placeholder="71283476591" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label class="mt-4 form-label">Tags</label>
                    <select class="form-control" name="choices-tags" id="choices-tags" multiple>
                      <option value="Choice 1" selected>In Stock</option>
                      <option value="Choice 2">Out of Stock</option>
                      <option value="Choice 3">Sale</option>
                      <option value="Choice 4">Black Friday</option>
                    </select>
                  </div>
                </div>
                <div class="button-row d-flex mt-4">
                  <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                  <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Send">Send</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection