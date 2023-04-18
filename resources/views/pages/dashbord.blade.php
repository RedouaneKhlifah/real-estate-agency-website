@extends('layouts.htmlContainer') @section('content')

<section class="user-page section-padding mt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                <div class="user-profile-box mb-0">
                    <div class="sidebar-header">
                        <img
                            src="{{url('assets/img/icons/logo.png')}}"
                            alt="header-logo2.png"
                        />
                    </div>
                    <div class="header clearfix">
                        <img
                            
                            src="{{ url('assets/img/users/' . $user->profile_Image) }}"
                            alt="avatar"
                            class="img-fluid profile-img"
                        />
                    </div>
                    <div class="active-user">
                        <h2 class="userName">Mohamed Osalh</h2>
                    </div>
                    <div class="detail clearfix">
                        <ul class="mb-0">
                            <li>
                                <a href="/dashboard">
                                    <i class="fa fa-map-marker"></i> Dashboard
                                </a>
                            </li>
                            <li>
                                <a
                                   
                                    href="/addproperty"
                                >
                                    <i class="fa fa-list" aria-hidden="true"></i
                                    >Add Property
                                </a>
                            </li>
                            <li>
                                <a  class="active" href="/Myproperties">
                                    
                                    <i class="fa fa-list" aria-hidden="true"></i
                                    >My Properties
                                </a>
                            </li>
                            <li>
                                <a href="Favourites">
                                    <i
                                        class="fa fa-heart"
                                        aria-hidden="true"
                                    ></i
                                    >Favorited Properties
                                </a>
                            </li>

                            <li>
                                <a href="/profile">
                                    <i class="fa fa-user"></i>Profile
                                </a>
                            </li>

                            <li>
                                <a href="change-password.html">
                                    <i class="fa fa-lock"></i>Change Password
                                </a>
                            </li>
                            <li>
                                <a href="/logout">
                                    <i class="fas fa-sign-out-alt"></i>Log Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">
                <div class="col-lg-12 mobile-dashbord dashbord"></div>
                <div class="dashborad-box stat bg-white">
                    <h4 class="title">Manage Dashboard</h4>
                    <div class="section-body">
                        <div class="row">
                            <div
                                class="col-lg-3 col-md-6 col-xs-12 dar pro m-0"
                            >
                                <div class="item">
                                    <div class="icon">
                                        <i
                                            class="fa fa-list"
                                            aria-hidden="true"
                                        ></i>
                                    </div>
                                    <div class="info">
                                        <h6 class="number">{{$PublishedProperties}}</h6>
                                        <p class="type ml-1">
                                            Published Property
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 dar booked">
                                <div class="item mb-0">
                                    <div class="icon">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <div class="info">
                                        <h6 class="number">{{$totalLikes}}</h6>
                                        <p class="type ml-1">
                                            Times Bookmarked
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- START FOOTER -->
            </div>
        </div>
    </div>
</section>

@endsection
