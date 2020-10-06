@extends('adminlte.master')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><Meetings></Meetings></h3>


            <div class="card-tools">
                <div class="">
                    <a class="btn btn-success" href="{{ route('meetings.create') }}"> Buat Meeting Baru</a>
                </div>
            </div>
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
                                <a class="btn btn-info" href="{{ route('meetings.show',$meeting->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('meetings.edit',$meeting->id) }}">Edit</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
