@extends('Layout.Dashboard')
@section('DASHBOARD')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Row-->
            <div class="row gx-5 gx-xl-10">
                <!--begin::Col-->
                <div class="col-xl-12 mb-5">
                    <!--begin::Tables widget 16-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Kunjungan Pasien</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="/CariPasien" class="btn btn-icon-info btn-outline-danger btn-active-light-success"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Cari Pasien"><span
                                        class="indicator-label">
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                              </svg>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-6">
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                    <th class="p-0 pb-3 min-w-110px text-start">PASIEN</th>
                                                    <th class="p-0 pb-3 w-250px text-end pe-13">No Registarsi</th>
                                                    <th class="p-0 pb-3 w-250px text-end pe-7">TANGGAL LAHIR/TEMPAT LAHIR
                                                    </th>
                                                    <th class="p-0 pb-3 w-50px text-end">DETAIL</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="assets/media/avatars/300-2.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane
                                                                    Cooper</a>
                                                                <span class="text-gray-400 fw-semibold d-block fs-7">JALAN
                                                                    kOTA bANYNUSDASDAS SDASDASDASD</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">56745674565645645645</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-600 fw-bold fs-6">19-02-2000 | Kota
                                                            Bangun</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn btn-icon-info btn-outline-danger btn-active-light-success"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Detail"><span class="indicator-label">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-card-checklist" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                                                        <path
                                                                            d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Tables widget 16-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
@endsection
