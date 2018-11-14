@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-sm-4">
                        <a class="list-group-item" href="{{route('admin.article.edit', $article)}}">
                            <h4 class="list-group-item-heading">Текст страницы</h4>
                            <p class="list-group-item-text">
                                <hr>
                                {{$article->text}}
                            </p>
                        </a>
                    </div> 
                    <div class="col-sm-4">
                        <a class="list-group-item" href="{{route('admin.slot.edit', $slot)}}">
                            <h4 class="list-group-item-heading">Информация о слоте</h4>
                            <p class="list-group-item-text">
                                <hr>
                                {{$slot->slot_name}}
                                <hr>
                                {{$slot->slot_element_id}}
                                <hr>
                                {{$slot->slot_sizes}}
                            </p>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="list-group-item" href="{{route('admin.param.edit', $param)}}">
                            <h4 class="list-group-item-heading">Параметры</h4>
                            <p class="list-group-item-text">
                                <hr>
                                @if($param->is_available == 1) Available @else Not available @endif
                                <hr>
                                @if($param->is_lazy == 1) Lazy @else Not lazy @endif
                            </p>
                        </a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
