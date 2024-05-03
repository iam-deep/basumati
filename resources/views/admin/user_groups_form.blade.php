@extends('form-tool::layouts.layout')

@section('content')

{!! $page->style !!}

<div class="row">
    <div class="col-md-8 col-sm-offset-2">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">{{ $title ?? '' }}</h3>
            </div>

            <form action="{{ $page->form->action }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <div class="box-body">
                    @csrf

                    @if ($page->form->isEdit)
                        <input type="hidden" name="_method" value="PUT">
                    @else
                        <!-- this is only needed when you use run() -->
                        <!-- name="method" is different from the above edit -->
                        <input type="hidden" name="method" value="CREATE">
                    @endif

                    <div id="beforeForm"></div>

                    @foreach ($page->form->fields as $field)
                        {!! $field !!}
                    @endforeach

                    <label>Permissions</label>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Modules</th>
                                <th><label><input type="checkbox" id="select-all" class="select" data-selector=".all, .view, .create, .edit, .delete, .destroy, .select" />&nbsp; All</label></th>
                                <th><label><input type="checkbox" id="select-view" class="select" data-selector=".view" />&nbsp; View</label></th>
                                <th><label><input type="checkbox" id="select-create" class="select" data-selector=".create" />&nbsp; Create</label></th>
                                <th><label><input type="checkbox" id="select-edit" class="select" data-selector=".edit" />&nbsp; Edit</label></th>
                                <th><label><input type="checkbox" id="select-delete" class="select" data-selector=".delete" />&nbsp; Delete</label></th>

                                @if (config('form-tool.isSoftDelete'))
                                    <th><label><input type="checkbox" id="select-destroy" class="select" data-selector=".destroy" />&nbsp; Delete <br /> Permanently</label></th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($modules as $module)
                                <tr>
                                    <td>{{ $module['title'] }}</td>
                                    <td>
                                        @if (isset($disabled[$module['route']]) && in_array('all', $disabled[$module['route']]))
                                            <input type="checkbox" checked disabled />
                                        @else
                                            <input type="checkbox" class="all" />
                                        @endif
                                    </td>

                                    <td>
                                        @if (! isset($hide[$module['route']]) || ! in_array('view', $hide[$module['route']]))
                                            @if (isset($disabled[$module['route']]) && in_array('view', $disabled[$module['route']]))
                                                <input type="checkbox" checked disabled />
                                                <input type="hidden" name="permission[{{ $module['route'] }}][view]" value="1" >
                                            @else
                                                <input type="checkbox" class="view" name="permission[{{ $module['route'] }}][view]" value="1" @if (isset($permission->{$module['route']}->view)) checked @endif />
                                            @endif
                                        @endif
                                    </td>
                                    
                                    <td>
                                        @if (! isset($hide[$module['route']]) || ! in_array('create', $hide[$module['route']]))
                                            @if (isset($disabled[$module['route']]) && in_array('create', $disabled[$module['route']]))
                                                <input type="checkbox" checked disabled />
                                                <input type="hidden" name="permission[{{ $module['route'] }}][create]" value="1" >
                                            @else
                                            <input type="checkbox" class="create" name="permission[{{ $module['route'] }}][create]" value="1" @if (isset($permission->{$module['route']}->create)) checked @endif />
                                            @endif
                                        @endif
                                    </td>

                                    <td>
                                        @if (! isset($hide[$module['route']]) || ! in_array('edit', $hide[$module['route']]))
                                            @if (isset($disabled[$module['route']]) && in_array('edit', $disabled[$module['route']]))
                                                <input type="checkbox" checked disabled />
                                                <input type="hidden" name="permission[{{ $module['route'] }}][edit]" value="1" >
                                            @else
                                            <input type="checkbox" class="edit" name="permission[{{ $module['route'] }}][edit]" value="1" @if (isset($permission->{$module['route']}->edit)) checked @endif />
                                            @endif
                                        @endif
                                    </td>

                                    <td>
                                        @if (! isset($hide[$module['route']]) || ! in_array('delete', $hide[$module['route']]))
                                            @if (isset($disabled[$module['route']]) && in_array('delete', $disabled[$module['route']]))
                                                <input type="checkbox" checked disabled />
                                                <input type="hidden" name="permission[{{ $module['route'] }}][delete]" value="1" >
                                            @else
                                            <input type="checkbox" class="delete" name="permission[{{ $module['route'] }}][delete]" value="1" @if (isset($permission->{$module['route']}->delete)) checked @endif />
                                            @endif
                                        @endif
                                    </td>

                                    <td>
                                        @if (config('form-tool.isSoftDelete'))
                                            @if (! isset($hide[$module['route']]) || ! in_array('destroy', $hide[$module['route']]))
                                                @if (isset($disabled[$module['route']]) && in_array('destroy', $disabled[$module['route']]))
                                                    <input type="checkbox" checked disabled />
                                                    <input type="hidden" name="permission[{{ $module['route'] }}][destroy]" value="1" >
                                                @else
                                                <input type="checkbox" class="destroy" name="permission[{{ $module['route'] }}][destroy]" value="1" @if (isset($permission->{$module['route']}->destroy)) checked @endif />
                                                @endif
                                            @endif
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div id="afterForm"></div>
                </div>
                <div class="box-footer footer-sticky">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-success btn-flat submit">Submit</button>
                            &nbsp; <a href="{{ $page->form->cancel }}" class="btn btn-default btn-flat">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
let styleClasses = ['view', 'create', 'edit', 'delete', 'destroy'];

// Check checkboxes and select all checkbox if all are checked=true
function selectAll()
{
    // Check all rows horizontally
    $('.table tbody tr').each(function(){
        let isModuleAll = true;
        $(this).find('[type=checkbox]').each(function() {
            if ($(this).attr('class') == 'all') return true;

            if (! $(this).prop('checked')) {
                isModuleAll = false;
                return false;
            }
        });
        $(this).find('.all').prop('checked', isModuleAll);
    });
    
    // Check vertically
    $(styleClasses).each(function(index, value) {
        let isAll = true;
        let styleClass = value;
        $('.' + styleClass).each(function(){
            if (! $(this).prop('checked')) {
                isAll = false;
                return false;
            }
        });
        $('#select-' + styleClass).prop('checked', isAll);
    });

    // Check header all 
    let isAllChecked = true;
    $('.select').each(function() {
        if ($(this).attr('id') == 'select-all') return true;

        if (! $(this).prop('checked')) {
            isAllChecked = false;
            return false;
        }
    });
    $('#select-all').prop('checked', isAllChecked);
}

selectAll();

// Select all checkboxes as per all
$('.all').on('click', function() {
    $(this).parent().parent().find('[type=checkbox]').prop('checked', $(this).prop('checked'));
});

$('.select').on('click', function() {
    const selector = $(this).attr('data-selector');
    $(selector).prop('checked', $(this).prop('checked'));
});

$('.all, .view, .create, .edit, .delete, .destroy, .select').on('change', function(){
    selectAll();
});
</script>

{!! $page->script !!}

@endsection