<div class="row">
    <div class="large-12 columns">
        <?php echo 0 ? print_r($data, true) : ''; ?>
        <div class="row">
            <div class="large-6 columns">
                <h2>Настройка / {{ $data->id }}</h2>
                <form id="{{ $module }}-edit-form" data-abide>
                    <input type="hidden" name="id" value="{{ $data->id }}" />
                    <div class="row">
                        <div class="large-12">
                            <label>Slug</label>
                            <input type="text" name="slug" value="{{ $data->slug }}" />
                        </div>
                    </div>
		    @if(0)
                    <div class="row">
                        <div class="large-12">
                            <label>Order</label>
                            <input type="text" name="ord" value="{{ $data->ord }}" />
                        </div>
                    </div>
		    @endif
                    <div class="row">
                        <div class="large-12">
                            <label>Value</label>
                            <input type="text" name="value" value="{{ $data->value }}" />
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
            <div class="large-6 columns" style="padding-left: 14px">
		@if(0)
		    <h2>Медия</h2>
		    <p>Главна снимка 245 x 196 px</p>
		    <p>Малки под нея, 2 бр., 121 x 99 px</p>
		    @include('multimedia.media', ['cat_id' => 3, 'item_id' => $data->id])
		@endif
            </div>
        </div>
    </div>
</div>