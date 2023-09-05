@extends('Layouts.app')
@section('main')
      @if(session('success'))
    <div class="alert alert-success" id="success-message">
        {{ session('success') }}
    </div>
    <script>
        // Automatically remove the success message after 5 seconds
        setTimeout(function() {
            var successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 3000); // 5000 milliseconds = 5 seconds
    </script>
@endif
    <div class="container">
        <div class="text-right">
            <a href="/products/create" class="btn btn-dark mt-1"  >Add New Product</a>
        </div>
        <table class="table table-hover mt-3">
            <thead>
              <tr>
                <th>Sno.</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
              <tr>
                <td>\{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>
                    <img src="products/{{ $product->image}}"
                    class="rounded-circle" width="30" height="30" />
                </td>
                <td>
                    <a href="/products/{{$product->id}}/edit" class="btn btn-success btn-sm" >Edit</a> ||
                    {{-- <a href="/products/{{$product->id}}/delete" class="btn btn-danger btn-sm" >Delete</a> --}}
                    <form method="POST" class="d-inline" action="products/{{$product->id}}/delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>

@endsection()
