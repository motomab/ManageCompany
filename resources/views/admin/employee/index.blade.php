<x-layout>
    <x-setting heading="employee tables">
        <a href="{{ route('adminEmployee.create') }}" class="bg-blue-400 px-3 py-2 rounded-xl text-white font-sans font-bold inline-block mb-5">Add Employee</a>
        <table class="w-full text-left table-collapse">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-4 px-6">First name</th>
                    <th class="py-4 px-6">last name</th>
                    <th class="py-4 px-6">Company</th>
                    <th class="py-4 px-6">email</th>
                    <th class="py-4 px-6">phone</th>
                    <th class="py-4 px-6"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($emp as $e)
                    <tr>
                        <td class="border px-4 py-2">{{ $e->Fname }}</td>
                        <td class="border px-4 py-2">{{ $e->Lname }}</td>
                        <td class="border px-4 py-2 text-blue-700 hover:text-blue-900"><a href="{{ $e->company->website }}" target="_blank">{{ $e->company->name}}</a></td>
                        <td class="border px-4 py-2">{{ $e->email }}</td>
                        <td class="border px-4 py-2">{{ $e->phone }}</td>
                        <td class="border px-4 py-2">
                            <a class=" text-green-400" href="/adminEmployee/{{ $e->id }}/edit">edit</a>
                            <form action="/adminEmployee/{{ $e->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="text-red-400 bg-white cursor-pointer" type="submit" href="/adminEmployee/{{ $e->id }}" value="delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="w-96 mt-32 text-center ml-auto mr-auto">
            {{ $emp->links() }}
        </div>
    </x-setting>
</x-layout>
