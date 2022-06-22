<table id="all_skills" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th class="wd-15p">#</th>
        <th class="wd-15p">SKILL CATEGORY</th>
        <th class="wd-20p">SKILL</th>
        <th class="wd-20p">SKILL LEVEL</th>
        <th class="wd-20p">REMARKS</th>
        <th class="wd-10p">ACTION</th>
    </tr>
    </thead>
</table>
@push('after-scripts')
    <script>
        $(document).ready(function () {

            $("#all_skills").DataTable({
                // processing: true,
                // serverSide: true,
                destroy: true,
                retrieve: true,
                "responsive": true,
                "autoWidth": false,
                ajax: '{{ route('skills.datatable.all') }}',
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex','bSortable': false, 'aTargets': [0], 'bSearchable': false },
                    { data: 'category', name: 'category', searchable: true},
                    { data: 'skill', name: 'skill', searchable: true},
                    { data: 'skill_level', name: 'skill_level', searchable: true},
                    { data: 'remarks', name: 'remarks', searchable: true},
                    { data: 'action', name: 'action', searchable: false },
                ]
            });
        })
    </script>
@endpush
