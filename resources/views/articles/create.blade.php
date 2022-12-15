@extends ('layout')

@section ('content')
<h2>Create Form</h2>
<div>
  <form method="POST" action="/articles">
    @csrf
    <label>Title</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}">

    @error('title')
      <p>{{ $errors->first('title') }}</p>
    @enderror

    <br />
    <input type="submit">
  </form>
</div>
@endsection