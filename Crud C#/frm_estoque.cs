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
    public partial class frm_estoque : Form
    {
        string tabela = "estoque";
        MySqlConnection objcon = new MySqlConnection("server=db4free.net;port=3306;User Id=ecommerceinfotec;database=infotec;password=RAfa2606");
        public frm_estoque()
        {
            InitializeComponent();
        }

        private void frm_estoque_Load(object sender, EventArgs e)
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

        private void btnAdc_Click(object sender, EventArgs e)
        {
            try
            {
                objcon.Open();
                MySqlCommand objcmd = new MySqlCommand("insert into estoque (produto_id,quantidade) values(?,?)", objcon);
                objcmd.Parameters.Add("@produto_id", MySqlDbType.Int32).Value = txtIdAdd.Text;
                objcmd.Parameters.Add("@quantidade", MySqlDbType.Text).Value = txtQuantidade1.Text;
                objcmd.ExecuteNonQuery();
                MessageBox.Show("Estoque adicionado");
                objcon.Close();
            }
            catch(Exception erro)
            {
                MessageBox.Show("Não foi possivel adicionar esse produto ao estoque\n"+erro);
            }
            Limpar();
            Exibir();
            btnAdc.Enabled = false;
        }

        private void btnAdd_Click(object sender, EventArgs e)
        {
            try
            {
                objcon.Open();
                MySqlCommand objcmd = new MySqlCommand("update estoque set quantidade = ? where produto_id = ?", objcon);
                objcmd.Parameters.Clear();
                objcmd.Parameters.Add("@quantidade", MySqlDbType.Text).Value = txtQuantidade2.Text;
                objcmd.Parameters.Add("@produto_id", MySqlDbType.Int32).Value = txtIdAtl.Text;
                objcmd.ExecuteNonQuery();
                MessageBox.Show("Estoque alterado");
                objcon.Close();
            }
            catch(Exception erro)
            {
                MessageBox.Show("Não foi possível alterar o estoque\n"+erro);
            }
            Limpar();
            Exibir();
            btnAdd.Enabled = false;
        }
        private void Limpar()
        {
            txtIdAdd.Clear();
            txtIdAtl.Clear();
            txtQuantidade1.Clear();
            txtQuantidade2.Clear();
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

        private void txtIdAdd_TextChanged(object sender, EventArgs e)
        {
            btnAdc.Enabled = true;
        }

        private void txtQuantidade1_TextChanged(object sender, EventArgs e)
        {
            btnAdc.Enabled = true;
        }

        private void txtIdAtl_TextChanged(object sender, EventArgs e)
        {
            btnAdd.Enabled = true;
        }

        private void txtQuantidade2_TextChanged(object sender, EventArgs e)
        {
            btnAdd.Enabled = true;
        }

        private void dataGridView_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            this.txtIdAdd.Text = dataGridView.Rows[dataGridView.CurrentRow.Index].Cells[0].Value.ToString();
            this.txtIdAtl.Text = dataGridView.Rows[dataGridView.CurrentRow.Index].Cells[0].Value.ToString();
        }
    }
}
