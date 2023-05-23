<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->delete();
        $permission_modules = array(
            array('permission' => 'Dashboard'),
            array('permission' => 'Users'),
            array('permission' => 'Products'),
            array('permission' => 'Contents'),
            array('permission' => 'Faqs'),
            array('permission' => 'Contact'),
            array('permission' => 'Notifications'),
            array('permission' => 'DBBackup'),
        );
        DB::table('permissions')->insert($permission_modules);
    }
}
