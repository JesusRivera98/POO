package CursoPOOUber.Java;

public class Car {
    Integer id;
    String license;
    Account driver;
    private Integer passengers;

    public Car(String license, Account driver) {
        this.license = license;
        this.driver = driver;
    }

    void printDataCar() {
        System.out.println("License: " + license + " Driver: " + driver.name + " Passengers: " + passengers);
    }

    public Integer getPassengers(){
        return passengers;
    }

    public void setPassengers(Integer passengers){
        this.passengers = passengers;
    }
}
