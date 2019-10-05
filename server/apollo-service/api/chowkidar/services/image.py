import base64


def read_image(path):
    with open(path, "rb") as image_file:
        encoded_string = base64.b64encode(image_file.read())

    f = open("api/public/test_data/temp.txt", "a")
    f.write("data:image/jpeg;base64, " + encoded_string.decode('utf-8'))
    f.close()
    return "data:image/jpeg;base64, " + encoded_string.decode('utf-8')
