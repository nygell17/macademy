<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Macademy IO</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">
  <header class="bg-blue-600 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-3xl font-bold">Macademy IO</h1>
      <nav>
        <ul class="flex space-x-6">
          <li><a href="#" class="hover:text-gray-200">Home</a></li>
          <li><a href="#courses" class="hover:text-gray-200">Courses</a></li>
          <li><a href="#about" class="hover:text-gray-200">About</a></li>
          <li><a href="#contact" class="hover:text-gray-200">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container mx-auto my-8">
    <section class="text-center py-16 bg-white shadow-md rounded-lg">
      <h2 class="text-4xl font-bold mb-4">Learn Anytime, Anywhere</h2>
      <p class="text-lg text-gray-700 mb-6">Join thousands of students upgrading their skills with Macademy IO.</p>
      <a href="#courses" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">Explore Courses</a>
    </section>

    <section id="courses" class="mt-16">
      <h3 class="text-3xl font-bold mb-6 text-center">Our Popular Courses</h3>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white shadow-md rounded-lg p-6">
          <h4 class="text-xl font-bold mb-2">Web Development</h4>
          <p class="text-gray-700">Master front-end and back-end technologies.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
          <h4 class="text-xl font-bold mb-2">Data Science</h4>
          <p class="text-gray-700">Dive into data analysis, visualization, and machine learning.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
          <h4 class="text-xl font-bold mb-2">UI/UX Design</h4>
          <p class="text-gray-700">Learn to design user-friendly and engaging interfaces.</p>
        </div>
      </div>
    </section>

    <section id="about" class="mt-16 text-center bg-blue-100 py-12 rounded-lg">
      <h3 class="text-3xl font-bold mb-4">About Macademy IO</h3>
      <p class="text-lg text-gray-700 max-w-xl mx-auto">
        At Macademy IO, we are committed to providing high-quality education for all. Our platform is designed to help you learn new skills and achieve your career goals.
      </p>
    </section>
  </main>

  <footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 Macademy IO. All rights reserved.</p>
    </div>
  </footer>
</body>

</html>
