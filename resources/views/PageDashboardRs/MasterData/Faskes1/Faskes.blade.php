@extends('Layout.Dashboard')
@section('DASHBOARD')
    <div class="row gy-5 g-xl-8">       
        <div class="col-xl">
            <!--begin::Tables Widget 9-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Fasilitas Kesehatan</span>                        
                    </h3>
                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                        title="Tambah Faskes">
                        <button type="button"
                            class=" border border-success btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                            data-bs-toggle="modal" data-bs-target="#kt_modal_2">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                        transform="rotate(-90 11.364 20.364)" fill="black" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                        fill="black" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
                <!--end::Header-->
                <div class="modal fade" tabindex="-1" id="kt_modal_2">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('AddFaskes') }}" method="POST">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Faskes</h5>

                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                        data-bs-dismiss="modal" aria-label="Close">
                                        <span class="svg-icon svg-icon-2x"></span>
                                    </div>
                                    <!--end::Close-->
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-10">
                                                <label for="exampleFormControlInput1" class="required form-label">No Faskes</label>
                                                    <input type="text" class="form-control form-control-solid"
                                                    name="nofaskes" placeholder="Input Disini" />                                
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-10">
                                                <label for="exampleFormControlInput1" class="required form-label">No Faskes BPJS</label>
                                                    <input type="text" class="form-control form-control-solid"
                                                    name="nofaskesbpjs" placeholder="Input Disini" />                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1"
                                            class="required form-label">Nama Fasilitas Kesehatan</label>
                                        <input type="text" class="form-control form-control-solid"
                                            name="nama" placeholder="Input Disini" />
                                    </div>
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1"
                                            class="required form-label">Alamat Fasilitas Kesehatan</label>
                                        <input type="text" class="form-control form-control-solid"
                                            name="alamat" placeholder="Input Disini" />
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light"
                                        data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
                                        NO
                                    </th>
                                    <th class="min-w-150px">Nama</th>
                                    <th class="min-w-140px">No Faskes</th>                                    
                                    <th class="min-w-100px text-end">Actions</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                @foreach ($faskes as $p )
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            {{ $loop->iteration }} 
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">                                            
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">{{ $p->nama }}</a>
                                                <span class="text-muted fw-bold text-muted d-block fs-7">{{$p->alamat}}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $p->nofaskes }}</a>
                                        <span class="text-muted fw-bold text-muted d-block fs-7">{{ $p->nofaskesbpjs }}</span>
                                    </td>                                    
                                    <td>
                                        <div class="d-flex justify-content-end flex-shrink-0">                                            
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
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
