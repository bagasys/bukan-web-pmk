@extends('adminlte.master')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel Meeting</h3>

            <a class="btn btn-info float-right bg-success" href="{{ route('meetings.create') }}"><i
                    class="fa fa-plus"></i> Meeting Baru</a>
        </div>

        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th style="">Acara</th>
                    <th>Tipe</th>
                    <th>Mulai</th>
                    <th>Berakhir</th>
                    <th style="width: 280px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($meetings as $meeting)
                    <tr>
                        <td>{{ $meeting->title }}</td>
                        <td>{{ $meeting->type }}</td>
                        <td>{{ $meeting->start }}</td>
                        <td>{{ $meeting->end }}</td>

                        <td>
                            <form action="{{ route('meetings.destroy', $meeting->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-info" href="{{ route('meetings.show',$meeting->id) }}"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-primary" href="{{ route('meetings.edit',$meeting->id) }}"><i
                                        class="fa fa-edit"></i></a>
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <div class="card-footer">
            {{$posts->links("pagination::bootstrap-4")}}


        </div>
    </div>
@endsection
