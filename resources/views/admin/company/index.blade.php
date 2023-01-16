<x-layout>
    <x-setting heading="company tables">
        <a href="{{ route('adminCompany.create') }}" class="bg-blue-400 px-3 py-2 rounded-xl text-white font-sans font-bold inline-block mb-5">Add Company</a>
        <table class="w-full text-left table-collapse">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-4 px-6">Name</th>
                    <th class="py-4 px-6">email</th>
                    <th class="py-4 px-6">logo</th>
                    <th class="py-4 px-6">website</th>
                    <th class="py-4 px-6"></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($company as $comp)    
                    <tr>
                        <td class="border px-4 py-2">{{ $comp->name }}</td>
                        <td class="border px-4 py-2">{{ $comp->email }}</td>
                        <td class="border px-4 py-2"> <img src="{{ $comp->logo }}" width="100" height="100" alt=""> </td>
                        <td class="border px-4 py-2">{{ $comp->website }}</td>
                        <td class="border px-4 py-2">
                            <a class=" text-green-400" href="/adminCompany/{{ $comp->id }}/edit">edit</a>
                            <form action="/adminCompany/{{ $comp->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="text-red-400 bg-white cursor-pointer" type="submit" href="/adminCompany/{{ $comp->id }}" value="delete">
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <div class="w-96 mt-10 text-center ml-auto mr-auto">
            {{ $company->links() }}
        </div>
    </x-setting>
</x-layout>
