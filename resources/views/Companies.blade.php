<x-layout>
    
        <h1 class="text-3xl font-semibold text-gray-800 mb-4">Company List</h1>
        <table class="w-full text-left table-collapse">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-4 px-6">Name</th>
                    <th class="py-4 px-6">email</th>
                    <th class="py-4 px-6">logo</th>
                    <th class="py-4 px-6">website</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($company as $comp)    
                    <tr>
                        <td class="border px-4 py-2">{{ $comp->name }}</td>
                        <td class="border px-4 py-2">{{ $comp->email }}</td>
                        <td class="border px-4 py-2"> <img src="{{ $comp->logo }}" width="100" height="100" alt=""> </td>
                        <td class="border px-4 py-2">{{ $comp->website }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <div class="w-96 mt-10 text-center ml-auto mr-auto">
            {{ $company->links() }}
        </div>
</x-layout>
