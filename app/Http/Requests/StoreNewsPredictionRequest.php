<?php

namespace App\Http\Requests;

use App\Models\NewsPrediction;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreNewsPredictionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('news_prediction_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'is_popular' => [
                'string',
                'nullable',
            ],
            'possible_keyword' => [
                'string',
                'nullable',
            ],
        ];
    }
}
