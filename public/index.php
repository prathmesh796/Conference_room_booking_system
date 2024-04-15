<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        /* Add some basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
        }
        .Box {
            width: 500px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
       
        button {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 50px; /* Make the button round */
            border: none;
            background-color: yellow; /* Blue color */
            color: black;
            cursor: pointer;
            transition: background-color 0.3s;
            margin: 10px;
        }
        button:hover {
            background-color: #72767a; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <div class="Box">
        <h2> WELCOME TO CONFERENCE ROOM BOOKING </h2>
        <button onclick="window.location.href='user_login.php'">Login as User</button>
        <button onclick="window.location.href='user_login.php'">Login as Admin</button>
    </div>
</body>
</html>
