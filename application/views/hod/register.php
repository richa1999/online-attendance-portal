<?php $this->load->view('hod/header') ?>
     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <div class="btn-container" style="margin-left:480px; margin-top:50px">
               <button class="btn btn-primary" onclick="regTeacher()">Register New Teacher</button>
          </div>

          <div class="row col-lg-9 col-md-9 col-sm-9" style="margin-left:80px; margin-top:50px">

          <form id="teacher" class="form-signin-teacher" style="display: none;" action=<?php echo base_url('index.php/hod/register/register_teacher');?> method = "post">
               <div class="row" style="padding:20px;">
               <label for="first_name">Name *</label>
               <input type="text" class="form-control" id="name" name="name" placeholder="Name"  style= "width:800px;"required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="mobile_no">Mobile No. *</label>
               <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile Number" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="email">Email Address*</label>
               <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="gender">Gender* &nbsp; &nbsp;</label>
               <select id="gender" name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    
                                    </div>
               <div class="row" style="padding:20px;">
               <label for="password">Password*</label>
               <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="email">Department*</label>
               <input type="text" class="form-control" id="dept" name="dept" placeholder="dept" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="course">Course*</label>
               <input type="text" class="form-control" id="course" name="course" placeholder="course" required>
               </div>
               <div class="row" style="padding:20px;">
               <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
               </div>
               
</form>

         
     </main>
     <script type="text/javascript">
        
          function regTeacher() {
               
               document.getElementById('teacher').style.display = "block";
          }
     </script>
     <?php $this->load->view('footer.php') ?>
</body>
</html>