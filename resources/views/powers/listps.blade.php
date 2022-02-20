@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header" style="height: 1cm;">{{ __('Daftar CPU Seri INTEL') }}</div> --}}
                    <h5 class="card-header">{{ __('Daftar Power Supply') }}</h5>
                    <div class="card-body">
                        <div class="card-body">
                            <br>
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="float-right">
                                        <a href="{{ route('ps.create') }}" class="btn btn-primary"><i
                                                class="fa fa-plus"></i>Tambah Power Supply</a>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="col-md-12">
                                    @if (session('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <table class="table table-bordered">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center">#</th>
                                                    <th scope="col" class="text-center">Merk</th>
                                                    <th scope="col" class="text-center">Nama</th>
                                                    <th scope="col" class="text-center">Deskripsi</th>
                                                    <th scope="col" class="text-center">Harga</th>
                                                    <th scope="col" class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($pss as $i)
                                                    <tr style="vertical-align: middle">
                                                        <th class="text-center">{{ $i->id }}</th>
                                                        <td class="text-center">{{ $i->merk }}</td>
                                                        <td class="text-center">{{ $i->nama }}</td>
                                                        <td class="text-center">{{ $i->deskripsi }}</td>
                                                        <td class="text-center">{{ $i->harga }}</td>
                                                        <td>

                                                            {{-- <div class="btn-group"> --}}
                                                            <center>
                                                                <div class="action_btn">
                                                                    <a href="{{ route('ps.edit', $i->id) }}"
                                                                        class="btn btn-success">Edit</a>
                                                                </div>
                                                                <form action="{{ route('ps.destroy', $i->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger"
                                                                        type="submit">Delete</button>
                                                                </form>
                                                            </center>

                                                            {{-- </div> --}}
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="6">
                                                            <center>No data found</center>
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
