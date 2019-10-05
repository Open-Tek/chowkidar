from django.http import HttpResponse
from django.shortcuts import render

# Create your views here.
from rest_framework import generics, viewsets


class DemoViewSet(viewsets.ViewSet):
    """
        A demo server for hackathon demonstration
        This view just starts 4 threads that stream 4 demo videos.
    """
    def index(self):
        return HttpResponse("Hello World")
