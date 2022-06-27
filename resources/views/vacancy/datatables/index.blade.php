<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header" style="background-color: rgb(238, 241, 248)">
            <div class="row text-center">
                <span class="col-12 text-center font-weight-bold">Vacancies</span>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="access_processing" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th class="wd-15p">#</th>
                        <th class="wd-15p">TITLE</th>
                        <th class="wd-15p">DESCRIPTION</th>
                        <th class="wd-25p">CREATED AT</th>
                        <th class="wd-25p">ACTION</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@push('after-scripts')
    <script>
        $(document).ready(function () {

            $("#access_processing").DataTable({
                //processing: true,
                //serverSide: true,
                destroy: false,
                retrieve: true,
                "responsive": true,
                "autoWidth": false,
                ajax: '{{ route('vacancy.datatable.all')}}',
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex','bSortable': false, 'aTargets': [0], 'bSearchable': false },
                    { data: 'title', name: 'title', searchable: true},
                    { data: 'description', name: 'description', searchable: true},
                    { data: 'created_at', name: 'created_at', searchable: true },
                    { data: 'action', name: 'action', searchable: false },
                ]
            });


        })
    </script>
@endpush
