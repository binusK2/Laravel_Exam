@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('rakit.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">Pilih Processor</div>
                        <div class="card-body">
                            <div class="form-check">

                                <select class="form-select form-select-md" id="processor" name="processor" required>
                                    <option selected></option>
                                    @foreach ($nama_amds as $key)
                                        <option value="{{ $key->a_tipe_processor }} {{ $key->a_deskripsi }}">
                                            {{ $key->a_tipe_processor }}
                                            {{ $key->a_deskripsi }}
                                        </option>
                                    @endforeach
                                    @foreach ($nama_intels as $key)
                                        <option value="{{ $key->i_tipe_processor }} {{ $key->i_deskripsi }}">
                                            {{ $key->i_tipe_processor }}
                                            {{ $key->i_deskripsi }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header">Pilih Motherboard</div>
                        <div class="card-body">
                            <div class="form-check">
                                <select class="form-select form-select-md" aria-label=".form-select-sm example"
                                    id="motherboard" name="motherboard" required>
                                    <option selected></option>
                                    @foreach ($nama_motherboards as $key)
                                        <option value="{{ $key->merk }} {{ $key->nama }}"> {{ $key->merk }}
                                            {{ $key->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header">Pilih VGA Card</div>
                        <div class="card-body">
                            <div class="form-check">
                                <select class="form-select form-select-md" aria-label=".form-select-sm example" id="vga"
                                    name="vga" required>
                                    <option selected></option>
                                    @foreach ($nama_vgas as $key)
                                        <option value="{{ $key->merk }} {{ $key->nama }}"> {{ $key->merk }}
                                            {{ $key->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header">Pilih RAM</div>
                        <div class="card-body">
                            <div class="form-check">
                                <select class="form-select form-select-md" aria-label=".form-select-sm example" id="ran"
                                    name="ram" required>
                                    <option selected></option>
                                    @foreach ($nama_rams as $key)
                                        <option value="{{ $key->merk }} {{ $key->nama }}"> {{ $key->merk }}
                                            {{ $key->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header">Pilih Power Supply</div>
                        <div class="card-body">
                            <div class="form-check">
                                <select class="form-select form-select-md" aria-label=".form-select-sm example" id="power"
                                    name="power" required>
                                    <option selected></option>
                                    @foreach ($nama_ps as $key)
                                        <option value="{{ $key->merk }} {{ $key->nama }}"> {{ $key->merk }}
                                            {{ $key->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <select class="form-select form-select-md" aria-label=".form-select-sm example" id="user" name="user"
                        hidden>
                        <option value="{{ Auth::user()->name }}">
                        </option>
                    </select>

                    <div class="row flex-column flex-fill">
                        <br>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('listrakit.index') }}" class="btn btn-dark">Back</a>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
