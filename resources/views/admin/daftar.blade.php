@extends('components.layout.app')

@section('content')
    <div class="container fluid p-4">
        {{-- Header --}}
       <div class="row mb-3">
        <div class="container">
            <h2>Daftar Antrian</h2>
        </div>
       </div>
       {{-- /Header --}}

       {{-- Stats --}}
        <div class="row">
            {{-- Nomor Antri --}}
            <div class="col">
                <div class="container border border-1 border-primary bg-light py-2 px-5 rounded-4 text-center">
                    <div class="row">
                        <h6>Nomor Antrian Sekarang</h6>
                        <h1 style="font-size: 6rem;">5</h1>
                    </div>
                </div>
            </div>
            {{-- /Nomor Antri --}}
            <div class="col me-2">
                <div class="row">
                    <div class="container border border- border-primary bg-light py-1 px-5 rounded-4">
                        <div class="row">
                            <div class="col-4 align-content-center">
                                <h1 class="text-primary"><i class="fas fa-users me-3"></i></h1>
                            </div>
                            <div class="col-8 align-content-center text-end">
                                    <h6>Sisa Antrian</h6>
                                    <h3>5</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="container border border- border-primary bg-light py-1 px-5 rounded-4 ">
                        <div class="row">
                            <div class="col-4 align-content-center">
                                <h1 class="text-primary"><i class="fas fa-user-check me-3"></i></h1>
                            </div>
                            <div class="col-8 align-content-center text-end">
                                    <h6>Sudah Dipanggil</h6>
                                    <h3>5</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /Stats --}}
        {{-- Table --}}
        <div class="row">
            <div class="col">
                <div class="container p-5 border border-1 border-primary rounded-4">
                    <table id="now" class="table table-striped table-bordered">
                        <thead class="">
                            <tr>
                            <th>Ahmad</th>
                            <th>Ahmad</th>
                            <th>Ahmad</th>
                            <th>Ahmad</th>
                        </tr>
                        </thead>
                        <tbody>
                                    <tr>
                                        <td>abc</td>
                                        <td>abc</td>
                                        <td>abc</td>
                                        <td>abc</td>
                                    </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- /Table --}}
    </div>
@endsection