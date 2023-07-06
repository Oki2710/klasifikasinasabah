@extends('app')
@section('page-title', 'Data Mining')
@section('breadcrumb', 'Data Mining')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3 ">
                        <div class="dataTables_length" id="table2_length">
                            <label>
                                <select name="table2_length" aria-controls="table2" class="form-select form-select-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="table-responsive datatable-minimal">
                    <div id="table2_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        {{-- <div class="row mb-3">
                            <div class="col-3">
                                <a href="#" class="btn btn-primary me-1 mb-1" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalCenter">
                                    Klasifikasi</a>
                            </div>
                        </div> --}}

                        <div class="row dt-row">
                            <div class="col-sm-12">
                                <table class="table dataTable no-footer" id="table2" aria-describedby="table2_info">
                                    <thead>
                                        <tr class="text-center">
                                            {{-- <th>Pilih</th> --}}
                                            <th>Nama</th>
                                            <th>Suku Bunga</th>
                                            <th>Jangka Waktu</th>
                                            <th>Plafond Kredit</th>
                                            <th>Sisa Hutang</th>
                                            <th>Bunga / Bulan</th>
                                            <th>Angsuran Pokok</th>
                                            <th>Jumlah Tanggunan</th>
                                            <th>Jaminan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($nasabah as $item)
                                            <tr class="text-center">
                                                {{-- <td>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="checkbox1" class="form-check-input">
                                                    </div>
                                                </td> --}}
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->suku_bunga }}</td>
                                                <td>{{ $item->jangka_waktu }}</td>
                                                <td>{{ $item->plafond_kredit }}</td>
                                                <td>{{ $item->sisa_hutang }}</td>
                                                <td>{{ $item->bunga }}</td>
                                                <td>{{ $item->angsuran_pokok }}</td>
                                                <td>{{ $item->jumlah_tanggunan }}</td>
                                                <td>{{ $item->jaminan }}</td>
                                                <td>
                                                    <a href="{{ url('/hitung/' . $item->id) }}"
                                                        class="btn btn-primary me-1 mb-1">
                                                        Klasifikasi</a>
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
        </div>
    </section>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Vertically Centered
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Croissant jelly-o halvah chocolate sesame snaps. Brownie caramels candy
                        canes chocolate cake
                        marshmallow icing lollipop I love. Gummies macaroon donut caramels
                        biscuit topping danish.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Accept</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
