<?php
include_once "./Auth/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navbar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
  <style>

            /* ===== Navigation Bar ===== */
            .nav{
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-inline: 3vw;
                height: 70px;
              
            }
            a{
                text-decoration: none;
                color: black;
            }
            .logo h1{
                font-weight: 600;
            }
            .logo{
                padding-left: 20px;
                padding-right: 20px;
            }
            .btn{
                font-size: 15px;
                background-color: var(--second-color);
                color: var(--bg-color);
                border: none;
                padding: 10px 24px;
                border-radius: 30px;
                box-shadow: var(--shadow-2);
                cursor: pointer;
                transition: .3s;
            }
            .btn:hover{
                opacity: 0.9;
            }
    </style>
</head>
<body>
<header>
<nav class="nav">
        <div class="logo">
           <h1>Calgo.</h1>
        </div>
        <button class="btn"><a href="./Auth/login.php"><span>Sign In</span> <i class="fa fa-right-to-bracket"></i></a></button>
    </nav>
  </header>
</body>
</html>