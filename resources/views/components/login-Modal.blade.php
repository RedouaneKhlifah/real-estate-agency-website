<!-- Modal -->
<div
  class="modal fade"
  id="login"
  tabindex="-1"
  role="dialog"
  aria-labelledby="registermodal"
>
  <div
    class="modal-dialog modal-dialog-centered login-pop-form"
    role="document"
  >
    <div class="modal-content" id="registermodal" >



      <div class="modal-body">
      <span class="mod-close"  
        ><i class="fa-solid fa-x" data-dismiss="modal" aria-label="Close"></i>
      </span>
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
        <div class="alert alert-warning" role="alert"><strong>ERROR</strong>: Username or password is incorrect.</div>
        <form
          id="cl-login-user-form"
          action="https://resido-v2.smartdemowp.com/wp-login.php"
          method="post"
          
        >
          <p class="login-username form-group">
            <label id="labelAut" for="user_login">Username or Email</label>
            <input
              type="text"
              name="log"
              id="user_login"
              class=" form-input"
              size="20"
            />
          </p>
          <p class="login-password form-group">
            <label id="labelAut" for="user_pass">Password</label>
            <input
              type="password"
              name="pwd"
              id="user_pass"
              class="form-input"
              size="20"
            />
          </p>
          <div class="col-md-12 form-group">
            <div
              class="g-recaptcha"
              data-sitekey="6Le2OHEiAAAAAKG_xQQJyqpcqk3jQ-5e7bhrs4Py"
            ></div>
          </div>
          <p class="login-submit">
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
            <input
              type="submit"
              name="wp-submit"
              id="wp-submit"
              class="button button-primary loginBtn"
              value="Login"
            />
            <input type="hidden" name="action" value="cl_usr_login" />
            <input
              type="hidden"
              name="login_redirect_to"
              value="https://resido-v2.smartdemowp.com/user-profile/"
            />
            <input
              type="hidden"
              name="google_captcha_secr_api"
              value="http://6Le2OHEiAAAAAGCrg3NJVnc8An0vxxtowHD_sQzT"
            />
            <input
              type="hidden"
              name="google_captcha_sitekey"
              value="http://6Le2OHEiAAAAAKG_xQQJyqpcqk3jQ-5e7bhrs4Py"
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
            href="JavaScript:Void(0);"
            id="login_to_resistration"
            class="link"
            data-bs-toggle="modal"
            data-bs-target="#signup"
          >
            Registration</a
          >
        </div>
      </div>
    </div>
  </div>
</div>
