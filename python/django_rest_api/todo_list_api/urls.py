from django.urls import path
from . import views

urlpatterns = [
    # path('', views.index, name='index'),
    # path('<int:todo_id>/update', views.update, name='update'),
    # path('create', views.create, name='create'),
    path('', views.apiOverview, name='api'),
    path('task-list/', views.taskList, name='api'),
    path('task-detail/<str:task_pk>', views.taskDetail, name='api')

]   