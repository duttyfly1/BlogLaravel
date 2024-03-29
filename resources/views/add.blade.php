@extends('layouts.default')
@section('content')
    <div class="container top" style="width: 40%;">
        <h1 class="display-4">Add</h1><br>
        <form method="post" action="{{ route('project.add') }}">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Enter title" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" id="description" rows="3"
                          placeholder="Enter description" required></textarea>
            </div>
            <button type="submit" class="btn btn-outline-primary wide rounded-0">Submit</button>
            <a href="{{ route('project.list') }}" class="btn btn-outline-secondary wide rounded-0">Cancel</a>
        </form>
    </div>
@stop