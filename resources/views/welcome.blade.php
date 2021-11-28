@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <img src="/img/qr-code-mysejahtera-app.herokuapp.com.svg" class="w-8 h-8 text-gray-500">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ url('/qrcode-generator') }}" class="underline text-gray-900 dark:text-white">QR Code Generator</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Generate QR Code
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex items-center">
                        <img src="/img/qr-code-mysejahtera-app.herokuapp.com.svg" class="w-8 h-8 text-gray-500">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ url('/qrcode-scanner') }}" class="underline text-gray-900 dark:text-white">QR Code Scanner</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Open Camera to Scan QR Code
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection