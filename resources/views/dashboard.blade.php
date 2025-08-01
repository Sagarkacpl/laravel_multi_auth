<!-- resources/views/user/dashboard.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    You're logged in as <strong>User</strong>!

                    <br><br>

                    <a href="{{ route('user.add') }}" class="text-blue-600 underline">Go to User Add Page</a>

                    <form method="POST" action="{{ route('logout') }}" class="mt-4">
                        @csrf
                        <button type="submit" class="text-red-500 underline">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
