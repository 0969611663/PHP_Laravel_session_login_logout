@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Blog
    </div>
    <div>
        <p class="text-danger">Chao mung <?php echo $users = session()->get('user_name');?></p>
        <p class="text-danger">Luot Xem:
            <?php $views = Session::get('login');
            echo count($views);
            ?>
        </p>
    </div>
    <a href="{{ route('user_logout') }}">
        <button type="button" class="btn btn-outline-primary">Đăng Xuất</button>
    </a>
    <hr>
@endsection
