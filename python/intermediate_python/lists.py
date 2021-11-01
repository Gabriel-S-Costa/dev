# listas são conjunto de dados que podem ser ordenados ou não 
# e são mutavies depois de sua criação
# são declaradas com [] => colchetes

fruits = ['banana', 'orange', 'cherry', 'apple']

# percorre a lista
for fruit in fruits:
   print(fruit)

# verifica se a fruta está na lista
if 'banana' in fruits:
   print("Have it!")
else:
   print("Oh no dont't have")

# retorna o tamanho da lista
print(len(fruits)) 

# adiciona um novo item no final lista
fruits.append('pineapple')
print(fruits)

# adiciona um novo item em uma posicao na lista
fruits.insert(2, 'bluebarry')
print(fruits)

# remove um item no final da lista e retorna ele
item_removed = fruits.pop()
print(item_removed)

# remove um elemento especifico passando o valor
fruits.remove('orange')
print(fruits)

# inverte a ordem da lista
fruits.reverse()
print(fruits)

# ordena os valores da lista, mas sobreescreve os valores originais
fruits.sort()
print(fruits)

# ordena e cria uma nova variavel com a lista ordenada
new_list = sorted(fruits)
print(new_list)

# remove todos os itens da lista
fruits.clear()
print(fruits)

## outras operações com lista

# insere na lista o valor em cinco posicoes, ou quantas precisarem
mylist = [0] * 5
print(mylist)

# contaenacao de listas
mylist2 = [1, 2, 3, 4]
new_list = mylist + mylist2
print(new_list)

# retirando partes de uma lista
list2 = mylist2[1:3] # os valores das posicoes especificadas nao entram no retorno
print(list2)

# retorna os itens intereando de acordo com o valor
list2 = mylist2[::3] 
print(list2)

# ordena os valores da lista de forma decrescente
list3 = [1, 2, 3, 4]
list_desc = list3[::-1] # deve ter os pontos para funcionar se nao retorna o valor da ultima posicao
print(list_desc)

# copia uma lista 
mylist = ['apple', 'banana']

# CUIDADO ambas as variaveis fazer referencia a mesma lista na memoria se alterar a copia a original altera tambem 
mylist_copy = mylist 

# formas de resolver 
mylist_copy = mylist.copy()
# mylist_copy = list(mylist)
# mylist_copy = mylist[:]

mylist_copy.append('lemon')

print(mylist)
print(mylist_copy)

# criando uma lista de valores ao quadrado a partir do for 
mylist = [1,2,3,4,5,6]
mylist_sqrt = [i*i for i in mylist] 

print(mylist)
print(mylist_sqrt)