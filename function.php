 <?php include('config.php');?>
<?php 

if(isset($_POST['delete_student'])){
    $student_id = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM std_data WHERE id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        header("Location: ./?page=students");
    }else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }
}

if(isset($_POST['update_student'])){

    $student_id = mysqli_real_escape_string($conn, $_POST['id']);
    $std_f_name = mysqli_real_escape_string($conn, $_POST['std_f_name']);
    $std_l_name = mysqli_real_escape_string($conn, $_POST['std_l_name']);
    $std_class = mysqli_real_escape_string($conn, $_POST['std_class']);
    $std_id = mysqli_real_escape_string($conn, $_POST['std_id']);
    $std_admission_number = mysqli_real_escape_string($conn, $_POST['std_admission_number']);
    $std_gender = mysqli_real_escape_string($conn, $_POST['std_gender']);
    $std_dob = mysqli_real_escape_string($conn, $_POST['std_dob']);
    $std_joining_date = mysqli_real_escape_string($conn, $_POST['std_joining_date']);
    $std_religion = mysqli_real_escape_string($conn, $_POST['std_religion']);
//     $student_img = mysqli_real_escape_string($conn, $_POST['student_img']);
    $std_father_name = mysqli_real_escape_string($conn, $_POST['std_father_name']);
    $std_father_occupation = mysqli_real_escape_string($conn, $_POST['std_father_occupation']);
    $std_father_mobile = mysqli_real_escape_string($conn, $_POST['std_father_mobile']);
    $std_father_cnic = mysqli_real_escape_string($conn, $_POST['std_father_cnic']);
    $std_father_email = mysqli_real_escape_string($conn, $_POST['std_father_email']);
    $std_mother_name = mysqli_real_escape_string($conn, $_POST['std_mother_name']);
    $std_mother_occupation = mysqli_real_escape_string($conn, $_POST['std_mother_occupation']);
    $std_mother_mobile_number = mysqli_real_escape_string($conn, $_POST['std_mother_mobile_number']);
    $std_mother_email = mysqli_real_escape_string($conn, $_POST['std_mother_email']);
    $std_present_address = mysqli_real_escape_string($conn, $_POST['std_present_address']);
    $std_permanent_address = mysqli_real_escape_string($conn, $_POST['std_permanent_address']);

    $query = "UPDATE `std_data` SET `std_f_name`='$std_f_name',`std_l_name`='$std_l_name',`std_class`='$std_class',`std_id`='$std_id',`std_admission_number`='$std_admission_number',`std_gender`='$std_gender',`std_dob`='$std_dob',`std_joining_date`='$std_joining_date',`std_religion`='$std_religion',`std_father_name`='$std_father_name',`std_father_occupation`='$std_father_occupation',`std_father_mobile`='$std_father_mobile',`std_father_cnic`='$std_father_cnic',`std_father_email`='$std_father_email',`std_mother_name`='$std_mother_name',`std_mother_occupation`='$std_mother_occupation',`std_mother_mobile_number`='$std_mother_mobile_number',`std_mother_email`='$std_mother_email',`std_present_address`='$std_present_address',`std_permanent_address`='$std_permanent_address' WHERE id='$student_id' ";

    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("Location: ./?page=students");
    }else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }

}


 if(isset($_POST['save_student'])){

     $std_f_name = $_POST['std_f_name'];
     $std_l_name = $_POST['std_l_name'];
     $std_class = $_POST['std_class'];
     $std_fee_discount = $_POST['std_fee_discount'];
     $std_id = $_POST['std_id'];
     $std_admission_number = $_POST['std_admission_number'];
     $std_gender = mysqli_real_escape_string($conn, $_POST['std_gender']);
     $std_dob = mysqli_real_escape_string($conn, $_POST['std_dob']);
     $std_joining_date = mysqli_real_escape_string($conn, $_POST['std_joining_date']);
     $std_religion = mysqli_real_escape_string($conn, $_POST['std_religion']);
//     $student_img = mysqli_real_escape_string($conn, $_POST['student_img']);
     $std_father_name = mysqli_real_escape_string($conn, $_POST['std_father_name']);
     $std_father_occupation = mysqli_real_escape_string($conn, $_POST['std_father_occupation']);
     $std_father_mobile = mysqli_real_escape_string($conn, $_POST['std_father_mobile']);
     $std_father_cnic = mysqli_real_escape_string($conn, $_POST['std_father_cnic']);
     $std_father_email = mysqli_real_escape_string($conn, $_POST['std_father_email']);
     $std_mother_name = mysqli_real_escape_string($conn, $_POST['std_mother_name']);
     $std_mother_occupation = mysqli_real_escape_string($conn, $_POST['std_mother_occupation']);
     $std_mother_mobile_number = mysqli_real_escape_string($conn, $_POST['std_mother_mobile_number']);
     $std_mother_email = mysqli_real_escape_string($conn, $_POST['std_mother_email']);
     $std_present_address = mysqli_real_escape_string($conn, $_POST['std_present_address']);
     $std_permanent_address = mysqli_real_escape_string($conn, $_POST['std_permanent_address']);


     $query = "INSERT INTO std_data (std_f_name,std_l_name,std_class,std_fee_discount,std_id,std_admission_number,std_gender,std_dob,std_joining_date,std_religion,std_father_name,std_father_occupation,std_father_mobile,std_father_cnic,std_father_email,std_mother_name,std_mother_occupation,std_mother_mobile_number,std_mother_email,std_present_address,std_permanent_address) VALUES ('$std_f_name','$std_l_name','$std_class','$std_fee_discount','$std_id','$std_admission_number','$std_gender','$std_dob','$std_joining_date','$std_religion','$std_father_name','$std_father_occupation','$std_father_mobile','$std_father_cnic','$std_father_email','$std_mother_name','$std_mother_occupation','$std_mother_mobile_number','$std_mother_email','$std_present_address','$std_permanent_address')";

     $query_run = mysqli_query($conn, $query);

     if($query_run){
         header("Location: ./?page=students");
         exit(0);
     }else{
         echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
     }
 }





// Teacher Functions

if(isset($_POST['delete_teacher'])){
    $student_id = mysqli_real_escape_string($conn, $_POST['delete_teacher']);

    $query = "DELETE FROM teacher_data WHERE id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        header("Location: ./?page=teachers");
    }else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }
}

 if(isset($_POST['update_teacher'])){
    $teacher_id = mysqli_real_escape_string($conn, $_POST['id']);
    $teacher_name = mysqli_real_escape_string($conn, $_POST['teacher_name']);
    $t_gender = mysqli_real_escape_string($conn, $_POST['t_gender']);
    $t_dob = mysqli_real_escape_string($conn, $_POST['t_dob']);
    $t_mobile = mysqli_real_escape_string($conn, $_POST['t_mobile']);
    $t_joining_date = mysqli_real_escape_string($conn, $_POST['t_joining_date']);
    $t_qualification = mysqli_real_escape_string($conn, $_POST['t_qualification']);
    $t_experience = mysqli_real_escape_string($conn, $_POST['t_experience']);
    $t_salary = mysqli_real_escape_string($conn, $_POST['t_salary']);
    $t_address = mysqli_real_escape_string($conn, $_POST['t_address']);
    $t_city = mysqli_real_escape_string($conn, $_POST['t_city']);
    $t_state = mysqli_real_escape_string($conn, $_POST['t_state']);
    $t_zipcode = mysqli_real_escape_string($conn, $_POST['t_zipcode']);
    $t_country = mysqli_real_escape_string($conn, $_POST['t_country']);

    $query = "UPDATE `teacher_data` SET `teacher_name`='$teacher_name',`t_gender`='$t_gender',`t_dob`='$t_dob',`t_mobile`='$t_mobile',`t_joining_date`='$t_joining_date',`t_qualification`='$t_qualification',`t_experience`='$t_experience',`t_salary`='$t_salary',`t_address`='$t_address',`t_city`='$t_city',`t_state`='$t_state',`t_zipcode`='$t_zipcode',`t_country`='$t_country' WHERE id='$teacher_id' ";

    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("Location: ./?page=teachers");
    }else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }

}

if(isset($_POST['save_teacher'])){

    $teacher_name = mysqli_real_escape_string($conn, $_POST['teacher_name']);
    $t_gender = mysqli_real_escape_string($conn, $_POST['t_gender']);
    $t_dob = mysqli_real_escape_string($conn, $_POST['t_dob']);
    $t_mobile = mysqli_real_escape_string($conn, $_POST['t_mobile']);
    $t_joining_date = mysqli_real_escape_string($conn, $_POST['t_joining_date']);
    $t_qualification = mysqli_real_escape_string($conn, $_POST['t_qualification']);
    $t_experience = mysqli_real_escape_string($conn, $_POST['t_experience']);
    $t_salary = mysqli_real_escape_string($conn, $_POST['t_salary']);
    $t_address = mysqli_real_escape_string($conn, $_POST['t_address']);
    $t_city = mysqli_real_escape_string($conn, $_POST['t_city']);
    $t_state = mysqli_real_escape_string($conn, $_POST['t_state']);
    $t_zipcode = mysqli_real_escape_string($conn, $_POST['t_zipcode']);
    $t_country = mysqli_real_escape_string($conn, $_POST['t_country']);

    $query = "INSERT INTO teacher_data (teacher_name,t_gender,t_dob,t_mobile,t_joining_date,t_qualification,t_experience,t_salary,t_address,t_city,t_state,t_zipcode,t_country) VALUES ('$teacher_name','$t_gender','$t_dob','$t_mobile', '$t_joining_date','$t_qualification', '$t_experience', '$t_salary','$t_address','$t_city','$t_state','$t_zipcode', '$t_country')";

    $query_run = mysqli_query($conn, $query);
    echo $query_run;

    if($query_run){
        header("Location: ./?page=teachers");
        exit(0);
    }else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }
}

// Class Function

if(isset($_POST['delete_class'])){
    $subject_id = mysqli_real_escape_string($conn, $_POST['delete_class']);

    $query = "DELETE FROM class_data WHERE id='$subject_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        header("Location: ./?page=class");
    }else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }
}

if(isset($_POST['update_class'])){

    $add_class = mysqli_real_escape_string($conn, $_POST['add_class']);
    $add_class_section = mysqli_real_escape_string($conn, $_POST['add_class_section']);
    $add_class_fees = mysqli_real_escape_string($conn, $_POST['add_class_fees']);

    $query = "UPDATE `class_data` SET `add_class`='$add_class',`add_class_fees`='$add_class_fees',`add_class_section`='$add_class_section'";

    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("Location: ./?page=class");
    }else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }

}

if(isset($_POST['save_class'])){

    $add_class = mysqli_real_escape_string($conn, $_POST['add_class']);
    $add_class_section = mysqli_real_escape_string($conn, $_POST['add_class_section']);
    $add_class_fees = mysqli_real_escape_string($conn, $_POST['add_class_fees']);

    $query = "INSERT INTO class_data (add_class,add_class_section,add_class_fees) VALUES ('$add_class','$add_class_section','$add_class_fees')";

    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("Location: ./?page=class");
        exit(0);
    }else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }
}

// Expenses Function 

if(isset($_POST['save_expenses'])){

    $expenses_id = mysqli_real_escape_string($conn, $_POST['expenses_id']);
    $expenses_item_name = mysqli_real_escape_string($conn, $_POST['expenses_item_name']);
    $expenses_item_quality = mysqli_real_escape_string($conn, $_POST['expenses_item_quality']);
    $expense_amout = mysqli_real_escape_string($conn, $_POST['expense_amout']);
    $expenses_sop = mysqli_real_escape_string($conn, $_POST['expenses_sop']);
    $expenses_date = mysqli_real_escape_string($conn, $_POST['expenses_date']);
    $expenses_by = mysqli_real_escape_string($conn, $_POST['expenses_by']);


    $query = "INSERT INTO expenses_data (expenses_id,expenses_item_name,expenses_item_quality,expense_amout,expenses_sop,expenses_date,expenses_by) VALUES ('$expenses_id','$expenses_item_name','$expenses_item_quality','$expense_amout','$expenses_sop','$expenses_date','$expenses_by')";

    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("Location: ./?page=expenses");
        exit(0);
    }else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }
}
// Fees Function 

if(isset($_POST['delete_fees'])){
 $subject_id = mysqli_real_escape_string($conn, $_POST['delete_fees']);

 $query = "DELETE FROM fees_data WHERE id='$subject_id' ";
 $query_run = mysqli_query($conn, $query);

 if($query_run)
 {
     header("Location: ./?page=fees-collections");
 }else{
     echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
 }
}

if(isset($_POST['save_fees'])){

    $fees_class = $_POST['fees_class'];
    $fees_std = $_POST['fees_std'];
    $fee_type = $_POST['fee_type'];
    $fees_amount = $_POST['fees_amount'];
    $fees_amount_paid = $_POST['fees_amount_paid'];
    $fee_paid_date = $_POST['fee_paid_date'];


    $query = "INSERT INTO fees_data (fees_class,fees_std,fee_type,fees_amount,fees_amount_paid,fee_paid_date) VALUES ('$fees_class','$fees_std','$fee_type','$fees_amount','$fees_amount_paid','$fee_paid_date')";

    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("Location: ./?page=fees-collections");
        exit(0);
    }else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }
}
// Salary Function

 if(isset($_POST['save_salary'])){

     $teacher_name = $_POST['teacher_name'];
     $t_salary = $_POST['t_salary'];
     $paid_date = $_POST['paid_date'];
     $teacher_paid_amount = $_POST['teacher_paid_amount'];
     $reduction_type = $_POST['reduction_type'];
     $teacher_fine = $_POST['teacher_fine'];
     $teacher_advance = $_POST['teacher_advance'];

     $query = "INSERT INTO salary_data (teacher_name,t_salary,paid_date,teacher_paid_amount,reduction_type,teacher_fine,teacher_advance) VALUES ('$teacher_name','$t_salary','$paid_date','$teacher_paid_amount','$reduction_type','$teacher_fine','$teacher_advance')";

     $query_run = mysqli_query($conn, $query);

     if($query_run){
         header("Location: ./?page=salary");
         exit(0);
     }else{
         echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
     }
 }



// Admin Dashboard STD / STAFF

    $std = "SELECT * from std_data";
    if ($result = mysqli_query($conn, $std)) {
        $std_count = mysqli_num_rows( $result );
    }
    $teacher = "SELECT * from teacher_data";
    if ($result = mysqli_query($conn, $teacher)) {
        $teacher_count = mysqli_num_rows( $result );
    }

    // Sum Of Revenue In Home Page
    $sql = "SELECT SUM(fees_amount) from fees_data";
    $revenue = mysqli_query($conn, $sql);
    $sum_revenue = mysqli_fetch_array($revenue);

    // Sum Of Expence In Home Page
    $sql = "SELECT SUM(expense_amout) from expenses_data";
    $expence = mysqli_query($conn, $sql);
    $sum_expence = mysqli_fetch_array($expence);




?>
