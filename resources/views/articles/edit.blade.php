@extends ('layout')

@section ('content')
<h2>Edit Form</h2>
<div>
  <form method="POST" action="{{ route('articles.edit', $id) }}">
    @csrf
    @method('PUT')

    <label>Title</label>
    <input type="text" name="title" id="title" value="{{ $title }}">
    <br />
    <input type="submit">
  </form>
</div>
@endsection