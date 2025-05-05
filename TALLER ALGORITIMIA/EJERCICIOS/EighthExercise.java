public class EighthExercise {
    public static void main(String[] args) {
        double horas = 45;
        double tasa = 10;
        
        double pago = horas <= 40 ? horas * tasa 
                      : 40 * tasa + (horas - 40) * tasa * 1.5;
        
        System.out.printf("Pago total: $%.2f", pago);
    }
}