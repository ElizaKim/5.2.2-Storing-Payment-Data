<!-- file for the form -->

<!DOCTYPE HTML>
<HTML>
<HEAD>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Liza Kim">
  <title>Unit 5: Securely Storing Payment Data</title>
</HEAD>

<BODY>
<form action="insert.php" method="post">
<h1>Give Us Your Money</h1>
<blockquote>
<h3>Welcome! Please enter your card information so that we can just store it forever. <br>
    Fill out all of the fields below and click "Submit" when you are finished.<h3>
</blockquote>
<br>
<h2>Credit Card</h2>
<div class="card_deets">
  <div class="first_name">
    <label for="fname_field">Cardholder's first name</label>
    <input
      type="text"
      name = "fname"
      id="fname_field"
      placeholder="Enter first name" required >
  </div>

  <div class="last_name">
  <label for="lname_field">Cardholder's last name</label>
    <input
      type="text"
      name = "lname"
      id="lname_field"
      placeholder="Enter last name" required >
  </div>

  <div class="cc_number">
    <label for="cc_field">Credit card number</label>
    <!-- code for hiding text with circles is from: https://www.geeksforgeeks.org/how-to-hide-password-in-html/ -->
    <input
      type="text"
      name="cardnum"
      id="cc_field"
      style="-webkit-text-security: circle" 
      placeholder="XXXXXXXXXXXXXXXX" required >
  </div>

  <div class="cvv_num">
    <label for="cvv_field">CVV</label>
    <input
      type="text"
      name="cvv"
      id="cvv_field"
      style="-webkit-text-security: circle"
      placeholder="XXX" required >
  </div>

  <div class="exp_date">
    <label for="exp_field">Expiration date</label>
    <input
      type="date"
      name="edate"
      id="exp_field"
      placeholder="Month/year, e.g. 01/2002" required >
  </div>
</div>
<br>
<h2>Billing Address</h2>
<div class="billing_deets">
  <div class="st_address">
    <label for="st_field">Street name</label>
    <input
      type="text"
      name="stname"
      id="st_field"
      placeholder="Enter street address" required >
  </div>

  <div class="city">
    <label for="city_field">City name</label>
    <input
      type="text"
      name="cname"
      id="city_field"
      placeholder="Enter city name" required >
  </div>

  <div class="state">
    <label for="state_field">State</label>
    <input
      type="text"
      name="sname"
      id="state_field"
      placeholder="State" required >
  </div>

  <div class="zipcode">
    <label for="zip_field">Zipcode</label>
    <input
      type="text"
      name="zip"
      id="zip_field"
      placeholder="Enter zipcode" required >
  </div>
</div>
<br>
<div class="submit">
    <input
    type="submit"
    value="Submit" >
</div>
</form>
</BODY>
</HTML>