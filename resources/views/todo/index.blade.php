@extends('todo/layout')
@section('content')
<div class="container ops-main" id="app">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">ようこそ</h3>
    <div style="margin:10px;"><a href="/project/create" class="btn btn-primary">新規作成</a></div>
  </div>
</div>
<div class="row">
  <div class="col-md-9 col-md-offset-1" style="margin-right:30px;">
    <table class="table text-center">
      <tr>
        <th class="text-center">タイトル</th>
        <th class="text-center">状態</th>
        <th class="text-center">説明</th>
      </tr>
      @foreach($projects as $project)
      <tr>
        <td>
          <span>{{ $project->tile }}</span>
        </td> 
        <td>
          <span>{{ $project->state }}</span>
        </td> 
        <td>
          <span>{{ $project->description }}</span>
        </td> 
      </tr>
      @endforeach
    </table>
  </div>
  <gantt-chart></gantt-chart>
<script src=" {{ mix('js/app.js') }} "></script>
</div>
@endsection