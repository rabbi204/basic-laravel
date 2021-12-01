
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Category.... <b></b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
                            </div>
                        @endif
                        <div class="card-header">
                            All Category
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">SL No</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <th scope="row">{{ $categories -> firstItem() + $loop -> index }}</th>
                                            <td>{{ $category -> category_name }}</td>
                                            <td>{{ $category -> user -> name }}</td>
                                            <td>
                                                @if ($category -> created_at == NULL)
                                                    <span class="text-danger">No Date Set</span>
                                                    @else
                                                    {{ $category -> created_at -> diffForHumans() }}
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('category.edit',$category -> id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="{{ route("softDelete.category", $category -> id) }}" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>
                              {{ $categories -> links() }}
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add Category</div>
                        <div class="card-body">
                            <form action="{{ route('store.category') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" name="category_name" aria-describedby="emailHelp">
                                  @error('category_name')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Add Category</button>
                              </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- trash part -->
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Trash Category list
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">SL No</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trashCategory as $category)
                                        <tr>
                                            <th scope="row">{{ $categories -> firstItem() + $loop -> index }}</th>
                                            <td>{{ $category -> category_name }}</td>
                                            <td>{{ $category -> user -> name }}</td>
                                            <td>
                                                @if ($category -> created_at == NULL)
                                                    <span class="text-danger">No Date Set</span>
                                                    @else
                                                    {{ $category -> created_at -> diffForHumans() }}
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('category.restore',$category -> id) }}" class="btn btn-sm btn-warning">Restore</a>
                                                <a href="{{ route('category.permanentlyDelete',$category -> id) }}" class="btn btn-sm btn-danger">Permanently Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>
                              {{ $trashCategory -> links() }}
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- trash part -->
    </div>
</x-app-layout>
