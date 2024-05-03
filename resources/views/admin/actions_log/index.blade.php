@extends('form-tool::layouts.layout')

@section('content')

<style>
.text-removed, .img-removed i {
    text-decoration: line-through;
    color:#dd4b39;
    text-decoration-thickness: from-font;
}
.text-added, .img-added i {
    color:#00a65a;
}
.img-removed img {
    border-color:#dd4b39;
}
.img-added img {
    border-color:#00a65a;
}
.data-removed {
    width: 10px;
    height: 10px;
    background-color: #dd4b39;
    display: inline-block;
}
.data-added {
    width: 10px;
    height: 10px;
    background-color: #00a65a;
    display: inline-block;
}
td img {
	width: 100%;
}
.vertical-top {
	vertical-align: top !important;
}
</style>

<div class="row">
	<div class="col-md-8 col-md-offset-2 col-sm-12">
        @foreach ($filteredBy as $label => $value)
            <span class="label label-default">{{ $label }}: {{ $value['value'] }} &nbsp;<a href="{{ url()->current().'?'.$value['query'] }}"><i class="fa fa-times"></i></a></span>
        @endforeach

        @if ($filteredBy)
            <br /><br />
        @endif

        <div class="box box-primary">
            <table class="table table-borderred table-hover">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Module</th>
                        <th>Description</th>
                        <th>Data</th>
                        <th>Go To</th>
                        <th>Acted At</th>
                        <th>Acted By</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                    $isSoftDelete = config('form-tool.isSoftDelete');
                    @endphp
                    @foreach ($actions as $row)
                        @php
                        $isLinkToId = $row->action == 'destroy' || (! $isSoftDelete && $row->action == 'delete') ? false : true;
                        $trashFilter = $isSoftDelete && $row->action == 'delete' ? '&quick_status=trash' : '';

                        $row->action = ucfirst($row->action);
                        $refId = $row->token ? $row->token : $row->refId;
                        @endphp
                        <tr>
                            <td>
                                <a href="{{ $urls['action'] }}&action={{ $row->action }}">
                                @switch($row->action)
                                    @case('Create')
                                        <span class="label label-success">{{ $row->action }}</span>
                                        @break

                                    @case('Update')
                                        <span class="label label-primary">{{ $row->action }}</span>
                                        @break

                                    @case('Delete')
                                        @if ($isSoftDelete)
                                            <span class="label label-warning">{{ $row->action }}</span>
                                        @else
                                            <span class="label label-danger">{{ $row->action }}</span>
                                        @endif

                                        @break
                                        
                                    @case('Restore')
                                        <span class="label label-info">{{ $row->action }}</span>
                                        @break
                                        
                                    @case('Duplicate')
                                        <span class="label label-default">{{ $row->action }}</span>
                                        @break

                                    @case('Destroy')
                                        <span class="label label-danger">{{ $row->action }}</span>
                                        @break

                                @endswitch
                                </a>
                            </td>
                            <td><a href="{{ $urls['module'] }}&module={{ $row->module }}">{{ $row->module }}</a></td>
                            <td>{!! $row->description !!}</td>
                            <?php /*<td><a href="{{ $urls['id'] }}&id={{ $refId }}">#{{ $refId }} </a></td>*/ ?>
                            <td>
                                @if ($row->data)
                                    <a href="javascript:;" onClick="show('{{ $row->id }}', '{{ $row->action }}', '{{ $row->module }}')">View</a>
                                @elseif ($row->action == 'Delete' || $row->action == 'Restore')
                                    <a href="{{ url(config('form-tool.adminURL').'/activities-log') }}?id={{ $row->refId }}&module={{ $row->module }}">History</a>
                                @else
                                    <i>No data</i>
                                @endif
                            </td>
                            <td>
                                @if ($isLinkToId)    
                                    <a href="{{ url(config('form-tool.adminURL').'/'.$row->route) }}?id={{ $refId.$trashFilter }}" target="_blank"><i class="fa fa-external-link"></i></a>
                                @endif
                            </td>
                            <td>{{ niceDateTime($row->createdAt) }}</td>
                            <td>@if ($row->name) {{ $row->name }} @else {{ $row->createdByName }} @endif</td>
                        </tr>
                    @endforeach

                    @if (! count($actions))
                        <tr>
                            <td colspan="7" class="text-center"><i>No actions found!<br /><br />Do some actions and come back later!</i></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        {!! $actions->onEachSide(2)->withQueryString()->links() !!}
    </div>
</div>

<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" <?php /*data-backdrop="false"*/ ?>>
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="showModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" id="showModalBody">
      </div>
      <div class="modal-footer">
        <div class="hint pull-left text-removed"><div class="data-removed"></div> Old Data</div> 
        <div class="hint pull-left text-added" style="margin-left:10px;"><div class="data-added"></div> New Data</div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
function show(id, action, moduleName)
{
    if (action == 'Update') {
        $('.hint').show();
    } else {
        $('.hint').hide();
    }

    $('#showModalLabel').html(action + ": " + moduleName);
    $('#showModalBody').html('<p class="text-center" style="margin:15px;"><i class="fa fa-spinner fa-pulse"></i> Loading...</p>');
    $.get('{{ route('activities-log') }}/show/'+id, {}, function(data){
        $('#showModal').modal('show');
        $('#showModalBody').html(data);
    });
}
</script>

@endsection