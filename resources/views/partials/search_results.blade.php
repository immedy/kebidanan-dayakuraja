@foreach ($searchResults as $patien)
    <tr>
        <td>{{ $patien->id }}</td>
        <td>
            <div class="d-flex align-items-center">
                <div class="d-flex justify-content-start flex-column">
                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">{{ $patien->namalengkap }}</a>
                </div>
            </div>
        </td>
        <td>
            <span class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $patien->tanggal_lahir }}</span>
        </td>
        <td class="text-center">
            <div class="d-flex flex-column w-100 me-2">
                <span class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $patien->alamat }}</span>
            </div>
        </td>
        <td class="text-center">
            <div class="d-flex flex-column w-100 me-2">
                <span class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $patien->FaskesPegawai->nama }}</span>
            </div>
        </td>
        <td class="text-center">
            <div class="d-flex justify-content-end flex-shrink-0">
                <!-- Add your action buttons for each search result -->
                <a href="{{ route('EditPasien', ['filter' => Crypt::encryptString($patien->id)]) }}"
                   class="btn btn-icon btn-bg-light btn-active-color-info btn-sm me-1 border border-success"
                   data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Pasien">
                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                    <span class="svg-icon svg-icon-3">
                        <!-- Add your SVG icon code -->
                    </span>
                </a>
                <!-- Add other action buttons as needed -->
            </div>
        </td>
    </tr>
@endforeach
