    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Header -->
        <header class="bg-white shadow-sm z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex items-center justify-between">
                <div class="flex items-center">
                    <button id="sidebar-toggle" class="mr-4 text-gray-500 lg:hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <h1 class="text-2xl font-semibold text-gray-900"><?= $heading ?></h1>
                </div>
                <div class="flex items-center">
                    <button class="p-2 rounded-full text-gray-400 hover:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                    <div class="ml-3 relative">
                        <div>
                            <button id="avatar-button" class="flex items-center max-w-xs bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <img class="h-8 w-8 rounded-full" src="/placeholder.svg?height=32&width=32" alt="">
                                <span class="ml-3 text-sm font-medium text-gray-700">Jonas Maluco</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>