<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            position: relative;
            font-family: Arial, sans-serif;
            line-height: 1.5;
        }
        
        /* Footer Styles */
        footer {
            background-color: #f9f9f9;
            padding: 40px 20px;
            text-align: center;
        }
        @media print {
            .brand-section{
                    display: none;
                }
            }
        .brand-section {
            max-width: 400px;
            margin: 0 auto;
        }
        footer{
            margin-top: 30px;
        }
        .brand-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .brand-info,
        .brand-copyright {
            color: #555;
            font-size: 14px;
            margin-bottom: 10px;
        }
        
        .social-links a {
            color: #555;
            font-size: 18px;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        
        .social-links a:hover {
            color: #000;
        }
    </style>
</head>
<body>
    <footer>
        <div class="brand-section">
          <h2 class="brand-name">Calgo warehouse</h2>
          <p class="brand-info">We're part of the Calgo's family.</p>
          <p class="brand-copyright">© 2024 Rwanda. All rights reserved.</p>
          <div class="social-links">
            <a href="https://www.google.com/" target="_blank" rel="noopener noreferrer"><i class="fab fa-google"></i></a>
            <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
          </div>
        </div>
      </footer>
</body>
</html>