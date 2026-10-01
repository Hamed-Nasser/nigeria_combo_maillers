<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    // Validate and sanitize inputs
    $companyName = htmlspecialchars($_POST['companyName'] ?? '');
    $contactPerson = htmlspecialchars($_POST['contactPerson'] ?? '');
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $country = htmlspecialchars($_POST['country'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $products = htmlspecialchars($_POST['products'] ?? '');
    $option = htmlspecialchars($_POST['option'] ?? '');

    if (!$email) {
        echo "Invalid email address.";
        die();
    }

    // Prepare email
    $to = "info@mxmexhibitions.com, mud@african-fairs.com, sherkhan@mxmexhibitions.com, sher@african-fairs.com";
    $subject = "Paper Tissue Africa - Tanzania- Nigeria combo-offer  2026 -Email Matter";
    $todayis = date("l, F j, Y, g:i a");
    $message = "
        $todayis [EST]
        Company Name: $companyName
        Contact Person: $contactPerson
        Email: $email
        Country: $country
        Mobile No: $phone
        Products: $products
        Option: $option
    ";
    $headers = [
        'From' => 'info@afro-fairs.com',
        'Reply-To' => $email,
        'Content-Type' => 'text/plain; charset=UTF-8',
    ];

    // Format headers
    $formattedHeaders = '';
    foreach ($headers as $key => $value) {
        $formattedHeaders .= "$key: $value\r\n";
    }

    // Send email
    if (mail($to, $subject, $message, $formattedHeaders)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
    die();
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Paper and Tissue Africa 2026</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >
<link rel="stylesheet" type="text/css" href="styles.css" >
<link rel="stylesheet" href="general_form.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
  label {
    font-weight: 600;
    color: #666;
}
body {
  background: #f1f1f1;
}
.box8{
  box-shadow: 0px 0px 5px 1px #999;
}
.mx-t3{
  margin-top: -3rem;
}
</style>
</head>
<body>
<div id="doc" class="yui-t7 box8">
  <div id="hd">
    <img src="images/paper-apphead.jpeg" width="100%" />
  </div>
  
  <div id="bd">
   <div class="container mt-3">
 <div class="container-contact100">
    <div class="wrap-contact100">
         <span class="contact100-form-title main-form" style="background: #000;">THANKS FOR SUBMITTING THE FORM!</span><br>
         <h5 align="center">Your data has been recieved! Thank you</h5>
    </div>
</div>
</div>
<div class="clearfix">&nbsp;</div>
  <!-- <div id="footer">
   MXM Exhibitions P.O.Box : 183063 , Dubai, United Arab Emirates , +(971) 4 454 9868   -  +(971)4 454 2310, Whatsapp : +971 50 88 74723
    </div> -->
  </div>
</div>
</body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
