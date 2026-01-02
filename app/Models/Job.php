<?php

namespace App\Models;

use App\Models\Tag;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;
    protected $guarded = [];
    public function tag(string $name)
    {
        $tag = Tag::firstorCreate(['name'=>$name]);
        $this->tags()->attach($tag);
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
