@extends('layouts.default')
@section('content')
<div class="row">
    <div class="large-12 columns">
        <a data-action="create" href="javascript:;" class="button tiny radius right">@lang('btn.add')</a>
    </div>
</div>
<div class="row">
    <div class="large-12 columns">
        <div id="slide-wrap"></div>
        <div class="slide-pagination"></div>
        <div id="slide-list"></div>
        <div class="slide-pagination"></div>
        <script type="text/javascript" src="/js/model/slide.js"></script>
    </div>
</div>
@endsection