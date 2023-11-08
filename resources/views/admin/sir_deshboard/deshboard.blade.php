@extends('admin.admin_master')

@section('admin')

<style>
  a {
    text-decoration: none;
  }

  .box-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .box {
    height: 200px;
    width: 200px;
    border-radius: 20px;
    margin: 30px;
    padding: 10px 0;
    display: flex;
    flex-direction: column;
   /*  box-shadow: 5px 5px 5px rgba(0,0,0,0.3); */
    box-shadow: rgb(50 50 93 / 25%) 0px 50px 100px -20px, rgb(0 0 0 / 30%) 0px 30px 60px -30px, rgb(10 37 64 / 35%) 0px -2px 6px 0px inset;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  /* Add a shadow to the element on hover */
  .box:hover {
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    transform: translateY(-5px);
    transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
  }

  .box h3 {
    color: white;
    font-size: 22px;
    text-align: center;
  }

  .box i {
    font-size: 48px;
  }

  @media (max-width: 768px) {
    .box {
      height: 150px;
      width: 150px;
    }

    .box i {
      font-size: 36px;
    }
  }

  @media (max-width: 576px) {
    .box {
      height: 100px;
      width: 100px;
    }

    .box i {
      font-size: 24px;
    }
  }
</style>


<section class="content-wrapper">
    <div class="box-container">
        <a href="{{route('user.view')}}">
          
          <div class="box">
            <span><i class="fas fa-user"></i></span>
               <h3>View User</h3>
            </div>
          </a>
          <a href="{{route('users.add')}}">
            <div class="box">
                <h3>Add User</h3>
            </div>
          </a>
          <a href="{{route('profile.view')}}">
            <div class="box">
                <h3>Your Profile </h3>
            </div>
          </a>
          <a href="{{route('password.view')}}">
            <div class="box">
                <h3>Change Password </h3>
            </div>
          </a>
          <a href="{{route('student.class.view')}}">
            <div class="box">
                <h3>Student Class </h3>
            </div>
          </a>
          <a href="{{route('student.year.view')}}">
            <div class="box">
                <h3>Student Year</h3>
            </div>
          </a>
          <a href="{{route('student.group.view')}}">
            <div class="box">
                <h3>Student Group </h3>
            </div>
          </a>
          <a href="{{route('student.shift.view')}}">
            <div class="box">
                <h3>Student Shift </h3>
            </div>
          </a>
          <a href="{{route('fee.category.view')}}" >
            <div class="box">
                <h3>Fee Category </h3>
            </div>
          </a>
          <a href="{{route('fee.amount.view')}}">
            <div class="box">
                <h3>Fee Category Amount</h3>
            </div>
          </a>
          <a href="{{route('exam.type.view')}}">
            <div class="box">
                <h3>Exam Type</h3>
            </div>
          </a>
          <a href="{{route('assign.subject.view')}}">
            <div class="box">
                <h3>School Subject</h3>
            </div>
          </a>
          <a href="{{route('assign.subject.view')}}">
            <div class="box">
                <h3>Assign Subject</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('student.registration.view')}}">
            <div class="box">
                <h3>Student Registration</h3>
            </div>
          </a>
          <a href="{{route('roll.generate.view')}}">
            <div class="box">
                <h3>Roll Generate</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
          <a href="{{route('designation.view')}}">
            <div class="box">
                <h3>Designation</h3>
            </div>
          </a>
    
    
      </div>
</section>



  <script>

/* const boxes = document.querySelectorAll('.box');
const colors = [];

for (let i = 0; i < 200; i++) {
colors.push(`rgb(${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)})`);
}

for (let i = 0; i < boxes.length; i++) {
boxes[i].style.backgroundColor = colors[i % colors.length];
} */

const boxes = document.querySelectorAll('.box');
let colors;

if (localStorage.getItem('colors')) {
colors = JSON.parse(localStorage.getItem('colors'));
} else {
colors = [];
for (let i = 0; i < 200; i++) {
colors.push(`rgb(${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)})`);
}
localStorage.setItem('colors', JSON.stringify(colors));
}

for (let i = 0; i < boxes.length; i++) {
boxes[i].style.backgroundColor = colors[i % colors.length];
}
  </script>


</body>
</html>

@endsection