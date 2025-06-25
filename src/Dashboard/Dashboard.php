<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Overview</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
  /* Bar animation (grows on load) */
  @keyframes growBar {
    0% { height: 0; }
    100% { height: var(--final-height); }
  }

  .bar-animate {
    animation: growBar 1s ease-out forwards;
  }

  /* Donut chart animation */
  .donut-ring {
    transition: stroke-dashoffset 1s ease-out;
    stroke-dashoffset: 1000;
    animation: donutFill 1s ease-out forwards;
  }

  @keyframes donutFill {
    to {
      stroke-dashoffset: 0;
    }
  }
</style>
  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById("mobileSidebar");
      sidebar.classList.toggle("-translate-x-full");
    }
  </script>
</head>
<body class="bg-[#f8f9fb] text-gray-800 font-sans">

  <!-- MOBILE HEADER -->
  <header class="lg:hidden flex justify-between items-center px-4 py-3 bg-white shadow-md fixed top-0 left-0 w-full z-50">
    <button onclick="toggleSidebar()" class="w-[21px] h-[21px]">
      <img src="../Images/quill_hamburger.png" alt="Menu Icon" class="w-full h-full object-contain" />
    </button>
    <div class="absolute left-1/2 transform -translate-x-1/2">
      <img src="../Images/maxfylogo.png" alt="Logo" class="w-[46px] h-[46px] object-contain" />
    </div>
  </header>

  <div class="flex pt-16 lg:pt-0">
    <!-- SIDEBAR -->
    <aside
      id="mobileSidebar"
      class="fixed lg:static lg:translate-x-0 top-0 left-0 h-full lg:h-auto w-[250px] lg:w-[260px] bg-[#E4E4E4] shadow-lg 
             z-40 transform -translate-x-full lg:transform-none transition-transform duration-300">

      <!-- Close Button (Visible on Mobile Only) -->
      <div class="flex justify-end p-3 lg:hidden">
        <button onclick="toggleSidebar()" class="text-[#673AB7] font-bold text-xl">
          ✕
        </button>
      </div>

      <!-- PHP Sidebar -->
      <?php
 
include '../Includes/Sidebar.php';
      ?>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 px-4 py-6 lg:pl-6 space-y-8 max-w-full overflow-x-hidden">
      <!-- Header -->
    <div class="text-left space-y-0.5 max-w-xl">
  <h1 class="font-[800] text-[32px] leading-[36px] font-[Manrope] bg-gradient-to-r from-[#673AB7] to-[#2E1A51] text-transparent bg-clip-text">
    Good Morning!
  </h1>
  <p class="font-[500] text-[20px] leading-[30px] text-[#727272] font-[Manrope]">
    Here is your dashboard overview. What will you learn today?
  </p>
  <a href="#" class="font-[500] text-[14px] leading-[24px] text-[#673AB7] font-[Manrope] inline-block">
    View Plan Details »
  </a>
</div>

      <!-- Overview Title -->
    <div>
  <h2 class="text-[22px] leading-[22px] font-[800] font-[Manrope] bg-gradient-to-r from-[#673AB7] to-[#2E1A51] text-transparent bg-clip-text">
    Overview
  </h2>
</div>


  <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-x-4 gap-y-6">

  <!-- Card -->
  <div class="bg-[#EDEEFC] p-3 rounded-[16px] shadow-md min-w-[140px] w-[140px] h-[80px] flex flex-col justify-center space-y-1.5">
    <h3 class="text-[13px] leading-[18px] font-medium text-black font-[Manrope]">Total MCQs</h3>
    <p class="text-[15px] font-semibold text-black flex items-center gap-1">
      7,265 
      <span class="text-[11px] leading-[14px] font-medium text-green-500 font-[Manrope]">+11.8%</span>
    </p>
  </div>

  <!-- Repeat for others -->
  <div class="bg-[#EDEEFC] p-3 rounded-[16px] shadow-md min-w-[140px] w-[140px] h-[80px] flex flex-col justify-center space-y-1.5">
    <h3 class="text-[13px] leading-[18px] font-medium text-black font-[Manrope]">Total Attempted</h3>
    <p class="text-[15px] font-semibold text-black flex items-center gap-1">
      3,671 
      <span class="text-[11px] leading-[14px] font-medium text-red-500 font-[Manrope]">-0.02%</span>
    </p>
  </div>

  <div class="bg-[#EDEEFC] p-3 rounded-[16px] shadow-md min-w-[140px] w-[140px] h-[80px] flex flex-col justify-center space-y-1.5">
    <h3 class="text-[13px] leading-[18px] font-medium text-black font-[Manrope]">MDCAT MCQs</h3>
    <p class="text-[15px] font-semibold text-black">156</p>
  </div>

  <div class="bg-[#EDEEFC] p-3 rounded-[16px] shadow-md min-w-[140px] w-[140px] h-[80px] flex flex-col justify-center space-y-1.5">
    <h3 class="text-[13px] leading-[18px] font-medium text-black font-[Manrope]">NUMS MCQs</h3>
    <p class="text-[15px] font-semibold text-black flex items-center gap-1">
      7,265 
      <span class="text-[11px] leading-[14px] font-medium text-green-500 font-[Manrope]">+11.05%</span>
    </p>
  </div>

  <div class="bg-[#EDEEFC] p-3 rounded-[16px] shadow-md min-w-[140px] w-[140px] h-[80px] flex flex-col justify-center space-y-1.5">
    <h3 class="text-[13px] leading-[18px] font-medium text-black font-[Manrope]">F.Sc MCQs</h3>
    <p class="text-[15px] font-semibold text-black flex items-center gap-1">
      3,671 
      <span class="text-[11px] leading-[14px] font-medium text-red-500 font-[Manrope]">-0.02%</span>
    </p>
  </div>

  <div class="bg-[#EDEEFC] p-3 rounded-[16px] shadow-md min-w-[140px] w-[140px] h-[80px] flex flex-col justify-center space-y-1.5">
    <h3 class="text-[13px] leading-[18px] font-medium text-black font-[Manrope]">NUMS MCQs</h3>
    <p class="text-[15px] font-semibold text-black flex items-center gap-1">
      156 
      <span class="text-[11px] leading-[14px] font-medium text-red-500 font-[Manrope]">-0.03%</span>
    </p>
  </div>

</div>



<style>
  @keyframes growBar {
    0% { height: 0; }
    100% { height: var(--final-height); }
  }
  .bar-animate {
    animation: growBar 1s ease-out forwards;
  }

  .donut-ring {
    transition: stroke-dashoffset 1s ease-out;
    stroke-dashoffset: 1000;
    animation: donutFill 1s ease-out forwards;
  }

  @keyframes donutFill {
    to { stroke-dashoffset: 0; }
  }
</style>

<!-- Tighter Wrapper -->
<div class="flex justify-center items-center flex-wrap gap-2 px-1 py-6 bg-white">

  <!-- Bar Chart Card -->
  <div class="bg-[#F9F9FA] rounded-[16px] shadow p-3 w-[320px] h-[220px]">
    <h3 class="text-[14px] font-semibold text-gray-700 mb-3 font-[Manrope]">Your Progress</h3>
    <div class="flex justify-around items-end h-[120px]">
      <div class="flex flex-col items-center space-y-1">
        <div class="bg-[#9CA3FA] w-4 rounded-full bar-animate" style="--final-height: 70px; height: 0;"></div>
        <span class="text-[10px] text-gray-500">Jan</span>
      </div>
      <div class="flex flex-col items-center space-y-1">
        <div class="bg-[#86E5DC] w-4 rounded-full bar-animate" style="--final-height: 100px; height: 0;"></div>
        <span class="text-[10px] text-gray-500">Feb</span>
      </div>
      <div class="flex flex-col items-center space-y-1">
        <div class="bg-black w-4 rounded-full bar-animate" style="--final-height: 80px; height: 0;"></div>
        <span class="text-[10px] text-gray-500">Mar</span>
      </div>
      <div class="flex flex-col items-center space-y-1">
        <div class="bg-[#80BFFF] w-4 rounded-full bar-animate" style="--final-height: 110px; height: 0;"></div>
        <span class="text-[10px] text-gray-500">Apr</span>
      </div>
      <div class="flex flex-col items-center space-y-1">
        <div class="bg-[#D3DFFF] w-4 rounded-full bar-animate" style="--final-height: 50px; height: 0;"></div>
        <span class="text-[10px] text-gray-500">May</span>
      </div>
      <div class="flex flex-col items-center space-y-1">
        <div class="bg-[#9CF6AD] w-4 rounded-full bar-animate" style="--final-height: 90px; height: 0;"></div>
        <span class="text-[10px] text-gray-500">Jun</span>
      </div>
    </div>
  </div>

  <!-- Donut Chart Card -->
  <div class="bg-[#F9F9FA] rounded-[16px] shadow p-3 w-[320px] h-[220px] flex items-center justify-center gap-2">
    <svg viewBox="0 0 36 36" class="w-[80px] h-[80px]">
      <circle cx="18" cy="18" r="16" fill="none" stroke="#E5E7EB" stroke-width="4" />
      <circle class="donut-ring" cx="18" cy="18" r="16" fill="none" stroke="black" stroke-width="4" stroke-dasharray="52.1 47.9" stroke-dashoffset="52.1" />
      <circle class="donut-ring" cx="18" cy="18" r="16" fill="none" stroke="#80BFFF" stroke-width="4" stroke-dasharray="22.8 77.2" stroke-dashoffset="-52.1" />
      <circle class="donut-ring" cx="18" cy="18" r="16" fill="none" stroke="#9CF6AD" stroke-width="4" stroke-dasharray="13.9 86.1" stroke-dashoffset="-74.9" />
      <circle class="donut-ring" cx="18" cy="18" r="16" fill="none" stroke="#D3DFFF" stroke-width="4" stroke-dasharray="11.2 88.8" stroke-dashoffset="-88.8" />
    </svg>

    <div class="space-y-1 text-[11px] text-gray-700 font-[Manrope] w-[140px]">
      <div class="flex justify-between items-center">
        <span class="flex items-center gap-2"><span class="w-2 h-2 bg-black rounded-full"></span> MDCAT</span>
        <span class="font-semibold">52.1%</span>
      </div>
      <div class="flex justify-between items-center">
        <span class="flex items-center gap-2"><span class="w-2 h-2 bg-[#80BFFF] rounded-full"></span> NUMS</span>
        <span class="font-semibold">22.8%</span>
      </div>
      <div class="flex justify-between items-center">
        <span class="flex items-center gap-2"><span class="w-2 h-2 bg-[#9CF6AD] rounded-full"></span> F.SC</span>
        <span class="font-semibold">13.9%</span>
      </div>
      <div class="flex justify-between items-center">
        <span class="flex items-center gap-2"><span class="w-2 h-2 bg-[#D3DFFF] rounded-full"></span> COMSATS</span>
        <span class="font-semibold">11.2%</span>
      </div>
    </div>
  </div>

</div>


<style>
  /* Line draw animation */
  .chart-line {
    stroke-dasharray: 300;
    stroke-dashoffset: 300;
    animation: drawLine 2s ease-out forwards;
  }

  @keyframes drawLine {
    to {
      stroke-dashoffset: 0;
    }
  }
</style>

<div class="rounded-[16px] bg-[#f9f9fa] p-4 w-full max-w-full">
  <!-- Header -->
  <div class="mb-4 flex flex-wrap items-center gap-3">
    <h3 class="text-base font-semibold text-gray-700">Total Progress</h3>
    <div class="flex flex-wrap gap-3 text-xs text-gray-500">
      <span class="font-semibold text-gray-700">Total MCQs</span>
      <span>Total Practice Tests</span>
      <span>This year</span>
      <span>Last year</span>
    </div>
  </div>

  <!-- Chart Area -->
  <div class="w-full h-[280px] md:h-[320px] bg-[#f5f5f6] rounded-[12px] p-4 relative overflow-hidden">
    
    <!-- Y-Axis Labels -->
    <div class="absolute top-4 bottom-10 left-2 flex flex-col justify-between text-[11px] text-gray-600 font-semibold">
      <span>30k</span>
      <span>20k</span>
      <span>10k</span>
    </div>

    <!-- Line SVG Path -->
<div class="absolute left-10 right-4 top-4 bottom-10">
  <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="w-full h-full">
    <polyline
      fill="none"
      stroke="#6366F1"
      stroke-width="1"
      class="chart-line"
      points="0,90 20,60 40,70 60,50 80,65 100,35"
    />
  </svg>
</div>

    <!-- X-Axis Labels -->
    <div class="absolute bottom-3 left-10 right-4 flex justify-between text-[11px] text-gray-500 font-medium px-2">
      <span>Jan</span>
      <span>Feb</span>
      <span>Mar</span>
      <span>Apr</span>
      <span>May</span>
      <span>Jun</span>
    </div>
  </div>
</div>


    </main>
  </div>
  

<script src="js/dashboard.js"></script>
</body>
</html>
