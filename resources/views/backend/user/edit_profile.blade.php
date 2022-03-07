@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Manage Profile</h4>
            </div>	
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form  method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                        @csrf
					  <div class="row">
						<div class="col-12">	
                          
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>User Name  <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required" value="{{ $Edituser->name }}"> 
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                    <h5>User Mobile <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="mobile" class="form-control" required data-validation-required-message="This field is required" value="{{ $Edituser->mobile}}"> 
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>User Email <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required" value="{{ $Edituser->email}}"> 
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    
                                        <div class="form-group">
                                            <h5>User Address <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="address" class="form-control" required data-validation-required-message="This field is required" value="{{ $Edituser->address}}"> 
                                            </div>
                                        </div>
                        
                                </div>
                            </div>

                            




                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Gender<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="gender" id="gender" required class="form-control">
                                                <option value="" selected disabled>Select gender</option>
                                                <option value="Female" {{ $Edituser->gender == "Female" ? "selected" : "" }}>Female</option>
                                                <option value="Male" {{ $Edituser->gender == "Male" ? "selected" : "" }}>Male</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    
                                        <div class="form-group">
                                            <h5>Profile Image <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" name="image"  id="image" class="form-control" data-validation-required-message="This field is required"> 
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            
                                            <div class="controls">
                                              <img id="showImage" src="{{ (!empty($Edituser->image))? url('upload/user_images/'.$Edituser->image) : url('upload/no_image.jpg') }}" alt="" style="width:100px; height:100px; border:1px solid #000">
                                            </div>
                                        </div>
                        
                                </div>
                            </div>
                           
                           

                           
                               


                                
                            </div> 
                            {{-- End row --}}
                         					
{{-- 						
							<div class="form-group">
								<h5>Email Field <span class="text-danger">*</span></h5>
								<div class="controls">
								<input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
							</div>
							<div class="form-group">
								<h5>Password Input Field <span class="text-danger">*</span></h5>
								<div class="controls">
								<input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
							</div> --}}
							
						
							
						</div>
						<div class="text-xs-right">
							 <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
      </section>
      <!-- /.content -->
    </div>
</div>

<script>
    $(document).ready(function(){
       $('#image').change(function(e){
           var reader = new FileReader();
          reader.onload = function(e){
              $('#showImage').attr('src',e.target.result)
          }
          reader.readAsDataURL(e.target.files['0']);
       });
    });
</script>

@endsection

