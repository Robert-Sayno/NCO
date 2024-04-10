<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery - NCOU Community</title>
  <style>
    /* Reset CSS */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Global styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      color: #333;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    /* Header styles */
    header {
      background-color: #005b96;
      color: #fff;
      padding: 40px 0;
      text-align: center;
    }

    header h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    header p {
      font-size: 18px;
    }

    /* Navigation styles */
    nav ul {
      list-style: none;
      text-align: center;
      margin-top: 20px;
    }

    nav ul li {
      display: inline-block;
      margin-right: 20px;
    }

    nav ul li a {
      text-decoration: none;
      color: #fff;
      font-size: 18px;
      transition: color 0.3s ease;
    }

    nav ul li a:hover {
      color: #00487d;
    }

    /* Gallery styles */
    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 40px;
    }

    .gallery-item {
      overflow: hidden;
      position: relative;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      cursor: pointer;
    }
    .gallery-item img {
  max-width: 100%;
  height: auto;
  transition: transform 0.3s ease;
}

    .gallery-item:hover img {
      transform: scale(1.1);
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      opacity: 0;
      transition: opacity 0.3s ease;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .gallery-item:hover .overlay {
      opacity: 1;
    }

    .overlay-content {
      text-align: center;
    }

    .overlay-content h3 {
      font-size: 24px;
      color: #fff;
      margin-bottom: 10px;
    }
    

    .overlay-content p {
      color: #fff;
    }

    /* Footer styles */
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    .gallery-item {
  flex-basis: calc(33.33% - 20px); /* Adjust card width */
  margin-bottom: 20px; /* Add margin between cards */
}

.card {
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  cursor: pointer;
}

.card img {
  width: 100%;
  height: auto;
  transition: transform 0.3s ease;
}

.card:hover img {
  transform: scale(1.1);
}

  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="container">
      <h1>Gallery</h1>
      <p>Explore moments captured by NCOU Community</p>
    </div>
  </header>

  <!-- Navigation -->
  <nav>
    <div class="container">
      <ul>
        <li><a href="index.php" style="text-decoration: none; color: #fff;">Home</a></li>
        <li><a href="about.php" style="text-decoration: none; color: #fff;">About Us</a></li>
        <li><a href="programs.php" style="text-decoration: none; color: #fff;">Programs</a></li>
        <li><a href="contact.php" style="text-decoration: none; color: #fff;">Contact Us</a></li>
      </ul>
    </div>
  </nav>
<!-- Gallery -->

<div class="container">
    <div class="gallery">
      <div class="gallery-item">
        <div class="card">
          <img src="images/gallery/img6.jpeg" alt="Gallery Image 1">
          <div class="overlay">
            <div class="overlay-content">
              <h3>Event 1</h3>
              <p>Description of Event 1</p>
            </div>
          </div>
        </div>
      </div>
      <div class="gallery-item">
        <div class="card">
          <img src="images/img2.jpeg" alt="Gallery Image 2">
          <div class="overlay">
            <div class="overlay-content">
              <h3>Event 2</h3>
              <p>Description of Event 2</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Add more gallery items here -->
    </div>
  </div>

<div class="container">
    <div class="gallery">
      <div class="gallery-item">
        <div class="card">
          <img src="images/img1.jpeg" alt="Gallery Image 1">
          <div class="overlay">
            <div class="overlay-content">
              <h3>Event 1</h3>
              <p>Description of Event 1</p>
            </div>
          </div>
        </div>
      </div>
      <div class="gallery-item">
        <div class="card">
          <img src="images/img2.jpeg" alt="Gallery Image 2">
          <div class="overlay">
            <div class="overlay-content">
              <h3>Event 2</h3>
              <p>Description of Event 2</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Add more gallery items here -->
    </div>
  </div>
  

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2024 NCOU Community. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
