@extends('auth.layouts')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                <div class="row">
                    <a href ="{{route('gallery.create')}}" class="btn btn-dark">New Gallery</a>
                    @if(count($galleries)>0)
                    @foreach ($galleries as $gallery)
                    <div class="col-sm-2">
                        <div>
                            <a class="example-image-link" href="{{asset('storage/app/public/posts_image/'.$gallery->picture )}}" data-lightbox="roadtrip" data-title="{{$gallery->description}}">
                                <img class="example-image img-fluid mb-2" src="{{asset('storage/app/public/posts_image/'.$gallery->picture )}}" alt="image-1" />
                            </a>
                            <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-primary">Edit</a>
			<form form onsubmit="return confirm('Yakin ingin hapus ?');" action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger my-2">Delete</button>
			</form>
                        </div>
                    </div>
                    @endforeach
                @else
                    <h3>Tidak ada data.</h3>
                @endif
                    <div class="d-flex">
                        {{ $galleries->links() }}
                    </div>
                    <div class="d-flex mt-5">
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-blue">< Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection