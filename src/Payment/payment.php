<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Payment & Checkout</title>
 
   <link href="../../dist/output.css" rel="stylesheet">
   
   <link href="../../dist/input.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Manrope', sans-serif;
    }
  </style>
</head>
<body class="bg-[#F5F5F5] text-[#3F3F3F]">
<!-- 🧾 HEADER (mobile only) -->
<header class="lg:hidden fixed top-0 left-0 w-full bg-white shadow-md z-50 px-4 py-3 flex justify-between items-center">
  <button onclick="toggleSidebar()" class="w-6 h-6">
    <img src="../Images/quill_hamburger.png" alt="Menu" class="w-full h-full object-contain" />
  </button>
  <div class="absolute left-1/2 transform -translate-x-1/2">
    <img src="../Images/maxfylogo.png" alt="Logo" class="w-[46px] h-[46px] object-contain" />
  </div>
</header>

<!-- OVERLAY (for mobile sidebar toggle) -->
<div id="sidebarOverlay"
  class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-40 z-40 hidden lg:hidden"
  onclick="toggleSidebar()">
</div>

<!-- PAGE WRAPPER -->
<div class="flex flex-col lg:flex-row min-h-screen pt-[64px] lg:pt-0 gap-4 px-4">

  <!-- SIDEBAR -->
  <aside id="sidebar"
    class="fixed lg:static top-0 left-0 z-50 bg-white w-[240px] h-screen transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out shadow lg:shadow-none">
    <?php include '../Includes/Sidebar.php'; ?>
  </aside>

  <!-- MAIN CONTENT -->
  <main class="flex-1 p-4 lg:p-6 rounded-xl bg-white shadow">
    <h1 class="text-[36px] font-bold leading-[42px] text-[#673AB7] mb-8">Payment & Checkout</h1>

    <div class="grid lg:grid-cols-2 gap-10">

      <!-- LEFT: Payment Options -->
    <div>
  <!-- Heading -->
  <h2 class="text-[20px] font-semibold leading-[22px] text-[#673AB7] mb-4 font-[Manrope]">
    Select Payment Method
  </h2>

  <!-- Payment Options -->
  <div class="space-y-4 max-w-[600px] mx-auto" id="paymentOptions">
    <!-- Easypaisa -->
    <label for="easypaisa" class="payment-card w-full block rounded-[10px] bg-white cursor-pointer transition-all duration-300 border-2 border-gray-300">
      <input type="radio" name="payment" id="easypaisa" hidden>
      <div class="flex justify-between items-center h-[60px] px-4">
        <div class="flex items-center gap-3">
          <div class="custom-radio w-6 h-6 rounded-full border-2 border-gray-300 relative"></div>
          <span class="text-[#673AB7] font-[Manrope] text-[18px] font-semibold leading-[22px]">Easypaisa</span>
        </div>
        <img src="../Images/image 20.png" alt="easypaisa" class="w-[70px] h-[24px] object-contain">
      </div>
    </label>

    <!-- JazzCash -->
    <label for="jazzcash" class="payment-card w-full block rounded-[10px] bg-white cursor-pointer transition-all duration-300 border-2 border-gray-300">
      <input type="radio" name="payment" id="jazzcash" hidden>
      <div class="flex justify-between items-center h-[60px] px-4">
        <div class="flex items-center gap-3">
          <div class="custom-radio w-6 h-6 rounded-full border-2 border-gray-300 relative"></div>
          <span class="text-[#673AB7] font-[Manrope] text-[18px] font-semibold leading-[22px]">JazzCash</span>
        </div>
        <img src="../Images/image 21.png" alt="jazzcash" class="w-[70px] h-[24px] object-contain">
      </div>
    </label>

    <!-- Bank Transfer -->
    <label for="bank" class="payment-card w-full block rounded-[10px] bg-white cursor-pointer transition-all duration-300 border-2 border-gray-300">
      <input type="radio" name="payment" id="bank" hidden>
      <div class="flex justify-between items-center h-[60px] px-4">
        <div class="flex items-center gap-3">
          <div class="custom-radio w-6 h-6 rounded-full border-2 border-gray-300 relative"></div>
          <span class="text-[#673AB7] font-[Manrope] text-[18px] font-semibold leading-[22px]">Bank Transfer</span>
        </div>
        <img src="../Images/image 22.png" alt="bank" class="w-[70px] h-[24px] object-contain">
      </div>
    </label>
  </div>

  <!-- Cancel Button -->
  <button onclick="cancelPayment()"
  class="mt-6 w-[150px] h-[38px] bg-gradient-to-b from-[#673AB7] to-[#2E1A51] text-white rounded-[30px] px-[48px] py-[8px] text-[14px] font-semibold font-[Manrope]">
  Cancel
</button>
<script>
  function cancelPayment() {
    const paymentSection = document.getElementById("paymentDetails");
    if (paymentSection) {
      paymentSection.classList.add("hidden");
    }
  }
</script>

  <!-- Note -->
  <p class="mt-6 text-[#4B4B4B] max-w-lg font-[Manrope] font-medium text-[16px] leading-[28px]">
    No Refunds are allowed once the payment is made for the selected bundle. However, you can change the bundle within 24 hours of purchase. For more details, please visit our Refund Policy Page.<br><br>
    Maxify does not offer any refunds once the payment has been made.<br><br>
    Still have Questions? Read 
    <a href="#" class="text-[#673AB7] underline font-medium leading-[24px]">Frequently Asked Questions (FAQs)</a>
  </p>
</div>


      <!-- RIGHT: Payment Details -->
   <div id="paymentDetails" class="hidden bg-white rounded-[10px] shadow-[0px_10px_40px_0px_#673AB78F] p-4 w-full max-w-md space-y-5 mx-auto">
  
  <!-- VISA Heading -->
  <div class="visa-heading flex items-center gap-2">
    <img src="../Images/image 22.png" alt="visa" class="w-[40px] h-auto">
    <span class="font-[Manrope] font-medium text-[18px] leading-[26px] text-[#673AB7]">VISA</span>
  </div>

  <!-- Instructions -->
  <div class="space-y-2 text-[#673AB7] font-[Manrope] text-[16px] leading-[24px]">
    <p class="font-normal">
      Transfer the amount to any one of these accounts and upload the screenshot of the receipt
    </p>

    <!-- Meezan Bank Details -->
    <p>
      <strong class="font-bold">Name:</strong> <span class="font-normal">Meezan Bank</span><br>
      <!-- Your HTML -->
<span class="flex items-center justify-between">
  <span><strong class="font-bold">Title:</strong> <span class="font-normal">Maxify LLP</span></span>
  <img onclick="copyText(this)" src="../Images/solar_copy-bold.png" alt="icon" class="w-[20px] h-[20px] cursor-pointer">
</span>

<span class="flex items-center justify-between">
  <span><strong class="font-bold">Account:</strong> <span class="font-normal">102001098566595</span></span>
  <img onclick="copyText(this)" src="../Images/solar_copy-bold.png" alt="icon" class="w-[20px] h-[20px] cursor-pointer">
</span>

<!-- Add this Script at Bottom of Body -->


    </p>

    <!-- International Payments Details -->
    <p>
      <strong class="font-bold">Name:</strong> <span class="font-normal">International Payments</span><br>
      <span class="flex items-center justify-between">
        <span><strong class="font-bold">Title:</strong> <span class="font-normal">Ali Bin Hassanin</span></span>
      </span>
    <span class="flex items-center justify-between">
  <span><strong class="font-bold">Account:</strong> <span class="font-normal">3565252695</span></span>
  <img src="../Images/solar_copy-bold.png" alt="icon" class="w-[20px] h-[20px] cursor-pointer" onclick="copyText(this)">
</span>

<span class="flex items-center justify-between">
  <span><strong class="font-bold">IBAN:</strong> <span class="font-normal">PK745ADAD000003526249853</span></span>
  <img src="../Images/solar_copy-bold.png" alt="icon" class="w-[20px] h-[20px] cursor-pointer" onclick="copyText(this)">
</span>


    </p>
  </div>

  <!-- Upload Section -->
<div class="w-full h-[150px] border-2 border-dashed border-[#bdbdbd] rounded-lg mx-auto flex flex-col justify-center items-center text-center cursor-pointer space-y-2">
  <img src="../Images/fluent_reciept-20-filled1.png" alt="Upload Icon" class="w-[35px] h-[35px]">

  <label for="receiptUpload" class="text-[#673AB7] font-[Manrope] font-medium text-[16px] leading-[28px]">
    Drop your receipt here
  </label>

  <!-- Hidden file input -->
  <input type="file" id="receiptUpload" class="hidden">

  <!-- Upload button -->
  <button onclick="document.getElementById('receiptUpload').click()" 
    class="w-[122px] h-[44px] bg-[#673AB7] hover:bg-[#5a2fa0] text-white rounded-[10px] px-4 flex items-center justify-center gap-2 font-medium text-[15px] leading-[37px] font-[Manrope]">
    Upload
    <img src="../Images/solar_upload-bold.png" alt="upload" class="w-[17px] h-[17px]">
  </button>
</div>


  <!-- Total Section -->
  <div class="pt-3 border-t text-[16px] font-[Manrope] space-y-2">
    <div class="flex justify-between">
      <span class="text-gray-700">Subtotal</span>
      <span class="text-gray-700">Rs. 15,500</span>
    </div>
    <div class="flex justify-between text-purple-600">
      <span>Discount (15%)</span>
      <span>-Rs. 2,325</span>
    </div>
    <div class="font-bold text-[20px] leading-[22px] text-[#673AB7] mt-3 flex flex-col items-start space-y-1">
      <span>Total</span>
      <div class="flex items-center gap-2">
        <span>Rs. 13,175</span>
        <span class="text-[#727272] text-[14px] line-through font-semibold">Rs. 15,500</span>
      </div>
    </div>
  </div>

  <!-- Place Order Button -->
  <div class="w-full flex justify-center">
    <button class="w-[300px] h-[40px] bg-gradient-to-b from-[#673AB7] to-[#2E1A51] text-white rounded-[30px] px-[20px] py-[8px] flex items-center justify-center gap-[8px] text-[14px] leading-[20px] font-semibold font-[Manrope]">
      Place Order
    </button>
  </div>
</div>

    </div>
  </main>
</div>



<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/payment.js"></script>
<script>
  function copyText(imgElement) {
    const textToCopy = imgElement.parentElement.querySelector('.font-normal').textContent;
    navigator.clipboard.writeText(textToCopy)
      .then(() => {
        console.log('Copied:', textToCopy); // Optional: you can remove this line
      })
      .catch(err => {
        console.error('Failed to copy:', err);
      });
  }
</script>
<script>
  function copyText(imgElement) {
    // Find the .font-normal span in the same row
    const textToCopy = imgElement.parentElement.querySelector('.font-normal').textContent;

    // Copy to clipboard
    navigator.clipboard.writeText(textToCopy)
      .then(() => {
        console.log('Copied:', textToCopy); // You can remove this line if you want absolutely no output
      })
      .catch(err => {
        console.error('Failed to copy:', err);
      });
  }
</script>

</body>
</html>
