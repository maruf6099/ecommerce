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
                    <form method="post" action="{{ route('admin.slider.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Banner</label>
                            <input type="file" class="form-control" name="banner" value="{{ old('type') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Type</label>
                            <input type="text" class="form-control" name="type" value="{{ old('type') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Starting Price</label>
                            <input type="text" class="form-control" name="starting_price" value="{{ old('starting_price') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Button Url</label>
                            <input type="text" class="form-control" name="btn_url" value="{{ old('btn_url') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Serial</label>
                            <input type="text" class="form-control" name="serial" value="{{ old('serial') }}">
                        </div>
                        <div class="form-group">
                        <label for="inputState">Status</label>
                        <select id="inputState" class="form-control" name="status" value="{{ old('status') }}">
                          <option value="1">Active</option>
                          <option value="0">Inactive</option>
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