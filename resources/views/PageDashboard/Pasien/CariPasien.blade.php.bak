@extends('Layout.Dashboard')
@section('DASHBOARD')
    <div class="row gy-10 g-xxl">
        <!--begin::Col-->
        <div class="col-xl-12">

            <div class="card card-xl-stretch mb-4 mb-xl-8">
                <div class="card-header border1 pt-5">
                    <h4 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-2 mb-1">pasien</span>
                    </h4>
                    <form action="">
                        <div class="card-toolbar">
                            <div>
                                <input type="text" id="caripasien" name="caripasien" value="" class="form-control sm me-6"
                                    placeholder="Cari Pasien" />
                            </div>
                            <div>
                                <button type="submit"
                                    class="btn btn-icon btn-outline-warning btn-active-light-info border border-success btn-sm me-1"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cari Pegawai"><span
                                        class="indicator-label">
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                            </svg>
                                        </span>
                                    </span>
                                </button>
                            </div>
                            <a href="/TambahPasien"
                                class="border border-success btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                        <path
                                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                        <path
                                            d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                        </div>
                    </form>
                </div>
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bolder text-muted">
                                    <th class="w-25px">
                                        No
                                    </th>
                                    <th class="min-w-150px">Nama</th>
                                    <th class="min-w-140px">Tanggal Lahir</th>
                                    <th class="min-w-120px text-center">Alamat</th>
                                    <th class="min-w-120px text-center">Faskes </th>
                                    <th class="min-w-100px text-center">Aksi</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                @php
                                    $no = 0;
                                @endphp
                                @foreach ($patiens as $patien)
                                    @php
                                        $no++;
                                    @endphp
                                    <tr>
                                        <td>
                                            {{ $no }}
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary fs-6">{{ $patien->namalengkap }}</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $patien->tanggal_lahir }}</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex flex-column w-100 me-2">
                                                <span
                                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $patien->alamat }}</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex flex-column w-100 me-2">
                                                <span
                                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $patien->FaskesPegawai->nama }}</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                <a href="{{ route('EditPasien', ['filter' => Crypt::encryptString($patien->id)]) }}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-info btn-sm me-1 border border-success"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Pasien">
                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-person-vcard"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5" />
                                                            <path
                                                                d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12z" />
                                                        </svg>
                                                    </span>
                                                </a>
                                                <a href="{{ route('createrujukan', ['filter' => Crypt::encryptString($patien->id)]) }}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-info btn-sm me-1 border border-info"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Rujuk Pasien Pasien">
                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-pencil-square"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->
            </div>

        </div>
    </div>
@endsection
