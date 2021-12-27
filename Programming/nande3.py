import os
import time
import webbrowser

cycles=100
num=5
delay=30
website = "https://tyrocity.com/article-hub/spreading-humanity-abhinandan-devkota/?fbclid=IwAR0EkSyw9Z2cERIiwrbGdm276RVmQrw_WGWidpEgkRccOyIkFSl1Y7c-HO0"

hits=cycles*num
print("You will access " +website+ " " , hits, " times")

for i in range(cycles):
    for i in range(num):
        webbrowser.open(website)
    time.sleep(delay)
    os.system("tskill /A iexplore")
    os.system("tskill /A Chrome")
