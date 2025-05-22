<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - Builder Airlines</title>
<script src="https://cdn.tailwindcss.com/3.4.16"></script>
<script>tailwind.config={theme:{extend:{colors:{primary:'#3176FF',secondary:''},borderRadius:{'none':'0px','sm':'4px',DEFAULT:'8px','md':'12px','lg':'16px','xl':'20px','2xl':'24px','3xl':'32px','full':'9999px','button':'8px'}}}}</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
<style>
:where([class^="ri-"])::before { content: "\f3c2"; }
body {
  font-family: 'Inter', sans-serif;
  background-color: #f8fafc;
}
.timeline-connector {
  position: absolute;
  top: 24px;
  bottom: 0;
  left: 15px;
  width: 2px;
  background-color: #e5e7eb;
  z-index: 0;
}
.timeline-item:last-child .timeline-connector {
  display: none;
}
.team-card:hover .team-overlay {
  opacity: 1;
}
.custom-progress-bar {
  height: 8px;
  border-radius: 4px;
  background-color: #e5e7eb;
  overflow: hidden;
}
.custom-progress-fill {
  height: 100%;
  border-radius: 4px;
}
</style>
</head>
<body>
<!-- Header -->
 <header class="bg-white shadow-sm sticky top-0 z-50">
      <div
        class="container mx-auto px-4 py-4 flex justify-between items-center"
      >
        <a href="index.php" class="flex items-center">
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

<!-- Hero Section -->
<section class="relative h-[500px] bg-cover bg-center" style="background-image: url('https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799758/0ece36cf40182a7536af64a0a08027c3_zor4fh.jpg')">
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>
  <div class="container mx-auto px-4 h-full flex items-center relative z-10">
    <div class="max-w-3xl">
      <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">About Builder Airlines</h1>
      <p class="text-xl text-white opacity-90">Connecting the world with safety, comfort, and exceptional service since 1985.</p>
    </div>
  </div>
</section>

<!-- Company Overview -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Story</h2>
          <p class="text-gray-700 mb-6">Founded in 1985, Builder Airlines began with a vision to transform air travel into an experience that passengers would look forward to. What started as a small regional carrier with just three aircraft has grown into a global airline serving over 180 destinations across 6 continents.</p>
          <p class="text-gray-700 mb-8">Our mission is simple: to connect people and cultures through safe, comfortable, and exceptional air travel while maintaining our commitment to innovation, sustainability, and customer satisfaction.</p>
          
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
            <div class="bg-gray-50 p-4 rounded-lg text-center">
              <div class="text-3xl font-bold text-primary mb-1">40</div>
              <div class="text-sm text-gray-600">Years of Service</div>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg text-center">
              <div class="text-3xl font-bold text-primary mb-1">180+</div>
              <div class="text-sm text-gray-600">Destinations</div>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg text-center">
              <div class="text-3xl font-bold text-primary mb-1">215</div>
              <div class="text-sm text-gray-600">Aircraft</div>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg text-center">
              <div class="text-3xl font-bold text-primary mb-1">38M+</div>
              <div class="text-sm text-gray-600">Passengers Yearly</div>
            </div>
          </div>
        </div>
        <div>
          <img src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799759/76cf0241e3545be7fd6be6b20f1b47fc_rofkax.jpg">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our History -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Our History</h2>
        <p class="text-gray-700 max-w-3xl mx-auto">From humble beginnings to becoming a global carrier, our journey has been defined by innovation, resilience, and a commitment to excellence.</p>
      </div>
      
      <div class="relative">
        <div class="space-y-8">
          <div class="timeline-item relative pl-12">
            <div class="timeline-connector"></div>
            <div class="absolute left-0 top-0 w-8 h-8 rounded-full bg-primary flex items-center justify-center z-10">
              <i class="ri-flight-takeoff-line text-white"></i>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
              <div class="flex flex-col md:flex-row md:items-center gap-6">
                <div class="md:w-2/3">
                  <div class="text-primary font-bold mb-2">1985</div>
                  <h3 class="text-xl font-bold text-gray-900 mb-3">Taking Flight</h3>
                  <p class="text-gray-700">Builder Airlines was founded by aviation enthusiast James Builder with just three aircraft serving domestic routes. The company's commitment to passenger comfort and safety quickly established its reputation in the industry.</p>
                </div>
                <div class="md:w-1/3">
                  <img src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799759/f15efd69b7e98ed294af3ca1b9ede775_oeeakk.jpg">
                </div>
              </div>
            </div>
          </div>
          
          <div class="timeline-item relative pl-12">
            <div class="timeline-connector"></div>
            <div class="absolute left-0 top-0 w-8 h-8 rounded-full bg-primary flex items-center justify-center z-10">
              <i class="ri-global-line text-white"></i>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
              <div class="flex flex-col md:flex-row md:items-center gap-6">
                <div class="md:w-2/3">
                  <div class="text-primary font-bold mb-2">1995</div>
                  <h3 class="text-xl font-bold text-gray-900 mb-3">International Expansion</h3>
                  <p class="text-gray-700">After a decade of domestic success, Builder Airlines launched its first international routes to Europe and Asia. This marked the beginning of our global presence and commitment to connecting cultures across the world.</p>
                </div>
                <div class="md:w-1/3">
                  <img src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799759/64849bb6fc6bb19ec5393cbc478dd53e_cd0hu8.jpg">
                </div>
              </div>
            </div>
          </div>
          
          <div class="timeline-item relative pl-12">
            <div class="timeline-connector"></div>
            <div class="absolute left-0 top-0 w-8 h-8 rounded-full bg-primary flex items-center justify-center z-10">
              <i class="ri-award-line text-white"></i>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
              <div class="flex flex-col md:flex-row md:items-center gap-6">
                <div class="md:w-2/3">
                  <div class="text-primary font-bold mb-2">2005</div>
                  <h3 class="text-xl font-bold text-gray-900 mb-3">Award-Winning Service</h3>
                  <p class="text-gray-700">Builder Airlines received its first Skytrax 5-Star Airline rating, recognizing our exceptional service quality. This achievement reflected our team's dedication to creating memorable experiences for every passenger.</p>
                </div>
                <div class="md:w-1/3">
                  <img src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799759/7e7aac514a45ee40ca2bdddf1d10a9a0_g0terq.jpg">
                </div>
              </div>
            </div>
          </div>
          
          <div class="timeline-item relative pl-12">
            <div class="timeline-connector"></div>
            <div class="absolute left-0 top-0 w-8 h-8 rounded-full bg-primary flex items-center justify-center z-10">
              <i class="ri-leaf-line text-white"></i>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
              <div class="flex flex-col md:flex-row md:items-center gap-6">
                <div class="md:w-2/3">
                  <div class="text-primary font-bold mb-2">2015</div>
                  <h3 class="text-xl font-bold text-gray-900 mb-3">Sustainability Commitment</h3>
                  <p class="text-gray-700">We launched our comprehensive sustainability initiative, committing to carbon neutrality by 2050. This included fleet modernization, sustainable aviation fuel investments, and operational efficiency improvements.</p>
                </div>
                <div class="md:w-1/3">
                  <img src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799758/0ece36cf40182a7536af64a0a08027c3_zor4fh.jpg">
                </div>
              </div>
            </div>
          </div>
          
          <div class="timeline-item relative pl-12">
            <div class="absolute left-0 top-0 w-8 h-8 rounded-full bg-primary flex items-center justify-center z-10">
              <i class="ri-flight-land-line text-white"></i>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
              <div class="flex flex-col md:flex-row md:items-center gap-6">
                <div class="md:w-2/3">
                  <div class="text-primary font-bold mb-2">2025</div>
                  <h3 class="text-xl font-bold text-gray-900 mb-3">Today and Beyond</h3>
                  <p class="text-gray-700">Today, Builder Airlines operates a fleet of 215 modern aircraft, serving over 180 destinations worldwide. We continue to innovate and expand while staying true to our founding principles of safety, comfort, and exceptional service.</p>
                </div>
                <div class="md:w-1/3">
                  <img src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799759/52e13b52f58baf6b0a8e05bebafde742_updxdj.jpg">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Core Values -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Core Values</h2>
        <p class="text-gray-700 max-w-3xl mx-auto">These principles guide every decision we make and define who we are as an airline.</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-gray-50 p-8 rounded-lg transition-transform hover:translate-y-[-8px]">
          <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-6 text-primary">
            <i class="ri-shield-check-line ri-2x"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Safety First</h3>
          <p class="text-gray-700">Safety is our highest priority and non-negotiable commitment. We maintain rigorous standards that exceed industry requirements, ensuring the wellbeing of our passengers and crew on every flight.</p>
        </div>
        
        <div class="bg-gray-50 p-8 rounded-lg transition-transform hover:translate-y-[-8px]">
          <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-6 text-primary">
            <i class="ri-customer-service-2-line ri-2x"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Exceptional Service</h3>
          <p class="text-gray-700">We believe that genuine care and attention to detail create memorable journeys. Our team is dedicated to providing personalized service that anticipates and exceeds the expectations of every passenger.</p>
        </div>
        
        <div class="bg-gray-50 p-8 rounded-lg transition-transform hover:translate-y-[-8px]">
          <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-6 text-primary">
            <i class="ri-leaf-line ri-2x"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Sustainability</h3>
          <p class="text-gray-700">We are committed to responsible operations that minimize our environmental impact. Through fleet modernization, operational efficiency, and sustainable aviation fuel, we're working toward a greener future.</p>
        </div>
        
        <div class="bg-gray-50 p-8 rounded-lg transition-transform hover:translate-y-[-8px]">
          <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-6 text-primary">
            <i class="ri-global-line ri-2x"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Global Perspective</h3>
          <p class="text-gray-700">We celebrate diversity and embrace the richness of cultures across our global network. Our multicultural team reflects the world we serve, bringing unique perspectives to enhance the travel experience.</p>
        </div>
        
        <div class="bg-gray-50 p-8 rounded-lg transition-transform hover:translate-y-[-8px]">
          <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-6 text-primary">
            <i class="ri-rocket-line ri-2x"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Innovation</h3>
          <p class="text-gray-700">We continuously seek better ways to serve our passengers through technological advancement and creative solutions. Innovation drives our growth and enables us to adapt to the evolving needs of modern travelers.</p>
        </div>
        
        <div class="bg-gray-50 p-8 rounded-lg transition-transform hover:translate-y-[-8px]">
          <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-6 text-primary">
            <i class="ri-team-line ri-2x"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Community</h3>
          <p class="text-gray-700">We believe in giving back to the communities we serve. Through charitable partnerships, volunteer initiatives, and disaster relief support, we strive to make a positive impact beyond the world of aviation.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Leadership Team -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Leadership Team</h2>
        <p class="text-gray-700 max-w-3xl mx-auto">Meet the experienced professionals who guide our company with vision, expertise, and a passion for aviation.</p>
      </div>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="team-card bg-white rounded-lg overflow-hidden shadow-sm relative group">
          <div class="h-64">
            <img src="https://readdy.ai/api/search-image?query=professional%2520headshot%2520of%2520confident%2520male%2520CEO%2520in%2520his%252050s%2520wearing%2520business%2520suit%252C%2520executive%2520portrait%2520with%2520neutral%2520background%252C%2520corporate%2520photography%2520with%2520professional%2520lighting&width=400&height=500&seq=12352&orientation=portrait" alt="Michael Reynolds" class="w-full h-full object-cover object-top">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-bold text-gray-900">Michael Reynolds</h3>
            <p class="text-sm text-primary mb-2">Chief Executive Officer</p>
            <p class="text-sm text-gray-600">With over 25 years in aviation, Michael has led Builder Airlines through a period of unprecedented growth and innovation.</p>
          </div>
          <div class="team-overlay absolute inset-0 bg-primary bg-opacity-90 p-6 flex flex-col justify-center opacity-0 transition-opacity duration-300">
            <p class="text-white mb-4">Michael previously served as COO at Global Airways and holds an MBA from Harvard Business School. His vision for sustainable aviation has positioned Builder Airlines as an industry leader.</p>
            <div class="flex space-x-3">
              <a href="#" class="w-8 h-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-white hover:bg-opacity-40">
                <i class="ri-linkedin-fill"></i>
              </a>
              <a href="#" class="w-8 h-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-white hover:bg-opacity-40">
                <i class="ri-twitter-fill"></i>
              </a>
              <a href="#" class="w-8 h-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-white hover:bg-opacity-40">
                <i class="ri-mail-line"></i>
              </a>
            </div>
          </div>
        </div>
        
        <div class="team-card bg-white rounded-lg overflow-hidden shadow-sm relative group">
          <div class="h-64">
            <img src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799758/c004db3409f98b4a59e093d60276b27c_johbf5.jpg">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-bold text-gray-900">Sarah Chen</h3>
            <p class="text-sm text-primary mb-2">Chief Operations Officer</p>
            <p class="text-sm text-gray-600">Sarah oversees our global operations, ensuring efficiency, safety, and service excellence across our network.</p>
          </div>
          <div class="team-overlay absolute inset-0 bg-primary bg-opacity-90 p-6 flex flex-col justify-center opacity-0 transition-opacity duration-300">
            <p class="text-white mb-4">With a background in aerospace engineering and operations management, Sarah has transformed our operational efficiency while maintaining our industry-leading on-time performance.</p>
            <div class="flex space-x-3">
              <a href="#" class="w-8 h-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-white hover:bg-opacity-40">
                <i class="ri-linkedin-fill"></i>
              </a>
              <a href="#" class="w-8 h-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-white hover:bg-opacity-40">
                <i class="ri-twitter-fill"></i>
              </a>
              <a href="#" class="w-8 h-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-white hover:bg-opacity-40">
                <i class="ri-mail-line"></i>
              </a>
            </div>
          </div>
        </div>
        
        <div class="team-card bg-white rounded-lg overflow-hidden shadow-sm relative group">
          <div class="h-64">
            <img src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799758/477ac50624b5f8237d1de28cf94a60e8_ttucrm.jpg">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-bold text-gray-900">David Patel</h3>
            <p class="text-sm text-primary mb-2">Chief Financial Officer</p>
            <p class="text-sm text-gray-600">David leads our financial strategy, ensuring sustainable growth and value creation for our stakeholders.</p>
          </div>
          <div class="team-overlay absolute inset-0 bg-primary bg-opacity-90 p-6 flex flex-col justify-center opacity-0 transition-opacity duration-300">
            <p class="text-white mb-4">With extensive experience in aviation finance, David has successfully navigated economic challenges while funding our fleet expansion and technological investments.</p>
            <div class="flex space-x-3">
              <a href="#" class="w-8 h-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-white hover:bg-opacity-40">
                <i class="ri-linkedin-fill"></i>
              </a>
              <a href="#" class="w-8 h-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-white hover:bg-opacity-40">
                <i class="ri-twitter-fill"></i>
              </a>
              <a href="#" class="w-8 h-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-white hover:bg-opacity-40">
                <i class="ri-mail-line"></i>
              </a>
            </div>
          </div>
        </div>
        
        <div class="team-card bg-white rounded-lg overflow-hidden shadow-sm relative group">
          <div class="h-64">
            <img src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799757/bd0231887664fe96709cd6fc0f9d0685_vk8si6.jpg"
          <div class="p-4">
            <h3 class="text-lg font-bold text-gray-900">Elena Rodriguez</h3>
            <p class="text-sm text-primary mb-2">Chief Technology Officer</p>
            <p class="text-sm text-gray-600">Elena drives our digital transformation, implementing innovative solutions that enhance the customer experience.</p>
          </div>
          <div class="team-overlay absolute inset-0 bg-primary bg-opacity-90 p-6 flex flex-col justify-center opacity-0 transition-opacity duration-300">
            <p class="text-white mb-4">A pioneer in aviation technology, Elena has led the development of our award-winning mobile app, in-flight entertainment systems, and operational efficiency platforms.</p>
            <div class="flex space-x-3">
              <a href="#" class="w-8 h-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-white hover:bg-opacity-40">
                <i class="ri-linkedin-fill"></i>
              </a>
              <a href="#" class="w-8 h-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-white hover:bg-opacity-40">
                <i class="ri-twitter-fill"></i>
              </a>
              <a href="#" class="w-8 h-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-white hover:bg-opacity-40">
                <i class="ri-mail-line"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Fleet Information -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Modern Fleet</h2>
        <p class="text-gray-700 max-w-3xl mx-auto">Experience comfort and efficiency with our diverse fleet of state-of-the-art aircraft, designed to meet the needs of every journey.</p>
      </div>
      
      <div class="relative">
        <!-- Fleet Carousel -->
        <div class="overflow-hidden">
          <div class="flex transition-transform duration-500" id="fleet-carousel">
            <div class="min-w-full px-4">
              <div class="bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Boeing 787 Dreamliner</h3>
                    <p class="text-gray-700 mb-4">Our flagship long-haul aircraft combines exceptional fuel efficiency with passenger comfort. The Dreamliner features larger windows, improved air quality, and reduced cabin noise.</p>
                    <div class="space-y-3 mb-6">
                      <div>
                        <div class="flex justify-between text-sm mb-1">
                          <span class="font-medium text-gray-700">Range</span>
                          <span class="text-gray-600">14,800 km</span>
                        </div>
                        <div class="custom-progress-bar">
                          <div class="custom-progress-fill bg-primary" style="width: 90%"></div>
                        </div>
                      </div>
                      <div>
                        <div class="flex justify-between text-sm mb-1">
                          <span class="font-medium text-gray-700">Passenger Capacity</span>
                          <span class="text-gray-600">296</span>
                        </div>
                        <div class="custom-progress-bar">
                          <div class="custom-progress-fill bg-primary" style="width: 75%"></div>
                        </div>
                      </div>
                      <div>
                        <div class="flex justify-between text-sm mb-1">
                          <span class="font-medium text-gray-700">Cruising Speed</span>
                          <span class="text-gray-600">903 km/h</span>
                        </div>
                        <div class="custom-progress-bar">
                          <div class="custom-progress-fill bg-primary" style="width: 85%"></div>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-wrap gap-2">
                      <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">Long-haul</span>
                      <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">Intercontinental</span>
                      <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">Premium Service</span>
                    </div>
                  </div>
                  <div class="h-[300px] md:h-auto">
                    <img src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799758/40a78c9dd0d1d701a7a74d3953bfec37_hptprs.jpg">
                  </div>
                </div>
              </div>
            </div>
            
            <div class="min-w-full px-4">
              <div class="bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Airbus A350-900</h3>
                    <p class="text-gray-700 mb-4">The A350 represents the pinnacle of efficiency and comfort for long-haul travel. Its advanced aerodynamics and spacious cabin design ensure a superior travel experience.</p>
                    <div class="space-y-3 mb-6">
                      <div>
                        <div class="flex justify-between text-sm mb-1">
                          <span class="font-medium text-gray-700">Range</span>
                          <span class="text-gray-600">15,000 km</span>
                        </div>
                        <div class="custom-progress-bar">
                          <div class="custom-progress-fill bg-primary" style="width: 95%"></div>
                        </div>
                      </div>
                      <div>
                        <div class="flex justify-between text-sm mb-1">
                          <span class="font-medium text-gray-700">Passenger Capacity</span>
                          <span class="text-gray-600">325</span>
                        </div>
                        <div class="custom-progress-bar">
                          <div class="custom-progress-fill bg-primary" style="width: 80%"></div>
                        </div>
                      </div>
                      <div>
                        <div class="flex justify-between text-sm mb-1">
                          <span class="font-medium text-gray-700">Cruising Speed</span>
                          <span class="text-gray-600">910 km/h</span>
                        </div>
                        <div class="custom-progress-bar">
                          <div class="custom-progress-fill bg-primary" style="width: 87%"></div>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-wrap gap-2">
                      <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">Ultra Long-haul</span>
                      <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">Intercontinental</span>
                      <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">Premium Service</span>
                    </div>
                  </div>
                  <div class="h-[300px] md:h-auto">
                    <img src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799757/90158dd9b131468f616a51cfb88df6b9_g6bu2p.jpg">
                  </div>
                </div>
              </div>
            </div>
            
            <div class="min-w-full px-4">
              <div class="bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Boeing 737 MAX</h3>
                    <p class="text-gray-700 mb-4">Our medium-haul workhorse delivers exceptional efficiency for regional and continental routes. The redesigned cabin offers more space and comfort for shorter journeys.</p>
                    <div class="space-y-3 mb-6">
                      <div>
                        <div class="flex justify-between text-sm mb-1">
                          <span class="font-medium text-gray-700">Range</span>
                          <span class="text-gray-600">6,500 km</span>
                        </div>
                        <div class="custom-progress-bar">
                          <div class="custom-progress-fill bg-primary" style="width: 65%"></div>
                        </div>
                      </div>
                      <div>
                        <div class="flex justify-between text-sm mb-1">
                          <span class="font-medium text-gray-700">Passenger Capacity</span>
                          <span class="text-gray-600">186</span>
                        </div>
                        <div class="custom-progress-bar">
                          <div class="custom-progress-fill bg-primary" style="width: 60%"></div>
                        </div>
                      </div>
                      <div>
                        <div class="flex justify-between text-sm mb-1">
                          <span class="font-medium text-gray-700">Cruising Speed</span>
                          <span class="text-gray-600">842 km/h</span>
                        </div>
                        <div class="custom-progress-bar">
                          <div class="custom-progress-fill bg-primary" style="width: 78%"></div>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-wrap gap-2">
                      <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">Medium-haul</span>
                      <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">Continental</span>
                      <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">Regional</span>
                    </div>
                  </div>
                  <div class="h-[300px] md:h-auto">
                    <img src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799757/6bc61c37a3d1b451a5c3d6a773245a86_fkeoaq.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Carousel Controls -->
        <button class="absolute top-1/2 left-0 transform -translate-y-1/2 w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center text-gray-700 hover:text-primary z-10" id="prev-fleet">
          <i class="ri-arrow-left-s-line ri-lg"></i>
        </button>
        <button class="absolute top-1/2 right-0 transform -translate-y-1/2 w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center text-gray-700 hover:text-primary z-10" id="next-fleet">
          <i class="ri-arrow-right-s-line ri-lg"></i>
        </button>
        
        <!-- Carousel Indicators -->
        <div class="flex justify-center mt-6 space-x-2" id="fleet-indicators">
          <button class="w-3 h-3 rounded-full bg-primary" data-index="0"></button>
          <button class="w-3 h-3 rounded-full bg-gray-300" data-index="1"></button>
          <button class="w-3 h-3 rounded-full bg-gray-300" data-index="2"></button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sustainability -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Commitment to Sustainability</h2>
          <p class="text-gray-700 mb-6">At Builder Airlines, we recognize our responsibility to protect the environment and minimize our carbon footprint. Our comprehensive sustainability strategy focuses on fleet modernization, operational efficiency, and sustainable aviation fuel.</p>
          
          <div class="space-y-6 mb-8">
            <div>
              <div class="flex justify-between items-center mb-2">
                <h3 class="font-medium text-gray-900">Carbon Emissions Reduction</h3>
                <span class="text-sm text-primary font-medium">32% since 2015</span>
              </div>
              <div class="custom-progress-bar">
                <div class="custom-progress-fill bg-primary" style="width: 32%"></div>
              </div>
            </div>
            
            <div>
              <div class="flex justify-between items-center mb-2">
                <h3 class="font-medium text-gray-900">Sustainable Aviation Fuel Usage</h3>
                <span class="text-sm text-primary font-medium">18% of total fuel</span>
              </div>
              <div class="custom-progress-bar">
                <div class="custom-progress-fill bg-primary" style="width: 18%"></div>
              </div>
            </div>
            
            <div>
              <div class="flex justify-between items-center mb-2">
                <h3 class="font-medium text-gray-900">Single-Use Plastic Reduction</h3>
                <span class="text-sm text-primary font-medium">85% eliminated</span>
              </div>
              <div class="custom-progress-bar">
                <div class="custom-progress-fill bg-primary" style="width: 85%"></div>
              </div>
            </div>
            
            <div>
              <div class="flex justify-between items-center mb-2">
                <h3 class="font-medium text-gray-900">Progress Toward Carbon Neutrality</h3>
                <span class="text-sm text-primary font-medium">40% complete</span>
              </div>
              <div class="custom-progress-bar">
                <div class="custom-progress-fill bg-primary" style="width: 40%"></div>
              </div>
            </div>
          </div>
          
          <a href="#" class="inline-flex items-center text-primary font-medium hover:text-blue-700">
            Learn more about our sustainability initiatives
            <i class="ri-arrow-right-line ml-2"></i>
          </a>
        </div>
        <div>
          <img src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799758/a941d196f9b87a7401d1d1620641ee2a_rb49qi.jpg">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">What Our Passengers Say</h2>
        <p class="text-gray-700 max-w-3xl mx-auto">Hear from travelers who have experienced the Builder Airlines difference.</p>
      </div>
      
      <div class="relative">
        <!-- Testimonials Carousel -->
        <div class="overflow-hidden">
          <div class="flex transition-transform duration-500" id="testimonials-carousel">
            <div class="min-w-full px-4">
              <div class="bg-gray-50 rounded-lg p-8 shadow-sm">
                <div class="flex flex-col md:flex-row gap-8 items-center">
                  <div class="md:w-1/4">
                    <img src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799757/a65a332ba03e1de31a13459ec24aafaa_itcncm.jpg">
                  </div>
                  <div class="md:w-3/4 text-center md:text-left">
                    <div class="flex mb-3 justify-center md:justify-start">
                      <i class="ri-star-fill text-yellow-400"></i>
                      <i class="ri-star-fill text-yellow-400"></i>
                      <i class="ri-star-fill text-yellow-400"></i>
                      <i class="ri-star-fill text-yellow-400"></i>
                      <i class="ri-star-fill text-yellow-400"></i>
                    </div>
                    <p class="text-gray-700 italic mb-4">"As a frequent business traveler, I've experienced many airlines, but Builder Airlines consistently exceeds my expectations. The cabin crew is attentive without being intrusive, and the business class seats are perfect for both working and resting. Their on-time performance has saved me countless hours."</p>
                    <div>
                      <h3 class="font-bold text-gray-900">Emily Thompson</h3>
                      <p class="text-sm text-gray-600">Marketing Director, Global Innovations</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="min-w-full px-4">
              <div class="bg-gray-50 rounded-lg p-8 shadow-sm">
                <div class="flex flex-col md:flex-row gap-8 items-center">
                  <div class="md:w-1/4">
                    <img src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799756/d9610075a23cfde90f42797b28bca6ef_c20z6z.jpg">
                  </div>
                  <div class="md:w-3/4 text-center md:text-left">
                    <div class="flex mb-3 justify-center md:justify-start">
                      <i class="ri-star-fill text-yellow-400"></i>
                      <i class="ri-star-fill text-yellow-400"></i>
                      <i class="ri-star-fill text-yellow-400"></i>
                      <i class="ri-star-fill text-yellow-400"></i>
                      <i class="ri-star-half-fill text-yellow-400"></i>
                    </div>
                    <p class="text-gray-700 italic mb-4">"My family and I flew with Builder Airlines for our vacation to Tokyo, and it was the best flying experience we've had. The in-flight entertainment kept my kids engaged, the food was surprisingly delicious, and the cabin crew was especially kind to my children. We'll definitely choose Builder Airlines for our next trip."</p>
                    <div>
                      <h3 class="font-bold text-gray-900">James Wilson</h3>
                      <p class="text-sm text-gray-600">Software Engineer, Tech Innovations</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="min-w-full px-4">
              <div class="bg-gray-50 rounded-lg p-8 shadow-sm">
                <div class="flex flex-col md:flex-row gap-8 items-center">
                  <div class="md:w-1/4">
                    <img src="https://res.cloudinary.com/dwd2l6v6g/image/upload/v1746799755/0914a848d83cb13362413636459e45e0_co1b46.jpg">
                  </div>
                  <div class="md:w-3/4 text-center md:text-left">
                    <div class="flex mb-3 justify-center md:justify-start">
                      <i class="ri-star-fill text-yellow-400"></i>
                      <i class="ri-star-fill text-yellow-400"></i>
                      <i class="ri-star-fill text-yellow-400"></i>
                      <i class="ri-star-fill text-yellow-400"></i>
                      <i class="ri-star-fill text-yellow-400"></i>
                    </div>
                    <p class="text-gray-700 italic mb-4">"As a senior traveler with mobility challenges, I appreciate the extra care Builder Airlines provides. From priority boarding to assistance throughout the journey, they make flying comfortable and dignified. Their staff is exceptionally well-trained in accommodating special needs, which gives me confidence to continue exploring the world."</p>
                    <div>
                      <h3 class="font-bold text-gray-900">Maria Gonzalez</h3>
                      <p class="text-sm text-gray-600">Retired Professor, Travel Enthusiast</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Carousel Controls -->
        <button class="absolute top-1/2 left-0 transform -translate-y-1/2 w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center text-gray-700 hover:text-primary z-10" id="prev-testimonial">
          <i class="ri-arrow-left-s-line ri-lg"></i>
        </button>
        <button class="absolute top-1/2 right-0 transform -translate-y-1/2 w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center text-gray-700 hover:text-primary z-10" id="next-testimonial">
          <i class="ri-arrow-right-s-line ri-lg"></i>
        </button>
        
        <!-- Carousel Indicators -->
        <div class="flex justify-center mt-6 space-x-2" id="testimonial-indicators">
          <button class="w-3 h-3 rounded-full bg-primary" data-index="0"></button>
          <button class="w-3 h-3 rounded-full bg-gray-300" data-index="1"></button>
          <button class="w-3 h-3 rounded-full bg-gray-300" data-index="2"></button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Awards & Recognition -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Awards & Recognition</h2>
        <p class="text-gray-700 max-w-3xl mx-auto">Our commitment to excellence has been recognized by industry experts and organizations worldwide.</p>
      </div>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-shadow">
          <div class="w-16 h-16 mx-auto mb-4 text-primary">
            <i class="ri-award-fill ri-3x"></i>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">Skytrax 5-Star Airline</h3>
          <p class="text-sm text-gray-600 mb-2">2020 - 2025</p>
          <p class="text-sm text-gray-700">Recognized for exceptional quality across the entire passenger experience.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-shadow">
          <div class="w-16 h-16 mx-auto mb-4 text-primary">
            <i class="ri-flight-takeoff-fill ri-3x"></i>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">World's Most On-Time Airline</h3>
          <p class="text-sm text-gray-600 mb-2">2023</p>
          <p class="text-sm text-gray-700">Awarded for industry-leading 94.7% on-time performance across all routes.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-shadow">
          <div class="w-16 h-16 mx-auto mb-4 text-primary">
            <i class="ri-customer-service-fill ri-3x"></i>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">Best Cabin Service Excellence</h3>
          <p class="text-sm text-gray-600 mb-2">2022, 2024</p>
          <p class="text-sm text-gray-700">Honored for our exceptional in-flight service and crew professionalism.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-shadow">
          <div class="w-16 h-16 mx-auto mb-4 text-primary">
            <i class="ri-leaf-fill ri-3x"></i>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">Eco-Airline of the Year</h3>
          <p class="text-sm text-gray-600 mb-2">2024</p>
          <p class="text-sm text-gray-700">Recognized for leadership in sustainable aviation practices and carbon reduction.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-primary bg-opacity-10">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl font-bold text-gray-900 mb-6">Experience the Builder Airlines Difference</h2>
      <p class="text-gray-700 mb-8">Join millions of satisfied passengers who choose Builder Airlines for safe, comfortable, and exceptional journeys around the world.</p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="" data-readdy="true" class="bg-primary text-white px-8 py-3 !rounded-button whitespace-nowrap font-medium hover:bg-blue-600 transition-colors">Book Your Flight</a>
        <a href="#" class="bg-white text-primary border border-primary px-8 py-3 !rounded-button whitespace-nowrap font-medium hover:bg-gray-50 transition-colors">Join Our Loyalty Program</a>
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
        <p class="text-gray-400 mb-6">Experience the joy of flying with comfort, safety, and exceptional service.</p>
        <div class="flex space-x-4">
          <a href="#" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-primary transition-colors">
            <i class="ri-facebook-fill"></i>
          </a>
          <a href="#" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-primary transition-colors">
            <i class="ri-twitter-fill"></i>
          </a>
          <a href="#" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-primary transition-colors">
            <i class="ri-instagram-line"></i>
          </a>
          <a href="#" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-primary transition-colors">
            <i class="ri-linkedin-fill"></i>
          </a>
        </div>
      </div>
      <!-- Quick Links -->
      <div>
        <h3 class="text-lg font-semibold mb-6">Quick Links</h3>
        <ul class="space-y-3">
          <li><a href="#" data-readdy="true" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
          <li><a href="#" data-readdy="true" class="text-gray-400 hover:text-white transition-colors">Destinations</a></li>
          <li><a href="#" data-readdy="true" class="text-gray-400 hover:text-white transition-colors">Flight Schedule</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Travel Guides</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Special Offers</a></li>
        </ul>
      </div>
      <!-- Support -->
      <div>
        <h3 class="text-lg font-semibold mb-6">Support</h3>
        <ul class="space-y-3">
          <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQs</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Baggage Information</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Travel Insurance</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white transition-colors">COVID-19 Updates</a></li>
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
            <span class="text-gray-400">123 Aviation Way, Skyline Tower, New York, NY 10001</span>
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
        <p class="text-gray-400 text-sm mb-4 md:mb-0">&copy; 2025 Builder Airlines. All rights reserved.</p>
        <div class="flex space-x-6">
          <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Privacy Policy</a>
          <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Terms of Service</a>
          <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Cookie Policy</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Fleet Carousel
  const fleetCarousel = document.getElementById('fleet-carousel');
  const fleetIndicators = document.querySelectorAll('#fleet-indicators button');
  let fleetCurrentIndex = 0;
  
  function updateFleetCarousel() {
    fleetCarousel.style.transform = `translateX(-${fleetCurrentIndex * 100}%)`;
    
    fleetIndicators.forEach((indicator, index) => {
      if (index === fleetCurrentIndex) {
        indicator.classList.remove('bg-gray-300');
        indicator.classList.add('bg-primary');
      } else {
        indicator.classList.remove('bg-primary');
        indicator.classList.add('bg-gray-300');
      }
    });
  }
  
  document.getElementById('next-fleet').addEventListener('click', function() {
    fleetCurrentIndex = (fleetCurrentIndex + 1) % 3;
    updateFleetCarousel();
  });
  
  document.getElementById('prev-fleet').addEventListener('click', function() {
    fleetCurrentIndex = (fleetCurrentIndex - 1 + 3) % 3;
    updateFleetCarousel();
  });
  
  fleetIndicators.forEach((indicator, index) => {
    indicator.addEventListener('click', function() {
      fleetCurrentIndex = index;
      updateFleetCarousel();
    });
  });
  
  // Testimonials Carousel
  const testimonialsCarousel = document.getElementById('testimonials-carousel');
  const testimonialIndicators = document.querySelectorAll('#testimonial-indicators button');
  let testimonialCurrentIndex = 0;
  
  function updateTestimonialsCarousel() {
    testimonialsCarousel.style.transform = `translateX(-${testimonialCurrentIndex * 100}%)`;
    
    testimonialIndicators.forEach((indicator, index) => {
      if (index === testimonialCurrentIndex) {
        indicator.classList.remove('bg-gray-300');
        indicator.classList.add('bg-primary');
      } else {
        indicator.classList.remove('bg-primary');
        indicator.classList.add('bg-gray-300');
      }
    });
  }
  
  document.getElementById('next-testimonial').addEventListener('click', function() {
    testimonialCurrentIndex = (testimonialCurrentIndex + 1) % 3;
    updateTestimonialsCarousel();
  });
  
  document.getElementById('prev-testimonial').addEventListener('click', function() {
    testimonialCurrentIndex = (testimonialCurrentIndex - 1 + 3) % 3;
    updateTestimonialsCarousel();
  });
  
  testimonialIndicators.forEach((indicator, index) => {
    indicator.addEventListener('click', function() {
      testimonialCurrentIndex = index;
      updateTestimonialsCarousel();
    });
  });
  
  // Auto-advance carousels
  setInterval(function() {
    fleetCurrentIndex = (fleetCurrentIndex + 1) % 3;
    updateFleetCarousel();
  }, 8000);
  
  setInterval(function() {
    testimonialCurrentIndex = (testimonialCurrentIndex + 1) % 3;
    updateTestimonialsCarousel();
  }, 10000);
});
</script>
</body>
</html>
