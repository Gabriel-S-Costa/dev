qta_dias = int(input("Digite a quantidade de dias: "))
qta_horas = int(input("Digite a quantidade de horas: "))
qta_minutos = int(input("Digite a quantidade de minutos: "))

segundos_dia = qta_dias * (60 * 60) * 24
segundos_hora = qta_horas * 3600
segundos_minuto = qta_minutos * 60

total_segundos = segundos_dia + segundos_hora + segundos_minuto
print("Em {} dia(s), {} hora(s), {} minuto(s) temos {} segundo(s)".format(qta_dias, 
                                                                          qta_horas, 
                                                                          qta_minutos, 
                                                                          total_segundos))
