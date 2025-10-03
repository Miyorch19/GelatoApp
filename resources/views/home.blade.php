<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastelería Dulce</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }
        
        .fade-in {
            animation: fadeIn 1s ease-in;
        }
        
        .slide-up {
            animation: slideUp 0.8s ease-out;
        }
        
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .btn-hover {
            transition: all 0.3s ease;
        }
        
        .btn-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .rating-star {
            color: #FCD34D;
        }
    </style>
</head>
<body class="bg-rose-50">
    @component('components.navbar')
    @endcomponent

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Contenido izquierdo -->
                <div class="space-y-8 slide-up">
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-rose-900 leading-tight">
                        Los mejores postres
                    </h1>
                    
                    <p class="text-lg text-rose-700 max-w-md leading-relaxed">
                        Los mejores pasteles están hechos con amor. Disfruta de nuestras delicias artesanales preparadas con ingredientes frescos y de la más alta calidad.
                    </p>
                    
                    <div class="flex flex-wrap gap-4">
                        <button class="btn-hover bg-rose-900 text-white px-8 py-4 rounded-full font-semibold text-lg">
                            Ordena
                        </button>

                    </div>
                    
                    <!-- Rating -->
                    <div class="flex items-center gap-3 pt-4 fade-in">
                        <div class="flex gap-1">
                            <span class="rating-star text-2xl">★</span>
                            <span class="rating-star text-2xl">★</span>
                            <span class="rating-star text-2xl">★</span>
                            <span class="rating-star text-2xl">★</span>
                            <span class="rating-star text-2xl">★</span>
                        </div>
                        <div class="border-l-2 border-rose-300 pl-3">
                            <p class="text-rose-900 font-bold text-xl">4.7</p>
                            <p class="text-rose-600 text-sm">3.2k+ Rating</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative float">
                    <div class="relative z-10">
                        <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=800&h=800&fit=crop" 
                             alt="Delicious cake" 
                             class="rounded-3xl shadow-2xl w-full object-cover"
                             style="max-height: 600px;">
                    </div>
                    
                    <div class="absolute -top-6 -right-6 w-32 h-32 bg-pink-200 rounded-full opacity-50 blur-2xl"></div>
                    <div class="absolute -bottom-6 -left-6 w-40 h-40 bg-rose-200 rounded-full opacity-50 blur-2xl"></div>
                </div>
            </div>
        </div>
        
        <!-- Social media sidebar -->
        <div class="hidden lg:block absolute right-8 top-1/2 transform -translate-y-1/2 space-y-6">
            <a href="#" class="block text-rose-400 hover:text-rose-600 transition-colors text-sm font-medium rotate-90 origin-center">
                INSTAGRAM
            </a>
            <a href="#" class="block text-rose-400 hover:text-rose-600 transition-colors text-sm font-medium rotate-90 origin-center mt-20">
                WHATSAPP
            </a>
            <a href="#" class="block text-rose-400 hover:text-rose-600 transition-colors text-sm font-medium rotate-90 origin-center mt-20">
                FACEBOOK
            </a>
        </div>
    </section>

    </section>
</body>
</html>