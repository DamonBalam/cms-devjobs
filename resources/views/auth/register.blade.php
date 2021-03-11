@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words bg-white border shadow-md mt-20">
                    <div class="bg-gray-300 text-gray-700 uppercase text-center py-3 px-6 mb-0">
                        {{ __('Register') }}
                    </div>
                    <form class="py-10 px-5" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <label for="name" class="block text-gray-700 text-sm mb-2">{{ __('Name') }}</label>
                            <input id="name" type="text"
                                class="p-3 bg-gray-200 rounded w-full @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-gray-700 text-sm mb-2">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email"
                                class="p-3 bg-gray-200 rounded w-full @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="block text-gray-700 text-sm mb-2">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="p-3 bg-gray-200 rounded w-full @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password-confirm"
                                class="block text-gray-700 text-sm mb-2">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="p-3 bg-gray-200 rounded w-full"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>


                        <div class="flex flex-wrap">
                            <button type="submit"
                                class="bg-teal-500 w-full hover:bg-teal-800 text-gray-100 p-3 focus:outline-none focus:shadow-outline uppercase font-bold">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
