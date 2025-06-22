<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MDCAT Prep Hub</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <style>
    .active-tab {
      background: #673AB7;
      color: white !important;
    }
    .active-subject {
      background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%) !important;
      box-shadow: 0px 10px 40px 0px #00000040 !important;
      color: white !important;
    }
    .subject-card {
      transition: all 0.7s ease-in-out;
    }
    .subject-card:hover {
      background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%);
      box-shadow: 0px 10px 40px 0px #00000040;
      color: white;
    }
    .chapters-label {
      transition: color 0.7s ease-in-out;
      color: #865ECD;
    }
    .subject-card:hover .chapters-label {
      color: white !important;
    }
    .active-subject .chapters-label {
      color: #EDE7F6 !important;
    }
    .active-subject:hover .chapters-label {
      color: white !important;
    }
  </style>
</head>
<body class="bg-white text-gray-900 font-sans">
  <div class="max-w-screen-xl mx-auto px-4 py-10 space-y-8">

    <!-- Title -->
    <div class="max-w-3xl mx-auto text-left space-y-6 transform scale-[0.95] origin-top">
      <h2 class="text-[40px] leading-[54px] font-bold text-[#673AB7]">MDCAT Prep Hub</h2>
      <p class="text-gray-800 text-lg leading-relaxed font-medium">
        MDCAT Practice Zone is your one-stop platform for comprehensive MDCAT preparation.<br>
        We offer:
      </p>
      <div class="flex flex-col sm:flex-row flex-wrap gap-3 text-gray-800 text-xl font-semibold">
        <span class="flex items-center"><i class="fas fa-check-square mr-2 text-green-600"></i> Chapter-wise MCQs</span>
        <span class="flex items-center"><i class="fas fa-check-square mr-2 text-green-600"></i> Past Papers</span>
        <span class="flex items-center"><i class="fas fa-check-square mr-2 text-green-600"></i> Mock Tests</span>
      </div>
    </div>

    <!-- Tabs -->
    <div class="w-full max-w-[820px] h-auto bg-[#F3F3F3] rounded-[40px] p-1 
                flex flex-col sm:flex-row items-stretch justify-center mx-auto shadow-sm mt-10">
      <!-- Chapter Wise -->
      <button data-segment="chapter-wise"
        class="flex-1 py-1 px-2 text-xs h-[44px]
               sm:py-2 sm:px-4 sm:text-sm sm:h-[48px]
               md:py-3 md:px-6 md:text-base md:h-[52px]
               rounded-[40px] font-semibold text-white bg-[#673AB7]
               transition-all duration-500 ease-in-out active-tab
               text-center whitespace-nowrap mb-2 sm:mb-0 sm:mr-1 flex items-center justify-center">
        Chapter Wise
      </button>

      <!-- Past Papers -->
      <button data-segment="past-papers"
        class="flex-1 py-1 px-2 text-xs h-[44px]
               sm:py-2 sm:px-4 sm:text-sm sm:h-[48px]
               md:py-3 md:px-6 md:text-base md:h-[52px]
               rounded-[40px] text-[#6B7280] font-semibold
               hover:bg-gray-200 transition-all duration-500 ease-in-out
               text-center whitespace-nowrap mb-2 sm:mb-0 sm:mx-1 flex items-center justify-center">
        Past Papers
      </button>

      <!-- Mock Test -->
      <button data-segment="mock-test"
        class="flex-1 py-1 px-2 text-xs h-[44px]
               sm:py-2 sm:px-4 sm:text-sm sm:h-[48px]
               md:py-3 md:px-6 md:text-base md:h-[52px]
               rounded-[40px] text-[#6B7280] font-semibold
               hover:bg-gray-200 transition-all duration-500 ease-in-out
               text-center whitespace-nowrap sm:ml-1 flex items-center justify-center">
        Mock Test
      </button>
    </div>

    <!-- Content -->
    <div id="content-container" class="w-full max-w-[1100px] mx-auto space-y-5 mt-6">

      <!-- Chapter Wise Section -->
      <div id="chapter-wise" class="content-section block space-y-5">
        <div id="subjects" class="space-y-4"></div>
      </div>

      <!-- Past Papers -->
      <div id="past-papers" class="content-section hidden">
        <p class="text-center text-gray-600">Past Papers content coming soon...</p>
      </div>

      <!-- Mock Tests -->
      <div id="mock-test" class="content-section hidden">
        <p class="text-center text-gray-600">Mock Tests content coming soon...</p>
      </div>

    </div>
  </div>

  <!-- Script -->
  <script>
    const subjects = [
      { id: 'english', name: 'English', icon: '../Images/english.png', chapters: ['Grammar', 'Vocabulary'] },
      { id: 'physics', name: 'Physics', icon: '../Images/physics.png', chapters: ['Kinematics', 'Dynamics'] },
      { id: 'chemistry', name: 'Chemistry', icon: '../Images/chemistry.png', chapters: ['Chemical Bonding', 'Thermodynamics'] },
      { id: 'biology', name: 'Biology', icon: '../Images/biology.png', chapters: ['Cell Structure', 'Genetics'] },
      { id: 'reasoning', name: 'Logical Reasoning', icon: '../Images/reasoning.png', chapters: ['Patterns', 'Series'] }
    ];

    document.addEventListener("DOMContentLoaded", () => {
      const container = document.getElementById('subjects');
      subjects.forEach(subject => {
        const html = `
          <div id="subject-${subject.id}" class="transition-all duration-700 ease-in-out">
            <div onclick="toggleChapters('${subject.id}')" id="header-${subject.id}"
              class="subject-card cursor-pointer flex items-center justify-between rounded-lg px-4 py-4 shadow-md bg-white">
              <div class="flex items-center gap-4">
                <img src="${subject.icon}" class="w-[48px] h-[48px]" />
                <p class="font-bold text-[22px] leading-6">${subject.name}</p>
              </div>
              <div class="flex items-center gap-2">
                <span class="chapters-label text-[18px] font-normal">Chapters</span>
                <img id="arrow-${subject.id}" src="../Images/mingcute_down-fill (2).png" class="w-6 h-6 transition-transform duration-500 ease-in-out" />
              </div>
            </div>
            <div id="chapters-${subject.id}" class="hidden bg-[#ededed] rounded-lg px-4 py-3 space-y-3 mt-2 transition-all duration-500 ease-in-out">
              ${subject.chapters.map((ch, idx) => `
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-3 py-2 rounded-md">
                  <div class="flex items-center gap-3">
                    <img src="../Images/chap${idx + 1}.png" class="w-9 h-9" />
                    <span class="text-[18px] font-semibold text-gray-800 leading-6">${ch}</span>
                  </div>
                  <a href="checkbox.html">
                    <button class="text-white text-xs font-medium rounded-full px-5 py-1.5"
                      style="background: linear-gradient(180deg, #673AB7 0%, #2E1A51 100%)">Attempt</button>
                  </a>
                </div>`).join('')}
            </div>
          </div>`;
        container.insertAdjacentHTML('beforeend', html);
      });

      // Tab switching logic
      const tabs = document.querySelectorAll("[data-segment]");
      const sections = document.querySelectorAll(".content-section");

      tabs.forEach(tab => {
        tab.addEventListener("click", () => {
          tabs.forEach(t => {
            t.classList.remove("active-tab");
            t.classList.add("text-[#6B7280]");
            t.classList.remove("text-white");
          });

          tab.classList.add("active-tab");
          tab.classList.remove("text-[#6B7280]");
          tab.classList.add("text-white");

          sections.forEach(sec => sec.classList.add("hidden"));
          const selectedId = tab.getAttribute("data-segment");
          document.getElementById(selectedId).classList.remove("hidden");
        });
      });
    });

    function toggleChapters(subject) {
      const content = document.getElementById(`chapters-${subject}`);
      const arrow = document.getElementById(`arrow-${subject}`);
      const header = document.getElementById(`header-${subject}`);
      const isOpen = !content.classList.contains("hidden");

      document.querySelectorAll('[id^="chapters-"]').forEach(c => c.classList.add("hidden"));
      document.querySelectorAll('[id^="arrow-"]').forEach(a => a.classList.remove("rotate-180"));
      document.querySelectorAll('[id^="header-"]').forEach(h => h.classList.remove("active-subject"));

      if (!isOpen) {
        content.classList.remove("hidden");
        arrow.classList.add("rotate-180");
        header.classList.add("active-subject");
      }
    }
  </script>
</body>
</html>
