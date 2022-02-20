@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">{{ __('Daftar Komputer Pilihan User') }}</h5>

                    <div class="card-body">
                        <div class="card-body">
                            <br>
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="float-right">
                                        <a href="/rakit" class="btn btn-primary"><i class="fa fa-plus"></i>Rakit PC</a>
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
                                                    <th scope="col" class="text-center">VGA</th>
                                                    <th scope="col" class="text-center">Motherboard</th>
                                                    <th scope="col" class="text-center">RAM</th>
                                                    <th scope="col" class="text-center">Power Supply</th>
                                                    <th scope="col" class="text-center">User</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($list as $a)
                                                    <tr style="vertical-align: middle">
                                                        <th class="text-center">{{ $a->id }}</th>
                                                        <td class="text-center">{{ $a->processor }}</td>
                                                        <td class="text-center">{{ $a->vga }}</td>
                                                        <td class="text-center">{{ $a->motherboard }}</td>
                                                        <td class="text-center">{{ $a->ram }}</td>
                                                        <td class="text-center">{{ $a->power }}</td>
                                                        <td class="text-center">{{ $a->user }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="12">
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
