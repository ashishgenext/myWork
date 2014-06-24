
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Arrays;
import java.util.Calendar;


 class databaseQ {
   static String first,second,third;
   static int Fm1,Fm2,Fm3;
    
    
    public static void main (String [] args)throws SQLException, ClassNotFoundException, IllegalAccessException
		{
		  	
                    ResultSet rs=null;
                    try {
                              
                        Object newInstance = Class.forName("com.mysql.jdbc.Driver").newInstance(); 
                        
                        } catch (InstantiationException ce) 
					{
					System.out.println(ce);
					}
			 // update("viig",76); 
                
               molecount();
                }
    public static void fetchTop() throws SQLException
    {
       Connection con = DriverManager.getConnection("jdbc:mysql://localhost/game", "root", "");

                    Statement st = con.createStatement();
                    
                    String sql=("SELECT username FROM info WHERE unique_user=1 ORDER BY score DESC;");
                    
                    ResultSet rs=st.executeQuery(sql);
                    
                      if( rs.next())
                    first=rs.getString("username");
                      if(rs.next())
                    second=rs.getString("username");
                      if(rs.next())
                    third=rs.getString("username");
                   
                   // System.out.println(first+"-"+second+"-"+third);
                   
    }

    public static void update(String user,int score,int m1,int m2,int m3,int m4,int m5,int m6,int m7,int m8,int m9) throws SQLException{
       DateFormat dateFormat = new SimpleDateFormat("yyyy/MM/dd HH:mm:ss");
Calendar cal = Calendar.getInstance();
String today=dateFormat.format(cal.getTime());
//System.out.println(today);
        
        Connection con = DriverManager.getConnection("jdbc:mysql://localhost/game", "root", "");

                    Statement st = con.createStatement();
                   String sql=("SELECT * FROM info WHERE unique_user=1 AND username='"+user+"'");
                   ResultSet rs=st.executeQuery(sql);
                   if(!rs.next())
                   {
                    //System.out.println(today);
                       sql=("INSERT INTO info (date,username,score,unique_user,m1,m2,m3,m4,m5,m6,m7,m8,m9) VALUES ('"+today+"','"+user+"','"+score+"',1,"+m1+","+m2+","+m3+","+m4+","+m5+","+m6+","+m7+","+m8+","+m9+")");   
                   st.executeUpdate(sql);
                    sql=("INSERT INTO info (date,username,score,unique_user,m1,m2,m3,m4,m5,m6,m7,m8,m9) VALUES ('"+today+"','"+user+"','"+score+"',2,"+m1+","+m2+","+m3+","+m4+","+m5+","+m6+","+m7+","+m8+","+m9+")");   
                    //sql=("INSERT INTO info (date,username,score,unique_userm1,m2,m3,m4,m5,m6,m7,m8,m9) VALUES ('"+today+"','"+user+"','"+score+"',2)");   
                   st.executeUpdate(sql);
                   }
                   else {
                       int newscore=score + rs.getInt("score");
                       int Nm1=m1+rs.getInt("m1");
                       int Nm2=m2+rs.getInt("m2");
                       int Nm3=m3+rs.getInt("m3");
                       int Nm4=m4+rs.getInt("m4");
                       int Nm5=m5+rs.getInt("m5");
                       int Nm6=m6+rs.getInt("m6");
                       int Nm7=m7+rs.getInt("m7");
                       int Nm8=m8+rs.getInt("m8");
                       int Nm9=m9+rs.getInt("m9");
                       
                      // sql=("INSERT INTO info (date,username,score,unique_user) VALUES ('"+today+"','"+user+"','"+score+"',2)");   
                    sql=("INSERT INTO info (date,username,score,unique_user,m1,m2,m3,m4,m5,m6,m7,m8,m9) VALUES ('"+today+"','"+user+"','"+score+"',2,"+m1+","+m2+","+m3+","+m4+","+m5+","+m6+","+m7+","+m8+","+m9+")");  
                    st.executeUpdate(sql);
                   sql=("UPDATE info SET score="+newscore+",m1="+Nm1+",m2="+Nm2+",m3="+Nm3+",m4="+Nm4+",m5="+Nm5+",m6="+Nm6+",m7="+Nm7+",m8="+Nm8+",m9="+Nm9+"  WHERE username='"+user+"' AND unique_user=1");   
                   st.executeUpdate(sql);
                   }
                   
                   
              molecount();     
                    
                    
        
    }
    
    public static ResultSet  history() throws SQLException
    {
         Connection con = DriverManager.getConnection("jdbc:mysql://localhost/game", "root", "");          
                   Statement st = con.createStatement();
                   String sql=("SELECT date,username,score FROM info WHERE unique_user=2 ;");
                   ResultSet rs=st.executeQuery(sql);   
                   return rs;
    }

     public static ResultSet  Leader() throws SQLException
    {
         Connection con = DriverManager.getConnection("jdbc:mysql://localhost/game", "root", "");          
                   Statement st = con.createStatement();
                   String sql=("SELECT date,username,score FROM info WHERE unique_user=1 ORDER BY score DESC; ;");
                   ResultSet rs=st.executeQuery(sql);   
                   return rs;
    }



public static void molecount() throws SQLException
{
    Connection con = DriverManager.getConnection("jdbc:mysql://localhost/game", "root", "");          
    Statement st = con.createStatement();
    int [] arr=new int[9];
    
    String sql=("SELECT SUM(m1) AS Sm1 FROM info WHERE unique_user=2");
    ResultSet rs=st.executeQuery(sql); 
    rs.next();
    arr[0]=rs.getInt("Sm1");
    
     sql=("SELECT SUM(m2) AS Sm2 FROM info WHERE unique_user=2");
     rs=st.executeQuery(sql); 
    rs.next();
    arr[1]=rs.getInt("Sm2");
    
    sql=("SELECT SUM(m3) AS Sm3 FROM info WHERE unique_user=2");
    rs=st.executeQuery(sql); 
    rs.next();
    arr[2]=rs.getInt("Sm3");
    
     sql=("SELECT SUM(m4) AS Sm4 FROM info WHERE unique_user=2");
     rs=st.executeQuery(sql); 
    rs.next();
    arr[3]=rs.getInt("Sm4");
    
     sql=("SELECT SUM(m5) AS Sm5 FROM info WHERE unique_user=2");
     rs=st.executeQuery(sql); 
    rs.next();
    arr[4]=rs.getInt("Sm5");
    
    sql=("SELECT SUM(m6) AS Sm6 FROM info WHERE unique_user=2");
     rs=st.executeQuery(sql); 
    rs.next();
    arr[5]=rs.getInt("Sm6");
    
    sql=("SELECT SUM(m7) AS Sm7 FROM info WHERE unique_user=2");
     rs=st.executeQuery(sql); 
    rs.next();
    arr[6]=rs.getInt("Sm7");
    
    sql=("SELECT SUM(m8) AS Sm8 FROM info WHERE unique_user=2");
     rs=st.executeQuery(sql); 
    rs.next();
    arr[7]=rs.getInt("Sm8");
    
    sql=("SELECT SUM(m9) AS Sm9 FROM info WHERE unique_user=2");
     rs=st.executeQuery(sql); 
    rs.next();
    arr[8]=rs.getInt("Sm9");
    
    arrayS(arr);
    //Arrays.sort(arr);
    
//System.out.println(rs.getInt("Sm1"));
    
}
     
static void arrayS(int arr[])
{
    int p=-1,q=-1,r=-1,j=0;
    for(int i=0;i<9;i++)
    {
       
        int num=arr[i];
        if(num >r)
        {
        if(num >= q){
            r=q;
        }
        if(num >= p)
        {
            q=p;
            p=num;
        }
        else {
        q=num;
        }
        }else {
           r=num;
        }

}
 
//System.out.println(p+"-"+q+"-"+r); 
Fm1=search(arr,p);
Fm2=search(arr,q);
Fm3=search(arr,r);
//System.out.println(Fm2); 
}

static int search(int arr[],int x)
{
    int i;
   //System.out.println(x);
    for( i=0;i<9;i++)
    {
        
        if(arr[i]==x)
        {
            arr[i]=-1;
            break;
        }
    }
return i;
}

 }