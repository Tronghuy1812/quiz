<form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <br/>
    <button>Upload</button>
    @if(!empty($path))
        <img src="{{asset($path)}}" alt="img" width="220px">
    @endif
</form>