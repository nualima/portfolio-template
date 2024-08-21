using System;
using System.Data.SqlClient;
using System.Text;

namespace HelpDesk01.Forms
{

    public class DataAccess
    {

        SqlConnectionStringBuilder builder = new SqlConnectionStringBuilder();

        public DataAccess()
        {


            builder.DataSource = "sql11.freemysqlhosting.net";
            builder.UserID = "sql11490529";
            builder.Password = "ULWkqf2Uvr";
            builder.InitialCatalog = "sql11490529";

        }

        public void getEquipmentList()
        {
            {
                try
                {

                    using (SqlConnection connection = new SqlConnection(builder.ConnectionString))
                    {
                        Console.WriteLine("\nQuery data example:");
                        Console.WriteLine("=========================================\n");

                        connection.Open();

                        String sql = "SELECT * FROM tbEquipment";

                        using (SqlCommand command = new SqlCommand(sql, connection))
                        {
                            using (SqlDataReader reader = command.ExecuteReader())
                            {
                                while (reader.Read())
                                {
                                    Console.WriteLine("{0} {1}", reader.GetString(0), reader.GetString(1));
                                }
                            }
                        }
                    }
                }
                catch (SqlException e)
                {
                    Console.WriteLine(e.ToString());
                }
                Console.WriteLine("\nDone. Press enter.");
                Console.ReadLine();
            }
        }

    }
    