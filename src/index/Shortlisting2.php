<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shortlisting</title>

   <link href="../../dist/output.css" rel="stylesheet">
   
   <link href="../../dist/input.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Manrope', sans-serif;
    }
  </style>
</head>
<body class="bg-white text-gray-800">
 <header class="lg:hidden fixed top-0 left-0 w-full bg-white shadow-md z-50 px-4 py-3 flex justify-between items-center">
  <button onclick="toggleSidebar()" class="w-6 h-6">
    <img src="../Images/quill_hamburger.png" alt="Menu" class="w-full h-full object-contain" />
  </button>
  <div class="absolute left-1/2 transform -translate-x-1/2">
    <img src="../Images/maxfylogo.png" alt="Logo" class="w-[46px] h-[46px] object-contain" />
  </div>
</header>

  <!-- Flex Layout -->
  <div class="flex min-h-screen">
    
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

    <!-- Right Main Content -->
    <main class="flex-1 px-4 py-6 lg:px-8">

      <!-- Title -->
      <h1 class="text-2xl font-semibold text-purple-700 text-center mb-6">Shortlisting</h1>

      <!-- Subject Card -->
      <div onclick="toggleChapters()" 
     class="hover:bg-gradient-to-b from-[#673AB7] to-[#2E1A51] custom-shadow group cursor-pointer mx-auto transition"
     style="width: 960px; height: 100px; border-radius: 10px; background-color: #E4E4E4;">
  
  <div class="flex justify-between items-center h-full px-6">
    <!-- Left Side -->
    <div class="flex items-center gap-4">
      <img src="https://cdn-icons-png.flaticon.com/128/2264/2264761.png" alt="Book Icon"
           class="w-[36px] h-[36px]" />
      <span class="font-bold text-sm md:text-base text-black group-hover:text-white">Biology</span>
    </div>

    <!-- Right Side -->
    <div class="flex items-center gap-2">
      <span class="text-sm text-[#4B0082] group-hover:text-white">CHAPTERS</span>
      <svg id="dropdownIcon"
           class="w-[16px] h-[16px] transition-transform duration-200 group-hover:stroke-white"
           fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
      </svg>
    </div>
  </div>
</div>


      <!-- Chapter List Dropdown -->
      <div id="chapterList"
     class="bg-gray-100 shadow-md hidden mt-4"
     style=" border-radius: 10px; padding: 24px; margin: auto;">

  <!-- Repeatable Chapter Item -->
  <div class="flex justify-between items-center border-b border-gray-300 py-3 px-2">
    <span class="text-gray-800 text-[15px] font-medium pl-2">Chapter # 1</span>
    <button class="bg-gradient-to-r from-purple-700 to-purple-500 text-white text-xs px-4 py-1 rounded-full shadow-sm hover:scale-105 transition-transform">PDF</button>
  </div>

  <div class="flex justify-between items-center border-b border-gray-300 py-3 px-2">
    <span class="text-gray-800 text-[15px] font-medium pl-2">Chapter # 2</span>
    <button class="bg-gradient-to-r from-purple-700 to-purple-500 text-white text-xs px-4 py-1 rounded-full shadow-sm hover:scale-105 transition-transform">PDF</button>
  </div>

  <div class="flex justify-between items-center border-b border-gray-300 py-3 px-2">
    <span class="text-gray-800 text-[15px] font-medium pl-2">Chapter # 3</span>
    <button class="bg-gradient-to-r from-purple-700 to-purple-500 text-white text-xs px-4 py-1 rounded-full shadow-sm hover:scale-105 transition-transform">PDF</button>
  </div>

  <div class="flex justify-between items-center border-b border-gray-300 py-3 px-2">
    <span class="text-gray-800 text-[15px] font-medium pl-2">Chapter # 4</span>
    <button class="bg-gradient-to-r from-purple-700 to-purple-500 text-white text-xs px-4 py-1 rounded-full shadow-sm hover:scale-105 transition-transform">PDF</button>
  </div>

  <div class="flex justify-between items-center border-b border-gray-300 py-3 px-2">
    <span class="text-gray-800 text-[15px] font-medium pl-2">Chapter # 5</span>
    <button class="bg-gradient-to-r from-purple-700 to-purple-500 text-white text-xs px-4 py-1 rounded-full shadow-sm hover:scale-105 transition-transform">PDF</button>
  </div>

  <div class="flex justify-between items-center py-3 px-2">
    <span class="text-gray-800 text-[15px] font-medium pl-2">Chapter # 6</span>
    <button class="bg-gradient-to-r from-purple-700 to-purple-500 text-white text-xs px-4 py-1 rounded-full shadow-sm hover:scale-105 transition-transform">PDF</button>
  </div>
</div>

    </main>
  </div>

  <script>
    function toggleChapters() {
      const list = document.getElementById("chapterList");
      const icon = document.getElementById("dropdownIcon");

      list.classList.toggle("hidden");
      icon.classList.toggle("rotate-180");
    }
  </script>
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
