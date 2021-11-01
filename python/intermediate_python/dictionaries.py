# dicionarios são um conjunto de chave: valor, 
# não são ordenados e são mutavies
# são criados por {} => chaves

mydict = {"name":"Gabriel", "age":23, "city":"Sao jose dos campos"}
print(mydict)

# criando um dicionario por funcao
mydict2 = dict(name="Mario", age=33, city="Sao paulo")
print(mydict2)

# acessando os valoes, deve colocar o nome do atributo entre chaves e aspas
print(mydict2["name"]) # como uma array em php

# adicionando novos itens no dicionario
mydict2["email"] = "mario@email.com.br"
print(mydict2)

# deletando um item do dicionario
del mydict2['email']
print(mydict2)

mydict2.pop('age')
print(mydict2)

mydict2 = dict(name="Mario", age=33, city="Sao paulo")
item = mydict2.popitem() # remove o ultimo item do dicionario e retorna ele como uma tupla
print(mydict2)
print(item)

# verificando se tem um item no dicionario
mydict2 = dict(name="Mario", age=33, city="Sao paulo")

if 'name' in mydict2:
   print(mydict2['name'])

try:
   print(mydict2["lastname"])
except:
   print("don't have on the dict")

# percorrendo os valores do dicionario
mydict2 = dict(name="Mario", age=33, city="Sao paulo")

for key in mydict2.keys(): 
   print(key)

for values in mydict2.values():
   print(values)

for key, value in mydict2.items():
   print(key, value)

# copiando um dicionario
# as duas variaveis apontam para o mesmo dicionario na memoria
mydict2 = dict(name="Mario", age=33, city="Sao paulo")
dict_copy = mydict2.copy() # cria realmente uma copia na memoria 

print(dict_copy)
print(mydict2)

dict_copy["email"] = 'gabriel@email.com' # ambas as variaveis recebem a alteracao

print(dict_copy)
print(mydict2)

# atualizando um dicionario com as mesmas chaves mas com valores diferentes 
# os valores do dicionario que esta sendo atualizado serao sobreescritos somente se ambos do dicionario tiverem a mesma chave
dict_1 = {"name":"gabriel", "age":23, "email":"gabriel@email.com"}
dict_2 = dict(name="maria", age=22, city="Sao Paulo")

dict_1.update(dict_2) # atualizando os dados do dicionario 1 com os dados do dicionario 2

print(dict_1)
print(dict_2)

# tuplas podem ser chves em dicionarios mas listas nao
# podemos ter tambem chaves numericas mas cuidado com os indices 0 zeros

# teste 
mydict2 = dict(name="Mario", age=33, city="Sao paulo")
for key in mydict2:    
   print(mydict2[key])

print(mydict2)