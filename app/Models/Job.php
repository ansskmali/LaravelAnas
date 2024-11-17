<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job__listings'; 
    
    //protected $fillable = ['title','salary','employer_id'];      --it is dangers inserting data.. so we get another way  guarded = [];
    protected $guarded = [];
    
    public function employer()
    {
       return $this->belongsTo(Employer::class);
    }
    
    public function tags()
    {
       return $this->belongsToMany(Tag::class,foreignPivotKey:"job__listings_id");
    }

    //creating data factoring
    /*
         php artisan tinker
         >
         >App\Models\Job::factory(100):create;
    */

    //seeding

    /*   
         php artisan db:seed

         php artisan migrate:fresh --seed
    */
}