using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace Ecommerce
{
    public partial class frm_vendas : Form
    {
        string tabela ="vendas";
        MySqlConnection objcon = new MySqlConnection("server=infotecserver.mysql.database.azure.com;User Id=treze@infotecserver;database=infotec;password=13Solutions");
        public frm_vendas()
        {
            InitializeComponent();
        }

        private void btnExibir_Click(object sender, EventArgs e)
        {
            ClasseDLL dll = new ClasseDLL();
            try
            {
                dataGridView.DataSource = dll.ExibirDadosDal(tabela);
            }
            catch
            {
                dataGridView.DataSource = dll.ExibirDadosDal(tabela);
            }
        }
        private void Exibir()
        {
            ClasseDLL dll = new ClasseDLL();
            try
            {
                dataGridView.DataSource = dll.ExibirDadosDal(tabela);
            }
            catch
            {

            }
        }

        private void frm_vendas_Load(object sender, EventArgs e)
        {
            Exibir();
        }
    }
}
