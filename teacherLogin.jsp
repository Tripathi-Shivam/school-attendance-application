<%@ page import="java.sql.*" %>

<%
    String teacherNameLogin = request.getParameter("teacherNameLogin");
    String teacherPasswordLogin = request.getParameter("teacherPasswordLogin");

    try {
        Class.forName("com.mysql.jdbc.Driver");
        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/test","root",""); 
        PreparedStatement ps = conn.prepareStatement("SELECT * FROM teacher WHERE teacherName = ? && teacherPassword = ?;");
        ps.setString(1, teacherNameLogin);
        ps.setString(2, teacherPasswordLogin);

        ResultSet rs = ps.executeQuery();
        if(rs.next()){
            response.sendRedirect("teacherHome.html");
        }
        else{
            out.println("registration failed");
        }

    } catch(Exception e) {
        out.println(e);
    }
    
%>