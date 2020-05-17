using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Ecommerce
{
    class ClasseFnc
    {
        int id,telefone,contrato;
        string nome, endereco, cidade, estado;

        public int Id
        {
            get { return id; }
            set{ id = value; }
        }
        public int Telefone
        {
            get { return telefone; }
            set { telefone = value; }
        }
        public int Contrato
        {
            get { return contrato; }
            set { contrato = value; }
        }
        public string Nome
        {
            get { return nome; }
            set { nome = value; }
        }
        public string Endereco
        {
            get { return endereco; }
            set { endereco = value; }
        }
        public string Cidade
        {
            get { return cidade; }
            set { cidade = value; }
        }
        public string Estado
        {
            get { return estado; }
            set { estado = value; }
        }
    }
}
