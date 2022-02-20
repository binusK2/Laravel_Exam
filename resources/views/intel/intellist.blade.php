@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header" style="height: 1cm;">{{ __('Daftar CPU Seri INTEL') }}</div> --}}
                <h5 class="card-header">{{ __('Daftar CPU Seri INTEL') }}</h5>
                <div class="card-body">
                    <div class="card-body">
                        <br>
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="float-right">
                                    <a href="{{ route('intel.create') }}" class="btn btn-primary"><i
                                            class="fa fa-plus"></i>Tambah CPU Seri INTEL</a>
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
                                                <th scope="col" class="text-center">Tipe Processor</th>
                                                <th scope="col" class="text-center">Tipe Socket</th>
                                                <th scope="col" class="text-center">Deskripsi</th>
                                                <th scope="col" class="text-center">Harga</th>
                                                <th scope="col" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($intels as $i)
                                            <tr style="vertical-align: middle">
                                                <th class="text-center">{{ $i->id }}</th>
                                                <td class="text-center">{{ $i->i_tipe_processor}}</td>
                                                <td class="text-center">{{ $i->i_tipe_socket }}</td>
                                                <td class="text-center">{{ $i->i_deskripsi }}</td>
                                                <td class="text-center">{{ $i->i_harga }}</td>
                                                <td>

                                                    {{-- <div class="btn-group"> --}}
                                                        <center>
                                                            <div class="action_btn">
                                                                <a href="{{ route('intel.edit', $i->id )}}"
                                                                    class="btn btn-success">Edit</a>
                                                            </div>
                                                            <form action="{{ route('intel.destroy', $i->id)}}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger"
                                                                    type="submit">Delete</button>
                                                            </form>
                                                        </center>

                                                        {{--
                                                    </div> --}}
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