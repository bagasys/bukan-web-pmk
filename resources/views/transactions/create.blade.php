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
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Masukkan Data Transaksi </h3>
            </div>
            <form role="form" method="POST" action="{{ route('transactions.store')  }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="sender_name">Nama Pengirim</label>
                                <input type="text" class="form-control {{$errors->has('sender_name') ? 'is-invalid' : ''}}" id="sender_name" name="sender_name" placeholder="Masukkan nama pengirim" value="{{old('sender_name')}}">
                                @error('sender_name')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="sender_account">Rekening Pengirim</label>
                                <input type="text" class="form-control {{$errors->has('sender_account') ? 'is-invalid' : ''}}" id="sender_account" name="sender_account" placeholder="Masukkan rekening pengirim" value="{{old('sender_account')}}">
                                @error('sender_account')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="send_date">Tanggal transaksi</label>
                                {{-- <input type="date" class="form-control {{$errors->has('send_date') ? 'is-invalid' : ''}}" id="send_date" name="send_date"
                                placeholder="Masukkan tanggal" value="{{old('send_date')}}"> --}}
                                <div class="input-group">
                                    <input type="date" class="form-control {{$errors->has('send_date') ? 'is-invalid' : ''}}" id="verified_date" name="send_date" placeholder="Masukkan tanggal" value="{{old('send_date')}}">
                                </div>
                                @error('send_date')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="receiver_account">Rekening Penerima</label>
                                <input type="text" class="form-control {{$errors->has('receiver_account') ? 'is-invalid' : ''}}" id="receiver_account" name="receiver_account" placeholder="Masukkan rekening penerima" value="{{old('receiver_account')}}">
                                @error('receiver_account')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="wallet">Dompet</label>
                                <input type="text" class="form-control {{$errors->has('wallet') ? 'is-invalid' : ''}}" id="wallet" name="wallet" placeholder="Masukkan nama dompet" value="{{old('wallet')}}">
                                @error('wallet')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" class="form-control {{$errors->has('status') ? 'is-invalid' : ''}}" id="status" name="status" placeholder="Masukkan status" value="{{old('status')}}">
                                @error('status')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="verified_by">Diverifikasi oleh</label>
                                <input type="text" class="form-control {{$errors->has('verified_by') ? 'is-invalid' : ''}}" id="verified_by" name="verified_by" placeholder="Masukkan nama pemverifikasi" value="{{old('verified_by')}}">
                                @error('verified_by')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="verified_date">Tanggal verifikasi</label>
                                <input type="date" class="form-control {{$errors->has('verified_date') ? 'is-invalid' : ''}}" id="verified_date" name="verified_date" placeholder="Masukkan tanggal" value="{{old('verified_date')}}">
                                @error('verified_date')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="proof">Bukti transfer</label>
                                <input type="file" class="form-control {{$errors->has('proof') ? 'is-invalid' : ''}}" id="proof" name="proof">
                                @error('proof')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="amount">Nominal uang</label>
                                <input type="number" class="form-control {{$errors->has('amount') ? 'is-invalid' : ''}}" id="amount" name="amount" placeholder="Masukkan jumlah nominal uang" value="{{old('amount')}}">
                                @error('amount')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="note">Catatan</label>
                                <input type="text" class="form-control {{$errors->has('note') ? 'is-invalid' : ''}}" id="note" name="note" placeholder="Masukkan catatan" value="{{old('note')}}">
                                @error('note')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
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

@push('scripts')

<script src="{{asset('/adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>


<script>
    $('#datemask').inputmask('dd-mm-yyyy', {
        'placeholder': 'dd-mm-yyyy'
    })
</script>
@endpush