@if(!empty($errors) && $errors->any())
    <div>
        <div class="font-medium text-red-600">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600" style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(\Session::has('success'))
    <div class="main">
        <span class="text-success">
            {!! \Session::get('success') !!}
        </span>
    </div>
@endif

@if(\Session::has('error'))
    <div>
        <span class="text-danger">
            {!! \Session::get('error') !!}
        </span>
    </div>
@endif
