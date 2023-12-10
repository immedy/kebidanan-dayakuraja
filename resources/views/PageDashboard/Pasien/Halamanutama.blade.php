@extends('Layout.Dashboard')
@section('DASHBOARD')
    <div class="row gy-10 g-xxl">
        <!--begin::Col-->
        <div class="col-xl-12">
            <!--begin::Tables Widget 9-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Kunjungan</span>
                    </h3>
                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                        title="Cari Pasien">
                        <a href="/CariPasien"
                            class="border border-success btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-add" viewBox="0 0 16 16">
                                    <path
                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                    <path
                                        d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
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
                                    <th class="min-w-120px text-center">Tanggal Rujuk</th>
                                    <th class="min-w-50px text-center">Status</th>
                                    <th class="min-w-100px text-center">Aksi</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                @foreach ($pasien as $p)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary fs-6">{{ $p->pasien->namalengkap }}
                                                    </a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">No reg
                                                        {{ $p->id }} </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $p->pasien->FormattedDate }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex flex-column w-100 me-2">
                                                <span
                                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $p->pasien->alamat }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span
                                                class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $p->FormattedDate }}</span>
                                        </td>
                                        <td class="text-center">
                                            @if ($p->status == 0)
                                            <span class="badge badge-light-danger fs-8 fw-bolder">Belum Diterima</span>    
                                            @else
                                            <span class="badge badge-light-success fs-8 fw-bolder">Diterima</span>  
                                            @endif
                                            
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center flex-shrink-0">
                                                <a href="{{route('EditDetailRujukan', $p->id) }}" 
                                                    class="btn btn-icon btn-bg-light btn-active-color-info btn-sm me-1 border border-success"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Rujukan">
                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-book"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a>
                                                <a href="{{route('AdviceDokter')}}"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Advice Dokter"
                                                    class="btn btn-icon btn-bg-light btn-active-color-info btn-sm me-1 border border-info">
                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-view-stacked"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3 0h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm0 8h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                                                        </svg>
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
            <!--end::Tables Widget 9-->
        </div>
        <!--end::Col-->
    </div>
@endsection
