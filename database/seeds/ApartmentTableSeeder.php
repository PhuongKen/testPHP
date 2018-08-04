<?php

use Illuminate\Database\Seeder;

class ApartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'id' => 1,
                'name' => 'Home 1',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 2,
                'name' => 'Home 2',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 3,
                'name' => 'Home 3',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 4,
                'name' => 'Home 4',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 5,
                'name' => 'Home 5',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 6,
                'name' => 'Home 6',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 7,
                'name' => 'Home 7',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 8,
                'name' => 'Home 8',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 9,
                'name' => 'Home 9',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 10,
                'name' => 'Home 10',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 11,
                'name' => 'Home 11',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 12,
                'name' => 'Home 12',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 13,
                'name' => 'Home 13',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 14,
                'name' => 'Home 14',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 15,
                'name' => 'Home 15',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 16,
                'name' => 'Home 16',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 17,
                'name' => 'Home 17',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 18,
                'name' => 'Home 18',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 19,
                'name' => 'Home 19',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id' => 20,
                'name' => 'Home 20',
                'address' => 'Linh Dam - Ha Noi',
                'price' => '1500',
                'infoGeneral' => 'Chung cu Vinhome',
                'infoDetail' => 'Chung cu cao cap',
                'avartar' => 'http://www.pci.com.vn/vnt_upload/project/07_2017/DAQ12.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ]
        ]);
    }
}
