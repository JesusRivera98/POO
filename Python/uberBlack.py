from car import Car

class UberBlack(Car):
    typeCarAccepted = []
    seatsMaterial   = []

    def __init__(self, license, driver, brand, model, typeCarAccepted, seatsMaterial):
        super.__init__(self, license, driver)
        self.typeCarAccepted = typeCarAccepted
        self.seatsMaterial = seatsMaterial