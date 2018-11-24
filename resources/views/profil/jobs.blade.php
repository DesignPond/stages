@extends('profil.index')
@section('profil')
    @parent

    <div class="table-responsive job-table">
        <table id="mytable" class="table table-bordred table-striped">
            <thead>
            @if(!\Auth::user()->jobs->isEmpty())
                    <tr>
                        <th class="text-left">Titre</th>
                        <th class="text-right">Expire le</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(\Auth::user()->jobs as $job)
                    <tr>
                        <td>
                            <h4><a href="#">{{ $job->title }}</a></h4>
                        </td>
                        <td class="text-right">{{ $job->valid_until->format('d.m.Y') }}</td>
                        <td class="d-flex justify-content-end">
                            <a class="btn btn-success btn-xs mx-1" href="{{ url('job/'.$job->id) }}"><i class="fa fa-check"></i></a>
                            <form action="{{ url('/job/'.$job->id) }}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">{!! csrf_field() !!}
                                <button type="submit" class="btn btn-danger btn-xs mx-1 deleteAction" data-what="supprimer" data-action="bloc: {{ $job->title }}"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div><!-- end table -->
@endsection