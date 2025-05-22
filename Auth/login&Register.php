<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>WebCrate - Login & Register</title>
  <script src="https://cdn.tailwindcss.com/3.4.16"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: { primary: "#3b82f6", secondary: "#64748b" },
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
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />
  <style>
    :where([class^="ri-"])::before {
      content: "\f3c2";
    }

    body {
      font-family: 'Inter', sans-serif;
    }

    .auth-container {
      min-height: 100vh;
    }

    .form-input {
      transition: border-color 0.2s ease;
    }

    .form-input:focus {
      border-color: #3b82f6;
    }

    .tab-transition {
      transition: all 0.3s ease;
    }

    .password-strength {
      height: 4px;
      transition: width 0.3s ease;
    }

    .hero-image {
         background-image:"Resource/place1.jpg"
      background-size: cover;
      background-position: center;
    }

    .custom-checkbox {
      position: relative;
      padding-left: 28px;
      cursor: pointer;
      user-select: none;
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
      height: 18px;
      width: 18px;
      background-color: #fff;
      border: 1px solid #d1d5db;
      border-radius: 4px;
    }

    .custom-checkbox:hover input~.checkmark {
      background-color: #f3f4f6;
    }

    .custom-checkbox input:checked~.checkmark {
      background-color: #3b82f6;
      border-color: #3b82f6;
    }

    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    .custom-checkbox input:checked~.checkmark:after {
      display: block;
    }

    .custom-checkbox .checkmark:after {
      left: 6px;
      top: 2px;
      width: 5px;
      height: 10px;
      border: solid white;
      border-width: 0 2px 2px 0;
      transform: rotate(45deg);
    }

    .social-btn {
      transition: all 0.2s ease;
    }

    .social-btn:hover {
      transform: translateY(-2px);
    }
  </style>
</head>

<body class="bg-gray-50">
  <div class="auth-container flex flex-col md:flex-row">
    <!-- Hero Image Section -->
    <div class="hero-image hidden md:block md:w-1/2 relative">
      <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-transparent"></div>
      <div class="absolute top-8 left-8">
        <h1 class="text-3xl font-['Pacifico'] text-white">logo</h1>
      </div>
    </div>

    <!-- Auth Form Section -->
    <div class="w-full md:w-1/2 p-6 md:p-12 flex flex-col">
      <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-['Pacifico'] text-primary md:hidden">
          logo
        </h1>
        <div class="flex items-center space-x-2 ml-auto">
          <span class="text-gray-600 text-sm">Language:</span>
          <div class="relative">
            <button id="languageSelector"
              class="flex items-center space-x-1 text-gray-700 hover:text-primary transition-colors">
              <span>English</span>
              <div class="w-4 h-4 flex items-center justify-center">
                <i class="ri-arrow-down-s-line"></i>
              </div>
            </button>
            <div id="languageDropdown" class="hidden absolute right-0 mt-2 w-40 bg-white shadow-lg rounded z-10">
              <ul class="py-1">
                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-primary font-medium">
                  English
                </li>
                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                  Español
                </li>
                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                  Français
                </li>
                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                  Deutsch
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="max-w-md mx-auto w-full flex-1 flex flex-col justify-center">
        <div class="text-center mb-8">
          <h2 class="text-3xl font-bold text-gray-800">
            Welcome to WebCrate
          </h2>
          <p class="text-gray-600 mt-2">Your journey starts here</p>
        </div>

        <!-- Auth Tabs -->
        <div class="flex border-b border-gray-200 mb-8">
          <button id="loginTab"
            class="w-1/2 py-3 font-medium text-center tab-transition text-primary border-b-2 border-primary">
            Log In
          </button>
          <button id="registerTab" class="w-1/2 py-3 font-medium text-center tab-transition text-gray-500">
            Register
          </button>
        </div>

        <!-- Login Form -->
        <form method="POST" action="login.php" id="loginForm" class="space-y-6">
          <!-- Email/Username Field -->
          <div class="relative">
            <label for="loginEmail" class="sr-only">Email or Username</label>
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <div class="w-5 h-5 text-gray-400">
                <i class="ri-mail-line"></i>
              </div>
            </div>
            <input type="text" id="loginEmail" name="email"
              class="form-input w-full pl-10 pr-3 py-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20"
              placeholder="Email or username" required />
          </div>

          <!-- Password Field -->
          <div class="relative">
            <label for="loginPassword" class="sr-only">Password</label>
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <div class="w-5 h-5 text-gray-400">
                <i class="ri-lock-line"></i>
              </div>
            </div>
            <input type="password" id="loginPassword" name="password"
              class="form-input w-full pl-10 pr-10 py-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20"
              placeholder="Password" required />
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
              <button type="button" id="toggleLoginPassword" class="w-5 h-5 text-gray-400 hover:text-gray-600"
                aria-label="Toggle Password Visibility">
                <i class="ri-eye-line"></i>
              </button>
            </div>
          </div>

          <!-- Remember Me & Forgot Password -->
          <div class="flex items-center justify-between">
            <label class="custom-checkbox text-sm text-gray-600">
              <input type="checkbox" name="remember" />
              <span class="checkmark"></span>
              Remember me
            </label>
            <a href="#" class="text-sm text-primary hover:text-primary/80 font-medium">Forgot Password?</a>
          </div>

          <!-- Submit Button -->
          <button
            class="w-full bg-primary text-white py-3 rounded-button font-medium hover:bg-primary/90 transition-colors"
            name="login" type="submit">
            Log In
          </button>

          <!-- OR Divider -->
          <div class="relative flex items-center my-6">
            <div class="flex-grow border-t border-gray-300"></div>
            <span class="flex-shrink mx-4 text-gray-600">or continue with</span>
            <div class="flex-grow border-t border-gray-300"></div>
          </div>

          <!-- Social Login Buttons -->
          <div class="grid grid-cols-3 gap-4">
            <button type="button"
              class="social-btn flex justify-center items-center py-2.5 border border-gray-300 rounded-button hover:bg-gray-50"
              aria-label="Login with Google">
              <i class="ri-google-fill text-red-500"></i>
            </button>
            <button type="button"
              class="social-btn flex justify-center items-center py-2.5 border border-gray-300 rounded-button hover:bg-gray-50"
              aria-label="Login with Facebook">
              <i class="ri-facebook-fill text-blue-600"></i>
            </button>
            <button type="button"
              class="social-btn flex justify-center items-center py-2.5 border border-gray-300 rounded-button hover:bg-gray-50"
              aria-label="Login with Apple">
              <i class="ri-apple-fill text-black"></i>
            </button>
          </div>
        </form>



        <!-- Register Form -->
        <form method="POST" action="register.php" id="registerForm">
          <div class="space-y-6">

            <!-- Full Name -->
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <div class="w-5 h-5 flex items-center justify-center text-gray-400">
                  <i class="ri-user-line"></i>
                </div>
              </div>
              <input type="text" name="fullname" required
                class="form-input w-full pl-10 pr-3 py-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20"
                placeholder="Full name" />
            </div>

            <!-- Email -->
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <div class="w-5 h-5 flex items-center justify-center text-gray-400">
                  <i class="ri-mail-line"></i>
                </div>
              </div>
              <input type="email" name="email" required
                class="form-input w-full pl-10 pr-3 py-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20"
                placeholder="Email address" />
            </div>

            <!-- Password -->
            <div class="space-y-1">
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <div class="w-5 h-5 flex items-center justify-center text-gray-400">
                    <i class="ri-lock-line"></i>
                  </div>
                </div>
                <input type="password" name="password" id="registerPassword" required
                  class="form-input w-full pl-10 pr-10 py-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20"
                  placeholder="Password" />
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                  <button type="button" id="toggleRegisterPassword"
                    class="w-5 h-5 flex items-center justify-center text-gray-400 hover:text-gray-600">
                    <i class="ri-eye-line"></i>
                  </button>
                </div>
              </div>
              <div class="flex space-x-1">
                <div class="password-strength bg-red-400 h-1 w-0 rounded-full" id="strength-1"></div>
                <div class="password-strength bg-orange-400 h-1 w-0 rounded-full" id="strength-2"></div>
                <div class="password-strength bg-yellow-400 h-1 w-0 rounded-full" id="strength-3"></div>
                <div class="password-strength bg-green-400 h-1 w-0 rounded-full" id="strength-4"></div>
              </div>
              <p class="text-xs text-gray-500" id="passwordHint">
                Password must be at least 8 characters
              </p>
            </div>

            <!-- Confirm Password -->
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <div class="w-5 h-5 flex items-center justify-center text-gray-400">
                  <i class="ri-lock-line"></i>
                </div>
              </div>
              <input type="password" name="confirm_password" id="confirmPassword" required
                class="form-input w-full pl-10 pr-3 py-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20"
                placeholder="Confirm password" />
            </div>

            <!-- Phone Number -->
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <div class="w-5 h-5 flex items-center justify-center text-gray-400">
                  <i class="ri-phone-line"></i>
                </div>
              </div>
              <input type="tel" name="phone"
                class="form-input w-full pl-10 pr-3 py-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20"
                placeholder="Phone number (optional)" />
            </div>

            <!-- Terms and Conditions -->
            <label class="custom-checkbox text-sm text-gray-600">
              I agree to the
              <a href="#" class="text-primary">Terms & Conditions</a> and
              <a href="#" class="text-primary">Privacy Policy</a>
              <input type="checkbox" name="terms" required />
              <span class="checkmark"></span>
            </label>

            <!-- reCAPTCHA placeholder -->
            <div class="relative">
              <div id="recaptcha" class="g-recaptcha border border-gray-200 rounded p-3 flex justify-center bg-gray-50">
                <div class="flex items-center space-x-2 text-gray-500 text-sm">
                  <div class="w-5 h-5 flex items-center justify-center">
                    <i class="ri-shield-check-line"></i>
                  </div>
                  <span>reCAPTCHA verification</span>
                </div>
              </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" name="register"
              class="w-full bg-primary text-white py-3 rounded-button font-medium hover:bg-primary/90 transition-colors">
              Create Account
            </button>

            <!-- Social login options (unchanged) -->
            <div class="relative flex items-center my-6">
              <div class="flex-grow border-t border-gray-300"></div>
              <span class="flex-shrink mx-4 text-gray-600">or sign up with</span>
              <div class="flex-grow border-t border-gray-300"></div>
            </div>

            <div class="grid grid-cols-3 gap-4">
              <button type="button"
                class="social-btn flex justify-center items-center py-2.5 border border-gray-300 rounded-button hover:bg-gray-50">
                <div class="w-5 h-5 flex items-center justify-center text-red-500">
                  <i class="ri-google-fill"></i>
                </div>
              </button>
              <button type="button"
                class="social-btn flex justify-center items-center py-2.5 border border-gray-300 rounded-button hover:bg-gray-50">
                <div class="w-5 h-5 flex items-center justify-center text-blue-600">
                  <i class="ri-facebook-fill"></i>
                </div>
              </button>
              <button type="button"
                class="social-btn flex justify-center items-center py-2.5 border border-gray-300 rounded-button hover:bg-gray-50">
                <div class="w-5 h-5 flex items-center justify-center text-black">
                  <i class="ri-apple-fill"></i>
                </div>
              </button>
            </div>

          </div>
        </form>


        <div class="mt-8 text-center text-sm text-gray-600">
          <p>© 2025 WebCrate Airlines. All rights reserved.</p>
        </div>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Tab switching
        const loginTab = document.getElementById("loginTab");
        const registerTab = document.getElementById("registerTab");
        const loginForm = document.getElementById("loginForm");
        const registerForm = document.getElementById("registerForm");

        loginTab.addEventListener("click", function () {
          loginTab.classList.add("text-primary", "border-b-2", "border-primary");
          loginTab.classList.remove("text-gray-500");
          registerTab.classList.add("text-gray-500");
          registerTab.classList.remove(
            "text-primary",
            "border-b-2",
            "border-primary",
          );
          loginForm.classList.remove("hidden");
          registerForm.classList.add("hidden");
        });

        registerTab.addEventListener("click", function () {
          registerTab.classList.add("text-primary", "border-b-2", "border-primary");
          registerTab.classList.remove("text-gray-500");
          loginTab.classList.add("text-gray-500");
          loginTab.classList.remove("text-primary", "border-b-2", "border-primary");
          registerForm.classList.remove("hidden");
          loginForm.classList.add("hidden");
        });

        // Password visibility toggle
        const toggleLoginPassword = document.getElementById("toggleLoginPassword");
        const loginPassword = document.getElementById("loginPassword");

        toggleLoginPassword.addEventListener("click", function () {
          const type =
            loginPassword.getAttribute("type") === "password" ? "text" : "password";
          loginPassword.setAttribute("type", type);
          toggleLoginPassword.innerHTML =
            type === "password"
              ? '<i class="ri-eye-line"></i>'
              : '<i class="ri-eye-off-line"></i>';
        });

        const toggleRegisterPassword = document.getElementById(
          "toggleRegisterPassword",
        );
        const registerPassword = document.getElementById("registerPassword");

        toggleRegisterPassword.addEventListener("click", function () {
          const type =
            registerPassword.getAttribute("type") === "password"
              ? "text"
              : "password";
          registerPassword.setAttribute("type", type);
          toggleRegisterPassword.innerHTML =
            type === "password"
              ? '<i class="ri-eye-line"></i>'
              : '<i class="ri-eye-off-line"></i>';
        });

        // Password strength indicator
        const strength1 = document.getElementById("strength-1");
        const strength2 = document.getElementById("strength-2");
        const strength3 = document.getElementById("strength-3");
        const strength4 = document.getElementById("strength-4");
        const passwordHint = document.getElementById("passwordHint");

        registerPassword.addEventListener("input", function () {
          const password = registerPassword.value;
          const length = password.length;

          // Reset all strengths
          strength1.style.width = "0%";
          strength2.style.width = "0%";
          strength3.style.width = "0%";
          strength4.style.width = "0%";

          if (length === 0) {
            passwordHint.textContent = "Password must be at least 8 characters";
            return;
          }

          // Check password strength
          let score = 0;

          // Length check
          if (length >= 8) score++;

          // Complexity checks
          if (/[A-Z]/.test(password)) score++;
          if (/[0-9]/.test(password)) score++;
          if (/[^A-Za-z0-9]/.test(password)) score++;

          // Update strength bars
          if (score >= 1) strength1.style.width = "100%";
          if (score >= 2) strength2.style.width = "100%";
          if (score >= 3) strength3.style.width = "100%";
          if (score >= 4) strength4.style.width = "100%";

          // Update hint text
          switch (score) {
            case 0:
              passwordHint.textContent = "Password is too weak";
              break;
            case 1:
              passwordHint.textContent = "Password is weak";
              break;
            case 2:
              passwordHint.textContent = "Password is fair";
              break;
            case 3:
              passwordHint.textContent = "Password is good";
              break;
            case 4:
              passwordHint.textContent = "Password is strong";
              break;
          }
        });

        // Language selector dropdown
        const languageSelector = document.getElementById("languageSelector");
        const languageDropdown = document.getElementById("languageDropdown");

        languageSelector.addEventListener("click", function () {
          languageDropdown.classList.toggle("hidden");
        });

        // Close dropdown when clicking outside
        document.addEventListener("click", function (event) {
          if (
            !languageSelector.contains(event.target) &&
            !languageDropdown.contains(event.target)
          ) {
            languageDropdown.classList.add("hidden");
          }
        });

        // Password confirmation validation
        const confirmPassword = document.getElementById("confirmPassword");

        confirmPassword.addEventListener("input", function () {
          if (confirmPassword.value === registerPassword.value) {
            confirmPassword.classList.remove("border-red-500");
            confirmPassword.classList.add("border-green-500");
          } else {
            confirmPassword.classList.remove("border-green-500");
            confirmPassword.classList.add("border-red-500");
          }
        });
      });
    </script>
</body>

</html>