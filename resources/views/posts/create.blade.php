@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">
        Create Post
    </div>
    <div class="card-body">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">
                    Title
                </label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="form-group">

                <label for="description">
                    Description
                </label>
                <textarea type="text" cols="5" rows="5" class="form-control" name="description" id="description"></textarea>
            </div>
            <div class="form-group">

                <label for="content">
                    Content
                </label>
                <input id="content" type="hidden" name="content">
                <trix-editor input="content"></trix-editor>
            </div>
            <div class="form-group">
                <label for="published_at">
                    Published At
                </label>
                <input type="datetime-local" class="form-control" name="published_at" id="published_at">
            </div>
            <div class="form-group">
                <label for="image">
                    Image
                </label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    Create Post
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    // flatpickr('#published_at');
</script>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection