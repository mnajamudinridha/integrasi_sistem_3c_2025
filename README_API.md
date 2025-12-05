# 🚀 Cara Menjalankan API

## Langkah 1: Setup Database
Pastikan database MySQL sudah berjalan dan konfigurasi di file `.env` sudah benar.

## Langkah 2: Jalankan Migrasi dan Seeder
```bash
php artisan migrate:fresh --seed
```

## Langkah 3: Jalankan Server
```bash
php artisan serve
```
Server akan berjalan di `http://localhost:8000`

## Langkah 4: Testing API

### Menggunakan Postman
1. Import file `Postman_Collection.json` ke Postman
2. Pastikan variable `base_url` sudah diset ke `http://localhost:8000`
3. Test semua endpoint yang tersedia

### Menggunakan cURL
```bash
# Get All Prodi
curl -X GET "http://localhost:8000/api/prodi" -H "Accept: application/json"

# Create Mahasiswa
curl -X POST "http://localhost:8000/api/mahasiswa" \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{
    "nim": "99999999",
    "nama": "Test User",
    "id_prodi": 1,
    "email": "test@example.com"
  }'

# Get All Mahasiswa
curl -X GET "http://localhost:8000/api/mahasiswa" -H "Accept: application/json"
```

## 📚 Dokumentasi Lengkap
Lihat file `API_DOCUMENTATION.md` untuk dokumentasi API lengkap.

## 🗂️ Struktur Endpoint
- `/api/prodi` - CRUD Program Studi
- `/api/mahasiswa` - CRUD Mahasiswa
- `/api/matakuliah` - CRUD Matakuliah
- `/api/nilai` - CRUD Nilai

Semua endpoint mendukung operasi:
- `GET` - Mengambil data (list dan detail)
- `POST` - Membuat data baru
- `PUT/PATCH` - Update data
- `DELETE` - Hapus data
