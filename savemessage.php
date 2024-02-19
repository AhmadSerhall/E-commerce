<?php
session_start();
include 'connection.php';

if ($_SESSION['isloggedin'] != 1) {
    header("Location:index.php");
    exit();
}

$message = ""; // Variable to store the message status

if (isset($_POST['subject']) && $_POST['subject'] != '' &&
    isset($_POST['message']) && $_POST['message'] != '') {
    $username = $_SESSION['username'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
//ballashit tejma3 statements with placeholders (?)
    $query = "UPDATE userlogin SET subject = ?, message = ? WHERE username = ?";
//sta3malna prepared statement la ne2dar na3mol exucted la nafs el statement repeatedly men doun ma ysir 3anna errors aw injections bel database
    $query = mysqli_prepare($con, $query);
//    btejma3 el variables ma3 el placeholders w btet2akad enno variables nhoto mahalon kel wa7de mahal el placeholder el monesibe ta3ita bel database 
//    Function esma mysqli_statement_bind_parameter
//    sss hiye type of statements ele bedna n3adelon bel database string kellon
    mysqli_stmt_bind_param($query, 'sss', $subject, $message, $username);
    $result = mysqli_stmt_execute($query);
    

    if (!$result) {
//        $message = "Can't send message";
    } else {
        $message = "Message sent";
    }
//mysqli statement close
    mysqli_stmt_close($query);
}

mysqli_close($con);
?>
<!--hone elet enno el message ha tkoun fadye lamma tkoun false
ya3ne $message='' bel script el else ta3ita la2ano el message fadye btetba3 el "something went wrong "
lamma enzal 3al script bshouf eza el message mesh fadye lakan el message fiya string lakan if(result) true la2ano message!=''
lakan betba3 el message -->
<script>
    if ('<?php echo $message; ?>' !== '') {
        alert('<?php echo $message; ?>');
    }
    else{
        alert('<?php echo 'Something went wrong, Cannot send message'; ?>');
    }
    window.location.href = 'contactus.php';
</script>
