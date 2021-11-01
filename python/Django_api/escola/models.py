from django.db import models
from django.db.models.base import Model

# Create your models here.
class Aluno(models.Model):
    nome = models.CharField(max_length=80)
    rg = models.CharField(max_length=9)

    def __str__(self):
        return self.nome
 
class Funcionario(models.Model):

    nome = models.CharField(max_length=80, null=False, blank=False)
    sobrenome = models.CharField(max_length=80, null=False, blank=False)
    cpf = models.CharField(max_length=14, null=False, blank=False)
    tempo_de_servico = models.IntegerField(default=0, null=False, blank=False)
    remuneracao = models.DecimalField(max_digits=8, decimal_places=2, null=False, blank=False)

    def __str__(self):
        return f'{self.nome}, {self.sobrenome}'
    

    # objetos = models.Manager()