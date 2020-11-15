@extends('user')
@section('content')
<div style="max-width: 800px; width: 100%;background-color: white; border: 1px solid; box-shadow:3px 3px 12px gray; padding:50px; margin: 50px auto;" class="container">
    <div style="text-align: center; margin-bottom: 20px">
        <img width="150" height="100px" src="{{asset('imgs/png/BNUT.png')}}">
    </div>
    <form class="needs-validation container" novalidate data-toggle="validator">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="user_email" aria-describedby="emailHelp" placeholder="請輸入你的電子信箱" required="required">
            <div class="help-block with-errors" style="color: red;"></div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="user_password" placeholder="請輸入你的密碼" required="required">
            <div class="help-block with-errors" style="color: red;"></div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">RePassword</label>
            <input type="password" class="form-control" id="user_password" data-match="#user_password" placeholder="請在輸入一次你的密碼" required="required">
            <div class="help-block with-errors" style="color: red;"></div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Username</label>
            <input type="text" class="form-control" id="user_name" placeholder="請輸入你的使用者名稱(日後可更改)" required="required">
            <div class="help-block with-errors" style="color: red;"></div>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="">
           <a href="#">同意會員政策</a>
        </div>
        <div style="text-align: center;">
            <button type="submit" class="btn btn-primary" style="text-align: center">SIGN UP</button>
            <div class="form-group" style="padding-top: 10px">
                <label for="exampleInputPassword1">Connect with:</label><br>
                <img src="{{asset('imgs/png/google.png')}}" width="30px" height="30px"/>
                <img src="{{asset('imgs/png/facebook.png')}}" width="30px" height="30px"/>
            </div>
        </div>
        <hr>
        <div style="text-align: center">
            <label>Already have an account? <a href="login">Log in</a></label>
        </div>
    </form>
</div>
@endsection

