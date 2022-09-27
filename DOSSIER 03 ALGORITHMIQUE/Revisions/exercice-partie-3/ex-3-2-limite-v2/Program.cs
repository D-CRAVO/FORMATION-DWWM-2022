// EXERCICE 3.2 CONTROLER LA SAISIE AVEC LIMITE

// VARIABLES

string mot_de_passe_enregistre = "formation";
string mot_de_passe_saisi;
bool mot_de_passe_correct;
byte nombre_essais = 3;

// DEBUT PROGRAMME

do
{
    Console.WriteLine("Veuillez saisir votre mot de passe : ");
    mot_de_passe_saisi = Console.ReadLine();

    mot_de_passe_correct = ( mot_de_passe_enregistre == mot_de_passe_enregistre );
    if (!mot_de_passe_correct)
    {
        nombre_essais--;
    }
} while (!mot_de_passe_correct && nombre_essais > 0);

if (!mot_de_passe_correct)
{
    Console.WriteLine("Compte bloqué !");
}
else
{
    Console.WriteLine("Vous êtes connecté !");
}