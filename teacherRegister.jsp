<%@ page import="java.sql.*" %>

<%
    String teacherName = request.getParameter("teacherName");
    String teacherEmail = request.getParameter("teacherEmail");
    String teacherPassword = request.getParameter("teacherPassword");

    try {
        Class.forName("com.mysql.jdbc.Driver");
        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/school_attendance","root",""); 
        PreparedStatement ps = conn.prepareStatement("INSERT INTO teacher(teacherName, teacherEmail, teacherPassword) values(?,?,?);");;
        ps.setString(1, teacherName);
        ps.setString(2, teacherEmail);
        ps.setString(3, teacherPassword);

        int result = ps.executeUpdate();
        if(result > 0){
            response.sendRedirect("index.html");
        }
        else{
            out.println("registration failed");
        }

    } catch(Exception e) {
        out.println(e);
    }
    
%>