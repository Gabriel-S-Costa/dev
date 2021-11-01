from rest_framework import serializers
from .models import Task

# cria um objeto para serializar os dados da model
# nomeia a classe com o memso nome da model
class TaskSerializer(serializers.ModelSerializer):
    class Meta:
        model = Task
        fields = "__all__"
        
