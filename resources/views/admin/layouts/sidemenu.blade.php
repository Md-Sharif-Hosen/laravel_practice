<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" key="t-menu">Menu</li>
        <li>
            <a href="{{ route('dashboard.home') }}" class="waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-chat">Dashboard</span>
            </a>
        </li>
        @if (auth()->user()->role_id === 3)
            <li>
                <a href="{{ route('dashboard.attend_exam') }}" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-chat">Attend to exam</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->role_id === 1 || auth()->user()->role_id === 2)
            <li>
                <a href="{{ route('dashboard.contact.index') }}" class="waves-effect">
                    <i class="bx bx-message"></i>
                    <span key="t-chat">Contacts</span>
                </a>
            </li>
            <li class="mm-active">
                <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="true">
                    <i class="bx bx-store"></i>
                    <span key="t-ecommerce">Common Pages</span>
                </a>
                <ul class="sub-menu mm-collapse mm-show" aria-expanded="false" style="">
                    <li><a href="{{ route('dashboard.common.all') }}" key="t-products">All</a></li>
                    <li><a href="{{ route('dashboard.common.show') }}" key="t-products">Show</a></li>
                    <li><a href="{{ route('dashboard.common.create') }}" key="t-products">Create</a></li>

                </ul>
            </li>

            <li class="mm-active">
                <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="true">
                    <i class="bx bx-user-voice"></i>
                    <span key="t-ecommerce">Users Pages</span>
                </a>
                <ul class="sub-menu mm-collapse mm-show" aria-expanded="false" style="">
                    <li><a href="{{ route('dashboard.user.all') }}" key="t-products">All</a></li>
                    <li><a href="{{ route('dashboard.user.show') }}" key="t-products">Show</a></li>
                    <li><a href="{{ route('dashboard.user.create') }}" key="t-products">Create</a></li>

                </ul>
            </li>

            <li class="mm-active">
                <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="true">
                    <i class="bx bx-user-voice"></i>
                    <span key="t-ecommerce">Crud Pages</span>
                </a>
                <ul class="sub-menu mm-collapse mm-show" aria-expanded="false" style="">
                    <li><a href="{{ route('dashboard.crud.create') }}" key="t-products">Create</a></li>
                    <li><a href="{{ route('dashboard.crud.index') }}" key="t-products">index</a></li>
                    {{-- <li><a href="{{ route('dashboard.crud.edit',$item->id) }}" key="t-products">edit</a></li> --}}
                    {{-- <li><a href="{{ route('dashboard.crud.create') }}" key="t-products">Create</a></li> --}}

                </ul>
            </li>
            <li class="mm-active">
                <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="true">
                    <i class="bx bx-user-voice"></i>
                    <span key="t-ecommerce">CrudBook Information</span>
                </a>
                <ul class="sub-menu mm-collapse mm-show" aria-expanded="false" style="">
                    <li><a href="{{ route('dashboard.crud_book.create') }}" key="t-products">Create</a></li>
                    <li><a href="{{ route('dashboard.crud_book.index') }}" key="t-products">Index</a></li>


                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><i class="bx bx-comment-dots"></i>
                    Fruites crud</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="{{ route('dashboard.fruite.create') }}" key="t-level-2-1">create</a></li>
                    <li><a href="{{ route('dashboard.fruite.index') }}" key="t-level-2-1">index</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><i class="bx bx-comment-dots"></i>
                    Shop
                    crud</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="{{ route('dashboard.shop.create') }}" key="t-level-2-1">create</a></li>
                    <li><a href="{{ route('dashboard.shop.index') }}" key="t-level-2-1">index</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><i class="bx bx-comment-dots"></i>
                    Student crud</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="{{ route('dashboard.student.create') }}" key="t-level-2-1">create</a></li>
                    <li><a href="{{ route('dashboard.student.index') }}" key="t-level-2-1">index</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><i
                        class="bx bx-comment-dots"></i>
                    Exam crud</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="{{ route('dashboard.Exam.create') }}" key="t-level-2-1">create</a></li>
                    <li><a href="{{ route('dashboard.Exam.index') }}" key="t-level-2-1">index</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><i
                        class="bx bx-comment-dots"></i>
                    ExamList</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="{{ route('dashboard.examlist.create') }}" key="t-level-2-1">create</a></li>
                    <li><a href="{{ route('dashboard.examlist.index') }}" key="t-level-2-1">index</a></li>

                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><i
                        class="bx bx-comment-dots"></i>
                    ExamAbsent</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="{{ route('dashboard.examabsent.create') }}" key="t-level-2-1">create</a></li>
                    {{-- <li><a href="{{ route('dashboard.examlist.index') }}" key="t-level-2-1">index</a></li> --}}

                </ul>
            </li>
        @endif
        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">logout</a>
        </li>
    </ul>
</div>
