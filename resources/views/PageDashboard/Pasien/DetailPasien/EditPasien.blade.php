@extends('Layout.Dashboard')
@section('DASHBOARD')
    <div class="row gy-10 g-xxl">
        <!--begin::Col-->
        <div class="col-xl-12">
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1"> Edit Data Pasien </span>
                    </h3>

                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <!--begin::Col-->
                        <div class="col-md-12 ">
                            <!--begin::Form-->
                            <form action="{{ route('UpdatePasien', ['filter' => Crypt::encryptString($pasien->id)]) }}" class="form mb-15" method="post" id="kt_contact_form">
                                @method('put')
                                @csrf
                                <!--begin::Input group-->
                                <div class="row mb-3">
                                    <!--begin::Col-->
                                    <label class="fs-5 fw-semibold mb-2">Data Identitas Pasien</label>
                                    <div class="col-md-2 fv-row">
                                        <input type="number" class="form-control form-control-solid mb-2 "
                                            placeholder="NORM RS" name="norm" id="norm" value="{{ $pasien->norm }}" />
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="NAMA LENGKAP" name="namalengkap" value="{{$pasien->namalengkap}}"/>
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="NAMA PANGGILAN" name="namapanggilan" value="{{ $pasien->namapanggilan }}"/>
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <input type="" class="form-control form-control-solid mb-2"
                                            placeholder="TEMPAT LAHIR" name="tempat_lahir" value="{{ $pasien->tempat_lahir }}"/>
                                    </div>
                                    <div class="col-md-2 fv-row">
                                        <input class="form-control form-control-solid mb-2" placeholder="TANGGAL lAHIR"
                                            name="tanggal_lahir" id="Tanggal" value="{{ $pasien->tanggal_lahir }}"/>
                                    </div>
                                    <div class="col-md-1 fv-row">
                                        <input type="number" class="form-control form-control-solid mb-2"
                                            placeholder="Umur Thn" name="" id="umur_tahun"/>
                                    </div>
                                    <div class="col-md-1 fv-row">
                                        <input type="number" class="form-control form-control-solid mb-2"
                                            placeholder="Umur Bln" name="" id="umur_bulan"/>
                                    </div>
                                    <div class="col-md-1 fv-row">
                                        <input type="number" class="form-control form-control-solid mb-2"
                                            placeholder="Umur Hr" name="" id="umur_hari"/>
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <select name="perkawinan" aria-label="Select a Country" data-control="select2"
                                            data-placeholder="Pilih.."
                                            class="form-select form-select-solid form-select-lg fw-bold">
                                            <option value="{{$pasien->StatusKawin->id}}">{{$pasien->StatusKawin->deskripsi}}</option>
                                            @foreach ($StatusKawin as $p)
                                                <option value="{{ $p->id }}">{{ $p->deskripsi }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <select name="agama" aria-label="Select a Country" data-control="select2"
                                            data-placeholder="Pilih.."
                                            class="form-select form-select-solid form-select-lg fw-bold">
                                            <option value="{{$pasien->Agama->id}}">{{$pasien->Agama->deskripsi}}</option>
                                            @foreach ($Agama as $p)
                                                <option value="{{ $p->id }}">{{ $p->deskripsi }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <select name="pendidikan" aria-label="Select a Country" data-control="select2"
                                            data-placeholder="Pilih.."
                                            class="form-select form-select-solid form-select-lg fw-bold">
                                            <option value="{{$pasien->Pendidikan->id}}">{{$pasien->Pendidikan->deskripsi}}</option>
                                            @foreach ($Pendidikan as $p)
                                                <option value="{{ $p->id }}">{{ $p->deskripsi }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <select name="pekerjaan" aria-label="Select a Country" data-control="select2"
                                            data-placeholder="Pilih.."
                                            class="form-select form-select-solid form-select-lg fw-bold">
                                            <option value="{{$pasien->Pekerjaan->id}}">{{$pasien->Pekerjaan->deskripsi}}</option>
                                            @foreach ($Pekerjaan as $p)
                                                <option value="{{ $p->id }}">{{ $p->deskripsi }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-15 fv-row">
                                        <select name="goldar" aria-label="Select a Country" data-control="select2"
                                            data-placeholder="Pilih.."
                                            class="form-select form-select-solid form-select-lg fw-bold">
                                            <option value="{{$pasien->Goldar->id}}">{{$pasien->GolDar->deskripsi}}</option>
                                            @foreach ($Goldar as $p)
                                                <option value="{{ $p->id }}">{{ $p->deskripsi }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="fs-5 fw-semibold mb-2">Alamat Kartu Identitas</label>
                                    <div class="col-md-6 fv-row">
                                        <select name="jenis_identitas" aria-label="Select a Country" data-control="select2"
                                            class="form-select form-select-solid form-select-lg fw-bold">
                                            @foreach ($identitas as $p)
                                                <option value="{{ $p->id }}">{{ $p->deskripsi }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="NO KARTU" name="noidentitas" value="{{$pasien->noidentitas}}"  id="NoKtp"/>
                                    </div>
                                    <div class="col-md-12 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="ALAMAT" name="alamat" value="{{ $pasien->alamat }}" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <select name="provinsi1" id="provinsi1"
                                            class="form-select form-select-solid mb-2" data-control="select2" required
                                            data-placeholder="Pilih">
                                            <option selected disabled value="">Pilih Provinsi</option>
                                            @if ($provincies->count())
                                                @foreach ($provincies as $prov)
                                                    <option value="{{ $prov->id }}">{{ $prov->DESKRIPSI }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <select name="kota1" id="kota1" class="form-select form-select-solid mb-2"
                                            data-control="select2" required data-placeholder="Pilih"></select>
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <select name="kecamatan1" id="kecamatan1"
                                            class="form-select form-select-solid mb-2" data-control="select2" required
                                            data-placeholder="Pilih"></select>
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <select name="desa1" id="desa1" class="form-select form-select-solid mb-2"
                                            data-control="select2" required data-placeholder="Pilih"></select>
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="RT" name="rt" value="{{ $pasien->rt }}"/>
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="RW" name="rw" value="{{ $pasien->rw }}" />
                                    </div>
                                    <div class="col-md-4 mb-5 fv-row">
                                        <input type="text" class="form-control form-control-solid mb-2"
                                            placeholder="KODE POS" name="kodepos" value="{{ $pasien->kodepos }}"/>
                                    </div>
                                    {{-- <label class="fs-5 fw-semibold mb-2">Alamat Sekarang</label>
                                    <div class="col-md-12 fv-row">
                                        <input class="form-check-input" type="checkbox" id="checkboxalamat" name="checkboxalamat" value="" />
                                        <label class="form-check-label mb-3" for="flexCheckDefault">
                                            Sama Dengan Alamat Kartu Identitas <span id="outputcek">false</span>
                                        </label>
                                    </div>

                                    <div class="col-md-12 fv-row">
                                        <input type="text" class="form-select form-select-solid mb-2"
                                            placeholder="ALAMAT" name="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                            <select name="provinsi2" id="provinsi2" class="form-select form-select-solid mb-2" data-control="select2" data-placeholder="Pilih" >
                                                <option selected disabled value="">Pilih Provinsi</option>
                                                @if ($provincies->count())
                                                    @foreach ($provincies as $prov)
                                                        <option value="{{ $prov->ID }}">{{ $prov->DESKRIPSI }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <select name="kota2" id="kota2" class="form-select form-select-solid mb-2" data-control="select2" data-placeholder="Pilih"></select>
                                    </div>
                                    <div class="col-md-6 fv-row">
                                            <select name="kecamatan2" id="kecamatan2" class="form-select form-select-solid mb-2" data-control="select2" data-placeholder="Pilih"></select>
                                    </div>
                                    <div class="col-md-6 fv-row">
                                            <select name="desa2" id="desa2" class="form-select form-select-solid mb-2" data-control="select2" data-placeholder="Pilih"></select>
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
                                    </div> --}}
                                    <div class="modal-footer">
                                        <a href="{{route('search.patients')}}" type="button" class="btn btn-danger btn-outline ">Tutup</a>
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
        $(document).ready(function() {
            $('#provinsi1').on('change', function() {
                var provinsiId = this.value;
                $('#kota1').html('');
                $.ajax({
                    url: '{{ route('getCity') }}?id=' + provinsiId,
                    type: 'get',
                    success: function(res) {
                        $('#kota1').html(
                            '<option selected disabled value="">Pilih Kabupaten</option>');
                        $.each(res, function(key, value) {
                            $('#kota1').append('<option value= "' + value.id + '">' +
                                value.DESKRIPSI + '</option>');
                            $('#kecamatan1').html(
                                '<option selected disabled value="">Pilih Kecamatan</option>'
                                );
                        });
                    }
                });
            });
            $('#kota1').on('change', function() {
                var cityId = this.value;
                $('#kecamatan1').html('');
                $.ajax({
                    url: '{{ route('getCounty') }}?id=' + cityId,
                    type: 'get',
                    success: function(res) {
                        $('#kecamatan1').html(
                            '<option selected disabled value="">Pilih Kecamatan</option>');
                        $.each(res, function(key, value) {
                            $('#kecamatan1').append('<option value="' + value.id +
                                '">' + value.DESKRIPSI + '</option>');
                            $('#desa1').html(
                                '<option selected disabled value="">Pilih Desa</option>'
                                );
                        });
                    }
                });
            });
            $('#kecamatan1').on('change', function() {
                var countyId = this.value;
                $('#desa1').html('');
                $.ajax({
                    url: '{{ route('getVillage') }}?id=' + countyId,
                    type: 'get',
                    success: function(res) {
                        $('#desa1').html(
                            '<option selected disabled value="">Pilih Desa</option>');
                        $.each(res, function(key, value) {
                            $('#desa1').append('<option value="' + value.id + '">' +
                                value.DESKRIPSI + '</option>');
                        });
                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#provinsi2').on('change', function() {
                var provinsiId = this.value;
                $('#kota2').html('');
                $.ajax({
                    url: '{{ route('getCity') }}?id=' + provinsiId,
                    type: 'get',
                    success: function(res) {
                        $('#kota2').html(
                            '<option selected disabled value="">Pilih Kabupaten</option>');
                        $.each(res, function(key, value) {
                            $('#kota2').append('<option value= "' + value.id + '">' +
                                value.DESKRIPSI + '</option>');
                            $('#kecamatan2').html(
                                '<option selected disabled value="">Pilih Kecamatan</option>'
                                );
                        });
                    }
                });
            });
            $('#kota2').on('change', function() {
                var cityId = this.value;
                $('#kecamatan2').html('');
                $.ajax({
                    url: '{{ route('getCounty') }}?id=' + cityId,
                    type: 'get',
                    success: function(res) {
                        $('#kecamatan2').html(
                            '<option selected disabled value="">Pilih Kecamatan</option>');
                        $.each(res, function(key, value) {
                            $('#kecamatan2').append('<option value="' + value.id +
                                '">' + value.DESKRIPSI + '</option>');
                            $('#desa2').html(
                                '<option selected disabled value="">Pilih Desa</option>'
                                );
                        });
                    }
                });
            });
            $('#kecamatan2').on('change', function() {
                var countyId = this.value;
                $('#desa2').html('');
                $.ajax({
                    url: '{{ route('getVillage') }}?id=' + countyId,
                    type: 'get',
                    success: function(res) {
                        $('#desa2').html(
                            '<option selected disabled value="">Pilih Desa</option>');
                        $.each(res, function(key, value) {
                            $('#desa2').append('<option value="' + value.id + '">' +
                                value.DESKRIPSI + '</option>');
                        });
                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        // Ambil elemen checkbox dan span
        const checkbox = document.getElementById('checkboxalamat');
        const outputSpan = document.getElementById('outputcek');
        const outputSpan2 = document.getElementById('outputcek2');

        var prov1 = document.getElementById('provinsi1');
        const kota1 = document.getElementById('kota1');
        const kecamatan1 = document.getElementById('kecamatan1');
        const desa1 = document.getElementById('desa1');

        const prov2 = document.getElementById('provinsi2');
        const kota2 = document.getElementById('kota2');
        const kecamatan2 = document.getElementById('kecamatan2');
        const desa2 = document.getElementById('desa2');

        // Tambahkan event listener untuk checkbox
        checkbox.addEventListener('change', function() {
            // Periksa apakah checkbox dicentang atau tidak
            if (checkbox.checked) {
                outputSpan.textContent = 'true';
                prov2.disabled = true;
                kota2.disabled = true;
                kecamatan2.disabled = true;
                desa2.disabled = true;

            } else {
                outputSpan.textContent = 'false';
                prov2.disabled = false;
                kota2.disabled = false;
                kecamatan2.disabled = false;
                desa2.disabled = false;
            }
        });
    </script>

@endsection
