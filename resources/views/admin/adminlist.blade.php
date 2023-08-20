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
				<h3><strong>Admin</strong> List</h3>
			</div>

			<div class="col-auto ml-auto text-right mt-n1">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
						<li class="breadcrumb-item"><a href="#">AdminKit</a></li>
						<li class="breadcrumb-item"><a href="#">All List</a></li>
						<!-- <li class="breadcrumb-item active" aria-current="page">Analytics</li> -->
					</ol>
				</nav>
			</div>
		</div>

		<div class="row">
			<div class="col-12 ">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">Admin Details</h5>
					</div>
					<table class="table table-hover my-0">
						<thead>
							<tr>
								<th>Name</th>
								<th class="d-none d-xl-table-cell">Start Date</th>
								<th class="d-none d-xl-table-cell">End Date</th>
								<th>Status</th>
								<th class="d-none d-md-table-cell">Assignee</th>
							</tr>
						</thead>
						<pre>
							<!-- {{print_r($data)}} -->
						</pre>
						<tbody>							
							<tr>
								<td>{{$data->name}}</td>
								<td class="d-none d-xl-table-cell">{{$data->email}}</td>
								<td class="d-none d-xl-table-cell">31/06/2020</td>
								<td><span class="badge badge-warning">In progress</span></td>
								<td class="d-none d-md-table-cell">William Harris</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

		</div>

	</div>
</main>
@endsection