<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@if(empty($article))
<button  class="btn btn-warning" onClick="window.print()">Print this page</button>`
@component('../button')
insert
@endcomponent





<h3>Listes Articles
</h3>
<form action="" class="form-inline">
  <input type="search" value="{{request('search')}} " class="form-control" 
  placeholder="Rechercher...." name="search">
  <button class="btn btn-error"> <i class="fa fa-search"></i></button>

</form>
@forelse($articles as $article)

<h4>{{$loop->iteration}}-{{$article->name}}</h4>
<p>{{ $article->body}}</p
  <h4> {{$article->published_at}}</h4>
  <td><button  class="btn btn-danger" onclick="location.href='{{ url('/articles/create') }}'">
    Supp</button></td>

    <hr>
    <mark>hello</mark> 
    @empty
    <p>Pas Darticle</p>

@endforelse
{{$articles->appends(['search'=> request('search')])->links()}}

@endif

{{$articles->render()}}

