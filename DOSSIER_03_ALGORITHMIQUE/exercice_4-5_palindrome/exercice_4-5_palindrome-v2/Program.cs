﻿// VARIABLES

string end;
string phrase;
int compteur;

char[] tableau_phrase = new char[] { };
string[] tableau_caractere_indesirable = new string[] { "@", ",", ".", ";", "'", " " };


// ASSIGNATIONS
end = "Traitement terminé";
compteur = 0;

// DEBUT PROGRAMME

// On vérifie d'abord que la phrase comporte au moins un caractère et est terminée par un point.
do
{
    Console.WriteLine("Veuillez saisir votre phrase avec au moins un caractère et terminée par un point : ");
    phrase = Console.ReadLine();
    tableau_phrase = phrase.ToCharArray();

    if (tableau_phrase.Length == 0)
    {
        tableau_phrase = " ".ToCharArray();
        Console.WriteLine("Votre phrase doit contenir au moins un caractère.");
    }
    else
    {
        if (tableau_phrase[0] == '.')
        {
            Console.WriteLine("Votre phrase doit contenir au moins un caractère.");
        }
        else if (tableau_phrase[tableau_phrase.Length - 1] != '.')
        {
            Console.WriteLine("Votre phrase doit se terminer par un point.");
        }
        else if (true)
        {

        }
        {
            if ()
            {
            }
        }
    }
} while ((tableau_phrase[tableau_phrase.Length - 1] != '.') || (tableau_phrase.Length < 2));

// On supprime les caractères indésirables.
foreach (var caractere_indesirable in tableau_caractere_indesirable)
{
    phrase = phrase.Replace(caractere_indesirable, string.Empty);
}

// On converti les majuscules en minuscules dans la phrase.
phrase = phrase.ToLower();
tableau_phrase = phrase.ToCharArray();

// On compare la première et la dernière lettre pour voir si elles sont identiques.
// Puis la deuxième et l'avant dernière et ainsi de suite jusqu'à arriver au milieu de la phrase.
do
{
    if (tableau_phrase[compteur] == tableau_phrase[tableau_phrase.Length - 1 - compteur])
    {
        end = "La phrase est un palindrome.";
    }
    else
    {
        end = "La phrase n'est pas un palindrome.";
    }
    compteur++;
} while (tableau_phrase[compteur] < tableau_phrase[tableau_phrase.Length - 1 - compteur]);

Console.WriteLine(end);