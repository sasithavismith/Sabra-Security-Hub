@extends('layouts.master')


@section('title')
Dashboard | fund of web id 
@endsection

@section('content')

<div class="row">
    
    
          <div class="col-md-12">
            
        <a class="navbar-brand" href="#pablo">Dashboard</a>
        <div class="content">
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-chart">
                  <div class="card-header">
                   
                    <!-- <h4 class="card-title">Shipped Products</h4> -->
                    <div class="dropdown">
                      <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                        <i class="now-ui-icons loader_gear"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <a class="dropdown-item text-danger" href="#">Remove Data</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-area">
                      <canvas id="lineChartExample"></canvas>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="card card-chart">
                    <div class="card-header">
                    
                      <!-- <h4 class="card-title">All products</h4> -->
                      <div class="dropdown">
                        <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                          <i class="now-ui-icons loader_gear"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <a class="dropdown-item text-danger" href="#">Remove Data</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="chart-area">
                        <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card card-chart">
                    <div class="card-header">
      
                      <h4 class="card-title"> last 24 Hours Performance</h4>
                    </div>
                    <div class="card-body">
                      <div class="chart-area">
                        <canvas id="barChartSimpleGradientsNumbers"></canvas>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="now-ui-icons ui-2_time-alarm"></i> just Update
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card  card-tasks">
                    <div class="card-header ">
                   
                      <h4 class="card-title">Tasks</h4>
                    </div>
                    <div class="card-body ">
                      <div class="table-full-width table-responsive">
                        <table class="table">
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <span class="form-check-sign"></span>
                                  </label>
                                </div>
                              </td>
                              <td class="text-left">Sign contract </td>
                              <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                  <i class="now-ui-icons ui-2_settings-90"></i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                  <i class="now-ui-icons ui-1_simple-remove"></i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-sign"></span>
                                  </label>
                                </div>
                              </td>
                              <td class="text-left"></td>
                              <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                  <i class="now-ui-icons ui-2_settings-90"></i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                  <i class="now-ui-icons ui-1_simple-remove"></i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <span class="form-check-sign"></span>
                                  </label>
                                </div>
                              </td>
                              <td class="text-left">Place their working
                              </td>
                              <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                  <i class="now-ui-icons ui-2_settings-90"></i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                  <i class="now-ui-icons ui-1_simple-remove"></i>
                                </button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="card-footer ">
                      <hr>
                      <div class="stats">
                        <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h5 class="card-category">All Persons List</h5>
                      <h4 class="card-title"> Employees Stats</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class=" text-primary">
                            <th>
                              Name
                            </th>
                            <th>
                             Qulity of Person 
                            </th>
                            <th>
                              Functuality
                            </th>
                            <th class="text-right">
                              Salary
                            </th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                Sarath
                              </td>
                              <td>
                                Good
                              </td>
                              <td>
                                
                              </td>
                              <td class="text-right">
                              Rs.12000
                              </td>
                            </tr>
                            <tr>
                              <td>
                                Minerva Hooper
                              </td>
                              <td>
                                Curaçao
                              </td>
                              <td>
                                Sinaai-Waas
                              </td>
                              <td class="text-right">
                                $23,789
                              </td>
                            </tr>
                            <tr>
                              <td>
                                Sage Rodriguez
                              </td>
                              <td>
                                Netherlands
                              </td>
                              <td>
                                Baileux
                              </td>
                              <td class="text-right">
                                $56,142
                              </td>
                            </tr>
                            
                           
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
      <footer class="footer">
          <div class="container-fluid">
            <nav>
              <ul>
                <li>
                  <a href="https://www.creative-tim.com">
                    Creative Tim
                  </a>
                </li>
                <li>
                  <a href="http://presentation.creative-tim.com">
                    About Us
                  </a>
                </li>
                <li>
                  <a href="http://blog.creative-tim.com">
                    Blog
                  </a>
                </li>
              </ul>
            </nav>
            <div class="copyright" id="copyright">
              &copy;
              <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
              </script>, Designed by
              <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
              <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
            </div>
          </div>
        </footer>



@endsection

@section('script')

@endsection