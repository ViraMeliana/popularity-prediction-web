@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.setting.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.settings.update", [$setting->id]) }}"
                  enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required"
                           for="preferred_methods">{{ trans('cruds.setting.fields.preferred_methods') }}</label>
                    <select class="form-control {{ $errors->has('preferred_methods') ? 'is-invalid' : '' }}"
                            name="preferred_methods" id="preferred_methods" required>
                        <option value
                                disabled {{ old('preferred_methods', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        <option
                            value="lib-mlp" {{ old('preferred_methods', $setting->preferred_methods) === 'lib-mlp' ? 'selected' : '' }}> Library Multi Layer Perceptron  </option>
                        <option
                            value="random-forest" {{ old('preferred_methods', $setting->preferred_methods) === 'random-forest'? 'selected' : '' }}> Random Forest  </option>
                        <option
                            value="manual-mlp" {{ old('preferred_methods', $setting->preferred_methods) === 'manual-mlp'? 'selected' : '' }}> Manual Multi Layer Perceptron  </option>
                    </select>
                    @if($errors->has('preferred_methods'))
                        <div class="invalid-feedback">
                            {{ $errors->first('preferred_methods') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.preferred_methods_helper') }}</span>
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
