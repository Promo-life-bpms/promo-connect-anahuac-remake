<div class="fixed top-0 left-0 right-0 z-50 bg-white">

    <nav class="w-full flex flex-wrap md:flex-nowrap justify-between py-2 px-3 md:px-10 items-center">
        <div class="w-full md:w-4/12 flex justify-center md:justify-start">
            <a href="{{ route('index') }}">
                <img src="{{asset('img/Astore.png')}}"
                    style="object-fit: cover; width:180px;"
                    alt="logo" class="w-24 p-2 ml-0 md:ml-12">
            </a>
        </div>
       
        <div class="w-full md:w-8/12 mt-4 md:mt-0">
            <div class="flex flex-wrap md:flex-nowrap justify-around">

                @if (auth()->user())
                    <div class="text-black mt-4 px-4">
                        <div class="flex">
                            <button id="dropdownHoverButton" data-dropdown-toggle="dropdown"
                                class="text-primary hover:text-primary focus:ring-4 focus:outline-none p-1 font-medium focus:rounded text-lg text-center inline-flex items-center"
                                type="button">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#FF5900" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                                <p class="ml-2 text-sm text-orange-500 font-semibold">{{ (explode(' ', auth()->user()->name)[0]) }}</p>

                            </button>
                            
                        </div>
                        
                    </div>
                @endif
                
            
                @role('buyers-manager')
                
                <a href="{{ route('administrador') }}"
                    class="text-sm text-orange-500 font-semibold mt-5 px-4">Administrador</a>
            
                @endrole
                @role('seller')
                    {{-- <li>
                        <a href="{{ route('seller.content') }}"
                            class="w-full text-left text-base block px-4 py-2 text-white hover:text-[#0F0E24] hover:bg-white">Contenido</a>
                    </li> --}}
                @endrole
                @role('admin')
                    
                        <a href="{{ route('admin.dashboard') }}"
                            class="text-lg text-orange-500 font-semibold mt-5 px-4">Administrador</a>
                
                @endrole
                @role(['buyers-manager', 'buyer'])
                
                        <a href="{{ route('misCotizaciones') }}"
                            class="text-sm text-orange-500 font-semibold mt-5 px-4">
                            Cotizaciones</a>
                    
                        <a href="{{ route('compras') }}"
                            class="text-sm text-orange-500 font-semibold mt-5 px-4">
                            Compras</a>
                    
                        <a href="{{ route('muestras') }}"
                            class="text-sm text-orange-500 font-semibold mt-5 px-4">
                            Muestras</a>
                
                @endrole

                @role('seller')
                
                
                        <a href="{{ route('seller.content') }}"
                        class="text-sm text-orange-500 font-semibold mt-5 px-4">Banners</a>
                    
                        <a href="{{ route('seller.compradores') }}"
                        class="text-sm text-orange-500 font-semibold mt-5 px-4">Compradores</a>
                    
                        <a href="{{ route('seller.pedidos') }}"
                        class="text-sm text-orange-500 font-semibold mt-5 px-4">Compras</a>
                
                        <a href="{{ route('seller.muestras') }}"
                        class="text-sm text-orange-500 font-semibold mt-5 px-4">Muestras</a>
                    
                
                @endrole
                
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                    class="text-sm text-orange-500 font-semibold mt-3">Cerrar
                    Sesion</button>

                <div class="flex">
                    @role(['buyers-manager', 'buyer'])
                        <a class="text-primary hover:text-primary mt-4" href="{{ route('catalogo') }}">
                            <div class="-mt-1">
                                <svg width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">

                                    <defs>
                                    
                                    <style>.cls-1{fill:none;stroke:#020202;stroke-miterlimit:10;stroke-width:1.91px;}</style>
                                    
                                    </defs>
                                    
                                    <g id="handbag">
                                    
                                    <path class="cls-1" d="M3.41,7.23H20.59a0,0,0,0,1,0,0v12a3.23,3.23,0,0,1-3.23,3.23H6.64a3.23,3.23,0,0,1-3.23-3.23v-12A0,0,0,0,1,3.41,7.23Z"/>
                                    
                                    <path class="cls-1" d="M8.18,10.09V5.32A3.82,3.82,0,0,1,12,1.5h0a3.82,3.82,0,0,1,3.82,3.82v4.77"/>
                                    
                                    </g>
                                    
                                    </svg>
                            </div>
                        </a>
                        <div class="mt-1" style="width: 2rem">
                            @livewire('count-cart-quote')
                        </div>
                    @endrole
                    @role('seller')
                        <div class=" mt-8  ml-2" style="width: 2rem">
                            @livewire('count-messages-support')
                        </div>
                    @endrole
                </div>
            </div>
            
        </div>
       
    </nav>

    <div class="w-full bg-[#FF5900] h-auto md:h-16 py-4 md:py-0">
        <div class="flex flex-wrap md:flex-nowrap justify-between px-5 pt-5">
            <div class="w-full md:w-2/3">
                <div class="flex flex-wrap md:flex-nowrap items-center justify-between">
                    <a href="{{ route('catalogo') }}" class="w-full md:w-auto mb-2 md:mb-0">
                        <p class="text-white font-bold text-sm md:text-base text-center md:text-left">CATÁLOGO</p>
                    </a>
                    <a href="{{ route('catalogo') }}" class="w-full md:w-auto mb-2 md:mb-0">
                        <p class="text-white font-bold text-sm md:text-base text-center md:text-left">RECIÉN LLEGADO</p>
                    </a>
                    <a href="{{ route('catalogo') }}" class="w-full md:w-auto">
                        <p class="text-white font-bold text-sm md:text-base text-center md:text-left">MEJOR CALIFICADO</p>
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/3 mt-2 md:mt-0">
                <p class="text-white font-bold text-sm md:text-base text-center md:text-right">COMPRA <b class="text-black">$1,500</b> Y OBTÉN EL ENVÍO GRATIS</p>
            </div>
        </div>
    </div>
       

</div>
