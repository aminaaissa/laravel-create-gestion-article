<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
        <h4>Insert Article</h4>
      
@if($errors->any())
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach

</ul>



</div>
@endif

<form action="{{ route('articles.store')}}" method="post">
    @csrf
Name:<input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" value="{{ old('name') }}"><br>

    published_at:<input type="date" name="published_at" class="form-control" value="{{old('published_at')}}"><br>

    Body:<textarea type="text" name="body" class="form-control" value="{{old('body')}}"></textarea><br>

  <button class="btn btn-info">Add</button>
</form></div>