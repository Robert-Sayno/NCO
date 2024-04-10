<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - NCOU Community</title>
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

    /* Contact details form styles */
    .contact-form {
      margin-top: 40px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .contact-form label {
      display: block;
      margin-bottom: 10px;
    }

    .contact-form input[type="text"],
    .contact-form input[type="email"],
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    .contact-form textarea {
      resize: vertical;
    }

    .contact-form input[type="submit"] {
      background-color: #005b96;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 18px;
      transition: background-color 0.3s ease;
    }

    .contact-form input[type="submit"]:hover {
      background-color: #00487d;
    }

    /* Footer styles */
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="container">
      <h1>Contact Us</h1>
      <p>Feel free to reach out to us for any inquiries or assistance</p>
    </div>
  </header>

  <!-- Navigation -->
  <nav>
    <div class="container">
      <ul>
        <li><a href="index.php" style="text-decoration: none; color: #fff;">Home</a></li>
        <li><a href="about.php" style="text-decoration: none; color: #fff;">About Us</a></li>
        <li><a href="programs.php" style="text-decoration: none; color: #fff;">Programs</a></li>
        <li><a href="get_involved.php" style="text-decoration: none; color: #fff;">Get Involved</a></li>
      </ul>
    </div>
  </nav>

  <!-- Contact form -->
  <div class="container">
    <div class="contact-form">
      <h2>Get in Touch</h2>
      <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <input type="submit" value="Submit">
      </form>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>P.O.Box- KYEGEGWA, UGANDA | Tel: +256 781 833 338 / +256 784 608 377 | Email: nkanjacommunityorganizationug@gmail.com</p>
    </div>
  </footer>

</body>
</html>
