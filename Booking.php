<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Builder Airlines - Book Your Adventure</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
    <style>
      :where([class^="ri-"])::before { content: "\f3c2"; }
      body {
      font-family: 'Inter', sans-serif;
      background-color: #f8fafc;
      }
      .date-picker-container {
      position: relative;
      }
      .date-picker {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 50;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      width: 300px;
      padding: 16px;
      }
      .date-picker.active {
      display: block;
      }
      .calendar {
      width: 100%;
      }
      .calendar-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 12px;
      }
      .calendar-grid {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 4px;
      }
      .calendar-day {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 32px;
      font-size: 12px;
      border-radius: 4px;
      cursor: pointer;
      }
      .calendar-day:hover {
      background-color: #f3f4f6;
      }
      .calendar-day.selected {
      background-color: #3176FF;
      color: white;
      }
      .calendar-day.disabled {
      color: #d1d5db;
      cursor: not-allowed;
      }
      .calendar-day.has-price {
      position: relative;
      }
      .calendar-day.has-price::after {
      content: attr(data-price);
      position: absolute;
      bottom: 2px;
      font-size: 8px;
      color: #6b7280;
      }
      .weekday-header {
      font-size: 12px;
      color: #6b7280;
      text-align: center;
      margin-bottom: 8px;
      }
      .range-slider {
      -webkit-appearance: none;
      appearance: none;
      width: 100%;
      height: 6px;
      background: #e5e7eb;
      border-radius: 3px;
      outline: none;
      }
      .range-slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 18px;
      height: 18px;
      background: #3176FF;
      border-radius: 50%;
      cursor: pointer;
      }
      .range-slider::-moz-range-thumb {
      width: 18px;
      height: 18px;
      background: #3176FF;
      border-radius: 50%;
      cursor: pointer;
      border: none;
      }
      .custom-checkbox {
      position: relative;
      display: inline-block;
      width: 20px;
      height: 20px;
      border-radius: 4px;
      border: 2px solid #d1d5db;
      background-color: white;
      cursor: pointer;
      }
      .custom-checkbox.checked {
      background-color: #3176FF;
      border-color: #3176FF;
      }
      .custom-checkbox.checked::after {
      content: '';
      position: absolute;
      top: 3px;
      left: 6px;
      width: 6px;
      height: 10px;
      border: solid white;
      border-width: 0 2px 2px 0;
      transform: rotate(45deg);
      }
      .custom-switch {
      position: relative;
      display: inline-block;
      width: 44px;
      height: 24px;
      }
      .custom-switch input {
      opacity: 0;
      width: 0;
      height: 0;
      }
      .switch-slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #e5e7eb;
      transition: .4s;
      border-radius: 24px;
      }
      .switch-slider:before {
      position: absolute;
      content: "";
      height: 18px;
      width: 18px;
      left: 3px;
      bottom: 3px;
      background-color: white;
      transition: .4s;
      border-radius: 50%;
      }
      input:checked + .switch-slider {
      background-color: #3176FF;
      }
      input:checked + .switch-slider:before {
      transform: translateX(20px);
      }
      .counter-input {
      width: 40px;
      text-align: center;
      border: none;
      background: transparent;
      font-size: 16px;
      font-weight: 500;
      }
      .counter-input:focus {
      outline: none;
      }
      .destination-card {
      transition: all 0.3s ease;
      }
      .destination-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      }
      .search-input:focus {
      outline: none;
      }
      input[type="number"]::-webkit-inner-spin-button,
      input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
      }
      input[type="number"] {
      -moz-appearance1: textfield;
      }
    </style>
  </head>
  <body>
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
    <!-- Progress Indicator -->
    <div class="bg-white border-b border-gray-200">
      <div class="container mx-auto px-4 py-4">
        <div class="max-w-6xl mx-auto">
          <div class="flex items-center">
            <div class="flex items-center">
              <div
                class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-medium"
              >
                1
              </div>
              <div class="ml-2 font-medium text-primary">Destination</div>
            </div>
            <div class="w-16 h-1 bg-gray-200 mx-2 sm:mx-4">
              <div class="h-full w-0 bg-primary"></div>
            </div>
            <div class="flex items-center">
              <div
                class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center font-medium"
              >
                2
              </div>
              <div class="ml-2 font-medium text-gray-500">Flights</div>
            </div>
            <div class="w-16 h-1 bg-gray-200 mx-2 sm:mx-4 hidden sm:block">
              <div class="h-full w-0 bg-primary"></div>
            </div>
            <div class="flex items-center hidden sm:flex">
              <div
                class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center font-medium"
              >
                3
              </div>
              <div class="ml-2 font-medium text-gray-500">Accommodation</div>
            </div>
            <div class="w-16 h-1 bg-gray-200 mx-2 sm:mx-4 hidden sm:block">
              <div class="h-full w-0 bg-primary"></div>
            </div>
            <div class="flex items-center hidden sm:flex">
              <div
                class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center font-medium"
              >
                4
              </div>
              <div class="ml-2 font-medium text-gray-500">Payment</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main Content -->
    <main class="py-8">
      <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
          <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Column - Form -->
            <form action="CRUD/INSERT/travel_booking.php" method="POST" >
            <div class="w-full lg:w-7/12">
              <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                <h1 class="text-2xl font-bold text-gray-900 mb-6">
                  Book Your Adventure
                </h1>
                <!-- Destination Selection -->
                <div class="mb-8">
                  <h2 class="text-lg font-semibold text-gray-900 mb-4">
                    Where would you like to go?
                  </h2>
                  <div class="relative mb-4">
                    <div
                      class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-6 h-full"
                    >
                      <i class="ri-search-line text-gray-400"></i>
                    </div>
                    <input
                      type="text"
                      class="search-input w-full pl-10 pr-4 py-3 border border-gray-300 !rounded-button"
                      placeholder="Search destinations..."
                    />
                  </div>
                  <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mb-6">
                    <div
                      class="destination-card bg-white border border-gray-200 rounded p-3 cursor-pointer hover:border-primary"
                    >
                      <div class="flex items-center">
                        <div
                          class="w-8 h-8 flex items-center justify-center mr-2 text-primary"
                        >
                          <i class="ri-building-line"></i>
                        </div>
                        <div>
                          <div class="font-medium text-gray-900">Paris</div>
                          <div class="text-xs text-gray-500">France</div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="destination-card bg-white border border-gray-200 rounded p-3 cursor-pointer hover:border-primary"
                    >
                      <div class="flex items-center">
                        <div
                          class="w-8 h-8 flex items-center justify-center mr-2 text-primary"
                        >
                          <i class="ri-home-4-line"></i>
                        </div>
                        <div>
                          <div class="font-medium text-gray-900">Santorini</div>
                          <div class="text-xs text-gray-500">Greece</div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="destination-card bg-white border border-gray-200 rounded p-3 cursor-pointer hover:border-primary"
                    >
                      <div class="flex items-center">
                        <div
                          class="w-8 h-8 flex items-center justify-center mr-2 text-primary"
                        >
                          <i class="ri-building-line"></i>
                        </div>
                        <div>
                          <div class="font-medium text-gray-900">Tokyo</div>
                          <div class="text-xs text-gray-500">Japan</div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="destination-card bg-white border border-gray-200 rounded p-3 cursor-pointer hover:border-primary"
                    >
                      <div class="flex items-center">
                        <div
                          class="w-8 h-8 flex items-center justify-center mr-2 text-primary"
                        >
                          <i class="ri-footprint-line"></i>
                        </div>
                        <div>
                          <div class="font-medium text-gray-900">Bali</div>
                          <div class="text-xs text-gray-500">Indonesia</div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="destination-card bg-white border border-gray-200 rounded p-3 cursor-pointer hover:border-primary"
                    >
                      <div class="flex items-center">
                        <div
                          class="w-8 h-8 flex items-center justify-center mr-2 text-primary"
                        >
                          <i class="ri-government-line"></i>
                        </div>
                        <div>
                          <div class="font-medium text-gray-900">New York</div>
                          <div class="text-xs text-gray-500">USA</div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="destination-card bg-white border border-gray-200 rounded p-3 cursor-pointer hover:border-primary"
                    >
                      <div class="flex items-center">
                        <div
                          class="w-8 h-8 flex items-center justify-center mr-2 text-primary"
                        >
                          <i class="ri-building-line"></i>
                        </div>
                        <div>
                          <div class="font-medium text-gray-900">Singapore</div>
                          <div class="text-xs text-gray-500">Singapore</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Travel Dates -->
                <div class="mb-8">
                  <h2 class="text-lg font-semibold text-gray-900 mb-4">
                    When would you like to travel?
                  </h2>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div class="date-picker-container">
                      <label
                        class="block text-sm font-medium text-gray-700 mb-1"
                        >Departure Date</label
                      >
                      <div class="relative">
                        <input
                          type="text"
                          id="departure-date"
                          class="w-full pl-10 pr-4 py-3 border border-gray-300 !rounded-button"
                          placeholder="Select date"
                          readonly
                        />
                        <div
                          class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-6 h-full"
                        >
                          <i class="ri-calendar-line text-gray-400"></i>
                        </div>
                      </div>
                      <div class="date-picker" id="departure-date-picker">
                        <div class="calendar">
                          <div class="calendar-header">
                            <button
                              class="text-gray-700 hover:text-primary"
                              id="prev-month-departure"
                            >
                              <i class="ri-arrow-left-s-line"></i>
                            </button>
                            <div
                              class="text-sm font-medium"
                              id="current-month-departure"
                            >
                              May 2025
                            </div>
                            <button
                              class="text-gray-700 hover:text-primary"
                              id="next-month-departure"
                            >
                              <i class="ri-arrow-right-s-line"></i>
                            </button>
                          </div>
                          <div class="calendar-grid" id="weekdays-departure">
                            <div class="weekday-header">Su</div>
                            <div class="weekday-header">Mo</div>
                            <div class="weekday-header">Tu</div>
                            <div class="weekday-header">We</div>
                            <div class="weekday-header">Th</div>
                            <div class="weekday-header">Fr</div>
                            <div class="weekday-header">Sa</div>
                          </div>
                          <div class="calendar-grid" id="days-departure">
                            <!-- Days will be filled by JavaScript -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="date-picker-container">
                      <label
                        class="block text-sm font-medium text-gray-700 mb-1"
                        >Return Date
                        <span class="text-gray-400 text-xs"
                          >(Optional)</span
                        ></label
                      >
                      <div class="relative">
                        <input
                          type="text"
                          id="return-date"
                          class="w-full pl-10 pr-4 py-3 border border-gray-300 !rounded-button"
                          placeholder="Select date"
                          readonly
                        />
                        <div
                          class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-6 h-full"
                        >
                          <i class="ri-calendar-line text-gray-400"></i>
                        </div>
                      </div>
                      <div class="date-picker" id="return-date-picker">
                        <div class="calendar">
                          <div class="calendar-header">
                            <button
                              class="text-gray-700 hover:text-primary"
                              id="prev-month-return"
                            >
                              <i class="ri-arrow-left-s-line"></i>
                            </button>
                            <div
                              class="text-sm font-medium"
                              id="current-month-return"
                            >
                              May 2025
                            </div>
                            <button
                              class="text-gray-700 hover:text-primary"
                              id="next-month-return"
                            >
                              <i class="ri-arrow-right-s-line"></i>
                            </button>
                          </div>
                          <div class="calendar-grid" id="weekdays-return">
                            <div class="weekday-header">Su</div>
                            <div class="weekday-header">Mo</div>
                            <div class="weekday-header">Tu</div>
                            <div class="weekday-header">We</div>
                            <div class="weekday-header">Th</div>
                            <div class="weekday-header">Fr</div>
                            <div class="weekday-header">Sa</div>
                          </div>
                          <div class="calendar-grid" id="days-return">
                            <!-- Days will be filled by JavaScript -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flex items-center">
                    <div
                      class="custom-checkbox"
                      id="flexible-dates-checkbox"
                    ></div>
                    <label
                      for="flexible-dates-checkbox"
                      class="ml-2 text-sm text-gray-700 cursor-pointer"
                      >I'm flexible with my travel dates</label
                    >
                  </div>
                </div>
                <!-- Travelers -->
                <div class="mb-8">
                  <h2 class="text-lg font-semibold text-gray-900 mb-4">
                    How many travelers?
                  </h2>
                  <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                      <div class="flex justify-between items-center">
                        <div>
                          <div class="text-sm font-medium text-gray-900">
                            Adults
                          </div>
                          <div class="text-xs text-gray-500">Ages 13+</div>
                        </div>
                        <div class="flex items-center">
                          <button
                            class="w-8 h-8 flex items-center justify-center text-gray-500 hover:text-primary"
                            id="decrease-adults"
                          >
                            <i class="ri-subtract-line"></i>
                          </button>
                          <input
                            type="number"
                            class="counter-input"
                            id="adults-count"
                            value="2"
                            min="1"
                            max="10"
                            readonly
                          />
                          <button
                            class="w-8 h-8 flex items-center justify-center text-gray-500 hover:text-primary"
                            id="increase-adults"
                          >
                            <i class="ri-add-line"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                      <div class="flex justify-between items-center">
                        <div>
                          <div class="text-sm font-medium text-gray-900">
                            Children
                          </div>
                          <div class="text-xs text-gray-500">Ages 2-12</div>
                        </div>
                        <div class="flex items-center">
                          <button
                            class="w-8 h-8 flex items-center justify-center text-gray-500 hover:text-primary"
                            id="decrease-children"
                          >
                            <i class="ri-subtract-line"></i>
                          </button>
                          <input
                            type="number"
                            class="counter-input"
                            id="children-count"
                            value="0"
                            min="0"
                            max="10"
                            readonly
                          />
                          <button
                            class="w-8 h-8 flex items-center justify-center text-gray-500 hover:text-primary"
                            id="increase-children"
                          >
                            <i class="ri-add-line"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                      <div class="flex justify-between items-center">
                        <div>
                          <div class="text-sm font-medium text-gray-900">
                            Infants
                          </div>
                          <div class="text-xs text-gray-500">Under 2</div>
                        </div>
                        <div class="flex items-center">
                          <button
                            class="w-8 h-8 flex items-center justify-center text-gray-500 hover:text-primary"
                            id="decrease-infants"
                          >
                            <i class="ri-subtract-line"></i>
                          </button>
                          <input
                            type="number"
                            class="counter-input"
                            id="infants-count"
                            value="0"
                            min="0"
                            max="4"
                            readonly
                          />
                          <button
                            class="w-8 h-8 flex items-center justify-center text-gray-500 hover:text-primary"
                            id="increase-infants"
                          >
                            <i class="ri-add-line"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Budget Range -->
                <div class="mb-8">
                  <h2 class="text-lg font-semibold text-gray-900 mb-4">
                    What's your budget?
                  </h2>
                  <div class="mb-6">
                    <div class="flex justify-between mb-2">
                      <span class="text-sm text-gray-500">$500</span>
                      <span class="text-sm text-gray-500">$10,000+</span>
                    </div>
                    <input
                      type="range"
                      class="range-slider"
                      id="budget-slider"
                      min="500"
                      max="10000"
                      step="100"
                      value="2500"
                    />
                    <div class="flex justify-between mt-2">
                      <span class="text-sm font-medium text-gray-900"
                        >Budget: <span id="budget-value">$2,500</span></span
                      >
                      <span class="text-xs text-gray-500">per person</span>
                    </div>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-4 gap-3">
                    <div
                      class="bg-white border border-gray-200 rounded-lg p-3 cursor-pointer hover:border-primary text-center"
                    >
                      <div class="text-sm font-medium text-gray-900">
                        Economy
                      </div>
                      <div class="text-xs text-gray-500">$500 - $1,500</div>
                    </div>
                    <div
                      class="bg-white border border-gray-200 rounded-lg p-3 cursor-pointer hover:border-primary text-center"
                    >
                      <div class="text-sm font-medium text-gray-900">
                        Standard
                      </div>
                      <div class="text-xs text-gray-500">$1,500 - $3,000</div>
                    </div>
                    <div
                      class="bg-white border border-gray-200 rounded-lg p-3 cursor-pointer hover:border-primary text-center"
                    >
                      <div class="text-sm font-medium text-gray-900">
                        Premium
                      </div>
                      <div class="text-xs text-gray-500">$3,000 - $5,000</div>
                    </div>
                    <div
                      class="bg-white border border-gray-200 rounded-lg p-3 cursor-pointer hover:border-primary text-center"
                    >
                      <div class="text-sm font-medium text-gray-900">
                        Luxury
                      </div>
                      <div class="text-xs text-gray-500">$5,000+</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Travel Preferences -->
              <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">
                  Travel Preferences
                </h2>
                <div class="mb-6">
                  <h3 class="text-sm font-medium text-gray-700 mb-3">
                    Travel Style
                  </h3>
                  <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                    <div
                      class="bg-white border border-gray-200 rounded-lg p-3 cursor-pointer hover:border-primary"
                    >
                      <div class="flex items-center">
                        <div
                          class="custom-checkbox"
                          id="adventure-checkbox"
                        ></div>
                        <label class="ml-2 text-sm text-gray-700"
                          >Adventure</label
                        >
                      </div>
                    </div>
                    <div
                      class="bg-white border border-gray-200 rounded-lg p-3 cursor-pointer hover:border-primary"
                    >
                      <div class="flex items-center">
                        <div class="custom-checkbox" id="luxury-checkbox"></div>
                        <label class="ml-2 text-sm text-gray-700">Luxury</label>
                      </div>
                    </div>
                    <div
                      class="bg-white border border-gray-200 rounded-lg p-3 cursor-pointer hover:border-primary"
                    >
                      <div class="flex items-center">
                        <div
                          class="custom-checkbox"
                          id="cultural-checkbox"
                        ></div>
                        <label class="ml-2 text-sm text-gray-700"
                          >Cultural</label
                        >
                      </div>
                    </div>
                    <div
                      class="bg-white border border-gray-200 rounded-lg p-3 cursor-pointer hover:border-primary"
                    >
                      <div class="flex items-center">
                        <div class="custom-checkbox" id="beach-checkbox"></div>
                        <label class="ml-2 text-sm text-gray-700">Beach</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-6">
                  <h3 class="text-sm font-medium text-gray-700 mb-3">
                    Trip Duration
                  </h3>
                  <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                    <div
                      class="bg-white border border-gray-200 rounded-lg p-3 cursor-pointer hover:border-primary text-center"
                    >
                      <div class="text-sm font-medium text-gray-900">
                        Weekend
                      </div>
                      <div class="text-xs text-gray-500">1-3 days</div>
                    </div>
                    <div
                      class="bg-white border border-gray-200 rounded-lg p-3 cursor-pointer hover:border-primary text-center"
                    >
                      <div class="text-sm font-medium text-gray-900">
                        Short Trip
                      </div>
                      <div class="text-xs text-gray-500">4-6 days</div>
                    </div>
                    <div
                      class="bg-white border border-gray-200 rounded-lg p-3 cursor-pointer hover:border-primary text-center"
                    >
                      <div class="text-sm font-medium text-gray-900">Week</div>
                      <div class="text-xs text-gray-500">7-10 days</div>
                    </div>
                    <div
                      class="bg-white border border-gray-200 rounded-lg p-3 cursor-pointer hover:border-primary text-center"
                    >
                      <div class="text-sm font-medium text-gray-900">
                        Extended
                      </div>
                      <div class="text-xs text-gray-500">10+ days</div>
                    </div>
                  </div>
                </div>
                <div>
                  <h3 class="text-sm font-medium text-gray-700 mb-3">
                    Additional Options
                  </h3>
                  <div class="space-y-3">
                    <div class="flex items-center justify-between">
                      <label class="text-sm text-gray-700"
                        >Direct flights only</label
                      >
                      <label class="custom-switch">
                        <input type="checkbox" id="direct-flights-toggle" />
                        <span class="switch-slider"></span>
                      </label>
                    </div>
                    <div class="flex items-center justify-between">
                      <label class="text-sm text-gray-700"
                        >Include nearby airports</label
                      >
                      <label class="custom-switch">
                        <input
                          type="checkbox"
                          id="nearby-airports-toggle"
                          checked
                        />
                        <span class="switch-slider"></span>
                      </label>
                    </div>
                    <div class="flex items-center justify-between">
                      <label class="text-sm text-gray-700"
                        >Show prices with taxes</label
                      >
                      <label class="custom-switch">
                        <input type="checkbox" id="show-taxes-toggle" checked />
                        <span class="switch-slider"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Action Button -->
              <div class="flex justify-between items-center">
                <a
                  href="index.html"
                  data-readdy="true"
                  class="text-primary font-medium flex items-center"
                >
                  <div class="w-5 h-5 flex items-center justify-center mr-1">
                    <i class="ri-arrow-left-line"></i>
                  </div>
                  Back to Destinations
                </a>
                <a
                  href=""
                  data-readdy="true"
                  class="bg-primary text-white px-8 py-3 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors"
                  >Continue to Flights</a
                >
              </div>
            </div>
            </form>
            <!-- Right Column - Map and Recommendations -->
            <div class="w-full lg:w-5/12">
              <!-- Map Visualization -->
              <div class="bg-white rounded-lg shadow-sm overflow-hidden mb-6">
                <div class="p-4 border-b border-gray-200">
                  <h2 class="text-lg font-semibold text-gray-900">
                    Destination Map
                  </h2>
                </div>
                <div
                  class="relative h-[400px] bg-cover bg-center"
                  style="background-image: url('https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746819332/map_placeholder_1280x720_uxw3kz.png')"
                >
                  <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                  <div class="absolute top-4 right-4 z-10">
                    <div class="bg-white rounded-lg shadow-sm p-2">
                      <div class="flex space-x-1">
                        <button
                          class="w-8 h-8 flex items-center justify-center text-gray-700 hover:text-primary"
                        >
                          <i class="ri-add-line"></i>
                        </button>
                        <button
                          class="w-8 h-8 flex items-center justify-center text-gray-700 hover:text-primary"
                        >
                          <i class="ri-subtract-line"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <!-- Map Markers -->
                  <div
                    class="absolute top-1/4 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                  >
                    <div
                      class="w-6 h-6 bg-primary rounded-full flex items-center justify-center text-white cursor-pointer relative group"
                    >
                      <i class="ri-map-pin-fill"></i>
                      <div
                        class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 bg-white rounded-lg shadow-lg p-2 w-32 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"
                      >
                        <div class="text-xs font-medium text-gray-900">
                          Paris, France
                        </div>
                        <div class="text-xs text-gray-500">From $549</div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="absolute top-1/3 left-1/3 transform -translate-x-1/2 -translate-y-1/2"
                  >
                    <div
                      class="w-6 h-6 bg-primary rounded-full flex items-center justify-center text-white cursor-pointer relative group"
                    >
                      <i class="ri-map-pin-fill"></i>
                      <div
                        class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 bg-white rounded-lg shadow-lg p-2 w-32 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"
                      >
                        <div class="text-xs font-medium text-gray-900">
                          Barcelona, Spain
                        </div>
                        <div class="text-xs text-gray-500">From $599</div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="absolute top-1/2 left-2/3 transform -translate-x-1/2 -translate-y-1/2"
                  >
                    <div
                      class="w-6 h-6 bg-primary rounded-full flex items-center justify-center text-white cursor-pointer relative group"
                    >
                      <i class="ri-map-pin-fill"></i>
                      <div
                        class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 bg-white rounded-lg shadow-lg p-2 w-32 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"
                      >
                        <div class="text-xs font-medium text-gray-900">
                          Tokyo, Japan
                        </div>
                        <div class="text-xs text-gray-500">From $879</div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="absolute bottom-1/4 right-1/4 transform -translate-x-1/2 -translate-y-1/2"
                  >
                    <div
                      class="w-6 h-6 bg-primary rounded-full flex items-center justify-center text-white cursor-pointer relative group"
                    >
                      <i class="ri-map-pin-fill"></i>
                      <div
                        class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 bg-white rounded-lg shadow-lg p-2 w-32 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"
                      >
                        <div class="text-xs font-medium text-gray-900">
                          Bali, Indonesia
                        </div>
                        <div class="text-xs text-gray-500">From $799</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Price Trends Chart -->
              <div class="bg-white rounded-lg shadow-sm overflow-hidden mb-6">
                <div class="p-4 border-b border-gray-200">
                  <h2 class="text-lg font-semibold text-gray-900">
                    Price Trends
                  </h2>
                </div>
                <div class="p-4">
                  <div id="price-trends-chart" class="h-[250px]"></div>
                </div>
              </div>
              <!-- Recommended Packages -->
              <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="p-4 border-b border-gray-200">
                  <h2 class="text-lg font-semibold text-gray-900">
                    Recommended Packages
                  </h2>
                </div>
                <div class="p-4">
                  <div class="space-y-4">
                    <div
                      class="destination-card bg-white border border-gray-200 rounded-lg overflow-hidden"
                    >
                      <div class="flex flex-col sm:flex-row">
                        <div class="w-full sm:w-1/3 h-32 sm:h-auto">
                          <img
                           src="Resource/place1.jpg"
                            alt="Paris"
                            class="w-full h-full object-cover object-top"
                          />
                        </div>
                        <div class="w-full sm:w-2/3 p-4">
                          <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-bold text-gray-900">
                              Paris Explorer
                            </h3>
                            <span class="text-sm text-primary font-medium"
                              >$1,299</span
                            >
                          </div>
                          <p class="text-sm text-gray-600 mb-3">
                            5-day cultural experience in the heart of Paris with
                            guided tours of major landmarks.
                          </p>
                          <div class="flex flex-wrap gap-2">
                            <span
                              class="bg-blue-50 text-blue-700 px-2 py-1 rounded-full text-xs"
                              >Cultural</span
                            >
                            <span
                              class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs"
                              >City Break</span
                            >
                            <span
                              class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs"
                              >Guided Tours</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="destination-card bg-white border border-gray-200 rounded-lg overflow-hidden"
                    >
                      <div class="flex flex-col sm:flex-row">
                        <div class="w-full sm:w-1/3 h-32 sm:h-auto">
                          <img
                          src="Resource/place1.jpg"
                            alt="Santorini"
                            class="w-full h-full object-cover object-top"
                          />
                        </div>
                        <div class="w-full sm:w-2/3 p-4">
                          <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-bold text-gray-900">
                              Greek Island Getaway
                            </h3>
                            <span class="text-sm text-primary font-medium"
                              >$1,899</span
                            >
                          </div>
                          <p class="text-sm text-gray-600 mb-3">
                            7-day luxury retreat in Santorini with private villa
                            accommodation and sunset cruise.
                          </p>
                          <div class="flex flex-wrap gap-2">
                            <span
                              class="bg-blue-50 text-blue-700 px-2 py-1 rounded-full text-xs"
                              >Luxury</span
                            >
                            <span
                              class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs"
                              >Beach</span
                            >
                            <span
                              class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs"
                              >Romantic</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="destination-card bg-white border border-gray-200 rounded-lg overflow-hidden"
                    >
                      <div class="flex flex-col sm:flex-row">
                        <div class="w-full sm:w-1/3 h-32 sm:h-auto">
                          <img
                           src="Resource/place1.jpg"
                            alt="Tokyo"
                            class="w-full h-full object-cover object-top"
                          />
                        </div>
                        <div class="w-full sm:w-2/3 p-4">
                          <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-bold text-gray-900">
                              Tokyo Adventure
                            </h3>
                            <span class="text-sm text-primary font-medium"
                              >$2,499</span
                            >
                          </div>
                          <p class="text-sm text-gray-600 mb-3">
                            10-day immersive experience in Tokyo and surrounding
                            areas with cultural workshops.
                          </p>
                          <div class="flex flex-wrap gap-2">
                            <span
                              class="bg-blue-50 text-blue-700 px-2 py-1 rounded-full text-xs"
                              >Adventure</span
                            >
                            <span
                              class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs"
                              >Cultural</span
                            >
                            <span
                              class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs"
                              >Food Tour</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
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
        // Date picker functionality
        const departureDateInput = document.getElementById("departure-date");
        const returnDateInput = document.getElementById("return-date");
        const departureDatePicker = document.getElementById("departure-date-picker");
        const returnDatePicker = document.getElementById("return-date-picker");
        // Initialize date pickers
        departureDateInput.addEventListener("click", function () {
          departureDatePicker.classList.toggle("active");
          returnDatePicker.classList.remove("active");
        });
        returnDateInput.addEventListener("click", function () {
          returnDatePicker.classList.toggle("active");
          departureDatePicker.classList.remove("active");
        });
        // Close date pickers when clicking outside
        document.addEventListener("click", function (e) {
          if (!e.target.closest(".date-picker-container")) {
            departureDatePicker.classList.remove("active");
            returnDatePicker.classList.remove("active");
          }
        });
        // Generate calendar days
        function generateCalendarDays(year, month, containerId, selectedDate = null) {
          const container = document.getElementById(containerId);
          container.innerHTML = "";
          const date = new Date(year, month, 1);
          const lastDay = new Date(year, month + 1, 0).getDate();
          const firstDayIndex = date.getDay();
          // Add empty cells for days before the first day of the month
          for (let i = 0; i < firstDayIndex; i++) {
            const emptyDay = document.createElement("div");
            emptyDay.className = "calendar-day";
            container.appendChild(emptyDay);
          }
          // Add days of the month
          for (let i = 1; i <= lastDay; i++) {
            const day = document.createElement("div");
            day.className = "calendar-day";
            // Add price indicator to some random days
            if (Math.random() > 0.7) {
              day.className += " has-price";
              const price = Math.floor(Math.random() * 200) + 100;
              day.setAttribute("data-price", "$" + price);
            }
            // Check if this day is the selected date
            const currentDate = new Date(year, month, i);
            if (
              selectedDate &&
              currentDate.getDate() === selectedDate.getDate() &&
              currentDate.getMonth() === selectedDate.getMonth() &&
              currentDate.getFullYear() === selectedDate.getFullYear()
            ) {
              day.className += " selected";
            }
            // Disable past dates
            const today = new Date();
            if (
              currentDate <
              new Date(today.getFullYear(), today.getMonth(), today.getDate())
            ) {
              day.className += " disabled";
            } else {
              day.addEventListener("click", function () {
                if (!this.classList.contains("disabled")) {
                  // Remove selected class from all days
                  const allDays = container.querySelectorAll(".calendar-day");
                  allDays.forEach((d) => d.classList.remove("selected"));
                  // Add selected class to clicked day
                  this.classList.add("selected");
                  // Update input value
                  const dateStr = `${year}-${(month + 1).toString().padStart(2, "0")}-${i.toString().padStart(2, "0")}`;
                  const displayDate = new Date(dateStr);
                  const options = {
                    weekday: "short",
                    month: "short",
                    day: "numeric",
                  };
                  if (containerId === "days-departure") {
                    departureDateInput.value = displayDate.toLocaleDateString(
                      "en-US",
                      options,
                    );
                    departureDatePicker.classList.remove("active");
                  } else {
                    returnDateInput.value = displayDate.toLocaleDateString(
                      "en-US",
                      options,
                    );
                    returnDatePicker.classList.remove("active");
                  }
                }
              });
            }
            day.textContent = i;
            container.appendChild(day);
          }
        }
        // Initialize calendars with current month
        const currentDate = new Date();
        let currentYear = currentDate.getFullYear();
        let currentMonth = currentDate.getMonth();
        generateCalendarDays(currentYear, currentMonth, "days-departure");
        generateCalendarDays(currentYear, currentMonth, "days-return");
        document.getElementById("current-month-departure").textContent = new Date(
          currentYear,
          currentMonth,
        ).toLocaleDateString("en-US", { month: "long", year: "numeric" });
        document.getElementById("current-month-return").textContent = new Date(
          currentYear,
          currentMonth,
        ).toLocaleDateString("en-US", { month: "long", year: "numeric" });
        // Month navigation
        document
          .getElementById("prev-month-departure")
          .addEventListener("click", function () {
            currentMonth--;
            if (currentMonth < 0) {
              currentMonth = 11;
              currentYear--;
            }
            generateCalendarDays(currentYear, currentMonth, "days-departure");
            document.getElementById("current-month-departure").textContent = new Date(
              currentYear,
              currentMonth,
            ).toLocaleDateString("en-US", { month: "long", year: "numeric" });
          });
        document
          .getElementById("next-month-departure")
          .addEventListener("click", function () {
            currentMonth++;
            if (currentMonth > 11) {
              currentMonth = 0;
              currentYear++;
            }
            generateCalendarDays(currentYear, currentMonth, "days-departure");
            document.getElementById("current-month-departure").textContent = new Date(
              currentYear,
              currentMonth,
            ).toLocaleDateString("en-US", { month: "long", year: "numeric" });
          });
        document
          .getElementById("prev-month-return")
          .addEventListener("click", function () {
            currentMonth--;
            if (currentMonth < 0) {
              currentMonth = 11;
              currentYear--;
            }
            generateCalendarDays(currentYear, currentMonth, "days-return");
            document.getElementById("current-month-return").textContent = new Date(
              currentYear,
              currentMonth,
            ).toLocaleDateString("en-US", { month: "long", year: "numeric" });
          });
        document
          .getElementById("next-month-return")
          .addEventListener("click", function () {
            currentMonth++;
            if (currentMonth > 11) {
              currentMonth = 0;
              currentYear++;
            }
            generateCalendarDays(currentYear, currentMonth, "days-return");
            document.getElementById("current-month-return").textContent = new Date(
              currentYear,
              currentMonth,
            ).toLocaleDateString("en-US", { month: "long", year: "numeric" });
          });
        // Custom checkbox functionality
        const checkboxes = document.querySelectorAll(".custom-checkbox");
        checkboxes.forEach((checkbox) => {
          checkbox.addEventListener("click", function () {
            this.classList.toggle("checked");
          });
        });
        // Traveler counter functionality
        document
          .getElementById("increase-adults")
          .addEventListener("click", function () {
            const input = document.getElementById("adults-count");
            if (parseInt(input.value) < parseInt(input.max)) {
              input.value = parseInt(input.value) + 1;
            }
          });
        document
          .getElementById("decrease-adults")
          .addEventListener("click", function () {
            const input = document.getElementById("adults-count");
            if (parseInt(input.value) > parseInt(input.min)) {
              input.value = parseInt(input.value) - 1;
            }
          });
        document
          .getElementById("increase-children")
          .addEventListener("click", function () {
            const input = document.getElementById("children-count");
            if (parseInt(input.value) < parseInt(input.max)) {
              input.value = parseInt(input.value) + 1;
            }
          });
        document
          .getElementById("decrease-children")
          .addEventListener("click", function () {
            const input = document.getElementById("children-count");
            if (parseInt(input.value) > parseInt(input.min)) {
              input.value = parseInt(input.value) - 1;
            }
          });
        document
          .getElementById("increase-infants")
          .addEventListener("click", function () {
            const input = document.getElementById("infants-count");
            if (parseInt(input.value) < parseInt(input.max)) {
              input.value = parseInt(input.value) + 1;
            }
          });
        document
          .getElementById("decrease-infants")
          .addEventListener("click", function () {
            const input = document.getElementById("infants-count");
            if (parseInt(input.value) > parseInt(input.min)) {
              input.value = parseInt(input.value) - 1;
            }
          });
        // Budget slider functionality
        const budgetSlider = document.getElementById("budget-slider");
        const budgetValue = document.getElementById("budget-value");
        budgetSlider.addEventListener("input", function () {
          budgetValue.textContent = "$" + parseInt(this.value).toLocaleString();
        });
        // Initialize price trends chart
        const chartDom = document.getElementById("price-trends-chart");
        const myChart = echarts.init(chartDom);
        const option = {
          animation: false,
          tooltip: {
            trigger: "axis",
            backgroundColor: "rgba(255, 255, 255, 0.9)",
            borderColor: "#e5e7eb",
            textStyle: {
              color: "#1f2937",
            },
          },
          grid: {
            top: 10,
            right: 10,
            bottom: 30,
            left: 50,
          },
          xAxis: {
            type: "category",
            data: ["May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov"],
            axisLine: {
              lineStyle: {
                color: "#e5e7eb",
              },
            },
            axisLabel: {
              color: "#1f2937",
            },
          },
          yAxis: {
            type: "value",
            name: "Price ($)",
            nameTextStyle: {
              color: "#6b7280",
            },
            axisLine: {
              lineStyle: {
                color: "#e5e7eb",
              },
            },
            axisLabel: {
              color: "#1f2937",
            },
            splitLine: {
              lineStyle: {
                color: "#f3f4f6",
              },
            },
          },
          series: [
            {
              name: "Average Price",
              type: "line",
              smooth: true,
              data: [1200, 1350, 1800, 1650, 1200, 950, 1100],
              lineStyle: {
                color: "rgba(87, 181, 231, 1)",
              },
              itemStyle: {
                color: "rgba(87, 181, 231, 1)",
              },
              areaStyle: {
                color: {
                  type: "linear",
                  x: 0,
                  y: 0,
                  x2: 0,
                  y2: 1,
                  colorStops: [
                    {
                      offset: 0,
                      color: "rgba(87, 181, 231, 0.2)",
                    },
                    {
                      offset: 1,
                      color: "rgba(87, 181, 231, 0.05)",
                    },
                  ],
                },
              },
              symbol: "none",
            },
            {
              name: "Lowest Price",
              type: "line",
              smooth: true,
              data: [800, 950, 1300, 1200, 850, 700, 800],
              lineStyle: {
                color: "rgba(141, 211, 199, 1)",
              },
              itemStyle: {
                color: "rgba(141, 211, 199, 1)",
              },
              areaStyle: {
                color: {
                  type: "linear",
                  x: 0,
                  y: 0,
                  x2: 0,
                  y2: 1,
                  colorStops: [
                    {
                      offset: 0,
                      color: "rgba(141, 211, 199, 0.2)",
                    },
                    {
                      offset: 1,
                      color: "rgba(141, 211, 199, 0.05)",
                    },
                  ],
                },
              },
              symbol: "none",
            },
          ],
        };
        myChart.setOption(option);
        // Responsive chart
        window.addEventListener("resize", function () {
          myChart.resize();
        });
        // Destination card selection
        const destinationCards = document.querySelectorAll(".destination-card");
        destinationCards.forEach((card) => {
          card.addEventListener("click", function () {
            destinationCards.forEach((c) => {
              c.classList.remove("border-primary");
              c.classList.add("border-gray-200");
            });
            this.classList.remove("border-gray-200");
            this.classList.add("border-primary");
          });
        });
      });
    </script>
  </body>
</html>
