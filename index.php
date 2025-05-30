<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cooks & Craft</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts en style -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <style>
        body {
          font-family: 'Playfair Display', sans-serif;
        }
        nav ul li a:hover {
          transform: scale(1.05);
        }
        html {
          scroll-behavior: smooth;
        }
      </style>
    
</head>




<body class="bg-[#D9A49C]">
    
  <nav class="fixed top-0 left-0 w-full bg-[#D9A49C]/90 text-white p-4 shadow-lg backdrop-blur-md z-50">
    <div class="container mx-auto flex justify-between items-center">
        <a href="index.html" class="text-2xl text-white font-bold transform hover:scale-105 transition-transform duration-200">Cookcrafts</a>
        
        <!-- Desktop Navigatie -->
        <ul class="hidden md:flex space-x-6">
            <li><a href="index.html" class="text-white hover:text-black font-bold transition-colors duration-200">Home</a></li>
            <li><a href="#section1" class="text-white hover:text-black transition-colors duration-200">Producten</a></li>
        </ul>
        
        <!-- Mobiele Menu Button -->
        <button id="mobileMenuButton" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
    
    <!-- Mobiele Menu  -->
    <div id="mobileMenu" class="mobile-menu hidden md:hidden bg-[#D9A49C]/95 backdrop-blur-sm w-full left-0 px-4 pb-4 rounded-lg mt-5">
        <ul class="flex flex-col space-y-3">
            <li><a href="index.html" class="block py-2 text-white hover:text-black font-bold transition-colors duration-200">Home</a></li>
            <li><a href="#section1" class="block py-2 text-white hover:text-black transition-colors duration-200">Producten</a></li>
        </ul>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
          const mobileMenuButton = document.getElementById('mobileMenuButton');
          const mobileMenu = document.getElementById('mobileMenu');
          
          mobileMenuButton.addEventListener('click', function() {
              const isHidden = mobileMenu.classList.contains('hidden');
              
              if (isHidden) {
                  mobileMenu.classList.remove('hidden');
                  mobileMenu.classList.add('block');
              } else {
                  mobileMenu.classList.add('hidden');
                  mobileMenu.classList.remove('block');
              }
          });
          
          // Close mobile menu when clicking on a link
          document.querySelectorAll('#mobileMenu a').forEach(link => {
              link.addEventListener('click', function() {
                  mobileMenu.classList.add('hidden');
                  mobileMenu.classList.remove('block');
              });
          });
          
          // Close mobile menu when clicking outside
          document.addEventListener('click', function(event) {
              if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                  mobileMenu.classList.add('hidden');
                  mobileMenu.classList.remove('block');
              }
          });
      });
    </script>

</nav>




      <div class="relative w-full h-screen pt-[72px]"> 
  
        <!-- Achtergrond hero sectie -->
        <img 
          src="images/keuken.jpg" 
          class="absolute inset-0 w-full h-full object-cover object-center"
          alt="Kitchen Background"
        >
        
        
        <div class="relative z-10 flex flex-col items-center justify-center h-full px-4">
          <h1 class="text-white text-3xl sm:text-4xl md:text-5xl font-bold mb-4 drop-shadow-[0_2px_4px_rgba(0,0,0,0.5)] text-center">
            Cooks & Crafts
          </h1>
          <a href="#section1" class="mt-4 bg-green-600 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-white hover:text-black hover:scale-105 transition-all duration-300">Shoppen</a>
        </div>
      </div>
      

      <section id="section1" class="w-full py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">

          <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-white">Producten</h1>
          </div>
      
          <!-- Producten grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Product 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 ">
              <div class="h-48 bg-gray-200 flex items-center justify-center">
                <img src="images/pannen/pannenset.png">
              </div>
              <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">KOQI 6044180000 Pannenset</h3>
                <p class="text-gray-600 mb-4">Super mooie pannenset</p>
                <div class="flex justify-between items-center">
                  <span class="text-lg font-bold text-gray-900">€350</span>
                  <a href="pannenset.php" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition-colors duration-300">
                    Kopen
                    
                  </a>
                </div>
              </div>
            </div>
      
            <!-- Product 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
              <div class="h-48 bg-gray-200 flex items-center justify-center">
                <img src="images/quooker.png">
              </div>
              <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">QUOOKER 22+FRCHR</h3>
                <p class="text-gray-600 mb-4">Super mooie quooker set</p>
                <div class="flex justify-between items-center">
                  <span class="text-lg font-bold text-gray-900">€599</span>
                  <a href="quooker.html" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition-colors duration-300">
                    Kopen
                    
                  </a>
                </div>
              </div>
            </div>
      
            <!-- Product 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
              <div class="h-48 bg-gray-200 flex items-center justify-center">
                <img src="images/vaatwasser.jpg">
              </div>
              <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Samsung K0979482P Vaatwasser</h3>
                <p class="text-gray-600 mb-4">Super mooie vaatwasser</p>
                <div class="flex justify-between items-center">
                  <span class="text-lg font-bold text-gray-900">€1500</span>
                  <a href="vaatwasser.html" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition-colors duration-300">
                    Kopen
                    
                  </a>
                </div>
              </div>
            </div>
      

      

          </div>
        </div>
      </section>

</body>
</html>