@extends('app')
@section('page-title', 'Input Data Nasabah')
@section('breadcrumb', 'Data Nasabah')
@section('breadcrumb2', 'Input Data Nasabah')

@section('content')
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="card-title">Input Data Nasabah</h2>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="{{ url('data-nasabah') }}" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Nama Lengkap</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control @error('nama') is-invalid @enderror" name="nama"
                                                    placeholder="Nama Lengkap" value="{{ old('nama') }}">
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
                                                        <option value="1">1 %</option>
                                                        <option value="2">2 %</option>
                                                        <option value="3">3 %</option>
                                                        <option value="4">4 %</option>
                                                        <option value="5">5 %</option>
                                                        <option value="6">6 %</option>
                                                        <option value="7">7 %</option>
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
                                                        <option>1 </option>
                                                        <option>2 </option>
                                                        <option>3 </option>
                                                        <option>4 </option>
                                                        <option>5 </option>
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
                                                    value="{{ old('plafond_kredit') }}">
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
                                                    placeholder="Sisa Hutang"value="{{ old('sisa_hutang') }}">
                                                @error('sisa_hutang')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledInput">Bunga</label>
                                                <input type="text" class="form-control " id="disabledInput"
                                                    placeholder="Bunga" name="bunga" disabled />
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
                                                    placeholder="Jumlah Tanggunan"value="{{ old('jumlah_tanggunan') }}">
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
                                                        <option value="29999999">BPKB Motor </option>
                                                        <option value="49999999">BPKB Mobil </option>
                                                        <option value="99999999">Sertifikat Rumah </option>
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
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
