from urllib.request import Request, urlopen
import json

API_ID = '8aece2c7'
API_KEY = 'b3b2ee5e3269ed504c89af0df37671d4'


def recognize(image, gallery_name):
    global API_ID
    global API_KEY
    f = open("api/public/test_data/temp2.txt", "a")
    f.write(image)
    f.close()
    values = """
      {
        "image": "%s",
        "gallery_name": "%s"
      }
    """ % (image, gallery_name)
    headers = {
        'Content-Type': 'application/json',
        'app_id': API_ID,
        'app_key': API_KEY
    }

    request = Request('https://api.kairos.com/recognize', data=values.encode("utf-8"), headers=headers)

    response_body = urlopen(request).read()
    return response_body


def enroll(image, subject_id, gallery_name):
    global API_KEY
    global API_ID
    # values = '{ "image": "' + image + '", "subject_id": "' + subject_id + '" "gallery_name": "' + gallery_name + '"}'
    values = """
      {
        "image": "%s",
        "subject_id": "%s",
        "gallery_name": "%s"
      }
    """ % (image, subject_id, gallery_name)

    print("Jhatu values hai " + values)

    headers = {
        'Content-Type': 'application/json',
        'app_id': API_ID,
        'app_key': API_KEY
    }

    request = Request('https://api.kairos.com/enroll', data=values.encode("utf-8"), headers=headers)

    response = urlopen(request)
    response_body = response.read()
    if response.code == 200:
        print("SUCCESS : 200")
        response_json = json.loads(response_body)
        images = response_json["images"]
        # proceed only if the array is not empty
        if len(images) >= 1:
            if images[0]["transaction"]['status'] == "success":
                return 1
            print("The operation was not successfull")
            return 0
        return 1
    else:
        print("Exception : " + response_body)
        return 0

    return response_body
