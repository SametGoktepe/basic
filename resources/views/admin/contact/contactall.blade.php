@extends('admin.admin_master')
@section('admin')
    

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Contact Message</h4>   
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Read More/Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($contacts as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->subject }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ Str::limit($item->message,20) }}</td>
                                <td>
                                    <a href="{{ route('read.contact',$item->id) }}" class="btn btn-info sm" title="Read Data"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('delete.contact',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                
                            </tr>
                            @endforeach
                            
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        
        <!-- end row-->
        
    </div> <!-- container-fluid -->
</div>




@endsection