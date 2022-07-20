@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container" align="center">
    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Anda Berhasil Login.
                    <a href="{{ route('pembelian.index') }}"> Klik Disini</a>
</div>
@endsection
