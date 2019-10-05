# from api.chowkidar.services.image_auth import enroll, recognize

SOCIETY_GALLERY = "society"
STRANGERS_GALLERY = "strangers"

class Distinguisher:
    def __init__(self, society_id, camera_id):
        self.society_id = society_id
        self.camera_id = camera_id

    def distinguish(self, image):
        # result = recognize(image, SOCIETY_GALLERY)
        # print('Result : ' + result)
        pass


