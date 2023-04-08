<div
    class="modal fade signup"
    id="signup"
    tabindex="-1"
    role="dialog"
    aria-labelledby="sign-up"
>
    <div
        class="modal-dialog modal-dialog-centered login-pop-form"
        role="document"
    >
        <div class="modal-content" id="sign-up">
            <div class="modal-body">
                <span class="mod-close" data-dismiss="modal" aria-label="Close"
                    ><i id="signupCloseBtn" class="fa-solid fa-x"></i>
                </span>
                <h4 class="modal-header-title" id="signupTitle">
                    Sign <span id="In" class="theme-cl">Up</span>
                </h4>
                <div class="login-form">
                    <span id="res_message"></span>
                    <form
                        method="post"
                        id="cl-register-user-form"
                        class="cl-register-user-form"
                    >
                      
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                 <p id="first_Name-error" class="text-danger"></p>
                                    <label for="first_name">First Name</label>
                                    <input
                                        type="text"
                                        name="first_Name"
                                        id="first_Name"
                                        class="form-input"
                                        size="20"
                                        placeholder="First Name"
                                    />
                                </div>
                                <div class="col-md-6 form-group">
                                <p id="last_Name-error" class="text-danger"></p>
                                    <label for="last_name">Last Name</label>
                                    <input
                                        type="text"
                                        name="last_Name"
                                        id="last_Name"
                                        class="form-input"
                                        size="20"
                                        placeholder="Last Name"
                                    />
                                </div>
                                <div class="col-md-6 form-group">
                                   <p id="phone_Number-error"  class="text-danger"></p>
                                    <label for="username">Phone Number</label>
                                    <input
                                        type="number"
                                        name="phone_Number"
                                        id="phone_Number"
                                        class="form-input"
                                        size="20"
                                        placeholder="Phone Number"
                                    />
                                </div>
                                <div class="col-md-6 form-group">
                                   <p id="email-error" class="text-danger"></p>
                                    <label for="email">E-mail</label>
                                    <input
                                        type="text"
                                        name="email"
                                        id="email"
                                        class="form-input"
                                        size="20"
                                        placeholder="E-mail"
                                    />
                                </div>
                                <div class="col-md-6 form-group">
                                   <p id="password-error" class="text-danger"></p>
                                    <label for="password">Password</label>
                                    <input
                                        type="password"
                                        name="password"
                                        id="password"
                                        class="form-input"
                                        size="20"
                                        placeholder="Password"
                                    />
                                </div>
                                <div class="col-md-6 form-group">
                                    <p id="password_confirmation-error" class="text-danger"></p>
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
                                    />
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
                    <
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $("#cl-register-user-form").on("submit", function (event) {
            event.preventDefault();
            console.log("working");
            var formData = $(this).serialize();
            console.log(formData);
            console.log($(this));
        // Check the value of the 'email' input field
        var email = $('#email').val();
        console.log(email);
        var first_Name = $('#first_Name').val();
        console.log(first_Name);
        
            $.ajax({
                url: "http://127.0.0.1:8000/api/register",
                type: "POST",
                data: formData,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success: function (response) {
                    console.log(response);
                    window.location.href = "/home";
                },
                error: function (xhr, error) {
                    var errors = xhr.responseJSON.errors;
                    $('.text-danger').empty(); // Clear all error messages
                    $.each(errors, function(key, value) {
                        $('#'+key+'-error').text(value); // Set error message to corresponding div

                 
                        console.log(value);
                    });
                    console.log(error, xhr);
                },
            });
        });
    });
</script>
