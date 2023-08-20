@extends('layouts.user_main')
@section('content')
<!-- Hero Section Begin -->
<!-- <section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All departments</span>
                    </div>
                    <ul>
                        <li><a href="#">Fresh Meat</a></li>
                        <li><a href="#">Vegetables</a></li>
                        <li><a href="#">Fruit & Nut Gifts</a></li>
                        <li><a href="#">Fresh Berries</a></li>
                        <li><a href="#">Ocean Foods</a></li>
                        <li><a href="#">Butter & Eggs</a></li>
                        <li><a href="#">Fastfood</a></li>
                        <li><a href="#">Fresh Onion</a></li>
                        <li><a href="#">Papayaya & Crisps</a></li>
                        <li><a href="#">Oatmeal</a></li>
                        <li><a href="#">Fresh Bananas</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Hero Section End -->

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