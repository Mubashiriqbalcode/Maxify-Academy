<aside class="w-full max-w-[283px] bg-[#E4E4E4] p-4 space-y-4 rounded-2xl h-screen">
  <div class="flex justify-center">
    <img src="../Images/maxfylogo.png" alt="Logo" class="w-[77px] h-[77px]" />
  </div>

  <nav class="flex flex-col space-y-1" id="sidebarNav">

    <!-- Home -->
    <div class="menu-item flex items-center px-3 h-[46px] rounded-[11px]" data-id="home">
      <img src="../Images/material-symbols_home-rounded1.png" class="icon h-[19px] w-[19px]">
      <a href="../index/index.php" class="font-bold px-3 py-2">Home</a>
    </div>

    <!-- Products -->
    <?php if (isset($isHomePage) && $isHomePage): ?>
      <!-- Home Page: Product Dropdown -->
        <!-- Other Pages: Product (with dropdown) -->
      <div class="menu-item cursor-pointer flex items-center justify-between px-3 h-[46px] rounded-[11px]"
           data-dropdown-target="productDropdown" data-arrow-target="productArrowIcon" data-id="products">
        <div class="flex items-center">
          <img src="../Images/product.png" class="icon h-[19px] w-[19px]">
          <span class="font-bold px-3 py-2">Products</span>
        </div>
        <img id="productArrowIcon" src="../Images/mingcute_down-fill (2).png"
             class="w-4 h-4 transition-transform duration-300 arrow-icon" />
      </div>

      <div id="productDropdown"
           class="ml-6 overflow-hidden max-h-0 transition-all duration-500 ease-in-out flex flex-col space-y-1 dropdown-content">
        <div class="menu-item flex items-center px-3 h-[38px] rounded-[11px]" data-id="mdcat">
          <img src="../Images/courseicon.png" class="icon h-[19px] w-[19px]">
          <a href="../Examination/Mdcat.php" class="font-bold px-3 py-2">MDCAT</a>
        </div>
        <div class="menu-item flex items-center px-3 h-[38px] rounded-[11px]" data-id="nums">
          <img src="../Images/courseicon.png" class="icon h-[19px] w-[19px]">
          <a href="../Examination/Nums.php" class="font-bold px-3 py-2">NUMS</a>
        </div>
        <div class="menu-item flex items-center px-3 h-[38px] rounded-[11px]" data-id="fsc">
          <img src="../Images/courseicon.png" class="icon h-[19px] w-[19px]">
          <a href="../Examination/Fsc.php" class="font-bold px-3 py-2">F.Sc</a>
        </div>
        <div class="menu-item flex items-center px-3 h-[38px] rounded-[11px]" data-id="quiz-builder">
          <img src="../Images/courseicon.png" class="icon h-[19px] w-[19px]">
          <a href="../QuizBuilder/QuizBuilder.php" class="font-bold px-3 py-2">Quiz Builder</a>
        </div>
      </div>
    <?php else: ?>
      <!-- Other Pages: Product (with dropdown) -->
      <div class="menu-item cursor-pointer flex items-center justify-between px-3 h-[46px] rounded-[11px]"
           data-dropdown-target="productDropdown" data-arrow-target="productArrowIcon" data-id="products">
        <div class="flex items-center">
          <img src="../Images/product.png" class="icon h-[19px] w-[19px]">
          <span class="font-bold px-3 py-2">Products</span>
        </div>
        <img id="productArrowIcon" src="../Images/mingcute_down-fill (2).png"
             class="w-4 h-4 transition-transform duration-300 arrow-icon" />
      </div>

      <div id="productDropdown"
           class="ml-6 overflow-hidden max-h-0 transition-all duration-500 ease-in-out flex flex-col space-y-1 dropdown-content">
        <div class="menu-item flex items-center px-3 h-[38px] rounded-[11px]" data-id="mdcat">
          <img src="../Images/courseicon.png" class="icon h-[19px] w-[19px]">
          <a href="../Examination/Mdcat.php" class="font-bold px-3 py-2">MDCAT</a>
        </div>
        <div class="menu-item flex items-center px-3 h-[38px] rounded-[11px]" data-id="nums">
          <img src="../Images/courseicon.png" class="icon h-[19px] w-[19px]">
          <a href="../Examination/Nums.php" class="font-bold px-3 py-2">NUMS</a>
        </div>
        <div class="menu-item flex items-center px-3 h-[38px] rounded-[11px]" data-id="fsc">
          <img src="../Images/courseicon.png" class="icon h-[19px] w-[19px]">
          <a href="../Examination/Fsc.php" class="font-bold px-3 py-2">F.Sc</a>
        </div>
        <div class="menu-item flex items-center px-3 h-[38px] rounded-[11px]" data-id="quiz-builder">
          <img src="../Images/courseicon.png" class="icon h-[19px] w-[19px]">
          <a href="../QuizBuilder/QuizBuilder.php" class="font-bold px-3 py-2">Quiz Builder</a>
        </div>
      </div>
    <?php endif; ?>

    <!-- About -->
    <?php if (isset($isHomePage) && $isHomePage): ?>
      <div class="menu-item flex items-center px-3 h-[46px] rounded-[11px]" data-id="about">
        <img src="../Images/about4x.png" class="icon h-[19px] w-[19px]">
        <a href="#" class="font-bold px-3 py-2">About Us</a>
      </div>
    <?php else: ?>
      <div class="menu-item cursor-pointer flex items-center justify-between px-3 h-[46px] rounded-[11px]"
           data-dropdown-target="aboutDropdown" data-arrow-target="aboutArrowIcon" data-id="about">
        <div class="flex items-center">
          <img src="../Images/about4x.png" class="icon h-[19px] w-[19px]">
          <span class="font-bold px-3 py-2">About Us</span>
        </div>
        <img id="aboutArrowIcon" src="../Images/mingcute_down-fill (2).png"
             class="w-4 h-4 transition-transform duration-300 arrow-icon" />
      </div>

      <div id="aboutDropdown"
           class="ml-6 overflow-hidden max-h-0 transition-all duration-500 ease-in-out flex flex-col space-y-1 dropdown-content">
        <div class="menu-item flex items-center px-3 h-[38px] rounded-[11px]" data-id="team">
          <img src="../Images/courseicon.png" class="icon h-[19px] w-[19px]">
          <a href="Team.php" class="font-bold px-3 py-2">Our Team</a>
        </div>
        <div class="menu-item flex items-center px-3 h-[38px] rounded-[11px]" data-id="contact">
          <img src="../Images/courseicon.png" class="icon h-[19px] w-[19px]">
          <a href="Contact.php" class="font-bold px-3 py-2">Contact Us</a>
        </div>
      </div>

      <!-- Dashboard -->
      <div class="menu-item flex items-center px-3 h-[46px] rounded-[11px]" data-id="dashboard">
        <img src="../Images/dashboard4x.png" class="icon h-[19px] w-[19px]">
        <a href="../Dashboard/Dashboard.php" class="font-bold px-3 py-2">Dashboard</a>
      </div>

      <!-- Pricing -->
      <div class="menu-item flex items-center px-3 h-[46px] rounded-[11px]" data-id="pricing">
        <img src="../Images/Vector (1).png" class="icon h-[19px] w-[19px]">
        <a href="../Payment/Pricing.php" class="font-bold px-3 py-2">Pricing</a>
      </div>
    <?php endif; ?>
  </nav>
<div class="flex justify-center">
  <a href="../Admin/SignUp.php" class="bg-[#673AB7] w-[178px] font-bold py-2 px-4 rounded-3xl text-white text-center block">
    Get Started
  </a>
</div>

</aside>
