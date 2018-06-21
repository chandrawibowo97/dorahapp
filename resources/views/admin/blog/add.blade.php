@extends('layouts.main')

@section('content')

<div class="container py-5">
    <p>
        <a class="btn btn-secondary" href="{{route('admin_post')}}">Kembali Ke Post</a>
    </p>
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('admin_post_add')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Judul Post</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="body">Isi Post</label>
                    <textarea id="body" name="body"></textarea>
                </div>
                {{-- <div class="form-group">
                    <label for="event_">Upload Gambar:</label>
                    <input type="file" class="form-control" name="uploadGambar" id="uploadGambar">
                </div> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'body' );
</script>
@endsection