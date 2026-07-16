package com.student;

import java.io.IOException;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.*;

@WebServlet("/LogoutServlet")
public class LogoutServlet extends HttpServlet{

protected void doPost(HttpServletRequest request,HttpServletResponse response)throws ServletException,IOException{

HttpSession session=request.getSession(false);

if(session!=null){

session.invalidate();

}

response.sendRedirect("login.jsp");

}

}