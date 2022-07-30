<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h3>add new category</h3>

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <form action="{{route('cats.store' ,['id' => ($edit_cat) ?$edit_cat->id :null ])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{(old('name') ) ?  old('name') : (($edit_cat)? $edit_cat->name : null )}}" placeholder="Enter name">
                        @error("name")
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="desc" rows="3">{{(old('description') ) ?  old('description') : (($edit_cat)? $edit_cat->description : null )}}</textarea>
                        @error("desc")
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-1">Save</button>
                </form>
            </div>
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cats as $cat)
                            <tr>
                                <td scope="row">{{ $cats->firstItem() + $loop->index}}</td>
                                <td>{{$cat->name}}</td>
                                <td>{{$cat->description}}</td>
                                {{-- <td><a href="/admin/cats/{{$cat->id}}/delete"  class="btn btn-sm  btn-danger">Delete</a></td> --}}
                                <td class ="d-flex">
                                    {{-- <a href="{{route('cats.delete' , [$cat->id])}}"  class="btn btn-sm  btn-danger">Delete</a> --}}


                                    <a href="{{route('cats.index' , [$cat->id])}}"  class="mx-2 btn btn-sm  btn-success">Edit</a>

                                    <form method="post" action="{{route('cats.delete' , [$cat->id])}}">
                                        @csrf
                                        @method("DELETE")
                                        <input type="submit"   class="btn btn-sm  btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$cats->links('pagination::bootstrap-5')}}
                {{-- @dump($cats) --}}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
