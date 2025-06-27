<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maxify Checkout with Responsive Sidebar</title>
   <link href="../../dist/output.css" rel="stylesheet">
   
   <link href="../../dist/input.css" rel="stylesheet">
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
<div class="space-y-4" id="optionContainer">

  <!-- Option 1 -->
  <div class="option-box border-2 border-gray-300 rounded-[10px] px-6 py-4 transition-all duration-300">
    <div class="flex justify-between items-center">
      <div class="flex items-center">
        <input type="radio" name="answer" class="option-radio w-[36px] h-[36px] text-blue-600" value="1">
        <span class="ml-3 text-gray-700 text-[17px]">Nucleus</span>
      </div>
      <button class="explain-btn hidden text-white text-sm font-medium rounded-full px-6 py-2"
        style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Explanation</button>
    </div>
    <div class="explanation-wrapper max-h-0 overflow-hidden transition-all duration-500">
      <p class="text-sm text-gray-600 mt-4">The nucleus is the control center of the cell.</p>
    </div>
  </div>

  <!-- Option 2 -->
  <div class="option-box border-2 border-gray-300 rounded-[10px] px-6 py-4 transition-all duration-300">
    <div class="flex justify-between items-center">
      <div class="flex items-center">
        <input type="radio" name="answer" class="option-radio w-[36px] h-[36px] text-blue-600" value="2">
        <span class="ml-3 text-gray-700 text-[17px]">Ribosome</span>
      </div>
      <button class="explain-btn hidden text-white text-sm font-medium rounded-full px-6 py-2"
        style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Explanation</button>
    </div>
    <div class="explanation-wrapper max-h-0 overflow-hidden transition-all duration-500">
      <p class="text-sm text-gray-600 mt-4">Ribosomes are responsible for protein synthesis.</p>
    </div>
  </div>

  <!-- Option 3 -->
  <div class="option-box border-2 border-gray-300 rounded-[10px] px-6 py-4 transition-all duration-300">
    <div class="flex justify-between items-center">
      <div class="flex items-center">
        <input type="radio" name="answer" class="option-radio w-[36px] h-[36px] text-blue-600" value="3">
        <span class="ml-3 text-gray-700 text-[17px]">Mitochondrion</span>
      </div>
      <button class="explain-btn hidden text-white text-sm font-medium rounded-full px-6 py-2"
        style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Explanation</button>
    </div>
    <div class="explanation-wrapper max-h-0 overflow-hidden transition-all duration-500">
      <p class="text-sm text-gray-600 mt-4">Mitochondria are the powerhouse of the cell.</p>
    </div>
  </div>

  <!-- Option 4 -->
  <div class="option-box border-2 border-gray-300 rounded-[10px] px-6 py-4 transition-all duration-300">
    <div class="flex justify-between items-center">
      <div class="flex items-center">
        <input type="radio" name="answer" class="option-radio w-[36px] h-[36px] text-blue-600" value="4">
        <span class="ml-3 text-gray-700 text-[17px]">Golgi Apparatus</span>
      </div>
      <button class="explain-btn hidden text-white text-sm font-medium rounded-full px-6 py-2"
        style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Explanation</button>
    </div>
    <div class="explanation-wrapper max-h-0 overflow-hidden transition-all duration-500">
      <p class="text-sm text-gray-600 mt-4">The Golgi apparatus modifies and packages proteins.</p>
    </div>
  </div>

</div>

<!-- Script -->
<script>
  const radios = document.querySelectorAll('.option-radio');
  const optionBoxes = document.querySelectorAll('.option-box');

  radios.forEach((radio, index) => {
    radio.addEventListener('change', () => {
      optionBoxes.forEach((box, i) => {
        const btn = box.querySelector('.explain-btn');
        const wrapper = box.querySelector('.explanation-wrapper');

        if (i === index) {
          btn.classList.remove('hidden');
          wrapper.style.maxHeight = '0px'; // Collapse explanation initially
        } else {
          btn.classList.add('hidden');
          wrapper.style.maxHeight = '0px'; // Collapse all others
        }
      });
    });
  });

  const explainButtons = document.querySelectorAll('.explain-btn');
  explainButtons.forEach((btn, index) => {
    btn.addEventListener('click', () => {
      const wrapper = optionBoxes[index].querySelector('.explanation-wrapper');
      const isOpen = wrapper.style.maxHeight && wrapper.style.maxHeight !== '0px';
      wrapper.style.maxHeight = isOpen ? '0px' : wrapper.scrollHeight + 'px';
    });
  });
</script>




    </div>


<div class="flex justify-center items-center gap-2 w-full h-[32px]">

  <!-- Back Arrow -->
  <button class="w-[32px] h-[32px] flex items-center justify-center rounded-[4px] bg-white border border-[#DFE3E8]">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#637381" viewBox="0 0 16 16">
      <path d="M11 14L5 8l6-6" stroke="#637381" stroke-width="2" fill="none" stroke-linecap="round"/>
    </svg>
  </button>

  <!-- Page 1 - Active -->
 <button class="w-[32px] h-[32px] rounded-[4px] bg-white border border-[#DFE3E8] text-sm text-gray-700">
    1
  </button>

  <!-- Page 2 - Default -->
  <button class="w-[32px] h-[32px] rounded-[4px] bg-white border border-[#DFE3E8] text-sm text-gray-700">
    2
  </button>

  <!-- Page 3 - Default -->
  <button class="w-[32px] h-[32px] rounded-[4px] bg-white border border-[#DFE3E8] text-sm text-gray-700">
    3
  </button>

  <!-- Ellipsis -->
  <button class="w-[32px] h-[32px] rounded-[4px] bg-white border border-[#DFE3E8] text-sm text-gray-700">
    ...
  </button>

  <!-- Next Arrow -->
  <button class="w-[32px] h-[32px] flex items-center justify-center rounded-[4px] bg-white border border-[#DFE3E8]">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#637381" viewBox="0 0 16 16">
      <path d="M5 14l6-6-6-6" stroke="#637381" stroke-width="2" fill="none" stroke-linecap="round"/>
    </svg>
  </button>

</div>

  </main>
  
</div>

    
    
    <script src="js/Quizbuilder.js"></script>
    </body>

</html>
