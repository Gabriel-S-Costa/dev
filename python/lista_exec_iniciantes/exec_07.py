valor_investido = float(input("Digite o valor que deseja investir: "))
ano = 5
i = 1

while i <= ano:
   valor_investido += (valor_investido * 6) / 100
   valor_investido = round(valor_investido, 2)
   print("Saldo após o {}º ano: R$ {} ".format(i, valor_investido))
   i+=1
