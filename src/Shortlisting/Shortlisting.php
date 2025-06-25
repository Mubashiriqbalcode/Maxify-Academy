<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Shortlisting</title>
   <link href="../../dist/output.css" rel="stylesheet">
   
   <link href="../../dist/input.css" rel="stylesheet">
  <style>
    .custom-shadow {
      box-shadow: 0px 10px 40px 0px #00000040;
    }
    .rotate-180 {
      transform: rotate(180deg);
    }
  </style>
</head>

<body class="bg-white min-h-screen flex items-start justify-center gap-10 p-6 relative">
 <header class="lg:hidden fixed top-0 left-0 w-full bg-white shadow-md z-50 px-4 py-3 flex justify-between items-center">
  <button onclick="toggleSidebar()" class="w-6 h-6">
    <img src="../Images/quill_hamburger.png" alt="Menu" class="w-full h-full object-contain" />
  </button>
  <div class="absolute left-1/2 transform -translate-x-1/2">
    <img src="../Images/maxfylogo.png" alt="Logo" class="w-[46px] h-[46px] object-contain" />
  </div>
</header>

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

   <main class="flex-1 px-4 py-6 lg:pl-6 space-y-8 max-w-full overflow-x-hidden">
    <h1 class="text-2xl md:text-3xl font-semibold text-purple-700 mb-10 font-[Manrope] text-center">Shortlisting</h1>

    <!-- Subject Cards Container -->
    <div class="space-y-6">

      <!-- === BIOLOGY === -->
      <div class="relative">
        <div class="bg-[#E4E4E4] rounded-[8px] p-2 md:p-3 hover:bg-gradient-to-b from-[#673AB7] to-[#2E1A51] custom-shadow group cursor-pointer"
             onclick="toggleDropdown('biologyDropdown')">
          <div class="flex justify-between items-center p-1.5 md:p-2">
            <div class="flex items-center gap-3">
              <img src="https://img.icons8.com/color/96/microscope.png" alt="Biology"
                   class="w-[36px] h-[36px] md:w-[42px] md:h-[42px]" />
              <span class="font-bold text-[14px] md:text-[16px] text-black group-hover:text-white">Biology</span>
            </div>
            <div class="flex items-center gap-1.5">
              <span class="text-[13px] md:text-[14px] text-[#4B0082] group-hover:text-white">CHAPTERS</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[16px] h-[16px] group-hover:stroke-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </div>
          </div>
        </div>

        <div id="biologyDropdown" class="hidden mt-4 w-full bg-[#EDEDED] border rounded-[10px] p-4 z-10">
          <h3 class="font-bold text-[18px] sm:text-[20px] md:text-[24px] text-black mb-4">Biology</h3>
          <div class="grid grid-cols-2 gap-x-4 gap-y-3">
            <label class="flex items-center gap-2 text-[12px] sm:text-[13px] md:text-[14px]"><input type="checkbox"> <span>Cell Structure</span></label>
            <label class="flex items-center gap-2"><input type="checkbox"> <span>Biodiversity</span></label>
            <label class="flex items-center gap-2"><input type="checkbox"> <span>Bioenergetics</span></label>
            <label class="flex items-center gap-2"><input type="checkbox"> <span>Transport</span></label>
            <label class="flex items-center gap-2"><input type="checkbox"> <span>Biological Molecules</span></label>
            <label class="flex items-center gap-2"><input type="checkbox"> <span>Kingdom Animalia</span></label>
          </div>
        </div>
      </div>

      <!-- === CHEMISTRY === -->
      <div class="relative">
        <div class="bg-[#E4E4E4] rounded-[8px] p-2 md:p-3 hover:bg-gradient-to-b from-[#673AB7] to-[#2E1A51] custom-shadow group cursor-pointer"
             onclick="toggleDropdown('chemistryDropdown')">
          <div class="flex justify-between items-center p-1.5 md:p-2">
            <div class="flex items-center gap-3">
              <img src="https://img.icons8.com/color/96/test-tube.png" alt="Chemistry"
                   class="w-[36px] h-[36px] md:w-[42px] md:h-[42px]" />
              <span class="font-bold text-[14px] md:text-[16px] text-black group-hover:text-white">Chemistry</span>
            </div>
            <div class="flex items-center gap-1.5">
              <span class="text-[13px] md:text-[14px] text-[#4B0082] group-hover:text-white">CHAPTERS</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[16px] h-[16px] group-hover:stroke-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </div>
          </div>
        </div>

        <div id="chemistryDropdown" class="hidden mt-4 w-full bg-[#EDEDED] border rounded-[10px] p-4 z-10">
          <h3 class="font-bold text-[18px] sm:text-[20px] md:text-[24px] text-black mb-4">Chemistry</h3>
          <div class="grid grid-cols-2 gap-x-4 gap-y-3">
            <label class="flex items-center gap-2"><input type="checkbox"> <span>Atomic Structure</span></label>
            <label class="flex items-center gap-2"><input type="checkbox"> <span>Periodic Table</span></label>
            <label class="flex items-center gap-2"><input type="checkbox"> <span>Chemical Bonding</span></label>
            <label class="flex items-center gap-2"><input type="checkbox"> <span>States of Matter</span></label>
          </div>
        </div>
      </div>

      <!-- === PHYSICS === -->
      <div class="relative">
        <div class="bg-[#E4E4E4] rounded-[8px] p-2 md:p-3 hover:bg-gradient-to-b from-[#673AB7] to-[#2E1A51] custom-shadow group cursor-pointer"
             onclick="toggleDropdown('physicsDropdown')">
          <div class="flex justify-between items-center p-1.5 md:p-2">
            <div class="flex items-center gap-3">
              <img src="https://img.icons8.com/color/96/physics.png" alt="Physics"
                   class="w-[36px] h-[36px] md:w-[42px] md:h-[42px]" />
              <span class="font-bold text-[14px] md:text-[16px] text-black group-hover:text-white">Physics</span>
            </div>
            <div class="flex items-center gap-1.5">
              <span class="text-[13px] md:text-[14px] text-[#4B0082] group-hover:text-white">CHAPTERS</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[16px] h-[16px] group-hover:stroke-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </div>
          </div>
        </div>

        <div id="physicsDropdown" class="hidden mt-4 w-full bg-[#EDEDED] border rounded-[10px] p-4 z-10">
          <h3 class="font-bold text-[18px] sm:text-[20px] md:text-[24px] text-black mb-4">Physics</h3>
          <div class="grid grid-cols-2 gap-x-4 gap-y-3">
            <label class="flex items-center gap-2"><input type="checkbox"> <span>Motion and Force</span></label>
            <label class="flex items-center gap-2"><input type="checkbox"> <span>Work and Energy</span></label>
            <label class="flex items-center gap-2"><input type="checkbox"> <span>Waves and Sound</span></label>
            <label class="flex items-center gap-2"><input type="checkbox"> <span>Current Electricity</span></label>
          </div>
        </div>
      </div>
<!-- === ENGLISH === -->
<div class="relative">
  <div class="bg-[#E4E4E4] rounded-[8px] p-2 md:p-3 hover:bg-gradient-to-b from-[#673AB7] to-[#2E1A51] custom-shadow group cursor-pointer"
       onclick="toggleDropdown('englishDropdown')">
    <div class="flex justify-between items-center p-1.5 md:p-2">
      <div class="flex items-center gap-3">
        <img src="https://img.icons8.com/color/96/book.png" alt="English"
             class="w-[36px] h-[36px] md:w-[42px] md:h-[42px]" />
        <span class="font-bold text-[14px] md:text-[16px] text-black group-hover:text-white">English</span>
      </div>
      <div class="flex items-center gap-1.5">
        <span class="text-[13px] md:text-[14px] text-[#4B0082] group-hover:text-white">CHAPTERS</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-[16px] h-[16px] group-hover:stroke-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </div>
    </div>
  </div>

  <!-- English Dropdown -->
  <div id="englishDropdown" class="hidden mt-4 w-full bg-[#EDEDED] border rounded-[10px] p-4 z-10">
    <h3 class="font-bold text-[18px] sm:text-[20px] md:text-[24px] text-black mb-4">English</h3>
    <div class="grid grid-cols-2 gap-x-4 gap-y-3">
      <label class="flex items-center gap-2"><input type="checkbox"> <span>Grammar</span></label>
      <label class="flex items-center gap-2"><input type="checkbox"> <span>Comprehension</span></label>
      <label class="flex items-center gap-2"><input type="checkbox"> <span>Essay Writing</span></label>
      <label class="flex items-center gap-2"><input type="checkbox"> <span>Vocabulary</span></label>
      <label class="flex items-center gap-2"><input type="checkbox"> <span>Sentence Correction</span></label>
      <label class="flex items-center gap-2"><input type="checkbox"> <span>Reading Skills</span></label>
    </div>
  </div>
</div>

    </div>
  </div>
  <!-- 🔁 Toggle Script -->
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
<script>
 document.addEventListener('DOMContentLoaded', function() {
            // Select all dropdown content containers and arrow icons using classes
            const dropdownContents = document.querySelectorAll('.dropdown-content');
            const arrowIcons = document.querySelectorAll('.arrow-icon');
            const sidebarNav = document.getElementById('sidebarNav');
            const menuItems = sidebarNav.querySelectorAll('.menu-item'); // All menu items

            const LAST_ACTIVE_MENU_ITEM = 'lastActiveMenuItem';

            // Function to reset all menu items to their inactive state
            function resetAllMenuItems() {
                menuItems.forEach(mi => {
                    mi.classList.remove('bg-[#673AB7]', 'active-menu'); // Remove background and active class
                    const link = mi.querySelector('a');
                    if (link) link.classList.remove('text-white'); // Reset link text color
                    const span = mi.querySelector('span');
                    if (span) span.classList.remove('text-white'); // Reset span text color (for 'Products')
                    const icon = mi.querySelector('.icon');
                    if (icon) icon.style.filter = ''; // Reset icon color (remove invert filter)
                });

                // Close all dropdowns and reset their arrows
                dropdownContents.forEach(dropdown => {
                    dropdown.classList.add('max-h-0');
                    dropdown.style.maxHeight = '0px';
                });
                arrowIcons.forEach(arrow => {
                    arrow.classList.remove('rotate-180');
                    arrow.style.filter = '';
                });
            }

            // Function to set the active state for a specific menu item
            function setActiveMenuItem(itemToActivate) {
                resetAllMenuItems(); // Always reset all first

                if (itemToActivate) {
                    itemToActivate.classList.add('bg-[#673AB7]', 'active-menu');
                    const link = itemToActivate.querySelector('a');
                    if (link) link.classList.add('text-white');
                    const span = itemToActivate.querySelector('span');
                    if (span) span.classList.add('text-white');
                    const icon = itemToActivate.querySelector('.icon');
                    if (icon) icon.style.filter = 'invert(100%)';

                    // Check if the activated item is a child of any dropdown
                    let parentDropdownTrigger = null;
                    dropdownContents.forEach(dropdown => {
                        if (dropdown.contains(itemToActivate)) {
                            // Find the parent menu-item that triggers this dropdown
                            parentDropdownTrigger = document.querySelector(`[data-dropdown-target="${dropdown.id}"]`);
                        }
                    });

                    if (parentDropdownTrigger) {
                        // Activate the parent dropdown trigger
                        parentDropdownTrigger.classList.add('bg-[#673AB7]', 'active-menu');
                        parentDropdownTrigger.querySelector('.icon').style.filter = 'invert(100%)';
                        parentDropdownTrigger.querySelector('span').classList.add('text-white');

                        // Open the parent dropdown
                        const targetDropdownId = parentDropdownTrigger.dataset.dropdownTarget;
                        const targetDropdown = document.getElementById(targetDropdownId);
                        targetDropdown.classList.remove('max-h-0');
                        targetDropdown.style.maxHeight = targetDropdown.scrollHeight + 'px';

                        // Rotate and color the parent's arrow
                        const targetArrowId = parentDropdownTrigger.dataset.arrowTarget;
                        const targetArrow = document.getElementById(targetArrowId);
                        targetArrow.classList.add('rotate-180');
                        targetArrow.style.filter = 'invert(100%)';
                    }

                    // Save the active item's ID to localStorage
                    localStorage.setItem(LAST_ACTIVE_MENU_ITEM, itemToActivate.dataset.id);
                } else {
                    localStorage.removeItem(LAST_ACTIVE_MENU_ITEM);
                }
            }

            // Centralized function to toggle any dropdown
            function toggleAnyDropdown(triggerElement) {
                const targetDropdownId = triggerElement.dataset.dropdownTarget;
                const targetArrowId = triggerElement.dataset.arrowTarget;

                const targetDropdown = document.getElementById(targetDropdownId);
                const targetArrow = document.getElementById(targetArrowId);

                const isCollapsed = targetDropdown.classList.contains('max-h-0');

                // Close all other dropdowns before opening a new one,
                // but keep the current dropdown (if it's being closed) in its state
                dropdownContents.forEach(dropdown => {
                    if (dropdown.id !== targetDropdownId) { // Close others
                        dropdown.classList.add('max-h-0');
                        dropdown.style.maxHeight = '0px';
                        const correspondingTrigger = document.querySelector(`[data-dropdown-target="${dropdown.id}"]`);
                        if (correspondingTrigger) {
                             const correspondingArrow = document.getElementById(correspondingTrigger.dataset.arrowTarget);
                             if(correspondingArrow) {
                                correspondingArrow.classList.remove('rotate-180');
                                correspondingArrow.style.filter = '';
                             }
                        }
                    }
                });


                if (isCollapsed) {
                    // Open the target dropdown
                    setActiveMenuItem(triggerElement); // Activate the dropdown header itself
                    targetDropdown.classList.remove('max-h-0');
                    targetDropdown.style.maxHeight = targetDropdown.scrollHeight + 'px';
                    targetArrow.classList.add('rotate-180');
                    targetArrow.style.filter = 'invert(100%)';
                } else {
                    // Close the target dropdown
                    targetDropdown.style.maxHeight = targetDropdown.scrollHeight + 'px';
                    void targetDropdown.offsetWidth; // Trigger reflow
                    targetDropdown.classList.add('max-h-0');
                    targetDropdown.style.maxHeight = '0px';

                    // Deactivate the trigger and reset its arrow
                    // If a child of this dropdown was active, it will be reset by setActiveMenuItem's initial reset
                    triggerElement.classList.remove('bg-[#673AB7]', 'active-menu');
                    triggerElement.querySelector('.icon').style.filter = '';
                    triggerElement.querySelector('span').classList.remove('text-white');
                    targetArrow.classList.remove('rotate-180');
                    targetArrow.style.filter = '';

                }
            }


            // Event listener for sidebar menu item clicks
            sidebarNav.addEventListener('click', function(event) {
                const clickedItem = event.target.closest('.menu-item');

                if (clickedItem) {
                    // Check if the clicked item is a dropdown trigger
                    if (clickedItem.hasAttribute('data-dropdown-target')) {
                        toggleAnyDropdown(clickedItem);
                    } else {
                        // For regular menu items (or sub-items of dropdowns)
                        setActiveMenuItem(clickedItem);
                    }
                }
            });

            // Initial setup on page load to determine the active state
            function initializeActiveState() {
                const currentPath = window.location.pathname.split('/').pop();
                let itemToActivate = null;

                // Priority 1: Find an item whose link matches the current page URL
                menuItems.forEach(mi => {
                    const link = mi.querySelector('a');
                    if (link && link.href) {
                        const linkPath = link.href.split('/').pop();
                        // Special handling for 'Sidebar.html' (can also be '' for index.html or root)
                        const isHomePage = (linkPath === 'Sidebar.html' && (currentPath === '' || currentPath === 'Sidebar.html' || currentPath === 'index.html'));

                        if (linkPath === currentPath || isHomePage) {
                            itemToActivate = mi;
                        }
                    }
                });

                if (itemToActivate) {
                    setActiveMenuItem(itemToActivate);
                } else {
                    // Priority 2: If no direct URL match, try localStorage
                    let lastActiveId = localStorage.getItem(LAST_ACTIVE_MENU_ITEM);
                    if (lastActiveId) {
                        itemToActivate = document.querySelector(`[data-id="${lastActiveId}"]`);
                        if (itemToActivate) {
                            setActiveMenuItem(itemToActivate);
                        } else {
                            // If ID in localStorage but element not found, clear storage and default
                            localStorage.removeItem(LAST_ACTIVE_MENU_ITEM);
                            setActiveMenuItem(document.querySelector('[data-id="home"]'));
                        }
                    } else {
                        // Priority 3: No match found by URL or localStorage, default to 'Home'
                        setActiveMenuItem(document.querySelector('[data-id="home"]'));
                    }
                }
            }

            initializeActiveState();
        });

  function toggleDropdown(id, element) {
    // Hide other dropdowns
    document.querySelectorAll('[id$="Dropdown"]').forEach(drop => {
      if (drop.id !== id) drop.classList.add('hidden');
    });

    const dropdown = document.getElementById(id);
    dropdown.classList.toggle('hidden');
  }

</script>
</body>
</html>
