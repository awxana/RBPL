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

        border-radius: 0px;
        width: 340px;
        height: 450px;
        box-shadow: 0.2;
        box-sizing: border-box;
        overflow: hidden;
        /* penting biar overlay nggak keluar */

        display: flex;
        flex-direction: column;
        padding: 20px;
    }

    .card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;

        background: rgba(37, 26, 19, 0.76);
        /* coklat transparan */
        backdrop-filter: blur(2px);
        -webkit-backdrop-filter: blur(10px);

        z-index: 0;
    }

    .card * {
        position: relative;
        z-index: 1;
    }




    .card h2 {
        margin-bottom: 18x;
        color: #FCC6C6;
        padding: 20px;
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
        <p>Registrasi Akun Pelanggan</p>
        <form action="login_pelanggan.php" method="get">
            <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email" required>
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