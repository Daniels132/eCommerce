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
    public partial class frm_clientes : Form
    {
        string tabela = "clientes";
        MySqlConnection objcon = new MySqlConnection("server=db4free.net;port=3306;User Id=ecommerceinfotec;database=infotec;password=RAfa2606");
        public frm_clientes()
        {
            InitializeComponent();
        }

        private void btnExcluir_Click(object sender, EventArgs e)
        {
            try
            {
                objcon.Open();
                MySqlCommand objcmd = new MySqlCommand("delete from clientes where id = ?", objcon);
                objcmd.Parameters.Clear();
                objcmd.Parameters.Add("@id", MySqlDbType.Int32).Value = txtId.Text;
                objcmd.CommandType = CommandType.Text;
                objcmd.ExecuteNonQuery();
                MessageBox.Show("Item excluido");
                objcon.Close();
            }
            catch (Exception erro)
            {
                MessageBox.Show("Não foi possivel excluir o item desejado" + erro);
            }
            Exibir();
            btnExcluir.Enabled = false;
        }
        private void frm_clientes_Load(object sender, EventArgs e)
        {
            Exibir();
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

        private void txtId_TextChanged(object sender, EventArgs e)
        {
            btnExcluir.Enabled = true;
        }

        private void groupBox1_Enter(object sender, EventArgs e)
        {

        }

        private void dataGridView_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }
    }
}
