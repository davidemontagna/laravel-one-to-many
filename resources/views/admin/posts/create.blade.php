@extends('layouts.dashboard')

@section('title', 'Create')
    
@section('content')    
    
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h3>New Post</h3>
                    <form action="{{ route("admin.posts.store") }}" method="POST">
                        @csrf
            
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" id="title" name="title" placeholder="Insert the title">   
                          @error('title')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror         
                        </div>
                        
                        <div class="mb-3">
                          <label for="content" class="form-label">Content</label>
                          <textarea type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content" placeholder="Insert the content">{{old('content')}}</textarea>    
                          @error('content')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror       
                        </div>
                        
                        <a href="{{ route("admin.posts.index") }}"><button type="submit" class="btn btn-primary">Submit</button></a>
                    </form>
            
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{$error}}</li>
                          @endforeach
                        </ul>
                      </div>
                        
                    @endif
                </div>
            </div>
        </div>
    </section>
    
    
@endsection