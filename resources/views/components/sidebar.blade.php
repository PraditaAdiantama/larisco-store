<header style="background-color: #F2FAF1;" class="h-screen w-72 shadow">
    <div class="px-8 pt-10">
        <h3 class="font-bold text-center text-2xl">Pradita</h3>
        <nav class="mt-8">
            <ul class="font-bold flex flex-col gap-5">
                <li>
                    <a href="{{ route('home') }}" class="flex items-center gap-4">
                        <div class="p-3 rounded-lg {{ $title == 'home' ? 'bg-green' : 'bg-white' }} shadow">
                            <img src="{{ asset('/img/home.svg') }}" alt=""
                                class="{{ $title == 'home' ? 'filter-white' : '' }}">
                        </div>
                        <span class="{{ $title == 'home' ? 'text-green' : '' }}">Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('carts.index') }}" class="flex items-center gap-4">
                        <div class="p-3 rounded-lg {{ $title == 'cart' ? 'bg-green' : 'bg-white' }} shadow">
                            <img src="{{ asset('/img/cart.svg') }}" alt=""
                                class="{{ $title == 'cart' ? 'filter-white' : '' }}">
                        </div>
                        <span class="{{ $title == 'cart' ? 'text-green' : '' }}">Keranjang</span>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center gap-4">
                        <div class="p-3 rounded-lg {{ $title == 'settings' ? 'bg-green' : 'bg-white' }} shadow">
                            <img src="{{ asset('/img/gear.svg') }}" alt=""
                                class="{{ $title == 'settings' ? 'filter-white' : '' }}">
                        </div>
                        <span class="{{ $title == 'settings' ? 'text-green' : '' }}">Pengaturan</span>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center gap-4 mt-5">
                        <div class="p-3 rounded-lg {{ $title == 'log-out' ? 'bg-green' : 'bg-white' }} shadow">
                            <img src="{{ asset('/img/exit.svg') }}" alt=""
                                class="{{ $title == 'log-out' ? 'filter-white' : '' }}">
                        </div>
                        <span class="{{ $title == 'log-out' ? 'text-green' : '' }}">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
