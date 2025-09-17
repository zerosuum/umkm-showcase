<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('umkms', function (Blueprint $table) {
            if (!Schema::hasColumn('umkms', 'alamat'))    $table->string('alamat')->nullable()->after('gambar');
            if (!Schema::hasColumn('umkms', 'kontak'))    $table->string('kontak')->nullable()->after('alamat');
            if (!Schema::hasColumn('umkms', 'website'))   $table->string('website')->nullable()->after('kontak');
            if (!Schema::hasColumn('umkms', 'instagram')) $table->string('instagram')->nullable()->after('website');
        });
    }

    public function down(): void
    {
        Schema::table('umkms', function (Blueprint $table) {
            if (Schema::hasColumn('umkms', 'instagram')) $table->dropColumn('instagram');
            if (Schema::hasColumn('umkms', 'website'))   $table->dropColumn('website');
            if (Schema::hasColumn('umkms', 'kontak'))    $table->dropColumn('kontak');
            if (Schema::hasColumn('umkms', 'alamat'))    $table->dropColumn('alamat');
        });
    }
};
