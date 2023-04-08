@extends('layouts.htmlContainer') 
@section('content')



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
                      <img src="assets/img/icons/move.svg" alt="" />
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
                      
                      
                      <i class="fa-regular fa-heart"></i> 

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
  
                  <div class="featuredPropertyContainer">
                    <div class="ImageContainer">
                      <img class="featuredPropertyImage" src="assets/img/uploads/p-1.jpg" alt="">
                    </div>
                    <div class="featuredPropertiesInfo">
                      <a class="title" href="">Creekland Village</a>
                      <span class="date">July 24, 2022</span>
                      <div id="location" class="locationconatiner">
                      <i class="fa-solid fa-location-dot"></i>
                        778 Panama City, FL
                    </div>
                    <span class="propertyType">Sale</span>
                    </div>
                  </div>
  
                  <div class="featuredPropertyContainer">
                    <div class="ImageContainer">
                      <img class="featuredPropertyImage" src="assets/img/uploads/p-1.jpg" alt="">
                    </div>
                    <div class="featuredPropertiesInfo">
                      <a class="title" href="">Creekland Village</a>
                      <span class="date">July 24, 2022</span>
                      <div id="location" class="locationconatiner">
                      <i class="fa-solid fa-location-dot"></i>
                        778 Panama City, FL
                    </div>
                    <span class="propertyType">Sale</span>
                    </div>
                  </div>
  
  
                  <div class="featuredPropertyContainer">
                    <div class="ImageContainer">
                      <img class="featuredPropertyImage" src="assets/img/uploads/p-1.jpg" alt="">
                    </div>
                    <div class="featuredPropertiesInfo">
                      <a class="title" href="">Creekland Village</a>
                      <span class="date">July 24, 2022</span>
                      <div id="location" class="locationconatiner">
                      <i class="fa-solid fa-location-dot"></i>
                        778 Panama City, FL
                    </div>
                    <span class="propertyType">Sale</span>
                    </div>
                  </div>
  
  
                  <div class="featuredPropertyContainer">
                    <div class="ImageContainer">
                      <img class="featuredPropertyImage" src="assets/img/uploads/p-1.jpg" alt="">
                    </div>
                    <div class="featuredPropertiesInfo">
                      <a class="title" href="">Creekland Village</a>
                      <span class="date">July 24, 2022</span>
                      <div id="location" class="locationconatiner">
                      <i class="fa-solid fa-location-dot"></i>
                        778 Panama City, FL
                    </div>
                    <span class="propertyType">Sale</span>
                    </div>
                  </div>
  
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