<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pending_t_b_l_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('case_no')->unique();     
            $table->string('school'); 

            $table->string('complainantfname');    
            $table->string('complainantmname')->nullable();  
            $table->string('complainantlname');   
            $table->string('complainantsuffix')->nullable();   

            $table->string('respondentfname');   
            $table->string('respondentmname')->nullable();  
            $table->string('respondentlname');  
            $table->string('respondentsuffix')->nullable();

            $table->string('charges');
            $table->date('dateofactions'); 
            $table->string('actions'); 
            $table->string('status'); 

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_pending_t_b_l_s');
    }
};
