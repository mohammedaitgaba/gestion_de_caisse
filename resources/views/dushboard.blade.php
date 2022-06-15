@extends('layouts.app')
@section('dushboard')
<div class="px-7 py-20">
{{-- <div class="flex w-full"> --}}
    <h1 class="text-4xl mt-8 mb-6 text-center">Dushboard</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DATE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        LIBELLE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        CAISSE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Solde
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        17
                    </th><th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        2020/12/12
                    </th>
                    <td class="px-6 py-4">
                        Sliver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
@endsection