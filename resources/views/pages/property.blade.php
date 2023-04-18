@extends('layouts.htmlContainer') 
@section('content')





<nav class="navbar navbar-expand-lg">
  <div class="container">
      <a href="/home">
    <img
      class="logo"
      src='assets//img/icons/logoBlue.png'
      alt=""
      style="width: 145px"
    />
  </a>
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
    <div
      class="collapse navbar-collapse"
      id="navbarSupportedContent"
    >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
      <a href="/addproperty">
        <button
          id="addAnnounceBtn"
          class="btn loginbtn"
          type="submit"
        >
          <img id="plusIcon" src='assets/img/icons/plus_icon.png' alt="" />
          <img id="plusIconWhite" src= 'assets//img//icons/iconPlus.png' alt="" />
          DÉPOSER UNE ANNONCE
        </button>
      </a>

        @auth
    

           
            <div style="MARGIN: 0PX 14px;"  >
              <img src="assets/img/users/{{auth()->user()->profile_Image}}" class="rounded-circle profile_image m-0" alt="Profile Image" style="    height: 42px;
              width: 42px;">
              <div class="dropdown_Navbar d-inline-block" style="cursor: pointer ; MARGIN-LEFT: 5px;">
                  <span class="userName" style="font-weight: 500;">{{auth()->user()->first_Name}} {{auth()->user()->last_Name}} </span>
                  <span class="arrow-dwn text-white navbar_arrow_down  position-relative" style="cursor: pointer " id="propertyinfo_arrow">
                    <i id="navArrow" class="fa-solid fa-chevron-down bg-none" ></i>
                  </span>
                  <div class="bg-white d-none navnar_dropdown_options position-absolute " style="    right: 190px;
                  TOP: 80px;">
                    {{-- <div class="profile_dd ">
                      <ul class="profile_ul list-unstyled p-0">
                        <li class="profile_li"><a class="profile" href="#"><span class="picon"><i class="fas fa-user-alt"></i>
                            </span>Profile</a>
                        </li>
                        <form action="/logout" method="POST">
                          @csrf
                        <button style="border: none;
                        background-color: transparent;"> <i class="fas fa-sign-out-alt"></i> <span>logout</span> </button>
                        
                      </ul>
                    </div> --}}
                    <div class="dropdownmenuFilter" style="    opacity: 1;
                    visibility: visible;">
                    <div class="optionContainer">
                      <i class='bx bxs-user  navDropIcon'></i>
                      <a href="/profile"> 
                        <button class="border-0 bg-transparent" type="submit" name="sort_by" value="latest">   <span class="option" href="/profile">Profile</span> </button>
                      </a>
                      </div>
                        <div class="optionContainer">
                          <i class='bx bxs-heart  navDropIcon'></i>
                          <a href="/Favourites"> 
                        <button class="border-0 bg-transparent" type="submit" name="sort_by" value="Oldest">  <span class="option" href="/Favourites">Favourites</span> </button>
                          </a> 
                        </div>
    
                        <div class="optionContainer">
                          <i class='bx bx-log-out-circle  navDropIcon'></i>
                         <form action="/logout" method="POST">
                          @csrf
                        <button class="border-0 bg-transparent" type="submit" name="sort_by" value="title_desc">  <span class="option">Logout</span> </button>
                      </form>
                       
                   
                    </div>
                  </div>
              </div>
            </div>




            

         
       

    
          
         

       
        @else
        <a href="/login">
        <button id="navbtn" class="btn Register mx-3"  type="button" data-toggle="modal" data-target="#signup">
          <img class="icon" src='../../public/assets//img//icons/user-light.svg' alt="" />
          SE CONNECTER
        </button>
      </a>
        @endauth

    
    </div>
  </div>
</nav>
  
  <div class="propertyPageConatiner">
    <div class="container">
      <div class="row">
        <!-- <i class="fa-solid fa-arrow-right"></i>
          <i class="fa-solid fa-arrow-right fa-rotate-180"></i> -->
        <div class="col-md-12" id="silde_Images_Proprety_Container">
           @foreach ($property->PropertyImage as $PropertyImage)
           <img
           class="sildeImageProprety"
           src  = "{{ url('/assets/img/uploads/' . $PropertyImage->image) }}"
           alt=""
         />
           @endforeach

          
        </div>
  
        <section class="property_info_section">
          <div class="container" id="property_info_container">
            <div class="row">
              <div class="col-md-8" id="rightConatiner">
                <!-- property listing info -->
                <div class="propertyInfoListingContainer">
                  <div class="propertyInfoListing">
                    <span class="propertyType">Sale</span>
                    <h4 class="listing-name">Bluewhale Real Estate</h4>
                    <div class="locationconatiner">
                      <i class="fa-solid fa-location-dot" style="color:#5a6175"></i>
                      778 Panama City, FL
                    </div>
                    <h6 class="boxPrice" id="propertyPrice">$7,000</h6>
                    <div class="boxIconsContainer" id="propertyIcons">
                      <div class="IconContainer">
                        <div class="theiconContainer">
                          <img src="{{url('assets/img/icons/bathtub.svg')}}"  alt="" /> 
                        </div>
                        {{$property->bathRooms}} Baths
                      </div>
                      <div class="IconContainer">
                        <div class="theiconContainer">
                          <img src="{{url('assets/img/icons/bed.svg')}}" alt="" />
                        </div>
                        {{$property->beds}} beds
                      </div>
                      <div class="IconContainer">
                        <div class="theiconContainer">
                          <img src="{{url('assets/img/icons/move.svg')}}" alt="" />
                        </div>
                        {{$property->area}} sqft
                      </div>
                    </div>
                  </div>
                </div>
  
                <!--  Detail & Features -->
                <div class="propertyInfoListingContainer">
                  <div class="select-btn propertyInfoShower">
                    <span class="btn-text">Detail & Features</span>
                    <span class="arrow-dwn" id="propertyinfo_arrow">
                      <i class="fa-solid fa-chevron-down"></i>
                    </span>
                  </div>
  
                  <div class="propertyInfoListing">
                    <span class="propertyType">Sale</span>
                    <h4 class="listing-name">Bluewhale Real Estate</h4>
                    <div class="locationconatiner">
                      <img src="assets/img/icons/move.svg" alt="" />
                      778 Panama City, FL
                    </div>
                    <h6 class="boxPrice" id="propertyPrice">$7,000</h6>
                    <div class="boxIconsContainer" id="propertyIcons">
                      <div class="IconContainer">
                        <div class="theiconContainer">
                          <img src="assets/img/icons/bathtub.svg" alt="" />
                        </div>
                        2 Baths
                      </div>
                      <div class="IconContainer">
                        <div class="theiconContainer">
                          <img src="assets/img/icons/bed.svg" alt="" />
                        </div>
                        3 Baths
                      </div>
                      <div class="IconContainer">
                        <div class="theiconContainer">
                          <img src="assets/img/icons/move.svg" alt="" />
                        </div>
                        1100 sqft
                      </div>
                    </div>
                  </div>
                </div>
  
                <!-- description   -->
                <div class="propertyInfoListingContainer">
                  <div class="select-btn propertyInfoShower">
                    <span class="btn-text">Description</span>
                    <span class="arrow-dwn" id="propertyinfo_arrow">
                      <i class="fa-solid fa-chevron-down"></i>
                    </span>
                  </div>
  
                  <div class="propertyInfoListing" id="propertyInfoListing_dec">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s, when an unknown
                      printer took a galley of type Lorem Ipsum is simply dummy
                      text of the printing and typesetting industry. Lorem Ipsum
                      has been the industry's standard dummy text ever since the
                      1500s, when an unknown printer took a galley of type and
                      scrambled it to make a type specimen book. It has survived
                      not only five centuries, but also the leap into electronic
                      typesetting, remaining essentially unchanged. It was
                      popularised in the 1960s with the release of Letraset sheets
                      containing Lorem Ipsum passages, and more recently with
                      desktop publishing software like Aldus PageMaker including
                      versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
  
                <!-- Amenities  -->
                <div class="propertyInfoListingContainer">
                  <div class="select-btn propertyInfoShower">
                    <span class="btn-text">Amenities</span>
                    <span class="arrow-dwn" id="propertyinfo_arrow">
                      <i class="fa-solid fa-chevron-down"></i>
                    </span>
                  </div>
  
                  <div class="propertyInfoListing">
                  <div class="amenitiesConatainer container">
                    <div class="row">
                        @foreach ($Features as $Feature)
                            
                        <div class="col-md-4" id="amenityConatainer">
                            <div class="singleAmenityconatiner">
                              <div class="checkIconContainer">
                                <i class="fa-solid fa-check" id="checkIcon"></i>
                              </div>
                              <p>{{$Feature}}</p>
                            </div>
                          </div>

                        @endforeach


                      
                    </div>
                  </div>
                  </div>
  
  
                </div>
              </div>
              <div class="col-md-4">
                <div class="row">
  
                  <div class="saveContainer">
                    <form class="saveIconContainer" data-id="{{$property->id}}">
                      @csrf
                      
                      @if ($liked)
                      <i class="fa-regular  fa-heart fa-solid"></i>               
                      @else
                      <i class="fa-regular fa-heart"></i>   
                      
                      @endif
                      

                      <span class="saveText ">Save</span>
                     

                    </form>
                  </div>
  
                <div class="sendMessageSection">
                    <div class="ownerContainer">
                      <div class="personElementConatiner">
                        <div class="ownerImgConatiner">
                          <img
                            class="ownerImage"
                            src  = "{{ url('/assets/img/users/' . $property->user->profile_Image) }}"
                            alt=""
                          />
                        </div>
                        <h2 class="ownerName">Mohamed Osalh</h2>
                      </div>
                    </div>
                    <div class="sendMessageInputs">
                      <div class="singleMessageInput">
                        <label id="labelAut" for="user_login">Name</label>
                        <input
                          <input
                          id="messageName"
                          type="text"
                          class="searchInput"
                          placeholder="Your Name"
                        />
                      </div>
                      <div class="singleMessageInput">
                        <label id="labelAut" for="user_login">Email</label>
                        <input
                          <input
                          id="messageName"
                          type="text"
                          class="searchInput"
                          placeholder="Your Email"
                        />
  
                      </div>
                      <div class="singleMessageInput">
                        <label id="labelAut" for="user_login">Phone No.</label>
                        <input
                          <input
                          id="messageName"
                          type="text"
                          class="searchInput"
                          placeholder="+211 63245-7730"
                        />
                        
                      </div>
                      <div class="singleMessageInput">
                        <label id="labelAut" for="user_login">Description</label>
                        <textarea                         
                          id="textariaMessage"
                          type="text"
                          class="searchInput"
                          placeholder="I'm interested in this property" cols="30" rows="40"></textarea>
                        
                      </div>
                      <button class="sendMessageBtn">Send Message</button>
                    </div>
                  
  
  
                </div>
  
                <div class="featuredPropertiesSection">
                <label class="title" id="labelAut" for="user_login">Featured Property</label>
  
                <div class="featuredPropertiesConatiner">

                  @foreach ($Featureproperties as $Featureproperty)

                  <div class="featuredPropertyContainer">
                    <div class="ImageContainer">
                      <img class="featuredPropertyImage" src="{{url('assets/img/uploads/'.$Featureproperty->PropertyImage[0]->image)}}"  alt="">
                    </div>
                    <div class="featuredPropertiesInfo">
                      <a class="title" href="/property/{{$Featureproperty->id}}"> {{$Featureproperty->title}}</a>
                      <span class="date">{{$Featureproperty->format}}</span>
                      <div id="location" class="locationconatiner">
                      <i class="fa-solid fa-location-dot"></i>
                      {{$Featureproperty->address}}
                    </div>
                    <span class="propertyType">{{$Featureproperty->type}}</span>
                    </div>
                  </div>
                      
                  @endforeach
  


  
                </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <script src="{{url('assets/js/property.js')}}"></script>

  @endsection