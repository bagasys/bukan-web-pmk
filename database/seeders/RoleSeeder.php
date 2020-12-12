<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define role

        $super_admin = Role::create([
            'name' => 'super admin',
            'guard_name' => 'web',
        ]);

        $mahasiswa = Role::create([
            'name' => 'mahasiswa',
            'guard_name' => 'web',
        ]);

        $pengurus_pemuridan = Role::create([
            'name' => 'pengurus pemuridan',
            'guard_name' => 'web',
        ]);

        $pengurus_dope = Role::create([
            'name' => 'pengurus dope',
            'guard_name' => 'web',
        ]);

        $pengurus_medfo = Role::create([
            'name' => 'pengurus medfo',
            'guard_name' => 'web',
        ]);

        $pengurus_kutu = Role::create([
            'name' => 'pengurus kutu',
            'guard_name' => 'web',
        ]);

        $bph_pemuridan = Role::create([
            'name' => 'bph pemuridan',
            'guard_name' => 'web',
        ]);

        $bph_dope = Role::create([
            'name' => 'bph dope',
            'guard_name' => 'web',
        ]);

        $bph_kutu = Role::create([
            'name' => 'bph kutu',
            'guard_name' => 'web',
        ]);

        $bph_medfo = Role::create([
            'name' => 'bph medfo',
            'guard_name' => 'web',
        ]);

        $ketua = Role::create([
            'name' => 'ketua',
            'guard_name' => 'web',
        ]);

        $sekretaris = Role::create([
            'name' => 'sekretaris',
            'guard_name' => 'web',
        ]);

        $bendahara = Role::create([
            'name' => 'bendahara',
            'guard_name' => 'web',
        ]);

        $pkk = Role::create([
            'name' => 'pkk',
            'guard_name' => 'web',
        ]);

        $dosen = Role::create([
            'name' => 'dosen',
            'guard_name' => 'web',
        ]);

        $pengurus_tpkk = Role::create([
            'name' => 'pengurus tpkk',
            'guard_name' => 'web',
        ]);

        $alumni = Role::create([
            'name' => 'alumni',
            'guard_name' => 'web',
        ]);

        $pengurus_alumni = Role::create([
            'name' => 'pengurus alumni',
            'guard_name' => 'web',
        ]);

        // Define permissions
        $add_student = Permission::create(['name' => 'add student', 'guard_name' => 'web']);
        $view_student = Permission::create(['name' => 'view student', 'guard_name' => 'web']);
        $view_detail_student = Permission::create(['name' => 'view detail student', 'guard_name' => 'web']);
        $edit_student = Permission::create(['name' => 'edit student', 'guard_name' => 'web']);
        $delete_student = Permission::create(['name' => 'delete student', 'guard_name' => 'web']);

        $add_alumni = Permission::create(['name' => 'add alumni', 'guard_name' => 'web']);
        $view_alumni = Permission::create(['name' => 'view alumni', 'guard_name' => 'web']);
        $view_detail_alumni = Permission::create(['name' => 'view detail alumni', 'guard_name' => 'web']);
        $edit_alumni = Permission::create(['name' => 'edit alumni', 'guard_name' => 'web']);
        $delete_alumni = Permission::create(['name' => 'delete alumni', 'guard_name' => 'web']);

        $add_lecturer = Permission::create(['name' => 'add lecturer', 'guard_name' => 'web']);
        $view_lecturer = Permission::create(['name' => 'view lecturer', 'guard_name' => 'web']);
        $view_detail_lecturer = Permission::create(['name' => 'view detail lecturer', 'guard_name' => 'web']);
        $edit_lecturer = Permission::create(['name' => 'edit lecturer', 'guard_name' => 'web']);
        $delete_lecturer = Permission::create(['name' => 'delete lecturer', 'guard_name' => 'web']);

        $add_event = Permission::create(['name' => 'add event', 'guard_name' => 'web']);
        $view_event = Permission::create(['name' => 'view event', 'guard_name' => 'web']);
        $view_detail_event = Permission::create(['name' => 'view detail event', 'guard_name' => 'web']);
        $edit_event = Permission::create(['name' => 'edit event', 'guard_name' => 'web']);
        $delete_event = Permission::create(['name' => 'delete event', 'guard_name' => 'web']);

        $add_transaction = Permission::create(['name' => 'add transaction', 'guard_name' => 'web']);
        $view_transaction = Permission::create(['name' => 'view transaction', 'guard_name' => 'web']);
        $edit_transaction = Permission::create(['name' => 'edit transaction', 'guard_name' => 'web']);
        $delete_transaction = Permission::create(['name' => 'delete transaction', 'guard_name' => 'web']);

        $add_counseling = Permission::create(['name' => 'add counseling', 'guard_name' => 'web']);
        $view_counseling = Permission::create(['name' => 'view counseling', 'guard_name' => 'web']);
        $view_detail_counseling = Permission::create(['name' => 'view detail counseling', 'guard_name' => 'web']);
        $edit_counseling = Permission::create(['name' => 'edit counseling', 'guard_name' => 'web']);
        $delete_counseling = Permission::create(['name' => 'delete counseling', 'guard_name' => 'web']);

        $add_prayer_request = Permission::create(['name' => 'add prayer request', 'guard_name' => 'web']);
        $view_prayer_request = Permission::create(['name' => 'view prayer request', 'guard_name' => 'web']);
        $view_detail_prayer_request = Permission::create(['name' => 'view detail prayer request', 'guard_name' => 'web']);
        $edit_prayer_request = Permission::create(['name' => 'edit prayer request', 'guard_name' => 'web']);
        $delete_prayer_request = Permission::create(['name' => 'delete prayer request', 'guard_name' => 'web']);

        $add_small_group = Permission::create(['name' => 'add small group', 'guard_name' => 'web']);
        $view_small_group = Permission::create(['name' => 'view small group', 'guard_name' => 'web']);
        $view_detail_small_group = Permission::create(['name' => 'view detail small group', 'guard_name' => 'web']);
        $edit_small_group = Permission::create(['name' => 'edit small group', 'guard_name' => 'web']);
        $delete_small_group = Permission::create(['name' => 'delete small group', 'guard_name' => 'web']);

        $add_counselor = Permission::create(['name' => 'add counselor', 'guard_name' => 'web']);
        $view_counselor = Permission::create(['name' => 'view counselor', 'guard_name' => 'web']);
        $view_detail_counselor = Permission::create(['name' => 'view detail counselor', 'guard_name' => 'web']);
        $edit_counselor = Permission::create(['name' => 'edit counselor', 'guard_name' => 'web']);
        $delete_counselor = Permission::create(['name' => 'delete counselor', 'guard_name' => 'web']);

        // Give Role Permission
        /*
            Ketua
        */
        $ketua->givePermissionTo($view_student);
        $ketua->givePermissionTo($view_detail_student);
        $ketua->givePermissionTo($view_lecturer);
        $ketua->givePermissionTo($view_detail_lecturer);
        $ketua->givePermissionTo($view_alumni);
        // $ketua->givePermissionTo($view_detail_alumni);
        $ketua->givePermissionTo($view_event);
        $ketua->givePermissionTo($view_detail_event);
        $ketua->givePermissionTo($view_transaction);
        $ketua->givePermissionTo($view_counseling);
        $ketua->givePermissionTo($add_counseling);
        $ketua->givePermissionTo($edit_counseling);
        $ketua->givePermissionTo($delete_counseling);
        $ketua->givePermissionTo($view_detail_counseling);
        $ketua->givePermissionTo($view_prayer_request);
        $ketua->givePermissionTo($view_detail_prayer_request);
        $ketua->givePermissionTo($add_prayer_request);
        $ketua->givePermissionTo($edit_prayer_request);
        $ketua->givePermissionTo($delete_prayer_request);
        $ketua->givePermissionTo($view_small_group);
        $ketua->givePermissionTo($view_detail_small_group);

        /*
            Bendahara
        */
        $bendahara->givePermissionTo($view_student);
        $bendahara->givePermissionTo($view_detail_student);
        $bendahara->givePermissionTo($view_lecturer);
        $bendahara->givePermissionTo($view_detail_lecturer);
        $bendahara->givePermissionTo($view_alumni);
        // $bendahara->givePermissionTo($view_detail_alumni);
        $bendahara->givePermissionTo($view_event);
        $bendahara->givePermissionTo($view_detail_event);
        $bendahara->givePermissionTo($view_transaction);
        $bendahara->givePermissionTo($add_transaction);
        $bendahara->givePermissionTo($edit_transaction);
        $bendahara->givePermissionTo($view_counseling);
        $bendahara->givePermissionTo($add_counseling);
        $bendahara->givePermissionTo($view_detail_counseling);
        $bendahara->givePermissionTo($edit_counseling);
        $bendahara->givePermissionTo($delete_counseling);
        $bendahara->givePermissionTo($view_prayer_request);
        $bendahara->givePermissionTo($view_detail_prayer_request);
        $bendahara->givePermissionTo($add_prayer_request);
        $bendahara->givePermissionTo($edit_prayer_request);
        $bendahara->givePermissionTo($delete_prayer_request);
        $bendahara->givePermissionTo($view_small_group);
        $bendahara->givePermissionTo($view_detail_small_group);

        /*
            Sekretaris
        */
        $sekretaris->givePermissionTo($view_student);
        $sekretaris->givePermissionTo($view_detail_student);
        $sekretaris->givePermissionTo($view_lecturer);
        $sekretaris->givePermissionTo($view_detail_lecturer);
        $sekretaris->givePermissionTo($view_alumni);
        // $sekretaris->givePermissionTo($view_detail_alumni);
        $sekretaris->givePermissionTo($view_event);
        $sekretaris->givePermissionTo($view_detail_event);
        $sekretaris->givePermissionTo($view_transaction);
        $sekretaris->givePermissionTo($view_counseling);
        $sekretaris->givePermissionTo($add_counseling);
        $sekretaris->givePermissionTo($view_detail_counseling);
        $sekretaris->givePermissionTo($edit_counseling);
        $sekretaris->givePermissionTo($delete_counseling);
        $sekretaris->givePermissionTo($view_prayer_request);
        $sekretaris->givePermissionTo($view_detail_prayer_request);
        $sekretaris->givePermissionTo($add_prayer_request);
        $sekretaris->givePermissionTo($edit_prayer_request);
        $sekretaris->givePermissionTo($delete_prayer_request);
        $sekretaris->givePermissionTo($view_small_group);
        $sekretaris->givePermissionTo($view_detail_small_group);

        /*
            Bph pemuridan
        */
        $bph_pemuridan->givePermissionTo($view_student);
        $bph_pemuridan->givePermissionTo($view_detail_student);
        $bph_pemuridan->givePermissionTo($view_lecturer);
        $bph_pemuridan->givePermissionTo($view_detail_lecturer);
        $bph_pemuridan->givePermissionTo($view_alumni);
        $bph_pemuridan->givePermissionTo($view_event);
        $bph_pemuridan->givePermissionTo($view_detail_event);
        $bph_pemuridan->givePermissionTo($view_transaction);
        $bph_pemuridan->givePermissionTo($view_counseling);
        $bph_pemuridan->givePermissionTo($add_counseling);
        $bph_pemuridan->givePermissionTo($view_detail_counseling);
        $bph_pemuridan->givePermissionTo($edit_counseling);
        $bph_pemuridan->givePermissionTo($delete_counseling);
        $bph_pemuridan->givePermissionTo($view_prayer_request);
        $bph_pemuridan->givePermissionTo($view_detail_prayer_request);
        $bph_pemuridan->givePermissionTo($add_prayer_request);
        $bph_pemuridan->givePermissionTo($edit_prayer_request);
        $bph_pemuridan->givePermissionTo($delete_prayer_request);
        $bph_pemuridan->givePermissionTo($view_small_group);
        $bph_pemuridan->givePermissionTo($view_detail_small_group);

        /*
            Bph dope
        */
        $bph_dope->givePermissionTo($view_student);
        $bph_dope->givePermissionTo($view_detail_student);
        $bph_dope->givePermissionTo($view_lecturer);
        $bph_dope->givePermissionTo($view_detail_lecturer);
        $bph_dope->givePermissionTo($view_alumni);
        $bph_dope->givePermissionTo($view_event);
        $bph_dope->givePermissionTo($view_detail_event);
        $bph_dope->givePermissionTo($view_transaction);
        $bph_dope->givePermissionTo($view_counseling);
        $bph_dope->givePermissionTo($add_counseling);
        $bph_dope->givePermissionTo($view_detail_counseling);
        $bph_dope->givePermissionTo($edit_counseling);
        $bph_dope->givePermissionTo($delete_counseling);
        $bph_dope->givePermissionTo($add_prayer_request);
        $bph_dope->givePermissionTo($view_prayer_request);
        $bph_dope->givePermissionTo($view_detail_prayer_request);
        $bph_dope->givePermissionTo($edit_prayer_request);
        $bph_dope->givePermissionTo($delete_prayer_request);
        $bph_dope->givePermissionTo($view_small_group);
        $bph_dope->givePermissionTo($view_detail_small_group);

        /*
            Bph kutu
        */
        $bph_kutu->givePermissionTo($view_student);
        $bph_kutu->givePermissionTo($view_detail_student);
        $bph_kutu->givePermissionTo($view_lecturer);
        $bph_kutu->givePermissionTo($view_detail_lecturer);
        $bph_kutu->givePermissionTo($view_alumni);
        $bph_kutu->givePermissionTo($view_event);
        $bph_kutu->givePermissionTo($view_detail_event);
        $bph_kutu->givePermissionTo($view_transaction);
        $bph_kutu->givePermissionTo($view_counseling);
        $bph_kutu->givePermissionTo($add_counseling);
        $bph_kutu->givePermissionTo($view_detail_counseling);
        $bph_kutu->givePermissionTo($edit_counseling);
        $bph_kutu->givePermissionTo($delete_counseling);
        $bph_kutu->givePermissionTo($add_prayer_request);
        $bph_kutu->givePermissionTo($view_prayer_request);
        $bph_kutu->givePermissionTo($view_detail_prayer_request);
        $bph_kutu->givePermissionTo($edit_prayer_request);
        $bph_kutu->givePermissionTo($delete_prayer_request);
        $bph_kutu->givePermissionTo($view_small_group);
        $bph_kutu->givePermissionTo($view_detail_small_group);

        /*
            Bph medfo
        */
        $bph_medfo->givePermissionTo($view_student);
        $bph_medfo->givePermissionTo($view_detail_student);
        $bph_medfo->givePermissionTo($view_lecturer);
        $bph_medfo->givePermissionTo($view_detail_lecturer);
        $bph_medfo->givePermissionTo($view_alumni);
        $bph_medfo->givePermissionTo($view_event);
        $bph_medfo->givePermissionTo($view_detail_event);
        $bph_medfo->givePermissionTo($view_transaction);
        $bph_medfo->givePermissionTo($view_counseling);
        $bph_medfo->givePermissionTo($add_counseling);
        $bph_medfo->givePermissionTo($view_detail_counseling);
        $bph_medfo->givePermissionTo($edit_counseling);
        $bph_medfo->givePermissionTo($delete_counseling);
        $bph_medfo->givePermissionTo($add_prayer_request);
        $bph_medfo->givePermissionTo($view_prayer_request);
        $bph_medfo->givePermissionTo($view_detail_prayer_request);
        $bph_medfo->givePermissionTo($edit_prayer_request);
        $bph_medfo->givePermissionTo($delete_prayer_request);
        $bph_medfo->givePermissionTo($view_small_group);
        $bph_medfo->givePermissionTo($view_detail_small_group);

        /*
            Pengurus pemuridan
        */
        $pengurus_pemuridan->givePermissionTo($view_student);
        $pengurus_pemuridan->givePermissionTo($view_lecturer);
        $pengurus_pemuridan->givePermissionTo($view_event);
        $pengurus_pemuridan->givePermissionTo($view_detail_event);
        $pengurus_pemuridan->givePermissionTo($view_transaction);
        $pengurus_pemuridan->givePermissionTo($view_counseling);
        $pengurus_pemuridan->givePermissionTo($add_counseling);
        $pengurus_pemuridan->givePermissionTo($view_detail_counseling);
        $pengurus_pemuridan->givePermissionTo($edit_counseling);
        $pengurus_pemuridan->givePermissionTo($delete_counseling);
        $pengurus_pemuridan->givePermissionTo($add_prayer_request);
        $pengurus_pemuridan->givePermissionTo($view_prayer_request);
        $pengurus_pemuridan->givePermissionTo($view_detail_prayer_request);
        $pengurus_pemuridan->givePermissionTo($edit_prayer_request);
        $pengurus_pemuridan->givePermissionTo($delete_prayer_request);
        $pengurus_pemuridan->givePermissionTo($view_small_group);
        $pengurus_pemuridan->givePermissionTo($view_detail_small_group);

        /*
            Pengurus dope
        */
        $pengurus_dope->givePermissionTo($view_student);
        $pengurus_dope->givePermissionTo($view_lecturer);
        $pengurus_dope->givePermissionTo($view_event);
        $pengurus_dope->givePermissionTo($view_detail_event);
        $pengurus_dope->givePermissionTo($view_transaction);
        $pengurus_dope->givePermissionTo($view_counseling);
        $pengurus_dope->givePermissionTo($add_counseling);
        $pengurus_dope->givePermissionTo($view_detail_counseling);
        $pengurus_dope->givePermissionTo($edit_counseling);
        $pengurus_dope->givePermissionTo($delete_counseling);
        $pengurus_dope->givePermissionTo($add_prayer_request);
        $pengurus_dope->givePermissionTo($view_prayer_request);
        $pengurus_dope->givePermissionTo($view_detail_prayer_request);
        $pengurus_dope->givePermissionTo($edit_prayer_request);
        $pengurus_dope->givePermissionTo($delete_prayer_request);
        $pengurus_dope->givePermissionTo($view_small_group);
        $pengurus_dope->givePermissionTo($view_detail_small_group);

        /*
            Pengurus medfo
        */
        $pengurus_medfo->givePermissionTo($view_student);
        $pengurus_medfo->givePermissionTo($view_lecturer);
        $pengurus_medfo->givePermissionTo($view_event);
        $pengurus_medfo->givePermissionTo($view_detail_event);
        $pengurus_medfo->givePermissionTo($view_transaction);
        $pengurus_medfo->givePermissionTo($view_counseling);
        $pengurus_medfo->givePermissionTo($add_counseling);
        $pengurus_medfo->givePermissionTo($view_detail_counseling);
        $pengurus_medfo->givePermissionTo($edit_counseling);
        $pengurus_medfo->givePermissionTo($delete_counseling);
        $pengurus_medfo->givePermissionTo($add_prayer_request);
        $pengurus_medfo->givePermissionTo($view_prayer_request);
        $pengurus_medfo->givePermissionTo($view_detail_prayer_request);
        $pengurus_medfo->givePermissionTo($edit_prayer_request);
        $pengurus_medfo->givePermissionTo($delete_prayer_request);
        $pengurus_medfo->givePermissionTo($view_small_group);
        $pengurus_medfo->givePermissionTo($view_detail_small_group);

        /*
            Pengurus kutu
        */
        $pengurus_kutu->givePermissionTo($view_student);
        $pengurus_kutu->givePermissionTo($view_lecturer);
        $pengurus_kutu->givePermissionTo($view_event);
        $pengurus_kutu->givePermissionTo($view_detail_event);
        $pengurus_kutu->givePermissionTo($view_transaction);
        $pengurus_kutu->givePermissionTo($view_counseling);
        $pengurus_kutu->givePermissionTo($add_counseling);
        $pengurus_kutu->givePermissionTo($view_detail_counseling);
        $pengurus_kutu->givePermissionTo($edit_counseling);
        $pengurus_kutu->givePermissionTo($delete_counseling);
        $pengurus_kutu->givePermissionTo($add_prayer_request);
        $pengurus_kutu->givePermissionTo($view_prayer_request);
        $pengurus_kutu->givePermissionTo($view_detail_prayer_request);
        $pengurus_kutu->givePermissionTo($edit_prayer_request);
        $pengurus_kutu->givePermissionTo($delete_prayer_request);
        $pengurus_kutu->givePermissionTo($view_small_group);
        $pengurus_kutu->givePermissionTo($view_detail_small_group);

        /*
            pkk
        */
        $pkk->givePermissionTo($view_student);
        $pkk->givePermissionTo($view_lecturer);
        $pkk->givePermissionTo($view_event);
        $pkk->givePermissionTo($view_detail_event);
        $pkk->givePermissionTo($view_transaction);
        $pkk->givePermissionTo($view_counseling);
        $pkk->givePermissionTo($add_counseling);
        $pkk->givePermissionTo($view_detail_counseling);
        $pkk->givePermissionTo($edit_counseling);
        $pkk->givePermissionTo($delete_counseling);
        $pkk->givePermissionTo($add_prayer_request);
        $pkk->givePermissionTo($view_prayer_request);
        $pkk->givePermissionTo($view_detail_prayer_request);
        $pkk->givePermissionTo($edit_prayer_request);
        $pkk->givePermissionTo($delete_prayer_request);
        $pkk->givePermissionTo($view_small_group);
        $pkk->givePermissionTo($view_detail_small_group);

        /*
            Mahasiswa
        */
        $mahasiswa->givePermissionTo($view_student);
        $mahasiswa->givePermissionTo($edit_student);
        $mahasiswa->givePermissionTo($view_lecturer);
        $mahasiswa->givePermissionTo($view_event);
        $mahasiswa->givePermissionTo($view_detail_event);
        $mahasiswa->givePermissionTo($view_transaction);
        $mahasiswa->givePermissionTo($view_counseling);
        $mahasiswa->givePermissionTo($add_counseling);
        $mahasiswa->givePermissionTo($view_detail_counseling);
        $mahasiswa->givePermissionTo($edit_counseling);
        $mahasiswa->givePermissionTo($delete_counseling);
        $mahasiswa->givePermissionTo($add_prayer_request);
        $mahasiswa->givePermissionTo($view_prayer_request);
        $mahasiswa->givePermissionTo($view_detail_prayer_request);
        $mahasiswa->givePermissionTo($edit_prayer_request);
        $mahasiswa->givePermissionTo($delete_prayer_request);
        $mahasiswa->givePermissionTo($view_small_group);
        $mahasiswa->givePermissionTo($view_detail_small_group);

        /*
            Dosen
        */
        $dosen->givePermissionTo($view_student);
        $dosen->givePermissionTo($view_alumni);
        $dosen->givePermissionTo($view_lecturer);
        $dosen->givePermissionTo($view_event);
        $dosen->givePermissionTo($view_detail_event);
        $dosen->givePermissionTo($view_transaction);

        /*
            Dosen pengurus tpkk
        */
        $pengurus_tpkk->givePermissionTo($view_student);
        $pengurus_tpkk->givePermissionTo($view_alumni);
        $pengurus_tpkk->givePermissionTo($view_lecturer);
        $pengurus_tpkk->givePermissionTo($view_detail_lecturer);
        $pengurus_tpkk->givePermissionTo($view_event);
        $pengurus_tpkk->givePermissionTo($view_detail_event);
        $pengurus_tpkk->givePermissionTo($view_transaction);

        /*
            Alumni
        */
        $alumni->givePermissionTo($view_alumni);
        $alumni->givePermissionTo($view_lecturer);
        $alumni->givePermissionTo($view_event);
        $alumni->givePermissionTo($view_detail_event);
        $alumni->givePermissionTo($view_transaction);

        /*
            Pengurus Alumni
        */
        $pengurus_alumni->givePermissionTo($view_alumni);
        $pengurus_alumni->givePermissionTo($view_detail_alumni);
        $pengurus_alumni->givePermissionTo($view_lecturer);
        $pengurus_alumni->givePermissionTo($view_event);
        $pengurus_alumni->givePermissionTo($view_detail_event);
        $pengurus_alumni->givePermissionTo($view_transaction);
    }
}
