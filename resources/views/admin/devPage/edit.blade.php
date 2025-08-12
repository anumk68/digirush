
@extends('layouts.new-admin.app')
<style>
	    p.ck-placeholder {
            height: 150px !important;
        }
        img.w-100.border-radius-lg.shadow-sm {
            height: 78px;
            width: 15% !important;
        }
        .ck.ck-content.ck-editor__editable.ck-rounded-corners.ck-editor__editable_inline.ck-blurred {
        height: 150px;
    }
</style>
@section('content')
		<div class="page-wrapper">
			<div class="page-content">
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Dynamic Pages</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{route('admin.new_dashboard')}}"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Pages Update</li>
							</ol>
						</nav>
					</div>
					
				</div>

				<h6 class="mb-0 text-uppercase">DYnamic Page Update</h6>
				<hr/>

                <div class="card">
                
                    <div class="card-body">
                        <form id="add_form" class="form-horizontal" action="{{ route('dynamic.edit.post',$dynamic->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Slug
                                <small>(https://digirushsolutions.com/blogs)</small></label>
                                <div class="col-md-9">
                                    <input type="text" placeholder="Slug" name="slug" id="slug" class="form-control" value="{{ $dynamic->slug }}" required>
                                    @error('slug')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="signinSrEmail">
                                    Banner
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                <input id="fancy-file-upload" type="file" name="banner" value="{{ $dynamic->banner }}"
                                                class="selected-files" > 
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="file-preview box sm">
                                            <img src="{{ asset('public/'.$dynamic->banner) }}" alt="bruce" class="w-100 border-radius-lg shadow-sm">

                                    </div>
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-md-3 col-from-label">
                                    Banner Description
                                </label>
                                <div class="col-md-9">
                                <textarea class="form-control" id="editor" rows="3" name="banner_description">{{ $dynamic->banner_description }}</textarea> 
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-md-3 col-from-label">
                                    First Section Description
                                </label>
                                <div class="col-md-9">
                                <textarea class="form-control" id="editor2" rows="3" name="first_section_description">
                                    {{ $dynamic->first_section_description }}
                                </textarea> 
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="signinSrEmail">
                                    First Section Image
                                    <small>(824*324)</small>
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                <input id="fancy-file-uploadd" type="file" name="first_section_image" class="selected-files">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="file-preview box sm">
                                        @if(('header_logo') != null)
                                            <img src="{{ asset('public/'.$dynamic->first_section_image) }}"  alt="bruce" width="150px" height="150px" class="border-radius-lg shadow-sm">

                                        @endif
                                    </div>
                                </div>
                            </div><br>


                              <div class="form-group row">
                            <label class="col-md-3 col-form-label">Meta Title
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Meta Title" name="meta_title" id="meta_title" class="form-control"
                                    value="{{ $dynamic->meta_title }}">
                                @error('meta_title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Meta Keyword
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Meta Keyword" name="meta_keyword" id="meta_keyword" class="form-control"
                                    value="{{ $dynamic->meta_keyword }}">
                                @error('meta_keyword')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">
                                Meta Description
                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="editor3" rows="3" name="meta_description">  {{ $dynamic->meta_description }}</textarea>
                            </div>
                        </div><br>


                            <div class="form-group row">
                                <label class="col-md-3 col-from-label">
                                    Second Section Description
                                </label>
                                <div class="col-md-9">
                                <textarea class="form-control" id="editor3" rows="3" name="second_section_description">
                                    {{ $dynamic->second_section_description }}
                                </textarea> 
                                </div>
                            </div><br>

                            <div class="form-group row" id="category">
                                <label class="col-md-3 col-from-label">
                                    Status
                                </label>
                                <div class="col-md-9">
                                    <select class="form-control aiz-selectpicker" name="status" id="category_id" data-live-search="true" required>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div><br>

                            <div class="form-group mb-0 text-right">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
@endsection



