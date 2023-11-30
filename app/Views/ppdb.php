<!-- Nama : Mashita Dewi
NRP : 5025211036
Mata Kuliah : PBKK A -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Tahun Ajaran 2021/2022</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 20px;
        }

        .flex-container {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .registration-section {
            margin-left: 100px;
        }

        .custom-container {
            max-width: 600px;
            margin-top: 30px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .custom-header {
            font-size: 24px;
            color: #333;
            padding-bottom: 10px;
            border-bottom: 2px solid #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-container {
            padding: 20px;
        }

        .form-group-container {
            margin-bottom: 10px;
        }

        .form-group-container label {
            display: block;
            color: #666;
            margin-bottom: 5px;
        }

        .form-group-container input[type="text"],
        .form-group-container input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        .submit-button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            width: 100%;
        }

        .submit-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/logo.png" alt="Logo Navbar" style="height: 75px; width: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">PPDB Online SMKN 1 Padang </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Pengumuman</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Mendaftar</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <button class="btn btn-outline-success">Login</button>
        </form>
        </div>
    </div>
    </nav>

    <h1 style="margin-top: 20px">Pendaftaran Tahun Ajaran 2021/2022</h1>
    <div class="flex-container">
        <div class="registration-section">
            <img src="/register.png" alt="Logo Navbar" style="height: 500px; width: auto;">
        </div>
        <div class="custom-container">
            <header class="custom-header">Pendaftaran Tahun Ajaran 2021/2022</header>
            <div class="form-container">
                <form>
                    <div class="form-group-container">
                        <label for="nisn">NISN</label>
                        <input type="text" id="nisn" name="nisn">
                    </div>
                    <div class="form-group-container">
                        <label for="fullName">Nama Lengkap</label>
                        <input type="text" id="fullName" name="fullName">
                        <label for="nickname">Nama Panggilan</label>
                        <input type="text" id="nickname" name="nickname">
                    </div>
                    <div class="form-group-container">
                        <label for="placeOfBirth">Tempat Lahir</label>
                        <input type="text" id="placeOfBirth" name="placeOfBirth">
                    </div>
                    <div class="form-group-container">
                        <label for="dateOfBirth">Tanggal Lahir</label>
                        <input type="date" id="dateOfBirth" name="dateOfBirth">
                    </div>
                    <button type="submit" class="submit-button">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
