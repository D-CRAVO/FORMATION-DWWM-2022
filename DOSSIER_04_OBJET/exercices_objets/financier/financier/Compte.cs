using System;

namespace financier
{
    public class Compte
    {
        // Champs ou attributs d'une classe.
        private uint numero;
        private string nom;
        private int solde;
        private int decouvert;

        // Propriétés
        public int Solde { get => solde; set => solde = value; }
        public int Decouvert { get => decouvert; set => decouvert = value; }
        public string Nom { get => nom; }
        public uint Numero { get => numero; }


            
        // Constructeur
        public Compte(uint _numero, string _nom, int _solde, int _decouvert)
        {
            this.numero = _numero;
            this.nom = _nom;
            this.Solde = _solde;
            this.Decouvert = _decouvert;
        }

        public Compte()
        {
            this.numero = 1;
            this.nom = "sans_nom";
            this.Solde = 0;
            this.Decouvert = 0;
        }

        public void Crediter(int _montant)
        {
            this.Solde += _montant;
        }

        public bool Debiter(int _montant)
        {
            bool ok = true;
            if (_montant < 0)
            {
                ok = false;
            } 
            else if ((this.Solde - _montant) < this.Decouvert) {
                ok = false;
            }
            else
            {
                this.Solde -= _montant;
            }
            return ok;
        }

        public override string ToString()
        {
            return "Le compte a pour numéro : " + this.Numero + " et pour proriétaire : " + this.Nom + " Il a pour solde : " + this.Solde + " et pour découvert autorisé : " + Math.Abs(this.Decouvert);

        }

        public bool Transferer(int _montant, Compte _compteDestinataire)
        {
            bool verif = false;  
            if (_montant > 0 && this.Debiter(_montant) == true)
            {
                this.Debiter(_montant);
                _compteDestinataire.Crediter(_montant);
                verif = true;
            }
            return verif;
            
        }

        public bool Superieur(Compte _autreCompte)
        {
            bool verif = false;
            if (this.Solde >_autreCompte.Solde)
            {
                verif = true;
            }
            return verif;
        }
    }


}
