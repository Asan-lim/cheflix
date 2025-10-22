  document.getElementById("paymentForm").addEventListener("submit", function(e){
      e.preventDefault();
      alert("✅ Subscription successful! Welcome to Chef Flix.");
      // Redirect to homepage
      window.location.href = "index.html";
    });

    // Toggle plan buttons
    const monthlyBtn = document.getElementById("monthly");
    const annualBtn = document.getElementById("annual");
    monthlyBtn.addEventListener("click", () => {
      monthlyBtn.classList.add("active");
      annualBtn.classList.remove("active");
    });
    annualBtn.addEventListener("click", () => {
      annualBtn.classList.add("active");
      monthlyBtn.classList.remove("active");
    });

    // Toggle payment method
    const credit = document.getElementById("credit");
    const paypal = document.getElementById("paypal");
    credit.addEventListener("click", () => {
      credit.classList.add("active");
      paypal.classList.remove("active");
    });
    paypal.addEventListener("click", () => {
      paypal.classList.add("active");
      credit.classList.remove("active");
    });