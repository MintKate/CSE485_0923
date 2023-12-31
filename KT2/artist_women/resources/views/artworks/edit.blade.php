@extends('layouts.app')

@section('content')
    <h1>Edit Artwork</h1>

    <form action="{{ route('artworks.update', $artwork->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="artist_name">Artist name</label>
            <input type="text" name="artist_name" class="form-control" value="{{ $artwork->artist_name }}"  required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" value="{{ $artwork->description }}"required>
        </div>

        <div class="form-group">
            <label for="art_type">Art type</label>
            <select name="art_type">
                <option value="Hội họa" {{ $artwork->art_type == 'Hội họa' ? 'selected' : '' }}>Hội họa</option>
                <option value="Âm nhạc" {{ $artwork->art_type == 'Âm nhạc' ? 'selected' : '' }}>Âm nhạc</option>
                <option value="Văn học" {{ $artwork->art_type == 'Văn học' ? 'selected' : '' }}>Văn học</option>
            </select>
        </div>

        <div class="form-group">
            <label for="media_link">Media link</label>
            <input type="text" name="media_link" class="form-control" value="{{ $artwork->media_link }}" required>
        </div>

        <div class="form-group">
            <label for="cover_image">Cover image</label>
            <input type="text" name="cover_image" class="form-control" value="{{ $artwork->cover_image }}" required>
        </div>

        <div class="form-group my-2 d-flex">
            <button type="submit" class="btn btn-primary">Edit</button>
            <div class="form-group mx-2">
                <a href="{{ route('artworks.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
@endsection
