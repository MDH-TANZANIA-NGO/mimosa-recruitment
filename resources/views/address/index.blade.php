@extends('layouts.app')
@section('content')
    @include('address.form.create')

    @include('address.datatable.index')
    <a href="{{route('other.index')}}" class="btn btn-azure">Next</a>
@endsection

@push('after-scripts')
    <script>
        $(document).ready(function (){
            $(function () {
                $("#all_addresses").DataTable({
                    processing: true,
                    destroy:true,
                    retrieve: true,
                    "responsive": true,
                    "autoWidth": false,
                    ajax: '{{ route('address.datatable.all') }}',
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'address_type', name: 'address_type', searchable: true},
                        {data: 'region', name: 'region', searchable: true},
                        {data: 'district', name: 'district', searchable: true},
                        {data: 'area_name', name: 'area_name', searchable: true},
                        {data: 'house_number', name: 'house_number', searchable: true},
                        {data: 'action', name: 'action', orderable: true, searchable: true},
                    ]
                });

            });
        })
    </script>
@endpush
