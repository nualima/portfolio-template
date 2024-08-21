using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace HelpDesk01.Forms
{
    public partial class FormMain : Form
    {
        public FormMain()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void listeToolStripMenuItem_Click(object sender, EventArgs e)
        {
            MySqlConnection con = new MySqlConnection("Server=sql11.freemysqlhosting.net;Database=sql11490529;Uid=sql11490529;Pwd=ULWkqf2Uvr;");

            try
            {
                con.Open();
                con.Close();

                FormEquipementListe formEquipementListe = new FormEquipementListe();
                formEquipementListe.Show();
            }
            catch(Exception fail)
            {
                System.Diagnostics.Debug.WriteLine(fail.Message);
            }
        }

        private void ticketToolStripMenuItem_Click(object sender, EventArgs e)
        {

        }

    }
}
