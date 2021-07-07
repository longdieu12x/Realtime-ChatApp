@extends('layouts.app')

@section('content')
<div class="container">
    <chats :user="{{ $user }}"></chats>
</div>
@endsection
