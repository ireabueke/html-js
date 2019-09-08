
<!doctype html>
<html lang="en">
<head> 
  <meta charset="utf-8"> 
  <title>Feranmi Akinlade - CV</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <--link rel="icon" href="https://img.icons8.com/ios/50/000000/developer.png">
  <--link rel="stylesheet" href="./contact.css">
  <meta name="author" content="Akinlade Feranmi https://feranmi.name.ng">
</head>

<body>
  <header>
    <--img src="https://res.cloudinary.com/feranmiakinlade/image/upload/v1566544753/My_dp_lx8bwu.jpg" 
         alt="My picture" height="100" id="app-dp">
    <h1 id="app-display-name" class="app-heading">
      Akinlade Feranmi
    </h1>
    <p id="app-job-title" class="app-heading">
      Web Developer
    </p>
  </header>

  <section class="response">
    <h2 class="response__heading">Thank you for reaching out!</h2>

    <p class="response__body">
      Hi <span class="response__body__form-data">
        <?php echo htmlspecialchars($_POST['name']);?> 
      </span>.
      Thank you for reaching out to me. Unfortunately this site is currently
      just a demo. This means that your message titled
      <span class="response__body__form-data"> 
        "<?php echo htmlspecialchars($_POST['title']); ?>"
      </span>&nbsp;
      did not reach me.

      <h3>What you can do.</h3>
      Please reach out to me via my eMail: 
      <a href="mailto:umeozokwere@gmail.com">umeozokwere@gmail.com</a>
    </p>

    <div class="response__echo">
      <h4 class="response__echo__heading">
        Here's what you sent:
      </h4>
      <?php echo htmlspecialchars($_POST['message']); ?>
    </div>
  </section>
</body>
</html>