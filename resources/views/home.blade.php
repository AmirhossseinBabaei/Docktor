<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>مطب پزشکی - صفحه اصلی</title>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Vazirmatn', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-reverse space-x-8">
                    <a href="/" class="text-2xl font-bold text-blue-600">مطب پزشکی</a>
                    <div class="hidden md:flex space-x-reverse space-x-6">
                        <a href="/" class="text-gray-700 hover:text-blue-600 transition">خانه</a>
                        <a href="#services" class="text-gray-700 hover:text-blue-600 transition">خدمات</a>
                        <a href="#about" class="text-gray-700 hover:text-blue-600 transition">درباره ما</a>
                        <a href="#contact" class="text-gray-700 hover:text-blue-600 transition">تماس با ما</a>
                    </div>
                </div>
                <div class="flex items-center space-x-reverse space-x-4">
                    <a href="/dashboard" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                        داشبورد
                    </a>
                    <a href="/book-appointment" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">
                        رزرو نوبت
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-l from-blue-600 to-blue-800 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold mb-4">مطب پزشکی مدرن</h1>
            <p class="text-xl mb-8">خدمات پزشکی با کیفیت و مراقبت از سلامت شما</p>
            <div class="flex justify-center space-x-reverse space-x-4">
                <a href="/book-appointment" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                    رزرو نوبت آنلاین
                </a>
                <a href="#services" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">
                    مشاهده خدمات
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">خدمات ما</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-blue-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="text-5xl mb-4">🏥</div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">معاینه عمومی</h3>
                    <p class="text-gray-600">معاینه کامل و بررسی سلامت عمومی بیماران</p>
                </div>
                <div class="bg-green-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="text-5xl mb-4">💊</div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">نسخه‌نویسی</h3>
                    <p class="text-gray-600">تجویز دارو و نسخه‌های پزشکی</p>
                </div>
                <div class="bg-purple-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="text-5xl mb-4">📋</div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">مشاوره پزشکی</h3>
                    <p class="text-gray-600">مشاوره تخصصی در زمینه‌های مختلف پزشکی</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold mb-6 text-gray-800">درباره مطب ما</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        مطب پزشکی ما با بیش از 10 سال تجربه در زمینه ارائه خدمات پزشکی، 
                        همواره تلاش کرده است تا بهترین خدمات را به بیماران ارائه دهد.
                    </p>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        ما با استفاده از جدیدترین تجهیزات پزشکی و کادر مجرب، 
                        آماده خدمت‌رسانی به شما عزیزان هستیم.
                    </p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <span class="text-green-500 ml-2">✓</span>
                            کادر پزشکی مجرب و متخصص
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 ml-2">✓</span>
                            تجهیزات مدرن و به‌روز
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 ml-2">✓</span>
                            خدمات 24 ساعته
                        </li>
                    </ul>
                </div>
                <div class="bg-blue-100 p-8 rounded-xl">
                    <div class="text-center">
                        <div class="text-6xl mb-4">👨‍⚕️</div>
                        <h3 class="text-2xl font-semibold mb-2">دکتر احمد محمدی</h3>
                        <p class="text-gray-600">متخصص داخلی</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">تماس با ما</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-blue-50 rounded-xl">
                    <div class="text-4xl mb-4">📍</div>
                    <h3 class="font-semibold mb-2">آدرس</h3>
                    <p class="text-gray-600">تهران، خیابان ولیعصر، پلاک 123</p>
                </div>
                <div class="text-center p-6 bg-green-50 rounded-xl">
                    <div class="text-4xl mb-4">📞</div>
                    <h3 class="font-semibold mb-2">تلفن</h3>
                    <p class="text-gray-600">021-12345678</p>
                </div>
                <div class="text-center p-6 bg-purple-50 rounded-xl">
                    <div class="text-4xl mb-4">📧</div>
                    <h3 class="font-semibold mb-2">ایمیل</h3>
                    <p class="text-gray-600">info@clinic.com</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">مطب پزشکی</h3>
                    <p class="text-gray-400">خدمات پزشکی با کیفیت</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">لینک‌های مفید</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/" class="hover:text-white">خانه</a></li>
                        <li><a href="#services" class="hover:text-white">خدمات</a></li>
                        <li><a href="#about" class="hover:text-white">درباره ما</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">خدمات</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/book-appointment" class="hover:text-white">رزرو نوبت</a></li>
                        <li><a href="/dashboard" class="hover:text-white">داشبورد</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">تماس</h4>
                    <p class="text-gray-400">021-12345678</p>
                    <p class="text-gray-400">info@clinic.com</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 1403 مطب پزشکی. تمام حقوق محفوظ است.</p>
            </div>
        </div>
    </footer>
</body>
</html>



