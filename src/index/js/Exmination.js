// dropdown toggle 

 const subjects = ['english', 'physics', 'chemistry', 'biology', 'reasoning'];

    // Helper function to get the currently active content section (e.g., chapterWiseContent, pastPapersContent)
    function getActiveSectionElement() {
        const sectionIds = ['chapterWiseContent', 'pastPapersContent', 'mockTestContent'];
        for (const id of sectionIds) {
            const el = document.getElementById(id);
            if (el && !el.classList.contains('hidden')) {
                return el;
            }
        }
        return null; // No active section found
    }

    function toggleChapters(subject) {
        const activeSection = getActiveSectionElement();

        if (!activeSection) {
            console.warn("No active content section found to toggle chapters within.");
            return;
        }

        subjects.forEach(sub => {
            const content = activeSection.querySelector(`#chapters-${sub}`);
            const header = activeSection.querySelector(`#header-${sub}`);
            const arrow = activeSection.querySelector(`#arrow-${sub}`);

            if (!content || !header || !arrow) {
            }

            if (sub === subject) {
                const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';
                if (isOpen) {
                    content.style.maxHeight = '0px';
                    content.style.paddingTop = '0px';
                    content.style.paddingBottom = '0px';
                    content.style.opacity = '0';
                    arrow.classList.remove('rotate-180');
                    // Revert to inactive header styles (as defined in your HTML's inactive headers)
                    header.classList.remove('bg-[#47287f]', 'text-white', 'active-shadow', 'active-header');
                    header.classList.add('bg-[#d9d9d9]', 'text-[#673AB7]', 'inactive-header');

                } else {
                    // Temporarily set height to auto to get scrollHeight, then set explicit height
                    content.style.maxHeight = 'auto'; // Temporarily set to auto
                    const scrollHeight = content.scrollHeight;
                    content.style.maxHeight = '0px'; // Reset before animating
                    // Trigger reflow to ensure the browser registers the 0px height before setting the final height
                    void content.offsetWidth; 

                    content.style.maxHeight = scrollHeight + 24 + "px"; // Add padding values (12px top + 12px bottom)
                    content.style.paddingTop = '12px';
                    content.style.paddingBottom = '12px';
                    content.style.opacity = '1';
                    arrow.classList.add('rotate-180');
                    // Apply active header styles (as defined in your HTML's active header)
                    header.classList.add('bg-[#47287f]', 'text-white', 'active-shadow', 'active-header');
                    header.classList.remove('bg-[#d9d9d9]', 'text-[#673AB7]', 'inactive-header');
                }
            } else {
                // Close other open sections within the active section
                const otherContent = activeSection.querySelector(`#chapters-${sub}`);
                const otherArrow = activeSection.querySelector(`#arrow-${sub}`);
                const otherHeader = activeSection.querySelector(`#header-${sub}`);

                if (otherContent && otherArrow && otherHeader) {
                    otherContent.style.maxHeight = '0px';
                    otherContent.style.paddingTop = '0px';
                    otherContent.style.paddingBottom = '0px';
                    otherContent.style.opacity = '0';
                    otherArrow.classList.remove('rotate-180');
                    otherHeader.classList.remove('bg-[#47287f]', 'text-white', 'active-shadow', 'active-header');
                    otherHeader.classList.add('bg-[#d9d9d9]', 'text-[#673AB7]', 'inactive-header');
                }
            }
        });
    }

    // --- Tab Switching Logic (Chapter Wise, Past Papers, Mock Test) ---
    document.addEventListener('DOMContentLoaded', () => {
        const segmentButtons = document.querySelectorAll('[data-segment]');
        const chapterWiseContent = document.getElementById('chapterWiseContent');
        const pastPapersContent = document.getElementById('pastPapersContent');
        const mockTestContent = document.getElementById('mockTestContent');

        const segmentSections = {
            'chapter-wise': chapterWiseContent,
            'past-papers': pastPapersContent,
            'mock-test': mockTestContent
        };

        // Function to handle tab switching
        function switchTab(targetTab) {
            // Update button styles
            segmentButtons.forEach(btn => {
                btn.classList.remove('bg-[#673AB7]', 'text-white');
                btn.classList.add('text-[#6B7280]', 'hover:bg-gray-200');
            });
            const clickedButton = document.querySelector(`[data-segment="${targetTab}"]`);
            if (clickedButton) {
                clickedButton.classList.add('bg-[#673AB7]', 'text-white');
                clickedButton.classList.remove('text-[#6B7280]', 'hover:bg-gray-200');
            }

            // Show the matching section and hide others
            Object.keys(segmentSections).forEach(key => {
                const sectionDiv = segmentSections[key];
                if (sectionDiv) { // Check if the section div exists
                    if (key === targetTab) {
                        sectionDiv.classList.remove('hidden');
                    } else {
                        sectionDiv.classList.add('hidden');
                    }
                }
            });

            subjects.forEach(sub => {
                const content = document.getElementById(`chapters-${sub}`);
                const header = document.getElementById(`header-${sub}`);
                const arrow = document.getElementById(`arrow-${sub}`);

                if (content && header && arrow) {
                    content.style.maxHeight = '0px';
                    content.style.paddingTop = '0px';
                    content.style.paddingBottom = '0px';
                    content.style.opacity = '0';
                    arrow.classList.remove('rotate-180');
                 
                    header.classList.remove('bg-[#47287f]', 'text-white', 'active-shadow', 'active-header');
                    header.classList.add('bg-[#d9d9d9]', 'text-[#673AB7]', 'inactive-header');
                }
            });

            if (targetTab === 'past-papers') {
          
                toggleChapters('english');
            } else if (targetTab === 'chapter-wise') {
                toggleChapters('english'); 
            }
        }
        segmentButtons.forEach(button => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-segment');
                switchTab(target);
            });
        });

        switchTab('chapter-wise');
    });



    // ........................................................

    // dropdown sidebar 


    

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


