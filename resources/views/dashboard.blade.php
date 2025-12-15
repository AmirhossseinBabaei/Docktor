<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>داشبورد - مطب پزشکی</title>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Vazirmatn', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-20">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-reverse space-x-8">
                    <a href="/" class="text-2xl font-bold text-blue-600">مطب پزشکی</a>
                    <div class="hidden md:flex space-x-reverse space-x-6">
                        <a href="/dashboard" class="text-blue-600 font-semibold">داشبورد</a>
                        <a href="/book-appointment" class="text-gray-700 hover:text-blue-600">رزرو نوبت</a>
                        <a href="/" class="text-gray-700 hover:text-blue-600">صفحه اصلی</a>
                    </div>
                </div>
                <div class="flex items-center space-x-reverse space-x-4">
                    <div class="text-right">
                        <p class="text-xs text-gray-500">امروز</p>
                        <p class="text-sm font-semibold text-gray-800" id="today-date"></p>
                    </div>
                    <span class="text-gray-700">خوش آمدید</span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8 space-y-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">داشبورد مدیریت پیشرفته</h1>
                <p class="text-sm text-gray-600 mt-1">نمای کلی عملکرد، چالش‌ها و عملیات سریع</p>
            </div>
            <div class="flex gap-3">
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                    ایجاد نوبت جدید
                </button>
                <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition">
                    خروجی PDF
                </button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-50">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 mb-1">بیماران امروز</p>
                        <p class="text-3xl font-bold text-gray-800">15</p>
                        <p class="text-xs text-green-600 mt-1">+12% نسبت به هفته قبل</p>
                    </div>
                    <div class="bg-blue-50 p-4 rounded-full">
                        <span class="text-3xl">👥</span>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-50">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 mb-1">نوبت‌های امروز</p>
                        <p class="text-3xl font-bold text-gray-800">8</p>
                        <p class="text-xs text-yellow-600 mt-1">3 نوبت در انتظار تایید</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-full">
                        <span class="text-3xl">📅</span>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-50">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 mb-1">درآمد امروز</p>
                        <p class="text-3xl font-bold text-gray-800">2.5M</p>
                        <p class="text-xs text-blue-600 mt-1">+320K از نسخه‌ها</p>
                    </div>
                    <div class="bg-purple-50 p-4 rounded-full">
                        <span class="text-3xl">💰</span>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-50">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 mb-1">رضایت بیماران</p>
                        <p class="text-3xl font-bold text-gray-800">4.7/5</p>
                        <p class="text-xs text-green-600 mt-1">+0.2 امتیاز</p>
                    </div>
                    <div class="bg-orange-50 p-4 rounded-full">
                        <span class="text-3xl">⭐</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Secondary stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-5 rounded-xl shadow border border-gray-50">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="text-lg font-semibold text-gray-800">نمودار مراجعات (ماک)</h3>
                    <span class="text-xs px-2 py-1 bg-blue-50 text-blue-700 rounded-full">ماه جاری</span>
                </div>
                <div class="h-40 flex items-center justify-center text-gray-400 border-2 border-dashed border-gray-200 rounded-lg">
                    Placeholder Chart
                </div>
                <div class="mt-4 flex justify-between text-sm text-gray-600">
                    <span>هفته قبل: 180</span>
                    <span>این هفته: 210</span>
                </div>
            </div>
            <div class="bg-white p-5 rounded-xl shadow border border-gray-50">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="text-lg font-semibold text-gray-800">پرداخت‌ها</h3>
                    <span class="text-xs px-2 py-1 bg-green-50 text-green-700 rounded-full">تفکیک</span>
                </div>
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-gray-700">آنلاین</span>
                        <span class="font-semibold text-gray-900">1.8M</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-2">
                        <div class="bg-blue-500 h-2 rounded-full" style="width: 72%"></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-700">حضوری / کارت‌خوان</span>
                        <span class="font-semibold text-gray-900">0.7M</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-2">
                        <div class="bg-purple-500 h-2 rounded-full" style="width: 28%"></div>
                    </div>
                </div>
            </div>
            <div class="bg-white p-5 rounded-xl shadow border border-gray-50">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="text-lg font-semibold text-gray-800">پیشرفت اهداف</h3>
                    <span class="text-xs px-2 py-1 bg-orange-50 text-orange-700 rounded-full">OKR</span>
                </div>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm text-gray-700">
                            <span>کاهش زمان انتظار</span>
                            <span>65%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2 mt-1">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm text-gray-700">
                            <span>افزایش مراجعات هفتگی</span>
                            <span>54%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2 mt-1">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: 54%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm text-gray-700">
                            <span>رضایت بیماران</span>
                            <span>78%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2 mt-1">
                            <div class="bg-indigo-500 h-2 rounded-full" style="width: 78%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Today's Appointments -->
            <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-lg border border-gray-50">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">نوبت‌های امروز</h2>
                        <p class="text-sm text-gray-500">وضعیت لحظه‌ای اتاق‌های معاینه</p>
                    </div>
                    <span class="text-xs px-2 py-1 bg-gray-100 text-gray-600 rounded-full">8 نوبت</span>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border-r-4 border-blue-600">
                        <div>
                            <p class="font-semibold text-gray-800">علی احمدی</p>
                            <p class="text-sm text-gray-600">09:00 - معاینه عمومی</p>
                        </div>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">تایید شده</span>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-amber-50 rounded-lg border-r-4 border-amber-500">
                        <div>
                            <p class="font-semibold text-gray-800">مریم رضایی</p>
                            <p class="text-sm text-gray-600">10:30 - مشاوره</p>
                        </div>
                        <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">در انتظار</span>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border-r-4 border-blue-600">
                        <div>
                            <p class="font-semibold text-gray-800">حسین کریمی</p>
                            <p class="text-sm text-gray-600">11:00 - پیگیری</p>
                        </div>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">تایید شده</span>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-red-50 rounded-lg border-r-4 border-red-500">
                        <div>
                            <p class="font-semibold text-gray-800">نگار صادقی</p>
                            <p class="text-sm text-gray-600">12:30 - اورژانسی</p>
                        </div>
                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm">لغو شده</span>
                    </div>
                </div>
            </div>

            <!-- Quick Actions & Alerts -->
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-50">
                    <h2 class="text-2xl font-bold mb-6 text-gray-800">عملیات سریع</h2>
                    <div class="space-y-3">
                        <a href="/book-appointment" class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg hover:bg-blue-700 transition">
                            رزرو نوبت جدید
                        </a>
                        <a href="/patients" class="block w-full bg-green-600 text-white text-center py-3 rounded-lg hover:bg-green-700 transition">
                            مدیریت بیماران
                        </a>
                        <a href="/appointments" class="block w-full bg-purple-600 text-white text-center py-3 rounded-lg hover:bg-purple-700 transition">
                            مشاهده همه نوبت‌ها
                        </a>
                        <a href="/prescriptions" class="block w-full bg-orange-600 text-white text-center py-3 rounded-lg hover:bg-orange-700 transition">
                            نسخه‌نویسی
                        </a>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-50">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">هشدارها و اعلانات</h3>
                        <span class="text-xs px-2 py-1 bg-red-50 text-red-700 rounded-full">3 مورد</span>
                    </div>
                    <div class="space-y-3 text-sm">
                        <div class="flex items-start gap-3 p-3 bg-red-50 rounded-lg">
                            <span class="text-red-600 text-lg">⚠️</span>
                            <div>
                                <p class="font-semibold text-gray-800">کمبود واکسن آنفولانزا</p>
                                <p class="text-gray-600">برای فردا موجودی بررسی شود.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 p-3 bg-yellow-50 rounded-lg">
                            <span class="text-yellow-600 text-lg">⏳</span>
                            <div>
                                <p class="font-semibold text-gray-800">تایید بیمه</p>
                                <p class="text-gray-600">3 پرونده در انتظار تایید بیمه سلامت.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 p-3 bg-blue-50 rounded-lg">
                            <span class="text-blue-600 text-lg">ℹ️</span>
                            <div>
                                <p class="font-semibold text-gray-800">به‌روزرسانی نرم‌افزار</p>
                                <p class="text-gray-600">نسخه جدید سیستم صندوق آماده نصب است.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Challenge & Learning -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
            <div class="xl:col-span-2 bg-white p-6 rounded-xl shadow-lg border border-gray-50">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">چالش‌های هفتگی تیم</h2>
                    <span class="text-xs px-3 py-1 bg-indigo-50 text-indigo-700 rounded-full">Gamified</span>
                </div>
                <div class="space-y-4">
                    <div class="p-4 border border-gray-100 rounded-lg hover:shadow-sm transition">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="font-semibold text-gray-800">کاهش زمان پذیرش</p>
                                <p class="text-sm text-gray-600">هدف: متوسط زمان پذیرش زیر 6 دقیقه</p>
                            </div>
                            <span class="text-xs px-2 py-1 rounded-full bg-green-50 text-green-700">در حال انجام</span>
                        </div>
                        <div class="mt-3 w-full bg-gray-100 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 62%"></div>
                        </div>
                    </div>
                    <div class="p-4 border border-gray-100 rounded-lg hover:shadow-sm transition">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="font-semibold text-gray-800">افزایش نوبت آنلاین</p>
                                <p class="text-sm text-gray-600">هدف: 40% از نوبت‌ها به صورت آنلاین</p>
                            </div>
                            <span class="text-xs px-2 py-1 rounded-full bg-yellow-50 text-yellow-700">در خطر</span>
                        </div>
                        <div class="mt-3 w-full bg-gray-100 rounded-full h-2">
                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 38%"></div>
                        </div>
                    </div>
                    <div class="p-4 border border-gray-100 rounded-lg hover:shadow-sm transition">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="font-semibold text-gray-800">رضایت پس از ویزیت</p>
                                <p class="text-sm text-gray-600">هدف: امتیاز 4.8 در نظرسنجی پیامکی</p>
                            </div>
                            <span class="text-xs px-2 py-1 rounded-full bg-blue-50 text-blue-700">مسیر درست</span>
                        </div>
                        <div class="mt-3 w-full bg-gray-100 rounded-full h-2">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: 71%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-50">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">آموزش و نکات</h3>
                    <span class="text-xs px-2 py-1 bg-gray-100 text-gray-700 rounded-full">3 مورد</span>
                </div>
                <div class="space-y-4 text-sm">
                    <div class="flex gap-3">
                        <span class="text-blue-600 text-xl">🎯</span>
                        <div>
                            <p class="font-semibold text-gray-800">پروتکل تریاژ سریع</p>
                            <p class="text-gray-600">راهکار 3 دقیقه‌ای برای بیماران با درد قفسه سینه.</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <span class="text-green-600 text-xl">💬</span>
                        <div>
                            <p class="font-semibold text-gray-800">جملات طلایی</p>
                            <p class="text-gray-600">5 جمله کلیدی برای کاهش اضطراب بیماران.</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <span class="text-purple-600 text-xl">🧾</span>
                        <div>
                            <p class="font-semibold text-gray-800">چک‌لیست بیمه</p>
                            <p class="text-gray-600">قبل از ثبت نسخه، وضعیت پوشش بیمه بررسی شود.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Patients -->
        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-50">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">آخرین بیماران</h2>
                    <p class="text-sm text-gray-500">مرور سریع سوابق اخیر</p>
                </div>
                <a href="/patients" class="text-blue-600 hover:text-blue-700">مشاهده همه</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-right text-sm font-semibold text-gray-700">نام</th>
                            <th class="px-6 py-3 text-right text-sm font-semibold text-gray-700">شماره تماس</th>
                            <th class="px-6 py-3 text-right text-sm font-semibold text-gray-700">آخرین ویزیت</th>
                            <th class="px-6 py-3 text-right text-sm font-semibold text-gray-700">وضعیت</th>
                            <th class="px-6 py-3 text-right text-sm font-semibold text-gray-700">یادداشت</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-800">علی احمدی</td>
                            <td class="px-6 py-4 text-sm text-gray-600">09123456789</td>
                            <td class="px-6 py-4 text-sm text-gray-600">1403/09/15</td>
                            <td class="px-6 py-4">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">فعال</span>
                            </td>
                            <td class="px-6 py-4 text-xs text-gray-500">پیگیری آزمایش خون</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-800">مریم رضایی</td>
                            <td class="px-6 py-4 text-sm text-gray-600">09123456790</td>
                            <td class="px-6 py-4 text-sm text-gray-600">1403/09/14</td>
                            <td class="px-6 py-4">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">فعال</span>
                            </td>
                            <td class="px-6 py-4 text-xs text-gray-500">آزمایش تیروئید</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-800">حسین کریمی</td>
                            <td class="px-6 py-4 text-sm text-gray-600">09123456791</td>
                            <td class="px-6 py-4 text-sm text-gray-600">1403/09/13</td>
                            <td class="px-6 py-4">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">فعال</span>
                            </td>
                            <td class="px-6 py-4 text-xs text-gray-500">فیزیوتراپی هفته بعد</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script>
        // نمایش تاریخ روز به صورت شمسی (ساده)
        (function setToday() {
            try {
                const today = new Date();
                const formatter = new Intl.DateTimeFormat('fa-IR', {
                    year: 'numeric',
                    month: '2-digit',
                    day: '2-digit'
                });
                const el = document.getElementById('today-date');
                if (el) el.textContent = formatter.format(today);
            } catch (e) {
                console.warn('Date format failed', e);
            }
        })();
    </script>
</body>
</html>


