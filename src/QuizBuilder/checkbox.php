<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maxify Checkout with Responsive Sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link rel="stylesheet" href="css/QuizBuilder.css">
</head> 

<body class="bg-gray-100 font-sans antialiased flex flex-col lg: min-h-screen">
<div class="flex">
  <?php
// no isHomePage set here
include '../Includes/Sidebar.php';
?>


  

  <!-- Main Content (pushed to the right) -->
<main class="w-full p-4 space-y-6">
 
   <div class="w-full px-4 py-2 sm:px-6 sm:py-3 flex justify-end">
  <div class="flex flex-wrap items-center gap-2 sm:gap-3">

    <!-- Save Button (Smaller, Compact) -->
    <button class="w-[180px] h-[55px] bg-purple-100 text-purple-700 rounded-[10px]
                   flex items-center justify-center gap-1 text-sm font-medium
                   hover:bg-purple-200 transition duration-200 border-2 border-[#673AB7]">
      <i class="fas fa-bookmark text-purple-600 text-[16px]"></i>
      <span>Save</span>
    </button>

    <!-- Icon Buttons -->
    <button class="w-[48px] h-[55px] rounded-[10px] bg-gray-100 text-gray-700 flex items-center justify-center
                   hover:bg-gray-200 transition duration-200 border-2 border-[#673AB7]">
      <i class="fas fa-info text-gray-600 text-[14px]"></i>
    </button>

    <button class="w-[48px] h-[55px] rounded-[10px] bg-gray-100 text-gray-700 flex items-center justify-center
                   hover:bg-gray-200 transition duration-200 border-2 border-[#673AB7]">
      <i class="fas fa-flag text-gray-600 text-[14px]"></i>
    </button>

    <button class="w-[48px] h-[55px] rounded-[10px] bg-gray-100 text-gray-700 flex items-center justify-center
                   hover:bg-gray-200 transition duration-200 border-2 border-[#673AB7]">
      <i class="fas fa-share-alt text-gray-600 text-[14px]"></i>
    </button>

  </div>
</div>

                   <hr class="w-75 m-auto" style="border-color: rgb(146, 137, 137);">
       <!-- This is the new section. It's designed to be placed within a main content area. -->
    <div class="w-full max-w-4xl  p-6 rounded-lg ">

        <!-- Top Row of Buttons (Modes/Tags) -->
 <div class="flex flex-wrap gap-3 mb-6 font-[Manrope] font-semibold text-[16px] leading-[20px]">

  <!-- Button 1 -->
  <button class="w-[220px] h-[56px] bg-[#B289FA] text-white rounded-[76px]
                 hover:bg-[#A278F0] transition-colors duration-200">
    Sindh MDCAT 2024
  </button>

  <!-- Button 2 -->
  <button class="w-[180px] h-[56px] bg-blue-300 text-white rounded-[76px]
                 hover:bg-blue-400 transition-colors duration-200">
    Tutor Mode
  </button>

  <!-- Button 3 -->
  <button class="w-[110px] h-[56px] bg-orange-400 text-white rounded-[76px]
                 hover:bg-orange-500 transition-colors duration-200">
    Q-1
  </button>

</div>


        <!-- Question Statement -->
<p class="font-[Manrope] font-normal text-[20px] leading-[28px] tracking-[0] text-black mt-4 mb-6">
  1. Which organelle is known as the "powerhouse of the cell"?
</p>



        <!-- Second Row of Buttons (Tools/Hints) -->
       <div class="flex flex-wrap gap-3 mb-6 font-[Manrope] font-semibold text-[16px] leading-[20px]">

  <!-- Elimination Tool Button -->
  <button class="w-[220px] h-[56px] bg-[#B289FA] text-white rounded-[76px]
                 hover:bg-[#A278F0] transition-colors duration-200">
    Elimination Tool
  </button>

  <!-- Hints Button -->
  <button class="w-[180px] h-[56px] bg-blue-300 text-white rounded-[76px]
                 hover:bg-blue-400 transition-colors duration-200">
    Hints
  </button>

</div>


        <!-- Statistics Section -->
<div class="flex flex-col sm:flex-row justify-between items-start relative w-full max-w-[700px] mx-auto px-4 py-8">

  <!-- Users Marked Correct -->
  <div class="w-full sm:w-[316px]">
    <p class="text-black text-sm md:text-base mb-2 font-[Manrope] font-semibold">Users Marked Correct</p>
    <p class="text-black text-[30px] leading-[20px] font-[Manrope] font-bold">83.12%</p>
  </div>

  <!-- Vertical Divider -->
  <div class="hidden sm:block absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 h-[95px] w-px bg-black"></div>

  <!-- Most Users Found It -->
  <div class="w-full sm:w-[286px] sm:ml-auto">
    <p class="text-black text-sm md:text-base mb-2 font-[Manrope] font-semibold">Most Users Found It</p>
    <p class="text-black text-[30px] leading-[20px] font-[Manrope] font-bold">Very Easy</p>
  </div>

</div>


    </div>


         <!-- This is the new section, designed to be placed within a main content area. -->
    <div class="w-full max-w-4xl  p-6 rounded-lg ">

        <!-- Question Counter -->
 <p class="text-black text-[22px] leading-[28px] font-[Manrope] font-normal mb-4">
  Question 1 of 20
</p>



        <!-- Options Container -->
       <div class="space-y-3">
  <!-- Option 1 -->
  <label class="flex items-center rounded-[10px] border-2 border-gray-300 hover:bg-[#089D004A] transition-colors duration-150"
         style="padding: 1.2rem;">
    <input type="radio" name="answer" class="w-[32px] h-[32px] text-blue-600">
    <span class="ml-3 flex-grow text-gray-700 text-[16px]">Nucleus</span>
    <span class="text-gray-500 text-sm">2.60%</span>
  </label>

  <!-- Option 2 (Correct) -->
  <label class="flex items-center rounded-[10px] border-2 border-green-500 bg-green-50 transition-colors duration-150"
         style="padding: 1.2rem;">
    <input type="radio" name="answer" class="w-[32px] h-[32px]" checked>
    <span class="ml-3 flex-grow text-green-700 font-semibold text-[16px]">Ribosome</span>
    <span class="text-green-600 font-bold">83.12%</span>
  </label>

  <!-- Option 3 -->
  <label class="flex items-center rounded-[10px] border-2 border-gray-300 hover:bg-[#089D004A] transition-colors duration-150"
         style="padding: 1.2rem;">
    <input type="radio" name="answer" class="w-[32px] h-[32px] text-blue-600">
    <span class="ml-3 flex-grow text-gray-700 text-[16px]">Mitochondrion</span>
    <span class="text-gray-500 text-sm">10.39%</span>
  </label>

  <!-- Option 4 -->
  <label class="flex items-center rounded-[10px] border-2 border-gray-300 hover:bg-[#089D004A] transition-colors duration-150"
         style="padding: 1.2rem;">
    <input type="radio" name="answer" class="w-[32px] h-[32px] text-blue-600">
    <span class="ml-3 flex-grow text-gray-700 text-[16px]">Golgi Apparatus</span>
    <span class="text-gray-500 text-sm">6.25%</span>
  </label>
</div>

    </div>

    <!-- This is the new section, designed to be placed within a main content area. -->
    <div class="w-full max-w-4xl  p-6 rounded-lg relative pb-20"> <!-- pb-20 for chart space -->

        <!-- Reference Materials Section -->
 <h3 class="text-[22px] leading-[28px] font-[Manrope] font-semibold text-black  mb-4">
  Reference Materials
</h3>


<div class="w-full max-w-[1024px] h-[151px] border-[2px] border-[#AAAAAA] rounded-[10px] px-6 py-4 mb-4 
            flex flex-col sm:flex-row items-center justify-between">

  <!-- Text Section -->
  <div>
    <p class="text-black font-[Manrope] font-semibold text-[20px] leading-[22px]">Punjab-Biology Class 11</p>
    <p class="text-black text-sm">Dummy Text</p>
  </div>

  <!-- Button -->
  <button class="w-[150px] h-[42px] text-white font-[Manrope] font-medium rounded-[30px] border-2
                 transition-colors duration-200 hover:opacity-90 text-sm"
          style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">
    View PDF
  </button>
</div>


 <h3 class="text-[22px] leading-[28px] font-[Manrope] font-semibold text-black  mb-4">
Explanation</h3>
        <!-- Explanation Section -->
  <div class="w-full max-w-[500px] h-[151px] border-[2px] border-[#AAAAAA] rounded-[10px] px-6 py-4 mb-4 
            flex items-center bg-white">

  <!-- Editable Textarea -->
  <textarea class="w-full h-full resize-none text-gray-700 font-[Manrope] font-medium text-[18px] leading-[22px] 
                   focus:outline-none border-none bg-transparent focus:ring-0">
Dummy Text
  </textarea>

</div>



        <!-- Pagination Dots -->
        

       
      <!-- Donut Chart Card -->
<div class="absolute right-4 bottom-4 z-10 hidden sm:block w-[200px] h-[200px] rounded-[16px] bg-[#FAFAFA]"
     style="box-shadow: 10px 40px 80px 0px #00000040;">

  <!-- Inner Content (Centered Vertically) -->
  <div class="flex flex-col justify-center items-center w-full h-full relative pt-4">

    <!-- Top Centered Text -->
    <div class="text-[16px] font-bold text-gray-800 mb-5">
      1%
    </div>

    <!-- Centered Image Below -->
    <img src="../Images/Frame.png" alt="Chart Image" class="w-[90px] h-[90px]" />

  </div>
</div>


    </div>
<div class="flex justify-center py-4">
            <div class="flex space-x-2">
                <span class="block w-2 h-2 bg-purple-600 rounded-full cursor-pointer hover:bg-purple-700 transition-colors duration-150"></span>
                <span class="block w-2 h-2 bg-gray-400 rounded-full cursor-pointer hover:bg-gray-500 transition-colors duration-150"></span>
                <span class="block w-2 h-2 bg-gray-400 rounded-full cursor-pointer hover:bg-gray-500 transition-colors duration-150"></span>
                <span class="block w-2 h-2 bg-gray-400 rounded-full cursor-pointer hover:bg-gray-500 transition-colors duration-150"></span>
                <span class="block w-2 h-2 bg-gray-400 rounded-full cursor-pointer hover:bg-gray-500 transition-colors duration-150"></span>
                <span class="text-gray-500 px-1">...</span> <!-- Ellipsis -->
                <span class="block w-2 h-2 bg-gray-400 rounded-full cursor-pointer hover:bg-gray-500 transition-colors duration-150"></span>
                <span class="block w-2 h-2 bg-gray-400 rounded-full cursor-pointer hover:bg-gray-500 transition-colors duration-150"></span>
            </div>
        </div>
  </main>
  
</div>

    <div class="w-full px-4 py-6 space-y-6">

</div>
    <script src="js/Quizbuilder.js"></script>
    </body>

</html>
