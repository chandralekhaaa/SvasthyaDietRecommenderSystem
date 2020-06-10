import sys
import pandas as pd
import numpy as np
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.metrics.pairwise import cosine_similarity

def get_title_from_index(index):
	return df[df.index == index]["title"].values[0]

def get_index_from_title(title):
	return df[df.title == title]["index"].values[0]

df_breakfast = pd.read_csv("indian_breakfast.csv")
df_meals = pd.read_csv("indian_meals.csv")
df_snacks = pd.read_csv("indian_snacks.csv")


total_calorie = sys.argv[1]

