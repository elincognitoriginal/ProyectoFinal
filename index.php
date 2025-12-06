<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tailwind</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php
session_start();
?>

<body class="bg-gray-900 text-purple-800">

  <header class="bg-gray-800 shadow-md py-4 fixed top-0 left-0 w-full z-50">
  <div class="container mx-auto flex items-center justify-between px-6">

    <!-- Logo, nombre y slogan -->
    <div class="flex items-center space-x-4">
      <img src="imgs/logooo.png" alt="Logo" class="w-14 h-14 rounded-full shadow-md">
      <div>
        <h1 class="text-2xl font-bold text-cyan-100">SantiCorp</h1>
        <p class="text-sm text-gray-500">Los juegos son tan baratos que parecen regalados</p>
      </div>
    </div>

    <!-- Botones de login / Registro o usuario -->
    <div class="flex items-center space-x-4">

      <?php if (!isset($_SESSION["usuario_id"])): ?>
        
        <!-- Si no hay sesión -->
        <a href="login.html" 
           class="bg-blue-500 px-4 py-2 rounded-xl text-white hover:bg-blue-600 transition">
           Iniciar sesión
        </a>

        <a href="registro.html" 
           class="bg-green-500 px-4 py-2 rounded-xl text-white hover:bg-green-600 transition">
           Registrarse
        </a>

      <?php else: ?>

        <!-- Si hay sesión -->
        <span class="text-gray-300">
          Hola, <b><?php echo $_SESSION["usuario_nombre"]; ?></b>
        </span>

        <a href="cerrarsesion.php" 
           class="bg-red-500 px-4 py-2 rounded-xl text-white hover:bg-red-600 transition">
           Cerrar sesión
        </a>

      <?php endif; ?>

    </div>

  </div>
</header>


  <!-- Contenido -->

  <main class="container mx-auto px-6 mt-32">

    <!-- Imagen -->

    <div class="w-full mb-10">
      <img src="mincimg.jpg" alt="Imagen principal" class="w-full rounded-2xl shadow-lg">
    </div>

    <!-- Contenedores -->

    <section class="grid md:grid-cols-3 gap-8 mb-12">

      <!-- Minecraft -->

      <div class="bg-gray-800 p-6 rounded-xl shadow hover:shadow-xl hover:scale-105 transition transform duration-300">
        <h3 class="text-green-700 text-lg font-semibold mb-2">Minecraft</h3>
        <p class="text-white">Minecraft es un videojuego de mundo abierto de tipo sandbox
            donde los jugadores pueden construir, explorar y modificar un mundo generado 
            dinámicamente a partir de bloques.</p><br>
            <img src="minecraft.jpg"><br>
            <h2 class="text-white">$400</h2>
            <br>
            <button onclick="window.location.href='paginapago.html?nombre=Minecraft&precio=400&img=minecraft.jpg'"
            class="bg-green-500 text-white rounded-xl px-6 py-3 text-lg font-semibold hover:bg-green-600 transition">
            Comprar
            </button>

      </div>

      <!-- Terraria -->

      <div class="bg-gray-800 p-6 rounded-xl shadow hover:shadow-xl hover:scale-105 transition transform duration-300">
        <h3 class="text-green-500 text-lg font-semibold mb-2">Terraria</h3>
        <p class="text-white">Terraria es un videojuego de acción, aventura y sandbox en 2D 
            donde los jugadores exploran un mundo generado aleatoriamente, recogen recursos, 
            construyen refugios, y combaten enemigos y jefes.</p><br>
            <img src="terraria.jpg"><br>
            <h2 class="text-white">$80</h2>
            <br>
            <button onclick="window.location.href='paginapago.html?nombre=Terraria&precio=80&img=terraria.jpg'"
            class="bg-green-500 text-white rounded-xl px-6 py-3 text-lg font-semibold hover:bg-green-600 transition">
            Comprar
            </button>
      </div>

      <!-- Roblox -->

      <div class="bg-gray-800 p-6 rounded-xl shadow hover:shadow-xl hover:scale-105 transition transform duration-300">
        <h3 class="text-white text-lg font-semibold mb-2">Roblox</h3>
        <p class="text-white">Roblox es una plataforma en línea y un sistema de creación de 
            juegos que permite a los usuarios crear y jugar experiencias 3D creadas por otros usuarios.</p><br>
            <img src="roblox.jpg"><br>
            <h2 class="text-white">Gratis</h2>
            <br>
            <button onclick="window.location.href='paginapago.html?nombre=Roblox&precio=0&img=roblox.jpg'"
            class="bg-green-500 text-white rounded-xl px-6 py-3 text-lg font-semibold hover:bg-green-600 transition">
            Comprar
            </button>
      </div>

      <!-- Call of duty black ops 3 -->

      <div class="bg-gray-800 p-6 rounded-xl shadow hover:shadow-xl hover:scale-105 transition transform duration-300">
        <h3 class="text-orange-500 text-lg font-semibold mb-2">Call Of Duty Black Ops 3</h3>
        <p class="text-white">Call of Duty: Black Ops 3 (BO3) trata de un futuro distópico 
          (2065) donde la biotecnología y la cibertecnología han creado supersoldados con implantes, 
          explorando cómo la tecnología desdibuja la línea entre humano y máquina.</p><br>
            <img src="codbo3.jpg"><br>
            <h2 class="text-white">$800</h2>
            <br>
            <button onclick="window.location.href='paginapago.html?nombre=Call Of Duty Black Ops 3&precio=800&img=codbo3.jpg'"
            class="bg-green-500 text-white rounded-xl px-6 py-3 text-lg font-semibold hover:bg-green-600 transition">
            Comprar
            </button>
      </div>
      
      <!-- Halo 4 -->

      <div class="bg-gray-800 p-6 rounded-xl shadow hover:shadow-xl hover:scale-105 transition transform duration-300">
        <h3 class="text-blue-500 text-lg font-semibold mb-2">Halo 4</h3>
        <p class="text-white">Halo 4 trata sobre el regreso del Jefe Maestro tras los 
          eventos de Halo 3, despertando junto a su IA Cortana en la nave dañada Forward Unto Dawn.</p><br>
            <img src="halo.jpg"><br>
            <h2 class="text-white">$150</h2>
            <br>
            <button onclick="window.location.href='paginapago.html?nombre=Halo 4&precio=150&img=halo.jpg'"
            class="bg-green-500 text-white rounded-xl px-6 py-3 text-lg font-semibold hover:bg-green-600 transition">
            Comprar
            </button>
      </div>

      <!-- REPO -->

      <div class="bg-gray-800 p-6 rounded-xl shadow hover:shadow-xl hover:scale-105 transition transform duration-300">
        <h3 class="text-yellow-500 text-lg font-semibold mb-2">R.E.P.O.</h3>
        <p class="text-white">R.E.P.O. trata de un juego de terror cooperativo para hasta seis 
          jugadores en el que asumes el rol de un robot que debe recuperar objetos valiosos en lugares 
          embrujados para cumplir una cuota de ganancias.</p><br>
            <img src="repo.jpg"><br>
            <h2 class="text-white">$90</h2>
            <br>
            <button onclick="window.location.href='paginapago.html?nombre=R.E.P.O.&precio=90&img=repo.jpg'"
            class="bg-green-500 text-white rounded-xl px-6 py-3 text-lg font-semibold hover:bg-green-600 transition">
            Comprar
            </button>
      </div>

    </section>

  </main>

  <!-- Footer -->

  <footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto text-center">
      <p class="text-sm">&copy; 2025 SantiCorp.</p>
      <p class="text-xs text-gray-400 mt-1">Desarrollado usando TailwindCSS</p>
    </div>
  </footer>

</body>
</html>