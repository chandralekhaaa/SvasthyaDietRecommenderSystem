# import firebase_admin
# from firebase_admin import credentials
# from firebase_admin import db

# cred = credentials.Certificate('./includes/svasthya-12892-firebase-adminsdk-me81o-73591b35fe.json')

# firebase_admin.initialize_app(cred, {
#     'databaseURL' : 'https://svasthya-12892.firebaseio.com/'
# })

import sys
try:
    import pandas as pd
except Exception as e:
    print(str(e))
import numpy as np
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.metrics.pairwise import cosine_similarity


def get_title_from_index(index):
	return df[df.index == index]["title"].values[0]

def get_index_from_title(title):
	return df[df.title == title]["index"].values[0]

# total_calorie = sys.argv[1]
# user_key = sys.argv[2]
# print(user_key)
# print(total_calorie)

df_breakfast = pd.read_csv("./plugins/indian_breakfast.csv")
#print(df_breakfast.head(5))
df_meals = pd.read_csv("./plugins/indian_meals.csv")
df_snacks = pd.read_csv("./plugins/indian_snacks.csv")




# ref = db.reference('profiledb/')
# user_ref = ref.child('saketha0005')
# print(user_ref.get())

