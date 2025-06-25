<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Maxify Checkout with Sidebar</title>
 
   <link href="../../dist/output.css" rel="stylesheet">
   
   <link href="../../dist/input.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    * {
      font-family: 'Manrope', sans-serif;
    }
  </style>
</head>

<body class="bg-gray-100">


  <!-- 📱 Mobile Header -->
  <header class="lg:hidden flex justify-between items-center px-4 py-3 bg-white shadow-md fixed top-0 left-0 w-full z-50">
    <!-- Sidebar Toggle Button -->
    <button onclick="toggleSidebar()" class="w-[24px] h-[24px]">
      <img src="../Images/quill_hamburger.png" alt="Menu Icon" class="w-full h-full object-contain" />
    </button>

    <!-- Centered Logo -->
    <div class="absolute left-1/2 transform -translate-x-1/2">
      <img src="../Images/maxfylogo.png" alt="Logo" class="w-[46px] h-[46px] object-contain" />
    </div>
  </header>

  <!-- 🔲 Overlay Background (for mobile only) -->
  <div id="sidebarOverlay" 
       class="fixed top-0 left-0 w-full h-screen bg-black bg-opacity-40 z-30 hidden lg:hidden" 
       onclick="toggleSidebar()">
  </div>

  <!-- 🌐 Full Layout with Sidebar and Main Content -->
  <div class="flex flex-col lg:flex-row min-h-screen pt-[64px] lg:pt-0">

    <!-- 📚 Sidebar -->
    <aside id="sidebar"
      class="fixed lg:static top-0 left-0 z-[60] bg-white w-[240px] h-screen transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out shadow lg:shadow-none">
      <?php include '../Includes/Sidebar.php'; ?>
    </aside>

    <!-- 📝 Main Content -->
    <main class="flex-1 w-full max-w-full px-4 py-6">
      <div class="w-full  mx-autorounded-2xl p-6 space-y-6">

        <!-- Cancel and Heading -->
<div class="flex justify-between items-start">
<a href="../Payment/Pricing.php">
  <button class="flex items-center gap-[10px] w-[90px] h-[24px] text-red-600 text-[16px] font-[Manrope] font-normal leading-[100%]">
    <img src="../Images/material-symbols_cancel-rounded.png" alt="Cancel" class="w-[22px] h-[22px]" />
    <span>Cancel</span>
  </button>
</a>

</div>


<div class="space-y-1 text-left">
  <h2 class="text-[#673AB7]" style="font-family: 'Manrope', sans-serif; font-weight: 700; font-size: 32px; line-height: 36px; letter-spacing: 0%;">
    You're almost there!
  </h2>
  <p class="text-[#673AB7]" style="font-family: 'Manrope', sans-serif; font-weight: 500; font-size: 18px; line-height: 24px; letter-spacing: 0%;">
    Kindly review your order
  </p>
</div>



        <!-- Bundle Title -->
<div class="flex justify-between items-center border-b pb-2">
  <div>
    <h3 style="font-family: 'Manrope', sans-serif; font-weight: 700; font-size: 24px; line-height: 32px; color: #673AB7;">
      All In One Basic (All In One)
    </h3>
    <p style="font-family: 'Manrope', sans-serif; font-weight: 500; font-size: 16px; line-height: 24px; color: #673AB7;">
      Valid Till 2025 Exams
    </p>
  </div>
  <button class="text-[#673AB7] text-[20px]">🗑️</button>
</div>


        <!-- Features -->
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-y-2 w-full max-w-[1476px] text-[#727272] font-[Manrope] font-medium text-[16px] leading-[20px]">
  <div class="flex items-center gap-2 h-[28px]">
    <span class="flex items-center justify-center w-5 h-5 bg-[#00BB00] text-white rounded-[4px] text-[10px] ">
      <i class="fas fa-check"></i>
    </span>
    <span>Chapter-wise </span>
  </div>

  <div class="flex items-center gap-2 h-[28px]">
    <span class="flex items-center justify-center w-5 h-5 bg-[#00BB00] text-white rounded-[4px] text-[10px] ">
      <i class="fas fa-check"></i>
    </span>
    <span>Past Papers</span>
  </div>

  <div class="flex items-center gap-2 h-[28px]">
    <span class="flex items-center justify-center w-5 h-5 bg-[#00BB00] text-white rounded-[4px] text-[10px] ">
      <i class="fas fa-check"></i>
    </span>
    <span>Mock Tests</span>
  </div>

  <div class="flex items-center gap-2 h-[28px]">
    <span class="flex items-center justify-center w-5 h-5 bg-[#00BB00] text-white rounded-[4px] text-[10px] ">
      <i class="fas fa-check"></i>
    </span>
    <span>Flashcards</span>
  </div>

  <div class="flex items-center gap-2 h-[28px]">
    <span class="flex items-center justify-center w-5 h-5 bg-[#00BB00] text-white rounded-[4px] text-[10px] ">
      <i class="fas fa-check"></i>
    </span>
    <span>Full Length Tests</span>
  </div>

  <div class="flex items-center gap-2 h-[28px]">
    <span class="flex items-center justify-center w-5 h-5 bg-[#00BB00] text-white rounded-[4px] text-[10px] ">
      <i class="fas fa-check"></i>
    </span>
    <span>Progress Tracking</span>
  </div>

  <div class="flex items-center gap-2 h-[28px]">
    <span class="flex items-center justify-center w-5 h-5 bg-[#00BB00] text-white rounded-[4px] text-[10px] ">
      <i class="fas fa-check"></i>
    </span>
    <span>Video Lectures</span>
  </div>

  <div class="flex items-center gap-2 h-[28px]">
    <span class="flex items-center justify-center w-5 h-5 bg-[#00BB00] text-white rounded-[4px] text-[10px] ">
      <i class="fas fa-check"></i>
    </span>
    <span>Live Sessions</span>
  </div>

  <div class="flex items-center gap-2 h-[28px]">
    <span class="flex items-center justify-center w-5 h-5 bg-[#00BB00] text-white rounded-[4px] text-[10px] ">
      <i class="fas fa-check"></i>
    </span>
    <span>Leaderboard</span>
  </div>

  <div class="flex items-center gap-2 h-[28px]">
    <span class="flex items-center justify-center w-5 h-5 bg-[#00BB00] text-white rounded-[4px] text-[10px] ">
      <i class="fas fa-check"></i>
    </span>
    <span>Certificates</span>
  </div>
</div>



<div class="space-y-2 w-full">
  <label for="coupon"
    class="text-[#673AB7] font-bold text-[24px] leading-[22px]"
    style="font-family: 'Manrope', sans-serif;">
    Coupon Code
  </label>

  <div class="flex gap-3 items-center w-full">
   <input type="text" id="coupon" placeholder="Enter coupon"
  class="flex-1 h-[50px] px-4 rounded-[8px] border border-gray-200 shadow-[0_5px_20px_rgba(0,0,0,0.1)] bg-[#E9E9E9] focus:outline-none text-sm"
  style="font-family: 'Manrope', sans-serif;" />


    <button
      class="h-[50px] px-5 py-2 bg-gradient-to-b from-[#673AB7] to-[#2E1A51] text-white text-[16px] leading-[20px] font-semibold rounded-[8px] shadow-md whitespace-nowrap"
      style="font-family: 'Manrope', sans-serif;">
      Apply
    </button>
  </div>
</div>


        <!-- Price Summary -->

<!-- Subtotal and Discount (Smaller & Right-aligned Prices) -->
<div class="text-left space-y-1 text-[16px] leading-[18px]" style="font-family: 'Manrope', sans-serif; font-weight: 500; letter-spacing: 0%;">
  <div class="flex justify-between">
    <p class="text-[#3F3F3F]">Subtotal</p>
    <span class="text-[#3F3F3F]">Rs. 15500</span>
  </div>
  <div class="flex justify-between">
    <p class="text-[#673AB7]">Discount (15% off)</p>
    <span class="text-[#673AB7]">-Rs. 2325</span>
  </div>
</div>


        <!-- Proceed Button -->
       <div class="text-center">
<a href="../Payment/payment.php"
   class="w-full h-[50px] rounded-[10px] text-white text-[18px] leading-[22px] font-semibold shadow-md flex items-center justify-center"
   style="font-family: 'Manrope', sans-serif; background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">
  Proceed
</a>

</div>

        <!-- Note Section -->
 <div class="text-left space-y-2 text-[14px] leading-[20px]" style="font-family: 'Manrope', sans-serif; font-weight: 500; letter-spacing: 0%;">
  <p class="text-[#727272]">
    No Refunds are allowed once the payment is made for the selected bundle. However, you can change the bundle within 24 hours of purchase. For more details, please visit our Refund Policy Page.
  </p>
  <p class="text-[#727272]">
    Maxify does not offer any refunds once the payment has been made.
  </p>
  <p class="text-[#727272]">
    Still have Questions?
    <a href="#" class="text-[#673AB7] underline">
      Frequently Asked Questions (FAQs)
    </a>
  </p>
</div>


      </div>
    </main>
    <!-- Checkout Section End -->

  </div>
  
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/payment.js"></script>
  <script>
      function toggleSidebar() {
      const sidebar = document.getElementById("sidebar");
      const overlay = document.getElementById("sidebarOverlay");
      const isOpen = !sidebar.classList.contains("-translate-x-full");

      if (isOpen) {
        sidebar.classList.add("-translate-x-full");
        overlay?.classList.add("hidden");
      } else {
        sidebar.classList.remove("-translate-x-full");
        overlay?.classList.remove("hidden");
      }
    }
  </script>
</body>

</html>
