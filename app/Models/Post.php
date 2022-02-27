<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	use HasFactory;

	protected $fillable = ['catigory_id','title', 'slug', 'excerpt', 'body'];

	protected $with = ['catigory', 'author'];

	public function scopeFilter($query, array $filters) {

		$query->when($filters['search'] ?? false, fn($query, $search) => $query
				-> where('title', 'like', "%".$search."%")
				-> orWhere('body', 'like', "%".$search."%")
		);

	}

	public function catigory() {
		return $this -> belongsTo(Catigory::class);
	}

	public function user() {
		return $this -> belongsTo(User::class);
	}

	public function author() {
		return $this -> belongsTo(User::class, 'user_id');
	}
}
