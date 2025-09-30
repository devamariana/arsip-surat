# Sistem Pengarsipan Surat Resmi Kelurahan Karangduren
## Gambaran Umum

Aplikasi ini dibuat untuk mempermudah perangkat kelurahan dalam menyimpan dan mengelola dokumen surat resmi secara digital.
Setiap surat yang telah diterbitkan dapat di-scan ke format PDF kemudian diunggah ke sistem. Saat dokumen tersebut diperlukan kembali, petugas cukup mengetik judul atau kata kunci, lalu mengunduh berkas yang sudah tersimpan dengan aman.

## Manfaat
- Membantu perangkat desa dalam digitalisasi arsip surat resmi.
- Mempercepat proses pencarian dokumen hanya dengan judul/kata kunci.
- Menyediakan unggah file PDF hasil scan surat.
- Memastikan arsip surat dapat diakses kembali kapan saja.
- Mengurangi risiko hilangnya dokumen penting sekaligus meningkatkan efisiensi kerja.

## Fitur Utama
- Unggah Surat (PDF): menyimpan arsip surat hasil scan ke sistem.
- Fitur Pencarian: temukan surat dengan cepat berdasarkan judul atau kata kunci.
- Unduh Arsip: surat yang tersimpan bisa di-download kembali.
- Daftar Arsip: menampilkan seluruh dokumen surat yang sudah masuk sistem.
- Manajemen Pengguna (opsional): pengaturan peran untuk admin maupun staf kelurahan.

## Kebutuhan Sistem
- PHP versi 8.0 atau lebih tinggi
- Database MySQL/MariaDB
- Web server (XAMPP, Laragon, atau PHP built-in server)
- Composer (jika berbasis Laravel)
- Node.js & npm (jika menggunakan Laravel Mix/Vite untuk manajemen aset)

## Cara Instalasi
1. Clone repository:
   ```bash
   git clone https://github.com/username/arsip-surat.git
   cd arsip-surat
   ```

2. Install dependencies (jika menggunakan Laravel):
   ```bash
   composer install
   npm install && npm run dev
   ```

3. Salin file `.env.example` menjadi `.env`, lalu sesuaikan konfigurasi database:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Buat database baru di MySQL (contoh: `db_arsipsurat`).

5. Import file `db_arsipsurat.sql`:
   - Via terminal:
     ```bash
     mysql -u root -p db_arsipsurat < db_arsipsurat.sql
     ```
   - Via phpMyAdmin: pilih database → Import → pilih file `database.sql`.

6. Jalankan aplikasi:
   - Jika Laravel:
     ```bash
     php artisan serve
     ```
     Akses melalui browser: [http://127.0.0.1:8000](http://127.0.0.1:8000)  
   - Jika tanpa framework: letakkan folder project di `htdocs/` (XAMPP) lalu buka [http://localhost/nama-folder](http://localhost/nama-folder).

---

# Screenshoot Tampilan 
Tampilan Arsip Surat
<img width="1365" height="647" alt="Screenshot 2025-09-30 151845" src="https://github.com/user-attachments/assets/9ccd8ef0-03b9-44c7-8807-83e0a842fbcb" />
Tampilan Kategori Surat
<img width="1365" height="651" alt="Screenshot 2025-09-30 151902" src="https://github.com/user-attachments/assets/736d2145-9f6d-4eab-ab38-f914fa7c49d9" />
Tampilan About
<img width="1365" height="646" alt="Screenshot 2025-09-30 151918" src="https://github.com/user-attachments/assets/2a465495-9824-4f1c-9469-4df4597f6319" />





.
