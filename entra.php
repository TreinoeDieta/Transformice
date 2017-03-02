<?php
session_start();
session_register("nome");
$nome=$valor;
?>
<html>
<head>
</head>
<body bgcolor="#FFFFFF">
<script>
window.open('chat.htm', 'chat', 'toolbar=no,location=no,status=no,menubar=no,width=700,height=500');
window.close()
</script>
</body>
</html>
