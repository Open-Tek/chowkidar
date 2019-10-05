<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler"></div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <form class="sidebar-search " action="#" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>

            <!-- *********************************************************************-->
            <!--                        SIDEBAR PILLS                                 -->
            <!-- *********************************************************************-->

            <!-- DASHBOARD PILL -->
            <li class="nav-item start {{Request::is('dashboard') ? 'open active' : ''}}">
                <a href="/dashboard" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            <!-- END OF DASHBOARD PILL -->

            <!-- STUDENTS PILLS -->
            <li class="nav-item  {{ Request::is('student*') ? 'open active' : '' }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="material-icons">face</i>
                    <span class="title">Students</span>
                    <span class="arrow {{ Request::is('student*') ? 'open' : '' }}"></span>
                </a>
                <ul class="sub-menu">
                    <!-- ADD ADMIN PILL-->
                    <li class="nav-item {{ Request::is('student/create') ? 'open' : '' }}">
                        <a href="/student/create" class="nav-link ">
                            <span class="title">Add Student</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('student') ? 'open' : '' }}">
                        <a href="/student" class="nav-link ">
                            <span class="title">Manage Students</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- END OF STUDENTS PILLS -->

            <!-- TEACHERS PILLS -->
            <li class="nav-item  {{ Request::is('teacher*') ? 'open active' : '' }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="material-icons ft-">person</i>
                    <span class="title">Teachers</span>
                    <span class="arrow {{ Request::is('teacher*') ? 'open' : '' }}"></span>
                </a>
                <ul class="sub-menu">
                    <!-- ADD ADMIN PILL-->
                    <li class="nav-item {{ Request::is('teacher/create') ? 'open' : '' }}">
                        <a href="{{ route('teacher.create') }}" class="nav-link ">
                            <span class="title">Add Teacher</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('teacher') ? 'open' : '' }}">
                        <a href="{{ route('teacher.index') }}" class="nav-link ">
                            <span class="title">Manage Teachers</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- END OF TEACHERS PILLS -->

            <!-- SUBJECT PILLS -->
            <li class="nav-item  {{ Request::is('subject*') ? 'open active' : '' }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="material-icons md-24">subject</i>
                    <span class="title">Subjects</span>
                    <span class="arrow {{ Request::is('subject*') ? 'open' : '' }}"></span>
                </a>
                <ul class="sub-menu">
                    <!-- ADD ADMIN PILL-->
                    <li class="nav-item {{ Request::is('subject/create') ? 'open' : '' }}">
                        <a href="{{ route('subject.create') }}" class="nav-link ">
                            <span class="title">Add Subject</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('subject') ? 'open' : '' }}">
                        <a href="{{ route('subject.index') }}" class="nav-link ">
                            <span class="title">Manage Subjects</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- END OF SUBJECTS PILLS -->

            <!-- CHAPTER PILLS -->
            <li class="nav-item  {{ Request::is('chapter*') ? 'open active' : '' }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="material-icons md-24">subject</i>
                    <span class="title">Chapters</span>
                    <span class="arrow {{ Request::is('subject*') ? 'open' : '' }}"></span>
                </a>
                <ul class="sub-menu">
                    <!-- ADD ADMIN PILL-->
                    <li class="nav-item {{ Request::is('chapter/create') ? 'open' : '' }}">
                        <a href="{{ route('chapter.create') }}" class="nav-link ">
                            <span class="title">Add Chapter</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('chapter') ? 'open' : '' }}">
                        <a href="{{ route('chapter.index') }}" class="nav-link ">
                            <span class="title">Manage Chapters</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- END OF SUBJECTS PILLS -->

            <!-- QUESTION PILLS -->
            <li class="nav-item  {{ Request::is('chapter*') ? 'open active' : '' }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="material-icons md-24">subject</i>
                    <span class="title">Questions</span>
                    <span class="arrow {{ Request::is('question*') ? 'open' : '' }}"></span>
                </a>
                <ul class="sub-menu">
                    <!-- ADD ADMIN PILL-->
                    <li class="nav-item {{ Request::is('question/create') ? 'open' : '' }}">
                        <a href="{{ route('question.create') }}" class="nav-link ">
                            <span class="title">Add Question</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('question') ? 'open' : '' }}">
                        <a href="{{ route('question.index') }}" class="nav-link ">
                            <span class="title">Manage Questions</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- END OF QUESTIONS PILLS -->

            <!-- BATCH PILLS -->
            <li class="nav-item  {{ Request::is('batch*') ? 'open active' : '' }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="material-icons md-24">subject</i>
                    <span class="title">Batches</span>
                    <span class="arrow {{ Request::is('batch*') ? 'open' : '' }}"></span>
                </a>
                <ul class="sub-menu">
                    <!-- ADD ADMIN PILL-->
                    <li class="nav-item {{ Request::is('batch/create') ? 'open' : '' }}">
                        <a href="{{ route('batch.create') }}" class="nav-link ">
                            <span class="title">Add Batch</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('batch') ? 'open' : '' }}">
                        <a href="{{ route('batch.index') }}" class="nav-link ">
                            <span class="title">Manage Batches</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- END OF BATCH PILLS -->


    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
