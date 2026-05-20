<?php
session_start();

if (!isset($_SESSION["name"])) {
  header("Location: login.php");
  exit();
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

  <link
    href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css"
    rel="stylesheet" />

  <script
    src="https://kit.fontawesome.com/faff1bf098.js"
    crossorigin="anonymous"></script>

  <title>Your Dashboard</title>
</head>

<body class="bg-gray-100">

  <!-- Sidebar Toggle -->
  <!-- <button
    data-drawer-target="default-sidebar"
    data-drawer-toggle="default-sidebar"
    aria-controls="default-sidebar"
    type="button"
    class="md:hidden inline-flex items-center p-2 mt-3 ms-3 text-sm text-purple-900 rounded-lg hover:bg-gray-200 focus:outline-none">
    <span class="sr-only">Open sidebar</span>

    <i class="fa-solid fa-bars text-2xl"></i>
  </button> -->

  <!-- Sidebar -->
  <aside
    id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-purple-900">

      <h2 class="text-white text-2xl font-bold px-2 mb-6">
        Dashboard
      </h2>

      <ul class="space-y-2 font-medium">

        <!-- Dashboard -->
        <li>
          <a
            href="index.html"
            class="flex items-center p-2 text-white rounded-lg hover:bg-purple-700 transition">
            <i class="fa-solid fa-chart-line"></i>

            <span class="ms-3">Home</span>
          </a>
        </li>

        <!-- Services -->
        <li id="service_page">
          <a
            href="#"
            class="flex items-center p-2 text-white rounded-lg hover:bg-purple-700 transition">
            <i class="fa-solid fa-table-columns"></i>

            <span class="ms-3">Our Services</span>
          </a>
        </li>

        <!-- Portfolio -->
        <li id="portfolio_page">
          <a
            href="#"
            class="flex items-center p-2 text-white rounded-lg hover:bg-purple-700 transition">
            <i class="fa-solid fa-envelope"></i>

            <span class="ms-3">Our Portfolio</span>
          </a>
        </li>

        <!-- Upload -->
        <li>
          <a
            href="upload.php"
            class="flex items-center p-2 text-white rounded-lg hover:bg-purple-700 transition">
            <i class="fa-solid fa-users"></i>

            <span class="ms-3">Upload</span>
          </a>
        </li>

        <!-- Premium -->
        <li>
          <a
            href="#"
            class="flex items-center p-2 text-white rounded-lg hover:bg-purple-700 transition">
            <i class="fa-solid fa-box"></i>

            <span class="ms-3">Premium Product</span>
          </a>
        </li>

        <!-- Logout -->
        <li>
          <a
            href="logout.php"
            class="flex items-center p-2 text-white rounded-lg hover:bg-red-600 transition">
            <i class="fa-solid fa-right-from-bracket"></i>

            <span class="ms-3">Sign Out</span>
          </a>
        </li>

        <li id="dashboard_btn">
          <a
            href="#"
            class="flex items-center p-2 text-white rounded-lg hover:bg-red-600 transition">
            <i class="fa-solid fa-circle-info"></i>
            <span class="ms-3">Info</span>
            <span class="ml-auto bg-red-500 text-xs px-2 py-1 rounded-full">
              1.2k
            </span>
            <span class="ml-auto bg-red-500 text-xs px-2 py-1 rounded-full">
              89
            </span>
            <span class="ml-auto bg-red-500 text-xs px-2 py-1 rounded-full">
              1k
            </span>
          </a>
        </li>

      </ul>
    </div>
  </aside>

  <!-- Main Content -->
  <div class="sm:ml-64">

    <!-- Navbar -->
    <div class="bg-white shadow-md sticky top-0 z-30">

      <div class="flex justify-between items-center px-6 py-4">

        <!-- Left -->
        <div class="flex items-center gap-3">

          <img src="uploads/<?php echo $_SESSION["profile_pic"]; ?>"
            alt="profile"
            class="w-10 h-10 rounded-full object-cover" />

          <h1 class="text-2xl font-bold text-gray-800">
            Welcome <?php echo $_SESSION["name"]; ?>
          </h1>

          <i class="fa-solid fa-certificate text-purple-900 text-xl"></i>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-3 font-semibold">

          <a href="#">
            <i class="fa-solid fa-bell text-purple-900 text-xl hover:border border-purple-300 px-4 py-3 hover:transition duration-300 rounded-full"></i>
          </a>

          <a href="#">
            <i class="fa-solid fa-user text-purple-900 text-xl hover:border border-purple-300 px-4 py-3 hover:transition duration-300 rounded-full"></i>
          </a>

        </div>

        <!-- Mobile Menu Button -->
        <button
          id="menu-btn"
          class="md:hidden text-2xl text-purple-900">
          <i class="fa-solid fa-bars-staggered"></i>
        </button>

      </div>

      <!-- Mobile Menu -->
      <div
        id="menu"
        class="md:hidden absolute top-20 right-4 w-56 bg-purple-900 rounded-2xl shadow-2xl opacity-0 scale-95 -translate-y-5 pointer-events-none transition-all duration-500 ease-in-out overflow-hidden">

        <a
          href="#"
          class="block mt-3 items-center px-6 py-4 text-white hover:bg-purple-700 transition-all duration-300 hover:pl-8">
          <i class="fa-solid fa-user"></i>

          Profile
        </a>

        <a
          href="logout.php"
          class="block px-6 py-4 text-white hover:bg-red-600 transition-all duration-300 hover:pl-8">
          Sign Out
        </a>

      </div>
    </div>

    <!-- PAGE CONTENT -->
    <div class="p-6">

      <!-- HOME PAGE -->
      <div id="home">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

          <!-- Card 1 -->
          <div class="bg-white rounded-2xl shadow-md p-6">

            <h2 class="text-lg font-bold text-gray-700">
              Total Views
            </h2>

            <p class="text-4xl font-bold text-purple-900 mt-4">
              1.2k
            </p>

          </div>

          <!-- Card 2 -->
          <div class="bg-white rounded-2xl shadow-md p-6">

            <h2 class="text-lg font-bold text-gray-700">
              Messages
            </h2>

            <p class="text-4xl font-bold text-purple-900 mt-4">
              89
            </p>

          </div>

          <!-- Card 3 -->
          <div class="bg-white rounded-2xl shadow-md p-6">

            <h2 class="text-lg font-bold text-gray-700">
              Orders
            </h2>

            <p class="text-4xl font-bold text-purple-900 mt-4">
              1K
            </p>

          </div>

        </div>
      </div>

      <!-- SERVICES PAGE -->
      <div
        id="servicesPage"
        class=" hidden opacity-0 translate-y-10 transition-all duration-700">

        <h1 class="text-4xl font-bold text-purple-900 mb-8">
          Our Services
        </h1>

        <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

          <!-- Service 1 -->
          <div class=" Page bg-white rounded-2xl shadow-md p-6 hover:trasnsition hover:duration-300 hover:-translate-y-1">

            <i class="fa-solid fa-code text-4xl text-purple-900 mb-4" id="code"></i>

            <h2 class="text-2xl font-bold mb-2">
              Web Development
            </h2>

            <p class="text-gray-600">
              Modern responsive websites and web applications.
            </p>

          </div>

          <!-- Service 2 -->
          <div class=" Page bg-white rounded-2xl shadow-md p-6 hover:trasnsition hover:duration-300  hover:scale-105">

            <i class="fa-solid fa-palette text-4xl text-purple-900 mb-4"></i>

            <h2 class="text-2xl font-bold mb-2">
              UI/UX Design
            </h2>

            <p class="text-gray-600">
              Beautiful and user-friendly interfaces.
            </p>

          </div>

          <!-- Service 3 -->
          <div class="  Page bg-white rounded-2xl shadow-md p-6 hover:trasnsition hover:duration-300  hover:scale-105">

            <i class="fa-solid fa-mobile-screen text-4xl text-purple-900 mb-4"></i>

            <h2 class="text-2xl font-bold mb-2">
              Mobile Apps
            </h2>

            <p class="text-gray-600">
              Android and iOS mobile application development.
            </p>

          </div>
          <!-- Service 4 -->
          <div class="  Page bg-white rounded-2xl shadow-md p-6 hover:trasnsition hover:duration-300 hover:-translate-y-1">
            <i class="fa-solid fa-bezier-curve text-4xl text-purple-900 mb-4"></i>
            <h2 class="text-2xl font-bold mb-2">Graphics Design</h2>
            <p class="text-gray-600">Creative graphic design that transforms ideas into powerful visual stories.</p>
          </div>
          <!-- Service 5 -->

          <div class=" Page bg-white rounded-2xl shadow-md p-6 hover:trasnsition hover:duration-300  hover:scale-105">
            <i class="fa-solid fa-radiation text-4xl text-purple-900 animate-spin duration-[4000ms]" id="icon"></i>
            <h2 class="text-2xl font-bold mb-2">Animation</h2>
            <p class="text-gray-600">Step into a new dimension of web design where creativity meets 3D motion and interactive experiences.</p>
          </div>
          <!-- Service 6 -->
          <div class=" Page bg-white rounded-2xl shadow-md p-6 hover:trasnsition hover:duration-300  hover:scale-105">
            <i class="fa-solid fa-robot text-4xl text-purple-900 " id="icon"></i>
            <h2 class="text-2xl font-bold mb-2">Artificial Intelligence (AI)</h2>
            <p class="text-gray-600">Artificial Intelligence that transforms data into smart decisions and powerful digital experiences.</p>
          </div>

        </div>
      </div>
      <!-- PORTFOLIO PAGE -->
<div
  id="portfolioPage"
  class=" hidden opacity-0 translate-y-10 transition-all duration-700">

  <h1 class="text-4xl font-bold text-purple-900 mb-8">
    Our Portfolio
  </h1>

  <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    <!-- Portfolio 1 -->
    <div class="Page bg-white rounded-2xl shadow-md overflow-hidden hover:transition hover:duration-300 hover:scale-105">

      <img
        src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop"
        alt="portfolio"
        class="w-full h-52 object-cover">

      <div class="p-6">

        <i class="fa-solid fa-globe text-4xl text-purple-900 mb-4"></i>

        <h2 class="text-2xl font-bold mb-2">
          Webflow Website
        </h2>

        <p class="text-gray-600">
          Modern responsive websites with premium animations and smooth user experience.
        </p>

      </div>
    </div>

    <!-- Portfolio 2 -->
    <div class="Page bg-white rounded-2xl shadow-md overflow-hidden hover:transition hover:duration-300 hover:scale-105">

      <img
        src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1200&auto=format&fit=crop"
        alt="portfolio"
        class="w-full h-52 object-cover">

      <div class="p-6">

        <i class="fa-solid fa-palette text-4xl text-purple-900 mb-4"></i>

        <h2 class="text-2xl font-bold mb-2">
          UI/UX Design
        </h2>

        <p class="text-gray-600">
          Creative and user-friendly interfaces designed for modern digital products.
        </p>

      </div>
    </div>

    <!-- Portfolio 3 -->
    <div class="Page bg-white rounded-2xl shadow-md overflow-hidden hover:transition hover:duration-300 hover:scale-105">

      <img
        src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?q=80&w=1200&auto=format&fit=crop"
        alt="portfolio"
        class="w-full h-52 object-cover">

      <div class="p-6">

        <i class="fa-solid fa-mobile-screen text-4xl text-purple-900 mb-4"></i>

        <h2 class="text-2xl font-bold mb-2">
          Mobile Apps
        </h2>

        <p class="text-gray-600">
          Android and iOS applications with clean layouts and fast performance.
        </p>

      </div>
    </div>

    <!-- Portfolio 4 -->
    <div class="Page bg-white rounded-2xl shadow-md overflow-hidden hover:transition hover:duration-300 hover:scale-105">

      <img
        src="https://images.unsplash.com/photo-1545239351-1141bd82e8a6?q=80&w=1200&auto=format&fit=crop"
        alt="portfolio"
        class="w-full h-52 object-cover">

      <div class="p-6">

        <i class="fa-solid fa-bezier-curve text-4xl text-purple-900 mb-4"></i>

        <h2 class="text-2xl font-bold mb-2">
          Graphics Design
        </h2>

        <p class="text-gray-600">
          Powerful branding, posters, flyers and social media graphics designs.
        </p>

      </div>
    </div>

    <!-- Portfolio 5 -->
    <div class="Page bg-white rounded-2xl shadow-md overflow-hidden hover:transition hover:duration-300 hover:scale-105">

      <img
        src="https://images.unsplash.com/photo-1535223289827-42f1e9919769?q=80&w=1200&auto=format&fit=crop"
        alt="portfolio"
        class="w-full h-52 object-cover">

      <div class="p-6">

        <i class="fa-solid fa-film text-4xl text-purple-900 mb-4"></i>

        <h2 class="text-2xl font-bold mb-2">
          3D Animation
        </h2>

        <p class="text-gray-600">
          Smooth cinematic animations and motion graphics for digital brands.
        </p>

      </div>
    </div>

    <!-- Portfolio 6 -->
    <div class="Page bg-white rounded-2xl shadow-md overflow-hidden hover:transition hover:duration-300 hover:scale-105">

      <img
        src="https://images.unsplash.com/photo-1677442136019-21780ecad995?q=80&w=1200&auto=format&fit=crop"
        alt="portfolio"
        class="w-full h-52 object-cover">

      <div class="p-6">

        <i class="fa-solid fa-robot text-4xl text-purple-900 mb-4"></i>

        <h2 class="text-2xl font-bold mb-2">
          Artificial Intelligence
        </h2>

        <p class="text-gray-600">
          Smart AI solutions that improve automation and digital experiences.
        </p>

      </div>
    </div>

  </div>
</div>

<script>
  // MOBILE MENU
  const btn = document.getElementById("menu-btn");

  const menu = document.getElementById("menu");

  btn.addEventListener("click", () => {

    menu.classList.toggle("opacity-0");

    menu.classList.toggle("scale-95");

    menu.classList.toggle("-translate-y-5");

    menu.classList.toggle("pointer-events-none");

  });

  // SERVICES PAGE
  const servicePage = document.getElementById("service_page");

  const portfolio = document.getElementById("portfolio_page");

  const dashboardBtn = document.getElementById("dashboard_btn");

  const home = document.getElementById("home");

  const servicesPage = document.getElementById("servicesPage");

  const portfolioPage = document.getElementById("portfolioPage");

  // SHOW PORTFOLIO
  portfolio.onclick = function() {

    home.classList.add("hidden");

    servicesPage.classList.add("hidden");

    portfolioPage.classList.remove("hidden");

    setTimeout(() => {

      portfolioPage.classList.remove(
        "opacity-0",
        "translate-y-10"
      );

      portfolioPage.classList.add(
        "opacity-100",
        "translate-y-0"
      );

    }, 100);

  };

  // SHOW SERVICES
  servicePage.onclick = function() {

    home.classList.add("hidden");

    portfolioPage.classList.add("hidden");

    servicesPage.classList.remove("hidden");

    setTimeout(() => {

      servicesPage.classList.remove(
        "opacity-0",
        "translate-y-10"
      );

      servicesPage.classList.add(
        "opacity-100",
        "translate-y-0"
      );

    }, 100);

  };

  // SHOW DASHBOARD
  dashboardBtn.onclick = function() {

    servicesPage.classList.add("hidden");

    portfolioPage.classList.add("hidden");

    home.classList.remove("hidden");

  };

  // ROTATE ICON
  const icon = document.getElementById("icon");

  icon.onclick = function() {

    icon.classList.toggle("rotate-180");

  }

  // CODE ANIMATION
  const code = document.getElementById("code");

  setInterval(() => {

    code.classList.toggle('opacity-0');

    code.classList.toggle('scale-125');

    code.classList.toggle('scale-12');

    code.classList.toggle('text-white');

  }, 1000);

  // ALERT
  document.querySelectorAll('.Page').forEach(item => {

    item.addEventListener('click', () => {

      alert(`You clicked on (${item.querySelector('h2').textContent}) you will be redirected to our contact page.`);

    });

  });
</script>
</body>

</html>