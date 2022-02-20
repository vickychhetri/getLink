<!DOCTYPE html>
<html>
<head>
    <title>urProfile.in | Login Information</title>
<style>
    .pcolor{
        padding: 16px;
        background-color: #00aaff;
        color: white;
    }
    </style>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>  
    <p>First Name: {{ $details['firstname'] }}</p> 
    <p>Last Name {{ $details['lastname'] }}</p> 
    <p>Email: {{ $details['email'] }}</p> 
    <p>Mobile: {{ $details['mobile'] }}</p>

    <h2> <a href="https://urprofile.in/Login" target="_blank"> Click Here to Login </a>  </h2>
    <i> you will be redirected to the urprofile login page.</i>
    <strong> 
    <p class="pcolor">Username(login): {{ $details['username'] }}</p>
    <p class="pcolor">Password{{ $details['password'] }}</p>
    </strong>
    <br/><br/>
   
    <p>Thank you</p>
    <br/>
    <br/> 
    
    <b>
<p>     -- </p>
<p>Regards:</p>
<br/>
<p>Vicky Chhetri</p>
<p>Software Engineer</p>
<p><a href="https://urprofile.in/"> www.urprofile.in </a></p>
<p>Email: <a>admin@urprofile.in </a></p>
<p>Help Desk: <a href="https://helpdesk.urprofile.in/">helpdesk.urprofile.in</a> </p>
</b>
</body>
</html>