<?php /* Template Name:  Login Form */ ?>

<?php






if (is_user_logged_in()) {
    wp_redirect(get_permalink(get_option('woocommerce_myaccount_page_id')));
}

//if (isset($_POST['wp-submit'])) {
//    echo $username = sanitize_user($_POST['log']);
//    echo $password = esc_attr($_POST['pwd']);
//    echo $rememberme = esc_attr($_POST['rememberme']);
//
//
//    // wpdoc_custom_login($user_login,$password);
//
//}


if(isset($_POST['wp-submit'])) {
    $creds                  = array();
    $creds['user_login']    = stripslashes( trim( $_POST['log'] ) );
    $creds['user_password'] = stripslashes( trim( $_POST['pwd'] ) );
    $creds['remember']      = isset( $_POST['rememberme'] ) ? sanitize_text_field( $_POST['rememberme'] ) : '';
    $redirect_to            = esc_url_raw( $_POST['redirect_to'] );
    $secure_cookie          = null;


    if ( ! force_ssl_admin() ) {
        $user = is_email( $creds['user_login'] ) ? get_user_by( 'email', $creds['user_login'] ) : get_user_by( 'login', sanitize_user( $creds['user_login'] ) );

        if ( $user && get_user_option( 'use_ssl', $user->ID ) ) {
            $secure_cookie = true;
            force_ssl_admin( true );
        }
    }

    if ( force_ssl_admin() ) {
        $secure_cookie = true;
    }



    $user = wp_signon( $creds, $secure_cookie );

    if ( $secure_cookie && strstr( $redirect_to, 'wp-admin' ) ) {
        $redirect_to = str_replace( 'http:', 'https:', $redirect_to );
    }

    if ( ! is_wp_error( $user ) )
    {

        $jwt=generatejwt($user);
        setcookie( "visitor_details", $jwt, strtotime("2022-01-19 03:14:07"), COOKIEPATH, COOKIE_DOMAIN );

        wp_redirect( $redirect_to );
    }
    else
        {
        if ( $user->errors ) {
            $errors['invalid_user'] = __('<strong>ERROR</strong>: Invalid user or password.');
        } else {
            $errors['invalid_user_credentials'] = __( 'Please enter your username and password to login.', 'kvcodes' );
        }
    }
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
                        <p class="pull-right">Are you want to create a new account? <span style="color:blue;"> <a
                                        href="<?php echo site_url("sign-up-with-email") ?>">Register</a> </span></p>
                    </div>

                    <div class="row ">


                        <?php
                        if (!is_user_logged_in()) {
                            // Display WordPress login form:
//                            $args = array(
//                                'redirect' => isset($_REQUEST["redirect_uri"])?$_REQUEST["redirect_uri"]:admin_url(),
//                                'form_id' => 'loginform-custom',
//                                'label_username' => __( 'Username' ),
//                                'label_password' => __( 'Password' ),
//                                'label_remember' => __( 'Remember Me' ),
//                                'label_log_in' => __( 'Log In  ' ),
//                                'remember' => true
//                            );
//                            wp_login_form( $args );
                            ?>

                           <p style="color:red;">
                               <?php if (!empty($errors)) {  //  to print errors,
                                   foreach ($errors as $err)
                                       echo $err;
                               } ?>
                           </p>

                            <form name="loginform-custom" id="loginform-custom"
                                  action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">

                                <p class="login-username">
                                    <label for="user_login">Username</label>
                                    <input type="text" required name="log" id="user_login" class="input" value="" size="20">

                                </p>
                                <p class="login-password">
                                    <label for="user_pass">Password</label>
                                    <input type="password" required name="pwd" id="user_pass" class="input" value="" size="20">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </p>

                                <p class="login-remember"><label><input name="rememberme" type="checkbox"
                                                                        id="rememberme" value="forever"> Remember
                                        Me</label></p>
                                <p class="login-submit">
                                    <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary"
                                           value="Log In  ">
                                    <?php
                                    $redirect_to=$_REQUEST["redirect_uri"];
                                    if($_REQUEST["redirect_uri"])
                                        $redirect_to=$_REQUEST["redirect_uri"];
                                    else
                                        $redirect_to="http://meet.synesisit.info:4200/home";
                                    ?>
                                    <input type="hidden" name="redirect_to" value="<?php echo $redirect_to; ?>">

                                </p>

                            </form>
                            <?php


                        } else { // If logged in:
                            //  wp_loginout( home_url() ); // Display "Log Out" link.
                            wp_redirect($_SERVER['HTTP_REFERER']);
                            echo " | ";
                            wp_register('', ''); // Display "Site Admin" link.
                        }

                        echo do_shortcode('[miniorange_social_login shape="square" theme="default" space="4" size="35"]');

                        ?>


                    </div>

                </div>

            </div>

        </div>


    </div>


</div>


<script>


    $(document).ready(function () {

        $(document).on('click', '.toggle-password', function() {

            $(this).toggleClass("fa-eye fa-eye-slash");

            var input = $("#user_pass");
            input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
        });


        $('#exampleCheck1').on('click', function () {

            var checked_value = $(this).val();
            if ($(this).prop("checked") == true) {
                $("#register_submit_btn").prop("disabled", false);
            } else {
                $("#register_submit_btn").prop("disabled", true);
            }

        });


    });


</script>


<?php get_footer(); ?>



