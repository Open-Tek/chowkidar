# Program To Read video
# and Extract Frames
from base64 import b64encode

import cv2


# Function to extract frames
def frameCapture(path):
    # Path to video file
    vidObj = cv2.VideoCapture(path)
    # Used as counter variable
    count = 0
    # checks whether frames were extracted
    success = 1
    image_list = []
    while success:
        # vidObj object calls read
        # function extract frames
        success, image = vidObj.read()
        # Saves the frames with frame-count
        # from base64 import b64encode
        base64String = b64encode(image).decode("utf-8")
        image_list.append("data:image/jpeg;base64, " + base64String.decode('utf-8'))
        # return  image
        # cv2.imwrite("frames/frame%d.jpg" % count, image)
        count += 1
    return image_list


def cutVideo(path, startInSec, endInSec, targetName):
    from moviepy.video.io.ffmpeg_tools import ffmpeg_extract_subclip
    ffmpeg_extract_subclip(path, startInSec, endInSec, targetname=targetName)


def combineClips(lists):
        from moviepy.editor import VideoFileClip, concatenate_videoclips
        clipObject = []
        for list in lists:
                clipObject.append(VideoFileClip(list))
        finalClip = concatenate_videoclips(clipObject)
        # finalClip.write_videofile("concatinatedVideo.mp4")
        return finalClip

# combineClips(["videos/test.mp4","videos/cut.mp4"])
# DriverCode to run
# cutVideo("videos/test.mp4", 2, 7, "videos/cut.mp4")
# FrameCapture("videos/test.mp4")
