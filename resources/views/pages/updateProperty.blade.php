@extends('layouts.htmlContainer') @section('content')

{{-- <div class="dropdownmenuFilter d-block" style="opacity: 1; visibility: visible">
    <div class="optionContainer">
        <i class="bx bxs-user navDropIcon"></i>
        <a href="/profile">
            <button
                class="border-0 bg-transparent"
                type="submit"
                name="sort_by"
                value="latest"
            >
                <span class="option" href="/profile">Profile</span>
            </button>
        </a>
    </div>
    <div class="optionContainer">
        <i class="bx bxs-heart navDropIcon"></i>
        <a href="/Favourites">
            <button
                class="border-0 bg-transparent"
                type="submit"
                name="sort_by"
                value="Oldest"
            >
                <span class="option" href="/Favourites">Favourites</span>
            </button>
        </a>
    </div>
    <div class="optionContainer">
        <i class="bx bx-log-out-circle navDropIcon"></i>
        <a href="/logout">
            <button
                class="border-0 bg-transparent"
                type="submit"
                name="sort_by"
                value="title_desc"
            >
                <span class="option" href="/logout">Logout</span>
            </button>
        </a>
    </div>
</div> --}}

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
                <form
                    action="/addproperty/{{$property->id}}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf
                    @method('PUT')
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
                                            value="{{$property->title}}"
                                            placeholder="Enter your property title"
                                        />
                                    </p>

                                    {{-- error --}} @error('title')
                                    <p
                                        class="text-danger mt-2"
                                        style="font-weight: 500"
                                    >
                                        {{$message}}
                                    </p>
                                    @enderror {{-- end error --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label for="description">Property Description</label>
                                        <textarea id="description" name="description" placeholder="Describe about your property">{{$property->description}}</textarea>
                                        @error('description')
                                    </p>
                                    <p class="text-danger mt-2" style="font-weight: 500">{{$message}}</p>
                                    @enderror
                                </div>
                            
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <label for="area">type</label>
                                    <select name="type" id="type">
                                        <option value="House" {{ $property->type == 'House' ? 'selected' : '' }}>House</option>
                                        <option value="Apartement" {{ $property->type == 'Apartement' ? 'selected' : '' }}>Apartement</option>
                                        <option value="Garage" {{ $property->type == 'Garage' ? 'selected' : '' }}>Garage</option>
                                    </select>

                                    {{-- error --}} @error('type')
                                    <p
                                        class="text-danger mt-2"
                                        style="font-weight: 500"
                                    >
                                        {{$message}}
                                    </p>
                                    @enderror {{-- end error --}}
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label for="area">Rooms</label>
                                    <select name="rooms" id="rooms">
                                        @for($i = 1; $i <= 3; $i++)
                                            <option value="{{ $i }}" @if($property->rooms == $i) selected @endif>{{ $i }}</option>
                                        @endfor
                                    </select>

                                    {{-- error --}} @error('Rooms')
                                    <p
                                        class="text-danger mt-2"
                                        style="font-weight: 500"
                                    >
                                        {{$message}}
                                    </p>
                                    @enderror {{-- end error --}}
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
                                            value="{{$property->price}}"
                                            id="price"
                                        />
                                    </p>

                                    {{-- error --}} @error('price')
                                    <p
                                        class="text-danger mt-2"
                                        style="font-weight: 500"
                                    >
                                        {{$message}}
                                    </p>
                                    @enderror {{-- end error --}}
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p class="no-mb last">
                                        <label for="area">Area</label>
                                        <input
                                            type="number"
                                            name="area"
                                            placeholder="Sqft"
                                            value="{{$property->area}}"
                                            id="area"
                                        />
                                    </p>

                                    {{-- error --}} @error('area')
                                    <p
                                        class="text-danger mt-2"
                                        style="font-weight: 500"
                                    >
                                        {{$message}}
                                    </p>
                                    @enderror {{-- end error --}}
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

                            @foreach ($property->PropertyImage as $PropertyImage)
                                <img src="{{ url('assets/img/uploads/' . $PropertyImage->image) }}" alt="" style="width:25%">
                            @endforeach
                                  
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
                                            value="{{$property->address}}"
                                            id="address"
                                        />
                                    </p>
                                    {{-- error --}} @error('address')
                                    <p
                                        class="text-danger mt-2"
                                        style="font-weight: 500"
                                    >
                                        {{$message}}
                                    </p>
                                    @enderror {{-- end error --}}
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p>
                                        <label for="city">City</label>
                                        <input
                                            type="text"
                                            name="city"
                                            placeholder="Enter Your City"
                                            value="{{$property->city}}"
                                            id="city"
                                        />
                                    </p>

                                    {{-- error --}} @error('city')
                                    <p
                                        class="text-danger mt-2"
                                        style="font-weight: 500"
                                    >
                                        {{$message}}
                                    </p>
                                    @enderror {{-- end error --}}
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
                                            value="{{$property->state}}"
                                            id="state"
                                        />
                                    </p>

                                    {{-- error --}} @error('state')
                                    <p
                                        class="text-danger mt-2"
                                        style="font-weight: 500"
                                    >
                                        {{$message}}
                                    </p>
                                    @enderror {{-- end error --}}
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p>
                                        <label for="country"
                                            >Neighborhood</label
                                        >
                                        <input
                                            type="text"
                                            name="neighborhood"
                                            placeholder="Enter Your Neighborhood"
                                            value="{{$property->neighborhood}}"
                                            id="country"
                                        />
                                    </p>

                                    {{-- error --}} @error('neighborhood')
                                    <p
                                        class="text-danger mt-2"
                                        style="font-weight: 500"
                                    >
                                        {{$message}}
                                    </p>
                                    @enderror {{-- end error --}}
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
                                    <select name="Age" id="age">
                                        @for($i = 1; $i <= 3; $i++)
                                            <option value="{{ $i }}" @if($property->Age == $i) selected @endif>{{ $i }}</option>
                                        @endfor
                                    </select>

                                    {{-- error --}} @error('Age')
                                    <p
                                        class="text-danger mt-2"
                                        style="font-weight: 500"
                                    >
                                        {{$message}}
                                    </p>
                                    @enderror {{-- end error --}}
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <label for="area">beds</label>
                                    <select name="beds" id="beds">
                                        @for($i = 1; $i <= 3; $i++)
                                            <option value="{{ $i }}" @if($property->beds == $i) selected @endif>{{ $i }}</option>
                                        @endfor
                                    </select>

                                    {{-- error --}} @error('beds')
                                    <p
                                        class="text-danger mt-2"
                                        style="font-weight: 500"
                                    >
                                        {{$message}}
                                    </p>
                                    @enderror {{-- end error --}}
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <label for="area">BathRooms</label>
                                    <select name="bathRooms" id="bathRooms">
                                        @for($i = 1; $i <= 3; $i++)
                                            <option value="{{ $i }}" @if($property->bathRooms == $i) selected @endif>{{ $i }}</option>
                                        @endfor
                                    </select>

                                    {{-- error --}} @error('bathRooms')
                                    <p
                                        class="text-danger mt-2"
                                        style="font-weight: 500"
                                    >
                                        {{$message}}
                                    </p>
                                    @enderror {{-- end error --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-add-property">
                        <h3>Property Features</h3>

                        <div class="property-form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    {{-- error --}} @error('Features')
                                    <p
                                        class="text-danger mt-2"
                                        style="font-weight: 500"
                                    >
                                        {{$message}}
                                    </p>
                                    @enderror {{-- end error --}}

                                    <ul class="pro-feature-add pl-0">
                                        @foreach($allFeatures as $feature)
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-{{ $loop->index }}" type="checkbox" name="Features[]" value="{{ $feature }}" 
                                                            @if(in_array($feature, $selectedFeatures)) checked @endif 
                                                        />
                                                        <label for="check-{{ $loop->index }}">{{ $feature }}</label>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-add-property">
                        <h3>Contact Information</h3>
                        <div class="property-form-group"></div>
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
