@extends("layouts.assetsLinks")

@section('content')
<div class="container">
  <div class="row">
    <table>
      <tr>
        <th>ID</th>
        <td>{{ $instructor->id }}</td>
      </tr>
      <tr>
        <th>Name</th>
        <td>{{ $instructor->name }}</td>
      </tr>
      <tr>
        <th>Email</th>
        <td>{{ $instructor->email }}</td>
      </tr>
      <tr>
        <th>phone</th>
        <td><?php echo $instructor->phone ? $instructor->phone : 'no phones for that user'?></td>
      </tr>
      <tr>
        <th>Courses Enrolled</th>
        <td>
          <ul>
            @foreach ($courses as $course)
            <li>{{$course->title}}</li>
            @endforeach
          </ul>
        </td>
      </tr>
    </table>
  </div>
</div>
@endsection