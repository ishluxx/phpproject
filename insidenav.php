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
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
           a{
            text-decoration: none;
            color: white;
           }
            /* ===== VARIABLES ===== */
            :root{
                --bg-color: #fff;
                --primary-color: #000000;
                --second-color: #196FE0;
                --hover-bg-color: #efefef;
                --shadow-1: 0px 2px 10px rgba(0, 0, 0, 0.3);
                --shadow-2: 0px 2px 10px rgba(26, 112, 224, 0.4);
            }
            /* ===== BODY ===== */
            body{
                background: url("../img/bg.jpg");
                background-position: center;
                background-size: cover;
                background-attachment: fixed;
            }

            /* ===== Reusable CSS ===== */
            a{
                text-decoration: none;
                color: var(--primary-color);
                font-weight: 500;
            }
            ul{
                list-style-type: none;
            }

            /* ===== Menu Toggle ===== */
            .menu-toggle{
                display: none;
                font-size: 24px;
                background: transparent;
                border: none;
                color: var(--primary-color);
                cursor: pointer;
            }

            /* ===== Navigation Bar ===== */
            .nav{
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-inline: 3vw;
                height: 70px;
                background: var(--bg-color);
                color: var(--primary-color);
            }
            .logo h1{
                font-weight: 600;
            }
            .nav-main-menu{
                display: flex;
            }
            .nav-link{
                padding: 26px 10px;
                margin-inline: 10px;
                transition: .3s;
            }
            .nav-link:hover{
                color: var(--second-color);
            }
            .nav span{
                margin-right: 5px;
            }
            .fa-chevron-down, .fa-chevron-right{
                font-size: 12px;
                transition: .3s;
            }

           
            .dropdown:hover .nav-link{
                color: var(--second-color);
            }

            /* ===== Dropdown ===== */
            .dropdown{
                position: relative;
            }
            .nav-main-menu .dropdown-content{
                display: none;
                position: absolute;
                top: 46px;
                left: 0;
                background: var(--bg-color);
                min-width: 240px;
                border-top: 3px solid #ccc;
                border-radius: 0 0 3px 3px;
            }
            .dropdown-content li{
                padding: 20px;
            }
            .dropdown-content li:hover{
                background: var(--hover-bg-color);
            }
            .dropdown:hover .dropdown-content{
                display: block;
            }
            /* ===== Sub - Dropdown ===== */
            .nav-main-menu .sub-dropdown-content{
            display: none;
            position: absolute;
            top: 34%;
            left: 100%;
            background: var(--bg-color);
            min-width: 240px;
            border-top: 3px solid #ccc;
            border-radius: 3px;
            box-shadow: var(--shadow-1);
            }
           
            .dropdown-link{
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .sub-dropdown:hover .sub-dropdown-content{
                display: block;
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
            .btn1{
                font-size: 15px;
                background-color: var(--second-color);
                color: var(--bg-color);
                border: none;
                padding: 10px 24px;
                border-radius: 30px;
                cursor: pointer;
                transition: .3s;
            }
            .btn1:hover{
                opacity: 0.9;
            }

            main{
                display: flex;
                align-items: center;
                justify-content: center;
                height: 80vh;
                color: var(--bg-color);
                padding: 20px;
            }
            main p{
                font-size: 50px;
                font-weight: 600;
                text-align: center;

            }
                        table {
                border-spacing: 0;
                width: 100%;
            max-width: 830px;
                border: none;
            }
            
            th, td {
                text-align: left;
                padding: 16px;
            }
            
            tr:nth-child(even) {
                background-color: #f2f2f2
            }
            h1{
                text-align: center;
            }
            .container{
                margin-top: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                background: rgb(255, 255, 255);
            }
            @media print {
                .nav{
                    display: none;
                }
            }
            @media print {
                .btn1{
                    display: none;
                }
            }
    </style>
</head>
<body>
<header>
<nav class="nav">
        <div class="logo">
           <a href="./dashboard.php"><h1>Calgo.</h1></a>
        </div>  <button class="menu-toggle"><i class="fa fa-bars"></i></button>
        <ul class="nav-main-menu">
            <li><a href="./newrecord.php" class="nav-link">New Furniture</a></li>
            <li class="dropdown">
                <a href="./viewImports.php" class="nav-link"><span>Imports</span> </a>
            </li>
            <li class="dropdown">
                <a href="./viewexports.php" class="nav-link"><span>Exports</span> </i></a>
            </li>
            <li><a href="./report.php" class="nav-link">Report</a></li>
        </ul>
        <button class="btn"><a href="./Auth/logout.php"><span>Logout</span> <i class="fa fa-right-to-bracket"></i></a></button>
    </nav>
  </header>
</body>
</html>