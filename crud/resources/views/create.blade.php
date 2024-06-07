<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: black;
        }
        .navbar {
            width: 100%;
            background-color: black;
            overflow: hidden;
        }
        .navbar a {
            float: right;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #575757;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-container {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            width: 100%;
            max-width: 600px;
            background: linear-gradient(to right,black, darkred,black);
            padding: 80px;
            text-align: center;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: white;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
            color: white;
        }
        .form-container input[type="text"],
        .form-container textarea,
        .form-container input[type="number"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
            outline: none;
            box-sizing: border-box;
        }
        .form-container textarea {
            resize: vertical;
            min-height: 80px;
        }
        .form-container button {
            width: calc(100% - 22px);
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: black;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            
        }
        .form-container button:hover {
            background-color: #0056b3;
        }
        .alert {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            color: #fff;
            font-size: 16px;
        }
        .alert-success {
            background-color: #28a745;
        }
        .alert-error {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="{{ url('create') }}">Add Items</a>
        <a href="{{ url('categories') }}">Inventory List</a>
        <a href="{{ url('') }}">Home</a>
    </div>

    <div class="container">
        <div class="form-container">
            @if (session('status'))
                <div class="alert">{{ session('status') }}</div>
            @endif
            <h2>Input Form</h2>
            <form action="{{ url('create') }}" method="POST">
                @csrf
                <label for="name">Name</label>
                <input value="{{ old('name') }}" type="text" id="name" name="name" required>

                <label for="description">Description</label>
                <textarea id="description" name="description" required>{{ old('description') }}</textarea>

                <label for="quantity">Quantity</label>
                <input value="{{ old('quantity') }}" type="number" id="quantity" name="quantity" required>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
