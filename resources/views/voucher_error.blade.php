@if ($errors->any())
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Illuminate\Support\Facades\Session::has('voucher_error'))
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
    {{Illuminate\Support\Facades\Session::get('voucher_error')}}
    </div>
@endif

@if (Illuminate\Support\Facades\Session::has('voucher_success'))
    <div class="p-4 mb-4 text-lg text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
    {{Illuminate\Support\Facades\Session::get('voucher_success')}}
    </div>
@endif