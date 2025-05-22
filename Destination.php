<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Builder Airlines - Destinations</title>
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
      :where([class^="ri-"])::before { content: "\f3c2"; }
      body {
      font-family: 'Inter', sans-serif;
      background-color: #f8fafc;
      }
      .destination-card {
      transition: all 0.3s ease;
      }
      .destination-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      }
      .filter-tab {
      transition: all 0.2s ease;
      }
      .filter-tab.active {
      background-color: #3176FF;
      color: white;
      }
      .filter-dropdown {
      transition: all 0.2s ease;
      }
      .filter-dropdown-content {
      display: none;
      position: absolute;
      background-color: white;
      min-width: 200px;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      z-index: 10;
      border-radius: 8px;
      overflow: hidden;
      }
      .filter-dropdown:hover .filter-dropdown-content {
      display: block;
      }
      .filter-option {
      transition: all 0.2s ease;
      }
      .filter-option:hover {
      background-color: #f3f4f6;
      }
      .filter-option.selected {
      background-color: #ebf5ff;
      color: #3176FF;
      }
      .filter-option.selected i {
      display: inline-block;
      }
      .season-tag {
      transition: all 0.2s ease;
      }
      .search-input:focus {
      outline: none;
      }
    </style>
  </head>
  <body>
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
              href="#"
              class="hidden md:block text-gray-700 hover:text-primary font-medium"
              >Login</a
            >
            <button
              class="bg-primary text-white px-4 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
            >
              Sign Up
            </button>
            <div class="md:hidden w-8 h-8 flex items-center justify-center">
              <i class="ri-menu-line ri-lg"></i>
            </div>
          </div>
        </div>
      </header>
    <!-- Hero Section -->
    <section class="relative py-16 bg-gradient-to-r from-blue-50 to-blue-100">
      <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
          <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 mb-8 md:mb-0 pr-0 md:pr-8">
              <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Explore Our World-Class Destinations
              </h1>
              <p class="text-lg text-gray-600 mb-8">
                Discover breathtaking locations across the globe with Builder
                Airlines. From vibrant cities to serene beaches, we'll take you
                there with comfort and style.
              </p>
              <div class="flex flex-col sm:flex-row gap-4">
                <a
                 
                  data-readdy="true"
                  class="bg-primary text-white px-8 py-3 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors inline-block"
                  >Book Your Adventure</a
                >
                <button
                  class="bg-white text-gray-800 border border-gray-300 px-8 py-3 !rounded-button whitespace-nowrap font-medium hover:bg-gray-50 transition-colors"
                >
                  View Travel Guides
                </button>
              </div>
            </div>
            <div class="w-full md:w-1/2">
              <img
               
                class="rounded-lg shadow-lg w-full object-cover"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Filter Section -->
    <section class="sticky top-[72px] bg-white shadow-sm z-40 py-4">
      <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
          <div
            class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4"
          >
            <!-- Region Tabs -->
            <div class="flex overflow-x-auto pb-2 md:pb-0 w-full md:w-auto">
              <button
                class="filter-tab active px-6 py-2 !rounded-full whitespace-nowrap mr-2 font-medium"
              >
                All Regions
              </button>
              <button
                class="filter-tab bg-gray-100 px-6 py-2 !rounded-full whitespace-nowrap mr-2 font-medium"
              >
                Europe
              </button>
              <button
                class="filter-tab bg-gray-100 px-6 py-2 !rounded-full whitespace-nowrap mr-2 font-medium"
              >
                Asia
              </button>
              <button
                class="filter-tab bg-gray-100 px-6 py-2 !rounded-full whitespace-nowrap mr-2 font-medium"
              >
                Americas
              </button>
              <button
                class="filter-tab bg-gray-100 px-6 py-2 !rounded-full whitespace-nowrap mr-2 font-medium"
              >
                Africa
              </button>
              <button
                class="filter-tab bg-gray-100 px-6 py-2 !rounded-full whitespace-nowrap font-medium"
              >
                Oceania
              </button>
            </div>
            <!-- Filter Dropdowns -->
            <div class="flex flex-wrap gap-2 w-full md:w-auto">
              <div class="filter-dropdown relative">
                <button
                  class="bg-gray-100 px-4 py-2 !rounded-button whitespace-nowrap font-medium flex items-center"
                >
                  <div class="w-5 h-5 flex items-center justify-center mr-2">
                    <i class="ri-sun-line"></i>
                  </div>
                  Season
                  <div class="w-5 h-5 flex items-center justify-center ml-2">
                    <i class="ri-arrow-down-s-line"></i>
                  </div>
                </button>
                <div class="filter-dropdown-content mt-1 right-0">
                  <div
                    class="filter-option selected p-3 flex items-center justify-between"
                  >
                    <span>All Seasons</span>
                    <i class="ri-check-line text-primary hidden"></i>
                  </div>
                  <div
                    class="filter-option p-3 flex items-center justify-between"
                  >
                    <span>Spring</span>
                    <i class="ri-check-line text-primary hidden"></i>
                  </div>
                  <div
                    class="filter-option p-3 flex items-center justify-between"
                  >
                    <span>Summer</span>
                    <i class="ri-check-line text-primary hidden"></i>
                  </div>
                  <div
                    class="filter-option p-3 flex items-center justify-between"
                  >
                    <span>Fall</span>
                    <i class="ri-check-line text-primary hidden"></i>
                  </div>
                  <div
                    class="filter-option p-3 flex items-center justify-between"
                  >
                    <span>Winter</span>
                    <i class="ri-check-line text-primary hidden"></i>
                  </div>
                </div>
              </div>
              <div class="filter-dropdown relative">
                <button
                  class="bg-gray-100 px-4 py-2 !rounded-button whitespace-nowrap font-medium flex items-center"
                >
                  <div class="w-5 h-5 flex items-center justify-center mr-2">
                    <i class="ri-money-dollar-circle-line"></i>
                  </div>
                  Budget
                  <div class="w-5 h-5 flex items-center justify-center ml-2">
                    <i class="ri-arrow-down-s-line"></i>
                  </div>
                </button>
                <div class="filter-dropdown-content mt-1 right-0">
                  <div
                    class="filter-option selected p-3 flex items-center justify-between"
                  >
                    <span>All Budgets</span>
                    <i class="ri-check-line text-primary hidden"></i>
                  </div>
                  <div
                    class="filter-option p-3 flex items-center justify-between"
                  >
                    <span>Economy ($)</span>
                    <i class="ri-check-line text-primary hidden"></i>
                  </div>
                  <div
                    class="filter-option p-3 flex items-center justify-between"
                  >
                    <span>Moderate ($$)</span>
                    <i class="ri-check-line text-primary hidden"></i>
                  </div>
                  <div
                    class="filter-option p-3 flex items-center justify-between"
                  >
                    <span>Luxury ($$$)</span>
                    <i class="ri-check-line text-primary hidden"></i>
                  </div>
                </div>
              </div>
              <div class="filter-dropdown relative">
                <button
                  class="bg-gray-100 px-4 py-2 !rounded-button whitespace-nowrap font-medium flex items-center"
                >
                  <div class="w-5 h-5 flex items-center justify-center mr-2">
                    <i class="ri-compass-3-line"></i>
                  </div>
                  Activities
                  <div class="w-5 h-5 flex items-center justify-center ml-2">
                    <i class="ri-arrow-down-s-line"></i>
                  </div>
                </button>
                <div class="filter-dropdown-content mt-1 right-0">
                  <div
                    class="filter-option selected p-3 flex items-center justify-between"
                  >
                    <span>All Activities</span>
                    <i class="ri-check-line text-primary hidden"></i>
                  </div>
                  <div
                    class="filter-option p-3 flex items-center justify-between"
                  >
                    <span>Beach</span>
                    <i class="ri-check-line text-primary hidden"></i>
                  </div>
                  <div
                    class="filter-option p-3 flex items-center justify-between"
                  >
                    <span>Culture</span>
                    <i class="ri-check-line text-primary hidden"></i>
                  </div>
                  <div
                    class="filter-option p-3 flex items-center justify-between"
                  >
                    <span>Adventure</span>
                    <i class="ri-check-line text-primary hidden"></i>
                  </div>
                  <div
                    class="filter-option p-3 flex items-center justify-between"
                  >
                    <span>Nature</span>
                    <i class="ri-check-line text-primary hidden"></i>
                  </div>
                </div>
              </div>
              <!-- Search Input -->
              <div class="relative w-full sm:w-auto">
                <div
                  class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-6 h-full"
                >
                  <i class="ri-search-line text-gray-400"></i>
                </div>
                <input
                  type="text"
                  class="search-input w-full sm:w-64 pl-10 pr-4 py-2 border border-gray-300 !rounded-button text-sm"
                  placeholder="Search destinations..."
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Europe Destinations -->
    <section class="py-12">
      <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
          <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-gray-900">
              Europe
              <span class="text-gray-500 text-lg font-normal"
                >(12 destinations)</span
              >
            </h2>
            <a href="#" class="text-primary font-medium flex items-center">
              View All
              <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
              </div>
            </a>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Paris -->
            <div
              class="destination-card bg-white rounded-lg shadow-sm overflow-hidden"
            >
              <div class="relative h-56">
                <img
                  src="Resource/place1.jpg"
                  alt="Paris"
                  class="w-full h-full object-cover object-top"
                />
                <div class="absolute top-4 right-4">
                  <span
                    class="bg-white text-primary px-3 py-1 rounded-full text-sm font-medium shadow-sm"
                    >Trending</span
                  >
                </div>
              </div>
              <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                  <h3 class="text-xl font-bold text-gray-900">Paris</h3>
                  <span class="text-sm text-gray-500">France</span>
                </div>
                <p class="text-gray-600 mb-4">
                  Experience the city of love with its iconic landmarks,
                  world-class cuisine, and charming streets filled with art and
                  culture.
                </p>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Top Attractions:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-building-4-line"></i>
                      </div>
                      Eiffel Tower
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-museum-line"></i>
                      </div>
                      Louvre Museum
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-ancient-gate-line"></i>
                      </div>
                      Notre-Dame
                    </span>
                  </div>
                </div>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Best Time to Visit:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="season-tag bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-sun-line"></i>
                      </div>
                      Spring
                    </span>
                    <span
                      class="season-tag bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-sun-foggy-line"></i>
                      </div>
                      Fall
                    </span>
                  </div>
                </div>
                <div class="flex justify-between items-center">
                  <div>
                    <span class="text-sm text-gray-500">Flights from</span>
                    <p class="text-lg font-bold text-gray-900">$549</p>
                  </div>
                  <a
                   src="Resource/place1.jpg"
                    data-readdy="true"
                    class="bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
                    >Book Flight</a
                  >
                </div>
              </div>
            </div>
            <!-- Santorini -->
            <div
              class="destination-card bg-white rounded-lg shadow-sm overflow-hidden"
            >
              <div class="relative h-56">
                <img
                 src="Resource/place1.jpg"
                  alt="Santorini"
                  class="w-full h-full object-cover object-top"
                />
              </div>
              <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                  <h3 class="text-xl font-bold text-gray-900">Santorini</h3>
                  <span class="text-sm text-gray-500">Greece</span>
                </div>
                <p class="text-gray-600 mb-4">
                  Discover the stunning white-washed buildings, blue-domed
                  churches, and breathtaking sunsets over the Aegean Sea.
                </p>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Top Attractions:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-home-4-line"></i>
                      </div>
                      Oia Village
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-ship-line"></i>
                      </div>
                      Caldera Cruise
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-footprint-line"></i>
                      </div>
                      Red Beach
                    </span>
                  </div>
                </div>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Best Time to Visit:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="season-tag bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-sun-foggy-line"></i>
                      </div>
                      Spring
                    </span>
                    <span
                      class="season-tag bg-red-50 text-red-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-sun-line"></i>
                      </div>
                      Summer
                    </span>
                  </div>
                </div>
                <div class="flex justify-between items-center">
                  <div>
                    <span class="text-sm text-gray-500">Flights from</span>
                    <p class="text-lg font-bold text-gray-900">$689</p>
                  </div>
                  <a
                      src="Resource/place1.jpg"
                    data-readdy="true"
                    class="bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
                    >Book Flight</a
                  >
                </div>
              </div>
            </div>
            <!-- Barcelona -->
            <div
              class="destination-card bg-white rounded-lg shadow-sm overflow-hidden"
            >
              <div class="relative h-56">
                <img
                src="Resource/place1.jpg"
                  alt="Barcelona"
                  class="w-full h-full object-cover object-top"
                />
              </div>
              <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                  <h3 class="text-xl font-bold text-gray-900">Barcelona</h3>
                  <span class="text-sm text-gray-500">Spain</span>
                </div>
                <p class="text-gray-600 mb-4">
                  Immerse yourself in Gaudí's architectural wonders, vibrant
                  markets, and the lively atmosphere of this Mediterranean gem.
                </p>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Top Attractions:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-building-line"></i>
                      </div>
                      Sagrada Familia
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-road-map-line"></i>
                      </div>
                      Las Ramblas
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-park-line"></i>
                      </div>
                      Park Güell
                    </span>
                  </div>
                </div>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Best Time to Visit:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="season-tag bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-sun-line"></i>
                      </div>
                      Spring
                    </span>
                    <span
                      class="season-tag bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-sun-foggy-line"></i>
                      </div>
                      Fall
                    </span>
                  </div>
                </div>
                <div class="flex justify-between items-center">
                  <div>
                    <span class="text-sm text-gray-500">Flights from</span>
                    <p class="text-lg font-bold text-gray-900">$599</p>
                  </div>
                  <a
                      src="Resource/place1.jpg"
                    data-readdy="true"
                    class="bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
                    >Book Flight</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Asia Destinations -->
    <section class="py-12 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
          <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-gray-900">
              Asia
              <span class="text-gray-500 text-lg font-normal"
                >(15 destinations)</span
              >
            </h2>
            <a href="#" class="text-primary font-medium flex items-center">
              View All
              <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
              </div>
            </a>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Tokyo -->
            <div
              class="destination-card bg-white rounded-lg shadow-sm overflow-hidden"
            >
              <div class="relative h-56">
                <img
                  src="Resource/place1.jpg"
                  alt="Tokyo"
                  class="w-full h-full object-cover object-top"
                />
                <div class="absolute top-4 right-4">
                  <span
                    class="bg-white text-primary px-3 py-1 rounded-full text-sm font-medium shadow-sm"
                    >Popular</span
                  >
                </div>
              </div>
              <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                  <h3 class="text-xl font-bold text-gray-900">Tokyo</h3>
                  <span class="text-sm text-gray-500">Japan</span>
                </div>
                <p class="text-gray-600 mb-4">
                  Explore the perfect blend of traditional culture and
                  futuristic innovation in Japan's vibrant capital city.
                </p>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Top Attractions:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-building-line"></i>
                      </div>
                      Tokyo Tower
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-home-4-line"></i>
                      </div>
                      Senso-ji Temple
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-road-map-line"></i>
                      </div>
                      Shibuya Crossing
                    </span>
                  </div>
                </div>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Best Time to Visit:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="season-tag bg-pink-50 text-pink-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-flower-line"></i>
                      </div>
                      Spring
                    </span>
                    <span
                      class="season-tag bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-sun-foggy-line"></i>
                      </div>
                      Fall
                    </span>
                  </div>
                </div>
                <div class="flex justify-between items-center">
                  <div>
                    <span class="text-sm text-gray-500">Flights from</span>
                    <p class="text-lg font-bold text-gray-900">$879</p>
                  </div>
                  <a
                      src="Resource/place1.jpg"
                    data-readdy="true"
                    class="bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
                    >Book Flight</a
                  >
                </div>
              </div>
            </div>
            <!-- Bali -->
            <div
              class="destination-card bg-white rounded-lg shadow-sm overflow-hidden"
            >
              <div class="relative h-56">
                <img
                  src="Resource/place1.jpg"
                  alt="Bali"
                  class="w-full h-full object-cover object-top"
                />
              </div>
              <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                  <h3 class="text-xl font-bold text-gray-900">Bali</h3>
                  <span class="text-sm text-gray-500">Indonesia</span>
                </div>
                <p class="text-gray-600 mb-4">
                  Relax on pristine beaches, explore ancient temples, and
                  experience the unique spiritual culture of this island
                  paradise.
                </p>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Top Attractions:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-home-4-line"></i>
                      </div>
                      Uluwatu Temple
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-water-flash-line"></i>
                      </div>
                      Tegallalang Rice Terraces
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-footprint-line"></i>
                      </div>
                      Kuta Beach
                    </span>
                  </div>
                </div>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Best Time to Visit:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="season-tag bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-sun-line"></i>
                      </div>
                      Dry Season (Apr-Oct)
                    </span>
                  </div>
                </div>
                <div class="flex justify-between items-center">
                  <div>
                    <span class="text-sm text-gray-500">Flights from</span>
                    <p class="text-lg font-bold text-gray-900">$799</p>
                  </div>
                  <a
                     src="Resource/place1.jpg"
                    data-readdy="true"
                    class="bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
                    >Book Flight</a
                  >
                </div>
              </div>
            </div>
            <!-- Singapore -->
            <div
              class="destination-card bg-white rounded-lg shadow-sm overflow-hidden"
            >
              <div class="relative h-56">
                <img
                   src="Resource/place1.jpg"
                  alt="Singapore"
                  class="w-full h-full object-cover object-top"
                />
              </div>
              <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                  <h3 class="text-xl font-bold text-gray-900">Singapore</h3>
                  <span class="text-sm text-gray-500">Singapore</span>
                </div>
                <p class="text-gray-600 mb-4">
                  Discover the perfect blend of cultures, futuristic
                  architecture, lush gardens, and world-class cuisine in this
                  city-state.
                </p>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Top Attractions:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-building-line"></i>
                      </div>
                      Marina Bay Sands
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-plant-line"></i>
                      </div>
                      Gardens by the Bay
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-lion-line"></i>
                      </div>
                      Sentosa Island
                    </span>
                  </div>
                </div>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Best Time to Visit:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="season-tag bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-calendar-line"></i>
                      </div>
                      Year-round
                    </span>
                  </div>
                </div>
                <div class="flex justify-between items-center">
                  <div>
                    <span class="text-sm text-gray-500">Flights from</span>
                    <p class="text-lg font-bold text-gray-900">$749</p>
                  </div>
                  <a
                     src="Resource/place1.jpg"
                    data-readdy="true"
                    class="bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
                    >Book Flight</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Americas Destinations -->
    <section class="py-12">
      <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
          <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-gray-900">
              Americas
              <span class="text-gray-500 text-lg font-normal"
                >(14 destinations)</span
              >
            </h2>
            <a href="#" class="text-primary font-medium flex items-center">
              View All
              <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
              </div>
            </a>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- New York -->
            <div
              class="destination-card bg-white rounded-lg shadow-sm overflow-hidden"
            >
              <div class="relative h-56">
                <img
                 src="Resource/place1.jpg"
                  alt="New York"
                  class="w-full h-full object-cover object-top"
                />
                <div class="absolute top-4 right-4">
                  <span
                    class="bg-white text-primary px-3 py-1 rounded-full text-sm font-medium shadow-sm"
                    >Featured</span
                  >
                </div>
              </div>
              <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                  <h3 class="text-xl font-bold text-gray-900">New York</h3>
                  <span class="text-sm text-gray-500">United States</span>
                </div>
                <p class="text-gray-600 mb-4">
                  Experience the energy of the Big Apple with its iconic
                  skyline, world-class museums, Broadway shows, and diverse
                  neighborhoods.
                </p>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Top Attractions:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-building-line"></i>
                      </div>
                      Empire State Building
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-park-line"></i>
                      </div>
                      Central Park
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-government-line"></i>
                      </div>
                      Statue of Liberty
                    </span>
                  </div>
                </div>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Best Time to Visit:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="season-tag bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-sun-line"></i>
                      </div>
                      Spring
                    </span>
                    <span
                      class="season-tag bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-sun-foggy-line"></i>
                      </div>
                      Fall
                    </span>
                  </div>
                </div>
                <div class="flex justify-between items-center">
                  <div>
                    <span class="text-sm text-gray-500">Flights from</span>
                    <p class="text-lg font-bold text-gray-900">$399</p>
                  </div>
                  <a
                    src="Resource/place1.jpg"
                    data-readdy="true"
                    class="bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
                    >Book Flight</a
                  >
                </div>
              </div>
            </div>
            <!-- Rio de Janeiro -->
            <div
              class="destination-card bg-white rounded-lg shadow-sm overflow-hidden"
            >
              <div class="relative h-56">
                <img
               src="Resource/place1.jpg"
                  alt="Rio de Janeiro"
                  class="w-full h-full object-cover object-top"
                />
              </div>
              <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                  <h3 class="text-xl font-bold text-gray-900">
                    Rio de Janeiro
                  </h3>
                  <span class="text-sm text-gray-500">Brazil</span>
                </div>
                <p class="text-gray-600 mb-4">
                  Enjoy the vibrant culture, stunning beaches, and breathtaking
                  landscapes of this lively Brazilian city.
                </p>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Top Attractions:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-government-line"></i>
                      </div>
                      Christ the Redeemer
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-mountain-line"></i>
                      </div>
                      Sugarloaf Mountain
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-footprint-line"></i>
                      </div>
                      Copacabana Beach
                    </span>
                  </div>
                </div>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Best Time to Visit:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="season-tag bg-red-50 text-red-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-sun-line"></i>
                      </div>
                      Dec-Mar
                    </span>
                    <span
                      class="season-tag bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-sun-foggy-line"></i>
                      </div>
                      Sep-Oct
                    </span>
                  </div>
                </div>
                <div class="flex justify-between items-center">
                  <div>
                    <span class="text-sm text-gray-500">Flights from</span>
                    <p class="text-lg font-bold text-gray-900">$699</p>
                  </div>
                  <a
                   src="Resource/place1.jpg"
                    data-readdy="true"
                    class="bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
                    >Book Flight</a
                  >
                </div>
              </div>
            </div>
            <!-- Vancouver -->
            <div
              class="destination-card bg-white rounded-lg shadow-sm overflow-hidden"
            >
              <div class="relative h-56">
                <img
                 src="Resource/place1.jpg"
                  alt="Vancouver"
                  class="w-full h-full object-cover object-top"
                />
              </div>
              <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                  <h3 class="text-xl font-bold text-gray-900">Vancouver</h3>
                  <span class="text-sm text-gray-500">Canada</span>
                </div>
                <p class="text-gray-600 mb-4">
                  Experience the perfect blend of urban life and natural beauty
                  in this coastal city surrounded by mountains and ocean.
                </p>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Top Attractions:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-park-line"></i>
                      </div>
                      Stanley Park
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-bridge-line"></i>
                      </div>
                      Capilano Bridge
                    </span>
                    <span
                      class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-mountain-line"></i>
                      </div>
                      Grouse Mountain
                    </span>
                  </div>
                </div>
                <div class="mb-4">
                  <h4 class="text-sm font-medium text-gray-700 mb-2">
                    Best Time to Visit:
                  </h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      class="season-tag bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-sun-line"></i>
                      </div>
                      Summer
                    </span>
                    <span
                      class="season-tag bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-sm flex items-center"
                    >
                      <div
                        class="w-4 h-4 flex items-center justify-center mr-1"
                      >
                        <i class="ri-sun-foggy-line"></i>
                      </div>
                      Fall
                    </span>
                  </div>
                </div>
                <div class="flex justify-between items-center">
                  <div>
                    <span class="text-sm text-gray-500">Flights from</span>
                    <p class="text-lg font-bold text-gray-900">$499</p>
                  </div>
                  <a
                    src="Resource/place1.jpg"
                    data-readdy="true"
                    class="bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
                    >Book Flight</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Featured Destinations -->
    <section class="py-12 bg-blue-50">
      <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
          <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
              Featured Destinations
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
              Discover our handpicked selection of extraordinary destinations
              that offer unforgettable experiences and breathtaking scenery.
            </p>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Maldives -->
            <div
              class="destination-card bg-white rounded-lg shadow-sm overflow-hidden"
            >
              <div class="flex flex-col md:flex-row h-full">
                <div class="w-full md:w-1/2 h-64 md:h-auto">
                  <img
                  src="Resource/place1.jpg"
                    alt="Maldives"
                    class="w-full h-full object-cover object-top"
                  />
                </div>
                <div class="w-full md:w-1/2 p-6 flex flex-col">
                  <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-900">Maldives</h3>
                    <span class="text-sm text-gray-500">Indian Ocean</span>
                  </div>
                  <p class="text-gray-600 mb-4 flex-grow">
                    Experience paradise on Earth with crystal-clear waters,
                    white sandy beaches, and luxurious overwater bungalows in
                    this tropical haven.
                  </p>
                  <div class="mb-4">
                    <h4 class="text-sm font-medium text-gray-700 mb-2">
                      Why Visit:
                    </h4>
                    <ul class="space-y-2">
                      <li class="flex items-start">
                        <div
                          class="w-5 h-5 flex items-center justify-center mr-2 text-primary"
                        >
                          <i class="ri-check-line"></i>
                        </div>
                        <span class="text-sm text-gray-600"
                          >World's most beautiful beaches</span
                        >
                      </li>
                      <li class="flex items-start">
                        <div
                          class="w-5 h-5 flex items-center justify-center mr-2 text-primary"
                        >
                          <i class="ri-check-line"></i>
                        </div>
                        <span class="text-sm text-gray-600"
                          >Incredible marine life and coral reefs</span
                        >
                      </li>
                      <li class="flex items-start">
                        <div
                          class="w-5 h-5 flex items-center justify-center mr-2 text-primary"
                        >
                          <i class="ri-check-line"></i>
                        </div>
                        <span class="text-sm text-gray-600"
                          >Luxury resorts with private villas</span
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="flex justify-between items-center">
                    <div>
                      <span class="text-sm text-gray-500">Flights from</span>
                      <p class="text-lg font-bold text-gray-900">$899</p>
                    </div>
                    <a
                      src="Resource/place1.jpg"
                      data-readdy="true"
                      class="bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
                      >Book Flight</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <!-- Kyoto -->
            <div
              class="destination-card bg-white rounded-lg shadow-sm overflow-hidden"
            >
              <div class="flex flex-col md:flex-row h-full">
                <div class="w-full md:w-1/2 h-64 md:h-auto">
                  <img
                   src="Resource/place1.jpg"
                    alt="Kyoto"
                    class="w-full h-full object-cover object-top"
                  />
                </div>
                <div class="w-full md:w-1/2 p-6 flex flex-col">
                  <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-900">Kyoto</h3>
                    <span class="text-sm text-gray-500">Japan</span>
                  </div>
                  <p class="text-gray-600 mb-4 flex-grow">
                    Step back in time in Japan's ancient capital with its
                    stunning temples, traditional gardens, geisha districts, and
                    cultural treasures.
                  </p>
                  <div class="mb-4">
                    <h4 class="text-sm font-medium text-gray-700 mb-2">
                      Why Visit:
                    </h4>
                    <ul class="space-y-2">
                      <li class="flex items-start">
                        <div
                          class="w-5 h-5 flex items-center justify-center mr-2 text-primary"
                        >
                          <i class="ri-check-line"></i>
                        </div>
                        <span class="text-sm text-gray-600"
                          >Over 1,600 Buddhist temples</span
                        >
                      </li>
                      <li class="flex items-start">
                        <div
                          class="w-5 h-5 flex items-center justify-center mr-2 text-primary"
                        >
                          <i class="ri-check-line"></i>
                        </div>
                        <span class="text-sm text-gray-600"
                          >Breathtaking cherry blossoms in spring</span
                        >
                      </li>
                      <li class="flex items-start">
                        <div
                          class="w-5 h-5 flex items-center justify-center mr-2 text-primary"
                        >
                          <i class="ri-check-line"></i>
                        </div>
                        <span class="text-sm text-gray-600"
                          >Traditional tea ceremonies and cuisine</span
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="flex justify-between items-center">
                    <div>
                      <span class="text-sm text-gray-500">Flights from</span>
                      <p class="text-lg font-bold text-gray-900">$849</p>
                    </div>
                    <a
                     src="Resource/place1.jpg"
                      data-readdy="true"
                      class="bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
                      >Book Flight</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Seasonal Recommendations -->
    <section class="py-12">
      <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
          <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
              Seasonal Recommendations
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
              Find the perfect destination based on the current season. Our
              experts have curated the best places to visit right now.
            </p>
          </div>
          <div class="bg-white rounded-lg shadow-sm overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2">
              <div class="p-8 md:p-12 flex flex-col justify-center">
                <span class="text-primary font-medium mb-2">May 2025</span>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                  Perfect Time for European Adventures
                </h3>
                <p class="text-gray-600 mb-6">
                  Spring in Europe offers mild temperatures, fewer crowds, and
                  blooming landscapes. It's the ideal time to explore historic
                  cities, charming villages, and coastal destinations before the
                  summer rush.
                </p>
                <div class="space-y-4 mb-6">
                  <div class="flex items-start">
                    <div
                      class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center mr-3 mt-1"
                    >
                      <i class="ri-map-pin-line text-primary"></i>
                    </div>
                    <div>
                      <h4 class="font-medium text-gray-900">
                        Amalfi Coast, Italy
                      </h4>
                      <p class="text-sm text-gray-600">
                        Stunning coastal views, charming villages, and perfect
                        Mediterranean weather.
                      </p>
                    </div>
                  </div>
                  <div class="flex items-start">
                    <div
                      class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center mr-3 mt-1"
                    >
                      <i class="ri-map-pin-line text-primary"></i>
                    </div>
                    <div>
                      <h4 class="font-medium text-gray-900">
                        Provence, France
                      </h4>
                      <p class="text-sm text-gray-600">
                        Lavender fields begin to bloom, perfect weather for
                        exploring vineyards and villages.
                      </p>
                    </div>
                  </div>
                  <div class="flex items-start">
                    <div
                      class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center mr-3 mt-1"
                    >
                      <i class="ri-map-pin-line text-primary"></i>
                    </div>
                    <div>
                      <h4 class="font-medium text-gray-900">
                        Lisbon, Portugal
                      </h4>
                      <p class="text-sm text-gray-600">
                        Pleasant temperatures, fewer tourists, and vibrant
                        cultural events.
                      </p>
                    </div>
                  </div>
                </div>
                <a
                src="Resource/place1.jpg"
                  data-readdy="true"
                  class="bg-primary text-white px-6 py-3 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors inline-block w-fit"
                  >Explore Spring Destinations</a
                >
              </div>
              <div class="relative h-64 md:h-auto">
                <img
                  src="Resource/place1.jpg"
                  alt="Spring in Europe"
                  class="w-full h-full object-cover object-top"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Travel Inspiration -->
    <section class="py-12 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
          <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
              Travel Inspiration
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
              Discover unique experiences and hidden gems from our travel
              experts to inspire your next adventure.
            </p>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
              <div class="h-48">
                <img
                  src="Resource/place1.jpg"
                  alt="Adventure Travel"
                  class="w-full h-full object-cover object-top"
                />
              </div>
              <div class="p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-2">
                  Adventure Awaits
                </h3>
                <p class="text-gray-600 mb-4">
                  Discover thrilling experiences from hiking in Patagonia to
                  white water rafting in Costa Rica.
                </p>
                <a href="#" class="text-primary font-medium flex items-center">
                  Read More
                  <div class="w-5 h-5 flex items-center justify-center ml-1">
                    <i class="ri-arrow-right-line"></i>
                  </div>
                </a>
              </div>
            </div>
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
              <div class="h-48">
                <img
                  src="Resource/place1.jpg"
                  alt="Culinary Journeys"
                  class="w-full h-full object-cover object-top"
                />
              </div>
              <div class="p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-2">
                  Culinary Journeys
                </h3>
                <p class="text-gray-600 mb-4">
                  Explore destinations known for their exceptional cuisine, from
                  street food to Michelin-starred restaurants.
                </p>
                <a href="#" class="text-primary font-medium flex items-center">
                  Read More
                  <div class="w-5 h-5 flex items-center justify-center ml-1">
                    <i class="ri-arrow-right-line"></i>
                  </div>
                </a>
              </div>
            </div>
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
              <div class="h-48">
                <img
            src="Resource/place1.jpg"
                  alt="Luxury Escapes"
                  class="w-full h-full object-cover object-top"
                />
              </div>
              <div class="p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-2">
                  Luxury Escapes
                </h3>
                <p class="text-gray-600 mb-4">
                  Indulge in the world's most exclusive resorts, private
                  islands, and bespoke travel experiences.
                </p>
                <a href="#" class="text-primary font-medium flex items-center">
                  Read More
                  <div class="w-5 h-5 flex items-center justify-center ml-1">
                    <i class="ri-arrow-right-line"></i>
                  </div>
                </a>
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
            Stay Updated on New Destinations
          </h2>
          <p class="text-blue-100 mb-8">
            Subscribe to our newsletter and be the first to know about exclusive
            deals, new destinations, and travel tips.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
            <input
              type="email"
              placeholder="Your email address"
              class="flex-grow px-4 py-3 rounded-button text-gray-800 border-none"
            />
            <button
              class="bg-white text-primary px-6 py-3 !rounded-button whitespace-nowrap font-medium hover:bg-gray-100 transition-colors"
            >
              Subscribe
            </button>
          </div>
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
        // Region tab switching
        const regionTabs = document.querySelectorAll(".filter-tab");
        regionTabs.forEach((tab) => {
          tab.addEventListener("click", function () {
            regionTabs.forEach((t) => {
              t.classList.remove("active");
              t.classList.add("bg-gray-100");
            });
            this.classList.add("active");
            this.classList.remove("bg-gray-100");
          });
        });
        // Filter options selection
        const filterOptions = document.querySelectorAll(".filter-option");
        filterOptions.forEach((option) => {
          option.addEventListener("click", function () {
            const parent = this.closest(".filter-dropdown-content");
            const options = parent.querySelectorAll(".filter-option");
            const checkIcons = parent.querySelectorAll(".ri-check-line");
            options.forEach((opt) => {
              opt.classList.remove("selected");
            });
            checkIcons.forEach((icon) => {
              icon.classList.add("hidden");
            });
            this.classList.add("selected");
            this.querySelector(".ri-check-line").classList.remove("hidden");
            // Update button text (optional)
            const buttonText =
              this.closest(".filter-dropdown").querySelector("button span");
            if (buttonText) {
              buttonText.textContent = this.querySelector("span").textContent;
            }
          });
        });
        // Mobile menu toggle
        const menuButton = document.querySelector(".ri-menu-line");
        if (menuButton) {
          menuButton.addEventListener("click", function () {
            alert("Mobile menu clicked");
          });
        }
      });
    </script>
  </body>
</html>
