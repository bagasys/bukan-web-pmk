<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">

<div class="login-box">
    <div class="login-logo">
        <span>{{$meeting->title}}</span>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <div class="form-group">
                <label>Hadir Sebagai:</label>
                <select id="select-checkinAs" class="form-control select2" style="width: 100%;">
                    <option value="">Pilih...</option>
                    <option value="student">Mahasiswa</option>
                    <option value="lecturer">Dosen</option>
                    <option value="alumni">Alumni</option>
                    <option value="public">Umum</option>
                </select>
            </div>
        </div>

        <!-- /.form-group -->
    </div>
    <div class="card" style="display: none" id="card-student">
        <div class="card-body login-card-body">
            <p class="login-box-msg"><label for="nrp">Masukan NRP</label></p>

            <form action="{{route('meetings.student-checkin', $meeting)}}" method="post">
                @csrf
                <div class="form-group">
                    {{--                    <label for="nrp">NRP</label>--}}
                    <input type="text"
                           class="form-control {{$errors->has('nrp') ? 'is-invalid' : ''}}" id="nrp"
                           name="nrp"
                           placeholder="Masukkan NRP Mahasiswa ITS"
                           value="{{old('nrp')}}"
                           required
                    >
                    @error('nrp')
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>

    <div class="card" style="display: none" id="card-alumni">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Masukan username alumni</p>

            <form action="{{route('meetings.alumni-checkin', $meeting)}}" method="post">
                @csrf

                <div class="form-group">
                    {{--                    <label for="nrp">NRP</label>--}}
                    <input type="text"
                           class="form-control {{$errors->has('username') ? 'is-invalid' : ''}}" id="username"
                           name="username"
                           placeholder="Masukkan Username Alumni"
                           value="{{old('username')}}"
                           required
                    >
                    @error('username')
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>


    <div class="card" style="display: none" id="card-lecturer">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Masukan NID Dosen</p>

            <form action="{{route('meetings.lecturer-checkin', $meeting)}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text"
                           class="form-control {{$errors->has('nid') ? 'is-invalid' : ''}}" id="nid"
                           name="nid"
                           placeholder="Masukkan NID"
                           value="{{old('nid')}}"
                           required
                    >
                    @error('nid')
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>

    <div class="card" style="display: none" id="card-public">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Masukan identitas</p>

            <form action="{{route('meetings.public-checkin', $meeting)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text"
                           class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name"
                           name="name"
                           placeholder="Masukkan Nama"
                           value="{{old('name')}}"
                           required
                    >
                    @error('name')
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="origin">Asal</label>
                    <input type="text"
                           class="form-control {{$errors->has('origin') ? 'is-invalid' : ''}}" id="origin"
                           name="origin"
                           placeholder="(contoh: 'kampus X, gereja X)"
                           value="{{old('origin')}}"
                           required
                    >
                    @error('origin')
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script>
    const checkinAs = document.querySelector('#select-checkinAs');
    const studentCard = document.querySelector('#card-student');
    const lecturerCard = document.querySelector('#card-lecturer');
    const alumniCard = document.querySelector('#card-alumni');
    const publicCard = document.querySelector('#card-public');

    const cards = [{label: 'student', element: studentCard}, {
        label: 'lecturer',
        element: lecturerCard
    }, {label: 'alumni', element: alumniCard}, {label: 'public', element: publicCard}]


    checkinAs.addEventListener("change", function (event) {
        const value = event.target.value;
        for (const card of cards) {
            if (card.label === value) {
                card.element.style.display = 'block'
            } else {
                card.element.style.display = 'none'
            }
        }
    })
</script>
</body>
</html>
