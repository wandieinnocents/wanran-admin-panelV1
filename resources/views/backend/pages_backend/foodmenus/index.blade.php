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
                                    <h5 class="card-title">Food Menu <span class="text-muted fw-normal ms-2">(834)</span></h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                   
                                    <div>
                                        <a href="/foodmenus/create" class="btn bg-primary text-light"><i class="bx bx-plus me-1"></i> Add Food</a>
                                    </div>
                                    
                                   
                                </div>

                            </div>
                        </div>
                        <!-- end row -->





                        <!-- FETCH FEEDBACKS -->

                        <div class="table-responsive mb-4">
                            <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                                <thead>
                                  <tr>
                                    <th scope="col" style="width: 50px;">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="checkAll">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th scope="col">#ID</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th style="width: 80px; min-width: 80px;">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   
                                    
                                @foreach($foodmenus as $foodmenu)
                                      <tr>
                                        <th scope="row">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                                <label class="form-check-label" for="contacusercheck11"></label>
                                            </div>
                                        </th>
                                        <td>{{ $foodmenu->id }}</td>

                                        <td>
                                            <a href="#" class="text-body">{{ $foodmenu->foodmenu_category_id }} </a>
                                        </td>
                                        <td>  

                                        @if (($foodmenu->foodmenu_photo))
                                                <a href="{!! asset($foodmenu->foodmenu_photo) !!}" target="_blank">
                                                    <img class="img-thumbnail avatar-sm rounded-circle me-2" class="user-img" style="width: 100px; height:100px;"
                                                        onerror="if (this.src != '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}') this.src = '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}';"
                                                        src="{{ asset($foodmenu->foodmenu_photo) }}" alt="preview"
                                                        style="height:120px !important; width:80px !important; margin-left:20px;">
                                                </a>

                                        @else
                                            <p class="text-danger">No Photo</p>
                                        @endif
                                            
                                        
                                        
                                        
                                        <!-- <img src="assets/backend_assets/assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle me-2">  -->
                                    </td> 
                                      
                                        <td>{{ $foodmenu->foodmenu_name }}</td>
                                        <td>{{ $foodmenu->foodmenu_price }}</td>
                                        <td>{{ $foodmenu->foodmenu_description }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="badge badge-soft-primary font-size-11">in stock</a>
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-pencil-alt "></i>
                                                <i class=" far fa-eye "></i>
                                                <i class="fas fa-trash "></i>
                                                </button>
                                                
                                               
                                            </div>
                                        </td>
                                      </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- end table -->
                        </div>
                        <!-- end table responsive -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                

                        






                   

                    </div>
                    <!-- container-fluid -->
                </div>

@endsection