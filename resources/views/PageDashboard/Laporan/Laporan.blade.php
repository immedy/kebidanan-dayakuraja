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
                    <span class="card-label fw-bolder fs-3 mb-1">Laporan Rujukan</span>
                </h3>
            </div>
            <div class="card-header border-0 pt-5">
                <form method="post" action="{{ route('faskes.getCounts') }}">
                    @csrf
                    <label for="start_date">Start Date:</label>
                    <input type="date" name="start_date" required>

                    <label for="end_date">End Date:</label>
                    <input type="date" name="end_date" required>

                    <button type="submit">Apply Filter</button>
                </form>
                <form method="post" action="{{ route('faskes.resetFilter') }}" id="resetFilterForm">
                    @csrf
                    <button type="submit">Reset Filter</button>
                </form>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->

                    @if(isset($faskesCounts))
                    <table>
                        <thead>
                            <tr>
                                <th>Faskes</th>
                                <th>Jumlah Rujukan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($faskesCounts as $faskesCount)
                                <tr>
                                    <td>{{ $faskesCount->faskes->nama }}</td>
                                    <td>{{ $faskesCount->count }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @elseif(isset($faskesCountsNotFiltered))
                    {{-- <p>No date filter applied. Displaying counts without date filter:</p> --}}
                    <table>
                        <thead>
                            <tr>
                                <th>Faskes</th>
                                <th>Jumlah Rujukan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($faskesCountsNotFiltered as $faskesCount)
                                <tr>
                                    <td>{{ $faskesCount->faskes->nama }}</td>
                                    <td>{{ $faskesCount->count }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif


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
