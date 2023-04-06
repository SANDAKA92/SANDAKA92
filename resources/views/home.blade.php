@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @CSRF
                        <div class="form-group">
                            <label>Post Title</label>
                            <input type="text" name="title" class="form-control"  placeholder="Enter Post title" required>
                            
                        </div>
                        <div class="form-group">
                            <label>Post description</label>
                            
                            <textarea class="form-control" name="description" placeholder="Enter Post description" rows="10" required></textarea>
                            
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="thumbnail" type="file">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
