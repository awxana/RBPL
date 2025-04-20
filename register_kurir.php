<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun Kurir</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&family=Kiwi+Maru&display=swap"
        rel="stylesheet">
    <style>
    body {
        margin: 0;
        font-family: 'Raleway', sans-serif;
        background-image: url('img/rbpl1.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
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
        color: #FCC6C6;
        text-align: center;
        font-family: 'Kiwi Maru', serif;
        margin-bottom: 30px;
        font-size: 28px;
    }

    .card p {
        text-align: center;
        color: white;
        margin-bottom: 30px;z
        font-size: 16px;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 20px;
        padding: 0 20px;
    }

    input[type="text"] {
        padding: 10px 14px;
        background-color: #F5D5D5;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        color: black;
    }

    input::placeholder {
        color: black;
        opacity: 1;
    }

    .btn {
        background-color: #DB9999;
        color: black;
        border: none;
        padding: 12px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
        width: 100%;
    }

    .btn:hover {
        background-color: #c88585;
    }
    </style>
</head>

<body>
    <div class="card">
        <h2>Laundry Antar Jemput</h2>
        <p>Registrasi Akun Kurir</p>
        <form action="login_kurir.php" method="get">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="text" id="alamat" name="alamat" placeholder="Alamat" required>
            <button type="submit" class="btn">Register</button>
        </form>
    </div>
</body>

</html>