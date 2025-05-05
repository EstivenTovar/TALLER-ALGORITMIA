import java.util.Scanner;
public class ConversorTemperatura {
    public static void main(String[] args) {
        Scanner scanner = new Scanner (System.in);

        System.out.print("Ingresa la temperatura en grados Celsius: ");
        float celsius = scanner.nextFloat();

        float fahrenheit = celsius * 9 / 5 + 32;
        System.out.println("La temperatura en Fahrenheit es: " + fahrenheit + " F°");

        scanner.close();
    }
}