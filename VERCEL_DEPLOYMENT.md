# Deploy Laravel ke Vercel

## ⚠️ INFORMASI PROJECT INI

Project ini adalah **website statis/landing page** yang TIDAK menggunakan database!
- Semua data properties di-hardcode di views
- Tidak ada interaksi database
- Sangat mudah di-deploy ke Vercel

## Langkah-langkah Deployment

### 1. Install Vercel CLI (Opsional)
```bash
npm i -g vercel
```

### 2. Login ke Vercel
```bash
vercel login
```

### 3. Deploy Project
```bash
vercel
```

Atau untuk production:
```bash
vercel --prod
```

## Environment Variables yang Harus Diatur di Vercel Dashboard

Buka dashboard Vercel > Project Settings > Environment Variables, lalu tambahkan:

### Required Variables (Minimal):
- `APP_KEY` = Generate dengan `php artisan key:generate --show`
- `APP_URL` = URL Vercel Anda (akan didapat setelah deploy pertama)

### Optional (sudah ada di vercel.json tapi bisa di-override):
- `APP_NAME` = "Villa Agency"
- `APP_ENV` = production
- `APP_DEBUG` = false
- `LOG_CHANNEL` = stderr
- `SESSION_DRIVER` = cookie
- `CACHE_DRIVER` = array

## Catatan Penting

1. **Database**: Project ini TIDAK butuh database karena semua konten statis.

2. **Storage**: Semua gambar sudah ada di `/public/assets/images`, tidak perlu cloud storage.

3. **Cache**: Sudah menggunakan `array` driver (perfect untuk static site).

4. **Sessions**: Menggunakan `cookie` driver (tidak perlu database).

5. **Build Command**: Vercel akan otomatis menjalankan `composer install`.

## Troubleshooting

### Error: APP_KEY not set
Generate key dengan:
```bash
php artisan key:generate --show
```
Lalu tambahkan hasilnya ke environment variables di Vercel.

### Error: Database connection
Pastikan environment variables database sudah benar dan database accessible dari internet.

### Error: 500 Internal Server Error
- Check logs di Vercel dashboard
- Pastikan `APP_DEBUG=false` di production
- Pastikan `LOG_CHANNEL=stderr` agar logs muncul di Vercel

## Deploy via GitHub (Recommended)

1. Push code ke GitHub repository
2. Import project di Vercel dari GitHub
3. Tambahkan environment variables di Vercel dashboard
4. Vercel akan auto-deploy setiap push ke branch main

## Build Settings di Vercel Dashboard

Jika deploy via dashboard, gunakan settings ini:
- **Framework Preset**: Other
- **Build Command**: `composer install`
- **Output Directory**: (kosongkan)
- **Install Command**: (kosongkan atau default)
