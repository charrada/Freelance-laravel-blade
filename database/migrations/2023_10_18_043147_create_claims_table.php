<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimsTable extends Migration
{
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->id();
            $table->string('claim_mail');
            $table->string('claim_title');
            $table->text('claim_details');
            $table->integer('claim_status')->default(0);
            $table->integer('claim_rating')->default(0);;
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('claims');
    }
}
