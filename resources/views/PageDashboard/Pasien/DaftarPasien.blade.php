@extends('Layout.Dashboard')
@section('DASHBOARD')
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Form Rujukan/Konsulatasi - {{$pasien->namalengkap}}</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_profile_details" class="collapse show">
            <!--begin::Form-->
            @php
                $id = $pasien->id;
            @endphp
            <form id="kt_account_profile_details_form" class="form" action="{{ route('storerujukan', $id) }}" method="post">
                @csrf

                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">Tanggal/Jam Masuk</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-2 fv-row">
                                    <input type="text" name="tanggaljam" id="tanggaljam"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Tanggal" />
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">Jaminan</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="jaminan" id="jaminan"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="HPHT" />
                                </div>
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">No Kartu</label>
                                <div class="col-lg fv-row">
                                    <div class="col-lg fv-row">
                                        <input type="number" name="nokartu" id="nokartu"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                            placeholder="No Kartu" />
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">HPHT</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="hpht" id="hpht"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="HPHT" />
                                </div>
                                <!--end::Col-->

                                <!--begin::Label-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Gravida</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="gravida" id="gravida"
                                        class="form-control form-control-lg form-control-solid" placeholder="gravida" />
                                </div>
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Partus</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="partus" id="partus"
                                        class="form-control form-control-lg form-control-solid" placeholder="Partus" />
                                </div>
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Abortus</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="abortus" id="abortus"
                                        class="form-control form-control-lg form-control-solid" placeholder="gravida" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">Keluhan</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg">
                                    <textarea class="form-control form-control-lg form-control-solid" rows="3" placeholder="Keluhan"></textarea>
                                </div>
                                <!--end::Col-->

                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">Pervaginam Berat Bayi Terbesar</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="fname"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        />
                                </div>
                                <!--end::Col-->

                                <!--begin::Label-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Indikasi SC</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <select name="" aria-label="Select a Country" data-control="select2"
                                        data-placeholder="Pilih..."
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                        <option value="">Pilih...1</option>
                                        <option>Tidak</option>
                                        <option>Iya</option>
                                    </select>
                                </div>
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Tahun SC</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="lname"
                                        class="form-control form-control-lg form-control-solid" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">Keadaan Umum</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <select name="" aria-label="Select a Country" data-control="select2"
                                        data-placeholder="Pilih.."
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                        <option value="">Pilih..</option>
                                        <option>Sadar</option>
                                        <option>Sedang</option>
                                        <option>Lemah</option>
                                        <option>Tidak Sadar</option>
                                    </select>
                                </div>
                                <!--end::Col-->

                                <!--begin::Label-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">TD (mmgh)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="lname"
                                        class="form-control form-control-lg form-control-solid" />
                                </div>
                                <!--end::Col-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Nadi (x/menit)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="lname"
                                        class="form-control form-control-lg form-control-solid" />
                                </div>
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Suhu (Celcius)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="lname"
                                        class="form-control form-control-lg form-control-solid" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">HIS</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-2 fv-row">
                                    <select name="" aria-label="Select a Country" data-control="select2"
                                        data-placeholder="Pilih..."
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                        <option value="">Pilih...1</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <!--end::Col-->

                                <!--begin::Label-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">dalam 10 Menit Durasi</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="lname"
                                        class="form-control form-control-lg form-control-solid" />
                                </div>
                                <!--end::Col-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">DJJ (x/Menit)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="lname"
                                        class="form-control form-control-lg form-control-solid" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">TFU (cm)</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="lname"
                                        class="form-control form-control-lg form-control-solid" />
                                </div>
                                <!--end::Col-->

                                <!--begin::Label-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Lingkar Pinggang (cm)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="lname"
                                        class="form-control form-control-lg form-control-solid" />
                                </div>
                                <!--end::Col-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Tbj (gram)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="lname"
                                        class="form-control form-control-lg form-control-solid" />
                                </div>
                                <!--end::Col-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Pembukaan (cm)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <select name="" aria-label="Select a Country" data-control="select2"
                                        data-placeholder="Pilih..."
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                        <option value="">Pilih...1</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">Ketuban</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <select name="" aria-label="Select a Country" data-control="select2"
                                        data-placeholder="Pilih.."
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                        <option value="">Pilih..</option>
                                        <option>utuh</option>
                                        <option>Merembes</option>
                                        <option>Negatif</option>
                                    </select>
                                </div>
                                <!--end::Col-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Warna</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <select name="" aria-label="Select a Country" data-control="select2"
                                        data-placeholder="Pilih.."
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                        <option value="">Pilih..</option>
                                        <option>Jernih</option>
                                        <option>Kehijauan</option>
                                        <option>Mekonium</option>
                                        <option>Darah</option>
                                    </select>
                                </div>
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Bagian Terdepan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <div class="col-lg fv-row">
                                        <input type="text" name="lname"
                                            class="form-control form-control-lg form-control-solid" />
                                    </div>
                                </div>
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Kepala</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <select name="" aria-label="Select a Country" data-control="select2"
                                        data-placeholder="Pilih.."
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                        <option value="">Pilih..</option>
                                        <option>Hodge I</option>
                                        <option>Hodge II</option>
                                        <option>Hodge III</option>
                                        <option>Hodge IV</option>
                                    </select>
                                </div>

                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">Diagnosa</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg">
                                    <textarea class="form-control form-control-lg form-control-solid" rows="3" placeholder="Diagnosa"></textarea>
                                </div>
                                <!--end::Col-->

                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">Alasan Merujuk</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg">
                                    <textarea class="form-control form-control-lg form-control-solid" rows="3" placeholder="Alasan Merujuk"></textarea>
                                </div>
                                <!--end::Col-->

                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <a href="/CariPasien" class="btn btn-danger btn-active-light-primary me-2">Kembali</a>
                    <button type="reset" class="btn btn-info btn-active-light-primary me-2">Reset</button>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
@endsection
