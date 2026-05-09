<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - Siswa Pinky</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #ffe4e1; } /* Misty Rose */
        .card { border-radius: 20px; border: none; box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
        .btn-pink { background-color: #ffb6c1; color: white; }
        .btn-pink:hover { background-color: #ff69b4; color: white; }
    </style>
</head>
<body class="d-flex align-items-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card p-4">
                    <h3 class="text-center" style="color: #ff69b4;">Welcome Back! ✨</h3>
                    <form action="loginsubmit.php" method="post">
                        <div class="mb-3">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" required>
                        </div>
                        <button type="submit" name="Submit" class="btn btn-pink w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>