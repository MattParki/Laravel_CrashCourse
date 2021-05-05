@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                {{--Cross site request forgery (to allow a safe and secure form is submitted)--}}
                @csrf
                {{--Name--}}
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" placeholder="Your name"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
                {{--Username--}}
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" placeholder="Username"
                           class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
                {{--Email--}}
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" placeholder="Your Email"
                           class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
                {{--Password--}}
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" placeholder="Choose a password"
                           class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
                {{--Confirm Password--}}
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password again</label>
                    <input type="password" name="password_confirmation" placeholder="Confirm your password"
                           class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded
                font-medium w-full">Register</button>
            </form>
        </div>
    </div>
@endsection
