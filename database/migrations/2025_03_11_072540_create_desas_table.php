<?php

// database/migrations/{timestamp}_create_desas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesasTable extends Migration
{
    public function up()
    {
        Schema::create('desas', function (Blueprint $table) {
            $table->id();
            $table->string('kecamatan');
            $table->string('desa');
            $table->integer('tahun');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('desas');
    }
}

