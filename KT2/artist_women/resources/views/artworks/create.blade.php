@extends('layouts.app')

@section('content')
    <h1>Create new Artwork</h1>

    <form action="{{ route('artworks.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="artist_name">Artist name</label>
            <input type="text" name="artist_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="art_type">Art type</label>
            <!-- <input type="text" class="form-control"name="art_type"  placeholder="Hội họa, Văn Học, Âm nhạc"> -->
            
            <select name="art_type">
                <option value="Hội họa">Hội họa</option>
                <option value="Âm nhạc">Âm nhạc</option>
                <option value="Văn học">Văn học</option>
            </select>
        </div>

        <div class="form-group">
            <label for="media_link">Media link</label>
            <input type="text" name="media_link" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="cover_image">Cover image</label>
            <input type="text" name="cover_image" class="form-control" required>
        </div>

        <div class="form-group d-flex my-2">
            <button type="submit" class="btn btn-primary">Create</button>
            <div class="form-group mx-2">
                <a href="{{ route('artworks.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
        
    </form>
@endsection
