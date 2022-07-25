<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsPredictionRequest;
use App\Http\Requests\UpdateNewsPredictionRequest;
use App\Http\Resources\Admin\NewsPredictionResource;
use App\Models\NewsPrediction;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NewsPredictionApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('news_prediction_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new NewsPredictionResource(NewsPrediction::with(['user'])->get());
    }

    public function store(StoreNewsPredictionRequest $request)
    {
        $newsPrediction = NewsPrediction::create($request->all());

        return (new NewsPredictionResource($newsPrediction))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(NewsPrediction $newsPrediction)
    {
        abort_if(Gate::denies('news_prediction_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new NewsPredictionResource($newsPrediction->load(['user']));
    }

    public function update(UpdateNewsPredictionRequest $request, NewsPrediction $newsPrediction)
    {
        $newsPrediction->update($request->all());

        return (new NewsPredictionResource($newsPrediction))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(NewsPrediction $newsPrediction)
    {
        abort_if(Gate::denies('news_prediction_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newsPrediction->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
