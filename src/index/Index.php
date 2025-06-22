<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxify Academy</title>
    <link href="./input.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<!-- Slick Carousel CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
 <link rel="stylesheet" href="css/index.css">
<style>
   
</style>

</head>

<body>
<div class="grid lg:grid-cols-[260px_1fr] min-h-screen overflow-hidden p-2  ">
<?php
$isHomePage = true;
include '../Includes/Sidebar.php';
?>


  <!-- Main Content Area -->
  <main class="w-full p-3 lg:p-6 xl:p-8 space-y-10 overflow-hidden">

    <div class="w-full max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-[2fr_1fr] gap-6">

      <!-- Left Section -->
      <section class="space-y-6 px-2 lg:p-0">
        <div class="text-2xl sm:text-3xl font-bold leading-snug">
          <h1>Welcome to <span class="text-[#673AB7] text-3xl sm:text-4xl">MaXify</span> Academy</h1>
          <div class="mt-4">
            <h2 class="text-[#673AB7] text-2xl sm:text-3xl font-bold">Pakistan’s #1 Platform for your Entrance Exams</h2>
          </div>
        </div>

        <!-- Buttons -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">

        <div
  class="rounded-lg flex items-center justify-around p-2 h-[48px] text-red-700 hover:bg-red-50 transition"
  style="border: 1px solid #FF0000; box-shadow: 4px 19px 20px -15px #FF0000;"
>
  <img src="https://placehold.co/22x22/FFFFFF/FF0000?text=MD" alt="MDCAT Icon" class="w-5 h-5">
  <span class="text-sm font-semibold">MDCAT</span>
</div>


          <div
  class="rounded-lg flex items-center justify-around p-2 h-[48px] text-blue-700 hover:bg-blue-50 transition"
  style="border: 1px solid #0B50B8; box-shadow: 4px 19px 20px -15px #0B50B8;"
>
  <img src="https://placehold.co/22x22/FFFFFF/0000FF?text=AI" alt="AI Icon" class="w-5 h-5">
  <span class="text-sm font-semibold">AI Quiz Builder</span>
</div>


       <div
  class="rounded-lg flex items-center justify-around p-2 h-[48px] text-green-700 hover:bg-green-50 transition"
  style="border: 1px solid #079200; box-shadow: 4px 19px 20px -15px #08A300;"
>
  <img src="https://placehold.co/22x22/FFFFFF/00FF00?text=NU" alt="NUMS Icon" class="w-5 h-5">
  <span class="text-sm font-semibold">NUMS</span>
</div>


        <div
  class="rounded-lg flex items-center justify-around p-2 h-[48px] text-blue-800 hover:bg-blue-50 transition"
  style="border: 1px solid #052452; box-shadow: 4px 19px 20px -15px #0B50B8;"
>
  <img src="https://placehold.co/22x22/FFFFFF/00008B?text=SL" alt="Shortlisting" class="w-5 h-5">
  <span class="text-sm font-semibold">Shortlisting</span>
</div>


         <div
  class="rounded-lg flex items-center justify-around p-2 h-[48px] text-green-700 hover:bg-green-50 transition"
  style="
    border: 1px solid;
    border-image-source: linear-gradient(90deg, #089D00 0%, #033700 100%);
    border-image-slice: 1;
    box-shadow: 4px 19px 20px -15px #089D00;
  "
>
  <img src="https://placehold.co/22x22/FFFFFF/008000?text=FS" alt="F.SC Icon" class="w-5 h-5">
  <span class="text-sm font-semibold">F.SC</span>
</div>

<div
  class="rounded-lg flex items-center justify-around p-2 h-[48px] text-red-800 hover:bg-red-50 transition"
  style="
    border: 1px solid;
    border-image-source: linear-gradient(90deg, #990000 0%, #330000 100%);
    border-image-slice: 1;
    box-shadow: 4px 19px 20px -15px #990000;
  "
>
  <img src="https://placehold.co/22x22/FFFFFF/800000?text=FC" alt="Flashcards" class="w-5 h-5">
  <span class="text-sm font-semibold">Flashcards</span>
</div>


        </div>

        <!-- Discount Section -->
     <section class=" my-10">
  <h2 class="text-[#673AB7] text-3xl font-bold mb-6 font-[Manrope]">Discount Ends In</h2>

  <div class="flex flex-wrap gap-6 items-center justify-start">
    <!-- Animated Circular Timer -->
<div
  class="flex justify-center items-center w-44 h-44 rounded-full animate-pulse transition duration-300"
  style="
    background: linear-gradient(180deg, #E1E1E1 0%, #FFFFFF 100%);
    box-shadow:
      0px 40.27px 80.53px 0px #3333332A,
      inset 0px 10.65px 10.65px 0px #FFFFFF,
      inset 0px -10.65px 10.65px 0px #D9D9D9;
  "
>
  <h3 id="timer" class="text-[#673AB7] text-2xl font-bold font-[Manrope]">00:00:00</h3>
</div>


    <div class="space-y-4 text-center">
    <button
  class="w-[178px] h-[42px] rounded-[30px] bg-gradient-to-b from-[#673AB7] to-[#2E1A51] text-white font-[Manrope] font-semibold text-[15px] leading-[22px] transition duration-300 hover:opacity-90"
>
  Avail Now
</button>

      <p class="font-bold text-sm font-[Manrope]">Join Our Guidance Community</p>
    </div>
  </div>
</section>


      </section>

      <!-- Achiever Section -->
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





<main class="w-full px-4 py-10 max-w-[1440px] mx-auto space-y-20">
<div class="text-center mt-10 space-y-6 px-4 lg:px-0">
  <!-- Heading -->
  <h1 class="text-[#673AB7] text-3xl sm:text-4xl md:text-5xl font-bold">
    Trusted By 90K+ Students
  </h1>

  <!-- Stats Section -->
  <div class="mt-8 flex flex-wrap justify-center gap-8 sm:gap-12">

    <!-- Success Rate -->
    <div class="space-y-2 text-center">
      <h2 class="text-[#673AB7] text-3xl sm:text-4xl md:text-5xl font-bold">97%</h2>
      <p class="text-base sm:text-lg md:text-xl text-[#535353] font-semibold">Success Rate</p>
    </div>

    <!-- MCQ Attempts -->
    <div class="space-y-2 text-center">
      <h2 class="text-[#673AB7] text-3xl sm:text-4xl md:text-5xl font-bold">500K</h2>
      <p class="text-base sm:text-lg md:text-xl text-[#535353] font-semibold">MCQ Attempts</p>
    </div>

    <!-- Minutes Spent -->
    <div class="space-y-2 text-center">
      <h2 class="text-[#673AB7] text-3xl sm:text-4xl md:text-5xl font-bold">1650K</h2>
      <p class="text-base sm:text-lg md:text-xl text-[#535353] font-semibold">Minutes Spent</p>
    </div>

  </div>
</div>


<!-- ...................................................................... -->


<div class="space-y-10 px-4 lg:px-0">
  
  <!-- Heading 1 (Slightly increased) -->
  <div class="pt-8">
    <h1 class="text-[#673AB7] text-3xl lg:text-5xl font-bold text-center">
      What are you looking for?
    </h1>
  </div>

  <!-- Button Group -->
  <div class="flex flex-wrap justify-center gap-6 lg:gap-10 mt-4">
    
    <div class="rounded flex items-center justify-center p-2 w-40 shadow-2xl shadow-[#990000] border border-[#FF0000]">
      <button class="text-base lg:text-lg text-red-600">Entrance Exams</button>
    </div>

    <div class="rounded flex items-center justify-center p-2 w-40 shadow-2xl bg-[#0B50B8] shadow-[#0B50B8] border border-[#052452]">
      <button class="text-base lg:text-lg text-white px-2 py-1 rounded">Board Exams</button>
    </div>

    <div class="rounded flex items-center justify-center p-2 w-40 shadow-2xl shadow-[#08A300] border border-[#079200]">
      <button class="text-base lg:text-lg text-green-700">Other Exams</button>
    </div>

  </div>

  <!-- Heading 2 (Kept the same) -->
<div class="pt-10 text-center">
  <h1 class="text-[#535353] text-3xl lg:text-5xl font-bold">
    We have everything for you
  </h1>
</div>

<!-- .................................................................... -->


<div
  class="flex flex-wrap justify-center items-start gap-8 max-w-[1200px] mx-auto mt-20 p-4 bg-[radial-gradient(ellipse_at_center,_rgba(0,0,0,0.45)_1%,_transparent_70%)]">

  <!-- Card 1 -->
  <div class="bg-white shadow-lg rounded-xl p-6 w-[300px] h-[350px] relative -translate-y-6">
    <h2 class="text-4xl font-bold text-[#0B50B8]">70,000+</h2>
    <p class="text-base text-[#535353] mt-4">MCQ’s with Detailed Explanation</p>
    <p class="text-base text-[#535353] mt-2">On your One click Away</p>
    <div class="absolute bottom-6 right-6 w-28 h-28">
      <img src="../Images/card1.png" alt="MCQ Icon" class="w-full h-full object-contain">
    </div>
  </div>

  <!-- Card 2 -->
  <div class="bg-white shadow-lg rounded-xl p-6 w-[300px] h-[350px] relative">
    <h2 class="text-4xl font-bold text-[#0B50B8]">Real Time</h2>
    <p class="text-base text-[#535353] mt-4">Stats And Analysis</p>
    <div class="absolute bottom-6 right-6 w-28 h-28">
      <img src="../Images/card2.png" alt="MCQ Icon" class="w-full h-full object-contain">
    </div>
  </div>

  <!-- Card 3 -->
  <div class="bg-white shadow-lg rounded-xl p-6 w-[300px] h-[350px] relative -translate-y-6">
    <h2 class="text-4xl font-bold text-[#0B50B8]">AI Quiz</h2>
    <p class="text-base text-[#535353] mt-4">Make full length papers with just one click.</p>
    <div class="absolute bottom-6 right-6 w-28 h-28">
      <img src="../Images/card3.png" alt="MCQ Icon" class="w-full h-full object-contain">
    </div>
  </div>

  <!-- Card 4 -->
  <div class="bg-gradient-to-b from-[#673AB7] to-[#2E1A51] shadow-lg rounded-xl p-6 w-[300px] h-[350px] relative">
    <h2 class="text-4xl font-bold text-white">Lectures</h2>
    <p class="text-base text-white mt-4">Watch our Lectures for best exam preparation</p>
    <div class="absolute bottom-6 right-6 w-28 h-28">
      <img src="../Images/card4.png" alt="Lectures Icon" class="w-full h-full object-contain">
    </div>
  </div>

  <!-- Card 5 -->
  <div class="bg-white shadow-lg rounded-xl p-6 w-[300px] h-[350px] relative -translate-y-6">
    <h2 class="text-3xl font-bold text-[#0B50B8]">Video Solutions</h2>
    <p class="text-base text-[#535353] mt-4">Master your concepts with our video lectures</p>
    <div class="flex items-center mt-4">
      <h2 class="text-2xl font-bold text-[#0B50B8]">Coming Soon!</h2>
      <img src="../Images/card5.png" alt="Video Icon" class="w-28 h-28 object-contain ml-2">
    </div>
  </div>

  <!-- Card 6 -->
  <div class="bg-white shadow-lg rounded-xl p-6 w-[300px] h-[350px] relative">
    <h2 class="text-4xl font-bold text-blue-700">Flashcards</h2>
    <p class="text-base text-[#535353] mt-4">Explore our Flashcards for the best Revisions</p>
    <div class="absolute bottom-6 right-6 w-28 h-28">
      <img src="../Images/card6.png" alt="Flashcard Icon" class="w-full h-full object-contain">
    </div>
  </div>

</div>


<!-- .................................................................................? -->
<div class="flex flex-col md:flex-row items-center justify-between gap-8 px-4 md:px-20 py-20 bg-white max-w-screen-xl mx-auto">

  <!-- Text Column -->
  <div class="w-full md:w-1/2 text-left space-y-6">
    <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-[#535353]">
      The New Revolution<br>is Here
    </h2>

    <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-blue-800 leading-tight">
      AI Quiz<br>Generator
    </h1>

    <p class="text-lg md:text-xl lg:text-2xl font-medium text-[#535353]">
      Less Practice. Best Results
    </p>

    <div class="flex flex-wrap justify-start gap-4 pt-4">
      <button class="bg-red-600 text-white text-base md:text-lg px-7 py-3 rounded-full hover:bg-red-700 transition">
        Generate FLP
      </button>
      <button class="bg-purple-700 text-white text-base md:text-lg px-7 py-3 rounded-full hover:bg-purple-800 transition">
        Go to Quiz Builder
      </button>
    </div>
  </div>

  <!-- Image Column -->
  <div class="w-full md:w-1/2 flex justify-center md:justify-end">
    <img src="../Images/image 33.png" alt="AI Quiz Generator" class="w-[400px] md:w-[480px] max-w-full h-auto">
  </div>

</div>




<!-- .......................................................... -->

<div class="flex flex-col md:flex-row items-center justify-between gap-10 px-4 md:px-20 py-20 bg-white max-w-screen-xl mx-auto">

  <!-- Left Content -->
  <div class="w-full md:w-1/2 text-left space-y-6">
    <h2 class="text-2xl md:text-3xl font-semibold text-[#535353]">
      Download Our App
    </h2>

    <h1 class="text-4xl md:text-6xl font-bold text-blue-800 leading-tight">
      Maxify Academy App
    </h1>

    <p class="text-lg md:text-2xl font-medium text-[#535353]">
      Less Practice. Best Results
    </p>

    <div class="flex flex-wrap md:flex-nowrap items-center gap-4 pt-3">
      <button class="bg-red-600 text-white text-base md:text-lg px-7 py-3 rounded-full hover:bg-red-700 transition">
        Generate FLP
      </button>
      <img src="../Images/image 34.png" alt="App Icon" class="w-[160px] h-auto">
    </div>
  </div>

  <!-- Right Image -->
  <div class="w-full md:w-1/2 flex justify-center md:justify-end">
    <img src="../Images/image 35.png" alt="Maxify App Screenshot" class="w-[400px] md:w-[480px] max-w-full h-auto">
  </div>

</div>

<!-- ......................................................................... -->


<div class="flex flex-col md:flex-row items-center justify-between gap-10 px-4 md:px-20 py-20 bg-white max-w-screen-xl mx-auto">

  <!-- Left Content -->
  <div class="w-full md:w-1/2 text-center md:text-left space-y-6">
    <h1 class="text-4xl md:text-6xl font-bold text-blue-800 leading-tight">
      The Reserve
    </h1>

    <p class="text-lg md:text-2xl font-medium text-[#535353]">
      Everything a Student Needs in One Place
    </p>

    <div class="flex justify-center md:justify-start pt-2">
      <button class="bg-red-600 text-white text-base md:text-lg px-7 py-3 rounded-full hover:bg-red-700 transition">
        Unlock The Vault
      </button>
    </div>
  </div>

  <!-- Right Image -->
  <div class="w-full md:w-1/2 flex justify-center md:justify-end">
    <img src="../Images/image 36.png" alt="The Reserve" class="w-[380px] md:w-[440px] max-w-full h-auto">
  </div>

</div>



<section class="w-full px-4 py-16 max-w-[1440px] mx-auto">
  <div class="flex flex-col items-center gap-24">

<div class="flex flex-col lg:flex-row items-center justify-center gap-8">
  <img src="../Images/side1.png" alt="Left Image" class="object-cover w-full max-w-[300px]" />
  <img src="../Images/bet1.png" alt="Center Image" class="object-cover w-full max-w-[300px] mt-6 lg:mt-12" />
  <img src="../Images/side2.png" alt="Right Image" class="object-cover w-full max-w-[300px]" />
</div>


    <!-- Text Content -->
   <div class="w-full md:w-2/3 lg:w-1/2 text-center space-y-5 mt-12">
  <!-- Top Small Heading -->
  <p class="text-gray-600 text-2xl lg:text-3xl font-bold">Our Journey</p>

  <!-- Main Heading -->
  <h1 class="text-3xl lg:text-5xl font-semibold text-blue-800">Our Path to Maxify</h1>

  <!-- Subheading Paragraph -->
  <p class="text-gray-700 font-medium text-lg lg:text-2xl leading-relaxed">
    Explore Maxify Journey:<br />
    The Pioneer of Pakistan’s Ed-Tech Revolution
  </p>

  <!-- Button -->
  <button class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-full text-base transition">
    Follow the Dream
  </button>
</div>

    <!-- Bottom /src/Images Row -->
  <div class="flex flex-col lg:flex-row items-center justify-center gap-8 mt-12">
  <img src="../Images/side3.png" alt="Left Image" class="object-cover w-full max-w-[300px]" />
  <img src="../Images/bet2.png" alt="Center Image" class="object-cover w-full max-w-[300px] mb-6 lg:mb-12" />
  <img src="../Images/side4.png" alt="Right Image" class="object-cover w-full max-w-[300px]" />
</div>


  </div>
</section>


<!-- ............................ -->

<section class="w-full px-4 mt-10 space-y-6 max-w-[1440px] mx-auto text-center">
  <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-blue-900">
    Meet Our High Achievers
  </h2>
  <p class="text-xl md:text-2xl lg:text-3xl font-semibold text-[#535353]">
    The Driving Force Behind Maxify
  </p>
</section>

<!-- ..................................... -->

<section class="w-full px-4 mt-10 max-w-[1440px] mx-auto">
  <h1 class="text-[#673AB7] text-3xl md:text-4xl mb-8 font-bold text-center">Our High Achievers</h1>

  <!-- Slick Slider Wrapper -->
  <div class="achiever-slider">
    
    <!-- Card -->
    <div class="!flex !flex-col !justify-center !items-center">
      <div class="relative border-2 rounded-xl flex justify-center border-[#673AB7] w-56 h-64 bg-[#E4D5FF] overflow-hidden">
        <div class="absolute -top-3 -right-3 z-10">
          <img src="../Images/medal.png" alt="medal" class="w-[36px] h-[36px]">
        </div>
        <img src="../Images/achiver.png" alt="Achiever" class="object-contain h-full px-2">
      </div>
      <div class="flex flex-col relative -mt-6 justify-center text-center bg-[#673AB7] text-white rounded-xl w-44 py-1.5 px-2 text-xs font-semibold shadow">
        <p>Mubashir Iqbal</p>
        <p>200/200</p>
        <p>MDCAT</p>
      </div>
    </div>

    <!-- Duplicate the above card as needed -->
     <div class="!flex !flex-col !justify-center !items-center">
      <div class="relative border-2 rounded-xl flex justify-center border-[#673AB7] w-56 h-64 bg-[#E4D5FF] overflow-hidden">
        <div class="absolute -top-3 -right-3 z-10">
          <img src="../Images/medal.png" alt="medal" class="w-[36px] h-[36px]">
        </div>
        <img src="../Images/achiver.png" alt="Achiever" class="object-contain h-full px-2">
      </div>
      <div class="flex flex-col relative -mt-6 justify-center text-center bg-[#673AB7] text-white rounded-xl w-44 py-1.5 px-2 text-xs font-semibold shadow">
        <p>Mubashir Iqbal</p>
        <p>200/200</p>
        <p>MDCAT</p>
      </div>
    </div>
   <div class="!flex !flex-col !justify-center !items-center">
      <div class="relative border-2 rounded-xl flex justify-center border-[#673AB7] w-56 h-64 bg-[#E4D5FF] overflow-hidden">
        <div class="absolute -top-3 -right-3 z-10">
          <img src="../Images/medal.png" alt="medal" class="w-[36px] h-[36px]">
        </div>
        <img src="../Images/achiver.png" alt="Achiever" class="object-contain h-full px-2">
      </div>
      <div class="flex flex-col relative -mt-6 justify-center text-center bg-[#673AB7] text-white rounded-xl w-44 py-1.5 px-2 text-xs font-semibold shadow">
        <p>Mubashir Iqbal</p>
        <p>200/200</p>
        <p>MDCAT</p>
      </div>
    </div>
   <div class="!flex !flex-col !justify-center !items-center">
      <div class="relative border-2 rounded-xl flex justify-center border-[#673AB7] w-56 h-64 bg-[#E4D5FF] overflow-hidden">
        <div class="absolute -top-3 -right-3 z-10">
          <img src="../Images/medal.png" alt="medal" class="w-[36px] h-[36px]">
        </div>
        <img src="../Images/achiver.png" alt="Achiever" class="object-contain h-full px-2">
      </div>
      <div class="flex flex-col relative -mt-6 justify-center text-center bg-[#673AB7] text-white rounded-xl w-44 py-1.5 px-2 text-xs font-semibold shadow">
        <p>Mubashir Iqbal</p>
        <p>200/200</p>
        <p>MDCAT</p>
      </div>
    </div>
   <div class="!flex !flex-col !justify-center !items-center">
      <div class="relative border-2 rounded-xl flex justify-center border-[#673AB7] w-56 h-64 bg-[#E4D5FF] overflow-hidden">
        <div class="absolute -top-3 -right-3 z-10">
          <img src="../Images/medal.png" alt="medal" class="w-[36px] h-[36px]">
        </div>
        <img src="../Images/achiver.png" alt="Achiever" class="object-contain h-full px-2">
      </div>
      <div class="flex flex-col relative -mt-6 justify-center text-center bg-[#673AB7] text-white rounded-xl w-44 py-1.5 px-2 text-xs font-semibold shadow">
        <p>Mubashir Iqbal</p>
        <p>200/200</p>
        <p>MDCAT</p>
      </div>
    </div>
   <div class="!flex !flex-col !justify-center !items-center">
      <div class="relative border-2 rounded-xl flex justify-center border-[#673AB7] w-56 h-64 bg-[#E4D5FF] overflow-hidden">
        <div class="absolute -top-3 -right-3 z-10">
          <img src="../Images/medal.png" alt="medal" class="w-[36px] h-[36px]">
        </div>
        <img src="../Images/achiver.png" alt="Achiever" class="object-contain h-full px-2">
      </div>
      <div class="flex flex-col relative -mt-6 justify-center text-center bg-[#673AB7] text-white rounded-xl w-44 py-1.5 px-2 text-xs font-semibold shadow">
        <p>Mubashir Iqbal</p>
        <p>200/200</p>
        <p>MDCAT</p>
      </div>
    </div>

  </div>
</section>


<!-- .................................... -->

<section class="w-full px-4 mt-16 max-w-[1440px] mx-auto space-y-10 text-center">

  <!-- Heading -->
  <h1 class="text-3xl md:text-5xl font-bold text-blue-900">
    Endless Journeys, Endless Stories
  </h1>

  <!-- Paragraph -->
  <div class="max-w-4xl mx-auto">
    <p class="text-base md:text-2xl font-medium text-[#535353] leading-relaxed">
      Still Unsure? Hear it from Our Alumni. Maxify wasn’t just a stepping stone – it was their launchpad to success.
      Because success isn’t a destination; it’s a journey. And we’re here to guide you, every step of the way.
    </p>
  </div>

  <!-- Button -->
  <div>
    <button class="bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition duration-300">
      Read the Stories
    </button>
  </div>

  <!-- Image -->
  <div class="max-w-6xl mx-auto">
    <img src="../Images/lastimg.png" alt="Endless Stories" class="w-full h-auto object-contain" />
  </div>

</section>


<!-- ............................................ -->

<section class="w-full px-4 py-10 max-w-[1440px] mx-auto text-center space-y-10">

  <!-- Heading -->
  <h1 class="text-4xl md:text-5xl font-bold text-blue-900 leading-tight">
    Unleash your Potential,<br>
    Redefine the Rules!
  </h1>

  <!-- Subheading -->
  <p class="text-lg md:text-3xl font-medium text-[#535353] leading-relaxed">
    Over 100K Future Doctors Trust Maxify. Be next.<br>
    Own your journey.
  </p>

  <!-- Button -->
  <div>
    <button class="bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition duration-300">
      Get Started Free
    </button>
  </div>

</section>



<!-- ............................. -->

<section class="w-full px-4 py-10 max-w-[1440px] mx-auto text-center space-y-10">

 
 <p class="text-2xl md:text-4xl font-semibold text-[#535353]">
    Start Learning for Free - No Credit Card.
  </p>
  <!-- Button -->


</section>
</main>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Slick Carousel JS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/index.js"></script>

</html>