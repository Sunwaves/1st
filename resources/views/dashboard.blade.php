<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Dashboard</title>

</head>

<body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800  leading-tight">
            {{ __('ArtBox') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-200 overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>

</body>
</html>

