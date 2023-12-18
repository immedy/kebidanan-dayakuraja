@extends('Layout.Dashboard')
@section('DASHBOARD')
    <!--begin::Navbar-->
    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                <!--begin: Pic-->
                <div class="me-7 mb-4">
                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                        <img src="{{ asset('assets/media/avatars/avatar.png') }}" alt="image" />
                        <div
                            class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px">
                        </div>
                    </div>
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="flex-grow-1">
                    <!--begin::Title-->
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <!--begin::User-->
                        <div class="d-flex flex-column">
                            <!--begin::Name-->
                            <div class="d-flex align-items-center mb-2">
                                <a href="#"
                                    class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{ $Pasien->pasien->namalengkap }}</a>
                            </div>
                            <!--end::Name-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                <a href="#"
                                    class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                fill="black" />
                                            <path
                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->{{ $Pasien->pasien->alamat }} </a>
                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                fill="black" />
                                            <path
                                                d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Tanggal Lahir {{ $Pasien->pasien->formatted_date }}</a>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Details-->
            <!--begin::Navs-->
            <div class="d-flex overflow-auto h-55px">
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
                    <!--begin::Nav item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary me-6 active" href="#">Form Rujukan/Konsultasi</a>
                    </li>
                </ul>
            </div>
            <!--begin::Navs-->
        </div>
    </div>
    <!--end::Navbar-->
    <!--begin::details View-->
    <div class="card mb-5 mb-xl-12" id="kt_profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Detail Rujukan</h3>
            </div>
            <button type="button" class="btn btn-primary align-self-center"data-bs-toggle="modal"
                data-bs-target="#kt_modal_1">Advice Dokter</button>
        </div>
        <div class="card-body p-9">
            <div class="row mb-7">

                <div class="col-lg-12">
                    <label class="col-lg-4 fw-bold text-muted">Tanggal/Jam Konsultasi</label>
                    <span class="fw-bolder fs-6 text-gray-800">{{ $Pasien->FormattedDate }}
                    </span>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-lg-12 fv-row">
                    <label class="col-lg-4 fw-bold text-muted">Fasilitas Kesehatan</label>
                    <span class="fw-bold text-gray-800 fs-6">{{ $Pasien->faskes->nama }} </span>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-lg-12 d-flex align-items-center">
                    <label class="col-lg-4 fw-bold text-muted">HPHT</label>
                    <span class="fw-bolder fs-6 text-gray-800 me-2">{{ $Pasien->hpht }} </span>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-lg-12 d-flex align-items-center">
                    <div class="col-lg-4">
                        <label class="col-lg-4 fw-bold text-muted">Paritas</label>
                    </div>
                    <div class="col-lg-2">
                        @if (!empty($Pasien->gravida))
                            <label class="col-lg-4 fw-bold text-muted">Gradiva</label>
                            <span class="fw-bolder fs-6 text-gray-800 me-2">{{ $Pasien->gravida }}</span>
                        @else
                            <label class="col-lg-4 fw-bold text-muted">Gradiva</label>
                            <span class="fw-bolder fs-6 text-gray-800 me-2">0</span>
                        @endif
                    </div>
                    <div class="col-lg-2">
                        @if (!empty($Pasien->partus))
                            <label class="col-lg-4 fw-bold text-muted">Partus</label>
                            <span class="fw-bolder fs-6 text-gray-800 me-2">{{ $Pasien->partus }}</span>
                        @else
                            <label class="col-lg-4 fw-bold text-muted">Partus</label>
                            <span class="fw-bolder fs-6 text-gray-800 me-2">0</span>
                        @endif
                    </div>
                    <div class="col-lg-2">
                        @if (!empty($Pasien->abortus))
                            <label class="col-lg-4 fw-bold text-muted">Abortus</label>
                            <span class="fw-bolder fs-6 text-gray-800 me-2">{{ $Pasien->abortus }} </span>
                        @else
                            <label class="col-lg-4 fw-bold text-muted">Abortus</label>
                            <span class="fw-bolder fs-6 text-gray-800 me-2">0</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-lg-12 d-flex align-items-center">
                    <label class="col-lg-4 fw-bold text-muted">Usia Kehamilan</label>
                    <span class="fw-bolder fs-6 text-gray-800 me-2">{{ $Pasien->usiakandungan }} </span><label
                        class="col-lg-4 fw-bold text-muted">Minggu</label>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-lg-12 d-flex align-items-center">
                    <label class="col-lg-4 fw-bold text-muted">Anamnesa</label>
                    <span class="fw-bolder fs-6 text-gray-800 me-2">{{ $Pasien->keluhan }} </span>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-lg-12 d-flex align-items-center">
                    <div class="col-lg-4">
                        <label class="col-lg-4 fw-bold text-muted">Bila Pervaginam Berat Bayi Terbesar</label>
                    </div>
                    <div class="col-lg-1">
                        <span class="fw-bolder fs-6 text-gray-800 me-2">{{$Pasien->pervaginambbmax}} </span>
                    </div>
                    <div class="col-lg-2">
                        <label class="col-lg-4 fw-bold text-muted">Indikasi SC</label>
                        <span class="fw-bolder fs-6 text-gray-800 me-2">{{$Pasien->INDIKASI->deskripsi}} </span>
                    </div>
                    <div class="col-lg-2">
                        <label class="col-lg-4 fw-bold text-muted">Tahun SC</label>
                        <span class="fw-bolder fs-6 text-gray-800 me-2">{{$Pasien->tahunsc}} </span>
                    </div>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-lg-12 d-flex align-items-center">
                    <div class="col-lg-4">
                        <label class="col-lg-4 fw-bold text-muted">Keadaan umum</label>
                    </div>
                    <div class="col-lg-1">
                        <span class="fw-bolder fs-6 text-gray-800 me-2">{{ $Pasien->KeadaanUmum->deskripsi}}</span>
                    </div>
                    <div class="col-lg-2">
                        <span class="fw-bolder fs-6 text-gray-800 me-2">TD = {{$Pasien->td}}</span>
                        <label class="col-lg-4 fw-bold text-muted"> mmGh</label>
                    </div>
                    <div class="col-lg-2">
                        <span class="fw-bolder fs-6 text-gray-800 me-2">Nadi = {{$Pasien->nadi}}</span>
                        <label class="col-lg-4 fw-bold text-muted"> x/Menit</label>
                    </div>
                    <div class="col-lg-2">
                        <span class="fw-bolder fs-6 text-gray-800 me-2">RI = {{$Pasien->ri}}</span>
                        <label class="col-lg-4 fw-bold text-muted"> x/Menit</label>
                    </div>
                    <div class="col-lg-2">
                        <span class="fw-bolder fs-6 text-gray-800 me-2">Suhu {{$Pasien->suhu}}</span>
                        <label class="col-lg-4 fw-bold text-muted">C</label>
                    </div>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-lg-12 d-flex align-items-center">
                    <div class="col-lg-4">
                        <label class="col-lg-4 fw-bold text-muted">His </label>
                    </div>
                    <div class="col-lg-1">
                        <span class="fw-bolder fs-6 text-gray-800 me-2"> {{$Pasien->his}} X/10 Menit</span>
                    </div>
                    <div class="col-lg-2">
                        <span class="fw-bolder fs-6 text-gray-800 me-2">{{$Pasien->durasi}}</span>
                        <label class="col-lg-4 fw-bold text-muted">Detik</label>
                    </div>
                    <div class="col-lg-2">
                        <label class="col-lg-4 fw-bold text-muted">DJJ</label>
                        <span class="fw-bolder fs-6 text-gray-800 me-2">{{$Pasien->djj}}</span>
                        <label class="col-lg-4 fw-bold text-muted">x/Menit</label>
                    </div>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-lg-12 d-flex align-items-center">
                    <div class="col-lg-4">
                        <label class="col-lg-4 fw-bold text-muted">TFU </label>
                    </div>
                    <div class="col-lg-1">
                        <span class="fw-bolder fs-6 text-gray-800 me-2"> {{$Pasien->tfu}} CM</span>
                    </div>
                    <div class="col-lg-3">
                        <label class="col-lg-4 fw-bold text-muted">Lingkar Pinggang</label>
                        <span class="fw-bolder fs-6 text-gray-800 me-2">{{$Pasien->lingkarpinggang}}</span>
                        <label class="col-lg-4 fw-bold text-muted">cm</label>
                    </div>
                    <div class="col-lg-2">
                        <label class="col-lg-4 fw-bold text-muted">Tbj</label>
                        <span class="fw-bolder fs-6 text-gray-800 me-2">{{$Pasien->tbj}} </span>
                        <label class="col-lg-4 fw-bold text-muted">Gram</label>
                    </div>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-lg-12 d-flex align-items-center">
                    <div class="col-lg-4">
                        <label class="col-lg-4 fw-bold text-muted">Pembukaan</label>
                    </div>
                    <div class="col-lg-1">
                        <span class="fw-bolder fs-6 text-gray-800 me-2"> {{$Pasien->pembukaan}}</span>
                        <label class="col-lg-4 fw-bold text-muted">CM</label>
                    </div>
                    <div class="col-lg-2">
                        <label class="col-lg-4 fw-bold text-muted">Ketuban</label>
                        <span class="fw-bolder fs-6 text-gray-800 me-2">{{$Pasien->Ketuban->deskripsi}} </span>
                    </div>
                    <div class="col-lg-4">
                        <label class="col-lg-4 fw-bold text-muted">Warna Ketuban</label>
                        <span class="fw-bolder fs-6 text-gray-800 me-2">{{$Pasien->WarnaKetuban->deskripsi}} </span>
                    </div>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-lg-12 d-flex align-items-center">
                    <div class="col-lg-4">
                        <label class="col-lg-4 fw-bold text-muted">Bagian Terdepan</label>
                    </div>
                    <div class="col-lg-1">
                        <span class="fw-bolder fs-6 text-gray-800 me-2">{{$Pasien->bagianterdepan}}</span>
                    </div>
                    <div class="col-lg-2">
                        <label class="col-lg-4 fw-bold text-muted">Kepala</label>
                        <span class="fw-bolder fs-6 text-gray-800 me-2">{{$Pasien->Kepala->deskripsi}}</span>
                    </div>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-lg-12 d-flex align-items-center">
                    <label class="col-lg-4 fw-bold text-muted">Diagnosa</label>
                    <span class="fw-bolder fs-6 text-gray-800 me-2">{{$Pasien->diagnosa}}</span>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-lg-12 d-flex align-items-center">
                    <label class="col-lg-4 fw-bold text-muted">Terapi yang telah berikan</label>
                    <span class="fw-bolder fs-6 text-gray-800 me-2">{{ $Pasien->terapi }} </span>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-lg-12 d-flex align-items-center">
                    <label class="col-lg-4 fw-bold text-muted">Alasan Merujuk</label>
                    <span class="fw-bolder fs-6 text-gray-800 me-2">{{ $Pasien->alasanmerujuk }} </span>
                </div>
            </div>
        </div>
        <!--end::Card body-->
    </div>
    {{-- Modal --}}
    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <form action="{{ route('TambahAdvice', ['filter' => Crypt::encryptString($Pasien->id)]) }}"
                        method="post">
                        @method('post')
                        @csrf
                        <h5 class="modal-title">Input Advice Dokter</h5>

                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span class="svg-icon svg-icon-2x"></span>
                        </div>
                        <!--end::Close-->
                </div>

                <div class="modal-body">
                    <Textarea name="advicedokter" class="form-control"></Textarea>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Modal --}}
@endsection
