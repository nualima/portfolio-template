using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Text;

namespace HelpDesk01.Models
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

        public List<GetEquipment> getEquipmentList()
        {
            List<GetEquipment> result = new List<GetEquipment>();

            

            try
            {
                using (MySqlConnection connection = new MySqlConnection(builder.ConnectionString))
                {
                    Console.WriteLine("\nQuery data example:");
                    Console.WriteLine("=========================================\n");

                    connection.Open();

                    String sql = "SELECT * FROM tbequipement";

                    using (MySqlCommand command = new MySqlCommand(sql, connection))
                    {
                        using (MySqlDataReader reader = command.ExecuteReader())
                        {
                            while (reader.Read())
                            {

                                result.Add(
                                new GetEquipment
                                {
                                    SerialNumber = reader.GetInt32(0),
                                    Name = reader.GetString(1),
                                    User = reader.GetString(2)
                                });
                            }

                                Console.WriteLine("{0} {1}", reader.GetString(0), reader.GetString(1));

                            
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

            return result;
        }
    }
}
