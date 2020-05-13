using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Ecommerce
{
    public partial class frm_menu : Form
    {
        public frm_menu()
        {
            InitializeComponent();
        }

        private void clientesToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frm_fornecedor fornecedor = new frm_fornecedor();
            fornecedor.MdiParent = this;
            fornecedor.Show();
        }

        private void tssFornecedor_Click(object sender, EventArgs e)
        {
            frm_fornecedor fornecedor = new frm_fornecedor();
            fornecedor.MdiParent = this;
            fornecedor.Show();
        }

        private void clientesToolStripMenuItem_Click_1(object sender, EventArgs e)
        {
            frm_clientes clientes = new frm_clientes();
            clientes.MdiParent = this;
            clientes.Show();
        }

        private void estoqueToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frm_estoque estoque = new frm_estoque();
            estoque.MdiParent = this;
            estoque.Show();
        }

        private void produtosToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frm_produtos produtos = new frm_produtos();
            produtos.MdiParent = this;
            produtos.Show();
        }

        private void vendasToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frm_vendas vendas = new frm_vendas();
            vendas.MdiParent = this;
            vendas.Show();
        }

        private void frm_menu_Load(object sender, EventArgs e)
        {
            frm_vendas vendas = new frm_vendas();
            vendas.MdiParent = this;
            vendas.Show();
        }

        private void pedidosToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frm_pedidos pedidos = new frm_pedidos();
            pedidos.MdiParent = this;
            pedidos.Show();
        }
    }
}
