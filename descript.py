import os,sys




os.chdir("imgs/")

try:
	os.mkdir('desc')
except Exception as e:
	pass



categorias = ['romance', 'fantasia', 'terror', 'gospel', 'infantil']

for i in categorias:
	try:
		os.mkdir('desc/'+i)
	except Exception as e:
		pass


lista = os.listdir('.')

dire = list()

precos = list()

for i in lista:
	if os.path.isdir(i):
		dire.append(i)

# print(dire)

i = 178
j = 5
while i> 10:
	# print(i)
	i-=8
	j+=3
	aux='%d,%d'%(i,j)
	precos.append(aux)


# os.system("clear")
j = 1

cont = 0


# for i in categorias:
# 	files = os.listdir(i)
# 	for j in files:
# 		print(j)
# 		arq = open('desc/'+i+'/'+j+'.disc', 'w')
# 		aux = 'Nome: '+j[:len(j)-4]+'<br>Categoria:  '+i+'<br> Descrição: Este livro é um grande susseço de vendas, muito premiado, e autamente indicado.<br>Preço: '+precos[cont]
# 		arq.write(aux)

# 		cont+=1
# 	cont = 0

# 'Categoria:  '+i+'\n Descrição: Este livro é um grande susseço de vendas, muito premiado, e autamente indicado.\nPreço: '+precos[cont]
# 
print(precos)