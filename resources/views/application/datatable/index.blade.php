<table id="all_applications" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th class="wd-15p">#</th>
        <th class="wd-15p">TITLE</th>
        <th class="wd-15p">APPLIED</th>
        <th class="wd-20p">STATUS</th>
    </tr>
    </thead>
</table>
@push('after-scripts')
    <script>
        $(document).ready(function () {

            $("#all_applications").DataTable({
                // processing: true,
                // serverSide: true,
                destroy: true,
                retrieve: true,
                "responsive": true,
                "autoWidth": false,
                ajax: '{{ route('application.datatable.all') }}',
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex','bSortable': false, 'aTargets': [0], 'bSearchable': false },
                    { data: 'adv_uuid', name: 'adv_uuid', searchable: true},
                    { data: 'created_at', name: 'created_at', searchable: true},
                    { data: 'status', name: 'status', searchable: true},
                ]
            });
        })
    </script>
@endpush
