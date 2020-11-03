<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
<link rel="stylesheet" href="{{ asset('css/talkpage.css') }}"/>
<title>BNUT | 會員登入</title>

<body class="text-center">
<div class="text-center" >
    <img class="logo-img" src="{{ asset('imgs/png/logo.png') }}" >
</div>
<form class="container" action="userlogin" method="post" style="width: 500px;">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">帳號</label>
        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="請輸入帳號">
        <label style="color:red">@error('email'){{$message}}@enderror</label>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">密碼</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="請輸入密碼">
        <label style="color:red">@error('email'){{$message}}@enderror</label>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">記住我</label>
    </div>
    <button type="submit" class="btn btn-success">登入</button>
    <ul class="nav justify-content-center">
        <li class="tp-li"><a class="tp-li-a" href="logout">忘記密碼</a></li>
        <li class="tp-li"><a class="tp-li-a" href="register">會員註冊</a></li>
    </ul>
</form>
</body>

<footer class="footer"><img class="footer-logo" src="{{ asset('imgs/png/BNUT2.png') }}" alt="" /></footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
