@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                        <h4 class="card-title">Footer Page</h4>

                        <br>
                    <form method="post" action="{{ route('update.footer') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $allfooter->id }}">


                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Number</label>
                                <div class="col-sm-10">
                                 <input name="number" class="form-control" type="text" id="example-text-input" value="{{ $allfooter->number }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Adress</label>
                                <div class="col-sm-10">
                                 <input name="Adress" class="form-control" type="text" id="example-text-input" value="{{ $allfooter->Adress}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Description</label>
                                <div class="col-sm-10">
                                 <textarea name="short_description" required="" class="form-control" rows="5">{{ $allfooter->short_description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">E-Mail</label>
                                <div class="col-sm-10">
                                <input name="email" class="form-control" type="text" id="example-text-input" value="{{ $allfooter->email}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">GitHub</label>
                                <div class="col-sm-10">
                                <input name="github" class="form-control" type="text" id="example-text-input" value="{{ $allfooter->github}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-10">
                                <input name="twitter" class="form-control" type="text" id="example-text-input" value="{{ $allfooter->twitter}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Linkedin</label>
                                <div class="col-sm-10">
                                <input name="linkedin" class="form-control" type="text" id="example-text-input" value="{{ $allfooter->linkedin}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-10">
                                <input name="instagram" class="form-control" type="text" id="example-text-input" value="{{ $allfooter->instagram}}">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Update Footer Page">
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>



    
@endsection