<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Barang::insert([
            [
                'id_barang' => '1',
                'kode_barang' => 'PRD001',
                'nama_barang' => 'Indomie' ,
                'kategori_barang' => 'Makanan',
                'harga' => '3500',
                'qty' => '250'
            ],
            [
                'id_barang' => '2',
                'kode_barang' => 'PRD002',
                'nama_barang' => 'Mie Sedap' ,
                'kategori_barang' => 'Makanan',
                'harga' => '3000',
                'qty' => '350'
            ],
            [
                'id_barang' => '3',
                'kode_barang' => 'PRD003',
                'nama_barang' => 'Le Mineral' ,
                'kategori_barang' => 'Minuman',
                'harga' => '6000',
                'qty' => '500'
            ],
            [
                'id_barang' => '4',
                'kode_barang' => 'PRD004',
                'nama_barang' => 'Aqua' ,
                'kategori_barang' => 'Minuman',
                'harga' => '4000',
                'qty' => '500'
            ],
            [
                'id_barang' => '5',
                'kode_barang' => 'PRD005',
                'nama_barang' => 'Susu Dancow' ,
                'kategori_barang' => 'Minuman',
                'harga' => '20000',
                'qty' => '225'
            ],
            [
                'id_barang' => '6',
                'kode_barang' => 'PRD006',
                'nama_barang' => 'Fiesta Chicken Nugget' ,
                'kategori_barang' => 'Frozen Food',
                'harga' => '45000',
                'qty' => '155'
            ],
            [
                'id_barang' => '7',
                'kode_barang' => 'PRD007',
                'nama_barang' => 'So Good Wings' ,
                'kategori_barang' => 'Frozen Food',
                'harga' => '60000',
                'qty' => '500'
            ],
            [
                'id_barang' => '8',
                'kode_barang' => 'PRD008',
                'nama_barang' => 'Lays' ,
                'kategori_barang' => 'Snack',
                'harga' => '12000',
                'qty' => '500'
            ],
            [
                'id_barang' => '9',
                'kode_barang' => 'PRD009',
                'nama_barang' => 'Pota Bee' ,
                'kategori_barang' => 'Snack',
                'harga' => '7500',
                'qty' => '500'
            ],
            [
                'id_barang' => '10',
                'kode_barang' => 'PRD010',
                'nama_barang' => 'Qtela' ,
                'kategori_barang' => 'Snack',
                'harga' => '15000',
                'qty' => '500'
            ],
            [   'id_barang' => '11',
                'kode_barang' => 'PRD011',
                'nama_barang' => 'Good Days' ,
                'kategori_barang' => 'Minuman',
                'harga' => '21000',
                'qty' => '130'
            ],
            [
                'id_barang' => '12',
                'kode_barang' => 'PRD012',
                'nama_barang' => 'Samyang Spicy' ,
                'kategori_barang' => 'Makanan',
                'harga' => '18500',
                'qty' => '500'
            ],
            [
                'id_barang' => '13',
                'kode_barang' => 'PRD013',
                'nama_barang' => 'Sup Jamur Instan' ,
                'kategori_barang' => 'Makanan',
                'harga' => '9500',
                'qty' => '500'
            ],
            [
                'id_barang' => '14',
                'kode_barang' => 'PRD014',
                'nama_barang' => 'Mogu Mogu' ,
                'kategori_barang' => 'Minuman',
                'harga' => '15000',
                'qty' => '500'
            ],
            [
                'id_barang' => '15',
                'kode_barang' => 'PRD015',
                'nama_barang' => 'Teh Pucuk' ,
                'kategori_barang' => 'Minuman',
                'harga' => '7500',
                'qty' => '500'
            ],
            [
                'id_barang' => '16',
                'kode_barang' => 'PRD016',
                'nama_barang' => 'Nutrijell' ,
                'kategori_barang' => 'Snack',
                'harga' => '3800',
                'qty' => '500'
            ],
            [
                'id_barang' => '17',
                'kode_barang' => 'PRD017',
                'nama_barang' => 'Super Bubur' ,
                'kategori_barang' => 'Makanan',
                'harga' => '18500',
                'qty' => '500'
            ],
            [
                'id_barang' => '18',
                'kode_barang' => 'PRD018',
                'nama_barang' => 'Gekikara Ramen' ,
                'kategori_barang' => 'Makanan',
                'harga' => '10500',
                'qty' => '250'
            ],
            [
                'id_barang' => '19',
                'kode_barang' => 'PRD019',
                'nama_barang' => 'Shin Ramyun' ,
                'kategori_barang' => 'Makanan',
                'harga' => '12300',
                'qty' => '150'
            ],
            [
                'id_barang' => '20',
                'kode_barang' => 'PRD020',
                'nama_barang' => 'Lemonilo' ,
                'kategori_barang' => 'Makanan',
                'harga' => '8500',
                'qty' => '50'
            ]
        ]);
  }
}
