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
    public partial class frm_produtos : Form
    {
        string tabela="produtos";
        MySqlConnection objcon = new MySqlConnection("server=db4free.net;port=3306;User Id=ecommerceinfotec;database=infotec;password=RAfa2606");
        public frm_produtos()
        {
            InitializeComponent();
        }

        private void frm_produtos_Load(object sender, EventArgs e)
        {
            Exibir();
        }

        private void btnSalvar_Click(object sender, EventArgs e)
        {
            try
            {
                objcon.Open();
                MySqlCommand objcmd = new MySqlCommand("insert into Produtos (id,nome,Fornecedor_id,preco_custo,preco_venda) values(null,?,?,?,?)", objcon);
                objcmd.Parameters.Add("@nome", MySqlDbType.Text).Value = txtNome.Text;
                objcmd.Parameters.Add("@Fornecedor_id", MySqlDbType.Int32).Value = txtIdFornecedor.Text;
                objcmd.Parameters.Add("@preco_custo", MySqlDbType.Text).Value = txtPrecoCusto.Text;
                objcmd.Parameters.Add("@preco_venda", MySqlDbType.Text).Value = txtPrecoVenda.Text;
                objcmd.ExecuteNonQuery();
                MessageBox.Show("Produto adicionado");
                objcon.Close();
            }
            catch (Exception erro)
            {
                MessageBox.Show("Não foi possível adicionar o produto\n" + erro);
            }
            btnSalvar.Enabled = false;
            Exibir();
            Limpar();
        }
        private void Limpar()
        {
            txtIdFornecedor.Clear();
            txtIdProduto.Clear();
            txtNome.Clear();
            txtPrecoCusto.Clear();
            txtPrecoVenda.Clear();
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

        private void txtNome_TextChanged(object sender, EventArgs e)
        {
            btnSalvar.Enabled = true;
        }

        private void txtIdFornecedor_TextChanged(object sender, EventArgs e)
        {
            btnSalvar.Enabled = true;
        }

        private void txtPrecoCusto_TextChanged(object sender, EventArgs e)
        {
            btnSalvar.Enabled = true;
        }

        private void txtPrecoVenda_TextChanged(object sender, EventArgs e)
        {
            btnSalvar.Enabled = true;
        }

        private void btnExcluir_Click(object sender, EventArgs e)
        {
            try
            {
                objcon.Open();
                MySqlCommand objcmd = new MySqlCommand("delete from Produtos where id = ?", objcon);
                objcmd.Parameters.Clear();
                objcmd.Parameters.Add("@id", MySqlDbType.Int32).Value = txtIdProduto.Text;
                objcmd.CommandType = CommandType.Text;
                objcmd.ExecuteNonQuery();
                MessageBox.Show("Item excluido");
                objcon.Close();
            }
            catch (Exception erro)
            {
                MessageBox.Show("Não foi possivel excluir o item desejado" + erro);
            }
            btnExcluir.Enabled = false;
            Exibir();
            Limpar();
        }

        private void txtIdProduto_TextChanged(object sender, EventArgs e)
        {
            btnExcluir.Enabled = true;
        }
    }
}
