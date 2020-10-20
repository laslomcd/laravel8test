@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Create Post</div>
                  <div class="card-body">
                      @if(session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('success') }}
                          </div>
                      @endif

                          <form action="/post" method="post">
                              @csrf
                              <div class="form-group">
                                  <label for="title">Post Title</label>
                                  <input type="text" name="title" id="title" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label for="body">Post Body</label>
                                  <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="published">Published Date</label>
                                  <input type="date" name="published" id="published" class="form-control">
                              </div>
                              <button type="submit" class="btn btn-dark">Submit</button>
                          </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
