






<x-dasboard> 


            <div id="profile" class="col-lg-6 col-md-12 col-xs-12 pl-0 user-dash2" >
                <div class="profileInfoContainer p-4">

                <div class="widget-boxed-header">
                    <h4>Profile Details</h4>
                </div>
                <div class="sidebar-widget author-widget2">
                    <div class="author-box clearfix d-flex align-items-center">
                        <img  src="assets/img/users/ts-1.jpg" alt="author-image" class="author__img">
                        <h4 class="author__title">{{ $user->first_Name}} {{$user->last_Name}}</h4>
                        
                    </div>

                    <ul class="author__contact">



                        <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">(212) {{$user->phone_Number}} </a></li>

                        <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">{{$user->email}}</a></li>
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
            
                <div class="d-flex justify-content-end">
                    <a href="/edit">
                    <p style="background: #ff385c;
                    PADDING: 7PX 20PX;
                    COLOR: WHITE;
                    FONT-WEIGHT: 500;
                    LETTER-SPACING: 1PX; cursor: pointer;">EDIT</p>
                </div>
                </a>
                
                <div>
            </div>

          
        </x-dasboard> 