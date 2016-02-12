@foreach ($list as $v)
<div class="row">
    <div class="large-10 columns">
        <p>{{ $v->first_name }} {{ $v->last_name }}<br /><small>{{ $v->email }}</small></p>
    </div>
    <div class="large-2 columns">
        <a data-id="{{ $v->id }}" data-action="edit" href="javascript:;" class="button tiny radius success">@lang('btn.edit')</a>
        <a data-id="{{ $v->id }}" data-action="remove" href="javascript:;" class="button tiny radius alert">@lang('btn.delete')</a>
    </div>
</div>
@endforeach