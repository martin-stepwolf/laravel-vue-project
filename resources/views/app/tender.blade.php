@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tenders</h1>
</div>
<div class="card">
    <div class="card-body">
        <tender-content data="{{$tender_sections}}"></tender-content>
    </div>
</div>
@endsection