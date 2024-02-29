<!DOCTYPE html>
<html>
<head>
    <title>UKK KASIR DWI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <style>
            body {
                font-family: "Mali SemiBold";
                background-image: url(assets/ko.jpg);
                background-size: cover;
            }

            /*---- LOGIN ----*/
            .container {
                box-shadow: 0 0 8px #000;
                width: 300px;
                height: 400px;
                overflow: hidden;
                position: absolute;
                padding: 10px;
                top: 50%;
                left: 50%;
                margin-top: -190px;
                margin-left: -160px;
                background-color: rgba(255, 255, 255, 0.4);
                backdrop-filter: blur(20px);
                border-radius: 15px;
            }

            .container h5 {
                text-align: center;
                margin-bottom: 50px;
                font-weight: bold;
            }

            .tombollogin {
                background-color: darkcyan;
                color: #000000;
                width: 100%;
                padding: 10px;
                font-family: "Mali SemiBold";
                font-weight: bold;
                font-size: 20px;
                cursor: pointer;
                margin-top: 50px;
                border-radius: 5px ;
            }
            .form-control {
                color: #000000;
                font-family: "Mali SemiBold";
                font-size: 15px;
                border-radius: 5px;
            }
            </style>
<div class="container">
    <h5 class="text-center mt-4 text-bold">Silahkan Masukkan Username dan Password</h5>
    <form method="post" action="cek_login.php">
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" required>
    </div>
        <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" required>
    </div>
    <input type="submit" name="login" class="tombollogin" value="LOGIN">
    </div>
    </form>
</div>

    
</body>
</html>
