<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Result Analytics</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans p-4">

  

<!-- Page Grid Layout -->
<div class="grid grid-cols-1 lg:grid-cols-[220px_1fr] max-w-screen-xl mx-auto gap-6 items-start">
  <!-- ✅ Sidebar -->
    <?php
// no isHomePage set here
include '../Includes/Sidebar.php';
?>

  <!-- ✅ Right Content Section -->
  <main class="space-y-8">
<!-- ✅ Right Content Section -->
    <main class="space-y-8">

      <!-- Top Buttons -->
    <div class="flex flex-col items-center gap-4 mt-6">
  <!-- Review My Answers Button -->
  <button
    class="w-full max-w-[400px] h-[60px] bg-[#FFA726] text-white text-base font-semibold rounded-full px-6 py-3 shadow hover:bg-[#fb8c00] transition duration-300"
  >
    Review My Answers
  </button>

  <!-- Re-Attempt This Paper Button -->
  <button
    class="w-full max-w-[400px] h-[60px] bg-[#E60000] text-white text-base font-semibold rounded-full px-6 py-3 shadow hover:bg-red-700 transition duration-300"
  >
    Re-Attempt This Paper
  </button>
</div>

<!-- Adjusted Analytics Cards Section -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-5 max-w-5xl mx-auto my-8 px-4">
  <!-- Card 1 -->
  <div class="bg-white rounded-[10px] shadow-[0_10px_40px_rgba(0,0,0,0.15)] p-6 text-center">
    <h2 class="font-[Manrope] text-[26px] text-gray-700 mb-4 font-semibold">Analytics</h2>
    <img src="../Images/Frame.png" alt="Analytics Chart" class="mx-auto w-[270px] h-[270px]">

    <!-- Bottom Stats -->
    <div class="mt-6 space-y-2">
      <div class="flex items-center justify-center gap-2">
        <div class="w-[14px] h-[14px] bg-[#39CEF3] rounded-full"></div>
        <p class="text-[14px] text-gray-800 font-medium">Correct Questions: 25</p>
      </div>
      <div class="flex items-center justify-center gap-2">
        <div class="w-[14px] h-[14px] bg-[#F3B239] rounded-full"></div>
        <p class="text-[14px] text-gray-800 font-medium">Skipped Questions: 7</p>
      </div>
      <div class="flex items-center justify-center gap-2">
        <div class="w-[14px] h-[14px] bg-[#F36F39] rounded-full"></div>
        <p class="text-[14px] text-gray-800 font-medium">Incorrect Questions: 13</p>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="bg-white rounded-[10px] shadow-[0_10px_40px_rgba(0,0,0,0.15)] p-6 text-center">
    <h2 class="font-[Manrope] text-[26px] text-gray-700 mb-4 font-semibold">Correct Attempts: 25/45</h2>
    <img src="../Images/Circle.png" alt="Correct Attempt Chart" class="mx-auto w-[270px] h-[270px]">

    <!-- Bottom Stats -->
    <div class="mt-6 space-y-2">
      <div class="flex items-center justify-center gap-2">
        <div class="w-[14px] h-[14px] bg-[#39CEF3] rounded-full"></div>
        <p class="text-[14px] text-gray-800 font-medium">Correct: 25</p>
      </div>
      <div class="flex items-center justify-center gap-2">
        <div class="w-[14px] h-[14px] bg-[#F3B239] rounded-full"></div>
        <p class="text-[14px] text-gray-800 font-medium">Skipped: 7</p>
      </div>
      <div class="flex justify-center gap-3 pt-2">
        <div class="w-[12px] h-[12px] bg-[#F36F39] rounded-full"></div>
        <div class="w-[12px] h-[12px] bg-[#6F39F3] rounded-full"></div>
        <div class="w-[12px] h-[12px] bg-[#39F36F] rounded-full"></div>
      </div>
    </div>
  </div>
</div>

      <!-- Stats Section -->
  <div class=" mx-auto bg-white rounded-[10px] shadow-[10px_30px_60px_rgba(0,0,0,0.2)] p-6">
  <div class="flex flex-col gap-6 items-center justify-center">

    <!-- Stat 1 -->
    <div class="flex items-center gap-3">
      <img src="../Images/image 61.png" alt="Score Icon" class="w-[55px] h-[55px]">
      <div>
        <div class="font-[Manrope] text-[18px] font-medium text-gray-700 leading-snug text-center sm:text-left">Total Marks Scored</div>
        <div class="font-[Manrope] text-[28px] font-bold text-gray-900 text-center sm:text-left">25 / 45</div>
      </div>
    </div>

    <!-- Stat 2 -->
    <div class="flex items-center gap-3">
      <img src="../Images/image 62.png" alt="Time Taken" class="w-[55px] h-[55px]">
      <div>
        <div class="font-[Manrope] text-[18px] font-medium text-gray-700 leading-snug text-center sm:text-left">Total Time Taken</div>
        <div class="font-[Manrope] text-[28px] font-bold text-gray-900 text-center sm:text-left">0.72 Mins</div>
      </div>
    </div>

    <!-- Stat 3 -->
    <div class="flex items-center gap-3">
      <img src="../Images/image 63.png" alt="Average Time" class="w-[55px] h-[55px]">
      <div>
        <div class="font-[Manrope] text-[18px] font-medium text-gray-700 leading-snug text-center sm:text-left">Avg Time / Question</div>
        <div class="font-[Manrope] text-[28px] font-bold text-gray-900 text-center sm:text-left">0.72 Mins</div>
      </div>
    </div>

  </div>
</div>


      <!-- Subject Breakdown Table -->
   <div class="max-w-[1100px] mx-auto bg-white rounded-[10px] shadow-[10px_30px_60px_rgba(0,0,0,0.15)] p-6 overflow-x-auto">
  <!-- Top Heading -->
  <h3 class="text-[32px] font-[Manrope] font-medium text-gray-700 mb-6 text-center leading-none">Subject Breakdown</h3>

  <!-- Main Table -->
  <table class="w-full text-left border-collapse font-[Manrope] text-[18px] font-medium leading-none mt-3">
    <thead>
      <tr class="text-gray-600 border-b">
        <th class="py-2 px-4">Icon</th>
        <th class="py-2 px-4">Subject</th>
        <th class="py-2 px-4">Total Attempt</th>
        <th class="py-2 px-4">Time Taken</th>
        <th class="py-2 px-4">Avg Time</th>
        <th class="py-2 px-4">Correct Attempts</th>
      </tr>
    </thead>
    <tbody>
      <tr class="text-sm border-b hover:bg-gray-50 mt-3">
        <td class="py-2 px-4">🧬</td>
        <td class="py-2 px-4">Biology</td>
        <td class="py-2 px-4">29</td>
        <td class="py-2 px-4">8 Mins</td>
        <td class="py-2 px-4">0.28 Mins</td>
        <td class="py-2 px-4">23</td>
      </tr>
    </tbody>
  </table>

  <!-- Bottom Heading -->


  <!-- Correct / Incorrect Table (Centered) -->
  <div class="flex justify-center mt-3">
    <table class="w-[400px] text-center border-collapse font-[Manrope] text-[18px] font-medium leading-none">
      <thead>
        <tr class="text-gray-600 border-b">
          <th class="py-3 px-4">Correct Attempts</th>
          <th class="py-3 px-4">Incorrect Attempts</th>
        </tr>
      </thead>
      <tbody>
        <tr class="text-sm border-b hover:bg-gray-50">
          <td class="py-3 px-4">9</td>
          <td class="py-3 px-4">0</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


      <!-- Final Summary -->
   <div class="max-w-[1311px] mx-auto bg-white rounded-[10px] shadow-[10px_40px_80px_rgba(0,0,0,0.25)] px-8 py-10 text-gray-700">
  <!-- Heading -->
  <h3 class="text-[32px] font-[Manrope] font-medium text-center mb-8 leading-none">Subject Breakdown</h3>

  <!-- Stats List -->
  <div class="grid grid-cols-1 gap-5 font-[Manrope] text-[18px] font-medium leading-[1.5] px-2 sm:px-8">

    <div class="flex justify-between border-b border-gray-200 pb-2">
      <p class="text-left">Avg Time/Question:</p>
      <p class="text-right">0.72 Mins</p>
    </div>

    <div class="flex justify-between border-b border-gray-200 pb-2">
      <p class="text-left">Total Correct Attempts:</p>
      <p class="text-right">25</p>
    </div>

    <div class="flex justify-between border-b border-gray-200 pb-2">
      <p class="text-left">Total Incorrect Attempts:</p>
      <p class="text-right">13</p>
    </div>

    <div class="flex justify-between border-b border-gray-200 pb-2">
      <p class="text-left">Total Skipped:</p>
      <p class="text-right">7</p>
    </div>

    <div class="flex justify-between border-b border-gray-200 pb-2">
      <p class="text-left">Total Attempted:</p>
      <p class="text-right">38</p>
    </div>

    <div class="flex justify-between border-b border-gray-200 pb-2">
      <p class="text-left">Total Questions:</p>
      <p class="text-right">45</p>
    </div>

    <div class="flex justify-between">
      <p class="text-left">Overall Time:</p>
      <p class="text-right">32.4 Mins</p>
    </div>

  </div>
</div>


    </main>
  </main>
</div>


    <script src="js/Quizbuilder.js"></script>

</body>
</html>
