<?php

use App\Models\Restaurant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $Week=['Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday',];
        
        Schema::create('dates', function (Blueprint $table) use($Week) {
            $table->id();
            $table->enum('day',$Week);
            $table->time('open_time');
            $table->time('close_time');
            $table->foreignIdFor(Restaurant::class)->constrained();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dates');
    }
};
