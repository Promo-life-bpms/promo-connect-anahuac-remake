@extends('layouts.guest')

@section('content')
   <style>
        body {
            background-image: url('{{ asset('img/bg-login.png') }}') !important;
            background-size: cover; /* Otra propiedad opcional para ajustar el tamaño de la imagen */
        }
   </style>

    <div class="flex items-center justify-center h-screen">
        <div style="width:100%;">
            

            <div class="container flex justify-center items-center">
                <div ></div>
                <div class="flex bg-orange-500 bg-opacity-50" style="width:1000px;">
                     <div class="flex-1 w-1/2 ml-0 sm:ml-10" >
                       
                            <div class="max-w-full p-10 rounded  shadow-2xl bg-white -mt-10 -mb-10" >
                                <div class="separato"></div>
                                <div class="flex items-center justify-center">
                                    <h1 class="text-2xl font-bold text-primary">
                                        REGISTRO
                                    </h1>
                                </div>
                    
                                <form class="w-full p-4" method="POST" action="{{ route('storeUser') }}">
                                    @csrf
                                    
                                    <label class="block text-gray-500 font-bold text-left mb-1 md:mb-0 pr-4 pb-2" for="inline-full-name">
                                        Nombre(s) y apellidos
                                    </label>
                                    
                                    <div class="w-full">
                                        <input type="text" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:bg-white focus:border-orange-500" name="name" value="{{ old('name') }}" placeholder="Ingrese su nombre completo" required autocomplete="email" autofocus>
                                        <p id="email-error-message" class="text-sm text-red-700 font-semibold hidden">El correo electrónico debe ser institucional de la Universidad Anáhuac.</p>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <p class="text-sm text-red-700 font-semibold">{{ $message }}</p>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="separador mt-4"></div>
                                    <label class="block text-gray-500 font-bold text-left mb-1 md:mb-0 pr-4 pb-2" for="inline-full-name">
                                        Correo institucional
                                    </label>
                                    
                                    <div class="w-full">
                                        <input id="email" type="email" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:bg-white focus:border-orange-500" name="email" value="{{ old('email') }}" placeholder="Ingrese su correo institucional" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <p class="text-sm text-red-700 font-semibold">{{ $message }}</p>
                                        </span>
                                        @enderror
                                    </div>



                                    <div class="separador mt-4"></div>
                                    <label class="block pb-2 text-gray-500 font-bold text-left mb-1 md:mb-0 pr-4" for="inline-password">
                                        Selecciona tu área
                                    </label>
                                   
                                    <div class="w-full mb-4">
                                        <select id="area" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:bg-white focus:border-orange-500" name="area" required>
                                            <option value="APREU">APREU</option>
                                            <option value="Administrativo">Administrativo</option>
                                            <option value="RecursosHumanos">Recursos Humanos</option>
                                            <option value="SorteoAnáhuac">Sorteo Anáhuac</option>
                                            <option value="Compras">Compras</option>
                                        </select>
                                    </div>

                                    <div class="separador mt-4"></div>
                                    <label class="block pb-2 text-gray-500 font-bold text-left mb-1 md:mb-0 pr-4" for="inline-password">
                                        Selecciona tu campus
                                    </label>
                                   
                                    <div class="w-full mb-4">
                                        <select id="campus" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:bg-white focus:border-orange-500" name="campus" required>
                                            <option value="UAMX"> UAMX (MÉXICO)</option>
                                            <option value="IEST">IEST (TAMPICO)</option>
                                            <option value="UAM"> UAM (MÉRIDA-MAYAB)</option>
                                            <option value="UAX">UAX (VERACRUZ)</option>
                                            <option value="UAC"> UAC (CANCÚN)</option>
                                            <option value="UAO">UAO (OAXACA)</option>
                                            <option value="UAP">UAP (PUEBLA)</option>
                                            <option value="UAQ">UAQ (QUERÉTARO)</option>                                            
                                        </select>                                      
                                      
                                    </div>

                                    <br>
                                    <div class="mx-4 mt-4">
                                   
                                </div>

                                <button type="submit" class="text-white border border-primary bg-primary inline-block w-full rounded px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal transition duration-150 ease-in-out">
                                        REGISTRARME
                                    </button>
                                </form>
                                
                            </div>
    
                    </div>
                    <div class="hidden sm:flex sm:flex-1 sm:w-1/2 justify-end">
                        <div class="flex items-center mr-2 sm:ml-10">
                            <img src="{{ asset('img/anahuac-logo.png') }}" alt="logo" style="width: 240px; height: 240px; margin-right:13vh;">
                        </div>
                    </div>
                </div>  

            </div>

        </div>
        
    </div>

    @php
    $anahuacDomain = '@anahuac';
@endphp

@push('scripts')
    <script>
  
        function validateAnahuacEmail(email) {
            return email.toLowerCase().endsWith('@anahuac.mx');
        }
        
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('email').addEventListener('blur', function() {
                var emailInput = this.value.trim();
                var isValid = validateAnahuacEmail(emailInput);
                var errorMessage = document.getElementById('email-error-message');

                if (!isValid) {
                    this.classList.add('border-red-500');
                    errorMessage.classList.remove('hidden');
                } else {
                    this.classList.remove('border-red-500');
                    errorMessage.classList.add('hidden');
                }
            });
        });

    </script>
@endpush
   
@endsection
