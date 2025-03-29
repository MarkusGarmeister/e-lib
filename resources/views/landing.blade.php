<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>e-Lib</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-50 text-gray-800">

  <!-- Header / Navigation -->
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <!-- Logo -->
      <div class="text-2xl font-bold text-blue-600">
        <a href="/">e-Lib</a>
      </div>
      <!-- Auth Links -->
      <div class="space-x-4">
        <a href="#" class="text-blue-600 hover:underline">Login</a>
        <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Register</a>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main class="flex-grow">
    <section class="max-w-4xl mx-auto px-4 py-20 text-center">
      <h1 class="text-4xl font-bold mb-6">Your personal digital library</h1>
      <p class="text-lg text-gray-600 mb-12">
        Create your own library, upload books, and share or search public ones in just a few steps.
      </p>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded shadow">
          <h2 class="text-xl font-semibold mb-2">1. Create a Library</h2>
          <p class="text-gray-600">Make your own digital space to organize your books.</p>
        </div>
        <div class="bg-white p-6 rounded shadow">
          <h2 class="text-xl font-semibold mb-2">2. Upload Books</h2>
          <p class="text-gray-600">Add your favorite books, notes, or documents to your library.</p>
        </div>
        <div class="bg-white p-6 rounded shadow">
          <h2 class="text-xl font-semibold mb-2">3. Share & Search</h2>
          <p class="text-gray-600">Set your library public or private and explore others' collections.</p>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t mt-12">
    <div class="max-w-7xl mx-auto px-4 py-6 text-sm text-gray-500 flex justify-between">
      <span>© 2025 MyLib. All rights reserved.</span>
      <div class="space-x-4">
        <a href="#" class="hover:underline">Privacy Policy</a>
        <a href="#" class="hover:underline">Terms of Service</a>
        <a href="#" class="hover:underline">Contact</a>
      </div>
    </div>
  </footer>

</body>
</html>
