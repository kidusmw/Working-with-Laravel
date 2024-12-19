<aside class="bg-blue-600 text-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
    <a href="#" class="text-white flex items-center space-x-2 px-4">
        <i class="ri-dashboard-line text-2xl"></i>
        <span class="text-2xl font-extrabold">IMS</span>
    </a>
    <nav>
        <a href="{{ route('home') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
            <i class="ri-home-line mr-2"></i>Home
        </a>
        <a href="{{ route('products') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
            <i class="ri-home-line mr-2"></i>Products
        </a>
        <a href="{{ route('orders') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
            <i class="ri-box-3-line mr-2"></i>Order
        </a>
        <a href="{{ route('teams') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
            <i class="ri-box-3-line mr-2"></i>Teams
        </a>
        <!-- Add more navigation items -->
    </nav>
</aside>