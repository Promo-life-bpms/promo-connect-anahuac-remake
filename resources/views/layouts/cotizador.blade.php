<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico')}}">

    <title>
        @hasSection('title')
            @yield('title') |
        @endif {{ config('Anahuac', 'Anahuac') }}
    </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet"> --}}
    @livewireStyles
</head>

<body class="h-screen" style="margin-top:70px;">
    <div class="min-h-full flex flex-col justify-between" style="width: 100%; !important">  
        <div class="w-full bg-white">
            @include('layouts.components.navbar')
        </div>
        <div class="w-full mt-0 md:mt-[102px]">
            @yield('content')
        </div>
        <div class="py-5 w-full bg-white" >
            
            <div class="w-full grid grid-cols-1 sm:grid-cols-3 gap-4 justify-items-center items-center text-primary mt-4">

                <div class="w-full">
                    <div class="mx-4 sm:mx-auto">
                        <p class="ml-2 sm:ml-4 mr-2 sm:mr-4 text-base sm:text-xl font-bold">CONTACTO:</p>
                        <p class="ml-2 sm:ml-4 mr-2 sm:mr-4 text-sm sm:text-lg">Teléfono: 55 62 69 00 17</p>
                        <p class="ml-2 sm:ml-4 mr-2 sm:mr-4 text-sm sm:text-lg">Correo: ventas@promolife.com.mx</p>
                        <p class="ml-2 mt-4 sm:ml-4 mr-2 sm:mr-4 text-base sm:text-xl font-bold">Redes Sociales:</p>

                    </div>
                    <div class="flex ml-4 ">
                        <a href="https://www.facebook.com/share/JdyjheHUxRn8YySp/?mibextid=LQQJ4d" target="__blank">
                            <svg fill="#FF5900" class="w-10 h-10 sm:w-12 sm:h-12"viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z"/>
                            </svg>
                        </a>
                        
                        <a href="https://www.instagram.com/redanahuac?igsh=cDQxeG1hMmtjeXV4" class="ml-2" target="__blank">
                            <svg class="w-10 h-10 sm:w-12 sm:h-12" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="m0 0h32v32h-32z"/>
                                    <path d="m17.0830929.03277248c8.1190907 0 14.7619831 6.64289236 14.7619831 14.76198302v2.3064326c0 8.1190906-6.6429288 14.761983-14.7619831 14.761983h-2.3064325c-8.11909069 0-14.76198306-6.6428924-14.76198306-14.761983v-2.3064326c0-8.11909066 6.64289237-14.76198302 14.76198306-14.76198302zm-.8630324 8.0002641-.2053832-.0002641c-1.7102378 0-3.4204757.05652851-3.4204757.05652851-2.4979736 0-4.52299562 2.02501761-4.52299562 4.52298561 0 0-.05191606 1.4685349-.05624239 3.0447858l-.00028625.2060969c0 1.7648596.05652864 3.590089.05652864 3.5900891 0 2.497968 2.02502202 4.5229856 4.52299562 4.5229856 0 0 1.5990132.0565285 3.2508899.0565285 1.7648634 0 3.6466255-.0565285 3.6466255-.0565285 2.4979736 0 4.4664317-1.9684539 4.4664317-4.4664219 0 0 .0565286-1.8046833.0565286-3.5335605l-.0010281-.4057303c-.0076601-1.5511586-.0555357-3.0148084-.0555357-3.0148084 0-2.4979681-1.9684582-4.46642191-4.4664317-4.46642191 0 0-1.6282521-.05209668-3.2716213-.05626441zm-.2053831 1.43969747c1.4024317 0 3.2005639.04637875 3.2005638.04637875 2.0483524 0 3.3130573 1.2647021 3.3130573 3.31305 0 0 .0463789 1.7674322.0463789 3.1541781 0 1.4176885-.0463789 3.2469355-.0463789 3.2469355 0 2.048348-1.2647049 3.31305-3.3130573 3.31305 0 0-1.5901757.0389711-2.9699093.0454662l-.3697206.0009126c-1.3545375 0-3.0049692-.0463788-3.0049692-.0463788-2.0483172 0-3.36958592-1.321301-3.36958592-3.3695785 0 0-.04637885-1.8359078-.04637885-3.2830941 0-1.3545344.04637885-3.061491.04637885-3.061491 0-2.0483479 1.32130402-3.31305 3.36958592-3.31305 0 0 1.7416035-.04637875 3.1440353-.04637875zm-.0000353 2.46195055c-2.2632951 0-4.0980441 1.8347448-4.0980441 4.098035s1.8347489 4.098035 4.0980441 4.098035 4.0980441-1.8347448 4.0980441-4.098035c0-2.2632901-1.8347489-4.098035-4.0980441-4.098035zm0 1.4313625c1.4727754 0 2.6666784 1.1939004 2.6666784 2.6666725s-1.193903 2.6666726-2.6666784 2.6666726c-1.4727401 0-2.6666784-1.1939005-2.6666784-2.6666726s1.1939031-2.6666725 2.6666784-2.6666725zm4.2941322-2.5685935c-.5468547 0-.9902027.4455321-.9902027.9950991 0 .5495671.443348.9950639.9902027.9950639.5468546 0 .9901674-.4454968.9901674-.9950639 0-.5496023-.4433128-.9950991-.9901674-.9950991z" fill="#FF5900" fill-rule="nonzero"/>
                                </g>
                            </svg>
                        </a>
                       
                        <a href="https://x.com/redanahuac?s=11&t=cW5OMwBFHs0GWrKiGBxmpQ" class="ml-3" target="__blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" class="w-10 h-10 sm:w-12 sm:h-12">
                                <path d="M67 .55C40.648 3.3 17.102 20.649 6.398 45.2-.5 61.05-1.648 79.3 3.25 96.101c6.05 20.949 21.7 38.648 41.95 47.5 15.85 6.898 34.1 8.046 50.902 3.148 25.148-7.25 44.949-27.898 51.449-53.55C157.699 53 132.8 11.897 92.5 2.3 83.648 .2 75.852 -.351 67 .55ZM68 47c6.398 8.5 11.8 15.5 12 15.5.2 0 6.852-7 14.7-15.5l14.35-15.5h8.15l-1.75 1.852c-1 1.046-7.5 8.097-14.45 15.648-6.95 7.55-13.75 14.898-15.102 16.25L83.5 67.8l18.75 24.95c10.3 13.75 18.75 25.148 18.75 25.352 0 .25-6.148.398-13.602.398l-13.648-.05-12.7-17C72.3 89.7 68.2 84.647 67.8 84.95c-.3.25-7.402 7.902-15.8 17L36.75 118.5h-3.852c-2.148 0-3.898-.102-3.898-.25 0-.148 7.95-8.852 17.648-19.3 9.653-10.45 17.653-19.2 17.75-19.348C64.45 79.398 56.5 68.55 46.75 55.5 37 42.5 29 31.75 29 31.648c0-.097 6.148-.148 13.7-.148h13.698Zm0 0" style="stroke:none;fill-rule:nonzero;fill:#FF5900;fill-opacity:1"/>
                                <path d="M41.352 38.2c.199.35 12.796 17.25 27.898 37.448l27.5 36.801 6.148.051c3.801 0 6.102-.2 6-.5-.046-.25-12.597-17.148-27.796-37.5l-27.704-37H47.2c-5.148 0-6.199.102-5.847.7Zm0 0" style="stroke:none;fill-rule:nonzero;fill:#FF5900;fill-opacity:1"/>
                              </svg>                    
                        </a>

                        <div class="mb-10"></div>
                        
                    </div>

                    <div class="absolute flex h-1 bg-primary ml-4 mr-4 mt-4 overflow-hidden" style="width: 98%;"></div>
                   

                </div>
                <div>
                    <img src="{{ asset('img/RUA.png') }}" alt="" style="width: 260px; margin-top:20px;" >
                </div>
                <div class="flex flex-col items-end">
                    <a href="#" class="ml-4 mr-8" onclick="scrollToFirstSection()">
                        <svg width="50px" height="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="up-circle">
                            <path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm3.71,11.71a1,1,0,0,1-1.42,0L12,11.41l-2.29,2.3a1,1,0,0,1-1.42-1.42l3-3a1,1,0,0,1,1.42,0l3,3A1,1,0,0,1,15.71,13.71Z" style="fill:#FF5900"></path>
                        </svg>
                    </a>
                    
                    <script>
                        function scrollToFirstSection() {
                            var firstSection = document.querySelector('body > *');
                    
                            if (firstSection) {
                                firstSection.scrollIntoView({ behavior: 'smooth' });
                            }
                        }
                    </script>
                    <img src="{{asset('img/anahuac.png') }}" alt="logo" style="height:60px;" class="ml-4 mr-8">
                    <p class="ml-4 mr-8 mt-2">Politicas de privacidad / Garantía PromoLife</p>
                    <p class="text-black ml-4 mr-8 mt-8 ">© Copyright 2024 Promo Life ®</p>
                    <div class="flex ml-4 mr-4 mt-10">
                        <p  class="text-black mr-2">Formas de pago</p> 
                        <img src="{{asset('img/pago1.png') }}" alt="tarjeta1" style="width: 30px; height:20px;" class="mt-2 ml-1">
                        <img src="{{asset('img/pago2.png') }}" alt="tarjeta2" style="width: 30px; height:20px;" class="mt-2 ml-1">
                        <img src="{{asset('img/pago3.png') }}" alt="tarjeta3" style="width: 30px; height:20px;" class="mt-2 ml-1">
                        <img src="{{asset('img/pago4.png') }}" alt="tarjeta4" style="width: 30px; height:20px;" class="mt-2 ml-1">
                    </div>
                </div>
            </div>
            
        </div>
        @role(['buyers-manager', 'buyer'])
            @livewire('soporte-component')
        @endrole
    </div>
    @livewireScripts
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>

    <div class="max-w-7xl wp-boton" style="z-index:50">
        <a id="whatsapp-link" href="https://api.whatsapp.com/send?phone=5559530592" class="fixed bottom-4 right-4 p-4 bg-green-500 text-white rounded-full shadow-lg"  style=" z-index:30; @media (max-width: 768px) { margin: 0 120px 0px 0; z-index:30; }">
            <svg width="40px" height="40px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 31C23.732 31 30 24.732 30 17C30 9.26801 23.732 3 16 3C8.26801 3 2 9.26801 2 17C2 19.5109 2.661 21.8674 3.81847 23.905L2 31L9.31486 29.3038C11.3014 30.3854 13.5789 31 16 31ZM16 28.8462C22.5425 28.8462 27.8462 23.5425 27.8462 17C27.8462 10.4576 22.5425 5.15385 16 5.15385C9.45755 5.15385 4.15385 10.4576 4.15385 17C4.15385 19.5261 4.9445 21.8675 6.29184 23.7902L5.23077 27.7692L9.27993 26.7569C11.1894 28.0746 13.5046 28.8462 16 28.8462Z" fill="#BFC8D0"/>
                <path d="M28 16C28 22.6274 22.6274 28 16 28C13.4722 28 11.1269 27.2184 9.19266 25.8837L5.09091 26.9091L6.16576 22.8784C4.80092 20.9307 4 18.5589 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16Z" fill="url(#paint0_linear_87_7264)"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 30C23.732 30 30 23.732 30 16C30 8.26801 23.732 2 16 2C8.26801 2 2 8.26801 2 16C2 18.5109 2.661 20.8674 3.81847 22.905L2 30L9.31486 28.3038C11.3014 29.3854 13.5789 30 16 30ZM16 27.8462C22.5425 27.8462 27.8462 22.5425 27.8462 16C27.8462 9.45755 22.5425 4.15385 16 4.15385C9.45755 4.15385 4.15385 9.45755 4.15385 16C4.15385 18.5261 4.9445 20.8675 6.29184 22.7902L5.23077 26.7692L9.27993 25.7569C11.1894 27.0746 13.5046 27.8462 16 27.8462Z" fill="white"/>
                <path d="M12.5 9.49989C12.1672 8.83131 11.6565 8.8905 11.1407 8.8905C10.2188 8.8905 8.78125 9.99478 8.78125 12.05C8.78125 13.7343 9.52345 15.578 12.0244 18.3361C14.438 20.9979 17.6094 22.3748 20.2422 22.3279C22.875 22.2811 23.4167 20.0154 23.4167 19.2503C23.4167 18.9112 23.2062 18.742 23.0613 18.696C22.1641 18.2654 20.5093 17.4631 20.1328 17.3124C19.7563 17.1617 19.5597 17.3656 19.4375 17.4765C19.0961 17.8018 18.4193 18.7608 18.1875 18.9765C17.9558 19.1922 17.6103 19.083 17.4665 19.0015C16.9374 18.7892 15.5029 18.1511 14.3595 17.0426C12.9453 15.6718 12.8623 15.2001 12.5959 14.7803C12.3828 14.4444 12.5392 14.2384 12.6172 14.1483C12.9219 13.7968 13.3426 13.254 13.5313 12.9843C13.7199 12.7145 13.5702 12.305 13.4803 12.05C13.0938 10.953 12.7663 10.0347 12.5 9.49989Z" fill="white"/>
                <defs>
                <linearGradient id="paint0_linear_87_7264" x1="26.5" y1="7" x2="4" y2="28" gradientUnits="userSpaceOnUse">
                <stop stop-color="#5BD066"/>
                <stop offset="1" stop-color="#27B43E"/>
                </linearGradient>
                </defs>
            </svg>
        </a>
    </div>
</body>

</html>
