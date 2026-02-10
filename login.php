<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login PKL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            height: 100vh;
            background: #eaeaea;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Segoe UI", Tahoma, sans-serif;
        }

        .login-card {
            width: 380px;
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            padding: 30px;
        }

        .login-card h2 {
            text-align: center;
            color: #2f5fa7;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #555;
        }

        .input-box {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            background: #fdfdfd;
        }

        .input-box i {
            color: #2f5fa7;
            margin-right: 10px;
            font-size: 16px;
        }

        .input-box input {
            border: none;
            outline: none;
            width: 100%;
            font-size: 14px;
            background: transparent;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background: #2f5fa7;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-login:hover {
            background: #244b86;
        }

        .footer-text {
            text-align: center;
            margin-top: 25px;
            color: #888;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h2>Login PKL</h2>

    <form>
        <div class="form-group">
            <label>username</label>
            <div class="input-box">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Masukkan username">
            </div>
        </div>

        <div class="form-group">
            <label>password</label>
            <div class="input-box">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Masukkan password">
            </div>
        </div>

        <button type="submit" class="btn-login">Login</button>
    </form>

    <div class="footer-text">
        Aplikasi Praktik Kerja Lapangan
    </div>
</div>

</body>
</html>