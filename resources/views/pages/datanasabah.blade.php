@extends('app')
@section('page-title', 'Data Nasabah')
@section('breadcrumb', 'Data Nasabah')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-3">
                        <a href="{{ url('/data-nasabah/create') }}" class="btn btn-primary me-1 mb-1">
                            Input Data Nasabah</a>
                    </div>
                </div>
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

                        <div class="row dt-row">
                            <div class="col-sm-12">
                                <table class="table dataTable no-footer" id="table2" aria-describedby="table2_info">
                                    <thead>
                                        <tr class="text-center">
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
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->suku_bunga }}</td>
                                                <td>{{ $item->jangka_waktu }}</td>
                                                <td>{{ $item->plafond_kredit }}</td>
                                                <td>{{ $item->sisa_hutang }}</td>
                                                <td>{{ $item->bunga }}</td>
                                                <td>{{ $item->angsuran_pokok }}</td>
                                                <td>{{ $item->jumlah_tanggunan }}</td>
                                                <td>{{ App\Helpers\Additional::jaminan($item->jaminan) }}</td>
                                                <td>
                                                    <a href="{{ url('data-nasabah/' . $item->id . '/edit') }}"
                                                        class="btn btn-sm btn-info"><i class="bi bi-pencil-square"></i></a>
                                                    <form onsubmit="return confirm('Yakin akan menghapus data ? ')"
                                                        class="d-inline" action="{{ url('data-nasabah/' . $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" name="submit"
                                                            class="btn btn-sm btn-danger"><i
                                                                class="bi bi-trash"></i></button>
                                                    </form>
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
@endsection
