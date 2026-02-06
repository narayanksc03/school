<x-layout>
    <section class="py-10 container m-auto">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-semibold py-4">Course List</h1>
            {{-- <a href="{{ route("course_create") }}" class="bg-blue-500 py-2 px-4 text-white rounded">add new</a> --}}

        </div>
        {{-- to check weather data is extracting or not --}}
        {{-- {{ $courses }} --}}
        <table class="mt-6 w-full text-center">
            <thead>
                <tr class="bg-gray-300">
                    <th class="p2 border border-gray-200">ID</th>
                    <th class="p2 border border-gray-200">Name</th>
                    <th class="p2 border border-gray-200">Price</th>
                    <th class="p2 border border-gray-200">Duration</th>
                    <th class="p2 border border-gray-200">Action</th>
                </tr>
            </thead>
            {{-- <tbody>
                // c is a variable for $courses 
                @foreach ($courses as $c)
                    <tr>
                        <td class="p-2 border border-grey-300">{{ $c->id }}</td>
                        <td class="p-2 border border-grey-300">{{ $c->name }}</td>
                        <td class="p-2 border border-grey-300">{{ $c->price }}</td>
                        <td class="p-2 border border-grey-300">{{ $c->duration }}</td>
                        <td class="p-2 border border-grey-300">
                            <a class="px-4" href="/course/edit/{{ $c->id }}">edit</a>
                            <form action="{{route('course_delete',$c->id)}}" method="POST">

                                @csrf
                                @method("delete")
                                <button type="submit" class="text-[red]">Delete</button>
                            </form>
                        </td>


                    </tr>
                @endforeach

            </tbody> --}}
        </table>

    </section>
    <div class="container m-auto">
        <a href="{{ route('course_create') }}" class="bg-blue-500 py-2 px-4  text-white rounded">Go Back</a>
    </div>
</x-layout>
