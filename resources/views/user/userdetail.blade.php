@extends('layouts.user_main')
@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('web_css/img/breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Profile Details</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">User</a>
                        <span>Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                </h6>
            </div>
        </div>
        <div class="checkout__form">
            <h4>Profile Details</h4>
            <p>
                <button class="site-btn col-12 container d-flex justify-content-start" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <h5 class="card-title mb-0">User Details</h5>
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card-body">
                    <main class="content">
                        <div class="container-fluid p-0">
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="card flex-fill">

                                        <!-- <table class="table table-hover my-0"> -->
                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>FistName</th>
                                                    <th class="d-none d-xl-table-cell">LastName</th>
                                                    <th class="d-none d-xl-table-cell">Phone</th>
                                                    <th>Gender</th>
                                                    <th>Status</th>
                                                    <th>Address</th>
                                                    <th>City</th>
                                                    <th>State</th>
                                                    <th>Zip</th>
                                                    <th class="d-none d-md-table-cell">Edit</th>
                                                    <th class="d-none d-md-table-cell">Delete</th>

                                                </tr>
                                            </thead>
                                            @foreach($list as $data)
                                            <tbody>
                                                <tr>
                                                    <td>{{$data->fistname}}</td>
                                                    <td>{{$data->lastname}}</td>
                                                    <td>{{$data->phone}}</td>
                                                    <td>
                                                        @if($data->gender == "m")
                                                        Male
                                                        @elseif($data->gender = "f")
                                                        Female
                                                        @else
                                                        Other
                                                        @endif
                                                    </td>
                                                    <td>{{$data->status}}</td>
                                                    <td>{{$data->address}}</td>
                                                    <td>{{$data->city}}</td>
                                                    <td>{{$data->state}}</td>
                                                    <td>{{$data->zip}}</td>
                                                    <td><a href="{{route('user.edit',['id'=>$data->id])}}"><button class="btn btn-primary">Edit</button></a>
                                                    <td><a href="{{route('user.delete',['id'=>$data->id])}}"><button class="btn btn-danger" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

@endsection