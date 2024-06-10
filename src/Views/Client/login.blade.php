<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <hr style="height: 50px;">
    <div>
        <div class="m-auto" style="width: 40%;border: 1px solid black;">
            <p style="text-align: center;font-size: 40px;font-weight: 600;color: red;">Login</p>
            @if (isset($_SESSION['error']) && $_SESSION['error'])
            <div class="alert alert-warning">{{ $_SESSION['error']}}</div>
            @php
            unset($_SESSION['error']);
            @endphp
            @endif
                <form action="{{ url('client/handlelogin') }}" method="post">
            <div class="m-auto" style="width: 80%;">
                <p style="font-weight: 250;font-size: 15px;">Email:</p>
                <input style="width: 100%;" type="text" name="email" placeholder="Nhập tài khoản">
                <p style="font-weight: 250;font-size: 15px;padding-top: 10px;">Mật khẩu:</p>
                <input style="width: 100%;" type="text" name="password" placeholder="Nhập mật khẩu">
                <input style="width: 100%;margin-top: 20px; background-color: red;color: aliceblue;font-weight: 500;border: 0;border-radius: 5px; margin-bottom: 30px;" 
                type="submit" name="" placeholder="Nhập mật khẩu" value="Đăng nhập">
                
            </div>
        </form>
        </div>
        
    </div>
</body>
</html>