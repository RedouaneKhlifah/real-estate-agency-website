
@extends('layouts.htmlContainer')

@section('content')

<div class="modal-content" id="sign-up">
    <div class="modal-body">
        <h4 class="modal-header-title" id="signupTitle">
            Sign <span id="In" class="theme-cl">Up</span>
        </h4>
        <div class="login-form">
            <span id="res_message"></span>
            <form
                method="post"
                action="/signup"
                id="cl-register-user-form"
                class="cl-register-user-form"
                enctype="multipart/form-data"
            >
            @csrf
                <div class="container">
                    <div class="row">



                        <div class="col-md-12 form-group" id="profile_image_col">
                            <label for="profile_Image">
                            <div class="profile_image_container">
                            <img class="profile_Image_show" src="{{asset('assets/img/users/default_profile.jpg')}}" alt="">
                            <span class="change_image_text">change image</span>
                            <div class="overlay"></div>
                            <i class="fa-solid fa-camera" style="color: #ffffff;"></i>
                            
                            </div>
                        </label>
                            <input
                                type="file"
                                name="profile_Image"
                                id="profile_Image"
                                class="profile_Image"
                                size="20"
                                placeholder="profile_Image"
                             hidden
                                
                            >
                                {{-- error --}}
                                @error('profile_Image')
                                <p
                                id="profile_Image"
                                class="profile_Image"
                            >{{$message}}</p>
                                @enderror
                                {{-- end error --}}
                            </div>

                        <div class="col-md-6 form-group">



                            <label for="first_name">First Name</label>
                            <input
                                type="text"
                                name="first_Name"
                                id="first_Name"
                                class="form-input"
                                size="20"
                                placeholder="First Name"
                                value={{old('first_Name')}}
                            >
                            {{-- error --}}
                            @error('first_Name')
                            <p
                            id="last_Name-error"
                            class="text-danger"
                        >{{$message}}</p>
                            @enderror
                            {{-- end error --}}
                        </div>



                        <div class="col-md-6 form-group">


                            <label for="last_name">Last Name</label>
                            <input
                                type="text"
                                name="last_Name"
                                id="last_Name"
                                class="form-input"
                                size="20"
                                placeholder="Last Name"
                                value={{old('last_Name')}}

                            >
                            {{-- error --}}
                            @error('last_Name')
                            <p
                            id="last_Name-error"
                            class="text-danger"
                        >{{$message}}</p>
                            @enderror

                             {{-- end error --}}

                        </div>

                        <div class="col-md-6 form-group">


                            <label for="last_name">Location</label>
                            <input
                                type="text"
                                name="location"
                                id="location"
                                class="form-input"
                                size="20"
                                placeholder="Location"
                                value={{old('Location')}}

                            >
                            {{-- error --}}
                            @error('location')
                            <p
                            id="last_Name-error"
                            class="text-danger"
                        >{{$message}}</p>
                            @enderror

                             {{-- end error --}}

                        </div>


                        <div class="col-md-6 form-group" style="    display: flex;
                        flex-direction: column;
                    ">


                            <label for="last_name">role</label>
                            <select name="role" id="" style="    height: 56px;width: 90%;border: none;background: #f6f8fd;">
                                <option value="1">Tenants</option>
                                <option value="2">Landlord</option>
                            </select>
                        </div>


                        <div class="col-md-6 form-group">


                            <label for="phone_Number">Phone Number</label>
                            <input
                                type="number"
                                name="phone_Number"
                                id="phone_Number"
                                class="form-input"
                                size="20"
                                placeholder="Phone Number"
                                value={{old('phone_Number')}}
                            >

                            {{-- error --}}
                            @error('phone_Number')
                            <p
                            id="last_Name-error"
                            class="text-danger"
                        >{{$message}}</p>
                            @enderror

                            {{-- end error --}}

                        </div>
                        <div class="col-md-6 form-group">
                            
                            <label for="email">E-mail</label>
                            <input
                                type="text"
                                name="email"
                                id="email"
                                class="form-input"
                                size="20"
                                placeholder="E-mail"
                                value={{old('email')}}
                            >

                        {{-- error --}}
                        @error('email')
                        <p
                        id="last_Name-error"
                        class="text-danger"
                    >{{$message}}</p>
                        @enderror

                        {{-- end error --}}

                        </div>
                        <div class="col-md-6 form-group">

                            <label for="password">Password</label>
                            <input
                                type="password"
                                name="password"
                                id="password"
                                class="form-input"
                                size="20"
                                placeholder="Password"
                                value={{old('Password')}}
                            >

                            {{-- error --}}
                            @error('password')
                            <p
                            id="last_Name-error"
                            class="text-danger"
                            >{{$message}}</p>
                            @enderror

                            {{-- end error --}}

                        </div>
                        <div class="col-md-6 form-group">


                            <label for="conf_password"
                                >Confirm Password</label
                            >
                            <input
                                type="password"
                                name="password_confirmation"
                                id="password_confirmation"
                                class="form-input"
                                size="20"
                                placeholder="Confirm Password"
                            >

                            {{-- error --}}
                            @error('password_confirmation')
                            <p
                            id="last_Name-error"
                            class="text-danger"
                            >{{$message}}</p>
                            @enderror

                            {{-- end error --}}

                        </div>
                        <div class="col-md-12 form-group">
                            <div
                                class="g-recaptcha"
                                data-sitekey="6Le2OHEiAAAAAKG_xQQJyqpcqk3jQ-5e7bhrs4Py"
                            ></div>
                        </div>
                        <div
                            class="col-md-12 form-group registerConatiner"
                        >
                            <p class="already-has-account">
                                Already have an account!
                                <a
                                    href="https://resido-v2.smartdemowp.com/home-layout-7/"
                                    >Login</a
                                >
                            </p>
                            <button
                                type="submit"
                                class="loginBtn"
                                name="submit"
                            >
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>
</div>

<script src="{{asset('assets/js/signup.js')}}"></script>


@endsection