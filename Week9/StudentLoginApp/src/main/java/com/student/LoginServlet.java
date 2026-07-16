package com.student;

import java.io.IOException;
import java.util.Date;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.Cookie;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import jakarta.servlet.http.HttpSession;

@WebServlet("/LoginServlet")
public class LoginServlet extends HttpServlet {

    @Override
    protected void doPost(HttpServletRequest request,
            HttpServletResponse response)
            throws ServletException, IOException {

        String username = request.getParameter("username");
        String theme = request.getParameter("theme");

        if(username == null || username.trim().isEmpty()){
            response.sendRedirect("login.jsp?error=1");
            return;
        }

        HttpSession session = request.getSession();

        session.setAttribute("username", username);
        session.setAttribute("loginTime", new Date());

        Cookie cookie = new Cookie("theme", theme);
        cookie.setMaxAge(60*60*24*30);

        response.addCookie(cookie);

        response.sendRedirect("dashboard.jsp");
    }
}