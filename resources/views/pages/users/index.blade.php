<x-layouts.frontend>
@if(session()->has('success_message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('success_message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('error_message'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session()->get('error_message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

    <h2 class="text-danger">USER LIST</h2>
    <a href="users/add" class="btn btn-primary">ADD</a>

    <table class="table">
        <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>PHONE</th>
            <th>E-MAIL</th>
            <th>ADDRESS</th>
            <th>ACTION</th>
        </tr>
        @foreach ($jsonResponse->data as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->address}}</td>
            <td>
                <form action="users/{{$item->id}}" method="POST" class="form-group">
                @csrf
                @method('DELETE')
                <a href="users/edit/{{$item->id}}" class="btn btn-warning">EDIT</a>
                <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</x-layouts.frontend>