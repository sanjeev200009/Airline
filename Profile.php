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
      :where([class^="ri-"])::before { content: "\f3c2"; }
      body {
      font-family: 'Inter', sans-serif;
      }
      .hero-section {
      background-image: url('src="Resource/bac.jpg"');
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
    </style>
  </head>
  

    <body class="bg-gray-100 p-6">
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

  <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold mb-4">User Profile</h2>
    
<form
  id="profileForm"
  action="CRUD/INSERT/insert_profile.php"
  method="POST"
  enctype="multipart/form-data"
  class="space-y-6 bg-white p-6 rounded shadow-md"
>
  <!-- Hidden input for profile ID (used for editing) -->
  <input type="hidden" name="profile_id" id="profile_id" />

  <!-- Email -->
  <div>
    <label for="email" class="block font-medium text-gray-700 mb-1">Email</label>
    <input
      type="email"
      name="email"
      id="email"
      class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
      required
    />
  </div>

  <!-- Phone Number -->
  <div>
    <label for="phone" class="block font-medium text-gray-700 mb-1">Phone Number</label>
    <input
      type="text"
      name="phone"
      id="phone"
      class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
      required
    />
  </div>

  <!-- Passport Number -->
  <div>
    <label for="passport" class="block font-medium text-gray-700 mb-1">Passport Number</label>
    <input
      type="text"
      name="passport"
      id="passport"
      class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
      required
    />
  </div>

  <!-- Nationality -->
  <div>
    <label for="nationality" class="block font-medium text-gray-700 mb-1">Nationality</label>
    <input
      type="text"
      name="nationality"
      id="nationality"
      class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
      required
    />
  </div>

  <!-- Profile Picture -->
  <div>
    <label for="image" class="block font-medium text-gray-700 mb-1">Profile Picture</label>
    <input
      type="file"
      name="image"
      id="image"
      accept="image/*"
      class="w-full p-2 border border-gray-300 rounded"
    />
    <img
      id="preview"
      src="#"
      alt="Image Preview"
      class="mt-3 h-20 w-20 object-cover rounded border border-gray-300 hidden"
    />
  </div>

  <!-- Form Buttons -->
  <div class="flex justify-between items-center mt-4">
    <button
      type="submit"
      class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition-colors"
    >
      Submit
    </button>
    <button
      type="reset"
      onclick="clearPreview()"
      class="bg-gray-400 text-white px-5 py-2 rounded hover:bg-gray-500 transition-colors"
    >
      Clear
    </button>
  </div>
</form>

<h2 class="text-lg font-bold mt-10 mb-4">Profile List</h2>
<table class="w-full table-auto border border-collapse border-gray-300">
  <thead class="bg-gray-100">
    <tr>
      <th class="border px-4 py-2">Email</th>
      <th class="border px-4 py-2">Phone</th>
      <th class="border px-4 py-2">Passport</th>
      <th class="border px-4 py-2">Nationality</th>
      <th class="border px-4 py-2">Image</th>
      <th class="border px-4 py-2">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php

    include 'Auth/connect.php';
    $query = "SELECT * FROM profiles"; 
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td class='border px-4 py-2'>" . htmlspecialchars($row['email']) . "</td>";
      echo "<td class='border px-4 py-2'>" . htmlspecialchars($row['phone']) . "</td>";
      echo "<td class='border px-4 py-2'>" . htmlspecialchars($row['passport']) . "</td>";
      echo "<td class='border px-4 py-2'>" . htmlspecialchars($row['nationality']) . "</td>";
      echo "<td class='border px-4 py-2'>";
      if ($row['image']) {
        echo "<img src='uploads/{$row['image']}' class='h-10 w-10 rounded-full object-cover'>";
      } else {
        echo "No Image";
      }
      echo "</td>";
      echo "<td class='border px-4 py-2 space-x-2'>
              <button onclick='editProfile(" . json_encode($row) . ")' class='bg-yellow-400 text-white px-2 py-1 rounded'>Edit</button>
              <form action='CRUD/DELETE/delete_profile.php' method='POST' class='inline'>
                <input type='hidden' name='profile_id' value='" . $row['id'] . "' />
                <button type='submit' onclick='return confirm(\"Are you sure?\")' class='bg-red-500 text-white px-2 py-1 rounded'>Delete</button>
              </form>
            </td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>

  </div>

  <!-- Display section -->
 <script>
  document.getElementById("image").addEventListener("change", function () {
    const preview = document.getElementById("preview");
    const file = this.files[0];
    if (file) {
      preview.src = URL.createObjectURL(file);
      preview.classList.remove("hidden");
    }
  });

  function clearPreview() {
    document.getElementById("preview").src = "#";
    document.getElementById("preview").classList.add("hidden");
  }

  function editProfile(data) {
    document.getElementById("profile_id").value = data.id;
    document.getElementById("email").value = data.email;
    document.getElementById("phone").value = data.phone;
    document.getElementById("passport").value = data.passport;
    document.getElementById("nationality").value = data.nationality;

    // Update form action to update script
    document.getElementById("profileForm").action = "CRUD/UPDATE/update_profile.php";

    // Scroll to top or form
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
</script>

</body>
   
   
 
</html>
