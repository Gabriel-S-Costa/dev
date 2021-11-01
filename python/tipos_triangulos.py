from _typeshed import Self


class Triangulo:

    lado_a = 0
    lado_b = 0
    lado_c = 0

    def __init__(self, lado_a, lado_b, lado_c):
        self.lado_a = lado_a
        self.lado_b = lado_b
        self.lado_c = lado_c

    def mostraLados(self):
        print(self.lado_a)
        print(self.lado_b)
        print(self.lado_c)


traingulo = Triangulo(1, 2, 3)
traingulo.mostraLados()


