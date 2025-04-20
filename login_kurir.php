<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan - Login</title>
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
        width: 340px;
        height: auto;
        padding: 30px 20px;
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
        margin-bottom: 10px;
    }

    .card p {
        text-align: center;
        color: white;
        margin-bottom: 20px;
        font-size: 14px;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    input[type="text"],
    input[type="email"] {
        padding: 8px 10px;
        background-color: #F5D5D5;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    input::placeholder {
        color: black;
        opacity: 1;
    }

    .btn {
        background-color: #DB9999;
        color: black;
        border: none;
        padding: 8px;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
    }

    .btn:hover {
        background-color: #c88585;
    }

    a {
        color: #FCC6C6;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="card">
        <h2>Laundry Antar Jemput</h2>
        <p>Login Akun Kurir</p>
        <form>
            <input type="text" id="username" placeholder="Username" required>
            <input type="email" id="email" placeholder="Email" required>
            <p>Belum punya akun? <a href="register_pelanggan.php">Klik di sini</a></p>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>

</html>