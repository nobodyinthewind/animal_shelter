<header x-cloak x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
  <nav class="flex justify-between items-center p-6 mx-auto uppercase max-w-9xl lg:px-8" aria-label="Global">
    <div class="flex lg:hidden">
      <button type="button" class="inline-flex justify-center items-center p-2.5 -m-2.5 text-gray-700 rounded-md"
              @click="open = true">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
        </svg>
      </button>
    </div>
    <div class="flex flex-1">
      <div class="hidden lg:flex lg:gap-x-12" x-data="Components.popoverGroup()" x-init="init()">
        <div class="relative" x-data="Components.popover({ open: false, focus: false })" x-init="init()"
             @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup()">
          <button type="button"
                  class="flex gap-x-1 items-center text-sm font-semibold leading-6 text-gray-900 uppercase"
                  @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false"
                  :aria-expanded="open.toString()"> Adoption
            <svg class="flex-none w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                 aria-hidden="true">
              <path fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd"></path>
            </svg>
          </button>
          <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-200"
               x-transition:enter-start="opacity-0 translate-y-1"
               x-transition:enter-end="opacity-100 translate-y-0"
               x-transition:leave="transition ease-in duration-150"
               x-transition:leave-start="opacity-100 translate-y-0"
               x-transition:leave-end="opacity-0 translate-y-1"
               class="overflow-hidden absolute -left-8 top-full z-10 mt-3 w-screen max-w-md bg-white rounded-3xl ring-1 shadow-lg ring-gray-900/5"
               x-ref="panel" @click.away="open = false">
            <div class="p-4">
              <div class="flex relative gap-x-6 p-2 text-sm leading-6 rounded-lg group hover:bg-gray-50">
                <div
                  class="flex flex-none justify-center items-center mt-1 w-11 h-11 bg-gray-50 rounded-lg group-hover:bg-white">
                  <img src="{{ asset('build/assets/dog.gif')}}"
                       class="w-10 h-10 text-gray-600 group-hover:text-indigo-600" alt="Paw icon"/>
                </div>
                <div class="flex-auto">
                  <a href="#" class="block font-semibold text-gray-900">
                    Dogs
                    <span class="absolute inset-0"></span>
                  </a>
                  <p class="mt-1 text-gray-600 normal-case">We have the right dog for you :D</p>
                </div>
              </div>
              <div class="flex relative gap-x-6 p-2 text-sm leading-6 rounded-lg group hover:bg-gray-50">
                <div
                  class="flex flex-none justify-center items-center mt-1 w-11 h-11 bg-gray-50 rounded-lg group-hover:bg-white">
                  <img src="{{ asset('build/assets/cat.gif')}}"
                       class="w-10 h-10 text-gray-600 group-hover:text-indigo-600" alt="Cat icon"/>
                </div>
                <div class="flex-auto">
                  <a href="#" class="block font-semibold text-gray-900">
                    Cats
                    <span class="absolute inset-0"></span>
                  </a>
                  <p class="mt-1 text-gray-600 normal-case">Speak directly to our cats :) </p>
                </div>
              </div>
              <div class="flex relative gap-x-6 p-2 text-sm leading-6 rounded-lg group hover:bg-gray-50">
                <div
                  class="flex flex-none justify-center items-center mt-1 w-11 h-11 bg-gray-50 rounded-lg group-hover:bg-white">
                  <img src="{{ asset('build/assets/cow.gif')}}"
                       class="w-10 h-10 text-gray-600 group-hover:text-indigo-600" alt="Other animals icon"/>
                </div>
                <div class="flex-auto">
                  <a href="#" class="block font-semibold text-gray-900">
                    Other animals
                    <span class="absolute inset-0"></span>
                  </a>
                  <p class="mt-1 text-gray-600 normal-case">If you are neither a cat or dog person</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">News & Events</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">How to help</a>

        <div class="relative" x-data="Components.popover({ open: false, focus: false })" x-init="init()"
             @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
          <button type="button"
                  class="flex gap-x-1 items-center text-sm font-semibold leading-6 text-gray-900 uppercase"
                  @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false"
                  :aria-expanded="open.toString()">
            Pages
            <svg class="flex-none w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                 aria-hidden="true">
              <path fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd"></path>
            </svg>
          </button>


          <div x-show="open" x-transition:enter="transition ease-out duration-200"
               x-transition:enter-start="opacity-0 translate-y-1"
               x-transition:enter-end="opacity-100 translate-y-0"
               x-transition:leave="transition ease-in duration-150"
               x-transition:leave-start="opacity-100 translate-y-0"
               x-transition:leave-end="opacity-0 translate-y-1"
               class="absolute -left-8 top-full z-10 p-4 mt-3 w-96 bg-white rounded-3xl ring-1 shadow-lg ring-gray-900/5"
               x-ref="panel" @click.away="open = false">
            <div class="relative p-4 rounded-lg hover:bg-gray-50">
              <a href="#" class="block text-sm font-semibold leading-6 text-gray-900">
                About us
                <span class="absolute inset-0"></span>
              </a>
              <p class="mt-1 text-sm leading-6 text-gray-600 normal-case">Learn more about our company values and
                mission
                to empower others</p>
            </div>
            <div class="relative p-4 rounded-lg hover:bg-gray-50">
              <a href="#" class="block text-sm font-semibold leading-6 text-gray-900">
                Volunteer
                <span class="absolute inset-0"></span>
              </a>
              <p class="mt-1 text-sm leading-6 text-gray-600 normal-case">Looking for you next volunteer opportunity?
                See all of our open positions</p>
            </div>
            <div class="relative p-4 rounded-lg hover:bg-gray-50">
              <a href="#" class="block text-sm font-semibold leading-6 text-gray-900">
                Thanks Stories
                <span class="absolute inset-0"></span>
              </a>
              <p class="mt-1 text-sm leading-6 text-gray-600 normal-case">Get in touch with our dedicated support team
                or
                reach out on our community forums</p>
            </div>
            <div class="relative p-4 rounded-lg hover:bg-gray-50">
              <a href="#" class="block text-sm font-semibold leading-6 text-gray-900">
                Blog
                <span class="absolute inset-0"></span>
              </a>
              <p class="mt-1 text-sm leading-6 text-gray-600 normal-case">Read our latest announcements and get
                perspectives from our team</p>
            </div>
            <div class="grid grid-cols-2 bg-gray-50 divide-x divide-gray-900/5">
              <a href="#"
                 class="flex gap-x-2.5 justify-center items-center p-3 text-sm font-semibold leading-6 text-gray-900 normal-case hover:bg-gray-100">
                <svg class="flex-none w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                     aria-hidden="true">
                  <path fill-rule="evenodd"
                        d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.39-2.908a.75.75 0 01.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658z"
                        clip-rule="evenodd"></path>
                </svg>
                Youtube Channel
              </a>
              <a href="#"
                 class="flex gap-x-2.5 justify-center items-center p-3 text-sm font-semibold leading-6 text-gray-900 normal-case hover:bg-gray-100">
                <svg class="flex-none w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                     aria-hidden="true">
                  <path fill-rule="evenodd"
                        d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                        clip-rule="evenodd"></path>
                </svg>
                Contact us
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="#" class="p-1.5 -m-1.5">
      <span class="sr-only">Animal Shelter</span>
      <img class="w-12 h-12" src="{{ asset('build/assets/panda.gif')}}" alt="Animal Shelter Logo">
    </a>
    <div class="flex flex-1 justify-end">
      <a href="#" class="mr-4 text-sm font-semibold leading-6 text-gray-900 m">Donate</a>
      <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Shop</a>
    </div>
  </nav>
  <div class="lg:hidden" x-ref="dialog" x-show="open"
       aria-modal="true">
    <div class="fixed inset-0 z-10"></div>
    <div
      class="flex overflow-y-auto fixed inset-y-0 right-0 z-10 flex-col justify-between w-full bg-white sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
      @click.away="open = false">
      <div class="p-6">
        <div class="flex justify-between items-center">
          <a href="#" class="p-1.5 -m-1.5">
            <span class="sr-only">Animal Shelter</span>
            <img class="w-auto h-8"
                 src="{{ asset('build/assets/panda.gif') }}" alt="">
          </a>
          <button type="button" class="p-2.5 -m-2.5 text-gray-700 rounded-md" @click="open = false">
            <span class="sr-only">Close menu</span>
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                 aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
        <div class="flow-root mt-6">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="py-6 space-y-2">
              <a href="#"
                 class="flex gap-x-6 items-center p-3 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg group hover:bg-gray-50">
                <div
                  class="flex flex-none justify-center items-center w-11 h-11 bg-gray-50 rounded-lg group-hover:bg-white">
                  <svg class="w-6 h-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                       viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                       aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path>
                  </svg>
                </div>
                Analytics
              </a>
              <a href="#"
                 class="flex gap-x-6 items-center p-3 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg group hover:bg-gray-50">
                <div
                  class="flex flex-none justify-center items-center w-11 h-11 bg-gray-50 rounded-lg group-hover:bg-white">
                  <svg class="w-6 h-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                       viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                       aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59"></path>
                  </svg>
                </div>
                Engagement
              </a>
              <a href="#"
                 class="flex gap-x-6 items-center p-3 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg group hover:bg-gray-50">
                <div
                  class="flex flex-none justify-center items-center w-11 h-11 bg-gray-50 rounded-lg group-hover:bg-white">
                  <svg class="w-6 h-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                       viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                       aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33"></path>
                  </svg>
                </div>
                Security
              </a>
              <a href="#"
                 class="flex gap-x-6 items-center p-3 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg group hover:bg-gray-50">
                <div
                  class="flex flex-none justify-center items-center w-11 h-11 bg-gray-50 rounded-lg group-hover:bg-white">
                  <svg class="w-6 h-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                       viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                       aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z"></path>
                  </svg>
                </div>
                Integrations
              </a>
              <a href="#"
                 class="flex gap-x-6 items-center p-3 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg group hover:bg-gray-50">
                <div
                  class="flex flex-none justify-center items-center w-11 h-11 bg-gray-50 rounded-lg group-hover:bg-white">
                  <svg class="w-6 h-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                       viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                       aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"></path>
                  </svg>
                </div>
                Automations
              </a>

            </div>
            <div class="py-6 space-y-2">
              <a href="#"
                 class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Features</a>
              <a href="#"
                 class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Marketplace</a>

              <a href="#"
                 class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">About
                us</a>
              <a href="#"
                 class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Careers</a>
              <a href="#"
                 class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Support</a>
              <a href="#"
                 class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Blog</a>

            </div>
            <div class="py-6">
              <a href="#"
                 class="block px-3 py-2.5 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Log
                in</a>
            </div>
          </div>
        </div>
      </div>
      <div class="grid sticky bottom-0 grid-cols-2 text-center bg-gray-50 divide-x divide-gray-900/5">
        <a href="#" class="p-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-100">Youtube channel</a>
        <a href="#" class="p-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-100">Contact
          us</a>

      </div>
    </div>
  </div>
</header>
