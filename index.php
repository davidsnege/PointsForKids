<?php
//HEAD
include 'head.php';
?>
<?php
//HEADER
include 'header.php';
?>
<?php
//BODY
include 'body.php';
?>
<?php
//FOOTER
include 'footer.php';
?>
<script>

$(document).ready(function(){

    $("#ADDUSER").click(function(){
        $("#Bread2").text("Add User");
    });
    $("#CLOSE").click(function(){
        $("#Bread2").text("...");
    });
    $("#CLOSE2").click(function(){
        $("#Bread2").text("...");
    });
    $(".ids").click(function(){
        actualUser = $(this).text();
        $("#Bread2").text("User / ID / "+actualUser);
    });

    var rowCount = $('#SeeTable tr').length -1;
    if(rowCount > 0){
        $(".totalUsers").text(rowCount);
    }else{
        $(".totalUsers").text("0");
    }
    
});

</script>