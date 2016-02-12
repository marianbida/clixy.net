@extends('layouts.default')
@section('content')
<div class="row">
    <div class="large-12 columns">
        <a data-action="create" href="javascript:;" class="button tiny radius right">@lang('btn.add')</a>
    </div>
</div>
<div class="row">
    <div class="large-12 columns">
        <div id="navigation-wrap"></div>
        <div class="navigation-pagination"></div>
        <p>Е сайта има 4 менюта. Всяко елемент от меню води към страница.</p>
        <div id="navigation-list"></div>
        <div class="navigation-pagination"></div>
        <script src="/js/model/navigation.js"></script>
    </div>
</div>
@endsection