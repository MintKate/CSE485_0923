@extends('layouts.app')

@section('content')

    <h1>Artwork</h1>
    <a href="{{ route('artworks.create') }}" class="btn btn-primary">Create new Artwork</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Artist name</th>
                <th>Description</th>
                <th>Art type</th>
                <th>Media link</th>
                <th>Cover image</th>
                <th>Active</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artworks as $artwork)
                <tr>
                    <td>{{ $artwork->id }}</td>
                    <td>{{ $artwork->artist_name }}</td>
                    <td>{{ $artwork->description }}</td>
                    <td>{{ $artwork->art_type }}</td>
                    <td>{{ $artwork->media_link}}</td>
                    <td>{{ $artwork->cover_image}}</td>
                    <td class="d-flex">
                        <a href="{{ route('artworks.show', $artwork->id) }}" class="btn btn-primary ">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('artworks.edit', $artwork->id) }}" class="btn btn-primary mx-2">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        
                        <button type="button" class="btn btn-danger btn-sm " data-bs-toggle="modal" data-bs-target="#deleteModal-{{$artwork->id}}" >
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                            <!-- Modal -->
                            <form method="POST" action="{{ route('artworks.destroy',$artwork->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                                <div class="modal fade" id="deleteModal-{{$artwork->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE ARTWORK</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Do you want to delete?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                        </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $artworks->links() }} <!-- Hiển thị liên kết phân trang -->
@endsection
