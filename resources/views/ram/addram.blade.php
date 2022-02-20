@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tambah RAM') }}</div>

                    <div class="card-body">
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-error" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <form action="{{ route('ram.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Merk RAM') }}</label>
                                        <div class="col-md-12">
                                            <input id="merk" type="text"
                                                class="form-control @error('merk') is-invalid @enderror" name="merk"
                                                value="{{ old('merk') }}" required autocomplete="merk">

                                            @error('merk')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Tipe RAM') }}</label>
                                        <div class="col-md-12">
                                            <input id="nama" type="text"
                                                class="form-control @error('nama') is-invalid @enderror" name="nama"
                                                value="{{ old('nama') }}" required autocomplete="nama">

                                            @error('nama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="deskripsi"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a comment here"
                                                    id="deskripsi" style="height: 100px" name="deskripsi"
                                                    value="{{ old('deskripsi') }}"></textarea>
                                            </div>

                                            @error('deskripsi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="mb-3">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Harga Processor') }}</label>
                                        <div class="col-md-12">
                                            <input id="harga" type="number"
                                                class="form-control @error('harga') is-invalid @enderror" name="harga"
                                                value="{{ old('harga') }}" required autocomplete="harga"
                                                placeholder="Rp. ">

                                            @error('harga')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="row flex-column flex-fill">
                                        <br>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a href="{{ route('ram.index') }}" class="btn btn-dark">Back</a>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
