<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Enums\UserEnum;
use App\Models\Category;
use App\Models\Partial;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
   /**
    * Seed the application's database.
    *
    * @return void
    */
   public function run()
   {
      // \App\Models\User::factory(10)->create();

      // \App\Models\User::factory()->create([
      //     'name' => 'Test User',
      //     'email' => 'test@example.com',
      // ]);\

      $this->call([
         PermissionTableSeeder::class,
      ]);

      $user = User::create([
         'name' => "Omar Tarek",
         'email' => "admin@admin.com",
         'password' => Hash::make("123456"),
         'status' => UserEnum::CUSTOMER(),
         'phone' => '01069472545'
      ]);
      $role = Role::create(['name' => 'Admin']);
      $permissions = Permission::all();
      $role->syncPermissions($permissions);
      $user->assignRole($role);

      Category::create([
         'title' => [
            'en' => fake()->sentence(3, true),
            'ar' => fake()->sentence(3, true),
         ],
         'description' => [
            'en' => fake()->paragraph(1, true),
            'ar' => fake()->paragraph(1, true),
         ],
         'status' => random_int(0, 1),
      ]);

      SubCategory::factory(100)->create([
         'category_id' => 1,
      ]);

      Partial::create([
         'title' => [
            'en' => fake()->sentence(3, true),
            'ar' => fake()->sentence(3, true),
         ],
         'body' => [
            'en' => fake()->paragraph(1, true),
            'ar' => fake()->paragraph(1, true),
         ],
         'type' => 'about',
      ]);

      Partial::create([
         'title' => [
            'en' => fake()->sentence(3, true),
            'ar' => fake()->sentence(3, true),
         ],
         'body' => [
            'en' => fake()->paragraph(1, true),
            'ar' => fake()->paragraph(1, true),
         ],
         'type' => 'contact',
      ]);

      Partial::create([
         'title' => [
            'en' => fake()->sentence(3, true),
            'ar' => fake()->sentence(3, true),
         ],
         'body' => [
            'en' => fake()->paragraph(1, true),
            'ar' => fake()->paragraph(1, true),
         ],
         'type' => 'terms',
      ]);
   }
}
