<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxify Pricing Plans</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
    #cartPanel {
        transition-duration: 300ms;
    }
</style>

</head>

<body class="bg-gray-100">

    <div class="flex p-3">

      <?php
// no isHomePage set here
include '../Includes/Sidebar.php';
?>


       <main class="flex-1 p-10 relative z-10">
    <h1 class="text-3xl font-bold text-center text-[#673AB7] mb-6">Maxify Pricing Plans</h1>
    <h2 class="text-center mb-4 text-gray-700 font-semibold">Choose Plans</h2>

    <!-- Plan Buttons -->
    <div class="flex justify-center space-x-3 mb-10">
      <button id="btn1" onclick="activateCard(1)" class="plan-btn border border-[#673AB7] text-white bg-[#673AB7] px-4 py-2 rounded-lg font-semibold">All In One</button>
      <button id="btn2" onclick="activateCard(2)" class="plan-btn border border-[#673AB7] text-[#673AB7] px-4 py-2 rounded-lg font-semibold">MDCAT</button>
      <button id="btn3" onclick="activateCard(3)" class="plan-btn border border-[#673AB7] text-[#673AB7] px-4 py-2 rounded-lg font-semibold">NUMS</button>
      <button id="btn4" onclick="activateCard(4)" class="plan-btn border border-[#673AB7] text-[#673AB7] px-4 py-2 rounded-lg font-semibold">MDCAT + NUMS</button>
    </div>

    <!-- Pricing Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
      <!-- Card 1 -->
      <div class="pricing-card bg-white rounded-xl shadow-lg p-6 text-center h-[420px] flex flex-col justify-between">
        <div>
          <h3 class="text-xl font-bold mb-2">Beginner</h3>
          <p class="text-3xl font-bold mb-4">$10.00</p>
          <p class="text-gray-600 mb-6 leading-relaxed">It is a long established fact that a reader will be distracted.</p>
          <ul class="text-left space-y-3 mb-6">
            <li class="font-semibold text-sm">✔️ Basic Access</li>
            <li class="font-semibold text-sm">✔️ Limited Questions</li>
            <li class="font-semibold text-sm">✔️ No Mock Tests</li>
          </ul>
        </div>
        <button class="buy-btn w-full bg-gray-200 hover:bg-gray-300 font-bold py-2 px-4 rounded">Buy Now</button>
      </div>

      <!-- Card 2 -->
      <div class="pricing-card bg-white rounded-xl shadow-lg p-6 text-center h-[420px] flex flex-col justify-between">
        <div>
          <h3 class="text-xl font-bold mb-2">Moderate</h3>
          <p class="text-3xl font-bold mb-4">$30.00</p>
          <p class="text-gray-600 mb-6 leading-relaxed">A great choice for regular learners with access to mock tests.</p>
          <ul class="text-left space-y-3 mb-6">
            <li class="font-semibold text-sm">✔️ Full Access</li>
            <li class="font-semibold text-sm">✔️ Chapterwise Questions</li>
            <li class="font-semibold text-sm">✔️ Mock Tests</li>
          </ul>
        </div>
        <button class="buy-btn w-full bg-gray-200 hover:bg-gray-300 font-bold py-2 px-4 rounded">Buy Now</button>
      </div>

      <!-- Card 3 -->
      <div class="pricing-card bg-white rounded-xl shadow-lg p-6 text-center h-[420px] flex flex-col justify-between">
        <div>
          <h3 class="text-xl font-bold mb-2">Professional</h3>
          <p class="text-3xl font-bold mb-4">$45.00</p>
          <p class="text-gray-600 mb-6 leading-relaxed">Full premium access to all tests, analytics, and priority support.</p>
          <ul class="text-left space-y-3 mb-6">
            <li class="font-semibold text-sm">✔️ Premium Content</li>
            <li class="font-semibold text-sm">✔️ All Pakistan Past Papers</li>
            <li class="font-semibold text-sm">✔️ 24/7 Support</li>
          </ul>
        </div>
        <button class="buy-btn w-full bg-gray-200 hover:bg-gray-300 font-bold py-2 px-4 rounded">Buy Now</button>
      </div>
    </div>
  </main>
<!-- Sidebar -->
<div id="sidebar"
  class="fixed top-0 right-0 h-screen w-[510px]  transform translate-x-full transition-transform duration-500 z-50 p-0 overflow-hidden flex items-start justify-center">

  <!-- Scaled Inner Container -->
  <div class="scale-[0.8] origin-top-right w-full h-[738px]">
    <div class="bg-white rounded-lg shadow-xl w-full h-full flex flex-col items-center justify-between p-4 gap-5">

      <!-- Header -->
      <div class="w-full flex items-center justify-between border-b border-gray-300 pb-4">
        <div class="flex items-center space-x-2">
        
          <div class="flex items-center space-x-2">
          <img src="../Images/material-symbols_cancel-rounded.png" alt="Close"
  onclick="closeSidebar()"
  class="w-[30px] h-[30px] cursor-pointer" />

            <span class="text-[22px] font-[400] text-[#000000] font-[Manrope]">Cart</span>
          </div>
        </div>
      </div>

      <!-- Middle Section -->
      <div class="flex flex-col items-center w-full space-y-6 py-6 flex-grow">

        <!-- Cart Button -->
        <button class="w-[320px] h-[52px] rounded-[104px] border-4 border-[#BC97FF] bg-[#673AB7] text-white text-[20px] leading-[22px] font-bold font-[Manrope] hover:bg-[#5e2ea0] transition duration-300">
          Cart
        </button>

        <!-- Cart Detail Card -->
        <div class="w-[426px] h-[289px] rounded-[10px] border-2 border-purple-200 bg-purple-50 p-4 font-[Manrope]">
          <h3 class="font-semibold text-[18px] text-[#000000]">Pre-Medical Bundle</h3>
          <p class="font-medium text-[18px] text-[#000000] mt-1">SKU: All In One Basic (All In One)</p>
          <p class="font-medium text-[18px] text-[#000000] mt-1">Our most affordable all in one plan to get you started.</p>

          <div class="mt-4 grid grid-cols-2 gap-2 text-[18px] text-[#000000] font-medium">
            <div>Courses:</div>
            <div>Physics, Chemistry, Biology</div>
            <div>Duration:</div>
            <div>Till 2025 Exams</div>
            <div>Price:</div>
            <div class="flex items-center justify-between">
              <span class="text-[12px] line-through">PKR. 15500</span>
              <span class="text-[18px] font-semibold">PKR. 13175</span>
            </div>
          </div>
        </div>

        <!-- Total Price -->
        <div class="w-full font-[Manrope] px-4">
          <h2 class="text-[28px] font-bold leading-[30px] text-[#000000]">Total</h2>
          <div class="flex items-baseline mt-1 space-x-2">
            <span class="text-[28px] font-bold text-purple-700">Rs. 13175</span>
            <span class="text-[20px] font-bold text-[#727272] line-through">Rs. 15500</span>
          </div>
        </div>
      </div>

      <!-- Bottom Checkout Button -->
      <div class="w-full flex justify-center pb-4">
       <a href="../Payment/Checkout.php">
  <button class="w-[426px] h-[46px] rounded-[30px] px-[28px] py-[12px] bg-gradient-to-b from-[#673AB7] to-[#2E1A51] text-white font-[Manrope] font-semibold text-[14px] leading-[22px] hover:opacity-90 transition duration-300">
    Proceed To Checkout
  </button>
</a>

      </div>

    </div>
  </div>
</div>

  </div>
</div>


  <!-- JavaScript -->
  <script>
    document.querySelectorAll('.buy-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.getElementById('sidebar').classList.remove('translate-x-full');
      });
    });

    function closeSidebar() {
      document.getElementById('sidebar').classList.add('translate-x-full');
    }
  </script>



    </div>

    <div id="cartPanel" class="fixed top-0 right-0 w-[320px] h-full bg-white shadow-2xl z-50 p-4 transition-transform transform translate-x-full">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-bold">Cart</h2>
        <button onclick="toggleCart(false)" class="text-red-600 font-bold text-lg">&times;</button>
    </div>
    <div class="bg-gray-100 p-3 rounded-xl shadow-inner mb-4">
        <h3 class="font-bold">Pre-Medical Bundle</h3>
        <p class="text-sm text-gray-600">SKU: All in One Basic (All in One)</p>
        <p class="text-sm text-gray-600">Our most affordable all in one plan to get you started.</p>
        <div class="mt-3">
            <p class="text-sm font-semibold">Courses:</p>
            <p class="text-sm">Duration: Till 2025 Exams</p>
            <p class="text-sm">Price: <span class="line-through text-gray-400">Rs. 15500</span> <span class="text-[#673AB7] font-bold">Rs. 13175</span></p>
        </div>
    </div>
    <div class="text-lg font-bold mb-2 text-[#673AB7]">Total</div>
    <div class="text-2xl text-[#673AB7] font-bold mb-4">Rs. 13175 <span class="text-sm text-gray-400 line-through">Rs. 15500</span></div>
    <a href="checkout.html" class="block text-center w-full bg-gradient-to-r from-[#673AB7] to-[#512da8] text-white py-2 rounded-full font-bold">Proceed To Checkout</a>
</div>

<script>
    
     const buttons = document.querySelectorAll('.plan-btn');
    const  cards = document.querySelectorAll('.pricing-card');
    const buyBtns = document.querySelectorAll('.buy-btn');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
        
            buttons.forEach(b => {
                b.classList.remove('bg-[#673AB7]', 'text-white');
                b.classList.add('text-[#673AB7]');
            });

   
            btn.classList.add('bg-[#673AB7]', 'text-white');

          
            cards.forEach(card => {
                card.classList.remove('hidden');
            });
        });
    });

    
    buyBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          
            cards.forEach(card => {
                card.classList.remove('border-2', 'border-[#673AB7]');
            });
            buyBtns.forEach(b => {
                b.classList.remove('bg-[#673AB7]', 'hover:bg-[#5a2ea4]', 'text-white');
                b.classList.add('bg-gray-200', 'hover:bg-gray-300', 'text-black');
            });

            // Highlight selected card
            const card = btn.closest('.pricing-card');
            card.classList.add('border-2', 'border-[#673AB7]');
            btn.classList.remove('bg-gray-200', 'hover:bg-gray-300', 'text-black');
            btn.classList.add('bg-[#673AB7]', 'hover:bg-[#5a2ea4]', 'text-white');
        });
    });

    // Default: show all cards on page load
    window.addEventListener('DOMContentLoaded', () => {
        cards.forEach(card => card.classList.remove('hidden'));
    });

function toggleCart(show) {
        const panel = document.getElementById('cartPanel');
        if (show) {
            panel.classList.remove('translate-x-full');
            // Enable global click listener to close cart
            setTimeout(() => {
                document.addEventListener('click', outsideClickListener);
            }, 0);
        } else {
            panel.classList.add('translate-x-full');
            // Remove the listener once hidden
            document.removeEventListener('click', outsideClickListener);
        }
    }

     

    
</script>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/payment.js"></script>
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


</script>
</body>

</html>
