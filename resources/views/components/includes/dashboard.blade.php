
      <div class="container-fluid px-4">
        <div class="row g-4 my-4">
            <h2>Dashboard</h2>
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
        <div class="row g-4 my-4">
          <h3>Hari Ini</h3>
          <div class="col-sm-12 col-xl-6">
              <div class="container">
                <div class="bg-light text-center rounded p-4 h-100">
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Recent Customer</h6>
                    <a href="">Show All</a>
                  </div>
                  <div class="container">
                    <table id="recent" class="table table-striped text-middle align-middle table-bordered table-hover mb-0">
                      <thead>
                        <tr class="text-dark">
                          <th scope="col">Date</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Nomor</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>01 Jan 2045</td>
                          <td>Jhon Doe</td>
                          <td>$123</td>
                          <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                          <td>01 Jan 2045</td>
                          <td>Jhon Doe</td>
                          <td>$123</td>
                          <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                          <td>01 Jan 2045</td>
                          <td>Jhon Doe</td>
                          <td>$123</td>
                          <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                          <td>01 Jan 2045</td>
                          <td>Jhon Doe</td>
                          <td>$123</td>
                          <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                          <td>01 Jan 2045</td>
                          <td>Jhon Doe</td>
                          <td>$123</td>
                          <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                          <td>01 Jan 2045</td>
                          <td>Jhon Doe</td>
                          <td>$123</td>
                          <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                          <td>01 Jan 2045</td>
                          <td>Jhon Doe</td>
                          <td>$123</td>
                          <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                          <td>01 Jan 2045</td>
                          <td>Jhon Doe</td>
                          <td>$123</td>
                          <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                          <td>01 Jan 2045</td>
                          <td>Jhon Doe</td>
                          <td>$123</td>
                          <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                          <td>01 Jan 2045</td>
                          <td>Jhon Doe</td>
                          <td>$123</td>
                          <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
            <div class="col-sm-12 col-xl-6">
              <div class="container">
                <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Multiple Bar Chart</h6>
                            <canvas id="worldwide-sales" class="w-100" style="display: block; box-sizing: border-box; height: 550px;"></canvas>
                        </div>
              </div>
          </div>
        </div>
      </div>