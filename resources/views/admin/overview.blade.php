<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Smart Dashboard 💻</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            height: 100vh;
        }


        .main {
            flex: 1;
            padding: 40px;
            background-color: #fff;
            overflow-y: auto;
        }

        .header {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
        }

        .card {
            background-color: #f7f9fc;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        .card h3 {
            margin: 0 0 10px;
            font-size: 18px;
        }

        .quote {
            font-style: italic;
            color: #666;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    @include('admin.sidebar')

    @yield('main-content')
    </div>
</body>

</html>