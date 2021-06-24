package CursoPOOUber.Java;

class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo");
        Car car = new Car();
        car.license = "AMQ123";
        car.driver = "Andres Herrera";
        car.passengers = 4;
        //System.out.println("Car License: " + car.license);
        car.printDataCar();

        Car car2 = new Car();
        car2.license = "QWE567";
        car2.driver = "Andrea Herrera";
        car2.passengers = 3;
        //System.out.println("Car License: " + car2.license);
        car.printDataCar();

    }
}