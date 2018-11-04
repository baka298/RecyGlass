@extends('adminlte::page')

@section('content_header')
    <h1>Demandes de partenaires en attente</h1>
@endsection

@section('content')
    <div class="row card-body bg-light box box-primary">
    @foreach ($partners as $partner)
        
        <div class="col-sm-12 col-md-6">
            <div class="box box-solid">
                <div class="box-body">
                    <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                        {{$partner->company}}
                    </h4>
                    <div class="media">
                        <div class="media-left">
                                <img src="{{$partner->image}}" alt="MaterialPro" class="media-object" style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                        </div>
                        <div class="media-body">
                            <div class="clearfix">
                                <div class="pull-right">
                                    @can('update',$partner)
                                        <a href="https://themequarry.com/theme/materialpro-material-bootstrap-4-admin-template-ASC6FWYG" class="btn btn-warning px-3 btn-sm ad-click-event">
                                            Edit
                                        </a>
                                    @endcan
                                    <br>
                                    @can('admin')

                                        <form class="d-inline" action="{{Route('partner.destroy',['partner'=>$partner->id])}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <br>

                                        <a href="{{route('change',['partner'=>$partner->id])}}" class="btn btn-success px-2 btn-sm ad-click-event">
                                            partner
                                        </a>
                                    @endcan
                                </div>

                                {{-- <h4 style="margin-top: 0">MaterialPro ─ $35</h4> --}}

                                <p>Adresse : {{$partner->address}}</p>
                                <p>Catégorie : {{$partner->category}}</p>
                                @if($partner->site)
                                <p><a href="{{$partner->site}}">{{$partner->site}}</a></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection