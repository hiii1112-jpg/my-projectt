<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 - Page Not Found</title>
  <!-- Tailwind CSS CDN (For quick prototyping; production should build/minify tailwind) -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex items-center justify-center p-6 relative overflow-hidden">

  <!-- Background decorative glow effects -->
  <div class="absolute -top-32 -left-32 w-96 h-96 bg-indigo-600/20 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-violet-600/20 rounded-full blur-3xl pointer-events-none"></div>

  <!-- Main 404 Container -->
  <main class="max-w-md w-full text-center z-10 bg-slate-800/50 backdrop-blur-md border border-slate-700/50 p-8 sm:p-10 rounded-2xl shadow-2xl">
    
    <!-- 404 Badge/Header -->
    <p class="text-sm font-semibold tracking-widest text-indigo-400 uppercase mb-2">404 Error</p>
    
    <!-- Giant Error Number -->
    <h1 class="text-7xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 mb-4 sm:text-8xl">
      404
    </h1>
    
    <!-- Headline & Body -->
    <h2 class="text-2xl font-bold text-slate-100 mb-2">Page not found</h2>
    <p class="text-slate-400 mb-8 text-sm sm:text-base">
      Sorry, we couldn’t find the page you’re looking for. It might have been moved or deleted.
    </p>

    <!-- Action Buttons -->
    <div class="flex flex-col sm:flex-row gap-3 justify-center items-center">
      <a href="/" class="w-full sm:w-auto inline-flex justify-center items-center px-5 py-2.5 rounded-lg text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2 focus:ring-offset-slate-900 transition-all shadow-lg shadow-indigo-600/30">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
        </svg>
        Go back home
      </a>
      
      <a href="/support" class="w-full sm:w-auto inline-flex justify-center items-center px-5 py-2.5 rounded-lg text-sm font-medium text-slate-300 hover:text-white bg-slate-700/50 hover:bg-slate-700 border border-slate-600 focus:outline-none focus:ring-2 focus:ring-slate-500 transition-all">
        Contact support
      </a>
    </div>

  </main>

</body>
</html>