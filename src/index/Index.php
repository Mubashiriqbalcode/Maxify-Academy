<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxify Academy</title>
    <link href="/src/input.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<!-- Slick Carousel CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
 <link rel="stylesheet" href="css/index.css">
<style>
    .card-active {
      color: white !important;
      background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%) !important;
      box-shadow: 15px 25px 250px 0px #00000040 !important;
    }
    .card-active h2,
    .card-active p,
    .card-active h3 {
      color: white !important;
    }
</style>

</head>

<body>

<!-- MOBILE HEADER -->
<header class="lg:hidden flex justify-between items-center px-4 py-3 bg-white shadow-md fixed top-0 left-0 w-full z-50">
  <!-- Sidebar Toggle Button -->
  <button onclick="toggleSidebar()" class="w-[21px] h-[21px]">
    <img src="../Images/quill_hamburger.png" alt="Menu Icon" class="w-full h-full object-contain" />
  </button>

  <!-- Centered Logo -->
  <div class="absolute left-1/2 transform -translate-x-1/2">
    <img src="../Images/maxfylogo.png" alt="Logo" class="w-[46px] h-[46px] object-contain" />
  </div>
</header>

<!-- MAIN WRAPPER -->
<div class="grid lg:grid-cols-[260px_1fr] min-h-screen pt-[60px] lg:pt-0 ">

  <!-- SIDEBAR -->
<aside
  id="mobileSidebar"
  class="fixed lg:static lg:translate-x-0 top-0 left-0 h-full lg:h-auto w-[250px] lg:w-full bg-[#E4E4E4] shadow-lg 
         z-60 transform -translate-x-full lg:transform-none transition-transform duration-300">
  
  <!-- Close Button (Visible on Mobile Only) -->
  <div class="flex justify-end p-3 lg:hidden">
    <button onclick="toggleSidebar()" class="text-[#673AB7] font-bold text-xl">
      ✕
    </button>
  </div>

  <?php
    $isHomePage = true;
    include '../Includes/Sidebar.php';
  ?>
</aside>



  <!-- MAIN CONTENT -->
  <main class="w-full p-4 lg:p-6 xl:p-8 space-y-10 overflow-hidden">
    <div class="w-full max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-[2fr_1fr] gap-6">

      <!-- LEFT SECTION -->
      <section class="space-y-6">
        <div class="text-2xl sm:text-3xl font-bold leading-snug">
          <h1>Welcome to <span class="text-[#673AB7] text-3xl sm:text-4xl">MaXify</span> Academy</h1>
          <h2 class="text-[#673AB7] text-2xl sm:text-3xl font-bold mt-4">
            Pakistan’s #1 Platform for your Entrance Exams
          </h2>
        </div>

        <!-- BUTTONS GRID -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
          <!-- MDCAT -->
          <div class="rounded-lg flex items-center justify-around p-2 h-[48px] text-red-700 hover:bg-red-50 transition"
               style="border: 1px solid #FF0000; box-shadow: 4px 19px 20px -15px #FF0000;">
            <img src="../Images/mdi_doctor.png" alt="MDCAT Icon" class="w-5 h-5">
            <span class="text-sm font-semibold">MDCAT</span>
          </div>

          <!-- AI -->
          <div class="rounded-lg flex items-center justify-around p-2 h-[48px] text-blue-700 hover:bg-blue-50 transition"
               style="border: 1px solid #0B50B8; box-shadow: 4px 19px 20px -15px #0B50B8;">
            <img src="../Images/mingcute_ai-fill.png" alt="AI Icon" class="w-5 h-5">
            <span class="text-sm font-semibold">AI Quiz Builder</span>
          </div>

          <!-- NUMS -->
          <div class="rounded-lg flex items-center justify-around p-2 h-[48px] text-green-700 hover:bg-green-50 transition"
               style="border: 1px solid #079200; box-shadow: 4px 19px 20px -15px #08A300;">
            <img src="../Images/ion_document.png" alt="NUMS Icon" class="w-5 h-5">
            <span class="text-sm font-semibold">NUMS</span>
          </div>

          <!-- Shortlisting -->
      <a href="../Shortlisting/Shortlisting.php"class="rounded-lg flex items-center justify-around p-2 h-[48px] text-blue-800 hover:bg-blue-50 transition" style="border: 1px solid #052452; box-shadow: 4px 19px 20px -15px #0B50B8;"
>
  <img src="../Images/fluent_clipboard-task-list-20-filled.png" alt="Shortlisting" class="w-5 h-5 mr-2">
  <span class="text-sm font-semibold">Shortlisting</span>
</a>

          <!-- F.SC -->
          <div class="rounded-lg flex items-center justify-around p-2 h-[48px] text-green-700 hover:bg-green-50 transition"
               style="border: 1px solid; border-image-source: linear-gradient(90deg, #089D00 0%, #033700 100%);
               border-image-slice: 1; box-shadow: 4px 19px 20px -15px #089D00;">
            <img src="../Images/wpf_books.png" alt="F.SC Icon" class="w-5 h-5">
            <span class="text-sm font-semibold">F.SC</span>
          </div>

          <!-- Flashcards -->
          <div class="rounded-lg flex items-center justify-around p-2 h-[48px] text-red-800 hover:bg-red-50 transition"
               style="border: 1px solid; border-image-source: linear-gradient(90deg, #990000 0%, #330000 100%);
               border-image-slice: 1; box-shadow: 4px 19px 20px -15px #990000;">
            <img src="../Images/solar_card-bold.png" alt="Flashcards" class="w-5 h-5">
            <span class="text-sm font-semibold">Flashcards</span>
          </div>
        </div>

        <!-- Discount Timer -->
<section class="my-10 font-[Manrope]">
  <!-- Heading -->
  <h2 class="text-[#673AB7] font-bold mb-6 leading-[41px] text-[18px] lg:text-3xl">
    Discount Ends In
  </h2>

  <!-- Flex Layout (Always Row) -->
  <div class="flex items-center justify-start gap-4 flex-nowrap">

    <!-- Timer -->
    <div class="flex-shrink-0 flex justify-center items-center w-[124px] h-[124px] md:w-36 md:h-36 lg:w-44 lg:h-44 rounded-full animate-pulse transition duration-300"
      style="background: linear-gradient(180deg, #E1E1E1 0%, #FFFFFF 100%);
             box-shadow: 0px 40.27px 80.53px 0px #3333332A,
                         inset 0px 10.65px 10.65px 0px #FFFFFF,
                         inset 0px -10.65px 10.65px 0px #D9D9D9;">
      <h3 id="timer" class="text-[#673AB7] font-bold leading-none text-[16px] md:text-xl lg:text-2xl">
        00:00:00
      </h3>
    </div>

    <!-- Button + Text -->
    <div class="space-y-2 text-left">
      <button class="rounded-[30px] transition hover:opacity-90
        text-white font-semibold leading-[22px] text-[12px] md:text-[15px]
        w-[100px] h-[29px] md:w-[178px] md:h-[42px]
        px-[19px] py-[8px] md:px-[39px] md:py-[12px]"
        style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%)">
        Avail Now
      </button>
      <p class="font-semibold text-[6px] md:text-sm leading-[22px] text-black">
        Join Our Guidance Community
      </p>
    </div>

  </div>
</section>

      </section>

      <!-- RIGHT SECTION (Achievers) -->
      <aside class="px-2 py-3 lg:p-0">
        <h2 class="font-[Manrope] font-bold text-[24px] text-center leading-[22px] text-[#673AB7] mb-4">
          Our High Achievers
        </h2>

        <div class="flex flex-col justify-center items-center">
          <div class="relative border-2 rounded-xl flex justify-center border-[#673AB7] w-52 h-60 bg-[#E4D5FF] overflow-hidden">
            <div class="absolute -top-2 -right-2 z-10">
              <img src="../Images/medal.png" alt="medal" class="w-[30px] h-[30px]">
            </div>
            <img src="../Images/achiver.png" alt="Achiever" class="object-contain h-full px-2">
          </div>

          <div class="flex flex-col relative -mt-6 justify-center text-center bg-[#673AB7] text-white rounded-xl w-40 py-1 px-2 text-xs font-semibold shadow">
            <p>Mubashir Iqbal</p>
            <p>200/200</p>
            <p>MDCAT</p>
          </div>
        </div>
      </aside>
    </div>
  </main>
</div>

<!-- Sidebar Toggle Script -->
<script>
  function toggleSidebar() {
    const sidebar = document.getElementById('mobileSidebar');
    sidebar.classList.toggle('-translate-x-full');
  }
</script>






<main class="w-full px-4 py-10 max-w-[1440px] mx-auto space-y-20">
<div class="text-center mt-10 space-y-5 px-4 lg:px-0 font-[Manrope]">
  <!-- Bigger Heading -->
  <h1 class="text-[#673AB7] text-[30px] sm:text-[38px] md:text-[46px] leading-[42px] font-bold">
    Trusted By 90K+ Students
  </h1>

  <!-- Stats Section -->
  <div class="mt-8 flex flex-wrap justify-center gap-8 sm:gap-12">

    <!-- Success Rate -->
    <div class="space-y-2 text-center">
      <h2 class="text-[#673AB7] text-[32px] sm:text-[38px] md:text-[44px] leading-[42px] font-bold">
        97%
      </h2>
      <p class="text-[#535353] text-[18px] sm:text-[20px] md:text-[22px] font-semibold leading-[30px]">
        Success Rate
      </p>
    </div>

    <!-- MCQ Attempts -->
    <div class="space-y-2 text-center">
      <h2 class="text-[#673AB7] text-[32px] sm:text-[38px] md:text-[44px] leading-[42px] font-bold">
        500K
      </h2>
      <p class="text-[#535353] text-[18px] sm:text-[20px] md:text-[22px] font-semibold leading-[30px]">
        MCQ Attempts
      </p>
    </div>

    <!-- Minutes Spent -->
    <div class="space-y-2 text-center">
      <h2 class="text-[#673AB7] text-[32px] sm:text-[38px] md:text-[44px] leading-[42px] font-bold">
        1650K
      </h2>
      <p class="text-[#535353] text-[18px] sm:text-[20px] md:text-[22px] font-semibold leading-[30px]">
        Minutes Spent
      </p>
    </div>

  </div>
</div>



<!-- ...................................................................... -->


<div class="space-y-10 px-4 lg:px-0">
  
  <!-- Heading 1 (Slightly increased) -->
<div class="pt-8 font-[Manrope] px-4 lg:px-20">
  <!-- Heading -->
  <h1 class="text-[#535353] text-[24px] sm:text-[28px] md:text-[32px] lg:text-[36px] leading-[36px] font-bold text-start">
    What are you <span class="text-[#673AB7]">looking</span> for?
  </h1>

  <!-- Button Group -->
  <div class="flex flex-col lg:flex-row items-center justify-center gap-4 sm:gap-5 lg:gap-6 mt-6">
    
    <!-- Entrance Exams Button -->
    <div class="w-[138px] h-[40px] rounded-[5px] border border-[#FF0000] shadow-[4px_19px_20px_-15px_#FF0000] flex items-center justify-center bg-white">
      <button class="text-[12px] leading-[22px] font-medium bg-clip-text text-transparent" 
              style="background-image: linear-gradient(180deg, #FF0000 0%, #990000 100%);">
        Entrance Exams
      </button>
    </div>

    <!-- Board Exams Button -->
    <div class="w-[138px] h-[40px] rounded-[5px] border border-[#0B50B8] shadow-[4px_19px_20px_-15px_#0B50B8] flex items-center justify-center"
         style="background: linear-gradient(180deg, #0B50B8 0%, #052452 100%);">
      <button class="text-[12px] leading-[22px] font-medium text-white">
        Board Exams
      </button>
    </div>

    <!-- Other Exams Button -->
    <div class="w-[138px] h-[40px] rounded-[5px] border border-[#079200] shadow-[4px_19px_20px_-15px_#08A300] flex items-center justify-center bg-white">
      <button class="text-[12px] leading-[22px] font-medium bg-clip-text text-transparent"
              style="background-image: linear-gradient(180deg, #089D00 0%, #033700 100%);">
        Other Exams
      </button>
    </div>

  </div>
</div>


  <!-- Heading 2 (Kept the same) -->


<!-- .................................................................... -->
<div class="pt-10 px-4 lg:px-20">
  <h1 class="text-[#535353] text-[24px] sm:text-[28px] md:text-[32px] lg:text-[36px] leading-[36px] font-bold text-start font-[Manrope]">
    We have everything for you
  </h1>
</div>


<!-- Desktop layout: lg and above -->
 <div class="hidden lg:flex flex-wrap justify-center items-start gap-6 max-w-[1240px] mx-auto mt-16 px-4">


    <!-- Card Template Start -->
    <div onclick="activateCard(this)" class="card bg-white shadow-[10px_15px_100px_6px_rgba(0,0,0,0.15)] transition-all duration-300 cursor-pointer rounded-[10px] p-4 w-[300px] h-[400px] relative">
      <h2 class="text-transparent text-[28px] font-bold leading-[32px] bg-clip-text bg-gradient-to-b from-[#0B50B8] to-[#052452]">70,000+</h2>
      <p class="text-[#535353] text-[18px] font-medium leading-[28px] mt-3">MCQ’s with Detailed Explanation</p>
      <p class="text-[#535353] text-[18px] font-medium leading-[28px] mt-1">On your One click Away</p>
      <div class="absolute bottom-4 right-4 w-[90px] h-[90px]">
        <img src="../Images/card1.png" alt="MCQ Icon" class="w-full h-full object-contain">
      </div>
    </div>

    <div onclick="activateCard(this)" class="card bg-white shadow-[10px_15px_100px_6px_rgba(0,0,0,0.15)] transition-all duration-300 cursor-pointer rounded-[10px] p-4 w-[300px] h-[400px] relative">
      <h2 class="text-transparent text-[28px] font-bold leading-[32px] bg-clip-text bg-gradient-to-b from-[#0B50B8] to-[#052452]">Real Time</h2>
      <p class="text-[#535353] text-[18px] font-medium leading-[28px] mt-3">Stats And Analysis</p>
      <div class="absolute bottom-4 right-4 w-[90px] h-[90px]">
        <img src="../Images/card2.png" alt="Stats Icon" class="w-full h-full object-contain">
      </div>
    </div>

    <div onclick="activateCard(this)" class="card bg-white shadow-[10px_15px_100px_6px_rgba(0,0,0,0.15)] transition-all duration-300 cursor-pointer rounded-[10px] p-4 w-[300px] h-[400px] relative">
      <h2 class="text-transparent text-[28px] font-bold leading-[32px] bg-clip-text bg-gradient-to-b from-[#0B50B8] to-[#052452]">AI Quiz</h2>
      <p class="text-[#535353] text-[18px] font-medium leading-[28px] mt-3">Make full length papers with just one click.</p>
      <div class="absolute bottom-4 right-4 w-[90px] h-[90px]">
        <img src="../Images/card3.png" alt="AI Icon" class="w-full h-full object-contain">
      </div>
    </div>

    <div onclick="activateCard(this)" class="card bg-white shadow-[10px_15px_100px_6px_rgba(0,0,0,0.15)] transition-all duration-300 cursor-pointer rounded-[10px] p-4 w-[300px] h-[400px] relative">
      <h2 class="text-[28px] font-bold leading-[32px] text-[#0B50B8]">Lectures</h2>
      <p class="text-[#535353] text-[18px] font-medium leading-[28px] mt-3">Watch our Lectures for best exam preparation</p>
      <div class="absolute bottom-4 right-4 w-[90px] h-[90px]">
        <img src="../Images/card4.png" alt="Lectures Icon" class="w-full h-full object-contain">
      </div>
    </div>

    <div onclick="activateCard(this)" class="card bg-white shadow-[10px_15px_100px_6px_rgba(0,0,0,0.15)] transition-all duration-300 cursor-pointer rounded-[10px] p-4 w-[300px] h-[400px] relative">
      <h2 class="text-transparent text-[28px] font-bold leading-[32px] bg-clip-text bg-gradient-to-b from-[#0B50B8] to-[#052452]">Video Solutions</h2>
      <p class="text-[#535353] text-[18px] font-medium leading-[28px] mt-3">Master your concepts with our video lectures</p>
      <div class="flex items-center mt-3">
        <h3 class="text-[18px] font-bold text-[#0B50B8]">Coming Soon!</h3>
        <img src="../Images/card5.png" alt="Video Icon" class="w-[70px] h-[70px] object-contain ml-2">
      </div>
    </div>

    <div onclick="activateCard(this)" class="card bg-white shadow-[10px_15px_100px_6px_rgba(0,0,0,0.15)] transition-all duration-300 cursor-pointer rounded-[10px] p-4 w-[300px] h-[400px] relative">
      <h2 class="text-transparent text-[28px] font-bold leading-[32px] bg-clip-text bg-gradient-to-b from-[#0B50B8] to-[#052452]">Flashcards</h2>
      <p class="text-[#535353] text-[18px] font-medium leading-[28px] mt-3">Explore our Flashcards for the best Revisions</p>
      <div class="absolute bottom-4 right-4 w-[90px] h-[90px]">
        <img src="../Images/card6.png" alt="Flashcard Icon" class="w-full h-full object-contain">
      </div>
    </div>
    <!-- Card Template End -->

  </div>

  <script>
    function activateCard(card) {
      document.querySelectorAll('.card').forEach(c => {
        c.classList.remove('card-active');
      });
      card.classList.add('card-active');
    }
  </script>
<!-- MOBILE LAYOUT ONLY -->
<div class="block lg:hidden max-w-[600px] mx-auto mt-12 p-4 font-[Manrope]">
  <div class="grid grid-cols-2  gap-x-4 justify-items-center">

    <!-- Card Template Start -->
    <div onclick="activateMobileCard(this)" class="mobile-card bg-white rounded-[10px] p-4 w-[160px] h-[150px] relative shadow-[10px_10px_80px_6px_#00000020]">
      <h2 class="text-transparent bg-clip-text font-bold text-[18px] leading-[28px]"
        style="background-image: linear-gradient(180deg, #0B50B8 0%, #052452 100%)">70,000+</h2>
      <p class="text-[#535353] font-medium text-[10px] leading-[16px] mt-1">MCQ’s with Detailed Explanation</p>
      <p class="text-[#535353] font-medium text-[10px] leading-[16px]">On your One click Away</p>
      <div class="absolute bottom-2 left-2 w-[38px] h-[38px]">
        <img src="../Images/card1.png" alt="MCQ Icon" class="w-full h-full object-contain">
      </div>
    </div>

    <div onclick="activateMobileCard(this)" class="mobile-card mt-12 bg-white rounded-[10px] p-4 w-[160px] h-[150px] relative shadow-[10px_10px_80px_6px_#00000020]">
      <h2 class="text-transparent bg-clip-text font-bold text-[18px] leading-[28px]"
        style="background-image: linear-gradient(180deg, #0B50B8 0%, #052452 100%)">Real Time</h2>
      <p class="text-[#535353] font-medium text-[10px] leading-[16px] mt-1">Stats And Analysis</p>
      <div class="absolute bottom-2 right-2 w-[38px] h-[38px]">
        <img src="../Images/card2.png" alt="Stats Icon" class="w-full h-full object-contain">
      </div>
    </div>

    <div onclick="activateMobileCard(this)" class="  mobile-card bg-white rounded-[10px] p-4 w-[160px] h-[150px] relative shadow-[10px_10px_80px_6px_#00000020]">
      <h2 class="text-transparent bg-clip-text font-bold text-[18px] leading-[28px]"
        style="background-image: linear-gradient(180deg, #0B50B8 0%, #052452 100%)">AI Quiz</h2>
      <p class="text-[#535353] font-medium text-[10px] leading-[16px] mt-1">Make full length papers with just one click.</p>
      <div class="absolute bottom-2 left-2 w-[38px] h-[38px]">
        <img src="../Images/card3.png" alt="AI Icon" class="w-full h-full object-contain">
      </div>
    </div>

    <div onclick="activateMobileCard(this)" class="mobile-card mt-12 bg-gradient-to-b from-[#673AB7] to-[#2E1A51] text-white rounded-[10px] p-4 w-[160px] h-[150px] relative shadow-[10px_10px_80px_6px_#00000020]">
      <h2 class="font-bold text-[18px] leading-[28px]">Lectures</h2>
      <p class="font-medium text-[10px] leading-[16px] mt-1">Watch our Lectures for best exam preparation</p>
      <div class="absolute bottom-2 right-2 w-[38px] h-[38px]">
        <img src="../Images/card4.png" alt="Lectures Icon" class="w-full h-full object-contain">
      </div>
    </div>

    <div onclick="activateMobileCard(this)" class="mobile-card bg-white rounded-[10px] p-4 w-[160px] h-[150px] relative shadow-[10px_10px_80px_6px_#00000020]">
      <h2 class="text-transparent bg-clip-text font-bold text-[18px] leading-[28px]"
        style="background-image: linear-gradient(180deg, #0B50B8 0%, #052452 100%)">Video Solutions</h2>
      <p class="text-[#535353] font-medium text-[10px] leading-[16px] mt-1">Master your concepts with our video lectures</p>
      <div class="absolute bottom-2 left-2 w-[38px] h-[38px]">
        <img src="../Images/card5.png" alt="Video Icon" class="w-full h-full object-contain">
      </div>
    </div>

    <div onclick="activateMobileCard(this)" class="mobile-card mt-12 bg-white rounded-[10px] p-4 w-[160px] h-[150px] relative shadow-[10px_10px_80px_6px_#00000020]">
      <h2 class="text-transparent bg-clip-text font-bold text-[18px] leading-[28px]"
        style="background-image: linear-gradient(180deg, #0B50B8 0%, #052452 100%)">Flashcards</h2>
      <p class="text-[#535353] font-medium text-[10px] leading-[16px] mt-1">Explore our Flashcards for the best Revisions</p>
      <div class="absolute bottom-2 right-2 w-[38px] h-[38px]">
        <img src="../Images/card6.png" alt="Flashcard Icon" class="w-full h-full object-contain">
      </div>
    </div>
    <!-- Card Template End -->

  </div>
</div>

<script>
  function activateMobileCard(card) {
    document.querySelectorAll('.mobile-card').forEach(c => {
      c.classList.remove('bg-gradient-to-b', 'from-[#673AB7]', 'to-[#2E1A51]', 'text-white');
      c.querySelectorAll('h2, p').forEach(el => {
        el.classList.remove('text-white');
        if (el.tagName === 'H2') {
          el.classList.add('text-transparent', 'bg-clip-text');
          el.style.backgroundImage = 'linear-gradient(180deg, #0B50B8 0%, #052452 100%)';
        }
      });
    });

    card.classList.add('bg-gradient-to-b', 'from-[#673AB7]', 'to-[#2E1A51]', 'text-white');
    card.querySelectorAll('h2, p').forEach(el => {
      el.classList.add('text-white');
      if (el.tagName === 'H2') {
        el.classList.remove('text-transparent', 'bg-clip-text');
        el.style.backgroundImage = 'none';
      }
    });
  }
</script>










<!-- .................................................................................? -->
<!-- Desktop and Laptop Only -->
<div class="hidden lg:flex flex-row items-center justify-between  max-w-screen-lg mx-auto">

  <!-- Text Column -->
  <div class="w-1/2 text-left space-y-5">
    <h2 class="text-[38px] leading-[54px] font-semibold text-[#535353]">
      The New Revolution<br>is Here
    </h2>

    <h1 class="text-[52px] leading-[64px] font-bold bg-clip-text text-transparent"
        style="background-image: linear-gradient(180deg, #0B50B8 0%, #052452 100%)">
      AI Quiz<br>Generator
    </h1>

    <p class="text-[18px] font-medium text-[#535353]">
      Less Practice. Best Results
    </p>

    <div class="flex flex-wrap justify-start gap-3 pt-3">
      <button class="text-white text-[14px] leading-[22px] font-semibold rounded-[30px] px-[30px] py-[10px]"
              style="background: linear-gradient(180deg, #FF0000 0%, #990000 100%)">
        Generate FLP
      </button>

      <button class="text-white text-[14px] leading-[22px] font-semibold rounded-[30px] px-[30px] py-[10px]"
              style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%)">
        Go to Quiz Builder
      </button>
    </div>
  </div>

  <!-- Image Column -->
  <div class="w-1/2 flex justify-end">
    <img src="../Images/image 33.png" alt="AI Quiz Generator"
         class="w-[380px] h-[480px] object-contain">
  </div>

</div>
<!-- Mobile and Tablet Only -->

<div class="flex flex-row items-center justify-start gap-4 py-8 max-w-screen-lg mx-auto px-1 lg:hidden">

  <!-- Text Column -->
  <div class="w-1/2 text-left space-y-3">
    <!-- Headline -->
    <h2 class="font-semibold text-[16px] leading-[20px] text-[#535353] font-[Manrope]">
      The New Revolution<br>is Here
    </h2>

    <!-- Title -->
    <h1 class="font-bold text-[26px] leading-[30px] text-transparent bg-clip-text font-[Manrope]"
        style="background-image: linear-gradient(180deg, #0B50B8 0%, #052452 100%)">
      AI Quiz<br>Generator
    </h1>

    <!-- Subtext -->
    <p class="text-[15px] font-medium text-[#535353] font-[Manrope]">
      Less Practice. Best Results
    </p>

    <!-- Buttons -->
    <div class="flex flex-wrap justify-start gap-2 pt-3">
      <!-- Button 1 -->
      <button class="text-white text-[11px] leading-[22px] font-semibold rounded-[30px] font-[Manrope] w-[108px] h-[30px]"
              style="background: linear-gradient(180deg, #FF0000 0%, #990000 100%)">
        Generate FLP
      </button>

      <!-- Button 2 -->
      <button class="text-white text-[11px] leading-[22px] font-semibold rounded-[30px] font-[Manrope] w-[108px] h-[30px]"
              style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%)">
        Go to Quiz Builder
      </button>
    </div>
  </div>

  <!-- Image Column -->
  <div class="w-1/2 flex justify-center">
    <img src="../Images/image 33.png" alt="AI Quiz Generator"
         class="w-[120px] h-[150px] rounded-[12px] object-contain">
  </div>

</div>




<!-- .......................................................... -->
<div class="grid grid-cols-2 items-start gap-4 px-2 py-4 bg-white max-w-screen-xl mx-auto lg:hidden">

  <!-- Left Content -->
  <div class="text-left space-y-3">
    <!-- Title -->
    <h2 class="font-[600] text-[14px] leading-[18px] text-[#535353] font-[Manrope]">
      Download Our App
    </h2>

    <!-- Subtitle -->
    <h1 class="text-transparent bg-clip-text bg-gradient-to-b from-[#0B50B8] to-[#052452]
               font-[700] text-[24px] leading-[27px] font-[Manrope]">
      Maxify Academy App
    </h1>

    <!-- Tagline -->
    <p class="text-[13px] font-medium text-[#535353] font-[Manrope]">
      Less Practice. Best Results
    </p>

    <!-- Button -->
    <div class="flex items-center gap-3 pt-1">
      <button class="text-white font-[600] text-[10px] leading-[22px] rounded-[30px] font-[Manrope] px-[19px] py-[4px]"
              style="background: linear-gradient(180deg, #FF0000 0%, #990000 100%); width: 100px;">
        Generate FLP
      </button>
    </div>
  </div>

  <!-- Right Image -->
  <div class="flex justify-end items-center">
    <img src="../Images/image 35.png" alt="Maxify App Screenshot"
         class="w-[180px] h-[200px] object-contain">
  </div>

</div>



<!-- ✅ Desktop / Large Screen View (lg and up only) -->
<div class="hidden lg:flex flex-col lg:flex-row items-center justify-between gap-10 px-16 py-14 bg-white max-w-screen-xl mx-auto">
  <!-- Left Content -->
  <div class="w-full lg:w-1/2 text-left space-y-5">
    <h2 class="text-[44px] leading-[60px] font-semibold text-[#535353] font-[Manrope]">
      Download Our App
    </h2>

    <h1 class="text-transparent bg-clip-text bg-gradient-to-b from-[#0B50B8] to-[#052452]
               font-[700] text-[60px] leading-[68px] font-[Manrope]">
      Maxify Academy App
    </h1>

    <p class="text-[20px] font-medium text-[#535353] font-[Manrope]">
      Less Practice. Best Results
    </p>

    <div class="flex flex-wrap lg:flex-nowrap items-center gap-4 pt-2">
      <button class="text-white font-[600] text-[15px] leading-[22px] rounded-[30px] font-[Manrope] px-[30px] py-[10px]"
              style="background: linear-gradient(180deg, #FF0000 0%, #990000 100%); width: 160px; height: 42px;">
        Generate FLP
      </button>

      <img src="../Images/image 34.png" alt="App Icon" class="w-[140px] h-auto">
    </div>
  </div>

  <!-- Right Image -->
  <div class="w-full lg:w-1/2 flex justify-center lg:justify-end">
    <img src="../Images/image 35.png" alt="Maxify App Screenshot"
         class="w-[460px] h-[460px] object-contain">
  </div>
</div>



<!-- ......................................................................... -->

<!-- 🔹 Desktop View Only -->
<div class="hidden lg:flex flex-col lg:flex-row items-center justify-between gap-6 px-4 md:px-10 lg:px-20 py-10 bg-white max-w-screen-xl mx-auto">
  <!-- Left Content -->
  <div class="w-full lg:w-1/2 text-left space-y-4">
    <h1 class="text-[32px] md:text-[48px] lg:text-[60px] font-bold text-blue-800 leading-tight font-[Manrope]">
      The Reserve
    </h1>

    <p class="text-[16px] md:text-[20px] lg:text-[24px] font-medium text-[#535353] font-[Manrope]">
      Everything a Student Needs in One Place
    </p>

    <button class="text-white font-semibold text-[13px] md:text-[14px] lg:text-[15px] leading-[22px] rounded-full font-[Manrope] px-6 py-2"
            style="background: linear-gradient(180deg, #FF0000 0%, #990000 100%)">
      Unlock The Vault
    </button>
  </div>

  <!-- Right Image -->
  <div class="w-full lg:w-1/2 flex justify-center lg:justify-end mt-6 lg:mt-0">
    <img src="../Images/image 36.png" alt="The Reserve"
         class="w-[280px] md:w-[400px] lg:w-[500px] h-auto object-contain">
  </div>
</div>


<!-- 🔹 Mobile View Only -->
<div class="block lg:hidden px-5 py-12 bg-white max-w-screen-xl mx-auto">
  <div class="flex flex-row items-center justify-between gap-4">
    <!-- Left Content -->
    <div class="w-1/2 space-y-3">
      <h1 class="text-[22px] font-bold text-blue-800 leading-tight font-[Manrope]">
        The Reserve
      </h1>

      <p class="text-[13px] font-medium text-[#535353] font-[Manrope] leading-[18px]">
        Everything a Student Needs in One Place
      </p>

      <button class="text-white font-semibold text-[10px] leading-[22px] rounded-[30px] font-[Manrope] px-[20px] py-[4px]"
              style="background: linear-gradient(180deg, #FF0000 0%, #990000 100%)">
        Unlock The Vault
      </button>
    </div>

    <!-- Right Image -->
    <div class="w-1/2 flex justify-end">
      <img src="../Images/image 36.png" alt="The Reserve"
           class="w-[140px] sm:w-[160px] h-auto object-contain">
    </div>
  </div>
</div>

<section class="w-full px-4 py-16 max-w-[1440px] mx-auto">
  <div class="flex flex-col items-center gap-24">

    <!-- Top Images Row (V shape) -->
    <div class="flex flex-col lg:flex-row justify-center gap-8 mt-4">
      <img src="../Images/side1.png" alt="Left Image"
        class="object-cover w-full max-w-[300px] self-start" />
      <img src="../Images/bet1.png" alt="Center Image"
        class="object-cover w-full max-w-[300px] self-center mt-6 lg:mt-12" />
      <img src="../Images/side2.png" alt="Right Image"
        class="object-cover w-full max-w-[300px] self-start" />
    </div>

    <!-- Text Content -->
  <div class="w-full md:w-2/3 lg:w-1/2 text-left space-y-5 mt-10 font-[Manrope]">

  <!-- Subheading -->
  <p class="text-[#535353] font-semibold text-[18px] md:text-[26px] lg:text-[34px] leading-[28px] md:leading-[34px] lg:leading-[40px]">
    Our Journey
  </p>

  <!-- Main Heading -->
  <h1 class="font-bold text-[24px] md:text-[38px] lg:text-[50px] leading-[34px] md:leading-[48px] lg:leading-[60px]
             bg-gradient-to-b from-[#0B50B8] to-[#052452] text-transparent bg-clip-text">
    Our Path to Maxify
  </h1>

  <!-- Paragraph -->
  <p class="text-[#535353] font-semibold text-[14px] md:text-[22px] lg:text-[30px] leading-[22px] md:leading-[34px] lg:leading-[44px]">
    Explore Maxify Journey: The Pioneer of Pakistan’s Ed-Tech Revolution
  </p>

  <!-- Button -->
  <button
    class="text-white font-semibold text-[13px] leading-[20px] rounded-[30px] transition hover:brightness-110"
    style="width: 150px; height: 36px; padding: 10px 28px; background: linear-gradient(180deg, #FF0000 0%, #990000 100%);">
    Follow the Dream
  </button>
</div>


    <!-- Bottom Images Row (∧ shape) -->
    <div class="flex flex-col lg:flex-row justify-center gap-8 mt-12">
      <img src="../Images/side3.png" alt="Left Image"
        class="object-cover w-full max-w-[300px] self-end" />
      <img src="../Images/bet2.png" alt="Center Image"
        class="object-cover w-full max-w-[300px] self-center mb-6 lg:mb-12" />
      <img src="../Images/side4.png" alt="Right Image"
        class="object-cover w-full max-w-[300px] self-end" />
    </div>

  </div>
</section>


<!-- ............................ -->

<section class="w-full px-4 mt-6 space-y-4 max-w-[1440px] mx-auto text-center font-[Manrope]">
  <!-- Gradient Heading -->
  <h2 class="text-[28px] md:text-[40px] lg:text-[46px] font-extrabold leading-[52px] bg-gradient-to-b from-[#0B50B8] to-[#052452] text-transparent bg-clip-text">
    Meet Our High Achievers
  </h2>

  <!-- Subheading -->
  <p class="text-[18px] md:text-[28px] lg:text-[30px] font-semibold leading-[38px] text-[#535353]">
    The Driving Force Behind Maxify
  </p>
</section>

<!-- ..................................... -->

<section class="w-full px-4 mt-10 max-w-[1440px] mx-auto font-[Manrope]">
  <!-- Section Heading -->


  <!-- Achiever Slider -->
  <div class="achiever-slider flex gap-6 ">

    <!-- Card Start -->
    <div class="!flex !flex-col !justify-center !items-center flex-shrink-0">
      
      <!-- Individual Card Title -->
      <h2 class="text-[#673AB7] text-[18px] md:text-xl font-bold mb-2 text-center">
         Our High Achievers
      </h2>

      <!-- Image Card -->
      <div class="relative border-2 rounded-xl flex justify-center items-center border-[#673AB7] w-56 h-64 bg-[#E4D5FF] overflow-hidden">
        <div class="absolute -top-3 -right-3 z-10">
          <img src="../Images/medal.png" alt="medal" class="w-[36px] h-[36px]">
        </div>
        <img src="../Images/achiver.png" alt="Achiever" class="object-contain h-full px-2">
      </div>

      <!-- Footer Info -->
    <div class="flex flex-col relative -mt-6 justify-center text-center 
            bg-gradient-to-b from-[#673AB7] to-[#2E1A51] 
            text-white rounded-xl w-44 py-1.5 px-2 
            text-xs font-semibold shadow">
  <p>Mubashir Iqbal</p>
  <p>200/200</p>
  <p>MDCAT</p>
</div>

    </div>

    <!-- Repeat for other achievers -->
      <div class="!flex !flex-col !justify-center !items-center flex-shrink-0">
      
      <!-- Individual Card Title -->
      <h2 class="text-[#673AB7] text-[18px] md:text-xl font-bold mb-2 text-center">
         Our High Achievers
      </h2>

      <!-- Image Card -->
      <div class="relative border-2 rounded-xl flex justify-center items-center border-[#673AB7] w-56 h-64 bg-[#E4D5FF] overflow-hidden">
        <div class="absolute -top-3 -right-3 z-10">
          <img src="../Images/medal.png" alt="medal" class="w-[36px] h-[36px]">
        </div>
        <img src="../Images/achiver.png" alt="Achiever" class="object-contain h-full px-2">
      </div>

      <!-- Footer Info -->
    <div class="flex flex-col relative -mt-6 justify-center text-center 
            bg-gradient-to-b from-[#673AB7] to-[#2E1A51] 
            text-white rounded-xl w-44 py-1.5 px-2 
            text-xs font-semibold shadow">
  <p>Mubashir Iqbal</p>
  <p>200/200</p>
  <p>MDCAT</p>
</div>

    </div>
  <div class="!flex !flex-col !justify-center !items-center flex-shrink-0">
      
      <!-- Individual Card Title -->
      <h2 class="text-[#673AB7] text-[18px] md:text-xl font-bold mb-2 text-center">
         Our High Achievers
      </h2>

      <!-- Image Card -->
      <div class="relative border-2 rounded-xl flex justify-center items-center border-[#673AB7] w-56 h-64 bg-[#E4D5FF] overflow-hidden">
        <div class="absolute -top-3 -right-3 z-10">
          <img src="../Images/medal.png" alt="medal" class="w-[36px] h-[36px]">
        </div>
        <img src="../Images/achiver.png" alt="Achiever" class="object-contain h-full px-2">
      </div>

      <!-- Footer Info -->
    <div class="flex flex-col relative -mt-6 justify-center text-center 
            bg-gradient-to-b from-[#673AB7] to-[#2E1A51] 
            text-white rounded-xl w-44 py-1.5 px-2 
            text-xs font-semibold shadow">
  <p>Mubashir Iqbal</p>
  <p>200/200</p>
  <p>MDCAT</p>
</div>

    </div>
      <div class="!flex !flex-col !justify-center !items-center flex-shrink-0">
      
      <!-- Individual Card Title -->
      <h2 class="text-[#673AB7] text-[18px] md:text-xl font-bold mb-2 text-center">
         Our High Achievers
      </h2>

      <!-- Image Card -->
      <div class="relative border-2 rounded-xl flex justify-center items-center border-[#673AB7] w-56 h-64 bg-[#E4D5FF] overflow-hidden">
        <div class="absolute -top-3 -right-3 z-10">
          <img src="../Images/medal.png" alt="medal" class="w-[36px] h-[36px]">
        </div>
        <img src="../Images/achiver.png" alt="Achiever" class="object-contain h-full px-2">
      </div>

      <!-- Footer Info -->
    <div class="flex flex-col relative -mt-6 justify-center text-center 
            bg-gradient-to-b from-[#673AB7] to-[#2E1A51] 
            text-white rounded-xl w-44 py-1.5 px-2 
            text-xs font-semibold shadow">
  <p>Mubashir Iqbal</p>
  <p>200/200</p>
  <p>MDCAT</p>
</div>

    </div>
      <div class="!flex !flex-col !justify-center !items-center flex-shrink-0">
      
      <!-- Individual Card Title -->
      <h2 class="text-[#673AB7] text-[18px] md:text-xl font-bold mb-2 text-center">
         Our High Achievers
      </h2>

      <!-- Image Card -->
      <div class="relative border-2 rounded-xl flex justify-center items-center border-[#673AB7] w-56 h-64 bg-[#E4D5FF] overflow-hidden">
        <div class="absolute -top-3 -right-3 z-10">
          <img src="../Images/medal.png" alt="medal" class="w-[36px] h-[36px]">
        </div>
        <img src="../Images/achiver.png" alt="Achiever" class="object-contain h-full px-2">
      </div>

      <!-- Footer Info -->
    <div class="flex flex-col relative -mt-6 justify-center text-center 
            bg-gradient-to-b from-[#673AB7] to-[#2E1A51] 
            text-white rounded-xl w-44 py-1.5 px-2 
            text-xs font-semibold shadow">
  <p>Mubashir Iqbal</p>
  <p>200/200</p>
  <p>MDCAT</p>
</div>

    </div>
      <div class="!flex !flex-col !justify-center !items-center flex-shrink-0">
      
      <!-- Individual Card Title -->
      <h2 class="text-[#673AB7] text-[18px] md:text-xl font-bold mb-2 text-center">
         Our High Achievers
      </h2>

      <!-- Image Card -->
      <div class="relative border-2 rounded-xl flex justify-center items-center border-[#673AB7] w-56 h-64 bg-[#E4D5FF] overflow-hidden">
        <div class="absolute -top-3 -right-3 z-10">
          <img src="../Images/medal.png" alt="medal" class="w-[36px] h-[36px]">
        </div>
        <img src="../Images/achiver.png" alt="Achiever" class="object-contain h-full px-2">
      </div>

      <!-- Footer Info -->
    <div class="flex flex-col relative -mt-6 justify-center text-center 
            bg-gradient-to-b from-[#673AB7] to-[#2E1A51] 
            text-white rounded-xl w-44 py-1.5 px-2 
            text-xs font-semibold shadow">
  <p>Mubashir Iqbal</p>
  <p>200/200</p>
  <p>MDCAT</p>
</div>

    </div>
  </div>
</section>


<!-- .................................... -->
<section class="w-full px-4 mt-18 max-w-[1440px] mx-auto space-y-10 font-[Manrope]">

  <!-- Heading -->
  <div class="max-w-3xl mx-auto text-center">
    <h1 class="text-[24px] md:text-[32px] lg:text-[44px] xl:text-[48px]
               font-extrabold leading-[32px] md:leading-[40px] lg:leading-[52px] xl:leading-[58px]
               bg-gradient-to-b from-[#0B50B8] to-[#052452] text-transparent bg-clip-text">
      Endless Journeys, Endless Stories
    </h1>
  </div>

  <!-- Paragraph -->
  <div class="max-w-3xl mx-auto text-left">
    <p class="text-[14px] md:text-[18px] lg:text-[20px] xl:text-[22px]
              leading-[24px] md:leading-[30px] lg:leading-[34px] xl:leading-[36px]
              font-medium text-[#535353]">
      Still unsure? Hear it from our alumni. Maxify wasn’t just a stepping stone –<br class="hidden md:inline">
      it was their launchpad to success. Because success isn’t a destination; it’s a journey –<br class="hidden md:inline">
      and we’re here to guide you every step of the way.
    </p>
  </div>

  <!-- Button -->
  <div class="max-w-3xl mx-auto text-left lg:text-center">
    <button class="bg-red-600 text-white text-sm md:text-base hover:bg-red-700 transition duration-300"
            style="width: 193px; height: 42px; border-radius: 30px; padding: 12px 39px;">
      Read the Stories
    </button>
  </div>

  <!-- Image -->
  <div class="max-w-5xl mx-auto">
    <img src="../Images/lastimg.png" alt="Endless Stories" class="w-full h-auto object-contain" />
  </div>

</section>


<!-- ............................................ -->

<section class="w-full px-4 py-10 max-w-[1440px] mx-auto space-y-8 font-[Manrope]">

  <!-- Heading -->
  <div class="text-center">
    <h1 class="text-[22px] md:text-[32px] lg:text-[42px] xl:text-[52px] font-bold 
               leading-[32px] md:leading-[44px] lg:leading-[56px] xl:leading-[68px]
               bg-gradient-to-b from-[#0B50B8] to-[#052452] text-transparent bg-clip-text">
      Unleash your Potential,<br>
      Redefine the Rules!
    </h1>
  </div>

  <!-- Subheading -->
  <div class="max-w-3xl mx-auto text-left text-[#535353]">
    <p class="text-[12px] md:text-[20px] lg:text-[26px] xl:text-[30px] font-semibold 
              leading-[22px] md:leading-[30px] lg:leading-[36px] xl:leading-[42px]">
      Over 100K Future Doctors Trust Maxify. Be next.<br>
      Own your journey.
    </p>
  </div>

  <!-- Button -->
  <div class="max-w-3xl mx-auto text-left lg:text-center">
    <button class="text-white font-semibold text-[13px] leading-[20px]
                   hover:brightness-110 transition duration-300"
            style="width: 160px; height: 38px; padding: 10px 30px; border-radius: 30px;
                   background: linear-gradient(180deg, #FF0000 0%, #990000 100%);">
      Get Started Free
    </button>
  </div>

</section>



<!-- ............................. -->
<section class="w-full px-4 py-8 max-w-[1440px] mx-auto text-center space-y-4 font-[Manrope]">

  <!-- Paragraph -->
  <p class="text-[16px] md:text-[22px] lg:text-[28px] xl:text-[32px] 
            leading-[24px] md:leading-[32px] lg:leading-[38px] xl:leading-[42px]
            font-semibold text-[#535353]">
    Start Learning for Free – No Credit Card.
  </p>

</section>


</main>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Slick Carousel JS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/index.js"></script>

</html>