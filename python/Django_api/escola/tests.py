from django.test import TestCase

import unittest

# Create your tests here.
class TestingStringMethods(unittest.TestCase):

    def setUp(self):
        pass

    def tearDown(self):
        pass

    def test_upper(self):
        self.assertEqual('foo'.upper(), 'FOO')
    

    
