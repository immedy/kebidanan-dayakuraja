@extends('Layout.Dashboard')
@section('DASHBOARD')
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Edit Form Rujukan/Konsulatasi - {{ $Pasien->pasien->namalengkap }}</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_profile_details" class="collapse show">
            <!--begin::Form-->
            @php
                // $id = $Pasien->pasien->id;
            @endphp
            <form id="kt_account_profile_details_form" class="form"
                action="{{ route('RujukanUpdate', ['filter' => Crypt::encryptString($Pasien->id)]) }}" method="post">
                @method('put')
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
                                    <input type="datetime" name="tanggaljam" id="tanggaljam"
                                        value="{{ $Pasien->tanggaljam }}"
                                        class="form-control form-control-lg form-control mb-3 mb-lg-0"
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
                                    <select name="jaminan" class="form-select form-select-solid mb-2" data-control="select2"
                                        required>
                                        <option value="{{ $Pasien->jaminan }}"> {{ $Pasien->Jaminan->deskripsi }} </option>
                                        @foreach ($jaminan as $p)
                                            <option value="{{ $p->id }}"> {{ $p->deskripsi }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">No Kartu</label>
                                <div class="col-lg fv-row">
                                    <div class="col-lg fv-row">
                                        <input type="number" name="nokartu" id="nokartu"
                                            class="form-control form-control-lg form-control mb-3 mb-lg-0"
                                            placeholder="No Kartu" value="{{ $Pasien->nokartu }}" />
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
                                    <input type="" name="hpht" id="HPHT" value="{{ $Pasien->hpht }}"
                                        class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="HPHT" />
                                </div>
                                <!--end::Col-->

                                <!--begin::Label-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Gravida</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="gravida" id="gravida"
                                        class="form-control form-control-lg form-control" placeholder="gravida"
                                        value="{{ $Pasien->gravida }}" />
                                </div>
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Partus</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="partus" id="partus"
                                        class="form-control form-control-lg form-control" placeholder="Partus"
                                        value="{{ $Pasien->partus }}" />
                                </div>
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Abortus</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="abortus" id="abortus"
                                        class="form-control form-control-lg form-control" value="{{ $Pasien->abortus }}"
                                        placeholder="abortus" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">Usia Kandungan</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-3 fv-row">
                                    <input type="text" name="usiakandungan"
                                        class="form-control form-control-lg form-control mb-3 mb-lg-0"
                                        placeholder="Usia Kandungan" value="{{ $Pasien->usiakandungan }}" />
                                </div>
                                <!--end::Col-->

                                <!--begin::Label-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Minggu</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="berat" id="berat"
                                        class="form-control form-control-lg form-control" placeholder="Dalam Gram"
                                        value="{{ $Pasien->berat }}" />
                                </div>
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Berat</label>

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
                                    <textarea id="keluhan" name="keluhan" class="form-control form-control-lg form-control" rows="3"
                                        placeholder="Keluhan">{{ $Pasien->keluhan }} </textarea>
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
                                    <input type="text" name="pervaginambbmax" value="{{ $Pasien->pervaginambbmax }}"
                                        id="pervaginambbmax"
                                        class="form-control form-control-lg form-control mb-3 mb-lg-0" />
                                </div>
                                <!--end::Col-->

                                <!--begin::Label-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Indikasi SC</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <select name="indikasisc" id="indikasisc" aria-label="Select a Country"
                                        data-control="select2" data-placeholder="Pilih..."
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                        <option disabled value="">Pilih Indikasi</option>
                                        @foreach ($indikasi as $p)
                                            <option value="{{ $p->id }}"> {{ $p->deskripsi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Tahun SC</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <select name="tahunsc" id="TahunSc" aria-label="Select a Country"
                                        data-control="select2"
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                        <option disabled value=""></option>
                                    </select>
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
                                    <select name="keadaanumum" id="keadaanumum" aria-label="Select a Country"
                                        data-control="select2" data-placeholder="Pilih.."
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                        @foreach ($KeadaanUmum as $p)
                                            <option value="{{ $p->id }}">{{ $p->deskripsi }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <!--end::Col-->

                                <!--begin::Label-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">TD (mmgh)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="td" id="td" value="{{ $Pasien->td }}"
                                        class="form-control form-control-lg form-control" />
                                </div>
                                <!--end::Col-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Nadi (x/menit)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="nadi" id="nadi" value="{{ $Pasien->nadi }}"
                                        class="form-control form-control-lg form-control" />
                                </div>
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Suhu (Celcius)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="suhu" id="suhu" value="{{ $Pasien->suhu }}"
                                        class="form-control form-control-lg form-control" />
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
                                    <select name="his" aria-label="Select a Country" data-control="select2"
                                        data-placeholder="Pilih..."
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                        @if (!empty($Pasien->HIS->id))
                                            <option value="{{ $Pasien->HIS->id }}">{{ $Pasien->HIS->deskripsi }}
                                            </option>
                                        @endif
                                        @foreach ($his as $p)
                                            <option value="{{ $p->id }}"> {{ $p->deskripsi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!--end::Col-->

                                <!--begin::Label-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">dalam 10 Menit Durasi</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="durasi" id="durasi" value="{{ $Pasien->durasi }}"
                                        class="form-control form-control-lg form-control" />
                                </div>
                                <!--end::Col-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">DJJ (x/Menit)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="djj" id="djj" value="{{ $Pasien->djj }}"
                                        class="form-control form-control-lg form-control" />
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
                                    <input type="text" name="tfu" id="tfu"
                                        class="form-control form-control-lg form-control" value="{{ $Pasien->tfu }}" />
                                </div>
                                <!--end::Col-->

                                <!--begin::Label-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Lingkar Pinggang (cm)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="lingkarpinggang" id="lingkarpinggang"
                                        value="{{ $Pasien->lingkarpinggang }}"
                                        class="form-control form-control-lg form-control" />
                                </div>
                                <!--end::Col-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Tbj (gram)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <input type="text" name="tbj" id="tbj" value="{{ $Pasien->tbj }}"
                                        class="form-control form-control-lg form-control" />
                                </div>
                                <!--end::Col-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Pembukaan (cm)</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <select name="pembukaan" id="pembukaan" aria-label="Select a Country"
                                        data-control="select2" data-placeholder="Pilih..."
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                        @if (!empty($Pasien->Pembukaan->id))
                                            <option value="{{ $Pasien->Pembukaan->id }}">{{ $Pasien->Pembukaan->deskripsi }}
                                            </option>
                                        @endif

                                        <option value="">Pilih...</option>
                                        @foreach ($pembukaan as $p)
                                            <option value="{{ $p->id }}">{{ $p->deskripsi }} </option>
                                        @endforeach
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
                                    <select name="ketuban" id="ketuban" aria-label="Select a Country"
                                        data-control="select2" data-placeholder="Pilih.."
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                        @if (!empty($Pasien->Ketuban->id))
                                            <option value="{{ $Pasien->Ketuban->id }}">{{ $Pasien->Ketuban->deskripsi }}
                                            </option>
                                        @endif
                                        @foreach ($ketuban as $p)
                                            <option value="{{ $p->id }}">{{ $p->deskripsi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!--end::Col-->
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Warna</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <select name="warnaketuban" id="warnaketuban" aria-label="Select a Country"
                                        data-control="select2" data-placeholder="Pilih.."
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                        @if (!empty($Pasien->Kepala->id))
                                            <option value="{{ $Pasien->WarnaKetuban->id }}">
                                                {{ $Pasien->WarnaKetuban->deskripsi }}</option>
                                        @endif
                                        <option value="">Pilih...</option>
                                        @foreach ($warna as $p)
                                            <option value="{{ $p->id }}">{{ $p->deskripsi }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Bagian Terdepan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <div class="col-lg fv-row">
                                        <input type="text" name="bagianterdepan" id="bagianterdepan"
                                            class="form-control form-control-lg form-control"
                                            value="{{ $Pasien->bagianterdepan }}" />
                                    </div>
                                </div>
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Kepala</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg fv-row">
                                    <select name="kepala" id="kepala" aria-label="Select a Country"
                                        data-control="select2" data-placeholder="Pilih.."
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                        @if (!empty($Pasien->Kepala->id))
                                            <option value="{{ $Pasien->Kepala->id }}">{{ $Pasien->Kepala->deskripsi }}
                                            </option>
                                        @endif

                                        <option value="">Pilih...</option>
                                        @foreach ($kepala as $p)
                                            <option value="{{ $p->id }}">{{ $p->deskripsi }} </option>
                                        @endforeach
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
                                    <textarea name="diagnosa" id="diagnosa" class="form-control form-control-lg form-control" rows="3"
                                        placeholder="Diagnosa">{{ $Pasien->diagnosa }}</textarea>
                                </div>
                                <!--end::Col-->

                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">Terapi yang Diberikan</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg">
                                    <textarea name="terapi" class="form-control form-control-lg form-control" rows="3"
                                        placeholder="Terapi yang Di berikan">{{ $Pasien->terapi }} </textarea>
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
                                    <textarea name="alasanmerujuk" class="form-control form-control-lg form-control" rows="3"
                                        placeholder="Alasan Merujuk">{{ $Pasien->alasanmerujuk }}</textarea>
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
                    <a href="/" class="btn btn-danger btn-active-light-primary me-2">Kembali</a>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
@endsection
