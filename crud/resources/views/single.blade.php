<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Details</title>
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
            color: white;
            outline: none;
            box-sizing: border-box;
            text-align:center;
            background:rgba(255, 255, 255, 0.1);
        }
        .form-container textarea {
            resize: vertical;
            min-height: 80px;
        }
        .image img{
            width: 200px;
            height: 200px;
            margin-top:40px;
            margin-left:150px;
            border-radius:20px
        }
        .rule {
            font-size: 20px;
            font-weight: italic;
            text-align: center;
            margin-top:80px;
            color:white;
        }
        .title {
            font-size: 20px;
            font-weight: italic;
            text-align: center;
            margin-top:-150px;
            color:white;
            margin-left:300px;
            font-size:40px;

        }
        .social {
    font-size: 20px;
    font-weight: italic;
    text-align: center;
    color: white;
    margin-bottom: 20px; 
}

.s-container {
    display: flex;
    flex-direction: row; 
    align-items: center; 
    width: 200px; 
    margin-left: 300px;
    margin-right: auto;
    position: relative;
}

.social-con {
    display: flex;
    align-items: center;
    margin-top: 20px; 
}

.social-con img {
    width: 40px;
    height: 40px;
    margin-right: 10px; 
    margin-top:-20px
}
footer{
    margin-top:30px;
}
        
       
    </style>
</head>
<body>
    <div class="navbar">
        <a href="{{ url('categories') }}">Inventory List</a>
        <a href="{{ url('') }}">Home</a>
    </div>

    <div class="container">
        <div class="form-container">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @elseif ($errors->any())
                <div class="alert alert-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h2>ITEM DETAILS</h2>
            <label for="name">Name</label>
            <input value="{{ $category->name }}" type="text" id="name" name="name" readonly>

            <label for="description">Description</label>
            <textarea id="description" name="description" readonly>{{ $category->description }}</textarea>

            <label for="quantity">Quantity</label>
            <input value="{{ $category->quantity }}" type="number" id="quantity" name="quantity" readonly>
        </div>
    </div>
    <footer>
        <div class="image">
            <img src="/images/logo.jpeg"/>
            <div class="title">  Inventory Management System Web Application </div>
            <div class="s-container">
                <div class="social-con">
                    <img src="https://i.pinimg.com/originals/80/4d/39/804d3943dae3239f92626dae897f7554.jpg"/>
                    <div class="social">  Facebook </div>
                </div>
                <div class="social-con">
                    <img src="https://i.pinimg.com/originals/21/67/54/21675440615d287ae7e46ae4f17ac976.png"/>
                    <div class="social">  Instagram </div>
                </div>
                <div class="social-con">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCx7oddoCNVOd3JCLnphcRw5rtpzXZhtN4mQ&s"/>
                    <div class="social">  Linkedin </div>
                </div>
                <div class="social-con">
                    <img src="https://img.freepik.com/premium-vector/new-twitter-logo-x-2023-twitter-x-logo-vector_715895-569.jpg"/>
                    <div class="social">  Twitter </div>
                </div>
        </div>
        <div class="rule">@ All rights reserved. Created by - Siva Lakshanan </div>
        </div>
    </footer>
</body>
</html>
