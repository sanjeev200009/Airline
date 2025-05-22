<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Builder Airlines - Available Flights</title>
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
      background-color: #3176FF;
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
      .price-slider {
      -webkit-appearance1: none;
      width: 100%;
      height: 4px;
      border-radius: 5px;
      background: #d1d5db;
      outline: none;
      }
      .price-slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 18px;
      height: 18px;
      border-radius: 50%;
      background: #3176FF;
      cursor: pointer;
      }
      .price-slider::-moz-range-thumb {
      width: 18px;
      height: 18px;
      border-radius: 50%;
      background: #3176FF;
      cursor: pointer;
      border: none;
      }
      .time-slot {
      position: relative;
      }
      .time-slot input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
      }
      .time-slot-label {
      display: block;
      padding: 0.5rem 1rem;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.2s;
      }
      .time-slot input:checked ~ .time-slot-label {
      background-color: #3176FF;
      color: white;
      border-color: #3176FF;
      }
      .flight-card {
      transition: all 0.3s ease;
      }
      .flight-card:hover {
      transform: translateY(-2px);
      }
      .modal {
      transition: opacity 0.3s ease;
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
          <a href="index.php" class="text-gray-700 hover:text-primary font-medium"
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
    <!-- Flight Search Section -->
    <section class="bg-white py-8 shadow-sm">
      <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
          <h1 class="text-2xl font-bold text-gray-800 mb-6">
            Find Your Flight
          </h1>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="space-y-4">
              <div class="relative">
                <label class="block text-sm font-medium text-gray-700 mb-1"
                  >From</label
                >
                <div class="relative">
                  <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-6 h-full"
                  >
                    <i class="ri-flight-takeoff-line text-gray-400"></i>
                  </div>
                  <input
                    type="text"
                    class="search-input w-full pl-10 pr-4 py-3 border border-gray-300 rounded text-sm"
                    placeholder="Departure City"
                    value="New York (JFK)"
                  />
                </div>
              </div>
              <div class="relative">
                <label class="block text-sm font-medium text-gray-700 mb-1"
                  >To</label
                >
                <div class="relative">
                  <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-6 h-full"
                  >
                    <i class="ri-flight-land-line text-gray-400"></i>
                  </div>
                  <input
                    type="text"
                    class="search-input w-full pl-10 pr-4 py-3 border border-gray-300 rounded text-sm"
                    placeholder="Arrival City"
                    value="London (LHR)"
                  />
                </div>
              </div>
            </div>
            <div class="space-y-4">
              <div class="relative">
                <label class="block text-sm font-medium text-gray-700 mb-1"
                  >Departure Date</label
                >
                <div class="relative">
                  <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-6 h-full"
                  >
                    <i class="ri-calendar-line text-gray-400"></i>
                  </div>
                  <input
                    type="date"
                    class="date-input w-full pl-10 pr-4 py-3 border border-gray-300 rounded text-sm"
                    value="2025-05-15"
                  />
                </div>
              </div>
              <div class="relative">
                <label class="block text-sm font-medium text-gray-700 mb-1"
                  >Return Date</label
                >
                <div class="relative">
                  <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-6 h-full"
                  >
                    <i class="ri-calendar-line text-gray-400"></i>
                  </div>
                  <input
                    type="date"
                    class="date-input w-full pl-10 pr-4 py-3 border border-gray-300 rounded text-sm"
                    value="2025-05-22"
                  />
                </div>
              </div>
            </div>
            <div class="space-y-4">
              <div class="relative">
                <label class="block text-sm font-medium text-gray-700 mb-1"
                  >Passengers</label
                >
                <div class="relative">
                  <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-6 h-full"
                  >
                    <i class="ri-user-line text-gray-400"></i>
                  </div>
                  <select
                    class="w-full pl-10 pr-8 py-3 border border-gray-300 rounded text-sm appearance-none bg-white"
                  >
                    <option>1 Adult</option>
                    <option selected>2 Adults</option>
                    <option>3 Adults</option>
                    <option>4 Adults</option>
                  </select>
                  <div
                    class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none w-6 h-full"
                  >
                    <i class="ri-arrow-down-s-line text-gray-400"></i>
                  </div>
                </div>
              </div>
              <div class="relative">
                <label class="block text-sm font-medium text-gray-700 mb-1"
                  >Class</label
                >
                <div class="relative">
                  <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-6 h-full"
                  >
                    <i class="ri-vip-crown-line text-gray-400"></i>
                  </div>
                  <select
                    class="w-full pl-10 pr-8 py-3 border border-gray-300 rounded text-sm appearance-none bg-white"
                  >
                    <option selected>Economy</option>
                    <option>Premium Economy</option>
                    <option>Business</option>
                    <option>First Class</option>
                  </select>
                  <div
                    class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none w-6 h-full"
                  >
                    <i class="ri-arrow-down-s-line text-gray-400"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="mt-6 flex flex-col md:flex-row md:items-center md:justify-between"
          >
            <label class="custom-checkbox mb-4 md:mb-0 text-sm text-gray-700">
              <input type="checkbox" checked />
              <span class="checkmark"></span>
              Direct flights only
            </label>
            <button
              class="bg-primary text-white px-8 py-3 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
            >
              Search Flights
            </button>
          </div>
        </div>
      </div>
    </section>
    <!-- Flight Results Section -->
    <section class="py-8">
      <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
          <div class="flex flex-col md:flex-row gap-6">
            <!-- Filter Sidebar -->
            <div class="w-full md:w-1/4">
              <div class="bg-white rounded-lg shadow-sm p-6 sticky top-24">
                <div class="mb-6">
                  <h3 class="text-lg font-semibold text-gray-800 mb-4">
                    Filters
                  </h3>
                  <div class="flex justify-between items-center mb-2">
                    <span class="text-sm text-gray-600">7 flights found</span>
                    <button class="text-primary text-sm font-medium">
                      Reset all
                    </button>
                  </div>
                </div>
                <!-- Airlines Filter -->
                <div class="border-t border-gray-200 py-4">
                  <h4 class="font-medium text-gray-800 mb-3">Airlines</h4>
                  <div class="space-y-2">
                    <label
                      class="custom-checkbox text-sm text-gray-700 flex items-center justify-between"
                    >
                      <div class="flex items-center">
                        <input type="checkbox" checked />
                        <span class="checkmark"></span>
                        Builder Airlines
                      </div>
                      <span class="text-gray-500">$549</span>
                    </label>
                    <label
                      class="custom-checkbox text-sm text-gray-700 flex items-center justify-between"
                    >
                      <div class="flex items-center">
                        <input type="checkbox" checked />
                        <span class="checkmark"></span>
                        SkyWay
                      </div>
                      <span class="text-gray-500">$599</span>
                    </label>
                    <label
                      class="custom-checkbox text-sm text-gray-700 flex items-center justify-between"
                    >
                      <div class="flex items-center">
                        <input type="checkbox" />
                        <span class="checkmark"></span>
                        Atlantic Air
                      </div>
                      <span class="text-gray-500">$649</span>
                    </label>
                    <label
                      class="custom-checkbox text-sm text-gray-700 flex items-center justify-between"
                    >
                      <div class="flex items-center">
                        <input type="checkbox" />
                        <span class="checkmark"></span>
                        Global Wings
                      </div>
                      <span class="text-gray-500">$699</span>
                    </label>
                  </div>
                </div>
                <!-- Stops Filter -->
                <div class="border-t border-gray-200 py-4">
                  <h4 class="font-medium text-gray-800 mb-3">Stops</h4>
                  <div class="space-y-2">
                    <label
                      class="custom-checkbox text-sm text-gray-700 flex items-center justify-between"
                    >
                      <div class="flex items-center">
                        <input type="checkbox" checked />
                        <span class="checkmark"></span>
                        Direct
                      </div>
                      <span class="text-gray-500">4</span>
                    </label>
                    <label
                      class="custom-checkbox text-sm text-gray-700 flex items-center justify-between"
                    >
                      <div class="flex items-center">
                        <input type="checkbox" />
                        <span class="checkmark"></span>
                        1 Stop
                      </div>
                      <span class="text-gray-500">2</span>
                    </label>
                    <label
                      class="custom-checkbox text-sm text-gray-700 flex items-center justify-between"
                    >
                      <div class="flex items-center">
                        <input type="checkbox" />
                        <span class="checkmark"></span>
                        2+ Stops
                      </div>
                      <span class="text-gray-500">1</span>
                    </label>
                  </div>
                </div>
                <!-- Price Range Filter -->
                <div class="border-t border-gray-200 py-4">
                  <h4 class="font-medium text-gray-800 mb-3">Price Range</h4>
                  <div class="mb-4">
                    <input
                      type="range"
                      min="400"
                      max="1000"
                      value="700"
                      class="price-slider"
                      id="priceRange"
                    />
                    <div class="flex justify-between mt-2">
                      <span class="text-sm text-gray-500">$400</span>
                      <span class="text-sm text-gray-700 font-medium"
                        >$700</span
                      >
                      <span class="text-sm text-gray-500">$1000</span>
                    </div>
                  </div>
                </div>
                <!-- Departure Time Filter -->
                <div class="border-t border-gray-200 py-4">
                  <h4 class="font-medium text-gray-800 mb-3">Departure Time</h4>
                  <div class="grid grid-cols-2 gap-2">
                    <label class="time-slot">
                      <input type="checkbox" checked />
                      <div class="time-slot-label text-center text-sm">
                        <div
                          class="w-5 h-5 mx-auto mb-1 flex items-center justify-center"
                        >
                          <i class="ri-sun-line"></i>
                        </div>
                        Morning
                      </div>
                    </label>
                    <label class="time-slot">
                      <input type="checkbox" />
                      <div class="time-slot-label text-center text-sm">
                        <div
                          class="w-5 h-5 mx-auto mb-1 flex items-center justify-center"
                        >
                          <i class="ri-sun-foggy-line"></i>
                        </div>
                        Afternoon
                      </div>
                    </label>
                    <label class="time-slot">
                      <input type="checkbox" checked />
                      <div class="time-slot-label text-center text-sm">
                        <div
                          class="w-5 h-5 mx-auto mb-1 flex items-center justify-center"
                        >
                          <i class="ri-moon-line"></i>
                        </div>
                        Evening
                      </div>
                    </label>
                    <label class="time-slot">
                      <input type="checkbox" />
                      <div class="time-slot-label text-center text-sm">
                        <div
                          class="w-5 h-5 mx-auto mb-1 flex items-center justify-center"
                        >
                          <i class="ri-moon-clear-line"></i>
                        </div>
                        Night
                      </div>
                    </label>
                  </div>
                </div>
                <!-- Duration Filter -->
                <div class="border-t border-gray-200 py-4">
                  <h4 class="font-medium text-gray-800 mb-3">Duration</h4>
                  <div class="mb-4">
                    <input
                      type="range"
                      min="5"
                      max="20"
                      value="10"
                      class="price-slider"
                      id="durationRange"
                    />
                    <div class="flex justify-between mt-2">
                      <span class="text-sm text-gray-500">5h</span>
                      <span class="text-sm text-gray-700 font-medium"
                        >Max 10h</span
                      >
                      <span class="text-sm text-gray-500">20h</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Flight Results -->
            <div class="w-full md:w-3/4">
              <!-- Sort Options -->
              <div
                class="bg-white rounded-lg shadow-sm p-4 mb-4 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4"
              >
                <div>
                  <h2 class="text-lg font-semibold text-gray-800">
                    New York (JFK) to London (LHR)
                  </h2>
                  <p class="text-sm text-gray-600">
                    May 15 - May 22, 2025 • 2 Adults • Economy
                  </p>
                </div>
                <div class="flex items-center">
                  <span class="text-sm text-gray-700 mr-2">Sort by:</span>
                  <div class="relative">
                    <select
                      class="appearance-none bg-gray-100 text-gray-700 py-2 px-4 pr-8 rounded text-sm font-medium"
                    >
                      <option>Price: Low to High</option>
                      <option>Duration: Shortest</option>
                      <option>Departure: Earliest</option>
                      <option>Arrival: Earliest</option>
                    </select>
                    <div
                      class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none"
                    >
                      <i class="ri-arrow-down-s-line text-gray-500"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Flight Cards -->
              <div class="space-y-4">
                <!-- Flight 1 -->
                <div
                  class="bg-white rounded-lg shadow-sm overflow-hidden flight-card"
                >
                  <div class="p-6">
                    <div
                      class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4"
                    >
                      <!-- Airline Info -->
                      <div class="flex items-center">
                        <div
                          class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4"
                        >
                          <i class="ri-plane-line ri-lg text-primary"></i>
                        </div>
                        <div>
                          <h3 class="font-semibold text-gray-800">
                            Builder Airlines
                          </h3>
                          <p class="text-sm text-gray-500">Flight BA-2023</p>
                        </div>
                      </div>
                      <!-- Flight Times -->
                      <div
                        class="flex flex-col md:flex-row items-start md:items-center gap-6 flex-grow"
                      >
                        <div class="text-center">
                          <p class="text-lg font-semibold text-gray-800">
                            08:30
                          </p>
                          <p class="text-sm text-gray-500">JFK</p>
                        </div>
                        <div class="flex flex-col items-center flex-grow">
                          <div class="flex items-center w-full">
                            <div class="h-0.5 bg-gray-300 flex-grow"></div>
                            <div
                              class="w-6 h-6 rounded-full border-2 border-primary flex items-center justify-center mx-2"
                            >
                              <i class="ri-plane-line text-xs text-primary"></i>
                            </div>
                            <div class="h-0.5 bg-gray-300 flex-grow"></div>
                          </div>
                          <div class="mt-1">
                            <span class="text-xs font-medium text-gray-500"
                              >7h 30m • Direct</span
                            >
                          </div>
                        </div>
                        <div class="text-center">
                          <p class="text-lg font-semibold text-gray-800">
                            16:00
                          </p>
                          <p class="text-sm text-gray-500">LHR</p>
                        </div>
                      </div>
                      <!-- Price -->
                      <div class="flex flex-col items-end">
                        <p class="text-2xl font-bold text-gray-800">$549</p>
                        <p class="text-sm text-gray-500">per person</p>
                        <button
                          class="mt-2 bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
                        >
                          Select
                        </button>
                      </div>
                    </div>
                    <!-- Flight Details (Hidden by Default) -->
                    <div
                      class="mt-6 pt-6 border-t border-gray-200 hidden"
                      id="flightDetails1"
                    >
                      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                          <h4 class="font-medium text-gray-800 mb-2">
                            Flight Details
                          </h4>
                          <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-center">
                              <div
                                class="w-5 h-5 flex items-center justify-center mr-2"
                              >
                                <i class="ri-plane-line text-primary"></i>
                              </div>
                              <span>Boeing 787 Dreamliner</span>
                            </li>
                            <li class="flex items-center">
                              <div
                                class="w-5 h-5 flex items-center justify-center mr-2"
                              >
                                <i class="ri-wifi-line text-primary"></i>
                              </div>
                              <span>In-flight Wi-Fi available</span>
                            </li>
                            <li class="flex items-center">
                              <div
                                class="w-5 h-5 flex items-center justify-center mr-2"
                              >
                                <i class="ri-tv-line text-primary"></i>
                              </div>
                              <span>Personal entertainment system</span>
                            </li>
                          </ul>
                        </div>
                        <div>
                          <h4 class="font-medium text-gray-800 mb-2">
                            Baggage Allowance
                          </h4>
                          <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-center">
                              <div
                                class="w-5 h-5 flex items-center justify-center mr-2"
                              >
                                <i class="ri-suitcase-line text-primary"></i>
                              </div>
                              <span>Carry-on: 1 bag (8 kg)</span>
                            </li>
                            <li class="flex items-center">
                              <div
                                class="w-5 h-5 flex items-center justify-center mr-2"
                              >
                                <i class="ri-suitcase-2-line text-primary"></i>
                              </div>
                              <span>Checked: 1 bag (23 kg)</span>
                            </li>
                          </ul>
                        </div>
                        <div>
                          <h4 class="font-medium text-gray-800 mb-2">
                            Fare Details
                          </h4>
                          <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex justify-between">
                              <span>Base fare (2 adults)</span>
                              <span>$898</span>
                            </li>
                            <li class="flex justify-between">
                              <span>Taxes & fees</span>
                              <span>$200</span>
                            </li>
                            <li
                              class="flex justify-between font-medium text-gray-800"
                            >
                              <span>Total</span>
                              <span>$1,098</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Toggle Details Button -->
                    <button
                      class="mt-4 text-primary font-medium text-sm flex items-center"
                      onclick="toggleFlightDetails('flightDetails1')"
                    >
                      <span id="detailsText1">View details</span>
                      <div
                        class="w-5 h-5 flex items-center justify-center ml-1"
                      >
                        <i class="ri-arrow-down-s-line" id="detailsIcon1"></i>
                      </div>
                    </button>
                  </div>
                </div>
                <!-- Flight 2 -->
                <div
                  class="bg-white rounded-lg shadow-sm overflow-hidden flight-card"
                >
                  <div class="p-6">
                    <div
                      class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4"
                    >
                      <!-- Airline Info -->
                      <div class="flex items-center">
                        <div
                          class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4"
                        >
                          <i class="ri-plane-line ri-lg text-primary"></i>
                        </div>
                        <div>
                          <h3 class="font-semibold text-gray-800">
                            Builder Airlines
                          </h3>
                          <p class="text-sm text-gray-500">Flight BA-2025</p>
                        </div>
                      </div>
                      <!-- Flight Times -->
                      <div
                        class="flex flex-col md:flex-row items-start md:items-center gap-6 flex-grow"
                      >
                        <div class="text-center">
                          <p class="text-lg font-semibold text-gray-800">
                            14:45
                          </p>
                          <p class="text-sm text-gray-500">JFK</p>
                        </div>
                        <div class="flex flex-col items-center flex-grow">
                          <div class="flex items-center w-full">
                            <div class="h-0.5 bg-gray-300 flex-grow"></div>
                            <div
                              class="w-6 h-6 rounded-full border-2 border-primary flex items-center justify-center mx-2"
                            >
                              <i class="ri-plane-line text-xs text-primary"></i>
                            </div>
                            <div class="h-0.5 bg-gray-300 flex-grow"></div>
                          </div>
                          <div class="mt-1">
                            <span class="text-xs font-medium text-gray-500"
                              >7h 15m • Direct</span
                            >
                          </div>
                        </div>
                        <div class="text-center">
                          <p class="text-lg font-semibold text-gray-800">
                            22:00
                          </p>
                          <p class="text-sm text-gray-500">LHR</p>
                        </div>
                      </div>
                      <!-- Price -->
                      <div class="flex flex-col items-end">
                        <p class="text-2xl font-bold text-gray-800">$579</p>
                        <p class="text-sm text-gray-500">per person</p>
                        <button
                          class="mt-2 bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
                        >
                          Select
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Flight 3 -->
                <div
                  class="bg-white rounded-lg shadow-sm overflow-hidden flight-card"
                >
                  <div class="p-6">
                    <div
                      class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4"
                    >
                      <!-- Airline Info -->
                      <div class="flex items-center">
                        <div
                          class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4"
                        >
                          <i class="ri-plane-line ri-lg text-primary"></i>
                        </div>
                        <div>
                          <h3 class="font-semibold text-gray-800">SkyWay</h3>
                          <p class="text-sm text-gray-500">Flight SW-405</p>
                        </div>
                      </div>
                      <!-- Flight Times -->
                      <div
                        class="flex flex-col md:flex-row items-start md:items-center gap-6 flex-grow"
                      >
                        <div class="text-center">
                          <p class="text-lg font-semibold text-gray-800">
                            06:15
                          </p>
                          <p class="text-sm text-gray-500">JFK</p>
                        </div>
                        <div class="flex flex-col items-center flex-grow">
                          <div class="flex items-center w-full">
                            <div class="h-0.5 bg-gray-300 flex-grow"></div>
                            <div
                              class="w-6 h-6 rounded-full border-2 border-primary flex items-center justify-center mx-2"
                            >
                              <i class="ri-plane-line text-xs text-primary"></i>
                            </div>
                            <div class="h-0.5 bg-gray-300 flex-grow"></div>
                          </div>
                          <div class="mt-1">
                            <span class="text-xs font-medium text-gray-500"
                              >7h 45m • Direct</span
                            >
                          </div>
                        </div>
                        <div class="text-center">
                          <p class="text-lg font-semibold text-gray-800">
                            14:00
                          </p>
                          <p class="text-sm text-gray-500">LHR</p>
                        </div>
                      </div>
                      <!-- Price -->
                      <div class="flex flex-col items-end">
                        <p class="text-2xl font-bold text-gray-800">$599</p>
                        <p class="text-sm text-gray-500">per person</p>
                        <button
                          class="mt-2 bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
                        >
                          Select
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Flight 4 -->
                <div
                  class="bg-white rounded-lg shadow-sm overflow-hidden flight-card"
                >
                  <div class="p-6">
                    <div
                      class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4"
                    >
                      <!-- Airline Info -->
                      <div class="flex items-center">
                        <div
                          class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4"
                        >
                          <i class="ri-plane-line ri-lg text-primary"></i>
                        </div>
                        <div>
                          <h3 class="font-semibold text-gray-800">SkyWay</h3>
                          <p class="text-sm text-gray-500">Flight SW-407</p>
                        </div>
                      </div>
                      <!-- Flight Times -->
                      <div
                        class="flex flex-col md:flex-row items-start md:items-center gap-6 flex-grow"
                      >
                        <div class="text-center">
                          <p class="text-lg font-semibold text-gray-800">
                            18:30
                          </p>
                          <p class="text-sm text-gray-500">JFK</p>
                        </div>
                        <div class="flex flex-col items-center flex-grow">
                          <div class="flex items-center w-full">
                            <div class="h-0.5 bg-gray-300 flex-grow"></div>
                            <div
                              class="w-6 h-6 rounded-full border-2 border-primary flex items-center justify-center mx-2"
                            >
                              <i class="ri-plane-line text-xs text-primary"></i>
                            </div>
                            <div class="h-0.5 bg-gray-300 flex-grow"></div>
                          </div>
                          <div class="mt-1">
                            <span class="text-xs font-medium text-gray-500"
                              >7h 20m • Direct</span
                            >
                          </div>
                        </div>
                        <div class="text-center">
                          <p class="text-lg font-semibold text-gray-800">
                            01:50
                          </p>
                          <p class="text-sm text-gray-500">LHR</p>
                        </div>
                      </div>
                      <!-- Price -->
                      <div class="flex flex-col items-end">
                        <p class="text-2xl font-bold text-gray-800">$619</p>
                        <p class="text-sm text-gray-500">per person</p>
                        <button
                          class="mt-2 bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
                        >
                          Select
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Load More Button -->
                <div class="text-center mt-8">
                  <button
                    class="bg-white text-primary border border-primary px-6 py-3 !rounded-button whitespace-nowrap font-medium hover:bg-gray-50 transition-colors"
                  >
                    Load More Flights
                  </button>
                </div>
              </div>
            </div>
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
    <!-- Mobile Filter Modal (Hidden by Default) -->
    <div
      class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden"
      id="filterModal"
    >
      <div
        class="absolute right-0 top-0 bottom-0 w-4/5 max-w-md bg-white overflow-y-auto"
      >
        <div class="p-6">
          <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-semibold text-gray-800">Filters</h3>
            <button class="text-gray-500" onclick="toggleFilterModal()">
              <i class="ri-close-line ri-lg"></i>
            </button>
          </div>
          <!-- Filter Content (Same as Sidebar) -->
          <div class="border-t border-gray-200 py-4">
            <h4 class="font-medium text-gray-800 mb-3">Airlines</h4>
            <div class="space-y-2">
              <label
                class="custom-checkbox text-sm text-gray-700 flex items-center justify-between"
              >
                <div class="flex items-center">
                  <input type="checkbox" checked />
                  <span class="checkmark"></span>
                  Builder Airlines
                </div>
                <span class="text-gray-500">$549</span>
              </label>
              <label
                class="custom-checkbox text-sm text-gray-700 flex items-center justify-between"
              >
                <div class="flex items-center">
                  <input type="checkbox" checked />
                  <span class="checkmark"></span>
                  SkyWay
                </div>
                <span class="text-gray-500">$599</span>
              </label>
              <label
                class="custom-checkbox text-sm text-gray-700 flex items-center justify-between"
              >
                <div class="flex items-center">
                  <input type="checkbox" />
                  <span class="checkmark"></span>
                  Atlantic Air
                </div>
                <span class="text-gray-500">$649</span>
              </label>
              <label
                class="custom-checkbox text-sm text-gray-700 flex items-center justify-between"
              >
                <div class="flex items-center">
                  <input type="checkbox" />
                  <span class="checkmark"></span>
                  Global Wings
                </div>
                <span class="text-gray-500">$699</span>
              </label>
            </div>
          </div>
          <!-- Other Filters -->
          <!-- (Similar to desktop sidebar) -->
          <div class="mt-8">
            <button
              class="w-full bg-primary text-white px-6 py-3 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
            >
              Apply Filters
            </button>
          </div>
        </div>
      </div>
    </div>
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
        // Price range slider
        const priceRange = document.getElementById("priceRange");
        if (priceRange) {
          priceRange.addEventListener("input", function () {
            const priceValue =
              this.nextElementSibling.querySelector(".text-gray-700");
            priceValue.textContent = "$" + this.value;
          });
        }
        // Duration range slider
        const durationRange = document.getElementById("durationRange");
        if (durationRange) {
          durationRange.addEventListener("input", function () {
            const durationValue =
              this.nextElementSibling.querySelector(".text-gray-700");
            durationValue.textContent = "Max " + this.value + "h";
          });
        }
      });
      // Toggle flight details
      function toggleFlightDetails(detailsId) {
        const details = document.getElementById(detailsId);
        const detailsText = document.getElementById("detailsText1");
        const detailsIcon = document.getElementById("detailsIcon1");
        if (details.classList.contains("hidden")) {
          details.classList.remove("hidden");
          detailsText.textContent = "Hide details";
          detailsIcon.classList.remove("ri-arrow-down-s-line");
          detailsIcon.classList.add("ri-arrow-up-s-line");
        } else {
          details.classList.add("hidden");
          detailsText.textContent = "View details";
          detailsIcon.classList.remove("ri-arrow-up-s-line");
          detailsIcon.classList.add("ri-arrow-down-s-line");
        }
      }
      // Toggle filter modal on mobile
      function toggleFilterModal() {
        const modal = document.getElementById("filterModal");
        if (modal.classList.contains("hidden")) {
          modal.classList.remove("hidden");
          document.body.style.overflow = "hidden";
        } else {
          modal.classList.add("hidden");
          document.body.style.overflow = "";
        }
      }
      // Show filter modal button on mobile
      document.addEventListener("DOMContentLoaded", function () {
        const showFilterButton = document.createElement("button");
        showFilterButton.className =
          "fixed bottom-4 right-4 bg-primary text-white p-4 rounded-full shadow-lg md:hidden z-40";
        showFilterButton.innerHTML = '<i class="ri-filter-3-line ri-lg"></i>';
        showFilterButton.addEventListener("click", toggleFilterModal);
        document.body.appendChild(showFilterButton);
      });
    </script>
  </body>
</html>
