@extends('layouts.cotizador')

@section('content')
<div style="min-height: 100vh;">
    <section class="-mt-10" style="position: relative;">
        <img src="{{ asset('img/bg-login.png') }}" alt="" style="width:100%; max-height:300px; object-fit: cover; filter: brightness(80%);">
    
        <div style="position: absolute; top: 100%; left: 50%; transform: translate(-50%, -50%); display: flex; flex-direction: column; align-items: center; z-index: 1;">
            <img src="{{ asset('img/anahuac-logo.png') }}" alt="" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover;">
            <h3 class="text-black font-bold text-2xl" style="white-space: nowrap; margin-top: 10px;">{{ $user->name }}</h3>
            <h3 class="text-gray-400 font-base text-xl" style="white-space: nowrap; margin-top: 4px;">{{ $user->campus }}</h3>

        </div>
    </section>
    
    <section class="px-10" style="margin-top: 160px;">
        @if(session('message'))
            <div class="bg-orange-100 border border-orange-400 text-orange-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('message') }}</span>
            </div>
        @endif

        <h2 class="font-semibold text-lg mb-4">Mi información</h2>
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
           
                <div>
                    <p>Nombre</p>
                    <input type="text" id="name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nombre" required value="{{$user->name}}" />
                </div>
                <div>
                    <p>Teléfono</p>
                    <input type="text" id="phone" class="bg-whiteg border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ingrese su número de teléfono" value="{{$user->phone}}" />
                </div>
                <div>
                    <p>Correo</p>
                    <input type="email" id="email" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ingrese su correo electrónico" required value="{{$user->email}}" readonly/>
                    <div class="w-full">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <p class="text-sm text-red-700 font-semibold">{{ $message }}</p>
                        </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <p>Área</p>
                    <select id="area" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="area" required>
                        <option value="APREU" {{ $user->area == 'APREU' ? 'selected' : '' }}>APREU</option>
                        <option value="Administrativo" {{ $user->area == 'Administrativo' ? 'selected' : '' }}>Administrativo</option>
                        <option value="RecursosHumanos" {{ $user->area == 'RecursosHumanos' ? 'selected' : '' }}>Recursos Humanos</option>
                        <option value="SorteoAnáhuac" {{ $user->area == 'SorteoAnáhuac' ? 'selected' : '' }}>Sorteo Anáhuac</option>
                        <option value="Compras" {{ $user->area == 'Compras' ? 'selected' : '' }}>Compras</option>
                    </select>
                </div>
                <div>
                    <p>Campus</p>
                    <select id="campus" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="campus" required>
                        <option value="UAMX" {{ $user->campus == 'UAMX' ? 'selected' : '' }}>UAMX (MÉXICO)</option>
                        <option value="IEST" {{ $user->campus == 'IEST' ? 'selected' : '' }}>IEST (TAMPICO)</option>
                        <option value="UAM" {{ $user->campus == 'UAM' ? 'selected' : '' }}>UAM (MÉRIDA-MAYAB)</option>
                        <option value="UAX" {{ $user->campus == 'UAX' ? 'selected' : '' }}>UAX (VERACRUZ)</option>
                        <option value="UAC" {{ $user->campus == 'UAC' ? 'selected' : '' }}>UAC (CANCÚN)</option>
                        <option value="UAO" {{ $user->campus == 'UAO' ? 'selected' : '' }}>UAO (OAXACA)</option>
                        <option value="UAP" {{ $user->campus == 'UAP' ? 'selected' : '' }}>UAP (PUEBLA)</option>
                        <option value="UAQ" {{ $user->campus == 'UAQ' ? 'selected' : '' }}>UAQ (QUERÉTARO)</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="text-white border border-primary bg-primary inline-block w-full rounded px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal transition duration-150 ease-in-out mt-10">
                ACTUALIZAR MI INFORMACIÓN
            </button>
        </form>
    </section>
</div>
    
    
@endsection
