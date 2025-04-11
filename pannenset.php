<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Pannenset | Cookcrafts</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Playfair Display', serif;
        }
        nav ul li a:hover {
            transform: scale(1.05);
            transition: transform 0.2s;
        }
        html {
            scroll-behavior: smooth;
        }
        .thumbnail:hover {
            border-color: #D9A49C !important;
        }
        .thumbnail.active {
            border-color: #D9A49C !important;
            border-width: 2px;
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
                <li><a href="index.html#section1" class="text-white hover:text-black transition-colors duration-200">Producten</a></li>
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
                <li><a href="index.html#section1" class="block py-2 text-white hover:text-black transition-colors duration-200">Producten</a></li>
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

    <!-- Product Section -->
    <section class="pt-24 pb-12 px-4 md:px-8 lg:px-12">
        <div class="container mx-auto max-w-6xl">
            <div class="flex flex-col md:flex-row gap-8 md:gap-12">
                <!-- Product Image Gallery -->
                <div class="md:w-1/2 bg-white p-6 rounded-xl shadow-lg">
                    <img id="mainImage" src="images/pannen/pannenset.png" alt="Premium Pannenset" class="w-full h-auto object-contain rounded-lg transition-opacity duration-300">
                    <div class="flex gap-4 mt-6">
                        <div onclick="changeImage('images/pannen/pannenset.png')" class="thumbnail w-1/4 border-2 border-gray-200 rounded-lg p-1 cursor-pointer active">
                            <img src="images/pannen/pannenset.png" alt="Pannenset Main View" class="w-full h-auto">
                        </div>
                        <div onclick="changeImage('images/pannen/Pan2.png')" class="thumbnail w-1/4 border border-gray-200 rounded-lg p-1 cursor-pointer">
                            <img src="images/pannen/Pan2.png" alt="Pannenset Side View" class="w-full h-auto">
                        </div>
                        <div onclick="changeImage('images/pannen/pan3.png')" class="thumbnail w-1/4 border border-gray-200 rounded-lg p-1 cursor-pointer">
                            <img src="images/pannen/pan3.png" alt="Pannenset Close-up" class="w-full h-auto">
                        </div>
                        <div onclick="changeImage('images/pannen/pan4.png')" class="thumbnail w-1/4 border border-gray-200 rounded-lg p-1 cursor-pointer">
                            <img src="images/pannen/pan4.png" alt="Pannenset Contents" class="w-full h-auto">
                        </div>
                    </div>
                </div>
                
                <!-- Product Details -->
                <div class="md:w-1/2">
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Premium Pannenset</h1>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            ★★★★★
                        </div>
                        <span class="text-white ml-2">(142 reviews)</span>
                    </div>
                    
                    <p class="text-2xl font-bold text-white mb-6">€189,99</p>
                    
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-xl p-6 mb-6">
                        <h2 class="text-xl font-bold text-white mb-3">Beschrijving</h2>
                        <p class="text-white mb-4">
                            Onze premium pannenset van 6-delige kookgerei is gemaakt van duurzaam roestvrij staal 
                            met een anti-aanbaklaag. Perfect voor zowel professionele chefs als thuisgebruik.
                        </p>
                        <ul class="text-white list-disc pl-5 space-y-2">
                            <li>Inclusief: 3 pannen, 2 potten en 1 deksel</li>
                            <li>Ovenbestendig tot 250°C</li>
                            <li>Inductie-compatibel</li>
                            <li>Gemakkelijk schoon te maken</li>
                            <li>Lifetime garantie</li>
                        </ul>
                    </div>
                    
                    <!-- Order Form -->
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-xl p-6">
                        <h2 class="text-xl font-bold text-white mb-4">Bestel nu</h2>
                        
                        <div class="flex items-center mb-4">
                            <span class="text-white mr-3">Aantal:</span>
                            <div class="flex items-center border border-white rounded-lg">
                                <button onclick="decrementQuantity()" class="px-3 py-1 text-white text-xl hover:bg-white hover:bg-opacity-20">-</button>
                                <span id="quantity" class="px-4 py-1 text-white">1</span>
                                <button onclick="incrementQuantity()" class="px-3 py-1 text-white text-xl hover:bg-white hover:bg-opacity-20">+</button>
                            </div>
                        </div>
                        
                        
                        
                        <button onclick="goToCheckout()" class="w-full bg-green-600 text-white hover:bg-green-800 font-bold py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                            Direct bestellen
                        </button>
                        
                        <div class="mt-4 flex items-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>
                            Gratis verzending boven €50
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Checkout Modal (hidden by default) -->
    <div id="checkoutModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Afrekenen</h2>
                    <button onclick="closeCheckout()" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                
                <div class="flex flex-col md:flex-row gap-8">
                    <!-- Order Summary -->
                    <div class="md:w-1/3 bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-bold text-lg mb-4">Jouw bestelling</h3>
                        <div class="flex items-center mb-4">
                            <img id="checkoutImage" src="images/pannen/pannenset.png" alt="Pannenset" class="w-16 h-16 object-cover rounded-lg mr-3">
                            <div>
                                <h4 class="font-medium" id="checkoutProduct">Premium Pannenset</h4>
                                <p class="text-gray-600">Aantal: <span id="checkoutQuantity">1</span></p>
                                <p class="font-bold">€<span id="checkoutPrice">189,99</span></p>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <div class="flex justify-between mb-2">
                                <span>Subtotaal:</span>
                                <span>€<span id="subtotal">189,99</span></span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span>Verzending:</span>
                                <span id="shipping">Gratis</span>
                            </div>
                            <div class="flex justify-between font-bold text-lg mt-4">
                                <span>Totaal:</span>
                                <span>€<span id="total">189,99</span></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Checkout Form -->
                    <div class="md:w-2/3">
                        <form method="post" action="index_verwerk.php">

                            <h3 class="font-bold text-lg mb-4">Persoonlijke gegevens</h3>
                            
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Volledige naam*</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#D9A49C] focus:border-[#D9A49C] outline-none"
                                    oninput="validateField(this)">
                                <p class="text-red-500 text-sm mt-1 hidden" id="nameError">Voer uw naam in</p>
                            </div>
                            
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-mailadres*</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#D9A49C] focus:border-[#D9A49C] outline-none"
                                    oninput="validateField(this)">
                                <p class="text-red-500 text-sm mt-1 hidden" id="emailError">Voer een geldig e-mailadres in</p>
                            </div>
                            
                            <div class="mb-4">
                                <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Adres*</label>
                                <textarea id="address" name="address" rows="3" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#D9A49C] focus:border-[#D9A49C] outline-none"
                                    oninput="validateField(this)"></textarea>
                                <p class="text-red-500 text-sm mt-1 hidden" id="addressError">Voer uw adres in</p>
                            </div>
                            
                            <div class="mb-4">
                                <label for="city" class="block text-sm font-medium text-gray-700 mb-1">Plaats*</label>
                                <input type="text" id="city" name="city" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#D9A49C] focus:border-[#D9A49C] outline-none"
                                    oninput="validateField(this)">
                                <p class="text-red-500 text-sm mt-1 hidden" id="cityError">Voer uw plaats in</p>
                            </div>
                            
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div>
                                    <label for="postcode" class="block text-sm font-medium text-gray-700 mb-1">Postcode*</label>
                                    <input type="text" id="postcode" name="postcode" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#D9A49C] focus:border-[#D9A49C] outline-none"
                                        oninput="validateField(this)">
                                    <p class="text-red-500 text-sm mt-1 hidden" id="postcodeError">Voer uw postcode in</p>
                                </div>
                                <div>
                                    <label for="country" class="block text-sm font-medium text-gray-700 mb-1">Land*</label>
                                    <select id="country" name="country" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#D9A49C] focus:border-[#D9A49C] outline-none"
                                        onchange="validateField(this)">
                                        <option value="">Selecteer land</option>
                                        <option value="NL">Nederland</option>
                                        <option value="BE">België</option>
                                        <option value="DE">Duitsland</option>
                                    </select>
                                    <p class="text-red-500 text-sm mt-1 hidden" id="countryError">Selecteer een land</p>
                                </div>
                            </div>
                            
                            <button type="submit" class="w-full bg-[#D9A49C] hover:bg-[#c08e86] text-white font-bold py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                                Bestelling voltooien
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Confirmation Modal (hidden by default) -->
    <div id="confirmationModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-md w-full p-6 text-center">
            <div class="text-green-500 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Bedankt voor uw bestelling!</h2>
            <p class="text-gray-600 mb-6">U ontvangt een bevestigingsmail met alle details. Uw bestelling wordt zo snel mogelijk verzonden.</p>
            <button onclick="closeConfirmation()" class="w-full bg-[#D9A49C] hover:bg-[#c08e86] text-white font-bold py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                Terug naar de winkel
            </button>
        </div>
    </div>

    <script>
        // prodcut details
        const product = {
            name: "Premium Pannenset",
            price: 189.99,
            image: "images/pannen/pannenset.png"
        };
        
        let quantity = 1;
        
        // foto gallerij
        function changeImage(src) {
            document.getElementById('mainImage').src = src;
            
            // update thumbnail
            document.querySelectorAll('.thumbnail').forEach(thumb => {
                thumb.classList.remove('active');
                thumb.classList.add('border-gray-200');
                thumb.classList.remove('border-[#D9A49C]');
            });
            
            event.currentTarget.classList.add('active');
            event.currentTarget.classList.add('border-[#D9A49C]');
            event.currentTarget.classList.remove('border-gray-200');
        }
        
        // Quantity controls
        function incrementQuantity() {
            quantity++;
            updateQuantity();
        }
        
        function decrementQuantity() {
            if (quantity > 1) {
                quantity--;
                updateQuantity();
            }
        }
        
        function updateQuantity() {
            document.getElementById('quantity').textContent = quantity;
            const total = (product.price * quantity).toFixed(2).replace('.', ',');
            document.getElementById('totalPrice').textContent = total;
        }
        
     
        
        // Checkout flow
        function goToCheckout() {
            // Update checkout summary
            document.getElementById('checkoutImage').src = product.image;
            document.getElementById('checkoutProduct').textContent = product.name;
            document.getElementById('checkoutQuantity').textContent = quantity;
            document.getElementById('checkoutPrice').textContent = product.price.toFixed(2).replace('.', ',');
            
            const subtotal = (product.price * quantity).toFixed(2);
            document.getElementById('subtotal').textContent = subtotal.replace('.', ',');
            document.getElementById('total').textContent = subtotal.replace('.', ',');
            
            // Show checkout modal
            document.getElementById('checkoutModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        
        function closeCheckout() {
            document.getElementById('checkoutModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
        
        function closeConfirmation() {
            document.getElementById('confirmationModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
            // Reset form
            document.getElementById('checkoutForm').reset();
            quantity = 1;
            updateQuantity();
        }
        
        // Formulier Validatie
        function validateField(field) {
            const errorElement = document.getElementById(`${field.id}Error`);
            
            if (field.validity.valid) {
                field.classList.remove('border-red-500');
                field.classList.add('border-gray-300');
                errorElement.classList.add('hidden');
            } else {
                field.classList.remove('border-gray-300');
                field.classList.add('border-red-500');
                errorElement.classList.remove('hidden');
                
                if (field.validity.valueMissing) {
                    errorElement.textContent = `Dit veld is verplicht`;
                } else if (field.validity.typeMismatch) {
                    errorElement.textContent = `Voer een geldig ${field.type} in`;
                }
            }
        }
        
        function submitOrder(event) {
            event.preventDefault();
            
            const form = event.target;
            let isValid = true;
            
            // Valideer alle velden
            form.querySelectorAll('[required]').forEach(field => {
                validateField(field);
                if (!field.validity.valid) {
                    isValid = false;
                }
            });
            
            if (isValid) {
                // niet nodig maar voor backend zou je hier je data toevoegen
                console.log('Form submitted:', {
                    name: form.name.value,
                    email: form.email.value,
                    address: form.address.value,
                    city: form.city.value,
                    postcode: form.postcode.value,
                    country: form.country.value,
                    product: product.name,
                    quantity: quantity,
                    total: (product.price * quantity).toFixed(2)
                });
                
                // laat confirmatie zien
                document.getElementById('checkoutModal').classList.add('hidden');
                document.getElementById('confirmationModal').classList.remove('hidden');
            }
        }
    </script>
</body>
</html>