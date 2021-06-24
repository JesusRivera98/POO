package CursoPOOUber.Java;

class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo");
        UberX uberX = new UberX("AMQ123", new Account("Andres Herrera", "AND123"), "Chevrolet", "Sonic");
        //uberX.passengers = 3;
        uberX.printDataCar();

        /*Car car2 = new Car("QWE567", new Account("Andrea Herrera", "AND567"));
        car2.passengers = 3;
        car.printDataCar();*/

    }
}