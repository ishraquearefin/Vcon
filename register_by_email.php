<?php  /* Template Name:  Register By Email */ ?>

<?php

if(is_user_logged_in())
{
    wp_redirect( get_permalink( get_option('woocommerce_myaccount_page_id') ));
}
$return_msg="";
if ( isset($_POST['submit'] ) ) {


        $username = sanitize_user($_POST['email']);
        $password = esc_attr($_POST['password']);
        $email = sanitize_email($_POST['email']);
        $first_name = sanitize_text_field($_POST['fname']);
        $last_name = sanitize_text_field($_POST['fname']);
        $user_status = 0;

        $return_msg = wp_reg_form_valid($first_name, $last_name, $username, $password, $email, $user_status);




}
?>

<?php get_header(); ?>


<link href="<?php echo get_template_directory_uri(); ?>/src/bootstrap/css/bootstrap.min.css" rel="stylesheet"
      id="bootstrap-css">
<link href="<?php echo get_template_directory_uri(); ?>/src/fontawesome/css/all.css" rel="stylesheet" id="font-awesome">

<script src="<?php echo get_template_directory_uri(); ?>/src/bootstrap/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/src/bootstrap/js/bootstrap.min.js"></script>


<link href="<?php echo get_template_directory_uri(); ?>/src/custom.css" rel="stylesheet" id="custom-css">

<style>


</style>



<!------ Include the above in your HEAD tag ---------->
<div class="pricing_main_div">

    <div class="row page_heading_top">
        <div class="container">
            <div class="col-xs-6 page_heading">
                <span class=""><i class="fa fa-envelope" aria-hidden="true"></i> </span>

            </div>
            <div class="col-xs-6 text-right page_heading_right">
                <span>Govt.</span> <span>|</span>
                <span> E-learning </span> <span> |</span>
                <span>Webinar</span>
            </div>
        </div>
    </div>

    <div class="container">




        <div class="row ">



        </div>

        <div class="container payment_register_block">


            <div class="row">

                <div class="col-md-7 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/payment_register.jpg"
                         class="center-block img-responsive">
                </div>

                <div class="col-md-5">

                    <div class="row">
                        <p class="pull-right">Already have an account? <span style="color:blue;"><a href="<?php echo  site_url("sign-in") ?>">Log In</a> </span></p>
                    </div>

                    <div class="row ">
                        <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
                            <div class="form-group">
                             <p> <?php echo $return_msg; ?></p>
                            </div>

                               <div class="form-group">
                                <label for="exampleInputEmail1">Email ID</label>
                                <input type="email" required name="email"  pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address" class="form-control bottom_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your  email id">
                               </div>


                              <div class="form-group">
                                <label for="exampleInputName">Full Name</label>
                                <input type="text"  required name="fname"  pattern=".{8,}" title="Your user name should be 8 characters long" class="form-control bottom_input" id="exampleInputName" aria-describedby="nameHelp" placeholder="Full Name">

                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" required name="password"  pattern=".{6,}" title="Your password should be 6 digit long" class="form-control bottom_input" id="exampleInputPassword1" placeholder="Password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword2">Confirm-Password</label>
                                <input type="password"  required name="cpassword" class="form-control bottom_input" id="exampleInputPassword2" placeholder="Password" >
                                <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password2"></span>
                                <span id='message'></span>

                            </div>


                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"> I agree to terms and Conditions</label>
                            </div>

                            <div class="form-group text-center">
                                <button disabled id="register_submit_btn" style="" type="submit" name="submit" class="btn btn-primary">Sign me up</button>
                            </div>


                        </form>
                    </div>

                </div>

            </div>

        </div>


    </div>











</div>


<script>



    $(document).ready(function(){


        $('#exampleInputPassword1, #exampleInputPassword2').on('keyup', function () {
            if ($('#exampleInputPassword1').val() == $('#exampleInputPassword2').val()) {
                $('#message').html('Matched').css('color', 'green');
            } else
                $('#message').html('Not Matching').css('color', 'red');
        });



        $(document).on('click', '.toggle-password', function() {

            $(this).toggleClass("fa-eye fa-eye-slash");

            var input = $("#exampleInputPassword1");
            input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
        });


        $(document).on('click', '.toggle-password2', function() {

            $(this).toggleClass("fa-eye fa-eye-slash");

            var input = $("#exampleInputPassword2");
            input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
        });



        $('#exampleCheck1').on('click',function(){

          var checked_value=  $(this).val();
            if($(this).prop("checked") == true){
                $("#register_submit_btn").prop( "disabled", false );
            }
            else
            {
                $("#register_submit_btn").prop( "disabled", true );
            }

        });



    });





</script>


<?php get_footer(); ?>



