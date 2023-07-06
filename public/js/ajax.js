//AJAX for User Register
$(document).on("submit","#RegisterUserFormAJAX", function(e){

    e.preventDefault();

    $.post("query/registerUserQuery.php", $(this).serialize(), function(data){
       if(data.response == "invalid")
       {
         Swal.fire({
            title: 'Invalid',
            text: 'Am Error Occured',
            icon: 'error',
         })
       }
       else if(data.response == "success")
       {
        Swal.fire({
            title: 'Success',
            text: 'Registered Successfully',
            icon: 'success',
         })
       }
    },'json');
 
 });

 //AJAX for College Register
$(document).on("submit","#RegisterCollegeFormAJAX", function(e){

    e.preventDefault();

    $.post("query/registerCollegeQuery.php", $(this).serialize(), function(data){
       if(data.response == "invalid")
       {
         Swal.fire({
            title: 'Invalid',
            text: 'Am Error Occured',
            icon: 'error',
         })
       }
       else if(data.response == "success")
       {
        Swal.fire({
            title: 'Success',
            text: 'Registered Successfully',
            icon: 'success',
         })
       }
       else if(data.response == "user_not_exist")
       {
        Swal.fire({
            title: 'Try Again',
            text: 'Username or Password not match',
            icon: 'error',
            timer: 1500
         })
       }
       else if(data.response == "clg_id_exist")
       {
        Swal.fire({
            title: 'Invalid',
            text: 'College Id already Exist',
            icon: 'error',
         })
       }
       
    },'json');
 
 });