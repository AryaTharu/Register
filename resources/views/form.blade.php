<!DOCTYPE>
<html>
<head>
    <title>form</title>
</head>
<style>
    .registration-form{
        text-align:center ;
        margin:10% ;

        max-width: 700px;
        background-color: cornsilk;
        margin: 40px auto;
        padding: 30px;
        border-radius: 10px;
    }

</style>

<body>
{{--<div class="form-group">--}}
{{--    <form method="post"  class="form" action="{{route('sum-of-numbers')}}">--}}
{{--        @csrf--}}
{{--        <div class="mb-3">--}}
{{--            <label class="form-label">First Number</label>--}}
{{--            <input class="form-control" type="number" name="first">--}}
{{--        </div>--}}
{{--        <div class="mb-3">--}}
{{--            <label class="form-label">Second Number</label>--}}
{{--            <input class="form-control" type="number" name="second">--}}
{{--        </div>--}}
{{--        <input class="btn btn-primary btn-small" type="submit" value="submit">--}}
{{--    </form>--}}
{{--</div>--}}
<div class="registration-form">
    <form method="post" class="form" action="{{route('sum-of-numbers')}}">
        <div class="Fullname">
            <label>FullName</label>
            <input class="name" type="text" placeholder="Enter your full name">
            <br>
            <label>Address</label>
            <input class="address" type="text" placeholder="Enter your address">
            <br>
            <label>COntact no</label>
            <input class="contact" type="number" placeholder="Enter your contact number">
            <br>
            <label>E-mail address</label>
            <input class="email" type="email" placeholder="Enter your email address">
            <br>
            <label>COmment</label>
            <input class="comment" type="text" placeholder="Enter anything" >
            <br>
            <input type="submit" value="submit">
        </div>

    </form>

</div>
</body>
</html>
