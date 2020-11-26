@extends('layouts.app')

@section('content')
<div class="container">
    <h5>Create a new upload</h5>

    <form>
        <div class="form-group">
            <label for="categorySelect">Category</label>
            <select class="form-control" id="categorySelect">
                <option>Play</option>
                <option>Narratives</option>
                <option>Dances</option>
                <option>Spoken Word & Poetry</option>
                <option>Music</option>
                <option>Circus Arts</option>
                <option>Children Content</option>
            </select>
        </div>

        <div class="form-group">
            <label for="typeSelect">Type</label>
            <select class="form-control" id="typeSelect">
                <option>Live Stream</option>
                <option>Ticket</option>
                <option>Pre recorded</option>
                <option>Audio</option>
                <option>Article</option>
            </select>
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" name="location" id="location">
        </div>

        <div class="form-group">
            <label for="language">Performing Language</label>
            <input type="text" class="form-control" name="language" id="language">
        </div>

        <div class="form-group">
            <label for="synopsis">Synopsis</label>
            <input type="text" class="form-control" name="synopsis" id="synopsis">
        </div>

        <div class="form-group">
            <label for="producer">Producer</label>
            <input type="text" class="form-control" name="producer" id="producer">
        </div>

        <div class="form-group">
            <label for="playwright">Playwright</label>
            <input type="text" class="form-control" name="playwright" id="playwright">
        </div>

        <div class="form-group">
            <label for="stage-manager">Stage Manager</label>
            <input type="text" class="form-control" name="stage-manager" id="stage-manager">
        </div>

        <div class="form-group">
            <label for="production-crew-list">Production Crew List</label>
            <input type="text" class="form-control" name="crew" id="production-crew-list">
        </div>

        <div class="form-group">
            <label for="list-of-case">List of Cast</label>
            <input type="text" class="form-control" name="cast" id="list-of-case">
        </div>

        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" class="form-control" name="tags" id="tags">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price" id="price">
        </div>

        <div class="custom-file mb-4">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection