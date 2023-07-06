@extends('app')
@section('page-title', 'Edit Data Nasabah')
@section('breadcrumb', 'Data Nasabah')
@section('breadcrumb2', 'Edit Data Nasabah')

@section('content')
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="card-title">Edit Data Nasabah</h2>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="{{ url('data-nasabah/' . $nama) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Nama Lengkap</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control @error('nama') is-invalid @enderror" name="nama"
                                                    placeholder="Nama Lengkap" value="{{ $nama }}">
                                                @error('nama')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Suku Bunga</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select @error('suku_bunga') is-invalid @enderror"
                                                        id="basicSelect" name="suku_bunga">
                                                        <option value="">Pilih salah satu</option>
                                                        <option value="1" {{ $suku_bunga == '1' ? 'selected' : '' }}>1
                                                            %</option>
                                                        <option value="2" {{ $suku_bunga == '2' ? 'selected' : '' }}>2
                                                            %</option>
                                                        <option value="3" {{ $suku_bunga == '3' ? 'selected' : '' }}>3
                                                            %</option>
                                                        <option value="4" {{ $suku_bunga == '4' ? 'selected' : '' }}>4
                                                            %</option>
                                                        <option value="5" {{ $suku_bunga == '5' ? 'selected' : '' }}>5
                                                            %</option>
                                                        <option value="6" {{ $suku_bunga == '6' ? 'selected' : '' }}>6
                                                            %</option>
                                                        <option value="7" {{ $suku_bunga == '7' ? 'selected' : '' }}>7
                                                            %</option>
                                                    </select>
                                                    @error('suku_bunga')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </fieldset>
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Jangka Waktu</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select @error('jangka_waktu') is-invalid @enderror"
                                                        id="basicSelect" name="jangka_waktu">
                                                        <option value="">Pilih salah satu</option>
                                                        <option value="1"
                                                            {{ $jangka_waktu == '1' ? 'selected' : '' }}>1 </option>
                                                        <option value="2"
                                                            {{ $jangka_waktu == '2' ? 'selected' : '' }}>2 </option>
                                                        <option value="3"
                                                            {{ $jangka_waktu == '3' ? 'selected' : '' }}>3 </option>
                                                        <option value="4"
                                                            {{ $jangka_waktu == '4' ? 'selected' : '' }}>4 </option>
                                                        <option value="5"
                                                            {{ $jangka_waktu == '5' ? 'selected' : '' }}>5 </option>
                                                    </select>
                                                    @error('jangka_waktu')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </fieldset>
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Plafond Kredit</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control @error('plafond_kredit') is-invalid @enderror"
                                                    name="plafond_kredit" placeholder="Plafond Kredit"
                                                    value="{{ $plafond_kredit }}">
                                                @error('plafond_kredit')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Sisa Hutang</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control  @error('sisa_hutang') is-invalid @enderror"
                                                    name="sisa_hutang"
                                                    placeholder="Sisa Hutang"value="{{ $sisa_hutang }}">
                                                @error('sisa_hutang')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledInput">Bunga</label>
                                                <input type="text" class="form-control " id="disabledInput"
                                                    readonly="readonly" placeholder="Bunga" name="bunga"
                                                    value="{{ $bunga }}" disabled />
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledInput">Angsuran Pokok</label>
                                                <input type="text" class="form-control" id="disabledInput"
                                                    placeholder="Angsuran Pokok" name="angsuran_pokok" disabled />
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Jumlah Tangguhan</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control @error('jumlah_tanggunan') is-invalid @enderror"
                                                    name="jumlah_tanggunan"
                                                    placeholder="Jumlah Tanggunan"value="{{ $jumlah_tanggunan }}">
                                                @error('jumlah_tanggunan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Jaminan</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select  @error('jaminan') is-invalid @enderror"
                                                        id="basicSelect" name="jaminan">
                                                        <option value="">Pilih salah satu</option>
                                                        <option value="29999999"
                                                            {{ $jaminan == '29999999' ? 'selected' : '' }}>BPKB
                                                            Motor
                                                        </option>
                                                        <option value="49999999"
                                                            {{ $jaminan == '49999999' ? 'selected' : '' }}>BPKB
                                                            Mobil
                                                        </option>
                                                        <option value="99999999"
                                                            {{ $jaminan == '99999999' ? 'selected' : '' }}>
                                                            Sertifikat Rumah
                                                        </option>
                                                    </select>
                                                    @error('jaminan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button href="{{ 'data-nasabah' }}"
                                                class="btn btn-secondary me-1 mb-1">Kembali</button>
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
