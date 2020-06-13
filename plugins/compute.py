import sys
import pandas as pd
import numpy as np
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.metrics.pairwise import cosine_similarity


#def get_title_from_index(index):
#	return df[df.index == index]["title"].values[0]

#def get_index_from_title(title):
#	return df[df.title == title]["index"].values[0]

#bf_cal = sys.argv[1]
#lun_cal = sys.argv[2]
#din_cal = sys.argv[3]
sn_cal = 0
if(len(sys.argv)==5): sn_cal = sys.argv[4]

try:
    df_breakfast = pd.read_csv("indian_breakfast.csv")
    #print(df_breakfast.head(5))
    df_meals = pd.read_csv("indian_meals.csv")
    df_snacks = pd.read_csv("indian_snacks.csv")
    ref_meals_df = df_meals.filter(['s_no','name','carbs','protein','fat','total_cal','vn'])
    df_dinner = ref_meals_df.append(df_breakfast, ignore_index=True)
    #print(df_dinner)
except Exception as e:
    print("exc 1 -> ",str(e))