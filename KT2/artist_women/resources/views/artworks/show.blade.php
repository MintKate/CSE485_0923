
@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header"><h3 style="align-items: center;"><strong>View Artwork</strong></h3></div>
  <div class="card-body">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" name="id" class="form-control" value="{{$artwork->id}}"  required readonly>
        </div>
        <div class="form-group">
            <label for="artist_name">Artist name</label>
            <input type="text" name="artist_name" class="form-control" value="{{ $artwork->artist_name }}"  required readonly>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" value="{{ $artwork->description }}"required readonly>
        </div>

        <div class="form-group">
            <label for="art_type">Art type</label>
            <input type="text" name="art_type" class="form-control" value="{{ $artwork->art_type }}"required readonly>
        </div>

        <div class="form-group">
            <label for="media_link">Media link</label>
            <input type="text" name="media_link" class="form-control" value="{{ $artwork->media_link }}" required readonly>
        </div>

        <div class="form-group">
            <label for="cover_image">Cover image</label>
            <input type="text" name="cover_image" class="form-control" value="{{ $artwork->cover_image }}" required>
        </div>

        <div class="form-group my-2 d-flex">
            <div class="form-group mx-2">
                <a href="{{ route('artworks.index') }}" class="btn btn-secondary">All Artwork</a>
            </div>
        </div>
  </div>
</div>
 
@stop