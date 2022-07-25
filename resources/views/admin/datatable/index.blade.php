<div class="card">
    <form id="application-form" action="" method="POST">
        @csrf
        <div class="card-header">
            <h3 class="card-title">List of Current Jobs</h3>
        </div>
        <div class="card-body">
            <table id="applications" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th class="wd-15p">#</th>
                    <th class="wd-15p">TITLE</th>
                    <th class="wd-15p">CONTRACT TYPE</th>
                    <th class="wd-15p">VACANCIES</th>
                    <th class="wd-15p">EDUCATION LEVEL</th>
                    <th class="wd-25p">APPLICANTS COUNT</th>
                    <th class="wd-25p">ACTION</th>
                </tr>
                </thead>
            </table>
        </div>
    {!! Form::close() !!}
</div>
