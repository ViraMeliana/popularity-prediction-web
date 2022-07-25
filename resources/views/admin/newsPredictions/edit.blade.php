@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.newsPrediction.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.news-predictions.update", [$newsPrediction->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.newsPrediction.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $newsPrediction->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.newsPrediction.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="is_popular">{{ trans('cruds.newsPrediction.fields.is_popular') }}</label>
                <input class="form-control {{ $errors->has('is_popular') ? 'is-invalid' : '' }}" type="text" name="is_popular" id="is_popular" value="{{ old('is_popular', $newsPrediction->is_popular) }}">
                @if($errors->has('is_popular'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_popular') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.newsPrediction.fields.is_popular_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.newsPrediction.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $newsPrediction->user->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.newsPrediction.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection