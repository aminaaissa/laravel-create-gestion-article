<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
        <h4>Insert Article</h4>
      

<form action="{{ route('articles.store')}}" method="post">
    @csrf
    Name:<input type="text" name="name" class="form-control"><br>
    published_at:<input type="date" name="published_at" class="form-control"><br>
    Body:<textarea type="text" name="body" class="form-control"></textarea><br>
  <button class="btn btn-info">Add</button>
</form></div>