@extends('layouts.app')

@section('title', 'Perhitungan')
@section('perhitungan', 'active')

@section('sidebar')
@parent
@endsection

@section('content')
<!-- <div class="container-fluid">
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
</div> -->
<div class="row">
  <div class="col-12">
    <div class="multisteps-form">
      <div class="row">
        <div class="col-12 col-lg-8 mx-auto mt-4 mb-sm-5 mb-3">
          <div class="multisteps-form__progress">
            <button class="multisteps-form__progress-btn js-active" type="button" title="TPS">1. TPS</button>
            <button class="multisteps-form__progress-btn" type="button" title="DPT">2. DPT</button>
            <button class="multisteps-form__progress-btn" type="button" title="Socials">3. Suara</button>
            <button class="multisteps-form__progress-btn" type="button" title="Pricing">4. Dokumen</button>
          </div>
        </div>
      </div>
      <!--form panels-->
      <div class="row">
        <div class="col-12 col-lg-8 m-auto">
          <form class="multisteps-form__form mb-8">
            <!--single form panel-->
            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
              <h5 class="font-weight-bolder">Lokasi TPS</h5>
              <div class="multisteps-form__content">
                <div class="row mt-3">
                  <div class="col-12 col-sm-6 mb-4">
                    <label>Provinsi</label>
                    <select class="form-control" name="prov" id="choices-prov" readonly>
                      <option value="Aceh" selected="">Aceh</option>
                    </select>
                    <label>Kab/Kota</label>
                    <select class="form-control" name="kab" id="choices-kab" readonly>
                      <option value="Pidie" selected="">Pidie</option>
                    </select>
                  </div>
                  <div class="col-12 col-sm-6 mb-4">
                    <label>Kecamatan</label>
                    <select class="form-control" name="ckec" id="choices-kec" required>
                      <option value="">-- Pilih Kecamatan --</option>
                      <option value="Choice 2">Real Estate</option>
                      <option value="Choice 3">Electronics</option>
                    </select>
                    <label>Kelurahan</label>
                    <select class="form-control" name="kel" id="choices-kel" required>
                      <option value="">-- Pilih Kelurahan --</option>
                      <option value="Choice 2">Small</option>
                      <option value="Choice 3">Large</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <label>Nomor TPS</label>
                    <select class="form-control" name="tps" id="choices-tps" required>
                      <option value="">-- Pilih TPS --</option>
                      <option value="001">001</option>
                      <option value="002">002</option>
                      <option value="003">003</option>
                      <option value="004">004</option>
                      <option value="005">005</option>
                    </select>
                  </div>
                </div>
                <!-- <div class="row">
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
                </div> -->
                <div class="button-row d-flex mt-4">
                  <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                </div>
              </div>
            </div>
            <!--single form panel-->
            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
              <h5 class="font-weight-bolder">DPT & Surat Suara</h5>
              <div class="multisteps-form__content">
                <div class="row mt-3">
                  <div class="col-12">
                    <label>Jumlah Pemilih</label>
                    <input class="multisteps-form__input form-control" name="pemilih" id="" type="number" min="0" placeholder="0" required />
                  </div>
                  <div class="col-12 mt-3">
                    <label>Jumlah Pengguna Hak Pilih</label>
                    <input class="multisteps-form__input form-control" name="pengguna" id="" type="number" min="0" placeholder="0" required />
                  </div>
                  <div class="col-12 mt-3">
                    <label>Jumlah Surat Suara Yang Diterima</label>
                    <input class="multisteps-form__input form-control" name="diterima" id="" type="number" min="0" placeholder="0" required />
                  </div>
                  <div class="col-12 mt-3">
                    <label>Jumlah Surat Suara Yang Digunakan</label>
                    <input class="multisteps-form__input form-control" name="digunakan" id="" type="number" min="0" placeholder="0" required />
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
            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
              <h5 class="font-weight-bolder">Data Suara Sah & Tidah Sah</h5>
              <div class="multisteps-form__content">
                <div class="row mt-3">
                  <div class="col-12">
                    <label>Nomor Urut 01</label>
                    <input class="multisteps-form__input form-control" name="paslon-satu" id="" type="number" min="0" placeholder="0" required />
                  </div>
                  <div class="col-12 mt-3">
                    <label>Nomor Urut 02</label>
                    <input class="multisteps-form__input form-control" name="paslon-dua" id="" type="number" min="0" placeholder="0" required />
                  </div>
                  <div class="col-12 mt-3">
                    <label>Nomor Urut 03</label>
                    <input class="multisteps-form__input form-control" name="paslon-tiga" id="" type="number" min="0" placeholder="0" required />
                  </div>
                  <div class="col-12 mt-3">
                    <label>Nomor Urut 04</label>
                    <input class="multisteps-form__input form-control" name="paslon-empat" id="" type="number" min="0" placeholder="0" required />
                  </div>
                  <div class="col-12 col-sm-6 mt-3">
                    <label>Jumlah Seluruh Suara Sah</label>
                    <input class="multisteps-form__input form-control" name="suara-sah" id="" type="number" min="0" placeholder="0" required />
                  </div>
                  <div class="col-12 col-sm-6 mt-3">
                    <label>Jumlah Suara Tidak Sah</label>
                    <input class="multisteps-form__input form-control" name="tidak-sah" id="" type="number" min="0" placeholder="0" required />
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
              <h5 class="font-weight-bolder">Dokumen Hasil Perhitungan</h5>
              <div class="multisteps-form__content">
                <div class="row mt-3">
                  <div class="col-12">
                    <label>Upload Dokumen</label>
                    <div action="/file-upload" class="form-control dropzone" id="dokumen">
                      <div class="fallback">
                        <input name="dokumen" type="file" multiple required />
                      </div>
                    </div>
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