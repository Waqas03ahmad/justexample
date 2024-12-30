@extends('master')

@section('title', 'View')

@section('content')
    <div class="max-w-4xl mx-auto bg-white shadow rounded-lg p-4">
        <!-- Header with Add Button -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-gray-800">Roles</h2>
            <a href="{{ route('roles.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Add Role
            </a>
        </div>

        <!-- Placeholder Content -->
        <table class="min-w-full divide-y divide-gray-200">

            <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role
                    </th>

                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($allRole as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item->name }}</td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('roles.edit', $item->id) }}"
                                class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Edit</a>

                            <form action="{{ route('roles.destroy', $item->id) }}" method="post"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">Delete</button>

                            </form>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection
