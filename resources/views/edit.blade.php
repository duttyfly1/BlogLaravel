@extends('layouts.default')
@section('content')
    <div class="container top" style="width: 40%;">
        <h1 class="display-4">Edit</h1>

        <form method="post" action="{{ route('project.edit', ['project' => $project->id]) }}">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Enter title" value="{{ $project->title }}">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" id="description" rows="3">{{ $project->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-outline-primary wide rounded-0">Submit</button>
            <a href="{{ route('project.list') }}" class="btn btn-outline-secondary wide rounded-0">Cancel</a>
        </form>
    </div>
@stop