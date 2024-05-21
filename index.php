<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
       <style>
             
           /* Reset styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  /* Global styles */
  body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
  }
  
  .container {
    max-width: 1220px;
    margin: 0 auto;
    padding: 0 1rem;
  }
  
  .grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
    align-items: center;
  }
  
  /* Hero section */
  .hero {
    background-color: #ffffff;
    padding: 4rem 0;
  }
  
  .content h1 {
    font-size: 3rem;
    line-height: 1.2;
    margin-bottom: 1rem;
  }
  
  .content h1 span {
    color: #007bff;
  }
  
  .content p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
  }
  
  .buttons {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
  }
  
  .btn {
    display: inline-block;
    padding: 0.8rem 1.6rem;
    border-radius: 0.4rem;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
  }
  
  .btn-primary {
    background-color: #007bff;
    color: #fff;
  }
  
  .btn-primary:hover {
    background-color: #0056b3;
  }
  
  .btn-secondary {
    background-color: #fff;
    color: #333;
    border: 1px solid #ccc;
  }
  
  .btn-secondary:hover {
    background-color: #f8f9fa;
  }
  
  .reviews {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
  }
  
  .review {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }
  
  .stars {
    display: flex;
    gap: 0.5rem;
    margin-bottom: 0.5rem;
  }
  
  .stars svg {
    fill: #ffc107;
    width: 1.2rem;
    height: 1.2rem;
  }
  
  .review p {
    font-size: 0.9rem;
    margin-bottom: 1rem;
  }
  
  .rating-logo svg {
    width: 6rem;
    height: auto;
  }
  
  .image img {
    width: 100%;
    height: auto;
    border-radius: 0.5rem;
  }
  
  .svg-overlay {
    position: relative;
  }
  
  .svg-overlay svg {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60%;
    height: auto;
    fill: #fff;
    z-index: -1;
  }
  
  /* Responsive styles */
  @media (max-width: 768px) {
    .grid {
      grid-template-columns: 1fr;
    }
  
    .content {
      text-align: center;
    }
  
    .reviews {
      grid-template-columns: 1fr;
    }
  
    .review {
      align-items: center;
    }
  }
       </style>
</head>
<body>
    <?php
        include_once "nav.php";
    ?>
    <main>
  <div class="hero">
    <div class="container">
      <div class="grid">
        <div class="content">
          <h1>Start your journey with <span>Calg Warehouse</span></h1>
          <p>Hand-picked professionals and expertly crafted components, designed for any kind of entrepreneur.</p>
          <div class="buttons">
            <a href="#" class="btn btn-primary">Get started</a>
            <a href="#" class="btn btn-secondary">Contact sales team</a>
          </div>
          <div class="reviews">
            <div class="review">
              <div class="stars">
              
              </div>
              <p>4.6 /5 - from 12k reviews</p>
              <div class="rating-logo">
              </div>
            </div>
            <div class="review">
              <div class="stars">
               
              </div>
              <p>4.8 /5 - from 5k reviews</p>
              <div class="rating-logo">
              </div>
            </div>
          </div>
        </div>
        <div class="image">
          <img src="https://images.unsplash.com/photo-1665686377065-08ba896d16fd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700&h=800&q=80" alt="Hero Image">
          <div class="svg-overlay">
          </div>
        </div>
      </div>
    </div>
  </div>
    </main>
    <?php
        include_once "footer.php";
    ?>
</body>
</html>