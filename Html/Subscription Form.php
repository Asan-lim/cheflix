<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chef Flix - Subscription</title>
    <link rel="stylesheet" href="../Css/subscription.css">
</head>
<body>
  <div class="container">
    <h1>Start streaming today</h1>
    
    <div class="plan-box">
      <h2>Chef Flix Premium - £129.90/year</h2>
      <p>Up to 4K UHD video • 4 concurrent streams • Downloads on up to 10 devices • Ad-free movies and series.</p>
    </div>
<!-- 
    <div class="toggle">
      <button id="monthly">Monthly £12.99</button>
      <button class="active" id="annual">Annual £129.90</button>
    </div> -->

    <div class="payment-methods">
      <div class="active" id="credit">💳 Credit Card</div>
      <div id="paypal">💲 PayPal</div>
    </div> 

   <form id="paymentForm" action="../backend/save_subscription.php" method="POST">
  <label for="name">Name on Card</label>
  <input type="text" id="name" name="name" required>

  <label for="email">Email</label>
  <input type="email" id="email" name="email" required>

  <label for="plan">Select Plan</label>
<select id="plan" name="plan" required>
  <option value="">-- Choose a Plan --</option>
  <option value="£12 - Basic">Basic - £4.99</option>
  <option value="£15 - Standard">Standard - £7.99</option>
  <option value="£23 - Premium">Premium - £9.99</option>
</select>


  <label for="card">Card Number</label>
  <input type="text" id="card" name="card" required>

  <div class="row">
    <div>
      <label for="expiry">Expiry Date</label>
      <input type="text" id="expiry" name="expiry" required>
    </div>
    <div>
      <label for="cvv">Security Code</label>
      <input type="text" id="cvv" name="cvv" required>
    </div>
  </div>

  <div class="checkbox">
    <input type="checkbox" id="saveInfo" name="saveInfo">
    <label for="saveInfo">Store my payment information securely</label>
  </div>

  <button class="btn" type="submit">AGREE & SUBSCRIBE</button>
</form>

    <p class="terms">
      By clicking “Agree & Subscribe”, you agree to our <a href="#">Terms</a>, <a href="#">Privacy Policy</a>, and <a href="#">Cookie Policy</a>.  
      You may cancel anytime at the end of the billing period. No refunds for partial months.
    </p>
  </div>


</body>
</html>
