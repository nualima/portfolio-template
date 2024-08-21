using HelpDesk01.Models;
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
    public partial class FormEquipementListe : Form
    {
        MySqlConnection con = new MySqlConnection("Server=sql11.freemysqlhosting.net;Database=sql11490529;Uid=sql11490529;Pwd=ULWkqf2Uvr;");
        //MySqlConnection con = new MySqlConnection("Server=127.0.0.1;Database=dbppe4gsbhd_20202022;Uid=root;");
        public FormEquipementListe()

        {

            InitializeComponent();

        }

        private void FormEquipementListe_Load(object sender, EventArgs e)
        {

        }

        private void btnRefresh_Click(object sender, EventArgs e)
        {

            DataAccess dataAccess = new DataAccess();
            List<GetEquipment> listEquipment = dataAccess.getEquipmentList();

            dataGridView1.DataSource = listEquipment;

        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }
    }

}
