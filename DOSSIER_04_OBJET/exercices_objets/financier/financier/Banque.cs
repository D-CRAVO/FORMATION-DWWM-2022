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
        private Compte[] mesComptes;
        private int nbComptes;
        private string nom;
        private string ville;

        // Propriétés

        public string Nom { get => nom; }
        public string Ville { get => ville; }


        // Constructeur
        public Banque(Compte[] _mesComptes, int _nbComptes, string _nom, string _ville)
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

        private void AjouteCompte(Compte _unCompte)
        {
            nbComptes++;
        }

        public void AjouteCompte(int _numero, string _nom, int _solde, int _decouvertAutorise)
        {

        }
    }
}
