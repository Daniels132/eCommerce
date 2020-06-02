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
    public partial class frm_pedidos : Form
    {
        string tabela = "pedidos";
        MySqlConnection objcon = new MySqlConnection("server=db4free.net;port=3306;User Id=ecommerceinfotec;database=infotec;password=RAfa2606");
        public frm_pedidos()
        {
            InitializeComponent();
        }

        private void btnExcluir_Click(object sender, EventArgs e)
        {
            try
            {
                objcon.Open();
                MySqlCommand objcmd = new MySqlCommand("delete from pedidos where PedidoID = ?", objcon);
                objcmd.Parameters.Clear();
                objcmd.Parameters.Add("@PedidoID", MySqlDbType.Int32).Value = txtId.Text;
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
            Limpar();
            btnExcluir.Enabled = false;
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
        private void Limpar()
        {
            txtId.Clear();
            txtIdAlterar.Clear();
        }

        private void frm_pedidos_Load(object sender, EventArgs e)
        {
            Exibir();
        }

        private void btnAlterar_Click(object sender, EventArgs e)
        {
            try
            {
                objcon.Open();
                MySqlCommand objcmd = new MySqlCommand("update pedidos set status = ? where PedidoID = ?", objcon);
                objcmd.Parameters.Clear();
                objcmd.Parameters.Add("@status", MySqlDbType.Text).Value = cbbStatus.SelectedItem;
                objcmd.Parameters.Add("@PedidoID", MySqlDbType.Int32).Value = txtIdAlterar.Text;
                objcmd.ExecuteNonQuery();
                MessageBox.Show("status alterado");
                objcon.Close();
            }
            catch (Exception erro)
            {
                MessageBox.Show("Não foi possível alterar o status\n" + erro);
            }
            Limpar();
            Exibir();
        }

        private void txtId_TextChanged(object sender, EventArgs e)
        {
            btnExcluir.Enabled = true;
        }

        private void dataGridView_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            this.txtId.Text = dataGridView.Rows[dataGridView.CurrentRow.Index].Cells[0].Value.ToString();
            this.txtIdAlterar.Text = dataGridView.Rows[dataGridView.CurrentRow.Index].Cells[0].Value.ToString();
        }
    }
}
