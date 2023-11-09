import os
import re
import glob
import copy
fileList=glob.glob("*.*")

""" ln=[re.sub("[^a-zA-Z0-9\_\.]",'',string).strip() for string in fileList]
limpia=[string for string in ln if string]
for i in  range(len(fileList)):
    limpia[i]=limpia[i].replace("X2Download.com","")
    print(limpia[i]) """
limpia=fileList.copy()
for i in range(len(limpia)):
    limpia[i]=limpia[i].replace("X2Download.com","")
    limpia[i]=limpia[i].replace("-","")
    limpia[i]=limpia[i].replace("(","")
    limpia[i]=limpia[i].replace(")","")
    limpia[i]=limpia[i].replace("[","")
    limpia[i]=limpia[i].replace("]","")
    limpia[i]=limpia[i].replace("_","")
    limpia[i]=limpia[i].replace("🎵","")
    limpia[i]=limpia[i].replace(" 128 kbps","")
    limpia[i]=limpia[i].replace("[Official Video] ","")
    limpia[i]=limpia[i].replace("sub español","")
    limpia[i]=limpia[i].replace("español","")
    limpia[i]=limpia[i].replace("Sub español","")
    limpia[i]=limpia[i].replace("Lyrics","")
    limpia[i]=limpia[i].replace("Lyric","")
    limpia[i]=limpia[i].replace(" .mp3",".mp3")
    os.rename(fileList[i],limpia[i])