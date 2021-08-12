<?php

namespace App\Web;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{

    protected $fillable = [
        'faq_category_id',
        'question',
        'answer'
    ];

    protected $guarded = [
        'faq_category_id',
        'question',
        'answer'
    ];

    public function categories() {
        return $this->belongsTo('App\Web\FaqCategory', 'faq_category_id');
    }

    public function saveEdit($faq, $request) {
        $faq->faq_category_id = $request->category;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
    }

}
