@extends('adminlte.master')

@section('content')
    <div class="row">
        <div class="col-md-3">

            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                             src="{{$transaction->proof}}"
                             alt="User profile picture">
                    </div>
                    <h3 class="profile-username text-center">{{$transaction->sender_name}}</h3>
                    {{-- <p class="text-muted text-center">{{$lecturer->is_tpkk_admin ? 'Dosen Pengurus TPKK' : 'Dosen'}}</p> --}}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>

        <div class="col-md-9">

                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#data-diri" data-toggle="tab">Data
                                    Transaksi</a>
                            </li>
                            {{-- <li class="nav-item"><a class="nav-link" href="#riwayat" data-toggle="tab">Riwayat</a>
                            </li> --}}
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <div class="active tab-pane" id="data-diri">

                                    <table class="table">

                                        <tbody>

                                        <tr>
                                            <td>Rekening pengirim</td>
                                            <td>{{ $transaction->sender_account }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal transaksi</td>
                                            <td>{{ $transaction->send_date }}</td>
                                        </tr>
                                        <tr>
                                            <td>Rekening penerima</td>
                                            <td>{{ $transaction->receiver_account }}</td>
                                        </tr>
                                        <tr>
                                            <td>Dompet</td>
                                            <td>{{ $transaction->wallet }}</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>{{ $transaction->status }}</td>
                                        </tr>
                                        <tr>
                                            <td>Diverifikasi oleh</td>
                                            <td>{{ $transaction->verified_by }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal verifikasi</td>
                                            <td>{{ $transaction->verified_date }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nominal uang</td>
                                            <td>{{ $transaction->amount }}</td>
                                        </tr>
                                        <tr>
                                            <td>Catatan</td>
                                            <td>{{ $transaction->note }}</td>
                                        </tr>
                                        </tbody>
                                    </table>

                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="riwayat">
                                Vijay Gonna Finish This!
                            </div>
                            <!-- /.tab-pane -->

                        </div>
                        <!-- /.tab-content -->

                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->

    </div>
@endsection
