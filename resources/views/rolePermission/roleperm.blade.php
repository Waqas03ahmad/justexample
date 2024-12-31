@extends('master')

@section('title', 'Assign roles')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold mb-6">Assign Permissions to Role</h2>

        @if (session('success'))
            <div class="mb-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('storing') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">Select Role</label>
                <select name="role_id" id="role" class="w-full mt-1 border-gray-300 rounded-md shadow-sm">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Select Roles</label>
                <div class="mt-2 space-y-2">
                    @foreach ($permissions as $permission)
                        <div class="flex items-center">
                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                id="permission_{{ $permission->id }}"
                                class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="permission_{{ $permission->id }}"
                                class="ml-2 text-sm text-gray-700">{{ $permission->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 text-white rounded-lg bg-blue-600">
                    Save it
                </button>
            </div>
        </form>
    </div>
@endsection
