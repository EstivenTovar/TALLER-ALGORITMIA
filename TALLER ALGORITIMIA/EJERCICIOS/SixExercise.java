public class SixExercise {
    public static void main(String[] args) {
        int x = 7;  // Binario: 0111
        int y = 4;  // Binario: 0100
        
        System.out.println("Antes: X = " + x + ", Y = " + y);
        
        // Intercambio con XOR
        x = x ^ y;
        y = x ^ y;
        x = x ^ y;
        
        System.out.println("Después: X = " + x + ", Y = " + y);
    }
}