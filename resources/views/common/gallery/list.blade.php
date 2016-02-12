<div class="s_buttons_actions">
@foreach($items as $k => $v)
    @include('common.gallery.button', ['action' => $v, 'obj' => $obj, 'id' => $id])
@endforeach
</div>