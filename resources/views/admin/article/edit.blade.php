@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Text</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" action="{{route('admin.article.update', $article)}}" method="POST">
            
                        <input type="hidden" name="_method" value="put">

                        {{csrf_field()}}

                        @include('admin.article.partials.form');
                        
                        <a href="{{route('admin.index')}}" class="btn btn-primary pull-right">
                            Назад
                        </a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
