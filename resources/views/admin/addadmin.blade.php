    @extends('layouts.admin_main')

    @section('main-content')
    <main class="content">
    	<div class="container-fluid p-0">
    		<h1 class="h3 mb-3">Create Admin</h1>
    		<div class="row">
    			<div class="col-md-9 col-xl-12">
    				<div class="tab-content">
    					<div class="tab-pane fade show active" id="account" role="tabpanel">
    						<div class="card">
    							@if(Session::has('Success'))
    							<div class="alert alert-success">{{Session::get('Success')}}</div>
    							@endif
    							@if(Session::has('fail'))
    							<div class="alert alert-danger">{{Session::get('Fail')}}</div>
    							@endif
    							<div class="card-header">
    								<h5 class="card-title mb-0">Public info</h5>
    							</div>
    							<div class="card-body">
    								<form method="POST" action="{{ route('admin.save') }}">
    									@csrf
    									<div class="row">
    										<div class="col-md-8">
    											<div class="form-group">
    												<label for="name" class="col-md-4 col-form-label">{{ __('Name') }}</label>
    												<div class="col-md-12">
    													<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

    													@error('name')
    													<span class="invalid-feedback" role="alert">
    														<strong>{{ $message }}</strong>
    													</span>
    													@enderror
    												</div>
    											</div>
    											<div class="form-group">
    												<label for="email" class="col-md-4 col-form-label">{{ __('Email Address') }}</label>

    												<div class="col-md-12">
    													<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

    													@error('email')
    													<span class="invalid-feedback" role="alert">
    														<strong>{{ $message }}</strong>
    													</span>
    													@enderror
    												</div>
    											</div>

    											<div class="form-group">
    												<label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

    												<div class="col-md-12">
    													<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

    													@error('password')
    													<span class="invalid-feedback" role="alert">
    														<strong>{{ $message }}</strong>
    													</span>
    													@enderror
    												</div>
    											</div>

    											<div class="form-group">
    												<label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirm Password') }}</label>

    												<div class="col-md-12">
    													<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password_confirmation" required autocomplete="new-password">
    												</div>
    											</div>
    											<!-- <div class="form-group">
    												<label for="inputAddress" class="col-md-4 col-form-label">Address</label>
    												<div class="col-md-12">
    													<textarea rows="2" class="form-control" id="inputBio" placeholder="Tell something about yourself"></textarea>
    												</div>
    											</div>
    										</div>
    										<div class="col-md-4">
    											<div class="text-center">
    												<img alt="Charles Hall" src="{{ asset('das_css/img/avatars/avatar.jpg')}}" class="rounded-circle img-responsive mt-2" width="128" height="128" />
    												<div class="mt-2">
    													<span class="btn btn-primary"><i class="fas fa-upload"></i> Upload</span>
    												</div>
    												<small>For best results, use an image at least 128px by 128px in .jpg format</small>
    											</div>
    										</div> -->
    											<!-- <div class="form-row">
    											<div class="form-group col-md-6">
    												<label for="inputCity">City</label>
    												<input type="text" class="form-control" id="inputCity">
    											</div>
    											<div class="form-group col-md-4">
    												<label for="inputState">State</label>
    												<select id="inputState" class="form-control">
    													<option selected>Choose...</option>
    													<option>...</option>
    												</select>
    											</div>												
    											<div class="form-group col-md-2">
    												<label for="inputZip">Zip</label>
    												<input type="text" class="form-control" id="inputZip">
    											</div>
												
    										</div> -->
    											<div class="form-group col-md-2">
    												<!-- <label for="inputZip">Type</label> -->
    												<input type="hidden" name="type" class="form-control" id="inputZip" value="1">
    											</div>
    										</div>
    										<div class="form-group mb-0">
    											<div class="col-md-6 offset-md-0">
    												<button type="submit" class="btn btn-primary">
    													{{ __('Register') }}
    												</button>
    											</div>
    										</div>
    								</form>

    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>

    	</div>
    </main>

    </div>
    </div>
    @endsection