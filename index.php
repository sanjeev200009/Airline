<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Builder Airlines - Your Journey Begins Here</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: { primary: "#3176FF", secondary: "" },
            borderRadius: {
              none: "0px",
              sm: "4px",
              DEFAULT: "8px",
              md: "12px",
              lg: "16px",
              xl: "20px",
              "2xl": "24px",
              "3xl": "32px",
              full: "9999px",
              button: "8px",
            },
          },
        },
      };
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
    />
    <style>
      :where([class^="ri-"])::before {
        content: "\f3c2";
      }
      body {
        font-family: "Inter", sans-serif;
      }
      .hero-section {
        background-image: url("https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799299/fda438eb0f431d2dae39bf421d5febe1_bhddrc.jpg ");
        background-size: cover;
        background-position: center;
      }
      .search-input:focus {
        outline: none;
      }
      .date-input::-webkit-calendar-picker-indicator {
        opacity: 0;
        position: absolute;
        width: 100%;
        height: 100%;
        cursor: pointer;
      }
      .custom-checkbox {
        position: relative;
        padding-left: 28px;
        cursor: pointer;
      }
      .custom-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
      }
      .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 20px;
        width: 20px;
        border-radius: 4px;
        border: 1px solid #d1d5db;
        background-color: white;
      }
      .custom-checkbox:hover input ~ .checkmark {
        background-color: #f3f4f6;
      }
      .custom-checkbox input:checked ~ .checkmark {
        background-color: #3176ff;
        border: none;
      }
      .checkmark:after {
        content: "";
        position: absolute;
        display: none;
      }
      .custom-checkbox input:checked ~ .checkmark:after {
        display: block;
      }
      .custom-checkbox .checkmark:after {
        left: 7px;
        top: 3px;
        width: 6px;
        height: 12px;
        border: solid white;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
      }
    </style>
  </head>
  <body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
      <div
        class="container mx-auto px-4 py-4 flex justify-between items-center"
      >
        <a href="#" class="flex items-center">
          <span class="text-2xl font-['Pacifico'] text-primary"
            >Builder Airlines</span
          >
        </a>
        <div class="hidden md:flex items-center space-x-8">
          <a href="#" class="text-gray-700 hover:text-primary font-medium"
            >Home</a
          >
          <a
            href="Flights.php"
            class="text-gray-700 hover:text-primary font-medium"
            >Flights</a
          >
          <a href="Destination.php" class="text-gray-700 hover:text-primary font-medium"
            >Destinations</a
          >
          <a href="About.php" class="text-gray-700 hover:text-primary font-medium"
            >About Us</a
          >
          <a href="Contact.php" class="text-gray-700 hover:text-primary font-medium"
            >Contact</a
          >
        </div>
        <div class="flex items-center space-x-4">
          <a
            href="/Auth/login&Register.html"
            class="hidden md:block text-gray-700 hover:text-primary font-medium"
            >Login</a
          >
          <button
          onclick="window.location.href='/Auth/login&Register.html'"
          class="bg-primary text-white px-4 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
        >
        Sign Up
        </button>
        
           
          </button>
          <div class="md:hidden w-8 h-8 flex items-center justify-center">
            <i class="ri-menu-line ri-lg"></i>
          </div>
        </div>
      </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section min-h-[600px] relative flex items-center">
      <div
        class="absolute inset-0 bg-gradient-to-r from-gray-900/70 to-transparent"
      ></div>
      <div class="container mx-auto px-4 relative z-10">
        <div class="w-full md:w-1/2 text-white">
          <h1 class="text-4xl md:text-5xl font-bold mb-4">
            Your Journey Begins Here
          </h1>
          <p class="text-lg mb-8">
            Discover amazing destinations and book your next adventure with
            Builder Airlines. Enjoy comfortable flights and exceptional service.
          </p>
          <button
            class="bg-primary text-white px-6 py-3 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors text-lg"
          >
            Book Your Flight Now
          </button>
        </div>
      </div>
    </section>
    <!-- Flight Search Widget -->

  <section class="py-12 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-5xl mx-auto bg-white rounded-lg shadow-lg p-6 md:p-8 -mt-24 relative z-20">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Book Your Flight</h2>
     <form action="CRUD/INSERT/process_booking.php" method="POST">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="space-y-4">
            <div class="relative">
              <label class="block text-sm font-medium text-gray-700 mb-1">From</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-6 h-full">
                  <i class="ri-flight-takeoff-line text-gray-400"></i>
                </div>
                <input type="text" name="departure_city" class="search-input w-full pl-10 pr-4 py-3 border border-gray-300 rounded text-sm" placeholder="Departure City" required />
              </div>
            </div>
            <div class="relative">
              <label class="block text-sm font-medium text-gray-700 mb-1">To</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-6 h-full">
                  <i class="ri-flight-land-line text-gray-400"></i>
                </div>
                <input type="text" name="arrival_city" class="search-input w-full pl-10 pr-4 py-3 border border-gray-300 rounded text-sm" placeholder="Arrival City" required />
              </div>
            </div>
          </div>
          <div class="space-y-4">
            <div class="relative">
              <label class="block text-sm font-medium text-gray-700 mb-1">Departure Date</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-6 h-full">
                  <i class="ri-calendar-line text-gray-400"></i>
                </div>
                <input type="date" name="departure_date" class="date-input w-full pl-10 pr-4 py-3 border border-gray-300 rounded text-sm" required />
              </div>
            </div>
            <div class="relative">
              <label class="block text-sm font-medium text-gray-700 mb-1">Return Date</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-6 h-full">
                  <i class="ri-calendar-line text-gray-400"></i>
                </div>
                <input type="date" name="return_date" class="date-input w-full pl-10 pr-4 py-3 border border-gray-300 rounded text-sm" required />
              </div>
            </div>
          </div>
          <div class="space-y-4">
            <div class="relative">
              <label class="block text-sm font-medium text-gray-700 mb-1">Passengers</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-6 h-full">
                  <i class="ri-user-line text-gray-400"></i>
                </div>
                <select name="passengers" class="w-full pl-10 pr-8 py-3 border border-gray-300 rounded text-sm appearance-none bg-white" required>
                  <option>1 Adult</option>
                  <option>2 Adults</option>
                  <option>3 Adults</option>
                  <option>4 Adults</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none w-6 h-full">
                  <i class="ri-arrow-down-s-line text-gray-400"></i>
                </div>
              </div>
            </div>
            <div class="relative">
              <label class="block text-sm font-medium text-gray-700 mb-1">Class</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-6 h-full">
                  <i class="ri-vip-crown-line text-gray-400"></i>
                </div>
                <select name="class" class="w-full pl-10 pr-8 py-3 border border-gray-300 rounded text-sm appearance-none bg-white" required>
                  <option>Economy</option>
                  <option>Premium Economy</option>
                  <option>Business</option>
                  <option>First Class</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none w-6 h-full">
                  <i class="ri-arrow-down-s-line text-gray-400"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-6 flex flex-col md:flex-row md:items-center md:justify-between">
          <label class="custom-checkbox mb-4 md:mb-0 text-sm text-gray-700">
            <input type="checkbox" name="direct_flights_only" />
            <span class="checkmark"></span>
            Direct flights only
          </label>
          <button type="submit" class="bg-primary text-white px-8 py-3 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors">
            Book Flight
          </button>
        </div>
        </form>
     
    </div>
  </div>
</section>


    <!-- Popular Destinations -->
    <section class="py-16 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">
            Popular Destinations
          </h2>
          <p class="text-gray-600 max-w-2xl mx-auto">
            Explore our most popular flight destinations and plan your next
            adventure with Builder Airlines.
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Destination 1 -->
          <div
            class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799198/6aaf449328f406f362bcdd5e9ba14aab_x40zbk.jpg"
                alt="New York"
                class="w-full h-full object-cover object-top"
              />
            </div>
            <div class="p-6">
              <div class="flex justify-between items-center mb-3">
                <h3 class="text-xl font-bold text-gray-800">New York</h3>
                <span class="text-primary font-semibold">$349</span>
              </div>
              <div class="flex items-center text-gray-600 mb-4">
                <div class="w-5 h-5 flex items-center justify-center mr-2">
                  <i class="ri-calendar-line"></i>
                </div>
                <span>May 15 - May 22, 2025</span>
              </div>
              <button
                class="w-full bg-white text-primary border border-primary px-4 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-primary hover:text-white transition-colors"
              >
                View Flights
              </button>
            </div>
          </div>
          <!-- Destination 2 -->
          <div
            class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799360/d1596cb892ad8aea8690d2a2c2fddf21_ty0blv.jpg"
                alt="Paris"
                class="w-full h-full object-cover object-top"
              />
            </div>
            <div class="p-6">
              <div class="flex justify-between items-center mb-3">
                <h3 class="text-xl font-bold text-gray-800">Paris</h3>
                <span class="text-primary font-semibold">$429</span>
              </div>
              <div class="flex items-center text-gray-600 mb-4">
                <div class="w-5 h-5 flex items-center justify-center mr-2">
                  <i class="ri-calendar-line"></i>
                </div>
                <span>June 5 - June 12, 2025</span>
              </div>
              <button
                class="w-full bg-white text-primary border border-primary px-4 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-primary hover:text-white transition-colors"
              >
                View Flights
              </button>
            </div>
          </div>
          <!-- Destination 3 -->
          <div
            class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799466/dfc1ed7b9f8569415921b73d8f0dc6b6_gkrw0b.jpg"
                alt="Tokyo"
                class="w-full h-full object-cover object-top"
              />
            </div>
            <div class="p-6">
              <div class="flex justify-between items-center mb-3">
                <h3 class="text-xl font-bold text-gray-800">Tokyo</h3>
                <span class="text-primary font-semibold">$799</span>
              </div>
              <div class="flex items-center text-gray-600 mb-4">
                <div class="w-5 h-5 flex items-center justify-center mr-2">
                  <i class="ri-calendar-line"></i>
                </div>
                <span>July 10 - July 24, 2025</span>
              </div>
              <button
                class="w-full bg-white text-primary border border-primary px-4 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-primary hover:text-white transition-colors"
              >
                View Flights
              </button>
            </div>
          </div>
        </div>
        <div class="text-center mt-10">
          <button
            class="bg-white text-primary border border-primary px-6 py-3 !rounded-button whitespace-nowrap font-medium hover:bg-gray-50 transition-colors"
          >
            View All Destinations
          </button>
        </div>
      </div>
    </section>
    <!-- Features Section -->
    <section class="py-16 bg-white">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">
            Why Choose Builder Airlines
          </h2>
          <p class="text-gray-600 max-w-2xl mx-auto">
            Experience the difference with our premium service, competitive
            prices, and customer-first approach.
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Feature 1 -->
          <div class="text-center p-6">
            <div
              class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4"
            >
              <i class="ri-shield-check-line ri-xl text-primary"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">Safety First</h3>
            <p class="text-gray-600">
              Your safety is our top priority with rigorous safety protocols and
              well-maintained aircraft.
            </p>
          </div>
          <!-- Feature 2 -->
          <div class="text-center p-6">
            <div
              class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4"
            >
              <i class="ri-money-dollar-circle-line ri-xl text-primary"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">
              Best Price Guarantee
            </h3>
            <p class="text-gray-600">
              We offer competitive prices and will match any lower fare you find
              elsewhere.
            </p>
          </div>
          <!-- Feature 3 -->
          <div class="text-center p-6">
            <div
              class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4"
            >
              <i class="ri-customer-service-2-line ri-xl text-primary"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">
              24/7 Customer Support
            </h3>
            <p class="text-gray-600">
              Our dedicated support team is available around the clock to assist
              with any inquiries.
            </p>
          </div>
          <!-- Feature 4 -->
          <div class="text-center p-6">
            <div
              class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4"
            >
              <i class="ri-award-line ri-xl text-primary"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">
              Loyalty Rewards
            </h3>
            <p class="text-gray-600">
              Earn points with every flight and redeem them for free flights and
              upgrades.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonials -->
    <section class="py-16 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">
            What Our Customers Say
          </h2>
          <p class="text-gray-600 max-w-2xl mx-auto">
            Read testimonials from our satisfied customers who have experienced
            the Builder Airlines difference.
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Testimonial 1 -->
          <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
              <div class="text-yellow-400 flex">
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
              </div>
            </div>
            <p class="text-gray-600 mb-6">
              "The service on my recent flight to Tokyo was exceptional. The
              cabin crew was attentive, the food was delicious, and the seats
              were comfortable. I'll definitely fly with Builder Airlines
              again!"
            </p>
            <div class="flex items-center">
              <div
                class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden mr-4"
              >
                <div
                  class="w-full h-full flex items-center justify-center text-gray-500"
                >
                  <i class="ri-user-line ri-lg"></i>
                </div>
              </div>
              <div>
                <h4 class="font-semibold text-gray-800">Emily Johnson</h4>
                <p class="text-sm text-gray-500">Frequent Traveler</p>
              </div>
            </div>
          </div>
          <!-- Testimonial 2 -->
          <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
              <div class="text-yellow-400 flex">
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
              </div>
            </div>
            <p class="text-gray-600 mb-6">
              "I was impressed by how smooth the booking process was. The
              website was easy to navigate, and I received instant confirmation.
              The flight itself was on time and comfortable. Highly recommend!"
            </p>
            <div class="flex items-center">
              <div
                class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden mr-4"
              >
                <div
                  class="w-full h-full flex items-center justify-center text-gray-500"
                >
                  <i class="ri-user-line ri-lg"></i>
                </div>
              </div>
              <div>
                <h4 class="font-semibold text-gray-800">Michael Rodriguez</h4>
                <p class="text-sm text-gray-500">Business Traveler</p>
              </div>
            </div>
          </div>
          <!-- Testimonial 3 -->
          <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
              <div class="text-yellow-400 flex">
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-half-fill"></i>
              </div>
            </div>
            <p class="text-gray-600 mb-6">
              "As a family of four, we were worried about traveling with young
              children, but the staff at Builder Airlines made our journey so
              much easier. They were accommodating and friendly. We'll
              definitely be flying with them again."
            </p>
            <div class="flex items-center">
              <div
                class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden mr-4"
              >
                <div
                  class="w-full h-full flex items-center justify-center text-gray-500"
                >
                  <i class="ri-user-line ri-lg"></i>
                </div>
              </div>
              <div>
                <h4 class="font-semibold text-gray-800">Sarah Thompson</h4>
                <p class="text-sm text-gray-500">Family Traveler</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Newsletter -->
    <section class="py-16 bg-primary">
      <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
          <h2 class="text-3xl font-bold text-white mb-4">
            Subscribe to Our Newsletter
          </h2>
          <p class="text-white/80 mb-8">
            Stay updated with our latest offers, travel tips, and exclusive
            deals by subscribing to our newsletter.
          </p>
         <form action="CRUD/INSERT/newsletter_subscribe.php" method="POST">
  <div class="flex flex-col md:flex-row gap-4">
    <input
      type="email"
      name="email"
      required
      placeholder="Enter your email address"
      class="flex-grow px-4 py-3 rounded border-none text-sm"
    />
    <button
      type="submit"
      class="bg-white text-primary px-6 py-3 !rounded-button whitespace-nowrap font-medium hover:bg-gray-100 transition-colors"
    >
      Subscribe Now
    </button>
  </div>
</form>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white pt-16 pb-8">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
          <!-- Company Info -->
          <div>
            <h3 class="text-xl font-['Pacifico'] mb-6">Builder Airlines</h3>
            <p class="text-gray-400 mb-6">
              Experience the joy of flying with comfort, safety, and exceptional
              service.
            </p>
            <div class="flex space-x-4">
              <a
                href="#"
                class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-primary transition-colors"
              >
                <i class="ri-facebook-fill"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-primary transition-colors"
              >
                <i class="ri-twitter-fill"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-primary transition-colors"
              >
                <i class="ri-instagram-line"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-primary transition-colors"
              >
                <i class="ri-linkedin-fill"></i>
              </a>
            </div>
          </div>
          <!-- Quick Links -->
          <div>
            <h3 class="text-lg font-semibold mb-6">Quick Links</h3>
            <ul class="space-y-3">
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >About Us</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Destinations</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Flight Schedule</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Travel Guides</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Special Offers</a
                >
              </li>
            </ul>
          </div>
          <!-- Support -->
          <div>
            <h3 class="text-lg font-semibold mb-6">Support</h3>
            <ul class="space-y-3">
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >FAQs</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Contact Us</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Baggage Information</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Travel Insurance</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >COVID-19 Updates</a
                >
              </li>
            </ul>
          </div>
          <!-- Contact -->
          <div>
            <h3 class="text-lg font-semibold mb-6">Contact Us</h3>
            <ul class="space-y-3">
              <li class="flex items-start">
                <div class="w-5 h-5 flex items-center justify-center mr-3 mt-1">
                  <i class="ri-map-pin-line text-primary"></i>
                </div>
                <span class="text-gray-400"
                  >123 Aviation Way, Skyline Tower, New York, NY 10001</span
                >
              </li>
              <li class="flex items-center">
                <div class="w-5 h-5 flex items-center justify-center mr-3">
                  <i class="ri-phone-line text-primary"></i>
                </div>
                <span class="text-gray-400">+1 (800) 123-4567</span>
              </li>
              <li class="flex items-center">
                <div class="w-5 h-5 flex items-center justify-center mr-3">
                  <i class="ri-mail-line text-primary"></i>
                </div>
                <span class="text-gray-400">info@builderairlines.com</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="border-t border-gray-700 pt-8">
          <div class="flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 text-sm mb-4 md:mb-0">
              &copy; 2025 Builder Airlines. All rights reserved.
            </p>
            <div class="flex space-x-6">
              <a
                href="#"
                class="text-gray-400 hover:text-white text-sm transition-colors"
                >Privacy Policy</a
              >
              <a
                href="#"
                class="text-gray-400 hover:text-white text-sm transition-colors"
                >Terms of Service</a
              >
              <a
                href="#"
                class="text-gray-400 hover:text-white text-sm transition-colors"
                >Cookie Policy</a
              >
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Mobile menu toggle
        const menuButton = document.querySelector(".ri-menu-line");
        if (menuButton) {
          menuButton.addEventListener("click", function () {
            // Mobile menu functionality would go here
            alert("Mobile menu clicked");
          });
        }
      });
      document.addEventListener("DOMContentLoaded", function () {
        const homeLink = document.querySelector('a[href="index.php"]');
        if (homeLink && homeLink.textContent === "Home") {
          homeLink.addEventListener("click", function (e) {
            e.preventDefault();
            window.scrollTo({
              top: 0,
              behavior: "smooth",
            });
          });
        }
      });
    </script>
  </body>
</html>
