<div class="row">
    <div class="large-12 columns">
        <?php echo 0 ? print_r($data, true) : ''; ?>
        <div class="row">
            <div class="large-6 columns">
                <h2>Получател / {{ $data->id }} /</h2>
                <form id="{{ $module }}-edit-form" data-abide>
                    <input type="hidden" name="id" value="{{ $data->id }}" />
                    <div class="row">
                        <div class="large-12">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ $data->name }}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12">
                            <label>E-mail</label>
                            <input type="text" name="email" value="{{ $data->email }}" />
                        </div>
                    </div>
		    <div class="row">
                        <div class="large-12 columns">
                            <button type="submit" class="button tiny radius success">@lang('btn.save')</button>
                            <button data-action="cancel" type="button" class="button tiny radius alert">@lang('btn.cancel')</button>
                        </div>
                    </div>
                </form>
            </div>
            @if(0)
            <div class="large-6 columns">
                <h2>Медия</h2>
		@include('multimedia.media', ['cat_id' => 8, 'item_id' => $data->id]);
            </div>
            @endif
        </div>
    </div>
</div>