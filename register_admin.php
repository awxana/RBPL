<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun Pelanggan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <style>
    body {
        background-image: url('img/rbpl1.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        height: 100vh;
        margin: 0;
        font-family: 'Raleway', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card {
        position: relative;
        background-image: url('img/rbpl3.jpg');
        background-size: cover;
        background-position: center;
        width: 350px;
        height: 450px;
        padding: 40px 30px;
        border-radius: 0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(37, 26, 19, 0.76);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        z-index: 0;
    }

    .card * {
        position: relative;
        z-index: 1;
    }


    .card h2 {
        margin-bottom: 18x;
        color: #FCC6C6;
        text-align: center;
        font-family: 'Kiwi Maru', serif;
    }

    .card p {
        text-align: center;
        color: white;
        margin-bottom: 18px;
    }

    .form-control {
        background-color: #F5D5D5;
        color: black;
        margin-bottom: 18px;
        border: 1px solid #ccc;
        font-size: 14px;
        padding: 6px 10px;
    }

    .form-control::placeholder {
        color: black !important;
        opacity: 1;
    }

    .btn {
        background-color: #DB9999;
        color: black;
        border: none;
        padding: 8px 20px;
        width: 100%;
        max-width: 200px;
    }

    .btn:hover {
        background-color: #c88585;
    }
    </style>
</head>

<body>
    <div class="card">
        <h2>Laundry Antar Jemput</h2>
        <p>Registrasi Akun Admin</p>
        <form action="login_admin.php" method="get">
            <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="Username" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="alamat" placeholder="Alamat" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn">Register</button>
            </div>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>