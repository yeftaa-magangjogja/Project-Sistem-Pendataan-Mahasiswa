<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
                'user_id'       => 7, 
                'kelas_id'      => NULL, 
                'nim'           => '220001', 
                'nama'          => 'Andi Pratama', 
                'tempat_lahir'  => 'Jakarta', 
                'tanggal_lahir' => '2000-01-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now() ],
            [
                'user_id'       => 8, 
                'kelas_id'      => NULL, 
                'nim'           => '220002', 
                'nama'          => 'Budi Setiawan', 
                'tempat_lahir'  => 'Bandung', 
                'tanggal_lahir' => '2000-02-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 9, 
                'kelas_id'      => NULL, 
                'nim'           => '220003', 
                'nama'          => 'Citra Dewi', 
                'tempat_lahir'  => 'Surabaya', 
                'tanggal_lahir' => '2000-03-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 10, 
                'kelas_id'      => NULL, 
                'nim'           => '220004', 
                'nama'          => 'Dian Wulandari', 
                'tempat_lahir'  => 'Medan', 
                'tanggal_lahir' => '2000-04-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 11, 
                'kelas_id'      => NULL, 
                'nim'           => '220005', 
                'nama'          => 'Eko Prabowo', 
                'tempat_lahir'  => 'Yogyakarta', 
                'tanggal_lahir' => '2000-05-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 12, 
                'kelas_id'      => NULL, 
                'nim'           => '220006', 
                'nama'          => 'Fina Kusuma', 
                'tempat_lahir'  => 'Makassar', 
                'tanggal_lahir' => '2000-06-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 13, 
                'kelas_id'      => NULL, 
                'nim'           => '220007', 
                'nama'          => 'Gilang Nugroho', 
                'tempat_lahir'  => 'Semarang', 
                'tanggal_lahir' => '2000-07-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 14, 
                'kelas_id'      => NULL, 
                'nim'           => '220008', 
                'nama'          => 'Hani Sari', 
                'tempat_lahir'  => 'Malang', 
                'tanggal_lahir' => '2000-08-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 15, 
                'kelas_id'      => NULL, 
                'nim'           => '220009', 
                'nama'          => 'Iwan Kurniawan', 
                'tempat_lahir'  => 'Solo', 
                'tanggal_lahir' => '2000-09-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 16, 
                'kelas_id'      => NULL, 
                'nim'           => '220010', 
                'nama'          => 'Joko Widodo', 
                'tempat_lahir'  => 'Pekanbaru', 
                'tanggal_lahir' => '2000-10-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 17, 
                'kelas_id'      => NULL, 
                'nim'           => '220011', 
                'nama'          => 'Krisna Putra', 
                'tempat_lahir'  => 'Palembang', 
                'tanggal_lahir' => '2000-11-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 18, 
                'kelas_id'      => NULL, 
                'nim'           => '220012', 
                'nama'          => 'Lina Marlina', 
                'tempat_lahir'  => 'Batam', 
                'tanggal_lahir' => '2000-12-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 19, 
                'kelas_id'      => NULL, 
                'nim'           => '220013', 
                'nama'          => 'Maya Puspita', 
                'tempat_lahir'  => 'Jakarta', 
                'tanggal_lahir' => '2001-01-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 20, 
                'kelas_id'      => NULL, 
                'nim'           => '220014', 
                'nama'          => 'Nanda Pratiwi', 
                'tempat_lahir'  => 'Bandung', 
                'tanggal_lahir' => '2001-02-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 21, 
                'kelas_id'      => NULL, 
                'nim'           => '220015', 
                'nama'          => 'Oka Setiawan', 
                'tempat_lahir'  => 'Surabaya', 
                'tanggal_lahir' => '2001-03-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 22, 
                'kelas_id'      => NULL, 
                'nim'           => '220016', 
                'nama'          => 'Putri Ayu', 
                'tempat_lahir'  => 'Medan', 
                'tanggal_lahir' => '2001-04-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 23, 
                'kelas_id'      => NULL, 
                'nim'           => '220017', 
                'nama'          => 'Rudi Hartono', 
                'tempat_lahir'  => 'Yogyakarta', 
                'tanggal_lahir' => '2001-05-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 24, 
                'kelas_id'      => NULL, 
                'nim'           => '220018', 
                'nama'          => 'Sari Melati', 
                'tempat_lahir'  => 'Makassar', 
                'tanggal_lahir' => '2001-06-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 25, 
                'kelas_id'      => NULL, 
                'nim'           => '220019', 
                'nama'          => 'Teguh Santoso', 
                'tempat_lahir'  => 'Semarang', 
                'tanggal_lahir' => '2001-07-01',
                'edit'          => '0',
                'created_at'    => now(),
                'updated_at'    => now()],
            [
                'user_id'       => 26, 
                'kelas_id'      => NULL, 
                'nim'           => '220020', 
                'nama'          => 'Uli Sari', 
                'tempat_lahir'  => 'Malang', 
                'tanggal_lahir' => '2001-08-01',
                'edit'          =>  '0',
                'created_at'    => now(),
                'updated_at'    => now()],
        ]);
    }
}
