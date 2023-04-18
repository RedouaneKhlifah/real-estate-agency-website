@extends('layouts.htmlContainer') @section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-3">
            <div>
            <nav class="navbar navbar-expand-lg">
            <div class="container">
            <img
                class="logo"
                src="assets//img/icons/logoBlue.png"
                alt=""
                style="width: 145px"
            />
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            </div>
            </div>
        </nav>
        </div>       
        
        <div class="dashbordButtonsContainer">
        <div id="groupButtons" class="main">
            <span>Main</span>
            <div class="buttonConatiner">
            <i class="fa-solid fa-layer-group"></i>
            <a href="">Dashbord</a>
            
            </div>
            <div  class="buttonConatiner">
            <i class="fa-solid fa-plus"></i>
            <a href="">Create Listing</a>
            </div>

            <div class="buttonConatiner">
            <i class="fa-solid fa-message"></i>
            <a href="">Create Listing</a>
            </div>

            
        </div>

        <div id="groupButtons"  class="manageListings">
            <span>Manage Listings</span>
            <div class="buttonConatiner">
        <i class="fa-solid fa-house"></i>
        <a href="">My Properties</a>
        <i class="fa-solid fa-chevron-down"></i>
        </div>

        <div class="buttonConatiner">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
        <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
        <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
        </svg>
        <a href="">reviews</a>
        </div>
        
        <div class="buttonConatiner">
        <i class="fa-regular fa-heart"></i>
        <a href="">favourite</a>
        </div>
        </div>



        <div id="groupButtons"  class="manageAccount">
        <span>Manage Listings</span>
        <div class="buttonConatiner">
        <i class="fa-solid fa-user"></i>
        <a href="">Profile</a>
        </div>

        <div class="buttonConatiner">
        <i class="fa-solid fa-right-from-bracket"></i>
        <a href="">Logout</a>
        </div>

        



       
        </div>


        
        
        </div>

            </div>


        <div class="col-md-9">
            <p>left</p>
        </div>
    </div>
</div> -->

<!-- START SECTION DASHBOARD -->
<section class="user-page section-padding">
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


            <div
                class="col-lg-9 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2"
            >
                <!-- <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                        <li>
                                            <a href="dashboard.html">
                                                <i class="fa fa-map-marker mr-3"></i> Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.html">
                                                <i class="fa fa-user mr-3"></i>Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="my-listings.html">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>My Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a href="favorited-listings.html">
                                                <i class="fa fa-heart mr-3" aria-hidden="true"></i>Favorited Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a class="active" href="add-property.html">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>Add Property
                                            </a>
                                        </li>
                                        <li>
                                            <a href="payment-method.html">
                                                <i class="fas fa-credit-card mr-3"></i>Payments
                                            </a>
                                        </li>
                                        <li>
                                            <a href="invoice.html">
                                                <i class="fas fa-paste mr-3"></i>Invoices
                                            </a>
                                        </li>
                                        <li>
                                            <a href="change-password.html">
                                                <i class="fa fa-lock mr-3"></i>Change Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.html">
                                                <i class="fas fa-sign-out-alt mr-3"></i>Log Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                <form action="/addproperty" method="POST" enctype="multipart/form-data" >

                @csrf
                <div class="single-add-property">
                    <h3>Property description and price</h3>
                    <div class="property-form-group">

                        
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="m-0">
                                        <label for="title"
                                            >Property Title</label
                                        >
                                        <input
                                            type="text"
                                            name="title"
                                            id="title"
                                            placeholder="Enter your property title"
                                        />
                                    </p>

                                {{-- error --}}
                                @error('title')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label for="description"
                                            >Property Description</label
                                        >
                                        <textarea
                                            id="description"
                                            name="description"
                                            placeholder="Describe about your property"
                                        ></textarea>

                                {{-- error --}}
                                @error('description')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <label for="area">type</label>
                                    <select name="type" id="type">
                                        <option value="House">House</option>
                                        <option value="Apartement">Apartement</option>
                                        <option value="Garage">Garage</option>
                                    </select>

                                    {{-- error --}}
                                @error('type')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}

                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label for="area">Rooms</label>
                                    <select name="rooms" id="type">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>

                                    {{-- error --}}
                                @error('Rooms')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}
                                
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <p class="no-mb">
                                        <label for="price">Price</label>
                                        <input
                                            type="number"
                                            name="price"
                                            placeholder="USD"
                                            id="price"
                                        />
                                    </p>

                                    {{-- error --}}
                                @error('price')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}

                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p class="no-mb last">
                                        <label for="area">Area</label>
                                        <input
                                            type="number"
                                            name="area"
                                            placeholder="Sqft"
                                            id="area"
                                        />
                                    </p>

                                {{-- error --}}
                                @error('area')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}

                                </div>
                            </div>
                        


                    </div>
                </div>
                <div class="single-add-property">
                    <h3>property Media</h3>

                    <div class="property-form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="mulitiple_images" class="w-100">
                                <div class="dropzone" >
                                    <div class="aploadInsideConatiner">         
                                        <i class="fa-solid fa-cloud-arrow-up"></i>
                                        <span>Click Here Or Drop Files To Upload</span>
                                    </div>
                                </div>
                                </label>
                                <input
                                type="file"
                                name="images[]"
                                multiple
                                id="mulitiple_images"
                                class="mulitiple_images"
                                hidden
                               
                            />
                            
                            <div class="imagezone" style="    padding-top: 30px;
                            display: flex;
                            flex-wrap: wrap;
                            GAP: 30PX;">
                              
                            </div>
                            {{-- error --}}
                            @error('images')
                            <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                            @enderror
                            {{-- end error --}}

                            </div>
                        </div>
                    </div>


                </div>
                <div class="single-add-property">
                    <h3>property Location</h3>
                    <div class="property-form-group">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <p>
                                    <label for="address">Address</label>
                                    <input
                                        type="text"
                                        name="address"
                                        placeholder="Enter Your Address"
                                        id="address"
                                    />
                                </p>
                                {{-- error --}}
                                @error('address')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p>
                                    <label for="city">City</label>
                                    <input
                                        type="text"
                                        name="city"
                                        placeholder="Enter Your City"
                                        id="city"
                                    />
                                </p>

                                {{-- error --}}
                                @error('city')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <p>
                                    <label for="state">State</label>
                                    <input
                                        type="text"
                                        name="state"
                                        placeholder="Enter Your State"
                                        id="state"
                                    />
                                </p>

                                {{-- error --}}
                                @error('state')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p>
                                    <label for="country">Neighborhood</label>
                                    <input
                                        type="text"
                                        name="neighborhood"
                                        placeholder="Enter Your Neighborhood"
                                        id="country"
                                    />
                                </p>

                                {{-- error --}}
                                @error('neighborhood')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-add-property">
                    <h3>Extra Information</h3>
                    <div class="property-form-group">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <label for="area">Age</label>
                                <select name="Age" id="type">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>

                                {{-- error --}}
                                @error('Age')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <label for="area">beds</label>
                                <select name="beds" id="type">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>

                                {{-- error --}}
                                @error('beds')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <label for="area">BathRooms</label>
                                <select name="bathRooms" id="type">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>

                                {{-- error --}}
                                @error('bathRooms')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-add-property">
                    <h3>Property Features</h3>

                    
                    <div class="property-form-group">
                        <div class="row">
                            <div class="col-md-12">

                                {{-- error --}}
                                @error('Features')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}

                                <ul class="pro-feature-add pl-0">
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-a"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="Air Conditioning"
                                                />
                                                <label for="check-a"
                                                    >Air Conditioning</label
                                                >
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-b"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="Swimming Pool"
                                                />
                                                <label for="check-b"
                                                    >Swimming Pool</label
                                                >
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-c"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="Central Heating"
                                                />
                                                <label for="check-c"
                                                    >Central Heating</label
                                                >
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-d"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="Laundry Room"
                                                />
                                                <label for="check-d"
                                                    >Laundry Room</label
                                                >
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-e"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="Gym"
                                                />
                                                <label for="check-e">Gym</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-h"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="Window Covering"
                                                />
                                                <label for="check-h"
                                                    >Window Covering</label
                                                >
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-i"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="Refrigerator"
                                                />
                                                <label for="check-i"
                                                    >Refrigerator</label
                                                >
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-j"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="TV Cable & WIFI"
                                                />
                                                <label for="check-j"
                                                    >TV Cable & WIFI</label
                                                >
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-k"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="Microwave"
                                                />
                                                <label for="check-k"
                                                    >Microwave</label
                                                >
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-add-property">
                    <div class="property-form-group">
                    </div>
                    <div class="add-property-button pt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="prperty-submit-button">
                                    <button type="submit">
                                        Submit Property
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

            </div>
        </div>
    </div>
</section>


<script src="{{url('assets/js/addproperty.js')}}"></script>

@endsection
