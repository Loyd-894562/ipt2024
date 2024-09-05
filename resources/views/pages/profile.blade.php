<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Demo - Profile Page</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    </head>

<body>
    <div class="container">
        <h1>Profile Page</h1>
        <div class="nav-links">
            <a href="{{ url('/') }}">Home</a> | Profile
        </div>
    </div>
</body>

</html>


<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px 40px;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        h1 {
            font-size: 2.5em;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #fff;
            background-color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #45a049;
        }

        .nav-links {
            margin-top: 20px;
        }
    </style>