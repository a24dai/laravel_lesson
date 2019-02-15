@extends ('layouts.app')
@section ('content')

<h1 class="page-header">ToDo一覧</h1>
<p class="text-right">
    <a class="btn btn-success" href="/todo/create">ToDoを追加</a>
</p>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th>やること</th>
      <th>作成日時</th>
      <th>更新日時</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="align-middle">静的なTodoです</td>
      <td class="align-middle">2017/01/01</td>
      <td class="align-middle">2017/01/10</td>
      <td><a class="btn btn-primary" href="">編集</a></td>
      <td><button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button></td>
    </tr>
  </tbody>
</table>

@endsection

