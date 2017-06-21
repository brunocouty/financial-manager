<!doctype html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('FM-Language::labels.financial-manager')</title>
    @if(config('financial-manager.https'))
        <link rel="stylesheet" href="{{ secure_asset('vendor/financial-manager/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('vendor/financial-manager/css/bootstrap-theme.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('vendor/financial-manager/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('vendor/financial-manager/css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('vendor/financial-manager/css/personal.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('vendor/financial-manager/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/financial-manager/css/bootstrap-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/financial-manager/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/financial-manager/css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/financial-manager/css/personal.css') }}">
    @endif
</head>
<body>
<div class="container">
    <h1 class="bg-primary title">
        <i class="fa fa-money"></i>
        @lang('FM-Language::labels.financial-manager')
    </h1>
    <div class="row">
        <div class="col-md-9">
            <h4 class="bg-primary sub-title">
                <i class="fa fa-exchange"></i>
                @lang('FM-Language::labels.register')
            </h4>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th class="col-md-2">
                        @lang('FM-Language::labels.date')
                    </th>
                    <th class="col-md-4">
                        @lang('FM-Language::labels.description')
                    </th>
                    <th class="col-md-2">
                        @lang('FM-Language::labels.category')
                    </th>
                    <th class="col-md-2 bg-success text-right">
                        @lang('FM-Language::labels.in') [<i class="fa fa-plus"></i>]
                    </th>
                    <th class="col-md-2 bg-danger text-danger text-right">
                        @lang('FM-Language::labels.out') [<i class="fa fa-minus"></i>]
                    </th>
                </tr>
                </thead>
                <tbody>
                @if(count($registers) == 0)
                    <tr>
                        <td colspan="5">
                            @lang('FM-Language::messages.not-data-display')
                        </td>
                    </tr>
                @else
                    @foreach($registers as $data)
                        <tr>
                            <td>
                                {{ $data->date }}
                            </td>
                            <td>
                                {{ $data->description }}
                            </td>
                            <td>
                                {{ $data->category->name }}
                            </td>
                            <td class="text-success text-right">
                                @if($data->value >= 0)
                                    {{ $data->value }}
                                @else
                                    -
                                @endif
                            </td>
                            <td class="text-danger text-right">
                                @if($data->value < 0)
                                    {{ $data->value }}
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <button class="btn btn-success btn-block" data-toggle="modal" data-target="#addRegister">
                <i class="fa fa-plus"></i>
                @lang('FM-Language::labels.register')
            </button>
            <button class="btn btn-warning btn-block" data-toggle="modal" data-target="#addRegister">
                <i class="fa fa-list"></i>
                @lang('FM-Language::labels.categories')
            </button>
            <hr/>
            <h4 class="bg-primary sub-title">
                <i class="fa fa-calendar"></i>
                @lang('FM-Language::labels.range')
            </h4>
            <form action="">
                <div class="form-group">
                    <label for="range-start">
                        @lang('FM-Language::labels.start-date')
                    </label>
                    <input id="range-start" type="text" class="form-control date">
                </div>
                <div class="form-group">
                    <label for="range-end">
                        @lang('FM-Language::labels.end-date')
                    </label>
                    <input id="range-end" type="text" class="form-control date">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fa fa-filter"></i>
                    @lang('FM-Language::labels.filter')
                </button>
            </form>
            <hr/>
            <h4 class="bg-primary sub-title">
                <i class="fa fa-line-chart"></i>
                @lang('FM-Language::labels.statistics')
            </h4>
            <div>
                @if(count($registers) == 0)
                    @lang('FM-Language::messages.not-data-display')
                @endif
            </div>
            <hr/>
            <div class="text-right">
                <a href="//github.com/brunocouty" target="_blank">
                    <i class="fa fa-github"></i>
                    /brunocouty
                </a>
            </div>
        </div>
    </div>
</div>
{{--ADD NEW REGISTER--}}
<div class="modal fade" id="addRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    <i class="fa fa-plus"></i>
                    @lang('FM-Language::labels.new-register')
                </h4>
            </div>
            <div class="modal-body">
                <form name="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="new-register-category">
                                    @lang('FM-Language::labels.category')
                                </label>
                                <select id="new-register-category" class="form-control">

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="new-register-description">
                                    @lang('FM-Language::labels.description')
                                </label>
                                <input class="form-control" name="description" type="text"
                                       id="new-register-description">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="new-register-date">
                                @lang('FM-Language::labels.date')
                            </label>
                            <input class="form-control date" type="tel" id="new-register-date">
                        </div>
                        <div class="col-md-4">
                            <label for="new-register-type">
                                @lang('FM-Language::labels.type')
                            </label>
                            <select id="new-register-type" class="form-control">
                                <option value="1">
                                    @lang('FM-Language::labels.in')
                                </option>
                                <option value="1">
                                    @lang('FM-Language::labels.out')
                                </option>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <label for="new-register-value" class="text-right">
                                @lang('FM-Language::labels.value')
                            </label>
                            <input class="form-control" type="tel" id="new-register-value">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    @lang('FM-Language::labels.cancel')
                </button>
                <button type="button" class="btn btn-success">
                    <i class="fa fa-save"></i>
                    @lang('FM-Language::labels.save')
                </button>
            </div>
        </div>
    </div>
</div>
@if(config('financial-manager.https'))
    <script src="{{ secure_asset('vendor/financial-manager/js/jquery.js') }}"></script>
    <script src="{{ secure_asset('vendor/financial-manager/js/bootstrap.js') }}"></script>
    <script src="{{ secure_asset('vendor/financial-manager/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ secure_asset('vendor/financial-manager/locales/bootstrap-datepicker-en-ca.min.js') }}"></script>
@else
    <script src="{{ asset('vendor/financial-manager/js/jquery.js') }}"></script>
    <script src="{{ asset('vendor/financial-manager/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vendor/financial-manager/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('vendor/financial-manager/locales/bootstrap-datepicker-en-ca.min.js') }}"></script>
@endif
<script>
    $(function () {
        $('.date').datepicker({
            autoclose: true,
            todayHighlight: true,
            language: '{{App::getLocale()}}'
        });
    });
</script>
</body>
</html>