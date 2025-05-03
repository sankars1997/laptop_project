<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Attractive Top and Side Nav</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #f4f6f8;
    }

    /* Top Navigation */
    .topnav {
      position: fixed;
      top: 0;
      width: 100%;
      height: 60px;
      background-color: #1e90ff;
      color: white;
      display: flex;
      align-items: center;
      padding: 0 20px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      z-index: 1000;
    }

    .topnav h1 {
      font-size: 20px;
      margin: 0;
    }

    /* Side Navigation */
    .sidenav {
      position: fixed;
      top: 60px;
      left: 0;
      width: 220px;
      height: 100vh;
      background-color:solid blue;
      border-right: 1px solid #e0e0e0;
      box-shadow: 2px 0 5px rgba(0,0,0,0.05);
      padding-top: 20px;
    }

    .sidenav a {
      display: block;
      padding: 15px 20px;
      color: #333;
      text-decoration: none;
      font-weight: 500;
      transition: background 0.3s, color 0.3s;
    }

    .sidenav a:hover {
      background-color: #1e90ff;
      color: white;
    }

    /* Main Content */
    .main {
      margin-top: 60px;
      margin-left: 220px;
      padding: 20px;
    }

    h2 {
      margin-top: 0;
    }

    body {
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    input[type="search"] {
      padding: 20px 25px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 25px;
      width: 450px;
      outline: none;
      transition: 0.3s;
      
    }

    input[type="search"]:focus {
      border-color: #007BFF;
      box-shadow: 0 0 5px rgba(0,123,255,0.5);
    }

    table {
            width: 70%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }

        .container {
  margin-top: 170px; /* Match or slightly exceed navbar height */
  padding: 20px;
}

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #2d89ef;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        caption {
            caption-side: top;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        button {
      padding: 8px 12px;
      margin-left: 5px;
      font-size: 18px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <div class="topnav">
    <h1>My Dashboard</h1>
  </div>

  <div class="sidenav">
    <a href="/">Search</a>
    <a href="issuedlaptop">Issued Laptop</a>
    <a href="instock">In Stock</a>
    <a href="#">Status</a>
    <a href="#">Logout</a>
  </div>

  

</body>
</html>
