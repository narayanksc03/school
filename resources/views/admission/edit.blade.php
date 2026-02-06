<x-layout>
    <section class="container m-auto">
        <div class="flex justify-between mt-20">
            <h1 class="text-3xl font-semibold">Course Edit</h1>

        </div>
        <div class="mt-20 ">
           <form action="{{route('course_update',$course->id)}}" method="POST">
            @csrf
            @method("PATCH")
           <div class="grid grid-cols-2 gap-2 ">
                <div>
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" class="border border-gray-500 mt-1 w-full" value="{{ $course->name }}" placeholder="Course Name">
                </div>
                <div>
                        <label for="price">Price: in(Rs)</label>
                        <input type="number" name="price" id="price" class="border border-gray-500 mt-1 w-full" value="{{ $course->price}}">
                </div>
                <div>
                        <label for="duration">Duration:</label>
                        <input type="text" name="duration" id="duration" class="border border-gray-500 mt-1 w-full" value="{{ $course->duration}}">
                </div>
                <div class="col-span-2">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" cols="30" rows="5" class="border border-gray-500 mt-1 w-full" >{{ $course->description }}</textarea>
                </div>

           </div>
           <button type="submit" class="bg-blue-500 py-2 px-4 text-white rounded ">Update Record</button>
           </form>
        </div>
        {{-- <label for="age">Age: </label><br>
                    <input type="number" name="age" id="age">

                    <label for="male">Male: </label><br>
                    <input type="radio" name="gender"  value="true" id="male" class="border border-gray-500 mt-1 ">

                    <label for="female">Female: </label><br>
                    <input type="radio" name="gender" value="true" id="female" class="border border-gray-500 mt-1"> --}}

    </section>
</x-layout>
