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

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
    $l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
    $std_id = mysqli_real_escape_string($conn, $_POST['class']);
    $gender = mysqli_real_escape_string($conn, $_POST['std_id']);
    $dob = mysqli_real_escape_string($conn, $_POST['admission_number']);
    $class = mysqli_real_escape_string($conn, $_POST['gender']);
    $religion = mysqli_real_escape_string($conn, $_POST['dob']);
    $joining_date = mysqli_real_escape_string($conn, $_POST['joining_date']);
    $admission_number = mysqli_real_escape_string($conn, $_POST['religion']);
    $student_img = mysqli_real_escape_string($conn, $_POST['student_img']);
    $father_name = mysqli_real_escape_string($conn, $_POST['father_name']);
    $father_occupation = mysqli_real_escape_string($conn, $_POST['father_occupation']);
    $father_mobile = mysqli_real_escape_string($conn, $_POST['father_mobile']);
    $father_cnic = mysqli_real_escape_string($conn, $_POST['father_cnic']);
    $father_email = mysqli_real_escape_string($conn, $_POST['father_email']);
    $mother_name = mysqli_real_escape_string($conn, $_POST['mother_name']);
    $mother_occupation = mysqli_real_escape_string($conn, $_POST['mother_occupation']);
    $mother_mobile_number = mysqli_real_escape_string($conn, $_POST['mother_mobile_number']);
    $mother_email = mysqli_real_escape_string($conn, $_POST['mother_email']);
    $present_address = mysqli_real_escape_string($conn, $_POST['present_address']);
    $permanent_address = mysqli_real_escape_string($conn, $_POST['permanent_address']);

    $query = "UPDATE `std_data` SET `id`='$id',`f_name`='$f_name',`l_name`='$l_name',`class`='$class',`std_id`='$std_id',`admission_number`='$admission_number',`gender`='$gender',`dob`='$dob',`joining_date`='$joining_date',`religion`='$religion',`student_img`='$student_img',`father_name`='$father_name',`father_occupation`='$father_occupation',`father_mobile`='$father_mobile',`father_cnic`='$father_cnic',`father_email`='$father_email',`mother_name`='$mother_name',`mother_occupation`='$mother_occupation',`mother_mobile_number`='$mother_mobile_number',`mother_email`='$mother_email',`present_address`='$present_address',`permanent_address`='$permanent_address' WHERE id='$student_id' ";
    
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("Location: ./?page=students");
    }else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }

}


if(isset($_POST['save_student'])){
    // $status = 'error'; 
    // if(!empty($_FILES["student_img"]["name"])) { 
    //     // Get file info 
    //     $fileName = basename($_FILES["student_img"]["name"]); 
    //     $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
    //     // Allow certain file formats 
    //     $allowTypes = array('jpg','png','jpeg','gif'); 
    //     if(in_array($fileType, $allowTypes)){ 
    //         $image = $_FILES['student_img']['tmp_name']; 
    //         $student_img = addslashes(file_get_contents($image)); 
         
    //         // Insert image content into database 
    //         // $insert = $conn->query("INSERT into std_data (student_img) VALUES ('$student_img', NOW())"); 
    //     }
    // } 


    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
    $l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
    $std_id = mysqli_real_escape_string($conn, $_POST['class']);
    $gender = mysqli_real_escape_string($conn, $_POST['std_id']);
    $dob = mysqli_real_escape_string($conn, $_POST['admission_number']);
    $class = mysqli_real_escape_string($conn, $_POST['gender']);
    $religion = mysqli_real_escape_string($conn, $_POST['dob']);
    $joining_date = mysqli_real_escape_string($conn, $_POST['joining_date']);
    $admission_number = mysqli_real_escape_string($conn, $_POST['religion']);
    $student_img = mysqli_real_escape_string($conn, $_POST['student_img']); 
    $father_name = mysqli_real_escape_string($conn, $_POST['father_name']);
    $father_occupation = mysqli_real_escape_string($conn, $_POST['father_occupation']);
    $father_mobile = mysqli_real_escape_string($conn, $_POST['father_mobile']);
    $father_cnic = mysqli_real_escape_string($conn, $_POST['father_cnic']);
    $father_email = mysqli_real_escape_string($conn, $_POST['father_email']);
    $mother_name = mysqli_real_escape_string($conn, $_POST['mother_name']);
    $mother_occupation = mysqli_real_escape_string($conn, $_POST['mother_occupation']);
    $mother_mobile_number = mysqli_real_escape_string($conn, $_POST['mother_mobile_number']);
    $mother_email = mysqli_real_escape_string($conn, $_POST['mother_email']);
    $present_address = mysqli_real_escape_string($conn, $_POST['present_address']);
    $permanent_address = mysqli_real_escape_string($conn, $_POST['permanent_address']);

    $query = "INSERT INTO std_data (id,f_name,l_name,class,std_id,admission_number,gender,dob,joining_date,religion,student_img,father_name,father_occupation,father_mobile,father_cnic,father_email,mother_name,mother_occupation,mother_mobile_number,mother_email,present_address,permanent_address) VALUES ('$id','$f_name','$l_name','$class','$std_id','$admission_number', '$gender','$dob', '$joining_date', '$religion','$student_img','$father_name','$father_occupation','$father_mobile','$father_cnic','$father_email', '$mother_name','$mother_occupation', '$mother_mobile_number', '$mother_email', '$present_address', '$permanent_address')";

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

    $teacher_id = mysqli_real_escape_string($conn, $_POST['teacher_id']);
    $teacher_name = mysqli_real_escape_string($conn, $_POST['teacher_name']);
    $t_gender = mysqli_real_escape_string($conn, $_POST['t_gender']);
    $t_dob = mysqli_real_escape_string($conn, $_POST['t_dob']);
    $t_mobile = mysqli_real_escape_string($conn, $_POST['t_mobile']);
    $t_joining_date = mysqli_real_escape_string($conn, $_POST['t_joining_date']);
    $t_qualification = mysqli_real_escape_string($conn, $_POST['t_qualification']);
    $t_experience = mysqli_real_escape_string($conn, $_POST['t_experience']);
    $t_username = mysqli_real_escape_string($conn, $_POST['t_username']);
    $t_email = mysqli_real_escape_string($conn, $_POST['t_email']);
    $t_password = mysqli_real_escape_string($conn, $_POST['t_password']);
    $t_repeat_password = mysqli_real_escape_string($conn, $_POST['t_repeat_password']);
    $t_address = mysqli_real_escape_string($conn, $_POST['t_address']);
    $t_city = mysqli_real_escape_string($conn, $_POST['t_city']);
    $t_state = mysqli_real_escape_string($conn, $_POST['t_state']);
    $t_zipcode = mysqli_real_escape_string($conn, $_POST['t_zipcode']);
    $t_country = mysqli_real_escape_string($conn, $_POST['t_country']);

    $query = "UPDATE `teacher_data` SET `teacher_name`='$teacher_name',`t_gender`='$t_gender',`t_mobile`='$t_mobile',`t_joining_date`='$t_joining_date',`t_qualification`='$t_qualification',`t_experience`='$t_experience',`t_username`='$t_username',`t_email`='$t_email',`t_password`='$t_password',`t_repeat_password`='$t_repeat_password',`t_address`='$t_address',`t_city`='$t_city',`t_state`='$t_state',`t_zipcode`='$t_zipcode',`t_country`='$t_country' ";
    
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("Location: ./?page=teachers");
    }else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }

}

if(isset($_POST['save_teacher'])){
    $teacher_id = mysqli_real_escape_string($conn, $_POST['teacher_id']);
    $teacher_name = mysqli_real_escape_string($conn, $_POST['teacher_name']);
    $t_gender = mysqli_real_escape_string($conn, $_POST['t_gender']);
    $t_dob = mysqli_real_escape_string($conn, $_POST['t_dob']);
    $t_mobile = mysqli_real_escape_string($conn, $_POST['t_mobile']);
    $t_joining_date = mysqli_real_escape_string($conn, $_POST['t_joining_date']);
    $t_qualification = mysqli_real_escape_string($conn, $_POST['t_qualification']);
    $t_experience = mysqli_real_escape_string($conn, $_POST['t_experience']);
    $t_username = mysqli_real_escape_string($conn, $_POST['t_username']);
    $t_email = mysqli_real_escape_string($conn, $_POST['t_email']);
    $t_password = mysqli_real_escape_string($conn, $_POST['t_password']);
    $t_repeat_password = mysqli_real_escape_string($conn, $_POST['t_repeat_password']);
    $t_address = mysqli_real_escape_string($conn, $_POST['t_address']);
    $t_city = mysqli_real_escape_string($conn, $_POST['t_city']);
    $t_state = mysqli_real_escape_string($conn, $_POST['t_state']);
    $t_zipcode = mysqli_real_escape_string($conn, $_POST['t_zipcode']);
    $t_country = mysqli_real_escape_string($conn, $_POST['t_country']);

    $query = "INSERT INTO teacher_data (teacher_id,teacher_name,t_gender,t_dob,t_mobile,t_joining_date,t_qualification,t_experience,t_username,t_email,t_password,t_repeat_password,t_address,t_city,t_state,t_zipcode,t_country) VALUES ('$teacher_id','$teacher_name','$t_gender','$t_dob','$t_mobile', '$t_joining_date','$t_qualification', '$t_experience', '$t_username', '$t_email', '$t_password','$t_repeat_password','$t_address','$t_city','$t_state','$t_zipcode', '$t_country')";

    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("Location: ./?page=teachers");
        exit(0);
    }else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }
}

// Subject Function 

if(isset($_POST['delete_subject'])){
    $subject_id = mysqli_real_escape_string($conn, $_POST['delete_subject']);

    $query = "DELETE FROM subject_data WHERE id='$subject_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        header("Location: ./?page=subjects");
    }else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }
}

if(isset($_POST['update_subject'])){

    $subject_id = mysqli_real_escape_string($conn, $_POST['subject_id']);
    $subject_name = mysqli_real_escape_string($conn, $_POST['subject_name']);
    $subject_class = mysqli_real_escape_string($conn, $_POST['subject_class']);

    $query = "UPDATE `subject_data` SET `subject_id`='$subject_id',`subject_name`='$subject_name',`subject_class`='$subject_class'";
    
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("Location: ./?page=subjects");
    }else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }

}

if(isset($_POST['add_class'])){

    $subject_id = mysqli_real_escape_string($conn, $_POST['subject_id']);
    $subject_name = mysqli_real_escape_string($conn, $_POST['subject_name']);
    $subject_class = mysqli_real_escape_string($conn, $_POST['subject_class']);


    $query = "INSERT INTO subject_data (subject_id,subject_name,subject_class) VALUES ('$subject_id','$subject_name','$subject_class')";

    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("Location: ./?page=subjects");
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
if(isset($_POST['save_fees'])){

    $fee_std_id = mysqli_real_escape_string($conn, $_POST['fee_std_id']);
    $fee_std_name = mysqli_real_escape_string($conn, $_POST['fee_std_name']);
    $fee_gender = mysqli_real_escape_string($conn, $_POST['fee_gender']);
    $fee_type = mysqli_real_escape_string($conn, $_POST['fee_type']);
    $fees_amount = mysqli_real_escape_string($conn, $_POST['fees_amount']);
    $fee_paid_date = mysqli_real_escape_string($conn, $_POST['fee_paid_date']);


    $query = "INSERT INTO fees_data (fee_std_id,fee_std_name,fee_gender,fee_type,fees_amount,fee_paid_date) VALUES ('$fee_std_id','$fee_std_name','$fee_gender','$fee_type','$fees_amount','$fee_paid_date')";

    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("Location: ./?page=fees-collections");
        exit(0);
    }else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }
}

// salary Function
if(isset($_POST['save_salary'])){

    $staff_salary_id = mysqli_real_escape_string($conn, $_POST['staff_salary_id']);
    $staff_salary_name = mysqli_real_escape_string($conn, $_POST['staff_salary_name']);
    $staff_salary_gender = mysqli_real_escape_string($conn, $_POST['staff_salary_gender']);
    $staff_salary_joining_date = mysqli_real_escape_string($conn, $_POST['staff_salary_joining_date']);
    $staff_salary_amount = mysqli_real_escape_string($conn, $_POST['staff_salary_amount']);
    $fee_paid_date = mysqli_real_escape_string($conn, $_POST['fee_paid_date']);


    $query = "INSERT INTO salary_data (staff_salary_id,staff_salary_name,staff_salary_gender,staff_salary_joining_date,staff_salary_amount) VALUES ('$staff_salary_id','$staff_salary_name','$staff_salary_gender','$staff_salary_joining_date','$staff_salary_amount')";

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
