@extends('adminlte.master')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="row">
        <div class="col-sm-12">
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Transaksi </h3>
                </div>
                <form role="form" method="POST" action="{{ route('transactions.update',$transaction->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="sender_name">Nama Pengirim</label>
                                    <input type="text" class="form-control" id="sender_name" name="sender_name"
                                        placeholder="Masukkan nama pengirim" value="{{ $transaction->sender_name }}">
                                    @error('sender_name')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="sender_account">Rekening Pengirim</label>
                                    <input type="text" class="form-control" id="sender_account" name="sender_account"
                                           placeholder="Masukkan rekening pengirim" value="{{ $transaction->sender_account }}">
                                    @error('sender_account')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="send_date">Tanggal transaksi</label>
                                    <input type="date" class="form-control" id="send_date" name="send_date"
                                           placeholder="Masukkan tanggal" value="{{ date('Y-m-d'  ,strtotime($transaction->send_date)) }}">
                                    @error('send_date')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="receiver_account">Rekening Penerima</label>
                                    <input type="text" class="form-control" id="receiver_account" name="receiver_account"
                                           placeholder="Masukkan rekening penerima" value="{{ $transaction->receiver_account }}">
                                    @error('receiver_account')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="wallet">Dompet</label>
                                    <input type="text" class="form-control" id="wallet" name="wallet"
                                           placeholder="Masukkan nama dompet" value="{{ $transaction->wallet }}">
                                    @error('wallet')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" id="status" name="status"
                                           placeholder="Masukkan status" value="{{ $transaction->status }}">
                                    @error('status')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="verified_by">Diverifikasi oleh</label>
                                    <input type="text" class="form-control" id="verified_by" name="verified_by"
                                           placeholder="Masukkan nama pemverifikasi" value="{{ $transaction->verified_by }}">
                                    @error('verified_by')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="verified_date">Tanggal verifikasi</label>
                                    <input type="date" class="form-control" id="verified_date" name="verified_date"
                                           placeholder="Masukkan tanggal" value="{{ date('Y-m-d'  ,strtotime($transaction->verified_date)) }}">
                                    @error('verified_date')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="proof">Bukti transfer</label>
                                    <img src="{{$transaction->proof}}" width="50px" height="50px">
                                    <img src="" alt="">
                                    <input type="file" class="form-control" id="proof" name="proof"
                                           >
                                    @error('proof')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="amount">Nominal uang</label>
                                    <input type="number" class="form-control" id="amount" name="amount"
                                           placeholder="Masukkan jumlah nominal uang" value="{{ $transaction->amount }}">
                                    @error('amount')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="note">Catatan</label>
                                    <input type="text" class="form-control" id="note" name="note"
                                           placeholder="Masukkan catatan" value="{{ $transaction->note }}">
                                    @error('note')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
