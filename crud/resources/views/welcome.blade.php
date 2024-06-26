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
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
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
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        h1 {
            margin-left: 20px;
            color: white;
        }
        .text {
            font-size: 60px;
            font-weight: bold;
            text-align: center;
            color: white;
            z-index: 10;
            position: relative;
            opacity: 100%;
        }
        .con {
            border: solid 2px red;
            border-radius: 20px;
            background-color: rgba(255, 255, 255, 0.1); 
        }
       .paragraph {
            font-size: 20px;
            font-weight: italic;
            text-align: center;
            margin-top: 275px;
            color: white;
            font-family: 'Times New Roman', Times, serif;
            letter-spacing: 1.5px;
        }
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px; /* Adjust based on your needs */
        }
        .image-container img {
            width: 400px;
            height: 400px;
            border-radius: 10px;
            margin-top:250px;
        }
        .gradient-container {
            background: linear-gradient(to right,black, darkred,black);
            padding: 80px;
            text-align: center;
            color: #fff;
            font-family: Arial, sans-serif;
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
    margin-left: 350px;
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

    </style>
</head>
<body>
    <div class="navbar">
    <a href="{{ url('create') }}">Add Items</a>
        <a href="{{url('categories')}}">Inventory List</a>
        <a href="{{ url('') }}">Home</a>
    </div>

    <div class="gradient-container">
        <h1>Hi, Welcome...!</h1>
        <div class="con">
            <div class="text">INVENTORY MANAGEMENT SYSTEM</div>
        </div>
        <div class="image-container">
            <img src="/images/logo.jpeg" alt="Logo"/>
        </div>
        <div class="paragraph">
        "An inventory item management web application is a comprehensive solution designed to streamline the process of tracking and managing inventory within a business. This application provides a user-friendly interface for adding, updating, and deleting inventory items, ensuring that all stock information is up-to-date and easily accessible. Key features include real-time inventory tracking, detailed item descriptions, and quantity management. Users can categorize items, set alerts for low stock levels, and generate reports to analyze inventory performance. The application supports multiple users with different access levels, ensuring that only authorized personnel can make changes. By automating inventory processes, the web application helps businesses reduce errors, optimize stock levels, and improve overall efficiency, leading to better resource management and cost savings."</div>
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
