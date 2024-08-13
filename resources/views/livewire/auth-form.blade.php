<div>
    <div class="flex flex-col items-center justify-center h-screen">
        <div class="flex flex-row justify-center">
        <img src="{{ asset('storage/images/pokemon-logo.png') }}" alt="" class="md:w-[30%] w-50">
        </div>
        <div class="flex lg:flex-row flex-col ">
            <button wire:click="showLoginFormAction"  class="rounded-md bg-white w-[150px] shadow-xl p-2 m-3 text-bold text-md font-semibold text-slate-800 transition-transform transform hover:scale-110 duration-300 ease-in-out focus:bg-cyan-600 focus:text-white ">Iniciar Sesion</button>
            <button wire:click="showRegisterFormAction" class="rounded-md bg-slate-600 w-[150px] shadow-xl p-2 m-3 text-bold text-md font-semibold text-white  transition-transform transform hover:scale-110 duration-300 ease-in-out focus:bg-cyan-600">Registrarse</button>
        </div>
        @if($showLoginForm)
            <!-- Login Form -->
        <div class="flex flex-col md:w-[30%] w-[100%] md:p-0 p-4 fade-in ">
            <form action="/loginuser" method="POST">
                @csrf
                <p class="text-center text-xl font-bold text-white my-4">Iniciar Sesion</p>
                <hr class="text-white my-4">
                <div class="mb-4">
                    <label class="block text-white text-md font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="user" type="email" name="username">
                </div>
                <div class="mb-6">
                    <label class="block text-white text-md font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-black mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password">
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit" class="bg-cyan-600 hover:bg-cyan-900  text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-lg transition-transform transform hover:scale-110 duration-300 ease-in-out" type="button">
                        Iniciar Sesión
                    </button>
                </div>
            </form>
                </div>
        @endif
        @if($showRegisterForm)
            <!-- Register Form -->
            <div class="flex flex-col md:w-[30%] w-[100%] md:p-0 p-4 fade-in ">
            <form action="/registeruser" method="POST">
                @csrf
                <p class="text-center text-xl font-bold text-white my-4">Registrarse</p>
                <hr class="text-white my-4">
                <div class="mb-4">
                    <label class="block text-white text-md font-bold mb-2" for="name">
                        Nombre
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="nombre" placeholder="Nombre">
                </div>
                <div class="mb-4">
                    <label class="block text-white text-md font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="username"  placeholder="Email">
                </div>
                <div class="mb-6">
                    <label class="block text-white text-md font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-black mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password"  type="password" placeholder="Password">
                </div>
                <div class="flex items-center justify-center ">
                    <button type="submit" class="bg-cyan-600 hover:bg-cyan-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-lg transition-transform transform hover:scale-110 duration-300 ease-in-out"  type="button">
                        Registrarse
                    </button>
                </div>
            </form>
            </div>
        @endif
</div>
</div>
