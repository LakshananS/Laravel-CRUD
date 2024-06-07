<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: black;
            box-sizing: border-box;
        }
        .navbar {
            background-color: black;
            overflow: hidden;
            width: 100%;
        }
        .navbar a {
            float: right;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .navbar a:hover {
            background-color: #575757;
        }
        .container {
            background: linear-gradient(to right,black, darkred,black);
            padding: 80px;
            text-align: center;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: black;
        }
        tr:nth-child {
            background-color: #f9f9f9;
        }
        h1 {
            margin-left: 20px;
            color: white;
            text-align: center;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
            text-align: center;
            text-decoration: none;
            background-color: #000100;
            border: none;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.1s ease;
            margin: 5px;
        }
        a:hover {
            background-color: #0056b3;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="navbar">
    <a href="{{ url('create') }}">Add Items</a>
        <a href="{{ url('categories') }}">Inventory List</a>
        <a href="{{ url('') }}">Home</a>
        
    </div>

    <h1>Inventry Items </h1>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->quantity}}</td>
                    <td><a href="{{url('categories/'.$item->id.'/edit')}}">Edit</a></td>
                    <td><a href="{{url('categories/'.$item->id.'/delete')}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
