<x-app-layout>
<section class="login_signup_forms is_login_form ">
    <div class="container">
        <div class="singin_form wow fadeInRight animated">
        <form>
        <div class="sing_field repeat_field">
        <input type="text" placeholder="Enter Your Email">
        <img class="label_image" src="images/envelope.svg">
        </div>


        <div class="sing_field repeat_field">
            <input type="text" placeholder="Password">
        <img class="label_image" src="images/lock.svg">
            </div>


        <div class="repeat_field keep_melogged">
        <label for="logged"> 
        <input type="radio" id="logged"> <span class="radio_checked"></span>
        <span class="loggd_txt">Keep Me logged In</span>
        </label>
        </div>
        <div class="loigin_btn repeat_field ">
            <input type="submit" Value="Login">

        </div>
        <div class="register_new">
        <a href="#">Forgot Password?</a>
        <a href="#">New User? Register</a>
        </div>

        </form>

        </div>
    </div>
</section>
</x-app-layout>