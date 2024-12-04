<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>La Belle Époque Restaurant</title>
  <link rel="icon" type="image/png" href="img/icon.png" />

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#d9c3a9',
            secondary: '#a68865',
            white: '#f3eee8',
            black: '#443e37',
          },
        },
      },
    };
  </script>
</head>

<body class="bg-white text-black font-sans">
  <!-- Navbar/Header -->
  <header class="bg-secondary">
    <nav class="container mx-auto flex justify-center items-center gap-12 py-8">
      <a href="#home" class="text-white text-xl font-semibold">Home</a>
      <a href="#menu" class="text-white text-xl font-semibold">Menu</a>
      <a href="#about" class="text-white text-xl font-semibold">About</a>
      <a href="#place" class="text-white text-xl font-semibold">Place</a>
    </nav>
  </header>

  <main>
    <!-- Home -->
    <section id="home" class="h-screen flex items-center bg-cover bg-center" style="background-image: url('img/bg.png');">
      <div class="container mx-auto flex justify-between">
        <div class="w-full md:w-1/2 p-4">
          <div class="backdrop-blur-lg p-4 rounded">
            <h1 class="text-5xl italic font-bold font-serif text-black">La Belle Époque<br />RESTAURANT</h1>
            <p class="mt-4 text-lg opacity-50 mix-blend-difference">Menyediakan menu-menu Frances mulai dari menu makanan, minuman hingga dessert. Nikmati hari anda dengan menu sarapan sehat dan enak.</p>
          </div>
          <div class="mt-8 flex gap-4">
            <button class="px-6 py-3 text-white bg-secondary rounded font-semibold">OUR MENU</button>
            <button class="px-6 py-3 text-white bg-secondary rounded font-semibold">OUR DRINKS</button>
            <button class="px-6 py-3 text-white bg-secondary rounded font-semibold">OUR DESSERT</button>
          </div>
        </div>
        <div class="w-1/3 flex justify-center">
          <div class="w-96 h-96 rounded-full overflow-hidden shadow-lg ring-8 ring-primary">
            <img src="img/icon.png" alt="icon" class="w-full h-full object-cover">
          </div>
        </div>
      </div>
    </section>

    <!-- Menu -->
    <div class="row py-5" id="tim-kreatif">
    <div class="col-12 mb-5">
        <h5 class="fw-bold text-center text-3xl">OUR MENU</h5>
    </div>
    <div class="col-12">
        <div class="row">
            @foreach ($menus as $menu)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="card shadow-sm rounded-5">
                        <div class="card-body p-4">
                            <img src="{{ asset('storage/' . $menu->image) }}" class="avatar mb-3" alt="...">
                            <h5 class="card-title">{{ $menu->name }}</h5>
                            <p class="card-text">
                                Harga : {{ $menu->price }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

    <!-- About -->
    <section id="about" class="my-20">
      <div class="container mx-auto flex flex-wrap items-center">
        <div class="relative w-96 h-96 rounded-full shadow-lg ring-8 ring-secondary">
          <img src="img/icon.png" alt="icon" class="w-full h-full object-cover">
        </div>
        <div class="bg-primary p-8 rounded-lg ml-auto">
          <h2 class="text-3xl font-serif mb-4">About Our Restaurant</h2>
          <p class="text-lg opacity-80">
            Sejak tahun 1987, La Belle Époque telah menjadi destinasi kuliner favorit bagi para pencinta masakan Prancis. Kami menawarkan pengalaman bersantap yang lengkap, mulai dari hidangan pembuka yang menggugah selera hingga dessert yang memanjakan lidah.
          </p>
        </div>
      </div>
    </section>

    <!-- Place -->
    <section id="place" class="my-8 bg-primary p-8">
      <h2 class="text-3xl font-serif text-center mb-8">La Belle Époque, France Restaurant</h2>
      <div class="container mx-auto flex gap-12">
        <div class="flex-1 space-y-4">
          <div class="flex items-center">
            <img src="svg/01.svg" alt="icon" class="w-8 h-8 mr-4">
            <p>36 Rue des Petits Champs, 75002 Paris, Prancis.</p>
          </div>
          <div class="flex items-center">
            <img src="svg/01.svg" alt="icon" class="w-8 h-8 mr-4">
            <p>Jl. Kunti II No.7, Seminyak, Bali, Indonesia.</p>
          </div>
          <div class="flex items-center">
            <img src="svg/05.svg" alt="icon" class="w-8 h-8 mr-4">
            <p>Call Center for Asking or Booking</p>
          </div>
        </div>
        <div class="flex-1 space-y-4">
          <div class="flex items-center">
            <img src="svg/02.svg" alt="icon" class="w-8 h-8 mr-4">
            <p>labellepoque@gmail.com</p>
          </div>
          <div class="flex items-center">
            <img src="svg/03.svg" alt="icon" class="w-8 h-8 mr-4">
            <p>@labelle.epoque</p>
          </div>
          <div class="flex items-center">
            <img src="svg/04.svg" alt="icon" class="w-8 h-8 mr-4">
            <p>@labelle.epoque</p>
          </div>
          <div class="flex items-center">
            <img src="svg/05.svg" alt="icon" class="w-8 h-8 mr-4">
            <p>(021) 272 88 77</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="text-center bg-secondary text-white py-4">
    <p>&copy;xrsycode</p>
  </footer>
</body>

</html>
