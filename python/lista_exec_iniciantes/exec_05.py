salario_atual = input("Digite o valor de seu salário: ")

valor_aumento = float(salario_atual) * 5 / 100
salario_com_aumento = float(salario_atual) + valor_aumento
bonus_fim_de_ano = salario_com_aumento * 20 / 100
salario_anual = salario_com_aumento * 12 + bonus_fim_de_ano

print("O novo salário R$ {}".format(salario_com_aumento))
print("O seu bônus será de R$ {}".format(bonus_fim_de_ano))
print("Em 12 meses de trabalho você receberá R$ {} em salários e bônus.".format(salario_anual))

