@extends('layouts.app')

@section('content')
<h2 class="text-3xl font-semibold tracking-tight text-balance text-white sm:text-4xl">Welcome to My Laravel App.</h2>
<p>Manage students and courses easily</p>
<div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="{{route('students.index')}}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Manage Students</a>
    <a href="{{route('courses.index')}}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Manage Courses</a>
</div>
@endsection