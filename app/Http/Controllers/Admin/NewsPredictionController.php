<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyNewsPredictionRequest;
use App\Http\Requests\StoreNewsPredictionRequest;
use App\Http\Requests\UpdateNewsPredictionRequest;
use App\Models\NewsPrediction;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class NewsPredictionController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('news_prediction_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = NewsPrediction::with(['user'])->select(sprintf('%s.*', (new NewsPrediction())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'news_prediction_show';
                $editGate = 'news_prediction_edit';
                $deleteGate = 'news_prediction_delete';
                $crudRoutePart = 'news-predictions';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('is_popular', function ($row) {
                return $row->is_popular ? $row->is_popular : '';
            });
            $table->addColumn('user_name', function ($row) {
                return $row->user ? $row->user->name : '';
            });
            $table->addColumn('possible_keyword', function ($row) {
                return $row->possible_keyword ? $row->possible_keyword : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'user']);

            return $table->make(true);
        }

        return view('admin.newsPredictions.index');
    }

    public function create()
    {
        abort_if(Gate::denies('news_prediction_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.newsPredictions.create', compact('users'));
    }

    public function store(StoreNewsPredictionRequest $request)
    {
        $newsPrediction = NewsPrediction::create($request->all());

        return redirect()->route('admin.news-predictions.index');
    }

    public function edit(NewsPrediction $newsPrediction)
    {
        abort_if(Gate::denies('news_prediction_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $newsPrediction->load('user');

        return view('admin.newsPredictions.edit', compact('newsPrediction', 'users'));
    }

    public function update(UpdateNewsPredictionRequest $request, NewsPrediction $newsPrediction)
    {
        $newsPrediction->update($request->all());

        return redirect()->route('admin.news-predictions.index');
    }

    public function show(NewsPrediction $newsPrediction)
    {
        abort_if(Gate::denies('news_prediction_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newsPrediction->load('user');

        return view('admin.newsPredictions.show', compact('newsPrediction'));
    }

    public function destroy(NewsPrediction $newsPrediction)
    {
        abort_if(Gate::denies('news_prediction_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newsPrediction->delete();

        return back();
    }

    public function massDestroy(MassDestroyNewsPredictionRequest $request)
    {
        NewsPrediction::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
