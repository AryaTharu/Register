<!DOCTYPE>
<html>
<head>
    <title>form</title>
</head>
<body>

<div class="registration-form">
    <form method="post" class="form" action="{{url('/'.'/registers')}}">
        @csrf
        <div class="Fullname">
            <label>fullName</label>
            <input class="name" type="text" placeholder="Enter your full name">
            <br>
            <label>email</label>
            <input class="email" type="email" placeholder="Enter your email address">
            <br>
            <label>username</label>
            <input class="comment" type="text" placeholder="Enter username" >
            <br>
            <label>Address</label>
            <input class="address" type="text" placeholder="Enter your address">
            <br>
            <label>COntact no</label>
            <input class="contact" type="number" placeholder="Enter your contact number">
            <br>
            <input type="submit" value="submit">
        </div>

    </form>

</body>
</html>
