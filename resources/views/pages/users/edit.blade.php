<x-layouts.frontend>
    <h2 class="text-danger">EDIT USER</h2>
    <form action="/users/{{$jsonResponse->data->id}}" method="post" class="form-group">
        @csrf
        @method('PATCH')
        <label for="name" class="label-control">Name : </label>
        <input type="text" name="name" id="name" class="form-control" value="{{$jsonResponse->data->name}}">
        <label for="password" class="label-control">Password : </label>
        <input type="password" name="password" id="password"  class="form-control">
        <label for="phone" class="label-control">Phone : </label>
        <input type="text" name="phone" id="phone"  class="form-control" value="{{$jsonResponse->data->phone}}">
        <label for="email" class="label-control">E-Mail : </label>
        <input type="text" name="email" id="email"  class="form-control" value="{{$jsonResponse->data->email}}">
        <label for="address" class="label-control">Address : </label>
        <textarea name="address" id="address" class="form-control">{{$jsonResponse->data->address}}</textarea>
        <button type="submit" class="mt-4 btn btn-primary">SUBMIT</button>
        <a href="/users" class="mt-4 btn btn-warning">KEMBALI</a>
    </form>
</x-layouts.frontend>