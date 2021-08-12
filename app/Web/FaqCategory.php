<?php

namespace App\Web;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{

    protected $fillable = [
        'name'
    ];

    public function faqs() {
        return $this->hasMany('App\Web\Faq', 'faq_category_id');
    }

}
