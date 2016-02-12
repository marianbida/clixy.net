@foreach ($list as $v)
<div class="row">
    <div class="large-10 columns">
        <p>{{ $v->lang->title }}<br />{{ $v->slug }} / {{ $v->port_from }} -> {{ $v->port_to }} / {{ $v->days }} дена / {{ $v->min_price }} - {{ $v->max_price }}</p>
    </div>
    <div class="large-2 columns">
        <a data-id="{{ $v->id }}" data-action="edit" href="javascript:;" class="button tiny success radius">@lang('btn.edit')</a>
        <a data-id="{{ $v->id }}" data-action="remove" href="javascript:;" class="button tiny alert radius">@lang('btn.delete')</a>
    </div>
</div>
@endforeach