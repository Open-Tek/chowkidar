from django.urls import path

from api.chowkidar.views import DemoViewSet

urlpatterns = [
    path('demo/', DemoViewSet.index, name="index")
]