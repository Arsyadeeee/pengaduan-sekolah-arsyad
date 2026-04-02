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
</head>
<body class="antialiased bg-[#0a0a0a] text-white/50 flex items-center justify-center min-h-screen selection:bg-[#FF2D20] selection:text-white">

    <div class="relative w-full max-w-4xl px-6">
        
        <main class="grid grid-cols-1 md:grid-cols-2 overflow-hidden bg-[#161616] border border-white/10 rounded-[2.5rem] shadow-2xl h-[500px]">
            
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

            <div class="relative bg-[#111] flex items-center justify-center overflow-hidden h-full">
                
                <div class="absolute w-48 h-48 bg-[#FF2D20] rounded-full blur-[100px] opacity-20"></div>

                <img 
                    src="https://pegerarea.com/wp-content/uploads/2021/09/logo-1-e1632906395587.png" 
                    class="absolute inset-0 w-full h-full object-cover animate-float-char"
                />

                <div class="absolute inset-0 bg-gradient-to-r from-[#161616] via-transparent to-transparent hidden md:block z-20"></div>
            </div>

        </main>

        <p class="mt-8 text-center text-xs text-white/10 italic">
            Create By ARSYAD KAMAL MUNIF
        </p>
    </div>

</body>
</html>