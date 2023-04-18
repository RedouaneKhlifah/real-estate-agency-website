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
            
                <input type="text" class="searchInput" placeholder="Kywords...">
            
            </div>
            
        <div class="container">
            <div class="select-btn">
                <span class="btn-text">WHERE</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>

            

            <ul class="list-items" id="WHERE">
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                        <input hidden id="checkFilter" type="checkbox" name="city[]" id="" value="Safi" >
                    </span>
                    <span class="item-text"  name = 'city[]'>Safi</span>
                </li>

                <li class="item">
                    
                   
                        <span class="checkbox">
                           
                            <i class="fa-solid fa-check check-icon"></i>
                            <input hidden id="checkFilter" type="checkbox" name="city[]" id="" value="Rabat" >
                        </span>
                        
                        <span class="item-text" name='city[]'>Rabat</span>
                   
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                        <input hidden id="checkFilter" type="checkbox" name="city[]" id="" value="Marakech" >
                    </span>
                    <span class="item-text" name = 'city[]'>Marakech</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                        <input hidden id="checkFilter" type="checkbox" name="city[]" id="" value="Casablanca" >
                    </span>
                    <span class="item-text" name = 'city[]'>Casablanca</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                        <input hidden id="checkFilter" type="checkbox" name="city[]" id="" value="Agadir" >
                    </span>
                    <span class="item-text" name = 'city[]'>Agadir</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                        <input hidden id="checkFilter" type="checkbox" name="city[]" id="" value="Jdida" >
                    </span>
                    <span class="item-text" name = 'city[]'>Jdida</span>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="select-btn" >
                <span class="btn-text">PROPERTY TYPES</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>

            <ul class="list-items" id="PROPERTY-TYPES">
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text" name = 'type[]'>Apartment</span>
                    <input hidden id="checkFilter" type="checkbox" name="type[]" id="" value="Apartment" >
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    <input hidden id="checkFilter" type="checkbox" name="type[]" id="" value="House" >
                    </span>
                    <span class="item-text"  name = 'type[]'>House</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    <input hidden id="checkFilter" type="checkbox" name="type[]" id="" value="House" >
                    </span>
                    <span class="item-text"  name = 'type[]'>Garage</span>
                </li>
            </ul>
        </div>
        <div class="container" >
            <div class="select-btn border-bottom-0">
                <span class="btn-text">FEATURES</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>

            <ul class="list-items" id="FEATURES">
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text" name = 'FEATURES[]' >Air Conditioning</span>
                    <input hidden id="checkFilter" type="checkbox" name="FEATURES[]" value="Air Conditioning" >
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    <input hidden id="checkFilter" type="checkbox" name="FEATURES[]" value="Swimming Pool" >
                    </span>
                    <span class="item-text" name = 'FEATURES[]'>Swimming Pool</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    <input hidden id="checkFilter" type="checkbox" name="FEATURES[]" value="Central Heating" >
                    </span>
                    <span class="item-text" name = 'FEATURES[]'>Central Heating</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    <input hidden id="checkFilter" type="checkbox" name="FEATURES[]" value="Laundry Room" >
                    </span>
                    <span class="item-text" name = 'FEATURES[]'>Laundry Room</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    <input hidden id="checkFilter" type="checkbox" name="FEATURES[]" value="Gym" >
                    </span>
                    <span class="item-text" name = 'FEATURES[]'>Gym</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                        <input hidden id="checkFilter" type="checkbox" name="FEATURES[]" value="Window Covering" >
                    </span>
                    <span class="item-text">Window Covering</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                        <input hidden id="checkFilter" type="checkbox" name="FEATURES[]" value="Refrigerator" >
                    </span>
                    <span class="item-text">Refrigerator</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                        <input hidden id="checkFilter" type="checkbox" name="FEATURES[]" value="TV Cable & WIFI" >
                    </span>
                    <span class="item-text">TV Cable & WIFI</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                        <input hidden id="checkFilter" type="checkbox" name="FEATURES[]" value="Microwave" >
                    </span>
                    <span class="item-text">Microwave</span>
                </li>
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
                <span>Latest</span>
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
                    {{-- <img
                        class="card-img-top"
                        src="assets/img/uploads/p-1.jpg"
                        alt="Card image cap"
                    /> --}}
                  
                    <div id="carouselExample{{$loop->index }}" class="carousel slide"  >
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
                            {{$property->address}}
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