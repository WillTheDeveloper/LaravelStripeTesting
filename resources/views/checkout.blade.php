<!doctype html>
<head>
    <!-- ... --->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<!--
This example requires Tailwind CSS v2.0+

This example requires some changes to your config:

```
// tailwind.config.js
module.exports = {
// ...
plugins: [
  // ...
  require('@tailwindcss/forms'),
  require('@tailwindcss/aspect-ratio'),
],
}
```
-->
<div class="bg-gray-50">
    <!--
      Mobile menu

      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->
    <div class="flex fixed inset-0 z-40 lg:hidden" role="dialog" aria-modal="true">
        <!--
          Off-canvas menu overlay, show/hide based on off-canvas menu state.

          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.

          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
        <div class="flex overflow-y-auto relative flex-col pb-12 w-full max-w-xs bg-white shadow-xl">
            <div class="flex px-4 pt-5 pb-2">
                <button type="button" class="inline-flex justify-center items-center p-2 -m-2 text-gray-400 rounded-md">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Links -->
            <div class="mt-2">
                <div class="border-b border-gray-200">
                    <div class="flex px-4 -mb-px space-x-8" aria-orientation="horizontal" role="tablist">
                        <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
                        <button id="tabs-1-tab-1"
                                class="flex-1 px-1 py-4 text-base font-medium text-gray-900 whitespace-nowrap border-b-2 border-transparent"
                                aria-controls="tabs-1-panel-1" role="tab" type="button">
                            Women
                        </button>

                        <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
                        <button id="tabs-1-tab-2"
                                class="flex-1 px-1 py-4 text-base font-medium text-gray-900 whitespace-nowrap border-b-2 border-transparent"
                                aria-controls="tabs-1-panel-2" role="tab" type="button">
                            Men
                        </button>
                    </div>
                </div>

                <!-- 'Women' tab panel, show/hide based on tab state. -->
                <div id="tabs-1-panel-1" class="px-4 py-6 space-y-12" aria-labelledby="tabs-1-tab-1" role="tabpanel"
                     tabindex="0">
                    <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                        <div class="relative group">
                            <div
                                class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                     alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                     class="object-cover object-center">
                            </div>
                            <a href="#" class="block mt-6 text-sm font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                        </div>

                        <div class="relative group">
                            <div
                                class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                     alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                     class="object-cover object-center">
                            </div>
                            <a href="#" class="block mt-6 text-sm font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                Basic Tees
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                        </div>

                        <div class="relative group">
                            <div
                                class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg"
                                     alt="Model wearing minimalist watch with black wristband and white watch face."
                                     class="object-cover object-center">
                            </div>
                            <a href="#" class="block mt-6 text-sm font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                Accessories
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                        </div>

                        <div class="relative group">
                            <div
                                class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg"
                                     alt="Model opening tan leather long wallet with credit card pockets and cash pouch."
                                     class="object-cover object-center">
                            </div>
                            <a href="#" class="block mt-6 text-sm font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                Carry
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                        </div>
                    </div>
                </div>

                <!-- 'Men' tab panel, show/hide based on tab state. -->
                <div id="tabs-1-panel-2" class="px-4 py-6 space-y-12" aria-labelledby="tabs-1-tab-2" role="tabpanel"
                     tabindex="0">
                    <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                        <div class="relative group">
                            <div
                                class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg"
                                     alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers."
                                     class="object-cover object-center">
                            </div>
                            <a href="#" class="block mt-6 text-sm font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                        </div>

                        <div class="relative group">
                            <div
                                class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg"
                                     alt="Model wearing light heather gray t-shirt." class="object-cover object-center">
                            </div>
                            <a href="#" class="block mt-6 text-sm font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                Basic Tees
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                        </div>

                        <div class="relative group">
                            <div
                                class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg"
                                     alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body."
                                     class="object-cover object-center">
                            </div>
                            <a href="#" class="block mt-6 text-sm font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                Accessories
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                        </div>

                        <div class="relative group">
                            <div
                                class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg"
                                     alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching."
                                     class="object-cover object-center">
                            </div>
                            <a href="#" class="block mt-6 text-sm font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                Carry
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-4 py-6 space-y-6 border-t border-gray-200">
                <div class="flow-root">
                    <a href="#" class="block p-2 -m-2 font-medium text-gray-900">Company</a>
                </div>

                <div class="flow-root">
                    <a href="#" class="block p-2 -m-2 font-medium text-gray-900">Stores</a>
                </div>
            </div>

            <div class="px-4 py-6 space-y-6 border-t border-gray-200">
                <div class="flow-root">
                    <a href="#" class="block p-2 -m-2 font-medium text-gray-900">Create an account</a>
                </div>
                <div class="flow-root">
                    <a href="#" class="block p-2 -m-2 font-medium text-gray-900">Sign in</a>
                </div>
            </div>

            <div class="px-4 py-6 space-y-6 border-t border-gray-200">
                <!-- Currency selector -->
                <form>
                    <div class="inline-block">
                        <label for="mobile-currency" class="sr-only">Currency</label>
                        <div
                            class="relative -ml-2 rounded-md border-transparent group focus-within:ring-2 focus-within:ring-white">
                            <select id="mobile-currency" name="currency"
                                    class="bg-none border-transparent rounded-md py-0.5 pl-2 pr-5 flex items-center text-sm font-medium text-gray-700 group-hover:text-gray-800 focus:outline-none focus:ring-0 focus:border-transparent">
                                <option>CAD</option>

                                <option>USD</option>

                                <option>AUD</option>

                                <option>EUR</option>

                                <option>GBP</option>
                            </select>
                            <div class="flex absolute inset-y-0 right-0 items-center pointer-events-none">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 20 20" class="w-5 h-5 text-gray-500">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="1.5" d="M6 8l4 4 4-4"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <header class="relative">
        <nav aria-label="Top">
            <!-- Top navigation -->
            <div class="bg-gray-900">
                <div class="flex justify-between items-center px-4 mx-auto max-w-7xl h-10 sm:px-6 lg:px-8">
                    <!-- Currency selector -->
                    <form>
                        <div>
                            <label for="desktop-currency" class="sr-only">Currency</label>
                            <div
                                class="relative -ml-2 bg-gray-900 rounded-md border-transparent group focus-within:ring-2 focus-within:ring-white">
                                <select id="desktop-currency" name="currency"
                                        class="bg-none bg-gray-900 border-transparent rounded-md py-0.5 pl-2 pr-5 flex items-center text-sm font-medium text-white group-hover:text-gray-100 focus:outline-none focus:ring-0 focus:border-transparent">
                                    <option>CAD</option>

                                    <option>USD</option>

                                    <option>AUD</option>

                                    <option>EUR</option>

                                    <option>GBP</option>
                                </select>
                                <div class="flex absolute inset-y-0 right-0 items-center pointer-events-none">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 20 20" class="w-5 h-5 text-gray-300">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="1.5" d="M6 8l4 4 4-4"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="flex items-center space-x-6">
                        <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
                        <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an account</a>
                    </div>
                </div>
            </div>

            <!-- Secondary navigation -->
            <div class="bg-white shadow-sm">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center h-16">
                        <!-- Logo (lg+) -->
                        <div class="hidden lg:flex-1 lg:flex lg:items-center">
                            <a href="#">
                                <span class="sr-only">Workflow</span>
                                <img class="w-auto h-8"
                                     src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600"
                                     alt="">
                            </a>
                        </div>

                        <div class="hidden h-full lg:flex">
                            <!-- Flyout menus -->
                            <div class="inset-x-0 bottom-0 px-4">
                                <div class="flex justify-center space-x-8 h-full">
                                    <div class="flex">
                                        <div class="flex relative">
                                            <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                            <button type="button"
                                                    class="flex relative z-10 items-center pt-px -mb-px text-sm font-medium text-gray-700 border-b-2 border-transparent transition-colors duration-200 ease-out hover:text-gray-800"
                                                    aria-expanded="false">
                                                Women
                                            </button>
                                        </div>

                                        <!--
                                          'Women' flyout menu, show/hide based on flyout menu state.

                                          Entering: "transition ease-out duration-200"
                                            From: "opacity-0"
                                            To: "opacity-100"
                                          Leaving: "transition ease-in duration-150"
                                            From: "opacity-100"
                                            To: "opacity-0"
                                        -->
                                        <div class="absolute inset-x-0 top-full text-sm text-gray-500 bg-white">
                                            <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                            <div class="absolute inset-0 top-1/2 bg-white shadow"
                                                 aria-hidden="true"></div>
                                            <!-- Fake border when menu is open -->
                                            <div class="absolute inset-0 top-0 px-8 mx-auto max-w-7xl h-px"
                                                 aria-hidden="true">
                                                <!-- Open: "bg-gray-200", Closed: "bg-transparent" -->
                                                <div
                                                    class="w-full h-px bg-transparent transition-colors duration-200 ease-out"></div>
                                            </div>

                                            <div class="relative">
                                                <div class="px-8 mx-auto max-w-7xl">
                                                    <div class="grid grid-cols-4 gap-x-8 gap-y-10 py-16">
                                                        <div class="relative group">
                                                            <div
                                                                class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                                                <img
                                                                    src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                                                    alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                                                    class="object-cover object-center">
                                                            </div>
                                                            <a href="#" class="block mt-4 font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10"
                                                                      aria-hidden="true"></span>
                                                                New Arrivals
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>

                                                        <div class="relative group">
                                                            <div
                                                                class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                                                <img
                                                                    src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                                                    alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                                                    class="object-cover object-center">
                                                            </div>
                                                            <a href="#" class="block mt-4 font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10"
                                                                      aria-hidden="true"></span>
                                                                Basic Tees
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>

                                                        <div class="relative group">
                                                            <div
                                                                class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                                                <img
                                                                    src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg"
                                                                    alt="Model wearing minimalist watch with black wristband and white watch face."
                                                                    class="object-cover object-center">
                                                            </div>
                                                            <a href="#" class="block mt-4 font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10"
                                                                      aria-hidden="true"></span>
                                                                Accessories
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>

                                                        <div class="relative group">
                                                            <div
                                                                class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                                                <img
                                                                    src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg"
                                                                    alt="Model opening tan leather long wallet with credit card pockets and cash pouch."
                                                                    class="object-cover object-center">
                                                            </div>
                                                            <a href="#" class="block mt-4 font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10"
                                                                      aria-hidden="true"></span>
                                                                Carry
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <div class="flex relative">
                                            <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                            <button type="button"
                                                    class="flex relative z-10 items-center pt-px -mb-px text-sm font-medium text-gray-700 border-b-2 border-transparent transition-colors duration-200 ease-out hover:text-gray-800"
                                                    aria-expanded="false">
                                                Men
                                            </button>
                                        </div>

                                        <!--
                                          'Women' flyout menu, show/hide based on flyout menu state.

                                          Entering: "transition ease-out duration-200"
                                            From: "opacity-0"
                                            To: "opacity-100"
                                          Leaving: "transition ease-in duration-150"
                                            From: "opacity-100"
                                            To: "opacity-0"
                                        -->
                                        <div class="absolute inset-x-0 top-full text-sm text-gray-500 bg-white">
                                            <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                            <div class="absolute inset-0 top-1/2 bg-white shadow"
                                                 aria-hidden="true"></div>
                                            <!-- Fake border when menu is open -->
                                            <div class="absolute inset-0 top-0 px-8 mx-auto max-w-7xl h-px"
                                                 aria-hidden="true">
                                                <!-- Open: "bg-gray-200", Closed: "bg-transparent" -->
                                                <div
                                                    class="w-full h-px bg-transparent transition-colors duration-200 ease-out"></div>
                                            </div>

                                            <div class="relative">
                                                <div class="px-8 mx-auto max-w-7xl">
                                                    <div class="grid grid-cols-4 gap-x-8 gap-y-10 py-16">
                                                        <div class="relative group">
                                                            <div
                                                                class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                                                <img
                                                                    src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg"
                                                                    alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers."
                                                                    class="object-cover object-center">
                                                            </div>
                                                            <a href="#" class="block mt-4 font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10"
                                                                      aria-hidden="true"></span>
                                                                New Arrivals
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>

                                                        <div class="relative group">
                                                            <div
                                                                class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                                                <img
                                                                    src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg"
                                                                    alt="Model wearing light heather gray t-shirt."
                                                                    class="object-cover object-center">
                                                            </div>
                                                            <a href="#" class="block mt-4 font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10"
                                                                      aria-hidden="true"></span>
                                                                Basic Tees
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>

                                                        <div class="relative group">
                                                            <div
                                                                class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                                                <img
                                                                    src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg"
                                                                    alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body."
                                                                    class="object-cover object-center">
                                                            </div>
                                                            <a href="#" class="block mt-4 font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10"
                                                                      aria-hidden="true"></span>
                                                                Accessories
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>

                                                        <div class="relative group">
                                                            <div
                                                                class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                                                <img
                                                                    src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg"
                                                                    alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching."
                                                                    class="object-cover object-center">
                                                            </div>
                                                            <a href="#" class="block mt-4 font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10"
                                                                      aria-hidden="true"></span>
                                                                Carry
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="#"
                                       class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>

                                    <a href="#"
                                       class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile menu and search (lg-) -->
                        <div class="flex flex-1 items-center lg:hidden">
                            <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                            <button type="button" class="p-2 -ml-2 text-gray-400 bg-white rounded-md">
                                <span class="sr-only">Open menu</span>
                                <!-- Heroicon name: outline/menu -->
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                            </button>

                            <!-- Search -->
                            <a href="#" class="p-2 ml-2 text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Search</span>
                                <!-- Heroicon name: outline/search -->
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </a>
                        </div>

                        <!-- Logo (lg-) -->
                        <a href="#" class="lg:hidden">
                            <span class="sr-only">Workflow</span>
                            <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt=""
                                 class="w-auto h-8">
                        </a>

                        <div class="flex flex-1 justify-end items-center">
                            <a href="#" class="hidden text-sm font-medium text-gray-700 hover:text-gray-800 lg:block">
                                Search
                            </a>

                            <div class="flex items-center lg:ml-8">
                                <!-- Help -->
                                <a href="#" class="p-2 text-gray-400 hover:text-gray-500 lg:hidden">
                                    <span class="sr-only">Help</span>
                                    <!-- Heroicon name: outline/question-mark-circle -->
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </a>
                                <a href="#"
                                   class="hidden text-sm font-medium text-gray-700 hover:text-gray-800 lg:block">Help</a>

                                <!-- Cart -->
                                <div class="flow-root ml-4 lg:ml-8">
                                    <a href="#" class="flex items-center p-2 -m-2 group">
                                        <!-- Heroicon name: outline/shopping-bag -->
                                        <svg class="w-6 h-6 text-gray-400 flex-shink-0 group-hover:text-gray-500"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                        </svg>
                                        <span
                                            class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                                        <span class="sr-only">items in cart, view bag</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="px-4 pt-16 pb-24 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:max-w-none">
            <h1 class="sr-only">Checkout</h1>

            <form class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16">
                <div>
                    <div>
                        <h2 class="text-lg font-medium text-gray-900">Contact information</h2>

                        <div class="mt-4">
                            <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                address</label>
                            <div class="mt-1">
                                <input type="email" id="email-address" name="email-address" autocomplete="email"
                                       class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>
                    </div>

                    <div class="pt-10 mt-10 border-t border-gray-200">
                        <h2 class="text-lg font-medium text-gray-900">Shipping information</h2>

                        <div class="grid grid-cols-1 gap-y-6 mt-4 sm:grid-cols-2 sm:gap-x-4">
                            <div>
                                <label for="first-name" class="block text-sm font-medium text-gray-700">First
                                    name</label>
                                <div class="mt-1">
                                    <input type="text" id="first-name" name="first-name" autocomplete="given-name"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                                <div class="mt-1">
                                    <input type="text" id="last-name" name="last-name" autocomplete="family-name"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                                <div class="mt-1">
                                    <input type="text" name="company" id="company"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                <div class="mt-1">
                                    <input type="text" name="address" id="address" autocomplete="street-address"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="apartment" class="block text-sm font-medium text-gray-700">Apartment, suite,
                                    etc.</label>
                                <div class="mt-1">
                                    <input type="text" name="apartment" id="apartment"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                <div class="mt-1">
                                    <input type="text" name="city" id="city"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                <div class="mt-1">
                                    <select id="country" name="country" autocomplete="country"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                        <option>United States</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label for="province" class="block text-sm font-medium text-gray-700">Province</label>
                                <div class="mt-1">
                                    <input type="text" name="province" id="province"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <label for="postal-code" class="block text-sm font-medium text-gray-700">Postal
                                    code</label>
                                <div class="mt-1">
                                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                <div class="mt-1">
                                    <input type="text" name="phone" id="phone" autocomplete="tel"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-10 mt-10 border-t border-gray-200">
                        <fieldset>
                            <legend class="text-lg font-medium text-gray-900">
                                Delivery method
                            </legend>

                            <div class="grid grid-cols-1 gap-y-6 mt-4 sm:grid-cols-2 sm:gap-x-4">
                                <!--
                                  Checked: "border-transparent", Not Checked: "border-gray-300"
                                  Active: "ring-2 ring-indigo-500"
                                -->
                                <label
                                    class="flex relative p-4 bg-white rounded-lg border shadow-sm cursor-pointer focus:outline-none">
                                    <input type="radio" name="delivery-method" value="Standard" class="sr-only"
                                           aria-labelledby="delivery-method-0-label"
                                           aria-describedby="delivery-method-0-description-0 delivery-method-0-description-1">
                                    <div class="flex flex-1">
                                        <div class="flex flex-col">
                      <span id="delivery-method-0-label" class="block text-sm font-medium text-gray-900">
                        Standard
                      </span>
                                            <span id="delivery-method-0-description-0"
                                                  class="flex items-center mt-1 text-sm text-gray-500">
                        4–10 business days
                      </span>
                                            <span id="delivery-method-0-description-1"
                                                  class="mt-6 text-sm font-medium text-gray-900">
                        $5.00
                      </span>
                                        </div>
                                    </div>
                                    <!--
                                      Not Checked: "hidden"

                                      Heroicon name: solid/check-circle
                                    -->
                                    <svg class="w-5 h-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    <!--
                                      Active: "border", Not Active: "border-2"
                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                    -->
                                    <div class="absolute -inset-px rounded-lg border-2 pointer-events-none"
                                         aria-hidden="true"></div>
                                </label>

                                <!--
                                  Checked: "border-transparent", Not Checked: "border-gray-300"
                                  Active: "ring-2 ring-indigo-500"
                                -->
                                <label
                                    class="flex relative p-4 bg-white rounded-lg border shadow-sm cursor-pointer focus:outline-none">
                                    <input type="radio" name="delivery-method" value="Express" class="sr-only"
                                           aria-labelledby="delivery-method-1-label"
                                           aria-describedby="delivery-method-1-description-0 delivery-method-1-description-1">
                                    <div class="flex flex-1">
                                        <div class="flex flex-col">
                      <span id="delivery-method-1-label" class="block text-sm font-medium text-gray-900">
                        Express
                      </span>
                                            <span id="delivery-method-1-description-0"
                                                  class="flex items-center mt-1 text-sm text-gray-500">
                        2–5 business days
                      </span>
                                            <span id="delivery-method-1-description-1"
                                                  class="mt-6 text-sm font-medium text-gray-900">
                        $16.00
                      </span>
                                        </div>
                                    </div>
                                    <!--
                                      Not Checked: "hidden"

                                      Heroicon name: solid/check-circle
                                    -->
                                    <svg class="w-5 h-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    <!--
                                      Active: "border", Not Active: "border-2"
                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                    -->
                                    <div class="absolute -inset-px rounded-lg border-2 pointer-events-none"
                                         aria-hidden="true"></div>
                                </label>
                            </div>
                        </fieldset>
                    </div>

                    <!-- Payment -->
                    <div class="pt-10 mt-10 border-t border-gray-200">
                        <h2 class="text-lg font-medium text-gray-900">Payment</h2>

                        <fieldset class="mt-4">
                            <legend class="sr-only">Payment type</legend>
                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                <div class="flex items-center">
                                    <input id="credit-card" name="payment-type" type="radio" checked
                                           class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                    <label for="credit-card" class="block ml-3 text-sm font-medium text-gray-700">
                                        Credit card
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="paypal" name="payment-type" type="radio"
                                           class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                    <label for="paypal" class="block ml-3 text-sm font-medium text-gray-700">
                                        PayPal
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="etransfer" name="payment-type" type="radio"
                                           class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                    <label for="etransfer" class="block ml-3 text-sm font-medium text-gray-700">
                                        eTransfer
                                    </label>
                                </div>
                            </div>
                        </fieldset>

                        <div class="grid grid-cols-4 gap-x-4 gap-y-6 mt-6">
                            <div class="col-span-4">
                                <label for="card-number" class="block text-sm font-medium text-gray-700">Card
                                    number</label>
                                <div class="mt-1">
                                    <input type="text" id="card-number" name="card-number" autocomplete="cc-number"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="col-span-4">
                                <label for="name-on-card" class="block text-sm font-medium text-gray-700">Name on
                                    card</label>
                                <div class="mt-1">
                                    <input type="text" id="name-on-card" name="name-on-card" autocomplete="cc-name"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="col-span-3">
                                <label for="expiration-date" class="block text-sm font-medium text-gray-700">Expiration
                                    date (MM/YY)</label>
                                <div class="mt-1">
                                    <input type="text" name="expiration-date" id="expiration-date" autocomplete="cc-exp"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <label for="cvc" class="block text-sm font-medium text-gray-700">CVC</label>
                                <div class="mt-1">
                                    <input type="text" name="cvc" id="cvc" autocomplete="csc"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order summary -->
                <div class="mt-10 lg:mt-0">
                    <h2 class="text-lg font-medium text-gray-900">Order summary</h2>

                    <div class="mt-4 bg-white rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="sr-only">Items in your cart</h3>
                        <ul role="list" class="divide-y divide-gray-200">
                            <li class="flex px-4 py-6 sm:px-6">
                                <div class="flex-shrink-0">
                                    <img
                                        src="https://tailwindui.com/img/ecommerce-images/checkout-page-02-product-01.jpg"
                                        alt="Front of men&#039;s Basic Tee in black." class="w-20 rounded-md">
                                </div>

                                <div class="flex flex-col flex-1 ml-6">
                                    <div class="flex">
                                        <div class="flex-1 min-w-0">
                                            <h4 class="text-sm">
                                                <a href="#" class="font-medium text-gray-700 hover:text-gray-800">
                                                    Basic Tee
                                                </a>
                                            </h4>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Black
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Large
                                            </p>
                                        </div>

                                        <div class="flow-root flex-shrink-0 ml-4">
                                            <button type="button"
                                                    class="-m-2.5 bg-white p-2.5 flex items-center justify-center text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Remove</span>
                                                <!-- Heroicon name: solid/trash -->
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex flex-1 justify-between items-end pt-2">
                                        <p class="mt-1 text-sm font-medium text-gray-900">$32.00</p>

                                        <div class="ml-4">
                                            <label for="quantity" class="sr-only">Quantity</label>
                                            <select id="quantity" name="quantity"
                                                    class="text-base font-medium text-left text-gray-700 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- More products... -->
                        </ul>
                        <dl class="px-4 py-6 space-y-6 border-t border-gray-200 sm:px-6">
                            <div class="flex justify-between items-center">
                                <dt class="text-sm">
                                    Subtotal
                                </dt>
                                <dd class="text-sm font-medium text-gray-900">
                                    $64.00
                                </dd>
                            </div>
                            <div class="flex justify-between items-center">
                                <dt class="text-sm">
                                    Shipping
                                </dt>
                                <dd class="text-sm font-medium text-gray-900">
                                    $5.00
                                </dd>
                            </div>
                            <div class="flex justify-between items-center">
                                <dt class="text-sm">
                                    Taxes
                                </dt>
                                <dd class="text-sm font-medium text-gray-900">
                                    $5.52
                                </dd>
                            </div>
                            <div class="flex justify-between items-center pt-6 border-t border-gray-200">
                                <dt class="text-base font-medium">
                                    Total
                                </dt>
                                <dd class="text-base font-medium text-gray-900">
                                    $75.52
                                </dd>
                            </div>
                        </dl>

                        <div class="px-4 py-6 border-t border-gray-200 sm:px-6">
                            <button type="submit"
                                    class="px-4 py-3 w-full text-base font-medium text-white bg-indigo-600 rounded-md border border-transparent shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">
                                Confirm order
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <footer aria-labelledby="footer-heading" class="bg-white border-t border-gray-200">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="py-20">
                <div class="grid grid-cols-1 md:grid-cols-12 md:grid-flow-col md:gap-x-8 md:gap-y-16 md:auto-rows-min">
                    <!-- Image section -->
                    <div class="col-span-1 md:col-span-2 lg:row-start-1 lg:col-start-1">
                        <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt=""
                             class="w-auto h-8">
                    </div>

                    <!-- Sitemap sections -->
                    <div
                        class="grid grid-cols-2 col-span-6 gap-8 mt-10 sm:grid-cols-3 md:mt-0 md:row-start-1 md:col-start-3 md:col-span-8 lg:col-start-2 lg:col-span-6">
                        <div class="grid grid-cols-1 gap-y-12 sm:col-span-2 sm:grid-cols-2 sm:gap-x-8">
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">
                                    Products
                                </h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">
                                            Bags
                                        </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">
                                            Tees
                                        </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">
                                            Objects
                                        </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">
                                            Home Goods
                                        </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">
                                            Accessories
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">
                                    Company
                                </h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">
                                            Who we are
                                        </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">
                                            Sustainability
                                        </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">
                                            Press
                                        </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">
                                            Careers
                                        </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">
                                            Terms &amp; Conditions
                                        </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">
                                            Privacy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">
                                Customer Service
                            </h3>
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                        Contact
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                        Shipping
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                        Returns
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                        Warranty
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                        Secure Payments
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                        FAQ
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                        Find a store
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Newsletter section -->
                    <div
                        class="mt-12 md:mt-0 md:row-start-2 md:col-start-3 md:col-span-8 lg:row-start-1 lg:col-start-9 lg:col-span-4">
                        <h3 class="text-sm font-medium text-gray-900">Sign up for our newsletter</h3>
                        <p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox
                            weekly.</p>
                        <form class="flex mt-2 sm:max-w-md">
                            <label for="newsletter-email-address" class="sr-only">Email address</label>
                            <input id="newsletter-email-address" type="text" autocomplete="email" required
                                   class="px-4 py-2 w-full min-w-0 text-base placeholder-gray-500 text-gray-900 bg-white rounded-md border border-gray-300 shadow-sm appearance-none focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                            <div class="flex-shrink-0 ml-4">
                                <button type="submit"
                                        class="flex justify-center items-center px-4 py-2 w-full text-base font-medium text-white bg-indigo-600 rounded-md border border-transparent shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Sign up
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="py-10 text-center border-t border-gray-100">
                <p class="text-sm text-gray-500">&copy; 2021 Workflow, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>

</body>
