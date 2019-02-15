<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <!-- Fonts -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
  <div class="container py-5">
    <h1 class="page-header">ToDo一覧</h1>
    <p class="text-right">
        <a class="btn btn-success" href="/todo/create">ToDoを追加</a>
    </p>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th>やること</th>
          <th>期限</th>
          <th>作成日時</th>
          <th>更新日時</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="align-middle">静的なTodoです</td>
          <td class="align-middle">2018/8/27</td>
          <td class="align-middle">2017/01/01</td>
          <td class="align-middle">2017/01/10</td>
          <td><a class="btn btn-primary" href="">編集</a></td>
          <td><button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- Scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

