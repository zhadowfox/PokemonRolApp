<div>
    <div class="flex flex-col items-center justify-center h-screen">
        <div class="flex flex-row justify-center">
            <div class="sprite-animation" id="sprite"></div>
        </div>
            @if (session('error'))
                <div class="text-white text-bold text-lg animate-bounce">
                    {{ session('error') }}
                </div>
            @endif
        <div class="flex lg:flex-row flex-col ">
            <button wire:click="showLoginFormAction"  class="rounded-md bg-white w-[150px] shadow-xl p-2 m-3 text-bold text-md font-semibold text-slate-800 transition-transform transform hover:scale-110 duration-300 ease-in-out focus:bg-cyan-600 focus:text-white ">Iniciar Sesion</button>
            <button wire:click="showRegisterFormAction" class="rounded-md bg-slate-600 w-[150px] shadow-xl p-2 m-3 text-bold text-md font-semibold text-white  transition-transform transform hover:scale-110 duration-300 ease-in-out focus:bg-cyan-600">Registrarse</button>
        </div>
        @if($showLoginForm)
            <!-- Login Form -->
        <div class="flex flex-col md:w-[30%] w-[100%] md:p-0 p-4 fade-in ">
            <form action="/loginuser" method="POST" autocomplete="off">
                @csrf
                <p class="text-center text-xl font-bold text-white my-4">Iniciar Sesion</p>
                <hr class="text-white my-4">
                <div class="mb-4">
                    <label class="block text-white text-md font-bold mb-2" for="email">
                        Email
                    </label>
                    <input onclick="activateInput()" class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="user" type="email" name="username">
                </div>
                <div class="mb-6">
                    <label class="block text-white text-md font-bold mb-2" for="password">
                        Password
                    </label>
                    <input onclick="closeEyes(event)" class="shadow appearance-none border rounded w-full py-2 px-3 text-black mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password">
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
<script>
function closeEyes(e){
    const input =  e.target
    const sprite = document.getElementById('sprite');
    input.addEventListener('input', () => {
                if (input.value.length>0) {
                    sprite.style.backgroundPosition= "-1600px 0px"
                }
    });
}
function activateInput(){
    const sprite = document.getElementById('sprite');
    const input = document.getElementById('user');
    const frameWidth = 100; // Ancho de cada frame
    const frameCount = 4;   // Número total de frames
    let currentFrame = 0; // Frame inicial
    let typedLetters = 0; // Contador de letras ingresadas
    // Evento para capturar teclas ingresadas
    input.addEventListener('input', () => {
                if (input.value.length <= 1){
                    sprite.style.backgroundPosition = "0px 0px"
                    currentFrame = 0
                    typedLetters = 0
                    return
                }
                if (input.value.length % 1 === 0) {
                    if(typedLetters>input.value.length && sprite.style.backgroundPosition !== "-100px 0px"){
                        currentFrame--;
                        typedLetters--
                        sprite.style.backgroundPosition = `-${currentFrame * frameWidth}px 0`;
                    }else if(typedLetters<input.value.length && sprite.style.backgroundPosition !== "-1400px 0px") {
                        currentFrame++;
                        typedLetters++
                        sprite.style.backgroundPosition = `-${currentFrame * frameWidth}px 0`;
                    }
                }
    });
    }
</script>
</div>
