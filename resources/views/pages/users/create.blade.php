<x-layouts.frontend>

@if(session()->has('error_message'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session()->get('error_message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

    <h2 class="text-danger">ADD USER</h2>
    <form action="/users" method="post" class="form-group">
        @csrf
        <label for="name" class="label-control">Name : </label>
        <input type="text" name="name" id="name" class="form-control">
        <label for="password" class="label-control">Password : </label>
        <input type="password" name="password" id="password"  class="form-control">
        <label for="phone" class="label-control">Phone : </label>
        <input type="text" name="phone" id="phone"  class="form-control">
        <label for="email" class="label-control">E-Mail : </label>
        <input type="text" name="email" id="email"  class="form-control">
        <label for="address" class="label-control">Address : </label>
        <textarea name="address" id="address" class="form-control"></textarea>
        <button type="submit" class="mt-4 btn btn-primary">SUBMIT</button>
        <a href="/users" class="mt-4 btn btn-warning">KEMBALI</a>
    </form>
</x-layouts.frontend>