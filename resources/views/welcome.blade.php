<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>NFT Ads</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
</head>

<body class="bg-gray-900">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="block h-8 w-auto lg:hidden" src="{!! asset('uploads/logo/hr.png') !!}" alt="Your Company">
                        <img class="hidden h-8 w-auto lg:block" src="{!! asset('uploads/logo/hr.png') !!}" alt="Your Company">
                    </div>
                    <div class=" hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">How it works</a>
                            <a href="mailto:sifz@gmail.com" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <a type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false"
                              aria-haspopup="true">
                                <a href="{!! route('login') !!}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Login</a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 flex justify-center px-2 pt-2 pb-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">How it works</a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto">
        <div class="columns-1 flex justify-center mt-12">
            <h1 class="text-8xl font-extrabold text-white">The First</h1>
        </div>
        <div class="columns-1 flex justify-center mt-5">
            <h1 class="text-8xl font-extrabold text-zinc-500 text-center">NFT Ad Network</h1>
        </div>
        <div class="columns-1 flex justify-center mt-12">
            <h1 class="text-1xl font-bold text-white">Advertise your NFTs to millions of people to find buyers and fans.</h1>
        </div>
        <div class="columns-1 flex justify-center mt-12">
            <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-full" name="button">Get Started</button>
        </div>

        <div class="columns-1 flex justify-center mt-12">
            <div class="bg-cover bg-center w-6/12">
                <img src="{!! asset('uploads/images/hero2.png') !!}" alt="">
            </div>
        </div>

        <div class="columns-1 flex justify-center mt-12">
            <p class="text-4xl font-extrabold text-white">How it works</p>
        </div>
        <div class="columns-1 flex justify-center mt-2">
            <p class="text-lg font-medium text-white">We are connecting NFT creators with a huge audience of people through a</p>
        </div>
        <div class="columns-1 flex justify-center mt-1">
            <p class="text-lg font-medium text-white">network of crypto currency and NFT related websites.</p>
        </div>

        <div class="columns-1 mt-14 mb-14">

          <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid gap-6 row-gap-10 lg:grid-cols-2">
      <div class="lg:py-6 lg:pr-16">
        <div class="flex">
          <div class="flex flex-col items-center mr-4">
            <div>
              <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                  <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                </svg>
              </div>
            </div>
            <div class="w-px h-full bg-gray-300"></div>
          </div>
          <div class="pt-1 pb-8">
            <p class="mb-2 text-lg font-bold text-white">Step 1: Ad Creation</p>
            <p class="text-white">
              Set your ad title, image and direct link to the sales page of your NFT.
            </p>
          </div>
        </div>
        <div class="flex">
          <div class="flex flex-col items-center mr-4">
            <div>
              <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                  <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                </svg>
              </div>
            </div>
            <div class="w-px h-full bg-gray-300"></div>
          </div>
          <div class="pt-1 pb-8">
            <p class="mb-2 text-lg font-bold text-white">Step 2: Campaign Budget And Ad Preview</p>
            <p class="text-white">
              Decide the campaign size and targeting and set your budget.
            </p>
          </div>
        </div>
        <div class="flex">
          <div class="flex flex-col items-center mr-4">
            <div>
              <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                  <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                </svg>
              </div>
            </div>
            <div class="w-px h-full bg-gray-300"></div>
          </div>
          <div class="pt-1 pb-8">
            <p class="mb-2 text-lg font-bold text-white">Step 3: Payment In ETH</p>
            <p class="text-white">
              Send the payment directly in ETH and your ad is going live instantly.
            </p>
          </div>
        </div>
        <div class="flex">
          <div class="flex flex-col items-center mr-4">
            <div>
              <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                <svg class="w-6 text-gray-600" stroke="currentColor" viewBox="0 0 24 24">
                  <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
                </svg>
              </div>
            </div>
          </div>
          <div class="pt-1">
            <p class="mb-2 text-lg font-bold text-white">Success</p>
            <p class="text-gray-700"></p>
          </div>
        </div>
      </div>
      <div class="relative">
        <img
          class="inset-0 object-cover object-bottom w-full rounded shadow-lg h-96 lg:absolute lg:h-full"
          src="{!! asset('uploads/images/steps.jpg') !!}"
          alt=""
        />
      </div>
    </div>
  </div>

        </div>

        <div class="columns-1 flex justify-center mt-10 mb-10">
            <div class="max-w-xl rounded overflow-hidden shadow-lg bg-gray-700">
                <img class="w-full" src="{!! asset('uploads/images/world.png') !!}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-white">Ready to get more buyers?</div>
                    <p class="text-gray-700 text-base text-white">
                        You can advertise for as little as 0.019 ETH
                    </p>
                </div>
                <div class="px-6 pt-4 pb-6">
                    <button class="bg-white hover:bg-white-700 text-black font-bold py-2 px-4 rounded-full shadow">
                        Get Started
                    </button>
                </div>
            </div>
        </div>


    </div>


    <footer class="p-4 bg-gray-700 shadow md:px-6 md:py-8 dark:bg-gray-900">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center mb-4 sm:mb-0">
                <img src="{!! asset('uploads/logo/hr.png') !!}" class="mr-3 h-8" alt="Flowbite Logo">
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 text-white">About</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 text-white">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 text-white">Licensing</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <span class="block text-sm sm:text-center dark:text-gray-400 text-white">© {{ \Carbon\Carbon::now()->format('Y') }} <a href="{{ env('APP_NAME') }}" class="hover:underline">{{ env('APP_NAME') }}</a>. All Rights Reserved.
        </span>
    </footer>

<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

</html>
