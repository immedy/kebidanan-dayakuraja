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
                    <form id="searchForm" action="{{ route('search.patients') }}" method="get">
                        <div class="card-toolbar">
                            <div>
                                <input type="text" id="caripasien" name="caripasien" value=""
                                    class="form-control sm me-6" placeholder="Cari Pasien" />
                            </div>
                            <div>
                                <button type="submit"
                                    class="btn btn-icon btn-outline-warning btn-active-light-info border border-success btn-sm me-1"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cari Pegawai">
                                    <span class="indicator-label">
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
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                        <path
                                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                        <path
                                            d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </form>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive">
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                            <thead>
                                <tr class="fw-bolder text-muted">
                                    <th class="w-25px">No</th>
                                    <th class="min-w-150px">Nama</th>
                                    <th class="min-w-140px">Tanggal Lahir</th>
                                    <th class="min-w-120px text-center">Alamat</th>
                                    <th class="min-w-120px text-center">Faskes </th>
                                    <th class="min-w-100px text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                @foreach ($patients as $patient)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary fs-6">{{ $patient->namalengkap }}</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $patient->tanggal_lahir }}</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex flex-column w-100 me-2">
                                                <span class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $patient->alamat }}</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex flex-column w-100 me-2">
                                                <span class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $patient->FaskesPegawai->nama }}</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                <a href="{{ route('EditPasien', ['filter' => Crypt::encryptString($patient->id)]) }}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-info btn-sm me-1 border border-success"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Pasien">
                                                    <span class="svg-icon svg-icon-3">
                                                        <!-- Add your SVG icon code -->
                                                    </span>
                                                </a>
                                                <!-- Add other action buttons as needed -->
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
