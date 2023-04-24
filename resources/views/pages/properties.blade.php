@extends('layouts.htmlContainer') 
@section('content')
    

    <!-- navbar -->



    

    {{-- <div class="imageContainerAll">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <img
              class="logo"
              src='assets//img/icons/logo.png'
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
            <div
              class="collapse navbar-collapse"
              id="navbarSupportedContent"
            >
              <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
              <form class="d-flex" role="search">
                <button
                  id="addAnnounceBtn"
                  class="btn loginbtn"
                  type="submit"
                >
                  <img id="plusIcon" src='../../public/assets//img/icons/plus_icon.png' alt="" />
                  <img id="plusIconWhite" src= '../../public/assets//img//icons/iconPlus.png' alt="" />
                  DÉPOSER UNE ANNONCE
                </button>
              </form>

                @auth         
                    <div>

                    
                      <img src="assets/img/users/{{auth()->user()->profile_Image}}" class="rounded-circle profile_image m-0" alt="Profile Image">
                    <div class="dropdown_Navbar d-inline-block" style="cursor: pointer">
                      <span class="text-white">{{auth()->user()->first_Name}} {{auth()->user()->last_Name}} </span>
                      <span class="arrow-dwn text-white navbar_arrow_down" style="cursor: pointer" id="propertyinfo_arrow">
                        <i class="fa-solid fa-chevron-down bg-none"></i>
                      </span>
                      <div class="bg-white d-none navnar_dropdown_options position-absolute ">
                        <div class="profile_dd ">
                          <ul class="profile_ul list-unstyled p-0">
                            <li class="profile_li"><a class="profile" href="#"><span class="picon"><i class="fas fa-user-alt"></i>
                                </span>Profile</a>
                            </li>
                            <form action="/logout" method="POST">
                              @csrf
                            <button style="border: none;
                            background-color: transparent;"> <i class="fas fa-sign-out-alt"></i> <span>logout</span> </button>
                            
                          </ul>
                        </div>
                      </div>
                    </div>
                      </div>
                    </div>

                 
                  </form>

                </div>
                 

               
                @else
                <a href="/login">
                <button id="navbtn" class="btn Register mx-3"  type="button" data-toggle="modal" data-target="#signup">
                  <img class="icon" src='../../public/assets//img//icons/user-light.svg' alt="" />
                  SE CONNECTER
                </button>
              </a>
                @endauth --}}

  {{-- end of navbar --}}

  <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a href="/">
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

  <div style="background: #2540a2;
  width: 100%;
  height: 150px;
  display: flex;
  align-items: center;">
    <p style="COLOR: WHITE;
    font-size: 3.9em;
    font-weight: 700;
    padding-left: 70px;">
        Property List
    </p>
</div>


  <div class="container" id="propertiesContainer">
    <form action="/properties" method="Post">
        @csrf
        <div class="row">
        
        <div class="col-md-4">
            <div class="filterContainer">
            <div class="searchConatiner">
            <i class="fa-solid fa-magnifying-glass searchIcon"></i>
            
                <input type="text" class="searchInput" name="keyword" placeholder="Kywords...">
            
            </div>
            
        <div class="container" id="WHERE_Container">
            <div class="select-btn">
                <span class="btn-text">WHERE</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>

            

            <ul class="list-items" id="WHERE">
            
              @foreach ($cities as $city)
                <li class="item {{ in_array($city, $old_cities) ? ' checked' : '' }}">
            
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                        <input hidden id="checkFilter" {{ in_array($city, $old_cities) ? ' checked' : '' }} type="checkbox" name="city[]" id="" value="{{ $city }}" >
                    </span>
                    <span class="item-text"  name='city[]'>{{ $city }}</span>
                </li>
            @endforeach
            </ul>
        </div>

      
        <div class="container" id="ROPERTY-TYPES_Container">
              <div class="select-btn" >
                  <span class="btn-text">PROPERTY TYPES</span>
                  <span class="arrow-dwn">
                      <i class="fa-solid fa-chevron-down"></i>
                  </span>
              </div>

              <ul class="list-items" id="PROPERTY-TYPES">
                @foreach ($types as $type)
                    <li class="item {{ in_array($type, $old_types) ? 'checked' : '' }}">
                        <span class="checkbox">
                            <i class="fa-solid fa-check check-icon"></i>
                            <input hidden id="checkFilter" {{ in_array($type, $old_types) ? 'checked' : '' }} type="checkbox" name="type[]" id="" value="{{ $type }}" >
                        </span>
                        <span class="item-text" name="type[]">{{ $type }}</span>
                    </li>
                @endforeach
            </ul>
            
        </div>
      



        <div class="container" id="FEATURES_Conatainer">
            <div class="select-btn border-bottom-0">
                <span class="btn-text">FEATURES</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>

            <ul class="list-items" id="FEATURES">
              @foreach ($features as $feature)
                  <li class="item {{ in_array($feature, $old_features) ? 'checked' : '' }}">
                      <span class="checkbox">
                          <i class="fa-solid fa-check check-icon"></i>
                          <input hidden id="checkFilter" {{ in_array($feature, $old_features) ? 'checked' : '' }} type="checkbox" name="FEATURES[]" value="{{ $feature }}" >
                      </span>
                      <span class="item-text">{{ $feature }}</span>
                  </li>
              @endforeach
          </ul>
          


        </div>

        <div class="browseContainer mb-2 mt-4">
            <div class="browseMore" style="padding: 16px 120px;">
                <input class="bg-transparent border-0 text-center" type="submit" name="" id="" value="Search" 
                style=" color: #1266e3; font-weight: 600;FONT-SIZE: 16px;  ">
            </div>
        </div>

        </div>
        
        
        </div>
    </form>
        <div class="col-md-8">
            <div class="row" id="propertiesRow">
            <div class="col-md-12 infoSerchContainer">
                <div class="resultNumber">
                <span>Showing {{$some}} of {{$count}} Results</span>
                </div>
                <div >
                <div>
                <div class="dropdownContainer">
                <span>{{$sort}}</span>
                <img src="assets/img/icons/iconTriangle.png" alt="">
                
                </div>
                <div class="dropdownmenuFilter">
                <div class="optionContainer">
                <img src="assets/img/icons/iconTriangle.png" alt="">
                <button class="border-0 bg-transparent" type="submit" name="sort_by" value="latest">  <span class="option" href="">Latest</span> </button>
               
                </div>
                <div class="optionContainer">
                <img src="assets/img/icons/iconTriangle.png" alt="">
                <button class="border-0 bg-transparent" type="submit" name="sort_by" value="Oldest">  <span class="option" href="">Oldest</span> </button>
                
                </div>
                <div class="optionContainer">
                <img src="assets/img/icons/iconTriangle.png" alt="">
                <button class="border-0 bg-transparent" type="submit" name="sort_by" value="title_asc">  <span class="option" href="">Title Ascending</span> </button>

                
                </div>
                <div class="optionContainer">
                <img src="assets/img/icons/iconTriangle.png" alt="">
                <button class="border-0 bg-transparent" type="submit" name="sort_by" value="title_desc">  <span class="option" href="">Title Descending</span> </button>
               
                </div>

                </div>
                </div>
                </div>
           
                
            </div>
            </div>
            <div class="row" id="propertiesRow">

                {{-- box  --}}
                @foreach ($properties as $property)

                <div class="col-md-6" id="propertiesBox">
                    <div class="card">
                  
                    <div id="carouselExample{{$loop->index }}" class="carousel slide"  >
                     
                      <span class="created_diff">{{$property->created_diff}}</span>
                        <div class="carousel-inner">
                         
                        @foreach ($property->PropertyImage as $PropertyImage)
                            <div class="carousel-item active">
                                <img  src="assets/img/uploads/{{$PropertyImage->image}}" class="d-block w-100 "   alt="..." >
                            </div>
                        @endforeach

        
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample{{$loop->index }}" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true" style="width: 23px; height: 23px;"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample{{$loop->index }}" data-bs-slide="next">
                        <span  class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true" style="width: 23px; height: 23px;"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>
        
        
                    <div class="card-body">
                        <div class="row boxFirstRow">
                        <div class="col-8 tiltleBoxPrice">
                            <span class="propertyType">{{$property->type}}</span>
                            
                        </div>
                        <div class="col-4">
                            <h6 class="boxPrice">${{$property->price}}</h6>
                        </div>


                       
                        </div>

                        <div class="row boxFirstRow" style="padding-left: 5PX;">
                            <div class="col-8 tiltleBoxPrice">
                                <a class="boxTitleA" href="/property/{{$property->id}}"> <h4 class="boxTitle">{{$property->title}}</h4></a>
                               
                                
                            </div>

                            <div class="col-4">
                                
                            </div>
    

                           
                            </div>
                        <div class="boxIconsContainer">
                        <div class="IconContainer">
                            <div class="theiconContainer">
                            <img src="assets/img/icons/bathtub.svg" alt="" />
                            </div>
                            2 Baths
                        </div>
                        <div class="IconContainer">
                            <div class="theiconContainer">
                            <img  src="assets/img/icons/bed.svg" alt="" />
                            </div>
                            {{$property->beds}} Baths
                        </div>
                        <div class="IconContainer">
                            <div class="theiconContainer">
                            <img  src="assets/img/icons/move.svg" alt="" />
                            </div>
                            {{$property->area}} sqft
                        </div>
                        </div>
                        <div class="boxfooter">
                        <div class="BoxLocationConationer">
                            <div class="locationconatiner">
                                <i class="fa-solid fa-location-dot"></i>
                            {{$property->address}}, {{$property->city}}
                            </div>
                        </div>
                        <div class="BoxButtonConatiner">
                            <a
                            href="/property/{{$property->id}}"
                            class="prt-view"

                            >
                            View
                            </a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                {{-- end of box  --}}

                
                @endforeach

              @if($some >8)

                <div class="pagination-container d-flex justify-content-center" >
                  <nav>
                      <ul class="pagination">
                          <li class="page-item">
                              <!-- Display Previous button with link to previous page -->
                              @if($properties->currentPage() > 1)
                                  <a style="background-color: #1266e3" class="btn btn-common" id="Previousprop" href="{{ $properties->previousPageUrl() }}">
                                      <i class="lni-chevron-left"></i> Previous
                                  </a>
                              @endif
                          </li>
                          <!-- Display page number links -->
                          @for($i = 1; $i <= $properties->lastPage(); $i++)
                              <li class="page-item">
                                  <a class="page-link" id="propPaginate" @if($properties->currentPage() == $i) style="background: #1266e3; color:white" @endif href="{{ $properties->url($i) }}">{{ $i }}</a>
                              </li>
                          @endfor
                          <li class="page-item">
                              <!-- Display Next button with link to next page -->
                              @if($properties->currentPage() < $properties->lastPage())
                                  <a style="background-color: #1266e3" class="btn btn-common" id="Nextprop" href="{{ $properties->nextPageUrl() }}">
                                      Next <i class="lni-chevron-right"></i>
                                  </a>
                              @endif
                          </li>
                      </ul>
                  </nav>
              </div>

              @endif

            </div>
        </div>
        </div>

  </div>


  <script>
    // Trigger file input when clicking any list item with class "item"
    $('.item').on('click', function() {
      $(this).find('.checkFilterCheckbox').trigger('click');
    });
    </script>

  <script src="{{url('assets/js/properties.js')}}"></script>

  @endsection