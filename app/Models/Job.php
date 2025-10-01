<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Arr;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';
//    protected $fillable = ['employer_id','title', 'salary'];
    protected $guarded = []; // Applying no guard

//    protected $with = ['employer']; // Eager loading

    public static function getById(int $id)
    {
        return Arr::first(parent::all(), fn($job) => $job['id'] == $id) ?? abort(404);
    }

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listings_id");
    }
}
