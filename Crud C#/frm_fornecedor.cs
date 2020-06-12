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
    public partial class frm_fornecedor : Form
    { 
        string tabela = "fornecedor";
        MySqlConnection objcon = new MySqlConnection("server=infotecserver.mysql.database.azure.com;User Id=treze@infotecserver;database=infotec;password=13Solutions");
        public frm_fornecedor()
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
        private void Limpar()
        {
            txtCidade.Clear();
            txtEmail.Clear();
            txtEndereco.Clear();
            txtEstado.Clear();
            txtNome.Clear();
            mkdContrato.Clear();
            mkdTelefone.Clear();
        }
        private void btnSalvar_Click(object sender, EventArgs e)
        {
            try
            {
                objcon.Open();
                MySqlCommand objcmd = new MySqlCommand("insert into Fornecedor (id,nome,telefone,email,endereço,cidade,estado,numero_contrato) values(null,?,?,?,?,?,?,?)",objcon);
                objcmd.Parameters.Add("@nome",MySqlDbType.Text).Value=txtNome.Text;
                objcmd.Parameters.Add("@telefone", MySqlDbType.Text).Value = mkdTelefone.Text;
                objcmd.Parameters.Add("@email", MySqlDbType.Text).Value = txtEmail.Text;
                objcmd.Parameters.Add("@endereço", MySqlDbType.Text).Value =txtEndereco.Text;
                objcmd.Parameters.Add("@cidade", MySqlDbType.Text).Value = txtCidade.Text;
                objcmd.Parameters.Add("@estado", MySqlDbType.Text).Value = txtEstado.Text;
                objcmd.Parameters.Add("@numero_contrato", MySqlDbType.Text).Value = mkdContrato.Text;
                objcmd.ExecuteNonQuery();
                MessageBox.Show("Fornecedor adicionado");
                objcon.Close();
            }
            catch(Exception erro)
            {
                MessageBox.Show("Não foi possível adicionar o fornecedor\n"+erro);
            }
            Limpar();
            Exibir();
            btnSalvar.Enabled = false;
            txtNome.Focus();
        }

        private void frm_fornecedor_Load(object sender, EventArgs e)
        {
            Exibir();
            txtNome.Focus();
        }

        private void btnExcluir_Click(object sender, EventArgs e)
        {
            try
            {
                objcon.Open();
                MySqlCommand objcmd = new MySqlCommand("delete from Fornecedor where id = ?",objcon);
                objcmd.Parameters.Clear();
                objcmd.Parameters.Add("@id", MySqlDbType.Int32).Value =txtId.Text;
                objcmd.CommandType = CommandType.Text;
                objcmd.ExecuteNonQuery();
                MessageBox.Show("Item excluido");
                objcon.Close();
            }
            catch(Exception erro)
            {
                MessageBox.Show("Não foi possivel excluir o item desejado"+erro);
            }
            Exibir();
        }

        private void txtNome_TextChanged(object sender, EventArgs e)
        {
            btnSalvar.Enabled = true;
        }

        private void mkdTelefone_MaskInputRejected(object sender, MaskInputRejectedEventArgs e)
        {
            btnSalvar.Enabled = true;
        }

        private void txtEmail_TextChanged(object sender, EventArgs e)
        {
            btnSalvar.Enabled = true;
        }

        private void txtEndereco_TextChanged(object sender, EventArgs e)
        {
            btnSalvar.Enabled = true;
        }

        private void txtCidade_TextChanged(object sender, EventArgs e)
        {
            btnSalvar.Enabled = true;
        }

        private void txtEstado_TextChanged(object sender, EventArgs e)
        {
            btnSalvar.Enabled = true;
        }

        private void mkdContrato_MaskInputRejected(object sender, MaskInputRejectedEventArgs e)
        {
            btnSalvar.Enabled = true;
        }

        private void dataGridView_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            this.txtId.Text = dataGridView.Rows[dataGridView.CurrentRow.Index].Cells[0].Value.ToString();
            this.txtNome.Text = dataGridView.Rows[dataGridView.CurrentRow.Index].Cells[1].Value.ToString();
            this.mkdTelefone.Text = dataGridView.Rows[dataGridView.CurrentRow.Index].Cells[2].Value.ToString();
            this.txtEmail.Text = dataGridView.Rows[dataGridView.CurrentRow.Index].Cells[3].Value.ToString();
            this.txtEndereco.Text = dataGridView.Rows[dataGridView.CurrentRow.Index].Cells[4].Value.ToString();
            this.txtCidade.Text = dataGridView.Rows[dataGridView.CurrentRow.Index].Cells[5].Value.ToString();
            this.txtEstado.Text = dataGridView.Rows[dataGridView.CurrentRow.Index].Cells[6].Value.ToString();
            this.mkdContrato.Text = dataGridView.Rows[dataGridView.CurrentRow.Index].Cells[7].Value.ToString();
        }
    }
}