using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;
using System.Data;

namespace Ecommerce
{
    class ClasseDAL
    {
        string conectaBanco = "server=db4free.net;port=3306;User Id=ecommerceinfotec;database=infotec;password=RAfa2606";

        MySqlConnection conexao=null;
        MySqlCommand comando;

        public DataTable ExibirDados(string tabela)
        {
            try
            {
                conexao = new MySqlConnection(conectaBanco);
                if(tabela== "fornecedor")
                {
                    comando = new MySqlCommand("SELECT * FROM Fornecedor", conexao);
                }
                else if(tabela== "clientes")
                {
                    comando = new MySqlCommand("SELECT * FROM clientes",conexao);
                }
                else if(tabela == "estoque")
                {
                    comando = new MySqlCommand("SELECT * FROM estoque", conexao);
                }
                else if(tabela == "produtos")
                {
                    comando = new MySqlCommand("SELECT * FROM Produtos", conexao);
                }
                else if (tabela == "vendas")
                {
                    comando = new MySqlCommand("SELECT * FROM vendas", conexao);
                }
                else if (tabela == "pedidos")
                {
                    comando = new MySqlCommand("SELECT * FROM pedidos", conexao);
                }

                MySqlDataAdapter Da = new MySqlDataAdapter();
                Da.SelectCommand = comando;

                DataTable Dt = new DataTable();

                Da.Fill(Dt);

                return Dt;
            }
            catch(Exception erro) 
            {
                throw erro;
            }
        }
    }
}
