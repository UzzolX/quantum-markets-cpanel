@extends('admin.index')
@section('title', 'Barchart')
@section('content')

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Add Chart Data
        </h3>
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form action="{{route('barchart.store')}}" method="POST">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label>Labels-1</label>
                <input type="text" name="labels_1" class="form-control{{ $errors->has('labels_1') ? ' is-invalid' : '' }}"
                    value="{{ old('labels_1') }}" placeholder="Labels 1" />
                @if ($errors->has('labels_1'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('labels_1') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Label 1</label>
                <input type="text" name="label_1" class="form-control{{ $errors->has('label_1') ? ' is-invalid' : '' }}"
                    value="{{ old('label_1') }}" placeholder="Title" />
                @if ($errors->has('label_1'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('label_1') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Data 1</label>
                <input type="number" name="data_1" class="form-control{{ $errors->has('data_1') ? ' is-invalid' : '' }}"
                    value="{{ old('data_1') }}" placeholder="Title" />
                @if ($errors->has('data_1'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('data_1') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Labels-2</label>
                <input type="text" name="labels_2" class="form-control{{ $errors->has('labels_2') ? ' is-invalid' : '' }}"
                    value="{{ old('labels_2') }}" placeholder="Labels 2" />
                @if ($errors->has('labels_2'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('labels_2') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Label 2</label>
                <input type="text" name="label_2" class="form-control{{ $errors->has('label_2') ? ' is-invalid' : '' }}"
                    value="{{ old('label_2') }}" placeholder="Title" />
                @if ($errors->has('label_2'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('label_2') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Data 2</label>
                <input type="number" name="data_2" class="form-control{{ $errors->has('data_2') ? ' is-invalid' : '' }}"
                    value="{{ old('data_2') }}" placeholder="Title" />
                @if ($errors->has('data_2'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('data_2') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Labels-3</label>
                <input type="text" name="labels_3" class="form-control{{ $errors->has('labels_3') ? ' is-invalid' : '' }}"
                    value="{{ old('labels_3') }}" placeholder="Labels 3" />
                @if ($errors->has('labels_3'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('labels_3') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Label 3</label>
                <input type="text" name="label_3" class="form-control{{ $errors->has('label_3') ? ' is-invalid' : '' }}"
                    value="{{ old('label_3') }}" placeholder="Title" />
                @if ($errors->has('label_3'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('label_3') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Data 3</label>
                <input type="number" name="data_3" class="form-control{{ $errors->has('data_3') ? ' is-invalid' : '' }}"
                    value="{{ old('data_3') }}" placeholder="Title" />
                @if ($errors->has('data_3'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('data_3') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </form>
    <!--end::Form-->
</div>
@endsection