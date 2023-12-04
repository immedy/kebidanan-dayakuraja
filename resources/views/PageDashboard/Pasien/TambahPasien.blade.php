@extends('Layout.Dashboard')
@section('DASHBOARD')
    <div class="row gy-10 g-xxl">
        <!--begin::Col-->
        <div class="col-xl-12">
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Data Pasien Baru</span>
                    </h3>

                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <!--begin::Col-->
                        <div class="col-md-12 ">
                            <!--begin::Form-->
                            <form action="" class="form mb-15" method="post" id="kt_contact_form">
                                <!--begin::Input group-->
                                <div class="row mb-3">
                                    <!--begin::Col-->
                                    <label class="fs-5 fw-semibold mb-2">Data Identitas Pasien Baru</label>
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
                                            name="" id="Tanggal" />
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
                                            {{-- <select name="provinsi" id="provinsi" class="form-control-sm" required>
                                                <option selected disabled value="">Pilih Provinsi</option>
                                                @if ($provincies->count())
                                                    @foreach ($provincies as $prov)
                                                        <option value="{{ $prov->ID }}">{{ $prov->DESKRIPSI }}</option>
                                                    @endforeach
                                                @endif
                                            </select> --}}
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="KABUPATEN" name="kota" id="kota" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="KECAMATAN" name="kecamatan" id="kecamatan" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="KELURAHAN/DESA" name="desa" id="desa" />
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
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#provinsi').on('change', function () {
            var provinsiId = this.value;
            $('#kota').html('');
            $.ajax({
                url: '{{ route('getCity') }}?id='+provinsiId,
                type: 'get',
                success: function (res) {
                    $('#kota').html('<option selected disabled value="">Pilih Kabupaten</option>');
                        $.each(res, function (key, value) {
                            $('#kota').append('<option value= "' + value.ID + '">' + value.DESKRIPSI + '</option>');
                            $('#kecamatan').html('<option selected disabled value="">Pilih Kecamatan</option>');
                        });
                }
            });
        });
        $('#kota').on('change', function () {
            var cityId = this.value;
            $('#kecamatan').html('');
            $.ajax({
                url: '{{ route('getCounty') }}?id='+cityId,
                type: 'get',
                success: function (res) {
                    $('#kecamatan').html('<option selected disabled value="">Pilih Kecamatan</option>');
                        $.each(res, function (key, value) {
                            $('#kecamatan').append('<option value="'+ value.ID +'">' + value.DESKRIPSI +'</option>');
                            $('#desa').html('<option selected disabled value="">Pilih Desa</option>');
                        });
                }
            });
        });
        $('#kecamatan').on('change', function () {
            var countyId = this.value;
            $('#desa').html('');
            $.ajax({
                url: '{{ route('getVillage') }}?id='+countyId,
                type: 'get',
                success: function (res) {
                    $('#desa').html('<option selected disabled value="">Pilih Desa</option>');
                        $.each(res, function (key, value) {
                            $('#desa').append('<option value="'+ value.ID +'">'+ value.DESKRIPSI +'</option>');
                        });
                }
            });
        });
    });
</script>

@endsection
