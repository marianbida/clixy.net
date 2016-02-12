<!-- orderable -->
<div class="media-listing" id="sort_wrap">
@foreach($list as $k => $v)
    <div data-id="{{ $v->id }}">
        <div class="row">
            <div class="large-3 columns">
                <a class="s_thumbnail" data-id="{{ $v->id }}" data-action="info">
                    @include('multimedia.thumbnails.' . $v->template, ['image' => 'http://vip-trips.net/' . $v->category->directory . '/' . $v->file, 'title' => '-na'])
                </a>
            </div>
            <div class="large-9 columns">
                <h3>{{ $v->title }}</h3>
                <p>{{ $v->width }} x {{ $v->height }} px, {{ number_format($v->size / 1024, 2) }} Kb</p>
                @include('common.gallery.list', ['items' => ['delete'], 'id' => $v->id, 'obj' => $obj])
                <div data-id="{{ $v->id }}" style="display:none">
                    @include('multimedia.edit_title_form', ['id' => $v->id])
                </div>
                <div data-id="{{ $v->id }}" data-action="display-info" style="display:none"></div>
            </div>
        </div>
    </div>
@endforeach
</div>