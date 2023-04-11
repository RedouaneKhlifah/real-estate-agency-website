
@extends('layouts.htmlContainer')

@section('content')
    

    <!-- navbar -->



    

    <div class="imageContainerAll">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a href="/home">
            <img
              class="logo"
              src='assets//img/icons/logo.png'
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
             

                @auth
            

              </form>
                   
                    <div style="MARGIN: 0PX 14px;"  >
                      <img src="assets/img/users/{{auth()->user()->profile_Image}}" class="rounded-circle profile_image m-0" alt="Profile Image" style="    height: 42px;
                      width: 42px;">
                      <div class="dropdown_Navbar d-inline-block" style="cursor: pointer ; MARGIN-LEFT: 5px;">
                          <span class="text-white">{{auth()->user()->first_Name}} {{auth()->user()->last_Name}} </span>
                          <span class="arrow-dwn text-white navbar_arrow_down  position-relative" style="cursor: pointer" id="propertyinfo_arrow">
                            <i class="fa-solid fa-chevron-down bg-none"></i>
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
                            <button class="border-0 bg-transparent" type="submit" name="sort_by" value="latest">  <span class="option" href="">Profile</span> </button>
                           
                            </div>
                            <div class="optionContainer">
                              <i class='bx bxs-heart  navDropIcon'></i>
                            <button class="border-0 bg-transparent" type="submit" name="sort_by" value="Oldest">  <span class="option" href="">Favourites</span> </button>
                            
                            </div>

                            <div class="optionContainer">
                              <i class='bx bx-log-out-circle  navDropIcon'></i>
                            <button class="border-0 bg-transparent" type="submit" name="sort_by" value="title_desc">  <span class="option" href="">Logout</span> </button>
                           
                            </div>
                          </div>
                      </div>
                    </div>

  

      
                    

                 
                  </form>

            
                  
                 

               
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

        <div class="headerImage">
          <center class="textHeaderContainer">
            <h1 class="welcomtext">Find Your Property</h1>
            <p class="textheader">
              From as low as 100dh per day with limited time offer
            </p>
            <input
              class="searchHeaderInput"
              placeholder="Dans quelle ville/quartier "
              type="text"
            />

            <div class="con" style="width: 45%;height: 212PX;OVERFLOW: auto;">

            <ul class="citiesUlContainer p-0 pt-2">

            </ul>
          </div>
          </center>
        </div>
      </div>

      {{-- @yield('login') --}}
      {{-- <x-login-Modal /> --}}

     


      <!--  -end of navbar->

      <-- explore section -->
      <div class="exploreSection">
        <div class="textExploreContainer">
          <h2 class="exploreTitle">Explore Good places </h2>
          <p class="exploreDesc">
            At vero eos et accusamus et iusto odio dignissimos ducimus qui
            blanditiis praesentium voluptatum deleniti atque corrupti quos
            dolores
          </p>
        </div>

        <div class="container boxesContaoner">
          <div class="row exploreRow">
          <div class="col col-md-4">
              <div class="card">
                <img
                  class="card-img-top"
                  src= 'assets/img/uploads/p-1.jpg'
                  alt="Card image cap"
                />
                <div class="card-body">
                  <div class="row boxFirstRow">
                    <div class="col-8 tiltleBoxPrice">
                      <span class="propertyType">Sale</span>
                      <h4 class="boxTitle">Resort Valley Ocs</h4>
                    </div>
                    <div class="col-4">
                      <h6 class="boxPrice">$7,000</h6>
                    </div>
                  </div>
                  <div class="boxIconsContainer">
                    <div class="IconContainer">
                      <div class="theiconContainer">
                        <img src='assets/img/icons/bathtub.svg' alt="" />
                      </div>
                      2 Baths
                    </div>
                    <div class="IconContainer">
                      <div class="theiconContainer">
                        <img  src='assets/img/icons/bed.svg' alt="" />
                      </div>
                      3 Baths
                    </div>
                    <div class="IconContainer">
                      <div class="theiconContainer">
                        <img  src='assets/img/icons/move.svg' alt="" />
                      </div>
                      1100 sqft
                    </div>
                  </div>
                  <div class="boxfooter">
                    <div class="BoxLocationConationer">
                      <div class="locationconatiner">
                        <img  src='assets/img/icons/move.svg' alt="" />
                        778 Panama City, FL
                      </div>
                    </div>
                    <div class="BoxButtonConatiner">
                      <a
                        href="https://resido-v2.smartdemowp.com/listings/resort-valley-ocs/"
                        class="prt-view"
                      >
                        View
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="browseContainer">
          <a class="browseMore" href="/Properties">
            Browse More Properties
          </a>
        </div>
      </div>

      <!-- end of explore section -->

      
      <!-- location section -->
      <div class="exploreSection" id="location">
        <div class="textExploreContainer">
          <h2 class="exploreTitle">Find By Locations</h2>
          <p class="exploreDesc">
            At vero eos et accusamus et iusto odio dignissimos ducimus qui
            blanditiis praesentium voluptatum deleniti atque corrupti quos
            dolores
          </p>
        </div>

        <div class="container boxesContaoner">
          <div class="row exploreRow">
            <div class="col col-md-4">
              <div class="card">
                <div class="cardImageContainer">
                  <img
                    class="card-img-top"
                    id="locationimage"
                    src= 'assets/img/uploads/p-1.jpg'
                    alt="Card image cap"
                  />
                </div>
                <div class="card-body">
                  <div class="boxfooter">
                    <div class="BoxLocationConationer">
                      <div
                        class="locationconatiner"
                        id="locationnamecontainer"
                      >
                        <h4 class="locationName">
                          San Francisco, California
                        </h4>
                        1 property
                      </div>
                    </div>
                    <div class="BoxButtonConatiner">
                      <button class="round-button">
                        <span class="ti-angle-right"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="browseContainer">
          <a class="browseMore" href="">
            Browse More Locations
          </a>
        </div>
      </div>
       <!-- end of explore section -->

       <script src="{{asset('assets/js/home.js')}}"></script>
       @endsection
