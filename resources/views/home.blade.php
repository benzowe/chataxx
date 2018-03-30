@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

<h1 class="text-center">Chat App</h1>
<message :messages ="messages"></message>
<sent-message v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></sent-message>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




<h1 class="text-center">Chat App</h1>
<message :mesages ="messages"></message>
<sent-message v-on:messagesent="addMessage" :user="{{ Auth:user() }}"></sent-message>

