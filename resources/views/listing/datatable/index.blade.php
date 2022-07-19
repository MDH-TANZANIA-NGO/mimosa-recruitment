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
                        <th class="wd-15p">CONTRACT TYPE</th>
                        <th class="wd-25p">EMPLOYEES REQUIRED</th>
                        <th class="wd-25p">EDUCATION LEVEL</th>
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
                ajax: '{{ route('listing.datatable.all')}}',
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex','bSortable': false, 'aTargets': [0], 'bSearchable': false },
                    { data: 'job_title', name: 'job_title', searchable: true},
                    { data: 'contract_type', name: 'contract_type', searchable: true},
                    { data: 'empoyees_required', name: 'empoyees_required', searchable: true },
                    { data: 'education_level', name: 'education_level', searchable: false },
                    { data: 'action', name: 'action', searchable: false },
                ]
            });


        })
    </script>
@endpush
