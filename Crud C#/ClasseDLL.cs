using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;

namespace Ecommerce
{
    class ClasseDLL
    {
        ClasseDAL dal = null;
        public DataTable ExibirDadosDal(string tabela)
        {
            try
            {
                DataTable DataT = new DataTable();
                dal = new ClasseDAL();

                DataT = dal.ExibirDados(tabela);
                return DataT;
            }
            catch(Exception erro)
            {
                throw erro;
            }
        }
    }
}
