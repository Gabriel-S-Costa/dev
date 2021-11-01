temperatura_celcius = float(input("Digite a temperatura: "))

temperatura_fahrenheit = (temperatura_celcius * 1.8) + 32
temperatura_kelvin = (temperatura_celcius + 273.15)

print("{} Cº equivalem a {} Fº e {} Kelvin".format(temperatura_celcius, temperatura_fahrenheit, temperatura_kelvin))
