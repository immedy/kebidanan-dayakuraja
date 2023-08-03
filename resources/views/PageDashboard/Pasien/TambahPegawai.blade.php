@extends('Layout.Dashboard')
@section('DASHBOARD')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Contact-->
            <div class="card">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Row-->
                    <div class="row mb-3">
                        <!--begin::Col-->
                        <div class="col-md-12 ">
                            <!--begin::Form-->
                            <form action="" class="form mb-15" method="post" id="kt_contact_form">
                                <!--begin::Input group-->
                                <div class="row mb-3">
                                    <!--begin::Col-->
                                    <label class="fs-5 fw-semibold mb-2">Data Identitas</label>
                                    <div class="col-md-2 fv-row">
                                        <input type="number" class="form-control form-control-solid mb-2 "
                                            placeholder="NORM RS" name="" />
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="NAMA LENGKAP" name="" />
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="NAMA PANGGILAN" name="" />
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <input type="" class="form-control form-control-solid mb-2"
                                            placeholder="TEMPAT LAHIR" name="" />
                                    </div>
                                    <div class="col-md-2 fv-row">
                                        <input class="form-control form-control-solid mb-2" placeholder="TANGGAL lAHIR"
                                            name="" id="TANGGAL_LAHIR" />
                                    </div>
                                    <div class="col-md-1 fv-row">
                                        <input type="number" class="form-control form-control-solid mb-2"
                                            placeholder="Umur Thn" name="" />
                                    </div>
                                    <div class="col-md-1 fv-row">
                                        <input type="number" class="form-control form-control-solid mb-2"
                                            placeholder="Umur Bln" name="" />
                                    </div>
                                    <div class="col-md-1 fv-row">
                                        <input type="number" class="form-control form-control-solid mb-2"
                                            placeholder="Umur Hr" name="" />
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="STATUS PERKAWINAN" name="" />
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="AGAMA" name="" />
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="PENDIDIKAN" name="" />
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="PEKERJAAN" name="" />
                                    </div>
                                    <div class="col-md-4 mb-15 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="GOL DARAH" name="" />
                                    </div>
                                    <label class="fs-5 fw-semibold mb-2">Alamat Sekarang</label>
                                    <div class="col-md-12 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="ALAMAT" name="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="PROVINSI" name="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="KABUPATEN" name="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="KECAMATAN" name="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="KELURAHA/DESA" name="" />
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="RT" name="" />
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="RW" name="" />
                                    </div>
                                    <div class="col-md-4 mb-5 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="KODE POS" name="" />
                                    </div>
                                    <label class="fs-5 fw-semibold mb-2">Kartu Identitas</label>
                                    <div class="col-md-12 fv-row">
                                        <input class="form-check-input" type="checkbox" value="" />
                                        <label class="form-check-label mb-3" for="flexCheckDefault">
                                            Sama Dengan Alamat Sekarang
                                        </label>
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="JENIS IDENTITAS" name="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="NO KARTU" name="" />
                                    </div>
                                    <div class="col-md-12 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="ALAMAT" name="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="PROVINSI" name="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="KABUPATEN" name="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="KECAMATAN" name="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="KELURAHA/DESA" name="" />
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="RT" name="" />
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="RW" name="" />
                                    </div>
                                    <div class="col-md-4 mb-5 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="KODE POS" name="" />
                                    </div>
                                    <div class="modal-footer">
                                        <a href="/" type="button" class="btn btn-danger btn-outline ">Tutup</a>
                                        <button type="submit" class="btn btn-primary btn-outline">Simpan</button>
                                    </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Contact-->
        </div>
        <!--end::Content container-->
    </div>
@endsection
