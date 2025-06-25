<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz Builder</title>

   <link href="../../dist/output.css" rel="stylesheet">
   
   <link href="../../dist/input.css" rel="stylesheet">
</head>

<body class="bg-white text-[#3F3F3F] font-sans">
  <header class="lg:hidden fixed top-0 left-0 w-full bg-white shadow-md z-50 px-4 py-3 flex justify-between items-center">
  <button onclick="toggleSidebar()" class="w-6 h-6">
    <img src="../Images/quill_hamburger.png" alt="Menu" class="w-full h-full object-contain" />
  </button>
  <div class="absolute left-1/2 transform -translate-x-1/2">
    <img src="../Images/maxfylogo.png" alt="Logo" class="w-[46px] h-[46px] object-contain" />
  </div>
</header>
  <div class="min-h-screen w-full max-w-screen-2xl mx-auto grid grid-cols-1 lg:grid-cols-[260px_1fr] gap-6">

<!-- 📱 Mobile Overlay -->
<div id="sidebarOverlay"
     class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-40 z-40 hidden lg:hidden"
     onclick="toggleSidebar()">
</div>
  <!-- 📚 Sidebar -->
  <aside id="sidebar"
         class="fixed lg:static top-0 left-0 z-50 bg-white w-[240px] h-screen transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out shadow lg:shadow-none">
    <?php include '../Includes/Sidebar.php'; ?>
  </aside>


    <!-- ✅ Main Content (Fully Adjusted) -->
    <main class="space-y-8 px-4 sm:px-6 py-6">

    <div class="max-w-6xl mx-auto p-4">
    <!-- Header -->
 <div class="text-center py-4">
  <h1 class="text-[28px] font-bold leading-[32px] tracking-[0] text-purple-600">Quiz Builder</h1>
 <p class="mt-2 text-gray-600 font-bold text-[20px] leading-[32px] max-w-[700px] mx-auto text-center h-auto">
  Create custom quiz decks of various chapters and <br>
  <span class="inline-block px-2">subjects using questions</span> from PreMed’s Question Bank,<br>
  and All Past Papers of MDCAT, NUMS, and more!
</p>

</div>


<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-20">
  <div>
    <label class="block mb-1 text-[14px] font-semibold leading-[20px] text-black" style="font-family: 'Manrope', sans-serif;">
      Name your Deck:
    </label>
    <input type="text" class="w-[280px] h-[44px] border border-[#535353] rounded-[6px] px-2 text-sm">
  </div>

  <div>
    <label class="block mb-1 text-[14px] font-semibold leading-[20px] text-black" style="font-family: 'Manrope', sans-serif;">
      Estimated Time:
    </label>
    <input type="text" class="w-[280px] h-[44px] border border-[#535353] rounded-[6px] px-2 text-sm">
  </div>

  <div>
    <label class="block mb-1 text-[14px] font-semibold leading-[20px] text-black" style="font-family: 'Manrope', sans-serif;">
      Choose Stream:
    </label>
    <input type="text" value="MDCAT" readonly placeholder="Choose Stream" class="w-[280px] h-[44px] border border-[#535353] bg-gray-100 rounded-[6px] px-2 text-sm">
  </div>
</div>



<div class="flex flex-col sm:flex-row items-start justify-start gap-4 mt-10">
  <!-- Box 1: TOTAL -->
  <div
    class="text-center w-[220px] h-[200px] px-4 py-5 rounded-[8px] border-[2px] border-gray-300 transition duration-300"
    style="box-shadow: 10px 40px 80px 0px #00000040;">
    <p class="text-[15px] leading-[18px] font-normal text-gray-500" style="font-family: 'Manrope', sans-serif;">
      TOTAL
    </p>
    <p class="text-[34px] leading-[38px] font-bold text-black mt-3" style="font-family: 'Manrope', sans-serif;">
      0
    </p>
    <p class="text-[15px] leading-[18px] font-normal text-gray-500 mt-4" style="font-family: 'Manrope', sans-serif;">
      MCQS Selected
    </p>
  </div>

  <!-- Box 2: VIEW -->
  <div
    class="text-center w-[220px] h-[200px] px-4 py-5 rounded-[8px] border-[2px] border-gray-300 transition duration-300 cursor-pointer"
    style="box-shadow: 10px 40px 80px 0px #00000040;">
    <p class="text-[22px] leading-[28px] font-bold text-black" style="font-family: 'Manrope', sans-serif;">
      VIEW
    </p>
    <p class="text-[15px] leading-[18px] font-normal text-gray-500 mt-4" style="font-family: 'Manrope', sans-serif;">
      Full Quiz Content
    </p>
  </div>
</div>


<!-- ................................................. -->

    <!--     Biology Section -->
<div class="mt-10 p-4 rounded-[10px] bg-[#EDEDED]  mx-auto overflow-y-auto">
  <h2 class="text-[32px] font-bold text-[#673AB7] mb-5" style="font-family: 'Manrope', sans-serif;">
    Physics
  </h2>

  <div class="flex gap-4">
    <!-- Left Column -->
    <div class="w-1/2 space-y-3">
      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Biology and its Major Fields of Specialization</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Biological Molecules</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Cell Structure and Function</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Biodiversity | Variety of Life</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Kingdom Protista</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Kingdom Fungi</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>
    </div>

    <!-- Right Column -->
    <div class="w-1/2 space-y-3">
      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Kingdom Animalia</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Bioenergetics</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Gaseous Exchange</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Transport</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Support and Movement</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Coordination and Control</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>
    </div>
  </div>
</div>






<!-- .............................................................. -->

<div class="mt-10 p-4 rounded-[10px] bg-[#EDEDED]  mx-auto overflow-y-auto">
  <h2 class="text-[32px] font-bold text-[#673AB7] mb-5" style="font-family: 'Manrope', sans-serif;">
    English
  </h2>

  <div class="flex gap-4">
    <!-- Left Column -->
    <div class="w-1/2 space-y-3">
      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Biology and its Major Fields of Specialization</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Biological Molecules</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Cell Structure and Function</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Biodiversity | Variety of Life</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Kingdom Protista</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Kingdom Fungi</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>
    </div>

    <!-- Right Column -->
    <div class="w-1/2 space-y-3">
      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Kingdom Animalia</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Bioenergetics</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Gaseous Exchange</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Transport</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Support and Movement</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Coordination and Control</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>
    </div>
  </div>
</div>

<!-- ................................................. -->

<div class="mt-10 p-4 rounded-[10px] bg-[#EDEDED]  mx-auto overflow-y-auto">
  <h2 class="text-[32px] font-bold text-[#673AB7] mb-5" style="font-family: 'Manrope', sans-serif;">
    Biology
  </h2>

  <div class="flex gap-4">
    <!-- Left Column -->
    <div class="w-1/2 space-y-3">
      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Biology and its Major Fields of Specialization</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Biological Molecules</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Cell Structure and Function</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Biodiversity | Variety of Life</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Kingdom Protista</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Kingdom Fungi</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>
    </div>

    <!-- Right Column -->
    <div class="w-1/2 space-y-3">
      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Kingdom Animalia</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Bioenergetics</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Gaseous Exchange</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Transport</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Support and Movement</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Coordination and Control</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>
    </div>
  </div>
</div>


<!-- ...................................................................... -->

<div class="mt-10 p-4 rounded-[10px] bg-[#EDEDED]  mx-auto overflow-y-auto">
  <h2 class="text-[32px] font-bold text-[#673AB7] mb-5" style="font-family: 'Manrope', sans-serif;">
    Chemistry
  </h2>

  <div class="flex gap-4">
    <!-- Left Column -->
    <div class="w-1/2 space-y-3">
      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Biology and its Major Fields of Specialization</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Biological Molecules</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Cell Structure and Function</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Biodiversity | Variety of Life</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Kingdom Protista</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Kingdom Fungi</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>
    </div>

    <!-- Right Column -->
    <div class="w-1/2 space-y-3">
      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Kingdom Animalia</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Bioenergetics</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Gaseous Exchange</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Transport</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Support and Movement</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>

      <div class="flex justify-between items-center bg-[#EDEDED] p-3 rounded-md">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="w-5 h-5">
          <span style="font-family: 'Manrope', sans-serif;">Coordination and Control</span>
        </label>
        <span class="bg-purple-200 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">112</span>
      </div>
    </div>
  </div>
</div>

  </div>

    <script src="js/Quizbuilder.js"></script>
   <script>
  function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("sidebarOverlay");

    const isOpen = !sidebar.classList.contains("-translate-x-full");
    if (isOpen) {
      sidebar.classList.add("-translate-x-full");
      overlay.classList.add("hidden");
    } else {
      sidebar.classList.remove("-translate-x-full");
      overlay.classList.remove("hidden");
    }
  }
</script>
</body>

</html>


