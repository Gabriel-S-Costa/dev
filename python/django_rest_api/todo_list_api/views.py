from django.http.response import HttpResponse, JsonResponse
from django.shortcuts import render
from rest_framework import serializers

from todo_list_api.models import Task
from rest_framework.decorators import api_view
from rest_framework.response import Response
from .serializers import TaskSerializer

from .models import Task

# Create your views here.

# def index(request):      
#       return HttpResponse("Hello world. You´re at the todoapp index")

# def update(request, todo_id):
#       return HttpResponse("You´re editing a todo %s." % todo_id)

# def create(request):      
#       return HttpResponse("You´re at the todoapp form")

@api_view(['GET'])
def apiOverview(request):
      api_urls = {
            'List':'/task-list/',
            'Detail view': '/task-detail/<str:pk>/',
            'Create':'/task-create/',
            'Update':'/task-update/<str:pk>',
            'Delete':'/task-delete/<str:pk>',
      }
      return Response(api_urls)

@api_view(['GET'])
def taskList(request):
      tasks = Task.objects.all()
      serializer = TaskSerializer(tasks, many=True) # serializa os dados da model, flag many indica se vai serialziar todos os dados ou somente um
      return Response(serializer.data)

@api_view(['GET'])
def taskDetail(request, task_pk):
      task = Task.objects.get(id=task_pk)      
      serializer = TaskSerializer(task, many=False)
      return Response(serializer.data)