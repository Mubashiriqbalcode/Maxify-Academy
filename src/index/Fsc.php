<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MDCAT Prep Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
 
</head>

<body class="bg-white font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <?php
// no isHomePage set here
include '../Includes/Sidebar.php';
?>


   


        <!-- Main Content -->
        <main class="flex-1 p-8">
            <h1 class="text-3xl md:text-5xl text-center font-bold text-purple-700 mb-4">F.SC Prep Hub</h1>
            <p class="text-lg text-gray-700 mb-4 max-w-xl">
F.SC Practice Zone is your one-stop platform for comprehensive F.SC preparation.We offer:
            </p>

            <!-- Navigation Tabs -->
            <div class="flex justify-center gap-4 mb-10">
                <button onclick="showSection('chapterwise-english')"
                    class="bg-purple-600 text-white py-2 px-6 rounded-full font-semibold">Chapter Wise</button>
                    
                <button onclick="showSection('pastpapers')"
                    class="bg-purple-600 text-white py-2 px-6 rounded-full font-semibold">Past Papers</button>
                <button onclick="showSection('mocktests')"
                    class="bg-purple-600 text-white py-2 px-6 rounded-full font-semibold">Mock Test</button>
            </div>

            <!-- Sections -->
            <div id="chapterwise-english">
                <div onclick="toggleChapters('english')"
                    class="cursor-pointer flex items-center justify-between bg-gray-200 rounded-2xl px-6 py-4 shadow mb-4">
                    <div class="flex items-center gap-4">
                        <img src="../Images/english.png" alt="English" class="w-12 h-12">
                        <p class="text-xl font-semibold text-purple-700">English</p>
                    </div>
                    <span class="text-purple-700 font-semibold">Chapters ▼</span>
                </div>
                <div id="chapters-english" class="hidden mb-4 space-y-2">
                    <div class="flex justify-between items-center bg-gray-100 p-3 rounded-xl shadow">
                        <div class="flex items-center gap-3">
                            <img src="../Images/chap1.png" alt="Chapter Icon" class="w-8 h-8">
                            <span class="font-medium">Ch 1: Grammar</span>
                        </div>
                        <button class="bg-purple-600 text-white px-4 py-1 rounded-full text-sm">Open</button>
                    </div>
                    <div class="flex justify-between items-center bg-gray-100 p-3 rounded-xl shadow">
                        <div class="flex items-center gap-3">
                            <img src="../Images/chap2.png" alt="Chapter Icon" class="w-8 h-8">
                            <span class="font-medium">Ch 2: Vocabulary</span>
                        </div>
                        <button class="bg-purple-600 text-white px-4 py-1 rounded-full text-sm">Open</button>
                    </div>
                </div>
            </div>

           


            
            


             
            <div id="pastpapers" class="hidden">
                <div onclick="toggleChapters('pastpapers')"
                    class="cursor-pointer flex items-center justify-between bg-gray-200 rounded-2xl px-6 py-4 shadow mb-4">
                    <div class="flex items-center gap-4">
                        <img src="../Images/maxfylogo.png" alt="Past Papers" class="w-12 h-12">
                        <p class="text-xl font-semibold text-purple-700">Past Papers</p>
                    </div>
                    <span class="text-purple-700 font-semibold">Years ▼</span>
                </div>
                <div id="chapters-pastpapers" class="hidden space-y-2">
                    <div class="flex justify-between items-center bg-gray-100 p-3 rounded-xl shadow">
                        <span class="font-medium">2023</span>
                        <button class="bg-purple-600 text-white px-4 py-1 rounded-full text-sm">View</button>
                    </div>
                    <div class="flex justify-between items-center bg-gray-100 p-3 rounded-xl shadow">
                        <span class="font-medium">2022</span>
                        <button class="bg-purple-600 text-white px-4 py-1 rounded-full text-sm">View</button>
                    </div>
                </div>
            </div>

            <div id="mocktests" class="hidden">
                <div onclick="toggleChapters('mock')"
                    class="cursor-pointer flex items-center justify-between bg-gray-200 rounded-2xl px-6 py-4 shadow mb-4">
                    <div class="flex items-center gap-4">
                        <img src="../Images/maxfylogo.png" alt="Mock Test" class="w-12 h-12">
                        <p class="text-xl font-semibold text-purple-700">Mock Test</p>
                    </div>
                    <span class="text-purple-700 font-semibold">Tests ▼</span>
                </div>
                <div id="chapters-mock" class="hidden space-y-2">
                    <div class="flex justify-between items-center bg-gray-100 p-3 rounded-xl shadow">
                        <span class="font-medium">Mock Test 1</span>
                        <button class="bg-purple-600 text-white px-4 py-1 rounded-full text-sm">Start</button>
                    </div>
                    <div class="flex justify-between items-center bg-gray-100 p-3 rounded-xl shadow">
                        <span class="font-medium">Mock Test 2</span>
                        <button class="bg-purple-600 text-white px-4 py-1 rounded-full text-sm">Start</button>
                    </div>
                </div>
            </div>

        </main>
    </div>
    

<script src="js/Exmination.js"></script>
</body>

</html>