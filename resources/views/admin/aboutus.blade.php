@extends('layouts.master')


@section('title')
Aboutus | fund of web id 
@endsection


@section('content')


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">+Add </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
         
    
        </div>
        <div class="modal-body">
          <form action="/save-aboutus" method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Full Name:</label>
              <input type="text" name="title" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Phone Number:</label>
              <input type="text" class="form-control" name="subtitle" id="message-text"></textarea>
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Register Number:</label>
                <input type="text" name="description" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Finger Print:</label>
                <img src="assets/img/img2.png"  width="70px" height="70px" style="padding:50px">
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
          </form>
        </div>
       
      </div>
    </div>
  </div>
<div class="row">
          <div class="col-md-12">
              <a class="navbar-brand" href="#pablo">User Management</a>
              <div class="card-header">
                
       
                <h4 class="card-title"> User Management 
                    <button type="button" class="btn btn-primary float-right" data-target="#exampleModal" data-toggle="modal">+ADD</button>
                    @if (session('status'))
                    <div class="alert alert-success col-md-6">
                        {{ session('status') }}
                    </div>
                    @endif
                  </h4>
                 </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th> Id</th>
                      <th>Full Name</th>
                      <th> Phone Number</th>
                      <th >Register Number</th>
                      <th >Edit </th>
                      <th > Delete</th>
                    </thead>
                    <tbody>
                      
                        @foreach($vis as $viss)
                        <tr>
                        <td>{{$viss->id}}</td>
                        <td>{{$viss->title}}</td>
                        <td>{{$viss->subtitle}}</td>
                        <td >{{$viss->descrption}}</td>
                        <td>
                          
                          <a href="" class="btn btn-success">EDIT</a>
                      </td>
                      <td>
                          <a href="" class="btn btn-danger">DELETE</a>
                      </td>
                      @endforeach
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