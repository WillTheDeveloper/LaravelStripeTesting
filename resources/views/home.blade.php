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
<div class="bg-white">
    <!--
      Mobile menu

      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->
    <div class="flex fixed inset-0 z-40 lg:hidden" role="dialog" aria-modal="true">

        <div
            x-show="mobileMenu"
            x-transition:enter="transition-opacity ease-liner duration-300"
            x-transition:from="opacity-0"
            x-transition:to="opacity-100">
        </div>
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

    <!-- Hero section -->
    <div class="relative bg-gray-900">
        <!-- Decorative image and overlay -->
        <div aria-hidden="true" class="overflow-hidden absolute inset-0">
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-hero-full-width.jpg" alt=""
                 class="object-cover object-center w-full h-full">
        </div>
        <div aria-hidden="true" class="absolute inset-0 bg-gray-900 opacity-50"></div>

        <!-- Navigation -->
        <header class="relative z-10">
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
                <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-md">
                    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <div>
                            <div class="flex justify-between items-center h-16">
                                <!-- Logo (lg+) -->
                                <div class="hidden lg:flex-1 lg:flex lg:items-center">
                                    <a href="#">
                                        <span class="sr-only">Workflow</span>
                                        <img class="w-auto h-8"
                                             src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white"
                                             alt="">
                                    </a>
                                </div>

                                <div class="hidden h-full lg:flex">
                                    <!-- Flyout menus -->
                                    <div class="inset-x-0 bottom-0 px-4">
                                        <div class="flex justify-center space-x-8 h-full">
                                            <div class="flex">
                                                <div class="flex relative">
                                                    <button type="button"
                                                            class="flex relative z-10 justify-center items-center text-sm font-medium text-white transition-colors duration-200 ease-out"
                                                            aria-expanded="false">
                                                        Women
                                                        <!-- Open: "bg-white", Closed: "" -->
                                                        <span
                                                            class="absolute -bottom-px inset-x-0 h-0.5 transition ease-out duration-200"
                                                            aria-hidden="true"></span>
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
                                                <div class="absolute inset-x-0 top-full text-sm text-gray-500">
                                                    <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                    <div class="absolute inset-0 top-1/2 bg-white shadow"
                                                         aria-hidden="true"></div>

                                                    <div class="relative bg-white">
                                                        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                                                            <div class="grid grid-cols-4 gap-x-8 gap-y-10 py-16">
                                                                <div class="relative group">
                                                                    <div
                                                                        class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                                                        <img
                                                                            src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                                                            alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                                                            class="object-cover object-center">
                                                                    </div>
                                                                    <a href="#"
                                                                       class="block mt-4 font-medium text-gray-900">
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
                                                                    <a href="#"
                                                                       class="block mt-4 font-medium text-gray-900">
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
                                                                    <a href="#"
                                                                       class="block mt-4 font-medium text-gray-900">
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
                                                                    <a href="#"
                                                                       class="block mt-4 font-medium text-gray-900">
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
                                                    <button type="button"
                                                            class="flex relative z-10 justify-center items-center text-sm font-medium text-white transition-colors duration-200 ease-out"
                                                            aria-expanded="false">
                                                        Men
                                                        <!-- Open: "bg-white", Closed: "" -->
                                                        <span
                                                            class="absolute -bottom-px inset-x-0 h-0.5 transition ease-out duration-200"
                                                            aria-hidden="true"></span>
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
                                                <div class="absolute inset-x-0 top-full text-sm text-gray-500">
                                                    <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                    <div class="absolute inset-0 top-1/2 bg-white shadow"
                                                         aria-hidden="true"></div>

                                                    <div class="relative bg-white">
                                                        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                                                            <div class="grid grid-cols-4 gap-x-8 gap-y-10 py-16">
                                                                <div class="relative group">
                                                                    <div
                                                                        class="overflow-hidden bg-gray-100 rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                                                        <img
                                                                            src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg"
                                                                            alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers."
                                                                            class="object-cover object-center">
                                                                    </div>
                                                                    <a href="#"
                                                                       class="block mt-4 font-medium text-gray-900">
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
                                                                    <a href="#"
                                                                       class="block mt-4 font-medium text-gray-900">
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
                                                                    <a href="#"
                                                                       class="block mt-4 font-medium text-gray-900">
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
                                                                    <a href="#"
                                                                       class="block mt-4 font-medium text-gray-900">
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
                                               class="flex items-center text-sm font-medium text-white">Company</a>

                                            <a href="#"
                                               class="flex items-center text-sm font-medium text-white">Stores</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Mobile menu and search (lg-) -->
                                <div class="flex flex-1 items-center lg:hidden">
                                    <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                                    <button type="button" class="p-2 -ml-2 text-white">
                                        <span class="sr-only">Open menu</span>
                                        <!-- Heroicon name: outline/menu -->
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M4 6h16M4 12h16M4 18h16"/>
                                        </svg>
                                    </button>

                                    <!-- Search -->
                                    <a href="#" class="p-2 ml-2 text-white">
                                        <span class="sr-only">Search</span>
                                        <!-- Heroicon name: outline/search -->
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                        </svg>
                                    </a>
                                </div>

                                <!-- Logo (lg-) -->
                                <a href="#" class="lg:hidden">
                                    <span class="sr-only">Workflow</span>
                                    <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt=""
                                         class="w-auto h-8">
                                </a>

                                <div class="flex flex-1 justify-end items-center">
                                    <a href="#" class="hidden text-sm font-medium text-white lg:block">
                                        Search
                                    </a>

                                    <div class="flex items-center lg:ml-8">
                                        <!-- Help -->
                                        <a href="#" class="p-2 text-white lg:hidden">
                                            <span class="sr-only">Help</span>
                                            <!-- Heroicon name: outline/question-mark-circle -->
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </a>
                                        <a href="#" class="hidden text-sm font-medium text-white lg:block">Help</a>

                                        <!-- Cart -->
                                        <div class="flow-root ml-4 lg:ml-8">
                                            <a href="#" class="flex items-center p-2 -m-2 group">
                                                <!-- Heroicon name: outline/shopping-bag -->
                                                <svg class="w-6 h-6 text-white flex-shink-0"
                                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                                </svg>
                                                <span class="ml-2 text-sm font-medium text-white">0</span>
                                                <span class="sr-only">items in cart, view bag</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="flex relative flex-col items-center px-6 py-32 mx-auto max-w-3xl text-center sm:py-64 lg:px-0">
            <h1 class="text-4xl font-extrabold tracking-tight text-white lg:text-6xl">New arrivals are here</h1>
            <p class="mt-4 text-xl text-white">The new arrivals have, well, newly arrived. Check out the latest options
                from our summer small-batch release while they're still in stock.</p>
            <a href="#"
               class="inline-block px-8 py-3 mt-8 text-base font-medium text-gray-900 bg-white rounded-md border border-transparent hover:bg-gray-100">Shop
                New Arrivals</a>
        </div>
    </div>

    <main>
        <!-- Category section -->
        <section aria-labelledby="category-heading" class="pt-24 sm:pt-32 xl:max-w-7xl xl:mx-auto xl:px-8">
            <div class="px-4 sm:px-6 sm:flex sm:items-center sm:justify-between lg:px-8 xl:px-0">
                <h2 id="category-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">Shop by
                    Category</h2>
                <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">Browse
                    all categories<span aria-hidden="true"> &rarr;</span></a>
            </div>

            <div class="flow-root mt-4">
                <div class="-my-2">
                    <div class="box-content overflow-x-auto relative py-2 h-80 xl:overflow-visible">
                        <div
                            class="flex absolute px-4 space-x-8 min-w-screen-xl sm:px-6 lg:px-8 xl:relative xl:px-0 xl:space-x-0 xl:grid xl:grid-cols-5 xl:gap-x-8">
                            <a href="#"
                               class="flex overflow-hidden relative flex-col p-6 w-56 h-80 rounded-lg hover:opacity-75 xl:w-auto">
                <span aria-hidden="true" class="absolute inset-0">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-01.jpg" alt=""
                       class="object-cover object-center w-full h-full">
                </span>
                                <span aria-hidden="true"
                                      class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span
                                    class="relative mt-auto text-xl font-bold text-center text-white">New Arrivals</span>
                            </a>

                            <a href="#"
                               class="flex overflow-hidden relative flex-col p-6 w-56 h-80 rounded-lg hover:opacity-75 xl:w-auto">
                <span aria-hidden="true" class="absolute inset-0">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-02.jpg" alt=""
                       class="object-cover object-center w-full h-full">
                </span>
                                <span aria-hidden="true"
                                      class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span
                                    class="relative mt-auto text-xl font-bold text-center text-white">Productivity</span>
                            </a>

                            <a href="#"
                               class="flex overflow-hidden relative flex-col p-6 w-56 h-80 rounded-lg hover:opacity-75 xl:w-auto">
                <span aria-hidden="true" class="absolute inset-0">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-04.jpg" alt=""
                       class="object-cover object-center w-full h-full">
                </span>
                                <span aria-hidden="true"
                                      class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span class="relative mt-auto text-xl font-bold text-center text-white">Workspace</span>
                            </a>

                            <a href="#"
                               class="flex overflow-hidden relative flex-col p-6 w-56 h-80 rounded-lg hover:opacity-75 xl:w-auto">
                <span aria-hidden="true" class="absolute inset-0">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-05.jpg" alt=""
                       class="object-cover object-center w-full h-full">
                </span>
                                <span aria-hidden="true"
                                      class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span
                                    class="relative mt-auto text-xl font-bold text-center text-white">Accessories</span>
                            </a>

                            <a href="#"
                               class="flex overflow-hidden relative flex-col p-6 w-56 h-80 rounded-lg hover:opacity-75 xl:w-auto">
                <span aria-hidden="true" class="absolute inset-0">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-03.jpg" alt=""
                       class="object-cover object-center w-full h-full">
                </span>
                                <span aria-hidden="true"
                                      class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span class="relative mt-auto text-xl font-bold text-center text-white">Sale</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-4 mt-6 sm:hidden">
                <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">Browse all
                    categories<span aria-hidden="true"> &rarr;</span></a>
            </div>
        </section>

        <!-- Featured section -->
        <section aria-labelledby="social-impact-heading" class="px-4 pt-24 mx-auto max-w-7xl sm:pt-32 sm:px-6 lg:px-8">
            <div class="overflow-hidden relative rounded-lg">
                <div class="absolute inset-0">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-feature-section-01.jpg" alt=""
                         class="object-cover object-center w-full h-full">
                </div>
                <div class="relative px-6 py-32 bg-gray-900 bg-opacity-75 sm:py-40 sm:px-12 lg:px-16">
                    <div class="flex relative flex-col items-center mx-auto max-w-3xl text-center">
                        <h2 id="social-impact-heading"
                            class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                            <span class="block sm:inline">Level up</span>
                            <span class="block sm:inline">your desk</span>
                        </h2>
                        <p class="mt-3 text-xl text-white">Make your desk beautiful and organized. Post a picture to
                            social media and watch it get more likes than life-changing announcements. Reflect on the
                            shallow nature of existence. At least you have a really nice desk setup.</p>
                        <a href="#"
                           class="block px-8 py-3 mt-8 w-full text-base font-medium text-gray-900 bg-white rounded-md border border-transparent hover:bg-gray-100 sm:w-auto">Shop
                            Workspace</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Collection section -->
        <section aria-labelledby="collection-heading"
                 class="px-4 pt-24 mx-auto max-w-xl sm:pt-32 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 id="collection-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">Shop by
                Collection</h2>
            <p class="mt-4 text-base text-gray-500">Each season, we collaborate with world-class designers to create a
                collection inspired by the natural world.</p>

            <div class="mt-10 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-8">
                <a href="#" class="block group">
                    <div aria-hidden="true"
                         class="overflow-hidden rounded-lg aspect-w-3 aspect-h-2 group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-01.jpg"
                             alt="Brown leather key ring with brass metal loops and rivets on wood table."
                             class="object-cover object-center w-full h-full">
                    </div>
                    <h3 class="mt-4 text-base font-semibold text-gray-900">Handcrafted Collection</h3>
                    <p class="mt-2 text-sm text-gray-500">Keep your phone, keys, and wallet together, so you can lose
                        everything at once.</p>
                </a>

                <a href="#" class="block group">
                    <div aria-hidden="true"
                         class="overflow-hidden rounded-lg aspect-w-3 aspect-h-2 group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-02.jpg"
                             alt="Natural leather mouse pad on white desk next to porcelain mug and keyboard."
                             class="object-cover object-center w-full h-full">
                    </div>
                    <h3 class="mt-4 text-base font-semibold text-gray-900">Organized Desk Collection</h3>
                    <p class="mt-2 text-sm text-gray-500">The rest of the house will still be a mess, but your desk will
                        look great.</p>
                </a>

                <a href="#" class="block group">
                    <div aria-hidden="true"
                         class="overflow-hidden rounded-lg aspect-w-3 aspect-h-2 group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-03.jpg"
                             alt="Person placing task list card into walnut card holder next to felt carrying case on leather desk pad."
                             class="object-cover object-center w-full h-full">
                    </div>
                    <h3 class="mt-4 text-base font-semibold text-gray-900">Focus Collection</h3>
                    <p class="mt-2 text-sm text-gray-500">Be more productive than enterprise project managers with a
                        single piece of paper.</p>
                </a>
            </div>
        </section>

        <!-- Featured section -->
        <section aria-labelledby="comfort-heading" class="px-4 py-24 mx-auto max-w-7xl sm:py-32 sm:px-6 lg:px-8">
            <div class="overflow-hidden relative rounded-lg">
                <div class="absolute inset-0">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-feature-section-02.jpg" alt=""
                         class="object-cover object-center w-full h-full">
                </div>
                <div class="relative px-6 py-32 bg-gray-900 bg-opacity-75 sm:py-40 sm:px-12 lg:px-16">
                    <div class="flex relative flex-col items-center mx-auto max-w-3xl text-center">
                        <h2 id="comfort-heading" class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                            Simple productivity</h2>
                        <p class="mt-3 text-xl text-white">Endless tasks, limited hours, a single piece of paper. Not
                            really a haiku, but we're doing our best here. No kanban boards, burndown charts, or tangled
                            flowcharts with our Focus system. Just the undeniable urge to fill empty circles.</p>
                        <a href="#"
                           class="block px-8 py-3 mt-8 w-full text-base font-medium text-gray-900 bg-white rounded-md border border-transparent hover:bg-gray-100 sm:w-auto">Shop
                            Focus</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer aria-labelledby="footer-heading" class="bg-gray-900">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="py-20 xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                    <div class="space-y-12 md:space-y-0 md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-medium text-white">
                                Shop
                            </h3>
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Bags
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Tees
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Objects
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Home Goods
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Accessories
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-white">
                                Company
                            </h3>
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Who we are
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Sustainability
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Press
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Careers
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Terms &amp; Conditions
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Privacy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="space-y-12 md:space-y-0 md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-medium text-white">
                                Account
                            </h3>
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Manage Account
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Returns &amp; Exchanges
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Redeem a Gift Card
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-white">
                                Connect
                            </h3>
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Contact Us
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Twitter
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Instagram
                                    </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">
                                        Pinterest
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-12 md:mt-16 xl:mt-0">
                    <h3 class="text-sm font-medium text-white">Sign up for our newsletter</h3>
                    <p class="mt-6 text-sm text-gray-300">The latest deals and savings, sent to your inbox weekly.</p>
                    <form class="flex mt-2 sm:max-w-md">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" type="text" autocomplete="email" required
                               class="px-4 py-2 w-full min-w-0 text-base placeholder-gray-500 text-gray-900 bg-white rounded-md border border-white shadow-sm appearance-none focus:outline-none focus:border-white focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-white">
                        <div class="flex-shrink-0 ml-4">
                            <button type="submit"
                                    class="flex justify-center items-center px-4 py-2 w-full text-base font-medium text-white bg-indigo-600 rounded-md border border-transparent shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-indigo-500">
                                Sign up
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="py-10 border-t border-gray-800">
                <p class="text-sm text-gray-400">Copyright &copy; 2021 Clothing Company Inc.</p>
            </div>
        </div>
    </footer>
</div>

</body>
