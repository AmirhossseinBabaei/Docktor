# راهنمای عیب‌یابی چت دونفره

## مشکلات رایج و راه حل‌ها

### 1. خطا در ارسال پیام

#### بررسی تنظیمات .env
مطمئن شوید که این متغیرها در فایل `.env` تنظیم شده‌اند:

```env
BROADCAST_CONNECTION=reverb
REVERB_APP_ID=your-app-id
REVERB_APP_KEY=your-app-key
REVERB_APP_SECRET=your-app-secret
REVERB_HOST=localhost
REVERB_PORT=8080
REVERB_SCHEME=http
```

#### اجرای Migration
اگر جدول `messages` وجود ندارد یا ساختار آن تغییر کرده:

```bash
php artisan migrate:fresh
```

یا اگر می‌خواهید migration جدید اضافه کنید:

```bash
php artisan migrate
```

#### بررسی اجرای سرورها
مطمئن شوید که این سرورها در حال اجرا هستند:

1. **Reverb Server** (در یک ترمینال):
```bash
php artisan reverb:start
```

2. **Laravel Server** (در ترمینال دیگر):
```bash
php artisan serve
```

3. **Vite Dev Server** (در ترمینال دیگر):
```bash
npm run dev
```

### 2. خطا در اتصال به WebSocket

#### بررسی Console مرورگر
خطاهای JavaScript را در Console مرورگر (F12) بررسی کنید.

#### بررسی تنظیمات Reverb
مطمئن شوید که:
- سرور Reverb در حال اجرا است
- پورت 8080 در دسترس است
- فایروال مانع اتصال نمی‌شود

### 3. خطا در Authentication

#### بررسی Session
مطمئن شوید که کاربر در session لاگین شده است. اگر مشکل دارید:

```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
```

### 4. خطا در دریافت پیام‌ها

#### بررسی Private Channel
مطمئن شوید که:
- کاربر به درستی authenticate شده است
- Route `/broadcasting/auth` در دسترس است
- Channel authorization در `routes/channels.php` درست است

### 5. بررسی لاگ‌ها

برای دیدن خطاهای دقیق‌تر:

```bash
php artisan tail
```

یا لاگ‌های Laravel را بررسی کنید:
```bash
tail -f storage/logs/laravel.log
```

## تست سریع

1. باز کردن Console مرورگر (F12)
2. بررسی خطاهای JavaScript
3. بررسی Network tab برای درخواست‌های HTTP
4. بررسی WebSocket connection در Network tab

## نکات مهم

- مطمئن شوید که `BROADCAST_CONNECTION=reverb` در `.env` تنظیم شده است
- سرور Reverb باید قبل از Laravel اجرا شود
- در محیط development، از `REVERB_SCHEME=http` استفاده کنید
- برای production، از `REVERB_SCHEME=https` استفاده کنید

