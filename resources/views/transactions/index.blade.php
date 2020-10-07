@extends('adminlte.master')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Transaksi</h3>


            <div class="card-tools">
                <div class="">
                    <a class="btn btn-success" href="{{ route('transactions.create') }}"> Tambah data transaksi</a>
                </div>
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th style="">Pengirim</th>
                    <th>Dompet</th>
                    <th>Status</th>
                    <th style="width: 280px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->sender_name }}</td>
                        <td>{{ $transaction->wallet }}</td>
                        <td>{{ $transaction->status }}</td>
                        <td>
                            <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-info" href="{{ route('transactions.show',$transaction->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('transactions.edit',$transaction->id) }}">Edit</a>
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
