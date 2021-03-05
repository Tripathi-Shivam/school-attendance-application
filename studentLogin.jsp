<%@ page import="java.sql.*" %>

<%
    String studentNameLogin = request.getParameter("studentNameLogin");
    String studentPasswordLogin = request.getParameter("studentPasswordLogin");

    try {
        Class.forName("com.mysql.jdbc.Driver");
        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/school_attendance","root",""); 
        PreparedStatement ps = conn.prepareStatement("SELECT * FROM student WHERE studentName = ? && studentPassword = ?;");
        ps.setString(1, studentNameLogin);
        ps.setString(2, studentPasswordLogin);

        ResultSet rs = ps.executeQuery();
        if(rs.next()){
            response.sendRedirect("studentHome.html");
        }
        else{
            out.println("registration failed");
        }

    } catch(Exception e) {
        out.println(e);
    }
    
%>