using System;
using System.Collections.Generic;
using System.Linq;
using System.IO;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace HelpDesk01
{
    static class Program
    {
        /// <summary>
        /// Point d'entrée principal de l'application.
        /// </summary>
        [STAThread]
        static void Main()
        {
            string sConnectionString = "";
            string sPath = Path.Combine(AppDomain.CurrentDomain.BaseDirectory, "config.txt");
            if (File.Exists(sPath) == true)
            {
                try
                {
                    sConnectionString = File.ReadAllLines(sPath)[0];
                }catch(Exception ex) {}

              
            }
            //Classes.Security.ConnectionString = sConnectionString;
            
            Application.EnableVisualStyles();
            Application.SetCompatibleTextRenderingDefault(false);
            Application.Run(new Forms.FormMain());
        }
    }
}
