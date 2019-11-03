<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Form PHP</title>
  <link rel="stylesheet" href="main.css">
</head>

<body>

  <div class='backgroundImage'>
    <div class="marginBox">
      <div class='textBox'>
          <h1>Chinese Restaurant</h1>
        <p>Tell us what you think... We'd love to hear from you</p>
      </div>
    </div>
    <div class="formDiv">
      <form action="http://formspree.io/jamesrosscodes@gmail.com">
        <input type="text" class='form' name="name" id="name" placeholder="Your name" required>
        <input type="email" class='form' name="email" id="email" placeholder="Your email" required>
        <input type="tel" class='form' name="telephone" id="telephone" placeholder="Your cell number" required>
        <textarea class='form border' name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
        <input type="submit" class='form submit' value="Send Message">
      </form>
    </div>
  </div>


</body>

</html>