from asyncio.windows_events import NULL
import pandas as pd
import json
import sys, base64
import numpy as np

def loadEXCEL():
    respon = {}
    respon["df"] = pd.read_excel(f"{path}{filename}", header=None).replace(np.nan, "").values.tolist()
    respon["number_pages"] = 1
    try:
        respon["df2"] = pd.read_excel(f"{path}{filename}", sheet_name="Ведомость ур-я",header=None).replace(np.nan, "").values.tolist()
        respon["number_pages"] = 2
    except:
        pass
    
    return respon
    

def loadARG():
    return json.loads(base64.b64decode(sys.argv[1]))

path = 'C:/OpenServer/domains/miigaik/calculations/'
filename = loadARG()["link"]

print(json.dumps(loadEXCEL()))