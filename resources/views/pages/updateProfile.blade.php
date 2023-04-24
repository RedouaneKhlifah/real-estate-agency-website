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
                            @if(Auth::user()->role == 2)
                        
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
                            @endif
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

                            @if (Auth::user()->role == 0)
                            <li>
                                <a href="/Adminprop">
                                    <i class="fa fa-lock"></i>aprove properties
                                </a>
                            </li>
                            @endif

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

            <div
                class="col-lg-6 col-md-12 col-xs-12 pl-0 user-dash2"
                style="width: 50%; background-color: WHITE; margin: auto">
                <form action="/update" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="profileInfoContainer p-4">
                        <div class="widget-boxed-header">
                            <h4>Profile Details</h4>
                        </div>
                        <div class="sidebar-widget author-widget2">
                            <div class="author-box clearfix">
                                <img
                                    src="assets/img/users/ts-1.jpg"
                                    alt="author-image"
                                    class="author__img"
                                />
                                <h4 class="author__title">Lisa Clark</h4>
                                <p class="author__meta">user</p>
                            </div>
                            <ul class="author__contact">

                                <li>
                                    <span class="la la-phone">
                                        <i class="fa-solid fa-user"></i>
                                    
                                    </span>
                                    
                                        <input
                                            name="first_Name"
                                            type="text"
                                            value=" {{$user->first_Name}}"
                                        />

                                            
                                        <input
                                            name="last_Name"
                                            type="text"
                                            value=" {{$user->last_Name}}"
                                        />
                                    
                                </li>
                              
                                <li>
                                    <span class="la la-phone"
                                        ><i
                                            class="fa fa-phone"
                                            aria-hidden="true"
                                        ></i></span>
                                        (212)
                                        <input
                                            name="phone_Number"
                                            type="text"
                                            value=" {{$user->phone_Number}}"
                                        />
                                    
                                </li>

                                <li>
                                    <span class="la la-envelope-o"
                                        ><i
                                            class="fa fa-envelope"
                                            aria-hidden="true"
                                        ></i></span
                                    
                                        ><input
                                            name="email"
                                            type="text"
                                            value=" {{$user->email}}"
                                    />
                                </li>

                                <li>
                                    <span class="la la-envelope-o"
                                        ><i class="fa-solid fa-image"></i>
                                        
                                        </span
                                    
                                        ><input
                                            name="profile_Image"
                                            type="file"
                                            
                                    />
                                </li>
                            </ul>

                          
                            
                        </div>
                        <div class="d-flex justify-content-end">

                                <button
                                    style="
                                        background: #ff385c;
                                        padding: 7px 20px;
                                        color: WHITE;
                                        font-weight: 500;
                                        letter-spacing: 1px;
                                        cursor: pointer;
                                        border:none;
                                    "
                                >
                                    SAVE
                                </button>
                   

                          
                        </div>
                    </div>
                </form>

                <script src="{{url('assets/js/profile.js')}}"></script>

                @endsection
            </div>
        </div>
    </div>
</section>
