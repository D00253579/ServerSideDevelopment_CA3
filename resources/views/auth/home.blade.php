@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    You are logged in as administrator!
                </p>
            </div>
            <div>
            @if (Auth::check())
            <table>
                <tr>
                <th>Name</th> 
                <th>Email</th> 
                <th>User Type</th>    
                </tr> 
             @foreach ($users as $user)
            <tr>
            <td>{{ $user->name }}</td> 
            <td>{{ $user->email }}</td>
            @if ($user->isAdmin==1)
            <td>Admin</td>
            @else
            <td>User</td>     
            @endif     
            </tr> 
            </table>   
             @endforeach   
            @endif
        </div>
        </section>
    </div>
</main>
@endsection
