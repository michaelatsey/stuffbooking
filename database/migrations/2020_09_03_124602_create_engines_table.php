<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnginesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('engine_name')->nullable();
            $table->string('mac_address')->nullable();
            $table->timestamp('uninstall_at')->nullable();
            $table->unsignedTinyInteger('is_scanner')->default(1);
            $table->unsignedTinyInteger('is_tablet')->default(1);
            $table->string('owner')->nullable();
            $table->string('owner_password')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('engine_type_id')->nullable()->index();;
            $table->unsignedBigInteger('room_id')->nullable()->index();;
            $table->unsignedBigInteger('version_id')->nullable()->index();;
            $table->unsignedBigInteger('environment_id')->nullable()->index();
            $table->timestamps();

            $table->foreign('engine_type_id')
                ->references('id')
                ->on('engine_types');
            $table->foreign('room_id')
                ->references('id')
                ->on('rooms');
            $table->foreign('version_id')
                ->references('id')
                ->on('versions');
            $table->foreign('environment_id')
                ->references('id')
                ->on('environments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('engines');
    }
}
