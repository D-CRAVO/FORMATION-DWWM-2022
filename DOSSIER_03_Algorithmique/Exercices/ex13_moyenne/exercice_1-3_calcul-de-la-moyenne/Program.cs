using System;

namespace ex13_moyenne
{
    internal class Program
    {
        static void Main(string[] args)

        {
            Console.Write("Please enter the first number : ");
            float number1 = float.Parse(Console.ReadLine());
           
            Console.Write("Please enter the second number : ");
            float number2 = float.Parse(Console.ReadLine());
            
            float average = (number1 + number2) / 2;
            Console.WriteLine("The average of " + number1 + " and " + number2 + " is : " + average);
        }
    }
}
