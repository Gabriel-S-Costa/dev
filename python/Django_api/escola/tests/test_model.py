from django.test import TestCase
from escola.models import Funcionario

import unittest

# create your tests here.

class TestingStringMethods(unittest.TestCase):

    @classmethod
    def setUpTestDate(cls):
        Funcionario.objects.create(nome="Mark", sobrenome="Martins") # ORM do python para os dados da Model
        pass

    def test_field_name_label(self):
        funcionario = Funcionario.objects.get(id=1)
        field_label = funcionario._meta.get_field('nome').verbose_name
        self.assertEqual(field_label, 'nome')

    def test_object_name_is_last_name_comma_first_name(self):
        funcionario = Funcionario.objects.get(id=1)
        expect_object_name = f'{funcionario.nome}, {funcionario.sobrenome}'
        self.assertEqual(expect_object_name, str(funcionario))

    # def setUp(self):
    #     print("setUp: Run once for every test method to setup clean data.")
    #     pass

    # def tearDown(self):
    #     pass

    

