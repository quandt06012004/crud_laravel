<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                @if ($message = Session::get('message'))

                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>{{$message}}</strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
                @endif
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- @foreach ($list as $item)
                            <tr>
                                <td scope="row">{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->status ? 'Hiện' : 'Ẩn'}}</td>
                            </tr>
                        @endforeach --}}
                        
                        @forelse ($list as $item)
                            <tr>
                                <td scope="row">{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->status ? 'Hiện' : 'Ẩn'}}</td>
                                <td>
                                  <a href="{{route('category.edit',$item->id)}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('category.delete',$item->id)}}" onclick="return confirm('Mày chắc chắn chứ ?')" class="btn btn-danger">Deleete</a>
                                </td>
                            </tr>
                        @empty
                            <h1>Tạm Thời đếch có bản ghi nào cả am sory</h1>
                        @endforelse
                    </tbody>
                </table>

                <a href="{{route('category.add')}}" class="btn btn-success">Thêm mới</a>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>