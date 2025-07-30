@extends('layouts.new-admin.app')
<style>
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
                            <li class="breadcrumb-item"><a href="{{route('admin.new_dashboard')}}"><i
                                        class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">New Page</li>
                        </ol>
                    </nav>
                </div>

            </div>

            <h6 class="mb-0 text-uppercase">Dynamic Pages Create</h6>
            <hr />

            <div class="card">

                <div class="card-body">
                    <form id="add_form" class="form-horizontal" action="{{ route('dynamic.store') }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Slug<small>(https://digirushsolutions.com/blogs)</small>
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Slug" name="slug" id="slug" class="form-control"
                                    value="{{ old('slug') }}" required>
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
                                            <input type="file" id="fancy-file-upload" name="banner" class="selected-files"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">
                                Banner Description
                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="editor" rows="3" name="banner_description"></textarea>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">
                                First Section Description
                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="editor2" rows="3"
                                    name="first_section_description"></textarea>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">
                                First Section Image
                            </label>
                            <div class="col-md-9">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                            <input type="file" id="fancy-file-upload" name="first_section_image" class="selected-files"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">
                                Second Section Description
                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="editor3" rows="3" name="second_section_description"></textarea>
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