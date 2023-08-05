@extends('Layout.Dashboard')
@section('DASHBOARD')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar pt-5">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
                    <!--begin::Toolbar wrapper-->
                    <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column gap-1 me-3 mb-2">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">
                                Pasien</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div>
                            <a href="/TambahPasien"
                                class="btn btn-icon-info btn-outline-danger btn-active-light-success border-success border"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Pasien"><span
                                    class="indicator-label">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                            <path
                                                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                    </span>
                                </span>
                            </a>
                            <a href="/"
                                class="btn btn-icon-info btn-outline-danger btn-active-success border-primary border"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Kembali Kehalaman Utama"><span
                                    class="indicator-label">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                                            <path
                                                d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z" />
                                            <path
                                                d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z" />
                                        </svg>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Toolbar wrapper-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <!--begin::Products-->
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="text" data-kt-ecommerce-product-filter="search"
                                        class="form-control form-control-solid w-250px ps-12"
                                        placeholder="Search Product" />
                                </div>
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                No
                                            </div>
                                        </th>
                                        <th class="min-w-200px">Pasien</th>
                                        <th class="text-center min-w-100px">NIK</th>
                                        <th class="text-center min-w-70px">Alamat</th>
                                        <th class="text-center min-w-100px">Tempat Lahir</th>
                                        <th class="text-end min-w-70px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    {{-- @foreach ($pasien as $p) --}}
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name"></a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="fw-bold">089089890888088</span>
                                        </td>
                                        <td class="text-end pe-0" data-order="34">
                                            <span class="fw-bold ms-3">jalan ini sanan anisnsinsi</span>
                                        </td>
                                        <td class="text-center">12-02-2000</td>

                                        <td class="text-end">
                                            <div>
                                                <a href=""
                                                    class="btn btn-icon-info btn-outline-danger btn-active-info border-info border">
                                                    <span class="indicator-label" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Edit  Pasien">
                                                        <span class="svg-icon svg-icon-2" >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                              </svg>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a href=""
                                                    class="btn btn-icon-success btn-outline-danger btn-active-success border-success border"
                                                     data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_2">
                                                    <span class="indicator-label" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Daftar">
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text" viewBox="0 0 16 16">
                                                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                                              </svg>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Products-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
    {{-- Modal --}}
    <div class="modal fade" tabindex="-1" id="kt_modal_scrollable_2">
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Daftar Pasien</h5>
    
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
    
                <div class="modal-body">
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
                    </div>
                </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- modal --}}
@endsection
