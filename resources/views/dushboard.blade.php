@extends('layouts.app')
@section('dushboard')
<div class="px-7 py-20">
    @if(session()->has('message'))
        <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3" role="alert">
            {{ session()->get('message') }}
        </div>
    @endif
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
                        Type de caisse
                    </th>
                    <th scope="col" class="px-6 py-3">
                        CAISSE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Solde
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Update
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{$transaction->id}}
                    </th><th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{$transaction->created_at}}
                    </th>
                    <td class="px-6 py-4">
                        {{ucfirst($transaction->libelle)}}
                    </td>
                    <td class="px-6 py-4">
                        {{ucfirst($transaction->caisse_type)}}
                    </td>
                    <td class="px-6 py-4">
                        {{$transaction->caisse}}
                    </td>
                    <td class="px-6 py-4">
                        {{$transaction->solde}}
                    </td>
                    <td class="px-6 py-4">
                        <form method="get" class="add-button" action="/edit/{{$transaction->id}}">
                            <button class="inline-block text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </button>
                        </form>
                    </td>
                    <td class="px-6 py-4">
                        <form method="post" class="update-button" action="/delete/{{ $transaction->id }}">
                            @csrf
                            @method('DELETE')
                            <button  class="inline-block text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </form>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>

@endsection