@extends('layouts.master')


@section('title')
Dashboard | fund of web id 
@endsection

@section('content')
 <div class="container">
     <div class="col-md-12">
     <a class="navbar-brand" href="#pablo">User profile</a>
       
         <div class="card">
             <div class="card-header">
                 <h1>Edit Role for Register User.</h1>
             </div>
             <div class="card-boady">
                 <div class="row">
                     <div class="col-md-6">
                 <form action="/role-register-update/{{$users->id}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
              
                     <div class="form-group">
                            <label >Name</label>
                            <input type="text" class="form-control" name="username" value="{{$users->name}}">
                         </div>
                         <div class="form-group">
                                <label >Give Role</label>
                                <select name="usertype" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="vendor">vendor</option>
                                    <option value=" ">None</option>
                                </select>
                             </div>
                             <button type="submit" class="btn btn-success">Update</button>
                             <a href="/role-register" class="btn btn-danger">Cancel</a>
                 </form>

                </div>
                </div>

             </div>
         </div>
     </div>
 </div>




@endsection

@section('script')

@endsection