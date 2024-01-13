<x-layouts.frontend>

    <div class="card w-50">
        <div class="card-header">
            <h3>Profile</h3>
        </div>
        <div class="card-body">
        <label for="name">Nama</label><br>
        <input type="text" name="name" id="name" readonly value="{{$userData->name}}" class="form-control"><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" readonly value="{{$userData->email}}" class="form-control"><br>
        <label for="phone">Nomor Telepon</label><br>
        <input type="text" name="phone" id="phone" readonly value="{{$userData->phone}}" class="form-control"><br>
        <label for="address">Alamat</label><br>
        <textarea name="address" id="address" readonly class="form-control">{{$userData->address}}</textarea><br>
    </div>
    <div class="card-footer">
        <form action="logout" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Log Out</button>
        </form>
    </div>
    </div>
    </div>

</x-layouts.frontend>