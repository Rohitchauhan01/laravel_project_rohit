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
                        <span>Profile</span>
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
        @if(Session::has('Success'))
        <div class="alert alert-success">{{Session::get('Success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('Fail')}}</div>
        @endif
        <div class="checkout__form">
            <h4>{{$title}}</h4>
            <div class="card-body">
                <form method="POST" action="{{ $url}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fistname" class="col-md-4 col-form-label">{{ __('Fist Name') }}</label>
                                    <input id="fistname" type="text" class="form-control @error('fistname') is-invalid @enderror" name="fistname" placeholder="Fist Name" value="{{(@$list) ? $list->fistname : old('fistname')}}" required autocomplete="name" autofocus>
                                    @error('fistname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lastname" class="col-md-4 col-form-label">{{ __('Last Name') }}</label>
                                    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Last Name" value="{{(@$list) ? $list->lastname : old('lastname')}}" required autocomplete="name" autofocus>
                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Phone" class="col-md-4 col-form-label">{{ __(' Phone') }}</label>
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Number" value="{{(@$list) ? $list->phone : old('phone')}}" required autocomplete="phone">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Gender" class="col-md-4 col-form-label">{{ __(' Gender') }}</label>
                                    <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                        <option value="">Please Select</option>
                                        <option Value="m" {{ old('gender') == 'm' || @$list['gender'] == 'm' ? 'selected' : '' }}>
                                            Male</option>
                                        <option Value="f" {{ old('gender') == 'f' || @$list['gender'] == 'f' ? 'selected' : '' }}>
                                            Female</option>
                                        <option Value="o" {{ old('gender') == 'o' || @$list['gender'] == 'o' ? 'selected' : '' }}>
                                            Others</option>
                                    </select>
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Status" class="col-md-4 col-form-label">{{ __('My Status') }}</label>
                                <div class="col-md-12">
                                    <textarea rows="2" class="form-control" name="status" id="inputBio" placeholder="Status">{{(@$list) ? $list->status : old('status')}}</textarea>
                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress" class="col-md-4 col-form-label">Address</label>
                                <div class="col-md-12">
                                    <textarea rows="2" class="form-control" name="address" id="inputBio" placeholder="Address">{{(@$list) ? $list->address : old('address')}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <img alt="Charles Hall" src="{{ asset('das_css/img/avatars/avatar.jpg')}}" class="rounded-circle img-responsive mt-2" width="128" height="128" />
                                <div class="mt-2">
                                    <span class="btn btn-primary"><i class="fas fa-upload"></i> Upload</span>
                                    <!-- <input type="image" src="" alt=""> -->
                                </div>
                                <small>For best results, use an image at least 128px by 128px in .jpg format</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" name="city" class="form-control" value="{{(@$list) ? $list->city : old('city')}}" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <input type="text" name="state" class="form-control" value="{{(@$list) ? $list->state : old('state')}}" id="inputCity">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" name="zip" class="form-control" value="{{(@$list) ? $list->zip : old('zip')}}" id="inputZip">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="col-md-6 offset-md-0">
                            <button type="submit" class="site-btn">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                </form>

            </div>
            
        </div>
    </div>
</section>
<!-- Checkout Section End -->

@endsection