from typing import TypeGuard
from django.db import models

class Task(models.Model):
      
    title = models.CharField(max_length=255)
    completed = models.BooleanField(default=False, blank=True, null=True)
    created_at = models.DateTimeField(null=False, blank=False)

    def __str__(self):
        return self.title

    