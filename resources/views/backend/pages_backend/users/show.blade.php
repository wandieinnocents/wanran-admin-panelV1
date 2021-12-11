@extends('backend.layouts_backend.master')

@section('title')

@endsection

@section('content')

<!-- Main content dashboard  -->
<div class="page-content">
                    <div class="container-fluid">

                    <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title">Users <span class="text-muted fw-normal ms-2">88</span></h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                   
                                    <div>
                                        <a href="{{ route('users.create') }}" class="btn bg-primary text-light"><i class="bx bx-plus me-1"></i> Add User</a>
                                    </div>
                                    
                                   
                                </div>

                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Page content starts here -->

                      
    <div class="justify-content-center">
      
        <div class="card">
            
            <div class="card-body">
                <div class="lead">
                    <strong>Name:</strong>
                    {{ $user->name }}
                </div>
                <div class="lead">
                    <strong>Email:</strong>
                    {{ $user->email }}
                </div>
                <div class="lead">
                    <strong>Password:</strong>
                    ********
                </div>
            </div>
        </div>
    </div>

                        






                   

                    </div>
                    <!-- container-fluid -->
                </div>

@endsection