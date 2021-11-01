import math

meses_tratamento = int(input("Informe a quantidade de meses de tratamento: "))
qta_dias_uma_caixa = 20 / 1.6

qta_dias_tratamento = meses_tratamento * 30
qta_caixas = qta_dias_tratamento / qta_dias_uma_caixa

print("Você deve comprar {} caixas de remédio".format(math.ceil(qta_caixas)))
