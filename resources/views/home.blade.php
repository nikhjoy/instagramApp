@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://st2.depositphotos.com/4328131/6387/v/600/depositphotos_63870593-stock-illustration-graphic-silver-b-letter-symbol.jpg" style="width: 50%;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>25k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeGram.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source team that shares the code needed!</div>
            <div><a href="#">www.freecodegram.com</a></div>
        </div>
    </div>

    <div class="row">
        <div class="col-4 pt-5">
            <img src="https://www.cm-today.com/uploads/articles/20210425102327_KPMG-Aramco-MoU-Signing.jpg" class="w-100">
        </div>
        <div class="col-4 pt-5">
            <img src="https://www.cm-today.com/uploads/articles/20210419091858_HIA-IT-ISO.jpg" class="w-100">
        </div>
        <div class="col-4 pt-5">
            <img src="https://www.cm-today.com/uploads/articles/20210419092957_transguard.jpg" class="w-100">
        </div>

    </div>


</div>


@endsection
