<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Item
        Permission::create([
            'name' => 'create_item',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'delete_item',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'view_item',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'edit_item',
            'guard_name' => 'web',
        ]);

        //Supplier
        Permission::create([
            'name' => 'create_supplier',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'delete_supplier',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'view_supplier',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'edit_supplier',
            'guard_name' => 'web',
        ]);

        //Customer
        Permission::create([
            'name' => 'create_customer',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'delete_customer',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'view_customer',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'edit_customer',
            'guard_name' => 'web',
        ]);

        //Invoice
        Permission::create([
            'name' => 'create_invoice',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'delete_invoice',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'view_invoice',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'edit_invoice',
            'guard_name' => 'web',
        ]);
      
        //bill
        Permission::create([
            'name' => 'create_bill',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'delete_bill',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'view_bill',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'edit_bill',
            'guard_name' => 'web',
        ]);

        //Category
        Permission::create([
            'name' => 'create_category',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'delete_category',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'view_category',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'edit_category',
            'guard_name' => 'web',
        ]);
      
        //Company
        Permission::create([
            'name' => 'create_company',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'delete_company',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'view_company',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'edit_company',
            'guard_name' => 'web',
        ]);
      
        //Income
        Permission::create([
            'name' => 'create_income',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'delete_income',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'view_income',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'edit_income',
            'guard_name' => 'web',
        ]);
      
        //Expenditure
        Permission::create([
            'name' => 'create_expenditure',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'delete_expenditure',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'view_expenditure',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'edit_expenditure',
            'guard_name' => 'web',
        ]);

        //Tax
        Permission::create([
            'name' => 'create_tax',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'delete_tax',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'view_tax',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'edit_tax',
            'guard_name' => 'web',
        ]);
      
        //Account
        Permission::create([
            'name' => 'create_account',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'delete_account',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'view_account',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'edit_account',
            'guard_name' => 'web',
        ]);
      
        //transfer
        Permission::create([
            'name' => 'create_transfer',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'delete_transfer',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'view_transfer',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'edit_transfer',
            'guard_name' => 'web',
        ]);
      
        //Transaction
        Permission::create([
            'name' => 'create_tranction',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'delete_tranction',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'view_tranction',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'edit_tranction',
            'guard_name' => 'web',
        ]);
      
        //User
        Permission::create([
            'name' => 'create_user',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'delete_user',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'view_user',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'edit_user',
            'guard_name' => 'web',
        ]);
      
    }
}
