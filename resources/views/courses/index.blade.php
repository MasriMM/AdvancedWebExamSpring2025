@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-semibold tracking-tight text-balance text-white sm:text-4xl">Course List</h2>
    <div class="mt-2">
        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
            <input type="text" name="name" id="name" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Course Name">
        </div>
        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
            <input type="text" name="description" id="description" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Course Description">
        </div>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Course</button>
    </div>
    <ul id="Slist">

    </ul>
    <script>
        $(document).ready(function() {
            function fetchCourses({
                $.ajax({
                    url: "/courses",
                    method: "GET",
                    success:function(response){
                        
                    }
                })
            })
        });
    </script>
@endsection