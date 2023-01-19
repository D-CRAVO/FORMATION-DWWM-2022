// VARIABLE

uint nombre;
bool ok = false;
do
{
    Console.WriteLine("Donnez moi un nombre");
    ok = uint.TryParse(Console.ReadLine(), out nombre);
    if (!ok)
    {
        Console.WriteLine("Le nombre saisi n'est pas correct");
    }
} while (!ok);