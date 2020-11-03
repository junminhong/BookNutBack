<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
<link rel="stylesheet" href="{{asset('css/normalize.css')}}">

<title>BNUT | 會員註冊</title>

<body class="text-center">
<div class="text-center" >
    <img style="width: 20%;" src="{{asset('imgs/png/logo.png')}}" >
</div>

<form class="needs-validation container" novalidate>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="firstName">姓名</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
                Valid first name is required.
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="phone">電話</label>
            <input type="text" class="form-control" id="phone" placeholder="" value="" required>
            <div class="invalid-feedback">
                Please enter a valid phoneNumber for shipping updates.
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="email">電子郵件</label>
        <input type="email" class="form-control" id="email" placeholder="you@example.com">
        <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
        </div>
    </div>

    <div class="mb-3">
        <label for="address">生日</label>
        <input type="text" class="form-control" id="address" placeholder="請輸入西元年月日，例：20000101" required>
        <div class="invalid-feedback">
            Please enter your shipping address.
        </div>
    </div>

    <div class="row">
        <div class="col-md-5 mb-3">
            <label for="country">城市</label>
            <select class="custom-select d-block w-100" id="country" required>
                <option value="">選擇...</option>
                <option>台北</option>
                <option>台中</option>
                <option>台南</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid country.
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="state">地區</label>
            <select class="custom-select d-block w-100" id="state" required>
                <option value="">選擇...</option>
                <option>大安區</option>
                <option>信義區</option>
            </select>
            <div class="invalid-feedback">
                Please provide a valid state.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="zip">郵遞區號</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
                Zip code required.
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">註冊</button>


</form>

</body>

<footer style="width: 100%; height: 30%; background-color: #156D29; position: relative;">
    <img style="position: absolute; left: 50%; top: 50%; transform: translateX(-50%) translateY(-50%); width: 15%;" src="{{asset('imgs/png/BNUT2.png')}}" alt="" />
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
