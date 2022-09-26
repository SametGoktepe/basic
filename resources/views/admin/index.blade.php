@extends('admin.admin_master')
@section('admin')

    
<div class="page-content">
    <div class="container-fluid">
        @php
        $usrdata = App\Models\User::all();   
       @endphp
                   

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                        </div>

                        <h4 class="card-title mb-4">All Users</h4>

                        <div class="table-responsive">
                            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>User Name</th>
                                        <th>Register Date</th>
                                    </tr>
                                </thead><!-- end thead -->
                                <tbody>
                                @foreach ($usrdata as $key => $item )
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td><h6 class="mb-0">{{ $item->name }}</h6></td>
                                        <td>
                                            {{ $item->email }}
                                        </td>
                                        <td>
                                            {{ $item->username }}
                                        </td>
                                        <td>
                                            {{ $item->created_at }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody><!-- end tbody -->
                            </table> <!-- end table -->
                        </div>
                    </div><!-- end card -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    
</div>
@endsection