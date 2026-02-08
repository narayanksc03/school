<x-layout>
    <section class="container m-auto">
        <div class="flex justify-between mt-20">
            <h1 class="text-3xl font-semibold">Admission Create</h1>

        </div>
        <div class="mt-20 ">
           <form action="{{route('admission.store')}}" method="POST">

            {{-- @method("PATCH") --}}
            @csrf
           <div class="grid grid-cols-2 gap-2 ">
                <div>
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" class="border border-gray-500 mt-1 w-full" placeholder="Full Name">
                </div>
                {{-- <div>
                        <label for="address">Address:</label>
                        <input type="text" name="address" id="address" class="border border-gray-500 mt-1 w-full">
                </div> --}}
                <div>
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" id="duration" class="border border-gray-500 mt-1 w-full">
                </div>
                <div>
                        <label for="email">Email.</label>
                        <input type="email" name="email" id="email" class="border border-gray-500 mt-1 w-full">
                </div>
                <div>
                        <label for="course" >Select Course</label>
                        <select class="border border-gray-500 mt-1 w-full" type="text" name="course" id="course">
                            @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>

                            @endforeach


                        </select>
                </div>
                <div class="col-span-2">
                        <label for="action">Action</label>
                        <textarea name="Action" id="action" cols="30" rows="5" class="border border-gray-500 mt-1 w-full"></textarea>
                </div>

           </div>
           <button type="submit" class="bg-blue-500 py-2 px-4 text-white rounded ">Save Record</button>
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
