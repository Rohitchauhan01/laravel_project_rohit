{{--<!-- @extends('layouts.app') -->--}}	
@extends('layouts.admin_main')

@section('main-content')
{{--<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8"> -->
            <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
	You are a Admin User.
</div>
</div> -->
<!-- </div>
    </div> -->
</div>--}}

<main class="content">
	<div class="container-fluid p-0">

		<div class="row mb-2 mb-xl-3">
			<div class="col-auto d-none d-sm-block">
				<h3><strong>Admin</strong> Dashboard</h3>
			</div>

			<div class="col-auto ml-auto text-right mt-n1">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
						<li class="breadcrumb-item"><a href="#">AdminKit</a></li>
						<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
						<!-- <li class="breadcrumb-item active" aria-current="page">Analytics</li> -->
					</ol>
				</nav>
			</div>
		</div>

		<div class="row">
			<div class="col-12 ">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">Latest Projects</h5>
					</div>
					<!-- <table class="table table-hover my-0"> -->
					<table id="example" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>Name</th>
								<th class="d-none d-xl-table-cell">Email</th>
								<th>Type</th>
								<th class="d-none d-md-table-cell">Action</th>
							</tr>
						</thead>
						@foreach($data as $da)						
						<tbody>							
							<tr>
								<td>{{$da->name}}</td>
								<td class="d-none d-xl-table-cell">{{$da->email}}</td>
								<td>
									@if($da->type == "user")
									<span class="badge badge-warning">User</span>
									@else
									<span class="badge badge-success">Admin</span>
									@endif
								</td>
								<td><a href="{{route('admin.delete',['id'=>$da->id])}}"><button class="btn btn-danger" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button></a>
							</tr>
						</tbody>
						@endforeach
					</table>
					
						<!-- <tbody>
							<tr>
								<td>Project Apollo</td>
								<td class="d-none d-xl-table-cell">01/01/2020</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge badge-success">Done</span></td>
								<td class="d-none d-md-table-cell">Vanessa Tucker</td>
							</tr>
							<tr>
								<td>Project Fireball</td>
								<td class="d-none d-xl-table-cell">01/01/2020</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge badge-danger">Cancelled</span></td>
								<td class="d-none d-md-table-cell">William Harris</td>
							</tr>
							<tr>
								<td>Project Hades</td>
								<td class="d-none d-xl-table-cell">01/01/2020</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge badge-success">Done</span></td>
								<td class="d-none d-md-table-cell">Sharon Lessman</td>
							</tr>
							<tr>
								<td>Project Nitro</td>
								<td class="d-none d-xl-table-cell">01/01/2020</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge badge-warning">In progress</span></td>
								<td class="d-none d-md-table-cell">Vanessa Tucker</td>
							</tr>
							<tr>
								<td>Project Phoenix</td>
								<td class="d-none d-xl-table-cell">01/01/2020</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge badge-success">Done</span></td>
								<td class="d-none d-md-table-cell">William Harris</td>
							</tr>
							<tr>
								<td>Project X</td>
								<td class="d-none d-xl-table-cell">01/01/2020</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge badge-success">Done</span></td>
								<td class="d-none d-md-table-cell">Sharon Lessman</td>
							</tr>
							<tr>
								<td>Project Romeo</td>
								<td class="d-none d-xl-table-cell">01/01/2020</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge badge-success">Done</span></td>
								<td class="d-none d-md-table-cell">Christina Mason</td>
							</tr>
							<tr>
								<td>Project Wombat</td>
								<td class="d-none d-xl-table-cell">01/01/2020</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge badge-warning">In progress</span></td>
								<td class="d-none d-md-table-cell">William Harris</td>
							</tr>
						</tbody> -->

					
				</div>
			</div>

		</div>

	</div>
</main>
@endsection