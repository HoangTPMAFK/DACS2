@if ($errors->any())
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Illuminate\Support\Facades\Session::has('error'))
    <div class="p-16 mb-4 text-xl text-red-800 rounded-lg bg-red-50 dark:text-red-400" role="alert">
    {{Illuminate\Support\Facades\Session::get('error')}}
    </div>
@endif

@if (Illuminate\Support\Facades\Session::has('success'))
    <div class="p-16 mb-4 text-lg text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
    {{Illuminate\Support\Facades\Session::get('success')}}
    </div>
@endif