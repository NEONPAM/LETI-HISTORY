@extends('layouts.main2')


@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background: url('assets/img/hero-bg.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(6px);
        }

        .container {
        background: rgba(255, 255, 255, 0.3); /* Độ trong suốt 30% */
        padding: 25px;
        border-radius: 20px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        width: 450px;
        text-align: center;
        backdrop-filter: blur(10px); /* Làm mờ nền phía sau */
        }

        h2 {
            margin-bottom: 15px;
            color: #333;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn {
            background: #007BFF;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #0056b3;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }
    </style>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <div class="container">
        <h2>Регистрация</h2>
        <form id="registerForm" action="{{ route('form.store') }}" method="POST">
            @csrf
            <input type="text" id="ho" placeholder="Фамилия" required>
            <input type="text" id="ten" placeholder="Имя " name="name" required>
            <input type="number" id="namsinh" placeholder="Год рождения" required>
            <select id="gioitinh">
                <option value="">Выберите пол</option>
                <option value="Nam">Мужчина</option>
                <option value="Nữ">Женщина</option>
            </select>
            <input type="email" id="email" name="email" placeholder="Электронная почта" required>
            <button type="submit" class="btn">Регистрация</button>
            <p class="error" id="errorMsg">Пожалуйста, заполните всю действительную информацию!</p>
        </form>
    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
        let ho = document.getElementById('ho').value.trim();
        let ten = document.getElementById('ten').value.trim();
        let namsinh = document.getElementById('namsinh').value.trim();
        let gioitinh = document.getElementById('gioitinh').value.trim();
        let email = document.getElementById('email').value.trim();
        let errorMsg = document.getElementById('errorMsg');

        if (ho === '' || ten === '' || namsinh === '' || gioitinh === '' || email === '') {
            event.preventDefault(); // Chỉ chặn submit nếu có lỗi
            errorMsg.style.display = 'block';
        } else {
            errorMsg.style.display = 'none';
        }
        });

    </script>

@endsection
