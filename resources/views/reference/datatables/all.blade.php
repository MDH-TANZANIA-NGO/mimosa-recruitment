<table id="all_references" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th class="wd-15p">#</th>
        <th class="wd-15p">NAME</th>
        <th class="wd-20p">POSITION</th>
        <th class="wd-20p">ORGANISATION</th>
        <th class="wd-20p">PHONE</th>
        <th class="wd-15p">EMAIL</th>
        <th class="wd-10p">ACTION</th>
    </tr>
    </thead>
</table>
@push('after-scripts')
    <script>
        $(document).ready(function () {

            $("#all_references").DataTable({
                // processing: true,
                // serverSide: true,
                destroy: true,
                retrieve: true,
                "responsive": true,
                "autoWidth": false,
                ajax: '{{ route('reference.datatable.all') }}',
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex','bSortable': false, 'aTargets': [0], 'bSearchable': false },
                    { data: 'name', name: 'name', searchable: true},
                    { data: 'position', name: 'position', searchable: true},
                    { data: 'organisation_name', name: 'organisation_name', searchable: true},
                    { data: 'phone', name: 'phone', searchable: true},
                    { data: 'email', name: 'email', searchable: true},
                    { data: 'action', name: 'action', searchable: false },
                ]
            });
        })
    </script>
@endpush
