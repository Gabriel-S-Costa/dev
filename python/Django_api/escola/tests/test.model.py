from django.test import TestCase

import unittest

# create your tests here.

class TestModel(unittest.TestCase):

    def setUp(self)
        return super().setUp()

    def tearDown(self):
        return super().tearDown()
    
    def test_upper(self):
        self.assertEqual('foo'.upper(), 'FOO')