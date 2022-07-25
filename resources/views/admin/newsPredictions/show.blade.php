@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.newsPrediction.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.news-predictions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.newsPrediction.fields.id') }}
                        </th>
                        <td>
                            {{ $newsPrediction->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsPrediction.fields.title') }}
                        </th>
                        <td>
                            {{ $newsPrediction->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsPrediction.fields.is_popular') }}
                        </th>
                        <td>
                            {{ $newsPrediction->is_popular }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsPrediction.fields.user') }}
                        </th>
                        <td>
                            {{ $newsPrediction->user->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.news-predictions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection