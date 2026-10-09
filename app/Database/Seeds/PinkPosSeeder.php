<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
class PinkPosSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $this->db->table('customers')->insertBatch([
            ['full_name'=>'Casley Pilueta','email'=>'casley.pilueta@example.com','phone'=>'0917 123 4567','created_at'=>$now,'updated_at'=>$now],
            ['full_name'=>'Eimerson Agcaoili','email'=>'eimerson.agcaoili@example.com','phone'=>'0918 234 5678','created_at'=>$now,'updated_at'=>$now],
            ['full_name'=>'Carl Eugenio','email'=>'carl.eugenio@example.com','phone'=>'0919 345 6789','created_at'=>$now,'updated_at'=>$now],
            ['full_name'=>'Miel Crismundo','email'=>'miel.crismundo@example.com','phone'=>'0920 456 7890','created_at'=>$now,'updated_at'=>$now],
            ['full_name'=>'Bernadette Santos','email'=>'bernadette.santos@example.com','phone'=>'0921 567 8901','created_at'=>$now,'updated_at'=>$now],
        ]);
        $this->db->table('users')->insertBatch([
            ['username'=>'admin01','full_name'=>'Ayeza Samantha Arcilla','role'=>'Administrator','avatar'=>null,'created_at'=>$now,'updated_at'=>$now],
            ['username'=>'manager01','full_name'=>'Ardon Reyes','role'=>'Store Manager','avatar'=>null,'created_at'=>$now,'updated_at'=>$now],
            ['username'=>'cashier01','full_name'=>'Krizelle Joyce Toledo','role'=>'Cashier','avatar'=>null,'created_at'=>$now,'updated_at'=>$now],
            ['username'=>'cashier02','full_name'=>'Maria Diaz','role'=>'Cashier','avatar'=>null,'created_at'=>$now,'updated_at'=>$now],
            ['username'=>'inventory01','full_name'=>'Tobbie Arlos','role'=>'Inventory Staff','avatar'=>null,'created_at'=>$now,'updated_at'=>$now],
        ]);
    }
}
