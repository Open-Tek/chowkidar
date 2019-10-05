"""
    Author : Gaurav-Punjabi
    Smoke Detection Service.
    A service that is used to detect smoke / fire in the given video.
    Basically we recognize the smoke by checking the intensity of the given color spaces.
    Then we train the model to detect the pixel patterns for smoke.
"""

import numpy as np
import cv2

vName = '../videos/CTC_FG.028_9.mpg'

cap = cv2.VideoCapture(vName)


def draw_detections(img, rects, thickness=1):
    for x, y, w, h in rects:
        pad_w, pad_h = int(0.15 * w), int(0.05 * h)
        cv2.rectangle(img, (x + pad_w, y + pad_h), (x + w - pad_w, y + h - pad_h), (0, 255, 0), thickness)


hog = cv2.HOGDescriptor()
hog.setSVMDetector(cv2.HOGDescriptor_getDefaultPeopleDetector())
while True:
    ret, frame = cap.read()
    if frame is None:
        print("No such frame fround！")
        break
    height, width, ret = frame.shape

    n = 1
    small_frame = cv2.resize(frame, (width / n, height / n), interpolation=cv2.INTER_CUBIC)

    found, w = hog.detectMultiScale(small_frame, winStride=(8, 8), padding=(8, 8), scale=1.05)
    draw_detections(small_frame, found, 3)

    print("found: {}".format(found))
    print('w: {}'.format(w))

    cv2.imshow("video", small_frame)

    k = cv2.waitKey(1) & 0xFF
    if k == 27:
        print("EXITING THE APPLICATION BRO.....")
        break
