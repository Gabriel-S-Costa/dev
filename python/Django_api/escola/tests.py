from django.test import TestCase

import unittest

# create your tests here.

class TestingStringMethods(unittest.TestCase):

    @classmethod
    def setUpTestDate(cls):
        print("setUpTestData: Run once to set up non-modified data for all class methods.")
        pass

    def setUp(self):
        print("setUp: Run once for every test method to setup clean data.")
        pass

    def tearDown(self):
        pass

    def test_upper(self):
        print("test_upper: Verify if the str is upper")
        self.assertEqual('foo'.upper(), 'FOO')
    
    def test_false(self):
        self.assertFalse(False)
    
    def test_isEmpty(self):
        print("test_isEmpty: Verify if the str is equal")
        self.assertNotEqual('Banana', 'Banana')

