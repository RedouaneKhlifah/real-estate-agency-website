@extends('layouts.htmlContainer') @section('content')




<section class="user-page section-padding mt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                <div class="user-profile-box mb-0">
                    <div class="sidebar-header">
                        <img
                            src="assets/img/icons/logo.png"
                            alt="header-logo2.png"
                        />
                    </div>
                    <div class="header clearfix">
                        <img
                            src="assets/img/users/ts-1.jpg"
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
                                <a href="http://easyrent/dashbord">
                                    <i class="fa fa-map-marker"></i> Dashboard
                                </a>
                            </li>
                            <li>
                                <a
                                   
                                    href="http://easyrent/addproperty"
                                >
                                    <i class="fa fa-list" aria-hidden="true"></i
                                    >Add Property
                                </a>
                            </li>
                            <li>
                                <a  class="active" href="my-listings.html">
                                    
                                    <i class="fa fa-list" aria-hidden="true"></i
                                    >My Properties
                                </a>
                            </li>
                            <li>
                                <a href="favorited-listings.html">
                                    <i
                                        class="fa fa-heart"
                                        aria-hidden="true"
                                    ></i
                                    >Favorited Properties
                                </a>
                            </li>

                            <li>
                                <a href="user-profile.html">
                                    <i class="fa fa-user"></i>Profile
                                </a>
                            </li>

                            <li>
                                <a href="change-password.html">
                                    <i class="fa fa-lock"></i>Change Password
                                </a>
                            </li>
                            <li>
                                <a href="index.html">
                                    <i class="fas fa-sign-out-alt"></i>Log Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>




            <div class="col-lg-6 col-md-12 col-xs-12 pl-0 user-dash2" style="width: 50%;BACKGROUND-COLOR: WHITE;MARGIN: auto;">
                <div class="profileInfoContainer p-4">

                <div class="widget-boxed-header">
                    <h4>Profile Details</h4>
                </div>
                <div class="sidebar-widget author-widget2">
                    <div class="author-box clearfix">
                        <img  src="assets/img/users/ts-1.jpg" alt="author-image" class="author__img">
                        <h4 class="author__title">Lisa Clark</h4>
                        <p class="author__meta">Agent of Property</p>
                    </div>
                    <ul class="author__contact">
                        <div class="location_input">
                        <div class="d-flex align-items-center">
                        <span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>
                        <li class="m-0"> 302 Av Park, New York</li>
                        <input class="hiddenprofileInput" type="text" name="adress" value="" id="">
                        </div>
                        <div class="IconProfileType" data-id="{{auth()->id()}}">
                            
                        <i id="adreesUpdatePen" class="fa-solid fa-pen-to-square" style="color: #ff385c;"></i>
                        </div>      
                        </div>



                        <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">(234) 0200 17813</a></li>

                        <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">lisa@gmail.com</a></li>
                    </ul>
                    {{-- <div class="agent-contact-form-sidebar">
                        <h4>Request Inquiry</h4>
                        <form name="contact_form" method="post" action="functions.php">
                            <input type="text" id="fname" name="full_name" placeholder="Full Name" required />
                            <input type="number" id="pnumber" name="phone_number" placeholder="Phone Number" required />
                            <input type="email" id="emailid" name="email_address" placeholder="Email Address" required />
                            <textarea placeholder="Message" name="message" required></textarea>
                            <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit Request" />
                        </form>
                    </div> --}}
                </div>
                <div>
            </div>

          
        </div>
    </div>
</section>



<script src="{{url('assets/js/profile.js')}}"></script>

@endsection