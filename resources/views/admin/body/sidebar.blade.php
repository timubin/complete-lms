
@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
@endphp


{{-- @dd($prefix); --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Web Blood </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          {{-- <a href="{{route('profile.view')}}" class="d-block">{{$user->name}}</a> --}}
          <a href="#" class="d-block">Mohi</a>
        </div>
      </div> -->

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item {{ (request()->is('dashboard*')) ? 'menu-open active' : '' }}">
                <a href="{{url('/dashboard')}}" class="nav-link {{ (request()->is('dashboard*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>

   @if(Auth::check() && Auth::user()->role == 'Admin')
          <li class="nav-item {{ ($prefix == '/users') ? 'menu-open active' : '' }}">
            <a href="" class="nav-link {{ ($prefix == '/users') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Manage User 
                <i class="fas fa-angle-left right"></i>
               {{--  <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item  {{ ($route == 'user.view') ? 'menu-open active' : '' }}">
                <a href="{{route('user.view')}}" class="nav-link {{ ($route == 'user.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View User</p>
                </a>
              </li>
              <li class="nav-item  {{ ($route == 'users.add') ? 'menu-open active' : '' }}">
                <a href="{{route('users.add')}}" class="nav-link {{ ($route == 'users.add') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>

<!--               <li class="nav-item  {{ ($route == 'users.ip') ? 'menu-open active' : '' }}">
                <a href="{{route('users.ip')}}" class="nav-link {{ ($route == 'users.ip') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Ip</p>
                </a>
              </li> -->
            </ul>
          </li>
@endif

<li class="nav-item {{ ($route == 'profile.view' || $route == 'password.view') ? 'menu-open active' : '' }}">
  <a href="#" class="nav-link {{ ($route == 'profile.view' || $route == 'password.view') ? 'active' : '' }}">

              <i class="fas fa-user-circle"></i>
              <p>
                Manage Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ ($route == 'profile.view') ? 'menu-open active' : '' }}">
                <a href="{{route('profile.view')}}" class="nav-link {{ ($route == 'profile.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your Profile</p>
                </a>
              </li>
              <li class="nav-item {{ ($route == 'password.view') ? 'menu-open active' : '' }}">
                <a href="{{route('password.view')}}" class="nav-link {{ ($route == 'password.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
          </li>

          
         {{--  Home page  start --}}
         <li class="nav-item {{ ($prefix == '/homepge') ? 'menu-open active' : '' }}">
          <a href="#" class="nav-link {{ ($prefix == '/homepge') ? 'active' : '' }}">
              <i class="fas fa-cog"></i>
              <p>
               Home page 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ ($route == 'home.add') ? 'menu-open active' : '' }}">
                <a href="{{ route('home.add') }}" class="nav-link {{ ($route == 'home.add') ? 'active' : '' }}">

                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider  Title</p>
                </a>
              </li>
              <li class="nav-item {{ ($route == 'home.feature') ? 'menu-open active' : '' }}">
                <a href="{{ route('home.feature') }}" class="nav-link {{ ($route == 'home.feature' ) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Features</p>
                </a>
              </li>
              <li class="nav-item {{ ($route == 'student.group.view') ? 'menu-open active' : '' }}">
                <a href="{{ route('student.group.view') }}" class="nav-link {{ ($route == 'student.group.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider Button</p>
                </a>
              </li>
            </ul>
          </li>
    {{--  Home Page  end --}}


     {{--  Setup Management start --}}
         <li class="nav-item {{ ($prefix == '/setups') ? 'menu-open active' : '' }}">
          <a href="#" class="nav-link {{ ($prefix == '/setups') ? 'active' : '' }}">
              <i class="fas fa-cog"></i>
              <p>
                Setup Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ ($route == 'student.class.view') ? 'menu-open active' : '' }}">
                <a href="{{ route('student.class.view') }}" class="nav-link {{ ($route == 'student.class.view') ? 'active' : '' }}">

                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Class</p>
                </a>
              </li>
              <li class="nav-item {{ ($route == 'student.year.view') ? 'menu-open active' : '' }}">
                <a href="{{ route('student.year.view') }}" class="nav-link {{ ($route == 'student.year.view' ) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Year</p>
                </a>
              </li>
              <li class="nav-item {{ ($route == 'student.group.view') ? 'menu-open active' : '' }}">
                <a href="{{ route('student.group.view') }}" class="nav-link {{ ($route == 'student.group.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Group</p>
                </a>
              </li>
              <li class="nav-item {{ ($route == 'student.shift.view') ? 'menu-open active' : '' }}">
                <a href="{{ route('student.shift.view') }}" class="nav-link {{ ($route == 'student.shift.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Shift</p>
                </a>
              </li>
              <li class="nav-item {{ ($route == 'fee.category.view') ? 'menu-open active' : '' }}">
                <a href="{{route('fee.category.view')}}" class="nav-link {{ ($route == 'fee.category.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fee Category</p>
                </a>
              </li>
              <li class="nav-item {{ ($route == 'fee.amount.view') ? 'menu-open active' : '' }}">
                <a href="{{route('fee.amount.view')}}" class="nav-link  {{ ($route == 'fee.amount.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fee Category Amount</p>
                </a>
              </li>
              <li class="nav-item {{ ($route == 'exam.type.view') ? 'menu-open active' : '' }}">
                <a href="{{route('exam.type.view')}}" class="nav-link {{ ($route == 'exam.type.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exam Type</p>
                </a>
              </li>
              <li class="nav-item {{ ($route == 'school.subject.view') ? 'menu-open active' : '' }}">
                <a href="{{route('school.subject.view')}}" class="nav-link {{ ($route == 'school.subject.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>School Subject</p>
                </a>
              </li>

              <li class="nav-item {{ ($route == 'assign.subject.view') ? 'menu-open active' : '' }}">
                <a href="{{route('assign.subject.view')}}" class="nav-link {{ ($route == 'assign.subject.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assign Subject</p>
                </a>
              </li>


              <li class="nav-item {{ ($route == 'designation.view') ? 'menu-open active' : '' }}">
                <a href="{{route('designation.view')}}" class="nav-link {{ ($route == 'designation.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Designation</p>
                </a>
              </li>


              <li class="nav-item {{ ($route == 'class.timetable.view') ? 'menu-open active' : '' }}">
                <a href="{{route('class.timetable.view')}}" class="nav-link {{ ($route == 'class.timetable.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Timetable</p>
                </a>
              </li>

            </ul>
          </li>
    {{--  Setup Management end --}}



      {{--    Student Management  start --}}
          <li class="nav-item {{ ($prefix == '/student') ? 'menu-open active' : '' }}">
            <a href="#" class="nav-link {{ ($prefix == '/student') ? 'active' : '' }}">
              <i class="fas fa-graduation-cap"></i>
              <p>
                Student Management 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ ($route == 'student.registration.view') ? 'menu-open active' : '' }}">
                <a href="{{route('student.registration.view')}}" class="nav-link {{ ($route == 'student.registration.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Registration</p>
                </a>
              </li>

              <li class="nav-item {{ ($route == 'roll.generate.view') ? 'menu-open active' : '' }}">
                <a href="{{route('roll.generate.view')}}" class="nav-link {{ ($route == 'roll.generate.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roll Generate</p>
                </a>
              </li>

              <li class="nav-item {{ ($route == 'registration.fee.view') ? 'menu-open active' : '' }}">
                <a href="{{route('registration.fee.view')}}" class="nav-link {{ ($route == 'registration.fee.view') ? 'active' : '' }}" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registration Fee</p>
                </a>
              </li>

              <li class="nav-item {{ ($route == 'monthly.fee.view') ? 'menu-open active' : '' }}">
                <a href="{{route('monthly.fee.view')}}" class="nav-link {{ ($route == 'monthly.fee.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monthly Fee</p>
                </a>
              </li>

              <li class="nav-item {{ ($route == 'exam.fee.view') ? 'menu-open active' : '' }}">
                <a href="{{route('exam.fee.view')}}" class="nav-link {{ ($route == 'exam.fee.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exam Fee</p>
                </a>
              </li>



            </ul>
          </li>
      {{--    Student Management  end --}}

      {{--    Employee Management  start --}}
          <li class="nav-item  {{ ($prefix == '/employess') ? 'menu-open active' : '' }}">
            <a href="#" class="nav-link {{ ($prefix == '/employess') ? 'active' : '' }}">
              <i class="fas fa-users-cog"></i>
              <p>
                Employee Management 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ ($route == 'employee.registration.view') ? 'employee.registration.view' : '' }}">
                <a href="{{route('employee.registration.view')}}" class="nav-link {{ ($route == 'employee.registration.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Registration</p>
                </a>
              </li>

              <li class="nav-item {{ ($route == 'employee.salary.view') ? 'employee.salary.view' : '' }}">
                <a href="{{route('employee.salary.view')}}" class="nav-link {{ ($route == 'employee.salary.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Salary</p>
                </a>
              </li>

              <li class="nav-item {{ ($route == 'employee.leave.view') ? 'employee.leave.view' : '' }}">
                <a href="{{route('employee.leave.view')}}" class="nav-link {{ ($route == 'employee.leave.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Leave</p>
                </a>
              </li>
              <li class="nav-item {{ ($route == 'employee.attendance.view') ? 'employee.attendance.view' : '' }}">
                <a href="{{route('employee.attendance.view')}}" class="nav-link {{ ($route == 'employee.attendance.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Attendance</p>
                </a>
              </li>
              <li class="nav-item {{ ($route == 'employee.monthly.salary') ? 'employee.monthly.salary' : '' }}">
                <a href="{{route('employee.monthly.salary')}}" class="nav-link {{ ($route == 'employee.monthly.salary') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Monthly Salary</p>
                </a>
              </li>
             </ul>
          </li>
           {{--    Employee Management  End --}}


       {{--    Mark Management  start --}}
          <li class="nav-item {{ ($prefix == '/marks') ? 'menu-open active' : '' }}">
            <a href="#" class="nav-link {{ ($prefix == '/marks') ? 'active' : '' }}">
              <i class="fas fa-pencil-alt"></i>
              <p>
                Marks Management 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ ($route == 'marks.entry.add') ? 'marks.entry.add' : '' }}">
                <a href="{{route('marks.entry.add')}}" class="nav-link {{ ($route == 'marks.entry.add') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marks Entry</p>
                </a>
              </li>
              <li class="nav-item {{ ($route == 'marks.entry.edit') ? 'marks.entry.edit' : '' }}">
                <a href="{{route('marks.entry.edit')}}" class="nav-link {{ ($route == 'marks.entry.edit') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marks Edit</p>
                </a>
              </li>

              <li class="nav-item {{ ($route == 'marks.entry.grate') ? 'marks.entry.grate' : '' }}">
                <a href="{{route('marks.entry.grate')}}" class="nav-link {{ ($route == 'marks.entry.grate') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marks Grate</p>
                </a>
              </li>

             </ul>
          </li>
   {{--    Mark Management  end --}}


          {{--    Accounts  Management  start --}}
          <li class="nav-item {{ ($prefix == '/accounts') ? 'menu-open active' : '' }}">
            <a href="#" class="nav-link {{ ($prefix == '/accounts') ? 'active' : '' }}">
              <i class="fas fa-money-bill"></i>
              <p>
                Accounts Management 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ ($route == 'student.fee.view') ? 'student.fee.view' : '' }}">
                <a href="{{route('student.fee.view')}}" class="nav-link  {{ ($route == 'student.fee.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Fee</p>
                </a>
              </li>
              <li class="nav-item  {{ ($route == 'account.salary.view') ? 'account.salary.view' : '' }}">
                <a href="{{route('account.salary.view')}}" class="nav-link  {{ ($route == 'account.salary.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Salary</p>
                </a>
              </li>

              <li class="nav-item {{ ($route == 'other.cost.view') ? 'other.cost.view' : '' }}">
                <a href="{{route('other.cost.view')}}" class="nav-link {{ ($route == 'other.cost.view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Other Cost</p>
                </a>
              </li>


             </ul>
          </li>
   {{--    Accounts Management  end --}}


   {{--    Report Management  Start --}}
  
   <li class="nav-header">Report Interface</li>

   <li class="nav-item {{ ($prefix == '/reports') ? 'menu-open active' : '' }}">
    <a href="#" class="nav-link {{ ($prefix == '/reports') ? 'active' : '' }}">
      <i class="fas fa-file-alt"></i>
      <p>
        Reports Management 
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item  {{ ($route == 'monthly.profit.view') ? 'monthly.profit.view' : '' }}">
        <a href="{{route('monthly.profit.view')}}" class="nav-link {{ ($route == 'monthly.profit.view') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Monthly-Yearly Profite</p>
        </a>
      </li>
      <li class="nav-item {{ ($route == 'marksheet.generate.view') ? 'marksheet.generate.view' : '' }}">
        <a href="{{route('marksheet.generate.view')}}" class="nav-link {{ ($route == 'marksheet.generate.view') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Marksheet Generate</p>
        </a>
      </li>

      <li class="nav-item {{ ($route == 'attendance.report.view') ? 'attendance.report.view' : '' }}">
        <a href="{{route('attendance.report.view')}}" class="nav-link {{ ($route == 'attendance.report.view') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Attendance Report</p>
        </a>
      </li>

      <li class="nav-item {{ ($route == 'student.result.view') ? 'student.result.view' : '' }}">
        <a href="{{route('student.result.view')}}" class="nav-link {{ ($route == 'student.result.view') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Student Result </p>
        </a>
      </li>

      <li class="nav-item {{ ($route == 'student.idcard.view') ? 'student.idcard.view' : '' }}">
        <a href="{{route('student.idcard.view')}}" class="nav-link {{ ($route == 'student.idcard.view') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Student ID Card </p>
        </a>
      </li>


     </ul>
  </li>

  {{--    Report Management  End --}}

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

