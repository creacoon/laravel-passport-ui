<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Authorize Application</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>
<body class="font-sans text-gray-900 antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-4">
                <h2 class="text-xl font-semibold text-gray-800">Authorize Application</h2>
                <p class="text-gray-600 mt-2">
                    <strong>{{ $client->name }}</strong> is requesting access to your account.
                </p>
            </div>

            @if (count($scopes) > 0)
                <div class="mb-4">
                    <p class="text-sm text-gray-600 mb-2">This application will be able to:</p>
                    <ul class="list-disc list-inside text-sm text-gray-700">
                        @foreach ($scopes as $scope)
                            <li>
                                @if (is_object($scope))
                                    {{ $scope->description ?? $scope->id ?? $scope }}
                                @else
                                    {{ $scope }}
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <p class="mb-4 text-center text-gray-600">Please click Authorize to continue.</p>

            <div class="flex items-center justify-between">
                <form method="post" action="{{ route('passport.authorizations.deny') }}">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="auth_token" value="{{ $authToken }}">
                    <input type="submit" value="Cancel" style="background-color: #d1d5db; color: #374151; padding: 0.75rem 1.5rem; border-radius: 0.375rem; border: none; cursor: pointer;">
                </form>

                <form method="post" action="{{ route('passport.authorizations.approve') }}">
                    @csrf
                    <input type="hidden" name="auth_token" value="{{ $authToken }}">
                    @foreach ($scopes as $scope)
                        <input type="hidden" name="scopes[]" value="@if (is_object($scope)){{ $scope->id ?? $scope }}@else{{ $scope }}@endif">
                    @endforeach
                    <input type="submit" value="Authorize" style="background-color: #3b82f6; color: white; padding: 0.75rem 1.5rem; border-radius: 0.375rem; border: none; cursor: pointer;">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
