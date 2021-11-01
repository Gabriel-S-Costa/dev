from django.test import TestCase
from ..models import Task

import unittest

class testTaskModel(TestCase):

    def setUp(self):
        print("Set up")
        Task.objects.create(title="Estudar Git", completed=False, created_at='2021-11-01 13:27:00')
        Task.objects.create(title="Estudar Matemática", completed=False, created_at='2021-11-01 13:27:00')
    
    def test_
    # def test_task_detail_list(self):
        