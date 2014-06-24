import java.awt.*;
import java.sql.*;
import java.util.*;
import javax.swing.*;
import static javax.swing.JFrame.EXIT_ON_CLOSE;
import javax.swing.table.*;

public class History extends JFrame
{
  
    public static void main(String[] args) throws SQLException
    {
    
             ArrayList columnNames = new ArrayList();
        ArrayList data = new ArrayList();

       databaseQ db1=new databaseQ();
        ResultSet rs=db1.history();
        ResultSetMetaData md = rs.getMetaData();
         int columns = md.getColumnCount();

            for (int i = 1; i <= columns; i++)
            {
                columnNames.add( md.getColumnName(i) );
            }

           
            while (rs.next())
            {
                ArrayList row = new ArrayList(columns);

                for (int i = 1; i <= columns; i++)
                {
                    row.add( rs.getString(i) );
                }

                data.add( row );
            }
        
       
        Vector columnNamesVector = new Vector();
        Vector dataVector = new Vector();

        for (int i = 0; i < data.size(); i++)
        {
            ArrayList subArray = (ArrayList)data.get(i);
            Vector subVector = new Vector();
            for (int j = 0; j < subArray.size(); j++)
            {
                subVector.add(subArray.get(j));
            }
            dataVector.add(subVector);
        }

        for (int i = 0; i < columnNames.size(); i++ )
            columnNamesVector.add(columnNames.get(i));

        
        JTable table = new JTable(dataVector, columnNamesVector)
        {
            public Class getColumnClass(int column)
            {
                for (int row = 0; row < getRowCount(); row++)
                {
                    Object o = getValueAt(row, column);

                    if (o != null)
                    {
                        return o.getClass();
                    }
                }

                return Object.class;
            }
        };
JPanel p=new JPanel();
JScrollPane scrollPane = new JScrollPane( table );
p.add(scrollPane);
        
JFrame f=new JFrame();
f.add(p);

f.setSize(600,400);
f.setVisible(true);
       
    }
}