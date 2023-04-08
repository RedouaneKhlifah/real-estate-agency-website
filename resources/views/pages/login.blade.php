
@extends('layouts.htmlContainer')

@section('content')
    
<div class="modal-content" id="registermodal" >



    <div class="modal-body" id="modal_login">

      <h4 class="modal-header-title">Log <span class="theme-cl" id="In">In</span></h4>
      <input
        type="hidden"
        id="wperesds_login_form"
        name="wperesds_login_form"
        value="51b8c6b0d3"
      /><input
        type="hidden"
        name="_wp_http_referer"
        value="/home-layout-7/?header_layout=1_1"
      />
      <span id="log_message"></span>

                             


      
        <form
        id="cl-login-user-form"
        action="/user/authenticate"
        method="post"
      >
      @error('email')
      <div class="alert alert-warning d-block" role="alert"><strong>ERROR</strong>: Email or Password is incorrect.</div> 
      @enderror

      @csrf
        <p class="login-username form-group">
          <label id="labelAut" for="user_login">Email</label>
          <input
            type="text"
            name="email"
            id="user_login"
            class=" form-input"
            size="20"
            placeholder="email"
          />
        </p>
        <p class="login-password form-group">
          <label id="labelAut" for="user_pass">Password</label>
          <input
            type="password"
            name="password"
            id="user_pass"
            class="form-input"
            size="20"
            placeholder="password"
          />
        </p>

        <p class="login-submit">
          <input
            type="submit"
            id="wp-submit"
            class="button button-primary loginBtn"
          />
        </p>
      </form>
      <div class="text-center">
        <p class="mt-1">
          <a
            href="JavaScript:Void(0);"
            id="forgot_pass"
            class="link"
            data-bs-toggle="modal"
            data-bs-target="#reset"
            >Forgot password?</a
          >
        </p>
      </div>
      <div class="text-center">
        Don't have an account
        <a
          href="/signup"
          id="login_to_resistration"
          class="link"
        >
          Registration</a
        >
      </div>
    </div>
  </div>


  @endsection