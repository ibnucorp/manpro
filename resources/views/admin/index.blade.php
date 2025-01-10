@extends('components.layout.app')

@section('content')
      <div class="container-fluid px-4">
        <div class="row g-4 my-3">
          <h2>Dashboard</h2>
          <hr>
          <div class="col-sm-12 col-xl-6">
                <div class="bg-light text-center rounded p-4 h-100">
                  <div class="d-flex align-items-center justify-content-between mb-4x">
                    <h6 class="mb-0">Graph Mingguan</h6>
                    <a href="">Show All</a>
                  </div>
                  <canvas id="customer-chart" class="w-100" style="display: block; box-sizing: border-box;"></canvas>
                </div>
          </div>
          <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded p-4 h-100">
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Calender</h6>
                    <a href="">Show All</a>
                  </div>
                  <div id="calender" class="w-100" style="height: 300px;"></div>
                </div>
          </div>
        </div>
        <h3 class="mt-5">Hari Ini</h3>
        <hr>
        <div class="row g-4 mb-4" style="height: 800px">
          <div class="col-sm-12 col-xl-12">
            <div class="container">
                <div class="bg-light text-center rounded p-4 h-100">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Customers</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="container">
                        <table id="recent" class="table table-striped text-middle align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col" data-order="desc">Nomor Antri</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Jenis Antrian</th>
                                    <th scope="col">Jam</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->nomor_antri }}</td>
                                        <td>{{ $customer->nama }}</td>
                                        <td>{{ $customer->gender }}</td>
                                        <td>{{ $customer->jenis_antrian }}</td>
                                        <td>{{ $customer->created_at->format('H:i') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No recent customers found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
@endsection

