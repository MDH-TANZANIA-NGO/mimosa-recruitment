@extends('layouts.app')
@section('content')
    @include('skills.form.edit')
@endsection

@push('after-scripts')
    <script>
        $(document).ready(function (){
            let $category_select = $("select[name='skill_category_id']");
            let $skill_select = $("#skills");
            let $skills = [];

            $category_select.change(function (event){
                event.preventDefault();
                fetch_skills($(this).val());
            });

            function fetch_skills(skill_category_id){
                let $url = base_url+'/skills/'+skill_category_id+'/skill';
                $.get($url, { skill_category_id: skill_category_id},
                    function(data, status){
                        if(data){
                            $skill_select.find('option').remove();
                            $.each(data, function(key, result) {
                                console.log(result)
                                $skills.push(result.id);
                                let $option = "<option value='"+result.id+"'>"+result.name+"</option>";
                                $skill_select.append($option);
                            });
                            $skill_select.prop('disabled',false);
                            $skill_select.attr('required',true);
                        }else{
                            $skill_select.find('option').remove();
                            $skill_select.attr('disabled',true);
                            $skill_select.attr('required',false);
                        }
                    });
            }

        });

    </script>
@endpush
