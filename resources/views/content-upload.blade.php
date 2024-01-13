<x-layouts.frontend>
    <h2 class="text-danger">TAMBAH ARTIKEL</h2>
    <form action="{{url('post-content-upload')}}" method="post" enctype="multipart/form-data" class="form-group">
        @csrf
        <label for="photo" class="label-control">Foto Artikel : </label>
        <input type="file" name="photo" id="photo" class="form-control">
        <label for="title" class="label-control">Judul Artikel : </label>
        <input type="text" name="title" id="title"  class="form-control">
        <label for="content" class="label-control">Isi Konten Artikel : </label>
        <textarea name="content" id="content" class="form-control"></textarea>
        <button type="submit" class="mt-4 btn btn-primary">SUBMIT</button>
    </form>
</x-layouts.frontend>