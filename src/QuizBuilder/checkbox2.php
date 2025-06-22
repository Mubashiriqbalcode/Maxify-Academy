<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maxify Checkout with Responsive Sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Custom colors or specific overrides if needed.
           The CDN version of Tailwind can be extended via tailwind.config.js
           in a build process, but with CDN, inline styles or custom utility classes
           defined below would be the way.
        */
        .bg-custom-purple {
            background-color: #673AB7; /* A custom purple color for the active sidebar item */
        }
        .text-custom-purple-dark {
            color: #673AB7; /* Darker purple for text if needed */
        }
          
   
        input[type='radio'] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 50%;
            border: 2px solid #D1D5DB; /* gray-300 */
            width: 1.25rem; /* 20px */
            height: 1.25rem; /* 20px */
            cursor: pointer;
            outline: none;
            display: inline-block;
            position: relative;
            flex-shrink: 0;
        }

        input[type='radio']:checked {
            border-color: #2563EB; /* blue-600 */
            background-color: #2563EB; /* blue-600 */
        }

        input[type='radio']:checked::before {
            content: '';
            display: block;
            width: 0.5rem; /* 8px */
            height: 0.5rem; /* 8px */
            background-color: white;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* Specific style for the correct green radio button */
        input[type='radio'].radio-green-checked:checked {
            border-color: #16A34A; /* green-600 */
            background-color: #16A34A; /* green-600 */
        }
      .donut-chart-container {
            width: 120px;
            height: 120px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Equivalent to shadow-lg */
            background-color: white;
            /* Adjust position for responsiveness.
               On smaller screens, you might want it below content or centered.
               For this example, it will float to bottom-right.
            */
            right: 1rem; /* Adjust as needed */
            bottom: 1rem; /* Adjust as needed */
        }

        .donut-chart-svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transform: rotate(-90deg); /* Start from the top */
        }

        .chart-circle {
            fill: none;
            stroke-width: 10;
            stroke-linecap: round; /* For rounded ends of segments */
        }
 @media (min-width: 1024px) {
  .your-container {
    display: block !important; /* or display: initial; or display: unset; */
  }
}


    </style>
</head>

<body class="bg-gray-100 font-sans antialiased flex flex-col lg: min-h-screen">
<div class="flex">
  <!-- Fixed Sidebar -->
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
  <label class="flex items-center h-[70px] rounded-[10px] border-2 border-gray-300 transition-colors duration-150 px-5">
    <input type="radio" name="answer" class="w-[32px] h-[32px] text-blue-600">
    <span class="ml-3 text-gray-700 text-[16px]">Nucleus</span>
  </label>

  <!-- Option 2 -->
  <label class="flex items-center h-[70px] rounded-[10px] border-2 border-gray-300 transition-colors duration-150 px-5">
    <input type="radio" name="answer" class="w-[32px] h-[32px] text-blue-600">
    <span class="ml-3 text-gray-700 text-[16px]">Ribosome</span>
  </label>

  <!-- Option 3 -->
  <label class="flex items-center h-[70px] rounded-[10px] border-2 border-gray-300 transition-colors duration-150 px-5">
    <input type="radio" name="answer" class="w-[32px] h-[32px] text-blue-600">
    <span class="ml-3 text-gray-700 text-[16px]">Mitochondrion</span>
  </label>

  <!-- Option 4 -->
  <label class="flex items-center h-[70px] rounded-[10px] border-2 border-gray-300 transition-colors duration-150 px-5">
    <input type="radio" name="answer" class="w-[32px] h-[32px] text-blue-600">
    <span class="ml-3 text-gray-700 text-[16px]">Golgi Apparatus</span>
  </label>

</div>



    </div>



  </main>
  
</div>

    
    
    <script src="js/Quizbuilder.js"></script>
    </body>

</html>
