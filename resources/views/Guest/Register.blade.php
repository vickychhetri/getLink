@extends('Guest.layout')
@section('title','Register')
@section('metaheadercontainer')

<style>
body {
    padding-top: 50px;
}

fieldset {
    border: thin solid #ccc;
    border-radius: 4px;
    padding: 20px;
    padding-left: 40px;
    background: #fbfbfb;
}

legend {
    color: #678;
}

.form-control {
    width: 95%;
}

label small {
    color: #678 !important;
}

span.req {
    color: maroon;
    font-size: 112%;
}
</style>
@endsection

@section('container')
<!-- MENU -->
<x-User.Header.Menu />

<div class="container-fluid" style="background: url(/images/img/17973908.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
    <div class="row">
        <div class="col-md-6">
            <!-- <h1 class="page-header">@user</h1> -->
            <!-- <img src="/images/img/socialconnection.gif" style="max-width:100%;" /> -->


        </div>
        <div class="col-md-6">
            <form action="Register" method="post" id="fileForm" role="form">
                {{csrf_field()}}
                <fieldset>
                    <legend class="text-center"> <b> Sign up </b> </small></span></legend>

                    <div class="form-group">
                        <label for="phonenumber"><span class="req">* </span> Phone Number: </label>
                        <input required type="text" name="phonenumber" id="phone" class="form-control phone"
                            maxlength="28" onkeyup="validatephone(this);" placeholder="not used for marketing" />
                        <span style="color:red;">
                            @error('phonenumber')
                            {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="firstname"><span class="req">* </span> First name: </label>
                        <input class="form-control" type="text" name="firstname" id="txt" onkeyup="Validate(this)"
                            required />
                        <div id="errFirst"></div>
                        <span style="color:red;">
                            @error('firstname')
                            {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="lastname"><span class="req">* </span> Last name: </label>
                        <input class="form-control" type="text" name="lastname" id="txt" onkeyup="Validate(this)"
                            placeholder="hyphen or single quote OK" required />
                        <div id="errLast"></div>
                        <span style="color:red;">
                            @error('lastname')
                            {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="email"><span class="req">* </span> Email Address: </label>
                        <input class="form-control" required type="text" name="email" id="email"
                            onchange="email_validate(this.value);" />
                        <div class="status" id="status"></div>
                        <span style="color:red;">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <!-- id=txt removed -->
                    <div class="form-group">
                        <label for="username"><span class="req">* </span> User name: <small>This will be your login user
                                name</small> </label>
                        <input class="form-control" type="text" 
                        name="username"   id="usernameIT" onBlur="checkAvailability()"
                         onkeyup="Validate(this)"
                            placeholder="minimum 6 letters" required />
                        <div id="errLast"></div>
                        <span id="user-availability-status"></span>
                        
                        <span style="color:red;">
                            @error('username')
                            {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="password"><span class="req">* </span> Password: </label>
                        <input required name="password" type="password" class="form-control inputpass" minlength="4"
                            maxlength="16" id="pass1" /> </p>
                        <span style="color:red;">
                            @error('password')
                            {{$message}}
                            @enderror
                        </span>

                        <label for="password"><span class="req">* </span> Password Confirm: </label>
                        <input required name="password" type="password" class="form-control inputpass" minlength="4"
                            maxlength="16" placeholder="Enter again to validate" id="pass2"
                            onkeyup="checkPass(); return false;" />
                        <span id="confirmMessage" class="confirmMessage"></span>
                    </div>

                    <div class="form-group">
                        <hr>

                        <input type="checkbox" required name="terms"
                            onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');"
                            id="field_terms">   <label for="terms">I agree with the <a href="terms.php"
                                title="You may read our terms and conditions by clicking on this link">terms and
                                conditions</a> for Registration.</label><span class="req">* </span>
                        <span style="color:red;">
                            @error('terms')
                            {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="submit_reg" value="Register">
                    </div>
                    <h5>You will receive an email to complete the registration and validation process. </h5>
                    <h5>Be sure to check your spam folders. </h5>


                </fieldset>
            </form><!-- ends register form -->

            <script type="text/javascript">
            document.getElementById("field_terms").setCustomValidity(
                "Please indicate that you accept the Terms and Conditions");
            </script>
        </div><!-- ends col-6 -->
    </div>
</div>


@endsection
@section("footerScript")
<script>
function checkPass() {
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if (pass1.value == pass2.value) {
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match"
    } else {
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}

function validatephone(phone) {
    var maintainplus = '';
    var numval = phone.value
    if (numval.charAt(0) == '+') {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g, '');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
}
// validates text only
function Validate(txt) {
    txt.value = txt.value.replace(/[^a-zA-Z0-9-'\n\r.]+/g, '');
}/^[a-zA-Z0-9]+$/
// validate email
function email_validate(email) {
    var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

    if (regMail.test(email) == false) {
        document.getElementById("status").innerHTML = "<span class='warning'>Email address is not valid yet.</span>";
    } else {
        document.getElementById("status").innerHTML =
            "<span class='valid'>Thanks, you have entered a valid Email address!</span>";
    }
}
// validate date of birth
function dob_validate(dob) {
    var regDOB = /^(\d{1,2})[-\/](\d{1,2})[-\/](\d{4})$/;

    if (regDOB.test(dob) == false) {
        document.getElementById("statusDOB").innerHTML =
            "<span class='warning'>DOB is only used to verify your age.</span>";
    } else {
        document.getElementById("statusDOB").innerHTML =
            "<span class='valid'>Thanks, you have entered a valid DOB!</span>";
    }
}
// validate address
function add_validate(address) {
    var regAdd = /^(?=.*\d)[a-zA-Z\s\d\/]+$/;

    if (regAdd.test(address) == false) {
        document.getElementById("statusAdd").innerHTML = "<span class='warning'>Address is not valid yet.</span>";
    } else {
        document.getElementById("statusAdd").innerHTML = "<span class='valid'>Thanks, Address looks valid!</span>";
    }
}

//ajax username 
function checkAvailability() {
jQuery.ajax({
url: "/Checkusername/validation",
data:{id:$("#usernameIT").val()},
type: "get",
success : function(fdata){ 
$("#user-availability-status").html(fdata); 
console.log(fdata);
},
error:function (){}
});
}
</script>

@show