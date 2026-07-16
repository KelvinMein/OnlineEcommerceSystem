<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Student Login Portal</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:url("https://images.unsplash.com/photo-1523050854058-8df90110c9f6?auto=format&fit=crop&w=1600&q=80");
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.container{
    width:400px;
    background:rgba(255,255,255,0.92);
    padding:35px;
    border-radius:15px;
    box-shadow:0 10px 30px rgba(0,0,0,0.35);
    text-align:center;
}

.logo{
    font-size:60px;
    margin-bottom:10px;
}

h2{
    color:#1565C0;
    margin-bottom:5px;
}

p{
    color:#666;
    margin-bottom:20px;
}

input[type=text],
input[type=password],
select{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:15px;
}

input:focus,
select:focus{
    outline:none;
    border-color:#1565C0;
}

button{
    width:100%;
    padding:12px;
    background:#1565C0;
    color:white;
    border:none;
    border-radius:8px;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#0D47A1;
}

.error{
    color:red;
    font-weight:bold;
    margin-top:15px;
}

.footer{
    margin-top:25px;
    color:#666;
    font-size:13px;
}

</style>

</head>

<body>

<div class="container">

<div class="logo">🎓</div>

<h2>Student Login Portal</h2>

<p>Please sign in to continue</p>

<form action="LoginServlet" method="post">

<input
type="text"
name="username"
placeholder="Enter Username"
required>

<input
type="password"
name="password"
placeholder="Enter Password"
required>

<select name="theme">
    <option value="Light">🌞 Light Theme</option>
    <option value="Dark">🌙 Dark Theme</option>
</select>

<button type="submit">
Login
</button>

</form>

<%
if(request.getParameter("error") != null){
%>

<p class="error">
Username cannot be empty!
</p>

<%
}
%>

<div class="footer">
Student Login Web Application<br>
Mount Kenya University © 2026
</div>

</div>

</body>
</html>