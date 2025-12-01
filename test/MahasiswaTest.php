<?php

// Pastikan Anda telah mengatur autoloader (misalnya melalui composer)
// Jika Anda tidak menggunakan kelas terpisah, Anda dapat mendefinisikan
// data mahasiswa di dalam method test atau memuatnya dari file yang sesuai.

use PHPUnit\Framework\TestCase;

class MahasiswaTest extends TestCase
{
    /**
     * Data mahasiswa statis yang sama dengan yang ada di file index/data.
     * Dalam kasus nyata, ini akan menjadi data yang diambil dari model/database.
     * Kita definisikan ulang untuk keperluan pengujian.
     */
    private $mahasiswa = [
        ["nim" => "2312345678", "nama" => "Diva Triana Murti", "jurusan" => "Teknik Informatika"],
        ["nim" => "2312345679", "nama" => "Rani Putri", "jurusan" => "Manajemen Informatika"],
        ["nim" => "2312345680", "nama" => "Andi Saputra", "jurusan" => "Teknologi Informasi"],
        ["nim" => "2312345681", "nama" => "Budi Santoso", "jurusan" => "Rekayasa Perangkat Lunak"],
        ["nim" => "2312345682", "nama" => "Nadhea Ameylia", "jurusan" => "Manajemen Informatika"],
    ];

    ## Test 1: Memastikan Jumlah Data Sesuai
    public function testJumlahDataMahasiswaBenar(): void
    {
        // Memastikan array $mahasiswa memiliki 5 entri/baris
        $this->assertCount(5, $this->mahasiswa, "Seharusnya ada 5 data mahasiswa.");
    }

    ## Test 2: Memastikan Setiap Entri Memiliki Kunci Wajib
    public function testStrukturDataMemilikiKunciWajib(): void
    {
        $requiredKeys = ["nim", "nama", "jurusan"];
        
        foreach ($this->mahasiswa as $data) {
            // Memastikan setiap elemen dalam array adalah array
            $this->assertIsArray($data);
            
            // Memastikan setiap array memiliki kunci yang diperlukan
            foreach ($requiredKeys as $key) {
                $this->assertArrayHasKey($key, $data, "Entri mahasiswa harus memiliki kunci '{$key}'.");
            }
        }
    }

    ## Test 3: Memastikan Data Khusus (NIM/Nama) Sudah Tepat
    public function testDataMahasiswaTertentuBenar(): void
    {
        // Cari data Diva Triana Murti
        $diva = $this->mahasiswa[0]; 

        // Memastikan NIM Diva benar
        $this->assertEquals("2312345678", $diva["nim"], "NIM Diva tidak sesuai.");

        // Memastikan Jurusan Andi Saputra benar
        $this->assertEquals("Teknologi Informasi", $this->mahasiswa[2]["jurusan"], "Jurusan Andi Saputra tidak sesuai.");
    }

    ## Test 4: Memastikan Semua Jurusan Diisi
    public function testJurusanTidakBolehKosong(): void
    {
        foreach ($this->mahasiswa as $data) {
            // Memastikan nilai 'jurusan' tidak kosong
            $this->assertNotEmpty($data["jurusan"], "Kolom Jurusan tidak boleh kosong.");
        }
    }
}