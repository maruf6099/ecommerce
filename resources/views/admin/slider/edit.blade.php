@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Table</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Components</a></div>
            <div class="breadcrumb-item">Table</div>
        </div>
        </div>

        <div class="section-body">
        <h2 class="section-title">Slider</h2>
        <p class="section-lead">Example of some Bootstrap table components.</p>

        
        <div class="row">
            <div class="col-12 ">
            <div class="card">
                <div class="card-header">
                <h4>Simple Table</h4>
                <div class="card-header-action">
                        <a href="{{ route('admin.slider.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <div class="card-body col-md-6">
                    <form method="post" action="{{ route('admin.slider.update', $slider->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Preview</label>
                            <br>
                            {{-- <img src="{{ asset($slider->banner) }}" width="200" alt=""> --}}
                            <img id="showImage" src="{{ (!empty($slider->banner)?asset($slider->banner):url('uploads/no_image.jpg')) }}" alt="Admin" height="100" width="110">
                        </div>
                        <div class="form-group">
                            <label for="">Banner</label>
                            <input type="file" class="form-control" name="banner" value="{{ old('banner') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Type</label>
                            <input type="text" class="form-control" name="type" value="{{ $slider->type }}">
                        </div>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $slider->title }}">
                        </div>
                        <div class="form-group">
                            <label for="">Starting Price</label>
                            <input type="text" class="form-control" name="starting_price" value="{{ $slider->starting_price }}">
                        </div>
                        <div class="form-group">
                            <label for="">Button Url</label>
                            <input type="text" class="form-control" name="btn_url" value="{{ $slider->btn_url }}">
                        </div>
                        <div class="form-group">
                            <label for="">Serial</label>
                            <input type="text" class="form-control" name="serial" value="{{ $slider->serial }}">
                        </div>
                        <div class="form-group">
                        <label for="inputState">Status</label>
                        <select id="inputState" class="form-control" name="status" value="{{ $slider->status }}">
                          <option {{ $slider->status==1?'selected':'' }} value="1">Active</option>
                          <option {{ $slider->status==0?'selected':'' }} value="0">Inactive</option>
                        </select>
                      </div>
                      <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            </div>
            
        </div>

        </div>
    </section>
@endsection