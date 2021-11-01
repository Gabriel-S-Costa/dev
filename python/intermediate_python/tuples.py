# tuplas são uma colecao de dados mas elas
# são ordenadas e imutavies depois de sua criação
# são declaradas com () => parenteses (opcionais)
# tuplas devem conter mais de um item 

mytuple_str = ("gabriel") # pyhton não reconhece como tupla e sim como o tipo de dado, a não ser que tenha uma virgula (,) no final
print(type(mytuple_str)) # <class 'str'>

mytuple = ('gabriel',)
print(type(mytuple)) #<class 'tuple'>

mytuple1 = ('Gabriel', 23, 'Sjc')
print(mytuple1)

# criando tuplas atraves de listas
mytuple_by_list = tuple(['gabriel', 23, 'SJC'])
print(mytuple_by_list)

# acessando os valores 
item = mytuple_by_list[2]
print(item)

#percorrendo a tupla 
for i in mytuple_by_list:
   print(i)

# verificando se tem um item na tupla 
if 'gabriel' in mytuple_by_list: # case sensitive
   print("Have it!")
else:
   print("don't have it!")

# obtendo o tamanho da tupla 
tuple_f = ['a', 'p', 'p', 'l', 'e']
print(len(tuple_f))

# contanto quantos elementos repetidos tem na tupla, o numero de ocorrencias
print(tuple_f.count('p')) 

# retornando o index do valor 
print(tuple_f.index('l'))

# criando tuplas a partir da string
tuple_by_str = tuple('banana')
print(tuple_by_str)

# retirando um pedaço da tupla (igual a listas)
a = (1, 2, 3, 4, 5, 6, 7)
b = a[1:3] # os valores das posicoes especificadas nao entram no retorno
print(b)

# desconstrução da tupla
mytuple = "Gabriel", 23, "SJC"
name, age, city = mytuple # o numero de variaveis deve ser o mesmo que o numero de itens da tupla
print(name)

# descontruindo a tupla com numeros diferentes de variaveis em relação a quantidade de itens da tupla
tuple_n = (0,1,2,3,4) 
i1, *i2, i3 = tuple_n
print(i1)
print(i2)
print(i3)

# comparando listas com tuplas 
# por conta das tuplas serem imutaveis pyhton otimiza o usu delas em relação a listas

# a tupla ocupa menos espaço na memória que a lista 
import sys

my_list = [1, 2, 3, 'hello world', True]
my_tuple = (1, 2, 3, 'hello world', True)

print(sys.getsizeof(my_list), " bytes") 
print(sys.getsizeof(my_tuple), " bytes")

# tupla demora menos tempo para ser criada em memória do que a lista
import timeit

print(timeit.timeit(stmt="[1, 2, 3, 4, 5, 6]", number=1000000))
print(timeit.timeit(stmt="(1, 2, 3, 4, 5, 6)", number=1000000))