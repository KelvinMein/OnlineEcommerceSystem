<%@ page import="java.util.Date"%>

<%

String username=(String)session.getAttribute("username");

if(username==null){

response.sendRedirect("login.jsp");

return;

}

String theme="Light";

Cookie cookies[]=request.getCookies();

if(cookies!=null){

for(Cookie c:cookies){

if(c.getName().equals("theme")){

theme=c.getValue();

}

}

}

%>

<!DOCTYPE html>

<html>

<head>

<title>Dashboard</title>

<style>

body{

font-family:Arial;

background:<%=theme.equals("Dark")?"#222":"#f4f4f4"%>;

color:<%=theme.equals("Dark")?"white":"black"%>;

}

.container{

width:600px;

margin:auto;

margin-top:50px;

background:white;

padding:20px;

border-radius:10px;

}

</style>

</head>

<body>

<div class="container">

<h2>Welcome <%=username%></h2>

<p><b>Session ID:</b> <%=session.getId()%></p>

<p><b>Login Time:</b> <%=session.getAttribute("loginTime")%></p>

<p><b>Theme:</b> <%=theme%></p>

<form action="LogoutServlet" method="post">

<input type="submit" value="Logout">

</form>

</div>

</body>

</html>