@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Daftar CPU Seri AMD') }}</div>

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
                                <form action="{{ route('amd.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Tipe Processor') }}</label>
                                        <div class="col-md-12">
                                            <input id="a_tipe_processor" type="text"
                                                class="form-control @error('a_tipe_processor') is-invalid @enderror"
                                                name="a_tipe_processor" value="{{ old('a_tipe_processor') }}" required
                                                autocomplete="a_tipe_processor">

                                            @error('a_tipe_processor')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Tipe Socket Processor') }}</label>
                                        <div class="col-md-12">
                                            <input id="a_tipe_socket" type="text"
                                                class="form-control @error('a_tipe_socket') is-invalid @enderror"
                                                name="a_tipe_socket" value="{{ old('a_tipe_socket') }}" required
                                                autocomplete="a_tipe_socket">

                                            @error('a_tipe_socket')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="a_deskripsi"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a comment here"
                                                    id="a_deskripsi" style="height: 100px" name="a_deskripsi"
                                                    value="{{ old('a_deskripsi') }}"></textarea>
                                            </div>

                                            @error('a_deskripsi')
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
                                            <input id="a_harga" type="text"
                                                class="form-control @error('a_harga') is-invalid @enderror" name="a_harga"
                                                value="{{ old('a_harga') }}" required autocomplete="a_harga">

                                            @error('a_harga')
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
                                            <a href="{{ route('amd.index') }}" class="btn btn-dark">Back</a>

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
