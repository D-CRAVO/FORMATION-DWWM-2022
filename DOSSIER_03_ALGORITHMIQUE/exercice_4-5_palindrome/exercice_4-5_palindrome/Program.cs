// VARIABLES

string phrase;

int compteur;

char[] tableau_phrase = new char[] { };

do
{
    Console.WriteLine("Veuillez saisir votre phrase : ");
    phrase = Console.ReadLine();
    tableau_phrase = phrase.ToCharArray();
} while ((tableau_phrase[phrase.Length - 1] != '.') && (phrase.Length <= 1));

for (compteur = 0; compteur < phrase.Length; compteur++)
{

}
