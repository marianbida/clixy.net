<div class="row">
    <div class="large-12 columns">
        <?php echo 0 ? print_r($data, true) : ''; ?>
        <div class="row">
            <div class="large-6 columns">
                <h2>{{ $data->id }}</h2>
                <form id="{{ $module }}-edit-form" data-abide>
                    <input type="hidden" name="id" value="{{ $data->id }}" />
                    <div class="row">
                        <div class="large-12">
                            <label>First name</label>
                            <input type="text" name="first_name" value="{{ $data->first_name }}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12">
                            <label>Last name</label>
                            <input type="text" name="last_name" value="{{ $data->last_name }}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12">
                            <label>E-mail</label>
                            <input type="text" name="email" value="{{ $data->email }}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12">
                            <label>Password</label>
                            <input type="text" name="password" placeholder="парола, ако ще се сменя" />
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
            <div class="large-6 columns">
		@if(0)
		    <h2>Медия</h2>
		    <p>Главна снимка 245 x 196 px</p>
		    <p>Малки под нея, 2 бр., 121 x 99 px</p>
		    @include('multimedia.media', ['cat_id' => 6, 'item_id' => $data->id])
		@endif
            </div>
        </div>
    </div>
</div>