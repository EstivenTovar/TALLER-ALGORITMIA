public class NineExercise {  // Nombre corregido
    public static void main(String[] args) {
        int remainingAmount = 5000;
        int[] billDenominations = {100, 50, 20, 10, 5, 1};

        for (int denomination : billDenominations) {
            int billCount = remainingAmount / denomination;
            remainingAmount %= denomination;
            System.out.println("Bills of " + denomination + ": " + billCount + " COP");
        }
    }
}