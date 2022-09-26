@extends('admin.admin_master')
@section('admin')
    
<div class="page-content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Read Contact </h4>
                
                <input type="hidden" name="id" value="{{ $contacts->id }}">
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Read Contact</label>
                </div>
                <!-- end row -->
                  <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Name </label>
                    <div class="col-sm-10">
                        <input readonly name="blog_title" class="form-control" type="text" id="example-text-input" value="{{ $contacts->name }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Email </label>
                    <div class="col-sm-10">
                        <input readonly name="blog_title" class="form-control" type="text" id="example-text-input" value="{{ $contacts->email }}">
                    </div>
                </div>
                <!-- end row -->
     
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Subject </label>
                    <div class="col-sm-10">
                        <input readonly name="blog_title" class="form-control" type="text" id="example-text-input" value="{{ $contacts->subject }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Phone </label>
                    <div class="col-sm-10">
                        <input readonly name="blog_title" class="form-control" type="text" id="example-text-input" value="{{ $contacts->phone }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Message </label>
                    <div class="col-sm-10">
                        <textarea readonly class="form-control" rows="5"  name="blog_description">
                            {{ $contacts->message }}
                        </textarea>
                    </div>
                </div>
                <a href="{{ route('contact.message') }}" class="btn btn-info sm" title="Read Data"><i class=" fas fa-backspace"></i></a>
                </form>
                 
               
               
            </div>
        </div>
    </div> <!-- end col -->
    </div>
     
    </div>
    </div>

@endsection