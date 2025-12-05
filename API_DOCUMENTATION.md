# API Documentation - Sistem Mahasiswa

Base URL: `http://localhost:8000/api`

## 📋 Daftar Endpoint

### 1. PRODI (Program Studi)

#### Get All Prodi
- **Method:** `GET`
- **URL:** `http://localhost:8000/api/prodi`
- **Response Example:**
```json
{
  "data": [
    {
      "id_prodi": 1,
      "nama_prodi": "Teknik Informatika",
      "created_at": "2025-12-05T10:15:00.000000Z",
      "updated_at": "2025-12-05T10:15:00.000000Z"
    }
  ],
  "links": {...},
  "meta": {...}
}
```

#### Get Single Prodi
- **Method:** `GET`
- **URL:** `http://localhost:8000/api/prodi/{id_prodi}`
- **Example:** `http://localhost:8000/api/prodi/1`

#### Create Prodi
- **Method:** `POST`
- **URL:** `http://localhost:8000/api/prodi`
- **Headers:** 
  - `Content-Type: application/json`
  - `Accept: application/json`
- **Body (JSON):**
```json
{
  "nama_prodi": "Teknik Informatika"
}
```

#### Update Prodi
- **Method:** `PUT` atau `PATCH`
- **URL:** `http://localhost:8000/api/prodi/{id_prodi}`
- **Headers:** 
  - `Content-Type: application/json`
  - `Accept: application/json`
- **Body (JSON):**
```json
{
  "nama_prodi": "Sistem Informasi"
}
```

#### Delete Prodi
- **Method:** `DELETE`
- **URL:** `http://localhost:8000/api/prodi/{id_prodi}`
- **Response:**
```json
{
  "message": "Prodi berhasil dihapus"
}
```

---

### 2. MAHASISWA

#### Get All Mahasiswa
- **Method:** `GET`
- **URL:** `http://localhost:8000/api/mahasiswa`
- **Response Example:**
```json
{
  "data": [
    {
      "nim": "12345678",
      "nama": "John Doe",
      "id_prodi": 1,
      "prodi": {
        "id_prodi": 1,
        "nama_prodi": "Teknik Informatika",
        "created_at": "2025-12-05T10:15:00.000000Z",
        "updated_at": "2025-12-05T10:15:00.000000Z"
      },
      "email": "john@example.com",
      "no_telp": "081234567890",
      "alamat": "Jl. Contoh No. 123",
      "created_at": "2025-12-05T10:15:00.000000Z",
      "updated_at": "2025-12-05T10:15:00.000000Z"
    }
  ],
  "links": {...},
  "meta": {...}
}
```

#### Get Single Mahasiswa
- **Method:** `GET`
- **URL:** `http://localhost:8000/api/mahasiswa/{nim}`
- **Example:** `http://localhost:8000/api/mahasiswa/12345678`

#### Create Mahasiswa
- **Method:** `POST`
- **URL:** `http://localhost:8000/api/mahasiswa`
- **Headers:** 
  - `Content-Type: application/json`
  - `Accept: application/json`
- **Body (JSON):**
```json
{
  "nim": "12345678",
  "nama": "John Doe",
  "id_prodi": 1,
  "email": "john@example.com",
  "no_telp": "081234567890",
  "alamat": "Jl. Contoh No. 123"
}
```
**Note:** `no_telp` dan `alamat` bersifat opsional

#### Update Mahasiswa
- **Method:** `PUT` atau `PATCH`
- **URL:** `http://localhost:8000/api/mahasiswa/{nim}`
- **Headers:** 
  - `Content-Type: application/json`
  - `Accept: application/json`
- **Body (JSON):**
```json
{
  "nama": "Jane Doe",
  "id_prodi": 2,
  "email": "jane@example.com",
  "no_telp": "081234567891",
  "alamat": "Jl. Baru No. 456"
}
```

#### Delete Mahasiswa
- **Method:** `DELETE`
- **URL:** `http://localhost:8000/api/mahasiswa/{nim}`
- **Response:**
```json
{
  "message": "Mahasiswa berhasil dihapus"
}
```

---

### 3. MATAKULIAH

#### Get All Matakuliah
- **Method:** `GET`
- **URL:** `http://localhost:8000/api/matakuliah`
- **Response Example:**
```json
{
  "data": [
    {
      "id_matakuliah": 1,
      "nama_matakuliah": "Pemrograman Web",
      "sks": 3,
      "created_at": "2025-12-05T10:15:00.000000Z",
      "updated_at": "2025-12-05T10:15:00.000000Z"
    }
  ],
  "links": {...},
  "meta": {...}
}
```

#### Get Single Matakuliah
- **Method:** `GET`
- **URL:** `http://localhost:8000/api/matakuliah/{id_matakuliah}`
- **Example:** `http://localhost:8000/api/matakuliah/1`

#### Create Matakuliah
- **Method:** `POST`
- **URL:** `http://localhost:8000/api/matakuliah`
- **Headers:** 
  - `Content-Type: application/json`
  - `Accept: application/json`
- **Body (JSON):**
```json
{
  "nama_matakuliah": "Pemrograman Web",
  "sks": 3
}
```

#### Update Matakuliah
- **Method:** `PUT` atau `PATCH`
- **URL:** `http://localhost:8000/api/matakuliah/{id_matakuliah}`
- **Headers:** 
  - `Content-Type: application/json`
  - `Accept: application/json`
- **Body (JSON):**
```json
{
  "nama_matakuliah": "Basis Data Lanjut",
  "sks": 4
}
```

#### Delete Matakuliah
- **Method:** `DELETE`
- **URL:** `http://localhost:8000/api/matakuliah/{id_matakuliah}`
- **Response:**
```json
{
  "message": "Matakuliah berhasil dihapus"
}
```

---

### 4. NILAI

#### Get All Nilai
- **Method:** `GET`
- **URL:** `http://localhost:8000/api/nilai`
- **Response Example:**
```json
{
  "data": [
    {
      "id_nilai": 1,
      "nim": "12345678",
      "mahasiswa": {
        "nim": "12345678",
        "nama": "John Doe",
        "id_prodi": 1,
        "prodi": {
          "id_prodi": 1,
          "nama_prodi": "Teknik Informatika",
          "created_at": "2025-12-05T10:15:00.000000Z",
          "updated_at": "2025-12-05T10:15:00.000000Z"
        },
        "email": "john@example.com",
        "no_telp": "081234567890",
        "alamat": "Jl. Contoh No. 123",
        "created_at": "2025-12-05T10:15:00.000000Z",
        "updated_at": "2025-12-05T10:15:00.000000Z"
      },
      "id_matakuliah": 1,
      "matakuliah": {
        "id_matakuliah": 1,
        "nama_matakuliah": "Pemrograman Web",
        "sks": 3,
        "created_at": "2025-12-05T10:15:00.000000Z",
        "updated_at": "2025-12-05T10:15:00.000000Z"
      },
      "nilai": 85.50,
      "created_at": "2025-12-05T10:15:00.000000Z",
      "updated_at": "2025-12-05T10:15:00.000000Z"
    }
  ],
  "links": {...},
  "meta": {...}
}
```

#### Get Single Nilai
- **Method:** `GET`
- **URL:** `http://localhost:8000/api/nilai/{id_nilai}`
- **Example:** `http://localhost:8000/api/nilai/1`

#### Create Nilai
- **Method:** `POST`
- **URL:** `http://localhost:8000/api/nilai`
- **Headers:** 
  - `Content-Type: application/json`
  - `Accept: application/json`
- **Body (JSON):**
```json
{
  "nim": "12345678",
  "id_matakuliah": 1,
  "nilai": 85.50
}
```

#### Update Nilai
- **Method:** `PUT` atau `PATCH`
- **URL:** `http://localhost:8000/api/nilai/{id_nilai}`
- **Headers:** 
  - `Content-Type: application/json`
  - `Accept: application/json`
- **Body (JSON):**
```json
{
  "nim": "12345678",
  "id_matakuliah": 1,
  "nilai": 90.00
}
```

#### Delete Nilai
- **Method:** `DELETE`
- **URL:** `http://localhost:8000/api/nilai/{id_nilai}`
- **Response:**
```json
{
  "message": "Nilai berhasil dihapus"
}
```

---

## 🔧 Cara Menggunakan dengan Postman/Insomnia

### Setup di Postman

1. **Install Postman** dari https://www.postman.com/downloads/

2. **Jalankan Laravel Server**
   ```bash
   php artisan serve
   ```
   Server akan berjalan di `http://localhost:8000`

3. **Testing API:**

   **Contoh: Get All Prodi**
   - Buka Postman
   - Pilih method: `GET`
   - URL: `http://localhost:8000/api/prodi`
   - Klik "Send"

   **Contoh: Create Mahasiswa**
   - Pilih method: `POST`
   - URL: `http://localhost:8000/api/mahasiswa`
   - Pilih tab "Headers"
     - Key: `Content-Type`, Value: `application/json`
     - Key: `Accept`, Value: `application/json`
   - Pilih tab "Body"
   - Pilih "raw" dan "JSON"
   - Masukkan data:
   ```json
   {
     "nim": "87654321",
     "nama": "Test User",
     "id_prodi": 1,
     "email": "test@example.com",
     "no_telp": "081234567890",
     "alamat": "Test Address"
   }
   ```
   - Klik "Send"

### Setup di Insomnia

1. **Install Insomnia** dari https://insomnia.rest/download

2. **Jalankan Laravel Server**
   ```bash
   php artisan serve
   ```

3. **Testing API:**

   **Contoh: Get All Matakuliah**
   - Buka Insomnia
   - Klik "New Request"
   - Pilih method: `GET`
   - URL: `http://localhost:8000/api/matakuliah`
   - Klik "Send"

   **Contoh: Create Nilai**
   - Klik "New Request"
   - Pilih method: `POST`
   - URL: `http://localhost:8000/api/nilai`
   - Pilih "Body" → "JSON"
   - Masukkan data:
   ```json
   {
     "nim": "87654321",
     "id_matakuliah": 1,
     "nilai": 88.75
   }
   ```
   - Klik "Send"

---

## ✅ Validasi Error Response

Jika data yang dikirim tidak valid, API akan mengembalikan response error:

```json
{
  "message": "Nama prodi wajib diisi. (and 1 more error)",
  "errors": {
    "nama_prodi": [
      "Nama prodi wajib diisi"
    ],
    "sks": [
      "SKS wajib diisi"
    ]
  }
}
```

---

## 📝 Catatan Penting

1. **Pagination:** Semua endpoint `GET` yang mengembalikan list menggunakan pagination (15 items per page)

2. **Foreign Key:** 
   - Mahasiswa memiliki relasi ke Prodi
   - Nilai memiliki relasi ke Mahasiswa dan Matakuliah
   - Hapus data akan cascade delete ke data terkait

3. **Primary Key:**
   - Prodi: `id_prodi` (auto increment)
   - Mahasiswa: `nim` (string, manual input)
   - Matakuliah: `id_matakuliah` (auto increment)
   - Nilai: `id_nilai` (auto increment)

4. **URL Parameter:** 
   - Untuk Mahasiswa gunakan `{nim}` bukan `{id}`
   - Untuk yang lain gunakan `{id_prodi}`, `{id_matakuliah}`, `{id_nilai}`

---

## 🚀 Quick Start Testing

### 1. Buat Prodi
```bash
POST http://localhost:8000/api/prodi
Body: {"nama_prodi": "Teknik Informatika"}
```

### 2. Buat Mahasiswa
```bash
POST http://localhost:8000/api/mahasiswa
Body: {
  "nim": "12345678",
  "nama": "John Doe",
  "id_prodi": 1,
  "email": "john@example.com"
}
```

### 3. Buat Matakuliah
```bash
POST http://localhost:8000/api/matakuliah
Body: {"nama_matakuliah": "Pemrograman Web", "sks": 3}
```

### 4. Buat Nilai
```bash
POST http://localhost:8000/api/nilai
Body: {
  "nim": "12345678",
  "id_matakuliah": 1,
  "nilai": 85.5
}
```

### 5. Lihat Semua Data
```bash
GET http://localhost:8000/api/prodi
GET http://localhost:8000/api/mahasiswa
GET http://localhost:8000/api/matakuliah
GET http://localhost:8000/api/nilai
```
