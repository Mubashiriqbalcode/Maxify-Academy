
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MDCAT Prep Hub</title>
   <link href="/src/input.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="css/Mdcat.css">
    <style>
    
    </style>

</head>

<body class="bg-white font-sans">
    
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

<!-- 📦 Page Layout -->
<div class="flex flex-col lg:flex-row min-h-screen pt-[64px] lg:pt-0">

<!-- Overlay Background (mobile only) -->
<div id="sidebarOverlay" 
     class="fixed top-[64px] left-0 w-full h-[calc(100vh-64px)] bg-black bg-opacity-40 z-30 hidden lg:hidden" 
     onclick="toggleSidebar()">
</div>


<!-- 📚 Sidebar -->
<aside id="sidebar"
  class="fixed lg:static top-0 left-0 z-[60] bg-white w-[240px] h-screen transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out shadow lg:shadow-none">
  <?php include '../Includes/Sidebar.php'; ?>
</aside>


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


  <!-- 📝 Main Content Area -->
  <main class="flex-1 w-full max-w-full px-4 py-6">
      
        
    <!-- This is the new section, designed to be placed within a main content area. -->
 <div class="w-full max-w-[700px] mx-auto px-4 text-left space-y-6 transform scale-[0.9] origin-top">

  <!-- Title -->
  <h2 class="text-[40px] leading-[54px] font-bold text-purple-heading">
    MDCAT Prep Hub
  </h2>

  <!-- Description Paragraph -->
  <p class="text-gray-800 text-lg leading-relaxed max-w-2xl font-medium">
    MDCAT Practice Zone is your one-stop platform for comprehensive MDCAT preparation.<br>
    We offer:
  </p>

<!-- Features List with Checkmarks -->
<div class="flex flex-col sm:flex-row sm:justify-start items-start flex-wrap gap-x-6 gap-y-3 text-gray-800 text-xl font-semibold">
  <span class="flex items-center">
    <i class="fas fa-check-square mr-2 text-2xl" style="color: #18ca28;"></i> Chapter-wise MCQs
  </span>
  <span class="flex items-center">
    <i class="fas fa-check-square mr-2 text-2xl" style="color: #18ca28;"></i> Past Papers
  </span>
  <span class="flex items-center">
    <i class="fas fa-check-square mr-2 text-2xl" style="color: #18ca28;"></i> Mock Tests
  </span>
</div>

</div>



    <div class="w-full max-w-[820px] h-auto bg-[#F3F3F3] rounded-[40px] p-1 
                flex flex-col sm:flex-row items-stretch justify-center mx-auto shadow-sm mt-5" style="margin-top: 40px;">

        <!-- Chapter Wise (Active by default) -->
        <button id="chapterWiseBtn"  data-segment="chapter-wise"
                class="flex-1
                       py-1 px-2 text-xs h-[44px] /* Default/Little */
                       sm:py-2 sm:px-4 sm:text-sm sm:h-[48px] /* Small */
                       md:py-3 md:px-6 md:text-base md:h-[52px] /* Big */
                       rounded-[40px] text-white font-semibold
                       bg-[#673AB7] transition-all duration-300 ease-in-out
                       text-center whitespace-nowrap mb-2 sm:mb-0 sm:mr-1
                       flex items-center justify-center">
            Chapter Wise
        </button>

        <!-- Past Papers -->
        <button id="pastPapersBtn" data-segment="past-papers"
                class="flex-1
                       py-1 px-2 text-xs h-[44px] /* Default/Little */
                       sm:py-2 sm:px-4 sm:text-sm sm:h-[48px] /* Small */
                       md:py-3 md:px-6 md:text-base md:h-[52px] /* Big */
                       rounded-[40px] text-[#6B7280] font-semibold
                       hover:bg-gray-200 transition-all duration-300 ease-in-out
                       text-center whitespace-nowrap mb-2 sm:mb-0 sm:mx-1
                       flex items-center justify-center">
            Past Papers
        </button>

        <!-- Mock Test -->
        <button id="mockTestBtn" data-segment="mock-test"
                class="flex-1
                       py-1 px-2 text-xs h-[44px] /* Default/Little */
                       sm:py-2 sm:px-4 sm:text-sm sm:h-[48px] /* Small */
                       md:py-3 md:px-6 md:text-base md:h-[52px] /* Big */
                       rounded-[40px] text-[#6B7280] font-semibold
                       hover:bg-gray-200 transition-all duration-300 ease-in-out
                       text-center whitespace-nowrap sm:ml-1
                       flex items-center justify-center">
            Mock Test
        </button>
    </div>



  <div id="chapterWiseContent" class="w-full max-w-[1100px] mx-auto space-y-5 mt-5">
        <div id="chapterwise-english">
            <div onclick="toggleChapters('english')" id="header-english"
                 class="cursor-pointer flex items-center justify-between rounded-lg px-4 py-3 shadow-md transition-all inactive-header">
                <div class="flex items-center gap-3">
                    <img src="../Images/english.png" class="w-[48px] h-[48px]" alt="English Icon" />
                    <p class="font-bold text-[22px] leading-[26px]">English</p>
                </div>

                <div class="flex items-center gap-2">
                    <span id="label-english"
                          class="font-normal text-[18px] leading-[24px] tracking-[0] text-[#865ECD] transition-all duration-300"
                          style="font-family: 'Manrope';">
                        Chapters
                    </span>
                    <img id="arrow-english" src="../Images/mingcute_down-fill (2).png"
                         class="w-[24px] h-[24px] transition-transform duration-300" alt="Arrow" />
                </div>
            </div>

            <div id="chapters-english" class="chapter-content bg-[#ededed] rounded-lg px-3 space-y-3 mt-3">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3">
                        <img src="../Images/chap1.png" class="w-[36px] h-[36px]" alt="Chapter 1 Icon" />
                        <span class="text-[18px] font-semibold text-gray-800"> Grammar</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                                style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3">
                        <img src="../Images/chap2.png" class="w-[36px] h-[36px]" alt="Chapter 2 Icon" />
                        <span class="text-[18px] font-semibold text-gray-800"> Vocabulary</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                                style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
            </div>
        </div>
        <div id="chapterwise-physics">
            <div onclick="toggleChapters('physics')" id="header-physics"
                 class="cursor-pointer flex items-center justify-between rounded-lg px-4 py-3 shadow-md transition-all inactive-header">
                <div class="flex items-center gap-3">
                    <img src="../Images/image 14.png" class="w-[48px] h-[48px] rounded-full" alt="Physics Icon" />
                    <p class="font-bold text-[22px] leading-[26px]">Physics</p>
                </div>

                <div class="flex items-center gap-2">
                    <span id="label-physics"
                          class="font-normal text-[18px] leading-[24px] tracking-[0] text-[#865ECD] transition-all duration-300"
                          style="font-family: 'Manrope';">
                        Chapters
                    </span>
                    <img id="arrow-physics" src="../Images/mingcute_down-fill.png"
                         class="w-[24px] h-[24px] transition-transform duration-300" alt="Arrow" />
                </div>
            </div>

            <div id="chapters-physics" class="chapter-content bg-[#ededed] rounded-lg px-3 space-y-3 mt-3">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3">
                        <img src="../Images/chap1.png" class="w-[36px] h-[36px]" alt="Chapter 1 Icon" />
                        <span class="text-[18px] font-semibold text-gray-800"> Grammar</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                                style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3">
                        <img src="../Images/chap2.png" class="w-[36px] h-[36px]" alt="Chapter 2 Icon" />
                        <span class="text-[18px] font-semibold text-gray-800"> Vocabulary</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                                style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
             
            </div>
        </div>
        <div id="chapterwise-chemistry">
            <div onclick="toggleChapters('chemistry')" id="header-chemistry"
                 class="cursor-pointer flex items-center justify-between rounded-lg px-4 py-3 shadow-md transition-all inactive-header">
                <div class="flex items-center gap-3">
                    <img src="../Images/chemis.png" class="w-[48px] h-[48px] rounded-full" alt="Chemistry Icon" />
                    <p class="font-bold text-[22px] leading-[26px]">Chemistry</p>
                </div>

                <div class="flex items-center gap-2">
                    <span id="label-chemistry"
                          class="font-normal text-[18px] leading-[24px] tracking-[0] text-[#865ECD] transition-all duration-300"
                          style="font-family: 'Manrope';">
                        Chapters
                    </span>
                    <img id="arrow-chemistry" src="../Images/mingcute_down-fill.png"
                         class="w-[24px] h-[24px] transition-transform duration-300" alt="Arrow" />
                </div>
            </div>

            <div id="chapters-chemistry" class="chapter-content bg-[#ededed] rounded-lg px-3 space-y-3 mt-3">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3">
                        <img src="../Images/chap1.png" class="w-[36px] h-[36px]" alt="Chapter 1 Icon" />
                        <span class="text-[18px] font-semibold text-gray-800"> Grammar</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                                style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3">
                        <img src="../Images/chap2.png" class="w-[36px] h-[36px]" alt="Chapter 2 Icon" />
                        <span class="text-[18px] font-semibold text-gray-800"> Vocabulary</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                                style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
                
            </div>
        </div>
        <div id="chapterwise-biology">
            <div onclick="toggleChapters('biology')" id="header-biology"
                 class="cursor-pointer flex items-center justify-between rounded-lg px-4 py-3 shadow-md transition-all inactive-header">
                <div class="flex items-center gap-3">
                    <img src="../Images/biology.png" class="w-[48px] h-[48px] rounded-full" alt="Biology Icon" />
                    <p class="font-bold text-[22px] leading-[26px]">Biology</p>
                </div>

                <div class="flex items-center gap-2">
                    <span id="label-biology"
                          class="font-normal text-[18px] leading-[24px] tracking-[0] text-[#865ECD] transition-all duration-300"
                          style="font-family: 'Manrope';">
                        Chapters
                    </span>
                    <img id="arrow-biology" src="../Images/mingcute_down-fill.png"
                         class="w-[24px] h-[24px] transition-transform duration-300" alt="Arrow" />
                </div>
            </div>

            <div id="chapters-biology" class="chapter-content bg-[#ededed] rounded-lg px-3 space-y-3 mt-3">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3">
                        <img src="../Images/chap1.png" class="w-[36px] h-[36px]" alt="Chapter 1 Icon" />
                        <span class="text-[18px] font-semibold text-gray-800"> Grammar</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                                style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3">
                        <img src="../Images/chap2.png" class="w-[36px] h-[36px]" alt="Chapter 2 Icon" />
                        <span class="text-[18px] font-semibold text-gray-800"> Vocabulary</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                                style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
               
            </div>
        </div>
        <div id="chapterwise-reasoning">
            <div onclick="toggleChapters('reasoning')" id="header-reasoning"
                 class="cursor-pointer flex items-center justify-between rounded-lg px-4 py-3 shadow-md transition-all inactive-header">
                <div class="flex items-center gap-3">
                    <img src="../Images/logcal.png" class="w-[48px] h-[48px] rounded-full" alt="Logical Reasoning Icon" />
                    <p class="font-bold text-[22px] leading-[26px]">Logical Reasoning</p>
                </div>

                <div class="flex items-center gap-2">
                    <span id="label-reasoning"
                          class="font-normal text-[18px] leading-[24px] tracking-[0] text-[#865ECD] transition-all duration-300"
                          style="font-family: 'Manrope';">
                        Chapters
                    </span>
                    <img id="arrow-reasoning" src="../Images/mingcute_down-fill.png"
                         class="w-[24px] h-[24px] transition-transform duration-300" alt="Arrow" />
                </div>
            </div>

            <div id="chapters-reasoning" class="chapter-content bg-[#ededed] rounded-lg px-3 space-y-3 mt-3">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3">
                        <img src="../Images/chap1.png" class="w-[36px] h-[36px]" alt="Chapter 1 Icon" />
                        <span class="text-[18px] font-semibold text-gray-800"> Grammar</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                                style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3">
                        <img src="../Images/chap2.png" class="w-[36px] h-[36px]" alt="Chapter 2 Icon" />
                        <span class="text-[18px] font-semibold text-gray-800"> Vocabulary</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                                style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
               
            </div>
        </div>
    </div>


  <!-- ................................................................... -->











    <div id="pastPapersContent" class="w-full max-w-[1100px] mx-auto space-y-5 mt-5 hidden">
        <div id="chapterwise-english">
            <div onclick="toggleChapters('english')" id="header-english"
                class="cursor-pointer flex items-center justify-between bg-[#47287f] text-white rounded-lg px-4 py-3 shadow-md transition-all">

                <div class="flex items-center gap-3">
                    <img src="../Images/Group 16.png" class="w-[48px] h-[48px]" alt="MDCAT 2024 Icon" />
                    <p class="font-bold text-[22px] leading-[26px]">MDCAT 2024</p>
                </div>

                <div class="flex items-center gap-2">
                    <span id="label-english"
                        class="font-normal text-[18px] leading-[24px] tracking-[0] text-[#865ECD] transition-all duration-300"
                        style="font-family: 'Manrope';">
                        5 Papers
                    </span>
                    <img id="arrow-english" src="../Images/mingcute_down-fill.png"
                        class="w-[24px] h-[24px] transition-transform duration-300" alt="Arrow" />
                </div>
            </div>

            <div id="chapters-english" class="chapter-content bg-[#ededed] rounded-lg px-3 mt-3"
                 style="max-height: 0px; overflow: hidden; transition: max-height 0.3s ease-out, opacity 0.3s ease-out; opacity: 0; padding-top: 0; padding-bottom: 0;">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">UHS MDCAT 2024</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">KPK MDCAT 2024</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
               
            </div>
        </div>

        <div id="chapterwise-physics">
            <div onclick="toggleChapters('physics')" id="header-physics"
                class="cursor-pointer flex items-center justify-between bg-[#d9d9d9] text-[#673AB7] rounded-lg px-4 py-3 shadow-md transition-all inactive-header">

                <div class="flex items-center gap-3">
                    <img src="../Images/Group 16.png" class="w-[48px] h-[48px] rounded-full" alt="MDCAT 2023 Icon" />
                    <p class="font-bold text-[22px] leading-[26px]">MDCAT 2023</p>
                </div>

                <div class="flex items-center gap-2">
                    <span id="label-physics"
                        class="font-normal text-[18px] leading-[24px] tracking-[0] text-[#865ECD] transition-all duration-300"
                        style="font-family: 'Manrope';">
                        7 Papers
                    </span>
                    <img id="arrow-physics" src="../Images/mingcute_down-fill.png"
                        class="w-[24px] h-[24px] transition-transform duration-300" alt="Arrow" />
                </div>
            </div>

            <div id="chapters-physics" class="chapter-content bg-[#ededed] rounded-lg px-3 space-y-3 mt-3"
                 style="max-height: 0px; overflow: hidden; transition: max-height 0.3s ease-out, opacity 0.3s ease-out; opacity: 0; padding-top: 0; padding-bottom: 0;">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">Grammar</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">Vocabulary</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
            </div>
        </div>

        <div id="chapterwise-chemistry">
            <div onclick="toggleChapters('chemistry')" id="header-chemistry"
                class="cursor-pointer flex items-center justify-between bg-[#d9d9d9] text-[#673AB7] rounded-lg px-4 py-3 shadow-md transition-all inactive-header">

                <div class="flex items-center gap-3">
                    <img src="../Images/chemis.png" class="w-[48px] h-[48px] rounded-full" alt="MDCAT 2022 Icon" />
                    <p class="font-bold text-[22px] leading-[26px]">MDCAT 2022</p>
                </div>

                <div class="flex items-center gap-2">
                    <span id="label-chemistry"
                        class="font-normal text-[18px] leading-[24px] tracking-[0] text-[#865ECD] transition-all duration-300"
                        style="font-family: 'Manrope';">
                        5 Papers
                    </span>
                    <img id="arrow-chemistry" src="../Images/mingcute_down-fill.png"
                        class="w-[24px] h-[24px] transition-transform duration-300" alt="Arrow" />
                </div>
            </div>

            <div id="chapters-chemistry" class="chapter-content bg-[#ededed] rounded-lg px-3 space-y-3 mt-3"
                 style="max-height: 0px; overflow: hidden; transition: max-height 0.3s ease-out, opacity 0.3s ease-out; opacity: 0; padding-top: 0; padding-bottom: 0;">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">Grammar</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">Vocabulary</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
            </div>
        </div>

        <div id="chapterwise-biology">
            <div onclick="toggleChapters('biology')" id="header-biology"
                class="cursor-pointer flex items-center justify-between bg-[#d9d9d9] text-[#673AB7] rounded-lg px-4 py-3 shadow-md transition-all inactive-header">

                <div class="flex items-center gap-3">
                    <img src="../Images/biology.png" class="w-[48px] h-[48px] rounded-full" alt="Sindh MDCAT Icon" />
                    <p class="font-bold text-[22px] leading-[26px]">Sindh MDCAT</p>
                </div>

                <div class="flex items-center gap-2">
                    <span id="label-biology"
                        class="font-normal text-[18px] leading-[24px] tracking-[0] text-[#865ECD] transition-all duration-300"
                        style="font-family: 'Manrope';">
                        33 Papers
                    </span>
                    <img id="arrow-biology" src="../Images/mingcute_down-fill.png"
                        class="w-[24px] h-[24px] transition-transform duration-300" alt="Arrow" />
                </div>
            </div>

            <div id="chapters-biology" class="chapter-content bg-[#ededed] rounded-lg px-3 space-y-3 mt-3"
                 style="max-height: 0px; overflow: hidden; transition: max-height 0.3s ease-out, opacity 0.3s ease-out; opacity: 0; padding-top: 0; padding-bottom: 0;">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">Grammar</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">Vocabulary</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
            </div>
        </div>

        <div id="chapterwise-reasoning">
            <div onclick="toggleChapters('reasoning')" id="header-reasoning"
                class="cursor-pointer flex items-center justify-between bg-[#d9d9d9] text-[#673AB7] rounded-lg px-4 py-3 shadow-md transition-all inactive-header">

                <div class="flex items-center gap-3">
                    <img src="../Images/logcal.png" class="w-[48px] h-[48px] rounded-full" alt="National MDCAT Icon" />
                    <p class="font-bold text-[22px] leading-[26px]">National MDCAT</p>
                </div>

                <div class="flex items-center gap-2">
                    <span id="label-reasoning"
                        class="font-normal text-[18px] leading-[24px] tracking-[0] text-[#865ECD] transition-all duration-300"
                        style="font-family: 'Manrope';">
                        42 Papers
                    </span>
                    <img id="arrow-reasoning" src="../Images/mingcute_down-fill.png"
                        class="w-[24px] h-[24px] transition-transform duration-300" alt="Arrow" />
                </div>
            </div>

            <div id="chapters-reasoning" class="chapter-content bg-[#ededed] rounded-lg px-3 space-y-3 mt-3"
                 style="max-height: 0px; overflow: hidden; transition: max-height 0.3s ease-out, opacity 0.3s ease-out; opacity: 0; padding-top: 0; padding-bottom: 0;">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">Grammar</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">Vocabulary</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
            </div>
        </div>

       
    </div>

    <div id="mockTestContent" class="hidden mt-5">
         <div id="chapterwise-english">
            <div onclick="toggleChapters('english')" id="header-english"
                class="cursor-pointer flex items-center justify-between bg-[#47287f] text-white rounded-lg px-4 py-3 shadow-md transition-all">

                <div class="flex items-center gap-3">
                    <img src="../Images/Group 16.png" class="w-[48px] h-[48px]" alt="MDCAT 2024 Icon" />
                    <p class="font-bold text-[22px] leading-[26px]">MDCAT 2024</p>
                </div>

                <div class="flex items-center gap-2">
                    <span id="label-english"
                        class="font-normal text-[18px] leading-[24px] tracking-[0] text-[#865ECD] transition-all duration-300"
                        style="font-family: 'Manrope';">
                        5 Papers
                    </span>
                    <img id="arrow-english" src="../Images/mingcute_down-fill.png"
                        class="w-[24px] h-[24px] transition-transform duration-300" alt="Arrow" />
                </div>
            </div>

            <div id="chapters-english" class="chapter-content bg-[#ededed] rounded-lg px-3 mt-3"
                 style="max-height: 0px; overflow: hidden; transition: max-height 0.3s ease-out, opacity 0.3s ease-out; opacity: 0; padding-top: 0; padding-bottom: 0;">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">UHS MDCAT 2024</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">KPK MDCAT 2024</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
              
            </div>
        </div>

        <div id="chapterwise-physics">
            <div onclick="toggleChapters('physics')" id="header-physics"
                class="cursor-pointer flex items-center justify-between bg-[#d9d9d9] text-[#673AB7] rounded-lg px-4 py-3 shadow-md transition-all inactive-header">

                <div class="flex items-center gap-3">
                    <img src="../Images/Group 16.png" class="w-[48px] h-[48px] rounded-full" alt="MDCAT 2023 Icon" />
                    <p class="font-bold text-[22px] leading-[26px]">MDCAT 2023</p>
                </div>

                <div class="flex items-center gap-2">
                    <span id="label-physics"
                        class="font-normal text-[18px] leading-[24px] tracking-[0] text-[#865ECD] transition-all duration-300"
                        style="font-family: 'Manrope';">
                        7 Papers
                    </span>
                    <img id="arrow-physics" src="../Images/mingcute_down-fill.png"
                        class="w-[24px] h-[24px] transition-transform duration-300" alt="Arrow" />
                </div>
            </div>

            <div id="chapters-physics" class="chapter-content bg-[#ededed] rounded-lg px-3 space-y-3 mt-3"
                 style="max-height: 0px; overflow: hidden; transition: max-height 0.3s ease-out, opacity 0.3s ease-out; opacity: 0; padding-top: 0; padding-bottom: 0;">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">Grammar</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">Vocabulary</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
            </div>
        </div>

        <div id="chapterwise-chemistry">
            <div onclick="toggleChapters('chemistry')" id="header-chemistry"
                class="cursor-pointer flex items-center justify-between bg-[#d9d9d9] text-[#673AB7] rounded-lg px-4 py-3 shadow-md transition-all inactive-header">

                <div class="flex items-center gap-3">
                    <img src="../Images/chemis.png" class="w-[48px] h-[48px] rounded-full" alt="MDCAT 2022 Icon" />
                    <p class="font-bold text-[22px] leading-[26px]">MDCAT 2022</p>
                </div>

                <div class="flex items-center gap-2">
                    <span id="label-chemistry"
                        class="font-normal text-[18px] leading-[24px] tracking-[0] text-[#865ECD] transition-all duration-300"
                        style="font-family: 'Manrope';">
                        5 Papers
                    </span>
                    <img id="arrow-chemistry" src="../Images/mingcute_down-fill.png"
                        class="w-[24px] h-[24px] transition-transform duration-300" alt="Arrow" />
                </div>
            </div>

            <div id="chapters-chemistry" class="chapter-content bg-[#ededed] rounded-lg px-3 space-y-3 mt-3"
                 style="max-height: 0px; overflow: hidden; transition: max-height 0.3s ease-out, opacity 0.3s ease-out; opacity: 0; padding-top: 0; padding-bottom: 0;">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">Grammar</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">Vocabulary</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
            </div>
        </div>

        <div id="chapterwise-biology">
            <div onclick="toggleChapters('biology')" id="header-biology"
                class="cursor-pointer flex items-center justify-between bg-[#d9d9d9] text-[#673AB7] rounded-lg px-4 py-3 shadow-md transition-all inactive-header">

                <div class="flex items-center gap-3">
                    <img src="../Images/biology.png" class="w-[48px] h-[48px] rounded-full" alt="Sindh MDCAT Icon" />
                    <p class="font-bold text-[22px] leading-[26px]">Sindh MDCAT</p>
                </div>

                <div class="flex items-center gap-2">
                    <span id="label-biology"
                        class="font-normal text-[18px] leading-[24px] tracking-[0] text-[#865ECD] transition-all duration-300"
                        style="font-family: 'Manrope';">
                        33 Papers
                    </span>
                    <img id="arrow-biology" src="../Images/mingcute_down-fill.png"
                        class="w-[24px] h-[24px] transition-transform duration-300" alt="Arrow" />
                </div>
            </div>

            <div id="chapters-biology" class="chapter-content bg-[#ededed] rounded-lg px-3 space-y-3 mt-3"
                 style="max-height: 0px; overflow: hidden; transition: max-height 0.3s ease-out, opacity 0.3s ease-out; opacity: 0; padding-top: 0; padding-bottom: 0;">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">Grammar</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">Vocabulary</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
            </div>
        </div>

        <div id="chapterwise-reasoning">
            <div onclick="toggleChapters('reasoning')" id="header-reasoning"
                class="cursor-pointer flex items-center justify-between bg-[#d9d9d9] text-[#673AB7] rounded-lg px-4 py-3 shadow-md transition-all inactive-header">

                <div class="flex items-center gap-3">
                    <img src="../Images/logcal.png" class="w-[48px] h-[48px] rounded-full" alt="National MDCAT Icon" />
                    <p class="font-bold text-[22px] leading-[26px]">National MDCAT</p>
                </div>

                <div class="flex items-center gap-2">
                    <span id="label-reasoning"
                        class="font-normal text-[18px] leading-[24px] tracking-[0] text-[#865ECD] transition-all duration-300"
                        style="font-family: 'Manrope';">
                        42 Papers
                    </span>
                    <img id="arrow-reasoning" src="../Images/mingcute_down-fill.png"
                        class="w-[24px] h-[24px] transition-transform duration-300" alt="Arrow" />
                </div>
            </div>

            <div id="chapters-reasoning" class="chapter-content bg-[#ededed] rounded-lg px-3 space-y-3 mt-3"
                 style="max-height: 0px; overflow: hidden; transition: max-height 0.3s ease-out, opacity 0.3s ease-out; opacity: 0; padding-top: 0; padding-bottom: 0;">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">Grammar</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                    <div class="flex items-center gap-3 pl-4"> <span class="text-[18px] font-semibold text-gray-800">Vocabulary</span>
                    </div>
                    <a href="checkbox.html">
                        <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                            style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);">Attempt</button>
                    </a>
                </div>
            </div>
        </div>

    </div>




<!-- ....................................................................... -->







<script src="js/Exmination.js"></script>
</body>
</html>
