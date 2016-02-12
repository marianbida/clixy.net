@extends('layouts.default')
@section('content')
<div class="row collapse">
    <div class="large-6 columns">
	<p>Моля, въведете данни за достъп.</p>
    </div>
    <div class="large-6 columns">
        <form method="post" action="/auth/login">
            {!! csrf_field() !!}
            <div class="row">
                <label>Потребител</label>
		<input type="text" name="email" value="{{ old('email') }}" />
            </div>
            <div class="row">
                <label>Парола</label>
		<input type="password" name="password" id="password" />
            </div>
            <div>
                <button class="button tiny success radius" type="submit">@lang('btn.login')</button>
            </div>
        </form>
    </div>
</div>
@endsection