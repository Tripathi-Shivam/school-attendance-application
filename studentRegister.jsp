<%@ page import="java.sql.*" %>

<%
    String studentName = request.getParameter("studentName");
    String studentEmail = request.getParameter("studentEmail");
    String studentPassword = request.getParameter("studentPassword");

    try {
        Class.forName("com.mysql.jdbc.Driver");
        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/test","root",""); 
        PreparedStatement ps = conn.prepareStatement("INSERT INTO student(studentName, studentEmail, studentPassword) values(?,?,?);");;
        ps.setString(1, studentName);
        ps.setString(2, studentEmail);
        ps.setString(3, studentPassword);

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