<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Custom Welcome</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
          theme: {
            extend: {
              animation: {
                'float-char': 'floating 3s ease-in-out infinite',
              },
              keyframes: {
                floating: {
                  '0%, 100%': { transform: 'translateY(0)' },
                  '50%': { transform: 'translateY(-20px)' },
                }
              }
            }
          }
        }
    </script>

    <style>
        .hero-bg {
            background-image: url('https://wallpapercat.com/w/full/3/9/5/84699-3840x2160-desktop-4k-86-tv-series-background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>

<body class="antialiased min-h-screen hero-bg flex items-center justify-center">

    <div class="relative w-full max-w-4xl px-6">
        
        <!-- CARD -->
        <main class="grid grid-cols-1 md:grid-cols-2 overflow-hidden bg-[#161616]/70 backdrop-blur-lg border border-white/10 rounded-[2.5rem] shadow-2xl h-[500px]">
            
            <!-- KIRI -->
            <div class="p-12 flex flex-col justify-center">
                <h2 class="text-3xl font-bold text-white mb-6">
                    Aplikasi Pengaduan Sarana Sekolah
                </h2>
                
                <div class="flex items-center space-x-4 mb-10">
                    <a href="{{ route('login') }}" class="text-sm font-semibold text-white/70 hover:text-[#FF2D20] transition">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" class="px-6 py-2 bg-transparent border border-white/20 rounded-full text-sm font-semibold text-white hover:border-[#FF2D20] transition">
                        Register
                    </a>
                </div>

                <p class="text-sm leading-relaxed text-white/40">
                    SMK PGRI menghadirkan web pengaduan sarana sekolah untuk menciptakan lingkungan sekolah yang nyaman dengan fasilitas yang memadai. 
                </p>
            </div>

            <!-- KANAN (LOGO) -->
            <div class="relative bg-[#111]/40 flex items-center justify-center overflow-hidden h-full">
                
                <!-- Glow background -->
                <div class="absolute w-48 h-48 bg-[#FF2D20] rounded-full blur-[100px] opacity-20"></div>

                <!-- LOGO -->
                <img 
                    src="https://pegerarea.com/wp-content/uploads/2021/09/logo-1-e1632906395587.png" 
                    class="w-40 h-40 object-contain animate-float-char z-10 drop-shadow-[0_0_20px_rgba(255,45,32,0.6)]"
                />

                <!-- Gradient overlay -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#161616] via-transparent to-transparent hidden md:block z-20"></div>
            </div>

        </main>

        <!-- FOOTER -->
        <p class="mt-8 text-center text-xs text-white/20 italic">
            Create By ARSYAD KAMAL MUNIF
        </p>
    </div>

</body>
</html>