<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Page Loading with PHP</title>
    <style>
        /* Basic styling */
        #content {
            padding: 20px;
            border: 1px solid #ccc;
            margin-top: 20px;
        }
        nav a {
            margin: 0 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav>
        <a href="#page=home" onclick="loadPage('home')">Home</a>
        <a href="#page=users" onclick="loadPage('users')">Users</a>
    </nav>
    <div id="content">Loading...</div>

    <script src="app.js"></script>
</body>
</html>
