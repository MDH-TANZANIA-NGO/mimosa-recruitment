@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">APPLICANT DETAILS</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td> <strong>PERSONAL INFORMATION </strong></td>
                            <td>
                                <span style="margin-right: 10px"><b>NAME:</b> {{ $personal_info->first_name." ".$personal_info->middle_name." ".$personal_info->last_name}}</span>
                                <span style="margin-right: 10px"><b>GENDER:</b> {{ $personal_info->gender->name }}</span>
                                <span style="margin-right: 10px"><b>DOB:</b> {{ $personal_info->dob }}</span>
                                <span style="margin-right: 10px"><b>EMAIL:</b> {{ $applicant->email }}</span>
                                <span style="margin-right: 10px"><b>MOBILE NUMBER:</b> {{ $personal_info->phone }}</span>
                                <span style="margin-right: 10px"><b>NATIONAL ID NO:</b> {{ $personal_info->national_id }}</span>
                                <span style="margin-right: 10px"><b>COUNTRY:</b> {{ $personal_info->country->name }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>ACADEMIC HISTORY: </strong></td>
                            <td>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr style="font-weight: bolder;">
                                        <th>#</th>
                                        <th>INSTITUTE/SCHOOL/UNIVERSITY</th>
                                        <th>LEVEL</th>
                                        <th>AWARD RECEIVED</th>
                                        <th>START YEAR</th>
                                        <th>END YEAR</th>
                                        <th>CERTIFICATE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($educations AS $key => $education)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $education->institution_name }}</td>
                                            <td>{{ $education->getLevel() }}</td>
                                            <td style="width: 10%;">{{ $education->award_received }}</td>
                                            <td style="width: 10%;">{{ $education->start_year }}</td>
                                            <td>{{ $education->end_year }}</td>
                                            <td><a href="{{ $education->getFirstMediaUrl('certificates')}}">View</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>ADDRESS: </strong></td>
                            <td>
                                <table style="width:100%" class="table table-striped table-bordered">
                                    <thead>
                                    <tr style="font-weight: bolder;">
                                        <th>#</th>
                                        <th>TYPE</th>
                                        <th>AREA NAME</th>
                                        <th>HOUSE NUMBER</th>
                                        <th>DISTRICT</th>
                                        <th>REGION</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($addresses AS $key => $address)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $address->getType() }}</td>
                                            <td>{{ $address->area_name }}</td>
                                            <td>{{ $address->house_number }}</td>
                                            <td>{{ $address->district->name }}</td>
                                            <td>{{ $address->region->name }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>EXPERIENCES: </strong></td>
                            <td>
                                <table style="width:100%" class="table table-striped table-bordered">
                                    <thead>
                                    <tr style="font-weight: bolder;">
                                        <th>#</th>
                                        <th>ORGANISATION NAME</th>
                                        <th>POSITION</th>
                                        <th>RESPONSIBILITIES</th>
                                        <th>REASON FOR LEAVING</th>
                                        <th>SUPERVISOR INFO</th>
                                        <th>START YEAR</th>
                                        <th>END YEAR</th>
                                        <th>STATUS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($experiences AS $key => $experience)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $experience->organisation_name }}</td>
                                            <td>{{ $experience->position }}</td>
                                            <td>{{ $experience->responsibilities }}</td>
                                            <td>{{ $experience->reason_for_leaving }}</td>
                                            <td>NAME : {{ $experience->supervisor_name }}, EMAIL: {{ $experience->supervisor_email }}, MOBILE: {{ $experience->supervisor_phone }}</td>
                                            <td>{{ $experience->start_year }}</td>
                                            <td>{{ $experience->end_year }}</td>
                                            <td>{{ $experience->is_current ? 'Still working' : '' }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>SKILLS: </strong></td>
                            <td>
                                <table style="width:100%" class="table table-striped table-bordered">
                                    <thead>
                                    <tr style="font-weight: bolder;">
                                        <th>#</th>
                                        <th>CATEGORY</th>
                                        <th>SKILL</th>
                                        <th>LEVEL</th>
                                        <th>REMARKS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($skills AS $key => $skill)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $skill->getCategory() }}</td>
                                            <td>{{ $skill->skill->name }}</td>
                                            <td>{{ $skill->getLevel() }}</td>
                                            <td>{{ $skill->remarks }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>REFEREES: </strong></td>
                            <td>
                                <table style="width:100%" class="table table-striped table-bordered">
                                    <thead>
                                    <tr style="font-weight: bolder;">
                                        <th>#</th>
                                        <th>NAME</th>
                                        <th>GENDER</th>
                                        <th>ORGANISATION</th>
                                        <th>POSITION</th>
                                        <th>EMAIL</th>
                                        <th>ADDRESS</th>
                                        <th>TYPE</th>
                                        <th>REGION</th>
                                        <th>COUNTRY</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($referees AS $key => $referee)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $referee->name }}</td>
                                            <td>{{ $referee->gender->name }}</td>
                                            <td>{{ $referee->organisation_name }}</td>
                                            <td>{{ $referee->position }}</td>
                                            <td>{{ $referee->email }}</td>
                                            <td>{{ $referee->address }}</td>
                                            <td>{{ $referee->getType() }}</td>
                                            <td>{{ $referee->region->name }}</td>
                                            <td>{{ $referee->country->name }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('after-scripts')
    <script>
        $(document).ready(function() {
            $("#applicants").DataTable();
        })
    </script>
@endpush
