preco_pastel = 8.00
preco_refrigerante = 5.00

qta_pasteis = input("Quantidade de pastéis comprados: ")
qta_refri = input("Quantidade de refigerante compreado: ")

total_pastel = float(qta_pasteis) * preco_pastel
total_refri = float(qta_refri) * preco_refrigerante
total_venda = total_pastel + total_refri

print(f"O total do seu pedido é R$ {total_venda}")