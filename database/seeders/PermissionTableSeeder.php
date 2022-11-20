<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels = ['-create', '-delete', "-show", "-update", '-index'];
        $permissions = [
         'Customer',
         'Product',
         'Subcategory',
         'Category',
         'Product Attribute',
         'Role'
        ];
        foreach($permissions as $permission){
         foreach($labels as $label){
            Permission::create(['name' => $permission . $label]);
         }
        }
    }
}
