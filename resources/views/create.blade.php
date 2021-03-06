<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">
    <title>Posts</title>
    @trixassets
</head>
<body>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>

<div class="min-h-screen bg-white">
  <nav x-data="{ open: false }" class="bg-gray-800 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex">
          <div class="flex-shrink-0 flex items-center">
            <img class="block lg:hidden h-8 w-auto" src="/img/logos/workflow-mark-on-white.svg" alt="" />
            <img class="hidden lg:block h-8 w-auto" src="/img/logos/workflow-logo-on-white.svg" alt="" />
          </div>
          <div class="hidden sm:-my-px sm:ml-6 sm:flex">
            <a href="#" class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-500 text-white text-sm font-medium leading-5  focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out">
              Laravel Trix
            </a>

          </div>
        </div>
    
    
      </div>
    </div>
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
      <div class="pt-2 pb-3">
        <a href="#" class="block pl-3 pr-4 py-2 border-l-4 border-indigo-500 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out">Dashboard</a>
        <a href="#" class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Team</a>
        <a href="#" class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Projects</a>
        <a href="#" class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Calendar</a>
      </div>
      <div class="pt-4 pb-3 border-t border-gray-200">
        <div class="flex items-center px-4">
          <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
          </div>
          <div class="ml-3">
            <div class="text-base font-medium leading-6 text-gray-800">Tom Cook</div>
            <div class="text-sm font-medium leading-5 text-gray-500">tom@example.com</div>
          </div>
        </div>
        <div class="mt-3">
          <a href="#" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 focus:outline-none focus:text-gray-800 focus:bg-gray-100 transition duration-150 ease-in-out">Your Profile</a>
          <a href="#" class="mt-1 block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 focus:outline-none focus:text-gray-800 focus:bg-gray-100 transition duration-150 ease-in-out">Settings</a>
          <a href="#" class="mt-1 block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 focus:outline-none focus:text-gray-800 focus:bg-gray-100 transition duration-150 ease-in-out">Sign out</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="py-10">
    <header>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold leading-tight text-gray-900">
          Create Post
        </h2>
      </div>
    </header>
    <main>
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Replace with your content -->
        <form method="POST" action="/posts">
            @csrf
            <div>
             
              <div class="mt-8 border-t border-gray-200 pt-8">
              
                <div class=" grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
                  <div class="sm:col-span-3">
                    <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">
                      Title
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                      <input id="first_name" name="title" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                  </div>
        
                  <div class="sm:col-span-4">
                    <label for="content" class="block text-sm font-medium leading-5 text-gray-700">
                      Content
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        @trix(\App\Post::class, 'content',  [ 'hideTools' => ['file-tools'] ])
                    </div>
                  </div>

                </div>
              </div>
             
            </div>
            <div class="mt-8 border-t border-gray-200 pt-5">
              <div class="flex justify-end">
                <span class="inline-flex rounded-md shadow-sm">
                  <button type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                    Cancel
                  </button>
                </span>
                <span class="ml-3 inline-flex rounded-md shadow-sm">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                    Save
                  </button>
                </span>
              </div>
            </div>
          </form>
        <!-- /End replace -->

          @include('posts-table')
      </div>
      
    </main>

    
  </div>

</div>
    
</body>
</html>