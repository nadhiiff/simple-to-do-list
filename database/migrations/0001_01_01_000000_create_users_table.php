<?php

public function up()
{
    Schema::create('tasks', function (Blueprint $table) { 
        $table->id();
        $table->string('title');
        $table->boolean('is_completed')->default(false);
        $table->timestamps();
    });    
}

?>