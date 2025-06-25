<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sindh MDCAT 2024</title>
 
   <link href="../../dist/output.css" rel="stylesheet">
   
   <link href="../../dist/input.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-[Manrope] overflow-x-hidden">

  <div class="min-h-screen w-full max-w-screen-2xl mx-auto grid grid-cols-1 lg:grid-cols-[260px_1fr] gap-6">
 <?php
// no isHomePage set here
include '../Includes/Sidebar.php';
?>

    <!-- ✅ Main Content (Fully Adjusted) -->
    <main class="space-y-8 px-4 sm:px-6 py-6">

      <!-- Header -->
      <div>
        <h1 class="font-bold text-[#673AB7] text-[32px] leading-[40px]">Sindh MDCAT 2024</h1>
        <p class="text-gray-800 font-medium text-[24px] leading-[28px]">Sindh MDCAT</p>
      </div>

      <!-- MCQs Button -->
      <div>
        <button class="w-[171px] h-[51px] bg-[#673AB7] text-white rounded-[10px] hover:bg-[#5c32a9] transition">
          MCQ's
        </button>
      </div>

      <!-- Mode Switcher Tabs -->
     
  <!-- Mode Switcher Buttons -->
  <div id="mode-switcher" class="w-full max-w-4xl mx-auto border-2 border-purple-600 rounded-[10px] p-4 mb-6">
    <div class="flex flex-col sm:flex-row justify-center gap-3">
      <button id="tutorBtn"
        class="w-full sm:w-[480px] h-[80px] rounded-[10px] bg-[#673AB7] text-white flex items-center justify-between px-5 py-3 transition">
        <span class="text-lg font-semibold">Tutor Mode</span>
        <span class="w-[100px] h-[40px] bg-white text-[#673AB7] text-xs font-semibold flex items-center justify-center rounded-full">Free</span>
      </button>
      <button id="testBtn"
        class="w-full sm:w-[480px] h-[80px] rounded-[10px] bg-purple-100 text-[#673AB7] flex items-center justify-between px-5 py-3 transition">
        <span class="text-lg font-semibold">Timed Test Mode</span>
        <span class="w-[100px] h-[40px] bg-white text-[#673AB7] text-xs font-semibold flex items-center justify-center rounded-full">Free</span>
      </button>
    </div>
  </div>

  <!-- Tutor Mode Content -->
  <div id="tutorContent" class="bg-white rounded-[10px] p-8 shadow-[10px_40px_80px_0px_rgba(0,0,0,0.25)] max-w-5xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
      <div class="text-center md:text-left">
        <h3 class="text-[22px] font-bold text-[#673AB7] mb-4">Tutor Mode</h3>
        <ul class="space-y-2 text-[#673AB7] font-medium text-[16px] leading-[22px]">
          <li>Learn at your own pace</li>
          <li>Get instant feedback</li>
          <li>Unlimited retries</li>
          <li>Topic-wise breakdown</li>
        </ul>
        <button class="mt-6 w-[220px] h-[38px] text-white text-sm font-semibold rounded-full shadow bg-gradient-to-b from-[#673AB7] to-[#2E1A51] hover:scale-105 transition">
          Attempt Completely Free
        </button>
      </div>

      <div class="text-center md:text-left">
        <h3 class="text-[20px] font-semibold text-[#673AB7] mb-3">Instructions</h3>
        <p class="text-gray-600 text-[15px] leading-[24px]">
          Use Tutor Mode to explore and understand concepts freely without time limits.
        </p>
      </div>
    </div>
  </div>

  <!-- Test Mode Content -->
  <div id="testContent" class="bg-white rounded-[10px] p-8 shadow-[10px_40px_80px_0px_rgba(0,0,0,0.25)] max-w-5xl mx-auto hidden">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
      <div class="text-center md:text-left">
        <h3 class="text-[22px] font-bold text-[#673AB7] mb-4">Timed Test Mode</h3>
        <ul class="space-y-2 text-[#673AB7] font-medium text-[16px] leading-[22px]">
          <li>Practice in exam conditions</li>
          <li>Time-limited questions</li>
          <li>Get score instantly</li>
          <li>Track performance</li>
        </ul>
        <button class="mt-6 w-[220px] h-[38px] text-white text-sm font-semibold rounded-full shadow bg-gradient-to-b from-[#673AB7] to-[#2E1A51] hover:scale-105 transition">
          Start Timed Test
        </button>
      </div>

      <div class="text-center md:text-left">
        <h3 class="text-[20px] font-semibold text-[#673AB7] mb-3">Instructions</h3>
        <p class="text-gray-600 text-[15px] leading-[24px]">
          Timed Test Mode simulates the real exam environment to evaluate your readiness.
        </p>
      </div>
    </div>
  </div>


    <script src="js/Quizbuilder.js"></script>
</body>
</html>
