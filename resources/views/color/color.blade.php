@extends('layouts.default')
@section('content')
    <div class="row">
    <div class="large-12 columns">
        <a data-action="create" href="javascript:;" class="button tiny radius right">@lang('btn.add')</a>
    </div>
</div>
<div class="row">
    <div class="large-12 columns">
        <div id="{{ $module }}-wrap"></div>
        <div class="{{ $module }}-pagination"></div>
        <div id="{{ $module }}-list"></div>
        <div class="{{ $module }}-pagination"></div>
        <script type="text/javascript" src="/js/model/{{ $module }}.js"></script>
    </div>
</div>
@endsection