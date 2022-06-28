<aside class="app-sidebar comb-sidebar">

    <ul class="side-menu">

        <li>
            <a class="side-menu__item" href="{{ url('/home') }}"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Home</span></a>
        </li>

        <li>
            <a class="side-menu__item" href="{{ route('applicant.index') }}"><i class="side-menu__icon fa fa-briefcase"></i><span class="side-menu__label">Personal Information</span></a>
        </li>

        <li>
            <a class="side-menu__item" href="{{ route('address.index') }}"><i class="side-menu__icon fa fa-address-card"></i><span class="side-menu__label">Contact Details</span></a>
        </li>

        <li>
            <a class="side-menu__item" href="{{ route('otherInfo.index') }}"><i class="side-menu__icon fa fa-file"></i><span class="side-menu__label">Other Information</span></a>
        </li>

        <li>
            <a class="side-menu__item" href="{{ url('/skills') }}"><i class="side-menu__icon fa fa-globe"></i><span class="side-menu__label">Skills</span></a>
        </li>

        <li>
            <a class="side-menu__item" href="{{ route('education.index') }}"><i class="side-menu__icon fa fa-graduation-cap"></i><span class="side-menu__label">Qualifications</span></a>
        </li>

        <li>
            <a class="side-menu__item" href="{{ route('experience.index') }}"><i class="side-menu__icon fa fa-user-secret"></i><span class="side-menu__label">Experience</span></a>
        </li>

        <li>
            <a class="side-menu__item" href="{{ route('reference.index') }}"><i class="side-menu__icon fa fa-user-secret"></i><span class="side-menu__label">Reference</span></a>
        </li>

        <li>
            <a class="side-menu__item" href="{{ route('vacancy.index') }}"><i class="side-menu__icon fa fa-search"></i><span class="side-menu__label">Search Vacancies</span></a>
        </li>

        <li>
            <a class="side-menu__item" href="{{ route('application.index') }}"><i class="side-menu__icon fa fa-search"></i><span class="side-menu__label">My Applications</span></a>
        </li>

        <li>
            <a class="side-menu__item" href="{{ url('vacancies') }}"><i class="side-menu__icon fa fa-search"></i><span class="side-menu__label">Preview Profile</span></a>
        </li>
    </ul>
</aside>
