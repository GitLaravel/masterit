<form action="{{ route('form.store') }}" method="post">
    @csrf
    <input name="title">
    <input name="slug">
    <input type="submit">
</form>
