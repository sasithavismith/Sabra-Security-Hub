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
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>ID</th>
                      <th> Name</th>
                      <th> Phone</th>
                      <th>E mail</th>
                      <th>User type</th>
                      <th >Edit </th>
                      <th > Delete</th>
                    </thead>
                    <tbody>
                        @foreach($users as $row)
                      <tr>
                      <td>{{$row->id}}</td>
                      <td>{{$row->name}}</td>
                       <td>  {{$row->phone}} </td>
                        <td>  {{$row->email}}</td>
                       <td>  {{$row->usertype}}</td>
                      <td>
                          <a href="/role-edit/{{$row->id}}" class="btn btn-success">EDIT</a>
                      </td>
                      <td>
                          <form action="/role-delete/{{$row->id}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                              <input type="hidden" name="id" value="{{$row->id}}">
                       <button type="submit" class="btn btn-danger">DELETE</button>
                    </td>
                      </tr>
                     @endforeach
                     
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