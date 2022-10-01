using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace financier
{
    public class Banque
    {
        // Champs ou attributs
        private List<Compte> mesComptes = new List<Compte>();
        private int nbComptes;
        private string nom;
        private string ville;

        // Propriétés

        public List<Compte> MesComptes { get => mesComptes; }
        public int NbComptes { get => nbComptes; }
        public string Nom { get => nom; }
        public string Ville { get => ville; }


        // Constructeur
        public Banque(List<Compte> _mesComptes, int _nbComptes, string _nom, string _ville)
        {
            this.mesComptes = _mesComptes;
            this.nbComptes = _nbComptes;
            this.nom = _nom;  
            this.ville = _ville;
        }

        public Banque()
        {
            this.mesComptes = null;
            this.nbComptes = 0;
            this.nom = "sans_nom";
            this.ville = "sans_ville";
        }

        private void AjouterCompte(Compte _unCompte)
        {
            nbComptes++;
        }

        public void AjouterCompte(uint _numero, string _nom, int _solde, int _decouvertAutorise)
        {
            mesComptes.Add(new Compte(_numero, _nom, _solde, _decouvertAutorise));
        }

        public override string ToString()
        {
            return "La banque a pour nom : " + this.Nom + " Elle se situe à : " + this.Ville;
        }
    }
}
