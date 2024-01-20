@extends('admin.layouts.master')
@section('content')

<script src="{{ asset('backend/assets/others/jq.js') }}"></script>

        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Hi, {{ Auth::user()->name }}!</h2>
            <p class="section-lead">
              Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">
              
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" class="needs-validation" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data" novalidate="">
                    @csrf
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">                               
                          <div class="form-group col-md-6 col-12">
                            <label>Image</label>
                            <input type="file" id="image" class="form-control" name="image">                           
                          </div>
                                                     
                          <div class="form-group col-md-6 col-12">
                            <label>Image</label>
                            <img id="showImage" src="{{ (!empty(Auth::user()->image)?url('uploads/user_images/'.Auth::user()->image):url('uploads/no_image.jpg')) }}" alt="Admin" class="p-1 bg-info" height="100" width="110">                           
                          </div>
                        </div>

                        <div class="row">                               
                          <div class="form-group col-md-6 col-12">
                            <label> Name</label>
                            <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required="">                           
                          </div>

                          <div class="form-group col-md-6 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required="">
                           
                          </div>
                        </div>                
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>

              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  
                  <form method="post" class="needs-validation" action="{{ route('admin.update.password') }}" enctype="multipart/form-data" novalidate="">
                    @csrf
                    <div class="card-header">
                      <h4>Change Password</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">                               
                          <div class="form-group col-md-6 col-12">
                            <label>Current Password</label>
                            <input type="password" class="form-control" name="current_password" >                           
                          </div>
                        </div>

                        <div class="row">                               
                          <div class="form-group col-md-6 col-12">
                            <label>New Password</label>
                            <input type="password" class="form-control" name="password"  >                           
                          </div>

                          <div class="form-group col-md-6 col-12">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation">
                           
                          </div>
                        </div>                
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

        
 <script type="text/javascript">
        $(document).ready(function () {
          $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload=function(e){
              $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
          });
        });
    </script>
      
@endsection