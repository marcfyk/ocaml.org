<?php
include 'header.php';
?>

<button class="bg-primary-600  p-3 z-30 rounded-r-xl text-white shadow-md top-2/4 fixed md:hidden" :class="sidebar ? 'pl-1 pr-2': ''" x-on:click="sidebar = ! sidebar">
    <div class="transform transition-transform" :class='sidebar ? "" : "rotate-180" '>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
        </svg>
    </div>
</button>

<div class="bg-white">
    <div class="py-10 lg:py-28">
        <div class="container-fluid">
            <div class="flex justify-between flex-col md:flex-row">
                <div class="flex flex-col">
                    <h2 class="font-bold mb-6 md:mb-0 lg:mb-6">Dream</h2>
                    <div class="text-lg text-body-400">Tidy, feature-complete Web framework</div>
                </div>
                <div class="flex justify-between space-y-5 md:space-y-0 md:space-x-5 flex-col md:flex-row w-full md:w-auto">
                    <div class=" h-14 w-full md:w-auto flex-col flex">
                        <label class="font-semibold mb-2">Version</label>
                        <div class="relative">
                            <select class="w-full lg:w-auto appearance-none text-body-600 border rounded-md py-3 pl-6 border-gray-200 pr-14 h-full" name="All Regions" id="">
                                <option value="USA">1.0.0-alpha2</option>
                                <option value="USA">USA</option>
                                <option value="UAE">UAE</option>
                            </select>
                            <div class="absolute h-full flex items-center pr-6 opacity-60 right-0 top-0"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex mt-8 space-x-6 border-b border-gray-200">
                    <a href="packages-overview.php">
                        <button class="border-transparent border-b-2 hover:border-primary-600 p-4 font-medium relative text-body-400">
                            Overview
                        </button>
                    </a>
                    <a href="package-documentation.php">
                        <button class="border-b-2 hover:border-primary-600 p-4 font-medium border-primary-600 relative text-primary-600">
                            Documentation
                            <span class="bg-green-500 ml-2 absolute top-2 p-1 rounded-full inline-block"></span>
                        </button>
                    </a>
                    <a href="top-level.php">
                        <button class="border-transparent border-b-2 hover:border-primary-600 p-4 font-medium relative text-body-400">
                            Top level
                            <span class="bg-green-500 ml-2 absolute top-2 p-1 rounded-full inline-block"></span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex py-12 lg:space-x-14 flex-col lg:flex-row">
            <div class="container-fluid">
                <div class="flex">
                    <div class="p-10 z-10 w-full bg-white flex-shrink-0 flex-col fixed h-screen overflow-auto md:flex left-0 top-0 md:relative md:w-60 md:p-0 font-normal text-body-400" x-show="sidebar" x-transition:enter="transition duration-200 transform ease-out" x-transition:enter-start="-translate-x-full" x-transition:leave="transition duration-100 transform ease-in" x-transition:leave-end="-translate-x-full">
                        <div class="space-y-2 flex flex-col">
                            <div class="text-sm font-semibold text-body-600 mb-6 flex px-3 py-2">IN THIS PACKAGE</div>
                            <div x-data="{dropdown:true}">
                            <button x-on:click="dropdown = !dropdown" href="" class="pb-4 text-sm text-left text-body-400 block ">
                                <div x-show="dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div x-show="!dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                Library <strong class="font-semibold">dream</strong>
                            </button>
                            <div x-show="dropdown" class=" mt-4 text-center flex flex-col text-sm space-y-3 -ml-10">
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Module <strong class="font-semibold">Dream</strong></a>
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Library dream.cipher</a>
                            </div>
                            </div>
                            <div x-data="{dropdown:true}">

                            <button x-on:click="dropdown = !dropdown" href="" class="pt-4 pb-4 text-sm text-left text-body-400 block ">
                                <div x-show="dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div x-show="!dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                Library <strong class="font-semibold">dream</strong>
                            </button>
                            <div x-show="dropdown" class=" mt-4 text-center flex flex-col text-sm space-y-3 -ml-10">
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Module <strong class="font-semibold">Dream</strong></a>
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Library dream.cipher</a>
                            </div>
</div>
                        <div x-data="{dropdown:true}">
                            <button x-on:click="dropdown = !dropdown" href="" class="pt-4 pb-4 text-sm text-left text-body-400 block ">
                                <div x-show="dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div x-show="!dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                Library <strong class="font-semibold">dream</strong>
                            </button>
                            <div x-show="dropdown" class=" mt-4 text-center flex flex-col text-sm space-y-3 -ml-10">
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Module <strong class="font-semibold">Dream</strong></a>
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Library dream.cipher</a>
                            </div>
</div>
<div x-data="{dropdown:true}">
                            <button x-on:click="dropdown = !dropdown" href="" class="pt-4 pb-4 text-sm text-left text-body-400 block ">
                                <div x-show="dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div x-show="!dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                Library <strong class="font-semibold">dream</strong>
                            </button>
                            <div x-show="dropdown" class=" mt-4 text-center flex flex-col text-sm space-y-3 -ml-10">
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Module <strong class="font-semibold">Dream</strong></a>
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Library dream.cipher</a>
                            </div>
</div>
<div x-data="{dropdown:true}">
                            <button x-on:click="dropdown = !dropdown" href="" class="pt-4 pb-4 text-sm text-left text-body-400 block ">
                                <div x-show="dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div x-show="!dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                Library <strong class="font-semibold">dream</strong>
                            </button>
                            <div x-show="dropdown" class=" mt-4 text-center flex flex-col text-sm space-y-3 -ml-10">
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Module <strong class="font-semibold">Dream</strong></a>
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Library dream.cipher</a>
                            </div>
</div>
<div x-data="{dropdown:true}">
                            <button x-on:click="dropdown = !dropdown" href="" class="pt-4 pb-4 text-sm text-left text-body-400 block ">
                                <div x-show="dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div x-show="!dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                Library <strong class="font-semibold">dream</strong>
                            </button>
                            <div x-show="dropdown" class=" mt-4 text-center flex flex-col text-sm space-y-3 -ml-10">
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Module <strong class="font-semibold">Dream</strong></a>
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Library dream.cipher</a>
                            </div>
</div>
<div x-data="{dropdown:true}">
                            <button x-on:click="dropdown = !dropdown" href="" class="pt-4 pb-4 text-sm text-left text-body-400 block ">
                                <div x-show="dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div x-show="!dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                Library <strong class="font-semibold">dream</strong>
                            </button>
                            <div x-show="dropdown" class=" mt-4 text-center flex flex-col text-sm space-y-3 -ml-10">
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Module <strong class="font-semibold">Dream</strong></a>
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Library dream.cipher</a>
                            </div></div>

                            <div x-data="{dropdown:true}">
                            <button x-on:click="dropdown = !dropdown" href="" class="pt-4 pb-4 text-sm text-left text-body-400 block ">
                                <div x-show="dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div x-show="!dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                Library <strong class="font-semibold">dream</strong>
                            </button>
                            <div x-show="dropdown" class=" mt-4 text-center flex flex-col text-sm space-y-3 -ml-10">
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Module <strong class="font-semibold">Dream</strong></a>
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Library dream.cipher</a>
                            </div></div>

                            <div x-data="{dropdown:true}">
                            <button x-on:click="dropdown = !dropdown" href="" class="pt-4 pb-4 text-sm text-left text-body-400 block ">
                                <div x-show="dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div x-show="!dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                Library <strong class="font-semibold">dream</strong>
                            </button>
                            <div x-show="dropdown" class=" mt-4 text-center flex flex-col text-sm space-y-3 -ml-10">
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Module <strong class="font-semibold">Dream</strong></a>
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Library dream.cipher</a>
                            </div></div>

                            <div x-data="{dropdown:true}">
                            <button x-on:click="dropdown = !dropdown" href="" class="pt-4 pb-4 text-sm text-left text-body-400 block ">
                                <div x-show="dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div x-show="!dropdown" class="inline-block -mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                Library <strong class="font-semibold">dream</strong>
                            </button>
                            <div x-show="dropdown" class=" mt-4 text-center flex flex-col text-sm space-y-3 -ml-10">
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Module <strong class="font-semibold">Dream</strong></a>
                                <a href="" class="hover:bg-gray-100 py-2 px-3">Library dream.cipher</a>
                            </div>
</div>

                        </div>


                    </div>
                    <div class="flex-1 flex overflow-hidden types-container" id="types">
                        <div class="prose prose-orange overflow-hidden z-0 z- lg:max-w-4xl mx-auto relative px-6">
                            <h2>Types</h2>
                            <p>Dream is built on just five types. The first two are the data types of Dream. Both are abstract, even though they appear to have definitions:

                            <div class="flex border-l-4 px-6 py-2 bg-gray-100 rounded-r-md code-preview border-primary-600">type request = <div class="pl-3 text-primary-600 underline inline-block">incoming message</div>
                            </div>

                            <p>
                            <div class="inline-block">HTTP requests, such as GET /something HTTP/1.1. See </div><a href="" class="px-1 hover:text-primary-700 inline-block text-primary-600 underline">Requests</a>
                            </p>

                            <div class="flex border-l-4 px-6 py-2 bg-gray-100 rounded-r-md code-preview border-primary-600">type request = <div class="pl-3 text-primary-600 underline inline-block">incoming message</div>
                            </div>

                            <p>
                            <div class="inline-block">HTTP requests, such as GET /something HTTP/1.1. See </div><a href="" class="px-1 hover:text-primary-700 inline-block text-primary-600 underline">Requests</a>
                            </p>

                            <p>The remaining three types are for building up Web apps.</p>

                            <div class="flex border-l-4 px-6 py-2 bg-gray-100 rounded-r-md code-preview border-primary-600">type request = <div class="pl-3 text-primary-600 underline inline-block">incoming message</div>
                            </div>

                            <p>Handlers are asynchronous functions from requests to responses. Example 1-hello [playground] shows the simplest handler, an anonymous function which we pass to Dream.run. This creates a complete Web server! You can also see the Reason version in example r-hello.</p>

                            <p>
                            <pre><code>let () =
  Dream.run (fun _ ->
    Dream.html "Good morning, world!")</code></pre>
                            </p>

                            <h2 id="algebra">Algebra</h2>
                            <p>The three handler-related types have a vaguely algebraic interpretation:</p>
                            <ul class="pl-5 space-y-6">
                                <li>Each literal <a href="" class="px-1 hover:text-primary-700 text-primary-600 underline inline-block">handler</a> is an atom.</li>
                                <li><a href="" class="px-1 hover:text-primary-700 text-primary-600 underline inline-block"> middleware</a> is for sequential composition (product-like). <a href="" class="px-1 hover:text-primary-700 text-primary-600 underline inline-block">Dream.no_middleware</a> is 1.</li>
                                <li><a href="" class="px-1 hover:text-primary-700 text-primary-600 underline inline-block">route</a> is for alternative composition (sum-like). Dream.no_route is 0.</li>
                            </ul>
                            <p><a href="" class="px-1 hover:text-primary-700 text-primary-600 underline inline-block ">Dream.scope</a> implements a left distributive law, making Dream a ring-like structure.</p>
                        </div>
                    </div>
                    <div class=" hidden lg:flex">
                        <div class="flex-col w-60">
                            <div class="h-auto border border-gray-200 rounded-xl p-6 right-sidebar">
                                <div class="font-semibold text-black text-sm mb-4">ON THIS PAGE</div>
                                <a href="#types" class="font-semibold text-body-600 text-sm mb-4 block">Types</a>
                                <a href="#algebra" class="font-semibold text-body-400 text-sm mb-4 block ml-8">Algebra</a>
                                <a href="" class="font-semibold text-body-400 text-sm block ml-8">Helper</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<?php
include 'footer.php';
?>