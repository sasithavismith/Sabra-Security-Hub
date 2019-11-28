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