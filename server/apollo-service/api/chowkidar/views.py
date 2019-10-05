from django.http import HttpResponse
from django.shortcuts import render

# Create your views here.
from rest_framework import generics, viewsets

from api.chowkidar.services.audio.audio import frameCapture
from api.chowkidar.services.distinguisher import Distinguisher


# Image Processing Dependencies
import cv2

from api.chowkidar.services.image import read_image
from api.chowkidar.services.image_auth import recognize, enroll


class DemoViewSet(viewsets.ViewSet):
    """
        A demo server for hackathon demonstration
        This view just starts 4 threads that stream 4 demo videos.
    """
    def index(self):
        # images = frameCapture("api/public/test_data/test.mp4")
        # print(len(images))
        image = read_image("api/public/test_data/image.jpg")
        print(enroll(image, "harsh", "society"))
        return HttpResponse("Hello World")
