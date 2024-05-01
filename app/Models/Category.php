<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Method to get all caregories from database
     *
     * @author hisie
     * @return array
     */
    public static function getAllCategories()
    {
        return self::all();
    }

    /**
     * Method to create a new category
     * @author hisie
     * @param StoreCategoryRequest $request
     */
    public function createCategory(StoreCategoryRequest $request)
    {
        return self::create($request->validated());
    }
}
