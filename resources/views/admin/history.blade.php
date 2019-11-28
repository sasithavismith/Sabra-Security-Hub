@extends('layouts.master')


@section('title')
Registered Roles | fund of web id 
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
          <a class="navbar-brand" href="#pablo">User profile</a>
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Registered Roles</h4>
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <p class="category"> Here is a subtitle for this table</p>
              </div>
              <div class="card-body">
                <div class="table-responsive table-striped table-hover">
                  <table class="table">
                    <thead class=" text-primary table-dark">
                    <th style="color:white; font-weight:400;">ID</th>
                      <th style="color:white; font-weight:400;"> Name</th>
                      <th style="color:white; font-weight:400;"> Phone</th>
                      <th style="color:white; font-weight:400;">Date</th>
                      <th style="color:white; font-weight:400;">Start Time</th>
                      <th style="color:white; font-weight:400;">End time</th>
                      <th style="color:white; font-weight:400;"> location</th>
                    </thead>
                    <tbody>
                        
                      <tr>
                      <td>2</td>
                      <td>0784565699</td>
                      <td>sasitha</td>
                       <td>  12/11/2019</td>
                        <td>8.00am </td>
                       <td> 5.00pm</td>
                       <td> play grounds</td>
</tr>
<tr>
                       <td>3</td>
                      <td>0784568699</td>
                      <td>vismith</td>
                       <td>  12/11/2019</td>
                        <td>10.00am </td>
                       <td> 3.00pm</td>
                       <td> Entrance</td></tr>
                       <tr>

                       <td>3</td>
                      <td>0764589699</td>
                      <td>Janidu</td>
                       <td>  12/10/2019</td>
                        <td>9.00am </td>
                       <td> 2.00pm</td>
                       <td> play grounds</td>
                     
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