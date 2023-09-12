<html>
<body>
<head>
<title>Form Validation</title>
<script type="text/javascript">
function validate()
{
    if(document.myForm.Name.value=="")
    {
        alert("please provide your name!");
        document.myForm.Name.focus();
        return(false);
    }
    if(document.myForm.Email.value=="")
    {
        alert("please provide your email!");
        document.myForm.Email.focus();
        return(false);
    }
    return true;
    
}
</script>
</head>
<body>
<form name="myForm" onsubmit="return(validate())">
NAME:<input type="text" name="Name">
<br>
EMAIL:<input type="text" name="Email">
<br>
<button type="submit" name="insert">INSERT</button>
<br>
</form>
</html>
</body>